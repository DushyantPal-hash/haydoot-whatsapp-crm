<?php
require_once dirname(__DIR__) . '/config.php';

$page_meta = [
    'title' => 'Smoobu WhatsApp Service | HeyDoot',
    'meta_title' => 'Smoobu WhatsApp Service – Automated Guest Messaging for Vacation Rentals',
    'description' => 'Connect Smoobu PMS with WhatsApp Business through HeyDoot. Automate booking confirmations, check-in instructions, and guest support — no coding required.',

    'og_title' => 'Smoobu WhatsApp Service | HeyDoot',
    'og_description' => 'Automate guest communication between Smoobu and WhatsApp. Booking alerts, pre-arrival messages, and two-way support — set up in minutes.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/services/smoobu.php',

    'twitter_title' => 'Smoobu WhatsApp Service | HeyDoot',
    'twitter_description' => 'Done-for-you Smoobu + WhatsApp integration. Automate guest messaging without writing a single line of code.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',

    'canonical' => 'https://heydoot.com/services/smoobu.php'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => "Smoobu WhatsApp Service",
    "serviceType" => "Property Management Automation",
    "provider" => [
        "@type" => "Organization",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ],
    "description" => "HeyDoot connects Smoobu PMS with WhatsApp Business to automate guest communication. Send booking confirmations, check-in instructions, and support messages automatically.",
    "areaServed" => "Worldwide",
    "url" => "https://heydoot.com/services/smoobu.php",
    "offers" => [
        "@type" => "Offer",
        "price" => "0",
        "priceCurrency" => "USD"
    ]
];

$page_gtag_id = 'G-Q64SDSY0Y4';

