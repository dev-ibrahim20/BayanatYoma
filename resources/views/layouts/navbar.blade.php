<style>
    /* Screen reader only text */
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }
    
    .navbar {
        background-image: linear-gradient(135deg, rgb(26, 47, 74) 0%, rgb(26, 47, 74) 40%, rgb(15, 23, 20) 80%);
        backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        padding: 1rem 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        z-index: 1000;
        position: relative;
        transition: all 0.3s ease;
    }
    
    .navbar.scrolled {
        /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); */
        padding: 0.7rem 0;
    }
    
    .nav-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .logo h2 {
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-size: 2.5rem;
        margin: 0;
        font-weight: 900;
        font-family: 'Arial Black', Arial, sans-serif;
        letter-spacing: 1px;
        animation: logoGlow 2s ease-in-out infinite alternate;
    }
    
    @keyframes logoGlow {
        0% { filter: drop-shadow(0 0 10px rgba(102, 126, 234, 0.5)); }
        100% { filter: drop-shadow(0 0 20px rgba(118, 75, 162, 0.8)); }
    }
    
    .nav-menu { 
        display: flex;
        list-style: none;
        gap: 2rem;
        margin: 0;
        padding: 0;
    }
    
    .nav-menu a {
        text-decoration: none;
        color: #ffffff;
        font-weight: 600;
        font-size: 1.2rem;
        font-family: 'Arial', sans-serif;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        position: relative;
        animation: navLinkPulse 4s ease-in-out infinite;
    }
    
    @keyframes navLinkPulse {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-2px); }
    }
    
    .nav-menu a:hover {
        color: #303030b6;
        transform: scale(1.1) translateY(-3px);
        text-shadow: 0 2px 4px rgba(139, 69, 19, 0.3);
        animation: navLinkHover 0.3s ease;
    }
    
    @keyframes navLinkHover {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
    
    .nav-menu a::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(135deg, #8B4513 0%, #A0522D 50%, #8B4513 100%);
        transition: width 0.2s ease;
    }
    
    .nav-menu a:hover::after {
        width: 100%;
        animation: navUnderline 0.5s ease;
    }
    
    @keyframes navUnderline {
        0% { width: 0; }
        50% { width: 110%; }
        100% { width: 100%; }
    }
    
    .hamburger {
        display: none;
        cursor: pointer;
        z-index: 1001;
        padding: 5px;
        border-radius: 5px;
        transition: background 0.3s ease;
    }
    
    .hamburger:hover {
        background: rgba(255, 255, 255, 0.1);
    }
    
    .hamburger span {
        width: 25px;
        height: 3px;
        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
        border-radius: 2px;
        transition: all 0.3s ease;
    }
    
    /* Professional Language Switcher */
    .language-switcher {
        display: flex;
        align-items: center;
        position: relative;
        z-index: 1000;
    }
    
    .language-dropdown {
        position: relative;
    }
    
    .language-button {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 10px 16px;
        background: linear-gradient(135deg, #1A2F4A 0%, #2C5F8D 50%, #3B82F6 100%);
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 25px;
        color: #ffffff;
        font-size: 0.95rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        box-shadow: 
            0 4px 15px rgba(0, 0, 0, 0.2),
            inset 0 1px 0 rgba(255, 255, 255, 0.1);
        min-width: 120px;
        justify-content: space-between;
    }
    
    .language-button:hover {
        background: linear-gradient(135deg, rgba(26, 47, 74, 0.9) 0%, rgba(44, 95, 141, 0.9) 50%, rgba(59, 130, 246, 0.9) 100%);
        border-color: rgba(255, 255, 255, 0.5);
        transform: translateY(-2px);
        box-shadow: 
            0 8px 25px rgba(0, 0, 0, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.2),
            0 0 20px rgba(59, 130, 246, 0.3);
    }
    
    .language-button i.fa-globe {
        font-size: 1.1rem;
        color: #ffffff;
    }
    
    .language-button i.fa-chevron-down {
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.8);
        transition: transform 0.3s ease;
    }
    
    .language-button:hover i.fa-chevron-down {
        transform: rotate(180deg);
    }
    
    .language-menu {
        position: absolute;
        top: 100%;
        right: 0;
        margin-top: 8px;
        background: linear-gradient(135deg, #1A2F4A 0%, #2C5F8D 50%, #3B82F6 100%);
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 15px;
        backdrop-filter: blur(15px);
        box-shadow: 
            0 8px 32px rgba(0, 0, 0, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.1);
        overflow: hidden;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        min-width: 150px;
    }
    
    .language-menu.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    
    .language-option {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 16px;
        color: #ffffff;
        text-decoration: none;
        transition: all 0.3s ease;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        position: relative;
        font-weight: 500;
    }
    
    .language-option:last-child {
        border-bottom: none;
    }
    
    .language-option:hover {
        background: rgba(255, 255, 255, 0.1);
        padding-left: 20px;
    }
    
    .language-option.active {
        background: rgba(255, 255, 255, 0.15);
        font-weight: 700;
    }
    
    .language-option.active::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: #ffffff;
    }
    
    .language-option i.fa-language {
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.9);
    }
    
    .language-option i.fa-check {
        font-size: 0.9rem;
        color: #60A5FA;
        margin-left: auto;
    }
    
    .language-option span {
        flex: 1;
        white-space: nowrap;
    }
    
    /* Mobile Responsive */
    @media (max-width: 768px) {
        /* .language-button {
            padding: 8px 12px;
            min-width: 100px;
            font-size: 0.9rem;
        }
        
        .language-menu {
            min-width: 130px;
        }
        
        .language-option {
            padding: 10px 12px;
        }
    
            z-index: 1000;
            position: relative;
            transition: all 0.3s ease;
        } */
        
        .navbar.scrolled {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 0.7rem 0;
        }
        
        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo h2 {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 2.5rem;
            margin: 0;
            font-weight: 900;
            font-family: 'Arial Black', Arial, sans-serif;
            letter-spacing: 1px;
            animation: logoGlow 2s ease-in-out infinite alternate;
        }
        
        @keyframes logoGlow {
            0% { filter: drop-shadow(0 0 10px rgba(102, 126, 234, 0.5)); }
            100% { filter: drop-shadow(0 0 20px rgba(118, 75, 162, 0.8)); }
        }
        
        .nav-menu { 
            display: flex;
            list-style: none;
            gap: 2rem;
            margin: 0;
            padding: 0;
        }
        
        .nav-menu a {
            text-decoration: none;
            color: #ffffff;
            font-weight: 600;
            font-size: 1.2rem;
            font-family: 'Arial', sans-serif;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            position: relative;
            animation: navLinkPulse 4s ease-in-out infinite;
        }
        
        @keyframes navLinkPulse {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-2px); }
        }
        
        .nav-menu a:hover {
            color: #303030b6;
            transform: scale(1.1) translateY(-3px);
            text-shadow: 0 2px 4px rgba(139, 69, 19, 0.3);
            animation: navLinkHover 0.3s ease;
        }
        
        @keyframes navLinkHover {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(135deg, #8B4513 0%, #A0522D 50%, #8B4513 100%);
            transition: width 0.2s ease;
        }
        
        .nav-menu a:hover::after {
            width: 100%;
            animation: navUnderline 0.5s ease;
        }
        
        @keyframes navUnderline {
            0% { width: 0; }
            50% { width: 110%; }
            100% { width: 100%; }
        }
        
        .hamburger {
            display: none;
            cursor: pointer;
            /* z-index: 1001; */
            padding: 5px;
            border-radius: 5px;
            transition: background 0.3s ease;
            overflow: hidden;
            scroll-behavior: none;
        }
        
        .hamburger:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        
        .hamburger span {
            width: 25px;
            height: 3px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border-radius: 2px;
            transition: all 0.3s ease;
        }
        
        /* Professional Language Switcher - Old styles removed */
    
    /* Enhanced select styling */
    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: transparent !important;
        border: none !important;
        outline: none !important;
        cursor: pointer !important;
    }
    
    select::-webkit-scrollbar {
        width: 6px;
    }
    
    select::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 3px;
    }
    
    select::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.3);
        border-radius: 3px;
    }
    
    select::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.5);
    }
        
                
                
        @media (max-width: 768px) {
            .navbar-container {
                padding: 0 15px;
            }
            
            .nav-content {
                flex-wrap: wrap;
                padding: 10px 0;
            }
            
            .logo {
                flex: 1;
                order: 2;
                text-align: center;
                margin: 0;
            }
            
            .logo h2 {
                font-size: 1.5rem;
            }
            
            /* .language-switcher {
                order: 1;
                margin-right: auto;
                margin-left: 0;
            } */
            
                        
                        
            .hamburger {
                order: 3;
                display: flex;
                flex-direction: column;
                gap: 4px;
                margin-left: 10px;
            }
            
            .hamburger span {
                width: 20px;
                height: 2px;
                background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
                border-radius: 2px;
                transition: all 0.3s ease;
            }
            
            .nav-menu { display: none !important;
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                z-index: 1000;
                min-height: 300px;
            }
            
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            .nav-menu li {
                margin: 10px 0;
                text-align: center;
            }
            
            .nav-menu a {
                font-size: 1rem;
                padding: 12px 20px;
                border-radius: 8px;
                transition: all 0.3s ease;
            }
            
            .nav-menu a:hover {
                background: rgba(255, 255, 255, 0.1);
                transform: translateY(-2px);
            }
        }
        
        @media (max-width: 480px) {
            .navbar-container {
                padding: 0 10px;
            }
            
            .logo h2 {
                font-size: 1.3rem;
            }
            
                        
                        
            .hamburger span {
                width: 18px;
                height: 2px;
            }
            
            .nav-menu a {
                font-size: 0.9rem;
                padding: 10px 15px;
            }
        }
        
        @media (max-width: 360px) {
            .logo h2 {
                font-size: 1.1rem;
            }
            
                        
            .nav-menu a {
                font-size: 0.85rem;
                padding: 8px 12px;
            }
        }
