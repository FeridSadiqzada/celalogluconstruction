@extends('layouts.app')

@section('content')
<div class="pt-20">
    <div class="relative page-services-strux" style="background-size: 280px 280px !important;">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-slate-300/40 to-transparent"></div>

        {{-- Başlıq --}}
        <section class="relative z-10 mx-auto max-w-7xl px-4 pb-6 pt-20 text-center sm:px-6 sm:pt-24 lg:px-8 lg:pt-28">
            <h1 class="services-title text-[3rem] font-extrabold leading-[1.08] tracking-[-0.02em] text-[#0f1c21] sm:text-[4rem] lg:text-[5rem]">
                {{ __('services.page_title') }}
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-base leading-relaxed text-gray-400 lg:text-lg">
                {{ __('services.page_subtitle') }}
            </p>
        </section>

        @php
            $serviceCards = [
                ['num' => '01', 'title' => __('services.construction'),      'desc' => __('services.construction_desc')],
                ['num' => '02', 'title' => __('services.renovation_works'),  'desc' => __('services.renovation_works_desc')],
                ['num' => '03', 'title' => __('services.mep_works'),         'desc' => __('services.mep_works_desc')],
                ['num' => '04', 'title' => __('services.project_design'),    'desc' => __('services.project_design_desc')],
                ['num' => '05', 'title' => __('services.interior_design'),   'desc' => __('services.interior_design_desc')],
                ['num' => '06', 'title' => __('services.consulting'),        'desc' => __('services.consulting_desc')],
            ];
        @endphp

        {{-- Xidmət kartları --}}
        <section class="relative z-10 mx-auto max-w-7xl px-4 pb-0 pt-12 sm:px-6 lg:px-8">
            <div class="services-grid">
                @foreach ($serviceCards as $i => $card)
                    <article class="service-card-strux group">
                        {{-- Nömrə --}}
                        <div class="service-num">{{ $card['num'] }}</div>

                        {{-- Məzmun --}}
                        <div class="flex flex-1 flex-col pt-10">
                            <h3 class="service-heading">{{ $card['title'] }}</h3>
                            <p class="service-desc">{{ $card['desc'] }}</p>
                        </div>

                        {{-- Düymə --}}
                        <div class="mt-10 pt-6 border-t border-gray-100">
                            <a href="{{ route('contact') }}" class="view-more-btn">
                                <span>{{ __('services.get_quote') }}</span>
                                <svg class="btn-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- Etibarlı tərəfdaşlar --}}
        <section class="relative z-10 border-t border-gray-200/70 bg-white/80 py-14 backdrop-blur-[2px] lg:py-16">
            <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
                <p class="partners-label">{{ __('home.partners_trust_label') }}</p>
                <div class="mt-9 grid grid-cols-2 gap-px overflow-hidden rounded-lg border border-gray-200/90 bg-gray-200 sm:grid-cols-3 lg:grid-cols-5">
                    @for ($i = 1; $i <= 5; $i++)
                        <div class="partner-cell">
                            {{-- Real loqolar əvəzinə placeholder --}}
                            <span class="text-sm font-semibold tracking-tight text-gray-400">Partner {{ $i }}</span>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
    </div>

    {{-- CTA zolağı --}}
    <section class="relative overflow-hidden border-t border-gray-200/90 bg-white py-20 lg:py-28">
        <div class="relative z-10 mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="cta-title">{{ __('services.cta_title') }}</h2>
            <p class="mx-auto mt-5 max-w-2xl text-base text-gray-500 lg:text-lg">{{ __('services.cta_subtitle') }}</p>
            <a href="{{ route('contact') }}" class="cta-btn">
                {{ __('services.contact_now') }}
                <span class="cta-btn-icon">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </span>
            </a>
        </div>
    </section>
</div>

<style>
/* ─── Tipografiya ────────────────────────────────────────────── */
.services-title {
    /* Böyük, qalın başlıq — STRUX-ə bənzər */
    letter-spacing: -0.03em;
}

/* ─── Xidmət kartları şəbəkəsi ──────────────────────────────── */
.services-grid {
    display: grid;
    gap: 20px;
    grid-template-columns: 1fr;
    border-left: 1px solid rgba(203, 213, 225, 0.6);
    border-top: 1px solid rgba(203, 213, 225, 0.6);
    padding-bottom: 20px;
}

@media (min-width: 640px) {
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .services-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* ─── Tək kart ───────────────────────────────────────────────── */
.service-card-strux {
    position: relative;
    display: flex;
    flex-direction: column;
    padding: 2.25rem 2rem 2rem;
    border-radius: 15px;
    background-color: #ffffff;
    border-right: 1px solid rgba(203, 213, 225, 0.6);
    border-bottom: 1px solid rgba(203, 213, 225, 0.6);
    transition: background-color 0.25s ease;
}

.service-card-strux:hover {
    background-color: #f8fafc;
}

/* ─── Nömrə badge ────────────────────────────────────────────── */
.service-num {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 2.5rem;
    height: 2.5rem;
    border-radius: 9999px;
    background-color: #f0f4f8;
    border: 1px solid rgba(148, 163, 184, 0.4);
    font-size: 0.8125rem;
    font-weight: 700;
    color: #0f1c21;
    font-variant-numeric: tabular-nums;
    line-height: 1;
    flex-shrink: 0;
}

/* ─── Başlıq ─────────────────────────────────────────────────── */
.service-heading {
    font-size: 1.375rem;
    font-weight: 800;
    line-height: 1.25;
    letter-spacing: -0.015em;
    color: #0f1c21;
    margin-top: 1.25rem;
    /* İlk xidmət başlığı teal rəngdə (screenshot 2-dəki kimi) */
}

/* İlk kart başlığını teal et (screenshot-dakı "Interior design" kimi) */
.service-card-strux:first-child .service-heading {
    color: #076b75;
}

/* ─── Təsvir ─────────────────────────────────────────────────── */
.service-desc {
    margin-top: 0.75rem;
    flex: 1;
    font-size: 0.9375rem;
    line-height: 1.65;
    color: #6b7280;
}

/* ─── VIEW MORE düyməsi ──────────────────────────────────────── */
.view-more-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    border-radius: 9999px;           /* tam yuvarlaq — STRUX stili */
    background-color: #002b36;
    padding: 0.75rem 1.35rem;
    font-size: 0.6875rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #ffffff;
    text-decoration: none;
    transition: background-color 0.25s ease, transform 0.2s ease;
}

.view-more-btn:hover {
    background-color: #063542;
    transform: translateY(-1px);
}

.btn-arrow {
    width: 1rem;
    height: 1rem;
    flex-shrink: 0;
    transition: transform 0.25s ease;
}

.view-more-btn:hover .btn-arrow {
    transform: translateX(3px);
}

/* ─── Tərəfdaşlar ────────────────────────────────────────────── */
.partners-label {
    font-size: 0.6875rem;
    font-weight: 600;
    letter-spacing: 0.35em;
    text-transform: uppercase;
    color: #9ca3af;
}

.partner-cell {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 5.25rem;
    background-color: #ffffff;
    padding: 0 0.75rem;
    transition: background-color 0.2s ease;
}

.partner-cell:hover {
    background-color: #f8fafc;
}
</style>
@endsection