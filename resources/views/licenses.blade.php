@extends('layouts.app')

@section('content')
<div class="pt-20 min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-[#1E9BF0] to-[#9CA3AF] py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Lisenziyalar
                </h1>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Şirkətimizin rəsmi lisenziya və sertifikatları
                </p>
            </div>
        </div>
    </div>

    <!-- License Display -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex justify-center" id="licensesGrid">
            <!-- Single license item will be dynamically loaded here -->
        </div>
    </div>

    <!-- PDF Modal -->
    <div id="pdfModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-6xl w-full max-h-[90vh] overflow-hidden">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 id="modalTitle" class="text-lg font-semibold text-gray-900"></h3>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <button id="zoomOut" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 text-sm">
                            -
                        </button>
                        <span id="zoomLevel" class="text-sm text-gray-600 min-w-[50px] text-center">100%</span>
                        <button id="zoomIn" class="px-2 py-1 bg-gray-500 text-white rounded hover:bg-gray-600 text-sm">
                            +
                        </button>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button id="prevPage" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 disabled:bg-gray-300 disabled:cursor-not-allowed">
                            ←
                        </button>
                        <span id="pageInfo" class="text-sm text-gray-600">1 / 1</span>
                        <button id="nextPage" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 disabled:bg-gray-300 disabled:cursor-not-allowed">
                            →
                        </button>
                    </div>
                    <button id="closeModal" class="text-gray-400 hover:text-gray-600 p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="p-4 h-[calc(90vh-120px)] overflow-auto" id="pdfContainer">
                <div class="flex flex-col items-center space-y-4" id="pdfPages">
                    <!-- PDF pages will be rendered here -->
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.license-card {
    transition: all 0.3s ease;
    cursor: pointer;
}

.license-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.license-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(30, 155, 240, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.license-card:hover .license-overlay {
    opacity: 1;
}

.license-actions {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.license-btn {
    background: white;
    color: #1E9BF0;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    text-decoration: none;
}

.license-btn:hover {
    background: #f8fafc;
    transform: scale(1.05);
}

/* Hide PDF viewer toolbar and download buttons */
#pdfViewer {
    pointer-events: none;
}

/* Re-enable scrolling for PDF content */
#pdfViewer::-webkit-scrollbar {
    display: none;
}

/* Hide any download buttons in PDF viewer */
iframe[src*=".pdf"] {
    -webkit-print-color-adjust: exact;
}

/* Additional CSS to hide PDF.js toolbar */
.pdfViewer .toolbar {
    display: none !important;
}

