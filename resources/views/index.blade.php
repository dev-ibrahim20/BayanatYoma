<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhaya - احتفل بلحظاتك السعيدة</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Basic styles for testing */
        body {
            font-family: Arial, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #374E44 0%, #374E44 40%, #000000 100%);
            color: #ffffff;
            min-height: 100vh;
            line-height: 1.6;
        }
        
        /* Hero Section Styles */
        
        .hero {
            padding: 100px 20px;
            background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
            border-top: 1px solid #585858;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .hero-text {
            text-align: right;
            color: #ffffff;
            grid-column: 1;
        }
        
        .hero-image {
            grid-column: 2;
            position: relative;
        }
        
        .nav-arrows {
            position: absolute;
            left: -80px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 20px;
            z-index: 10;
        }
        
        .nav-arrow {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border: 3px solid rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            color: #505038;
            font-size: 1.5rem;
        }
        
        .nav-arrow:hover {
            transform: scale(1.15);
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 50%, #f8f9fa 100%);
            box-shadow: 0 8px 30px rgba(255, 255, 255, 0.5);
            border-color: rgba(255, 255, 255, 0.6);
        }
        
        .nav-arrow:active {
            transform: scale(0.95);
        }
        
        .hero-heading h1 {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 20px;
            font-family: 'Arial Black', Arial, sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: 2px;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 40px;
            font-family: 'Arial', sans-serif;
            color: #f8f9fa;
            letter-spacing: 1px;
        }
        
        .hero-values-container {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .nav-arrows {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .nav-arrow {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            color: #505038;
            font-size: 1.2rem;
        }
        
        .nav-arrow:hover {
            transform: scale(1.1);
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 50%, #f8f9fa 100%);
            box-shadow: 0 6px 20px rgba(255, 255, 255, 0.4);
            border-color: rgba(255, 255, 255, 0.5);
        }
        
        .nav-arrow:active {
            transform: scale(0.95);
        }
        
        .hero-values {
            display: flex;
            flex-direction: column;
            gap: 30px;
            flex: 1;
        }
        
        .value-point {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            padding: 30px;
            border-radius: 12px;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            min-height: 120px;
            text-align: center;
            opacity: 0;
            transform: translateY(30px) scale(0.9);
            filter: blur(2px);
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }
        
        .value-point.active {
            opacity: 1;
            transform: translateY(0) scale(1);
            filter: blur(0);
            position: relative;
        }
        
        .value-point.exit {
            opacity: 0;
            transform: translateY(-30px) scale(0.9);
            filter: blur(2px);
        }
        
        .hero-values {
            display: flex;
            flex-direction: column;
            gap: 30px;
            flex: 1;
            position: relative;
            min-height: 180px;
        }
        
        .value-point .value-text {
            text-align: center;
        }
        
        .value-point .value-text h3 {
            font-size: 2rem;
            font-weight: 900;
            margin-bottom: 15px;
            font-family: 'Arial Black', Arial, sans-serif;
            color: #ffffff;
            letter-spacing: 1px;
        }
        
        .value-point .value-text p {
            font-size: 1.2rem;
            font-weight: 600;
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #f8f9fa;
            line-height: 1.6;
        }
        
        .hero-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            color: #505038;
            border: 2px solid #ffffff;
            padding: 16px 32px;
            border-radius: 8px;
            font-weight: 700;
            font-family: 'Arial Black', Arial, sans-serif;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 255, 255, 0.3);
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 50%, #f8f9fa 100%);
        }
        
        .btn-secondary {
            background: transparent;
            color: #ffffff;
            border: 2px solid #ffffff;
            padding: 16px 32px;
            border-radius: 8px;
            font-weight: 700;
            font-family: 'Arial Black', Arial, sans-serif;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .btn-secondary:hover {
            background: #ffffff;
            color: #505038;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 255, 255, 0.3);
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
        
        @media (max-width: 768px) {
            .hero {
                padding: 60px 20px;
            }
            
            .hero-content {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }
            
            .hero-text {
                text-align: center;
            }
            
            .hero-heading h1 {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.25rem;
            }
            
            .hero-values {
                gap: 20px;
            }
            
            .value-point {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            
            .hero-buttons {
                justify-content: center;
            }
        }
        
        @media (max-width: 1024px) and (min-width: 769px) {
            .hero-content {
                gap: 40px;
            }
            
            .hero-heading h1 {
                font-size: 3rem;
            }
            
            .hero-values {
                gap: 25px;
            }
        }
        
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
        
        .device-container {
            perspective: 1000px;
        }
        
        .device {
            width: 500px;
            height: 350px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border: 8px solid #484846;
            border-radius: 20px;
            padding: 16px;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.5),
                0 0 0 1px rgba(255, 204, 0, 0.2),
                inset 0 2px 4px rgba(255, 204, 0, 0.1);
            transform: rotateY(-15deg);
            transition: all 0.4s ease;
            position: relative;
            animation: deviceFloat 6s ease-in-out infinite;
        }
        
        @keyframes deviceFloat {
            0%, 100% { transform: rotateY(-15deg) translateY(0); }
            50% { transform: rotateY(-15deg) translateY(-10px); }
        }
        
        .device:hover {
            transform: rotateY(0deg) scale(1.05) translateY(-5px);
            box-shadow: 
                0 35px 70px rgba(102, 126, 234, 0.3),
                0 0 0 2px rgba(240, 147, 251, 0.5);
            animation: deviceHover 0.5s ease;
        }
        
        @keyframes deviceHover {
            0% { transform: rotateY(-15deg) scale(1); }
            50% { transform: rotateY(10deg) scale(1.1); }
            100% { transform: rotateY(0deg) scale(1.05); }
        }
        
        .device-screen {
            width: 100%;
            height: 100%;
            background: #000000;
            border-radius: 12px;
            overflow: hidden;
            position: relative;
            border: 2px solid #2d2d2d;
        }
        
        .device-screen video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            animation: videoGlow 4s ease-in-out infinite alternate;
        }
        
        @keyframes videoGlow {
            0% { filter: brightness(1) contrast(1); }
            50% { filter: brightness(1.1) contrast(1.1); }
            100% { filter: brightness(1.05) contrast(1.05); }
        }
        
        .device-button {
            width: 60px;
            height: 6px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border-radius: 3px;
            position: absolute;
            bottom: 12px;
            left: 50%;
            transform: translateX(-50%);
            animation: buttonPulse 2s ease-in-out infinite;
        }
        
        @keyframes buttonPulse {
            0%, 100% { opacity: 0.6; transform: translateX(-50%) scale(1); }
            50% { opacity: 1; transform: translateX(-50%) scale(1.2); }
        }
        
        .device::before {
            content: '';
            position: absolute;
            top: 12px;
            left: 50%;
            transform: translateX(-50%);
            width: 16px;
            height: 16px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border-radius: 50%;
            z-index: 5;
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.6);
            animation: cameraGlow 3s ease-in-out infinite alternate;
        }
        
        @keyframes cameraGlow {
            0% { box-shadow: 0 0 25px rgba(255, 255, 255, 0.6); }
            100% { box-shadow: 0 0 40px rgba(248, 249, 250, 0.9); }
        }
        
        /* Apple-style notch */
        .device::after {
            content: '';
            position: absolute;
            top: 8px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 25px;
            background: #40401c;
            border-radius: 0 0 15px 15px;
            z-index: 4;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .hamburger {
            display: none;
        }
        
        .hamburger span {
            width: 25px;
            height: 3px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border-radius: 3px;
            transition: background 0.2s ease;
        }
        
        /* Services Section Styles */
        .services {
            padding: 80px 20px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border-top: 1px solid #484846;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .section-header p {
            font-size: 1.2rem;
            color: #ffffff;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
            max-width: 1200px;
            margin: 0 auto;
        }
            
        .service-card {
            background: linear-gradient(135deg, #575555 0%, #989f89 50%, #494545 100%);
            border: 1px solid rgba(80, 75, 51, 0.3);
            border-radius: 12px;
            padding: 32px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }
        
        .service-card:hover {
            transform: translateY(-8px);
            border-color: #ffffff;
            background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
            box-shadow: 0 16px 48px rgba(255, 255, 255, 0.4);
        }
        
        .service-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 1.5rem;
            color: #000000;
        }
        
        .service-card h3 {
            font-size: 1.5rem;
            color: #000000;
            margin-bottom: 16px;
            font-weight: 800;
            font-family: 'Arial Black', Arial, sans-serif;
            letter-spacing: 0.5px;
        }
        
        .service-card p {
            color: #000000;
            line-height: 1.8;
            font-family: 'Arial', sans-serif;
            font-weight: 500;
            font-size: 1.1rem;
        }
        
        /* Production Section Styles */
        .production {
            padding: 80px 20px;
            background: linear-gradient(135deg, #878686 0%, #7a7979 50%, #6d6c6c 100%);
            border-top: 1px solid #838282;
        }
        
        .production-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .production-item {
            background: linear-gradient(135deg, #575555 0%, #989f89 50%, #494545 100%);
            border: 1px solid #4c4c4c;
            border-radius: 12px;
            padding: 24px;
            transition: all 0.3s ease;
        }
        
        .production-item:hover {
            transform: translateY(-4px);
            border-color: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
            background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
            box-shadow: 0 16px 48px rgba(255, 255, 255, 0.4);
        }
        
        .production-item h3 {
            font-size: 1.5rem;
            color: #000000;
            margin-bottom: 16px;
            font-family: 'Arial Black', Arial, sans-serif;
            letter-spacing: 1px;
            font-weight: 1000;
        }
        
        .production-item p {
            color: #000000;
            line-height: 1.6;
            font-family: 'Arial Black', Arial, sans-serif;
            font-weight: 900;
            letter-spacing: 0.5px;
            line-height: 2rem;
            font-size: 1rem;
        }
        
        /* About Section Styles */
        .about {
            padding: 80px 20px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border-top: 1px solid rgba(80, 75, 51, 0.3);
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 48px;
            max-width: 1200px;
            margin: 0 auto;
            align-items: start;
        }
        
        .about-text h3 {
            font-size: 1.8rem;
            color: #000000;
            margin-bottom: 20px;
            font-weight: 800;
            font-family: 'Arial Black', Arial, sans-serif;
            letter-spacing: 0.5px;
        }
        
        .about-text p {
            color: #000000;
            line-height: 1.8;
            font-family: 'Arial', sans-serif;
            font-weight: 500;
            font-size: 1.1rem;
            margin-bottom: 16px;
        }
        
        .about-values {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        
        .value-item {
            background: linear-gradient(135deg, #575555 0%, #989f89 50%, #494545 100%);
            border: 1px solid rgba(80, 75, 51, 0.3);
            border-radius: 12px;
            padding: 24px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .value-item:hover {
            transform: translateY(-4px);
            background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
            box-shadow: 0 12px 36px rgba(255, 255, 255, 0.4);
        }
        
        .value-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            font-size: 1.5rem;
            color: #000000;
        }
        
        .value-item h4 {
            font-size: 1.25rem;
            color: #000000;
            margin-bottom: 12px;
            font-weight: 700;
            font-family: 'Arial Black', Arial, sans-serif;
        }
        
        .value-item p {
            color: #000000;
            line-height: 1.6;
            font-family: 'Arial', sans-serif;
            font-weight: 500;
            font-size: 1rem;
        }
        
        @media (max-width: 768px) {
            .about-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .about-values {
                flex-direction: row;
                flex-wrap: wrap;
                gap: 16px;
            }
            
            .value-item {
                flex: 1 1 calc(50% - 16px);
            }
        }
        
        /* Stats Section Styles */
        .stats {
            padding: 80px 20px;
            background: linear-gradient(135deg, #484846 0%, #3a3a00 50%, #484846 100%);
            border-top: 1px solid #585858;
            position: relative;
            overflow: hidden;
        }
        
        .stats::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 25% 25%, rgba(80, 75, 51, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 75% 75%, rgba(80, 75, 51, 0.05) 0%, transparent 50%),
                        radial-gradient(circle at 50% 50%, rgba(80, 75, 51, 0.03) 0%, transparent 70%);
            z-index: 0;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 32px;
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }
        
        .stat-item {
            background: transparent;
            border: none;
            border-radius: 12px;
            padding: 40px 20px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }
        
        /* .stat-item:hover {
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 12px 36px rgba(80, 75, 51, 0.4);
        } */
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 1000;
            margin-bottom: 8px;
        }
        
        .stat-item p {
            color: #ffffff;
            font-size: 1.5rem;
            font-weight: 200;
        }
        
        /* Departments Section Styles */
        .departments {
            padding: 80px 20px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border-top: 1px solid #5a5a00;
        }
        
        .departments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .department-card {
            background: linear-gradient(135deg, #575555 0%, #989f89 50%, #494545 100%);
            border: 1px solid rgba(80, 75, 51, 0.3);
            border-radius: 12px;
            padding: 32px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .department-card:hover {
            transform: translateY(-4px);
            background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
            box-shadow: 0 16px 48px rgba(255, 255, 255, 0.4);
        }
        
        .department-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            font-size: 1.5rem;
            color: #000000;
        }
        
        .department-card h3 {
            font-size: 1.5rem;
            color: #000000;
            margin-bottom: 16px;
            font-weight: 800;
            font-family: 'Arial Black', Arial, sans-serif;
            letter-spacing: 0.5px;
        }
        
        .department-card p {
            color: #000000;
            line-height: 1.8;
            font-family: 'Arial', sans-serif;
            font-weight: 500;
            font-size: 1.1rem;
        }
        
        /* Different Section Styles */
        .different {
            padding: 80px 20px;
            background: linear-gradient(135deg, #484846 0%, #3a3a00 50%, #484846 100%);
            border-top: 1px solid #5a5a00;
        }
        
        .different-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .different-item {
            background: linear-gradient(135deg, #575555 0%, #989f89 50%, #494545 100%);
            border: 1px solid rgba(80, 75, 51, 0.3);
            border-radius: 12px;
            padding: 24px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .different-item:hover {
            transform: translateY(-4px);
            border-color: #ffffff;
            background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%);
            box-shadow: 0 12px 36px rgba(255, 255, 255, 0.4);
        }
        
        .different-icon {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            font-size: 1.25rem;
            color: #000000;
        }
        
        .different-item h3 {
            font-size: 1.5rem;
            color: #000000;
            margin-bottom: 12px;
            font-weight: 800;
            font-family: 'Arial Black', Arial, sans-serif;
            letter-spacing: 0.5px;
        }
        
        .different-item p {
            color: #000000;
            line-height: 1.8;
            font-family: 'Arial', sans-serif;
            font-weight: 500;
            font-size: 1.1rem;
        }
        
        /* Gallery CSS moved to gallery.blade.php */
        
        /* Footer CSS moved to footer.blade.php */
        
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
                border-radius: 3px;
            }
            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }
            .hero-text h1 {
                font-size: 2rem;
            }
            .device {
                width: 320px;
                height: 224px;
                transform: rotateY(0deg);
            }
            .device::after {
                width: 80px;
                height: 20px;
            }
        }
    </style>
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Force dark theme override */
        * {
            box-sizing: border-box;
        }
        
        body, html {
            background: linear-gradient(180deg, #3a3a00 0%, #484846 25%, #5a5a00 50%, #484846 75%, #3a3a00 100%) !important;
            color: #ffffff !important;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Ensure all sections stay dark yellow */
        section {
            background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%) !important;
        }
        
        /* Override any potential white backgrounds */
        .navbar, .hero, .services, .production, .stats, .departments, .different, .contact {
            background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%) !important;
        }
        
        /* Ensure navbar and hero match exactly */
        .navbar, .hero {
            background: linear-gradient(135deg, #505038 0%, #4b4b33 50%, #24240e 100%) !important;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-values">
                        <div class="value-point" id="value1">
                            <div class="value-text">
                                <h3>الجودة</h3>
                                <p> يجب ان نلتزك بكل شيء عن اي شئء نلتزم بأعلى معايير الجودة في كل ما نقدمه</p>
                            </div>
                        </div>
                        <div class="value-point" id="value2">
                            <div class="value-text">
                                <h3>الإبداع</h3>
                                <p>حلول مبتكرة وأفكار خارجة عن المألوف</p>
                            </div>
                        </div>
                        <div class="value-point" id="value3">
                            <div class="value-text">
                                <h3>الثقة</h3>
                                <p>علاقات طويلة الأمد مبنية على المصداقية</p>
                            </div>
                        </div>
                    </div>
                    <div class="hero-buttons fade-in-delay-5">
                        <a href="#services" class="btn-primary">اكتشف خدماتنا</a>
                        <a href="#contact" class="btn-secondary">تواصل معنا</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="nav-arrows">
                        <button class="nav-arrow nav-prev" onclick="previousValue()">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        <button class="nav-arrow nav-next" onclick="nextValue()">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                    </div>
                    <div class="device-container">
                        <div class="device">
                            <div class="device-screen">
                                <video autoplay muted loop playsinline poster="https://picsum.photos/seed/video-poster/800/600.jpg">
                                    <source src="{{ asset('assets/videos/123.mp4') }}" type="video/mp4">
                                    <source src="{{ asset('assets/videos/123.ogg') }}" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="device-button"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>خدماتنا</h2>
                <p>السهولة والتنظيم المتميز</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>أنظمة الإضاءة</h3>
                    <p>نقدم حلولاً إضاءة مبتكرة تخلق الأجواء المثالية لأي فعالية أو مساحة.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-volume-up"></i>
                    </div>
                    <h3>أنظمة الصوت</h3>
                    <p>إعدادات صوتية احترافية توفر صوتاً واضحاً للمؤتمرات والحفلات والفعاليات الخاصة.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>التوثيق</h3>
                    <p>خدمات توثيق الفعاليات الكاملة بما في ذلك التصوير الفوتوغرافي والفيديو والتقارير.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hotel"></i>
                    </div>
                    <h3>الضيافة</h3>
                    <p>خدمات ضيافة استثنائية لضمان شعور ضيوفك بالترحيب والعناية الكاملة.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>منظمو الفعاليات</h3>
                    <p>تخطيط وإدارة فعاليات خبراء لجعل فعالياتك المؤسسية أو الاجتماعية سلسة.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>الهدايا</h3>
                    <p>حلول هدايا مختارة للعملاء والموظفين أو الحاضرين في الفعاليات تترك انطباعاً دائماً.</p>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3 class="stat-number" data-target="500">0</h3>
                    <p>عميل وثق بنا بمشاريعهم</p>
                </div>
                <div class="stat-item">
                    <h3 class="stat-number" data-target="10000">0</h3>
                    <p>ساعة في تقديم خدمات الجودة</p>
                </div>
                <div class="stat-item">
                    <h3 class="stat-number" data-target="1000">0</h3>
                    <p>مشروع مكتمل بنجاح لعملاء متنوعين</p>
                </div>
                <div class="stat-item">
                    <h3 class="stat-number" data-target="50">0</h3>
                    <p>عضو فريق مكرس لتحقيق أفضل النتائج</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Different Section -->
    <section class="different">
        <div class="container">
            <div class="section-header">
                <h2>ما يميزنا؟</h2>
                <p>نتميز عن المنافسين من خلال الجمع بين الإبداع والكفاءة والجودة العالية</p>
            </div>
            <div class="different-grid">
                <div class="different-item">
                    <div class="different-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>التنفيذ والخدمات اللوجستية</h3>
                    <p>التخطيط الاستراتيجي والخدمات اللوجستية التي تضمن سير كل مشروع بسلاسة.</p>
                </div>
                <div class="different-item">
                    <div class="different-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>الالتزام</h3>
                    <p>نحترم المواعيد النهائية ونقدم النتائج في الوقت المحدد، في كل مرة.</p>
                </div>
                <div class="different-item">
                    <div class="different-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>السرعة</h3>
                    <p>تنفيذ سريع وفعال دون المساس بالجودة.</p>
                </div>
                <div class="different-item">
                    <div class="different-icon">
                        <i class="fas fa-adjust"></i>
                    </div>
                    <h3>المرونة والجودة</h3>
                    <p>التكيف مع احتياجاتك مع الحفاظ على أعلى المعايير.</p>
                </div>
                <div class="different-item">
                    <div class="different-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>الأفكار المبتكرة</h3>
                    <p>مفاهيم إبداعية وحلول جديدة تجعلك تتميز.</p>
                </div>
                <div class="different-item">
                    <div class="different-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>الفريق الاحترافي</h3>
                    <p>فريق من الخبراء المهرة ذوي الخبرات المتنوعة والتفاني.</p>
                </div>
                <div class="different-item">
                    <div class="different-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>شراكات موثوقة</h3>
                    <p>بناء علاقات طويلة الأمد مع العملاء بناءً على الثقة والنتائج.</p>
                </div>
                <div class="different-item">
                    <div class="different-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>الرؤية العالمية</h3>
                    <p>نحن نحضر المعايير الدولية والنظرة العالمية إلى كل مشروع.</p>
                </div>
            </div>
        </div>
    </section>

    @include('partials.gallery')

    @include('partials.contact')
    @include('partials.customers')

    @include('partials.footer')

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top" aria-label="العودة للأعلى">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="script.js"></script>
    <script>
        // Professional dynamic value points display
        document.addEventListener('DOMContentLoaded', function() {
            const values = ['value1', 'value2', 'value3'];
            let currentIndex = 0;
            let autoRotateInterval;
            let isTransitioning = false;
            
            function showValue(index, direction = 'next') {
                if (isTransitioning) return;
                isTransitioning = true;
                
                const currentElement = document.getElementById(values[currentIndex]);
                const nextElement = document.getElementById(values[index]);
                
                // Exit animation for current element
                currentElement.classList.add('exit');
                currentElement.classList.remove('active');
                
                // Prepare next element
                nextElement.classList.remove('exit');
                
                // Show next element with entrance animation
                setTimeout(() => {
                    nextElement.classList.add('active');
                    
                    setTimeout(() => {
                        currentElement.classList.remove('exit');
                        isTransitioning = false;
                    }, 100);
                }, 300);
                
                currentIndex = index;
                
                // Update navigation arrows visual feedback
                updateNavArrows();
            }
            
            function nextValue() {
                const nextIndex = (currentIndex + 1) % values.length;
                showValue(nextIndex, 'next');
                resetAutoRotate();
            }
            
            function previousValue() {
                const prevIndex = (currentIndex - 1 + values.length) % values.length;
                showValue(prevIndex, 'prev');
                resetAutoRotate();
            }
            
            function startAutoRotate() {
                autoRotateInterval = setInterval(() => {
                    nextValue();
                }, 4000);
            }
            
            function stopAutoRotate() {
                clearInterval(autoRotateInterval);
            }
            
            function resetAutoRotate() {
                stopAutoRotate();
                startAutoRotate();
            }
            
            function updateNavArrows() {
                const prevBtn = document.querySelector('.nav-prev');
                const nextBtn = document.querySelector('.nav-next');
                
                // Add pulse effect to arrows
                [prevBtn, nextBtn].forEach(btn => {
                    btn.style.transform = 'scale(1.1)';
                    setTimeout(() => {
                        btn.style.transform = 'scale(1)';
                    }, 200);
                });
            }
            
            // Make functions global for onclick handlers
            window.nextValue = nextValue;
            window.previousValue = previousValue;
            
            // Initialize
            setTimeout(() => {
                showValue(0);
                startAutoRotate();
            }, 1000);
            
            // Pause auto-rotation on hover
            const heroValues = document.querySelector('.hero-values');
            heroValues.addEventListener('mouseenter', stopAutoRotate);
            heroValues.addEventListener('mouseleave', startAutoRotate);
            
            // Add keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') nextValue();
                if (e.key === 'ArrowRight') previousValue();
            });
        });
    </script>
</body>
</html>
