@section('title', __('messages.home'))
<style>
/* Professional Value Points Styling */
.hero-values {
    position: relative;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 40px;
}

.value-point {
    position: absolute;
    width: 100%;
    max-width: 800px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 24px;
    padding: 40px;
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.1),
        0 10px 20px rgba(0, 0, 0, 0.05),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    text-align: center;
}

.value-point.active {
    opacity: 1;
    transform: translateY(0);
    box-shadow: 
        0 25px 50px rgba(0, 0, 0, 0.15),
        0 15px 30px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.3);
}

.value-point.exit {
    opacity: 0;
    transform: translateY(-30px);
}

.value-point::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, #667eea, #764ba2, #667eea);
    border-radius: 24px 24px 0 0;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.value-point.active::before {
    opacity: 1;
    animation: shimmer 3s infinite;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

.value-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    box-shadow: 
        0 10px 25px rgba(102, 126, 234, 0.3),
        0 5px 15px rgba(118, 75, 162, 0.2);
    position: relative;
    overflow: hidden;
}

.value-icon::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.5s ease;
}

.value-point:hover .value-icon::before {
    left: 100%;
}

.value-icon i {
    font-size: 2rem;
    color: white;
    z-index: 2;
    position: relative;
}

.value-text {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

.value-text h3 {
    font-size: 2.5rem;
    font-weight: 800;
    margin: 0;
    background: linear-gradient(135deg, #ffffff 0%, #e0e0e0 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1.2;
    letter-spacing: -0.5px;
}

.value-text p {
    font-size: 1.3rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    margin: 0;
    font-weight: 400;
    max-width: 600px;
    margin: 0 auto;
}

/* Professional Navigation Arrows */
.hero-navigation-professional {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
    margin: 30px 0;
    padding: 20px;
    position: relative;
    z-index: 101;
}

.nav-arrow-professional {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    padding: 18px 28px;
    border: none;
    border-radius: 50px;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.05) 100%);
    backdrop-filter: blur(20px);
    border: 2px solid rgba(255, 255, 255, 0.2);
    color: #ffffff;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 
        0 10px 25px rgba(0, 0, 0, 0.1),
        0 5px 15px rgba(0, 0, 0, 0.05),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
    position: relative;
    overflow: hidden;
    min-width: 140px;
}

.nav-arrow-professional::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
    transition: left 0.6s ease;
}

.nav-arrow-professional:hover::before {
    left: 100%;
}

.nav-arrow-professional:hover {
    transform: translateY(-3px);
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0.08) 100%);
    border-color: rgba(255, 255, 255, 0.3);
    box-shadow: 
        0 15px 35px rgba(0, 0, 0, 0.15),
        0 8px 20px rgba(0, 0, 0, 0.1),
        inset 0 1px 0 rgba(255, 255, 255, 0.3);
}

.nav-arrow-professional:active {
    transform: translateY(-1px);
    box-shadow: 
        0 8px 20px rgba(0, 0, 0, 0.1),
        0 4px 10px rgba(0, 0, 0, 0.05),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
}

.nav-arrow-professional i {
    font-size: 18px;
    transition: transform 0.3s ease;
}

.nav-arrow-professional span {
    font-weight: 500;
    letter-spacing: 0.5px;
}

.nav-prev-professional i {
    transform: rotate(180deg);
}

.nav-next-professional:hover i {
    transform: translateX(3px);
}

.nav-prev-professional:hover i {
    transform: rotate(180deg) translateX(3px);
}

/* RTL Support */
[dir="rtl"] .nav-prev-professional i {
    transform: rotate(0deg);
}

[dir="rtl"] .nav-next-professional i {
    transform: rotate(180deg);
}

[dir="rtl"] .nav-prev-professional:hover i {
    transform: translateX(3px);
}