include ROOT_PATH . '/components/header.php';
include ROOT_PATH . '/components/navbar.php';
?>
<style>
    .card-1 {
        top: 8%;
        left: -2%;
    }

    .card-2 {
        top: 12%;
        right: -4%;
    }

    .card-3 {
        bottom: 10%;
        left: 0%;
    }

    .card-4 {
        bottom: 0%;
    }

    .btn-smoobu {
        background: #1E3A5F;
        color: white;
        box-shadow: 0 2px 8px rgba(30, 58, 95, 0.2);
    }

    .btn-smoobu:hover {
        background: #152c48;
        transform: translateY(-3px);
        box-shadow: 0 12px 22px -8px rgba(30, 58, 95, 0.3);
    }

    .smoobu-accent {
        color: #1E3A5F;
    }

    .section-block {
        margin-bottom: 56px;
    }

    .section-header {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 28px;
    }

    .icon-circle {
        background: #e9f5ef;
        width: 52px;
        height: 52px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon-circle i {
        font-size: 24px;
        color: var(--wa-teal);
    }

    h2 {
        font-size: 1.8rem;
        font-weight: 700;
    }

    .step-card {
        background: white;
        border-radius: 28px;
        padding: 24px;
        border: var(--border-light);
    }

    .step-card-header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 12px;
    }

    .step-num {
        background: #1E3A5F;
        width: 42px;
        height: 42px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .step-card h3 {
        font-size: 1.2rem;
        margin: 0;
    }

    .step-card p {
        margin-bottom: 0;
        color: #4b5563;
    }

    .use-case-item,
    .benefit-item {
        background: white;
        border-radius: 24px;
        padding: 20px 24px;
        transition: all 0.2s;
        border: var(--border-light);
    }

    .use-case-item p,
    .benefit-item p {
        margin-top: 8px;
        color: #4b5563;
        font-size: 1.0rem;
        margin-bottom: 5px;
    }

    .use-case-item h3,
    .benefit-item h3 {
        display: flex;
        align-items: center;
        font-size: 18px;
        gap: 10px;
        margin: 0;
    }

    .pricing-card {
        background: white;
        border-radius: 28px;
        padding: 32px 28px;
        border: var(--border-light);
        text-align: center;
        transition: all 0.3s;
    }

    .pricing-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    }

    .pricing-card.featured {
        border: 2px solid #1E3A5F;
        position: relative;
    }

    .pricing-badge {
        position: absolute;
        top: -12px;
        left: 50%;
        transform: translateX(-50%);
        background: #1E3A5F;
        color: white;
        padding: 4px 16px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 700;
    }

    .pricing-amount {
        font-size: 2.8rem;
        font-weight: 800;
        color: #1E3A5F;
        margin: 16px 0 4px;
    }

    .pricing-period {
        color: #6b7280;
        font-size: 0.9rem;
        margin-bottom: 20px;
    }

    .pricing-features {
        list-style: none;
        text-align: left;
        margin: 20px 0;
        padding: 0;
    }

    .pricing-features li {
        padding: 8px 0;
        border-bottom: 1px solid #f3f4f6;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 0.95rem;
    }

    .pricing-features li i {
        color: var(--wa-teal);
    }

    .testimonial-card {
        background: white;
        border-radius: 24px;
        padding: 28px;
        border: var(--border-light);
    }

    .testimonial-card .stars {
        color: #F59E0B;
        margin-bottom: 12px;
    }

    .testimonial-card p {
        font-style: italic;
        color: #374151;
        margin-bottom: 16px;
        line-height: 1.6;
    }

    .testimonial-author {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .testimonial-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #e0e7ff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: #1E3A5F;
    }

    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 24px;
        overflow: hidden;
        border: var(--border-light);
    }

    .comparison-table th,
    .comparison-table td {
        padding: 16px 20px;
        text-align: left;
        border-bottom: 1px solid #f3f4f6;
    }

    .comparison-table th {
        background: #f8f9fa;
        font-weight: 700;
        color: #1E3A5F;
    }

    .comparison-table .check {
        color: var(--wa-teal);
        font-weight: 700;
    }

    .comparison-table .cross {
        color: #e74c3c;
    }

    .workflow-step {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        padding: 20px 0;
        border-bottom: 1px dashed #e5e7eb;
    }

    .workflow-step:last-child {
        border-bottom: none;
    }

    .workflow-icon {
        width: 56px;
        height: 56px;
        border-radius: 16px;
        background: #eef2ff;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .workflow-icon i {
        font-size: 24px;
        color: #1E3A5F;
    }

    .workflow-content h4 {
        margin: 0 0 6px;
        font-size: 1.1rem;
    }

    .workflow-content p {
        margin: 0;
        color: #6b7280;
        font-size: 0.95rem;
    }

    .stats-bar {
        display: flex;
        justify-content: center;
        gap: 48px;
        flex-wrap: wrap;
        padding: 0;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-size: 2.4rem;
        font-weight: 800;
        color: #1E3A5F;
    }

    .stat-label {
        color: #6b7280;
        font-size: 0.9rem;
        margin-top: 4px;
    }

    @media (max-width: 768px) {
        .stats-bar {
            flex-direction: column;
            gap: 20px;
        }

        .stat-number {
            font-size: 2.1rem;
        }

        .bar-mob {
            flex-direction: column;
            gap: 5px;
        }

        .icon-rotate {
            rotate: 90deg;
        }
    }
</style>

