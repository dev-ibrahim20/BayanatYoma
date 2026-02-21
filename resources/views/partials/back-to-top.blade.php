<style>
/* Back to Top Button Styles */
.back-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
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
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    color: #505038;
    font-size: 1.2rem;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
}

.back-to-top:hover {
    transform: translateY(-5px) scale(1.1);
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 50%, #f8f9fa 100%);
    box-shadow: 0 8px 25px rgba(255, 255, 255, 0.5);
    border-color: rgba(255, 255, 255, 0.6);
}

.back-to-top:active {
    transform: translateY(-2px) scale(0.95);
}

.back-to-top i {
    transition: transform 0.3s ease;
}

.back-to-top:hover i {
    transform: translateY(-2px);
}
</style>

<!-- Back to Top Button -->
<button id="backToTop" class="back-to-top" aria-label="العودة للأعلى" style="opacity: 0; visibility: hidden;">
    <i class="fas fa-arrow-up"></i>
</button>


<script>
// Back to top button visibility control
document.addEventListener('DOMContentLoaded', function() {
    const backToTopBtn = document.getElementById('backToTop');
    const heroSection = document.getElementById('home');
    
    function toggleBackToTopButton() {
        const heroBottom = heroSection.offsetTop + heroSection.offsetHeight;
        const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollPosition > heroBottom - 100) {
            backToTopBtn.style.opacity = '1';
            backToTopBtn.style.visibility = 'visible';
            backToTopBtn.style.transform = 'translateY(0)';
        } else {
            backToTopBtn.style.opacity = '0';
            backToTopBtn.style.visibility = 'hidden';
            backToTopBtn.style.transform = 'translateY(20px)';
        }
    }
    
    // Initial check
    toggleBackToTopButton();
    
    // Check on scroll
    window.addEventListener('scroll', toggleBackToTopButton);
    
    // Smooth scroll to top when clicked
    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
</script>
