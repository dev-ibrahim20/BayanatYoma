
<style>
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


@section('title', __('messages.stats_title'))
<!-- Stats Section -->
<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <h3 class="stat-number" data-target="500">0</h3>
                <p>{{ __('messages.clients') }}</p>
            </div>
            <div class="stat-item">
                <h3 class="stat-number" data-target="1200">0</h3>
                <p>{{ __('messages.projects') }}</p>
            </div>
            <div class="stat-item">
                <h3 class="stat-number" data-target="15">0</h3>
                <p>{{ __('messages.experience') }}</p>
            </div>
            <div class="stat-item">
                <h3 class="stat-number" data-target="98">0</h3>
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
    
    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const increment = target / speed;
        
        const updateCount = () => {
            const count = +counter.innerText;
            
            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target.toLocaleString();
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
</script>
