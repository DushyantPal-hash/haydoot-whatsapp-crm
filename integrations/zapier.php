<?php
require_once dirname(__DIR__) . '/config.php';

$page_meta = [
    'title' => 'Zapier WhatsApp Integration | HeyDoot',
    'meta_title' => 'Zapier WhatsApp Integration – Connect Apps with WhatsApp Using HeyDoot',
    'description' => 'Connect Zapier with WhatsApp using HeyDoot. Automate notifications, lead alerts, customer updates, and multi-app workflows without coding.',

    'og_title' => 'Zapier WhatsApp Integration | HeyDoot',
    'og_description' => 'Integrate Zapier with WhatsApp using HeyDoot. Automate workflows, app notifications, lead alerts, customer updates, and business communication instantly.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations/zapier.php',

    'twitter_title' => 'Zapier WhatsApp Integration | HeyDoot',
    'twitter_description' => 'Automate WhatsApp notifications and workflows with Zapier + HeyDoot. Connect thousands of apps and streamline customer communication.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',

    'canonical' => 'https://heydoot.com/integrations/zapier.php'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => "Zapier WhatsApp Integration",
    "serviceType" => "WhatsApp Integration Service",
    "provider" => [
        "@type" => "Organization",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ],
    "description" => "Integrate Zapier with WhatsApp using HeyDoot to automate notifications, app workflows, customer communication, lead alerts, and business messaging across multiple platforms.",
    "areaServed" => "Worldwide",
    "url" => "https://heydoot.com/integrations/zapier.php",
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
    .btn-zapier {
        background: #FF4A00;
        color: white;
        box-shadow: 0 2px 8px rgba(255, 74, 0, 0.25);
    }

    .btn-zapier:hover {
        background: #e03e00;
        transform: translateY(-3px);
        box-shadow: 0 12px 22px -8px rgba(255, 74, 0, 0.35);
    }

    .zapier-accent {
        color: #FF4A00;
    }

    .setup-step {
        background: white;
        border-radius: 24px;
        padding: 24px;
        margin-bottom: 24px;
        border-left: 4px solid #FF4A00;
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
        background: #FF4A00;
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

    .zapier-code {
        background: #0f172a;
        color: #e2e8f0;
        border-radius: 16px;
        padding: 18px;
        overflow-x: auto;
        font-size: 0.82rem;
        line-height: 1.55;
        margin-top: 14px;
    }

    .zapier-code code {
        font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
    }

    .hubspot-code-1 {
        background: #0f172ad4;
        color: #e2e8f0;
        border-radius: 10px;
        padding: 2px 10px;
        overflow-x: auto;
        line-height: 1.55;
    }

    .zapier-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.88rem;
        overflow-x: auto;
        display: block;
    }

    .zapier-table th,
    .zapier-table td {
        padding: 10px;
        border: 1px solid #d7e6dc;
        text-align: left;
        vertical-align: top;
    }

    .zapier-table thead tr {
        background: #ffeee6;
    }

    .app-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        gap: 14px;
        margin-top: 14px;
    }

    .app-tile {
        background: #fff;
        border: 1px solid #f0e0d8;
        border-radius: 16px;
        padding: 16px;
        text-align: center;
        transition: all 0.2s ease;
    }

    .app-tile:hover {
        transform: translateY(-3px);
        box-shadow: var(--card-shadow);
        border-color: #FF4A00;
    }

    .app-tile i {
        font-size: 24px;
        color: #FF4A00;
        margin-bottom: 8px;
        display: block;
    }

    .app-tile span {
        font-size: 0.82rem;
        color: #4a5568;
        font-weight: 600;
    }

    .feature-card:hover {
        transform: translateY(0px) scale(1.0) !important;
    }
</style>

