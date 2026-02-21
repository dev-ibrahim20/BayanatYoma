
<style>
/* Different Section Styles */
.different {
    padding: 80px 20px;
    background: linear-gradient(135deg, #484846 0%, #3a3a00 50%, #484846 100%);
    border-top: 1px solid #5a5a00;
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

@media (max-width: 768px) {
    .different {
        padding: 60px 20px;
    }
    
    .different-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .section-header h2 {
        font-size: 2rem;
    }
    
    .different-item {
        padding: 20px;
    }
}
</style>

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
