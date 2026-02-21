<style>
/* Mobile First - Base Styles */
.hero {
    padding: 60px 20px;
    background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
    border-top: 1px solid #585858;
    position: relative;
    overflow: hidden;
}

.hero-content {
    display: flex;
    flex-direction: column;
    gap: 40px;
    align-items: center;
    max-width: 1400px;
    margin: 0 auto;
}

.hero-text {
    text-align: center;
    color: #ffffff;
    width: 100%;
}

.hero-image {
    width: 100%;
    position: relative;
    display: flex;
    justify-content: center;
}

.nav-arrows {
    display: none;
    flex-direction: row;
    justify-content: center;
    gap: 15px;
    margin-bottom: 20px;
    width: 100%;
}

.nav-arrow {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    color: #505038;
    font-size: 1.2rem;
}

.nav-arrow:hover {
    transform: scale(1.1);
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 50%, #f8f9fa 100%);
    box-shadow: 0 6px 20px rgba(255, 255, 255, 0.4);
    border-color: rgba(255, 255, 255, 0.5);
}

.nav-arrow:active {
    transform: scale(0.95);
}

.hero-values {
    display: flex;
    flex-direction: column;
    gap: 20px;
    flex: 1;
    position: relative;
    min-height: 200px;
    width: 100%;
    justify-content: center;
    align-items: center;
}

.value-point {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 15px;
    padding: 25px 20px;
    border-radius: 12px;
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    min-height: 120px;
    text-align: center;
    opacity: 0;
    transform: translateY(100px) scale(0.9);
    filter: blur(2px);
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.value-point.active {
    opacity: 1;
    transform: translateY(0) scale(1);
    filter: blur(0);
    position: relative;
}

.value-point.exit {
    opacity: 0;
    transform: translateX(100px) scale(0.8);
    filter: blur(3px);
}

.value-point .value-text {
    text-align: center;
    width: 100%;
}

.value-point .value-text h3 {
    font-size: 1.8rem;
    font-weight: 900;
    margin-bottom: 12px;
    font-family: 'Arial Black', Arial, sans-serif;
    color: #ffffff;
    letter-spacing: 1px;
}

.value-point .value-text p {
    font-size: 1rem;
    font-weight: 600;
    margin: 0;
    font-family: 'Arial', sans-serif;
    color: #f8f9fa;
    line-height: 1.6;
}

.device-container {
    perspective: 1000px;
    width: 100%;
    display: flex;
    justify-content: center;
}

.device {
    width: 100%;
    max-width: 350px;
    height: 250px;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
    border: 6px solid #484846;
    border-radius: 20px;
    padding: 12px;
    box-shadow: 
        0 15px 30px rgba(0, 0, 0, 0.4),
        0 0 0 1px rgba(255, 204, 0, 0.2),
        inset 0 2px 4px rgba(255, 204, 0, 0.1);
    transform: rotateY(-10deg);
    transition: all 0.4s ease;
    position: relative;
    animation: deviceFloat 6s ease-in-out infinite;
}

@keyframes deviceFloat {
    0%, 100% { transform: rotateY(-10deg) translateY(0); }
    50% { transform: rotateY(-10deg) translateY(-5px); }
}

.device:hover {
    transform: rotateY(0deg) scale(1.02) translateY(-3px);
    box-shadow: 
        0 20px 40px rgba(102, 126, 234, 0.3),
        0 0 0 2px rgba(240, 147, 251, 0.5);
    animation: deviceHover 0.5s ease;
}

@keyframes deviceHover {
    0% { transform: rotateY(-10deg) scale(1); }
    50% { transform: rotateY(5deg) scale(1.05); }
    100% { transform: rotateY(0deg) scale(1.02); }
}

.device-screen {
    width: 100%;
    height: 100%;
    background: #000000;
    border-radius: 12px;
    overflow: hidden;
    position: relative;
    border: 2px solid #2d2d2d;
}

.device-screen video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    animation: videoGlow 4s ease-in-out infinite alternate;
}

@keyframes videoGlow {
    0% { filter: brightness(1) contrast(1); }
    50% { filter: brightness(1.1) contrast(1.1); }
    100% { filter: brightness(1.05) contrast(1.05); }
}

