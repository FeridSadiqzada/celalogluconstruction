import './bootstrap';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';

// Register Alpine plugins
Alpine.plugin(intersect);

// Alpine components
Alpine.data('navbar', () => ({
    isOpen: false,
    isScrolled: false,
    
    init() {
        this.handleScroll();
        window.addEventListener('scroll', () => this.handleScroll());
    },
    
    handleScroll() {
        this.isScrolled = window.scrollY > 10;
    },
    
    toggleMenu() {
        this.isOpen = !this.isOpen;
        document.body.style.overflow = this.isOpen ? 'hidden' : '';
    },
    
    closeMenu() {
        this.isOpen = false;
        document.body.style.overflow = '';
    }
}));

Alpine.data('hero', () => ({
    init() {
        // Smooth scroll to next section
        this.$refs.scrollButton?.addEventListener('click', () => {
            const nextSection = document.querySelector('#packages, #services, .section-padding');
            if (nextSection) {
                nextSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }
}));

Alpine.data('contactForm', () => ({
    loading: false,
    success: false,
    error: null,
    
    async submitForm(event) {
        event.preventDefault();
        this.loading = true;
        this.error = null;
        
        try {
            const formData = new FormData(event.target);
            const response = await fetch('/elaqe', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                }
            });
            
            const data = await response.json();
            
            if (response.ok) {
                this.success = true;
                event.target.reset();
                setTimeout(() => {
                    this.success = false;
                }, 5000);
            } else {
                this.error = data.message || 'Xəta baş verdi';
            }
        } catch (error) {
            this.error = 'Xəta baş verdi';
        } finally {
            this.loading = false;
        }
    }
}));

Alpine.data('gallery', () => ({
    currentIndex: 0,
    images: [],
    isOpen: false,
    
    openGallery(images, index = 0) {
        this.images = images;
        this.currentIndex = index;
        this.isOpen = true;
        document.body.style.overflow = 'hidden';
    },
    
    closeGallery() {
        this.isOpen = false;
        document.body.style.overflow = '';
    },
    
    nextImage() {
        this.currentIndex = (this.currentIndex + 1) % this.images.length;
    },
    
    prevImage() {
        this.currentIndex = this.currentIndex === 0 ? this.images.length - 1 : this.currentIndex - 1;
    },
    
    goToImage(index) {
        this.currentIndex = index;
    }
}));

Alpine.data('filter', () => ({
    activeFilter: 'all',
    
    setFilter(filter) {
        this.activeFilter = filter;
        this.filterItems();
    },
    
    filterItems() {
        const items = document.querySelectorAll('[data-filter]');
        items.forEach(item => {
            const itemFilter = item.dataset.filter;
            if (this.activeFilter === 'all' || itemFilter === this.activeFilter) {
                item.style.display = '';
                item.classList.add('animate-fade-in');
            } else {
                item.style.display = 'none';
                item.classList.remove('animate-fade-in');
            }
        });
    }
}));

Alpine.data('counter', () => ({
    count: 0,
    target: 0,
    
    init() {
        this.target = parseInt(this.$el.dataset.target) || 0;
    },
    
    startCounting() {
        const increment = this.target / 100;
        const timer = setInterval(() => {
            this.count += increment;
            if (this.count >= this.target) {
                this.count = this.target;
                clearInterval(timer);
            }
        }, 20);
    }
}));

// Utility functions
window.scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};

window.copyToClipboard = (text) => {
    navigator.clipboard.writeText(text).then(() => {
        // Show toast or notification
        console.log('Copied to clipboard');
    });
};

// Initialize Alpine
window.Alpine = Alpine;
Alpine.start();

// Lazy loading for images
document.addEventListener('DOMContentLoaded', () => {
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('opacity-0');
                img.classList.add('opacity-100');
                observer.unobserve(img);
            }
        });
    });
    
    lazyImages.forEach(img => imageObserver.observe(img));
});

// Smooth scroll for anchor links
document.addEventListener('click', (e) => {
    if (e.target.matches('a[href^="#"]')) {
        e.preventDefault();
        const target = document.querySelector(e.target.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    }
});

// Back to top button
const backToTopButton = document.createElement('button');
backToTopButton.innerHTML = `
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
    </svg>
`;
backToTopButton.className = 'fixed bottom-8 right-8 bg-primary-500 hover:bg-primary-600 text-white p-3 rounded-full shadow-lg transition-all duration-300 opacity-0 pointer-events-none z-50';
backToTopButton.onclick = () => window.scrollToTop();

document.body.appendChild(backToTopButton);

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backToTopButton.classList.remove('opacity-0', 'pointer-events-none');
        backToTopButton.classList.add('opacity-100');
    } else {
        backToTopButton.classList.add('opacity-0', 'pointer-events-none');
        backToTopButton.classList.remove('opacity-100');
    }
});