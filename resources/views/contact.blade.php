@extends('layouts.app')

@section('content')
<div class="pt-20">
    <!-- Hero Section -->
    <section class="relative py-20 lg:py-32 bg-gradient-to-br from-[#1E9BF0] to-[#9CA3AF] text-white overflow-hidden">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    {{ __('contact.page_title') }}
                </h1>
                <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto">
                    {{ __('contact.page_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">
                        Pulsuz <span class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] bg-clip-text text-transparent">Məsləhət</span> Alın
                    </h2>
                    <p class="text-lg text-gray-600 mb-8">
                        Layihənizlə bağlı suallarınızı bizə göndərin. Mütəxəssislərimiz ən qısa müddətdə sizinlə əlaqə saxlayacaq.
                    </p>

                    <form class="space-y-6" action="#" method="POST">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">Ad</label>
                                <input type="text" id="first_name" name="first_name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E9BF0] focus:border-transparent transition-all duration-200"
                                    placeholder="Adınız">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Soyad</label>
                                <input type="text" id="last_name" name="last_name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E9BF0] focus:border-transparent transition-all duration-200"
                                    placeholder="Soyadınız">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">E-mail</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E9BF0] focus:border-transparent transition-all duration-200"
                                placeholder="email@example.com">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Telefon</label>
                            <input type="tel" id="phone" name="phone" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E9BF0] focus:border-transparent transition-all duration-200"
                                placeholder="+994 50 123 45 67">
                        </div>

                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Xidmət Növü</label>
                            <select id="service" name="service" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E9BF0] focus:border-transparent transition-all duration-200">
                                <option value="">Xidmət seçin</option>
                                <option value="ev-tikintisi">Ev Tikintisi</option>
                                <option value="villa-tikintisi">Villa Tikintisi</option>
                                <option value="temir-isleri">Təmir İşləri</option>
                                <option value="dizayn-xidmetleri">Dizayn Xidmətləri</option>
                                <option value="layihe-hazirlama">Layihə Hazırlanması</option>
                                <option value="meslehet">Məsləhət Xidməti</option>
                                <option value="diger">Digər</option>
                            </select>
                        </div>

                        <div>
                            <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">Təxmini Büdcə</label>
                            <select id="budget" name="budget"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E9BF0] focus:border-transparent transition-all duration-200">
                                <option value="">Büdcə aralığı seçin (isteğe bağlı)</option>
                                <option value="10000-25000">10,000 - 25,000 AZN</option>
                                <option value="25000-50000">25,000 - 50,000 AZN</option>
                                <option value="50000-100000">50,000 - 100,000 AZN</option>
                                <option value="100000-250000">100,000 - 250,000 AZN</option>
                                <option value="250000+">250,000+ AZN</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Mesaj</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E9BF0] focus:border-transparent transition-all duration-200"
                                placeholder="Layihənizlə bağlı ətraflı məlumat verin..."></textarea>
                        </div>

                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="privacy" name="privacy" type="checkbox" required
                                    class="w-4 h-4 text-[#1E9BF0] bg-gray-100 border-gray-300 rounded focus:ring-[#1E9BF0] focus:ring-2">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="privacy" class="text-gray-600">
                                    <a href="/privacy-policy" class="text-[#1E9BF0] hover:underline">Məxfilik siyasəti</a> və 
                                    <a href="/terms-of-service" class="text-[#1E9BF0] hover:underline">istifadə şərtləri</a> ilə razıyam
                                </label>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] hover:from-[#0F7BC7] hover:to-[#6B7280] text-white font-semibold py-4 px-8 rounded-lg transition-all duration-300 transform hover:scale-105 flex items-center justify-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Mesaj Göndər
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">
                        Əlaqə <span class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] bg-clip-text text-transparent">Məlumatları</span>
                    </h2>

                    <div class="space-y-8 mb-12">
                        <!-- Address -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Ünvan</h3>
                                <p class="text-gray-600">
                                    Bakı şəhəri, Nəsimi rayonu<br>
                                    Azadlıq prospekti 123<br>
                                    AZ1000, Azərbaycan
                                </p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Telefon</h3>
                                <p class="text-gray-600">
                                    <a href="tel:+994501234567" class="hover:text-[#1E9BF0] transition-colors">+994 50 123 45 67</a><br>
                                    <a href="tel:+994551234567" class="hover:text-[#1E9BF0] transition-colors">+994 55 123 45 67</a><br>
                                    <a href="tel:+994701234567" class="hover:text-[#1E9BF0] transition-colors">+994 70 123 45 67</a>
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">E-mail</h3>
                                <p class="text-gray-600">
                                    <a href="mailto:info@celalogluinsaat.az" class="hover:text-[#1E9BF0] transition-colors">info@celalogluinsaat.az</a><br>
                                    <a href="mailto:layihe@celalogluinsaat.az" class="hover:text-[#1E9BF0] transition-colors">layihe@celalogluinsaat.az</a><br>
                                    <a href="mailto:satish@celalogluinsaat.az" class="hover:text-[#1E9BF0] transition-colors">satish@celalogluinsaat.az</a>
                                </p>
                            </div>
                        </div>

                        <!-- Working Hours -->
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">İş Saatları</h3>
                                <p class="text-gray-600">
                                    Bazar ertəsi - Cümə: 09:00 - 18:00<br>
                                    Şənbə: 09:00 - 14:00<br>
                                    Bazar: Bağlı
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Sosial Şəbəkələr</h3>
                        <div class="flex space-x-4">
                            <a href="https://facebook.com/celalogluinsaat" target="_blank" 
                               class="w-12 h-12 bg-[#1877F2] hover:bg-[#166FE5] rounded-lg flex items-center justify-center transition-colors duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="https://instagram.com/celalogluinsaat" target="_blank" 
                               class="w-12 h-12 bg-gradient-to-r from-[#E4405F] to-[#5B51D8] hover:from-[#D73447] hover:to-[#4C46C6] rounded-lg flex items-center justify-center transition-all duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a href="https://linkedin.com/company/celalogluinsaat" target="_blank" 
                               class="w-12 h-12 bg-[#0A66C2] hover:bg-[#004182] rounded-lg flex items-center justify-center transition-colors duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="https://youtube.com/@celalogluinsaat" target="_blank" 
                               class="w-12 h-12 bg-[#FF0000] hover:bg-[#CC0000] rounded-lg flex items-center justify-center transition-colors duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                            <a href="https://wa.me/994501234567" target="_blank" 
                               class="w-12 h-12 bg-[#25D366] hover:bg-[#1DA851] rounded-lg flex items-center justify-center transition-colors duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Bizim <span class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] bg-clip-text text-transparent">Yerləşməmiz</span>
                </h2>
                <p class="text-lg text-gray-600">
                    Ofisimizə gəlmək üçün aşağıdakı xəritədən istifadə edə bilərsiniz
                </p>
            </div>

            <!-- Map Placeholder -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                <div class="h-96 bg-gray-100 flex items-center justify-center relative">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Cəlaloğlu İnşaat</h3>
                        <p class="text-gray-600">Bakı şəhəri, Nəsimi rayonu, Azadlıq prospekti 123</p>
                        <a href="https://maps.google.com/?q=Baku,Azerbaijan" target="_blank" 
                           class="inline-flex items-center gap-2 mt-4 text-[#1E9BF0] hover:text-[#0F7BC7] font-semibold">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                            Google Maps-də Aç
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Tez-tez <span class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] bg-clip-text text-transparent">Soruşulan Suallar</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Müştərilərimizin ən çox maraqlandığı suallar və cavablar
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-gray-50 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Layihə müddəti necə müəyyən edilir?</h3>
                    <p class="text-gray-600">
                        Layihə müddəti tikinti sahəsi, işin mürəkkəbliyi və seçilən materiallardan asılıdır. 
                        Orta hesabla fərdi ev tikintisi 6-12 ay, villa tikintisi isə 8-18 ay çəkir. 
                        Dəqiq müddət layihənin təfərrüatları müəyyənləşdikdən sonra bildirilir.
                    </p>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-gray-50 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Zəmanət müddəti nə qədərdir?</h3>
                    <p class="text-gray-600">
                        Bütün tikinti işlərimiz üçün 5 il zəmanət veririk. Elektrik və santexnika işləri üçün 2 il, 
                        boya və dekorasiya işləri üçün 1 il zəmanət təqdim edirik. Zəmanət müddətində yaranan 
                        problemləri pulsuz həll edirik.
                    </p>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-gray-50 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Ödəniş şərtləri necədir?</h3>
                    <p class="text-gray-600">
                        Ödəniş mərhələli şəkildə həyata keçirilir: 30% avans, 40% işin yarısı tamamlandıqdan sonra, 
                        30% isə işin tam bitməsindən sonra. Nağd, bank köçürməsi və ya hissə-hissə ödəniş 
                        imkanları mövcuddur.
                    </p>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-gray-50 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Materialları siz təmin edirsiniz?</h3>
                    <p class="text-gray-600">
                        Bəli, bütün tikinti materiallarını biz təmin edirik. Yalnız keyfiyyətli və sertifikatlaşdırılmış 
                        materiallarla işləyirik. İstəyinizə görə müştəri tərəfindən təmin edilən materiallarla da 
                        işləyə bilərik.
                    </p>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-gray-50 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">Layihə dəyişikliyi mümkündür?</h3>
                    <p class="text-gray-600">
                        Tikinti prosesi zamanı kiçik dəyişikliklər mümkündür, lakin bu əlavə xərc tələb edə bilər. 
                        Böyük dəyişikliklər üçün yeni razılaşma və qiymət hesablaması aparılır. Bütün dəyişikliklər 
                        yazılı şəkildə təsdiqlənir.
                    </p>
                </div>

                <!-- FAQ Item 6 -->
                <div class="bg-gray-50 rounded-2xl p-6 hover:shadow-lg transition-all duration-300">
                    <h3 class="text-lg font-bold text-gray-900 mb-3">İcazə sənədlərini siz hazırlayırsınız?</h3>
                    <p class="text-gray-600">
                        Bəli, tikinti üçün lazım olan bütün icazə sənədlərinin hazırlanmasında sizə kömək edirik. 
                        Memarlıq layihəsi, konstruksiya hesablamaları və digər rəsmi sənədlərin alınmasını 
                        təmin edirik.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Layihənizi Başlamağa Hazırsınız?
            </h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Pulsuz məsləhət və qiymət təklifi üçün indi bizimlə əlaqə saxlayın
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+994501234567" class="bg-white text-[#1E9BF0] hover:bg-gray-100 font-semibold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center justify-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    İndi Zəng Et
                </a>
                <a href="https://wa.me/994501234567" target="_blank" class="bg-transparent border-2 border-white hover:bg-white hover:text-[#1E9BF0] font-semibold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 inline-flex items-center justify-center gap-3">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                    </svg>
                    WhatsApp Yaz
                </a>
            </div>
        </div>
    </section>
</div>
@endsection