<?php
require_once dirname(__DIR__) . '/config.php';
$page_meta = [
    'title' => 'Odoo WhatsApp Integration | HeyDoot',
    'meta_title' => 'Odoo WhatsApp Integration – Send & Receive WhatsApp from Odoo with HeyDoot',
    'description' => 'Connect Odoo ERP with WhatsApp via HeyDoot using a custom module. Send WhatsApp messages from Odoo with a Bearer token, and receive replies and delivery updates through signed webhooks.',

    'og_title' => 'Odoo WhatsApp Integration | HeyDoot',
    'og_description' => 'Integrate Odoo with WhatsApp using HeyDoot. Send WhatsApp from Odoo REST calls, receive replies and delivery statuses via signed webhooks, and log every message in the chatter.',

    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations/odoo.php',

    'twitter_title' => 'Odoo WhatsApp Integration | HeyDoot',
    'twitter_description' => 'Send WhatsApp from Odoo with HeyDoot and receive replies through signed webhooks. Works with self-hosted Odoo, Odoo.sh, and Odoo Online via a relay.',

    'twitter_image' => 'https://heydoot.com/public/images/m1.png',

    'canonical' => 'https://heydoot.com/integrations/odoo.php'
];
$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => "Odoo WhatsApp Integration",
    "serviceType" => "WhatsApp Integration Service",
    "provider" => [
        "@type" => "Organization",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ],
    "description" => "HeyDoot Odoo WhatsApp Integration connects Odoo ERP with WhatsApp using a custom Odoo module. Send WhatsApp from Odoo, receive replies and delivery statuses through signed webhooks, and log every message in the chatter.",
    "areaServed" => "Worldwide",
    "url" => "https://heydoot.com/integrations/odoo.php",
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
    .btn-odoo {
        background: #714B67;
        color: white;
        box-shadow: 0 2px 8px rgba(113, 75, 103, 0.2);
    }

    .btn-odoo:hover {
        background: #5a3a52;
        transform: translateY(-3px);
        box-shadow: 0 12px 22px -8px rgba(113, 75, 103, 0.3);
    }

    .odoo-accent {
        color: #714B67;
    }

    .setup-step {
        background: white;
        border-radius: 24px;
        padding: 24px;
        margin-bottom: 24px;
        border-left: 4px solid #714B67;
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
        background: #714B67;
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

    .image-placeholder {
        background: linear-gradient(135deg, #f0f2f5 0%, #e4e8ed 100%);
        border-radius: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 200px;
        color: #714B67;
        font-size: 48px;
        border: 2px dashed #cbd5e1;
    }

    .metric-card {
        text-align: center;
        padding: 24px;
        background: white;
        border-radius: 24px;
    }

    .odoo-code {
        background: #0f172a;
        color: #e2e8f0;
        border-radius: 16px;
        padding: 18px;
        overflow-x: auto;
        font-size: 0.82rem;
        line-height: 1.55;
        margin-top: 14px;
    }

    .odoo-code-1 {
        background: #0f172ad4;
        color: #e2e8f0;
        border-radius: 10px;
        padding: 2px 10px;
        overflow-x: auto;
        line-height: 1.55;
    }

    .odoo-code code {
        font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
    }

    .odoo-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.88rem;
        overflow-x: auto;
        display: block;
    }

    .hubspot-code-1 {
        background: #0f172ad4;
        color: #e2e8f0;
        border-radius: 10px;
        padding: 2px 10px;
        overflow-x: auto;
        line-height: 1.55;
    }

    .odoo-table th,
    .odoo-table td {
        padding: 10px;
        border: 1px solid #d7e6dc;
        text-align: left;
        vertical-align: top;
    }

    .odoo-table thead tr {
        background: #f1e8ef;
    }

    .feature-card:hover {
        transform: translateY(0px) scale(1.0) !important;
    }
</style>
<main>
    <!-- Hero Section with Odoo flavor -->
    <section class="hero"
        style="background: linear-gradient(135deg, #2d1b28 0%, #4a2c42 100%);padding: 20px 20px 20px;">
        <div class="floating-dots">
        </div>
        <div style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div
                style="display: inline-block; background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); padding: 6px 16px; border-radius: 60px; margin-bottom: 0;">
                <span style="color: #ffffff; font-weight: 700; display: flex; align-items: center; gap: 10px;">
                    <i class="si si-odoo"></i>
                    REST API + Signed Webhooks for Odoo
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
                        <h4 style="font-weight: 700; margin-bottom: 20px; font-size: 1.1rem;">
                            <i class="fas fa-cog" style="color: #714B67; margin-right: 8px;"></i> On this page
                        </h4>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
                            <li>
                                <a href="#overview" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-info-circle" style="color: #714B67;"></i> Overview
                                </a>
                            </li>
                            <li>
                                <a href="#hosting" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-server" style="color: #714B67;"></i>
                                    Which Odoo hosting can do this
                                </a>
                            </li>
                            <li>
                                <a href="#prerequisites" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i> What you need
                                </a>
                            </li>
                            <li>
                                <a href="#setup-guide" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-list-ol" style="color: #714B67;"></i> Credentials &amp; setup
                                </a>
                            </li>
                            <li>
                                <a href="#sending" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-paper-plane" style="color: #714B67;"></i> Sending from Odoo
                                </a>
                            </li>
                            <li>
                                <a href="#tracking" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-chart-line" style="color: #714B67;"></i>
                                    Tracking &amp; history
                                </a>
                            </li>
                            <li>
                                <a href="#receiving" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-inbox" style="color: #714B67;"></i> Receiving replies
                                </a>
                            </li>
                            <li>
                                <a href="#user-metrics" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-user" style="color: #714B67;"></i> User attribution
                                </a>
                            </li>
                            <li>
                                <a href="#errors-limits" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-exclamation-triangle" style="color: #714B67;"></i>
                                    Errors &amp; retries
                                </a>
                            </li>
                            <li>
                                <a href="#go-live" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-list-check" style="color: #714B67;"></i> Go-live checklist
                                </a>
                            </li>
                            <li>
                                <a href="#faq-odoo" style="color: #2c3e2f;">
                                    <i class="fas fa-question-circle" style="color: #714B67;"></i> FAQs
                                </a>
                            </li>
                            <li>
                                <a href="#cta" style="color: #2c3e2f;">
                                    <i class="fas fa-rocket" style="color: #714B67;"></i> Get Started
                                </a>
                            </li>
                        </ul>
                        <!-- cross-link to integration page -->
                        <div style="margin-top:24px;padding-top:20px;border-top:1px solid #f0f0f0;">
                            <p style="font-size:.85rem;color:#6b7280;margin-bottom:10px;">Need API / technical docs?</p>
                            <a href="<?php echo BASE_URL; ?>/services/odoo.php"
                                style="display:flex;align-items:center;gap:10px;background:#eef2ff;border-radius:14px;padding:12px 16px;color:#1E3A5F;font-weight:600;font-size:.9rem;text-decoration:none;">
                                <i class="fas fa-code"></i>
                                Services Page →
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Main Content -->
                <main style="flex: 2.5; min-width: 280px;">

                    <!-- Overview -->
                    <div id="overview" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #f1e8ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-info-circle" style="color: #714B67; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Overview</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <p style="color: #4a5568; margin-bottom: 18px;">
                                Odoo connects to HeyDoot through HeyDoot's standard REST API and webhooks, best packaged
                                as a small custom Odoo module. Odoo sends WhatsApp messages with a Bearer token, and
                                HeyDoot posts replies and delivery updates to an Odoo HTTP controller.
                            </p>

                            <div style="overflow-x:auto; margin-bottom: 20px;">
                                <table class="odoo-table">
                                    <thead>
                                        <tr>
                                            <th>Direction</th>
                                            <th>How</th>
                                            <th>Auth</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Odoo → HeyDoot (send, read)</td>
                                            <td>
                                                Python <code class="hubspot-code-1">requests</code> call to
                                                <code class="hubspot-code-1">POST /v1/messages/send</code>
                                                and other <code class="hubspot-code-1">/v1</code> endpoints
                                            </td>
                                            <td>
                                                <code class="hubspot-code-1">
                                                    Authorization: Bearer &lt;HEYDOOT_API_TOKEN&gt;
                                                </code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>HeyDoot → Odoo (events)</td>
                                            <td>HeyDoot calls
                                                <code class="hubspot-code-1">
                                                    https://&lt;YOUR_ODOO_DOMAIN&gt;/heydoot/events
                                                </code>
                                            </td>
                                            <td>
                                                HMAC-SHA256 signature with the webhook's signing secret
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p style="color:#4a5568; font-style: italic;">
                                Odoo sends with a Bearer token; HeyDoot answers with signed webhooks — both directions.
                            </p>
                        </div>
                    </div>

                    <!-- Which Odoo hosting -->
                    <div id="hosting" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #f1e8ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-server" style="color: #714B67; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Which Odoo hosting can do this</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <div style="overflow-x:auto; margin-bottom: 18px;">
                                <table class="odoo-table">
                                    <thead>
                                        <tr>
                                            <th>Odoo hosting</th>
                                            <th>Custom module</th>
                                            <th>Recommended setup</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Self-hosted (Community or Enterprise)</td>
                                            <td>yes</td>
                                            <td>the module in this guide</td>
                                        </tr>
                                        <tr>
                                            <td>Odoo.sh</td>
                                            <td>yes</td>
                                            <td>the module in this guide, deployed from your Git branch</td>
                                        </tr>
                                        <tr>
                                            <td>Odoo Online (odoo.com SaaS)</td>
                                            <td>no</td>
                                            <td>a small relay service between HeyDoot and Odoo (see the note below)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p style="color:#4a5568;">
                                Odoo Online doesn't accept custom Python modules, and its built-in automation actions
                                can't add a Bearer header or check an HMAC signature. On Odoo Online, a small relay (for
                                example a serverless function) calls HeyDoot with the token and writes into Odoo through
                                Odoo's XML-RPC/JSON-RPC API. The HeyDoot side stays exactly as described here.
                            </p>
                        </div>
                    </div>

                    <!-- Prerequisites -->
                    <div id="prerequisites" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #f1e8ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-clipboard-list" style="color: #714B67; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">What you need before you start</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        Base URL of the HeyDoot API:
                                        <code class="odoo-code-1">https://&lt;HEYDOOT_API_BASE_URL&gt;</code>
                                        (from the HeyDoot team)
                                    </span>
                                </li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        API token
                                        (<code class="odoo-code-1">hd_live_...</code>) with
                                        <strong>Read &amp; Send</strong>
                                        access, created by a HeyDoot admin
                                    </span>
                                </li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        <strong>Number ID</strong>: the UUID of the WhatsApp line to send from
                                    </span>
                                </li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        <strong>Webhook signing secret</strong>: shown once when a HeyDoot admin
                                        registers your Odoo URL as a webhook
                                    </span>
                                </li>
                                <li style="display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        An Odoo 16, 17 or 18 database where you can install a custom module, reachable
                                        from the internet over HTTPS
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Credentials & setup -->
                    <div id="setup-guide" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #f1e8ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-list-ol" style="color: #714B67; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Credentials and Odoo setup</h2>
                        </div>

                        <p style="color:#4a5568; margin-bottom:18px;">
                            Keep the HeyDoot values in Odoo System Parameters, never in module code, so each database
                            (production, staging) has its own and nothing secret reaches Git.
                        </p>

                        <!-- Step 1 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">1</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Get the token</h3>
                            </div>
                            <p>
                                A HeyDoot admin opens <strong>Settings → Integrations → API Tokens</strong>, creates a
                                <strong>Read &amp; Send</strong> token labelled e.g. "Odoo production", and copies it
                                (shown once). Also check that API Access is on.
                            </p>
                        </div>

                        <!-- Step 2 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">2</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Store the values</h3>
                            </div>
                            <p>
                                In Odoo, turn on developer mode, then go to
                                <strong>Settings → Technical → System Parameters</strong> and add:
                            </p>
                            <div style="overflow-x:auto; margin-top:12px;">
                                <table class="odoo-table">
                                    <thead>
                                        <tr>
                                            <th>Key</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code class="hubspot-code-1">heydoot.base_url</code></td>
                                            <td>
                                                <code class="hubspot-code-1">https://&lt;HEYDOOT_API_BASE_URL&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><code class="hubspot-code-1">heydoot.api_token</code></td>
                                            <td>
                                                <code class="hubspot-code-1">&lt;HEYDOOT_API_TOKEN&gt;</code>
                                                (starts with
                                                <code class="hubspot-code-1">hd_live_</code>)
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><code class="hubspot-code-1">heydoot.number_id</code></td>
                                            <td><code class="hubspot-code-1">&lt;NUMBER_ID&gt;</code></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">3</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Module layout</h3>
                            </div>
                            <p>
                                The examples below make one module,
                                <code class="hubspot-code-1">heydoot_whatsapp</code>:
                            </p>
                            <pre class="odoo-code"><code>heydoot_whatsapp/
