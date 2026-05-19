<?php
require_once 'config.php';
$page_title = "Why-Us - HeyDoot";
include ROOT_PATH . '/components/header.php';
include ROOT_PATH . '/components/navbar.php';
?>

<!-- Page Content -->
<style>
    .value-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 32px;
        margin-top: 48px;
    }

    .value-card {
        background: white;
        border-radius: 32px;
        padding: 40px 32px;
        text-align: center;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s;
    }

    .value-icon {
        font-size: 56px;
        color: var(--wa-teal);
        margin-bottom: 24px;
    }

    .testimonial-card {
        background: white;
        border-radius: 32px;
        padding: 40px;
        margin-top: 48px;
        text-align: center;
        font-style: italic;
    }
</style>
<main>
    <div class="page-header">
        <h1>Why <span style="color: var(--wa-green);">Businesses Choose Us</span></h1>
        <p>We're redefining how teams manage WhatsApp communication.</p>
    </div>

    <section class="section-container">
        <div class="container-fluid">
            <div class="value-grid">
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-bolt"></i></div>
                    <h3>No API Needed</h3>
                    <p>Use your personal or business numbers without restrictions. Plug & play setup in minutes.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-globe"></i></div>
                    <h3>Global Scale</h3>
                    <p>Manage +30 numbers from one dashboard. Perfect for international brands and teams.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-headset"></i></div>
                    <h3>24/7 Support</h3>
                    <p>Dedicated support team available around the clock. Enterprise plans include onboarding.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-gem"></i></div>
                    <h3>Future-proof</h3>
                    <p>From 5 to 500+ agents, HeyDoot grows with your business. Always adding new features.</p>
                </div>
            </div>

            <div class="testimonial-card">
                <i class="fas fa-quote-left"
                    style="font-size: 48px; color: var(--wa-teal); opacity: 0.3; margin-bottom: 20px; display: inline-block;"></i>
                <p style="font-size: 1.2rem;">"HeyDoot transformed how our support team handles WhatsApp. We've cut
                    response times by 70% and our agents love the shared inbox."</p>
                <h4 style="margin-top: 24px;">— Sarah Johnson, Support Director</h4>
            </div>
        </div>
    </section>
</main>
<!-- Page Content Ends here -->

<?php include ROOT_PATH . '/components/footer.php'; ?>