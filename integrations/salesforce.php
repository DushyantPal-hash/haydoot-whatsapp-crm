<?php
require_once dirname(__DIR__) . '/config.php';
$page_meta = [
    'title' => 'Salesforce WhatsApp Integration | HeyDoot',
    'meta_title' => 'Salesforce WhatsApp Integration – Send & Receive WhatsApp from Apex with HeyDoot',
    'description' => 'Connect Salesforce with WhatsApp using HeyDoot. Send WhatsApp from Apex with HMAC-signed requests, receive replies and delivery 
    updates through a signed webhook, and start HeyDoot automations from any record.',
    'og_title' => 'Salesforce WhatsApp Integration | HeyDoot',
    'og_description' => 'Integrate Salesforce with WhatsApp using HeyDoot. Apex sends signed messages; HeyDoot pushes replies, delivery ticks and 
    automation answers back into Salesforce.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations/salesforce.php',
    'twitter_title' => 'Salesforce WhatsApp Integration | HeyDoot',
    'twitter_description' => 'Send WhatsApp from Apex with HeyDoot and receive replies through signed webhooks. Includes automations for lead intake, 
    demos and onboarding.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',
    'canonical' => 'https://heydoot.com/integrations/salesforce.php'
];
$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => "Salesforce WhatsApp Integration",
    "serviceType" => "WhatsApp Integration Service",
    "provider" => [
        "@type" => "Organization",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ],
    "description" => "HeyDoot Salesforce WhatsApp Integration connects Salesforce with WhatsApp. Apex sends HMAC-signed messages; 
    HeyDoot pushes replies, delivery statuses and automation answers back into Salesforce through signed webhooks.",
    "areaServed" => "Worldwide",
    "url" => "https://heydoot.com/integrations/salesforce.php",
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
    .btn-sf {
        background: #00A1E0;
        color: white;
        box-shadow: 0 2px 8px rgba(0, 161, 224, 0.25);
    }

    .btn-sf:hover {
        background: #0085ba;
        transform: translateY(-3px);
        box-shadow: 0 12px 22px -8px rgba(0, 161, 224, 0.35);
    }

    .sf-accent {
        color: #00A1E0;
    }

    .setup-step {
        background: white;
        border-radius: 24px;
        padding: 24px;
        margin-bottom: 24px;
        border-left: 4px solid #00A1E0;
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
        background: #00A1E0;
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

    .sf-code {
        background: #0f172a;
        color: #e2e8f0;
        border-radius: 16px;
        padding: 18px;
        overflow-x: auto;
        font-size: 0.82rem;
        line-height: 1.55;
        margin-top: 14px;
    }

    .sf-code code {
        font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
    }

    .sf-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.88rem;
        overflow-x: auto;
        display: block;
    }

    .sf-table th,
    .sf-table td {
        padding: 10px;
        border: 1px solid #d7e6dc;
        text-align: left;
        vertical-align: top;
    }

    .sf-table thead tr {
        background: #e6f4fb;
    }

    .feature-card:hover {
        transform: translateY(0px) scale(1.0) !important;
    }

    .hubspot-code-1 {
        background: #0f172ad4;
        color: #e2e8f0;
        border-radius: 10px;
        padding: 2px 10px;
        overflow-x: auto;
        line-height: 1.55;
    }
</style>