├── __init__.py
├── __manifest__.py
├── models/
│   ├── __init__.py
│   └── heydoot.py            # client + message log + partner button
└── controllers/
    ├── __init__.py
    └── main.py               # webhook receiver</code></pre>

                            <p style="margin-top:16px;"><strong>__manifest__.py</strong></p>
                            <pre class="odoo-code"><code>{
  "name": "HeyDoot WhatsApp",
  "version": "17.0.1.0.0",
  "depends": ["base", "mail", "contacts"],
  "license": "LGPL-3",
  "data": ["security/ir.model.access.csv"],
}</code></pre>
                            <p style="margin-top:10px;">
                                Add the usual <code class="odoo-code-1">security/ir.model.access.csv</code> row for
                                the <code class="odoo-code-1">heydoot.message</code> model, so internal users can read
                                the log.
                            </p>
                        </div>
                    </div>

                    <!-- Sending WhatsApp from Odoo -->
                    <div id="sending" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #f1e8ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-paper-plane" style="color: #714B67; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Sending a WhatsApp from Odoo</h2>
                        </div>

                        <p style="color:#4a5568; margin-bottom:16px;">
                            Odoo sends with <code
                                class="odoo-code-1">POST https://&lt;HEYDOOT_API_BASE_URL&gt;/v1/messages/send</code>.
                            HeyDoot accepts the message straight away (<strong>202</strong>) and reports delivery later
                            by webhook.
                        </p>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">Request fields</h3>
                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="odoo-table">
                                <thead>
                                    <tr>
                                        <th>Field</th>
                                        <th>Required</th>
                                        <th>Rules / meaning</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="hubspot-code-1">to</code> + <code
                                                class="hubspot-code-1">number_id</code></td>
                                        <td>one of the two ways</td>
                                        <td>
                                            phone with country code, e.g.
                                            <code class="hubspot-code-1">+919876543210</code>; spaces and dashes
                                            are fine — start or continue a chat by phone number
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">conversation_id</code></td>
                                        <td>one of the two ways</td>
                                        <td>from an earlier send or a webhook — reply in a known chat</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code class="hubspot-code-1">text</code> /
                                            <code class="hubspot-code-1">attachment</code>
                                        </td>
                                        <td>text or attachment</td>
                                        <td>message text, or a file (image, document, audio, video, max 16 MB)</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">dispatch_id</code></td>
                                        <td>recommended</td>
                                        <td>UUID idempotency key: a retry with the same value never sends twice</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code class="hubspot-code-1">user_id</code>,
                                            <code class="hubspot-code-1">username</code>,
                                            <code class="hubspot-code-1">user_email</code>
                                        </td>
                                        <td>recommended</td>
                                        <td>who sent it — feeds User Metrics in HeyDoot</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">Module code:
                            <code class="hubspot-code-1">models/heydoot.py</code>
                        </h3>
                        <pre class="odoo-code"><code>import uuid
