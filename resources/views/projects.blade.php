@extends('layouts.app')

@section('content')
@php
    $statsRow = [
        ['num' => '350+', 'label' => 'completed_projects'],
        ['num' => '15+', 'label' => 'years_experience'],
        ['num' => '50+', 'label' => 'professional_staff'],
        ['num' => '100%', 'label' => 'customer_satisfaction'],
    ];

    $projectsList = [
        [
            'image' => asset('images/baku.jpg'),
            'title_key' => 'modern_villa_title',
            'desc_key' => 'modern_villa_desc',
            'category_key' => 'villa',
            'city_key' => 'baku',
            'meta_left' => ['label_key' => 'area', 'value' => '350 m²'],
            'meta_right' => ['label_key' => 'year', 'value' => '2024'],
            'status' => 'premium',
        ],
        [
            'image' => asset('images/referans.jpg'),
            'title_key' => 'residential_complex_title',
            'desc_key' => 'residential_complex_desc',
            'category_key' => 'complex',
            'city_key' => 'sumgayit',
            'meta_left' => ['label_key' => 'apartments', 'value' => __('projects.units_format', ['count' => 24])],
            'meta_right' => ['label_key' => 'year', 'value' => '2023'],
            'status' => 'completed',
        ],
        [
            'image' => asset('images/ofis.jpg'),
            'title_key' => 'modern_office_title',
            'desc_key' => 'modern_office_desc',
            'category_key' => 'office',
            'city_key' => 'ganja',
            'meta_left' => ['label_key' => 'floors', 'value' => '5'],
            'meta_right' => ['label_key' => 'year', 'value' => '2023'],
            'status' => 'completed',
        ],
        [
            'image' => null,
            'title_key' => 'individual_house_title',
            'desc_key' => 'individual_house_desc',
            'category_key' => 'house',
            'city_key' => 'mingachevir',
            'meta_left' => ['label_key' => 'area', 'value' => '200 m²'],
            'meta_right' => ['label_key' => 'year', 'value' => '2022'],
            'status' => 'completed',
        ],
        [
            'image' => null,
            'title_key' => 'capital_renovation_title',
            'desc_key' => 'capital_renovation_desc',
            'category_key' => 'renovation',
            'city_key' => 'sheki',
            'meta_left' => ['label_key' => 'type', 'value' => __('projects.capital_renovation')],
            'meta_right' => ['label_key' => 'year', 'value' => '2022'],
            'status' => 'completed',
        ],
        [
            'image' => null,
            'title_key' => 'luxury_villa_title',
            'desc_key' => 'luxury_villa_desc',
            'category_key' => 'villa',
            'city_key' => 'quba',
            'meta_left' => ['label_key' => 'area', 'value' => '500 m²'],
            'meta_right' => ['label_key' => 'year', 'value' => '2021'],
            'status' => 'premium',
        ],
    ];

    $processSteps = [
        ['num' => '1', 'title_key' => 'consultation_title', 'desc_key' => 'consultation_desc'],
        ['num' => '2', 'title_key' => 'project_title', 'desc_key' => 'project_desc'],
        ['num' => '3', 'title_key' => 'construction_title', 'desc_key' => 'construction_desc'],
        ['num' => '4', 'title_key' => 'delivery_title', 'desc_key' => 'delivery_desc'],
    ];
@endphp

