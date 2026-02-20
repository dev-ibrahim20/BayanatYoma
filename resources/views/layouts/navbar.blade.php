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
        }
        
        .hamburger span {
            width: 25px;
            height: 3px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border-radius: 2px;
            transition: all 0.3s ease;
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
                border-radius: 2px;
                transition: all 0.3s ease;
            }
        }
    </style>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <h2>Byanat Yoma</h2>
                </div>
                <ul class="nav-menu">
                    <li><a href="#home">الرئيسية</a></li>
                    <li><a href="#services">الخدمات</a></li>
                    <li><a href="#gallery">معرض الأعمال</a></li>
                    <li><a href="#customers">عملائنا</a></li>
                    <li><a href="#contact">تواصل بنا</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>