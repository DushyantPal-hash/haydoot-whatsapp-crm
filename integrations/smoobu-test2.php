<?php
require_once dirname(__DIR__) . '/config.php';
$page_meta = [
    'title' => 'Smoobu WhatsApp Integration | HeyDoot',
    'meta_title' => 'Smoobu WhatsApp Integration – Automated Reservation Notifications with HeyDoot',
    'description' => 'Connect Smoobu with WhatsApp using HeyDoot and automate new reservation alerts & cancellation notifications. Never miss a booking update again.',

    'og_title' => 'Smoobu WhatsApp Integration | HeyDoot',
    'og_description' => 'Automate Smoobu reservation notifications on WhatsApp with HeyDoot. Get instant alerts for new bookings and cancellations, directly on your phone.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations/smoobu.php',

    'twitter_title' => 'Smoobu WhatsApp Integration | HeyDoot',
    'twitter_description' => 'Integrate Smoobu with WhatsApp using HeyDoot and automate booking alerts, cancellation notifications, and reservation updates.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',

    'canonical' => 'https://heydoot.com/integrations/smoobu.php'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => "Smoobu WhatsApp Integration",
    "serviceType" => "WhatsApp Integration Service",
    "provider" => [
        "@type" => "Organization",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ],
    "description" => "Integrate Smoobu with WhatsApp using HeyDoot to automate new reservation alerts and cancellation notifications for property managers, vacation rental owners, and hospitality businesses.",
    "areaServed" => "Worldwide",
    "url" => "https://heydoot.com/integrations/smoobu.php",
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
    /* Smoobu accent colors - fresh hospitality vibe */
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

    .setup-step {
        background: white;
        border-radius: 24px;
        padding: 24px;
        margin-bottom: 24px;
        border-left: 4px solid #1E3A5F;
        transition: all 0.25s ease;
    }

    .setup-step:hover {
        transform: translateX(6px);
        box-shadow: var(--card-shadow);
    }

    .step-number {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background: #1E3A5F;
        color: white;
        border-radius: 12px;
        font-weight: 700;
        margin-right: 12px;
    }

    .use-case-card {
        background: white;
        border-radius: 28px;
        padding: 28px;
        transition: all 0.25s ease;
        height: 100%;
    }

    .use-case-card:hover {
        transform: translateY(-6px);
        box-shadow: var(--card-shadow);
    }

    .metric-card {
        text-align: center;
        padding: 24px;
        background: white;
        border-radius: 24px;
    }

    .event-badge {
        background: #e9ecef;
        padding: 6px 16px;
        border-radius: 40px;
        font-weight: 500;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .how-works-steps {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .how-works-step {
        text-align: center;
        flex: 1;
        min-width: 250px;
    }

    .how-works-step-number {
        background: #1E3A5F;
        width: 50px;
        height: 50px;
        border-radius: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 12px;
    }

    .how-works-step-number span {
        color: white;
        font-weight: 700;
    }
</style>

<main>
    <!-- Hero Section with Smoobu flavor -->
    <section class="hero" style="background: linear-gradient(135deg, #0f2b3d 0%, #1E3A5F 100%);">
        <div class="floating-dots"></div>
        <div style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div
                style="display: inline-block; background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); padding: 6px 18px; border-radius: 60px; margin-bottom: 24px;">
                <span style="color: #ffffff; font-weight: 700; display: flex; align-items: center; gap: 10px;"><i
                        class="fas fa-home"></i> Official Smoobu Partner</span>
            </div>
            <h1 style="color: white;">Connect <span style="color: #ffffff;">HeyDoot</span> <br>with <span
                    style="color: #ffffff;">Smoobu</span></h1>
            <p class="hero-desc">Automate WhatsApp notifications for new reservations and cancellations — directly from
                your Smoobu account. Never miss a booking update again.</p>
            <div class="cta-group">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20integrate%20Smoobu%20with%20WhatsApp%20using%20HeyDoot"
                    class="btn btn-smoobu btn-lg"><i class="fab fa-whatsapp"></i> Connect Smoobu</a>
                <a href="<?php echo BASE_URL; ?>/services/smoobu.php" class="btn btn-secondary btn-lg"><i
                        class="fas fa-calendar-alt"></i> View Services</a>
            </div>
        </div>
        <div class="visual-stage" style="margin-top: 20px;">
            <div class="float-card card-1"><i class="fab fa-whatsapp" style="color:#25D366; font-size: 22px;"></i>
                <span>New Booking → WhatsApp</span>
            </div>
            <div class="float-card card-2"><i class="fas fa-times-circle" style="color:#e74c3c;"></i> <span>Cancellation
                    Alerts</span></div>
            <div class="mockup-phone"
                style="width: 65%; margin: 0 auto; background: #1e1e2a; border-radius: 48px; padding: 8px;">
                <div style="background: #2a2a35; border-radius: 40px; padding: 30px 20px; text-align: center;">
                    <div style=" display: flex; justify-content: center; align-items: center;">
                        <i class="fas fa-building" style="font-size: 48px; color: #1E3A5F;"></i>
                        <i class="fas fa-plus" style="margin: 0 20px; color: white;"></i>
                        <i class="fab fa-whatsapp" style="font-size: 48px; color: #25D366;"></i>
                    </div>
                    <p style="color: #aaa; margin-top: 16px;">Real-time reservation alerts · 2-way sync</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Integration Container -->
    <section style="padding: 40px 0;">
        <div class="container-fluid">

            <!-- Status Banner -->
            <div
                style="background: linear-gradient(105deg, #eef2f7 0%, #e8edf3 100%); border-left: 5px solid #1E3A5F; border-radius: 20px; padding: 20px 28px; margin-bottom: 48px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                <div>
                    <i class="fas fa-check-circle" style="color: #1E3A5F; margin-right: 12px;"></i>
                    <strong>HeyDoot Smoobu WhatsApp Notifier is fully certified.</strong>
                    <span style="color: #4b5563;"> Connect your Smoobu account with HeyDoot to enable automated
                        WhatsApp messaging for reservations.</span>
                    <a href="<?php echo BASE_URL; ?>/404.php" style="color: #1E3A5F; font-weight: 600;"> Start
                        Integration →</a>
                </div>
                <div>
                    <a href="<?php echo BASE_URL; ?>/404.php"
                        style="background: #f3f4f6; padding: 8px 18px; border-radius: 40px; font-size: 0.85rem;"><i
                            class="fas fa-headset"></i> Troubleshooting: Not receiving alerts?</a>
                </div>
            </div>

            <!-- Two-column layout -->
            <div style="display: flex; gap: 48px; flex-wrap: wrap;">
                <!-- Sidebar -->
                <aside class="sidebar-card">
                    <div
                        style="position: sticky; top: 100px; background: white; border-radius: 28px; padding: 24px; box-shadow: var(--card-shadow); border: 1px solid rgba(0,0,0,0.04);">
                        <h4 style="font-weight: 700; margin-bottom: 20px; font-size: 1.1rem;"><i class="fas fa-cog"
                                style="color: #1E3A5F; margin-right: 8px;"></i> On this page</h4>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
                            <li><a href="#prerequisites" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-check-circle" style="color: #1E3A5F;"></i> Prerequisites</a></li>
                            <li><a href="#setup-guide" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-list-ol" style="color: #1E3A5F;"></i> Step-by-Step Setup Guide</a>
                            </li>
                            <li><a href="#features" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-star"
                                        style="color: #1E3A5F;"></i> Key Features</a></li>
                            <li><a href="#use-cases" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-briefcase" style="color: #1E3A5F;"></i> Use Cases</a></li>
                            <li><a href="#benefits" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-chart-line" style="color: #1E3A5F;"></i> Benefits</a></li>
                            <li><a href="#faq-smoobu" style="color: #2c3e2f;"><i class="fas fa-question-circle"
                                        style="color: #1E3A5F;"></i> FAQs</a></li>
                            <li><a href="#cta" style="color: #2c3e2f;"><i class="fas fa-rocket"
                                        style="color: #1E3A5F;"></i> Get Started</a></li>
                        </ul>
                    </div>
                </aside>

                <!-- Main Content -->
                <main style="flex: 2.5; min-width: 280px;">

                    <!-- Prerequisites -->
                    <div id="prerequisites" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8edf3; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-clipboard-list" style="color: #1E3A5F; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Prerequisites</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: #1E3A5F;"></i> Active HeyDoot account
                                    (any paid plan or trial)</li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: #1E3A5F;"></i> Active Smoobu account
                                    (any plan with API access)</li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: #1E3A5F;"></i> WhatsApp Business
                                    number connected via HeyDoot</li>
                                <li style="display: flex; gap: 12px;"><i class="fas fa-check-circle"
                                        style="color: #1E3A5F;"></i> Smoobu API credentials (API Key)</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step-by-Step Setup Guide -->
                    <div id="setup-guide" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8edf3; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-list-ol" style="color: #1E3A5F; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Step-by-Step Setup Guide</h2>
                        </div>

                        <!-- Image Placeholder 1 -->
                        <div style="margin-bottom: 32px;">
                            <img src="<?php echo BASE_URL; ?>/assets/images/integrations/smoobu/smoobu-dashboard.webp"
                                alt="Smoobu Integration Dashboard"
                                style="width: 100%; height: auto; border-radius: 24px; box-shadow: var(--card-shadow); margin-bottom: 12px;">
                            <div style="text-align: center;">
                                <p style="font-size: 14px; color: #5a6a7a;">Smoobu Integration Dashboard Preview</p>
                            </div>
                        </div>

                        <!-- Step 1 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">1</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Get Smoobu API Key</h3>
                            </div>
                            <p style="margin-bottom: 12px;">Log in to your Smoobu account and navigate to:</p>
                            <p><strong>Settings → API → API Keys</strong></p>
                            <p style="margin-top: 12px;">Click <strong>Create New API Key</strong> and copy the
                                generated
                                key. Save it securely.</p>
                            <div style="background: #f8f9fa; padding: 12px; border-radius: 12px; margin-top: 12px;">
                                <i class="fas fa-info-circle" style="color: #1E3A5F;"></i>
                                <span style="font-size: 0.85rem;">Smoobu API documentation: <a href="#"
                                        style="color: #1E3A5F;">docs.smoobu.com/api</a></span>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">2</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Configure Webhook in
                                    Smoobu</h3>
                            </div>
                            <p>Navigate to: <strong>Settings → API → Webhooks</strong></p>
                            <p>Add a new webhook with the following details:</p>
                            <ul style="margin-left: 24px; margin-top: 8px;">
                                <li><strong>URL:</strong> <code>https://heydoot.com/api/smoobu/webhook</code></li>
                                <li><strong>Events:</strong> Select "Reservation Created" and "Reservation Cancelled"
                                </li>
                                <li><strong>Secret Key:</strong> (copy from HeyDoot dashboard)</li>
                            </ul>
                            <p style="margin-top: 12px;">Click <strong>Save Webhook</strong></p>
                        </div>

                        <!-- Image Placeholder 2 -->
                        <div style="margin-bottom: 32px;">
                            <img src="<?php echo BASE_URL; ?>/assets/images/integrations/smoobu/smoobu-webhook.webp"
                                alt="Smoobu Webhook Configuration"
                                style="width: 100%; height: auto; border-radius: 24px; box-shadow: var(--card-shadow); margin-bottom: 12px;">
                            <div style="text-align: center;">
                                <p style="font-size: 14px; color: #5a6a7a;">Smoobu Webhook Configuration Screen</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">3</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Connect Smoobu in HeyDoot
                                </h3>
                            </div>
                            <p>Log in to your HeyDoot dashboard and navigate to:</p>
                            <p><strong>Integrations → Smoobu → Connect Account</strong></p>
                            <p>Enter your Smoobu API Key and select the WhatsApp number for notifications.</p>
                            <p>Click <strong>Test Connection</strong> to verify the integration.</p>
                        </div>

                        <!-- Image Placeholder 3 -->
                        <div style="margin-bottom: 32px;">
                            <img src="<?php echo BASE_URL; ?>/assets/images/integrations/smoobu/smoobu-connect.webp"
                                alt="HeyDoot Smoobu Connection Screen"
                                style="width: 100%; height: auto; border-radius: 24px; box-shadow: var(--card-shadow); margin-bottom: 12px;">
                            <div style="text-align: center;">
                                <p style="font-size: 14px; color: #5a6a7a;">HeyDoot Smoobu Connection UI</p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">4</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Customize Notification
                                    Templates</h3>
                            </div>
                            <p>Navigate to: <strong>Integrations → Smoobu → Notification Templates</strong></p>
                            <p>Customize message templates for:</p>
                            <ul style="margin-left: 24px; margin-top: 8px;">
                                <li>New Reservation Alert</li>
                                <li>Reservation Cancellation Alert</li>
                            </ul>
                            <p>Use dynamic variables like <code>{guest_name}</code>, <code>{property}</code>,
                                <code>{check_in}</code>, <code>{check_out}</code>, <code>{total_price}</code>
                            </p>
                        </div>

                        <!-- Image Placeholder 4 -->
                        <div style="margin-bottom: 32px;">
                            <img src="<?php echo BASE_URL; ?>/assets/images/integrations/smoobu/smoobu-templates.webp"
                                alt="Notification Template Editor"
                                style="width: 100%; height: auto; border-radius: 24px; box-shadow: var(--card-shadow); margin-bottom: 12px;">
                            <div style="text-align: center;">
                                <p style="font-size: 14px; color: #5a6a7a;">WhatsApp Notification Template Editor</p>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">5</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Enable & Test</h3>
                            </div>
                            <p>Toggle the integration to <strong>Active</strong> status.</p>
                            <p>Create a test reservation in Smoobu to verify that WhatsApp notifications are being sent
                                correctly.</p>
                            <p>Check <strong>Notification Logs</strong> in your HeyDoot dashboard to monitor delivery
                                status.</p>
                        </div>
                    </div>

                    <!-- Key Features Section -->
                    <div id="features" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8edf3; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-star" style="color: #1E3A5F; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Key Features</h2>
                        </div>
                        <div
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
                            <div class="use-case-card">
                                <i class="fas fa-bell"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Instant New Reservation Alerts</h3>
                                <p>Receive WhatsApp notifications whenever a new booking is received through Smoobu.</p>
                            </div>
                            <div class="use-case-card">
                                <i class="fas fa-ban" style="font-size: 32px; color: #e74c3c; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Cancellation Notifications</h3>
                                <p>Get immediate alerts when a guest cancels a reservation, allowing you to update
                                    availability quickly.</p>
                            </div>
                            <div class="use-case-card">
                                <i class="fas fa-clock"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Real-Time WhatsApp Delivery</h3>
                                <p>Notifications are delivered instantly to your preferred WhatsApp number.</p>
                            </div>
                            <div class="use-case-card">
                                <i class="fas fa-eye-slash"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">No Manual Monitoring</h3>
                                <p>Reduce the need to constantly check your Smoobu dashboard or email inbox.</p>
                            </div>
                            <div class="use-case-card">
                                <i class="fas fa-plug"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Easy Setup</h3>
                                <p>Connect your Smoobu account with Heydoot in just a few minutes — no coding required.
                                </p>
                            </div>
                            <div class="use-case-card">
                                <i class="fas fa-building"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Multi-Property Support</h3>
                                <p>Perfect for vacation rental managers handling multiple listings and properties.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Supported Events -->
                    <div style="margin-bottom: 56px; background: #f8f9fa; border-radius: 28px; padding: 32px;">
                        <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 20px;"><i class="fas fa-bolt"
                                style="color: #1E3A5F;"></i> Supported Events</h3>
                        <div style="display: flex; flex-wrap: wrap; gap: 16px;">
                            <span class="event-badge"><i class="fas fa-plus-circle" style="color: #27ae60;"></i> New
                                Reservation Created</span>
                            <span class="event-badge"><i class="fas fa-minus-circle" style="color: #e74c3c;"></i>
                                Reservation Cancelled</span>
                        </div>
                        <p style="margin-top: 20px; font-size: 0.9rem; color: #6c757d;">Additional booking-related
                            events can be added based on business requirements.</p>
                    </div>

                    <!-- Benefits Section -->
                    <div id="benefits" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8edf3; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-chart-line" style="color: #1E3A5F; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Benefits for Property Managers</h2>
                        </div>
                        <div
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
                            <div class="metric-card"><i class="fas fa-bolt"
                                    style="font-size: 28px; color: #1E3A5F;"></i>
                                <p style="margin-top: 12px; font-weight: 600;">Faster response to new bookings</p>
                            </div>
                            <div class="metric-card"><i class="fas fa-chart-simple"
                                    style="font-size: 28px; color: #1E3A5F;"></i>
                                <p style="margin-top: 12px; font-weight: 600;">Improved operational efficiency</p>
                            </div>
                            <div class="metric-card"><i class="fas fa-calendar-check"
                                    style="font-size: 28px; color: #1E3A5F;"></i>
                                <p style="margin-top: 12px; font-weight: 600;">Better occupancy management</p>
                            </div>
                            <div class="metric-card"><i class="fas fa-shield-alt"
                                    style="font-size: 28px; color: #1E3A5F;"></i>
                                <p style="margin-top: 12px; font-weight: 600;">Reduced risk of missed reservations</p>
                            </div>
                            <div class="metric-card"><i class="fas fa-bell-slash"
                                    style="font-size: 28px; color: #1E3A5F;"></i>
                                <p style="margin-top: 12px; font-weight: 600;">Instant awareness of cancellations</p>
                            </div>
                            <div class="metric-card"><i class="fas fa-tasks"
                                    style="font-size: 28px; color: #1E3A5F;"></i>
                                <p style="margin-top: 12px; font-weight: 600;">Simplified property management workflow
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Use Cases Section -->
                    <div id="use-cases" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8edf3; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-briefcase" style="color: #1E3A5F; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Use Cases</h2>
                        </div>
                        <div
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
                            <div class="use-case-card">
                                <i class="fas fa-home" style="font-size: 32px; color: #1E3A5F;"></i>
                                <h3 style="margin: 15px 0 10px; font-weight: 700;">Vacation Rental Owners</h3>
                                <p>Stay informed about every booking without logging into multiple systems.</p>
                            </div>
                            <div class="use-case-card">
                                <i class="fas fa-building" style="font-size: 32px; color: #1E3A5F;"></i>
                                <h3 style="margin: 15px 0 10px; font-weight: 700;">Property Management Companies</h3>
                                <p>Keep operations teams updated in real time.</p>
                            </div>
                            <div class="use-case-card">
                                <i class="fas fa-globe" style="font-size: 32px; color: #1E3A5F;"></i>
                                <h3 style="margin: 15px 0 10px; font-weight: 700;">Airbnb & OTA Hosts</h3>
                                <p>Monitor reservation activity across connected booking channels through Smoobu.</p>
                            </div>
                            <div class="use-case-card">
                                <i class="fas fa-users" style="font-size: 32px; color: #1E3A5F;"></i>
                                <h3 style="margin: 15px 0 10px; font-weight: 700;">Hospitality Teams</h3>
                                <p>Receive critical reservation updates directly on WhatsApp for faster action.</p>
                            </div>
                        </div>
                    </div>

                    <!-- How It Works -->
                    <div
                        style="margin-bottom: 56px; background: linear-gradient(115deg, #f0f4f9, #e8edf3); border-radius: 28px; padding: 32px;">
                        <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 24px; text-align: center;">How It
                            Works</h3>
                        <div class="how-works-steps">
                            <div class="how-works-step">
                                <div class="how-works-step-number">
                                    <span>1</span>
                                </div>
                                <p>Connect your Smoobu account with Heydoot</p>
                            </div>
                            <div class="how-works-step">
                                <div class="how-works-step-number">
                                    <span>2</span>
                                </div>
                                <p>Configure the WhatsApp number for notifications</p>
                            </div>
                            <div class="how-works-step">
                                <div class="how-works-step-number">
                                    <span>3</span>
                                </div>
                                <p>New booking? You get a WhatsApp alert</p>
                            </div>
                            <div class="how-works-step">
                                <div class="how-works-step-number">
                                    <span>4</span>
                                </div>
                                <p>Cancellation? You get an instant alert</p>
                            </div>
                            <div class="how-works-step">
                                <div class="how-works-step-number">
                                    <span>5</span>
                                </div>
                                <p>Update? You get a real-time notification</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div id="faq-smoobu" style="margin-top: 48px;">
                        <h3 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 24px;"><i
                                class="fas fa-question-circle" style="color: #1E3A5F;"></i> FAQs</h3>

                        <div class="faq-item">
                            <div class="faq-question">Does HeyDoot support all Smoobu plans? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Yes, the integration works with all Smoobu plans that include API
                                access (Professional and above).</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Can I send notifications to multiple WhatsApp numbers? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Yes, you can configure multiple recipients for different properties
                                or team members.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">How long does it take to set up the integration? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Most users complete the setup in under 10 minutes using our
                                step-by-step guide.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Is there a free trial available? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Yes, we offer a 14-day free trial with full Smoobu integration
                                features.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Can I customize the WhatsApp message content? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Absolutely. You can fully customize both new booking and
                                cancellation notification templates.</div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div id="cta"
                        style="background: linear-gradient(115deg, #0f2b3d, #1E3A5F); border-radius: 32px; padding: 48px; text-align: center; margin: 56px 0 32px; color: white;">
                        <i class="fab fa-whatsapp" style="font-size: 56px; color: #25D366; margin-bottom: 16px;"></i>
                        <h2 style="font-size: 2rem; font-weight: 800;">Connect Smoobu with WhatsApp Today</h2>
                        <p style="margin-top: 16px; opacity: 0.9;">Get instant reservation alerts and cancellation
                            notifications directly on WhatsApp.</p>
                        <div
                            style="display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; margin-top: 32px;">
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-code"></i> Webhook-Based</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-bell"></i> Real-Time Alerts</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-pen"></i> Custom Templates</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-building"></i> Multi-Property</span>
                        </div>
                        <div style="margin-top: 36px;">
                            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20integrate%20Smoobu%20with%20WhatsApp%20using%20HeyDoot"
                                class="btn btn-lg" style="background: white; color: #1E3A5F; font-weight: 700;"><i
                                    class="fab fa-whatsapp"></i> Get Started Today</a>
                        </div>
                        <p style="margin-top: 24px; font-size: 0.85rem; opacity: 0.7;">No coding required. Simple setup.
                            Real-time notifications.</p>
                    </div>

                </main>
            </div>

            <!-- Utility bar -->
            <div class="utility-bar">
                <div class="utility-bar-inner">

                    <div class="utility-item">
                        <i class="fas fa-search"></i>
                        <span>Search...</span>
                    </div>

                    <span class="shortcut-key">Ctrl K</span>

                    <a href="<?php echo BASE_URL; ?>/404.php" class="utility-item utility-link">
                        <i class="fas fa-code"></i>
                        Smoobu API Docs
                    </a>

                    <a href="tel:+919718517228" class="utility-item utility-link">
                        <i class="fas fa-headset"></i>
                        Support
                    </a>

                    <a href="<?php echo BASE_URL; ?>/404.php" class="dashboard-btn">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>

                </div>
            </div>
        </div>
    </section>
</main>

<?php include ROOT_PATH . '/components/footer.php'; ?>