<main>
    <!-- Hero Section with Zapier flavor -->
    <section class="hero"
        style="background: linear-gradient(135deg, #2b1000 0%, #5a2400 100%);padding: 20px 20px 20px;">
        <div class="floating-dots"></div>
        <div style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div
                style="display: inline-block; background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); padding: 6px 16px; border-radius: 60px; margin-bottom: 0;">
                <span style="color: #ffffff; font-weight: 700; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-bolt"></i>
                    No-Code WhatsApp Automation for 6,000+ Apps
                </span>
            </div>
        </div>
    </section>

    <!-- Main Integration Container -->
    <section style="padding: 40px 0;">
        <div class="container-fluid">
            <!-- Two-column layout -->
            <div style="display: flex; gap: 48px; flex-wrap: wrap;">
                <!-- Sidebar -->
                <aside class="sidebar-card">
                    <div
                        style="position: sticky; top: 100px; background: white; border-radius: 28px; padding: 24px; box-shadow: var(--card-shadow); border: 1px solid rgba(0,0,0,0.04);">
                        <h4 style="font-weight: 700; margin-bottom: 20px; font-size: 1.1rem;"><i class="fas fa-cog"
                                style="color: #FF4A00; margin-right: 8px;"></i> On this page</h4>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px;">
                            <li><a href="#overview" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-info-circle" style="color: #FF4A00;"></i> Overview</a></li>
                            <li><a href="#popular-zaps" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-fire" style="color: #FF4A00;"></i> Popular Zaps</a></li>
                            <li><a href="#prerequisites" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-check-circle" style="color: #FF4A00;"></i> What you need</a></li>
                            <li><a href="#setup-guide" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-list-ol" style="color: #FF4A00;"></i> Step-by-step setup</a></li>
                            <li><a href="#send" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-paper-plane"
                                        style="color: #FF4A00;"></i> Sending from a Zap</a>
                            </li>
                            <li><a href="#receiving" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-inbox"
                                        style="color: #FF4A00;"></i> Receiving replies</a></li>
                            <li><a href="#errors-limits" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-exclamation-triangle" style="color: #FF4A00;"></i> Errors &amp;
                                    limits</a></li>
                            <li><a href="#go-live" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-list-check" style="color: #FF4A00;"></i> Go-live checklist</a>
                            </li>
                            <li><a href="#faq-zapier" style="color: #2c3e2f;"><i class="fas fa-question-circle"
                                        style="color: #FF4A00;"></i> FAQs</a></li>
                            <li><a href="#cta" style="color: #2c3e2f;"><i class="fas fa-rocket"
                                        style="color: #FF4A00;"></i> Get Started</a></li>
                        </ul>
                        <div style="margin-top:24px;padding-top:20px;border-top:1px solid #f0f0f0;">
                            <p style="font-size:.85rem;color:#6b7280;margin-bottom:10px;">Need API / technical docs?</p>
                            <a href="<?php echo BASE_URL; ?>/integrations/guide.php"
                                style="display:flex;align-items:center;gap:10px;background:#ffeee6;border-radius:14px;padding:12px 16px;color:#1E3A5F;font-weight:600;font-size:.9rem;text-decoration:none;">
                                <i class="fas fa-code"></i>
                                API Integration Guide →
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Main Content -->
                <main style="flex: 2.5; min-width: 280px;">
                    <!-- Status Banner -->
                    <div
                        style="background: linear-gradient(105deg, #ffeee6 0%, #fff8f5 100%); border-left: 5px solid #FF4A00; border-radius: 20px; padding: 20px 28px; margin-bottom: 48px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                        <div>
                            <i class="fas fa-check-circle" style="color: #FF4A00; margin-right: 12px;"></i>
                            <strong>HeyDoot works with Zapier via Webhooks by Zapier.</strong>
                            <span style="color: #4b5563;"> Trigger WhatsApp messages from any Zap and receive replies in
                                real time.</span>
                            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20help%20setting%20up%20the%20HeyDoot%20Zapier%20WhatsApp%20integration"
                                style="color: #FF4A00; font-weight: 600;"> Start
                                Integration →</a>
                        </div>
                        <div>
                            <a href="<?php echo BASE_URL; ?>/zapier-troubleshooting.php"
                                style="background: #f3f4f6; padding: 8px 18px; border-radius: 40px; font-size: 0.85rem;"><i
                                    class="fas fa-headset"></i> Troubleshooting: Zap not triggering?</a>
                        </div>
                    </div>
                    <!-- Overview -->
                    <div id="overview" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #ffeee6; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-info-circle" style="color: #FF4A00; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Overview</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <p style="color: #4a5568; margin-bottom: 18px;">
                                Zapier lets you connect HeyDoot to <strong>6,000+ apps</strong> — Google Sheets,
                                HubSpot, Salesforce, Slack, Shopify, Calendly, Typeform and more — without writing
                                code. HeyDoot exposes a standard REST endpoint that <em>Webhooks by Zapier</em> can
                                call, so any Zap can send a WhatsApp message in seconds.
                            </p>

                            <div style="overflow-x:auto; margin-bottom: 20px;">
                                <table class="zapier-table">
                                    <thead>
                                        <tr>
                                            <th>Direction</th>
                                            <th>How</th>
                                            <th>Auth</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Zapier → HeyDoot (send)</td>
                                            <td>Webhooks by Zapier calls <code
                                                    class="hubspot-code-1">POST /v1/messages/send</code></td>
                                            <td><code
                                                    class="hubspot-code-1">Authorization: Bearer &lt;HEYDOOT_API_TOKEN&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>HeyDoot → Zapier (replies)</td>
                                            <td>HeyDoot webhook to <code
                                                    class="hubspot-code-1">https://hooks.zapier.com/hooks/catch/…</code>
                                            </td>
                                            <td>HMAC-SHA256 signature with the webhook's signing secret</td>
                                        </tr>
                                        <tr>
                                            <td>HeyDoot → Zapier (status)</td>
                                            <td><code class="hubspot-code-1">hd.message.status</code> to the same Catch
                                                Hook</td>
                                            <td>Same signing secret</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p style="color:#4a5568; font-style: italic;">
                                Two Zaps are usually enough: one to send, one to receive replies.
                            </p>
                            <p style="color:#4a5568; margin-top: 12px;">
                                No Zapier app submission is needed — <em>Webhooks by Zapier</em> handles the entire
                                integration on Zapier's side. You only need a HeyDoot API token and a WhatsApp number
                                connected through HeyDoot.
                            </p>
                        </div>
                    </div>

                    <!-- Popular Zaps -->
                    <div id="popular-zaps" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #ffeee6; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-fire" style="color: #FF4A00; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Popular Zaps with HeyDoot</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <p style="color:#4a5568; margin-bottom: 16px;">
                                These are the most common automations customers build with HeyDoot + Zapier. Each is a
                                standard "trigger in app A, action = Webhooks by Zapier → HeyDoot" Zap.
                            </p>

                            <div style="overflow-x:auto; margin-bottom: 20px;">
                                <table class="zapier-table">
                                    <thead>
                                        <tr>
                                            <th>Trigger</th>
                                            <th>WhatsApp action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>New row in Google Sheets</strong></td>
                                            <td>Send a welcome WhatsApp with the row's phone number</td>
                                        </tr>
                                        <tr>
                                            <td><strong>New Typeform response</strong></td>
                                            <td>Confirm receipt and send next-steps message</td>
                                        </tr>
                                        <tr>
                                            <td><strong>New lead in HubSpot</strong></td>
                                            <td>Send an intro WhatsApp and book-a-call link</td>
                                        </tr>
                                        <tr>
                                            <td><strong>New order in Shopify</strong></td>
                                            <td>Send order confirmation and shipping updates</td>
                                        </tr>
                                        <tr>
                                            <td><strong>New event in Calendly</strong></td>
                                            <td>Send appointment reminder and joining link</td>
                                        </tr>
                                        <tr>
                                            <td><strong>New form submission in Facebook Lead Ads</strong></td>
                                            <td>Reply within seconds with a WhatsApp message</td>
                                        </tr>
                                        <tr>
                                            <td><strong>New row in Airtable</strong></td>
                                            <td>Send a templated WhatsApp with row fields</td>
                                        </tr>
                                        <tr>
                                            <td><strong>New Stripe payment</strong></td>
                                            <td>Send a payment-received WhatsApp receipt</td>
                                        </tr>
                                        <tr>
                                            <td><strong>New Slack message in a channel</strong></td>
                                            <td>Send a WhatsApp to a customer or team member</td>
                                        </tr>
                                        <tr>
                                            <td><strong>New message received on HeyDoot (Catch Hook)</strong></td>
                                            <td>Log it in Google Sheets, Slack, Notion, etc.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="app-grid">
                                <div class="app-tile"><i class="fas fa-table"></i><span>Google Sheets</span></div>
                                <div class="app-tile"><i class="fab fa-hubspot"></i><span>HubSpot</span></div>
                                <div class="app-tile"><i class="fab fa-salesforce"></i><span>Salesforce</span></div>
                                <div class="app-tile"><i class="fab fa-slack"></i><span>Slack</span></div>
                                <div class="app-tile"><i class="fab fa-shopify"></i><span>Shopify</span></div>
                                <div class="app-tile"><i class="fas fa-calendar-check"></i><span>Calendly</span></div>
                                <div class="app-tile"><i class="fas fa-poll"></i><span>Typeform</span></div>
                                <div class="app-tile"><i class="fab fa-stripe"></i><span>Stripe</span></div>
                                <div class="app-tile"><i class="fas fa-database"></i><span>Airtable</span></div>
                                <div class="app-tile"><i class="fab fa-facebook"></i><span>Lead Ads</span></div>
                                <div class="app-tile"><i class="fas fa-envelope"></i><span>Gmail</span></div>
                                <div class="app-tile"><i class="fas fa-bolt"></i><span>6,000+ more</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Prerequisites -->
                    <div id="prerequisites" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #ffeee6; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-clipboard-list" style="color: #FF4A00; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">What you need before you start</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 14px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> <strong>HeyDoot
                                        account</strong>
                                    with API Access enabled and a <em>Read &amp; Send</em> API token</li>
                                <li style="margin-bottom: 14px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> <strong>WhatsApp
                                        Business number</strong> connected through HeyDoot (or use the shared demo
                                    number to test)</li>
                                <li style="margin-bottom: 14px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> The <strong>number
                                        ID</strong> of the WhatsApp line you'll send from
                                    (<code class="hubspot-code-1">GET /v1/numbers</code> or HeyDoot → Settings → Phones)
                                </li>
                                <li style="margin-bottom: 14px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> <strong>Zapier
                                        account</strong> — free plan works, but multi-step Zaps and premium apps need a
                                    paid plan</li>
                                <li style="display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> Optional: a <em>Webhooks by Zapier → Catch
                                        Hook</em>
                                    URL if you want to receive replies and delivery updates</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step-by-step setup -->
                    <div id="setup-guide" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #ffeee6; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-list-ol" style="color: #FF4A00; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Step-by-step setup</h2>
                        </div>

                        <!-- Step 1 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">1</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Get your HeyDoot API token
                                </h3>
                            </div>
                            <p style="color:#4a5568;">A HeyDoot admin opens <strong>Settings → Integrations → API
                                    Tokens</strong>, creates a <em>Read &amp; Send</em> token labelled
                                <em>"Zapier production"</em>, and copies it — it's shown only once.
                            </p>
                            <p style="color:#4a5568; margin-top: 8px;">Also confirm <strong>Settings → Integrations →
                                    API Access</strong> is on.</p>
                        </div>

                        <!-- Step 2 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">2</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Find your number ID</h3>
                            </div>
                            <p style="color:#4a5568;">Call <code class="hubspot-code-1">GET /v1/numbers</code> with your
                                token, or copy the
                                UUID from <strong>HeyDoot → Settings → Phones</strong>. Save it — you'll paste it into
                                every Zap.</p>
                            <div class="zapier-code"><code class="hubspot-code-1">curl https://api.yourdomain.com/v1/numbers \
  -H "Authorization: Bearer $HEYDOOT_TOKEN"</code></div>
                        </div>

                        <!-- Step 3 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">3</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Create a new Zap</h3>
                            </div>
                            <p style="color:#4a5568;">In Zapier, click <strong>Create Zap</strong>. Choose your
                                <strong>Trigger</strong> app (e.g. Google Sheets → "New Spreadsheet Row") and connect
                                the account. Test the trigger so Zapier can see sample data.
                            </p>
                        </div>

                        <!-- Step 4 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">4</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Add the Webhooks by Zapier
                                    action</h3>
                            </div>
                            <p style="color:#4a5568;">Add an action, search for <strong>Webhooks by Zapier</strong>, and
                                choose the event <strong>POST</strong>. Set:</p>
                            <div style="overflow-x:auto; margin-top: 12px;">
                                <table class="zapier-table">
                                    <thead>
                                        <tr>
                                            <th>Field</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>URL</strong></td>
                                            <td><code
                                                    class="hubspot-code-1">https://api.yourdomain.com/v1/messages/send</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Payload Type</strong></td>
                                            <td><code class="hubspot-code-1">json</code></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Data</strong></td>
                                            <td>See fields in the next step</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Headers</strong></td>
                                            <td><code class="hubspot-code-1">Authorization: Bearer hd_live_…</code> and
                                                <code class="hubspot-code-1">Content-Type: application/json</code>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">5</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Fill the request body</h3>
                            </div>
                            <p style="color:#4a5568;">In the <strong>Data</strong> section, add each field HeyDoot
                                expects. Values you pick from the trigger step become dynamic.</p>
                            <div style="overflow-x:auto; margin-top: 12px;">
                                <table class="zapier-table">
                                    <thead>
                                        <tr>
                                            <th>Key</th>
                                            <th>Value / example</th>
                                            <th>Required?</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>to class="hubspot-code-1"</code></td>
                                            <td>From trigger, e.g. <code class="hubspot-code-1">+919876543210</code>
                                            </td>
                                            <td>yes (or <code>conversation_id</code>)</td>
                                        </tr>
                                        <tr>
                                            <td><code class="hubspot-code-1">number_id</code></td>
                                            <td>Your WhatsApp line UUID</td>
                                            <td>yes with <code class="hubspot-code-1">to</code></td>
                                        </tr>
                                        <tr>
                                            <td><code class="hubspot-code-1">text</code></td>
                                            <td>Hi {{First Name}}, your order {{Order ID}} is confirmed.</td>
                                            <td>yes</td>
                                        </tr>
                                        <tr>
                                            <td><code class="hubspot-code-1">dispatch_id</code></td>
                                            <td>From trigger, e.g. <code class="hubspot-code-1">{{zap_meta_id}}</code>
                                                or a UUID from a
                                                Code step</td>
                                            <td>recommended</td>
                                        </tr>
                                        <tr>
                                            <td><code class="hubspot-code-1">user_id</code></td>
                                            <td>Zapier user or team ID</td>
                                            <td>recommended</td>
                                        </tr>
                                        <tr>
                                            <td><code class="hubspot-code-1">username</code></td>
                                            <td>Zapier automation</td>
                                            <td>recommended</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Step 6 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">6</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Test and turn on</h3>
                            </div>
                            <p style="color:#4a5568;">Click <strong>Test action</strong>. A <code
                                    class="hubspot-code-1">202 Accepted</code>
                                response means HeyDoot queued the message. Save <code
                                    class="hubspot-code-1">message_ref</code> from the
                                response if you want to track delivery later. Then publish the Zap.</p>
                            <div class="zapier-code"><code>{
  "status": "queued",
  "message_ref": "hd_4F0C9A1B7E2D3C5A6B8E9F",
  "conversation_id": "c3a1…",
  "dispatch_id": "6c0e1b2a-58f4-4b7e-9d0c-2f1a7e3b9c11"
}</code></div>
                        </div>
                    </div>

                    <!-- Sending from a Zap -->
                    <div id="send" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #ffeee6; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-paper-plane" style="color: #FF4A00; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Sending from a Zap</h2>
                        </div>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">Example 1 — Google Sheets
                            to WhatsApp</h3>
                        <p style="color:#4a5568;">Trigger: <em>Google Sheets → New Spreadsheet Row</em>. Action:
                            <em>Webhooks by Zapier → POST</em> to HeyDoot with these fields.
                        </p>
                        <div class="zapier-code"><code>{
  "to": "{{Phone}}",
  "number_id": "01976117-a906-42f2-9b23-30394341f3ff",
  "text": "Hi {{Name}}, thanks for signing up!",
  "dispatch_id": "sheet-{{Row Number}}",
  "username": "Google Sheets Zap"
}</code></div>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Example
                            2 — Shopify order confirmation</h3>
                        <p style="color:#4a5568;">Trigger: <em>Shopify → New Paid Order</em>. Action: Webhooks by Zapier
                            → POST.</p>
                        <div class="zapier-code"><code>{
  "to": "{{Shipping Phone}}",
  "number_id": "01976117-a906-42f2-9b23-30394341f3ff",
  "text": "Hi {{Customer First Name}}, your order #{{Order Number}} is confirmed. Tracking: {{Tracking URL}}",
  "dispatch_id": "shopify-{{Order ID}}",
  "username": "Shopify Zap"
}</code></div>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Sending
                            a file or attachment</h3>
                        <p style="color:#4a5568;">Add an <code class="hubspot-code-1">attachment</code> object with a
                            public HTTPS URL:</p>
                        <div class="zapier-code"><code>{
  "to": "{{Phone}}",
  "number_id": "01976117-a906-42f2-9b23-30394341f3ff",
  "text": "Your invoice is attached.",
  "attachment": {
    "kind": "document",
    "source_url": "{{Invoice PDF URL from Dropbox / Drive}}",
    "file_name": "Invoice-{{Order ID}}.pdf"
  }
}</code></div>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Why
                            <code class="hubspot-code-1">dispatch_id</code> matters in Zaps
                        </h3>
                        <ul style="color:#4a5568; padding-left: 20px;">
                            <li style="margin-bottom: 8px;">Zapier retries failed actions automatically. If you retry
                                without a <code class="hubspot-code-1">dispatch_id</code>, the recipient may get the
                                same WhatsApp twice.</li>
                            <li style="margin-bottom: 8px;">Use a value that's unique per record and stable across
                                retries — for example <code class="hubspot-code-1">shopify-{{Order ID}}</code> or
                                <code class="hubspot-code-1">sheet-{{Row Number}}</code>.
                            </li>
                            <li>If you need a proper UUID, add a <em>Code by Zapier</em> step before the Webhook and
                                generate one from a stable input.</li>
                        </ul>

                        <div class="zapier-code">
                            <code>// Code by Zapier (JavaScript) — deterministic UUID