[dir="rtl"] .nav-next-professional:hover i {
    transform: rotate(180deg) translateX(3px);
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .hero-navigation-professional {
        gap: 20px;
        margin: 20px 0;
        padding: 15px;
    }
    
    .nav-arrow-professional {
        padding: 14px 20px;
        font-size: 14px;
        min-width: 120px;
        gap: 10px;
    }
    
    .nav-arrow-professional i {
        font-size: 16px;
    }
}

@media (max-width: 480px) {
    .hero-navigation-professional {
        gap: 15px;
        margin: 15px 0;
        padding: 10px;
        flex-direction: column;
    }
    
    .nav-arrow-professional {
        padding: 12px 24px;
        font-size: 13px;
        min-width: 100%;
        max-width: 200px;
    }
    
    .nav-arrow-professional i {
        font-size: 14px;
    }
}

/* Top Value Points Section */
.hero-values-top {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 100;
    padding: 40px 20px 20px;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.3) 0%, transparent 100%);
}

/* iPhone 17 Pro Max Hero Styles */
.hero {
    padding: 20px;
    background-image: linear-gradient(135deg, rgb(26, 47, 74) 0%, rgb(26, 47, 74) 40%, rgb(15, 23, 20) 80%);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    /* scroll-snap-type: none !important;
    scroll-snap-align: none !important;
    scroll-snap-stop: none !important; */
}
.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.hero-particles {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.particle {
    animation: float 20s infinite linear;
}

@keyframes float {
    0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
}

.hero-gradient {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 30% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 70% 80%, rgba(255, 255, 255, 0.08) 0%, transparent 50%);
    z-index: 2;
}

.hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: center;
    max-width: 1400px;
    width: 100%;
    min-height: 100vh;
    margin: 0 auto;
    padding: 0 20px;
}

/* Phone Mockup with Video - Left Side */
.hero-phone {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
}

.phone-mockup {
    position: relative;
    width: 380px;
    height: 780px;
}

.phone-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    position: relative;
    z-index: 1;
    overflow: hidden;
}

.video-container {
    position: relative;
    width: 380px;
    height: 780px;
    border-radius: 45px;
    overflow: hidden;
    background: linear-gradient(135deg, #1A2F4A, #C6A87D);
    border: 12px solid #000000;
    box-shadow: 
        0 0 0 3px #4a4a4c,
        0 25px 80px rgba(0, 0, 0, 0.5),
        inset 0 0 0 3px rgba(255, 255, 255, 0.1),
        0 0 100px rgba(59, 130, 246, 0.3);
}

.video-container video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Dynamic Island Pro Max */
.dynamic-island {
    position: absolute;
    top: 8px;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 25px;
    background: #000000;
    border-radius: 18px;
    z-index: 1000;
    box-shadow: 
        0 0 0 2px rgba(255, 255, 255, 0.3),
        inset 0 0 0 2px rgba(255, 255, 255, 0.2),
        0 8px 25px rgba(0, 0, 0, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    backdrop-filter: blur(20px);
}

/* iPhone 17 Pro Max Screen */
.iphone-screen {
    position: absolute;
    top: 60px;
    left: 12px;
    right: 12px;
    bottom: 12px;
    background: #000000;
    border-radius: 40px;
    overflow: hidden;
    border: 3px solid #2d2d2d;
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.5);
}

.iphone-screen video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 37px;
}

/* iPhone 17 Pro Max Frame Details */
.iphone-frame-details {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
}

.volume-buttons {
    position: absolute;
    left: -8px;
    top: 150px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    z-index: 10;
}

