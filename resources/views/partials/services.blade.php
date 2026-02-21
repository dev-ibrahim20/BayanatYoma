@section('title', __('messages.services_title'))
<style>
/* Services Section Styles */
.services {
    padding: 80px 20px;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
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

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 24px;
    max-width: 1200px;
    margin: 0 auto;
}
    
.service-card {
    background: linear-gradient(135deg, #575555 0%, #989f89 50%, #494545 100%);
    border: 1px solid rgba(80, 75, 51, 0.3);
    border-radius: 12px;
    padding: 32px;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
}

.service-card:hover {
    transform: translateY(-8px);
    border-color: #ffffff;
    background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
    box-shadow: 0 16px 48px rgba(255, 255, 255, 0.4);
}

.service-icon {
    width: 64px;
    height: 64px;
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
    font-size: 1.5rem;
    color: #000000;
}

.service-card h3 {
    font-size: 1.5rem;
    color: #000000;
    margin-bottom: 16px;
    font-weight: 800;
    font-family: 'Arial Black', Arial, sans-serif;
    letter-spacing: 0.5px;
}

.service-card p {
    color: #000000;
    line-height: 1.8;
    font-family: 'Arial', sans-serif;
    font-weight: 500;
    font-size: 1.1rem;
}

@media (max-width: 768px) {
    .services {
        padding: 60px 20px;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    .service-card {
        padding: 24px;
    }
}
</style>

<!-- Services Section -->
<section id="services" class="services">
    <div class="container">
        <div class="section-header">
            <h2>{{ __('messages.services_title') }}</h2>
            <p>{{ __('messages.services_subtitle') }}</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>{{ __('messages.lighting') }}</h3>
                <p>{{ __('messages.lighting_text') }}</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-volume-up"></i>
                </div>
                <h3>{{ __('messages.sound') }}</h3>
                <p>{{ __('messages.sound_text') }}</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <h3>{{ __('messages.consulting') }}</h3>
                <p>{{ __('messages.consulting_text') }}</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-hotel"></i>
                </div>
                <h3>{{ __('messages.decoration') }}</h3>
                <p>{{ __('messages.decoration_text') }}</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h3>{{ __('messages.coordination') }}</h3>
                <p>{{ __('messages.coordination_text') }}</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-gift"></i>
                </div>
                <h3>{{ __('messages.gifts') }}</h3>
                <p>{{ __('messages.gifts_text') }}</p>
            </div>
        </div>
    </div>
</section>


