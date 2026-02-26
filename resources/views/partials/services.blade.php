@section('title', __('messages.services_title'))
<style>
/* Services Section Styles */
.services {
    padding: 80px 20px;
    background: linear-gradient(135deg, #C0C0C0 0%, #808080 35%, #696969 65%, #2F4F4F 100%);
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
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
}
    
.service-card {
    background: linear-gradient(135deg, #575555 0%, #989f89 50%, #494545 100%);
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 16px;
    padding: 35px;
    text-align: center;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
    min-height: 340px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    /* background: linear-gradient(90deg, #667eea 0%, #764ba2 100%); */
}

.service-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    /* border-color: #667eea; */
}

.service-icon {
    width: 100px;
    height: 100px;
    background: #2F4F4F;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
    font-size: 2.5rem;
    color: #ffffff;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
}

.service-card h3 {
    font-size: 1.5rem;
    color: #ffffff;
    margin-bottom: 18px;
    font-weight: 700;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    letter-spacing: -0.5px;
    line-height: 1.3;
}

.service-card p {
    color: #ffffff;
    line-height: 1.7;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-weight: 400;
    font-size: 1rem;
    margin-top: auto;
    flex-grow: 1;
}

@media (max-width: 768px) {
    .services {
        padding: 60px 20px;
    }
    
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        padding: 0 15px;
    }
    
    .section-header h2 {
        font-size: 2.2rem;
    }
    
    .service-card {
        padding: 20px;
        min-height: 250px;
    }
    
    .service-icon {
        width: 60px;
        height: 60px;
        font-size: 1.6rem;
    }
    
    .service-card h3 {
        font-size: 1.1rem;
    }
    
    .service-card p {
        font-size: 0.85rem;
    }
}

@media (max-width: 480px) {
    .services {
        padding: 40px 15px;
    }
    
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        padding: 0 10px;
    }
    
    .section-header h2 {
        font-size: 1.8rem;
    }
    
    .service-card {
        padding: 15px;
        min-height: 220px;
    }
    
    .service-icon {
        width: 50px;
        height: 50px;
        font-size: 1.4rem;
    }
    
    .service-card h3 {
        font-size: 1rem;
    }
    
    .service-card p {
        font-size: 0.8rem;
    }
}

@media (max-width: 360px) {
    .services {
        padding: 30px 10px;
    }
    
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        padding: 0 5px;
    }
    
    .section-header h2 {
        font-size: 1.6rem;
    }
    
    .service-card {
        padding: 12px;
        min-height: 200px;
    }
    
    .service-icon {
        width: 45px;
        height: 45px;
        font-size: 1.2rem;
    }
    
    .service-card h3 {
        font-size: 0.9rem;
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
                    <i class="fas fa-music"></i>
                </div>
                <h3>{{ __('messages.entertainment') }}</h3>
                <p>{{ __('messages.entertainment_text') }}</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3>{{ __('messages.catering') }}</h3>
                <p>{{ __('messages.catering_text') }}</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-car"></i>
                </div>
                <h3>{{ __('messages.transportation') }}</h3>
                <p>{{ __('messages.transportation_text') }}</p>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-car"></i>
                </div>
                <h3>{{ __('messages.transportation') }}</h3>
                <p>{{ __('messages.transportation_text') }}</p>
            </div>
        </div>
    </div>
</section>