.volume-up, .volume-down {
    width: 8px;
    height: 55px;
    background: linear-gradient(135deg, #c7c7cc 0%, #8e8e93 100%);
    border-radius: 4px;
    box-shadow: 
        0 4px 12px rgba(0, 0, 0, 0.6),
        inset 0 0 3px rgba(255, 255, 255, 0.3),
        0 0 0 1px rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.volume-down {
    height: 45px;
}

.power-button {
    position: absolute;
    right: -8px;
    top: 170px;
    width: 8px;
    height: 85px;
    background: linear-gradient(135deg, #c7c7cc 0%, #8e8e93 100%);
    border-radius: 4px;
    box-shadow: 
        0 4px 12px rgba(0, 0, 0, 0.6),
        inset 0 0 3px rgba(255, 255, 255, 0.3),
        0 0 0 1px rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.1);
    z-index: 10;
}

.silent-switch {
    position: absolute;
    left: -8px;
    top: 100px;
    width: 8px;
    height: 35px;
    background: linear-gradient(135deg, #c7c7cc 0%, #8e8e93 100%);
    border-radius: 4px;
    box-shadow: 
        0 4px 12px rgba(0, 0, 0, 0.6),
        inset 0 0 3px rgba(255, 255, 255, 0.3),
        0 0 0 1px rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.1);
    z-index: 10;
}

/* iPhone 17 Pro Max Single Camera */
.camera-system {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 60px;
    background: #1a1a1a;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 
        0 0 0 3px #2d2d2d,
        0 5px 20px rgba(0, 0, 0, 0.5),
        inset 0 0 0 2px rgba(255, 255, 255, 0.1);
}

.main-camera {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #2d2d2d 0%, #1a1a1a 100%);
    border-radius: 50%;
    border: 2px solid #3d3d3d;
    box-shadow: 
        inset 0 0 10px rgba(0, 0, 0, 0.5),
        0 0 20px rgba(59, 130, 246, 0.2);
}

.camera-lens {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 20px;
    height: 20px;
    background: #000000;
    border-radius: 50%;
    border: 2px solid #4d4d4d;
    box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.8);
}

/* Hero Text - Right Side */
.hero-text {
    text-align: center;
    color: #ffffff;
    padding: 40px 20px;
}

.hero-values {
    position: relative;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.value-point {
    position: absolute;
    width: 100%;
    opacity: 0;
    transform: translateX(50px);
    transition: all 1s ease;
    text-align: center;
}

.value-point.active {
    opacity: 1;
    transform: translateX(0);
}

.value-point.exit {
    opacity: 0;
    transform: translateX(-50px);
}

.value-point .value-text h3 {
    font-size: 3rem;
    font-weight: 800;
    margin-bottom: 20px;
    background: #ffffff;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-cli
    line-height: 1.2;
}

.value-point .value-text p {
    font-size: 1.3rem;
    color: #ffffff;
    line-height: 1.6;
    margin-bottom: 30px;
}

.hero-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-top: 40px;
    flex-wrap: wrap;
}

.btn-primary, .btn-secondary {
    padding: 15px 30px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    font-size: 16px;
    cursor: pointer;
    border: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 140px;
}

.btn-primary {
    background: rgba(255, 255, 255, 0.2);
    color: #ffffff;
    box-shadow: 0 8px 25px rgba(0, 122, 255, 0.4);
}

.btn-primary:hover {
    transform: translateY(-2px);
}

.btn-secondary {
    background: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    border: 2px solid rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(10px);
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: rgba(255, 255, 255, 0.5);
    color: #ffffff;
}

/* Social Media Sidebar */
.social-sidebar {
    position: fixed;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1000;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Social Media Sidebar */
.social-sidebar {
    position: fixed;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1000;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.social-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 18px;
    position: relative;
    overflow: hidden;
}

.social-icon.facebook {
    background: linear-gradient(135deg, #1877f2 0%, #0e5fcc 100%);
    color: #ffffff;
}

.social-icon.twitter {
    background: linear-gradient(135deg, #1da1f2 0%, #0c85d0 100%);
    color: #ffffff;
}

.social-icon.instagram {
    background: linear-gradient(135deg, #e4405f 0%, #c13584 50%, #833ab4 100%);
    color: #ffffff;
}

.social-icon.linkedin {
    background: linear-gradient(135deg, #0077b5 0%, #005885 100%);
    color: #ffffff;
}

.social-icon.youtube {
    background: linear-gradient(135deg, #ff0000 0%, #cc0000 100%);
    color: #ffffff;
}

.social-icon.whatsapp {
    background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
    color: #ffffff;
}

.social-icon::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.1) 100%);
    transition: left 0.3s ease;
}

.social-icon:hover {
    transform: scale(1.1);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.social-icon:hover::before {
    left: 100%;
}

/* Social Tooltip */
.social-icon {
    position: relative;
}

.social-icon::after {
    content: attr(data-tooltip);
    position: absolute;
    right: 50px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.9);
    color: #ffffff;
    padding: 8px 12px;
    border-radius: 8px;
    font-size: 12px;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.social-icon:hover::after {
    opacity: 1;
    right: 55px;
}

/* RTL Support for Tooltips */
[dir="rtl"] .social-icon::after {
    right: auto;
    left: 50px;
}

[dir="rtl"] .social-icon:hover::after {
    right: auto;
    left: 55px;
}

/* Responsive Design for Social Media Sidebar */

/* RTL Support */
[dir="rtl"] .social-sidebar {
    left: auto;
    right: 20px;
}

[dir="rtl"] .social-icon::after {
    right: auto;
    left: 50px;
}

[dir="rtl"] .social-icon:hover::after {
    right: auto;
    left: 55px;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .social-sidebar {
        position: fixed;
        bottom: 20px;
        left: 50%;
        top: auto;
        transform: translateX(-50%);
        flex-direction: row;
        gap: 10px;
        z-index: 1000;
        background: rgba(0, 0, 0, 0.8);
        padding: 10px 15px;
        border-radius: 25px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .social-icon {
        width: 35px;
        height: 35px;
        font-size: 16px;
    }
    
    .social-icon::after {
        display: none;
    }
    
    [dir="rtl"] .social-sidebar {
        left: 50%;
        right: auto;
        transform: translateX(-50%);
    }
    
    /* Hero Text Mobile Font Sizes */
    .hero-text .value-text h3 {
        font-size: 1.8rem !important;
        margin-bottom: 10px !important;
    }
    
    .hero-text .value-text p {
        font-size: 1.1rem !important;
        margin-bottom: 0 !important;
        line-height: 1.4 !important;
    }
    
    .hero-values {
        margin-bottom: 0 !important;
    }
    
    .value-point {
        min-height: 80px !important;
        padding: 15px !important;
        max-width: 100% !important;
    }
}

@media (max-width: 480px) {
    .social-sidebar {
        bottom: 15px;
        gap: 8px;
        padding: 8px 12px;
    }
    
    .social-icon {
        width: 30px;
        height: 30px;
        font-size: 14px;
    }
    
    /* Hero Text Mobile Font Sizes - 480px */
    .hero-text .value-text h3 {
        font-size: 1.5rem !important;
        margin-bottom: 8px !important;
    }
    
    .hero-text .value-text p {
        font-size: 0.95rem !important;
        margin-bottom: 0 !important;
        line-height: 1.3 !important;
    }
    
    .value-point {
        min-height: 70px !important;
        padding: 12px !important;
    }
    
    .hero-values {
        margin-bottom: 0 !important;
    }
}

@media (max-width: 360px) {
    .social-sidebar {
        bottom: 10px;
        gap: 6px;
        padding: 6px 10px;
    }
    
    .social-icon {
        width: 28px;
        height: 28px;
        font-size: 12px;
    }
    
    /* Hero Text Mobile Font Sizes - 360px */
    .hero-text .value-text h3 {
        font-size: 1.3rem !important;
        margin-bottom: 6px !important;
    }
    
    .hero-text .value-text p {
        font-size: 0.85rem !important;
        margin-bottom: 0 !important;
        line-height: 1.3 !important;
    }
    
    .value-point {
        min-height: 60px !important;
        padding: 10px !important;
    }
    
    .hero-values {
        margin-bottom: 0 !important;
    }
}
/* Responsive Design */
@media (max-width: 1200px) {
    .hero-content {
        max-width: 1200px;
        gap: 30px;
    }
    
    .phone-mockup, .video-container {
        width: 320px;
        height: 640px;
    }
    
    .value-point .value-text h3 {
        font-size: 3.8rem;
    }
}

@media (max-width: 1024px) {
    .hero {
        padding: 15px;
    }
    
    .hero-content {
        grid-template-columns: 1fr;
        gap: 30px;
        text-align: center;
        padding: 0 15px;
    }
    
    .hero-text {
        order: 2;
        padding: 30px 20px;
    }
    
    .hero-phone {
        order: 1;
        gap: 20px;
        height: auto;
        min-height: 60vh;
    }
    
    .phone-mockup, .video-container {
        width: 280px;
        height: 560px;
    }
    
    .value-point .value-text h3 {
        font-size: 2.5rem;
    }
    
    .value-point .value-text p {
        font-size: 1.2rem;
    }
    
    .hero-buttons {
        justify-content: center;
    }
}

/* Large Screens - Smaller Phone */
@media (min-width: 1400px) {
    .phone-mockup {
        width: 320px;
        height: 660px;
    }
    
    .video-container {
        width: 320px;
        height: 660px;
        border-radius: 38px;
        border: 10px solid #000000;
    }
    
    .dynamic-island {
        width: 90px;
        height: 20px;
        top: 6px;
        border-radius: 12px;
    }
    
    .dynamic-island:hover {
        width: 120px;
    }
    
    .iphone-screen {
        top: 50px;
        left: 10px;
        right: 10px;
        bottom: 10px;
        border-radius: 35px;
        border: 2px solid #2d2d2d;
    }
    
    .volume-buttons {
        left: -6px;
        top: 120px;
    }
    
    .volume-up, .volume-down {
        width: 6px;
        height: 45px;
        border-radius: 3px;
    }
    
    .volume-down {
        height: 35px;
    }
    
    .power-button {
        right: -6px;
        top: 140px;
        width: 6px;
        height: 70px;
        border-radius: 3px;
    }
    
    .silent-switch {
        left: -6px;
        top: 80px;
        width: 6px;
        height: 25px;
        border-radius: 3px;
    }
    
    .camera-system {
        width: 30px;
        height: 30px;
        top: 10px;
    }
    
    .main-camera {
        width: 25px;
        height: 25px;
    }
    
    .camera-lens {
        width: 10px;
        height: 10px;
    }
}

@media (max-width: 768px) {
    .hero {
        padding: 10px;
        min-height: 80vh;
    }
    
    .hero-content {
        gap: 30px;
        padding: 0 10px;
        grid-template-columns: 1fr;
        align-items: stretch;
        min-height: 80vh;
    }
    
    .hero-phone {
        order: 2;
        gap: 15px;
        height: auto;
        min-height: 20vh;
        justify-content: center;
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        margin-top: auto;
    }
    
    .hero-text {
        padding: 25px 15px;
        min-height: auto;
        order: 1;
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .hero-values {
        width: 100%;
        min-height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .value-point {
        border-radius: 15px;
        text-align: center;
        transition: all 0.3s ease;
        width: 100%;
        max-width: 100%;
        height: auto;
        min-height: 100px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    .value-point .value-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
    
    .value-point .value-text p {
        font-size: 2.5rem;
        margin-bottom: 15px;
        order: 1;
        line-height: 1.4;
        font-weight: 600;
    }
    
    .value-point .value-text h3 {
        font-size: 2.2rem;
        margin-bottom: 0;
        order: 2;
    }
    
    .phone-mockup, .video-container {
        width: 140px;
        height: 280px;
    }
    
    .dynamic-island {
        width: 40px;
        height: 12px;
        top: 5px;
        border-radius: 8px;
    }
    
    /* Responsive Design for Hero Values */
    @media (max-width: 1200px) {
        .value-point {
            max-width: 100%;
            min-height: 110px;
            padding: 18px;
        }
        
        .value-point .value-text p {
            font-size: 2.2rem;
        }
        
        .value-point .value-text h3 {
            font-size: 2rem;
        }
    }
    
    @media (max-width: 992px) {
        .value-point {
            max-width: 100%;
            min-height: 100px;
            padding: 15px;
        }
        
        .value-point .value-text p {
            font-size: 2rem;
        }
        
        .value-point .value-text h3 {
            font-size: 1.8rem;
        }
    }
    
    @media (max-width: 768px) {
        .hero-values {
            grid-template-columns: 1fr;
            gap: 15px;
        }
        
        .value-point {
            max-width: 100%;
            min-height: 90px;
            padding: 12px;
        }
        
        .value-point .value-text p {
            font-size: 1.8rem;
        }
        
        .value-point .value-text h3 {
            font-size: 1.6rem;
        }
    }
    
    @media (max-width: 480px) {
        .value-point {
            max-width: 100%;
            min-height: 80px;
            padding: 10px;
        }
        
        .value-point .value-text p {
            font-size: 1.6rem;
        }
        
        .value-point .value-text h3 {
            font-size: 1.4rem;
        }
    }
    
    @media (max-width: 360px) {
        .value-point {
            max-width: 100%;
            min-height: 70px;
            padding: 8px;
        }
        
        .value-point .value-text p {
            font-size: 1.4rem;
        }
        
        .value-point .value-text h3 {
            font-size: 1.2rem;
        }
    }
    
    .hero-buttons {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }
    
    .btn-primary, .btn-secondary {
        width: 100%;
        max-width: 160px;
        padding: 8px 16px;
        font-size: 12px;
        min-width: 80px;
    }
}

@media (max-width: 480px) {
    .hero {
        padding: 5px;
    }
    
    .hero-content {
        gap: 15px;
        padding: 0 5px;
        grid-template-columns: 1fr 2fr;
        align-items: center;
    }
    
    .hero-phone {
        gap: 10px;
        min-height: 35vh;
        flex-direction: row;
        justify-content: center;
    }
    
    .hero-text {
        padding: 20px 10px;
        order: 2;
    }
    
    .phone-mockup, .video-container {
        width: 120px;
        height: 240px;
        border-radius: 25px;
        border: 4px solid #000000;
    }
    
    .dynamic-island {
        width: 35px;
        height: 10px;
        top: 4px;
        border-radius: 6px;
    }
    
    .volume-up, .volume-down {
        height: 20px;
    }
    
    .volume-down {
        height: 15px;
    }
    
    .power-button {
        height: 35px;
    }
    
    .camera-system {
        width: 20px;
        height: 20px;
        top: 8px;
    }
    
    .main-camera {
        width: 16px;
        height: 16px;
    }
    
    .camera-lens {
        width: 6px;
        height: 6px;
    }
    
    .value-point .value-text h3 {
        font-size: 2rem;
        margin-bottom: 15px;
    }
    
    .value-point .value-text p {
        font-size: 1.1rem;
        margin-bottom: 20px;
    }
    
    .hero-buttons {
        gap: 10px;
    }
    
    .btn-primary, .btn-secondary {
        width: 100%;
        max-width: 140px;
        padding: 6px 12px;
        font-size: 11px;
        min-width: 70px;
    }
}

@media (max-width: 360px) {
    .hero-content {
        gap: 10px;
        grid-template-columns: 1fr 2fr;
        align-items: center;
    }
    
    .hero-phone {
        gap: 8px;
        min-height: 30vh;
        flex-direction: row;
        justify-content: center;
    }
    
    .phone-mockup, .video-container {
        width: 100px;
        height: 200px;
    }
    
    .dynamic-island {
        width: 35px;
        height: 12px;
    }
    
    .value-point .value-text h3 {
        font-size: 1.8rem;
    }
    
    .value-point .value-text p {
        font-size: 1rem;
    }
    
    .btn-primary, .btn-secondary {
        width: 100%;
        max-width: 120px;
        padding: 5px 10px;
        font-size: 10px;
        min-width: 60px;
    }
}

/* Social Media Sidebar Responsive */
@media (max-width: 1024px) {
    .social-sidebar {
        left: 10px;
        gap: 12px;
    }
    
    .social-icon {
        width: 35px;
        height: 35px;
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    .social-sidebar {
        left: 5px;
        gap: 10px;
    }
    
    .social-icon {
        width: 30px;
        height: 30px;
        font-size: 14px;
    }
    
    .social-icon::after {
        display: none;
    }
}

@media (max-width: 480px) {
    .social-sidebar {
        bottom: 20px;
        left: 50%;
        top: auto;
        transform: translateX(-50%);
        flex-direction: row;
        gap: 8px;
    }
    
    .social-icon {
        width: 35px;
        height: 35px;
        font-size: 16px;
    }
}
</style>


<!-- Social Media Sidebar -->
<div class="social-sidebar">
    <a href="https://facebook.com" target="_blank" class="social-icon facebook" data-tooltip="Facebook" 
       aria-label="{{ __('messages.follow_facebook') }}" title="{{ __('messages.facebook_page') }}">
        <i class="fab fa-facebook-f" aria-hidden="true"></i>
    </a>
    <a href="https://twitter.com" target="_blank" class="social-icon twitter" data-tooltip="Twitter"
       aria-label="{{ __('messages.follow_twitter') }}" title="{{ __('messages.twitter_profile') }}">
        <i class="fab fa-twitter" aria-hidden="true"></i>
    </a>
    <a href="https://instagram.com" target="_blank" class="social-icon instagram" data-tooltip="Instagram"
       aria-label="{{ __('messages.follow_instagram') }}" title="{{ __('messages.instagram_profile') }}">
        <i class="fab fa-instagram" aria-hidden="true"></i>
    </a>
    <a href="https://linkedin.com" target="_blank" class="social-icon linkedin" data-tooltip="LinkedIn"
       aria-label="{{ __('messages.follow_linkedin') }}" title="{{ __('messages.linkedin_page') }}">
        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
    </a>
    <a href="https://youtube.com" target="_blank" class="social-icon youtube" data-tooltip="YouTube"
       aria-label="{{ __('messages.follow_youtube') }}" title="{{ __('messages.youtube_channel') }}">
        <i class="fab fa-youtube" aria-hidden="true"></i>
    </a>
    <a href="https://wa.me/1234567890" target="_blank" class="social-icon whatsapp" data-tooltip="WhatsApp"
       aria-label="{{ __('messages.contact_whatsapp') }}" title="{{ __('messages.whatsapp_contact') }}">
        <i class="fab fa-whatsapp" aria-hidden="true"></i>
    </a>
</div>



<!-- Hero Section -->
<section id="home" class="hero">
        <div class="hero-background">
            <div class="hero-particles"></div>
            <div class="hero-gradient"></div>
        </div>
    <div class="hero-content">
        
        <!-- Phone Mockup with Video - Left Side -->
        <div class="hero-phone">
            {{-- <div class="phone-mockup">
                <img src="{{ asset('assets/images/mockup_apple_iphone_13_pro_max.png') }}" alt="iPhone Mockup" class="phone-image">
            </div> --}}
            
            <div class="video-container">
                <!-- Dynamic Island -->
                <div class="dynamic-island">
                    <div class="island-camera"></div>
                    <div class="island-indicator"></div>
                </div>
                
                <video autoplay muted loop playsinline 
                       aria-label="{{ __('messages.hero_video_description') }}"
                       title="{{ __('messages.company_showcase_video') }}">
                    <source src="{{ asset('assets/videos/123.mp4') }}" type="video/mp4">
                    <source src="{{ asset('assets/videos/123.ogg') }}" type="video/ogg">
                    <track kind="captions" srclang="{{ app()->getLocale() }}" label="{{ __('messages.captions') }}" src="{{ asset('assets/captions/hero-video-' . app()->getLocale() . '.vtt') }}">
                    <track kind="descriptions" srclang="{{ app()->getLocale() }}" label="{{ __('messages.descriptions') }}" src="{{ asset('assets/descriptions/hero-video-' . app()->getLocale() . '.vtt') }}">
                    {{ __('messages.video_not_supported') }}
                </video>
            </div>
            
            <!-- Camera Overlay -->
            <div class="camera-overlay">
                <div class="camera-icon"></div>
            </div>
        </div>
        @php
            $about = App\Models\AboutUs::first();
        @endphp
        <!-- Hero Text - Right Side -->
        <div class="hero-text">
            <div class="hero-values">
            <div class="value-point active slide-in" id="value1">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <div class="value-text">
                    <h3>{{ app()->getLocale() == 'ar' ? 'رؤيتنا' : 'Our Vision' }}</h3>
                    <p>{{ app()->getLocale() == 'ar' ? $about->our_vision_ar : $about->our_vision_en }}</p>
                </div>
            </div>
            
            <div class="value-point" id="value2">
                <div class="value-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <div class="value-text">
                    <h3>{{ app()->getLocale() == 'ar' ? 'مهمتنا' : 'Our Mission' }}</h3>
                    <p>{{ app()->getLocale() == 'ar' ? $about->our_mission_ar : $about->our_mission_en }}</p>
                </div>
            </div>
            
            <div class="value-point" id="value3">
                <div class="value-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="value-text">
                    <h3>{{ app()->getLocale() == 'ar' ? 'رسالتنا' : 'Our Message' }}</h3>
                    <p>{{ app()->getLocale() == 'ar' ? $about->our_message_ar : $about->our_message_en }}</p>
                </div>
            </div>
            
            <div class="value-point" id="value4">
                <div class="value-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <div class="value-text">
                    <h3>{{ app()->getLocale() == 'ar' ? 'قصتنا' : 'Our Story' }}</h3>
                    <p>{{ app()->getLocale() == 'ar' ? $about->our_story_ar : $about->our_story_en }}</p>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>


<script>
// Professional dynamic value points display - Change every 10 seconds
document.addEventListener('DOMContentLoaded', function() {
    const values = ['value1', 'value2', 'value3', 'value4'];
    let currentIndex = 0;
    let autoRotateInterval;
    let isTransitioning = false;
    
    // Check if all elements exist
    function checkElementsExist() {
        return values.every(id => document.getElementById(id));
    }
    
    if (!checkElementsExist()) {
        console.warn('Some value elements are missing');
        return;
    }
    
    function showValue(index, direction = 'next') {
        if (isTransitioning) return;
        isTransitioning = true;
        
        const currentElement = document.getElementById(values[currentIndex]);
        const nextElement = document.getElementById(values[index]);
        
        if (!currentElement || !nextElement) {
            isTransitioning = false;
            return;
        }
        
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
        }, 500);
        
        currentIndex = index;
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
        }, 10000); // Change every 10 seconds
    }
    
    function stopAutoRotate() {
        clearInterval(autoRotateInterval);
    }
    
    function resetAutoRotate() {
        stopAutoRotate();
        startAutoRotate();
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
    if (heroValues) {
        heroValues.addEventListener('mouseenter', stopAutoRotate);
        heroValues.addEventListener('mouseleave', startAutoRotate);
    }
    
    // Add keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') nextValue();
        if (e.key === 'ArrowRight') previousValue();
    });
    
    
    // Create floating particles
    function createParticles() {
        const particlesContainer = document.querySelector('.hero-particles');
        if (!particlesContainer) return;
        
        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.cssText = `
                position: absolute;
                width: ${Math.random() * 4 + 1}px;
                height: ${Math.random() * 4 + 1}px;
                background: rgba(255, 255, 255, ${Math.random() * 0.5 + 0.2});
                border-radius: 50%;
                left: ${Math.random() * 100}%;
                top: ${Math.random() * 100}%;
                animation: float ${Math.random() * 10 + 10}s infinite linear;
            `;
            particlesContainer.appendChild(particle);
        }
    }
    
    createParticles();
});
</script>
