@extends('layouts.app')

@section('content')
@php
    $materialPartners = [
        [
            'title' => __('partners.brick_factory'),
            'desc' => __('partners.brick_factory_desc'),
            'tag' => __('partners.brick_tag'),
            'path' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
        ],
        [
            'title' => __('partners.cement_company'),
            'desc' => __('partners.cement_company_desc'),
            'tag' => __('partners.cement_tag'),
            'path' => 'M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2 2v0',
        ],
        [
            'title' => __('partners.metal_construction'),
            'desc' => __('partners.metal_construction_desc'),
            'tag' => __('partners.metal_tag'),
            'path' => 'M4 6h16M4 10h16M4 14h16M4 18h16',
        ],
        [
            'title' => __('partners.insulation_materials'),
            'desc' => __('partners.insulation_materials_desc'),
            'tag' => __('partners.insulation_tag'),
            'path' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        ],
        [
            'title' => __('partners.tiles_ceramics'),
            'desc' => __('partners.tiles_ceramics_desc'),
            'tag' => __('partners.tiles_tag'),
            'path' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3H5a2 2 0 00-2 2v12a4 4 0 004 4h2a2 2 0 002-2V5a2 2 0 00-2-2z',
        ],
        [
            'title' => __('partners.electrical_equipment'),
            'desc' => __('partners.electrical_equipment_desc'),
            'tag' => __('partners.electrical_tag'),
            'path' => 'M13 10V3L4 14h7v7l9-11h-7z',
        ],
        [
            'title' => __('partners.paints_lacquers'),
            'desc' => __('partners.paints_lacquers_desc'),
            'tag' => __('partners.paint_tag'),
            'path' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
        ],
        [
            'title' => __('partners.wood_materials'),
            'desc' => __('partners.wood_materials_desc'),
            'tag' => __('partners.wood_tag'),
            'path' => 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10v11M20 10v11',
        ],
    ];

    $servicePartners = [
        [
            'title' => __('partners.quality_control'),
            'desc' => __('partners.quality_control_desc'),
            'tags' => [__('partners.expertise_tag'), __('partners.certificate_tag')],
            'path' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        ],
        [
            'title' => __('partners.project_bureau'),
            'desc' => __('partners.project_bureau_desc'),
            'tags' => [__('partners.architecture_tag'), __('partners.construction_tag')],
            'path' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
        ],
        [
            'title' => __('partners.electrical_services'),
            'desc' => __('partners.electrical_services_desc'),
            'tags' => [__('partners.electrical_tag'), __('partners.license_tag')],
            'path' => 'M13 10V3L4 14h7v7l9-11h-7z',
        ],
        [
            'title' => __('partners.water_sewerage'),
            'desc' => __('partners.water_sewerage_desc'),
            'tags' => [__('partners.water_supply_tag'), __('partners.sewerage_tag')],
            'path' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
        ],
        [
            'title' => __('partners.interior_design'),
            'desc' => __('partners.interior_design_desc'),
            'tags' => [__('partners.design_tag'), __('partners.decoration_tag')],
            'path' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3H5a2 2 0 00-2 2v12a4 4 0 004 4h2a2 2 0 002-2V5a2 2 0 00-2-2z',
        ],
        [
            'title' => __('partners.landscape_design'),
            'desc' => __('partners.landscape_design_desc'),
            'tags' => [__('partners.landscape_tag'), __('partners.gardening_tag')],
            'path' => 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10v11M20 10v11',
        ],
    ];

    $benefits = [
        ['title' => __('partners.quality_guarantee'), 'desc' => __('partners.quality_guarantee_desc'), 'path' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z'],
        ['title' => __('partners.affordable_prices'), 'desc' => __('partners.affordable_prices_desc'), 'path' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1'],
        ['title' => __('partners.timely_delivery'), 'desc' => __('partners.timely_delivery_desc'), 'path' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
        ['title' => __('partners.technical_support'), 'desc' => __('partners.technical_support_desc'), 'path' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'],
        ['title' => __('partners.innovation'), 'desc' => __('partners.innovation_desc'), 'path' => 'M13 10V3L4 14h7v7l9-11h-7z'],
        ['title' => __('partners.long_term_warranty'), 'desc' => __('partners.long_term_warranty_desc'), 'path' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
    ];
@endphp

<div class="pt-20">
    <div class="relative page-partners-strux" style="background-size: 280px 280px !important;">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-slate-300/40 to-transparent"></div>

        {{-- Hero --}}
        <section class="relative z-10 mx-auto max-w-7xl px-4 pb-8 pt-20 text-center sm:px-6 sm:pt-24 lg:px-8 lg:pt-28">
            <p class="partners-kicker">{{ __('home.partners_trust_label') }}</p>
            <h1 class="partners-page-title">{{ __('partners.hero_title') }}</h1>
            <p class="mx-auto mt-6 max-w-2xl text-base leading-relaxed text-gray-500 lg:text-lg">
                {{ __('partners.hero_subtitle') }}
            </p>
        </section>

        {{-- Material suppliers --}}
        <section class="relative z-10 mx-auto max-w-7xl px-4 pb-6 pt-4 sm:px-6 lg:px-8">
            <div class="mb-10 flex flex-col gap-6 lg:mb-12 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-2xl space-y-3 text-left">
                    <h2 class="text-3xl font-extrabold tracking-tight text-[#0f1c21] sm:text-4xl">{{ __('partners.material_suppliers') }}</h2>
                    <!-- <p class="text-base leading-relaxed text-gray-600">{{ __('partners.partners_subtitle') }}</p> -->
                </div>
            </div>

            <div class="partners-mat-grid">
                @foreach ($materialPartners as $item)
                    <article class="partners-mat-card group">
                        <div class="partners-icon-ring">
                            <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="{{ $item['path'] }}"/>
                            </svg>
                        </div>
                        <h3 class="partners-mat-title">{{ $item['title'] }}</h3>
                        <p class="partners-mat-desc">{{ $item['desc'] }}</p>
                        <span class="partners-mat-tag">{{ $item['tag'] }}</span>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- Service partners --}}
        <section class="relative z-10 border-t border-gray-200/80 bg-white/85 py-16 backdrop-blur-[2px] lg:py-20">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mb-10 max-w-2xl space-y-3 lg:mb-12">
                    <p class="text-xs font-semibold uppercase tracking-[0.28em] text-slate-400">{{ __('partners.reliable_partners') }}</p>
                    <h2 class="text-3xl font-extrabold tracking-tight text-[#0f1c21] sm:text-4xl">{{ __('partners.service_partners') }}</h2>
                </div>

                <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3 lg:gap-6">
                    @foreach ($servicePartners as $sp)
                        <article class="partners-svc-card group">
                            <div class="partners-svc-icon">
                                <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="{{ $sp['path'] }}"/>
                                </svg>
                            </div>
                            <h3 class="partners-svc-title">{{ $sp['title'] }}</h3>
                            <p class="partners-svc-desc">{{ $sp['desc'] }}</p>
                            <div class="partners-svc-tags">
                                @foreach ($sp['tags'] as $tg)
                                    <span class="partners-pill">{{ $tg }}</span>
                                @endforeach
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Benefits --}}
        <section class="relative z-10 border-t border-gray-200/80 bg-gradient-to-b from-[#f4f7f9] via-white to-[#fafbfc] py-16 lg:py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-3xl text-center lg:mb-14">
                    <h2 class="text-3xl font-extrabold tracking-tight text-[#0f1c21] sm:text-4xl">{{ __('partners.partnership_benefits') }}</h2>
                    <p class="mt-4 text-lg text-gray-600">{{ __('partners.benefits_subtitle') }}</p>
                </div>

                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3 lg:gap-6">
                    @foreach ($benefits as $ben)
                        <article class="partners-ben-card">
                            <div class="partners-ben-icon">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="{{ $ben['path'] }}"/>
                                </svg>
                            </div>
                            <h3 class="partners-ben-title">{{ $ben['title'] }}</h3>
                            <p class="partners-ben-desc">{{ $ben['desc'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

    {{-- CTA --}}
    <section class="relative overflow-hidden border-t border-gray-200/90 bg-white py-20 lg:py-28">
        <div class="pointer-events-none absolute -right-24 top-1/2 h-64 w-64 -translate-y-1/2 rounded-full bg-[#08333e]/5 blur-3xl"></div>
        <div class="relative z-10 mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="cta-title">{{ __('services.cta_title') }}</h2>
            <p class="mx-auto mt-5 max-w-2xl text-base text-gray-500 lg:text-lg">{{ __('services.cta_subtitle') }}</p>
            <a href="{{ route('contact') }}" class="cta-btn">
                {{ __('services.contact_now') }}
                <span class="cta-btn-icon">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </span>
            </a>
        </div>
    </section>
</div>

<style>
/* Hero */
.partners-kicker {
    font-size: 0.6875rem;
    font-weight: 600;
    letter-spacing: 0.35em;
    text-transform: uppercase;
    color: #94a3b8;
}
.partners-page-title {
    font-size: clamp(2.75rem, 6vw, 5rem);
    font-weight: 800;
    line-height: 1.06;
    letter-spacing: -0.03em;
    color: #0f1c21;
}

/* Material grid — STRUX üslubu */
.partners-mat-grid {
    display: grid;
    gap: 16px;
    grid-template-columns: 1fr;
    border-left: 1px solid rgba(203, 213, 225, 0.65);
    border-top: 1px solid rgba(203, 213, 225, 0.65);
    padding-bottom: 16px;
}
@media (min-width: 640px) {
    .partners-mat-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (min-width: 1024px) {
    .partners-mat-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.partners-mat-card {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 1.75rem 1.5rem 1.5rem;
    border-radius: 14px;
    background-color: #ffffff;
    border-right: 1px solid rgba(203, 213, 225, 0.65);
    border-bottom: 1px solid rgba(203, 213, 225, 0.65);
    text-align: left;
    transition: background-color 0.25s ease, box-shadow 0.25s ease;
}
.partners-mat-card:hover {
    background-color: #f8fafc;
    box-shadow: 0 18px 48px -28px rgba(15, 23, 42, 0.15);
}

.partners-icon-ring {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 3.25rem;
    height: 3.25rem;
    border-radius: 14px;
    background: linear-gradient(145deg, #0a1f2c 0%, #08333e 100%);
    color: #ffffff;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.12);
    transition: transform 0.25s ease;
}
.group:hover .partners-icon-ring {
    transform: translateY(-2px);
}

.partners-mat-title {
    margin-top: 1.15rem;
    font-size: 1.0625rem;
    font-weight: 800;
    letter-spacing: -0.02em;
    color: #0f1c21;
    line-height: 1.25;
}
.partners-mat-desc {
    margin-top: 0.5rem;
    flex: 1;
    font-size: 0.875rem;
    line-height: 1.6;
    color: #64748b;
}
.partners-mat-tag {
    margin-top: 1rem;
    display: inline-flex;
    align-items: center;
    border-radius: 9999px;
    border: 1px solid rgba(226, 232, 240, 0.95);
    background-color: rgba(248, 250, 252, 0.9);
    padding: 0.25rem 0.65rem;
    font-size: 0.6875rem;
    font-weight: 700;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    color: #475569;
}

/* Service cards */
.partners-svc-card {
    border-radius: 16px;
    border: 1px solid rgba(226, 232, 240, 0.95);
    background-color: #ffffff;
    padding: 1.75rem 1.5rem;
    box-shadow: 0 1px 0 rgba(15, 23, 42, 0.04);
    transition: border-color 0.2s ease, box-shadow 0.25s ease, transform 0.2s ease;
}
.partners-svc-card:hover {
    border-color: rgba(8, 51, 62, 0.22);
    box-shadow: 0 20px 50px -32px rgba(8, 51, 62, 0.35);
    transform: translateY(-2px);
}

.partners-svc-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 3rem;
    height: 3rem;
    border-radius: 12px;
    background-color: #f1f5f9;
    color: #08333e;
    border: 1px solid rgba(148, 163, 184, 0.35);
    transition: background-color 0.2s ease, color 0.2s ease;
}
.partners-svc-card:hover .partners-svc-icon {
    background-color: #08333e;
    color: #ffffff;
    border-color: transparent;
}

.partners-svc-title {
    margin-top: 1.25rem;
    font-size: 1.1875rem;
    font-weight: 800;
    letter-spacing: -0.02em;
    color: #0f1c21;
}
.partners-svc-desc {
    margin-top: 0.65rem;
    font-size: 0.9375rem;
    line-height: 1.65;
    color: #64748b;
}
.partners-svc-tags {
    margin-top: 1.15rem;
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
}
.partners-pill {
    border-radius: 9999px;
    border: 1px solid rgba(226, 232, 240, 0.95);
    background-color: #f8fafc;
    padding: 0.2rem 0.55rem;
    font-size: 0.6875rem;
    font-weight: 600;
    letter-spacing: 0.04em;
    color: #64748b;
}

/* Benefits */
.partners-ben-card {
    border-radius: 16px;
    border: 1px solid rgba(226, 232, 240, 0.9);
    background-color: #ffffff;
    padding: 1.6rem 1.4rem;
    box-shadow: 0 14px 40px -36px rgba(15, 23, 42, 0.28);
    transition: box-shadow 0.25s ease, border-color 0.2s ease;
}
.partners-ben-card:hover {
    border-color: rgba(203, 213, 225, 0.95);
    box-shadow: 0 22px 50px -34px rgba(15, 23, 42, 0.18);
}

.partners-ben-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 2.75rem;
    height: 2.75rem;
    border-radius: 9999px;
    background-color: #002b36;
    color: #ffffff;
}

.partners-ben-title {
    margin-top: 1rem;
    font-size: 1.0625rem;
    font-weight: 800;
    letter-spacing: -0.015em;
    color: #0f1c21;
}
.partners-ben-desc {
    margin-top: 0.5rem;
    font-size: 0.875rem;
    line-height: 1.6;
    color: #64748b;
}
</style>
@endsection
