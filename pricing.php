<?php
require_once 'config.php';
$page_title = "Pricing - HeyDoot";
include ROOT_PATH . '/components/header.php';
include ROOT_PATH . '/components/navbar.php';
?>

<!-- Page Content -->
<style>
    .pricing-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 32px;
        margin-top: 48px;
    }

    .pricing-card {
        background: white;
        border-radius: 48px;
        padding: 32px;
        text-align: center;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
        transition: all 0.3s;
        position: relative;
    }

    .pricing-card.popular {
        border: 2px solid var(--wa-teal);
    }

    .popular-badge {
        position: absolute;
        top: -15px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--wa-teal);
        color: white;
        padding: 5px 15px;
        border-radius: 40px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .price {
        font-size: 3rem;
        font-weight: 800;
        color: var(--wa-teal);
    }

    .price span {
        font-size: 1rem;
        font-weight: 400;
        color: #666;
    }

    .feature-list {
        list-style: none;
        margin: 24px 0;
        text-align: left;
    }

    .feature-list li {
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .feature-list li i {
        color: var(--wa-teal);
        width: 20px;
    }

    .btn-pricing {
        margin-top: 20px;
        width: 100%;
        padding: 10px;
    }
</style>
<main>
    <div class="page-header">
        <h1>Simple, <span style="color: var(--wa-green);">Transparent Pricing</span></h1>
        <p>Choose the plan that fits your team. No hidden fees, no surprises.</p>
    </div>

    <section class="section-container">
        <div class="container-fluid">
            <div class="pricing-grid">
                <div class="pricing-card">
                    <h3>Starter</h3>
                    <div class="price">$29<span>/month</span></div>
                    <p>Perfect for small teams</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Up to 3 numbers</li>
                        <li><i class="fas fa-check-circle"></i> 5 team members</li>
                        <li><i class="fas fa-check-circle"></i> Basic automation</li>
                        <li><i class="fas fa-check-circle"></i> Email support</li>
                    </ul>
                    <a href="javascript:void(0)" class="btn btn-secondary btn-pricing trial-btn">Start Free Trial</a>
                </div>
                <div class="pricing-card popular">
                    <div class="popular-badge">Most Popular</div>
                    <h3>Professional</h3>
                    <div class="price">$79<span>/month</span></div>
                    <p>For growing businesses</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Up to 15 numbers</li>
                        <li><i class="fas fa-check-circle"></i> 20 team members</li>
                        <li><i class="fas fa-check-circle"></i> Advanced AI automation</li>
                        <li><i class="fas fa-check-circle"></i> Priority support</li>
                        <li><i class="fas fa-check-circle"></i> Analytics dashboard</li>
                    </ul>
                    <a href="javascript:void(0)" class="btn btn-primary btn-pricing trial-btn">Start Free Trial</a>
                </div>
                <div class="pricing-card">
                    <h3>Enterprise</h3>
                    <div class="price">Custom</div>
                    <p>For large organizations</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Unlimited numbers</li>
                        <li><i class="fas fa-check-circle"></i> Unlimited team members</li>
                        <li><i class="fas fa-check-circle"></i> Custom integrations</li>
                        <li><i class="fas fa-check-circle"></i> 24/7 dedicated support</li>
                        <li><i class="fas fa-check-circle"></i> SLA guarantee</li>
                    </ul>
                    <a href="javascript:void(0)" class="btn btn-secondary btn-pricing demo-btn">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Page Content Ends here -->

<?php include ROOT_PATH . '/components/footer.php'; ?>