<div class="pt-20">
    <div class="relative page-projects-strux" style="background-size: 280px 280px !important;">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-slate-300/40 to-transparent"></div>

        {{-- Hero --}}
        <section class="relative z-10 mx-auto max-w-7xl px-4 pb-8 pt-20 text-center sm:px-6 sm:pb-10 sm:pt-24 lg:px-8 lg:pt-28">
            <h1 class="text-[3rem] font-extrabold leading-[1.08] tracking-[-0.02em] text-[#0f1c21] sm:text-[4rem] lg:text-[5rem]">
                {{ __('projects.hero_title') }}
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-base leading-relaxed text-gray-400 lg:text-lg">
                {{ __('projects.hero_subtitle') }}
            </p>
        </section>

        {{-- Statistikalar --}}
        <section class="relative z-10 mx-auto max-w-7xl px-4 pb-14 sm:px-6 lg:px-8 lg:pb-16">
            <div class="grid grid-cols-2 gap-4 lg:grid-cols-4 lg:gap-6">
                @foreach ($statsRow as $stat)
                    <div class="projects-stat-card">
                        <div class="projects-stat-value">{{ $stat['num'] }}</div>
                        <div class="projects-stat-label">{{ __('projects.' . $stat['label']) }}</div>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Layihə şəbəkəsi --}}
        <section class="relative z-10 mx-auto max-w-7xl px-4 pb-16 sm:px-6 lg:px-8 lg:pb-24">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-[2rem] font-extrabold tracking-tight text-[#0f1c21] sm:text-3xl lg:text-[2.35rem]">
                    {{ __('projects.recent_projects_title') }}
                </h2>
                <p class="mx-auto mt-4 text-base leading-relaxed text-gray-500 lg:text-lg">
                    {{ __('projects.recent_projects_subtitle') }}
                </p>
            </div>

            <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-3 lg:gap-10">
                @foreach ($projectsList as $project)
                    <article class="project-card-strux group flex flex-col overflow-hidden rounded-xl border border-gray-200/95 bg-white shadow-[0_1px_0_rgba(15,23,42,0.04)] transition duration-300 hover:border-gray-300 hover:shadow-md">
                        <div class="project-card-media">
                            @if (!empty($project['image']))
                                <img
                                    src="{{ $project['image'] }}"
                                    alt="{{ __('projects.' . $project['title_key']) }}"
                                    loading="lazy"
                                    decoding="async"
                                >
                            @else
                                <div class="project-card-placeholder">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                                    </svg>
                                    <span>{{ __('projects.' . $project['title_key']) }}</span>
                                </div>
                            @endif
                        </div>

                        <div class="flex flex-1 flex-col p-6 pt-5">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="inline-flex rounded-md border border-slate-200 bg-slate-50 px-2.5 py-1 text-[11px] font-semibold text-[#0f1c21]">
                                    {{ __('projects.' . $project['category_key']) }}
                                </span>
                                <span class="inline-flex rounded-md border border-gray-200 bg-slate-50/80 px-2.5 py-1 text-[11px] font-medium text-gray-600">
                                    {{ __('projects.' . $project['city_key']) }}
                                </span>
                            </div>

                            <h3 class="mt-4 text-lg font-bold leading-snug tracking-tight text-[#0f1c21]">
                                {{ __('projects.' . $project['title_key']) }}
                            </h3>
                            <p class="mt-2 flex-1 text-sm leading-relaxed text-gray-500">
                                {{ __('projects.' . $project['desc_key']) }}
                            </p>

                            <div class="mt-5 flex items-start justify-between gap-4 border-t border-gray-100 pt-5 text-sm text-gray-500">
                                <div>
                                    <span class="font-medium text-gray-700">{{ __('projects.' . $project['meta_left']['label_key']) }}:</span>
                                    {{ $project['meta_left']['value'] }}
                                </div>
                                <div class="text-right">
                                    <span class="font-medium text-gray-700">{{ __('projects.' . $project['meta_right']['label_key']) }}:</span>
                                    {{ $project['meta_right']['value'] }}
                                </div>
                            </div>

                            <div class="mt-4 flex items-center justify-between gap-3">
                                @if ($project['status'] === 'premium')
                                    <span class="inline-flex items-center gap-1.5 text-xs font-medium text-amber-700">
                                        <svg class="h-4 w-4 shrink-0 text-amber-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        {{ __('projects.premium_project') }}
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 text-xs font-medium text-emerald-700">
                                        <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        {{ __('projects.completed') }}
                                    </span>
                                @endif

                                <a href="{{ route('contact') }}" class="inline-flex shrink-0 items-center gap-1 text-sm font-semibold text-[#002b36] transition hover:text-[#063542]">
                                    {{ __('projects.details') }}
                                    <svg class="h-4 w-4 translate-x-0 transition group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    </div>

    {{-- İş prosesi --}}
    <section class="relative border-t border-gray-200/90 bg-white py-16 lg:py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <h2 class="text-[2rem] font-extrabold tracking-tight text-[#0f1c21] sm:text-3xl lg:text-[2.35rem]">
                    {{ __('projects.process_title') }}
                </h2>
                <p class="mx-auto mt-4 text-base leading-relaxed text-gray-500 lg:text-lg">
                    {{ __('projects.process_subtitle') }}
                </p>
            </div>

            <div class="mt-14 grid gap-10 sm:grid-cols-2 lg:grid-cols-4 lg:gap-8">
                @foreach ($processSteps as $step)
                    <div class="text-center">
                        <div class="projects-process-num">{{ $step['num'] }}</div>
                        <h3 class="text-lg font-bold text-[#0f1c21]">{{ __('projects.' . $step['title_key']) }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-gray-500">{{ __('projects.' . $step['desc_key']) }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="relative overflow-hidden border-t border-gray-200/90 bg-white py-20 lg:py-28">
        <div class="relative z-10 mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="cta-title text-balance">
                {{ __('projects.cta_title') }}
            </h2>
            <p class="mx-auto mt-5 max-w-2xl text-base text-gray-500 lg:text-lg">
                {{ __('projects.cta_subtitle') }}
            </p>
            <a href="{{ route('contact') }}" class="cta-btn">
                {{ __('projects.contact_now') }}
                <span class="cta-btn-icon">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </span>
            </a>
        </div>
    </section>
</div>
@endsection
