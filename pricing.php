<?php
// pages/pricing.php
$page_meta = [
    'title' => 'Pricing - HeyDoot WhatsApp CRM',
    'meta_title' => 'Pricing | HeyDoot - Simple & Transparent WhatsApp CRM Plans',
    'description' => 'Choose the perfect plan for your team. Free trial available. Unlimited agents, multiple WhatsApp numbers, and powerful automation features.',
    'og_title' => 'Pricing - HeyDoot WhatsApp CRM',
    'og_description' => 'Simple, transparent pricing for WhatsApp CRM. Start your free trial today.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/pricing',
    'twitter_title' => 'Pricing - HeyDoot WhatsApp CRM',
    'twitter_description' => 'Affordable plans for teams of all sizes.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',
    'canonical' => 'https://heydoot.com/pricing'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "WebPage",
    "name" => "HeyDoot Pricing",
    "url" => "https://heydoot.com/pricing",
    "description" => "Pricing plans for HeyDoot WhatsApp CRM",
    "isPartOf" => [
        "@type" => "WebSite",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ]
];

$page_gtag_id = 'G-Q64SDSY0Y4';

include 'components/header.php';
?>
<?php
require_once 'config.php';
include 'components/navbar.php';
?>

<style>
    .feature-card.popular {
        border: 2px solid var(--wa-green);
        background: linear-gradient(135deg, #fff 0%, #F8FAFE 100%);
    }

    .popular-badge {
        position: relative;
        top: -50px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--wa-green);
        color: white;
        padding: 6px 18px;
        border-radius: 40px;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.5px;
        width: fit-content;
    }

    .price {
        font-size: 3.2rem;
        font-weight: 800;
        color: var(--wa-green);
        margin: 16px 0 8px;
    }

    .price span {
        font-size: 1rem;
        font-weight: 400;
        color: #8a9aaa;
    }

    .price-custom {
        font-size: 2rem;
        font-weight: 700;
        color: var(--wa-green);
        margin: 16px 0 8px;
    }

    .pricing-card h3 {
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .pricing-desc {
        color: #8a9aaa;
        font-size: 0.9rem;
        margin-bottom: 20px;
    }

    .feature-list {
        list-style: none;
        margin: 28px 0;
        padding: 0;
        text-align: left;
    }

    .feature-list li {
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 0.95rem;
        color: #2c3e50;
    }

    .feature-list li i {
        color: var(--wa-green);
        width: 20px;
        font-size: 1rem;
    }

    .feature-list li .fa-times {
        color: #cbd5e1;
    }

    .btn-pricing {
        margin-top: 16px;
        width: 100%;
        padding: 14px;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.2s;
    }

    .feature-pair-badge {
        background: rgba(37, 211, 102, 0.1);
        color: var(--wa-green);
        padding: 6px 16px;
        border-radius: 40px;
        font-size: 0.85rem;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 20px;
    }

    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 40px;
        background: white;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .comparison-table th,
    .comparison-table td {
        padding: 16px;
        text-align: left;
        border-bottom: 1px solid #eef2f6;
    }

    .comparison-table th {
        background: #F8FAFE;
        font-weight: 700;
        color: #1a2a3a;
    }

    .comparison-table td:first-child {
        font-weight: 600;
    }

    .comparison-table i.fa-check {
        color: var(--wa-green);
    }

    .comparison-table i.fa-times {
        color: #cbd5e1;
    }

    @media (max-width: 768px) {
        .pricing-grid {
            gap: 24px;
        }

        .pricing-card {
            padding: 24px 20px;
        }
    }
</style>

<main>
    <!-- Hero Section -->
    <section style="background: var(--bg-gradient-green); padding: 80px 0 60px;">
        <div class="floating-dots"></div>
        <div class=" container" style="width: 90%; max-width: 1280px; margin: 0 auto; text-align: center;">
            <span class="feature-pair-badge"><i class="fas fa-tag"></i> Simple, Transparent Pricing</span>
            <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 16px;">Choose the <span
                    style="color: var(--wa-green);">Perfect Plan</span> for Your Team</h1>
            <p style="font-size: 1.2rem; color: #cdddef; max-width: 600px; margin: 0 auto;">No hidden fees, no
                surprises. Start with a 14-day free trial, cancel anytime.</p>
            <div style="margin-top: 24px;">
                <span
                    style="display: inline-flex; align-items: center; gap: 8px; background: rgba(37,211,102,0.1); padding: 6px 16px; border-radius: 40px; color: #cdddef;">
                    <i class="fas fa-check-circle" style="color: var(--wa-green);"></i> <span>14-day free trial on all
                        plans</span>
                </span>
            </div>
        </div>
    </section>

    <!-- Pricing Cards -->
    <section class="section-container" style="padding: 60px 0; background: #fff;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div class="feature-grid">
                <!-- Starter Plan -->
                <div class="feature-card">
                    <h3>Starter</h3>
                    <div class="price">$29<span>/month</span></div>
                    <p class="pricing-desc">Perfect for small teams and startups</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Up to 3 WhatsApp numbers</li>
                        <li><i class="fas fa-check-circle"></i> 5 team members included</li>
                        <li><i class="fas fa-check-circle"></i> Shared team inbox</li>
                        <li><i class="fas fa-check-circle"></i> Basic automation rules</li>
                        <li><i class="fas fa-check-circle"></i> 30-day chat history</li>
                        <li><i class="fas fa-check-circle"></i> Email support</li>
                        <li><i class="fas fa-times" style="color: #cbd5e1;"></i> API access</li>
                        <li><i class="fas fa-times" style="color: #cbd5e1;"></i> Advanced analytics</li>
                    </ul>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20the%20Starter%20plan%20free%20trial"
                        class="btn btn-secondary btn-pricing trial-btn" target="_blank">
                        <i class="fab fa-whatsapp"></i> Start Free Trial
                    </a>
                </div>

                <!-- Professional Plan (Most Popular) -->
                <div class="feature-card popular">
                    <div class="popular-badge">🌟 Most Popular</div>
                    <h3>Professional</h3>
                    <div class="price">$79<span>/month</span></div>
                    <p class="pricing-desc">Best for growing businesses</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Up to 15 WhatsApp numbers</li>
                        <li><i class="fas fa-check-circle"></i> 20 team members included</li>
                        <li><i class="fas fa-check-circle"></i> Shared team inbox + tags</li>
                        <li><i class="fas fa-check-circle"></i> AI-powered automation</li>
                        <li><i class="fas fa-check-circle"></i> 1-year chat history</li>
                        <li><i class="fas fa-check-circle"></i> Priority support (24/7)</li>
                        <li><i class="fas fa-check-circle"></i> Full API access</li>
                        <li><i class="fas fa-check-circle"></i> Advanced analytics dashboard</li>
                        <li><i class="fas fa-check-circle"></i> Slack & Teams integration</li>
                    </ul>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20the%20Professional%20plan%20free%20trial"
                        class="btn btn-primary btn-pricing trial-btn" target="_blank">
                        <i class="fab fa-whatsapp"></i> Start Free Trial
                    </a>
                </div>

                <!-- Enterprise Plan -->
                <div class="feature-card">
                    <h3>Enterprise</h3>
                    <div class="price-custom">Custom</div>
                    <p class="pricing-desc">For large organizations with custom needs</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Unlimited WhatsApp numbers</li>
                        <li><i class="fas fa-check-circle"></i> Unlimited team members</li>
                        <li><i class="fas fa-check-circle"></i> Everything in Professional</li>
                        <li><i class="fas fa-check-circle"></i> Custom integrations</li>
                        <li><i class="fas fa-check-circle"></i> Dedicated account manager</li>
                        <li><i class="fas fa-check-circle"></i> 24/7 phone + WhatsApp support</li>
                        <li><i class="fas fa-check-circle"></i> 99.99% SLA guarantee</li>
                        <li><i class="fas fa-check-circle"></i> On-premise deployment option</li>
                        <li><i class="fas fa-check-circle"></i> Custom reporting & analytics</li>
                    </ul>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27m%20interested%20in%20the%20Enterprise%20plan%20for%20HeyDoot"
                        class="btn btn-secondary btn-pricing demo-btn" target="_blank">
                        <i class="fab fa-whatsapp"></i> Contact Sales
                    </a>
                </div>
            </div>

            <!-- Annual Billing Note -->
            <div style="text-align: center; margin-top: 40px; padding: 16px; background: #F0F8FF; border-radius: 48px;">
                <p style="margin: 0;"><i class="fas fa-gem" style="color: var(--wa-green);"></i> <strong>Save
                        20%</strong> with annual billing — pay for 10 months, get 2 months free!</p>
            </div>
        </div>
    </section>

    <!-- Features Comparison Table -->
    <section style="background: #F8FAFE; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-chart-simple"></i> Compare Features</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">What's Included in Each Plan?</h2>
                <p style="color: #5a6b7e;">Everything you need to scale your WhatsApp communication</p>
            </div>

            <div style="overflow-x: auto;">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Starter</th>
                            <th>Professional</th>
                            <th>Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>WhatsApp Numbers</td>
                            <td>Up to 3</td>
                            <td>Up to 15</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td>Team Members</td>
                            <td>5</td>
                            <td>20</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td>Shared Inbox</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Ticket Management</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Group Management</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Basic Automation</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>AI Automation</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>API Access</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Slack/Teams Integration</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>CRM Integration</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Advanced Analytics</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Chat History</td>
                            <td>30 days</td>
                            <td>1 year</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td>Support</td>
                            <td>Email</td>
                            <td>Priority 24/7</td>
                            <td>Dedicated + Phone</td>
                        </tr>
                        <tr>
                            <td>SLA Guarantee</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-times"></i></td>
                            <td>99.99%</td>
                        </tr>
                        <tr>
                            <td>Custom Integrations</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>On-premise Deployment</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Add-ons Section -->
    <section style="background: #fff; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-plus-circle"></i> Optional Add-ons</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">Customize Your Plan</h2>
                <p style="color: #5a6b7e;">Add extra features to any plan</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
                <div style="background: #F8FAFE; border-radius: 24px; padding: 24px; text-align: center;">
                    <i class="fas fa-phone-alt"
                        style="font-size: 40px; color: var(--wa-green); margin-bottom: 16px;"></i>
                    <h3>Extra WhatsApp Number</h3>
                    <p style="font-size: 1.5rem; font-weight: 700; color: var(--wa-green);">$10<span
                            style="font-size: 0.9rem;">/month</span></p>
                    <p style="color: #5a6b7e;">Add additional numbers beyond your plan limit</p>
                </div>
                <div style="background: #F8FAFE; border-radius: 24px; padding: 24px; text-align: center;">
                    <i class="fas fa-user-plus"
                        style="font-size: 40px; color: var(--wa-green); margin-bottom: 16px;"></i>
                    <h3>Extra Team Member</h3>
                    <p style="font-size: 1.5rem; font-weight: 700; color: var(--wa-green);">$8<span
                            style="font-size: 0.9rem;">/month</span></p>
                    <p style="color: #5a6b7e;">Add team members beyond your plan limit</p>
                </div>
                <div style="background: #F8FAFE; border-radius: 24px; padding: 24px; text-align: center;">
                    <i class="fas fa-database"
                        style="font-size: 40px; color: var(--wa-green); margin-bottom: 16px;"></i>
                    <h3>Extended Chat History</h3>
                    <p style="font-size: 1.5rem; font-weight: 700; color: var(--wa-green);">$20<span
                            style="font-size: 0.9rem;">/month</span></p>
                    <p style="color: #5a6b7e;">Upgrade to 2-year chat history retention</p>
                </div>
                <div style="background: #F8FAFE; border-radius: 24px; padding: 24px; text-align: center;">
                    <i class="fas fa-shield-alt"
                        style="font-size: 40px; color: var(--wa-green); margin-bottom: 16px;"></i>
                    <h3>SLA Guarantee</h3>
                    <p style="font-size: 1.5rem; font-weight: 700; color: var(--wa-green);">$99<span
                            style="font-size: 0.9rem;">/month</span></p>
                    <p style="color: #5a6b7e;">99.99% uptime with financial credits</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%); padding: 80px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; text-align: center;">
            <h2 style="color: white; font-size: 2.2rem; margin-bottom: 20px;">Ready to scale your WhatsApp
                communication?</h2>
            <p style="color: #e0e0e0; font-size: 1.1rem; max-width: 600px; margin: 0 auto 32px;">Start your 14-day free
                trial today. No credit card required.</p>
            <div class="cta-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20a%20free%20trial%20of%20HeyDoot"
                    class="btn btn-outline-light btn-lg"
                    style="border: 2px solid white; color: white; background: transparent;" target="_blank">
                    <i class="fab fa-whatsapp"></i> Start Free Trial
                </a>
                <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>" class="btn btn-cta-white btn-lg"
                    style="background: white; color: #1a2a3a;">
                    <i class="fas fa-phone-alt"></i> Talk to Sales
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-container" style="background: #F0F8FF; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge">
                    <i class="fas fa-question-circle"></i> Frequently Asked Questions
                </span>

                <h2 class="section-title" style="margin-bottom: 12px;">
                    Questions About Pricing?
                </h2>

                <p class="section-sub">
                    We've got answers
                </p>
            </div>

            <div class="faq-container">

                <div class="faq-item">
                    <div class="faq-question">
                        Can I switch plans later?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Absolutely! You can upgrade or downgrade your plan at any time. Changes are prorated and applied
                        to your next billing cycle.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Is there a free trial?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes! All plans come with a 14-day free trial. No credit card required. You'll get full access to
                        all features of your chosen plan.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do you offer discounts for non-profits?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes! We offer a 30% discount for registered non-profit organizations and educational
                        institutions. Contact our sales team to verify eligibility.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        What payment methods do you accept?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        We accept all major credit cards (Visa, Mastercard, American Express), PayPal, and bank
                        transfers for annual plans. For Enterprise plans, we also accept purchase orders and wire
                        transfers.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I cancel anytime?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes! You can cancel your subscription at any time from your account settings. No cancellation
                        fees. Your access continues until the end of your billing period.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do you offer custom Enterprise pricing?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, Enterprise pricing is customized based on your specific needs including number of users,
                        WhatsApp numbers, integrations, and support requirements. Contact our sales team for a
                        personalized quote.
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>