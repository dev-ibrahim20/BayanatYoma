<style>
    /* Contact Section Styles */
    .contact {
        padding: 80px 20px;
        background: linear-gradient(135deg, #1A2F4A, #C6A87D);
        border-top: 1px solid rgba(80, 75, 51, 0.3);
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
    
    .contact-content {
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .contact-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 40px;
        margin-bottom: 60px;
        border-radius: 16px;
        padding: 40px;
        transition: all 0.3s ease;
    }
    
    
    .contact-item {
        display: flex;
        align-items: center;
        gap: 16px;
        flex: 1;
        text-align: center;
    }
    
    .contact-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: #000000;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        flex-shrink: 0;
    }
    
    .contact-details h3 {
        font-size: 1.25rem;
        color: #ffffff;
        margin-bottom: 8px;
        font-weight: 700;
        font-family: 'Arial Black', Arial, sans-serif;
        letter-spacing: 0.5px;
    }
    
    .contact-details a {
        color: #ffffff;
        text-decoration: none;
        font-weight: 600;
        font-family: 'Arial', sans-serif;
        font-size: 1.1rem;
        transition: color 0.3s ease;
    }
    
    .contact-details a:hover {
        color: #f8f9fa;
    }
    
    .map-container {
        width: 100%;
        height: 500px;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(80, 75, 51, 0.3);
    }
    
    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }
    
    @media (max-width: 768px) {
        .contact-info {
            flex-direction: column;
            gap: 30px;
            padding: 30px 20px;
        }
        
        .contact-item {
            flex-direction: column;
            text-align: center;
            gap: 12px;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            font-size: 1.25rem;
        }
        
        .contact-details h3 {
            font-size: 1.1rem;
        }
        
        .contact-details a {
            font-size: 1rem;
        }
        
        .map-container {
            height: 350px;
        }
    }
    
    @media (max-width: 1024px) and (min-width: 769px) {
        .contact-info {
            flex-direction: column;
            gap: 25px;
        }
        
        .contact-item {
            justify-content: center;
        }
    }
</style>

@section('title', __('messages.contact_title'))
<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <div class="section-header">
            <h2>{{ __('messages.contact_title') }}</h2>
            <p>{{ __('messages.contact_subtitle') }}</p>
        </div>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-details">
                        <h3>اتصل بنا</h3>
                        <a href="tel:+966537666223">+966 537 666 223</a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h3>{{ __('messages.email') }}</h3>
                        <p>{{ __('messages.email_text') }}</p>
                        <a href="mailto:info@muhaya-sa.com">info@muhaya-sa.com</a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h3>{{ __('messages.address') }}</h3>
                        <p>{{ __('messages.address_text') }}</p>
                        <a href="https://maps.app.goo.gl/d3JZryN9baiC5TK47" target="_blank">شارع الياسمين - القادسية</a>
                    </div>
                </div>
            </div>
            
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3632.123456789!2d46.7123456789!3d24.7123456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjTCsDQyJzQ1LjYiTiA0NsKwNDInMzguNiJF!5e0!3m2!1sen!2ssa!4v1234567890"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</section>