const crypto = require('crypto');
const input = `${inputData.order_id}`;
const h = crypto.createHash('sha256').update(input).digest('hex');
output = { dispatch_id: `${h.slice(0,8)}-${h.slice(8,12)}-4${h.slice(13,16)}-a${h.slice(17,20)}-${h.slice(20,32)}` };</code>
                        </div>
                    </div>

                    <!-- Receiving replies -->
                    <div id="receiving" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #ffeee6; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-inbox" style="color: #FF4A00; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Receiving replies and status updates</h2>
                        </div>

                        <p style="color:#4a5568;">To act on incoming WhatsApp replies, use a separate Zap:
                            <em>Webhooks by Zapier → Catch Hook</em> as the trigger, then any app as the action (Google
                            Sheets, Slack, HubSpot, etc.).
                        </p>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 24px; margin-bottom: 12px;">Create
                            the Catch Hook Zap</h3>
                        <ol style="color:#4a5568; padding-left: 20px;">
                            <li style="margin-bottom: 6px;">Create a new Zap. Trigger: <strong>Webhooks by Zapier →
                                    Catch Hook</strong>. Copy the URL Zapier gives you (it looks like
                                <code class="hubspot-code-1">https://hooks.zapier.com/hooks/catch/…</code>).
                            </li>
                            <li style="margin-bottom: 6px;">In Zapier, click <em>Test trigger</em> once so it's waiting
                                for a sample.</li>
                            <li style="margin-bottom: 6px;">Ask your HeyDoot admin to add that URL in
                                <strong>HeyDoot → Settings → Integrations → Webhooks</strong>, subscribing to
                                <code class="hubspot-code-1">hd.message.received</code> and <code
                                    class="hubspot-code-1">hd.message.status</code>.
                            </li>
                            <li style="margin-bottom: 6px;">Send a test WhatsApp to your number. The event arrives in
                                Zapier within seconds.</li>
                            <li>Add an action (e.g. Google Sheets → Create Row) using the fields from the payload.</li>
                        </ol>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Payload
                            fields you can map</h3>
                        <div style="overflow-x:auto;">
                            <table class="zapier-table">
                                <thead>
                                    <tr>
                                        <th>Field</th>
                                        <th>Meaning</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="hubspot-code-1">event</code></td>
                                        <td><code class="hubspot-code-1">hd.message.received</code> or <code
                                                class="hubspot-code-1">hd.message.status</code></td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">message_ref</code></td>
                                        <td>Unique ID for the message</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">conversation_id</code></td>
                                        <td>Chat ID — reuse it to reply in the same thread</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">number_id</code></td>
                                        <td>WhatsApp line the message came into</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">from</code></td>
                                        <td>Sender's phone digits (no <code>+</code>)</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">text</code></td>
                                        <td>Message body</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">sender_name</code></td>
                                        <td>WhatsApp profile name</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">has_media</code></td>
                                        <td>true if a file/image was sent</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">status</code></td>
                                        <td>For status events: <code class="hubspot-code-1">sent</code>, <code
                                                class="hubspot-code-1">delivered</code>,
                                            <code class="hubspot-code-1">read</code>, <code
                                                class="hubspot-code-1">failed</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">received_at</code></td>
                                        <td>ISO-8601 UTC timestamp</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="feature-card"
                            style="background: #fff8f5; border-radius: 20px; padding: 20px; margin-top: 20px; border-left: 4px solid #FF4A00;">
                            <p style="color:#7a3300; margin: 0;"><strong>Note:</strong> Zapier's Catch Hook does not
                                verify signatures. If you need to be sure events came from HeyDoot, put your own
                                endpoint in between (Node.js/Python relay from the <a
                                    href="<?php echo BASE_URL; ?>/integrations/guide.php"
                                    style="color:#FF4A00; font-weight:600;">API guide</a>), verify the HMAC, then call
                                Zapier's hook from there.</p>
                        </div>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Replying
                            to a WhatsApp from a Zap</h3>
                        <p style="color:#4a5568;">Save <code class="hubspot-code-1">conversation_id</code> from the
                            inbound event. Then, in
                            another Zap (or the same one, chained), call Webhooks by Zapier → POST with just the chat
                            ID:</p>
                        <div class="zapier-code"><code>{
  "conversation_id": "{{conversation_id from Catch Hook}}",
  "text": "Thanks for your reply! A human will be with you shortly.",
  "username": "Zapier auto-reply"
}</code></div>
                    </div>

                    <!-- Errors & limits -->
                    <div id="errors-limits" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #ffeee6; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-exclamation-triangle" style="color: #FF4A00; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Errors, limits and retries</h2>
                        </div>

                        <p style="color:#4a5568;">HeyDoot returns standard JSON errors. Zapier shows them in the Zap
                            run history — check there first when a Zap doesn't fire.</p>

                        <div style="overflow-x:auto; margin-top: 16px;">
                            <table class="zapier-table">
                                <thead>
                                    <tr>
                                        <th>HTTP</th>
                                        <th>Error</th>
                                        <th>Cause &amp; fix</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>400</td>
                                        <td>
                                            <code class="hubspot-code-1">invalid_request</code>, <code
                                                class="hubspot-code-1">invalid_recipient</code>
                                        </td>
                                        <td>Bad phone, missing field — check the mapping and make sure the phone
                                            includes
                                            the country code</td>
                                    </tr>
                                    <tr>
                                        <td>401</td>
                                        <td><code class="hubspot-code-1">unauthorized</code></td>
                                        <td>Token missing, wrong or revoked — re-paste the <code
                                                class="hubspot-code-1">Authorization</code>
                                            header</td>
                                    </tr>
                                    <tr>
                                        <td>402</td>
                                        <td><code class="hubspot-code-1">api_quota_exceeded</code></td>
                                        <td>Plan quota used up — wait for <code class="hubspot-code-1">resets_at</code>
                                            or upgrade</td>
                                    </tr>
                                    <tr>
                                        <td>403</td>
                                        <td><code class="hubspot-code-1">license_inactive</code>, <code
                                                class="hubspot-code-1">https_required</code></td>
                                        <td>Plan expired, or the URL isn't HTTPS</td>
                                    </tr>
                                    <tr>
                                        <td>422</td>
                                        <td><code class="hubspot-code-1">recipient_opted_out</code></td>
                                        <td>Contact is on Do-Not-Contact — don't retry</td>
                                    </tr>
                                    <tr>
                                        <td>429</td>
                                        <td><code class="hubspot-code-1">rate_limited</code></td>
                                        <td>Over 600 requests/minute — Zapier will retry automatically</td>
                                    </tr>
                                    <tr>
                                        <td>502 / 503</td>
                                        <td><code class="hubspot-code-1">connector_error</code>, <code
                                                class="hubspot-code-1">api_disabled</code></td>
                                        <td>Temporary — retry with the same <code
                                                class="hubspot-code-1">dispatch_id</code>; ask the admin to
                                            re-enable API Access</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Zapier
                            task usage</h3>
                        <ul style="color:#4a5568; padding-left: 20px;">
                            <li style="margin-bottom: 8px;">Every Zap run costs <strong>1 task per action step</strong>.
                                A two-step Zap (trigger + Webhook) uses 1 task per message sent.</li>
                            <li style="margin-bottom: 8px;">Inbound events (Catch Hook) are free — they don't consume
                                tasks, but the action step after them does.</li>
                            <li>Set Zap filters (<em>Filter by Zapier</em>) so you don't send a WhatsApp for every row —
                                only the ones that matter.</li>
                        </ul>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Rate
                            limits &amp; batching</h3>
                        <ul style="color:#4a5568; padding-left: 20px;">
                            <li style="margin-bottom: 8px;">Zapier runs can burst when many triggers fire at once. Use
                                <strong>Zapier's built-in delay</strong> or split into chunks if you regularly exceed
                                600 requests/minute.
                            </li>
                            <li>For very large sends, use a Zap that writes rows to a queue (Sheets, Airtable) and a
                                separate scheduled Zap that sends 20–30/minute with a Delay step between them.</li>
                        </ul>
                    </div>

                    <!-- Go-live checklist -->
                    <div id="go-live" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #ffeee6; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-list-check" style="color: #FF4A00; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Go-live checklist</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> A dedicated HeyDoot API
                                    token for Zapier, stored in a Zapier Connection or a shared secret — never inline
                                    in a public Zap template</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> The token is
                                    <em>Read &amp; Send</em>, has a sensible expiry, and is easy to rotate
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> Every send Zap
                                    includes a stable <code class="hubspot-code-1">dispatch_id</code> so retries don't
                                    duplicate</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> Phone values in the
                                    trigger always include the country code (<code class="hubspot-code-1">+91…</code>)
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> Every send Zap fills
                                    in <code class="hubspot-code-1">user_id</code> / <code
                                        class="hubspot-code-1">username</code> so HeyDoot reports show who sent
                                    what</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> Inbound Zaps use Catch
                                    Hook and map fields (message, phone, name) into the target app</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> Filters are set so
                                    Zaps don't spam contacts on every trigger</li>
                                <li style="display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> You've enabled Zapier error notifications so you
                                    know if a Zap ever fails</li>
                            </ul>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div id="faq-zapier" style="margin-top: 48px;">
                        <h3 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 24px;"><i
                                class="fas fa-question-circle" style="color: #FF4A00;"></i> FAQs</h3>

                        <div class="faq-item">
                            <div class="faq-question">Is there an official HeyDoot app in Zapier? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Not yet — the integration works through <strong>Webhooks by
                                    Zapier</strong>, which is a built-in Zapier app. You don't need a HeyDoot app
                                listing
                                to send or receive messages; the Zap calls HeyDoot's REST API directly.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Do I need a paid Zapier plan? <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">A free Zapier plan can run two-step Zaps (trigger + Webhook) and
                                supports Catch Hooks. Multi-step Zaps, paths, filters and some premium trigger apps need
                                a paid plan.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">How do I receive WhatsApp replies in Zapier? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Create a Zap with the trigger <strong>Webhooks by Zapier → Catch
                                    Hook</strong>. Ask your HeyDoot admin to add the generated hook URL in
                                <strong>Settings → Integrations → Webhooks</strong> and subscribe to
                                <code class="hubspot-code-1">hd.message.received</code>. The payload arrives as JSON and
                                maps to any action
                                step.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">How do I avoid duplicate WhatsApps when Zapier retries? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Send a <code class="hubspot-code-1">dispatch_id</code> with every
                                message. Zapier retries
                                failed actions with the same input, so a stable ID like
                                <code class="hubspot-code-1">shopify-{{Order ID}}</code> or <code
                                    class="hubspot-code-1">sheet-{{Row Number}}</code> ensures the
                                recipient gets one message even if Zapier retries.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Can I send images, PDFs or audio from a Zap? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Yes. Add an <code class="hubspot-code-1">attachment</code> object
                                with
                                <code class="hubspot-code-1">kind</code> (<code class="hubspot-code-1">image</code>,
                                <code class="hubspot-code-1">document</code>, <code class="hubspot-code-1">audio</code>,
                                <code class="hubspot-code-1">video</code>) and either a public HTTPS <code
                                    class="hubspot-code-1">source_url</code> or a base64
                                <code class="hubspot-code-1">file_base64</code>. Maximum 16 MB.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Do Catch Hook events count against my Zapier task quota? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">The trigger is free. Only the action steps that run after it — for
                                example a Google Sheets row or Slack message — count as tasks.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">What if my WhatsApp line gets disconnected? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Subscribe a Catch Hook to <code
                                    class="hubspot-code-1">hd.number.disconnected</code> and
                                send yourself an alert (email, Slack). Nothing can be sent until the line is
                                reconnected in HeyDoot.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Is there a free trial available? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Yes, we offer a 14-day free trial with full Zapier integration
                                features.</div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div id="cta"
                        style="background: linear-gradient(115deg, #2b1000, #5a2400); border-radius: 32px; padding: 48px; text-align: center; margin: 56px 0 32px; color: white;">
                        <i class="fab fa-whatsapp" style="font-size: 56px; color: #25D366; margin-bottom: 16px;"></i>
                        <h2 style="font-size: 2rem; font-weight: 800;">Connect 6,000+ Apps to WhatsApp</h2>
                        <p style="margin-top: 16px; opacity: 0.9;">Create a Zap, paste your HeyDoot token, and start
                            sending WhatsApp messages from any tool your team already uses.</p>
                        <div
                            style="display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; margin-top: 32px;">
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-bolt"></i> Webhooks by Zapier</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-paper-plane"></i> Send Messages</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-inbox"></i> Catch Replies</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-shield-alt"></i> Idempotent Sends</span>
                        </div>
                        <div style="margin-top: 36px;">
                            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20the%20HeyDoot%20Zapier%20WhatsApp%20integration"
                                class="btn btn-lg" style="background: white; color: #FF4A00; font-weight: 700;"><i
                                    class="fab fa-whatsapp"></i> Get Started Today</a>
                        </div>
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

                    <a href="<?php echo BASE_URL; ?>/integrations/guide.php" class="utility-item utility-link">
                        <i class="fas fa-code"></i>
                        API Docs
                    </a>

                    <a href="tel:+919718517228" class="utility-item utility-link">
                        <i class="fas fa-headset"></i>
                        Support
                    </a>

                    <a href="<?php echo BASE_URL; ?>/integrations/dashboard.php" class="dashboard-btn">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>

                </div>
            </div>
        </div>
    </section>
</main>

<?php include ROOT_PATH . '/components/footer.php'; ?>