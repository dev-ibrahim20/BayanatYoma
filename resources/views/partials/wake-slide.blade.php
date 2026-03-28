@section('title', __('messages.customers'))
<style>
    /* Wake Slider Section */
    .wake-section {
        padding: 40px 0;
        background: rgb(255, 249, 230) !important;
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    
    .wake-container {
        width: 100%;
        position: relative;
    }
    
    
    .wake-slider {
        position: relative;
        overflow: hidden;
        width: 100%;
        padding: 20px 0;
    }
    
    .slider-wrapper {
        display: flex;
        animation: slideAnimation 3s linear infinite;
        width: fit-content;
    }
    
    .slider-wrapper:hover {
        animation-play-state: paused;
    }
    
    .wake-slide {
        min-width: 450px;
        width: 450px;
        height: auto;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .wake-slide img {
        width: 420px;
        height: 250px;
        object-fit: contain;
    }
    
    .wake-slide img {
        font-size: 2.5rem;
        font-weight: 800;
        color: #1A2F4A;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        white-space: nowrap;
        display: flex;
        align-items: center;
        gap: 15px;
    }
    
    .wake-slide img::before {
        content: "↑";
        font-size: 2.8rem;
        color: #1A2F4A;
        font-weight: bold;
    }
    
    .wake-slide img::after {
        content: "↓";
        font-size: 2.8rem;
        color: #1A2F4A;
        font-weight: bold;
    }
    
    .wake-slide:hover {
    }
    
    .wake-slide:hover img {
        color: #1A2F4A;
    }
    
    @keyframes slideAnimation {
        0% {
            transform: translateY(0);
        }
        100% {
            transform: translateY(-80%);
        }
    }
    
    @media (max-width: 768px) {
        .section-header img {
            font-size: 2rem;
        }
          .slider-wrapper {
        display: flex;
        animation: slideAnimation 3s linear infinite;
        width: fit-content;
    }
        
        .wake-slide {
            min-width: 250px;
            width: 250px;
            height: auto;
            margin: 0;
        }
        
        .wake-slide img {
            width: 230px;
            height: 140px;
            object-fit: contain;
        }
        
        .wake-slide img {
            font-size: 1.8rem;
        }
        
        .wake-section {
            padding: 30px 0;
        }
    }
</style>

<!-- Wake Section -->
<section class="wake-section" id="wake">
    <div class="wake-container">
        
        <div class="wake-slider">
            <div class="slider-wrapper">
                <!-- First set of logos -->
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <!-- Duplicate logos for continuous animation -->
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
                
                <div class="wake-slide">
                    <img src="{{ asset('Arqco/public/assets/arqco-banar.png') }}" alt="Arqco Events">
                </div>
            </div>
        </div>
    </div>
</section>