import requests

from odoo import api, fields, models
from odoo.exceptions import UserError


class HeydootMessage(models.Model):
    _name = "heydoot.message"
    _description = "HeyDoot WhatsApp message"
    _order = "id desc"

    partner_id = fields.Many2one("res.partner", index=True)
    direction = fields.Selection([("outbound", "Outbound"), ("inbound", "Inbound")], required=True)
    body = fields.Text()
    message_ref = fields.Char(index=True, readonly=True)
    dispatch_id = fields.Char(index=True, readonly=True)
    conversation_id = fields.Char(index=True, readonly=True)
    status = fields.Char(default="queued")
    send_error = fields.Char()

    @api.model
    def _hd_config(self):
        icp = self.env["ir.config_parameter"].sudo()
        base, token = icp.get_param("heydoot.base_url"), icp.get_param("heydoot.api_token")
        if not base or not token:
            raise UserError("HeyDoot is not configured: set heydoot.base_url and heydoot.api_token.")
        return base.rstrip("/"), token, icp.get_param("heydoot.number_id")

    @api.model
    def _hd_request(self, method, path, payload=None):
        base, token, _number = self._hd_config()
        resp = requests.request(method, f"{base}{path}", json=payload, timeout=30,
                                headers={"Authorization": f"Bearer {token}"})
        data = resp.json() if resp.content else {}
        if resp.status_code >= 400:
            raise UserError(f"HeyDoot {resp.status_code} {data.get('error')}: {data.get('message')}")
        return data


