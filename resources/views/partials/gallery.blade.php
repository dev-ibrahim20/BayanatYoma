<style>
    /* Gallery Section Styles */
    .gallery {
        padding: 80px 20px;
        background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
        border-top: 1px solid #484846;
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
    
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 24px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .gallery-item {
        background: linear-gradient(135deg, #575555 0%, #989f89 50%, #494545 100%);
        border: 1px solid rgba(80, 75, 51, 0.3);
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .gallery-item:hover {
        transform: translateY(-4px);
        border-color: #ffffff;
        box-shadow: 0 16px 48px rgba(255, 255, 255, 0.4);
    }
    
    .gallery-image {
        height: 200px;
        overflow: hidden;
        background: #3a3a00;
    }
    
    .gallery-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease, opacity 0.3s ease;
        opacity: 0.9;
    }
    
    .gallery-item:hover .gallery-image img {
        transform: scale(1.05);
        opacity: 1;
    }
    
    .gallery-item h3 {
        font-size: 1.5rem;
        color: #000000;
        margin: 16px;
        font-weight: 800;
        font-family: 'Arial Black', Arial, sans-serif;
        letter-spacing: 0.5px;
    }
    
    .gallery-item p {
        color: #000000;
        margin: 0 16px 16px;
        font-family: 'Arial', sans-serif;
        font-weight: 500;
        font-size: 1.1rem;
    }
    
    @media (max-width: 768px) {
        .gallery-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .gallery-item h3 {
            font-size: 1.25rem;
        }
        
        .gallery-item p {
            font-size: 1rem;
        }
    }
    
    @media (max-width: 1024px) and (min-width: 769px) {
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
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
        <div class="gallery-grid">
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="https://picsum.photos/seed/event1/400/300.jpg" alt="{{ __('messages.gallery_event1_alt') }}">
                </div>
                <h3>{{ __('messages.gallery_event1_title') }}</h3>
                <p>{{ __('messages.gallery_event1_text') }}</p>
            </div>
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="https://picsum.photos/seed/event2/400/300.jpg" alt="{{ __('messages.gallery_event2_alt') }}">
                </div>
                <h3>{{ __('messages.gallery_event2_title') }}</h3>
                <p>{{ __('messages.gallery_event2_text') }}</p>
            </div>
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="https://picsum.photos/seed/event3/400/300.jpg" alt="{{ __('messages.gallery_event3_alt') }}">
                </div>
                <h3>{{ __('messages.gallery_event3_title') }}</h3>
                <p>{{ __('messages.gallery_event3_text') }}</p>
            </div>
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="https://picsum.photos/seed/event4/400/300.jpg" alt="{{ __('messages.gallery_event4_alt') }}">
                </div>
                <h3>{{ __('messages.gallery_event4_title') }}</h3>
                <p>{{ __('messages.gallery_event4_text') }}</p>
            </div>
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="https://picsum.photos/seed/event5/400/300.jpg" alt="{{ __('messages.gallery_event5_alt') }}">
                </div>
                <h3>{{ __('messages.gallery_event5_title') }}</h3>
                <p>{{ __('messages.gallery_event5_text') }}</p>
            </div>
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="https://picsum.photos/seed/event6/400/300.jpg" alt="{{ __('messages.gallery_event6_alt') }}">
                </div>
                <h3>{{ __('messages.gallery_event6_title') }}</h3>
                <p>{{ __('messages.gallery_event6_text') }}</p>
            </div>
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="https://picsum.photos/seed/event7/400/300.jpg" alt="{{ __('messages.gallery_event7_alt') }}">
                </div>
                <h3>{{ __('messages.gallery_event7_title') }}</h3>
                <p>{{ __('messages.gallery_event7_text') }}</p>
            </div>
            <div class="gallery-item">
                <div class="gallery-image">
                    <img src="https://picsum.photos/seed/event8/400/300.jpg" alt="{{ __('messages.gallery_event8_alt') }}">
                </div>
                <h3>{{ __('messages.gallery_event8_title') }}</h3>
                <p>{{ __('messages.gallery_event8_text') }}</p>
            </div>
        </div>
    </div>
</section>
