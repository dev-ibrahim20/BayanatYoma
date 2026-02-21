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

        // Mobile menu toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        if (hamburger && navMenu) {
            hamburger.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                
                // Animate hamburger lines
                const spans = hamburger.querySelectorAll('span');
                if (navMenu.classList.contains('active')) {
                    spans[0].style.transform = 'rotate(45deg) translateY(6px)';
                    spans[1].style.opacity = '0';
                    spans[2].style.transform = 'rotate(-45deg) translateY(-6px)';
                } else {
                    spans[0].style.transform = 'none';
                    spans[1].style.opacity = '1';
                    spans[2].style.transform = 'none';
                }
            });
        }

        // Close mobile menu when clicking on a link
        const navLinks = document.querySelectorAll('.nav-menu a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    const spans = hamburger.querySelectorAll('span');
                    spans[0].style.transform = 'none';
                    spans[1].style.opacity = '1';
                    spans[2].style.transform = 'none';
                }
                setTimeout(updateTitle, 100);
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
