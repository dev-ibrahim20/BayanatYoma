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