.pdfViewer .secondaryToolbar {
    display: none !important;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Single license data
    const licenses = [
        {
            id: 1,
            title: 'İnşaat Lisenziyası',
            description: 'Ümumi tikinti işləri üçün rəsmi lisenziya',
            pdfUrl: '/pdfs/licenses/Lisenziya.pdf',
            thumbnailUrl: 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDMwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzMDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xMjAgMTYwSDEwMFYxODBIMTIwVjE2MFoiIGZpbGw9IiMxRTlCRjAiLz4KPHBhdGggZD0iTTE4MCAyMDBIMTAwVjIyMEgxODBWMjAwWiIgZmlsbD0iIzlDQTNBRiIvPgo8cGF0aCBkPSJNMTYwIDI0MEgxMDBWMjYwSDE2MFYyNDBaIiBmaWxsPSIjOUNBM0FGIi8+CjxwYXRoIGQ9Ik0xNDAgMjgwSDEwMFYzMDBIMTQwVjI4MFoiIGZpbGw9IiM5Q0EzQUYiLz4KPHRleHQgeD0iMTUwIiB5PSIzNDAiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgZmlsbD0iIzZCNzI4MCIgdGV4dC1hbmNob3I9Im1pZGRsZSI+TGlzZW56aXlhPC90ZXh0Pgo8L3N2Zz4K'
        }
    ];

    const licensesGrid = document.getElementById('licensesGrid');
    const pdfModal = document.getElementById('pdfModal');
    const modalTitle = document.getElementById('modalTitle');
    const closeModal = document.getElementById('closeModal');

    // Render licenses
    function renderLicenses() {
        licensesGrid.innerHTML = '';
        
        licenses.forEach(license => {
            const licenseCard = document.createElement('div');
            licenseCard.className = 'license-card bg-white rounded-lg shadow-lg overflow-hidden relative';
            licenseCard.innerHTML = `
                <div class="aspect-[3/4] bg-gray-100 relative">
                    <img src="${license.thumbnailUrl}" alt="${license.title}" 
                         class="w-full h-full object-cover"
                         onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjQwMCIgdmlld0JveD0iMCAwIDMwMCA0MDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzMDAiIGhlaWdodD0iNDAwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xNTAgMTgwSDEyMFYyMDBIMTUwVjE4MFoiIGZpbGw9IiM5Q0EzQUYiLz4KPHA+CjxyZWN0IHg9IjEyMCIgeT0iMjIwIiB3aWR0aD0iNjAiIGhlaWdodD0iNCIgZmlsbD0iIzlDQTNBRiIvPgo8cmVjdCB4PSIxMjAiIHk9IjIzMCIgd2lkdGg9IjQwIiBoZWlnaHQ9IjQiIGZpbGw9IiM5Q0EzQUYiLz4KPC9zdmc+Cg=='"
                         loading="lazy">
                    <canvas id="pdf-canvas-${license.id}" class="w-full h-full object-cover" style="display: none;"></canvas>
                    <div class="license-overlay">
                        <div class="license-actions">
                            <button class="license-btn zoom-btn" data-license-id="${license.id}">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                </svg>
                                Böyüt
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">${license.title}</h3>
                    <p class="text-gray-600 text-sm">${license.description}</p>
                </div>
            `;
            
            licensesGrid.appendChild(licenseCard);
        });

        // Generate PDF thumbnails for each license
        licenses.forEach(license => {
            setTimeout(() => {
                generatePdfThumbnail(license.pdfUrl, `pdf-canvas-${license.id}`);
            }, 100 * license.id); // Stagger the loading to avoid overwhelming the browser
        });

        // Add event listeners for zoom buttons
        document.querySelectorAll('.zoom-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const licenseId = parseInt(this.dataset.licenseId);
                const license = licenses.find(l => l.id === licenseId);
                if (license) {
                    openPdfModal(license);
                }
            });
        });
    }

    // Open PDF modal
    function openPdfModal(license) {
        modalTitle.textContent = license.title;
        pdfModal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        renderPdfInModal(license.pdfUrl);
    }

    // Global PDF variables
    let currentPdf = null;
    let currentPageNum = 1;
    let totalPages = 0;
    let currentZoom = 1.0;
    const minZoom = 0.5;
    const maxZoom = 3.0;
    const zoomStep = 0.25;

    // Render PDF in modal
    async function renderPdfInModal(pdfUrl) {
        try {
            const loadingTask = pdfjsLib.getDocument(pdfUrl);
            currentPdf = await loadingTask.promise;
            totalPages = currentPdf.numPages;
            currentPageNum = 1;
            
            // Update page info
            updatePageInfo();
            
            // Render all pages
            await renderAllPages();
            
        } catch (error) {
            console.error('PDF render error:', error);
            showPdfError();
        }
    }

    // Calculate optimal initial zoom based on container size
    function calculateOptimalZoom() {
        const container = document.getElementById('pdfContainer');
        const containerWidth = container.clientWidth - 32; // Account for padding
        
        // Assume A4 page ratio (210/297 ≈ 0.707)
        const pageAspectRatio = 0.707;
        const assumedPageWidth = 595; // Standard PDF page width in points
        
        // Calculate zoom to fit width with some margin
        const optimalZoom = Math.min(1.2, (containerWidth * 0.9) / assumedPageWidth);
        return Math.max(0.5, optimalZoom);
    }

    // Render all PDF pages
    async function renderAllPages() {
        const pdfPagesContainer = document.getElementById('pdfPages');
        pdfPagesContainer.innerHTML = '';
        
        // Set initial zoom if not already set
        if (currentZoom === 1.0) {
            currentZoom = calculateOptimalZoom();
            updateZoomDisplay();
        }
        
        for (let pageNum = 1; pageNum <= totalPages; pageNum++) {
            try {
                const page = await currentPdf.getPage(pageNum);
                
                // Create canvas for this page
                const canvas = document.createElement('canvas');
                canvas.className = 'max-w-full h-auto border shadow-lg mb-4 transition-all duration-300';
                canvas.id = `pdf-page-${pageNum}`;
                
                const context = canvas.getContext('2d');
                
                // Use current zoom level
                const viewport = page.getViewport({ scale: currentZoom });
                canvas.width = viewport.width;
                canvas.height = viewport.height;
                
                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                
                await page.render(renderContext).promise;
                
                // Add page number label
                const pageLabel = document.createElement('div');
                pageLabel.className = 'text-center text-sm text-gray-500 mb-2';
                pageLabel.textContent = `Səhifə ${pageNum}`;
                
                const pageContainer = document.createElement('div');
                pageContainer.className = 'flex flex-col items-center';
                pageContainer.appendChild(pageLabel);
                pageContainer.appendChild(canvas);
                
                pdfPagesContainer.appendChild(pageContainer);
                
            } catch (error) {
                console.error(`Error rendering page ${pageNum}:`, error);
            }
        }
    }

    // Update page info display
    function updatePageInfo() {
        const pageInfo = document.getElementById('pageInfo');
        const prevBtn = document.getElementById('prevPage');
        const nextBtn = document.getElementById('nextPage');
        
        pageInfo.textContent = `${currentPageNum} / ${totalPages}`;
        
        prevBtn.disabled = currentPageNum <= 1;
        nextBtn.disabled = currentPageNum >= totalPages;
    }

    // Update zoom display
    function updateZoomDisplay() {
        const zoomLevel = document.getElementById('zoomLevel');
        const zoomIn = document.getElementById('zoomIn');
        const zoomOut = document.getElementById('zoomOut');
        
        zoomLevel.textContent = Math.round(currentZoom * 100) + '%';
        
        zoomIn.disabled = currentZoom >= maxZoom;
        zoomOut.disabled = currentZoom <= minZoom;
    }

    // Zoom in function
    function zoomIn() {
        if (currentZoom < maxZoom) {
            currentZoom = Math.min(maxZoom, currentZoom + zoomStep);
            updateZoomDisplay();
            renderAllPages();
        }
    }

    // Zoom out function
    function zoomOut() {
        if (currentZoom > minZoom) {
            currentZoom = Math.max(minZoom, currentZoom - zoomStep);
            updateZoomDisplay();
            renderAllPages();
        }
    }

    // Navigate to specific page
    function goToPage(pageNum) {
        if (pageNum >= 1 && pageNum <= totalPages) {
            currentPageNum = pageNum;
            updatePageInfo();
            
            // Scroll to the specific page
            const targetPage = document.getElementById(`pdf-page-${pageNum}`);
            if (targetPage) {
                targetPage.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }

    // Show PDF error
    function showPdfError() {
        const pdfPagesContainer = document.getElementById('pdfPages');
        pdfPagesContainer.innerHTML = `
            <div class="flex flex-col items-center justify-center p-8 text-gray-500">
                <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <p class="text-lg">PDF yüklənə bilmədi</p>
                <p class="text-sm">Zəhmət olmasa yenidən cəhd edin</p>
            </div>
        `;
    }

    // Close modal
    function closePdfModal() {
        pdfModal.classList.add('hidden');
        document.body.style.overflow = 'auto';
        // Clear PDF pages
        const pdfPagesContainer = document.getElementById('pdfPages');
        pdfPagesContainer.innerHTML = '';
        // Reset PDF variables
        currentPdf = null;
        currentPageNum = 1;
        totalPages = 0;
        currentZoom = 1.0;
        updateZoomDisplay();
    }

    // Event listeners
    closeModal.addEventListener('click', closePdfModal);
    pdfModal.addEventListener('click', function(e) {
        if (e.target === pdfModal) {
            closePdfModal();
        }
    });

    // Page navigation event listeners
    document.getElementById('prevPage').addEventListener('click', function() {
        goToPage(currentPageNum - 1);
    });

    document.getElementById('nextPage').addEventListener('click', function() {
        goToPage(currentPageNum + 1);
    });

    // Zoom event listeners
    document.getElementById('zoomIn').addEventListener('click', zoomIn);
    document.getElementById('zoomOut').addEventListener('click', zoomOut);

    // ESC key to close modal, arrow keys for navigation, +/- for zoom
    document.addEventListener('keydown', function(e) {
        if (!pdfModal.classList.contains('hidden')) {
            switch(e.key) {
                case 'Escape':
                    closePdfModal();
                    break;
                case 'ArrowLeft':
                    e.preventDefault();
                    goToPage(currentPageNum - 1);
                    break;
                case 'ArrowRight':
                    e.preventDefault();
                    goToPage(currentPageNum + 1);
                    break;
                case '+':
                case '=':
                    e.preventDefault();
                    zoomIn();
                    break;
                case '-':
                    e.preventDefault();
                    zoomOut();
                    break;
            }
        }
    });

    // Mouse wheel zoom support
    document.getElementById('pdfContainer').addEventListener('wheel', function(e) {
        if (e.ctrlKey) {
            e.preventDefault();
            if (e.deltaY < 0) {
                zoomIn();
            } else {
                zoomOut();
            }
        }
    });

    // Scroll-based page tracking
    let scrollTimeout;
    document.getElementById('pdfContainer').addEventListener('scroll', function() {
        if (!currentPdf || totalPages <= 1) return;
        
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            // Find which page is most visible
            const container = this;
            const containerTop = container.scrollTop;
            const containerHeight = container.clientHeight;
            const containerCenter = containerTop + containerHeight / 2;
            
            let closestPage = 1;
            let closestDistance = Infinity;
            
            for (let pageNum = 1; pageNum <= totalPages; pageNum++) {
                const pageElement = document.getElementById(`pdf-page-${pageNum}`);
                if (pageElement) {
                    const pageTop = pageElement.offsetTop - container.offsetTop;
                    const pageCenter = pageTop + pageElement.offsetHeight / 2;
                    const distance = Math.abs(containerCenter - pageCenter);
                    
                    if (distance < closestDistance) {
                        closestDistance = distance;
                        closestPage = pageNum;
                    }
                }
            }
            
            if (closestPage !== currentPageNum) {
                currentPageNum = closestPage;
                updatePageInfo();
            }
        }, 100);
    });

    // Initialize
    renderLicenses();
});

