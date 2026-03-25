<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.logo') }} - {{ __('messages.home') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Arqco Events - تجهيز المؤتمرات والمعارض والفعاليات')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('Arqco/public/assets/arqco-logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('Arqco/public/assets/arqco-logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('Arqco/public/assets/arqco-logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Arqco/public/assets/arqco-logo.png') }}">
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
    <meta property="og:image" content="@yield('og-image', asset('Arqco/public/assets/arqco-logo.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="{{ app()->getLocale() === 'ar' ? 'ar_SA' : 'en_US' }}">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@arqco_events">
    <meta name="twitter:creator" content="@arqco_events">
    <meta name="twitter:title" content="@yield('twitter:title', 'Arqco Events - تجهيز المؤتمرات والمعارض والفعاليات')">
    <meta name="twitter:description" content="@yield('twitter:description', 'Arqco Events - الشركة الرائدة في تنظيم وتجهيز المؤتمرات والمعارض والفعاليات والخيام الأوروبية')">
    <meta name="twitter:image" content="@yield('twitter-image', asset('Arqco/public/assets/arqco-logo.phg'))">
    
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
        "logo": "https://arqco-events.com/Arqco/public/assets/arqco-logo.phg",
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
        "image": "https://arqco-events.com/assets/arqco-logo.png",
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
    
<style>
/* Service Detail Hero Section */
.service-detail-hero {
  background-image: linear-gradient(135deg, rgb(26, 47, 74) 0%, rgb(26, 47, 74) 40%, rgb(15, 23, 20) 80%);
    padding: 80px 0;
    color: white;
}

.service-hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.service-hero-text h1 {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 20px;
    color: white;
}

.service-hero-text p {
    font-size: 1.2rem;
    line-height: 1.6;
    opacity: 0.9;
}

.service-hero-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 15px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

/* Service Details Section */
.service-details {
    padding: 80px 0;
    background: #f8f9fa;
}

.service-details-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 40px;
}

.service-main-content h2 {
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 20px;
    color: #1A2F4A;
}

.service-description p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #666;
    margin-bottom: 40px;
}

/* Features List */
.features-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
    margin-bottom: 60px;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 15px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
}

.feature-item i {
    color: #3B82F6;
    font-size: 1.2rem;
}

.feature-item span {
    font-weight: 500;
    color: #333;
}

/* Gallery */
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 30px;
}

.gallery-item {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.3s ease;
}

.gallery-item.main-image {
    grid-column: span 2;
    grid-row: span 2;
}

.gallery-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-item.main-image img {
    height: 400px;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

.gallery-overlay i {
    color: white;
    font-size: 2rem;
}

/* Sidebar */
.service-info-card {
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.service-info-card h3 {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 20px;
    color: #1A2F4A;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
    padding: 10px;
    background: #f8f9fa;
    border-radius: 8px;
}

.info-item i {
    color: #3B82F6;
    font-size: 1.1rem;
}

.info-item span {
    color: #666;
    font-size: 0.95rem;
}

/* CTA */
.service-cta {
    background: linear-gradient(135deg, #3B82F6 0%, #1A2F4A 100%);
    padding: 25px;
    border-radius: 15px;
    color: white;
    text-align: center;
    margin-bottom: 30px;
}

.service-cta h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
}

.service-cta p {
    margin-bottom: 20px;
    opacity: 0.9;
}

.btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    margin: 5px;
}

.btn-primary {
    background: white;
    color: #3B82F6;
}

.btn-primary:hover {
    background: #f8f9fa;
    transform: translateY(-2px);
}

.btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.btn-secondary:hover {
    background: white;
    color: #3B82F6;
}

/* Related Services */
.related-services {
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.related-services h3 {
    font-size: 1.3rem;
    font-weight: 600;
    margin-bottom: 20px;
    color: #1A2F4A;
}

.related-services-grid {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.related-service-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.related-service-item:hover {
    background: #e9ecef;
    transform: translateX(5px);
}

.related-service-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(135deg, #3B82F6 0%, #1A2F4A 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1rem;
}

.related-service-item a {
    color: #333;
    text-decoration: none;
    font-weight: 500;
    flex: 1;
}

.related-service-item a:hover {
    color: #3B82F6;
}

/* Lightbox */
.lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.9);
    z-index: 9999;
    align-items: center;
    justify-content: center;
}

.lightbox-content {
    position: relative;
    max-width: 90%;
    max-height: 90%;
}

.lightbox-content img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.close-lightbox {
    position: absolute;
    top: -40px;
    right: 0;
    color: white;
    font-size: 3rem;
    cursor: pointer;
    transition: opacity 0.3s ease;
}

.close-lightbox:hover {
    opacity: 0.7;
}

.lightbox-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.2);
    color: white;
    border: none;
    font-size: 2rem;
    padding: 15px;
    cursor: pointer;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.lightbox-nav:hover {
    background: rgba(255,255,255,0.3);
}

