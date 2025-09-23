<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        
        return view('contact', compact('settings'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'message' => 'required|string|max:2000',
            'honeypot' => 'nullable|max:0', // Honeypot field should be empty
        ], [
            'name.required' => 'Ad sahəsi mütləqdir',
            'phone.required' => 'Telefon sahəsi mütləqdir',
            'email.email' => 'Düzgün email ünvanı daxil edin',
            'message.required' => 'Mesaj sahəsi mütləqdir',
            'message.max' => 'Mesaj çox uzundur',
        ]);

        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Məlumatları düzgün doldurduğunuzdan əmin olun',
                    'errors' => $validator->errors()
                ], 422);
            }
            
            return back()->withErrors($validator)->withInput();
        }

        // Check honeypot
        if ($request->filled('honeypot')) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Spam müdafiəsi işə düşdü'
                ], 422);
            }
            
            return back()->with('error', 'Spam müdafiəsi işə düşdü');
        }

        // Rate limiting check (simple implementation)
        $recentInquiries = Inquiry::where('phone', $request->phone)
            ->where('created_at', '>', now()->subMinutes(5))
            ->count();

        if ($recentInquiries >= 2) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Çox tez-tez müraciət edirsiz. Zəhmət olmasa bir az gözləyin.'
                ], 429);
            }
            
            return back()->with('error', 'Çox tez-tez müraciət edirsiz. Zəhmət olmasa bir az gözləyin.');
        }

        // Create inquiry
        $inquiry = Inquiry::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'page' => $request->get('package') ? 'package:' . $request->get('package') : 'contact',
            'status' => Inquiry::STATUS_NEW,
        ]);

        // Send email notification
        try {
            $settings = Setting::first();
            $adminEmail = $settings?->email ?? config('mail.from.address');
            
            if ($adminEmail) {
                Mail::send('emails.inquiry', compact('inquiry'), function ($message) use ($adminEmail, $inquiry) {
                    $message->to($adminEmail)
                        ->subject('Yeni Müraciət - ' . $inquiry->name)
                        ->replyTo($inquiry->email ?: 'noreply@' . request()->getHost());
                });
            }
        } catch (\Exception $e) {
            // Log error but don't fail the request
            \Log::error('Failed to send inquiry email: ' . $e->getMessage());
        }

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Müraciətiniz uğurla göndərildi. Tezliklə sizinlə əlaqə saxlayacağıq.'
            ]);
        }

        return back()->with('success', 'Müraciətiniz uğurla göndərildi. Tezliklə sizinlə əlaqə saxlayacağıq.');
    }
}