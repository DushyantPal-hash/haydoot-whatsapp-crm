<?php
require_once dirname(__DIR__) . '/config.php';

$page_meta = [
    'title' => 'Smoobu WhatsApp API Service | HeyDoot',
    'meta_title' => 'Smoobu WhatsApp API Integration – Connect Your PMS via HeyDoot API',
    'description' => 'HeyDoot provides the API bridge to connect Smoobu with WhatsApp Business. Automate guest messaging, booking alerts, and two-way communication without coding complex integrations.',

    'og_title' => 'Smoobu WhatsApp API Service | HeyDoot',
    'og_description' => 'Use HeyDoot\'s API to connect Smoobu PMS with WhatsApp. Programmatically send booking confirmations, reminders, and support messages through a reliable API-first solution.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations/smoobu.php',

    'twitter_title' => 'Smoobu WhatsApp API Service | HeyDoot',
    'twitter_description' => 'API-first integration for Smoobu + WhatsApp. HeyDoot provides the technical bridge to automate guest communication at scale.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',

    'canonical' => 'https://heydoot.com/integrations/smoobu.php'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => "Smoobu WhatsApp API Service",
    "serviceType" => "API Integration Service",
    "provider" => [
        "@type" => "Organization",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ],
    "description" => "HeyDoot provides API connectivity to integrate Smoobu PMS with WhatsApp Business. Send automated booking confirmations, pre-arrival instructions, and support messages through our reliable WhatsApp API bridge.",
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

    .api-badge {
        background: #eef2ff;
        color: #1E3A5F;
        font-family: monospace;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        display: inline-block;
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
        padding: 15px;
        /* box-shadow: var(--card-shadow); */
        border: var(--border-light);
    }

    .step-card-header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 0px;
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
        font-size: 1.4rem;
        margin-bottom: 20px;
    }


    .step-card h3 {
        font-size: 1.2rem;
    }

    .step-card p {
        margin-bottom: 0;
    }

    .code-block {
        background: #1e1e2f;
        color: #e2e2e2;
        padding: 20px;
        border-radius: 16px;
        font-family: monospace;
        font-size: 0.85rem;
        overflow-x: auto;
        margin: 20px 0;
    }

    .api-endpoint {
        background: #f8f9fa;
        border-left: 4px solid #25D366;
        padding: 16px 20px;
        border-radius: 12px;
        margin: 15px 0;
    }

    .api-endpoint strong {
        font-family: monospace;
        color: #1E3A5F;
    }

    .use-case-item,
    .benefit-item {
        background: white;
        border-radius: 24px;
        padding: 15px 20px;
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
        font-size: 20px;
        gap: 10px;
    }

    @media (max-width: 768px) {
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
                    <i class="fab fa-whatsapp"></i> <i class="fas fa-exchange-alt"></i> <i class="fas fa-building"></i>
                    Official Smoobu Partner</span>
            </div>
            <h1><span style="color: #F59E0B;">Smoobu</span><br>WhatsApp Integration</h1>
            <p class="hero-desc">HeyDoot provides the API bridge that connects Smoobu PMS to WhatsApp Business. Use our
                reliable endpoints to send automated messages, manage templates, and enable two-way communication — no
                complex infrastructure required.</p>
            <div class="cta-group">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20integrate%20Smoobu%20with%20WhatsApp%20using%20HeyDoot%20API"
                    class="btn btn-smoobu btn-lg"><i class="fab fa-whatsapp"></i> Contact Sales</a>
                <a href="<?php echo BASE_URL; ?>/services/smoobu.php" class="btn btn-secondary btn-lg"><i
                        class="fas fa-code"></i> API Documentation</a>
            </div>
            <div class="visual-stage" style="margin-top: 20px;">
                <div class="float-card card-1">
                    <i class="fas fa-code" style="color:#F59E0B; font-size: 22px;"></i>
                    <span>POST /api/send</span>
                </div>
                <div class="float-card card-2">
                    <i class="fas fa-exchange-alt" style="color:#25D366;"></i>
                    <span>Smoobu → HeyDoot API → WhatsApp</span>
                </div>
                <div class="float-card card-3"><i class="fab fa-whatsapp" style="color:#25D366; font-size: 22px;"></i>
                    New Booking → WhatsApp</div>
                <div class="float-card card-4"><i class="fas fa-times-circle" style="color:#e74c3c;"></i> Cancellation
                    Alerts</div>
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
                        <p style="color: #aaa; margin-top: 16px;">Your application → HeyDoot API → WhatsApp</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <!-- API Status Banner -->
            <div
                style="background: linear-gradient(105deg, #eef2ff 0%, #e0e7ff 100%); border-left: 5px solid #1E3A5F; border-radius: 20px; padding: 20px 28px; margin-bottom: 48px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                <div>
                    <i class="fas fa-cloud-upload-alt" style="color: #1E3A5F; margin-right: 12px;"></i>
                    <strong>API Service Status:</strong>
                    <span style="color: #4b5563;">HeyDoot provides the WhatsApp API layer. Your Smoobu instance or
                        custom app connects to our endpoints to send/receive messages.</span>
                </div>
            </div>

            <div style="display: flex; gap: 48px; flex-wrap: wrap;">
                <aside class="sidebar-card">
                    <div
                        style="position: sticky; top: 100px; background: white; border-radius: 28px; padding: 24px; box-shadow: var(--card-shadow); border: 1px solid rgba(0,0,0,0.04);">
                        <h4 style="font-weight: 700; margin-bottom: 20px; font-size: 1.1rem;"><i class="fas fa-bookmark"
                                style="color: var(--wa-teal); margin-right: 8px;"></i> On this page</h4>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
                            <li><a href="#how-it-works" style="color: #2c3e2f;"><i class="fas fa-cogs"></i> How the API
                                    Works</a></li>
                            <li><a href="#api-endpoints" style="color: #2c3e2f;"><i class="fas fa-plug"></i> API
                                    Endpoints</a></li>
                            <li><a href="#integration-steps" style="color: #2c3e2f;"><i class="fas fa-rocket"></i>
                                    Integration Steps</a></li>
                            <li><a href="#features" style="color: #2c3e2f;"><i class="fas fa-umbrella-beach"></i>
                                    Key Features</a></li>
                            <li><a href="#why-heydoot" style="color: #2c3e2f;"><i class="fas fa-star"></i> Why HeyDoot
                                    API</a></li>
                            <li><a href="#use-cases" style="color: #2c3e2f;"><i class="fas fa-briefcase"></i> Use
                                    Cases</a></li>
                            <li><a href="#faqs" style="color: #2c3e2f;"><i class="fas fa-question-circle"></i> FAQs</a>
                            </li>
                        </ul>
                        <!-- cross-link to integration page -->
                        <div style="margin-top:24px;padding-top:20px;border-top:1px solid #f0f0f0;">
                            <p style="font-size:.85rem;color:#6b7280;margin-bottom:10px;">Need API / technical docs?</p>
                            <a href="<?php echo BASE_URL; ?>/services/smoobu.php"
                                style="display:flex;align-items:center;gap:10px;background:#eef2ff;border-radius:14px;padding:12px 16px;color:#1E3A5F;font-weight:600;font-size:.9rem;text-decoration:none;">
                                <i class="fas fa-code"></i>
                                Services Page →
                            </a>
                        </div>
                    </div>
                </aside>

                <main style="flex: 2.5; min-width: 280px;">
                    <!-- How the API Works -->
                    <div id="how-it-works" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-cogs"></i></div>
                            <h2>How the HeyDoot API Works</h2>
                        </div>
                        <p style="margin-bottom: 24px;">HeyDoot is a pure API service provider. We don't offer a direct
                            Smoobu plugin — instead, we give you the API endpoints to connect <strong>your</strong>
                            Smoobu integration or custom application to WhatsApp Business.</p>
                        <div style="background: #f4f9f5; border-radius: 32px; padding: 28px; text-align: center;">
                            <div
                                style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; align-items: center;">
                                <span><i class="fas fa-calendar-check"></i> Your App / Smoobu Webhook</span>
                                <i class="fas fa-arrow-right"></i>
                                <span><i class="fas fa-code"></i> HeyDoot API Request</span>
                                <i class="fas fa-arrow-right"></i>
                                <span><i class="fab fa-whatsapp"></i> WhatsApp Message Sent</span>
                                <i class="fas fa-arrow-right"></i>
                                <span><i class="fas fa-reply"></i> Webhook to Your Server</span>
                            </div>
                        </div>
                        <div class="code-block" style="margin-top: 24px;">
                            <span style="color: #9cdcfe;">// Example: Send WhatsApp message via HeyDoot API</span><br>
                            POST /api/v1/whatsapp/send<br>
                            {<br>
                            &nbsp;&nbsp;"api_key": "your_heydoot_api_key",<br>
                            &nbsp;&nbsp;"to": "+1234567890",<br>
                            &nbsp;&nbsp;"template_name": "booking_confirmation",<br>
                            &nbsp;&nbsp;"language": "en",<br>
                            &nbsp;&nbsp;"components": [<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;{"type": "body", "parameters": [{"type": "text", "text": "John"},
                            {"type": "text", "text": "2025-12-25"}]}<br>
                            &nbsp;&nbsp;]<br>
                            }
                        </div>
                    </div>

                    <!-- API Endpoints -->
                    <div id="api-endpoints" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-plug"></i></div>
                            <h2>API Endpoints</h2>
                        </div>
                        <div class="api-endpoint automation-card">
                            <strong>POST /api/v1/whatsapp/send</strong> — Send template-based or free-form WhatsApp
                            messages
                        </div>
                        <div class="api-endpoint automation-card">
                            <strong>POST /api/v1/whatsapp/templates</strong> — Manage WhatsApp message templates
                        </div>
                        <div class="api-endpoint automation-card">
                            <strong>GET /api/v1/messages/{id}/status</strong> — Check delivery and read status
                        </div>
                        <div class="api-endpoint automation-card">
                            <strong>POST /api/v1/webhooks/register</strong> — Register your endpoint to receive incoming
                            messages
                        </div>
                        <div class="api-endpoint automation-card">
                            <strong>GET /api/v1/contacts/verify</strong> — Validate phone numbers for WhatsApp
                            compatibility
                        </div>
                        <p class="api-badge" style="margin-top: 16px;">All endpoints require API key authentication
                            (Bearer token)</p>
                    </div>

                    <!-- Integration Steps -->
                    <div id="integration-steps" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-rocket"></i></div>
                            <h2>Integration Steps for Developers</h2>
                        </div>
                        <div class="feature-grid" style="display: grid; gap: 20px;">
                            <div class="step-card automation-card">
                                <div class="step-card-header">
                                    <div class="step-num">1</div>
                                    <h3>Get API Credentials</h3>
                                </div>
                                <p>Sign up at HeyDoot and generate your API key from the dashboard.</p>
                            </div>
                            <div class="step-card automation-card">
                                <div class="step-card-header">
                                    <div class="step-num">2</div>
                                    <h3>Configure WhatsApp Templates</h3>
                                </div>
                                <p>Use our API or dashboard to create/approve WhatsApp message templates.</p>
                            </div>
                            <div class="step-card automation-card">
                                <div class="step-card-header">
                                    <div class="step-num">3</div>
                                    <h3>Connect Your Smoobu Data</h3>
                                </div>
                                <p>Use Smoobu's webhooks or API to capture reservation events (new booking, check-in,
                                    etc.).</p>
                            </div>
                            <div class="step-card automation-card">
                                <div class="step-card-header">
                                    <div class="step-num">4</div>
                                    <h3>Call HeyDoot API on Events</h3>
                                </div>
                                <p>When a Smoobu event occurs, your server calls HeyDoot's /send endpoint.</p>
                            </div>
                            <div class="step-card automation-card">
                                <div class="step-card-header">
                                    <div class="step-num">5</div>
                                    <h3>Handle Incoming Replies</h3>
                                </div>
                                <p>Set up a webhook URL to receive guest responses and forward them to your system.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Key Features Section -->
                    <div id="features" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle">
                                <i class="fas fa-umbrella-beach"></i>
                            </div>
                            <h2>Key Features</h2>
                        </div>
                        <div
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
                            <div class="use-case-card feature-card">
                                <i class="fas fa-bell"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Instant New Reservation Alerts</h3>
                                <p>Receive WhatsApp notifications whenever a new booking is received through Smoobu.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-ban" style="font-size: 32px; color: #e74c3c; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Cancellation Notifications</h3>
                                <p>Get immediate alerts when a guest cancels a reservation, allowing you to update
                                    availability quickly.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-clock"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Real-Time WhatsApp Delivery</h3>
                                <p>Notifications are delivered instantly to your preferred WhatsApp number.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-eye-slash"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">No Manual Monitoring</h3>
                                <p>Reduce the need to constantly check your Smoobu dashboard or email inbox.</p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-plug"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Easy Setup</h3>
                                <p>Connect your Smoobu account with Heydoot in just a few minutes — no coding required.
                                </p>
                            </div>
                            <div class="use-case-card feature-card">
                                <i class="fas fa-building"
                                    style="font-size: 32px; color: #1E3A5F; margin-bottom: 16px;"></i>
                                <h3 style="font-weight: 700; margin-bottom: 12px;">Multi-Property Support</h3>
                                <p>Perfect for vacation rental managers handling multiple listings and properties.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Why HeyDoot API -->
                    <div id="why-heydoot" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-star"></i></div>
                            <h2>Why Choose HeyDoot as Your API Provider</h2>
                        </div>
                        <div class="feature-grid" style="display: grid; gap: 20px;">
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-code"></i> Developer-First Design</h3>
                                <p>Clean REST API, detailed documentation, and sandbox environment for testing.</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-charging-station"></i> Scalable Infrastructure</h3>
                                <p>Handle thousands of messages per minute without performance degradation.</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-shield-alt"></i> Enterprise Security</h3>
                                <p>API key authentication, IP whitelisting, and end-to-end encryption support.</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-chart-line"></i> Delivery Analytics</h3>
                                <p>Track sent, delivered, read, and failed messages through our API.</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-headset"></i> Technical Support</h3>
                                <p>Direct support for integration engineers with SLAs for business plans.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Use Cases -->
                    <div id="use-cases" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-briefcase"></i></div>
                            <h2>API Use Cases</h2>
                        </div>
                        <div class="feature-grid" style="display: grid; gap: 20px;">
                            <div class="use-case-item feature-card">
                                <h3><i class="fas fa-address-book" style="color: #1E3A5F; font-size: 30px;"></i>
                                    <strong>Booking
                                        Confirmation API Call</strong>
                                </h3>
                                <p>Trigger from Smoobu webhook → Send WhatsApp confirmation with guest name + dates</p>
                            </div>
                            <div class="use-case-item feature-card">
                                <h3><i class="fas fa-cancel"
                                        style="color: #ce1414; font-size: 30px;"></i><strong>Booking
                                        Cancellation Alerts</strong></h3>
                                <p>Instant WhatsApp notification when a reservation is cancelled → Update staff, release
                                    calendar blocks, or offer rebooking incentives</p>
                            </div>
                            <div class="use-case-item feature-card">
                                <h3><i class="fas fa-sync" style="color: #1E3A5F; font-size: 30px;"></i>
                                    <strong>Modification & Date Change Alerts</strong>
                                </h3>
                                <p>API trigger when booking dates change → Notify housekeeping and update automated
                                    reminder schedules</p>
                            </div>
                            <!-- <div class="use-case-item feature-card">
                                <h3>🗝️ <strong>Pre-Arrival Instructions</strong></h3>
                                <p>Schedule API call 7 days before check-in → Send door codes, WiFi, directions</p>
                            </div>
                            <div class="use-case-item feature-card">
                                <h3>🛎️ <strong>Two-Way Guest Support</strong></h3>
                                <p>Receive guest replies via webhook → Route to your CRM or support desk</p>
                            </div>
                            <div class="use-case-item feature-card">
                                <h3>⭐ <strong>Review Requests</strong></h3>
                                <p>Trigger API call after checkout → Send Google/TripAdvisor review links</p>
                            </div> -->
                        </div>
                    </div>

                    <!-- FAQs -->
                    <div id="faqs" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-question-circle"></i></div>
                            <h2>API Frequently Asked Questions</h2>
                        </div>
                        <div class="faq-list">
                            <div class="faq-item">
                                <div class="faq-question">Does HeyDoot have a direct Smoobu plugin? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">No, HeyDoot is a pure API service provider. You (or your
                                    developer) build the connection between Smoobu and our API. We provide all the
                                    endpoints you need.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">How do I get my WhatsApp Business API access? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">HeyDoot provides the WhatsApp Business API connectivity. We
                                    handle the Meta provider setup — you just need a Facebook Business Manager account.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Can I use Smoobu webhooks with HeyDoot API? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Absolutely. Smoobu can send webhooks for new reservations,
                                    cancellations, and modifications. Your server then calls HeyDoot's API to send
                                    messages.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">What programming languages are supported? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Our API works with any language that can make HTTP requests
                                    (PHP, Python, Node.js, Java, Ruby, Go, etc.). We provide SDKs for popular languages.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Do you offer a sandbox environment? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Yes, we provide a complete sandbox environment with test phone
                                    numbers for integration testing before going live.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">What's the pricing model? <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">We charge per successful message sent, with volume discounts.
                                    Contact sales for detailed
                                    <span style=" color: #1E3A5F !important;">
                                        <a href="<?php echo BASE_URL; ?>/pricing.php"><strong>pricing</strong></a>
                                    </span>.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Final CTA -->
                    <div
                        style="background: linear-gradient(105deg, #eef2ff, #e0e7ff); border-radius: 36px; padding: 36px 28px; text-align: center; margin: 32px 0 24px;">
                        <i class="fas fa-code" style="font-size: 48px; color: #1E3A5F;"></i>
                        <h2 style="font-size: 2rem; font-weight: 800;">Ready to Build Your Integration?</h2>
                        <p style="margin-top: 12px;">Get API credentials, read our documentation, and connect Smoobu to
                            WhatsApp in hours, not weeks.</p>
                        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20API%20access%20for%20Smoobu%20WhatsApp%20integration"
                            class="btn btn-primary" style="background: #1E3A5F; margin-top: 20px; padding: 12px 28px;">
                            <i class="fas fa-key"></i> Request API Access
                        </a>
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
                        API reference
                    </a>

                    <a href="tel:+919718517228" class="utility-item utility-link">
                        <i class="fas fa-headset"></i>
                        Developer support
                    </a>

                    <a href="<?php echo BASE_URL; ?>/integrations/dashboard.php" class="dashboard-btn"
                        style="background: #1E3A5F; color: white;">
                        <i class="fas fa-tachometer-alt"></i>
                        API Dashboard
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include ROOT_PATH . '/components/footer.php'; ?>