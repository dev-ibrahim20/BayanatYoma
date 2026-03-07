
<style>
/* Different Section Styles */
.different {
    padding: 80px 20px;
  background: linear-gradient(135deg, #1A2F4A, #C6A87D);
    border-top: 1px solid #5a5a00;
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header h2 {
    font-size: 3.5rem;
    color: #ffffff;
    margin-bottom: 1rem;
    font-weight: 900;
    font-family: 'Arial Black', Arial, sans-serif;
    letter-spacing: 2px;
    text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.section-header p {
    font-size: 1.8rem;
    color: #ffffff;
    font-weight: 600;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.different-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
}

.different-item {
    background: linear-gradient(135deg, #575555 0%, #989f89 50%, #494545 100%);
        border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 16px;
    padding: 35px;
    text-align: center;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
    min-height: 340px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.different-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    /* background: linear-gradient(90deg, #667eea 0%, #764ba2 100%); */
}

.different-item:hover {
    transform: translateY(-12px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    /* border-color: #667eea; */
}

.different-icon {
    width: 100px;
    height: 100px;
    background: #2F4F4F;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 30px;
    font-size: 2.5rem;
    color: #ffffff;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(47, 79, 79, 0.3);
}

.different-item h3 {
    font-size: 1.5rem;
    color: #ffffff;
    margin-bottom: 18px;
    font-weight: 700;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    letter-spacing: -0.5px;
    line-height: 1.3;
}

.different-item p {
    color: #ffffff;
    line-height: 1.7;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    font-weight: 400;
    font-size: 1rem;
    margin-top: auto;
    flex-grow: 1;
}

@media (max-width: 768px) {
    .different {
        padding: 60px 20px;
    }
    
    .different-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        padding: 0 15px;
    }
    
    .section-header h2 {
        font-size: 2.2rem;
    }
    
    .different-item {
        padding: 20px;
        min-height: 250px;
    }
    
    .different-icon {
        width: 60px;
        height: 60px;
        font-size: 1.6rem;
    }
    
    .different-item h3 {
        font-size: 1.1rem;
    }
    
    .different-item p {
        font-size: 0.85rem;
    }
}

@media (max-width: 480px) {
    .different {
        padding: 40px 15px;
    }
    
    .different-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        padding: 0 10px;
    }
    
    .section-header h2 {
        font-size: 1.8rem;
    }
    
    .different-item {
        padding: 15px;
        min-height: 220px;
    }
    
    .different-icon {
        width: 50px;
        height: 50px;
        font-size: 1.4rem;
    }
    
    .different-item h3 {
        font-size: 1rem;
    }
    
    .different-item p {
        font-size: 0.8rem;
    }
}

@media (max-width: 360px) {
    .different {
        padding: 30px 10px;
    }
    
    .different-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        padding: 0 5px;
    }
    
    .section-header h2 {
        font-size: 1.6rem;
    }
    
    .different-item {
        padding: 12px;
        min-height: 200px;
    }
    
    .different-icon {
        width: 45px;
        height: 45px;
        font-size: 1.2rem;
    }
    
    .different-item h3 {
        font-size: 0.9rem;
    }
}
</style>

@section('title', __('messages.different_title'))
<!-- Different Section -->
<section class="different">
    <div class="container">
        <div class="section-header">
            <h2>{{ __('messages.different_title') }}</h2>
            <p>{{ __('messages.different_subtitle') }}</p>
        </div>
        <div class="different-grid">
            <div class="different-item">
                <div class="different-icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <h3>{{ __('messages.execution') }}</h3>
                <p>{{ __('messages.execution_text') }}</p>
            </div>
            <div class="different-item">
                <div class="different-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>{{ __('messages.commitment') }}</h3>
                <p>{{ __('messages.commitment_text') }}</p>
            </div>
            <div class="different-item">
                <div class="different-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <h3>{{ __('messages.speed') }}</h3>
                <p>{{ __('messages.speed_text') }}</p>
            </div>
            <div class="different-item">
                <div class="different-icon">
                    <i class="fas fa-adjust"></i>
                </div>
                <h3>{{ __('messages.innovation') }}</h3>
                <p>{{ __('messages.innovation_text') }}</p>
            </div>
            <div class="different-item">
                <div class="different-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>{{ __('messages.creative_ideas') }}</h3>
                <p>{{ __('messages.creative_ideas_text') }}</p>
            </div>
            <div class="different-item">
                <div class="different-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h3>{{ __('messages.team') }}</h3>
                <p>{{ __('messages.team_text') }}</p>
            </div>
            <div class="different-item">
                <div class="different-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>{{ __('messages.reliable_partnerships') }}</h3>
                <p>{{ __('messages.reliable_partnerships_text') }}</p>
            </div>
            <div class="different-item">
                <div class="different-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3>{{ __('messages.quality') }}</h3>
                <p>{{ __('messages.quality_text') }}</p>
            </div>
        </div>
    </div>
</section>
