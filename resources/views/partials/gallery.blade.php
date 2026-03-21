<style>
    /* Simple Horizontal Gallery */
    .gallery {
        padding: 80px 20px;
          background-image: linear-gradient(135deg, rgb(26, 47, 74) 0%, rgb(26, 47, 74) 40%, rgb(15, 23, 20) 80%);
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
        width: 100%;
    }
    
    .gallery-slider {
        position: relative;
        overflow: hidden;
        border-radius: 20px;
        background: rgba(0, 0, 0, 0.2);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    }
    
    .gallery-wrapper {
        display: flex;
        overflow-x: auto;
        overflow-y: hidden;
        scroll-behavior: smooth;
        gap: 20px;
        padding: 20px 0;
        scrollbar-width: thin;
        scrollbar-color: rgba(255, 255, 255, 0.3) transparent;
    }
    
    .gallery-wrapper::-webkit-scrollbar {
        height: 8px;
    }
    
    .gallery-wrapper::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 4px;
    }
    
    .gallery-wrapper::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 4px;
    }
    
    .gallery-item {
        flex: 0 0 400px;
        position: relative;
        overflow: hidden;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
    }
    
    .gallery-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
    }
    
    .gallery-item img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
    }
    
    .gallery-item:hover img {
        transform: scale(1.05);
    }
    
    .gallery-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
        color: #ffffff;
        padding: 30px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }
    
    .gallery-item:hover .gallery-info {
        transform: translateY(0);
    }
    
    .gallery-info h3 {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 10px;
        font-family: 'Arial Black', Arial, sans-serif;
    }
    
    .gallery-info p {
        font-size: 1.1rem;
        line-height: 1.6;
        opacity: 0.9;
    }
    
    /* Navigation Arrows */
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
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        z-index: 100;
        color: #ffffff;
        font-size: 1.5rem;
    }
    
    .gallery-nav:hover {
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 12px 35px rgba(102, 126, 234, 0.5);
    }
    
    .gallery-nav.prev {
        left: 20px;
    }
    
    .gallery-nav.next {
        right: 20px;
    }
    
    .gallery-nav.disabled {
        opacity: 0.3;
        cursor: not-allowed;
        transform: translateY(-50%);
    }
    
    .gallery-nav.disabled:hover {
        transform: translateY(-50%);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
    }
    
    /* Progress Indicators */
    .gallery-progress {
        display: flex;
        justify-content: center;
        gap: 10px;
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
    
    .gallery-dot:hover {
        background: rgba(255, 255, 255, 0.5);
    }
    
    .gallery-dot.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        transform: scale(1.2);
    }
    
    /* RTL Support */
    [dir="rtl"] .gallery-nav.prev {
        right: 20px;
        left: auto;
    }
    
    [dir="rtl"] .gallery-nav.next {
        left: 20px;
        right: auto;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .gallery {
            padding: 60px 15px;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
        }
        
        .section-header p {
            font-size: 1.4rem;
        }
        
        .gallery-item img {
            height: 350px;
        }
        
        .gallery-info {
            padding: 20px;
        }
        
        .gallery-info h3 {
            font-size: 1.4rem;
        }
        
        .gallery-info p {
            font-size: 1rem;
        }
        
        .gallery-nav {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }
        
        .gallery-nav.prev {
            left: 10px;
        }
        
        .gallery-nav.next {
            right: 10px;
        }
    }
    
    @media (max-width: 480px) {
        .gallery-item img {
            height: 280px;
        }
        
        .gallery-info {
            padding: 15px;
        }
        
        .gallery-info h3 {
            font-size: 1.2rem;
        }
        
        .gallery-info p {
            font-size: 0.9rem;
        }
        
        .gallery-nav {
            width: 45px;
            height: 45px;
            font-size: 1rem;
        }
    }
</style>