// PDF thumbnail generation
async function generatePdfThumbnail(pdfUrl, canvasId) {
    try {
        const loadingTask = pdfjsLib.getDocument(pdfUrl);
        const pdf = await loadingTask.promise;
        const page = await pdf.getPage(1); // Get first page
        
        const canvas = document.getElementById(canvasId);
        const context = canvas.getContext('2d');
        
        // Set canvas size for thumbnail (300x400 to match aspect ratio)
        const viewport = page.getViewport({ scale: 1 });
        const scale = Math.min(300 / viewport.width, 400 / viewport.height);
        const scaledViewport = page.getViewport({ scale: scale });
        
        canvas.width = 300;
        canvas.height = 400;
        
        // Center the PDF page in the canvas
        const offsetX = (300 - scaledViewport.width) / 2;
        const offsetY = (400 - scaledViewport.height) / 2;
        
        // Clear canvas with white background
        context.fillStyle = 'white';
        context.fillRect(0, 0, 300, 400);
        
        // Render PDF page
        const renderContext = {
            canvasContext: context,
            viewport: scaledViewport,
            transform: [1, 0, 0, 1, offsetX, offsetY]
        };
        
        await page.render(renderContext).promise;
        
        // Hide the placeholder image and show canvas
        const img = canvas.previousElementSibling;
        if (img && img.tagName === 'IMG') {
            img.style.display = 'none';
        }
        canvas.style.display = 'block';
        
    } catch (error) {
        console.log('PDF thumbnail generation failed:', error);
        // Keep the placeholder image visible
    }
}
</script>

<!-- PDF.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
<script>
// Configure PDF.js worker
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
</script>

@endsection