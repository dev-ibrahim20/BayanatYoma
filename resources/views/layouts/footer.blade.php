<style>
        /* Footer Styles */
        .footer {
                       background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);

            padding: 60px 20px 20px;
            border-top: 1px solid #5a5a00;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 48px;
            max-width: 1200px;
            margin: 0 auto 40px;
            align-items: start;
        }
        
        .footer-logo h2 {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 2rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .footer-logo p {
            color: #ffffff;
            font-size: 1rem;
        }
        
        .footer-section h3 {
            color: #ffffff;
            font-size: 1.125rem;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .footer-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }
        
        .footer-section {
            text-align: right;
        }
        
        .footer-section a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-section a:hover {
            color: #f8f9fa;
        }
        
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 32px;
            border-top: 1px solid #5a5a00;
        }
        
        .footer-bottom p {
            color: #ffffff;
            margin: 0;
        }
        
        .social-links {
            display: flex;
            gap: 16px;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000000;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(255, 255, 255, 0.3);
            border-color: #ffffff;
        }
        
        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
                text-align: center;
            }
            
            .footer-links {
                grid-template-columns: 1fr;
                gap: 25px;
                text-align: center;
            }
            
            .footer-section {
                text-align: center;
            }
            
            .footer-bottom {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
        }
        
        @media (max-width: 1024px) {
            .footer-links {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <h2>{{ __('messages.logo') }}</h2>
                <p>{{ __('messages.footer_about') }}</p>
            </div>
            <div class="footer-links">
                <div class="footer-section">
                    <h3>{{ __('messages.quick_links') }}</h3>
                    <ul>
                        <li><a href="#home">{{ __('messages.home') }}</a></li>
                        <li><a href="#services">{{ __('messages.services') }}</a></li>
                        <li><a href="#gallery">{{ __('messages.gallery') }}</a></li>
                        <li><a href="#contact">{{ __('messages.contact') }}</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>{{ __('messages.services') }}</h3>
                    <ul>
                        <li><a href="#services">{{ __('messages.coordination') }}</a></li>
                        <li><a href="#services">{{ __('messages.lighting') }}</a></li>
                        <li><a href="#services">{{ __('messages.sound') }}</a></li>
                        <li><a href="#services">{{ __('messages.decoration') }}</a></li>
                        <li><a href="#services">{{ __('messages.logistics') }}</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>{{ __('messages.contact_info') }}</h3>
                    <ul>
                        <li><a href="tel:+966537666223">{{ __('messages.phone_text') }}</a></li>
                        <li><a href="mailto:info@muhaya-sa.com">{{ __('messages.email_text') }}</a></li>
                        <li><a href="https://maps.app.goo.gl/d3JZryN9baiC5TK47" target="_blank">{{ __('messages.location_text') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 {{ __('messages.logo') }}. {{ __('messages.all_rights') }}.</p>
            <div class="social-links">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</footer>
