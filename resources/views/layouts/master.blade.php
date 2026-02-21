<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
@include('layouts.head')

<body>
    @include('layouts.navbar')
    
    @yield('content')
    
    @include('layouts.footer')
    @include('partials.back-to-top')
    
    <script src="script.js"></script>
    @stack('scripts')
    
    <script>
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

        // Professional mobile menu toggle
        function toggleMobileMenu() {
            // Create professional menu if it doesn't exist
            let mobileMenu = document.getElementById('mobile-menu');
            if (!mobileMenu) {
                mobileMenu = document.createElement('div');
                mobileMenu.id = 'mobile-menu';
                mobileMenu.innerHTML = `
                    <div style="
                        background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
                        color: white;
                        padding: 30px 20px;
                        position: fixed;
                        top: 80px;
                        left: 0;
                        right: 0;
                        z-index: 9999;
                        min-height: 400px;
                        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
                        border-top: 2px solid rgba(255, 255, 255, 0.2);
                        backdrop-filter: blur(10px);
                        font-family: 'Arial', sans-serif;
                    ">
                        <div style="text-align: center; margin-bottom: 30px;">
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
                    </div>
                `;
                document.body.appendChild(mobileMenu);
            } else {
                if (mobileMenu.style.display === 'none') {
                    mobileMenu.style.display = 'block';
                } else {
                    mobileMenu.style.display = 'none';
                }
            }
        }
        
        function closeMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu) {
                mobileMenu.style.display = 'none';
            }
        }
        
        // Add click handler to hamburger
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