<main>
    <!-- Hero Section with Salesforce flavor -->
    <section class="hero"
        style="background: linear-gradient(135deg, #032d42 0%, #0a4a6b 100%);padding: 20px 20px 20px;">
        <div class="floating-dots"></div>
        <div style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div style="display: inline-block; background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); padding: 6px 16px; 
                border-radius: 60px; margin-bottom: 0;">
                <span style="color: #ffffff; font-weight: 700; display: flex; align-items: center; gap: 10px;">
                    <i class="fab fa-salesforce"></i>
                    Apex + Signed Webhooks for Salesforce
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
                    <div style="position: sticky; top: 100px; background: white; border-radius: 28px; padding: 24px; 
                        box-shadow: var(--card-shadow); border: 1px solid rgba(0,0,0,0.04);">
                        <h4 style="font-weight: 700; margin-bottom: 20px; font-size: 1.1rem;">
                            <i class="fas fa-cog" style="color: #00A1E0; margin-right: 8px;"></i> On this page
                        </h4>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px;">
                            <li>
                                <a href="#overview" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-info-circle" style="color: #00A1E0;"></i> Overview
                                </a>
                            </li>
                            <li>
                                <a href="#prerequisites" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-check-circle" style="color: #00A1E0;"></i> What you need
                                </a>
                            </li>
                            <li>
                                <a href="#setup-guide" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-list-ol" style="color: #00A1E0;"></i> Credentials &amp; setup
                                </a>
                            </li>
                            <li>
                                <a href="#sending" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-paper-plane" style="color: #00A1E0;"></i> Sending from Salesforce
                                </a>
                            </li>
                            <li>
                                <a href="#receiving" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-inbox" style="color: #00A1E0;"></i> Receiving events
                                </a>
                            </li>
                            <li>
                                <a href="#user-metrics" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-user" style="color: #00A1E0;"></i> User attribution
                                </a>
                            </li>
                            <li>
                                <a href="#errors-limits" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-exclamation-triangle" style="color: #00A1E0;"></i> Errors &amp;
                                    retries
                                </a>
                            </li>
                            <li>
                                <a href="#standard-api" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-code" style="color: #00A1E0;"></i> Standard REST API
                                </a>
                            </li>
                            <li>
                                <a href="#automations" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-robot" style="color: #00A1E0;"></i> HeyDoot automations
                                </a>
                            </li>
                            <li>
                                <a href="#go-live" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-list-check" style="color: #00A1E0;"></i> Go-live checklist
                                </a>

                            </li>
                            <li>
                                <a href="#faq-sf" style="color: #2c3e2f;">
                                    <i class="fas fa-question-circle" style="color: #00A1E0;"></i> FAQs
                                </a>
                            </li>
                            <li>
                                <a href="#cta" style="color: #2c3e2f;">
                                    <i class="fas fa-rocket" style="color: #00A1E0;"></i> Get Started
                                </a>
                            </li>
                        </ul>
                        <div style="margin-top:24px;padding-top:20px;border-top:1px solid #f0f0f0;">
                            <p style="font-size:.85rem;color:#6b7280;margin-bottom:10px;">Need API / technical docs?</p>
                            <a href="<?php echo BASE_URL; ?>/services/salesforce.php" style="display:flex;align-items:center;gap:10px;background:#e6f4fb;border-radius:14px;
                                padding:12px 16px;color:#1E3A5F;font-weight:600;font-size:.9rem;text-decoration:none;">
                                <i class="fas fa-code"></i> Services Page →
                            </a>
                        </div>
                    </div>
                </aside>
                <!-- Main Content -->
                <main style="flex: 2.5; min-width: 280px;">
                    <!-- Status Banner -->
                    <div style="background: linear-gradient(105deg, #e6f4fb 0%, #f5fbfe 100%); border-left: 5px solid #00A1E0; 
                        border-radius: 20px; padding: 20px 28px; margin-bottom: 48px; display: flex; justify-content: space-between; align-items: center; 
                        flex-wrap: wrap; gap: 16px;">
                        <div>
                            <i class="fas fa-check-circle" style="color: #00A1E0; margin-right: 12px;"></i>
                            <strong>Salesforce connects to HeyDoot in two directions.</strong>
                            <span style="color: #4b5563;">
                                Apex sends signed WhatsApp messages; HeyDoot posts replies and delivery updates to an
                                Apex <code class="hubspot-code-1">@RestResource</code>.
                            </span>
                            <a href="https://wa.me/
                            <?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20help%20setting%20up%20the%20HeyDoot%20Salesforce%20WhatsApp%20integration"
                                style="color: #00A1E0; font-weight: 600;"> Start Integration →
                            </a>
                        </div>
                        <div>
                            <a href="<?php echo BASE_URL; ?>/salesforce-troubleshooting.php"
                                style="background: #f3f4f6; padding: 8px 18px; border-radius: 40px; font-size: 0.85rem;">
                                <i class="fas fa-headset"></i> Troubleshooting: Messages not sending?
                            </a>
                        </div>
                    </div>
                    <!-- Overview -->
                    <div id="overview" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="background: #e6f4fb; width: 48px; height: 48px; border-radius: 28px; display: flex; 
                                align-items: center; justify-content: center;">
                                <i class="fas fa-info-circle" style="color: #00A1E0; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Overview</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <p style="color: #4a5568; margin-bottom: 18px;">
                                Salesforce connects to HeyDoot in two directions: Apex sends WhatsApp messages through a
                                signed HeyDoot endpoint, and HeyDoot pushes replies and delivery updates back to a
                                Salesforce REST endpoint by webhook.
                            </p>
                            <div style="overflow-x:auto; margin-bottom: 20px;">
                                <table class="sf-table">
                                    <thead>
                                        <tr>
                                            <th>Direction</th>
                                            <th>How</th>
                                            <th>Auth</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Salesforce → HeyDoot (send)</td>
                                            <td>Apex callout to <code
                                                    class="hubspot-code-1">POST /v1/integrations/salesforce/reply</code>
                                            </td>
                                            <td>HMAC-SHA256 signature with a shared secret</td>
                                        </tr>
                                        <tr>
                                            <td>HeyDoot → Salesforce (events)</td>
                                            <td>HeyDoot calls your Apex <code
                                                    class="hubspot-code-1">@RestResource</code></td>
                                            <td>HMAC-SHA256 signature with the webhook's signing secret, optional
                                                AES-256-CBC payload encryption</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p style="color:#4a5568; font-style: italic;">
                                Salesforce sends signed requests; HeyDoot answers with signed webhooks — both
                                directions.
                            </p>
                            <p style="color:#4a5568; margin-top: 12px;">
                                The send endpoint is built for Salesforce: it takes Salesforce user details, sends
                                synchronously, and its encryption matches Apex's built-in Crypto class. <strong>No
                                    HeyDoot API token is needed for sending.</strong>
                            </p>
                        </div>
                    </div>
                    <!-- Prerequisites -->
                    <div id="prerequisites" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="background: #e6f4fb; width: 48px; height: 48px; border-radius: 28px; display: flex; 
                                align-items: center; justify-content: center;">
                                <i class="fas fa-clipboard-list" style="color: #00A1E0; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">What you need before you start</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 14px; display: flex; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: #00A1E0;"></i>
                                    Base URL of the HeyDoot API: <code
                                        class="hubspot-code-1">https://&lt;HEYDOOT_API_BASE_URL&gt;</code> (from
                                    the HeyDoot team)
                                </li>
                                <li style="margin-bottom: 14px; display: flex; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: #00A1E0;"></i>
                                    <span>
                                        <strong>Salesforce bridge secret</strong> (<code
                                            class="hubspot-code-1">SALESFORCE_HMAC_SECRET</code>):
                                        a shared secret configured on the HeyDoot server. The HeyDoot team gives it to
                                        you once.
                                    </span>
                                </li>
                                <li style="margin-bottom: 14px; display: flex; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: #00A1E0;"></i>
                                    <span>
                                        <strong>Number ID</strong>: the UUID of the WhatsApp line to send from (HeyDoot
                                        admin → Settings → Phones, or <code
                                            class="hubspot-code-1">GET /v1/numbers</code>)
                                    </span>
                                </li>
                                <li style="margin-bottom: 14px; display: flex; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: #00A1E0;"></i>
                                    <span>
                                        <strong>Webhook signing secret</strong> (and encryption key, if used): shown
                                        once when a HeyDoot admin registers your Salesforce endpoint as a webhook
                                    </span>
                                </li>
                                <li style="display: flex; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: #00A1E0;"></i>
                                    A Salesforce org where you can deploy Apex classes,
                                    Remote Site Settings or Named Credentials, and a public Site for the inbound REST
                                    endpoint
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Credentials & setup -->
                    <div id="setup-guide" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="background: #e6f4fb; width: 48px; height: 48px; border-radius: 28px; display: flex; 
                                align-items: center; justify-content: center;">
                                <i class="fas fa-list-ol" style="color: #00A1E0; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">
                                Credentials and Salesforce setup
                            </h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:18px;">
                            Store every HeyDoot value in Salesforce configuration, never in Apex source: secrets in
                            code end up in version control and in every sandbox copy.
                        </p>
                        <!-- Step 1 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">1</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Allow the callout</h3>
                            </div>
                            <p>
                                Create a <strong>Named Credential</strong> (recommended) or a <strong>Remote Site
                                    Setting</strong> for <code
                                    class="hubspot-code-1">https://&lt;HEYDOOT_API_BASE_URL&gt;</code>. Without it,
                                Apex callouts fail with <em>Unauthorized endpoint</em>.
                            </p>
                        </div>
                        <!-- Step 2 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">2</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Store the secrets</h3>
                            </div>
                            <p>
                                Store them in a protected <strong>Custom Metadata Type</strong> or a
                                <strong>Protected Custom Setting</strong>, for example
                                <code class="hubspot-code-1">HeyDoot_Config__mdt</code> with these fields:
                            </p>
                            <div style="overflow-x:auto; margin-top:12px;">
                                <table class="sf-table">
                                    <thead>
                                        <tr>
                                            <th>Field</th>
                                            <th>Value</th>
                                            <th>Used for</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code class="hubspot-code-1">Base_URL__c</code></td>
                                            <td><code class="hubspot-code-1">https://&lt;HEYDOOT_API_BASE_URL&gt;</code>
                                            </td>
                                            <td>every callout</td>
                                        </tr>
                                        <tr>
                                            <td><code class="hubspot-code-1">Bridge_Secret__c</code></td>
                                            <td><code class="hubspot-code-1">&lt;salesforce_hmac_secret&gt;</code></td>
                                            <td>signing outgoing sends</td>
                                        </tr>
                                        <tr>
                                            <td><code class="hubspot-code-1">Number_Id__c</code></td>
                                            <td><code class="hubspot-code-1">&lt;number_id&gt;</code></td>
                                            <td>the WhatsApp line to send from</td>
                                        </tr>
                                        <tr>
                                            <td><code class="hubspot-code-1">Webhook_Secret__c</code></td>
                                            <td><code class="hubspot-code-1">&lt;webhook_signing_secret&gt;</code></td>
                                            <td>verifying incoming webhooks</td>
                                        </tr>
                                        <tr>
                                            <td><code class="hubspot-code-1">Webhook_Key__c</code></td>
                                            <td><code class="hubspot-code-1">&lt;webhook_encryption_key&gt;</code> (64
                                                hex characters)</td>
                                            <td>decrypting webhooks, only if encryption is on</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">3</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">
                                    Expose the inbound endpoint
                                </h3>
                            </div>
                            <p>
                                Create a <strong>Salesforce Site</strong> (or Experience Cloud site) and grant its guest
                                user access to the webhook Apex class. HeyDoot calls it at
                                <code
                                    class="hubspot-code-1">https://&lt;YOUR_SALESFORCE_SITE_DOMAIN&gt;/services/apexrest/heydoot/events</code>.
                                The signature check in the class is what keeps it safe, so never skip it.
                            </p>
                        </div>

                        <!-- Step 4 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">4</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Keep sandboxes separate</h3>
                            </div>
                            <p>
                                Use a different number, webhook and secret for each sandbox, so test messages never
                                reach real contacts.
                            </p>
                        </div>

                        <p style="color:#4a5568; margin-top: 16px;">
                            The bridge secret is one value for the whole HeyDoot server. If it leaks, ask the HeyDoot
                            team to rotate it, then update <code class="hubspot-code-1">Bridge_Secret__c</code>.
                        </p>
                    </div>
                    <!-- Sending WhatsApp from Salesforce -->
                    <div id="sending" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="background: #e6f4fb; width: 48px; height: 48px; border-radius: 28px; display: flex; 
                                align-items: center; justify-content: center;">
                                <i class="fas fa-paper-plane" style="color: #00A1E0; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Sending a WhatsApp from Salesforce</h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            Apex sends a signed JSON request to
                            <code
                                class="hubspot-code-1">POST https://&lt;HEYDOOT_API_BASE_URL&gt;/v1/integrations/salesforce/reply</code>,
                            and
                            HeyDoot sends the message straight away and answers with its result.
                        </p>
                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">Request headers</h3>
                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="sf-table">
                                <thead>
                                    <tr>
                                        <th>Header</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="hubspot-code-1">Content-Type</code></td>
                                        <td><code class="hubspot-code-1">application/json</code></td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">x-hd-timestamp</code></td>
                                        <td>current Unix time in seconds, e.g. <code
                                                class="hubspot-code-1">1759737600</code></td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">x-hd-signature</code></td>
                                        <td>lowercase hex of
                                            <code
                                                class="hubspot-code-1">HMAC-SHA256(&lt;SALESFORCE_HMAC_SECRET&gt;, &lt;timestamp&gt;.&lt;raw body&gt;)</code>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            HeyDoot rejects a timestamp more than 300 seconds away from its clock, so a captured request
                            can't be replayed later.
                        </p>
                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">Request body</h3>
                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="sf-table">
                                <thead>
                                    <tr>
                                        <th>Field</th>
                                        <th>Required</th>
                                        <th>Rules / meaning</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="hubspot-code-1">number_id</code></td>
                                        <td>yes</td>
                                        <td>UUID — WhatsApp line to send from</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">to</code></td>
                                        <td>one of <code class="hubspot-code-1">to</code> / <code
                                                class="hubspot-code-1">conversation_id</code></td>
                                        <td>E.164 with <code class="hubspot-code-1">+</code>, e.g. <code
                                                class="hubspot-code-1">+919876543210</code> — starts or
                                            continues a chat by phone number</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">conversation_id</code></td>
                                        <td>one of <code class="hubspot-code-1">to</code> / <code
                                                class="hubspot-code-1">conversation_id</code></td>
                                        <td>from a webhook — replies in a known chat</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">text</code></td>
                                        <td>yes</td>
                                        <td>1–4096 characters — message text</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">dispatch_id</code></td>
                                        <td>recommended</td>
                                        <td>UUID idempotency key: a retry with the same value never sends twice</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">sf_user_id</code></td>
                                        <td>recommended</td>
                                        <td>15 or 18 character Salesforce ID — who sent it (User Metrics)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            The bridge sends text only. For images or documents, use the standard API (see
                            <a href="#standard-api" style="color:#00A1E0; font-weight:600;">
                                Optional: standard REST API
                            </a>).
                        </p>
                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">Apex example</h3>
                        <pre class="sf-code"><code>public with sharing class HeyDootSender {
    public static Map&lt;String, Object&gt; send(String toE164, String text, Id recordId) {
        HeyDoot_Config__mdt cfg = HeyDoot_Config__mdt.getInstance('Default');

        Map&lt;String, Object&gt; payload = new Map&lt;String, Object&gt;{
            'number_id'   =&gt; cfg.Number_Id__c,
            'to'          =&gt; toE164,          // or 'conversation_id' =&gt; '...'
            'text'        =&gt; text,
            'dispatch_id' =&gt; UUID.randomUUID().toString(), // store it on the record to retry safely
            'sf_user_id'  =&gt; UserInfo.getUserId(),
            'sf_user_name'=&gt; UserInfo.getName(),
            'sf_user_email'=&gt; UserInfo.getUserEmail(),
            'sf_record_id'=&gt; String.valueOf(recordId)
        };
        String body = JSON.serialize(payload);
        String ts   = String.valueOf(Datetime.now().getTime() / 1000);

        // Sign exactly the string you send: timestamp, a dot, then the body.
        Blob mac = Crypto.generateMac('hmacSHA256',
            Blob.valueOf(ts + '.' + body),
            Blob.valueOf(cfg.Bridge_Secret__c));

        HttpRequest req = new HttpRequest();
        req.setEndpoint(cfg.Base_URL__c + '/v1/integrations/salesforce/reply');
        req.setMethod('POST');
        req.setHeader('Content-Type', 'application/json');
        req.setHeader('x-hd-timestamp', ts);
        req.setHeader('x-hd-signature', EncodingUtil.convertToHex(mac));
        req.setBody(body);
        req.setTimeout(30000);

        HttpResponse res = new Http().send(req);
        Map&lt;String, Object&gt; result = (Map&lt;String, Object&gt;) JSON.deserializeUntyped(res.getBody());
        if (res.getStatusCode() &gt;= 300) {
            throw new CalloutException(res.getStatusCode() + ' ' + result.get('error')
                                       + ': ' + result.get('message'));
        }
        return result;
    }
}</code></pre>
                        <p style="color:#4a5568; margin-top: 12px;">
                            <strong>Callouts can't run after DML in the same transaction.</strong> From a trigger, call
                            <code class="hubspot-code-1">send</code> from a <code
                                class="hubspot-code-1">@future(callout=true)</code> method or a Queueable.
                        </p>
                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
                            Response (HTTP 200)
                        </h3>
                        <pre class="sf-code"><code>{
  "status": "sent",
  "message_ref": "hd_4F0C9A1B7E2D3C5A6B8E9F",
  "provider_message_id": "3EB0C7_...",
  "dispatch_id": "6c0e1b2a-58f4-4b7e-9d0c-2f1a7e3b9c11"
}</code></pre>
                        <div style="overflow-x:auto; margin-top: 16px;">
                            <table class="sf-table">
                                <thead>
                                    <tr>
                                        <th>status</th>
                                        <th>Meaning</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="hubspot-code-1">sent</code></td>
                                        <td>handed to WhatsApp</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">queued</code></td>
                                        <td>
                                            a retry with a known <code class="hubspot-code-1">dispatch_id</code>: the
                                            original message, not
                                            sent again
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">held</code></td>
                                        <td>
                                            the organisation's message monitoring is holding it for an admin to review
                                            (<code class="hubspot-code-1">reason</code> says why)
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p style="color:#4a5568; margin-top: 12px;">
                            Save <code class="hubspot-code-1">message_ref</code> on the Salesforce record. Delivery
                            updates arrive by webhook
                            with the same <code class="hubspot-code-1">message_ref</code>.
                        </p>
                    </div>
                    <!-- Receiving events in Salesforce -->
                    <div id="receiving" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="background: #e6f4fb; width: 48px; height: 48px; border-radius: 28px; display: flex; 
                                align-items: center; justify-content: center;">
                                <i class="fas fa-inbox" style="color: #00A1E0; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">
                                Receiving events in Salesforce
                            </h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            HeyDoot posts each event to your Apex REST endpoint, signed with the webhook's secret, so
                            Salesforce learns about replies and delivery without polling.
                        </p>
                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">
                            Register the webhook (HeyDoot admin)
                        </h3>
                        <ol style="color:#4a5568; padding-left: 20px;">
                            <li style="margin-bottom: 8px;">
                                In HeyDoot, open
                                <strong>Settings → Integrations → Webhooks</strong> and add
                                <code
                                    class="hubspot-code-1">https://&lt;YOUR_SALESFORCE_SITE_DOMAIN&gt;/services/apexrest/heydoot/events</code>.
                            </li>
                            <li style="margin-bottom: 8px;">
                                Pick the events (below) and, optionally, the numbers to scope it to.
                            </li>
                            <li style="margin-bottom: 8px;">
                                Turn on <strong>Encrypt payloads</strong> if you want the
                                body encrypted end to end. The format is built for Apex.
                            </li>
                            <li style="margin-bottom: 8px;">
                                Copy the signing secret and encryption key into
                                <code class="hubspot-code-1">HeyDoot_Config__mdt</code>. Both are shown once.
                            </li>
                        </ol>
                        <p style="color:#4a5568; margin-top: 10px;">
                            The URL must be public HTTPS, and the endpoint must answer
                            <strong>2xx within 8 seconds</strong>.
                        </p>
                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
                            Events Salesforce usually needs
                        </h3>
                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="sf-table">
                                <thead>
                                    <tr>
                                        <th>Event</th>
                                        <th>Sent when</th>
                                        <th>Use in Salesforce</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="hubspot-code-1">hd.message.received</code></td>
                                        <td>a contact sends a message</td>
                                        <td>log it on the Lead/Contact, notify the owner</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">hd.message.status</code></td>
                                        <td>an outgoing message is sent, delivered, read or fails</td>
                                        <td>update the delivery status by <code
                                                class="hubspot-code-1">message_ref</code></td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">hd.conversation.created</code></td>
                                        <td>a new chat starts</td>
                                        <td>create or match a Lead</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">hd.conversation.assigned</code></td>
                                        <td>a chat's owner changes</td>
                                        <td>sync the owner</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">hd.number.disconnected</code></td>
                                        <td>the WhatsApp line goes offline</td>
                                        <td>alert an admin: nothing can be sent until it reconnects</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            <code class="hubspot-code-1">hd.message.received</code> carries <code
                                class="hubspot-code-1">message_ref</code>,
                            <code class="hubspot-code-1">conversation_id</code>, <code
                                class="hubspot-code-1">number_id</code>, <code class="hubspot-code-1">from</code>
                            (digits),
                            <code class="hubspot-code-1">text</code>, <code class="hubspot-code-1">message_type</code>,
                            <code class="hubspot-code-1">sender_name</code>,
                            <code class="hubspot-code-1">has_media</code> and <code
                                class="hubspot-code-1">received_at</code>. Save
                            <code class="hubspot-code-1">conversation_id</code>: it is what you pass to the send
                            endpoint to reply in the same
                            chat.
                        </p>
                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">
                            Headers on every delivery
                        </h3>
                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="sf-table">
                                <thead>
                                    <tr>
                                        <th>Header</th>
                                        <th>Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="hubspot-code-1">x-hd-event</code></td>
                                        <td>event name, e.g. <code class="hubspot-code-1">hd.message.received</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">x-hd-timestamp</code></td>
                                        <td>Unix seconds; new on every retry</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">x-hd-signature</code></td>
                                        <td>hex
                                            <code
                                                class="hubspot-code-1">HMAC-SHA256(&lt;WEBHOOK_SIGNING_SECRET&gt;, &lt;timestamp&gt;.&lt;raw body&gt;)</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">x-hd-encryption</code></td>
                                        <td><code class="hubspot-code-1">aes-256-cbc</code>, only when encryption is on
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
                            Apex REST receiver
                        </h3>
                        <pre class="sf-code"><code>@RestResource(urlMapping='/heydoot/events')
