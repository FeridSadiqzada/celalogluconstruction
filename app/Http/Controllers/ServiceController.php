<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Package;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::ordered()->get();
        $packages = Package::ordered()->get();
        
        return view('services.index', compact('services', 'packages'));
    }

    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }
}