class ResPartner(models.Model):
    _inherit = "res.partner"

    x_heydoot_conversation_id = fields.Char("HeyDoot conversation", copy=False)

    def action_heydoot_send(self, text):
        """Send 'text' to this contact on WhatsApp and log it in the chatter."""
        self.ensure_one()
        Msg = self.env["heydoot.message"].sudo()
        _base, _token, number_id = Msg._hd_config()
        user = self.env.user

        payload = {"text": text, "user_id": str(user.id), "username": user.name}
        if user.email:
            payload["user_email"] = user.email

        if self.x_heydoot_conversation_id:
            payload["conversation_id"] = self.x_heydoot_conversation_id
        else:
            phone = self.mobile or self.phone
            if not phone:
                raise UserError("This contact has no mobile number.")
            payload.update(to=phone, number_id=number_id)  # must include the country code

        # Log first with a dispatch_id, so a retry after a timeout reuses it and never double-sends.
        log = Msg.create({"partner_id": self.id, "direction": "outbound",
                          "body": text, "dispatch_id": str(uuid.uuid4())})
        payload["dispatch_id"] = log.dispatch_id

        data = Msg._hd_request("POST", "/v1/messages/send", payload)
        log.write({"message_ref": data["message_ref"], "conversation_id": data["conversation_id"]})
        self.x_heydoot_conversation_id = data["conversation_id"]
        self.message_post(body=f"WhatsApp sent: {text}")
        return data</code></pre>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
                            Calling it
                        </h3>
                        <ul style="color:#4a5568; padding-left: 20px;">
                            <li>From a button or wizard:
                                <code class="odoo-code-1">partner.action_heydoot_send("Hello from Odoo")</code>.
                            </li>
                            <li>From an Automation rule (e.g. Sales Order is confirmed, action Execute Code):
                                <pre class="odoo-code">
<code>record.partner_id.action_heydoot_send(
    f"Hi {record.partner_id.name}, your order {record.name} is confirmed.")
</code>
                                </pre>
                            </li>
                        </ul>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
                            Response (202 Accepted)
                        </h3>
                        <pre class="odoo-code">