.device-button {
    width: 40px;
    height: 4px;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
    border-radius: 3px;
    position: absolute;
    bottom: 8px;
    left: 50%;
    transform: translateX(-50%);
    animation: buttonPulse 2s ease-in-out infinite;
}

@keyframes buttonPulse {
    0%, 100% { opacity: 0.6; transform: translateX(-50%) scale(1); }
    50% { opacity: 1; transform: translateX(-50%) scale(1.2); }
}

.device::before {
    content: '';
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    width: 12px;
    height: 12px;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
    border-radius: 50%;
    z-index: 5;
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.6);
    animation: cameraGlow 3s ease-in-out infinite alternate;
}

@keyframes cameraGlow {
    0% { box-shadow: 0 0 15px rgba(255, 255, 255, 0.6); }
    100% { box-shadow: 0 0 25px rgba(248, 249, 250, 0.9); }
}

.device::after {
    content: '';
    position: absolute;
    top: 6px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 18px;
    background: #40401c;
    border-radius: 0 0 10px 10px;
    z-index: 4;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
}

/* Language-specific positioning - Always on left side of values */
html[dir="ltr"] .nav-arrows {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 20px;
    z-index: 10;
}

/* Hide arrows on mobile for English */
@media (max-width: 767px) {
    html[dir="ltr"] .nav-arrows {
        display: none;
    }
}

html[dir="ltr"] .nav-arrow {
    width: 55px;
    height: 55px;
    font-size: 1.3rem;
    border-width: 3px;
}

html[dir="ltr"] .nav-arrow.nav-prev i {
    transform: rotate(0deg);
}

html[dir="ltr"] .nav-arrow.nav-next i {
    transform: rotate(0deg);
}

/* Tablet Styles */
@media (min-width: 768px) {
    .hero {
        padding: 80px 30px;
    }
    
    .hero-content {
        flex-direction: column;
        gap: 50px;
    }
    
    .hero-text {
        text-align: center;
    }
    
    .nav-arrows {
        display: flex;
        flex-direction: row;
        position: static;
        transform: none;
        margin-bottom: 30px;
    }
    
    /* English tablet positioning */
    html[dir="ltr"] .nav-arrows {
        display: flex;
        flex-direction: row;
        position: static;
        transform: none;
        margin-bottom: 30px;
        right: auto;
        left: auto;
    }
    
    .hero-values {
        min-height: 180px;
        justify-content: flex-start;
        align-items: stretch;
    }
    
    .value-point .value-text h3 {
        font-size: 2rem;
    }
    
    .value-point .value-text p {
        font-size: 1.1rem;
    }
    
    .device {
        max-width: 450px;
        height: 320px;
        border-width: 7px;
        padding: 14px;
    }
    
    .device::before {
        width: 14px;
        height: 14px;
        top: 10px;
    }
    
    .device::after {
        width: 100px;
        height: 22px;
        top: 7px;
    }
    
    .device-button {
        width: 50px;
        height: 5px;
        bottom: 10px;
    }
}

/* Small Desktop Styles */
@media (min-width: 1024px) {
    .hero {
        padding: 90px 40px;
    }
    
    .hero-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }
    
    .hero-text {
        text-align: right;
        grid-column: 1;
    }
    
    .hero-image {
        grid-column: 2;
    }
    
    .nav-arrows {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        flex-direction: column;
        gap: 20px;
        width: auto;
        margin-bottom: 0;
    }
    
    .nav-arrow {
        width: 55px;
        height: 55px;
        font-size: 1.3rem;
        border-width: 3px;
    }
    
    .hero-values {
        min-height: 160px;
        justify-content: flex-start;
        align-items: stretch;
    }
    
    .value-point {
        flex-direction: row;
        justify-content: flex-end;
        text-align: right;
        padding: 30px;
    }
    
    .value-point .value-text {
        text-align: right;
    }
    
    .value-point .value-text h3 {
        font-size: 2.2rem;
    }
    
    .value-point .value-text p {
        font-size: 1.2rem;
    }
    
    .device {
        max-width: 500px;
        height: 350px;
        border-width: 8px;
        padding: 16px;
        transform: rotateY(-15deg);
    }
    
    @keyframes deviceFloat {
        0%, 100% { transform: rotateY(-15deg) translateY(0); }
        50% { transform: rotateY(-15deg) translateY(-10px); }
    }
    
    .device:hover {
        transform: rotateY(0deg) scale(1.05) translateY(-5px);
    }
    
    @keyframes deviceHover {
        0% { transform: rotateY(-15deg) scale(1); }
        50% { transform: rotateY(10deg) scale(1.1); }
        100% { transform: rotateY(0deg) scale(1.05); }
    }
    
    .device::before {
        width: 16px;
        height: 16px;
        top: 12px;
    }
    
    .device::after {
        width: 120px;
        height: 25px;
        top: 8px;
    }
    
    .device-button {
        width: 60px;
        height: 6px;
        bottom: 12px;
    }
    
    /* English desktop positioning - arrows left of values */
    html[dir="ltr"] .hero-text {
        text-align: left;
        grid-column: 1;
    }
    
    html[dir="ltr"] .value-point {
        flex-direction: row;
        justify-content: flex-start;
        text-align: left;
        padding: 30px;
    }
    
    html[dir="ltr"] .value-point .value-text {
        text-align: left;
    }
    
    html[dir="ltr"] .nav-arrows {
        position: absolute;
        left: 20px;
        right: auto;
        top: 50%;
        transform: translateY(-50%);
        flex-direction: column;
        gap: 20px;
        width: auto;
        margin-bottom: 0;
    }
}

