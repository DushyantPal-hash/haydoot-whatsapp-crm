<?php
require_once 'config.php';

$requested_page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'this';

// Remove .php extension if present
$requested_page = preg_replace('/\.php$/i', '', $requested_page);

$page_meta = [
    'title' => 'Page Under Construction | HeyDoot WhatsApp CRM',
    'meta_title' => 'Coming Soon - Page Under Construction | HeyDoot',
    'description' => 'We are working hard to bring you something amazing. This page is currently under construction. Stay tuned for updates!',
    'og_title' => 'Coming Soon | HeyDoot',
    'og_description' => 'We are working hard to bring you something amazing. This page is currently under construction.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/under-construction',
    'twitter_title' => 'Coming Soon | HeyDoot',
    'twitter_description' => 'We are working hard to bring you something amazing.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',
    'canonical' => 'https://heydoot.com/under-construction'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "WebPage",
    "name" => "Page Under Construction",
    "description" => "We are working hard to bring you something amazing. This page is currently under construction.",
    "url" => "https://heydoot.com/under-construction"
];

$page_gtag_id = 'G-Q64SDSY0Y4';

include 'components/header.php';
include 'components/navbar.php';
?>

<style>
    /* ========== Under Construction Specific Styles ========== */
    .error-section {
        position: relative;
        background: linear-gradient(135deg, #0b1120 0%, #1a2332 50%, #0f172a 100%);
        overflow: hidden;
        padding: 30px 0;
    }

    .under-construction-container {
        min-height: 70vh;
        padding: 0px 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #0b1120 0%, #1a2332 50%, #0f172a 100%);
    }

    .construction-content {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }

    .construction-badge {
        display: inline-block;
        background: rgba(37, 211, 102, 0.15);
        backdrop-filter: blur(8px);
        padding: 6px 18px;
        border-radius: 40px;
        margin-bottom: 24px;
        border: 1px solid rgba(37, 211, 102, 0.3);
    }

    .construction-badge span {
        color: #25D366;
        font-weight: 500;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
    }

    .construction-title {
        font-size: 3rem;
        font-weight: 800;
        background: linear-gradient(135deg, #ffffff, #cbd5e1);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        margin-bottom: 16px;
    }

    .construction-message {
        font-size: 1.2rem;
        line-height: 1.6;
        color: #94a3b8;
        margin-bottom: 32px;
    }

    .page-name-highlight {
        background: rgba(255, 255, 255, 0.05);
        padding: 4px 12px;
        border-radius: 8px;
        font-family: monospace;
        color: #25D366;
        display: inline-block;
    }

    /* Progress bar */
    .progress-wrapper {
        max-width: 400px;
        margin: 0 auto 40px;
    }

    .progress-label {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
        font-size: 0.85rem;
        color: #64748b;
    }

    .progress-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 30px;
        height: 8px;
        overflow: hidden;
    }

    .progress-fill {
        width: 68%;
        height: 100%;
        background: linear-gradient(90deg, #25D366, #128C7E);
        border-radius: 30px;
        animation: shimmer 2s infinite;
        background-size: 200% 100%;
    }

    @keyframes shimmer {
        0% {
            background-position: -200% 0;
        }

        100% {
            background-position: 200% 0;
        }
    }

    /* Feature teaser grid */
    .teaser-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin: 48px 0;
    }

    .teaser-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 20px;
        padding: 16px 24px;
        min-width: 150px;
        transition: all 0.3s ease;
    }

    .teaser-card:hover {
        background: rgba(255, 255, 255, 0.08);
        transform: translateY(-4px);
        border-color: rgba(37, 211, 102, 0.3);
    }

    .teaser-icon {
        font-size: 32px;
        margin-bottom: 12px;
    }

    .teaser-title {
        font-weight: 600;
        color: #e2e8f0;
        margin-bottom: 4px;
    }

    .teaser-desc {
        font-size: 0.75rem;
        color: #64748b;
    }

    /* CTA Buttons */
    .construction-actions {
        display: flex;
        gap: 16px;
        justify-content: center;
        flex-wrap: wrap;
        margin-bottom: 48px;
    }

    .btn-outline-light-custom {
        background: rgba(255, 255, 255, 0.08);
        color: #e2e8f0;
        border: 1px solid rgba(255, 255, 255, 0.15);
        padding: 12px 28px;
        border-radius: 40px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
    }

    .btn-outline-light-custom:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-2px);
        color: white;
    }

    /* Notify form */
    .notify-card {
        background: rgba(255, 255, 255, 0.03);
        border-radius: 24px;
        padding: 28px;
        margin-top: 20px;
        border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .notify-title {
        color: #e2e8f0;
        font-weight: 600;
        margin-bottom: 16px;
        font-size: 1.1rem;
    }

    .notify-form {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: center;
    }

    .notify-input {
        flex: 1;
        min-width: 240px;
        padding: 12px 20px;
        border-radius: 40px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        background: rgba(255, 255, 255, 0.05);
        color: white;
        font-size: 1rem;
        outline: none;
        transition: all 0.3s ease;
    }

    .notify-input:focus {
        border-color: #25D366;
        background: rgba(255, 255, 255, 0.1);
    }

    .notify-input::placeholder {
        color: #64748b;
    }

    .notify-btn {
        background: linear-gradient(135deg, #25D366, #128C7E);
        border: none;
        padding: 12px 28px;
        border-radius: 40px;
        color: white;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .notify-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
    }

    .success-message {
        margin-top: 16px;
        color: #25D366;
        font-size: 0.9rem;
        display: none;
    }

    /* Particle animation */
    .particle-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
    }

    .particle {
        position: absolute;
        background: rgba(37, 211, 102, 0.08);
        border-radius: 50%;
        pointer-events: none;
        animation: floatParticle linear infinite;
    }

    @keyframes floatParticle {
        0% {
            transform: translateY(100vh) rotate(0deg);
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        90% {
            opacity: 1;
        }

        100% {
            transform: translateY(-100vh) rotate(360deg);
            opacity: 0;
        }
    }

    .construction-footer {
        margin-top: 60px;
        padding-top: 24px;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        display: flex;
        justify-content: center;
        gap: 30px;
        flex-wrap: wrap;
        font-size: 0.8rem;
    }

    .construction-footer a {
        color: #64748b;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .construction-footer a:hover {
        color: #25D366;
    }

    @media (max-width: 768px) {
        .construction-title {
            font-size: 2rem;
        }

        .construction-message {
            font-size: 1rem;
        }

        .teaser-card {
            padding: 12px 18px;
            min-width: 130px;
        }
    }
</style>

<main>
    <!-- Hero Section with Animated Background -->
    <section class="error-section">
        <div class="particle-container" id="particleContainer">

        </div>

        <div class="container-fluid">
            <div class="under-construction-container">
                <div class="construction-content">
                    <!-- Badge -->
                    <div class="construction-badge">
                        <span><i class="fas fa-code-branch"></i> UNDER CONSTRUCTION</span>
                    </div>
                    <!-- Title -->
                    <h1 class="construction-title">Something Amazing<br>is Coming Soon</h1>
                    <!-- Message -->
                    <p class="construction-message">
                        We're working hard to bring you
                        <span class="page-name-highlight">
                            <?php echo ucfirst(str_replace('-', ' ', $requested_page)); ?>
                        </span> page. Stay tuned for updates and exciting features that will enhance your experience
                        with HeyDoot !
                    </p>
                    <!-- Progress Bar -->
                    <div class="progress-wrapper">
                        <div class="progress-label">
                            <span><i class="fas fa-tachometer-alt"></i> Development Progress</span>
                            <span>68%</span>
                        </div>
                        <div class="progress-track">
                            <div class="progress-fill"></div>
                        </div>
                    </div>
                    <!-- Feature Teasers -->
                    <div class="teaser-grid">
                        <div class="teaser-card">
                            <div class="teaser-icon">🚀</div>
                            <div class="teaser-title">Lightning Fast</div>
                            <div class="teaser-desc">Optimized performance</div>
                        </div>
                        <div class="teaser-card">
                            <div class="teaser-icon">🔒</div>
                            <div class="teaser-title">Secure</div>
                            <div class="teaser-desc">Enterprise-grade security</div>
                        </div>
                        <div class="teaser-card">
                            <div class="teaser-icon">⚡</div>
                            <div class="teaser-title">Real-time</div>
                            <div class="teaser-desc">Instant notifications</div>
                        </div>
                        <div class="teaser-card">
                            <div class="teaser-icon">🎨</div>
                            <div class="teaser-title">Modern UI</div>
                            <div class="teaser-desc">Beautiful interface</div>
                        </div>
                    </div>
                    <!-- CTA Buttons -->
                    <div class="construction-actions">
                        <a href="<?php echo BASE_URL; ?>/" class="notify-btn"
                            style="background: linear-gradient(135deg, #25D366, #128C7E);">
                            <i class="fas fa-home"></i> Back to Home
                        </a>
                        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I'm%20interested%20in%20HeyDoot%20and%20would%20like%20to%20know%20more"
                            class="btn-outline-light-custom" target="_blank">
                            <i class="fab fa-whatsapp"></i> Contact Support
                        </a>
                    </div>
                    <!-- Notify Me Form -->
                    <div class="notify-card">
                        <div class="notify-title">
                            <i class="fas fa-bell"></i> Get notified when we launch
                        </div>
                        <form id="notifyForm" class="notify-form" onsubmit="return false;">
                            <input type="email" id="notifyEmail" class="notify-input"
                                placeholder="Enter your email address" required>
                            <button type="submit" class="notify-btn">
                                <i class="fas fa-envelope"></i> Notify Me
                            </button>
                        </form>
                        <div id="successMessage" class="success-message">
                            <i class="fas fa-check-circle"></i> Thanks! We'll notify you when we launch.
                        </div>
                    </div>
                    <!-- Footer Links -->
                    <div class="construction-footer">
                        <a href="<?php echo BASE_URL; ?>/">Home</a>
                        <a href="<?php echo BASE_URL; ?>/features.php">Features</a>
                        <a href="<?php echo BASE_URL; ?>/pricing.php">Pricing</a>
                        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>">Support</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    // Generate floating particles
    function createParticles() {
        const container = document.getElementById('particleContainer');
        if (!container) return;

        const particleCount = 50;
        container.innerHTML = '';

        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');

            const size = Math.random() * 40 + 5;
            const duration = Math.random() * 15 + 10;
            const delay = Math.random() * 20;
            const left = Math.random() * 100;

            particle.style.width = size + 'px';
            particle.style.height = size + 'px';
            particle.style.left = left + '%';
            particle.style.animationDuration = duration + 's';
            particle.style.animationDelay = delay + 's';

            container.appendChild(particle);
        }
    }

    // Handle notify form submission
    document.getElementById('notifyForm').addEventListener('submit', async function (e) {
        const emailInput = document.getElementById('notifyEmail');
        const email = emailInput.value.trim();
        const successMsg = document.getElementById('successMessage');

        if (!email || !email.includes('@')) {
            alert('Please enter a valid email address');
            return;
        }

        // Show success message
        successMsg.style.display = 'block';
        emailInput.value = '';

        // Optional: Send to your backend API
        try {
            // Uncomment and configure with your actual endpoint
            /*
            await fetch('<?php echo BASE_URL; ?>/api/notify.php', {
            method: 'POST',
                headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                email: email,
                page: '<?php echo addslashes($requested_page); ?>'
            })
        });
            */
    console.log('Notification request saved for:', email);
        } catch (error) {
        console.error('Error:', error);
    }

    setTimeout(() => {
        successMsg.style.display = 'none';
    }, 5000);
    });

    // Initialize particles on load
    document.addEventListener('DOMContentLoaded', createParticles);
</script>

<?php include 'components/footer.php'; ?>