.lightbox-nav.prev {
    left: -60px;
}

.lightbox-nav.next {
    right: -60px;
}

/* Breadcrumb */
.breadcrumb {
    background: #f8f9fa;
    padding: 20px 0;
    border-bottom: 1px solid #e9ecef;
}

.breadcrumb ol {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 10px;
}

.breadcrumb li {
    color: #666;
}

.breadcrumb li a {
    color: #3B82F6;
    text-decoration: none;
    transition: color 0.3s ease;
}

.breadcrumb li a:hover {
    color: #1A2F4A;
}

.breadcrumb li.active {
    color: #333;
    font-weight: 500;
}

.breadcrumb li:not(:last-child)::after {
    content: '/';
    margin-left: 10px;
    color: #999;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .service-hero-content {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
    }
    
    .service-details-grid {
        grid-template-columns: 1fr;
    }
    
    .gallery-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }
}

@media (max-width: 768px) {
    .service-hero-text h1 {
        font-size: 2rem;
    }
    
    .service-hero-text p {
        font-size: 1rem;
    }
    
    .service-hero-image img {
        height: 300px;
    }
    
    .features-list {
        grid-template-columns: 1fr;
    }
    
    .gallery-grid {
        grid-template-columns: 1fr;
    }
    
    .gallery-item.main-image {
        grid-column: span 1;
        grid-row: span 1;
    }
    
    .gallery-item img {
        height: 250px;
    }
    
    .lightbox-nav.prev {
        left: 10px;
    }
    
    .lightbox-nav.next {
        right: 10px;
    }
}

@media (max-width: 480px) {
    .service-detail-hero {
        padding: 60px 0;
    }
    
    .service-details {
        padding: 60px 0;
    }
    
    .service-hero-text h1 {
        font-size: 1.5rem;
    }
    
    .service-hero-image img {
        height: 200px;
    }
    
    .gallery-item img {
        height: 200px;
    }
    
    .btn {
        padding: 10px 20px;
        font-size: 0.9rem;
    }
}

/* No Images Container */
.no-images-container {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px 20px;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    border-radius: 20px;
    border: 2px dashed #dee2e6;
    margin: 20px 0;
}

.no-images-icon {
    font-size: 4rem;
    color: #6c757d;
    margin-bottom: 20px;
    opacity: 0.7;
}

.no-images-container h3 {
    color: #495057;
    font-size: 1.5rem;
    margin-bottom: 10px;
    font-weight: 600;
}

.no-images-container p {
    color: #6c757d;
    font-size: 1rem;
    margin: 0;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .no-images-container {
        padding: 40px 15px;
        margin: 10px 0;
    }
    
    .no-images-icon {
        font-size: 3rem;
        margin-bottom: 15px;
    }
    
    .no-images-container h3 {
        font-size: 1.3rem;
    }
    
    .no-images-container p {
        font-size: 0.9rem;
    }
}

/* Service Page Layout Spacing */
.service-details {
    padding: 0 40px;
}

.service-details-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 60px;
    align-items: start;
}

.service-main-content {
    padding-right: 40px;
}

.service-sidebar {
    padding-left: 20px;
}

@media (max-width: 1024px) {
    .service-details {
        padding: 0 30px;
    }
    
    .service-details-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .service-main-content {
        padding-right: 0;
    }
    
    .service-sidebar {
        padding-left: 0;
    }
}

@media (max-width: 768px) {
    .service-details {
        padding: 0 20px;
    }
    
    .service-details-grid {
        gap: 30px;
    }
}

@media (max-width: 480px) {
    .service-details {
        padding: 0 15px;
    }
    
    .service-details-grid {
        gap: 20px;
    }
}

/* Service Hero Text Spacing */
.service-hero-text {
    margin-left: 40px;
}

/* Arabic Language Right Margin */
[lang="ar"] .service-hero-text {
    margin-left: 0;
    margin-right: 40px;
}

@media (max-width: 768px) {
    .service-hero-text {
        margin-left: 20px;
    }
    
    [lang="ar"] .service-hero-text {
        margin-left: 0;
        margin-right: 20px;
    }
}

@media (max-width: 480px) {
    .service-hero-text {
        margin-left: 15px;
    }
    
    [lang="ar"] .service-hero-text {
        margin-left: 0;
        margin-right: 15px;
    }
}

@media (max-width: 360px) {
    .service-hero-text {
        margin-left: 10px;
    }
    
    [lang="ar"] .service-hero-text {
        margin-left: 0;
        margin-right: 10px;
    }
}
</style>

</head>