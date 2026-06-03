<?php
require_once dirname(__DIR__) . '/config.php';

$page_meta = [
    'title' => 'Smoobu WhatsApp Service | HeyDoot',
    'meta_title' => 'Smoobu WhatsApp Messaging Service – Automated Guest Communication by HeyDoot',
    'description' => 'HeyDoot\'s Smoobu WhatsApp Service helps property managers automate guest messaging — booking confirmations, check-in reminders, cancellation alerts, and two-way chat. No coding needed.',

    'og_title' => 'Smoobu WhatsApp Service | HeyDoot',
    'og_description' => 'Automate guest communication for your Smoobu properties via WhatsApp. HeyDoot handles setup, templates, and delivery — so you focus on hospitality.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/services/smoobu.php',

    'twitter_title' => 'Smoobu WhatsApp Service | HeyDoot',
    'twitter_description' => 'Done-for-you WhatsApp messaging for Smoobu property managers. Booking alerts, check-in instructions, cancellations — all automated.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',

    'canonical' => 'https://heydoot.com/services/smoobu.php'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => "Smoobu WhatsApp Messaging Service",
    "serviceType" => "WhatsApp Automation Service",
    "provider" => [
        "@type" => "Organization",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ],
    "description" => "HeyDoot's Smoobu WhatsApp Service automates guest communication for vacation rental property managers. Send booking confirmations, pre-arrival instructions, cancellation alerts, and enable two-way WhatsApp chat — no coding required.",
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
    /* ── Brand tokens ── */
    :root {
        --smoobu-dark: #1E3A5F;
        --smoobu-mid: #2a5080;
        --smoobu-light: #eef2ff;
        --wa-green: #25D366;
        --amber: #F59E0B;
        --danger: #e74c3c;
    }

    /* ── Hero overrides ── */
    .card-1 {
        top: 8%;
        left: 14%;
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

    /* ── Buttons ── */
    .btn-smoobu {
        background: var(--smoobu-dark);
        color: white;
        box-shadow: 0 2px 8px rgba(30, 58, 95, .2);
        transition: all .25s;
    }

    .btn-smoobu:hover {
        background: #152c48;
        transform: translateY(-3px);
        box-shadow: 0 12px 22px -8px rgba(30, 58, 95, .35);
    }

    /* ── Section layout ── */
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
        flex-shrink: 0;
    }

    .icon-circle i {
        font-size: 22px;
        color: var(--wa-teal, #128C7E);
    }

    h2 {
        font-size: 1.8rem;
        font-weight: 700;
    }

    /* ── Audience toggle ── */
    .audience-tabs {
        display: flex;
        gap: 12px;
        margin-bottom: 36px;
        flex-wrap: wrap;
    }

    .audience-tab {
        padding: 10px 24px;
        border-radius: 50px;
        border: 2px solid var(--smoobu-dark);
        cursor: pointer;
        font-weight: 600;
        color: var(--smoobu-dark);
        background: white;
        transition: all .2s;
    }

    .audience-tab.active,
    .audience-tab:hover {
        background: var(--smoobu-dark);
        color: white;
    }

    /* ── Highlight box ── */
    .info-banner {
        background: linear-gradient(105deg, var(--smoobu-light) 0%, #e0e7ff 100%);
        border-left: 5px solid var(--smoobu-dark);
        border-radius: 20px;
        padding: 20px 28px;
        margin-bottom: 48px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 16px;
    }

    /* ── Flow diagram ── */
    .flow-diagram {
        background: #f4f9f5;
        border-radius: 32px;
        padding: 28px;
        text-align: center;
    }

    .flow-steps {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 16px;
        align-items: center;
    }

    .flow-step {
        background: white;
        border-radius: 16px;
        padding: 14px 20px;
        font-weight: 600;
        font-size: .95rem;
        border: 1px solid rgba(0, 0, 0, .06);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* ── Step cards ── */
    .step-card {
        background: white;
        border-radius: 28px;
        padding: 20px 24px;
        border: var(--border-light);
    }

    .step-num {
        background: var(--smoobu-dark);
        width: 42px;
        height: 42px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        color: white;
        font-size: 1.2rem;
        margin-bottom: 16px;
        flex-shrink: 0;
    }

    .step-card h3 {
        font-size: 1.15rem;
        margin-bottom: 8px;
    }

    .step-card p {
        margin: 0;
        color: #4b5563;
    }

    /* ── Feature / use-case / benefit cards ── */
    .use-case-item,
    .benefit-item,
    .plan-card {
        background: white;
        border-radius: 24px;
        padding: 20px 24px;
        border: var(--border-light);
        transition: all .2s;
    }

    .use-case-item h3,
    .benefit-item h3 {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1.05rem;
        margin-bottom: 6px;
    }

    .use-case-item p,
    .benefit-item p {
        margin: 0;
        color: #4b5563;
        font-size: .97rem;
    }

    /* ── Pricing cards ── */
    .plan-card {
        position: relative;
        text-align: center;
        padding: 32px 24px;
    }

    .plan-card.featured {
        border: 2px solid var(--smoobu-dark);
        background: var(--smoobu-light);
    }

    .plan-badge {
        position: absolute;
        top: -14px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--smoobu-dark);
        color: white;
        padding: 4px 18px;
        border-radius: 30px;
        font-size: .78rem;
        font-weight: 700;
        white-space: nowrap;
    }

    .plan-price {
        font-size: 2.4rem;
        font-weight: 800;
        color: var(--smoobu-dark);
        margin: 16px 0 4px;
    }

    .plan-price sup {
        font-size: 1.2rem;
        vertical-align: super;
    }

    .plan-price span {
        font-size: 1rem;
        font-weight: 500;
        color: #6b7280;
    }

    .plan-features {
        list-style: none;
        padding: 0;
        margin: 20px 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
        text-align: left;
    }

    .plan-features li {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: .95rem;
    }

    .plan-features li i {
        color: var(--wa-green);
        flex-shrink: 0;
    }

    /* ── Code block ── */
    .code-block {
        background: #1e1e2f;
        color: #e2e2e2;
        padding: 20px;
        border-radius: 16px;
        font-family: monospace;
        font-size: .85rem;
        overflow-x: auto;
        margin: 20px 0;
    }

    /* ── API endpoint pills ── */
    .api-endpoint {
        background: #f8f9fa;
        border-left: 4px solid var(--wa-green);
        padding: 14px 20px;
        border-radius: 12px;
        margin: 12px 0;
    }

    .api-endpoint strong {
        font-family: monospace;
        color: var(--smoobu-dark);
    }

    /* ── Comparison table ── */
    .compare-table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 2px 16px rgba(0, 0, 0, .06);
    }

    .compare-table th {
        background: var(--smoobu-dark);
        color: white;
        padding: 14px 20px;
        text-align: left;
        font-weight: 700;
    }

    .compare-table td {
        padding: 14px 20px;
        border-bottom: 1px solid #f0f0f0;
        font-size: .95rem;
    }

    .compare-table tr:last-child td {
        border-bottom: none;
    }

    .compare-table tr:nth-child(even) td {
        background: #fafafa;
    }

    .check {
        color: var(--wa-green);
        font-weight: 700;
    }

    .cross {
        color: var(--danger);
        font-weight: 700;
    }

    /* ── FAQ ── */
    /* inherits .faq-item, .faq-question, .faq-answer from global styles */

    /* ── Utility bar ── */
    /* inherits .utility-bar etc. */

    /* ── Audience-specific content ── */
    .for-hosts {
        display: block;
    }

    .for-devs {
        display: none;
    }

    body.dev-view .for-hosts {
        display: none;
    }

    body.dev-view .for-devs {
        display: block;
    }
</style>

<main>
    <!-- ═══════════════════ HERO ═══════════════════ -->
    <section class="hero" style="background:linear-gradient(135deg,#0f2b3d 0%,#1E3A5F 100%);">
        <div class="floating-dots"></div>
        <div style="max-width:900px;margin:0 auto;position:relative;z-index:2;">
            <div
                style="display:inline-block;background:rgba(255,255,255,.12);backdrop-filter:blur(8px);padding:6px 18px;border-radius:60px;margin-bottom:24px;">
                <span style="color:#fff;font-weight:700;display:flex;align-items:center;gap:10px;">
                    <i class="fas fa-building"></i>
                    <i class="fas fa-exchange-alt"></i>
                    <i class="fab fa-whatsapp"></i>
                    Official Smoobu Partner
                </span>
            </div>
            <h1><span style="color:#F59E0B;">Smoobu</span><br>WhatsApp Service</h1>
            <p class="hero-desc">
                Everything your vacation rental needs — automated WhatsApp guest messaging,
                real-time booking alerts, pre-arrival guides, and two-way chat.
                Whether you manage 1 property or 100, HeyDoot connects Smoobu to WhatsApp for you.
            </p>
            <div class="cta-group">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20set%20up%20Smoobu%20WhatsApp%20messaging%20with%20HeyDoot"
                    class="btn btn-smoobu btn-lg">
                    <i class="fab fa-whatsapp"></i> Get Started Free
                </a>
                <a href="<?php echo BASE_URL; ?>/integrations/smoobu.php" class="btn btn-secondary btn-lg">
                    <i class="fas fa-code"></i> API Integration Page
                </a>
            </div>

            <!-- hero visual -->
            <div class="visual-stage" style="margin-top:20px;">
                <div class="float-card card-1">
                    <i class="fas fa-calendar-check" style="color:#F59E0B;font-size:22px;"></i>
                    <span>New Booking</span>
                </div>
                <div class="float-card card-2">
                    <i class="fab fa-whatsapp" style="color:#25D366;"></i>
                    <span>WhatsApp Sent Instantly</span>
                </div>
                <div class="float-card card-3">
                    <i class="fas fa-clock" style="color:#F59E0B;font-size:18px;"></i>
                    Pre-Arrival Reminder
                </div>
                <div class="float-card card-4">
                    <i class="fas fa-times-circle" style="color:#e74c3c;"></i> Cancellation Alert
                </div>
                <div class="mockup-phone"
                    style="width:65%;margin:0 auto;background:#1e1e2a;border-radius:48px;padding:8px;">
                    <div style="background:#2a2a35;border-radius:40px;padding:30px 20px;text-align:center;">
                        <div style="display:flex;justify-content:center;align-items:center;gap:20px;">
                            <i class="fas fa-building" style="font-size:48px;color:#1E3A5F;"></i>
                            <i class="fas fa-arrows-alt-h" style="color:white;font-size:24px;"></i>
                            <i class="fab fa-whatsapp" style="font-size:48px;color:#25D366;"></i>
                        </div>
                        <p style="color:#aaa;margin-top:16px;">Smoobu events → HeyDoot → Guest WhatsApp</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════ MAIN CONTENT ═══════════════════ -->
    <section>
        <div class="container-fluid">

            <!-- status banner -->
            <div class="info-banner">
                <div>
                    <i class="fas fa-check-circle" style="color:var(--smoobu-dark);margin-right:10px;"></i>
                    <strong>Full-Service &amp; API-First:</strong>
                    <span style="color:#4b5563;">
                        Property managers get a no-code setup. Developers get clean REST endpoints.
                        Both get reliable WhatsApp delivery powered by the official Meta Business API.
                    </span>
                </div>
            </div>

            <!-- ── AUDIENCE TOGGLE ── -->
            <div class="audience-tabs" id="audienceTabs">
                <button class="audience-tab active" data-mode="host">
                    <i class="fas fa-home"></i> I'm a Property Manager
                </button>
                <button class="audience-tab" data-mode="dev">
                    <i class="fas fa-code"></i> I'm a Developer
                </button>
            </div>

            <div style="display:flex;gap:48px;flex-wrap:wrap;">

                <!-- ── SIDEBAR ── -->
                <aside class="sidebar-card">
                    <div
                        style="position:sticky;top:100px;background:white;border-radius:28px;padding:24px;box-shadow:var(--card-shadow);border:1px solid rgba(0,0,0,.04);">
                        <h4 style="font-weight:700;margin-bottom:20px;font-size:1.1rem;">
                            <i class="fas fa-bookmark" style="color:var(--wa-teal);margin-right:8px;"></i> On this page
                        </h4>
                        <ul style="list-style:none;display:flex;flex-direction:column;gap:12px;">
                            <li><a href="#what-it-does" style="color:#2c3e2f;"><i class="fas fa-star"></i> What It
                                    Does</a></li>
                            <li><a href="#how-it-works" style="color:#2c3e2f;"><i class="fas fa-cogs"></i> How It
                                    Works</a></li>
                            <li><a href="#setup-steps" style="color:#2c3e2f;"><i class="fas fa-rocket"></i> Setup
                                    Steps</a></li>
                            <li><a href="#features" style="color:#2c3e2f;"><i class="fas fa-umbrella-beach"></i> Key
                                    Features</a></li>
                            <li><a href="#api-section" style="color:#2c3e2f;"><i class="fas fa-plug"></i> API
                                    Reference</a></li>
                            <li><a href="#compare" style="color:#2c3e2f;"><i class="fas fa-balance-scale"></i> Compare
                                    Plans</a></li>
                            <li><a href="#use-cases" style="color:#2c3e2f;"><i class="fas fa-briefcase"></i> Use
                                    Cases</a></li>
                            <li><a href="#why-heydoot" style="color:#2c3e2f;"><i class="fas fa-heart"></i> Why
                                    HeyDoot</a></li>
                            <li><a href="#faqs" style="color:#2c3e2f;"><i class="fas fa-question-circle"></i> FAQs</a>
                            </li>
                        </ul>
                        <!-- cross-link to integration page -->
                        <div style="margin-top:24px;padding-top:20px;border-top:1px solid #f0f0f0;">
                            <p style="font-size:.85rem;color:#6b7280;margin-bottom:10px;">Need API / technical docs?</p>
                            <a href="<?php echo BASE_URL; ?>/integrations/smoobu.php"
                                style="display:flex;align-items:center;gap:10px;background:var(--smoobu-light);border-radius:14px;padding:12px 16px;color:var(--smoobu-dark);font-weight:600;font-size:.9rem;text-decoration:none;">
                                <i class="fas fa-code"></i>
                                Integration Page →
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- ── MAIN COLUMN ── -->
                <main style="flex:2.5;min-width:280px;">

                    <!-- ══ WHAT IT DOES ══ -->
                    <div id="what-it-does" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-star"></i></div>
                            <h2>What the Smoobu WhatsApp Service Does</h2>
                        </div>
                        <p style="margin-bottom:24px;">
                            HeyDoot acts as the smart messaging layer between your Smoobu PMS and WhatsApp Business.
                            The moment something happens in Smoobu — a new reservation, a cancellation, a date change —
                            HeyDoot instantly fires a personalised WhatsApp message to you, your team, or your guest.
                            No plugins, no complex code, no missed notifications.
                        </p>

                        <!-- stat strip -->
                        <div
                            style="display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:20px;margin-bottom:8px;">
                            <div
                                style="background:var(--smoobu-light);border-radius:20px;padding:20px;text-align:center;">
                                <div style="font-size:2rem;font-weight:800;color:var(--smoobu-dark);">&lt;5 min</div>
                                <div style="color:#4b5563;font-size:.9rem;margin-top:4px;">Setup time (no-code)</div>
                            </div>
                            <div style="background:#e9f5ef;border-radius:20px;padding:20px;text-align:center;">
                                <div style="font-size:2rem;font-weight:800;color:#128C7E;">99.9%</div>
                                <div style="color:#4b5563;font-size:.9rem;margin-top:4px;">Message delivery rate</div>
                            </div>
                            <div style="background:#fff8e7;border-radius:20px;padding:20px;text-align:center;">
                                <div style="font-size:2rem;font-weight:800;color:var(--amber);">24 / 7</div>
                                <div style="color:#4b5563;font-size:.9rem;margin-top:4px;">Always-on automation</div>
                            </div>
                            <div style="background:#fef2f2;border-radius:20px;padding:20px;text-align:center;">
                                <div style="font-size:2rem;font-weight:800;color:var(--danger);">∞</div>
                                <div style="color:#4b5563;font-size:.9rem;margin-top:4px;">Properties supported</div>
                            </div>
                        </div>
                    </div>

                    <!-- ══ HOW IT WORKS ══ -->
                    <div id="how-it-works" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-cogs"></i></div>
                            <h2>How It Works</h2>
                        </div>

                        <!-- HOST VIEW -->
                        <div class="for-hosts">
                            <p style="margin-bottom:24px;">
                                For property managers, our managed service handles everything. You connect Smoobu once,
                                pick your message templates, and HeyDoot does the rest automatically.
                            </p>
                            <div class="flow-diagram">
                                <div class="flow-steps">
                                    <div class="flow-step"><i class="fas fa-building"
                                            style="color:var(--smoobu-dark);"></i> Smoobu Event</div>
                                    <i class="fas fa-arrow-right" style="color:#9ca3af;"></i>
                                    <div class="flow-step"><i class="fas fa-robot" style="color:var(--amber);"></i>
                                        HeyDoot Detects &amp; Processes</div>
                                    <i class="fas fa-arrow-right" style="color:#9ca3af;"></i>
                                    <div class="flow-step"><i class="fab fa-whatsapp"
                                            style="color:var(--wa-green);"></i> WhatsApp Delivered</div>
                                    <i class="fas fa-arrow-right" style="color:#9ca3af;"></i>
                                    <div class="flow-step"><i class="fas fa-reply"
                                            style="color:var(--smoobu-dark);"></i> Replies Routed Back</div>
                                </div>
                            </div>
                        </div>

                        <!-- DEV VIEW -->
                        <div class="for-devs">
                            <p style="margin-bottom:24px;">
                                For developers, HeyDoot is a clean REST API layer. Smoobu fires webhooks; your server
                                calls our <code>/api/v1/whatsapp/send</code> endpoint. We handle Meta's API complexity,
                                template management, and delivery tracking.
                            </p>
                            <div class="flow-diagram">
                                <div class="flow-steps">
                                    <div class="flow-step"><i class="fas fa-calendar-check"
                                            style="color:var(--smoobu-dark);"></i> Smoobu Webhook</div>
                                    <i class="fas fa-arrow-right" style="color:#9ca3af;"></i>
                                    <div class="flow-step"><i class="fas fa-server" style="color:var(--amber);"></i>
                                        Your Server</div>
                                    <i class="fas fa-arrow-right" style="color:#9ca3af;"></i>
                                    <div class="flow-step"><i class="fas fa-code" style="color:var(--smoobu-dark);"></i>
                                        HeyDoot API</div>
                                    <i class="fas fa-arrow-right" style="color:#9ca3af;"></i>
                                    <div class="flow-step"><i class="fab fa-whatsapp"
                                            style="color:var(--wa-green);"></i> WhatsApp</div>
                                </div>
                            </div>
                            <div class="code-block">
                                <span style="color:#9cdcfe;">// Triggered from your Smoobu webhook handler</span><br>
                                POST https://api.heydoot.com/api/v1/whatsapp/send<br>
                                Authorization: Bearer YOUR_API_KEY<br>
                                Content-Type: application/json<br><br>
                                {<br>
                                &nbsp;&nbsp;"to": "+1234567890",<br>
                                &nbsp;&nbsp;"template_name": "booking_confirmation",<br>
                                &nbsp;&nbsp;"language": "en",<br>
                                &nbsp;&nbsp;"components": [<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"type": "body",<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"parameters": [<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{"type": "text", "text":
                                "{{guest_name}}"},<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{"type": "text", "text":
                                "{{check_in_date}}"}<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                                &nbsp;&nbsp;]<br>
                                }
                            </div>
                        </div>
                    </div>

                    <!-- ══ SETUP STEPS ══ -->
                    <div id="setup-steps" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-rocket"></i></div>
                            <h2>Getting Started</h2>
                        </div>

                        <!-- HOST STEPS -->
                        <div class="for-hosts">
                            <div class="feature-grid" style="display:grid;gap:16px;">
                                <div class="step-card automation-card">
                                    <div class="step-num">1</div>
                                    <h3>Create a Free HeyDoot Account</h3>
                                    <p>Sign up at HeyDoot — no credit card required for your first 100 messages.</p>
                                </div>
                                <div class="step-card automation-card">
                                    <div class="step-num">2</div>
                                    <h3>Connect Your Smoobu Account</h3>
                                    <p>Paste your Smoobu API key in the HeyDoot dashboard. We sync your properties in
                                        seconds.</p>
                                </div>
                                <div class="step-card automation-card">
                                    <div class="step-num">3</div>
                                    <h3>Link Your WhatsApp Business Number</h3>
                                    <p>Connect your WhatsApp Business account (or let us provision one for you).</p>
                                </div>
                                <div class="step-card automation-card">
                                    <div class="step-num">4</div>
                                    <h3>Choose Your Message Templates</h3>
                                    <p>Pick from our ready-to-use templates for bookings, reminders, check-outs, and
                                        more.</p>
                                </div>
                                <div class="step-card automation-card">
                                    <div class="step-num">5</div>
                                    <h3>Go Live — You're Done!</h3>
                                    <p>Toggle automation on. Every Smoobu event now triggers a WhatsApp message
                                        automatically.</p>
                                </div>
                            </div>
                        </div>

                        <!-- DEV STEPS -->
                        <div class="for-devs">
                            <div class="feature-grid" style="display:grid;gap:16px;">
                                <div class="step-card automation-card">
                                    <div class="step-num">1</div>
                                    <h3>Generate API Credentials</h3>
                                    <p>Sign up and grab your Bearer token from the HeyDoot API Dashboard.</p>
                                </div>
                                <div class="step-card automation-card">
                                    <div class="step-num">2</div>
                                    <h3>Configure WhatsApp Templates via API</h3>
                                    <p>Use <code>POST /api/v1/whatsapp/templates</code> to create and submit templates
                                        for Meta approval.</p>
                                </div>
                                <div class="step-card automation-card">
                                    <div class="step-num">3</div>
                                    <h3>Enable Smoobu Webhooks</h3>
                                    <p>In Smoobu settings, add your server URL as the webhook endpoint for reservation
                                        events.</p>
                                </div>
                                <div class="step-card automation-card">
                                    <div class="step-num">4</div>
                                    <h3>Map Events → HeyDoot API Calls</h3>
                                    <p>On each webhook, call <code>POST /api/v1/whatsapp/send</code> with guest data as
                                        template parameters.</p>
                                </div>
                                <div class="step-card automation-card">
                                    <div class="step-num">5</div>
                                    <h3>Register Inbound Webhook</h3>
                                    <p>Use <code>POST /api/v1/webhooks/register</code> to receive guest replies and read
                                        receipts.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ══ KEY FEATURES ══ -->
                    <div id="features" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-umbrella-beach"></i></div>
                            <h2>Key Features</h2>
                        </div>
                        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:24px;">
                            <div class="use-case-card feature-card">
                                <i class="fas fa-bell"
                                    style="font-size:32px;color:var(--smoobu-dark);margin-bottom:14px;"></i>
                                <h3 style="font-weight:700;margin-bottom:10px;">Instant Booking Alerts</h3>
                                <p>WhatsApp notification the moment a new reservation lands in Smoobu — for you and your
                                    team.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-ban"
                                    style="font-size:32px;color:var(--danger);margin-bottom:14px;"></i>
                                <h3 style="font-weight:700;margin-bottom:10px;">Cancellation Notifications</h3>
                                <p>Immediate alert when a guest cancels — so you can update calendars and respond
                                    quickly.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-clock"
                                    style="font-size:32px;color:var(--amber);margin-bottom:14px;"></i>
                                <h3 style="font-weight:700;margin-bottom:10px;">Pre-Arrival Reminders</h3>
                                <p>Auto-send check-in instructions, door codes, WiFi details, and directions before
                                    arrival.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-comments"
                                    style="font-size:32px;color:var(--smoobu-dark);margin-bottom:14px;"></i>
                                <h3 style="font-weight:700;margin-bottom:10px;">Two-Way Guest Chat</h3>
                                <p>Guests can reply on WhatsApp and you receive it — enabling real support
                                    conversations.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-sync"
                                    style="font-size:32px;color:var(--smoobu-dark);margin-bottom:14px;"></i>
                                <h3 style="font-weight:700;margin-bottom:10px;">Modification Alerts</h3>
                                <p>Notify housekeeping and staff when a booking's dates or details change.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-star"
                                    style="font-size:32px;color:var(--amber);margin-bottom:14px;"></i>
                                <h3 style="font-weight:700;margin-bottom:10px;">Post-Stay Review Requests</h3>
                                <p>Auto-send a WhatsApp message after checkout with a Google or Airbnb review link.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-building"
                                    style="font-size:32px;color:var(--smoobu-dark);margin-bottom:14px;"></i>
                                <h3 style="font-weight:700;margin-bottom:10px;">Multi-Property Support</h3>
                                <p>Manage unlimited Smoobu listings — each with its own message templates and routing
                                    rules.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-chart-bar"
                                    style="font-size:32px;color:var(--smoobu-dark);margin-bottom:14px;"></i>
                                <h3 style="font-weight:700;margin-bottom:10px;">Delivery Analytics</h3>
                                <p>Track sent, delivered, read, and failed messages from your dashboard.</p>
                            </div>
                        </div>
                    </div>

                    <!-- ══ API REFERENCE (DEV-FOCUSED) ══ -->
                    <div id="api-section" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-plug"></i></div>
                            <h2>API Reference</h2>
                        </div>
                        <p style="margin-bottom:20px;">All endpoints are REST, JSON-based, and authenticated via Bearer
                            token.</p>
                        <div class="api-endpoint automation-card">
                            <strong>POST /api/v1/whatsapp/send</strong> — Send template-based or free-form WhatsApp
                            messages to guests
                        </div>
                        <div class="api-endpoint automation-card">
                            <strong>POST /api/v1/whatsapp/templates</strong> — Create and manage WhatsApp approved
                            message templates
                        </div>
                        <div class="api-endpoint automation-card">
                            <strong>GET /api/v1/messages/{id}/status</strong> — Check per-message delivery and read
                            receipt status
                        </div>
                        <div class="api-endpoint automation-card">
                            <strong>POST /api/v1/webhooks/register</strong> — Register your server to receive inbound
                            guest messages
                        </div>
                        <div class="api-endpoint automation-card">
                            <strong>GET /api/v1/contacts/verify</strong> — Validate phone numbers for WhatsApp
                            compatibility before sending
                        </div>
                        <div class="api-endpoint automation-card">
                            <strong>GET /api/v1/analytics/messages</strong> — Retrieve delivery stats, read rates, and
                            failure reports
                        </div>
                        <p style="margin-top:16px;">
                            <span
                                style="background:#eef2ff;color:var(--smoobu-dark);font-family:monospace;padding:4px 12px;border-radius:20px;font-size:.8rem;">
                                All endpoints require Bearer token auth
                            </span>
                            &nbsp;
                            <a href="<?php echo BASE_URL; ?>/integrations/smoobu.php"
                                style="color:var(--smoobu-dark);font-weight:600;">
                                → Full API Integration Page
                            </a>
                        </p>
                    </div>

                    <!-- ══ COMPARE PLANS ══ -->
                    <div id="compare" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-balance-scale"></i></div>
                            <h2>Compare Plans</h2>
                        </div>
                        <div
                            style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:24px;margin-bottom:32px;">
                            <!-- Starter -->
                            <div class="plan-card automation-card">
                                <div style="font-size:1.1rem;font-weight:700;color:var(--smoobu-dark);">Starter</div>
                                <div class="plan-price"><sup>$</sup>0<span>/mo</span></div>
                                <div style="color:#6b7280;font-size:.9rem;">First 100 messages free</div>
                                <ul class="plan-features">
                                    <li><i class="fas fa-check"></i> Booking &amp; cancellation alerts</li>
                                    <li><i class="fas fa-check"></i> 1 WhatsApp number</li>
                                    <li><i class="fas fa-check"></i> Up to 3 properties</li>
                                    <li><i class="fas fa-check"></i> Pre-built templates</li>
                                    <li style="color:#9ca3af;"><i class="fas fa-times" style="color:#d1d5db;"></i>
                                        Two-way chat</li>
                                    <li style="color:#9ca3af;"><i class="fas fa-times" style="color:#d1d5db;"></i> API
                                        access</li>
                                </ul>
                                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20the%20Starter%20plan%20for%20Smoobu"
                                    class="btn btn-secondary" style="width:100%;">Get Started</a>
                            </div>
                            <!-- Growth (featured) -->
                            <div class="plan-card featured automation-card">
                                <div class="plan-badge">Most Popular</div>
                                <div style="font-size:1.1rem;font-weight:700;color:var(--smoobu-dark);">Growth</div>
                                <div class="plan-price"><sup>$</sup>29<span>/mo</span></div>
                                <div style="color:#6b7280;font-size:.9rem;">Up to 1,000 messages</div>
                                <ul class="plan-features">
                                    <li><i class="fas fa-check"></i> All Starter features</li>
                                    <li><i class="fas fa-check"></i> Two-way guest chat</li>
                                    <li><i class="fas fa-check"></i> Up to 20 properties</li>
                                    <li><i class="fas fa-check"></i> Custom templates</li>
                                    <li><i class="fas fa-check"></i> Delivery analytics</li>
                                    <li style="color:#9ca3af;"><i class="fas fa-times" style="color:#d1d5db;"></i> API
                                        access</li>
                                </ul>
                                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20the%20Growth%20plan%20for%20Smoobu"
                                    class="btn btn-smoobu" style="width:100%;">Choose Growth</a>
                            </div>
                            <!-- Enterprise -->
                            <div class="plan-card automation-card">
                                <div style="font-size:1.1rem;font-weight:700;color:var(--smoobu-dark);">Enterprise</div>
                                <div class="plan-price" style="font-size:1.6rem;">Custom</div>
                                <div style="color:#6b7280;font-size:.9rem;">Volume pricing + SLA</div>
                                <ul class="plan-features">
                                    <li><i class="fas fa-check"></i> All Growth features</li>
                                    <li><i class="fas fa-check"></i> Full REST API access</li>
                                    <li><i class="fas fa-check"></i> Unlimited properties</li>
                                    <li><i class="fas fa-check"></i> Custom webhook routing</li>
                                    <li><i class="fas fa-check"></i> Dedicated support &amp; SLA</li>
                                    <li><i class="fas fa-check"></i> IP whitelisting</li>
                                </ul>
                                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20Enterprise%20access%20for%20Smoobu"
                                    class="btn btn-secondary" style="width:100%;">Contact Sales</a>
                            </div>
                        </div>

                        <!-- Feature comparison table -->
                        <div style="overflow-x:auto;">
                            <table class="compare-table">
                                <thead>
                                    <tr>
                                        <th>Feature</th>
                                        <th>Starter</th>
                                        <th>Growth</th>
                                        <th>Enterprise</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Booking &amp; cancellation alerts</td>
                                        <td class="check">✓</td>
                                        <td class="check">✓</td>
                                        <td class="check">✓</td>
                                    </tr>
                                    <tr>
                                        <td>Pre-arrival &amp; check-out messages</td>
                                        <td class="cross">✗</td>
                                        <td class="check">✓</td>
                                        <td class="check">✓</td>
                                    </tr>
                                    <tr>
                                        <td>Two-way guest chat</td>
                                        <td class="cross">✗</td>
                                        <td class="check">✓</td>
                                        <td class="check">✓</td>
                                    </tr>
                                    <tr>
                                        <td>REST API access</td>
                                        <td class="cross">✗</td>
                                        <td class="cross">✗</td>
                                        <td class="check">✓</td>
                                    </tr>
                                    <tr>
                                        <td>Custom webhook routing</td>
                                        <td class="cross">✗</td>
                                        <td class="cross">✗</td>
                                        <td class="check">✓</td>
                                    </tr>
                                    <tr>
                                        <td>Delivery analytics</td>
                                        <td class="cross">✗</td>
                                        <td class="check">✓</td>
                                        <td class="check">✓</td>
                                    </tr>
                                    <tr>
                                        <td>Dedicated support &amp; SLA</td>
                                        <td class="cross">✗</td>
                                        <td class="cross">✗</td>
                                        <td class="check">✓</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- ══ USE CASES ══ -->
                    <div id="use-cases" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-briefcase"></i></div>
                            <h2>Use Cases</h2>
                        </div>
                        <div class="feature-grid" style="display:grid;gap:20px;">
                            <div class="use-case-item feature-card">
                                <h3>
                                    <i class="fas fa-address-book" style="color:var(--smoobu-dark);font-size:28px;"></i>
                                    <strong>Booking Confirmation</strong>
                                </h3>
                                <p>Smoobu registers a new reservation → HeyDoot instantly WhatsApps the host and guest
                                    with a personalised confirmation.</p>
                            </div>
                            <div class="use-case-item feature-card">
                                <h3>
                                    <i class="fas fa-ban" style="color:var(--danger);font-size:28px;"></i>
                                    <strong>Cancellation Alerts</strong>
                                </h3>
                                <p>A guest cancels → immediate WhatsApp to your team, freeing up calendar time and
                                    triggering a rebooking offer.</p>
                            </div>
                            <div class="use-case-item feature-card">
                                <h3>
                                    <i class="fas fa-sync" style="color:var(--smoobu-dark);font-size:28px;"></i>
                                    <strong>Modification Alerts</strong>
                                </h3>
                                <p>Dates change on a booking → housekeeping and the guest both receive an updated
                                    WhatsApp message automatically.</p>
                            </div>
                            <div class="use-case-item feature-card">
                                <h3>
                                    <i class="fas fa-key" style="color:var(--amber);font-size:28px;"></i>
                                    <strong>Pre-Arrival Instructions</strong>
                                </h3>
                                <p>72 hours before check-in → send door codes, parking info, WiFi credentials, and local
                                    tips via WhatsApp.</p>
                            </div>
                            <div class="use-case-item feature-card">
                                <h3>
                                    <i class="fas fa-star" style="color:var(--amber);font-size:28px;"></i>
                                    <strong>Review Request Automation</strong>
                                </h3>
                                <p>24 hours after checkout → automatically request a Google or Airbnb review with a
                                    friendly WhatsApp nudge.</p>
                            </div>
                            <div class="use-case-item feature-card">
                                <h3>
                                    <i class="fas fa-headset" style="color:var(--smoobu-dark);font-size:28px;"></i>
                                    <strong>Two-Way Guest Support</strong>
                                </h3>
                                <p>Guests reply on WhatsApp → messages are routed to your inbox or CRM so you can
                                    respond in real time.</p>
                            </div>
                        </div>
                    </div>

                    <!-- ══ WHY HEYDOOT ══ -->
                    <div id="why-heydoot" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-heart"></i></div>
                            <h2>Why HeyDoot for Smoobu + WhatsApp</h2>
                        </div>
                        <div class="feature-grid" style="display:grid;gap:20px;">
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-plug"></i> Official Meta WhatsApp Partner</h3>
                                <p>We use the official WhatsApp Business API — no grey-route risks, guaranteed
                                    deliverability.</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-code"></i> Works for hosts &amp; developers</h3>
                                <p>No-code dashboard for property managers. Full REST API for technical teams. Same
                                    reliable backend.</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-charging-station"></i> Scalable Infrastructure</h3>
                                <p>Handles thousands of messages per minute — whether you have 1 property or a
                                    500-listing portfolio.</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-shield-alt"></i> Enterprise Security</h3>
                                <p>API key auth, IP whitelisting, end-to-end encryption, and GDPR-compliant data
                                    handling.</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-headset"></i> Real Human Support</h3>
                                <p>Chat or call our team — not a bot. Business plans include dedicated integration
                                    engineers.</p>
                            </div>
                        </div>
                    </div>

                    <!-- ══ FAQs ══ -->
                    <div id="faqs" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-question-circle"></i></div>
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        <div class="faq-list">
                            <div class="faq-item">
                                <div class="faq-question">Do I need coding skills to set this up? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">No. Property managers can connect Smoobu and WhatsApp in under 5
                                    minutes through our dashboard — no code needed. Developers can also access our full
                                    REST API for custom integrations.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Will this work with my existing Smoobu account? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Yes. HeyDoot connects to any Smoobu account via API key. You
                                    don't need to change your Smoobu plan or setup — just paste the key into HeyDoot and
                                    you're live.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">What WhatsApp number do I use? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">You can connect your existing WhatsApp Business number, or
                                    HeyDoot can provision a verified number for you. We handle the Meta Business Manager
                                    setup.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Can I customise the messages guests receive? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Absolutely. You can edit message templates in the dashboard
                                    (Growth+) or via our API (Enterprise). Use dynamic fields like guest name, check-in
                                    date, property name, door code, and more.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Does this support multiple properties? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Yes. Each property can have its own message templates, routing
                                    rules, and notification recipients. Growth supports up to 20 properties; Enterprise
                                    is unlimited.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Can guests reply and start a conversation? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Yes, on Growth and Enterprise plans. Inbound guest replies are
                                    routed to your chosen WhatsApp number, CRM, or inbox. Enterprise users can also
                                    receive replies via webhook to their server.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">What's the pricing model? <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">Plans start free (100 messages). Growth is a flat monthly fee.
                                    Enterprise is volume-based with custom pricing.
                                    <span style="color:var(--smoobu-dark);">
                                        <a href="<?php echo BASE_URL; ?>/pricing.php"><strong>View full pricing
                                                →</strong></a>
                                    </span>
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Is there a sandbox / test mode? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Yes. We provide a sandbox environment with test phone numbers so
                                    developers can integrate and test without sending real messages or using production
                                    credits.</div>
                            </div>
                        </div>
                    </div>

                    <!-- ══ FINAL CTA ══ -->
                    <div
                        style="background:linear-gradient(105deg,#eef2ff,#e0e7ff);border-radius:36px;padding:36px 28px;text-align:center;margin:32px 0 24px;">
                        <i class="fab fa-whatsapp" style="font-size:48px;color:var(--wa-green);"></i>
                        <h2 style="font-size:2rem;font-weight:800;margin-top:12px;">Start Automating Guest Messaging
                            Today</h2>
                        <p style="margin-top:12px;color:#4b5563;">
                            Connect Smoobu to WhatsApp in minutes. No contracts, no setup fees, first 100 messages free.
                        </p>
                        <div class="cta-group" style="margin-top:24px;">
                            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20set%20up%20Smoobu%20WhatsApp%20messaging%20with%20HeyDoot"
                                class="btn btn-smoobu" style="padding:12px 28px;">
                                <i class="fab fa-whatsapp"></i> Get Started Free
                            </a>
                            <a href="<?php echo BASE_URL; ?>/integrations/smoobu.php" class="btn btn-secondary"
                                style="padding:12px 28px;">
                                <i class="fas fa-code"></i> View API Docs
                            </a>
                        </div>
                    </div>

                </main>
            </div><!-- /flex -->

            <!-- ── UTILITY BAR ── -->
            <div class="utility-bar">
                <div class="utility-bar-inner">
                    <div class="utility-item">
                        <i class="fas fa-search"></i>
                        <span>Search...</span>
                    </div>
                    <span class="shortcut-key">Ctrl K</span>
                    <a href="<?php echo BASE_URL; ?>/integrations/smoobu.php" class="utility-item utility-link"
                        style="color:var(--wa-teal);">
                        <i class="fas fa-code"></i> API reference
                    </a>
                    <a href="tel:+919718517228" class="utility-item utility-link">
                        <i class="fas fa-headset"></i> Developer support
                    </a>
                    <a href="<?php echo BASE_URL; ?>/integrations/dashboard.php" class="dashboard-btn"
                        style="background:var(--smoobu-dark);color:white;">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </div>
            </div>

        </div>
    </section>
</main>

<script>
    (function () {
        const tabs = document.querySelectorAll('.audience-tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
                if (tab.dataset.mode === 'dev') {
                    document.body.classList.add('dev-view');
                } else {
                    document.body.classList.remove('dev-view');
                }
            });
        });
    })();
</script>

<?php include ROOT_PATH . '/components/footer.php'; ?>