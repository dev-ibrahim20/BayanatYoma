@extends('layouts.master')

@section('title', app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en)

@section('content')
<!-- Service Detail Hero Section -->
<section class="service-detail-hero">
    <div class="container">
        <div class="service-hero-content">
            <div class="service-hero-text">
                <h1>{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}</h1>
                <p>{{ app()->getLocale() == 'ar' ? $service->description_ar : $service->description_en }}</p>
            </div>
            <div class="service-hero-image">
                <img src="{{ asset('Arqco/public/assets/arqco-logo.png') }}" alt="{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}">
            </div>
        </div>
    </div>
</section>

<!-- Service Details Section -->
<section class="service-details">
    <div class="container">
        <div class="service-details-grid">
            <div class="service-main-content">
                <div class="service-description">
                    <h2>{{ __('messages.service_description') }}</h2>
                    <p>{{ app()->getLocale() == 'ar' ? $service->description_ar : $service->description_en }}</p>
                </div>

                <div class="service-features">
                    <h2>{{ __('messages.service_features') }}</h2>
                    <div class="features-list">
                        @php
                            $features = app()->getLocale() == 'ar' ? json_decode($service->features_ar) : json_decode($service->features_en);
                        @endphp
                        @if($features && is_array($features))
                            @foreach($features as $feature)
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>{{ $feature }}</span>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- Service Gallery -->
                <div class="service-gallery">
                    <h2>{{ __('messages.service_gallery') }}</h2>
                    <div class="gallery-grid">
                        @php
                            // جلب الأعمال المرتبطة بالخدمة الحالية
                            $serviceWorks = \App\Models\OurWork::where('service_id', $service->id)->where('is_active', 1)->get();
                        @endphp
                        
                        @if($serviceWorks && $serviceWorks->count() > 0)
                            <!-- Main Service Work -->
                            <div class="gallery-item main-image" onclick="openLightbox(0)">
                                <img src="{{ asset('Arqco/public/' . $serviceWorks->first()->image) }}" alt="{{ app()->getLocale() == 'ar' ? $serviceWorks->first()->title_ar : $serviceWorks->first()->title_en }}">
                                <div class="gallery-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                            
                            <!-- Additional Service Works (4 more for total of 5) -->
                            @foreach($serviceWorks->slice(1, 4) as $index => $work)
                                <div class="gallery-item" onclick="openLightbox({{ $index + 1 }})">
                                    <img src="{{ asset('Arqco/public/' . $work->image) }}" alt="{{ app()->getLocale() == 'ar' ? $work->title_ar : $work->title_en }}">
                                    <div class="gallery-overlay">
                                        <i class="fas fa-search-plus"></i>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <!-- No Works Available Message -->
                            <div class="no-images-container">
                                <div class="no-images-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <h3>{{ app()->getLocale() == 'ar' ? 'لا يوجد أعمال حالياً' : 'No Works Available' }}</h3>
                                <p>{{ app()->getLocale() == 'ar' ? 'لم تتم إضافة أي أعمال لهذه الخدمة بعد' : 'No works have been added to this service yet' }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="service-sidebar">
                <div class="service-info-card">
                    <h3>{{ __('messages.service_info') }}</h3>
                    <div class="info-item">
                        <i class="fas fa-check-circle"></i>
                        <span>{{ __('messages.service_status') }}: {{ $service->status ? __('messages.active') : __('messages.inactive') }}</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar"></i>
                        <span>{{ __('messages.created_at') }}: {{ $service->created_at->format('Y-m-d') }}</span>
                    </div>
                </div>

                <!-- Related Services -->
                <div class="related-services">
                    <h3>{{ __('messages.related_services') }}</h3>
                    <div class="related-services-grid">
                        @php
                            $relatedServices = \App\Models\Service::where('id', '!=', $service->id)
                                                                ->where('status', 1)
                                                                ->inRandomOrder()
                                                                ->take(3)
                                                                ->get();
                        @endphp
                        @if($relatedServices && $relatedServices->count() > 0)
                            @foreach($relatedServices as $relatedService)
                                <div class="related-service-item">
                                    <div class="related-service-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <a href="{{ route('service.show', $relatedService->slug) }}">
                                        {{ app()->getLocale() == 'ar' ? $relatedService->title_ar : $relatedService->title_en }}
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="related-service-item">
                                <div class="related-service-icon">
                                    <i class="fas fa-code"></i>
                                </div>
                                <a href="#">{{ __('messages.web_development') }}</a>
                            </div>
                            <div class="related-service-item">
                                <div class="related-service-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <a href="#">{{ __('messages.mobile_apps') }}</a>
                            </div>
                            <div class="related-service-item">
                                <div class="related-service-icon">
                                    <i class="fas fa-paint-brush"></i>
                                </div>
                                <a href="#">{{ __('messages.ui_design') }}</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    @include('partials.contact')
@endsection

@push('scripts')
<script>
// Gallery Images Array
const galleryImages = [
    @if(isset($portfolioImages) && $portfolioImages && $portfolioImages->count() > 0)
        @foreach($portfolioImages->take(5) as $work)
            "{{ asset('Arqco/public/' . $work->image) }}",
        @endforeach
    @else
        "{{ asset('assets/images/placeholder-main.jpg') }}",
        "{{ asset('assets/images/placeholder-1.jpg') }}",
        "{{ asset('assets/images/placeholder-2.jpg') }}",
        "{{ asset('assets/images/placeholder-3.jpg') }}",
        "{{ asset('assets/images/placeholder-4.jpg') }}",
        "{{ asset('assets/images/placeholder-5.jpg') }}",
        "{{ asset('assets/images/placeholder-6.jpg') }}",
        "{{ asset('assets/images/placeholder-7.jpg') }}"
    @endif
].filter(Boolean);

let currentImageIndex = 0;

function openLightbox(index) {
    currentImageIndex = index;
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    const currentImageSpan = document.getElementById('current-image');
    const totalImagesSpan = document.getElementById('total-images');
    
    lightboxImage.src = galleryImages[index];
    lightbox.style.display = 'flex';
    document.body.style.overflow = 'hidden';
    
    // Update counter
    currentImageSpan.textContent = index + 1;
    totalImagesSpan.textContent = galleryImages.length;
}

function closeLightbox() {
    const lightbox = document.getElementById('lightbox');
    lightbox.style.display = 'none';
    document.body.style.overflow = 'auto';
}

function navigateLightbox(direction) {
    currentImageIndex += direction;
    
    if (currentImageIndex < 0) {
        currentImageIndex = galleryImages.length - 1;
    } else if (currentImageIndex >= galleryImages.length) {
        currentImageIndex = 0;
    }
    
    const lightboxImage = document.getElementById('lightbox-image');
    const currentImageSpan = document.getElementById('current-image');
    
    lightboxImage.src = galleryImages[currentImageIndex];
    currentImageSpan.textContent = currentImageIndex + 1;
}

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    const lightbox = document.getElementById('lightbox');
    
    if (lightbox && lightbox.style.display === 'flex') {
        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft') {
            navigateLightbox(-1);
        } else if (e.key === 'ArrowRight') {
            navigateLightbox(1);
        }
    }
});
</script>
@endpush
