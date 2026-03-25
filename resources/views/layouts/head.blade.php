<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.logo') }} - {{ __('messages.home') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Arqco Events - تجهيز المؤتمرات والمعارض والفعاليات')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/arqco-banar.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/arqco-banar.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/arqco-banar.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/arqco-banar.png') }}">
    <meta name="description" content="@yield('description', 'Arqco Events - نحول رؤيتك إلى واقع لا يُنسى. نحن الشركة الرائدة في المملكة العربية السعودية لتصميم وتنظيم وتنفيذ الفعاليات والمؤتمرات والمعارض والمناسبات الخاصة بأعلى معايير الجودة العالمية. مع فريق من الخبراء الدوليين وأحدث التقنيات، نقدم تجارب فريدة تجمع بين الأصالة والمعاصرة، مع التركيز على أدق التفاصيل لضمان نجاح كل حدث. من المؤتمرات Corporate الكبرى إلى حفلات الزفاف الفاخرة، من المعارض التجارية الدولية إلى الفعاليات الثقافية المميزة، نحن نبتكر حلولاً مبتكرة تتجاوز التوقعات وتخلق ذكريات تدوم مدى الحياة. Arqco Events - حيث يلتقي الفن بالاحترافية لصناعة أميز اللحظات.')">
    <meta name="keywords" content="Arqco Events, أركو إيفنتس, تجهيز مؤتمرات, تنظيم معارض, خيام أوروبية, فعاليات, حفلات, event management, conference organization, exhibition setup, wedding planning, corporate events, saudi arabia, riyadh, jeddah, dammam, mecca, medina, khobar, dhahran, taif, tabuk, arar, najran, abha, jubail, yanbu, buraidah, hail, riyadh events, jeddah events, dammam events, mecca events, medina events, khobar events, dhahran events, taif events, tabuk events, arar events, najran events, abha events, jubail events, yanbu events, buraidah events, hail events, مؤتمرات الرياض, مؤتمرات جدة, مؤتمرات الدمام, مؤتمرات مكة, مؤتمرات المدينة, مؤتمرات الخبر, مؤتمرات الظهران, مؤتمرات الطائف, مؤتمرات تبوك, مؤتمرات عرعر, مؤتمرات نجران, مؤتمرات أبها, مؤتمرات الجبيل, مؤتمرات ينبع, مؤتمرات بريدة, مؤتمرات حائل, تنظيم معارض الرياض, تنظيم معارض جدة, تنظيم معارض الدمام, تنظيم معارض مكة, تنظيم معارض المدينة, تنظيم معارض الخبر, تنظيم معارض الظهران, تنظيم معارض الطائف, تنظيم معارض تبوك, تنظيم معارض عرعر, تنظيم معارض نجران, تنظيم معارض أبها, تنظيم معارض الجبيل, تنظيم معارض ينبع, تنظيم معارض بريدة, تنظيم معارض حائل, خيام أوروبية الرياض, خيام أوروبية جدة, خيام أوروبية الدمام, خيام أوروبية مكة, خيام أوروبية المدينة, خيام أوروبية الخبر, خيام أوروبية الظهران, خيام أوروبية الطائف, خيام أوروبية تبوك, خيام أوروبية عرعر, خيام أوروبية نجران, خيام أوروبية أبها, خيام أوروبية الجبيل, خيام أوروبية ينبع, خيام أوروبية بريدة, خيام أوروبية حائل, حفلات زفاف الرياض, حفلات زفاف جدة, حفلات زفاف الدمام, حفلات زفاف مكة, حفلات زفاف المدينة, حفلات زفاف الخبر, حفلات زفاف الظهران, حفلات زفاف الطائف, حفلات زفاف تبوك, حفلات زفاف عرعر, حفلات زفاف نجران, حفلات زفاف أبها, حفلات زفاف الجبيل, حفلات زفاف ينبع, حفلات زفاف بريدة, حفلات زفاف حائل, فعاليات corporate, فعاليات خاصة, فعاليات تجارية, فعاليات ثقافية, فعاليات رياضية, فعاليات حكومية, فعاليات تعليمية, فعاليات طبية, فعاليات تقنية, فعاليات فنية, فعاليات دينية, فعاليات اجتماعية, corporate events, private events, commercial events, cultural events, sports events, government events, educational events, medical events, tech events, art events, religious events, social events, wedding planner, event planner, event organizer, event coordinator, event management company, event services, event production, event decoration, event catering, event entertainment, event logistics, event venue, event supplies, event equipment, luxury tents, european tents, arabian tents, wedding tents, party tents, event tents, tent rental, tent setup, tent decoration, tent services, conference planning, conference services, conference venues, conference equipment, conference catering, conference management, exhibition planning, exhibition services, exhibition venues, exhibition stands, exhibition booths, exhibition management, trade show planning, trade show services, trade show management, saudi event management, riyadh event management, jeddah event management, dammam event management, mecca event management, medina event management, best event company, top event planner, professional event organizer, luxury event services, vip events, corporate event management, wedding planning services, exhibition organization, conference organization saudi, event management saudi arabia, event company riyadh, event company jeddah, event company dammam, event company mecca, event company medina, event management services, event planning services, event coordination services, event production services, event decoration services, event entertainment services, event logistics services, event venue services, event supplies services, event equipment services, tent rental services, tent setup services, tent decoration services, tent services, conference planning services, conference services, conference venue services, conference equipment services, conference catering services, conference management services, exhibition planning services, exhibition services, exhibition venue services, exhibition stand services, exhibition booth services, exhibition management services, trade show planning services, trade show services, trade show management services, saudi event services, riyadh event services, jeddah event services, dammam event services, mecca event services, medina event services,event management, corporate events, event planning, event organizer, event company, business events, conference management, event services, تنظيم فعاليات, شركة تنظيم فعاليات, تنظيم مؤتمرات, event management egypt, conference management, conference organization, conference organizer, business conferences, corporate conferences, event conferences, تنظيم مؤتمرات, إدارة المؤتمرات, conference planning services, conference organizer egypt, exhibition management, trade show organizer, exhibition planning, exhibition services, expo management, trade show services, تنظيم معارض, تنظيم معارض تجارية, exhibition organizer egypt, event services, event planning services, corporate event planning, event production, event solutions, event coordination, event company egypt, خدمات تنظيم الفعاليات, إدارة الفعاليات, event company egypt, event management company, event organizer near me, شركة تنظيم فعاليات في مصر, تواصل معنا تنظيم فعاليات, event planning tips, how to organize events, event checklist, conference tips, business event ideas, كيفية تنظيم مؤتمر, خطوات تنظيم event">
    <meta name="author" content="Arqco Events">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="language" content="{{ app()->getLocale() }}">
    <meta name="revisit-after" content="7 days">
    <meta name="geo.region" content="SA">
    <meta name="geo.placename" content="حي المربع - طريق الملك عبدالعزيز">
    <meta name="geo.position" content="24.7136;46.6753">
    <meta name="ICBM" content="24.7136,46.6753">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Arqco Events">
    <meta property="og:title" content="@yield('og:title', 'Arqco Events - تجهيز المؤتمرات والمعارض والفعاليات')">
    <meta property="og:description" content="@yield('og:description', 'Arqco Events - الشركة الرائدة في تنظيم وتجهيز المؤتمرات والمعارض والفعاليات والخيام الأوروبية')">
    <meta property="og:url" content="https://arqco-events.com">
    <meta property="og:image" content="@yield('og-image', asset('assets/arqco-banar.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="{{ app()->getLocale() === 'ar' ? 'ar_SA' : 'en_US' }}">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@arqco_events">
    <meta name="twitter:creator" content="@arqco_events">
    <meta name="twitter:title" content="@yield('twitter:title', 'Arqco Events - تجهيز المؤتمرات والمعارض والفعاليات')">
    <meta name="twitter:description" content="@yield('twitter:description', 'Arqco Events - الشركة الرائدة في تنظيم وتجهيز المؤتمرات والمعارض والفعاليات والخيام الأوروبية')">
    <meta name="twitter:image" content="@yield('twitter-image', asset('assets/arqco-banar.phg'))">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#1A2F4A">
    <meta name="msapplication-TileColor" content="#1A2F4A">
    <meta name="application-name" content="Arqco Events">
    <meta name="apple-mobile-web-app-title" content="Arqco Events">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Arqco Events",
        "alternateName": ["أركو إيفنتس", "Arqco Events Saudi Arabia"],
        "url": "https://arqco-events.com",
        "logo": "https://arqco-events.com/assets/arqco-banar.phg",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+966-50-000-0000",
            "contactType": "customer service",
            "availableLanguage": ["Arabic", "English"]
        },
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "شارع حي المربع - طريق الملك عبدالعزيز",
            "addressLocality": "الرياض",
            "addressRegion": "الرياض",
            "addressCountry": "SA",
            "postalCode": "11564"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "24.7136",
            "longitude": "46.6753"
        },
        "sameAs": [
            "https://facebook.com/arqcoevents",
            "https://twitter.com/arqco_events",
            "https://instagram.com/arqcoevents"
        ],
        "areaServed": {
            "@type": "Country",
            "name": "Saudi Arabia"
        },
        "knowsLanguage": ["Arabic", "English"],
        "description": "Arqco Events - نحول رؤيتك إلى واقع لا يُنسى. نحن الشركة الرائدة في المملكة العربية السعودية لتصميم وتنظيم وتنفيذ الفعاليات والمؤتمرات والمعارض والمناسبات الخاصة بأعلى معايير الجودة العالمية. مع فريق من الخبراء الدوليين وأحدث التقنيات، نقدم تجارب فريدة تجمع بين الأصالة والمعاصرة، مع التركيز على أدق التفاصيل لضمان نجاح كل حدث. من المؤتمرات Corporate الكبرى إلى حفلات الزفاف الفاخرة، من المعارض التجارية الدولية إلى الفعاليات الثقافية المميزة، نحن نبتكر حلولاً مبتكرة تتجاوز التوقعات وتخلق ذكريات تدوم مدى الحياة. Arqco Events - حيث يلتقي الفن بالاحترافية لصناعة أميز اللحظات",
        "keywords": "Arqco Events, أركو إيفنتس, تجهيز مؤتمرات, تنظيم معارض, خيام أوروبية, فعاليات, حفلات, event management, conference organization, exhibition setup, wedding planning, corporate events, saudi arabia, riyadh, jeddah, dammam, mecca, medina, khobar, dhahran, taif, tabuk, arar, najran, abha, jubail, yanbu, buraidah, hail, riyadh events, jeddah events, dammam events, mecca events, medina events, khobar events, dhahran events, taif events, tabuk events, arar events, najran events, abha events, jubail events, yanbu events, buraidah events, hail events, مؤتمرات الرياض, مؤتمرات جدة, مؤتمرات الدمام, مؤتمرات مكة, مؤتمرات المدينة, مؤتمرات الخبر, مؤتمرات الظهران, مؤتمرات الطائف, مؤتمرات تبوك, مؤتمرات عرعر, مؤتمرات نجران, مؤتمرات أبها, مؤتمرات الجبيل, مؤتمرات ينبع, مؤتمرات بريدة, مؤتمرات حائل, تنظيم معارض الرياض, تنظيم معارض جدة, تنظيم معارض الدمام, تنظيم معارض مكة, تنظيم معارض المدينة, تنظيم معارض الخبر, تنظيم معارض الظهران, تنظيم معارض الطائف, تنظيم معارض تبوك, تنظيم معارض عرعر, تنظيم معارض نجران, تنظيم معارض أبها, تنظيم معارض الجبيل, تنظيم معارض ينبع, تنظيم معارض بريدة, تنظيم معارض حائل, خيام أوروبية الرياض, خيام أوروبية جدة, خيام أوروبية الدمام, خيام أوروبية مكة, خيام أوروبية المدينة, خيام أوروبية الخبر, خيام أوروبية الظهران, خيام أوروبية الطائف, خيام أوروبية تبوك, خيام أوروبية عرعر, خيام أوروبية نجران, خيام أوروبية أبها, خيام أوروبية الجبيل, خيام أوروبية ينبع, خيام أوروبية بريدة, خيام أوروبية حائل, حفلات زفاف الرياض, حفلات زفاف جدة, حفلات زفاف الدمام, حفلات زفاف مكة, حفلات زفاف المدينة, حفلات زفاف الخبر, حفلات زفاف الظهران, حفلات زفاف الطائف, حفلات زفاف تبوك, حفلات زفاف عرعر, حفلات زفاف نجران, حفلات زفاف أبها, حفلات زفاف الجبيل, حفلات زفاف ينبع, حفلات زفاف بريدة, حفلات زفاف حائل, فعاليات corporate, فعاليات خاصة, فعاليات تجارية, فعاليات ثقافية, فعاليات رياضية, فعاليات حكومية, فعاليات تعليمية, فعاليات طبية, فعاليات تقنية, فعاليات فنية, فعاليات دينية, فعاليات اجتماعية, corporate events, private events, commercial events, cultural events, sports events, government events, educational events, medical events, tech events, art events, religious events, social events, wedding planner, event planner, event organizer, event coordinator, event management company, event services, event production, event decoration, event catering, event entertainment, event logistics, event venue, event supplies, event equipment, luxury tents, european tents, arabian tents, wedding tents, party tents, event tents, tent rental, tent setup, tent decoration, tent services, conference planning, conference services, conference venues, conference equipment, conference catering, conference management, exhibition planning, exhibition services, exhibition venues, exhibition stands, exhibition booths, exhibition management, trade show planning, trade show services, trade show management, saudi event management, riyadh event management, jeddah event management, dammam event management, mecca event management, medina event management, best event company, top event planner, professional event organizer, luxury event services, vip events, corporate event management, wedding planning services, exhibition organization, conference organization saudi, event management saudi arabia, event company riyadh, event company jeddah, event company dammam, event company mecca, event company medina, event management services, event planning services, event coordination services, event production services, event decoration services, event entertainment services, event logistics services, event venue services, event supplies services, event equipment services, tent rental services, tent setup services, tent decoration services, tent services, conference planning services, conference services, conference venue services, conference equipment services, conference catering services, conference management services, exhibition planning services, exhibition services, exhibition venue services, exhibition stand services, exhibition booth services, exhibition management services, trade show planning services, trade show services, trade show management services, saudi event services, riyadh event services, jeddah event services, dammam event services, mecca event services, medina event servicesArabia, Riyadh, Jeddah, Dammam",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "خدمات أركو إيفنتس",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "تجهيز المؤتمرات",
                        "description": "تنظيم وتجهيز المؤتمرات والفعاليات Corporate",
                        "keywords": "مؤتمرات, conferences, corporate events, business meetings"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "المعارض التجارية",
                        "description": "تنظيم المعارض التجارية والصناعية",
                        "keywords": "معارض, exhibitions, trade shows, commercial exhibitions"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "الخيام الأوروبية",
                        "description": "تأجير وتجهيز الخيام الأوروبية الفاخرة",
                        "keywords": "خيام, tents, luxury tents, european tents, wedding tents"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "تنظيم الحفلات",
                        "description": "تنظيم حفلات الزفاف والمناسبات الخاصة",
                        "keywords": "حفلات, weddings, parties, events planning, celebration"
                    }
                }
            ]
        }
    }
    </script>
    
    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Arqco Events",
        "image": "https://arqco-events.com/assets/arqco-banar.png",
        "telephone": "+966-570-723-038",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "شارع حي المربع - طريق الملك عبدالعزيز",
            "addressLocality": "الرياض",
            "addressRegion": "الرياض",
            "addressCountry": "SA",
            "postalCode": "11564"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "24.7136",
            "longitude": "46.6753"
        },
        "openingHours": "Mo-Su 00:00-23:59",
        "priceRange": "$$$",
        "servesCuisine": ["Arabic", "International"],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.8",
            "reviewCount": "150"
        },
        "review": [
            {
                "@type": "Review",
                "author": {
                    "@type": "Person",
                    "name": "محمد أحمد"
                },
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "5"
                },
                "reviewBody": "خدمة ممتازة وتنظيم احترافي للمؤتمرات"
            },
            {
                "@type": "Review",
                "author": {
                    "@type": "Person",
                    "name": "Sarah Johnson"
                },
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "5"
                },
                "reviewBody": "Professional event management with excellent attention to detail"
            }
        ]
    }
    </script>
    
    <!-- Website Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Arqco Events",
        "alternateName": "أركو إيفنتس",
        "url": "https://arqco-events.com",
        "description": "Arqco Events - الشركة الرائدة في تنظيم وتجهيز المؤتمرات والمعارض والفعاليات في المملكة العربية السعودية",
        "inLanguage": ["ar", "en"],
        "isAccessibleForFree": true,
        "isFamilyFriendly": true,
        "keywords": "تجهيز مؤتمرات, تنظيم معارض, خيام أوروبية, فعاليات, حفلات, event management, conference organization, exhibition setup, wedding planning, Saudi Arabia, Riyadh",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://arqco-events.com/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://arqco-events.com">
    
    <!-- Alternate Language Links -->
    <link rel="alternate" hreflang="ar" href="https://arqco-events.com">
    <link rel="alternate" hreflang="en" href="https://arqco-events.com?lang=en">
    <link rel="alternate" hreflang="x-default" href="https://arqco-events.com">
    
    {{-- <style>
        /* Basic styles for testing */
        body {
            font-family: Arial, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
        background: linear-gradient(135deg, #1A2F4A, #C6A87D);
            color: #ffffff;
            min-height: 100vh;
            line-height: 1.6;
            overflow-x: hidden; /* Prevent horizontal scrolling */
            width: 100vw; /* Full viewport width */
            max-width: 100vw; /* Prevent overflow */
            scroll-behavior: smooth; /* Normal scrolling */
            scroll-snap-type: none; /* Disable scroll snap */
        }
        
        /* Disable scroll snap on all elements */
        * {
            scroll-snap-type: none !important;
            scroll-snap-align: none !important;
            scroll-snap-stop: none !important;
        }
        
        /* Disable scroll snap on sections */
        section {
            scroll-snap-type: none !important;
            scroll-snap-align: none !important;
        }
        
        /* Center the entire page */
        html, body {
            width: 100%;
            max-width: 100%;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Container for centering content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px; /* Reduced padding for mobile */
            width: 100%;
            box-sizing: border-box;
        }
        
        /* Mobile responsive adjustments */
        @media (max-width: 768px) {
            body {
                padding: 0;
                margin: 0;
                width: 100vw;
                overflow-x: hidden;
            }
            
            .container {
                padding: 0 10px;
                width: calc(100% - 20px);
            }
            
            /* Ensure no element overflows */
            * {
                box-sizing: border-box;
            }
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 0 8px;
                width: calc(100% - 16px);
            }
        }
        
        /* Footer positioning */
        footer {
            position: relative;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            margin-top: auto;
            overflow-x: hidden;
        }
        
        /* Override any potential white backgrounds */
        /* .navbar, .hero, .services, .production, .stats, .departments, .different, .contact, .gallery, .customers, .footer {
             background: linear-gradient(to right, #132433, #1A2F4A);
        } */
        
        /* Hero text animations */
        .hero-text h1 {
            font-size: 3rem;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            font-weight: 700;
            line-height: 1.2;
            animation: titleGlow 3s ease-in-out infinite alternate;
            animation-delay: 0.5s;
        }
        
        @keyframes titleGlow {
            0% { filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.6)); }
            100% { filter: drop-shadow(0 0 30px rgba(248, 249, 250, 0.8)); }
        }
        
        .hero-text p {
            font-size: 1.2rem;
            color: #ffffff;
            margin-bottom: 1rem;
            animation: textFloat 4s ease-in-out infinite;
            animation-delay: 0.8s;
        }
        
        @keyframes textFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        
        .hero-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            animation: slideInFromRight 1s ease-out 0.3s both;
        }
        
        .btn-primary, .btn-secondary {
            padding: 1rem 2rem;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            cursor: pointer;
            border: none;
            transition: all 0.3s ease;
            font-size: 1rem;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            color: #000000;
            animation: btnPulse 2s ease-in-out infinite;
        }
        
        @keyframes btnPulse {
            0%, 100% { transform: scale(1); box-shadow: 0 4px 20px rgba(255, 255, 255, 0.4); }
            50% { transform: scale(1.05); box-shadow: 0 8px 30px rgba(248, 249, 250, 0.6); }
        }
        
        .btn-primary:hover {
            transform: translateY(-2px) scale(1.1);
            box-shadow: 0 12px 40px rgba(255, 255, 255, 0.6);
            animation: btnHover 0.3s ease;
        }
        
        @keyframes btnHover {
            0% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-4px) scale(1.15); }
            100% { transform: translateY(-2px) scale(1.1); }
        }
        
        .btn-secondary {
            background: transparent;
            color: #ffffff;
            border: 2px solid;
            border-image: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%) 1;
            animation: btnGlow 3s ease-in-out infinite alternate;
        }
        
        @keyframes btnGlow {
            0% { box-shadow: 0 0 10px rgba(255, 255, 255, 0.3); }
            100% { box-shadow: 0 0 25px rgba(248, 249, 250, 0.6); }
        }
        
        .btn-secondary:hover {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.2) 0%, rgba(248, 249, 250, 0.3) 100%);
            color: #000000;
            transform: translateY(-2px) scale(1.05);
            border-color: #ffffff;
            animation: btnSecondaryHover 0.3s ease;
        }
        
        @keyframes btnSecondaryHover {
            0% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-4px) scale(1.1); }
            100% { transform: translateY(-2px) scale(1.05); }
        }
        
        .hero-image {
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: slideInFromLeft 1s ease-out;
        }
        
        @keyframes slideInFromLeft {
            0% {
                opacity: 0;
                transform: translateX(-100px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        /* Fade in animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .fade-in-delay-1 {
            animation-delay: 0.2s;
        }
        
        .fade-in-delay-2 {
            animation-delay: 0.6s;
        }
        
        .fade-in-delay-3 {
            animation-delay: 1.0s;
        }
        
        .fade-in-delay-4 {
            animation-delay: 1.4s;
        }
        
        .fade-in-delay-5 {
            animation-delay: 1.8s;
        }
        
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .hamburger {
            display: none;
        }
        
        .hamburger span {
            width: 25px;
            height: 3px;
            /* background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%); */
            border-radius: 3px;
            transition: background 0.2s ease;
        }
        
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }
            .hamburger {
                display: flex;
                flex-direction: column;
                gap: 4px;
            }
            .hamburger span {
                width: 25px;
                height: 3px;
                background: #333;
            }
        }
    </style> --}}
</head>