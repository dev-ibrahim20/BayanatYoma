<style>
        .navbar {
            background: rgba(244, 236, 212, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            z-index: 1000;
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
        
        .nav-menu { display: none !important;
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
            gap: 10px;
            align-items: center;
            position: relative;
        }
        
        .language-select {
            padding: 12px 20px;
            padding-right: 40px;
            border-radius: 25px;
            font-size: 0.95rem;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid rgba(255, 255, 255, 0.4);
            color: #ffffff;
            background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
            cursor: pointer;
            outline: none;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            backdrop-filter: blur(10px);
            box-shadow: 
                0 4px 15px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            position: relative;
            min-width: 120px;
        }
        
        .language-select:hover {
            background: linear-gradient(135deg, rgba(80, 80, 56, 0.9) 0%, rgba(75, 75, 51, 0.9) 50%, rgba(36, 36, 14, 0.9) 100%);
            border-color: rgba(255, 255, 255, 0.6);
            transform: translateY(-2px) scale(1.02);
            box-shadow: 
                0 8px 25px rgba(0, 0, 0, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.2),
                0 0 20px rgba(80, 80, 56, 0.3);
        }
        
        .language-select:focus {
            border-color: #ffffff;
            box-shadow: 
                0 0 0 3px rgba(255, 255, 255, 0.2),
                0 8px 25px rgba(0, 0, 0, 0.4),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }
        
        .language-select option {
            background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
            color: #000000;
            padding: 15px 20px;
            border: none;
            font-weight: 600;
            font-size: 0.95rem;
            border-radius: 0;
            transition: all 0.3s ease;
            position: relative;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        }
        
        .language-select option:hover {
            background: linear-gradient(135deg, #6a6a48 0%, #656538 50%, #3e3e1e 100%);
            color: #ffffff;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.3);
            transform: translateX(5px);
        }
        
        .language-select option:checked {
            background: linear-gradient(135deg, #7a7a58 0%, #757538 50%, #4e4e2e 100%);
            color: #ffffff;
            font-weight: 700;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
        }
        
        .language-select option:first-child {
            border-radius: 8px 8px 0 0;
        }
        
        .language-select option:last-child {
            border-radius: 0 0 8px 8px;
        }
        
        /* Custom dropdown arrow */
        .language-switcher::after {
            content: '▼';
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #ffffff;
            font-size: 0.7rem;
            pointer-events: none;
            transition: transform 0.3s ease;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .language-switcher:hover::after {
            transform: translateY(-50%) rotate(180deg);
        }
        
        /* Language icon */
        .language-switcher::before {
            content: '🌐';
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1rem;
            pointer-events: none;
        }
        
        .language-select {
            padding-left: 35px;
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
            
            .language-switcher {
                order: 1;
                margin-right: auto;
                margin-left: 0;
            }
            
            .language-select {
                width: 120px;
                height: 35px;
                font-size: 0.8rem;
                padding-left: 30px;
                padding-right: 25px;
            }
            
            .language-switcher::before {
                left: 10px;
                font-size: 0.8rem;
            }
            
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
            
            .language-select {
                width: 100px;
                height: 32px;
                font-size: 0.75rem;
                padding-left: 25px;
                padding-right: 20px;
            }
            
            .language-switcher::before {
                left: 8px;
                font-size: 0.7rem;
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
            
            .language-select {
                width: 90px;
                height: 30px;
                font-size: 0.7rem;
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
                <div class="language-switcher">
                    <select class="language-select" onchange="window.location.href=this.value">
                        <option value="{{ route('language.switch', 'ar') }}" {{ app()->getLocale() == 'ar' ? 'selected' : '' }}>
                            Arabic
                        </option>
                        <option value="{{ route('language.switch', 'en') }}" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>
                            English
                        </option>
                    </select>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>