<main>
    <section class="hero" style="background: linear-gradient(135deg, #0f2b3d 0%, #1E3A5F 100%);">
        <div class="floating-dots"></div>
        <div style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div
                style="display: inline-block; background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); padding: 6px 18px; border-radius: 60px; margin-bottom: 24px;">
                <span style="color: #ffffff; font-weight: 700; display: flex; align-items: center; gap: 10px;">
                    <i class="fab fa-whatsapp"></i> <i class="fas fa-building"></i>
                    Smoobu + WhatsApp Made Simple</span>
            </div>
            <h1>Automate Guest Messaging<br>with <span style="color: #F59E0B;">Smoobu</span> & WhatsApp</h1>
            <p class="hero-desc">HeyDoot connects your Smoobu property management system with WhatsApp Business —
                automatically. Send booking confirmations, check-in instructions, and support messages to guests without
                lifting a finger. No coding. No plugins. Just results.
            </p>
            <div class="cta-group">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20set%20up%20Smoobu%20WhatsApp%20automation"
                    class="btn btn-smoobu btn-lg"><i class="fab fa-whatsapp"></i> Get Started Free</a>
                <a href="<?php echo BASE_URL; ?>/integrations/smoobu.php" class="btn btn-secondary btn-lg"><i
                        class="fas fa-code"></i> Developer API</a>
            </div>
            <div class="visual-stage" style="margin-top: 20px;">
                <div class="float-card card-1">
                    <i class="fas fa-bell" style="color:#F59E0B; font-size: 22px;"></i>
                    <span>Instant Booking Alerts</span>
                </div>
                <div class="float-card card-2">
                    <i class="fas fa-key" style="color:#25D366;"></i>
                    <span>Auto Check-in Codes</span>
                </div>
                <div class="float-card card-3"><i class="fas fa-reply" style="color:#25D366; font-size: 22px;"></i>
                    Guest Replies Handled
                </div>
                <div class="float-card card-4"><i class="fas fa-moon" style="color:#a78bfa;"></i>
                    24/7 Automated
                </div>
                <div class="mockup-phone"
                    style="width: 65%; margin: 0 auto; background: #1e1e2a; border-radius: 48px; padding: 8px;">
                    <div style="background: #2a2a35; border-radius: 40px; padding: 30px 20px; text-align: center;">
                        <div class="bar-mob" style=" display: flex; justify-content: center; align-items: center;">
                            <i class="fas fa-building" style="font-size: 48px; color: #1E3A5F;"></i>
                            <i class="fas fa-arrow-right icon-rotate" style="margin: 0 20px; color: white;"></i>
                            <i class="fas fa-magic" style="font-size: 36px; color: #F59E0B;"></i>
                            <i class="fas fa-arrow-right icon-rotate" style="margin: 0 20px; color: white;"></i>
                            <i class="fab fa-whatsapp" style="font-size: 48px; color: #25D366;"></i>
                        </div>
                        <p style="color: #aaa; margin-top: 16px;">Smoobu → HeyDoot Automation → Guest WhatsApp</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <!-- Trust Stats -->
            <div
                style="background: white; border-radius: 24px; padding: 20px 28px; margin-bottom: 48px; box-shadow: var(--card-shadow); border: var(--border-light);">
                <div class="stats-bar">
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Properties Connected</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">2M+</div>
                        <div class="stat-label">Messages Sent</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Delivery Rate</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">&lt;5 min</div>
                        <div class="stat-label">Setup Time</div>
                    </div>
                </div>
            </div>

            <div style="display: flex; gap: 48px; flex-wrap: wrap;">
                <aside class="sidebar-card">
                    <div
                        style="position: sticky; top: 100px; background: white; border-radius: 28px; padding: 24px; box-shadow: var(--card-shadow); border: 1px solid rgba(0,0,0,0.04);">
                        <h4 style="font-weight: 700; margin-bottom: 20px; font-size: 1.1rem;"><i class="fas fa-bookmark"
                                style="color: var(--wa-teal); margin-right: 8px;"></i> On this page</h4>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
                            <li><a href="#how-it-works" style="color: #2c3e2f;"><i class="fas fa-cogs"></i> How It
                                    Works</a></li>
                            <li><a href="#automated-messages" style="color: #2c3e2f;"><i class="fas fa-paper-plane"></i>
                                    Automated Messages</a></li>
                            <!-- <li><a href="#setup-steps" style="color: #2c3e2f;"><i class="fas fa-rocket"></i> Setup in 3
                                    Steps</a></li> -->
                            <li><a href="#features" style="color: #2c3e2f;"><i class="fas fa-star"></i> Key Features</a>
                            </li>
                            <li><a href="#benefits" style="color: #2c3e2f;"><i class="fas fa-chart-line"></i> Why Choose
                                    HeyDoot</a></li>
                            <!-- <li><a href="#pricing" style="color: #2c3e2f;"><i class="fas fa-tag"></i> Pricing</a></li>
                            <li><a href="#testimonials" style="color: #2c3e2f;"><i class="fas fa-comments"></i>
                                    Reviews</a></li> -->
                            <li><a href="#comparison" style="color: #2c3e2f;"><i class="fas fa-balance-scale"></i> vs
                                    Manual</a></li>
                            <li><a href="#faqs" style="color: #2c3e2f;"><i class="fas fa-question-circle"></i> FAQs</a>
                            </li>
                        </ul>
                        <!-- cross-link to integration page -->
                        <div style="margin-top:24px;padding-top:20px;border-top:1px solid #f0f0f0;">
                            <p style="font-size:.85rem;color:#6b7280;margin-bottom:10px;">Need API / technical docs?</p>
                            <a href="<?php echo BASE_URL; ?>/integrations/smoobu.php"
                                style="display:flex;align-items:center;gap:10px;background:#eef2ff;border-radius:14px;padding:12px 16px;color:#1E3A5F;font-weight:600;font-size:.9rem;text-decoration:none;">
                                <i class="fas fa-code"></i>
                                Integration Page →
                            </a>
                        </div>
                    </div>
                </aside>

                <main style="flex: 2.5; min-width: 280px;">
                    <!-- How It Works -->
                    <div id="how-it-works" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-cogs"></i></div>
                            <h2>How HeyDoot Works with Smoobu</h2>
                        </div>
                        <p style="margin-bottom: 24px;">We bridge the gap between your Smoobu dashboard and your guests'
                            WhatsApp. Once connected, every booking event in Smoobu triggers an automatic WhatsApp
                            message — personalized, timely, and professional.</p>

                        <div
                            style="background: white; border-radius: 32px; padding: 32px; border: var(--border-light);">
                            <div class="workflow-step">
                                <div class="workflow-icon"><i class="fas fa-calendar-check"></i></div>
                                <div class="workflow-content">
                                    <h4>Booking Event in Smoobu</h4>
                                    <p>A guest books, cancels, or modifies a reservation in your Smoobu calendar.</p>
                                </div>
                            </div>
                            <div class="workflow-step">
                                <div class="workflow-icon"><i class="fas fa-bolt"></i></div>
                                <div class="workflow-content">
                                    <h4>HeyDoot Detects the Change</h4>
                                    <p>Our system monitors your Smoobu account in real-time via secure API connection.
                                    </p>
                                </div>
                            </div>
                            <div class="workflow-step">
                                <div class="workflow-icon"><i class="fas fa-envelope-open-text"></i></div>
                                <div class="workflow-content">
                                    <h4>Personalized Message Generated</h4>
                                    <p>We pull guest details (name, dates, property) and insert them into your message
                                        templates.</p>
                                </div>
                            </div>
                            <div class="workflow-step">
                                <div class="workflow-icon"><i class="fab fa-whatsapp"></i></div>
                                <div class="workflow-content">
                                    <h4>WhatsApp Delivered Instantly</h4>
                                    <p>The message is sent to the guest's WhatsApp number within seconds — no manual
                                        action needed.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Automated Messages -->
                    <div id="automated-messages" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-paper-plane"></i></div>
                            <h2>Messages That Automate Themselves</h2>
                        </div>
                        <p style="margin-bottom: 24px;">Configure once, run forever. HeyDoot handles the entire guest
                            journey from booking to checkout.</p>
                        <div
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
                            <div class="use-case-card feature-card">
                                <i class="fas fa-check-circle"
                                    style="font-size: 28px; color: var(--wa-teal); margin-bottom: 12px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 8px; font-size: 1.1rem;">Booking
                                    Confirmation</h3>
                                <p>Sent immediately after reservation. Includes guest name, property details, dates, and
                                    a warm welcome.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-times-circle"
                                    style="font-size: 28px; color: #e74c3c; margin-bottom: 12px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 8px; font-size: 1.1rem;">Cancellation Alerts
                                </h3>
                                <p>Instant notification to you and the guest when a booking is cancelled. Keeps everyone
                                    in the loop.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-edit"
                                    style="font-size: 28px; color: #F59E0B; margin-bottom: 12px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 8px; font-size: 1.1rem;">Modification
                                    Updates</h3>
                                <p>Date changes, guest count updates, or property switches — automatically communicated
                                    via WhatsApp.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-key" style="font-size: 28px; color: #1E3A5F; margin-bottom: 12px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 8px; font-size: 1.1rem;">Pre-Arrival
                                    Instructions</h3>
                                <p>Sent 24-48 hours before check-in. Door codes, WiFi passwords, directions, and house
                                    rules.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-door-open"
                                    style="font-size: 28px; color: var(--wa-teal); margin-bottom: 12px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 8px; font-size: 1.1rem;">Check-in Reminder
                                </h3>
                                <p>Day-of reminder with check-in time, contact number, and any last-minute updates.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-headset"
                                    style="font-size: 28px; color: #1E3A5F; margin-bottom: 12px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 8px; font-size: 1.1rem;">Two-Way Guest
                                    Support</h3>
                                <p>Guests reply on WhatsApp → messages are routed to your inbox or CRM so you can
                                    respond in real time.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Setup Steps -->
                    <!-- <div id="setup-steps" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-rocket"></i></div>
                            <h2>Set Up in 3 Simple Steps</h2>
                        </div>
                        <p style="margin-bottom: 24px;">No technical knowledge required. Our team guides you through
                            every step — most property managers are live within 10 minutes.</p>
                        <div class="feature-grid" style="display: grid; gap: 20px;">
                            <div class="step-card automation-card">
                                <div class="step-card-header">
                                    <div class="step-num">1</div>
                                    <h3>Connect Your Smoobu Account</h3>
                                </div>
                                <p>Share your Smoobu API credentials or grant us read-only access. We never store
                                    sensitive payment data — only booking and guest information needed for messaging.
                                </p>
                            </div>
                            <div class="step-card automation-card">
                                <div class="step-card-header">
                                    <div class="step-num">2</div>
                                    <h3>Customize Your Message Templates</h3>
                                </div>
                                <p>Choose from our pre-built templates or write your own. Add variables like
                                    {guest_name}, {check_in_date}, {property_name} — we auto-fill them for every
                                    message.</p>
                            </div>
                            <div class="step-card automation-card">
                                <div class="step-card-header">
                                    <div class="step-num">3</div>
                                    <h3>Go Live & Relax</h3>
                                </div>
                                <p>Toggle automation on. From this moment, every booking event triggers the right
                                    WhatsApp message automatically. Monitor everything from your HeyDoot dashboard.</p>
                            </div>
                        </div>
                    </div> -->

                    <!-- Key Features -->
                    <div id="features" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-star"></i></div>
                            <h2>Everything You Need</h2>
                        </div>
                        <div
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
                            <div class="use-case-card feature-card">
                                <i class="fas fa-sync"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Real-Time Sync</h3>
                                <p>Messages fire within seconds of a Smoobu event. No delays, no missed bookings.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-language"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Multi-Language Support</h3>
                                <p>Send messages in the guest's preferred language. Auto-detect or manually set per
                                    property.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-building"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Multi-Property Dashboard</h3>
                                <p>Manage messaging for all your Smoobu properties from one central HeyDoot dashboard.
                                </p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-comments"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Two-Way Messaging</h3>
                                <p>Guests can reply to your automated messages. Replies land in your HeyDoot inbox or
                                    forward to your personal WhatsApp.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-clock"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Smart Scheduling</h3>
                                <p>Schedule messages for specific times (e.g., pre-arrival info 24h before check-in)
                                    rather than immediate send.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-chart-bar"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Delivery Analytics</h3>
                                <p>Track sent, delivered, read, and failed messages. Know exactly which guests received
                                    what.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefits / Why HeyDoot -->
                    <div id="benefits" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-trophy"></i></div>
                            <h2>Why Property Managers Choose HeyDoot</h2>
                        </div>
                        <div class="feature-grid" style="display: grid; gap: 20px;">
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-hourglass-half" style="color: #F59E0B;"></i> Save 10+ Hours Per
                                    Week</h3>
                                <p>Stop copy-pasting booking details into WhatsApp. Automation handles confirmations,
                                    reminders, and follow-ups while you focus on growing your business.</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-smile" style="color: var(--wa-teal);"></i> Happier Guests</h3>
                                <p>Guests receive instant confirmations and clear instructions. No more "Did my booking
                                    go through?" messages at midnight.</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-shield-alt" style="color: #1E3A5F;"></i> Never Miss a Booking</h3>
                                <p>Cancellation alerts, modification updates, and overbooking warnings reach you
                                    immediately — not when you next check your email.</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-hand-holding-usd" style="color: #1E3A5F;"></i> Reduce No-Shows</h3>
                                <p>Pre-arrival reminders and check-in instructions dramatically reduce no-shows and late
                                    arrivals.</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-headset" style="color: #1E3A5F;"></i> White-Glove Support</h3>
                                <p>Our team helps you set up, customize templates, and troubleshoot. You're never alone.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing -->
                    <!-- <div id="pricing" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-tag"></i></div>
                            <h2>Simple, Transparent Pricing</h2>
                        </div>
                        <p style="margin-bottom: 24px;">Pay only for what you use. No hidden fees, no long-term
                            contracts. Start free and scale as you grow.</p>
                        <div
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
                            <div class="pricing-card">
                                <h3 style="font-weight: 700; color: #4b5563;">Starter</h3>
                                <div class="pricing-amount">$19</div>
                                <div class="pricing-period">per month</div>
                                <ul class="pricing-features">
                                    <li><i class="fas fa-check"></i> Up to 500 messages/mo</li>
                                    <li><i class="fas fa-check"></i> 1 Smoobu property</li>
                                    <li><i class="fas fa-check"></i> 5 message templates</li>
                                    <li><i class="fas fa-check"></i> Booking confirmations</li>
                                    <li><i class="fas fa-check"></i> Cancellation alerts</li>
                                    <li><i class="fas fa-check"></i> Email support</li>
                                </ul>
                                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27m%20interested%20in%20the%20Starter%20plan%20for%20Smoobu%20WhatsApp"
                                    class="btn btn-smoobu" style="width: 100%;">Get Started</a>
                            </div>
                            <div class="pricing-card featured">
                                <div class="pricing-badge">MOST POPULAR</div>
                                <h3 style="font-weight: 700; color: #1E3A5F;">Professional</h3>
                                <div class="pricing-amount">$49</div>
                                <div class="pricing-period">per month</div>
                                <ul class="pricing-features">
                                    <li><i class="fas fa-check"></i> Up to 2,000 messages/mo</li>
                                    <li><i class="fas fa-check"></i> Up to 5 properties</li>
                                    <li><i class="fas fa-check"></i> Unlimited templates</li>
                                    <li><i class="fas fa-check"></i> All message types</li>
                                    <li><i class="fas fa-check"></i> Two-way messaging</li>
                                    <li><i class="fas fa-check"></i> Priority WhatsApp support</li>
                                    <li><i class="fas fa-check"></i> Delivery analytics</li>
                                </ul>
                                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27m%20interested%20in%20the%20Professional%20plan%20for%20Smoobu%20WhatsApp"
                                    class="btn btn-smoobu" style="width: 100%;">Get Started</a>
                            </div>
                            <div class="pricing-card">
                                <h3 style="font-weight: 700; color: #4b5563;">Enterprise</h3>
                                <div class="pricing-amount">Custom</div>
                                <div class="pricing-period">tailored to you</div>
                                <ul class="pricing-features">
                                    <li><i class="fas fa-check"></i> Unlimited messages</li>
                                    <li><i class="fas fa-check"></i> Unlimited properties</li>
                                    <li><i class="fas fa-check"></i> Custom integrations</li>
                                    <li><i class="fas fa-check"></i> Dedicated account manager</li>
                                    <li><i class="fas fa-check"></i> SLA guarantee</li>
                                    <li><i class="fas fa-check"></i> API access included</li>
                                    <li><i class="fas fa-check"></i> White-label options</li>
                                </ul>
                                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20discuss%20the%20Enterprise%20plan%20for%20Smoobu%20WhatsApp"
                                    class="btn btn-smoobu" style="width: 100%;">Contact Sales</a>
                            </div>
                        </div>
                        <p style="text-align: center; margin-top: 20px; color: #6b7280; font-size: 0.9rem;">
                            <i class="fas fa-info-circle"></i> All plans include a 14-day free trial. No credit card
                            required.
                        </p>
                    </div> -->

                    <!-- Testimonials -->
                    <!-- <div id="testimonials" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-comments"></i></div>
                            <h2>Trusted by Property Managers Worldwide</h2>
                        </div>
                        <div
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                            <div class="testimonial-card">
                                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <p>"We manage 12 properties on Smoobu. Before HeyDoot, I spent 2 hours every morning
                                    sending check-in details. Now it's completely automated. Best investment we've
                                    made."</p>
                                <div class="testimonial-author">
                                    <div class="testimonial-avatar">MK</div>
                                    <div>
                                        <strong>Marco K.</strong><br>
                                        <span style="color: #6b7280; font-size: 0.85rem;">Vacation Rental Manager,
                                            Portugal</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <p>"The cancellation alerts alone saved us from double-bookings three times in the first
                                    month. Guests love getting instant WhatsApp confirmations instead of emails they
                                    never read."</p>
                                <div class="testimonial-author">
                                    <div class="testimonial-avatar">SL</div>
                                    <div>
                                        <strong>Sarah L.</strong><br>
                                        <span style="color: #6b7280; font-size: 0.85rem;">Boutique Host, Bali</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-card">
                                <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star-half-alt"></i></div>
                                <p>"Setup took literally 8 minutes. The team walked me through connecting Smoobu and
                                    customizing my templates. I was sending automated messages before my coffee got
                                    cold."</p>
                                <div class="testimonial-author">
                                    <div class="testimonial-avatar">DR</div>
                                    <div>
                                        <strong>David R.</strong><br>
                                        <span style="color: #6b7280; font-size: 0.85rem;">Property Investor,
                                            Spain</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Comparison Table -->
                    <div id="comparison" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-balance-scale"></i></div>
                            <h2>HeyDoot vs. Doing It Manually</h2>
                        </div>
                        <div style="overflow-x: auto;">
                            <table class="comparison-table">
                                <thead>
                                    <tr>
                                        <th style="width: 40%;">Task</th>
                                        <th style="width: 30%;">Manual (Email/SMS)</th>
                                        <th style="width: 30%;">With HeyDoot</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Booking confirmation</td>
                                        <td class="cross"><i class="fas fa-times"></i> 5-10 min per booking</td>
                                        <td class="check"><i class="fas fa-check"></i> Instant, automatic</td>
                                    </tr>
                                    <tr>
                                        <td>Cancellation alert</td>
                                        <td class="cross"><i class="fas fa-times"></i> Check email constantly</td>
                                        <td class="check"><i class="fas fa-check"></i> Real-time WhatsApp</td>
                                    </tr>
                                    <tr>
                                        <td>Pre-arrival instructions</td>
                                        <td class="cross"><i class="fas fa-times"></i> Set calendar reminders</td>
                                        <td class="check"><i class="fas fa-check"></i> Scheduled automatically</td>
                                    </tr>
                                    <tr>
                                        <td>Guest reply handling</td>
                                        <td class="cross"><i class="fas fa-times"></i> Missed in email clutter</td>
                                        <td class="check"><i class="fas fa-check"></i> WhatsApp inbox</td>
                                    </tr>
                                    <tr>
                                        <td>Multi-property management</td>
                                        <td class="cross"><i class="fas fa-times"></i> Chaos and confusion</td>
                                        <td class="check"><i class="fas fa-check"></i> One dashboard</td>
                                    </tr>
                                    <tr>
                                        <td>Message personalization</td>
                                        <td class="cross"><i class="fas fa-times"></i> Copy-paste errors</td>
                                        <td class="check"><i class="fas fa-check"></i> Auto-filled variables</td>
                                    </tr>
                                    <tr>
                                        <td>Open rate</td>
                                        <td class="cross"><i class="fas fa-times"></i> ~20% (email)</td>
                                        <td class="check"><i class="fas fa-check"></i> ~98% (WhatsApp)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- FAQs -->
                    <div id="faqs" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-question-circle"></i></div>
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        <div class="faq-list">
                            <div class="faq-item">
                                <div class="faq-question">Do I need to know how to code? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Not at all. HeyDoot is a fully managed service. Our team handles
                                    the technical connection between Smoobu and WhatsApp. You just tell us what messages
                                    you want to send and when.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Is this an official Smoobu integration? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">HeyDoot connects to Smoobu via their public API. While not an
                                    official plugin, it's a secure, read-only connection that millions of property
                                    managers trust. We only access booking and guest data needed for messaging.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Can guests reply to automated messages? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Yes! Guests can reply directly on WhatsApp. Their messages
                                    appear in your HeyDoot inbox, and you can respond from there or have replies
                                    forwarded to your personal WhatsApp number.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">What happens if Smoobu is down? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">HeyDoot queues messages and retries delivery. Once Smoobu is
                                    back online, any missed events are processed automatically. Your guests never know
                                    there was an issue.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Can I customize the message templates? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Absolutely. You have full control over message content, tone,
                                    and branding. Use variables like guest name, dates, and property details to make
                                    every message feel personal.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Is there a free trial? <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">Yes — every plan includes a 14-day free trial with full
                                    features. No credit card required. Cancel anytime if it's not for you.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Do you also offer API access for developers? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Yes! If you have a development team and want to build a custom
                                    integration, check out our <a href="<?php echo BASE_URL; ?>/integrations/smoobu.php"
                                        style="color: #1E3A5F; font-weight: 700;">Smoobu API Integration</a> page for
                                    developer documentation and endpoints.</div>
                            </div>
                        </div>
                    </div>

                    <!-- Final CTA -->
                    <div
                        style="background: linear-gradient(105deg, #eef2ff, #e0e7ff); border-radius: 36px; padding: 48px 32px; text-align: center; margin: 32px 0 24px;">
                        <i class="fab fa-whatsapp" style="font-size: 48px; color: #25D366;"></i>
                        <h2 style="font-size: 2rem; font-weight: 800; margin-top: 16px;">Ready to Automate Your Guest
                            Communication?</h2>
                        <p style="margin-top: 12px; max-width: 600px; margin-left: auto; margin-right: auto;">Join 500+
                            property managers who save hours every week with HeyDoot. Start your 14-day free trial today
                            — no credit card required.</p>
                        <div
                            style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; margin-top: 24px;">
                            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20my%20free%20trial%20for%20Smoobu%20WhatsApp%20automation"
                                class="btn btn-secondary" style="padding: 14px 32px;">
                                <i class="fab fa-whatsapp"></i> Start Free Trial
                            </a>
                            <a href="<?php echo BASE_URL; ?>/integrations/smoobu.php" class="btn btn-primary"
                                style="padding: 14px 32px;">
                                <i class="fas fa-code"></i> I'm a Developer
                            </a>
                        </div>
                    </div>
                </main>
            </div>

            <!-- Utility Bar -->
            <div class="utility-bar">
                <div class="utility-bar-inner">
                    <div class="utility-item">
                        <i class="fas fa-search"></i>
                        <span>Search...</span>
                    </div>
                    <span class="shortcut-key">Ctrl K</span>
                    <a href="<?php echo BASE_URL; ?>/smoobu-api.php" class="utility-item utility-link"
                        style="color: var(--wa-teal);">
                        <i class="fas fa-code"></i>
                        Developer API
                    </a>
                    <a href="tel:+919718517228" class="utility-item utility-link">
                        <i class="fas fa-headset"></i>
                        Support
                    </a>
                    <a href="<?php echo BASE_URL; ?>/services/dashboard.php" class="dashboard-btn"
                        style="background: #1E3A5F; color: white;">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include ROOT_PATH . '/components/footer.php'; ?>