<code>{
  "status": "queued",
  "message_ref": "hd_4F0C9A1B7E2D3C5A6B8E9F",
  "conversation_id": "c3a1_...",
  "dispatch_id": "6c0e1b2a-58f4-4b7e-9d0c-2f1a7e3b9c11"
}</code> </pre>
                        <p style="color:#4a5568; margin-top: 10px;">
                            <code class="hubspot-code-1">queued</code> means accepted, not delivered yet. Delivery
                            arrives by webhook
                            (<code class="hubspot-code-1">hd.message.status</code>) with the same
                            <code class="hubspot-code-1">message_ref</code>.
                        </p>
                        <p style="color:#4a5568; margin-top: 10px;">
                            The call blocks the Odoo worker for up to 30 seconds. For bulk sends, such as a campaign to
                            many partners, queue the work in a scheduled action and send in batches, staying under the
                            rate limit.
                        </p>
                    </div>

                    <!-- Tracking delivery and reading history -->
                    <div id="tracking" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #f1e8ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-chart-line" style="color: #714B67; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Tracking delivery and reading history</h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            The <code class="hubspot-code-1">hd.message.status</code> webhook keeps
                            <code class="hubspot-code-1">heydoot.message.status</code> current
                            without polling. Use the calls below only for an on-demand check or to load older messages.
                        </p>

                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="odoo-table">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Meaning</th>
                                        <th>Final</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <code class="hubspot-code-1">queued</code> /
                                            <code class="hubspot-code-1">sending</code>
                                        </td>
                                        <td>accepted, on its way to WhatsApp</td>
                                        <td>no</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">pending_review</code></td>
                                        <td>held by the organisation's message monitoring for an admin</td>
                                        <td>no</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">sent</code></td>
                                        <td>accepted by WhatsApp (one tick)</td>
                                        <td>no</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">delivered</code></td>
                                        <td>reached the phone (two grey ticks)</td>
                                        <td>no</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">read</code></td>
                                        <td>opened (two blue ticks; only if read receipts are on)</td>
                                        <td>yes</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">failed</code></td>
                                        <td>
                                            not sent; <code class="hubspot-code-1">send_error</code> says why, e.g.
                                            <code class="hubspot-code-1">not_on_whatsapp</code>
                                        </td>
                                        <td>yes, unless retried</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code class="hubspot-code-1">blocked</code> /
                                            <code class="hubspot-code-1">canceled</code>
                                        </td>
                                        <td>stopped by monitoring / cancelled before sending</td>
                                        <td>yes</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="odoo-table">
                                <thead>
                                    <tr>
                                        <th>Need</th>
                                        <th>Call</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>one message's status</td>
                                        <td>
                                            <code class="hubspot-code-1">GET /v1/messages/{message_ref}/status</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>a chat's messages, oldest first</td>
                                        <td>
                                            <code class="hubspot-code-1">
                                                GET /v1/conversations/{conversation_id}/messages?limit=50
                                            </code>;
                                            older pages with
                                            <code class="hubspot-code-1">before="queued_at of the oldest"</code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>a received file</td>
                                        <td>
                                            <code class="hubspot-code-1">
                                                GET /v1/conversations/{conversation_id}/messages/{message_ref}/media
                                            </code>
                                            (raw bytes; store as an <code class="hubspot-code-1">ir.attachment</code>)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>retry a failed message</td>
                                        <td>
                                            <code class="hubspot-code-1">POST /v1/messages/{message_ref}/retry</code>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <pre class="odoo-code"><code># On-demand status check, e.g. from a "Refresh" button on heydoot.message
def action_refresh_status(self):
    for msg in self.filtered("message_ref"):
        data = msg._hd_request("GET", f"/v1/messages/{msg.message_ref}/status")
        msg.write({"status": data["status"], "send_error": data.get("send_error")})</code></pre>
                    </div>

                    <!-- Receiving replies in Odoo -->
                    <div id="receiving" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #f1e8ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-inbox" style="color: #714B67; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Receiving replies in Odoo</h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            HeyDoot posts every chosen event to an Odoo HTTP controller. The controller checks the
                            signature, then logs replies in the contact's chatter and updates delivery status.
                        </p>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">
                            Register the webhook (HeyDoot admin)
                        </h3>
                        <ol style="color:#4a5568; padding-left: 20px;">
                            <li style="margin-bottom: 8px;">Install the module, so
                                <code class="odoo-code-1">https://&lt;YOUR_ODOO_DOMAIN&gt;/heydoot/events</code> exists.
                            </li>
                            <li style="margin-bottom: 8px;">In HeyDoot, open
                                <strong>Settings → Integrations → Webhooks</strong>, add that URL, and choose
                                <code class="hubspot-code-1">hd.message.received</code>,
                                <code class="hubspot-code-1">hd.message.status</code> and
                                <code class="hubspot-code-1">hd.number.disconnected</code> (plus
                                <code class="hubspot-code-1">hd.conversation.created</code>
                                if you create leads from new chats).
                            </li>
                            <li style="margin-bottom: 8px;">
                                Copy the signing secret (shown once) into the System
                                Parameter <code class="hubspot-code-1">heydoot.webhook_secret</code>.
                            </li>
                            <li style="margin-bottom: 8px;">
                                Leave <strong>Encrypt payloads</strong> off unless you need
                                it; HTTPS already encrypts the traffic. If it is on, see the decryption note below.
                            </li>
                        </ol>
                        <p style="color:#4a5568; margin-top: 10px;">
                            The URL must be public HTTPS and answer <strong>2xx within 8 seconds</strong>. With several
                            databases on one server, set <code class="hubspot-code-1">dbfilter</code> so this URL
                            resolves to the right database.
                        </p>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
                            Module code: <code class="hubspot-code-1">controllers/main.py</code>
                        </h3>
                        <pre class="odoo-code"><code class="hubspot-code-1">
import hashlib
import hmac
import json
import re
import time

from odoo import http
from odoo.http import request

STATUS_RANK = {"queued": 0, "sending": 1, "pending_review": 1, "sent": 2,
               "delivered": 3, "read": 4, "failed": 4, "blocked": 4, "canceled": 4}