global without sharing class HeyDootWebhook {

    @HttpPost
    global static void receive() {
        RestRequest  req = RestContext.request;
        RestResponse res = RestContext.response;
        HeyDoot_Config__mdt cfg = HeyDoot_Config__mdt.getInstance('Default');

        String ts  = header(req, 'x-hd-timestamp');
        String sig = header(req, 'x-hd-signature');
        String raw = req.requestBody.toString(); // exact bytes as received

        // 1. Reject old requests (replay protection).
        Long now = Datetime.now().getTime() / 1000;
        if (ts == null || Math.abs(now - Long.valueOf(ts)) &gt; 300) {
            res.statusCode = 401; return;
        }

        // 2. Verify the signature over the raw body (ciphertext when encrypted).
        Blob mac = Crypto.generateMac('hmacSHA256',
            Blob.valueOf(ts + '.' + raw),
            Blob.valueOf(cfg.Webhook_Secret__c));
        if (sig == null || EncodingUtil.convertToHex(mac) != sig) {
            res.statusCode = 401; return;
        }

        // 3. Decrypt when encryption is on: base64(iv[16] || AES-256-CBC ciphertext).
        String json = raw;
        if (header(req, 'x-hd-encryption') == 'aes-256-cbc') {
            Blob key = EncodingUtil.convertFromHex(cfg.Webhook_Key__c);
            json = Crypto.decryptWithManagedIV('AES256', key,
                       EncodingUtil.base64Decode(raw)).toString();
        }

        // 4. Acknowledge fast; do the real work asynchronously.
        System.enqueueJob(new HeyDootEventJob(json));
        res.statusCode = 200;
    }

    private static String header(RestRequest req, String name) {
        for (String k : req.headers.keySet()) {
            if (k.equalsIgnoreCase(name)) return req.headers.get(k);
        }
        return null;
    }
}</code></pre>
                        <p style="color:#4a5568; margin-top: 12px;">
                            <code class="hubspot-code-1">HeyDootEventJob</code> is your own Queueable: parse the JSON
                            with
                            <code class="hubspot-code-1">JSON.deserializeUntyped</code>, switch on its <code
                                class="hubspot-code-1">event</code> field, and update
                            records.
                        </p>
                        <p style="color:#4a5568; margin-top: 12px;">
                            <strong>Retries and duplicates.</strong> A delivery that doesn't get a 2xx is retried 6 more
                            times over about 50 minutes, then marked exhausted (an admin can resend it from HeyDoot).
                            The same event can therefore arrive twice, or out of order. De-duplicate on
                            <code class="hubspot-code-1">event</code> + <code class="hubspot-code-1">message_ref</code>
                            (+ <code class="hubspot-code-1">status</code>), and never move a
                            status backwards, e.g. from <code class="hubspot-code-1">read</code> to <code
                                class="hubspot-code-1">delivered</code>.
                        </p>
                    </div>
                    <!-- User attribution -->
                    <div id="user-metrics" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="background: #e6f4fb; width: 48px; height: 48px; border-radius: 28px; display: flex; 
                                align-items: center; justify-content: center;">
                                <i class="fas fa-user" style="color: #00A1E0; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">User attribution for User Metrics</h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            Send <code class="hubspot-code-1">sf_user_id</code>, <code
                                class="hubspot-code-1">sf_user_name</code> and <code
                                class="hubspot-code-1">sf_user_email</code> on
                            every send, so HeyDoot's User Metrics report shows each Salesforce user by name and email
                            instead of one anonymous row.
                        </p>
                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="sf-table">
                                <thead>
                                    <tr>
                                        <th>What Salesforce sends</th>
                                        <th>What User Metrics shows</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>all three fields</td>
                                        <td>the user's name, with their email underneath</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">sf_user_id</code> + <code
                                                class="hubspot-code-1">sf_user_name</code> only</td>
                                        <td>the name, with "Salesforce user · 005..." underneath</td>
                                    </tr>
                                    <tr>
                                        <td>none of them</td>
                                        <td>the message counts under "Salesforce (no user)"</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul style="color:#4a5568; padding-left: 20px;">
                            <li>
                                <code class="hubspot-code-1">UserInfo.getUserId()</code>, <code
                                    class="hubspot-code-1">UserInfo.getName()</code> and
                                <code class="hubspot-code-1">UserInfo.getUserEmail()</code> give the values for the
                                running user.
                            </li>
                            <li>
                                An invalid email makes HeyDoot reject the request with
                                <code class="hubspot-code-1">400 invalid_request</code>, so send only real addresses.
                            </li>
                            <li>
                                Attribution applies from the moment Salesforce starts sending it. Older messages keep
                                their old label.
                            </li>
                        </ul>
                    </div>
                    <!-- Errors, retries, idempotency -->
                    <div id="errors-limits" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="background: #e6f4fb; width: 48px; height: 48px; border-radius: 28px; display: flex; 
                                align-items: center; justify-content: center;">
                                <i class="fas fa-exclamation-triangle" style="color: #00A1E0; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">
                                Errors, retries and idempotency
                            </h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            Every error is JSON with an error code and a readable message. Retry only the temporary
                            ones, and always with the same <code class="hubspot-code-1">dispatch_id</code>.
                        </p>
                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="sf-table">
                                <thead>
                                    <tr>
                                        <th>HTTP</th>
                                        <th>Error</th>
                                        <th>What to do</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>400</td>
                                        <td><code class="hubspot-code-1">invalid_request</code></td>
                                        <td>a field breaks the rules above (e.g. <code class="hubspot-code-1">to</code>
                                            without
                                            <code class="hubspot-code-1">+</code>) — fix the request
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>400</td>
                                        <td><code class="hubspot-code-1">conversation_number_mismatch</code></td>
                                        <td>the chat belongs to another <code class="hubspot-code-1">number_id</code> —
                                            use the chat's own
                                            number</td>
                                    </tr>
                                    <tr>
                                        <td>401</td>
                                        <td><code class="hubspot-code-1">missing_signature</code></td>
                                        <td>a signature header is missing — add both headers</td>
                                    </tr>
                                    <tr>
                                        <td>401</td>
                                        <td><code class="hubspot-code-1">stale_timestamp</code></td>
                                        <td>timestamp more than 300 s off — sync the clock, sign just before sending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>401</td>
                                        <td><code class="hubspot-code-1">bad_signature</code></td>
                                        <td>the signature doesn't match — sign the exact body string you send, with the
                                            right secret</td>
                                    </tr>
                                    <tr>
                                        <td>403</td>
                                        <td><code class="hubspot-code-1">license_inactive</code></td>
                                        <td>the organisation can't send right now (e.g. unpaid plan) — contact the
                                            HeyDoot admin</td>
                                    </tr>
                                    <tr>
                                        <td>404</td>
                                        <td><code class="hubspot-code-1">number_not_found</code> / <code
                                                class="hubspot-code-1">conversation_not_found</code></td>
                                        <td>wrong ID — check the ID</td>
                                    </tr>
                                    <tr>
                                        <td>422</td>
                                        <td><code class="hubspot-code-1">recipient_opted_out</code></td>
                                        <td>contact is on the Do-Not-Contact list — don't retry</td>
                                    </tr>
                                    <tr>
                                        <td>502 / 503</td>
                                        <td><code class="hubspot-code-1">connector_error</code>, <code
                                                class="hubspot-code-1">salesforce_bridge_unconfigured</code>
                                        </td>
                                        <td>WhatsApp line or server issue — retry with backoff; the second needs the
                                            HeyDoot team</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p style="color:#4a5568; margin-bottom:12px;">
                            <strong>Idempotency.</strong> Generate one <code class="hubspot-code-1">dispatch_id</code>
                            per message, save it on
                            the record, and reuse it on every retry. A repeat returns the original
                            <code class="hubspot-code-1">message_ref</code> and never sends twice.
                        </p>
                        <p style="color:#4a5568;">
                            <strong>Backoff.</strong> On a timeout or 5xx, retry after about 2, 4, then 8 seconds, at
                            most a few times. A scheduled Apex job can pick up anything still failing later. Never retry
                            a 4xx without changing the request.
                        </p>
                    </div>
                    <!-- Optional: standard REST API -->
                    <div id="standard-api" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="background: #e6f4fb; width: 48px; height: 48px; border-radius: 28px; display: flex; 
                                align-items: center; justify-content: center;">
                                <i class="fas fa-code" style="color: #00A1E0; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">
                                Optional: standard REST API with a Bearer token
                            </h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            Use the standard API alongside the bridge when Salesforce also needs to send files, check
                            delivery on demand, or load chat history.
                        </p>
                        <ol style="color:#4a5568; padding-left: 20px; margin-bottom: 16px;">
                            <li style="margin-bottom: 8px;">A HeyDoot admin creates a token in <strong>Settings →
                                    Integrations → API Tokens</strong>: <em>Read-only</em> for history and status,
                                <em>Read &amp; Send</em> to also send. It starts with <code
                                    class="hubspot-code-1">hd_live_</code> and is shown
                                once.
                            </li>
                            <li style="margin-bottom: 8px;">Store it in a Named Credential, or in
                                <code class="hubspot-code-1">HeyDoot_Config__mdt.Api_Token__c</code>, and send it as
                                <code class="hubspot-code-1">Authorization: Bearer &lt;HEYDOOT_API_TOKEN&gt;</code>.
                            </li>
                        </ol>
                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="sf-table">
                                <thead>
                                    <tr>
                                        <th>Need</th>
                                        <th>Call</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>send an image or document</td>
                                        <td><code class="hubspot-code-1">POST /v1/messages/send</code> with <code
                                                class="hubspot-code-1">attachment</code>
                                            (<code class="hubspot-code-1">source_url</code> or <code
                                                class="hubspot-code-1">file_base64</code>, max 16 MB), plus
                                            <code class="hubspot-code-1">user_id</code> / <code
                                                class="hubspot-code-1">username</code> / <code
                                                class="hubspot-code-1">user_email</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>check one message's delivery</td>
                                        <td><code class="hubspot-code-1">GET /v1/messages/{message_ref}/status</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>chat history for a record</td>
                                        <td><code
                                                class="hubspot-code-1">GET /v1/conversations/{conversation_id}/messages?limit=50</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>download a received file</td>
                                        <td><code
                                                class="hubspot-code-1">GET /v1/conversations/{conversation_id}/messages/{message_ref}/media</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>list WhatsApp lines</td>
                                        <td><code class="hubspot-code-1">GET /v1/numbers</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p style="color:#4a5568;">
                            These calls count toward the token's rate limit (600 per minute by default) and any API
                            quota on the organisation's plan. The bridge does not.
                        </p>
                    </div>
                    <!-- Starting HeyDoot automations from Salesforce -->
                    <div id="automations" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="background: #e6f4fb; width: 48px; height: 48px; border-radius: 28px; display: flex; 
                                align-items: center; justify-content: center;">
                                <i class="fas fa-robot" style="color: #00A1E0; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">
                                Starting HeyDoot automations from Salesforce
                            </h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            Salesforce starts a HeyDoot automation with one API call when something happens on a
                            record, for example a new Lead. HeyDoot then runs the WhatsApp question-and-answer flow by
                            itself and sends the answers back to Salesforce by webhook.
                        </p>
                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">The flow</h3>
                        <ol style="color:#4a5568; padding-left: 20px;">
                            <li style="margin-bottom: 6px;">
                                Something happens in Salesforce (a trigger point, e.g. a
                                Lead is created).
                            </li>
                            <li style="margin-bottom: 6px;">
                                Salesforce calls <code class="hubspot-code-1">POST /v1/automations/runs</code> with
                                the workflow's trigger key, the contact's phone and the record Id.
                            </li>
                            <li style="margin-bottom: 6px;">
                                HeyDoot sends the intro message and the first question on
                                WhatsApp.
                            </li>
                            <li style="margin-bottom: 6px;">
                                The contact answers each question. HeyDoot checks each
                                answer and re-asks if it's invalid.
                            </li>
                            <li style="margin-bottom: 6px;">
                                After the last answer, HeyDoot sends the completion message
                                and fires the <code class="hubspot-code-1">hd.automation.completed</code> webhook with
                                all the answers.
                            </li>
                            <li>
                                Salesforce's webhook receiver finds the record by its Id and writes the answers into its
                                fields.
                            </li>
                        </ol>
                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
                            1. Trigger keys: which automation to start
                        </h3>
                        <p style="color:#4a5568; margin-bottom:12px;">
                            A HeyDoot admin builds each automation in <strong>HeyDoot → Settings →
                                Automations</strong>. Each one has a <strong>Trigger key</strong> (e.g.
                            <code class="hubspot-code-1">new-lead-intake</code>), and that key is all Salesforce needs
                            to start it.
                        </p>
                        <ul style="color:#4a5568; padding-left: 20px;">
                            <li>
                                Ask the HeyDoot admin for the list of trigger keys, and each question's variable name
                                (e.g. <code class="hubspot-code-1">name</code>, <code
                                    class="hubspot-code-1">email</code>, <code class="hubspot-code-1">course</code>):
                                those are the keys
                                the answers come back under.
                            </li>
                            <li>The workflow must be <strong>Active</strong>; a Draft can't be started.</li>
                            <li>
                                Keep the keys in Custom Metadata (e.g. a <code
                                    class="hubspot-code-1">HeyDoot_Automation__mdt</code> record per
                                trigger point), not in Apex code, so an admin can change them without a deployment.
                            </li>
                        </ul>
                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
                            2. Trigger points: when Salesforce calls
                        </h3>
                        <p style="color:#4a5568; margin-bottom:12px;">
                            Use a <strong>Record-Triggered Flow</strong> (no code to change later) that calls the Apex
                            action below, or an Apex trigger that enqueues it. Typical trigger points:
                        </p>
                        <div style="overflow-x:auto; margin-bottom: 20px;">
                            <table class="sf-table">
                                <thead>
                                    <tr>
                                        <th>Salesforce event</th>
                                        <th>Trigger key (example)</th>
                                        <th>What the automation does</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Lead created with a mobile number</td>
                                        <td><code class="hubspot-code-1">new-lead-intake</code></td>
                                        <td>asks name, email and course of interest</td>
                                    </tr>
                                    <tr>
                                        <td>Lead status changes to "Contacted"</td>
                                        <td><code class="hubspot-code-1">demo-booking</code></td>
                                        <td>asks for a preferred demo date and time</td>
                                    </tr>
                                    <tr>
                                        <td>Opportunity becomes Closed Won</td>
                                        <td><code class="hubspot-code-1">onboarding</code></td>
                                        <td>collects documents or batch preference</td>
                                    </tr>
                                    <tr>
                                        <td>Case closed</td>
                                        <td><code class="hubspot-code-1">feedback</code></td>
                                        <td>asks for a 1-5 rating and comments</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            Run the callout asynchronously (in a Record-Triggered Flow, the <em>Run Asynchronously</em>
                            path, or a Queueable). Apex can't make a callout while the record is being saved.
                        </p>
                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">
                            3. The API call
                        </h3>
                        <p style="color:#4a5568; margin-bottom:12px;">
                            <code
                                class="hubspot-code-1">POST https://&lt;HEYDOOT_API_BASE_URL&gt;/v1/automations/runs</code>,
                            with header
                            <code class="hubspot-code-1">Authorization: Bearer &lt;HEYDOOT_API_TOKEN&gt;</code> (a token
                            from
                            <strong>HeyDoot → Settings → API Tokens</strong>) and
                            <code class="hubspot-code-1">Content-Type: application/json</code>. On Allen's server the
                            base URL includes
                            <code class="hubspot-code-1">/api</code>, e.g.
                            <code>https://allen.heydoot.com/api/v1/automations/runs</code>.
                        </p>
                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="sf-table">
                                <thead>
                                    <tr>
                                        <th>Field</th>
                                        <th>Required</th>
                                        <th>Meaning</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="hubspot-code-1">workflow</code></td>
                                        <td>yes</td>
                                        <td>the trigger key, e.g. <code>new-lead-intake</code></td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">to</code></td>
                                        <td>yes</td>
                                        <td>
                                            the contact's phone with country code, any format, e.g.
                                            <code class="hubspot-code-1">+91 98765 43210</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">number_id</code></td>
                                        <td>when the account has more than one WhatsApp number</td>
                                        <td>the line to send from</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">variables</code></td>
                                        <td>recommended</td>
                                        <td>
                                            extra values: text, number or true/false (not null). Put the Salesforce
                                            record Id here, so the answers can be matched back. Usable as
                                            <code class="hubspot-code-1">{{name}}</code> in the workflow's messages.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">user_id</code></td>
                                        <td>optional</td>
                                        <td>the Salesforce user who triggered it</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <pre class="sf-code">
                            <code>
{
  "workflow": "new-lead-intake",
  "to": "+919876543210",
  "number_id": "4ad5a434-ae03-4f26-8563-0e804c6520c8",
  "variables": {
    "sf_record_id": "0005g00000AbcDe",
    "name": "Priya",
    "user_id": "005HF0000004HpVFYA0"
  }
}
                            </code>
                        </pre>
                        <p style="color:#4a5568; margin-top: 12px;">
                            The response is <strong>201</strong> with
                            <code
                                class="hubspot-code-1">{"run_id": "...", "conversation_id": "...", "number_id": "...", "workflow": "new-lead-intake", "status": "active"}</code>.
                            Save <code class="hubspot-code-1">run_id</code> on the record.
                        </p>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
                            Apex: an action a Flow can call
                        </h3>
                        <pre class="sf-code"><code>public with sharing class HeyDootAutomation implements Queueable, Database.AllowsCallouts {

    public class Request {
        @InvocableVariable(required=true) public String workflowKey;
        @InvocableVariable(required=true) public String phone;
        @InvocableVariable(required=true) public Id     recordId;
        @InvocableVariable                public String name;
    }

    @InvocableMethod(label='Start HeyDoot automation')
    public static void start(List&lt;Request&gt; requests) {
        System.enqueueJob(new HeyDootAutomation(requests)); // callouts can't run during the record save
    }

    private final List&lt;Request&gt; requests;
    public HeyDootAutomation(List&lt;Request&gt; requests) { this.requests = requests; }

    public void execute(QueueableContext ctx) {
        HeyDoot_Config__mdt cfg = HeyDoot_Config__mdt.getInstance('Default');
        for (Request r : requests) {
            Map&lt;String, Object&gt; vars = new Map&lt;String, Object&gt;{
                'sf_record_id' =&gt; String.valueOf(r.recordId)
            };
            if (String.isNotBlank(r.name)) vars.put('name', r.name); // variables can't be null

            HttpRequest req = new HttpRequest();
            req.setEndpoint(cfg.Base_URL__c + '/v1/automations/runs');
            req.setMethod('POST');
            req.setHeader('Authorization', 'Bearer ' + cfg.Api_Token__c);
            req.setHeader('Content-Type', 'application/json');
            req.setBody(JSON.serialize(new Map&lt;String, Object&gt;{
                'workflow'  =&gt; r.workflowKey,
                'to'        =&gt; r.phone,
                'number_id' =&gt; cfg.Number_Id__c,
                'variables' =&gt; vars,
                'user_id'   =&gt; UserInfo.getUserId()
            }));
            req.setTimeout(30000);

            HttpResponse res = new Http().send(req);
            // 201: store run_id on the record. 409 run_already_active: the contact is already in a flow.
        }
    }
}
</code>
</pre>
                        <p style="color:#4a5568; margin-top: 12px;">
                            One Queueable can make up to 100 callouts. For bulk loads, such as a lead import, split the
                            records into chunks and stay within the HeyDoot rate limit (600 calls a minute by default).
                        </p>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">4.
                            Getting the answers back into Salesforce</h3>
                        <p style="color:#4a5568; margin-bottom:12px;">
                            The HeyDoot admin adds Salesforce's webhook endpoint (the <code>@RestResource</code> from
                            <em>Receiving events in Salesforce</em>) for the automation events. Verify and decrypt it
                            exactly as in that section.
                        </p>
                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="sf-table">
                                <thead>
                                    <tr>
                                        <th>Event</th>
                                        <th>Sent when</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="hubspot-code-1">hd.automation.started</code></td>
                                        <td>the first message went out</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">hd.automation.completed</code></td>
                                        <td>all questions are answered; carries the answers</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">hd.automation.expired</code></td>
                                        <td>the contact didn't reply within 24 hours</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">hd.automation.cancelled</code></td>
                                        <td>the contact replied <em>stop, cancel, quit</em> or <em>end</em>, or the run
                                            was cancelled through the API</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <pre class="sf-code"><code>{
  "event": "hd.automation.completed",
  "run_id": "8b1f...",
  "workflow_key": "new-lead-intake",
  "conversation_id": "c3a1...",
  "number_id": "4ad5a434-ae03-4f26-8563-0e804c6520c8",
  "status": "completed",
  "answers": {
    "name": "Priya Verma",
    "email": "priya@example.com",
    "course": "NEET"
  },
  "variables": { "sf_record_id": "0005g00000AbCdE", "name": "Priya" }
}
</code>
</pre>

                        <p style="color:#4a5568; margin-top: 12px;">
                            Find the record with <code class="hubspot-code-1">variables.sf_record_id</code>, then copy
                            each key of
                            <code class="hubspot-code-1">answers</code> into its field (e.g. <code
                                class="hubspot-code-1">answers.email</code> into
                            <code class="hubspot-code-1">Lead.Email</code>). <code class="hubspot-code-1">answers</code>
                            uses the variable names the HeyDoot admin
                            gave each question. An answer the contact got wrong 3 times comes back empty
                            (<code class="hubspot-code-1">null</code>). On <em>expired</em> or <em>cancelled</em>, mark
                            the record (e.g.
                            <em>WhatsApp intake: no reply</em>) so a person follows up.
                        </p>
                        <p style="color:#4a5568; margin-top: 12px;">
                            Without webhooks, Salesforce can ask for a run's state with
                            <code class="hubspot-code-1">GET /v1/automations/runs/{run_id}</code>, which returns its
                            status, answers and
                            variables. To stop a run from Salesforce, call
                            <code class="hubspot-code-1">POST /v1/automations/runs/{run_id}/cancel</code>.
                        </p>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
                            5. Checklist for the Salesforce developer
                        </h3>
                        <ul style="color:#4a5568; padding-left: 20px;">
                            <li style="margin-bottom: 6px;">
                                Trigger keys and question variable names received from the
                                HeyDoot admin, stored in Custom Metadata
                            </li>
                            <li style="margin-bottom: 6px;">
                                Named Credential / Remote Site for the HeyDoot base URL;
                                API token stored securely
                            </li>
                            <li style="margin-bottom: 6px;">
                                The Flow (or trigger) calls the action asynchronously, with
                                the phone including the country code
                            </li>
                            <li style="margin-bottom: 6px;">
                                <code class="hubspot-code-1">variables</code> carries <code
                                    class="hubspot-code-1">sf_record_id</code>,
                                and never null values
                            </li>
                            <li style="margin-bottom: 6px;">
                                <code class="hubspot-code-1">run_id</code> saved on the record;
                                <code class="hubspot-code-1">409 run_already_active</code> handled
                            </li>
                            <li style="margin-bottom: 6px;">
                                Webhook receiver handles
                                <code class="hubspot-code-1">hd.automation.completed</code>,
                                <code class="hubspot-code-1">expired</code> and <code
                                    class="hubspot-code-1">cancelled</code>, and maps answers to fields
                            </li>
                            <li>Tested end to end in a sandbox with a real WhatsApp number</li>
                        </ul>
                    </div>

                    <!-- Go-live checklist -->
                    <div id="go-live" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="background: #e6f4fb; width: 48px; height: 48px; border-radius: 28px; display: flex; 
                                align-items: center; justify-content: center;">
                                <i class="fas fa-list-check" style="color: #00A1E0; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Go-live checklist</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #00A1E0;"></i> Production base URL,
                                    bridge secret and number ID are in <code
                                        class="hubspot-code-1">HeyDoot_Config__mdt</code>, not in Apex
                                    code</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #00A1E0;"></i> Named Credential or
                                    Remote Site Setting points at the production base URL</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #00A1E0;"></i> Every send carries a
                                    new <code class="hubspot-code-1">dispatch_id</code>, saved on the record and reused
                                    on retries</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #00A1E0;"></i> Every send carries
                                    <code class="hubspot-code-1">sf_user_id</code>, <code
                                        class="hubspot-code-1">sf_user_name</code> and <code
                                        class="hubspot-code-1">sf_user_email</code>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #00A1E0;"></i> Sends run from
                                    <code class="hubspot-code-1">@future(callout=true)</code> or a Queueable, not after
                                    DML in the same
                                    transaction
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;">
                                    <i class="fas fa-check-circle" style="color: #00A1E0;"></i>
                                    <span>
                                        The webhook endpoint is on a public Site, checks the timestamp and signature,
                                        and decrypts when <code class="hubspot-code-1">x-hd-encryption</code> is set
                                    </span>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #00A1E0;"></i> The receiver answers
                                    200 straight away and processes in a Queueable</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #00A1E0;"></i> Events are
                                    de-duplicated, and statuses never move backwards</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #00A1E0;"></i> Someone is alerted on
                                    <code class="hubspot-code-1">hd.number.disconnected</code>
                                </li>
                                <li style="display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #00A1E0;"></i> Sandboxes use their own number, webhook and secrets
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- FAQ Section -->
                    <div id="faq-sf" style="margin-top: 48px;">
                        <h3 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 24px;">
                            <i class="fas fa-question-circle" style="color: #00A1E0;"></i> FAQs
                        </h3>
                        <div class="faq-item">
                            <div class="faq-question">
                                Do I need a HeyDoot API token to send from Apex?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                No. The <code class="hubspot-code-1">/v1/integrations/salesforce/reply</code> endpoint
                                is
                                built for Apex and uses HMAC signing with a shared bridge secret instead of a Bearer
                                token. You only need an API token if you also want to use the standard REST API for
                                files, on-demand status checks or chat history.
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">
                                Can I send images or documents from Salesforce?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                The bridge sends text only. For images or documents, use the
                                standard REST API (<code class="hubspot-code-1">POST /v1/messages/send</code> with an
                                <code class="hubspot-code-1">attachment</code>
                                field, max 16 MB), which requires a HeyDoot API token.
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">
                                Why can't I make the callout from a trigger?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Apex can't make callouts after DML in the same transaction. From a
                                trigger, call <code class="hubspot-code-1">send</code> from a <code
                                    class="hubspot-code-1">@future(callout=true)</code> method or a
                                Queueable. From a Record-Triggered Flow, use the <em>Run Asynchronously</em> path.
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">
                                How do I avoid double-sends on retry?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Generate one <code class="hubspot-code-1">dispatch_id</code> (a UUID) per message, save
                                it
                                on the Salesforce record, and reuse it on every retry. HeyDoot returns the original
                                <code class="hubspot-code-1">message_ref</code> and never sends twice.
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">
                                Where do I store the bridge and webhook secrets?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                In a protected Custom Metadata Type or a Protected Custom Setting
                                (e.g. <code class="hubspot-code-1">HeyDoot_Config__mdt</code>), never in Apex source
                                code. Secrets in code end
                                up in version control and in every sandbox copy.
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">
                                Do webhooks need a public Site?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Yes. HeyDoot has to reach your Apex <code class="hubspot-code-1">@RestResource</code>
                                over
                                public HTTPS. Use a Salesforce Site (or Experience Cloud site) and grant its guest user
                                access to the webhook class. The HMAC signature check inside the class is what keeps it
                                safe.
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">Can Salesforce start a WhatsApp conversation on its own?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Yes. Salesforce calls <code class="hubspot-code-1">POST /v1/automations/runs</code> with
                                a
                                workflow trigger key and the contact's phone. HeyDoot runs the WhatsApp Q&amp;A flow and
                                posts the answers back via the <code
                                    class="hubspot-code-1">hd.automation.completed</code> webhook, which your
                                receiver maps onto the record's fields.
                            </div>
                        </div>
                        <div class="faq-item">
                            <div class="faq-question">Is there a free trial available?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Yes, we offer a 14-day free trial with full Salesforce integration
                                features.
                            </div>
                        </div>
                    </div>
                    <!-- CTA Section -->
                    <div id="cta" style="background: linear-gradient(115deg, #032d42, #0a4a6b); border-radius: 32px; padding: 48px; 
                        text-align: center; margin: 56px 0 32px; color: white;">
                        <i class="fab fa-whatsapp" style="font-size: 56px; color: #25D366; margin-bottom: 16px;"></i>
                        <h2 style="font-size: 2rem; font-weight: 800;">Send and Receive WhatsApp from Salesforce</h2>
                        <p style="margin-top: 16px; opacity: 0.9;">
                            Deploy the Apex sender and REST receiver, drop your
                            secrets into <code>HeyDoot_Config__mdt</code>, and register the webhook URL. You're live in
                            minutes.
                        </p>
                        <div
                            style="display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; margin-top: 32px;">
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;">
                                <i class="fas fa-code"></i> Apex Sender
                            </span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;">
                                <i class="fas fa-shield-alt"></i> HMAC Signed
                            </span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;">
                                <i class="fas fa-robot"></i> HeyDoot Automations
                            </span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;">
                                <i class="fas fa-bolt"></i> Real-Time Delivery Updates
                            </span>
                        </div>
                        <div style="margin-top: 36px;">
                            <a href="https://wa.me/
                            <?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20the%20HeyDoot%20Salesforce%20WhatsApp%20integration"
                                class="btn btn-lg" style="background: white; color: #00A1E0; font-weight: 700;">
                                <i class="fab fa-whatsapp"></i> Get Started Today
                            </a>
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

                    <a href="<?php echo BASE_URL; ?>/salesforce-api.php" class="utility-item utility-link">
                        <i class="fas fa-code"></i>
                        Salesforce API Docs
                    </a>

                    <a href="tel:+919911432288" class="utility-item utility-link">
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