@section('title', __('messages.gallery_title'))
<!-- Gallery Section -->
<section id="gallery" class="gallery" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <div class="container">
        <div class="section-header">
            <h2>{{ __('messages.gallery_title') }}</h2>
            <p>{{ __('messages.gallery_subtitle') }}</p>
        </div>
        
        <div class="gallery-container">
            <div class="gallery-slider">
                <div class="gallery-wrapper" id="galleryWrapper">
                    <!-- Gallery Item 1 -->
                    <div class="gallery-item">
                        <img src="https://picsum.photos/seed/event1/400/300.jpg" 
                             alt="{{ __('messages.gallery_event1_alt') }}"
                             loading="lazy">
                        <div class="gallery-info">
                            <h3>{{ __('messages.gallery_event1_title') }}</h3>
                            <p>{{ __('messages.gallery_event1_text') }}</p>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 2 -->
                    <div class="gallery-item">
                        <img src="https://picsum.photos/seed/event2/400/300.jpg" 
                             alt="{{ __('messages.gallery_event2_alt') }}"
                             loading="lazy">
                        <div class="gallery-info">
                            <h3>{{ __('messages.gallery_event2_title') }}</h3>
                            <p>{{ __('messages.gallery_event2_text') }}</p>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 3 -->
                    <div class="gallery-item">
                        <img src="https://picsum.photos/seed/event3/400/300.jpg" 
                             alt="{{ __('messages.gallery_event3_alt') }}"
                             loading="lazy">
                        <div class="gallery-info">
                            <h3>{{ __('messages.gallery_event3_title') }}</h3>
                            <p>{{ __('messages.gallery_event3_text') }}</p>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 4 -->
                    <div class="gallery-item">
                        <img src="https://picsum.photos/seed/event4/400/300.jpg" 
                             alt="{{ __('messages.gallery_event4_alt') }}"
                             loading="lazy">
                        <div class="gallery-info">
                            <h3>{{ __('messages.gallery_event4_title') }}</h3>
                            <p>{{ __('messages.gallery_event4_text') }}</p>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 5 -->
                    <div class="gallery-item">
                        <img src="https://picsum.photos/seed/event5/400/300.jpg" 
                             alt="{{ __('messages.gallery_event5_alt') }}"
                             loading="lazy">
                        <div class="gallery-info">
                            <h3>{{ __('messages.gallery_event5_title') }}</h3>
                            <p>{{ __('messages.gallery_event5_text') }}</p>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 6 -->
                    <div class="gallery-item">
                        <img src="https://picsum.photos/seed/event6/400/300.jpg" 
                             alt="{{ __('messages.gallery_event6_alt') }}"
                             loading="lazy">
                        <div class="gallery-info">
                            <h3>{{ __('messages.gallery_event6_title') }}</h3>
                            <p>{{ __('messages.gallery_event6_text') }}</p>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 7 -->
                    <div class="gallery-item">
                        <img src="https://picsum.photos/seed/event7/400/300.jpg" 
                             alt="{{ __('messages.gallery_event7_alt') }}"
                             loading="lazy">
                        <div class="gallery-info">
                            <h3>{{ __('messages.gallery_event7_title') }}</h3>
                            <p>{{ __('messages.gallery_event7_text') }}</p>
                        </div>
                    </div>
                    
                    <!-- Gallery Item 8 -->
                    <div class="gallery-item">
                        <img src="https://picsum.photos/seed/event8/400/300.jpg" 
                             alt="{{ __('messages.gallery_event8_alt') }}"
                             loading="lazy">
                        <div class="gallery-info">
                            <h3>{{ __('messages.gallery_event8_title') }}</h3>
                            <p>{{ __('messages.gallery_event8_text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Arrows -->
            <button class="gallery-nav prev" id="galleryPrev" 
                    aria-label="{{ __('messages.previous_project') }}"
                    title="{{ __('messages.view_previous') }}">
                <i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'right' : 'left' }}"></i>
            </button>
            <button class="gallery-nav next" id="galleryNext" 
                    aria-label="{{ __('messages.next_project') }}"
                    title="{{ __('messages.view_next') }}">
                <i class="fas fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
            </button>
        </div>
        
        <!-- Progress Indicators -->
        <div class="gallery-progress" id="galleryProgress">
            <div class="gallery-dot active" data-slide="0" 
                 aria-label="{{ __('messages.slide') }} 1"></div>
            <div class="gallery-dot" data-slide="1" 
                 aria-label="{{ __('messages.slide') }} 2"></div>
            <div class="gallery-dot" data-slide="2" 
                 aria-label="{{ __('messages.slide') }} 3"></div>
            <div class="gallery-dot" data-slide="3" 
                 aria-label="{{ __('messages.slide') }} 4"></div>
            <div class="gallery-dot" data-slide="4" 
                 aria-label="{{ __('messages.slide') }} 5"></div>
            <div class="gallery-dot" data-slide="5" 
                 aria-label="{{ __('messages.slide') }} 6"></div>
        </div>
    </div>
</section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const galleryWrapper = document.getElementById('galleryWrapper');
        const prevBtn = document.getElementById('galleryPrev');
        const nextBtn = document.getElementById('galleryNext');
        
        // Smooth scroll functions
        function scrollLeft() {
            galleryWrapper.scrollBy({
                left: -420, // 400px image width + 20px gap
                behavior: 'smooth'
            });
        }
        
        function scrollRight() {
            galleryWrapper.scrollBy({
                left: 420, // 400px image width + 20px gap
                behavior: 'smooth'
            });
        }
        
        // Event listeners
        nextBtn.addEventListener('click', scrollRight);
        prevBtn.addEventListener('click', scrollLeft);
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') scrollRight();
            if (e.key === 'ArrowLeft') scrollLeft();
        });
        
        // Auto-scroll on hover (optional)
        let autoScrollInterval;
        
        function startAutoScroll(direction) {
            stopAutoScroll();
            autoScrollInterval = setInterval(() => {
                if (direction === 'right') {
                    scrollRight();
                } else {
                    scrollLeft();
                }
            }, 50);
        }
        
        function stopAutoScroll() {
            clearInterval(autoScrollInterval);
        }
        
        // Optional: Auto-scroll when holding arrow buttons
        nextBtn.addEventListener('mousedown', () => startAutoScroll('right'));
        nextBtn.addEventListener('mouseup', stopAutoScroll);
        nextBtn.addEventListener('mouseleave', stopAutoScroll);
        
        prevBtn.addEventListener('mousedown', () => startAutoScroll('left'));
        prevBtn.addEventListener('mouseup', stopAutoScroll);
        prevBtn.addEventListener('mouseleave', stopAutoScroll);
    });
</script>
