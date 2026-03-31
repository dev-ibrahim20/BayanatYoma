
<style>
/* Stats Section Styles */
.stats {
    padding: 80px 20px;
    background-image: linear-gradient(135deg, rgb(26, 47, 74) 0%, rgb(26, 47, 74) 40%, rgb(15, 23, 20) 80%);
    border-top: 1px solid #585858;
    position: relative;
    overflow: hidden;
}

.stats::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 30% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 80%, rgba(255, 255, 255, 0.08) 0%, transparent 50%);
    z-index: 1;
    pointer-events: none;
}

.stats-particles {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
    pointer-events: none;
}

.stats-particle {
    position: absolute;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    animation: float 20s infinite linear;
}

@keyframes float {
    0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
    10% { opacity: 1; }
    90% { opacity: 1; }
    100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 60px;
    max-width: 1000px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    z-index: 2;
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

.stat-number {
    font-size: 3.5rem;
    font-weight: 1000;
    margin-bottom: 8px;
    color: #ffffff;
    text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.stat-item p {
    color: #ffffff;
    font-size: 1.8rem;
    font-weight: 600;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

@media (max-width: 768px) {
    .stats {
        padding: 60px 20px;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }
    
    .stat-number {
        font-size: 2rem;
    }
    
    .stat-item p {
        font-size: 1.2rem;
    }
}
</style>

@php
    $stats = App\Models\SiteSetting::first();
    $clients_count = $stats->clients_count ?? 500;
    $projects_count = $stats->projects_count ?? 1200;
    $experience_years = $stats->experience_years ?? 15;
    $satisfaction_rate = $stats->satisfaction_rate ?? 98;
@endphp
@section('title', __('messages.stats_title'))
<!-- Stats Section -->
<section class="stats">
    <div class="stats-particles"></div>
    <div class="container">
        <div class="stats-grid">
                <div class="stat-item">
                    <h3 class="stat-number" data-target="{{ $clients_count }}">{{ $clients_count }}</h3>
                    <p>{{ __('messages.clients') }}</p>
                </div>
                <div class="stat-item">
                    <h3 class="stat-number" data-target="{{ $projects_count }}">{{ $projects_count }}</h3>
                    <p>{{ __('messages.projects') }}</p>
                </div>
                <div class="stat-item">
                    <h3 class="stat-number" data-target="{{ $experience_years }}">{{ $experience_years }}</h3>
                    <p>{{ __('messages.experience') }}</p>
                </div>
                <div class="stat-item">
                    <h3 class="stat-number" data-target="{{ $satisfaction_rate }}">{{ $satisfaction_rate }}%</h3>
                    <p>{{ __('messages.satisfaction') }}%</p>
                </div>                
        </div>
    </div>
</section>


<script>
// Animated Counter for Stats
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;
    const isArabic = '{{ app()->getLocale() }}' === 'ar';
    
    // Function to convert English numerals to Arabic
    function toArabicNumerals(num) {
        const arabicNumerals = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
        return num.toString().split('').map(digit => arabicNumerals[parseInt(digit)] || digit).join('');
    }
    
    
    
    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const increment = target / speed;
        
        const updateCount = () => {
            const currentText = counter.innerText.replace(/[^\d٠-٩]/g, '');
            const count = parseInt(currentText.replace(/[٠-٩]/g, d => '٠١٢٣٤٥٦٧٨٩'.indexOf(d))) || 0;
            
            if (count < target) {
                const newCount = Math.ceil(count + increment);
                counter.innerText = isArabic ? toArabicNumerals(newCount) : newCount.toString();
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = isArabic ? toArabicNumerals(target) : target.toString();
            }
        };
        
        updateCount();
    };
    
    // Intersection Observer for triggering animation
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                animateCounter(counter);
                observer.unobserve(counter);
            }
        });
    }, observerOptions);
    
    counters.forEach(counter => {
        observer.observe(counter);
    });
});

// Create floating particles for stats section
function createStatsParticles() {
    const particlesContainer = document.querySelector('.stats-particles');
    if (!particlesContainer) return;
    
    for (let i = 0; i < 25; i++) {
        const particle = document.createElement('div');
        particle.className = 'stats-particle';
        particle.style.cssText = `
            position: absolute;
            width: ${Math.random() * 3 + 1}px;
            height: ${Math.random() * 3 + 1}px;
            background: rgba(255, 255, 255, ${Math.random() * 0.3 + 0.1});
            border-radius: 50%;
            left: ${Math.random() * 100}%;
            top: ${Math.random() * 100}%;
            animation: float ${Math.random() * 15 + 10}s infinite linear;
            animation-delay: ${Math.random() * 5}s;
        `;
        particlesContainer.appendChild(particle);
    }
}

// Initialize particles when DOM is loaded
createStatsParticles();
</script>
