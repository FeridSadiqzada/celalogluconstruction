@extends('layouts.app')

@section('content')
<script>document.documentElement.classList.add('anim-home');</script>
<div class="bg-[#fafbfc]">
    {{-- Hero — ana səhifə ilə uyumlu dərin teal --}}
    <section class="relative min-h-[48svh] lg:min-h-[52svh] hero-deep-teal text-white overflow-hidden pt-24 md:pt-28 pb-16 lg:pb-20">
        <div class="pointer-events-none absolute inset-0 hero-x-watermark"></div>
        <div class="pointer-events-none absolute -right-24 top-1/4 h-[480px] w-[480px] rounded-full bg-teal-400/10 blur-3xl"></div>
        <div class="pointer-events-none absolute -left-28 bottom-0 h-[380px] w-[380px] rounded-full bg-cyan-300/5 blur-3xl"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center js-reveal">
                <h1 class="text-4xl sm:text-5xl lg:text-[3.25rem] font-extrabold leading-[1.08] tracking-tight text-balance">
                    {{ __('about.hero_title') }}
                </h1>
                <p class="mt-6 text-base sm:text-lg text-white/85 leading-relaxed max-w-2xl mx-auto">
                    {{ __('about.hero_subtitle') }}
                </p>
            </div>
        </div>
    </section>

    {{-- Şirkət hekayəsi --}}
    <section class="relative overflow-hidden py-20 lg:py-28 bg-gradient-to-b from-white via-white to-[#f4f7f8]">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-[#08333e]/15 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 lg:gap-20 items-start">
                <div class="space-y-6 js-reveal">
                    <h2 class="text-3xl sm:text-4xl lg:text-[2.65rem] font-extrabold tracking-tight text-[#0a1f2c] leading-[1.12]">
                        {{ __('about.our_story') }}
                    </h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        {{ __('about.story_desc1') }}
                    </p>
                    <p class="text-base text-gray-600 leading-relaxed">
                        {{ __('about.story_desc2') }}
                    </p>
                    <p class="text-base text-gray-600 leading-relaxed">
                        {{ __('about.story_desc3') }}
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4 sm:gap-6 js-reveal js-reveal-delay-1">
                    <div class="rounded-2xl bg-white p-6 sm:p-8 text-center ring-1 ring-black/[0.06] shadow-lg shadow-black/[0.04]">
                        <div class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#08333e] mb-2">350+</div>
                        <div class="text-sm text-gray-600">{{ __('about.completed_projects') }}</div>
                    </div>
                    <div class="rounded-2xl bg-white p-6 sm:p-8 text-center ring-1 ring-black/[0.06] shadow-lg shadow-black/[0.04]">
                        <div class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#08333e] mb-2">15+</div>
                        <div class="text-sm text-gray-600">{{ __('about.years_experience') }}</div>
                    </div>
                    <div class="rounded-2xl bg-white p-6 sm:p-8 text-center ring-1 ring-black/[0.06] shadow-lg shadow-black/[0.04]">
                        <div class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#08333e] mb-2">50+</div>
                        <div class="text-sm text-gray-600">{{ __('about.professional_workers') }}</div>
                    </div>
                    <div class="rounded-2xl bg-white p-6 sm:p-8 text-center ring-1 ring-black/[0.06] shadow-lg shadow-black/[0.04]">
                        <div class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#08333e] mb-2">100%</div>
                        <div class="text-sm text-gray-600">{{ __('about.customer_satisfaction') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Missiya və vizyon --}}
    <section class="py-20 lg:py-28 bg-[#fafbfc]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 lg:mb-16 js-reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#0a1f2c] leading-[1.12]">
                    {{ __('about.mission_vision') }}
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 lg:gap-10">
                <div class="rounded-2xl bg-white p-8 lg:p-10 ring-1 ring-black/[0.06] shadow-xl shadow-black/[0.06] transition hover:shadow-2xl js-reveal">
                    <div class="p-2 inline-flex aspect-square w-max items-center justify-center rounded-xl bg-[#08333e] mb-6 p-3.5 text-white">
                        <svg class="w-7 h-7 shrink-0 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0a1f2c] mb-4">{{ __('about.our_mission') }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ __('about.mission_desc') }}
                    </p>
                </div>

                <div class="rounded-2xl bg-white p-8 lg:p-10 ring-1 ring-black/[0.06] shadow-xl shadow-black/[0.06] transition hover:shadow-2xl js-reveal js-reveal-delay-1">
                    <div class="p-2 inline-flex aspect-square w-max items-center justify-center rounded-xl bg-[#08333e] mb-6 p-3.5 text-white">
                        <svg class="w-7 h-7 shrink-0 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#0a1f2c] mb-4">{{ __('about.our_vision') }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        {{ __('about.vision_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Dəyərlər --}}
    <section class="relative py-20 lg:py-28 bg-white border-t border-gray-100/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 lg:mb-16 js-reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#0a1f2c] leading-[1.12]">
                    {{ __('about.our_values') }}
                </h2>
                <p class="mt-5 text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    {{ __('about.values_subtitle') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                @php
                    $valueIcons = [
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>',
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>',
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>',
                    ];
                    $valueKeys = [
                        ['title' => __('about.quality'), 'desc' => __('about.quality_desc')],
                        ['title' => __('about.timely_delivery'), 'desc' => __('about.timely_delivery_desc')],
                        ['title' => __('about.customer_satisfaction_value'), 'desc' => __('about.customer_satisfaction_desc')],
                        ['title' => __('about.reliability'), 'desc' => __('about.reliability_desc')],
                        ['title' => __('about.innovation'), 'desc' => __('about.innovation_desc')],
                        ['title' => __('about.teamwork'), 'desc' => __('about.teamwork_desc')],
                    ];
                @endphp
                @foreach ($valueKeys as $vi => $v)
                    <div class="group rounded-2xl border border-gray-100 bg-[#fafbfc] p-8 text-center ring-1 ring-black/[0.04] shadow-sm transition duration-300 hover:bg-white hover:shadow-xl hover:shadow-black/[0.06] js-reveal js-reveal-delay-{{ min($vi % 5 + 1, 5) }}">
                        <div class="inline-flex  p-2 aspect-square w-max items-center justify-center rounded-full bg-[#0a1f2c] mx-auto mb-6 p-3.5 text-white transition duration-300 group-hover:scale-105 group-hover:bg-[#08333e]">
                            <svg class="w-7 h-7 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                {!! $valueIcons[$vi] !!}
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#0a1f2c] mb-3">{{ $v['title'] }}</h3>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            {{ $v['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Rəsmi lisenziya — id-lər və PDF məntiqi dəyişməz --}}
    <section class="relative py-20 lg:py-28 bg-gradient-to-b from-[#f4f7f8] via-white to-[#fafbfc]">
        <div class="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-[#08333e]/12 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 lg:mb-16 js-reveal">
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-[#0a1f2c] leading-[1.12]">
                    {{ __('about.official_license') }}
                </h2>
                <p class="mt-5 text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    {{ __('about.license_subtitle') }}
                </p>
            </div>

            <div class="flex justify-center mb-8 js-reveal js-reveal-delay-1">
                <div class="license-card group relative max-w-sm w-full cursor-pointer rounded-2xl bg-white ring-2 ring-[#08333e]/20 ring-offset-4 ring-offset-[#f4f7f8] shadow-xl shadow-black/10 overflow-hidden transition duration-300 hover:ring-[#08333e]/35 hover:shadow-2xl hover:-translate-y-1"
                     onclick="openLicenseModal()"
                     role="button"
                     tabindex="0"
                     onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();openLicenseModal();}">
                    <div class="aspect-[3/4] bg-gray-100 relative overflow-hidden">
                        <canvas id="license-canvas" class="w-full h-full object-cover" style="display: none;"></canvas>
                        <img id="license-placeholder" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDMwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzMDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xMjAgMTYwSDEwMFYxODBIMTIwVjE2MFoiIGZpbGw9IiMxRTlCRjAiLz4KPHBhdGggZD0iTTE4MCAyMDBIMTAwVjIyMEgxODBWMjAwWiIgZmlsbD0iIzlDQTNBRiIvPgo8cGF0aCBkPSJNMTYwIDI0MEgxMDBWMjYwSDE2MFYyNDBaIiBmaWxsPSIjOUNBM0FGIi8+CjxwYXRoIGQ9Ik0xNDAgMjgwSDEwMFYzMDBIMTQwVjI4MFoiIGZpbGw9IiM5Q0EzQUYiLz4KPHRleHQgeD0iMTUwIiB5PSIzNDAiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgZmlsbD0iIzZCNzI4MCIgdGV4dC1hbmNob3I9Im1pZGRsZSI+TGlzZW56aXlhPC90ZXh0Pgo8L3N2Zz4K" alt="İnşaat Lisenziyası" class="w-full h-full object-cover">
                        <div class="license-overlay absolute inset-0 bg-black/75 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="text-center px-4">
                                <svg class="w-12 h-12 text-white mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                </svg>
                                <p class="text-white font-semibold text-sm sm:text-base">{{ __('about.zoom_and_read') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-t border-gray-100 bg-white">
                        <h4 class="text-lg font-bold text-[#0a1f2c] mb-2">{{ __('about.construction_license') }}</h4>
                        <p class="text-gray-600 text-sm leading-relaxed">{{ __('about.license_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PDF modal (section xaricində) — element id-ləri əvvəlki kimi --}}
    <div id="licenseModal" class="fixed inset-0 bg-black/70 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-6xl w-full max-h-[90vh] overflow-hidden ring-1 ring-black/10 shadow-2xl">
            <div class="flex flex-wrap gap-3 justify-between items-center p-4 border-b border-gray-200 bg-gray-50/95">
                <h3 class="text-lg font-semibold text-[#0a1f2c] pr-2">{{ __('about.construction_license') }}</h3>
                <div class="flex flex-wrap items-center gap-3 sm:gap-4">
                    <div class="flex items-center gap-2">
                        <button type="button" id="zoomOut" class="px-2.5 py-1.5 rounded-lg bg-gray-200 text-[#0a1f2c] text-sm font-medium hover:bg-gray-300 transition">−</button>
                        <span id="zoomLevel" class="text-sm text-gray-600 min-w-[52px] text-center tabular-nums">100%</span>
                        <button type="button" id="zoomIn" class="px-2.5 py-1.5 rounded-lg bg-gray-200 text-[#0a1f2c] text-sm font-medium hover:bg-gray-300 transition">+</button>
                    </div>
                    <div class="flex items-center gap-2">
                        <button type="button" id="prevPage" class="px-3 py-1.5 rounded-lg bg-[#0a1f2c] text-white text-sm hover:bg-[#08333e] disabled:bg-gray-300 disabled:text-gray-500 disabled:cursor-not-allowed transition">←</button>
                        <span id="pageInfo" class="text-sm text-gray-600 tabular-nums min-w-[4.5rem] text-center">1 / 1</span>
                        <button type="button" id="nextPage" class="px-3 py-1.5 rounded-lg bg-[#0a1f2c] text-white text-sm hover:bg-[#08333e] disabled:bg-gray-300 disabled:text-gray-500 disabled:cursor-not-allowed transition">→</button>
                    </div>
                    <button type="button" id="closeLicenseModal" class="text-gray-500 hover:text-[#0a1f2c] p-2 rounded-lg hover:bg-gray-200/80 transition" aria-label="Bağla">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="p-4 h-[calc(90vh-120px)] overflow-auto bg-white" id="licenseContainer">
                <div class="flex flex-col items-center space-y-4" id="licensePages"></div>
            </div>
        </div>
    </div>

    <style>
    .license-overlay {
        transition: opacity 0.3s ease;
    }
    </style>

    <script>
    let licensePdf = null;
    let licensePageNum = 1;
    let licenseTotalPages = 0;
    let licenseZoom = 1.0;
    const licenseMinZoom = 0.5;
    const licenseMaxZoom = 3.0;
    const licenseZoomStep = 0.25;

    function openLicenseModal() {
        const modal = document.getElementById('licenseModal');
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        renderLicensePdf('/pdfs/licenses/Lisenziya.pdf');
    }

    function closeLicenseModal() {
        const modal = document.getElementById('licenseModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
        const pagesContainer = document.getElementById('licensePages');
        pagesContainer.innerHTML = '';
        licensePdf = null;
        licensePageNum = 1;
        licenseTotalPages = 0;
        licenseZoom = 1.0;
        updateLicenseZoomDisplay();
    }

    async function renderLicensePdf(pdfUrl) {
        try {
            const loadingTask = pdfjsLib.getDocument(pdfUrl);
            licensePdf = await loadingTask.promise;
            licenseTotalPages = licensePdf.numPages;
            licensePageNum = 1;

            updateLicensePageInfo();
            await renderAllLicensePages();

        } catch (error) {
            console.error('License PDF render error:', error);
            showLicensePdfError();
        }
    }

    async function renderAllLicensePages() {
        const pagesContainer = document.getElementById('licensePages');
        pagesContainer.innerHTML = '';

        if (licenseZoom === 1.0) {
            const container = document.getElementById('licenseContainer');
            const containerWidth = container.clientWidth - 32;
            const optimalZoom = Math.min(1.2, (containerWidth * 0.9) / 595);
            licenseZoom = Math.max(0.5, optimalZoom);
            updateLicenseZoomDisplay();
        }

        for (let pageNum = 1; pageNum <= licenseTotalPages; pageNum++) {
            try {
                const page = await licensePdf.getPage(pageNum);
                const canvas = document.createElement('canvas');
                canvas.className = 'max-w-full h-auto border border-gray-200 rounded-lg shadow-lg mb-4 transition-all duration-300';
                canvas.id = `license-page-${pageNum}`;

                const context = canvas.getContext('2d');
                const viewport = page.getViewport({ scale: licenseZoom });
                canvas.width = viewport.width;
                canvas.height = viewport.height;

                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };

                await page.render(renderContext).promise;

                const pageLabel = document.createElement('div');
                pageLabel.className = 'text-center text-sm text-gray-500 mb-2';
                pageLabel.textContent = `Səhifə ${pageNum}`;

                const pageContainer = document.createElement('div');
                pageContainer.className = 'flex flex-col items-center';
                pageContainer.appendChild(pageLabel);
                pageContainer.appendChild(canvas);

                pagesContainer.appendChild(pageContainer);

            } catch (error) {
                console.error(`Error rendering license page ${pageNum}:`, error);
            }
        }
    }

    function updateLicensePageInfo() {
        const pageInfo = document.getElementById('pageInfo');
        const prevBtn = document.getElementById('prevPage');
        const nextBtn = document.getElementById('nextPage');

        pageInfo.textContent = `${licensePageNum} / ${licenseTotalPages}`;
        prevBtn.disabled = licensePageNum <= 1;
        nextBtn.disabled = licensePageNum >= licenseTotalPages;
    }

    function updateLicenseZoomDisplay() {
        const zoomLevel = document.getElementById('zoomLevel');
        const zoomIn = document.getElementById('zoomIn');
        const zoomOut = document.getElementById('zoomOut');

        zoomLevel.textContent = Math.round(licenseZoom * 100) + '%';
        zoomIn.disabled = licenseZoom >= licenseMaxZoom;
        zoomOut.disabled = licenseZoom <= licenseMinZoom;
    }

    function licenseZoomIn() {
        if (licenseZoom < licenseMaxZoom) {
            licenseZoom = Math.min(licenseMaxZoom, licenseZoom + licenseZoomStep);
            updateLicenseZoomDisplay();
            renderAllLicensePages();
        }
    }

    function licenseZoomOut() {
        if (licenseZoom > licenseMinZoom) {
            licenseZoom = Math.max(licenseMinZoom, licenseZoom - licenseZoomStep);
            updateLicenseZoomDisplay();
            renderAllLicensePages();
        }
    }

    function goToLicensePage(pageNum) {
        if (pageNum >= 1 && pageNum <= licenseTotalPages) {
            licensePageNum = pageNum;
            updateLicensePageInfo();

            const targetPage = document.getElementById(`license-page-${pageNum}`);
            if (targetPage) {
                targetPage.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }

    function showLicensePdfError() {
        const pagesContainer = document.getElementById('licensePages');
        pagesContainer.innerHTML = `
            <div class="flex flex-col items-center justify-center p-8 text-gray-500">
                <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-lg">Lisenziya yüklənə bilmədi</p>
                <p class="text-sm">Zəhmət olmasa yenidən cəhd edin</p>
            </div>
        `;
    }

    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
            generateLicenseThumbnail('/pdfs/licenses/Lisenziya.pdf', 'license-canvas');
        }, 500);

        document.getElementById('closeLicenseModal').addEventListener('click', closeLicenseModal);
        document.getElementById('licenseModal').addEventListener('click', function(e) {
            if (e.target === this) closeLicenseModal();
        });

        document.getElementById('prevPage').addEventListener('click', () => goToLicensePage(licensePageNum - 1));
        document.getElementById('nextPage').addEventListener('click', () => goToLicensePage(licensePageNum + 1));
        document.getElementById('zoomIn').addEventListener('click', licenseZoomIn);
        document.getElementById('zoomOut').addEventListener('click', licenseZoomOut);

        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('licenseModal');
            if (!modal.classList.contains('hidden')) {
                switch(e.key) {
                    case 'Escape': closeLicenseModal(); break;
                    case 'ArrowLeft': e.preventDefault(); goToLicensePage(licensePageNum - 1); break;
                    case 'ArrowRight': e.preventDefault(); goToLicensePage(licensePageNum + 1); break;
                    case '+': case '=': e.preventDefault(); licenseZoomIn(); break;
                    case '-': e.preventDefault(); licenseZoomOut(); break;
                }
            }
        });
    });

    async function generateLicenseThumbnail(pdfUrl, canvasId) {
        try {
            const loadingTask = pdfjsLib.getDocument(pdfUrl);
            const pdf = await loadingTask.promise;
            const page = await pdf.getPage(1);

            const canvas = document.getElementById(canvasId);
            const context = canvas.getContext('2d');

            const viewport = page.getViewport({ scale: 1 });
            const scale = Math.min(300 / viewport.width, 400 / viewport.height);
            const scaledViewport = page.getViewport({ scale: scale });

            canvas.width = 300;
            canvas.height = 400;

            const offsetX = (300 - scaledViewport.width) / 2;
            const offsetY = (400 - scaledViewport.height) / 2;

            context.fillStyle = 'white';
            context.fillRect(0, 0, 300, 400);

            const renderContext = {
                canvasContext: context,
                viewport: scaledViewport,
                transform: [1, 0, 0, 1, offsetX, offsetY]
            };

            await page.render(renderContext).promise;

            const img = document.getElementById('license-placeholder');
            if (img) img.style.display = 'none';
            canvas.style.display = 'block';

        } catch (error) {
            console.log('License thumbnail generation failed:', error);
        }
    }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <script>
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
    </script>

    {{-- CTA — ana səhifə üslubu --}}
    <section class="relative overflow-hidden py-16 lg:py-24 bg-[#0a1f2c] text-white">
        <div class="pointer-events-none absolute -right-20 top-1/2 h-72 w-72 -translate-y-1/2 rounded-full bg-[#08333e]/40 blur-3xl"></div>
        <div class="pointer-events-none absolute -left-16 bottom-0 h-56 w-56 rounded-full bg-teal-400/10 blur-3xl"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center js-reveal">
            <h2 class="text-3xl md:text-[2.35rem] font-extrabold tracking-tight leading-tight">{{ __('about.cta_title') }}</h2>
            <p class="mx-auto mt-5 max-w-2xl text-lg text-white/75 leading-relaxed">{{ __('about.cta_subtitle') }}</p>
            <a href="{{ route('contact') }}" class="cta-shimmer-hover mt-11 inline-flex items-center gap-3 rounded-full bg-white px-8 py-3.5 text-sm font-semibold uppercase tracking-wide text-[#0a1f2c] shadow-xl shadow-black/20 ring-1 ring-white/10 transition hover:-translate-y-1 hover:shadow-2xl">
                {{ __('about.cta_button') }}
                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-[#0a1f2c] text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </span>
            </a>
        </div>
    </section>
</div>

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