/* Large Desktop Styles */
@media (min-width: 1440px) {
    .hero {
        padding: 100px 50px;
    }
    
    .hero-content {
        gap: 80px;
    }
    
    .nav-arrows {
        left: -80px;
        gap: 25px;
    }
    
    .nav-arrow {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }
    
    .value-point .value-text h3 {
        font-size: 2.5rem;
    }
    
    .value-point .value-text p {
        font-size: 1.3rem;
    }
    
    .device {
        max-width: 550px;
        height: 380px;
    }
}

/* Extra Large Desktop Styles */
@media (min-width: 1920px) {
    .hero {
        padding: 120px 60px;
    }
    
    .hero-content {
        max-width: 1600px;
        gap: 100px;
    }
    
    .nav-arrows {
        left: -100px;
    }
    
    .nav-arrow {
        width: 70px;
        height: 70px;
        font-size: 1.7rem;
    }
    
    .value-point .value-text h3 {
        font-size: 3rem;
    }
    
    .value-point .value-text p {
        font-size: 1.5rem;
    }
    
    .device {
        max-width: 600px;
        height: 420px;
    }
}

/* Ultra-wide Screens */
@media (min-width: 2560px) {
    .hero {
        padding: 140px 80px;
    }
    
    .hero-content {
        max-width: 1800px;
    }
    
    .device {
        max-width: 650px;
        height: 450px;
    }
}
</style>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="container">
        <div class="hero-content">
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
            </div>
            <div class="hero-image">
                <div class="nav-arrows">
                    <button class="nav-arrow nav-prev" onclick="previousValue()">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <button class="nav-arrow nav-next" onclick="nextValue()">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                </div>
                <div class="device-container">
                    <div class="device">
                        <div class="device-screen">
                            <video autoplay muted loop playsinline poster="https://picsum.photos/seed/video-poster/800/600.jpg">
                                <source src="{{ asset('assets/videos/123.mp4') }}" type="video/mp4">
                                <source src="{{ asset('assets/videos/123.ogg') }}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="device-button"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
// Professional dynamic value points display
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
        }, 300);
        
        currentIndex = index;
        
        // Update navigation arrows visual feedback
        updateNavArrows();
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
        }, 4000);
    }
    
    function stopAutoRotate() {
        clearInterval(autoRotateInterval);
    }
    
    function resetAutoRotate() {
        stopAutoRotate();
        startAutoRotate();
    }
    
    function updateNavArrows() {
        const prevBtn = document.querySelector('.nav-prev');
        const nextBtn = document.querySelector('.nav-next');
        
        // Add pulse effect to arrows
        [prevBtn, nextBtn].forEach(btn => {
            btn.style.transform = 'scale(1.1)';
            setTimeout(() => {
                btn.style.transform = 'scale(1)';
            }, 200);
        });
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
    heroValues.addEventListener('mouseenter', stopAutoRotate);
    heroValues.addEventListener('mouseleave', startAutoRotate);
    
    // Add keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') nextValue();
        if (e.key === 'ArrowRight') previousValue();
    });
});
</script>
