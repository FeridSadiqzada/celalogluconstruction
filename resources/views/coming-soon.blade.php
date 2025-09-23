@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-white flex items-center justify-center py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Construction Icon -->
        <div class="mb-8">
            <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-full mb-6 animate-pulse">
                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                </svg>
            </div>
        </div>

        <!-- Main Content -->
        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
            <span class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] bg-clip-text text-transparent">
                {{ $pageTitle ?? 'Bu Səhifə' }}
            </span>
            <br>
            Hazırlanır
        </h1>
        
        <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
            Səhifə hələ hazır deyil.
        </p>

        <!-- Progress Bar -->
        <div class="mb-12">
            <div class="bg-gray-200 rounded-full h-3 max-w-md mx-auto overflow-hidden">
                <div class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] h-full rounded-full animate-pulse" style="width: 35%"></div>
            </div>
            <p class="text-sm text-gray-500 mt-3">İş gedişi: 35% tamamlandı</p>
        </div>

        <!-- Features Coming Soon -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Sürətli Yüklənmə</h3>
                <p class="text-gray-600 text-sm">Optimizasiya edilmiş performans</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Mobil Uyğun</h3>
                <p class="text-gray-600 text-sm">Bütün cihazlarda mükəmməl görünüm</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300">
                <div class="w-12 h-12 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Keyfiyyətli Məzmun</h3>
                <p class="text-gray-600 text-sm">Detallı məlumatlar və şəkillər</p>
            </div>
        </div>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('home') }}" class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] hover:from-[#0F7BC7] hover:to-[#6B7280] text-white font-semibold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Ana Səhifəyə Qayıt
            </a>
            <a href="/elaqe" class="bg-transparent border-2 border-[#1E9BF0] text-[#1E9BF0] hover:bg-[#1E9BF0] hover:text-white font-semibold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center gap-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                Bizimlə Əlaqə
            </a>
        </div>
</div>
@endsection