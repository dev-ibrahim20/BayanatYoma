<style>
        /* Footer Styles */
        .footer {
            background: linear-gradient(135deg, #484846 0%, #3a3a00 50%, #484846 100%);
            padding: 60px 20px 20px;
            border-top: 1px solid #5a5a00;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 48px;
            max-width: 1200px;
            margin: 0 auto 40px;
            align-items: start;
        }
        
        .footer-logo h2 {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 2rem;
            margin-bottom: 16px;
            font-weight: 700;
        }
        
        .footer-logo p {
            color: #ffffff;
            font-size: 1rem;
        }
        
        .footer-section h3 {
            color: #ffffff;
            font-size: 1.125rem;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .footer-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }
        
        .footer-section {
            text-align: right;
        }
        
        .footer-section a {
            color: #ffffff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-section a:hover {
            color: #f8f9fa;
        }
        
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding-top: 32px;
            border-top: 1px solid #5a5a00;
        }
        
        .footer-bottom p {
            color: #ffffff;
            margin: 0;
        }
        
        .social-links {
            display: flex;
            gap: 16px;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 50%, #ffffff 100%);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000000;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(255, 255, 255, 0.3);
            border-color: #ffffff;
        }
        
        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
                text-align: center;
            }
            
            .footer-links {
                grid-template-columns: 1fr;
                gap: 25px;
                text-align: center;
            }
            
            .footer-section {
                text-align: center;
            }
            
            .footer-bottom {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }
        }
        
        @media (max-width: 1024px) {
            .footer-links {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <h2>Muhaya</h2>
                <p>نحول أفكارك إلى واقع ملموس</p>
            </div>
            <div class="footer-links">
                <div class="footer-section">
                    <h3>روابط سريعة</h3>
                    <ul>
                        <li><a href="#home">الرئيسية</a></li>
                        <li><a href="#services">الخدمات</a></li>
                        <li><a href="#production">الإنتاج</a></li>
                        <li><a href="#departments">الأقسام</a></li>
                        <li><a href="#gallery">معرض الأعمال</a></li>
                        <li><a href="#contact">اتصل بنا</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>الخدمات</h3>
                    <ul>
                        <li><a href="#services">تنظيم الفعاليات</a></li>
                        <li><a href="#production">الإنتاج</a></li>
                        <li><a href="#services">التغليف</a></li>
                        <li><a href="#services">التوثيق</a></li>
                        <li><a href="#services">الضيافة</a></li>
                        <li><a href="#services">منظمو الفعاليات</a></li>
                        <li><a href="#services">الهدايا</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>تواصل معنا</h3>
                    <ul>
                        <li><a href="tel:+966537666223">+966 537 666 223</a></li>
                        <li><a href="mailto:info@muhaya-sa.com">info@muhaya-sa.com</a></li>
                        <li><a href="https://maps.app.goo.gl/d3JZryN9baiC5TK47" target="_blank">شارع الياسمين - القادسية</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Muhaya. جميع الحقوق محفوظة.</p>
            <div class="social-links">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</footer>