</style>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container navbar-container">
            <div class="nav-content">
                <div class="logo">
                    <h2>{{ __('messages.logo') }}</h2>
                </div>
                <ul class="nav-menu">
                    <li><a href="#home">{{ __('messages.home') }}</a></li>
                    <li><a href="#services">{{ __('messages.services') }}</a></li>
                    <li><a href="#gallery">{{ __('messages.gallery') }}</a></li>
                    <li><a href="#contact">{{ __('messages.contact') }}</a></li>
                    <li><a href="#customers">{{ __('messages.customers') }}</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="language-switcher">
                    <div class="language-dropdown">
                        <button class="language-button" onclick="toggleLanguageDropdown()" aria-label="{{ __('messages.select_language') }}">
                            <i class="fas fa-globe"></i>
                            <span>{{ app()->getLocale() == 'ar' ? 'العربية' : 'English' }}</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="language-menu" id="languageMenu">
                            <a href="javascript:void(0)" onclick="changeLanguage('{{ route('language.switch', 'ar') }}')" class="language-option {{ app()->getLocale() == 'ar' ? 'active' : '' }}">
                                <i class="fas fa-language"></i>
                                <span>العربية</span>
                                {{ app()->getLocale() == 'ar' ? '-' : '' }}
                            </a>
                            <a href="javascript:void(0)" onclick="changeLanguage('{{ route('language.switch', 'en') }}')" class="language-option {{ app()->getLocale() == 'en' ? 'active' : '' }}">
                                <i class="fas fa-language"></i>
                                <span>English</span>
                                {{ app()->getLocale() == 'en' ? '-' : '' }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

<script>
// Language Dropdown Toggle
function toggleLanguageDropdown() {
    const menu = document.getElementById('languageMenu');
    const isShowing = menu.classList.contains('show');
    
    // Close all other dropdowns
    document.querySelectorAll('.language-menu').forEach(m => m.classList.remove('show'));
    
    // Toggle current dropdown
    if (!isShowing) {
        menu.classList.add('show');
    }
}
// Close dropdown when clicking outside
// document.addEventListener('click', function(event) {
//     const dropdown = document.querySelector('.language-dropdown');
//     const menu = document.getElementById('languageMenu');
    
//     if (!dropdown.contains(event.target)) {
//         menu.classList.remove('show');
//     }
// });

// Close dropdown when pressing Escape
// document.addEventListener('keydown', function(event) {
//     if (event.key === 'Escape') {
//         document.getElementById('languageMenu').classList.remove('show');
//     }
// });

// Handle language change with confirmation
function changeLanguage(url) {
    window.location.href = url;
}

// Mobile menu toggle
// document.querySelector('.hamburger').addEventListener('click', function() {
//     document.querySelector('.sidebar').classList.toggle('active');
//     document.querySelector('.overlay').classList.toggle('active');
// });

// Close sidebar when clicking overlay
// document.querySelector('.overlay').addEventListener('click', function() {
//     document.querySelector('.sidebar').classList.remove('active');
//     document.querySelector('.overlay').classList.remove('active');
// });

// Close sidebar when clicking links
// // document.querySelectorAll('.sidebar ul li a').forEach(link => {
//     link.addEventListener('click', function() {
//         document.querySelector('.sidebar').classList.remove('active');
//         document.querySelector('.overlay').classList.remove('active');
//     });
// });

// Handle responsive behavior
// window.addEventListener('resize', function() {
//     const menu = document.getElementById('languageMenu');
//     if (window.innerWidth > 768) {
//         menu.classList.remove('show');
//     }
// });

</script> 
