<style>
    /* Gallery Section Styles */
    .gallery {
        padding: 80px 20px;
        background: linear-gradient(135deg, #C0C0C0 0%, #808080 35%, #696969 65%, #2F4F4F 100%);
        border-top: 1px solid #484846;
        position: relative;
        overflow: hidden;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }
    
    .section-header h2 {
        font-size: 3.5rem;
        color: #ffffff;
        margin-bottom: 1rem;
        font-weight: 900;
        font-family: 'Arial Black', Arial, sans-serif;
        letter-spacing: 2px;
        text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }
    
    .section-header p {
        font-size: 1.8rem;
        color: #ffffff;
        font-weight: 600;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }
    
    .gallery-container {
        position: relative;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 80px;
        width: 100%;
    }
    
    .gallery-sidebar {
        display: flex;
        overflow-x: auto;
        overflow-y: hidden;
        scroll-behavior: smooth;
        gap: 30px;
        padding: 20px 0;
        position: relative;
        scrollbar-width: none;
        -ms-overflow-style: none;
        width: 100%;
        min-width: 0;
        white-space: nowrap;
    }
    
    .gallery-sidebar::-webkit-scrollbar {
        display: none;
    }
    
    .gallery-item {
        flex: 0 0 350px;
        background: linear-gradient(135deg, #575555 0%, #989f89 50%, #494545 100%);
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        position: relative;
        min-height: 400px;
        display: flex;
        flex-direction: column;
    }
    
    .gallery-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
    }
    
    .gallery-item:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        border-color: #667eea;
    }
    
    .gallery-image {
        height: 220px;
        overflow: hidden;
        background: #3a3a00;
        position: relative;
    }
    
    .gallery-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease, opacity 0.3s ease;
        opacity: 0.9;
    }
    
    .gallery-item:hover .gallery-image img {
        transform: scale(1.08);
        opacity: 1;
    }
    
    .gallery-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    
    .gallery-item h3 {
        font-size: 1.5rem;
        color: #ffffff;
        margin-bottom: 15px;
        font-weight: 700;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        letter-spacing: -0.5px;
        line-height: 1.3;
    }
    
    .gallery-item p {
        color: #ffffff;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        font-weight: 400;
        font-size: 1rem;
        line-height: 1.7;
        margin-top: auto;
    }
    
    .gallery-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        z-index: 10;
        color: #ffffff;
        font-size: 1.5rem;
    }
    
    .gallery-nav:hover {
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
    }
    
    .gallery-nav.prev {
        left: 10px;
    }
    
    .gallery-nav.next {
        right: 10px;
    }
    
    .gallery-nav.disabled {
        opacity: 0.3;
        cursor: not-allowed;
        transform: translateY(-50%);
    }
    
    .gallery-nav.disabled:hover {
        transform: translateY(-50%);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
    }
    
    /* Progress Indicator */
    .gallery-progress {
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-top: 30px;
    }
    
    .gallery-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .gallery-dot.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        transform: scale(1.2);
    }
    
    @media (max-width: 768px) {
        .gallery {
            padding: 60px 20px;
        }
        
        .gallery-container {
            padding: 0 60px;
        }
        
        .gallery-item {
            flex: 0 0 280px;
            min-height: 350px;
        }
        
        .gallery-image {
            height: 180px;
        }
        
        .gallery-content {
            padding: 20px;
        }
        
        .gallery-item h3 {
            font-size: 1.3rem;
        }
        
        .gallery-item p {
            font-size: 0.9rem;
        }
        
        .gallery-nav {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }
        
        .section-header h2 {
            font-size: 2.2rem;
        }
    }
    
    @media (max-width: 480px) {
        .gallery-container {
            padding: 0 50px;
        }
        
        .gallery-item {
            flex: 0 0 250px;
            min-height: 320px;
        }
        
        .gallery-image {
            height: 160px;
        }
        
        .gallery-content {
            padding: 15px;
        }
        
        .gallery-item h3 {
            font-size: 1.2rem;
        }
        
        .gallery-item p {
            font-size: 0.85rem;
        }
        
        .gallery-nav {
            width: 45px;
            height: 45px;
            font-size: 1rem;
        }
        
        .section-header h2 {
            font-size: 1.8rem;
        }
    }
</style>

