<?php
require_once dirname(__DIR__) . '/config.php';

$page_meta = [
    'title' => 'HubSpot WhatsApp Integration | HeyDoot',
    'meta_title' => 'HubSpot WhatsApp Integration – Automate Customer Conversations with HeyDoot',
    'description' => 'Connect HubSpot with WhatsApp using HeyDoot. Send WhatsApp messages from HubSpot workflows with a Bearer token, receive replies through a signed relay, and log every message on the contact timeline.',

    'og_title' => 'HubSpot WhatsApp Integration | HeyDoot',
    'og_description' => 'Integrate HubSpot with WhatsApp using HeyDoot. Send WhatsApp from workflows, receive replies through a signed relay, and log messages and delivery statuses on the HubSpot contact timeline.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations/hubspot.php',

    'twitter_title' => 'HubSpot WhatsApp Integration | HeyDoot',
    'twitter_description' => 'Send WhatsApp from HubSpot workflows with HeyDoot. Receive replies through a signed relay and log them on the contact timeline.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',

    'canonical' => 'https://heydoot.com/integrations/hubspot.php'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => "HubSpot WhatsApp Integration",
    "serviceType" => "WhatsApp Integration Service",
    "provider" => [
        "@type" => "Organization",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ],
    "description" => "Integrate HubSpot CRM with WhatsApp using HeyDoot to send WhatsApp messages from workflows, receive replies via a signed relay, and log conversations and delivery statuses on the contact timeline.",
    "areaServed" => "Worldwide",
    "url" => "https://heydoot.com/integrations/hubspot.php",
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
<!-- Page Content -->
<main>
    <!-- Hero Section -->
    <section class="hero"
        style="background: linear-gradient(135deg, #0a2b2c 0%, #1d4b2c 100%);padding: 20px 20px 20px;">
        <div class="floating-dots"></div>
        <div style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div
                style="display: inline-block; background: rgba(255,255,255,0.15); backdrop-filter: blur(8px); padding: 6px 16px; border-radius: 60px; margin-bottom: 0;">
                <span style="color: #25D366; font-weight: 600;">
                    <i class="fab fa-hubspot"></i>
                    HubSpot REST API + Webhooks Integration
                </span>
            </div>
        </div>
    </section>
    <style>
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
    <section style="padding: 40px 0;">
        <!-- Main Integration Content -->
        <div class="container-fluid">
            <!-- Two-column layout: On this page sidebar + main content -->
            <div style="display: flex; gap: 48px; flex-wrap: wrap;">
                <!-- Sidebar "On this page" -->
                <aside class="sidebar-card">
                    <div
                        style="position: sticky; top: 100px; background: white; border-radius: 28px; padding: 24px; box-shadow: var(--card-shadow); border: 1px solid rgba(0,0,0,0.04);">
                        <h4 style="font-weight: 700; margin-bottom: 20px; font-size: 1.1rem;">
                            <i class="fas fa-bookmark" style="color: var(--wa-teal); margin-right: 8px;"></i>
                            On this page
                        </h4>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
                            <li>
                                <a href="#overview" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-info-circle" style="color: var(--wa-teal); width: 22px;"></i>
                                    Overview
                                </a>
                            </li>
                            <li>
                                <a href="#plans" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-layer-group" style="color: var(--wa-teal); width: 22px;"></i>
                                    Which HubSpot plan can do this
                                </a>
                            </li>
                            <li>
                                <a href="#prerequisites" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-check-circle" style="color: var(--wa-teal); width: 22px;"></i>
                                    Credentials &amp; setup
                                </a>
                            </li>
                            <li>
                                <a href="#steps" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-plug" style="color: var(--wa-teal); width: 22px;"></i>
                                    Steps to connect
                                </a>
                            </li>
                            <li>
                                <a href="#what-can-be-done" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-magic" style="color: var(--wa-teal); width: 22px;"></i>
                                    What can be done?
                                </a>
                            </li>
                            <li style="margin-left: 20px;">
                                <a href="#sending-messages" style="font-size: 0.85rem; color: #5a6b5f;">
                                    1. Sending WhatsApp from HubSpot
                                </a>
                            </li>
                            <li style="margin-left: 20px;">
                                <a href="#request-fields" style="font-size: 0.85rem; color: #5a6b5f;">
                                    2. Request fields
                                </a>
                            </li>
                            <li style="margin-left: 20px;">
                                <a href="#workflow-setup" style="font-size: 0.85rem; color: #5a6b5f;">
                                    3. Workflow setup
                                </a>
                            </li>
                            <li style="margin-left: 20px;">
                                <a href="#receiving-replies" style="font-size: 0.85rem; color: #5a6b5f;">
                                    4. Receiving replies in HubSpot
                                </a>
                            </li>
                            <li style="margin-left: 20px;">
                                <a href="#errors-limits" style="font-size: 0.85rem; color: #5a6b5f;">
                                    5. Errors, limits &amp; retries
                                </a>
                            </li>
                            <li style="margin-left: 20px;">
                                <a href="#go-live" style="font-size: 0.85rem; color: #5a6b5f;">
                                    6. Go-live checklist
                                </a>
                            </li>
                            <li>
                                <a href="#faqs" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-question-circle" style="color: var(--wa-teal);"></i>
                                    FAQs ?
                                </a>
                            </li>
                            <li>
                                <a href="#done" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-party-horn" style="color: var(--wa-teal);"></i>
                                    Done
                                </a>
                            </li>
                        </ul>
                        <div style="margin-top:24px;padding-top:20px;border-top:1px solid #f0f0f0;">
                            <p style="font-size:.85rem;color:#6b7280;margin-bottom:10px;">Need API / technical docs?</p>
                            <a href="<?php echo BASE_URL; ?>/404.php"
                                style="display:flex;align-items:center;gap:10px;background:#eef2ff;border-radius:14px;padding:12px 16px;color:#1E3A5F;font-weight:600;font-size:.9rem;text-decoration:none;">
                                <i class="fas fa-code"></i>
                                Services Page →
                            </a>
                        </div>
                    </div>
                </aside>

                <!-- Main Content -->
                <main style="flex: 2.5; min-width: 280px;">
                    <!-- Integration Status Banner -->
                    <div
                        style="background: linear-gradient(105deg, #fff7ed 0%, #fffbeb 100%); border-left: 5px solid #F59E0B; border-radius: 20px; padding: 20px 28px; margin-bottom: 48px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                        <div>
                            <i class="fas fa-info-circle" style="color: #F59E0B; margin-right: 12px;"></i>
                            <strong>HeyDoot integration for HubSpot is currently under review.</strong>
                            <span style="color: #4b5563;">
                                In order to use HeyDoot integration with HubSpot, you can connect with
                                HubSpot from
                            </span>
                            <a href="<?php echo BASE_URL; ?>/integrations/hubspot-settings.php"
                                style="color: var(--wa-teal); font-weight: 600;"> HeyDoot HubSpot settings →
                            </a>
                        </div>
                        <div>
                            <a href="<?php echo BASE_URL; ?>/integrations/hubspot-troubleshooting.php"
                                style="background: #f3f4f6; padding: 8px 18px; border-radius: 40px; font-size: 0.85rem;">
                                <i class="fas fa-bug"></i> Troubleshooting: Not receiving notifications
                            </a>
                        </div>
                    </div>
                    <!-- Overview Section -->
                    <div id="overview" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-info-circle" style="color: var(--wa-teal); font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Overview</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <p style="color: #4a5b4e; margin-bottom: 18px;">
                                HubSpot connects to HeyDoot through HeyDoot's standard REST API and webhooks. HubSpot
                                sends WhatsApp messages from a workflow with a Bearer token. A small relay service
                                receives HeyDoot's webhooks, checks their signature and writes replies into HubSpot.
                            </p>
                            <div style="overflow-x:auto; margin-bottom: 20px;">
                                <table style="width:100%; border-collapse: collapse; font-size: 0.9rem;">
                                    <thead>
                                        <tr style="background:#e9f5ef;">
                                            <th style="text-align:left; padding:10px; border:1px solid #d7e6dc;">
                                                Direction
                                            </th>
                                            <th style="text-align:left; padding:10px; border:1px solid #d7e6dc;">
                                                How
                                            </th>
                                            <th style="text-align:left; padding:10px; border:1px solid #d7e6dc;">
                                                Auth
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">HubSpot → HeyDoot (send)
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">Workflow Custom code
                                                action calls <code>POST /v1/messages/send</code></td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">
                                                <code>Authorization: Bearer &lt;HEYDOOT_API_TOKEN&gt;</code>
                                            </td>
                                        </tr>
                                        <tr style="background:#fafffb;">
                                            <td style="padding:10px; border:1px solid #d7e6dc;">HeyDoot → relay (events)
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">HeyDoot calls
                                                <code>https://&lt;YOUR_RELAY_DOMAIN&gt;/heydoot/events</code>
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">HMAC-SHA256 signature
                                                with the webhook's signing secret</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">relay → HubSpot (log)
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">Relay calls the HubSpot
                                                CRM API to log the message on the contact</td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">
                                                <code>Authorization: Bearer &lt;HUBSPOT_PRIVATE_APP_TOKEN&gt;</code>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p style="color:#4a5b4e; margin-bottom:14px;">
                                <em>Sends go straight to HeyDoot; replies come back through your relay.</em>
                            </p>
                            <p style="color:#4a5b4e; margin-bottom:14px;">
                                HubSpot only ever calls HeyDoot to send. Everything coming back goes through the relay,
                                which holds the only HubSpot token.
                            </p>
                            <p style="color:#4a5b4e;">
                                <strong>Why a relay is needed.</strong> HubSpot has no endpoint that can check HeyDoot's
                                HMAC signature before writing data. Without a check, anyone who finds the URL could
                                write fake messages into your CRM. The relay is about 80 lines of Node.js and runs on
                                any serverless platform (AWS Lambda, Google Cloud Functions, Vercel, Cloudflare
                                Workers) or a small server.
                            </p>
                        </div>
                    </div>

                    <!-- Plans -->
                    <div id="plans" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-layer-group" style="color: var(--wa-teal); font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Which HubSpot plan can do this</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <div style="overflow-x:auto;">
                                <table style="width:100%; border-collapse: collapse; font-size: 0.9rem;">
                                    <thead>
                                        <tr style="background:#e9f5ef;">
                                            <th style="text-align:left; padding:10px; border:1px solid #d7e6dc;">
                                                Part
                                            </th>
                                            <th style="text-align:left; padding:10px; border:1px solid #d7e6dc;">
                                                HubSpot requirement
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">
                                                Sending from a workflow with custom code
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">
                                                Operations Hub / Data Hub <strong>Professional or Enterprise</strong>
                                            </td>
                                        </tr>
                                        <tr style="background:#fafffb;">
                                            <td style="padding:10px; border:1px solid #d7e6dc;">
                                                Logging replies through the CRM API (relay)
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">
                                                Any plan, including free, with a private app
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">
                                                Sending without Operations Hub
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">
                                                The relay (or your own backend) sends instead, triggered by a HubSpot
                                                webhook subscription or your app
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p style="color:#4a5b4e; margin:16px 0;">
                                Plan names change often. Confirm with your HubSpot admin that <strong>Custom
                                    code</strong>
                                appears in the workflow action list before you start.
                            </p>
                        </div>
                    </div>

                    <!-- Credentials & setup / Prerequisites -->
                    <div id="prerequisites" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-clipboard-list" style="color: var(--wa-teal); font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Credentials and HubSpot setup</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <p style="color: #4a5b4e; margin-bottom: 18px;">
                                You need four values from HeyDoot and one from HubSpot. Keep every secret in HubSpot
                                workflow secrets or the relay's environment variables, never in code.
                            </p>

                            <div style="overflow-x:auto; margin-bottom: 20px;">
                                <table style="width:100%; border-collapse: collapse; font-size: 0.9rem;">
                                    <thead>
                                        <tr style="background:#e9f5ef;">
                                            <th style="text-align:left; padding:10px; border:1px solid #d7e6dc;">Value
                                            </th>
                                            <th style="text-align:left; padding:10px; border:1px solid #d7e6dc;">Where
                                                it comes from</th>
                                            <th style="text-align:left; padding:10px; border:1px solid #d7e6dc;">Stored
                                                in</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">
                                                <code>&lt;HEYDOOT_API_BASE_URL&gt;</code>
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">the HeyDoot team</td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">workflow secret
                                                <code>HEYDOOT_BASE_URL</code>
                                            </td>
                                        </tr>
                                        <tr style="background:#fafffb;">
                                            <td style="padding:10px; border:1px solid #d7e6dc;">
                                                <code>&lt;HEYDOOT_API_TOKEN&gt;</code> (<code>hd_live_…</code>, <em>Read
                                                    &amp; Send</em>)
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">HeyDoot admin →
                                                <strong>Settings → Integrations → API Tokens</strong> (shown once)
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">workflow secret
                                                <code>HEYDOOT_TOKEN</code> and relay env
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">
                                                <code>&lt;NUMBER_ID&gt;</code>
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">HeyDoot admin →
                                                <strong>Settings → Phones</strong>, or <code>GET /v1/numbers</code>
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">workflow secret
                                                <code>HEYDOOT_NUMBER_ID</code>
                                            </td>
                                        </tr>
                                        <tr style="background:#fafffb;">
                                            <td style="padding:10px; border:1px solid #d7e6dc;">
                                                <code>&lt;WEBHOOK_SIGNING_SECRET&gt;</code>
                                            </td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">shown once when the
                                                relay URL is added as a HeyDoot webhook</td>
                                            <td style="padding:10px; border:1px solid #d7e6dc;">relay env
                                                <code>HEYDOOT_WEBHOOK_SECRET</code>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <ol style="color:#4a5b4e; padding-left:20px;">
                                <li style="margin-bottom:10px;"><strong>Turn on HeyDoot API access.</strong> A HeyDoot
                                    admin checks that API Access is on and that the plan includes API calls, then
                                    creates a <em>Read &amp; Send</em> token labelled e.g. "HubSpot production".</li>
                                <li style="margin-bottom:10px;"><strong>Create a HubSpot private app.</strong> In
                                    HubSpot go to <strong>Settings → Integrations → Private Apps</strong> (newer
                                    portals may list it under <em>Legacy Apps</em>), create "HeyDoot relay" and grant
                                    these scopes:
                                    <ul style="padding-left:20px; margin-top:6px;">
                                        <li>
                                            <code class="hubspot-code-1">crm.objects.contacts.read</code>,
                                        </li>
                                        <li>
                                            <code class="hubspot-code-1">crm.objects.contacts.write</code>.
                                        </li>
                                    </ul>
                                    Copy the access token. It is used only by the relay.
                                </li>
                                <li style="margin-bottom:10px;"><strong>Add two contact properties.</strong> In
                                    <strong>Settings → Properties → Contact properties</strong>, create:
                                    <ul style="padding-left:20px; margin-top:6px;">
                                        <li>
                                            <code class="hubspot-code-1">heyDoot_conversation_id</code> (single-line
                                            text): the HeyDoot chat
                                            for this contact, so replies go to the same chat.
                                        </li>
                                        <li>
                                            <code class="hubspot-code-1">heyDoot_last_status</code> (single-line text,
                                            optional): the delivery
                                            status of the last WhatsApp sent.
                                        </li>
                                    </ul>
                                </li>
                                <li style="margin-bottom:10px;">
                                    <strong>Check phone numbers.</strong> Every contact's
                                    Mobile phone number must include the country code, e.g.
                                    <code>+919876543210</code>. HeyDoot can't guess the country.
                                </li>
                            </ol>
                        </div>
                    </div>

                    <!-- Steps to connect -->
                    <div id="steps" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-rocket" style="color: var(--wa-teal); font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Steps to connect HeyDoot with HubSpot
                            </h2>
                        </div>
                        <div class="automation-grid"
                            style="grid-template-columns: repeat(auto-fit, minmax(320px,1fr)); display: grid; gap: 20px;">
                            <div class="automation-card" style="padding: 24px;">
                                <div class="automation-icon" style="background: #FF7A59; color: white;">1</div>
                                <h3>Turn on HeyDoot API access</h3>
                                <p>Confirm API Access is on, the plan includes API calls, and create a Read &amp; Send
                                    token labelled e.g. "HubSpot production".</p>
                            </div>
                            <div class="automation-card" style="padding: 24px;">
                                <div class="automation-icon" style="background: #FF7A59; color: white;">2</div>
                                <h3>Create a HubSpot private app</h3>
                                <p>Create "HeyDoot relay" under Settings → Integrations → Private Apps. Grant
                                    <code class="hubspot-code-1">crm.objects.contacts.read</code> and
                                    <code class="hubspot-code-1">crm.objects.contacts.write</code>. Copy the access
                                    token — it is used only by
                                    the relay.
                                </p>
                            </div>
                            <div class="automation-card" style="padding: 24px;">
                                <div class="automation-icon" style="background: #FF7A59; color: white;">3</div>
                                <h3>Add two contact properties</h3>
                                <p>Create <code>heyDoot_conversation_id</code> (so replies go to the same chat) and,
                                    optionally, <code>heyDoot_last_status</code> (delivery status of the last WhatsApp
                                    sent).</p>
                            </div>
                            <div class="automation-card" style="padding: 24px;">
                                <div class="automation-icon" style="background: #FF7A59; color: white;">4</div>
                                <h3>Check phone numbers</h3>
                                <p>Every contact's Mobile phone number must include the country code, e.g.
                                    <code>+919876543210</code>. HeyDoot can't guess the country.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- What can be done -->
                    <div id="what-can-be-done" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-cogs" style="color: var(--wa-teal); font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">What can be done with the integration?
                            </h2>
                        </div>

                        <!-- 1. Sending a WhatsApp from HubSpot -->
                        <div id="sending-messages" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: flex-start;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-paper-plane" style="font-size: 28px; color: #FF7A59;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">1. Sending a WhatsApp from HubSpot
                                    </h3>
                                    <p style="color: #4a5b4e;">A contact-based workflow runs a Custom code action that
                                        calls POST <code
                                            class="hubspot-code-1"> https://&lt;HEYDOOT_API_BASE_URL&gt;/v1/messages/send</code>.
                                        HeyDoot accepts the message straight away (<strong>202</strong>) and reports
                                        delivery later by webhook.</p>

                                    <p style="color:#4a5b4e; margin:16px 0;"><strong>Workflow setup</strong></p>
                                    <ol style="color:#4a5b4e; padding-left:20px;">
                                        <li style="margin-bottom:6px;"><strong>Automation → Workflows → Create workflow
                                                → Contact-based.</strong>
                                            Pick the trigger, e.g. <em>Lifecycle stage is Customer</em> or <em>Deal
                                                stage is Closed won</em> (in a deal-based workflow, use the associated
                                            contact).</li>
                                        <li style="margin-bottom:6px;">Add the action <strong>Custom code</strong>,
                                            language Node.js.</li>
                                        <li style="margin-bottom:6px;">Under <strong>Secrets</strong>, add
                                            <code>HEYDOOT_BASE_URL</code>, <code>HEYDOOT_TOKEN</code> and
                                            <code>HEYDOOT_NUMBER_ID</code>.
                                        </li>
                                        <li style="margin-bottom:6px;">Under <strong>Property to include in
                                                code</strong>,
                                            add <code>mobilephone</code>, <code>firstname</code>,
                                            <code>heyDoot_conversation_id</code> and <code>hs_object_id</code>.
                                        </li>
                                        <li style="margin-bottom:6px;">Paste the code below, then define the outputs
                                            <code>message_ref</code>, <code>conversation_id</code> and
                                            <code>status</code> (all strings).
                                        </li>
                                        <li>Add a <strong>Set property value</strong> action after it:
                                            <code>heydoot_conversation_id</code> = the <code>conversation_id</code>
                                            output, so later sends reuse the same chat.
                                        </li>
                                    </ol>

                                    <p style="color:#4a5b4e; margin:16px 0;"><strong>Custom code action
                                            (Node.js)</strong></p>
                                    <pre
                                        style="background:#0f172a; color:#e2e8f0; border-radius:12px; padding:16px; overflow-x:auto; font-size:0.82rem; line-height:1.5;"><code>const axios  = require('axios');
const crypto = require('crypto');

exports.main = async (event, callback) =&gt; {
  const p    = event.inputFields;
  const base = process.env.HEYDOOT_BASE_URL.replace(/\/$/, '');

  const body = {
    text: `Hi ${p.firstname || 'there'}, thanks for choosing us! Reply here if you have any questions.`,
    // Same enrollment = same id, so HubSpot's automatic retry never double-sends.
    dispatch_id: uuidFrom(`${event.callbackId || p.hs_object_id}`),
    user_id:     'hubspot-workflow',
    username:    'HubSpot workflow',
  };

  if (p.heyDoot_conversation_id) {
    body.conversation_id = p.heyDoot_conversation_id;
  } else {
    if (!p.mobilephone) throw new Error('Contact has no mobile phone number');
    body.to        = p.mobilephone;          // must include the country code
    body.number_id = process.env.HEYDOOT_NUMBER_ID;
  }

  try {
    const { data } = await axios.post(`${base}/v1/messages/send`, body, {
      headers: { Authorization: `Bearer ${process.env.HEYDOOT_TOKEN}` },
      timeout: 15000, // custom code must finish within 20 s
    });

    callback({ outputFields: {
      message_ref:     data.message_ref,
      conversation_id: data.conversation_id,
      status:          data.status,
    }});
  } catch (err) {
    const code = err.response?.status;

    // 429 / 5xx / timeout: rethrow so HubSpot retries the action (same dispatch_id).
    if (!code || code === 429 || code &gt;= 500) throw err;

    // 4xx: don't retry; surface the reason in the workflow history.
    callback({ outputFields: {
      message_ref:     '',
      conversation_id: '',
      status:          `error:${err.response.data.error}`,
    }});
  }
};

// Deterministic UUID (v4 layout) from a string.
function uuidFrom(s) {
  const h = crypto.createHash('sha256').update(s).digest('hex');
  return `${h.slice(0,8)}-${h.slice(8,12)}-${h.slice(13,16)}-a${h.slice(17,20)}-${h.slice(20,32)}`;
}</code></pre>

                                    <p style="color:#4a5b4e; margin:16px 0;">To send from a person instead of the
                                        workflow, set <code>user_id</code>, <code>username</code> and
                                        <code>user_email</code> from the contact owner (include
                                        <code>hubspot_owner_id</code> as a property and look the owner up), so
                                        HeyDoot's User Metrics counts each sales rep separately.
                                    </p>

                                    <p style="color:#4a5b4e; margin:16px 0;">Example response:</p>
                                    <pre
                                        style="background:#0f172a; color:#e2e8f0; border-radius:12px; padding:16px; overflow-x:auto; font-size:0.82rem; line-height:1.5;"><code>{
  "status": "queued",
  "message_ref": "hd_4F0C9A1B7E2D3C5A6B8E9F",
  "conversation_id": "c3a1_...",
  "dispatch_id": "6c0e1b2a-58f4-4b7e-9d0c-2f1a7e3b9c11"
}</code></pre>
                                    <p style="color:#4a5b4e; margin-top:8px;">A <code>queued</code> status means
                                        accepted, not delivered yet. Delivery arrives by webhook
                                        (<code>hd.message.status</code>) with the same <code>message_ref</code>.</p>

                                    <p style="color:#4a5b4e; margin:16px 0;"><strong>No Operations Hub?</strong> Let
                                        your relay or backend do the sending. Subscribe the private app to a contact
                                        property change (e.g. a <code>send_whatsapp_welcome</code> checkbox your team
                                        ticks) under the app's <strong>Webhooks</strong> tab; HubSpot calls the relay,
                                        and the relay calls HeyDoot with the same body as above. The workflow <em>Send
                                            a webhook</em> action is also gated to Operations Hub Professional.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Request fields -->
                        <div id="request-fields" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: flex-start;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-list-ul" style="font-size: 28px; color: #FF7A59;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">2. Request fields</h3>
                                    <div style="overflow-x:auto;">
                                        <table style="width:100%; border-collapse: collapse; font-size: 0.88rem;">
                                            <thead>
                                                <tr style="background:#e9f5ef;">
                                                    <th
                                                        style="text-align:left; padding:10px; border:1px solid #d7e6dc;">
                                                        Field</th>
                                                    <th
                                                        style="text-align:left; padding:10px; border:1px solid #d7e6dc;">
                                                        Required</th>
                                                    <th
                                                        style="text-align:left; padding:10px; border:1px solid #d7e6dc;">
                                                        Rules / meaning</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;"><code>to</code>
                                                        + <code>number_id</code></td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">one of the two
                                                        ways</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">phone with
                                                        country code, e.g. <code>+919876543210</code> — start or
                                                        continue a chat by phone number</td>
                                                </tr>
                                                <tr style="background:#fafffb;">
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>conversation_id</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">one of the two
                                                        ways</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">from an earlier
                                                        send or a webhook — reply in a known chat</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>text</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">text or
                                                        attachment</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">message text;
                                                        the caption when there is a file</td>
                                                </tr>
                                                <tr style="background:#fafffb;">
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>attachment</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">text or
                                                        attachment</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>{"kind": "document", "source_url": "https://...", "file_name": "Quote.pdf"}</code>,
                                                        max 16 MB — image, document, audio or video
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>dispatch_id</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">recommended</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">UUID idempotency
                                                        key: a retry with the same value never sends twice</td>
                                                </tr>
                                                <tr style="background:#fafffb;">
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>user_id</code>, <code>username</code>,
                                                        <code>user_email</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">recommended</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">up to 128 / 200
                                                        / 254 characters — who sent it (User Metrics)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Workflow setup -->
                        <div id="workflow-setup" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: flex-start;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-code-branch" style="font-size: 28px; color: #FF7A59;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">3. Workflow setup recap</h3>
                                    <ol style="color:#4a5b4e; padding-left:20px;">
                                        <li style="margin-bottom:6px;">Create a contact-based workflow and pick the
                                            trigger.</li>
                                        <li style="margin-bottom:6px;">Add the Custom code action (Node.js).</li>
                                        <li style="margin-bottom:6px;">Add the workflow secrets
                                            <code>HEYDOOT_BASE_URL</code>, <code>HEYDOOT_TOKEN</code> and
                                            <code>HEYDOOT_NUMBER_ID</code>.
                                        </li>
                                        <li style="margin-bottom:6px;">Include contact properties
                                            <code>mobilephone</code>, <code>firstname</code>,
                                            <code>heyDoot_conversation_id</code>, <code>hs_object_id</code>.
                                        </li>
                                        <li style="margin-bottom:6px;">Define outputs <code>message_ref</code>,
                                            <code>conversation_id</code>, <code>status</code>.
                                        </li>
                                        <li>Set <code>heydoot_conversation_id</code> from the
                                            <code>conversation_id</code> output so later sends reuse the same chat.
                                        </li>
                                    </ol>
                                    <p style="color:#4a5b4e; margin-top:12px;">A workflow that enrolls thousands of
                                        contacts at once will hit the rate limit and increase WhatsApp ban risk. Set
                                        the workflow's action rate limit (e.g. <strong>20 per minute</strong>) and keep
                                        campaigns to contacts who expect your messages.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Receiving replies in HubSpot -->
                        <div id="receiving-replies" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: flex-start;flex-wrap: wrap;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fab fa-whatsapp" style="font-size: 32px; color: #25D366;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">4. Receiving replies in HubSpot
                                    </h3>
                                    <p style="color:#4a5b4e;">The relay checks each HeyDoot webhook's signature, finds
                                        or creates the HubSpot contact, and logs the message on the contact's timeline
                                        as a WhatsApp communication
                                        (<code>hs_communication_channel_type: WHATS_APP</code>).</p>

                                    <p style="color:#4a5b4e; margin-top:14px;"><strong>Register the webhook (HeyDoot
                                            admin)</strong></p>
                                    <ol style="color:#4a5b4e; padding-left:20px;">
                                        <li style="margin-bottom:6px;">Deploy the relay, so
                                            <code
                                                class="hubspot-code-1">https://&lt;YOUR_RELAY_DOMAIN&gt;/heydoot/events</code>
                                            exists.
                                        </li>
                                        <li style="margin-bottom:6px;">In HeyDoot, open <strong>Settings → Integrations
                                                → Webhooks</strong>, add that URL, and choose
                                            <code>hd.message.received</code>, <code>hd.message.status</code> and
                                            <code>hd.number.disconnected</code>.
                                        </li>
                                        <li style="margin-bottom:6px;">Copy the signing secret (shown once) into the
                                            relay's <code>HEYDOOT_WEBHOOK_SECRET</code>.</li>
                                        <li>Leave <strong>Encrypt payloads</strong> off; HTTPS already encrypts the
                                            traffic.</li>
                                    </ol>
                                    <p style="color:#4a5b4e; margin-top:10px;">The URL must be public HTTPS and answer
                                        <strong>2xx within 8 seconds</strong>.
                                    </p>

                                    <p style="color:#4a5b4e; margin:16px 0;"><strong>Relay (Node.js 18+,
                                            Express)</strong></p>
                                    <pre
                                        style="background:#0f172a; color:#e2e8f0; border-radius:12px; padding:16px; overflow-x:auto; font-size:0.78rem; line-height:1.5;"><code>const express = require('express');
const crypto  = require('crypto');

const HS = 'https://api.hubapi.com';
const hsHeaders = {
  Authorization: `Bearer ${process.env.HUBSPOT_TOKEN}`,
  'Content-Type': 'application/json',
};
const seen = new Set(); // use Redis or a DB table in production

const app = express();

// Keep the raw bytes: the signature covers them exactly.
app.post('/heydoot/events', express.raw({ type: '*/*' }), async (req, res) =&gt; {
  const raw = req.body;                               // Buffer
  const ts  = req.get('x-hd-timestamp') || '';
  const sig = req.get('x-hd-signature') || '';

  // 1. Replay protection, then 2. HMAC-SHA256 over "&lt;timestamp&gt;.&lt;raw body&gt;".
  if (!/^\d+$/.test(ts) || Math.abs(Date.now() / 1000 - Number(ts)) &gt; 300) return res.sendStatus(401);

  const expected = crypto.createHmac('sha256', process.env.HEYDOOT_WEBHOOK_SECRET)
    .update(`${ts}.`).update(raw).digest('hex');

  if (sig.length !== expected.length ||
      !crypto.timingSafeEqual(Buffer.from(sig), Buffer.from(expected))) return res.sendStatus(401);

  const ev = JSON.parse(raw.toString('utf8'));
  res.sendStatus(200);                                 // acknowledge fast, then work

  try {
    if (ev.event === 'hd.message.received')        await onReceived(ev);
    else if (ev.event === 'hd.message.status')     await onStatus(ev);
    else if (ev.event === 'hd.number.disconnected') console.error('WhatsApp line disconnected', ev.number_id);
  } catch (e) {
    console.error('HubSpot write failed', ev.event, e);
  }
});

async function hs(method, path, body) {
  const r = await fetch(`${HS}${path}`, {
    method, headers: hsHeaders, body: body &amp;&amp; JSON.stringify(body),
  });
  if (!r.ok) throw new Error(`HubSpot ${r.status}: ${await r.text()}`);
  return r.status === 204 ? null : r.json();
}

async function findContact(ev) {
  const search = (filters) =&gt; hs('POST', '/crm/v3/objects/contacts/search',
    { filterGroups: filters, limit: 1 }).then((d) =&gt; d.results[0]);

  // Best match: the chat we stored on the contact when we sent.
  let c = await search([{ filters: [
    { propertyName: 'heydoot_conversation_id', operator: 'EQ', value: ev.conversation_id },
  ]}]);
  if (c) return c.id;

  // Next: the phone number's last 10 digits. Adapt to how your portal stores phones.
  const digits = String(ev.from || '').replace(/\D/g, '');
  if (digits) {
    const tail = `*${digits.slice(-10)}`;
    c = await search([
      { filters: [{ propertyName: 'mobilephone', operator: 'CONTAINS_TOKEN', value: tail }]},
      { filters: [{ propertyName: 'phone',       operator: 'CONTAINS_TOKEN', value: tail }]},
    ]);
    if (c) return c.id;
  }

  // Otherwise create the contact.
  const created = await hs('POST', '/crm/v3/objects/contacts', {
    properties: { firstname: ev.sender_name || `+${digits}`, mobilephone: `+${digits}` },
  });
  return created.id;
}

async function onReceived(ev) {
  if (seen.has(ev.message_ref)) return;                // duplicate delivery
  seen.add(ev.message_ref);

  const contactId = await findContact(ev);

  await hs('PATCH', `/crm/v3/objects/contacts/${contactId}`, {
    properties: { heydoot_conversation_id: ev.conversation_id },
  });

  await hs('POST', '/crm/v3/objects/communications', {
    properties: {
      hs_communication_channel_type: 'WHATS_APP',
      hs_communication_logged_from:  'CRM',
      hs_communication_body:         `WhatsApp from ${ev.sender_name || 'contact'}: ${ev.text || '[media]'}`,
      hs_timestamp:                  ev.received_at,
    },
    associations: [{
      to:    { id: contactId },
      types: [{ associationCategory: 'HUBSPOT_DEFINED', associationTypeId: 81 }], // communication &gt; contact
    }],
  });
}

const RANK = { queued:0, sending:1, pending_review:1, sent:2, delivered:3, read:4, failed:4, blocked:4, canceled:4 };

async function onStatus(ev) {
  const found = await hs('POST', '/crm/v3/objects/contacts/search', {
    limit: 1,
    properties: ['heydoot_last_status'],
    filterGroups: [{ filters: [
      { propertyName: 'heydoot_conversation_id', operator: 'EQ', value: ev.conversation_id },
    ]}],
  });
  const c = found.results[0];
  if (!c) return;

  // Events can arrive out of order: never move a status backwards (read -&gt; delivered).
  const old = c.properties.heydoot_last_status;
  if (old &amp;&amp; (RANK[ev.status] ?? 0) &lt; (RANK[old] ?? 0)) return;

  await hs('PATCH', `/crm/v3/objects/contacts/${c.id}`, {
    properties: { heydoot_last_status: ev.status },
  });
}

app.listen(process.env.PORT || 3000);</code></pre>

                                    <p style="color:#4a5b4e; margin-top:14px;"><strong>What the events carry.</strong>
                                        <code>hd.message.received</code> has <code>message_ref</code>,
                                        <code>conversation_id</code>, <code>number_id</code>, <code>from</code>
                                        (digits), <code>text</code>, <code>message_type</code>,
                                        <code>sender_name</code>, <code>has_media</code> and
                                        <code>received_at</code>. <code>hd.message.status</code> has
                                        <code>message_ref</code>, <code>conversation_id</code> and
                                        <code>status</code>, plus <code>send_error</code> on failure.
                                    </p>

                                    <p style="color:#4a5b4e; margin-top:10px;"><strong>Logging your outgoing messages
                                            too.</strong> To see sent messages on the timeline as well, have the relay
                                        log
                                        a communication when the first <em>sent</em> status arrives, or add a
                                        <em>Create activity</em> step after the custom code action in the workflow.
                                    </p>

                                    <p style="color:#4a5b4e; margin-top:10px;"><strong>Headers on every
                                            delivery:</strong>
                                        <code>x-hd-event</code> (event name), <code>x-hd-timestamp</code> (Unix
                                        seconds, new on every retry), <code>x-hd-signature</code> (hex HMAC-SHA256).
                                    </p>

                                    <p style="color:#4a5b4e; margin-top:10px;"><strong>Retries and duplicates.</strong>
                                        A
                                        delivery without a 2xx is retried 6 more times over about 50 minutes, then
                                        marked exhausted (an admin can resend it from HeyDoot). The relay skips
                                        duplicate replies by <code>message_ref</code> and ignores status updates that
                                        would go backwards. The in-memory seen set is lost on restart and isn't shared
                                        across instances, so use Redis or a database in production.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 5. Errors, limits & retries -->
                        <div id="errors-limits" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: flex-start;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-exclamation-triangle" style="font-size: 28px; color: #FF7A59;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">5. Errors, limits and retries</h3>
                                    <p style="color:#4a5b4e;">Every HeyDoot error is JSON with an error code and a
                                        readable message. Retry only the temporary ones, always with the same
                                        <code>dispatch_id</code>. The custom code above already does this.
                                    </p>

                                    <div style="overflow-x:auto; margin-top:14px;">
                                        <table style="width:100%; border-collapse: collapse; font-size: 0.85rem;">
                                            <thead>
                                                <tr style="background:#e9f5ef;">
                                                    <th
                                                        style="text-align:left; padding:10px; border:1px solid #d7e6dc;">
                                                        Code</th>
                                                    <th
                                                        style="text-align:left; padding:10px; border:1px solid #d7e6dc;">
                                                        Error</th>
                                                    <th
                                                        style="text-align:left; padding:10px; border:1px solid #d7e6dc;">
                                                        Meaning / fix</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">400</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>invalid_request</code>, <code>invalid_recipient</code>,
                                                        <code>empty_message</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">a field breaks
                                                        the rules, e.g. a phone without country code — fix the contact's
                                                        data</td>
                                                </tr>
                                                <tr style="background:#fafffb;">
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">401</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>unauthorized</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">token missing,
                                                        wrong, expired or revoked — update the
                                                        <code>HEYDOOT_TOKEN</code> secret
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">402</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>api_not_licensed</code>, <code>api_quota_exceeded</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">the plan has no
                                                        API access, or the day/week/month quota is used up — wait for
                                                        <code>resets_at</code>, or upgrade the plan
                                                    </td>
                                                </tr>
                                                <tr style="background:#fafffb;">
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">403</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>forbidden</code>, <code>license_inactive</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">token is
                                                        read-only, or the organisation can't send right now — use a Read
                                                        &amp; Send token</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">404</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>conversation_not_found</code>,
                                                        <code>number_not_found</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">clear keyword
                                                        <code>conversation_id</code> and send by phone, or fix the
                                                        number ID
                                                    </td>
                                                </tr>
                                                <tr style="background:#fafffb;">
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">422</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>recipient_opted_out</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">contact is on
                                                        HeyDoot's Do-Not-Contact list — don't retry; consider syncing it
                                                        to HubSpot's opt-out</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">429</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>rate_limited</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">more than 600
                                                        requests in a minute (default) — wait <code>Retry-After</code>
                                                        seconds</td>
                                                </tr>
                                                <tr style="background:#fafffb;">
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">502 / 503</td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">
                                                        <code>connector_error</code>, <code>api_disabled</code>
                                                    </td>
                                                    <td style="padding:10px; border:1px solid #d7e6dc;">WhatsApp line
                                                        issue, or API access switched off by the admin — admin retry
                                                        with backoff / contact the admin</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <ul style="color:#4a5b4e; padding-left:20px; margin-top:14px;">
                                        <li style="margin-bottom:8px;"><strong>HubSpot retries for you.</strong> When
                                            the custom code throws on a 429, 5xx or timeout, HubSpot retries the action
                                            for up to three days. The <code>dispatch_id</code> built from the
                                            enrollment makes those retries safe.</li>
                                        <li style="margin-bottom:8px;"><strong>Throttle big enrollments.</strong> A
                                            workflow that enrolls thousands of contacts at once hits the rate limit
                                            and the WhatsApp ban risk. Set the workflow's action rate limit (e.g. 20
                                            per minute) and keep campaigns to contacts who expect your messages.</li>
                                        <li style="margin-bottom:8px;"><strong>Plan quota:</strong> responses carry
                                            <code>X-Quota-Limit</code>, <code>X-Quota-Remaining</code> and
                                            <code>X-Quota-Reset</code>. On 402 <code>api_quota_exceeded</code>, pause
                                            the workflow until the reset.
                                        </li>
                                        <li><strong>Phone format:</strong> HeyDoot accepts spaces and dashes, but the
                                            number must start with <code>+</code> and the country code. A contact
                                            stored as <code>98765 43210</code> fails with
                                            <code>invalid_recipient</code>.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 6. Go-live checklist -->
                        <div id="go-live" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: flex-start;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-list-check" style="font-size: 28px; color: var(--wa-teal);"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">6. Go-live checklist</h3>
                                    <ul style="color:#4a5b4e; padding-left:20px;">
                                        <li>Production base URL, API token (Read &amp; Send) and number ID are workflow
                                            secrets, not in code.</li>
                                        <li>HeyDoot API Access is on, and the plan includes API access with a quota
                                            that fits your volume.</li>
                                        <li>Contact mobile numbers include the country code.</li>
                                        <li>The custom code action is tested on one internal contact, and
                                            <code>heydoot_conversation_id</code> is saved afterwards.
                                        </li>
                                        <li>Every send carries a <code>dispatch_id</code> that stays the same on
                                            HubSpot's retries.</li>
                                        <li>The workflow has an action rate limit set.</li>
                                        <li>The relay is public HTTPS, checks the timestamp and signature, and answers
                                            within 8 seconds.</li>
                                        <li>The private app token has only the two contact scopes and lives in the
                                            relay's environment.</li>
                                        <li>Replies are de-duplicated by <code>message_ref</code> in shared storage,
                                            and statuses never move backwards.</li>
                                        <li>Someone is alerted on <code>hd.number.disconnected</code>.</li>
                                        <li>A HubSpot sandbox or test portal uses its own HeyDoot token, webhook and
                                            number.</li>
                                    </ul>
                                    <p style="color:#4a5b4e; margin-top:12px;"><strong>Not tested yet.</strong> The
                                        request formats match HeyDoot's code, and the HubSpot calls follow HubSpot's
                                        current docs, but neither example has run in a real HubSpot portal. Test both
                                        in a sandbox first, especially the phone search, which depends on how your
                                        portal stores numbers.</p>
                                    <p style="color:#6b7280; margin-top:10px; font-size:0.85rem;"><em>Sources: HubSpot
                                            custom code actions · HubSpot communications API · HubSpot CRM search
                                            API</em></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DONE section -->
                    <div id="done"
                        style="background: linear-gradient(115deg, #e8faf0, #e0f2fe); border-radius: 32px; padding: 32px; text-align: center; margin: 40px 0 32px;">
                        <i class="fas fa-party-horn" style="font-size: 48px; color: var(--wa-teal);"></i>
                        <h2 style="font-size: 2rem; font-weight: 800; margin-top: 12px;">Done</h2>
                        <p style="margin-top: 8px;">Your HubSpot + WhatsApp integration is live. Start engaging
                            customers
                            smarter.</p>
                        <a href="<?php echo BASE_URL; ?>/dashboard.php" class="btn btn-primary"
                            style="background: #0d6a2e; margin-top: 20px; padding: 10px;"><i
                                class="fas fa-chart-line"></i> View Dashboard</a>
                    </div>

                    <!-- FAQs -->
                    <div id="hubspot-faq" style="margin-top: 48px;">
                        <h3 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 24px;">
                            <i class="fas fa-question-circle" style="color: var(--wa-teal);"></i> FAQs ?
                        </h3>

                        <div class="faq-item">
                            <div class="faq-question">
                                Why is a relay needed between HeyDoot and HubSpot?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                HubSpot has no endpoint that can check HeyDoot's HMAC signature before writing data.
                                Without a check, anyone who finds the URL could write fake messages into your CRM. The
                                relay is about 80 lines of Node.js and runs on any serverless platform (AWS Lambda,
                                Google Cloud Functions, Vercel, Cloudflare Workers) or a small server.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                Which HubSpot plan do I need?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Sending from a workflow with a Custom code action requires Operations Hub / Data Hub
                                <strong>Professional or Enterprise</strong>. Logging replies through the CRM API (via
                                the relay) works on any plan, including free, with a private app. Sending without
                                Operations Hub is possible if the relay (or your own backend) sends instead, triggered
                                by a HubSpot webhook subscription or your app.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                How do I view HeyDoot properties on HubSpot?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Go to Settings → Properties → Search "HeyDoot" — all synced WhatsApp fields appear under
                                contact, company, or deal level. The key properties are
                                <code>heyDoot_conversation_id</code> (the chat for this contact) and
                                <code>heyDoot_last_status</code> (delivery status of the last WhatsApp sent). You can
                                also add them to your record sidebar.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                How do I resync HeyDoot properties on HubSpot?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Inside HeyDoot integration settings, click "Resync Properties". This will refresh field
                                mapping and push any missing custom properties to HubSpot. Takes ~2 min.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                Can I disconnect the integration at any time?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Yes, from HeyDoot's HubSpot settings page, click "Disconnect". All historical data
                                remains in HubSpot, but new sync stops.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                Does it support media (images, documents) sync?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Yes, media links are stored as engagement attachments inside HubSpot contact timeline.
                                Outgoing attachments accept
                                <code>{ "kind": "document", "source_url": "https://...", "file_name": "Quote.pdf" }</code>
                                up to 16 MB.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                What happens if HubSpot retries my send?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                When the custom code throws on a 429, 5xx or timeout, HubSpot retries the action for up
                                to three days. The <code>dispatch_id</code> built from the enrollment makes those
                                retries safe — a retry with the same value never sends twice.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                Will I see outgoing messages on the contact timeline too?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                To see sent messages on the timeline as well, have the relay log a communication when
                                the first <em>sent</em> status arrives, or add a <strong>Create activity</strong> step
                                after the custom code action in the workflow.
                            </div>
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

                    <a href="<?php echo BASE_URL; ?>/postman-api.php" class="utility-item utility-link"
                        style="color: var(--wa-teal);">
                        <i class="fas fa-code"></i>
                        Postman API collection
                    </a>

                    <a href="tel:+919718517228" class="utility-item utility-link">
                        <i class="fas fa-headset"></i>
                        Support
                    </a>

                    <a href="<?php echo BASE_URL; ?>/integrations/dashboard.php" class="btn btn-secondary">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>

                </div>
            </div>
        </div>
    </section>
</main>
<!-- Page Content Ends here -->

<?php include ROOT_PATH . '/components/footer.php'; ?>