class HeydootWebhook(http.Controller):

    @http.route("/heydoot/events", type="http", auth="public", methods=["POST"], csrf=False)
    def heydoot_events(self, **_kw):
        raw = request.httprequest.get_data()          # exact bytes, before any parsing
        ts = request.httprequest.headers.get("x-hd-timestamp", "")
        sig = request.httprequest.headers.get("x-hd-signature", "")
        secret = request.env["ir.config_parameter"].sudo().get_param("heydoot.webhook_secret", "")

        # 1. Replay protection, then 2. the signature over "<timestamp>.<raw body>".
        if not secret or not ts.isdigit() or abs(time.time() - int(ts)) > 300:
            return request.make_response("unauthorized", status=401)
        expected = hmac.new(secret.encode(), ts.encode() + b"." + raw, hashlib.sha256).hexdigest()
        if not hmac.compare_digest(sig, expected):
            return request.make_response("unauthorized", status=401)

        event = json.loads(raw)
        name = event.get("event")
        if name == "hd.message.received":
            self._on_received(event)
        elif name == "hd.message.status":
            self._on_status(event)
        elif name == "hd.number.disconnected":
            request.env.ref("base.partner_admin").sudo().message_post(
                body=f"WhatsApp line {event.get('number_id')} disconnected: messages can't be sent.")
        return request.make_json_response({"ok": True})

    def _on_received(self, ev):
        Msg = request.env["heydoot.message"].sudo()
        if Msg.search_count([("message_ref", "=", ev["message_ref"])]):
            return  # duplicate delivery: already logged

        Partner = request.env["res.partner"].sudo()
        partner = Partner.search([("x_heydoot_conversation_id", "=", ev["conversation_id"])], limit=1)
        digits = re.sub(r"\D", "", ev.get("from") or "")
        if not partner and digits:
            tail = digits[-10:]  # simple match; adapt to your phone formats
            partner = Partner.search(["|", ("mobile", "ilike", tail), ("phone", "ilike", tail)], limit=1)
        if not partner:
            partner = Partner.create({"name": ev.get("sender_name") or f"+{digits}",
                                      "mobile": f"+{digits}"})
        partner.x_heydoot_conversation_id = ev["conversation_id"]

        Msg.create({"partner_id": partner.id, "direction": "inbound", "body": ev.get("text"),
                    "message_ref": ev["message_ref"], "conversation_id": ev["conversation_id"],
                    "status": "received"})
        partner.message_post(body=f"WhatsApp from {ev.get('sender_name') or partner.name}: "
                                  f"{ev.get('text') or '[media]'}")

    def _on_status(self, ev):
        msg = request.env["heydoot.message"].sudo().search([("message_ref", "=", ev["message_ref"])], limit=1)
        new = ev.get("status")
        # Events can arrive out of order: never move a status backwards (read -> delivered).
        if msg and STATUS_RANK.get(new, 0) >= STATUS_RANK.get(msg.status, 0):
            msg.write({"status": new, "send_error": ev.get("send_error")})</code></pre>

                        <p style="color:#4a5568; margin-top: 12px;">
                            The disconnected alert above posts on the admin's partner record to keep the example short.
                            In practice, use an activity or email to whoever looks after WhatsApp.
                        </p>

                        <p style="color:#4a5568; margin-top: 12px;">
                            <strong>Headers on every delivery:</strong>
                            <code class="hubspot-code-1">x-hd-event</code>
                            (event name),<code class="hubspot-code-1">x-hd-timestamp</code>
                            (Unix seconds, new on every retry), <code class="hubspot-code-1">x-hd-signature</code>
                            (hex HMAC-SHA256), and <code class="hubspot-code-1">x-hd-encryption: aes-256-cbc</code> when
                            encryption is on.
                        </p>

                        <p style="color:#4a5568; margin-top: 12px;">
                            <strong>Decryption, only if encryption is on.</strong> Verify the signature first, because
                            it covers the encrypted text. The body is
                            <code class="hubspot-code-1">base64(iv[16] || AES-256-CBC ciphertext)</code> with PKCS#7
                            padding. The key is the
                            webhook's 64-hex-character encryption key, which you would store as another System
                            Parameter, e.g. <code class="hubspot-code-1">heydoot.webhook_key</code>.
                        </p>
                        <pre class="odoo-code"><code>import base64
from cryptography.hazmat.primitives import padding
from cryptography.hazmat.primitives.ciphers import Cipher, algorithms, modes

