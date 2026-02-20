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

<style>
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

@media (max-width: 768px) {
    .services {
        padding: 60px 20px;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    .service-card {
        padding: 24px;
    }
}
</style>
