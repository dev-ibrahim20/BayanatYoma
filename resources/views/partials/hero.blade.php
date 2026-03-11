@section('title', __('messages.home'))
<style>
/* iPhone 17 Pro Max Hero Styles */
.hero {
    padding: 20px;
    background: linear-gradient(135deg, #1A2F4A, #C6A87D);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    /* scroll-snap-type: none !important;
    scroll-snap-align: none !important;
    scroll-snap-stop: none !important; */
}

.hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: center;
    max-width: 1400px;
    width: 100%;
    min-height: 100vh;
    margin: 0 auto;
    padding: 0 20px;
}

/* Phone Mockup with Video - Left Side */
.hero-phone {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
}

.phone-mockup {
    position: relative;
    width: 350px;
    height: 700px;
}

.phone-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    position: relative;
    z-index: 1;
    overflow: hidden;
}

.video-container {
    position: relative;
    width: 350px;
    height: 700px;
    border-radius: 40px;
    overflow: hidden;
  background: linear-gradient(135deg, #1A2F4A, #C6A87D);
    border: 8px solid #000000;
    box-shadow: 
        0 0 0 2px #4a4a4c,
        0 20px 60px rgba(0, 0, 0, 0.4),
        inset 0 0 0 2px rgba(255, 255, 255, 0.1);
}

.video-container video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Dynamic Island for Video */
.dynamic-island {
    position: absolute;
    top: 15px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 30px;
    background: #000000;
    border-radius: 20px;
    z-index: 1000;
    box-shadow: 
        0 0 0 1px rgba(255, 255, 255, 0.2),
        inset 0 0 0 1px rgba(255, 255, 255, 0.1);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 15px;
}

.island-camera {
    width: 6px;
    height: 6px;
    background: #34c759;
    border-radius: 50%;
    animation: pulse 2s infinite;
}

.island-indicator {
    width: 4px;
    height: 4px;
    background: #ff3b30;
    border-radius: 50%;
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

/* iPhone Screen */
.iphone-screen {
    position: absolute;
    top: 60px;
    left: 10px;
    right: 10px;
    bottom: 10px;
    background: #000000;
    border-radius: 35px;
    overflow: hidden;
    border: 2px solid #2d2d2d;
}

.iphone-screen video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 33px;
}

/* iPhone Frame Details */
.iphone-frame-details {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
}

.volume-buttons {
    position: absolute;
    left: -5px;
    top: 140px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.volume-up, .volume-down {
    width: 5px;
    height: 45px;
    background: linear-gradient(135deg, #d35400 0%, #e67e22 100%);
    border-radius: 2px;
    box-shadow: 0 2px 4px rgba(211, 84, 0, 0.3);
}

.volume-down {
    height: 35px;
}

.power-button {
    position: absolute;
    right: -5px;
    top: 160px;
    width: 5px;
    height: 70px;
    background: linear-gradient(135deg, #d35400 0%, #e67e22 100%);
    border-radius: 2px;
    box-shadow: 0 2px 4px rgba(211, 84, 0, 0.3);
}

.silent-switch {
    position: absolute;
    left: -5px;
    top: 90px;
    width: 5px;
    height: 25px;
    background: linear-gradient(135deg, #d35400 0%, #e67e22 100%);
    border-radius: 2px;
    box-shadow: 0 2px 4px rgba(211, 84, 0, 0.3);
}

/* Hero Text - Right Side */
.hero-text {
    text-align: center;
    color: #ffffff;
    padding: 40px 20px;
}

.hero-values {
    position: relative;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.value-point {
    position: absolute;
    width: 100%;
    opacity: 0;
    transform: translateX(50px);
    transition: all 1s ease;
    text-align: center;
}

.value-point.active {
    opacity: 1;
    transform: translateX(0);
}

.value-point.exit {
    opacity: 0;
    transform: translateX(-50px);
}

.value-point .value-text h3 {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 20px;
    background: #ffffff;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1.2;
}

.value-point .value-text p {
    font-size: 1.3rem;
    color: #ffffff;
    line-height: 1.6;
    margin-bottom: 30px;
}

.hero-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-top: 40px;
    flex-wrap: wrap;
}

.btn-primary, .btn-secondary {
    padding: 15px 30px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    border: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 140px;
}

.btn-primary {
    background: rgba(255, 255, 255, 0.2);
    color: #ffffff;
    box-shadow: 0 8px 25px rgba(0, 122, 255, 0.4);
}

.btn-primary:hover {
    transform: translateY(-2px);
}

.btn-secondary {
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border: 2px solid rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(10px);
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: rgba(255, 255, 255, 0.5);
    color: #ffffff;
}

/* Social Media Sidebar */
.social-sidebar {
    position: fixed;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1000;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.social-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 18px;
    position: relative;
    overflow: hidden;
}

.social-icon.facebook {
    background: linear-gradient(135deg, #1877f2 0%, #0e5fcc 100%);
    color: #ffffff;
}

.social-icon.twitter {
    background: linear-gradient(135deg, #1da1f2 0%, #0c85d0 100%);
    color: #ffffff;
}

.social-icon.instagram {
    background: linear-gradient(135deg, #e4405f 0%, #c13584 50%, #833ab4 100%);
    color: #ffffff;
}

.social-icon.linkedin {
    background: linear-gradient(135deg, #0077b5 0%, #005885 100%);
    color: #ffffff;
}

.social-icon.youtube {
    background: linear-gradient(135deg, #ff0000 0%, #cc0000 100%);
    color: #ffffff;
}

.social-icon.whatsapp {
    background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
    color: #ffffff;
}

.social-icon::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.1) 100%);
    transition: left 0.3s ease;
}

.social-icon:hover {
    transform: scale(1.1);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.social-icon:hover::before {
    left: 100%;
}

/* Social Tooltip */
.social-icon {
    position: relative;
}

.social-icon::after {
    content: attr(data-tooltip);
    position: absolute;
    right: 50px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.9);
    color: #ffffff;
    padding: 8px 12px;
    border-radius: 8px;
    font-size: 12px;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.social-icon:hover::after {
    opacity: 1;
    right: 55px;
}

/* Responsive Design */
@media (max-width: 1200px) {
    .hero-content {
        max-width: 1200px;
        gap: 30px;
    }
    
    .phone-mockup, .video-container {
        width: 320px;
        height: 640px;
    }
    
    .value-point .value-text h3 {
        font-size: 2.8rem;
    }
}

@media (max-width: 1024px) {
    .hero {
        padding: 15px;
    }
    
    .hero-content {
        grid-template-columns: 1fr;
        gap: 30px;
        text-align: center;
        padding: 0 15px;
    }
    
    .hero-text {
        order: 2;
        padding: 30px 20px;
    }
    
    .hero-phone {
        order: 1;
        gap: 20px;
        height: auto;
        min-height: 60vh;
    }
    
    .phone-mockup, .video-container {
        width: 280px;
        height: 560px;
    }
    
    .value-point .value-text h3 {
        font-size: 2.5rem;
    }
    
    .value-point .value-text p {
        font-size: 1.2rem;
    }
    
    .hero-buttons {
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .hero {
        padding: 10px;
    }
    
    .hero-content {
        gap: 20px;
        padding: 0 10px;
        grid-template-columns: 1fr 2fr;
        align-items: center;
    }
    
    .hero-phone {
        flex-direction: row;
        gap: 15px;
        height: auto;
        min-height: 40vh;
        justify-content: center;
    }
    
    .hero-text {
        padding: 25px 15px;
        min-height: auto;
        order: 2;
    }
    
    .phone-mockup, .video-container {
        width: 140px;
        height: 280px;
    }
    
    .dynamic-island {
        width: 50px;
        height: 18px;
    }
    
    .value-point .value-text h3 {
        font-size: 2.2rem;
    }
    
    .value-point .value-text p {
        font-size: 1.2rem;
    }
    
    .hero-buttons {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }
    
    .btn-primary, .btn-secondary {
        width: 100%;
        max-width: 200px;
    }
}

@media (max-width: 480px) {
    .hero {
        padding: 5px;
    }
    
    .hero-content {
        gap: 15px;
        padding: 0 5px;
        grid-template-columns: 1fr 2fr;
        align-items: center;
    }
    
    .hero-phone {
        gap: 10px;
        min-height: 35vh;
        flex-direction: row;
        justify-content: center;
    }
    
    .hero-text {
        padding: 20px 10px;
        order: 2;
    }
    
    .phone-mockup, .video-container {
        width: 120px;
        height: 240px;
        border-radius: 25px;
        border: 4px solid #000000;
    }
    
    .dynamic-island {
        width: 40px;
        height: 15px;
    }
    
    .volume-up, .volume-down {
        height: 20px;
    }
    
    .volume-down {
        height: 15px;
    }
    
    .power-button {
        height: 35px;
    }
    
    .value-point .value-text h3 {
        font-size: 2rem;
        margin-bottom: 15px;
    }
    
    .value-point .value-text p {
        font-size: 1.1rem;
        margin-bottom: 20px;
    }
    
    .hero-buttons {
        gap: 10px;
    }
    
    .btn-primary, .btn-secondary {
        padding: 12px 25px;
        font-size: 14px;
        min-width: 120px;
    }
}

@media (max-width: 360px) {
    .hero-content {
        gap: 10px;
        grid-template-columns: 1fr 2fr;
        align-items: center;
    }
    
    .hero-phone {
        gap: 8px;
        min-height: 30vh;
        flex-direction: row;
        justify-content: center;
    }
    
    .phone-mockup, .video-container {
        width: 100px;
        height: 200px;
    }
    
    .dynamic-island {
        width: 35px;
        height: 12px;
    }
    
    .value-point .value-text h3 {
        font-size: 1.8rem;
    }
    
    .value-point .value-text p {
        font-size: 1rem;
    }
    
    .btn-primary, .btn-secondary {
        padding: 10px 20px;
        font-size: 13px;
        min-width: 100px;
    }
}

/* Social Media Sidebar Responsive */
@media (max-width: 1024px) {
    .social-sidebar {
        left: 10px;
        gap: 12px;
    }
    
    .social-icon {
        width: 35px;
        height: 35px;
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    .social-sidebar {
        left: 5px;
        gap: 10px;
    }
    
    .social-icon {
        width: 30px;
        height: 30px;
        font-size: 14px;
    }
    
    .social-icon::after {
        display: none;
    }
}

@media (max-width: 480px) {
    .social-sidebar {
        bottom: 20px;
        left: 50%;
        top: auto;
        transform: translateX(-50%);
        flex-direction: row;
        gap: 8px;
    }
    
    .social-icon {
        width: 35px;
        height: 35px;
        font-size: 16px;
    }
}
</style>

<!-- Social Media Sidebar -->
<div class="social-sidebar">
    <a href="https://facebook.com" target="_blank" class="social-icon facebook" data-tooltip="Facebook" 
       aria-label="{{ __('messages.follow_facebook') }}" title="{{ __('messages.facebook_page') }}">
        <i class="fab fa-facebook-f" aria-hidden="true"></i>
    </a>
    <a href="https://twitter.com" target="_blank" class="social-icon twitter" data-tooltip="Twitter"
       aria-label="{{ __('messages.follow_twitter') }}" title="{{ __('messages.twitter_profile') }}">
        <i class="fab fa-twitter" aria-hidden="true"></i>
    </a>
    <a href="https://instagram.com" target="_blank" class="social-icon instagram" data-tooltip="Instagram"
       aria-label="{{ __('messages.follow_instagram') }}" title="{{ __('messages.instagram_profile') }}">
        <i class="fab fa-instagram" aria-hidden="true"></i>
    </a>
    <a href="https://linkedin.com" target="_blank" class="social-icon linkedin" data-tooltip="LinkedIn"
       aria-label="{{ __('messages.follow_linkedin') }}" title="{{ __('messages.linkedin_page') }}">
        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
    </a>
    <a href="https://youtube.com" target="_blank" class="social-icon youtube" data-tooltip="YouTube"
       aria-label="{{ __('messages.follow_youtube') }}" title="{{ __('messages.youtube_channel') }}">
        <i class="fab fa-youtube" aria-hidden="true"></i>
    </a>
    <a href="https://wa.me/1234567890" target="_blank" class="social-icon whatsapp" data-tooltip="WhatsApp"
       aria-label="{{ __('messages.contact_whatsapp') }}" title="{{ __('messages.whatsapp_contact') }}">
        <i class="fab fa-whatsapp" aria-hidden="true"></i>
    </a>
</div>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-content">
        <!-- Phone Mockup with Video - Left Side -->
        <div class="hero-phone">
            {{-- <div class="phone-mockup">
                <img src="{{ asset('assets/images/mockup_apple_iphone_13_pro_max.png') }}" alt="iPhone Mockup" class="phone-image">
            </div> --}}
            
            <div class="video-container">
                <!-- Dynamic Island -->
                <div class="dynamic-island">
                    <div class="island-camera"></div>
                    <div class="island-indicator"></div>
                </div>
                
                <video autoplay muted loop playsinline 
                       aria-label="{{ __('messages.hero_video_description') }}"
                       title="{{ __('messages.company_showcase_video') }}">
                    <source src="{{ asset('assets/videos/123.mp4') }}" type="video/mp4">
                    <source src="{{ asset('assets/videos/123.ogg') }}" type="video/ogg">
                    <track kind="captions" srclang="{{ app()->getLocale() }}" label="{{ __('messages.captions') }}" src="{{ asset('assets/captions/hero-video-' . app()->getLocale() . '.vtt') }}">
                    <track kind="descriptions" srclang="{{ app()->getLocale() }}" label="{{ __('messages.descriptions') }}" src="{{ asset('assets/descriptions/hero-video-' . app()->getLocale() . '.vtt') }}">
                    {{ __('messages.video_not_supported') }}
                </video>
            </div>
            
            <!-- Camera Overlay -->
            <div class="camera-overlay">
                <div class="camera-icon"></div>
            </div>
        </div>
        
        <!-- Hero Text - Right Side -->
        <div class="hero-text">
            <div class="hero-values">
                <div class="value-point" id="value1">
                    <div class="value-text">
                        <h3>{{ __('messages.quality') }}</h3>
                        <p>بسم الله الرحمن الرحيم كل حاجة تمام وبسم الله ما شاء الله ولا حول ولا قوة الا بالله العلي العظيم</p>
                    </div>
                </div>
                <div class="value-point" id="value2">
                    <div class="value-text">
                        <h3>{{ __('messages.creativity') }}</h3>
                        <p>{{ __('messages.creativity_text') }}</p>
                    </div>
                </div>
                <div class="value-point" id="value3">
                    <div class="value-text">
                        <h3>{{ __('messages.trust') }}</h3>
                        <p>{{ __('messages.trust_text') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="hero-buttons">
                <a href="#services" class="btn-primary">{{ __('messages.services_btn') }}</a>
                <a href="#contact" class="btn-secondary">{{ __('messages.contact_btn') }}</a>
            </div>
        </div>
    </div>
</section>


<script>
// Professional dynamic value points display - Change every 10 seconds
document.addEventListener('DOMContentLoaded', function() {
    const values = ['value1', 'value2', 'value3'];
    let currentIndex = 0;
    let autoRotateInterval;
    let isTransitioning = false;
    
    function showValue(index, direction = 'next') {
        if (isTransitioning) return;
        isTransitioning = true;
        
        const currentElement = document.getElementById(values[currentIndex]);
        const nextElement = document.getElementById(values[index]);
        
        // Exit animation for current element
        currentElement.classList.add('exit');
        currentElement.classList.remove('active');
        
        // Prepare next element
        nextElement.classList.remove('exit');
        
        // Show next element with entrance animation
        setTimeout(() => {
            nextElement.classList.add('active');
            
            setTimeout(() => {
                currentElement.classList.remove('exit');
                isTransitioning = false;
            }, 100);
        }, 500);
        
        currentIndex = index;
    }
    
    function nextValue() {
        const nextIndex = (currentIndex + 1) % values.length;
        showValue(nextIndex, 'next');
        resetAutoRotate();
    }
    
    function previousValue() {
        const prevIndex = (currentIndex - 1 + values.length) % values.length;
        showValue(prevIndex, 'prev');
        resetAutoRotate();
    }
    
    function startAutoRotate() {
        autoRotateInterval = setInterval(() => {
            nextValue();
        }, 10000); // Change every 10 seconds
    }
    
    function stopAutoRotate() {
        clearInterval(autoRotateInterval);
    }
    
    function resetAutoRotate() {
        stopAutoRotate();
        startAutoRotate();
    }
    
    // Make functions global for onclick handlers
    window.nextValue = nextValue;
    window.previousValue = previousValue;
    
    // Initialize
    setTimeout(() => {
        showValue(0);
        startAutoRotate();
    }, 1000);
    
    // Pause auto-rotation on hover
    const heroValues = document.querySelector('.hero-values');
    if (heroValues) {
        heroValues.addEventListener('mouseenter', stopAutoRotate);
        heroValues.addEventListener('mouseleave', startAutoRotate);
    }
    
    // Add keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') nextValue();
        if (e.key === 'ArrowRight') previousValue();
    });
});
</script>
