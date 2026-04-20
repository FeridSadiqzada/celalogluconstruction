@extends('layouts.app')

@section('content')
<script>document.documentElement.classList.add('anim-home');</script>
<div class="bg-[#fafbfc]">
    {{-- Hero — dərin teal, iki sütun, thumb sırası --}}
    <section id="hero" class="relative min-h-[100svh] hero-deep-teal text-white overflow-hidden pt-24 md:pt-28 pb-16 md:pb-20">
        <div class="pointer-events-none absolute inset-0 hero-x-watermark"></div>
        <div class="pointer-events-none absolute -right-24 top-1/4 h-[520px] w-[520px] rounded-full bg-teal-400/10 blur-3xl"></div>
        <div class="pointer-events-none absolute -left-32 bottom-0 h-[420px] w-[420px] rounded-full bg-cyan-300/5 blur-3xl"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                <div class="lg:col-span-6 space-y-8">
                    <div class="space-y-6">
                        <h1 class="hero-animate-in text-4xl sm:text-5xl lg:text-[3.25rem] xl:text-[3.5rem] font-extrabold leading-[1.08] tracking-tight text-balance">
                            {{ __('home.hero_headline') }}
                        </h1>
                        <p class="hero-animate-in hero-delay-1 text-base sm:text-lg text-white/85 max-w-xl leading-relaxed">
                            {{ __('home.hero_body') }}
                </p>
            </div>

                    <div class="hero-animate-in hero-delay-2 flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}"
                           class="group inline-flex items-center gap-3 rounded-full bg-white pl-7 pr-2 py-2 text-[#08333e] shadow-lg shadow-black/15 transition hover:-translate-y-0.5 hover:shadow-xl">
                            <span class="text-xs font-semibold uppercase tracking-wide">{{ __('home.contact_us_cta') }}</span>
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-[#08333e] text-white transition group-hover:translate-x-0.5">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                            </span>
                        </a>
                        <a href="{{ route('about') }}"
                           class="group inline-flex items-center gap-3 rounded-full border border-white/35 bg-white/10 px-7 py-3 text-sm font-semibold uppercase tracking-wide text-white backdrop-blur-md transition hover:border-white/55 hover:bg-white/15 hover:-translate-y-0.5">
                            {{ __('home.learn_about_us') }}
                            <span class="flex h-9 w-9 items-center justify-center rounded-full bg-white text-[#08333e] transition group-hover:translate-x-0.5">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                            </span>
                </a>
            </div>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4 pt-4">
                        @php
                            $thumbs = [
                                ['label' => __('home.thumb_framing'), 'src' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=400&q=80'],
                                ['label' => __('home.thumb_concept'), 'src' => 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=400&q=80'],
                                ['label' => __('home.thumb_finishing'), 'src' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=400&q=80'],
                                ['label' => __('home.thumb_reinforce'), 'src' => 'https://images.unsplash.com/photo-1541976590-713941681d42?auto=format&fit=crop&w=400&q=80'],
                            ];
                        @endphp
                        @foreach ($thumbs as $i => $t)
                            <div class="group hero-thumb-stagger" style="animation-delay: {{ 0.38 + $i * 0.09 }}s">
                                <div class="relative aspect-[4/3] overflow-hidden rounded-lg ring-1 ring-white/20 shadow-lg shadow-black/20 transition duration-500 group-hover:ring-white/40">
                                    <img src="{{ $t['src'] }}" alt="" class="h-full w-full object-cover transition duration-700 ease-out group-hover:scale-110" loading="lazy" decoding="async">
                    </div>
                                <p class="mt-2 text-[10px] sm:text-xs font-semibold uppercase tracking-wider text-white/75 transition group-hover:text-white">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}. {{ $t['label'] }}</p>
                </div>
                        @endforeach
                    </div>
                </div>

                <div class="lg:col-span-6 relative">
                    <div class="hero-image-frame hero-image-glow relative overflow-hidden rounded-2xl shadow-2xl shadow-black/50">
                        <div id="hero-parallax-wrap" class="aspect-[4/5] sm:aspect-[16/11] lg:aspect-[4/5] overflow-hidden rounded-2xl">
                            <img id="hero-parallax-img"
                                 src="https://images.unsplash.com/photo-1486325212027-8081e485255e?auto=format&fit=crop&w=1400&q=85"
                                 alt=""
                                 class="h-[115%] w-full object-cover object-center will-change-transform select-none"
                                 loading="eager"
                                 decoding="async">
                        </div>
                        <div class="pointer-events-none absolute inset-0 rounded-2xl bg-gradient-to-tr from-[#08333e]/40 via-transparent to-teal-100/5"></div>
                        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-[#08333e]/50 to-transparent rounded-b-2xl"></div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#portfolio" class="absolute bottom-6 left-1/2 z-10 hidden -translate-x-1/2 flex-col items-center gap-2 text-white/60 transition hover:text-white md:flex" aria-label="Scroll">
            <span class="text-[10px] font-medium uppercase tracking-[0.35em]">scroll</span>
            <svg class="h-6 w-6 animate-scroll-hint" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
        </a>
    </section>

    {{-- Portfel — başlıq + iki böyük kart + üç sütun --}}
    <section id="portfolio" class="relative overflow-hidden py-20 lg:py-28 bg-gradient-to-b from-white via-white to-[#f4f7f8]">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-[#08333e]/15 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-10 lg:flex-row lg:items-end lg:justify-between mb-14 lg:mb-16">
                <div class="max-w-2xl space-y-5 js-reveal">
                    <h2 class="text-3xl sm:text-4xl lg:text-[2.65rem] font-extrabold tracking-tight text-[#0a1f2c] leading-[1.12]">
                        {{ __('home.portfolio_section_title') }}
                </h2>
                    <p class="text-lg text-gray-600 leading-relaxed max-w-xl">
                        {{ __('home.portfolio_section_subtitle') }}
                    </p>
                </div>
                <div class="shrink-0 js-reveal js-reveal-delay-1">
                    <a href="{{ route('projects.index') }}"
                       class="group inline-flex items-center gap-3 rounded-full bg-[#0a1f2c] pl-8 pr-2 py-2 text-white shadow-lg shadow-black/15 ring-1 ring-black/5 transition hover:-translate-y-1 hover:bg-[#051525] hover:shadow-xl">
                        <span class="text-xs font-semibold uppercase tracking-wide">{{ __('home.view_portfolio') }}</span>
                        <span class="flex h-11 w-11 items-center justify-center rounded-full bg-white text-[#0a1f2c] transition group-hover:translate-x-0.5">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </span>
                    </a>
                </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-6 lg:gap-8 mb-6 lg:mb-8">
                @php
                    $large = [
                        ['title' => __('home.project_horizon_title'), 'desc' => __('home.project_horizon_desc'), 'img' => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?auto=format&fit=crop&w=1200&q=85'],
                        ['title' => __('home.project_riverside_title'), 'desc' => __('home.project_riverside_desc'), 'img' => 'https://images.unsplash.com/photo-1479839672679-a46483c0e7c8?auto=format&fit=crop&w=1200&q=85'],
                    ];
                @endphp
                @foreach ($large as $idx => $card)
                    <article class="portfolio-card-zoom js-reveal js-reveal-delay-{{ min($idx + 1, 5) }} group relative overflow-hidden rounded-2xl bg-[#0a1f2c] ring-1 ring-black/[0.06] shadow-xl shadow-black/10">
                        <div class="aspect-[16/11] overflow-hidden">
                            <img src="{{ $card['img'] }}" alt="" class="h-full w-full object-cover" loading="lazy">
                        </div>
                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/60 via-black/15 to-transparent opacity-95"></div>
                        <div class="absolute bottom-4 left-4 right-4 sm:bottom-6 sm:left-6 sm:right-6">
                            <div class="portfolio-float-panel pointer-events-auto flex flex-col gap-4 rounded-xl bg-white/[0.97] p-5 shadow-2xl ring-1 ring-black/[0.06] backdrop-blur-md sm:flex-row sm:items-center sm:justify-between">
                                <div class="min-w-0 flex-1 space-y-2">
                                    <h3 class="text-lg font-bold text-[#0a1f2c]">{{ $card['title'] }}</h3>
                                    <p class="text-sm leading-relaxed text-gray-600">{{ $card['desc'] }}</p>
                                </div>
                                <div class="flex shrink-0 items-center gap-3 sm:border-l sm:border-gray-200 sm:pl-6">
                                    <a href="{{ route('projects.index') }}" class="inline-flex h-11 w-11 items-center justify-center rounded-lg bg-[#0a1f2c] text-white transition hover:bg-[#08333e]" aria-label="{{ __('home.more_details') }}">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                    </a>
                    </div>
                </div>
                        </div>
                    </article>
                @endforeach
                </div>

            <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
                @php
                    $compact = [
                        ['t' => __('home.project_serenity'), 'img' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=85'],
                        ['t' => __('home.project_harmony'), 'img' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=85'],
                        ['t' => __('home.project_maplewood'), 'img' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=800&q=85'],
                    ];
                @endphp
                @foreach ($compact as $ci => $item)
                    <article class="portfolio-card-zoom js-reveal js-reveal-delay-{{ min($ci + 2, 5) }} group overflow-hidden rounded-2xl bg-white ring-1 ring-black/[0.06] shadow-lg shadow-black/[0.04] transition hover:shadow-xl">
                        <div class="relative aspect-[3/4] overflow-hidden">
                            <img src="{{ $item['img'] }}" alt="" class="h-full w-full object-cover" loading="lazy">
                            <div class="absolute inset-x-0 bottom-0">
                                <div class="mx-3 mb-3 flex items-center justify-between gap-3 rounded-xl bg-white/95 px-4 py-3 shadow-lg ring-1 ring-black/5 backdrop-blur-sm">
                                    <span class="truncate text-sm font-bold text-[#0a1f2c]">{{ $item['t'] }}</span>
                                    <a href="{{ route('projects.index') }}" class="inline-flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-[#0a1f2c] text-white transition hover:bg-[#08333e]" aria-label="{{ __('home.more_details') }}">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                    </a>
                        </div>
                    </div>
                </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Statistikalar + böyük görüntü --}}
    <section id="stats-strip" class="relative py-20 lg:py-28 bg-[#fafbfc]" aria-labelledby="stats-heading">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 id="stats-heading" class="sr-only">{{ __('home.stat_projects_label') }}</h2>
            <div class="grid gap-12 md:grid-cols-3 md:gap-8 text-center">
                <div class="space-y-3 js-reveal">
                    <p class="text-4xl sm:text-5xl font-extrabold tracking-tight text-[#0f172a] md:text-[2.75rem]" style="letter-spacing: -0.02em;">
                        <span class="counter" data-target="2000">0</span>+
                    </p>
                    <p class="text-sm sm:text-base font-medium text-slate-500">{{ __('home.stat_projects_label') }}</p>
                </div>
                <div class="space-y-3 js-reveal js-reveal-delay-1">
                    <p class="text-4xl sm:text-5xl font-extrabold tracking-tight text-[#0f172a] md:text-[2.75rem]" style="letter-spacing: -0.02em;">
                        {{ __('home.stat_clients_num') }}
                    </p>
                    <p class="text-sm sm:text-base font-medium text-slate-500">{{ __('home.stat_clients_label') }}</p>
                </div>
                <div class="space-y-3 js-reveal js-reveal-delay-2">
                    <p class="text-4xl sm:text-5xl font-extrabold tracking-tight text-[#0f172a] md:text-[2.75rem]" style="letter-spacing: -0.02em;">
                        <span class="counter" data-target="200">0</span>+
                    </p>
                    <p class="text-sm sm:text-base font-medium text-slate-500">{{ __('home.stat_experts_label') }}</p>
                </div>
            </div>

            <div class="mt-16 lg:mt-20 js-reveal js-reveal-delay-3">
                <div class="stats-image-wrap relative overflow-hidden rounded-2xl shadow-[0_28px_80px_-40px_rgba(15,23,42,0.45)] ring-1 ring-black/[0.06]">
                    <img src="https://images.unsplash.com/photo-1610296669228-f701bec41845?auto=format&fit=crop&w=2000&q=85"
                         alt="{{ __('home.stat_image_alt') }}"
                         id="stats-hero-img"
                         class="aspect-[21/9] w-full object-cover transition duration-[1.8s] ease-out hover:scale-[1.03] sm:aspect-[24/9]"
                         loading="lazy">
                    <div class="pointer-events-none absolute inset-0 rounded-2xl ring-1 ring-inset ring-white/10"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tərəfdaşlar --}}
    <section class="relative border-y border-gray-100/80 bg-gradient-to-b from-white via-white to-[#f6f8fa] py-16 lg:py-20">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-[#08333e]/12 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between lg:gap-12 mb-10 lg:mb-12">
                <div class="max-w-2xl space-y-3 js-reveal text-left">
                    <p class="text-xs font-semibold uppercase tracking-[0.35em] text-gray-400">{{ __('home.partners_trust_label') }}</p>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#0a1f2c] leading-tight">{{ __('home.our_partners') }}</h2>
                    <p class="text-base text-gray-600 leading-relaxed">{{ __('home.partners_subtitle') }}</p>
                </div>
                <div class="shrink-0 js-reveal js-reveal-delay-1">
                    <a href="{{ route('partners.index') }}"
                       class="group inline-flex items-center gap-3 rounded-full bg-[#0a1f2c] pl-8 pr-2 py-2 text-white shadow-lg shadow-black/15 ring-1 ring-black/5 transition hover:-translate-y-0.5 hover:bg-[#051525] hover:shadow-xl">
                        <span class="text-xs font-semibold uppercase tracking-wide">{{ __('home.view_all_partners') }}</span>
                        <span class="flex h-11 w-11 items-center justify-center rounded-full bg-white text-[#0a1f2c] transition group-hover:translate-x-0.5">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-px overflow-hidden rounded-2xl bg-gray-200/90 ring-1 ring-gray-200/90 shadow-sm shadow-black/[0.03] js-reveal js-reveal-delay-1">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="flex h-[5.25rem] items-center justify-center bg-white px-4 transition duration-300 hover:bg-[#fafbfc] hover:shadow-inner">
                        <span class="text-sm font-semibold tracking-tight text-gray-400">Partner {{ $i }}</span>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    {{-- Xidmətlər — üç kart, ox düymələri --}}
    <section id="services" class="relative py-20 lg:py-28 bg-[#eef1f4]">
        <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_80%_50%_at_50%_-20%,rgba(8,51,62,0.06),transparent)]"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-8 md:flex-row md:items-start md:justify-between mb-12 lg:mb-14">
                <h2 class="max-w-xl text-3xl sm:text-4xl font-extrabold tracking-tight text-[#0a1f2c] leading-tight js-reveal">
                    {{ __('home.services_comprehensive') }}
                </h2>
                <div class="flex gap-3 md:pt-2 js-reveal js-reveal-delay-1">
                    <button type="button" onclick="document.getElementById('services-track').scrollBy({ left: -340, behavior: 'smooth' })" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-gray-300/90 bg-white text-[#0a1f2c] shadow-sm transition hover:border-[#08333e] hover:bg-[#08333e] hover:text-white active:scale-95" aria-label="Previous">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button type="button" onclick="document.getElementById('services-track').scrollBy({ left: 340, behavior: 'smooth' })" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-gray-300/90 bg-white text-[#0a1f2c] shadow-sm transition hover:border-[#08333e] hover:bg-[#08333e] hover:text-white active:scale-95" aria-label="Next">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

            <div id="services-track" class="service-scroll -mx-4 flex gap-6 overflow-x-auto px-4 pb-2 md:mx-0 md:grid md:grid-cols-3 md:gap-8 md:overflow-visible md:px-0 md:pb-0">
                @php
                    $svc = [
                        ['n' => '01', 'title' => __('home.service_card_1_title'), 'desc' => __('home.service_card_1_desc')],
                        ['n' => '02', 'title' => __('home.service_card_2_title'), 'desc' => __('home.service_card_2_desc')],
                        ['n' => '03', 'title' => __('home.service_card_3_title'), 'desc' => __('home.service_card_3_desc')],
                    ];
                @endphp
                @foreach ($svc as $si => $row)
                    <article class="service-card-home js-reveal js-reveal-delay-{{ min($si + 1, 5) }} min-w-[85vw] shrink-0 rounded-2xl border border-gray-200/70 bg-white p-8 shadow-sm sm:min-w-[360px] md:min-w-0">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full border border-[#0a1f2c]/15 text-sm font-bold text-[#0a1f2c]">{{ $row['n'] }}</div>
                        <h3 class="mt-6 text-xl font-bold text-[#0a1f2c]">{{ $row['title'] }}</h3>
                        <p class="mt-4 text-sm leading-relaxed text-gray-600">{{ $row['desc'] }}</p>
                        <div class="my-8 border-t border-gray-100"></div>
                        <a href="{{ route('services.index') }}" class="group inline-flex items-center gap-2 rounded-full bg-[#0a1f2c] px-6 py-3 text-xs font-semibold uppercase tracking-wide text-white transition hover:bg-[#08333e]">
                            {{ __('home.view_more') }}
                            <svg class="h-4 w-4 transition group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Son CTA (müştəri rəylərindən əvvəl) --}}
    <section class="relative overflow-hidden py-16 lg:py-24 bg-[#0a1f2c] text-white">
        <div class="pointer-events-none absolute -right-20 top-1/2 h-72 w-72 -translate-y-1/2 rounded-full bg-[#08333e]/40 blur-3xl"></div>
        <div class="pointer-events-none absolute -left-16 bottom-0 h-56 w-56 rounded-full bg-teal-400/10 blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center js-reveal">
            <h2 class="text-3xl md:text-[2.35rem] font-extrabold tracking-tight leading-tight">{{ __('home.cta_title') }}</h2>
            <p class="mx-auto mt-5 max-w-2xl text-lg text-white/75 leading-relaxed">{{ __('home.cta_subtitle') }}</p>
            <a href="{{ route('contact') }}" class="cta-shimmer-hover mt-11 inline-flex items-center gap-3 rounded-full bg-white px-8 py-3.5 text-sm font-semibold uppercase tracking-wide text-[#0a1f2c] shadow-xl shadow-black/20 ring-1 ring-white/10 transition hover:-translate-y-1 hover:shadow-2xl">
                {{ __('home.cta_button') }}
                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-[#0a1f2c] text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
            </a>
        </div>
    </section>

    {{-- Müştəri rəyləri — CTA-dan sonra, footer-dan əvvəl --}}
    <section class="relative py-20 lg:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col gap-10 lg:flex-row lg:items-end lg:justify-between mb-14">
                <div class="max-w-2xl space-y-5 js-reveal">
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#051d29]">{{ __('home.testimonials_title') }}</h2>
                    <p class="text-lg leading-relaxed text-gray-600">{{ __('home.testimonials_subtitle') }}</p>
                </div>
                <div class="flex gap-3 js-reveal js-reveal-delay-1">
                    <button type="button" onclick="document.getElementById('testimonials-row').scrollBy({ left: -380, behavior: 'smooth' })" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-gray-300 text-[#051d29] shadow-sm transition hover:bg-gray-50 active:scale-95" aria-label="Previous">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button type="button" onclick="document.getElementById('testimonials-row').scrollBy({ left: 380, behavior: 'smooth' })" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-transparent bg-[#051d29] text-white shadow-md transition hover:bg-[#08333e] active:scale-95" aria-label="Next">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

            <div id="testimonials-row" class="flex gap-6 overflow-x-auto pb-2 lg:grid lg:grid-cols-2 lg:overflow-visible lg:pb-0">
                @php
                    $quotes = [
                        ['q' => __('home.testimonial_1_quote'), 'name' => __('home.testimonial_1_name'), 'role' => __('home.testimonial_1_role'), 'av' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=96&q=80'],
                        ['q' => __('home.testimonial_2_quote'), 'name' => __('home.testimonial_2_name'), 'role' => __('home.testimonial_2_role'), 'av' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=96&q=80'],
                    ];
                @endphp
                @foreach ($quotes as $qi => $t)
                    <article class="testimonial-card-home js-reveal js-reveal-delay-{{ min($qi + 2, 5) }} min-w-[min(100%,380px)] shrink-0 rounded-2xl border border-gray-100 bg-[#f9fafb] p-8 shadow-[0_24px_70px_-48px_rgba(15,23,42,0.28)] lg:min-w-0">
                        <div class="flex gap-1 text-[#051d29]" aria-hidden="true">
                            @for ($s = 0; $s < 5; $s++)
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <p class="mt-6 text-[#111827] leading-[1.65] text-[1.05rem]">{{ $t['q'] }}</p>
                        <div class="mt-8 flex items-center gap-4">
                            <img src="{{ $t['av'] }}" alt="" class="h-12 w-12 rounded-full object-cover ring-2 ring-white" loading="lazy">
                            <div>
                                <p class="font-bold text-[#051d29]">{{ $t['name'] }}</p>
                                <p class="text-sm text-gray-500">{{ $t['role'] }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</div>

<script>
(function () {
    var reduceMotion = typeof window.matchMedia === 'function' &&
        window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function animateCounter(el, target, duration) {
        duration = duration || 1600;
        var start = 0;
        var t0 = performance.now();
        function frame(now) {
            var p = Math.min(1, (now - t0) / duration);
            var eased = 1 - Math.pow(1 - p, 3);
            var val = Math.round(start + (target - start) * eased);
            el.textContent = val;
            if (p < 1) requestAnimationFrame(frame);
            else el.textContent = target;
        }
        requestAnimationFrame(frame);
    }

    var heroImg = document.getElementById('hero-parallax-img');
    function onScroll() {
        if (!heroImg || reduceMotion) return;
        var y = window.scrollY || window.pageYOffset;
        var translate = Math.min(y * 0.07, 72);
        heroImg.style.transform = 'translate3d(0,' + translate + 'px,0) scale(1.045)';
    }
    if (!reduceMotion) {
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

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

    var stats = document.getElementById('stats-strip');
    if (stats) {
        var obsStats = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                entry.target.querySelectorAll('.counter').forEach(function (c) {
                    if (c.classList.contains('animated')) return;
                    c.classList.add('animated');
                    var tgt = parseInt(c.getAttribute('data-target'), 10);
                    if (!reduceMotion) animateCounter(c, tgt, 1800);
                    else c.textContent = String(tgt);
                });
                obsStats.unobserve(entry.target);
            });
        }, { threshold: 0.28 });
        obsStats.observe(stats);
    }
})();
</script>
@endsection
