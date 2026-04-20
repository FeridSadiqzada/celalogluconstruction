@extends('layouts.app')

@section('content')
<script>document.documentElement.classList.add('anim-home');</script>
<div class="bg-[#fafbfc]">
    {{-- Hero --}}
    <section class= "hero relative min-h-[42svh] lg:min-h-[46svh] hero-deep-teal text-white overflow-hidden pt-24 md:pt-28 pb-16 lg:pb-20">
        <div class="pointer-events-none absolute inset-0 hero-x-watermark"></div>
        <div class="pointer-events-none absolute -right-24 top-1/4 h-[440px] w-[440px] rounded-full bg-teal-400/10 blur-3xl"></div>
        <div class="pointer-events-none absolute -left-28 bottom-0 h-[340px] w-[340px] rounded-full bg-cyan-300/5 blur-3xl"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center js-reveal">
                <h1 class="text-4xl sm:text-5xl lg:text-[3.25rem] font-extrabold leading-[1.08] tracking-tight text-balance">
                    {{ __('contact.page_title') }}
                </h1>
                <p class="mt-6 text-base sm:text-lg text-white/85 leading-relaxed max-w-2xl mx-auto">
                    {{ __('contact.page_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    {{-- Əlaqə məlumatı + xəritə --}}
    <section class="relative overflow-hidden py-20 lg:py-28 bg-gradient-to-b from-white via-white to-[#f4f7f8]">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-[#08333e]/15 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-14 lg:mb-16 js-reveal">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#0a1f2c] leading-[1.12]">
                        {{ __('contact.contact_information') }}
                    </h2>
                    <p class="mt-5 text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                        {{ __('contact.contact_info_subtitle') }}
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-12 lg:gap-16">
                    {{-- Sol sütun --}}
                    <div class="space-y-9 js-reveal js-reveal-delay-1">
                        {{-- Ünvan --}}
                        <div class="flex gap-4">
                            <div class="h-max-content inline-flex h-max w-max shrink-0 items-center justify-center rounded-xl bg-[#08333e] p-3 text-white">
                                <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div class="min-w-0 pt-0.5">
                                <h3 class="text-lg font-semibold text-[#0a1f2c] mb-2">{{ __('contact.address') }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Luxen Plaza<br>
                                    Bakı şəhəri, Nəsimi rayonu<br>
                                    AZ1000, Azərbaycan
                                </p>
                            </div>
                        </div>

                        {{-- Telefon --}}
                        <div class="flex gap-4">
                            <div class="h-max-content inline-flex h-max w-max shrink-0 items-center justify-center rounded-xl bg-[#08333e] p-3 text-white">
                                <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div class="min-w-0 pt-0.5">
                                <h3 class="text-lg font-semibold text-[#0a1f2c] mb-2">{{ __('contact.phone_label') }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    <a href="tel:+994501234567" class="text-[#08333e] hover:text-[#0a1f2c] underline-offset-2 hover:underline transition-colors">+994 50 123 45 67</a><br>
                                    <a href="tel:+994551234567" class="text-[#08333e] hover:text-[#0a1f2c] underline-offset-2 hover:underline transition-colors">+994 55 123 45 67</a><br>
                                    <a href="tel:+994701234567" class="text-[#08333e] hover:text-[#0a1f2c] underline-offset-2 hover:underline transition-colors">+994 70 123 45 67</a>
                                </p>
                            </div>
                        </div>

                        {{-- E-poçt --}}
                        <div class="flex gap-4">
                            <div class="h-max-content inline-flex h-max w-max shrink-0 items-center justify-center rounded-xl bg-[#08333e] p-3 text-white">
                                <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="min-w-0 pt-0.5">
                                <h3 class="text-lg font-semibold text-[#0a1f2c] mb-2">{{ __('contact.email_label') }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    <a href="mailto:info@celalogluinsaat.az" class="text-[#08333e] hover:text-[#0a1f2c] underline-offset-2 hover:underline transition-colors break-all">info@celalogluinsaat.az</a><br>
                                    <a href="mailto:layihe@celalogluinsaat.az" class="text-[#08333e] hover:text-[#0a1f2c] underline-offset-2 hover:underline transition-colors break-all">layihe@celalogluinsaat.az</a><br>
                                    <a href="mailto:satish@celalogluinsaat.az" class="text-[#08333e] hover:text-[#0a1f2c] underline-offset-2 hover:underline transition-colors break-all">satish@celalogluinsaat.az</a>
                                </p>
                            </div>
                        </div>

                        {{-- İş saatları --}}
                        <div class="flex gap-4">
                            <div class="h-max-content inline-flex h-max w-max shrink-0 items-center justify-center rounded-xl bg-[#08333e] p-3 text-white">
                                <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="min-w-0 pt-0.5">
                                <h3 class="text-lg font-semibold text-[#0a1f2c] mb-2">{{ __('contact.working_hours_label') }}</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ __('contact.working_hours_weekdays') }}<br>
                                    {{ __('contact.working_hours_saturday') }}<br>
                                    {{ __('contact.working_hours_sunday') }}
                                </p>
                            </div>
                        </div>

                        {{-- Sosial şəbəkələr --}}
                        <div>
                            <h3 class="text-lg font-semibold text-[#0a1f2c] mb-4">{{ __('contact.social_networks') }}</h3>
                            <div class="flex flex-wrap gap-3">
                                <a href="https://instagram.com/calaloglu_inshaat" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-[#E4405F] to-[#5B51D8] text-white shadow-md ring-1 ring-black/10 transition hover:scale-105 hover:shadow-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.40s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </a>
                                <a href="https://www.tiktok.com/@celaloglu.construction" target="_blank" rel="noopener noreferrer"
                                   class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-neutral-900 text-white shadow-md ring-1 ring-black/10 transition hover:bg-neutral-800 hover:scale-105 hover:shadow-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Xəritə --}}
                    <div class="js-reveal js-reveal-delay-2">
                        <h3 class="text-lg font-semibold text-[#0a1f2c] mb-4">{{ __('contact.our_location_label') }}</h3>
                        <div class="overflow-hidden rounded-2xl bg-white shadow-xl shadow-black/[0.06] ring-1 ring-black/[0.06]">
                            <iframe
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Luxen%20Plaza,%20Baku,%20Azerbaijan&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                                width="100%"
                                height="600"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                title="{{ __('contact.our_location_label') }}"
                                class="w-full h-[min(520px,70vh)] md:h-[560px]">
                            </iframe>
                        </div>
                        <div class="mt-5 text-center sm:text-left">
                            <a href="https://maps.google.com/?q=Luxen+Plaza,Baku,Azerbaijan" target="_blank" rel="noopener noreferrer"
                               class="inline-flex items-center gap-2 text-sm font-semibold text-[#08333e] transition hover:text-[#0a1f2c]">
                                <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                                {{ __('contact.google_maps_view') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="relative border-t border-gray-100/80 py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 lg:mb-16 js-reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#0a1f2c] leading-[1.12]">
                    {{ __('contact.faq_title') }}
                </h2>
                <p class="mt-5 text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    {{ __('contact.faq_subtitle') }}
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                @foreach (range(1, 6) as $fi)
                    <div class="rounded-2xl border border-gray-100 bg-[#fafbfc] p-6 lg:p-7 ring-1 ring-black/[0.04] shadow-sm transition duration-300 hover:bg-white hover:shadow-lg hover:shadow-black/[0.06] js-reveal js-reveal-delay-{{ min($fi, 5) }}">
                        <h3 class="text-lg font-bold text-[#0a1f2c] mb-3">{{ __('contact.faq_q'.$fi) }}</h3>
                        <p class="text-gray-600 leading-relaxed">
                            {{ __('contact.faq_a'.$fi) }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative overflow-hidden py-16 lg:py-24 bg-[#0a1f2c] text-white">
        <div class="pointer-events-none absolute -right-20 top-1/2 h-72 w-72 -translate-y-1/2 rounded-full bg-[#08333e]/40 blur-3xl"></div>
        <div class="pointer-events-none absolute -left-16 bottom-0 h-56 w-56 rounded-full bg-teal-400/10 blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center js-reveal">
            <h2 class="text-3xl md:text-[2.35rem] font-extrabold tracking-tight leading-tight">{{ __('contact.cta_title') }}</h2>
            <p class="mx-auto mt-5 max-w-2xl text-lg text-white/75 leading-relaxed">{{ __('contact.cta_subtitle') }}</p>
            <div class="mt-11 flex flex-col sm:flex-row flex-wrap items-stretch sm:items-center justify-center gap-4">
                <a href="tel:+994501234567"
                   class="cta-shimmer-hover inline-flex items-center justify-center gap-3 rounded-full bg-white pl-8 pr-2 py-2 text-sm font-semibold uppercase tracking-wide text-[#0a1f2c] shadow-xl shadow-black/20 ring-1 ring-white/10 transition hover:-translate-y-1 hover:shadow-2xl">
                    {{ __('contact.call_now') }}
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#0a1f2c] text-white">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    </span>
                </a>
                <a href="https://wa.me/994501234567" target="_blank" rel="noopener noreferrer"
                   class="group inline-flex items-center justify-center gap-3 rounded-full border border-white/35 bg-white/10 px-8 py-3.5 text-sm font-semibold uppercase tracking-wide text-white backdrop-blur-md transition hover:border-white/55 hover:bg-white/15 hover:-translate-y-0.5">
                    <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                    </svg>
                    {{ __('contact.whatsapp_message') }}
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-white text-[#0a1f2c] transition group-hover:translate-x-0.5">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </a>
            </div>
        </div>
    </section>
</div>
<style>
    .h-max-content {
        height: max-content;
    }
    .hero{
        margin-top: 80px;
    }
</style>

<script>
(function () {
    var reduceMotion = typeof window.matchMedia === 'function' &&
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    document.querySelectorAll('.js-reveal').forEach(function (el) {
        if (reduceMotion) {
            el.classList.add('is-inview');
            return;
        }
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (!e.isIntersecting) return;
                e.target.classList.add('is-inview');
                io.unobserve(e.target);
            });
        }, { root: null, rootMargin: '0px 0px -6% 0px', threshold: 0.08 });
        io.observe(el);
    });
})();
</script>
@endsection
