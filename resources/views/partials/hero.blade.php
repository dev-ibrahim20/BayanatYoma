@section('title', __('messages.home'))
<style>
/* iPhone 17 Pro Max Hero Styles */
.hero {
    padding: 40px 20px;
    background: linear-gradient(135deg, #C0C0C0 0%, #808080 35%, #696969 65%, #2F4F4F 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    overflow-x: hidden;
    scroll-snap-type: none !important;
    scroll-snap-align: none !important;
    scroll-snap-stop: none !important;
}

.hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    max-width: 1200px;
    width: 100%;
    min-height: 100vh;
    margin: 0 auto;
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
    background: linear-gradient(135deg, #1c1c1e 0%, #2c2c2e 50%, #3a3a3c 100%);
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
    text-align: right;
    color: #ffffff;
    padding: 20px;
}

.hero-values {
    position: relative;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.value-point {
    position: absolute;
    width: 100%;
    opacity: 0;
    transform: translateX(50px);
    transition: all 1s ease;
    text-align: right;
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
    background: linear-gradient(135deg, #818d70 0%, #55555d 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1.2;
}

.value-point .value-text p {
    font-size: 1.3rem;
    color: #8e8e93;
    line-height: 1.6;
    margin-bottom: 30px;
}

.hero-buttons {
    display: flex;
    gap: 20px;
    justify-content: flex-end;
    margin-top: 40px;
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
    background: linear-gradient(135deg, #007aff 0%, #5856d6 100%);
    color: #ffffff;
    box-shadow: 0 8px 25px rgba(0, 122, 255, 0.4);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 35px rgba(0, 122, 255, 0.5);
}

.btn-secondary {
    background: rgba(255, 255, 255, 0.1);
    color: #007aff;
    border: 2px solid rgba(0, 122, 255, 0.3);
    backdrop-filter: blur(10px);
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: rgba(0, 122, 255, 0.5);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .hero-content {
        grid-template-columns: 1fr;
        gap: 20px;
        text-align: center;
        padding: 20px;
    }
    
    .hero-text {
        text-align: center;
        order: 2;
        padding: 20px;
    }
    
    .hero-phone {
        order: 1;
        gap: 15px;
        height: auto;
        min-height: 60vh;
    }
    
    .phone-mockup {
        width: 280px;
        height: 560px;
    }
    
    .video-container {
        width: 280px;
        height: 560px;
    }
    
    .value-point .value-text h3 {
        font-size: 2.5rem;
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
        gap: 15px;
        padding: 10px;
    }
    
    .hero-phone {
        flex-direction: column;
        gap: 10px;
        height: auto;
        min-height: 50vh;
    }
    
    .hero-text {
        padding: 15px;
        height: auto;
        min-height: 40vh;
    }
    
    .phone-mockup {
        width: 240px;
        height: 480px;
    }
    
    .video-container {
        width: 240px;
        height: 480px;
    }
    
    .dynamic-island {
        width: 80px;
        height: 25px;
    }
    
    .value-point .value-text h3 {
        font-size: 2rem;
    }
    
    .value-point .value-text p {
        font-size: 1.1rem;
    }
}

@media (max-width: 480px) {
    .hero-content {
        gap: 10px;
        padding: 5px;
    }
    
    .hero-phone {
        gap: 8px;
        min-height: 45vh;
    }
    
    .hero-text {
        padding: 10px;
        min-height: 45vh;
    }
    
    .phone-mockup {
        width: 200px;
        height: 400px;
    }
    
    .video-container {
        width: 200px;
        height: 400px;
        border-radius: 30px;
        border: 6px solid #000000;
    }
    
    .dynamic-island {
        width: 70px;
        height: 22px;
    }
    
    .volume-up, .volume-down {
        height: 30px;
    }
    
    .volume-down {
        height: 25px;
    }
    
    .power-button {
        height: 50px;
    }
    
    .value-point .value-text h3 {
        font-size: 1.8rem;
    }
    
    .hero-buttons {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }
    
    .btn-primary, .btn-secondary {
        width: 100%;
        max-width: 250px;
    }
}
</style>

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
                
                <video autoplay muted loop playsinline>
                    <source src="{{ asset('assets/videos/123.mp4') }}" type="video/mp4">
                    <source src="{{ asset('assets/videos/123.ogg') }}" type="video/ogg">
                    Your browser does not support video tag.
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
                        <p>{{ __('messages.quality_text') }}</p>
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
                <a href="#services" class="btn-primary">ابدأ الآن</a>
                <a href="#contact" class="btn-secondary">تواصل معنا</a>
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
