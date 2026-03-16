<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.logo') }} - {{ __('messages.home') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
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
        .navbar, .hero, .services, .production, .stats, .departments, .different, .contact, .gallery, .customers, .customers-section, .footer {
             background: linear-gradient(to right, #132433, #1A2F4A);
        }
        
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
    </style>
</head>