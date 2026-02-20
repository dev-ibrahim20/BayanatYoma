<!-- Hero Section -->
<section id="home" class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <div class="hero-values">
                    <div class="value-point" id="value1">
                        <div class="value-text">
                            <h3>الجودة</h3>
                            <p> 
                                يجب ان نلتزك بكل شيء عن اي شئء نلتزم بأعلى معايير الجودة في كل ما نقدمه
                                يجب ان نلتزك بكل شيء عن اي شئء نلتزم بأعلى معايير الجودة في كل ما نقدمه
                                يجب ان نلتزك بكل شيء عن اي شئء نلتزم بأعلى معايير الجودة في كل ما نقدمه
                            </p>
                        </div>
                    </div>
                    <div class="value-point" id="value2">
                        <div class="value-text">
                            <h3>الإبداع</h3>
                            <p>
                                حلول مبتكرة وأفكار خارجة عن المألوف
                                يجب ان نلتزك بكل شيء عن اي شئء نلتزم بأعلى معايير الجودة في كل ما نقدمه
                                يجب ان نلتزك بكل شيء عن اي شئء نلتزم بأعلى معايير الجودة في كل ما نقدمه
                                يجب ان نلتزك بكل شيء عن اي شئء نلتزم بأعلى معايير الجودة في كل ما نقدمه
                            </p>
                        </div>
                    </div>
                    <div class="value-point" id="value3">
                        <div class="value-text">
                            <h3>الثقة</h3>
                            <p>
                                علاقات طويلة الأمد مبنية على المصداقية
                                يجب ان نلتزك بكل شيء عن اي شئء نلتزم بأعلى معايير الجودة في كل ما نقدمه
                                يجب ان نلتزك بكل شيء عن اي شئء نلتزم بأعلى معايير الجودة في كل ما نقدمه
                                يجب ان نلتزك بكل شيء عن اي شئء نلتزم بأعلى معايير الجودة في كل ما نقدمه
                            </p>
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

<style>
/* Hero Section Styles */
.hero {
    padding: 100px 20px;
    background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
    border-top: 1px solid #585858;
    position: relative;
    overflow: hidden;
}

.hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
    max-width: 1400px;
    margin: 0 auto;
}

.hero-text {
    text-align: right;
    color: #ffffff;
    grid-column: 1;
}

.hero-image {
    grid-column: 2;
    position: relative;
}

.nav-arrows {
    position: absolute;
    left: -80px;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 20px;
    z-index: 10;
}

.nav-arrow {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
    border: 3px solid rgba(255, 255, 255, 0.4);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    color: #505038;
    font-size: 1.5rem;
}

.nav-arrow:hover {
    transform: scale(1.15);
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 50%, #f8f9fa 100%);
    box-shadow: 0 8px 30px rgba(255, 255, 255, 0.5);
    border-color: rgba(255, 255, 255, 0.6);
}

.nav-arrow:active {
    transform: scale(0.95);
}

.hero-values {
    display: flex;
    flex-direction: column;
    gap: 30px;
    flex: 1;
    position: relative;
    min-height: 180px;
}

.value-point {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    padding: 30px;
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
}

.value-point .value-text h3 {
    font-size: 2rem;
    font-weight: 900;
    margin-bottom: 15px;
    font-family: 'Arial Black', Arial, sans-serif;
    color: #ffffff;
    letter-spacing: 1px;
}

.value-point .value-text p {
    font-size: 1.2rem;
    font-weight: 600;
    margin: 0;
    font-family: 'Arial', sans-serif;
    color: #f8f9fa;
    line-height: 1.6;
}

.device-container {
    perspective: 1000px;
}

.device {
    width: 500px;
    height: 350px;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
    border: 8px solid #484846;
    border-radius: 20px;
    padding: 16px;
    box-shadow: 
        0 25px 50px rgba(0, 0, 0, 0.5),
        0 0 0 1px rgba(255, 204, 0, 0.2),
        inset 0 2px 4px rgba(255, 204, 0, 0.1);
    transform: rotateY(-15deg);
    transition: all 0.4s ease;
    position: relative;
    animation: deviceFloat 6s ease-in-out infinite;
}

@keyframes deviceFloat {
    0%, 100% { transform: rotateY(-15deg) translateY(0); }
    50% { transform: rotateY(-15deg) translateY(-10px); }
}

.device:hover {
    transform: rotateY(0deg) scale(1.05) translateY(-5px);
    box-shadow: 
        0 35px 70px rgba(102, 126, 234, 0.3),
        0 0 0 2px rgba(240, 147, 251, 0.5);
    animation: deviceHover 0.5s ease;
}

@keyframes deviceHover {
    0% { transform: rotateY(-15deg) scale(1); }
    50% { transform: rotateY(10deg) scale(1.1); }
    100% { transform: rotateY(0deg) scale(1.05); }
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
    width: 60px;
    height: 6px;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
    border-radius: 3px;
    position: absolute;
    bottom: 12px;
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
    top: 12px;
    left: 50%;
    transform: translateX(-50%);
    width: 16px;
    height: 16px;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
    border-radius: 50%;
    z-index: 5;
    box-shadow: 0 0 25px rgba(255, 255, 255, 0.6);
    animation: cameraGlow 3s ease-in-out infinite alternate;
}

@keyframes cameraGlow {
    0% { box-shadow: 0 0 25px rgba(255, 255, 255, 0.6); }
    100% { box-shadow: 0 0 40px rgba(248, 249, 250, 0.9); }
}

.device::after {
    content: '';
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 25px;
    background: #40401c;
    border-radius: 0 0 15px 15px;
    z-index: 4;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.3);
}

@media (max-width: 768px) {
    .hero {
        padding: 60px 20px;
    }
    
    .hero-content {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
    }
    
    .hero-text {
        text-align: center;
    }
    
    .device {
        width: 350px;
        height: 250px;
    }
    
    .nav-arrows {
        position: static;
        transform: none;
        flex-direction: row;
        justify-content: center;
        margin-bottom: 20px;
    }
}

@media (max-width: 1024px) and (min-width: 769px) {
    .hero-content {
        gap: 40px;
    }
    
    .device {
        width: 400px;
        height: 300px;
    }
}
</style>

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
