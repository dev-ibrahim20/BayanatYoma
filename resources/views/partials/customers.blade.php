<style>
    /* Customers Slider Section */
    .customers-section {
        padding: 40px 0;
        background: rgb(244, 236, 212);
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    
    .customers-container {
        width: 100%;
        position: relative;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 40px;
        padding: 0 20px;
    }
    
    .section-header h2 {
        font-size: 2.5rem;
        background: linear-gradient(135deg, #b75f20 0%, #A0522D 50%, #8B4513 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 15px;
        font-weight: 700;
    }
    
    .section-header p {
        font-size: 1.2rem;
        color: #333333;
        margin: 0;
    }
    
    .customers-slider {
        position: relative;
        overflow: hidden;
        width: 100%;
        padding: 20px 0;
    }
    
    .slider-wrapper {
        display: flex;
        animation: slideAnimation 25s linear infinite;
        width: fit-content;
    }
    
    .slider-wrapper:hover {
        animation-play-state: paused;
    }
    
    .customer-slide {
        min-width: 120px;
        width: 120px;
        height: 120px;
        margin: 0 20px;
        border-radius: 50%;
        overflow: hidden;
        background: white;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: 3px solid transparent;
        background: linear-gradient(white, white) padding-box,
                    linear-gradient(135deg, #b75f20 0%, #A0522D 50%, #8B4513 100%) border-box;
    }
    
    .customer-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.3s ease;
    }
    
    .customer-slide:hover {
        transform: scale(1.1);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        border: 3px solid transparent;
        background: linear-gradient(white, white) padding-box,
                    linear-gradient(135deg, #b75f20 0%, #A0522D 50%, #8B4513 100%) border-box;
    }
    
    .customer-slide:hover img {
        transform: scale(1.05);
        filter: brightness(1.1);
    }
    
    @keyframes slideAnimation {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
    
    @media (max-width: 768px) {
        .section-header h2 {
            font-size: 2rem;
        }
        
        .customer-slide {
            min-width: 80px;
            width: 80px;
            height: 80px;
            margin: 0 15px;
        }
        
        .customers-section {
            padding: 30px 0;
        }
    }
</style>

<!-- Customers Slider Section -->
<section class="customers-section">
    <div class="customers-container">
        <div class="section-header">
            <h2>عملاؤنا</h2>
            <p>نفتخر بثقة عملائنا الكرام</p>
        </div>
        
        <div class="customers-slider">
            <div class="slider-wrapper">
                <!-- First set of logos -->
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer1/120/120.jpg" alt="شركة النخبة">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer2/120/120.jpg" alt="مجموعة المملكة">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer3/120/120.jpg" alt="دار الزمان">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer4/120/120.jpg" alt="فنون الشرق">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer5/120/120.jpg" alt="جمعية الأمل">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer6/120/120.jpg" alt="رؤية المستقبل">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer7/120/120.jpg" alt="شركة السعادة">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer8/120/120.jpg" alt="مؤسسة العطاء">
                </div>
                
                <!-- Duplicate logos for continuous animation -->
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer1/120/120.jpg" alt="شركة النخبة">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer2/120/120.jpg" alt="مجموعة المملكة">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer3/120/120.jpg" alt="دار الزمان">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer4/120/120.jpg" alt="فنون الشرق">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer5/120/120.jpg" alt="جمعية الأمل">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer6/120/120.jpg" alt="رؤية المستقبل">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer7/120/120.jpg" alt="شركة السعادة">
                </div>
                
                <div class="customer-slide">
                    <img src="https://picsum.photos/seed/customer8/120/120.jpg" alt="مؤسسة العطاء">
                </div>
            </div>
        </div>
    </div>
</section>