def heydoot_decrypt(raw: bytes, key_hex: str) -> dict:
    buf = base64.b64decode(raw)
    dec = Cipher(algorithms.AES(bytes.fromhex(key_hex)), modes.CBC(buf[:16])).decryptor()
    padded = dec.update(buf[16:]) + dec.finalize()
    unpad = padding.PKCS7(128).unpadder()
    return json.loads(unpad.update(padded) + unpad.finalize())</code></pre>

                        <p style="color:#4a5568; margin-top: 12px;">
                            <strong>Retries and duplicates.</strong> A delivery without a 2xx is retried 6 more times
                            over about 50 minutes, then marked exhausted (an admin can resend it from HeyDoot). The
                            handlers above skip duplicate replies and ignore status updates that would go backwards.
                        </p>
                    </div>

                    <!-- User attribution -->
                    <div id="user-metrics" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #f1e8ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-user" style="color: #714B67; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">User attribution for User Metrics</h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            Send <code class="hubspot-code-1">user_id</code>,
                            <code class="hubspot-code-1">username</code> and
                            <code class="hubspot-code-1">user_email</code> of the Odoo
                            user on every send (the module above does this), so HeyDoot's User Metrics report shows each
                            Odoo user by name and email.
                        </p>
                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="odoo-table">
                                <thead>
                                    <tr>
                                        <th>What Odoo sends</th>
                                        <th>What User Metrics shows</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>all three fields</td>
                                        <td>the user's name, with their email underneath</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <code class="hubspot-code-1">user_id</code> +
                                            <code class="hubspot-code-1">username</code> only
                                        </td>
                                        <td>the name, with "no linked account &lt;user_id&gt;"</td>
                                    </tr>
                                    <tr>
                                        <td>none of them</td>
                                        <td>the message counts under "API (no user)"</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul style="color:#4a5568; padding-left: 20px;">
                            <li>
                                <code class="hubspot-code-1">user_id</code> is any stable id from your side. The Odoo
                                <code class="hubspot-code-1">res.users</code>
                                id works (<code class="hubspot-code-1">str(env.user.id)</code>).
                            </li>
                            <li>
                                Send <code class="hubspot-code-1">user_email</code> only when it is a real address: an
                                invalid one makes
                                HeyDoot refuse the send with <code class="hubspot-code-1">400 invalid_request</code>.
                            </li>
                            <li>
                                Automated sends, such as order confirmations from an Automation rule, run as the user
                                who triggered them. Use a dedicated "Odoo automation" user if you want those counted
                                separately.
                            </li>
                        </ul>
                    </div>

                    <!-- Errors, limits, retries -->
                    <div id="errors-limits" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #f1e8ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-exclamation-triangle" style="color: #714B67; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Errors, rate limits, quotas and retries
                            </h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            Every error is JSON with an error code and a readable message; the module turns it into a
                            <code class="hubspot-code-1">UserError</code> the user can read. Retry only the temporary
                            ones, always with the same <code class="hubspot-code-1">dispatch_id</code>.
                        </p>

                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="odoo-table">
                                <thead>
                                    <tr>
                                        <th>HTTP</th>
                                        <th>Common error</th>
                                        <th>Cause</th>
                                        <th>What to do</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>400</td>
                                        <td>
                                            <code class="hubspot-code-1">invalid_request</code>,
                                            <code class="hubspot-code-1">invalid_recipient</code>,
                                            <code class="hubspot-code-1">empty_message</code>
                                        </td>
                                        <td>a field breaks the rules, e.g. a phone without country code</td>
                                        <td>fix the data</td>
                                    </tr>
                                    <tr>
                                        <td>401</td>
                                        <td><code class="hubspot-code-1">unauthorized</code></td>
                                        <td>token missing, wrong, expired or revoked</td>
                                        <td>update <code class="hubspot-code-1">heydoot.api_token</code></td>
                                    </tr>
                                    <tr>
                                        <td>402</td>
                                        <td>
                                            <code class="hubspot-code-1">api_not_licensed</code>,
                                            <code class="hubspot-code-1">api_quota_exceeded</code>
                                        </td>
                                        <td>the plan has no API access, or the day/week/month quota is used up</td>
                                        <td>
                                            wait for <code class="hubspot-code-1">resets_at</code>, or upgrade the plan
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>403</td>
                                        <td>
                                            <code class="hubspot-code-1">forbidden</code>,
                                            <code class="hubspot-code-1">license_inactive</code>
                                        </td>
                                        <td>token is read-only, or the organisation can't send right now</td>
                                        <td>use a Read &amp; Send token / contact the HeyDoot admin</td>
                                    </tr>
                                    <tr>
                                        <td>404</td>
                                        <td>
                                            <code class="hubspot-code-1">conversation_not_found</code>,
                                            <code class="hubspot-code-1">number_not_found</code>
                                        </td>
                                        <td>wrong ID</td>
                                        <td>
                                            clear <code class="hubspot-code-1">x_heydoot_conversation_id</code> and send
                                            by phone, or fix the number ID
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>422</td>
                                        <td><code class="hubspot-code-1">recipient_opted_out</code></td>
                                        <td>contact is on the Do-Not-Contact list</td>
                                        <td>don't retry</td>
                                    </tr>
                                    <tr>
                                        <td>429</td>
                                        <td><code class="hubspot-code-1">rate_limited</code></td>
                                        <td>more than 600 requests in a minute (default)</td>
                                        <td>wait <code class="hubspot-code-1">Retry-After</code> seconds</td>
                                    </tr>
                                    <tr>
                                        <td>502 / 503</td>
                                        <td>
                                            <code class="hubspot-code-1">connector_error</code>,
                                            <code class="hubspot-code-1">api_disabled</code>
                                        </td>
                                        <td>WhatsApp line issue, or API access switched off by the admin</td>
                                        <td>retry with backoff / contact the admin</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p style="color:#4a5568; margin-bottom:12px;">
                            <code class="hubspot-code-1">X-RateLimit-Limit</code> and
                            <code class="hubspot-code-1">X-RateLimit-Remaining</code>.
                            Bulk jobs should pause when <code class="hubspot-code-1">Remaining</code> gets
                            low.
                        </p>
                        <p style="color:#4a5568; margin-bottom:12px;">
                            <strong>Plan quota:</strong> responses carry
                            <code class="hubspot-code-1">X-Quota-Limit</code>,
                            <code class="hubspot-code-1">X-Quota-Remaining</code> and
                            <code class="hubspot-code-1">X-Quota-Reset</code>. On 402
                            <code class="hubspot-code-1">api_quota_exceeded</code>, stop sending until
                            <code class="hubspot-code-1">resets_at</code> and keep the
                            unsent messages queued in Odoo.
                        </p>
                        <p style="color:#4a5568;">
                            <strong>Backoff:</strong> on a timeout, 429 or 5xx, retry after about 2, 4, then 8 seconds,
                            with the same <code class="hubspot-code-1">dispatch_id</code>. A scheduled action can pick
                            up messages still stuck in <code class="hubspot-code-1">queued</code> later.
                        </p>
                    </div>

                    <!-- Go-live checklist -->
                    <div id="go-live" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #f1e8ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-list-check" style="color: #714B67; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Go-live checklist</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 12px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        Production base URL, API token (Read &amp; Send) and number ID are in System
                                        Parameters, not in module code
                                    </span>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        HeyDoot API Access is on, and the plan includes API access with a quota that
                                        fits your volume
                                    </span>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>]
                                        Partner phone numbers include the country code
                                    </span>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        Every send carries a new <code class="hubspot-code-1">dispatch_id</code>, logged
                                        before the call and reused on retries
                                    </span>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        Every send carries <code class="odoo-code-1">user_id</code>,
                                        <code class="odoo-code-1">username</code> and (when valid)
                                        <code class="odoo-code-1">user_email</code>
                                    </span>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        <code class="odoo-code-1">/heydoot/events</code> is public HTTPS, resolves to
                                        the right database (<code>dbfilter</code>), checks the timestamp and signature,
                                        and answers within 8 seconds
                                    </span>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        Replies are de-duplicated by <code class="odoo-code-1">message_ref</code>, and
                                        statuses never move backwards
                                    </span>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        Someone is alerted on <code class="odoo-code-1">hd.number.disconnected</code>
                                    </span>
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        Bulk sends run from a scheduled action in batches, pausing on 429 and on 402
                                        <code class="odoo-code-1">api_quota_exceeded</code>
                                    </span>
                                </li>
                                <li style="display: flex; gap: 12px;">
                                    <i class="fas fa-check-circle" style="color: #714B67;"></i>
                                    <span>
                                        Staging uses its own token, webhook and number
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div id="faq-odoo" style="margin-top: 48px;">
                        <h3 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 24px;"><i
                                class="fas fa-question-circle" style="color: #714B67;"></i> FAQs</h3>

                        <div class="faq-item">
                            <div class="faq-question">
                                Does HeyDoot support Odoo Community Edition? <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Yes. The integration works with both Odoo Community and Enterprise
                                editions (v14 and above). Custom Python modules are supported on self-hosted Odoo and on
                                Odoo.sh.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                Can I use this on Odoo Online (odoo.com SaaS)? <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Odoo Online doesn't accept custom Python modules, so you'd use a
                                small relay service instead. The relay calls HeyDoot with the token and writes into Odoo
                                through Odoo's XML-RPC/JSON-RPC API. The HeyDoot side stays exactly the same.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                Can I send media messages (images, PDFs) from Odoo? <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">Yes. Attach order PDFs, invoices or delivery slips as WhatsApp media
                                messages using the <code class="hubspot-code-1">attachment</code> field (image,
                                document, audio or video, max 16 MB).
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">How long does it take to set up the integration?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Most teams complete the setup in under 20 minutes using our
                                step-by-step guide and the sample module code.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                Where are the HeyDoot credentials stored?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                In Odoo System Parameters (<code class="hubspot-code-1">heydoot.base_url</code>,
                                <code class="hubspot-code-1">heydoot.api_token</code>,
                                <code class="hubspot-code-1">heydoot.number_id</code>), never in module code.
                                That keeps production and staging isolated and prevents secrets from reaching Git.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                Will replies from customers show up in Odoo? <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Yes. HeyDoot posts replies and delivery statuses to your
                                <code class="hubspot-code-1">/heydoot/events</code> HTTP controller. The controller
                                verifies the HMAC signature and logs the message in the contact's chatter, de-duplicated
                                by <code class="hubspot-code-1">message_ref</code>.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                Is there a free trial available? <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Yes, we offer a 14-day free trial with full Odoo integration features.
                            </div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div id="cta"
                        style="background: linear-gradient(115deg, #2d1b28, #4a2c42); border-radius: 32px; padding: 48px; text-align: center; margin: 56px 0 32px; color: white;">
                        <i class="fab fa-whatsapp" style="font-size: 56px; color: #25D366; margin-bottom: 16px;"></i>
                        <h2 style="font-size: 2rem; font-weight: 800;">Send and Receive WhatsApp from Odoo</h2>
                        <p style="margin-top: 16px; opacity: 0.9;">Install the small Odoo module, add your HeyDoot
                            System Parameters, and register your webhook URL. You're live in minutes.</p>
                        <div
                            style="display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; margin-top: 32px;">
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-code"></i> REST API + Webhooks</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-cube"></i> Custom Odoo Module</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-shield-alt"></i> HMAC Signed Webhooks</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-bolt"></i> Real-Time Delivery Updates</span>
                        </div>
                        <div style="margin-top: 36px;">
                            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20the%20HeyDoot%20Odoo%20WhatsApp%20integration"
                                class="btn btn-lg" style="background: white; color: #714B67; font-weight: 700;"><i
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

                    <a href="<?php echo BASE_URL; ?>/odoo-api.php" class="utility-item utility-link">
                        <i class="fas fa-code"></i>
                        Odoo API Docs
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