@section('title', __('messages.gallery_title'))
<!-- Gallery Section -->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="section-header">
            <h2>{{ __('messages.gallery_title') }}</h2>
            <p>{{ __('messages.gallery_subtitle') }}</p>
        </div>
        
        <div class="gallery-container">
            <button class="gallery-nav prev" id="galleryPrev" aria-label="Previous">
                <i class="fas fa-chevron-right"></i>
            </button>
            <button class="gallery-nav next" id="galleryNext" aria-label="Next">
                <i class="fas fa-chevron-left"></i>
            </button>
            
            <div class="gallery-sidebar" id="gallerySidebar">
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="https://picsum.photos/seed/event1/400/300.jpg" alt="{{ __('messages.gallery_event1_alt') }}">
                    </div>
                    <div class="gallery-content">
                        <h3>{{ __('messages.gallery_event1_title') }}</h3>
                        <p>{{ __('messages.gallery_event1_text') }}</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="https://picsum.photos/seed/event2/400/300.jpg" alt="{{ __('messages.gallery_event2_alt') }}">
                    </div>
                    <div class="gallery-content">
                        <h3>{{ __('messages.gallery_event2_title') }}</h3>
                        <p>{{ __('messages.gallery_event2_text') }}</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="https://picsum.photos/seed/event3/400/300.jpg" alt="{{ __('messages.gallery_event3_alt') }}">
                    </div>
                    <div class="gallery-content">
                        <h3>{{ __('messages.gallery_event3_title') }}</h3>
                        <p>{{ __('messages.gallery_event3_text') }}</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="https://picsum.photos/seed/event4/400/300.jpg" alt="{{ __('messages.gallery_event4_alt') }}">
                    </div>
                    <div class="gallery-content">
                        <h3>{{ __('messages.gallery_event4_title') }}</h3>
                        <p>{{ __('messages.gallery_event4_text') }}</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="https://picsum.photos/seed/event5/400/300.jpg" alt="{{ __('messages.gallery_event5_alt') }}">
                    </div>
                    <div class="gallery-content">
                        <h3>{{ __('messages.gallery_event5_title') }}</h3>
                        <p>{{ __('messages.gallery_event5_text') }}</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="https://picsum.photos/seed/event6/400/300.jpg" alt="{{ __('messages.gallery_event6_alt') }}">
                    </div>
                    <div class="gallery-content">
                        <h3>{{ __('messages.gallery_event6_title') }}</h3>
                        <p>{{ __('messages.gallery_event6_text') }}</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="https://picsum.photos/seed/event7/400/300.jpg" alt="{{ __('messages.gallery_event7_alt') }}">
                    </div>
                    <div class="gallery-content">
                        <h3>{{ __('messages.gallery_event7_title') }}</h3>
                        <p>{{ __('messages.gallery_event7_text') }}</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image">
                        <img src="https://picsum.photos/seed/event8/400/300.jpg" alt="{{ __('messages.gallery_event8_alt') }}">
                    </div>
                    <div class="gallery-content">
                        <h3>{{ __('messages.gallery_event8_title') }}</h3>
                        <p>{{ __('messages.gallery_event8_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="gallery-progress" id="galleryProgress"></div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('gallerySidebar');
    const prevBtn = document.getElementById('galleryPrev');
    const nextBtn = document.getElementById('galleryNext');
    const progressContainer = document.getElementById('galleryProgress');
    
    let currentIndex = 0;
    let itemWidth = 350;
    let gap = 30;
    let visibleItems = 3;
    
    function updateLayout() {
        const containerWidth = sidebar.parentElement.offsetWidth - 160;
        if (window.innerWidth <= 480) {
            itemWidth = 250;
            visibleItems = 1;
        } else if (window.innerWidth <= 768) {
            itemWidth = 280;
            visibleItems = 2;
        } else {
            // Always show exactly 4 items on desktop
            visibleItems = 4;
            itemWidth = (containerWidth - (gap * (visibleItems - 1))) / visibleItems;
            itemWidth = Math.min(350, Math.max(280, itemWidth)); // Clamp between 280-350px
        }
        
        const items = document.querySelectorAll('.gallery-item');
        items.forEach(item => {
            item.style.flex = `0 0 ${itemWidth}px`;
        });
        
        // Reset to first position when layout changes
        currentIndex = 0;
        updateScroll();
    }
    
    function updateProgress() {
        const items = document.querySelectorAll('.gallery-item');
        const totalItems = items.length;
        const maxIndex = Math.max(0, totalItems - visibleItems);
        
        progressContainer.innerHTML = '';
        
        for (let i = 0; i <= maxIndex; i++) {
            const dot = document.createElement('div');
            dot.className = 'gallery-dot';
            if (i === currentIndex) {
                dot.classList.add('active');
            }
            dot.addEventListener('click', () => {
                currentIndex = i;
                updateScroll();
            });
            progressContainer.appendChild(dot);
        }
    }
    
    function updateScroll() {
        const scrollPosition = currentIndex * (itemWidth + gap);
        console.log('Scrolling to position:', scrollPosition, 'Index:', currentIndex);
        console.log('Item width:', itemWidth, 'Gap:', gap);
        console.log('Sidebar scrollWidth:', sidebar.scrollWidth);
        console.log('Sidebar clientWidth:', sidebar.clientWidth);
        
        // Ensure the sidebar allows horizontal scrolling
        sidebar.style.overflowX = 'auto';
        sidebar.style.overflowY = 'hidden';
        
        // Force scroll using multiple methods for better compatibility
        sidebar.scrollLeft = scrollPosition;
        
        // Try smooth scroll as backup with immediate execution
        sidebar.scrollTo({
            left: scrollPosition,
            behavior: 'smooth'
        });
        
        // Update progress and buttons after scroll animation
        setTimeout(() => {
            updateProgress();
            updateButtons();
            console.log('Actual scroll position:', sidebar.scrollLeft);
        }, 100);
    }
    
    function updateButtons() {
        const items = document.querySelectorAll('.gallery-item');
        const totalItems = items.length;
        const maxIndex = Math.max(0, totalItems - visibleItems);
        
        prevBtn.classList.toggle('disabled', currentIndex === 0);
        nextBtn.classList.toggle('disabled', currentIndex >= maxIndex);
    }
    
    prevBtn.addEventListener('click', () => {
        console.log('Previous clicked, current index:', currentIndex);
        if (currentIndex > 0) {
            currentIndex--;
            console.log('New index:', currentIndex);
            updateScroll();
        }
    });
    
    nextBtn.addEventListener('click', () => {
        console.log('Next clicked, current index:', currentIndex);
        const items = document.querySelectorAll('.gallery-item');
        const totalItems = items.length;
        const maxIndex = Math.max(0, totalItems - visibleItems);
        
        if (currentIndex < maxIndex) {
            currentIndex++;
            console.log('New index:', currentIndex, 'Max index:', maxIndex);
            updateScroll();
        }
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevBtn.click();
        } else if (e.key === 'ArrowRight') {
            nextBtn.click();
        }
    });
    
    // Touch/swipe support
    let startX = 0;
    let isDragging = false;
    
    sidebar.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
    });
    
    sidebar.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        e.preventDefault();
    });
    
    sidebar.addEventListener('touchend', (e) => {
        if (!isDragging) return;
        
        const endX = e.changedTouches[0].clientX;
        const diff = startX - endX;
        
        if (Math.abs(diff) > 50) {
            if (diff > 0) {
                nextBtn.click();
            } else {
                prevBtn.click();
            }
        }
        
        isDragging = false;
    });
    
    // Debug function to check scroll position
    function debugScroll() {
        console.log('Current index:', currentIndex);
        console.log('Item width:', itemWidth);
        console.log('Gap:', gap);
        console.log('Scroll position:', sidebar.scrollLeft);
        console.log('Calculated position:', currentIndex * (itemWidth + gap));
    }
    
    // Add debug button (remove in production)
    window.debugGallery = debugScroll;
    
    // Initialize
    setTimeout(() => {
        console.log('Initializing gallery...');
        console.log('Sidebar element:', sidebar);
        console.log('Items:', document.querySelectorAll('.gallery-item').length);
        
        // Ensure proper scrolling setup
        sidebar.style.overflowX = 'auto';
        sidebar.style.overflowY = 'hidden';
        
        updateLayout();
        updateButtons();
        updateProgress();
        
        console.log('Initialization complete');
        console.log('Initial item width:', itemWidth);
        console.log('Initial visible items:', visibleItems);
        console.log('Total scroll width:', sidebar.scrollWidth);
    }, 100);
    
    window.addEventListener('resize', () => {
        clearTimeout(window.resizeTimer);
        window.resizeTimer = setTimeout(() => {
            updateLayout();
        }, 250);
    });
});
</script>
