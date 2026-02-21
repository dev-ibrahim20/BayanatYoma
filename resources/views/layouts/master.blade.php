<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
@include('layouts.head')

<body style="display: flex; flex-direction: column; min-height: 100vh; margin: 0; padding: 0; width: 100vw; overflow-x: hidden;">
    @include('layouts.navbar')
    
    <main style="flex: 1; width: 100%; overflow-x: hidden;">
        @yield('content')
    </main>
    
    @include('layouts.footer')
    @include('partials.back-to-top')
    
    <script src="script.js"></script>
    @stack('scripts')
    
    <script>
        // Prevent horizontal scrolling on mobile
        document.addEventListener('DOMContentLoaded', function() {
            // Force viewport width on mobile
            if (window.innerWidth <= 768) {
                document.body.style.width = '100vw';
                document.body.style.overflowX = 'hidden';
                
                // Ensure all containers don't overflow
                const containers = document.querySelectorAll('.container, section, div');
                containers.forEach(container => {
                    container.style.maxWidth = '100%';
                    container.style.overflowX = 'hidden';
                    container.style.boxSizing = 'border-box';
                });
            }
            
            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth <= 768) {
                    document.body.style.width = '100vw';
                    document.body.style.overflowX = 'hidden';
                }
            });
        });
        
        // Dynamic title based on current section
        const sectionTitles = {
            'hero': '{{ __("messages.home") }}',
            'services': '{{ __("messages.services_title") }}',
            'different': '{{ __("messages.different_title") }}',
            'gallery': '{{ __("messages.gallery_title") }}',
            'stats': '{{ __("messages.stats_title") }}',
            'contact': '{{ __("messages.contact_title") }}',
            'customers': '{{ __("messages.customers_title") }}'
        };

        function updateTitle() {
            const sections = document.querySelectorAll('section[id]');
            let currentSection = 'hero'; // default
            
            // Find section that's currently in view
            for (let section of sections) {
                const rect = section.getBoundingClientRect();
                // Check if section is in viewport (at least 50% visible)
                if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                    currentSection = section.id;
                    break;
                }
            }
            
            // Update document title
            if (sectionTitles[currentSection]) {
                document.title = '{{ __("messages.logo") }} - ' + sectionTitles[currentSection];
            }
        }

        // Professional mobile menu toggle - MOBILE ONLY
        function toggleMobileMenu() {
            // Only work on mobile screens
            if (window.innerWidth > 768) return;
            
            // Create professional menu if it doesn't exist
            let mobileMenu = document.getElementById('mobile-menu');
            if (!mobileMenu) {
                mobileMenu = document.createElement('div');
                mobileMenu.id = 'mobile-menu';
                mobileMenu.style.cssText = `
                    background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
                    color: white;
                    padding: 30px 20px;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 280px;
                    height: 100vh;
                    z-index: 9999;
                    box-shadow: 2px 0 20px rgba(0, 0, 0, 0.5);
                    border-right: 2px solid rgba(255, 255, 255, 0.2);
                    backdrop-filter: blur(10px);
                    font-family: 'Arial', sans-serif;
                    overflow-y: auto;
                    transform: translateX(-100%);
                    transition: transform 0.3s ease;
                `;
                
                mobileMenu.innerHTML = `
                    <div style="text-align: center; margin-bottom: 40px; padding-top: 20px;">
                        <button onclick="closeMobileMenu()" style="
                            position: absolute;
                            top: 20px;
                            right: 20px;
                            background: rgba(255, 255, 255, 0.2);
                            border: 1px solid rgba(255, 255, 255, 0.3);
                            border-radius: 50%;
                            width: 40px;
                            height: 40px;
                            color: white;
                            font-size: 20px;
                            cursor: pointer;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            transition: all 0.3s ease;
                        " onmouseover="this.style.background='rgba(255, 255, 255, 0.3)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.2)'">
                            ×
                        </button>
                        <h3 style="
                            font-size: 1.5rem;
                            font-weight: 700;
                            margin: 0;
                            color: #ffffff;
                            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
                            letter-spacing: 1px;
                        ">{{ __('messages.logo') }}</h3>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 15px;">
                        <a href="#home" style="
                            display: block;
                            color: #ffffff;
                            padding: 15px 25px;
                            text-decoration: none;
                            background: rgba(255, 255, 255, 0.1);
                            border-radius: 12px;
                            font-weight: 600;
                            font-size: 1.1rem;
                            text-align: center;
                            transition: all 0.3s ease;
                            border: 1px solid rgba(255, 255, 255, 0.2);
                        " onmouseover="this.style.background='rgba(255, 255, 255, 0.2)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'">
                            {{ __('messages.home') }}
                        </a>
                        <a href="#services" style="
                            display: block;
                            color: #ffffff;
                            padding: 15px 25px;
                            text-decoration: none;
                            background: rgba(255, 255, 255, 0.1);
                            border-radius: 12px;
                            font-weight: 600;
                            font-size: 1.1rem;
                            text-align: center;
                            transition: all 0.3s ease;
                            border: 1px solid rgba(255, 255, 255, 0.2);
                        " onmouseover="this.style.background='rgba(255, 255, 255, 0.2)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'">
                            {{ __('messages.services') }}
                        </a>
                        <a href="#gallery" style="
                            display: block;
                            color: #ffffff;
                            padding: 15px 25px;
                            text-decoration: none;
                            background: rgba(255, 255, 255, 0.1);
                            border-radius: 12px;
                            font-weight: 600;
                            font-size: 1.1rem;
                            text-align: center;
                            transition: all 0.3s ease;
                            border: 1px solid rgba(255, 255, 255, 0.2);
                        " onmouseover="this.style.background='rgba(255, 255, 255, 0.2)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'">
                            {{ __('messages.gallery') }}
                        </a>
                        <a href="#contact" style="
                            display: block;
                            color: #ffffff;
                            padding: 15px 25px;
                            text-decoration: none;
                            background: rgba(255, 255, 255, 0.1);
                            border-radius: 12px;
                            font-weight: 600;
                            font-size: 1.1rem;
                            text-align: center;
                            transition: all 0.3s ease;
                            border: 1px solid rgba(255, 255, 255, 0.2);
                        " onmouseover="this.style.background='rgba(255, 255, 255, 0.2)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'">
                            {{ __('messages.contact') }}
                        </a>
                        <a href="#customers" style="
                            display: block;
                            color: #ffffff;
                            padding: 15px 25px;
                            text-decoration: none;
                            background: rgba(255, 255, 255, 0.1);
                            border-radius: 12px;
                            font-weight: 600;
                            font-size: 1.1rem;
                            text-align: center;
                            transition: all 0.3s ease;
                            border: 1px solid rgba(255, 255, 255, 0.2);
                        " onmouseover="this.style.background='rgba(255, 255, 255, 0.2)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'">
                            {{ __('messages.customers') }}
                        </a>
                    </div>
                    
                    <!-- Contact Info Section -->
                    <div style="margin-top: 40px; padding-top: 20px; border-top: 1px solid rgba(255, 255, 255, 0.2);">
                        <div style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 20px;">
                            <div style="display: flex; align-items: center; gap: 10px; color: #ffffff; font-size: 0.9rem;">
                                <i class="fas fa-phone" style="font-size: 16px;"></i>
                                <span>{{ __('messages.phone_text') }}</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 10px; color: #ffffff; font-size: 0.9rem;">
                                <i class="fas fa-envelope" style="font-size: 16px;"></i>
                                <span>{{ __('messages.email_text') }}</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 10px; color: #ffffff; font-size: 0.9rem;">
                                <i class="fas fa-map-marker-alt" style="font-size: 16px;"></i>
                                <span>{{ __('messages.location_text') }}</span>
                            </div>
                        </div>
                        
                        <!-- Social Media Icons -->
                        <div style="display: flex; justify-content: center; gap: 15px; margin-top: 20px;">
                            <a href="#" style="
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                width: 35px;
                                height: 35px;
                                background: rgba(255, 255, 255, 0.1);
                                border: 1px solid rgba(255, 255, 255, 0.2);
                                border-radius: 50%;
                                color: #ffffff;
                                text-decoration: none;
                                transition: all 0.3s ease;
                            " onmouseover="this.style.background='rgba(255, 255, 255, 0.2)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" style="
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                width: 35px;
                                height: 35px;
                                background: rgba(255, 255, 255, 0.1);
                                border: 1px solid rgba(255, 255, 255, 0.2);
                                border-radius: 50%;
                                color: #ffffff;
                                text-decoration: none;
                                transition: all 0.3s ease;
                            " onmouseover="this.style.background='rgba(255, 255, 255, 0.2)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" style="
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                width: 35px;
                                height: 35px;
                                background: rgba(255, 255, 255, 0.1);
                                border: 1px solid rgba(255, 255, 255, 0.2);
                                border-radius: 50%;
                                color: #ffffff;
                                text-decoration: none;
                                transition: all 0.3s ease;
                            " onmouseover="this.style.background='rgba(255, 255, 255, 0.2)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" style="
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                width: 35px;
                                height: 35px;
                                background: rgba(255, 255, 255, 0.1);
                                border: 1px solid rgba(255, 255, 255, 0.2);
                                border-radius: 50%;
                                color: #ffffff;
                                text-decoration: none;
                                transition: all 0.3s ease;
                            " onmouseover="this.style.background='rgba(255, 255, 255, 0.2)'" onmouseout="this.style.background='rgba(255, 255, 255, 0.1)'">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                `;
                document.body.appendChild(mobileMenu);
            } 
            
            // Toggle menu visibility
            if (mobileMenu.style.transform === 'translateX(-100%)' || mobileMenu.style.transform === '') {
                mobileMenu.style.transform = 'translateX(0)';
            } else {
                mobileMenu.style.transform = 'translateX(-100%)';
            }
        }
        
        function closeMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu) {
                mobileMenu.style.transform = 'translateX(-100%)';
            }
        }
        
        // Add click handler to hamburger - MOBILE ONLY
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.querySelector('.hamburger');
            
            if (hamburger) {
                hamburger.addEventListener('click', function(e) {
                    e.preventDefault();
                    toggleMobileMenu();
                });
            }
            
            // Close menu when clicking links
            const links = document.querySelectorAll('#mobile-menu a');
            links.forEach(link => {
                link.addEventListener('click', function() {
                    closeMobileMenu();
                    setTimeout(updateTitle, 100);
                });
            });
        });

        // Update title on scroll and on load
        window.addEventListener('scroll', updateTitle);
        window.addEventListener('load', updateTitle);
        
        // Also update title when clicking navbar links
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', () => {
                setTimeout(updateTitle, 100); // Small delay to ensure section is in view
            });
        });
    </script>
</body>
</html>
