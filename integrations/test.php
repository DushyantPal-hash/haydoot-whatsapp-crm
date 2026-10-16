<?php
require_once dirname(__DIR__) . '/config.php';

$page_meta = [
    'title' => 'HubSpot WhatsApp Integration | HeyDoot',
    'meta_title' => 'HubSpot WhatsApp Integration – Automate Customer Conversations with HeyDoot',
    'description' => 'Connect HubSpot with WhatsApp using HeyDoot. Send WhatsApp messages from HubSpot workflows, receive replies through your relay, and log every conversation on the contact timeline.',

    'og_title' => 'HubSpot WhatsApp Integration | HeyDoot',
    'og_description' => 'Integrate HubSpot with WhatsApp using HeyDoot. Send WhatsApp messages from HubSpot workflows and sync replies and delivery statuses back to the CRM.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations/hubspot.php',

    'twitter_title' => 'HubSpot WhatsApp Integration | HeyDoot',
    'twitter_description' => 'Send WhatsApp messages from HubSpot workflows with HeyDoot. Receive replies through a signed relay and log them on the contact timeline.',
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
    "description" => "Integrate HubSpot CRM with WhatsApp using HeyDoot to send WhatsApp messages from workflows, receive replies via a signed relay, and log conversations on the contact timeline.",
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
                style="display: inline-block; background: rgba(255,255,255,0.15); backdrop-filter: blur(8px); padding: 6px 16px; border-radius: 60px; margin-bottom: 24px;">
                <span style="color: #25D366; font-weight: 600;"><i class="fab fa-hubspot"></i> HubSpot REST API +
                    Webhooks
                    Integration</span>
            </div>
        </div>
    </section>

    <section style="padding: 40px 0;">
        <!-- Main Integration Content -->
        <div class="container-fluid">
            <!-- Two-column layout: On this page sidebar + main content -->
            <div style="display: flex; gap: 48px; flex-wrap: wrap;">
                <!-- Sidebar "On this page" -->
                <aside class="sidebar-card">
                    <div
                        style="position: sticky; top: 100px; background: white; border-radius: 28px; padding: 24px; box-shadow: var(--card-shadow); border: 1px solid rgba(0,0,0,0.04);">
                        <h4 style="font-weight: 700; margin-bottom: 20px; font-size: 1.1rem;"><i class="fas fa-bookmark"
                                style="color: var(--wa-teal); margin-right: 8px;"></i> On this page</h4>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
                            <li><a href="#prerequisites" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-check-circle" style="color: var(--wa-teal); width: 22px;"></i>
                                    Prerequisites</a></li>
                            <li><a href="#steps" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-plug"
                                        style="color: var(--wa-teal); width: 22px;"></i> Steps to connect </a></li>
                            <li><a href="#what-can-be-done" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-magic" style="color: var(--wa-teal); width: 22px;"></i> What can
                                    be
                                    done? </a></li>
                            <li style="margin-left: 20px;"><a href="#sending-messages"
                                    style="font-size: 0.85rem; color: #5a6b5f;"> 1. Sending WhatsApp from HubSpot </a>
                            </li>
                            <li style="margin-left: 20px;"><a href="#workflow-setup"
                                    style="font-size: 0.85rem; color: #5a6b5f;"> 2. Workflow setup </a>
                            </li>
                            <li style="margin-left: 20px;"><a href="#receiving-replies"
                                    style="font-size: 0.85rem; color: #5a6b5f;"> 3. Receiving replies in HubSpot </a>
                            </li>
                            <li style="margin-left: 20px;"><a href="#errors-limits"
                                    style="font-size: 0.85rem; color: #5a6b5f;"> 4. Errors, limits & retries </a>
                            </li>
                            <li style="margin-left: 20px;"><a href="#go-live"
                                    style="font-size: 0.85rem; color: #5a6b5f;"> 5. Go-live checklist </a>
                            </li>
                            <li><a href="#faqs" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-question-circle" style="color: var(--wa-teal);"></i> FAQs ?</a>
                            </li>
                            <li><a href="#done" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-party-horn"
                                        style="color: var(--wa-teal);"></i> Done </a></li>
                        </ul>
                        <!-- cross-link to integration page -->
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
                    <!-- Prerequisites Section -->
                    <div id="prerequisites" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-clipboard-list" style="color: var(--wa-teal); font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Prerequisites</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <p style="color: #4a5b4e; margin-bottom: 18px;">
                                HubSpot connects to HeyDoot through HeyDoot's standard REST API and webhooks. HubSpot
                                sends WhatsApp messages from a workflow using a Bearer token. A small relay service
                                receives HeyDoot's webhooks, checks their signature, and writes replies into HubSpot.
                            </p>
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: var(--wa-teal);"></i> A HeyDoot
                                    account with <strong>API Access</strong> enabled and a <strong>Read &amp;
                                        Send</strong>
                                    token (e.g. labelled "HubSpot production")</li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: var(--wa-teal);"></i> A HubSpot
                                    <strong>private app</strong> with the scopes
                                    <code>crm.objects.contacts.read</code> and
                                    <code>crm.objects.contacts.write</code>
                                </li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: var(--wa-teal);"></i> Two custom
                                    contact properties: <code>heyDoot_conversation_id</code> (single-line text) and,
                                    optionally, <code>heyDoot_last_status</code> (single-line text)</li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: var(--wa-teal);"></i> Every contact's
                                    Mobile phone number must include the country code, e.g.
                                    <code>+919876543210</code> — HeyDoot can't guess the country
                                </li>
                                <li style="display: flex; gap: 12px;"><i class="fas fa-check-circle"
                                        style="color: var(--wa-teal);"></i> For sending from a workflow:
                                    <strong>Operations Hub / Data Hub Professional or Enterprise</strong> (Custom code
                                    action). Logging replies through the CRM API works on any plan with a private app.
                                </li>
                            </ul>
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
                                <p>Confirm API Access is on and that your plan includes API calls, then create a
                                    <strong>Read &amp; Send</strong> token labelled e.g. "HubSpot production".
                                </p>
                            </div>
                            <div class="automation-card" style="padding: 24px;">
                                <div class="automation-icon" style="background: #FF7A59; color: white;">2</div>
                                <h3>Create a HubSpot private app</h3>
                                <p>In HubSpot go to <strong>Settings → Integrations → Private Apps</strong>, create
                                    "HeyDoot relay", and grant the contact read/write scopes. Copy the access token —
                                    it's used only by the relay.</p>
                            </div>
                            <div class="automation-card" style="padding: 24px;">
                                <div class="automation-icon" style="background: #FF7A59; color: white;">3</div>
                                <h3>Add two contact properties</h3>
                                <p>Create <code>heyDoot_conversation_id</code> so replies go to the same chat, and
                                    optionally <code>heyDoot_last_status</code> for delivery status.</p>
                            </div>
                            <div class="automation-card" style="padding: 24px;">
                                <div class="automation-icon" style="background: #FF7A59; color: white;">4</div>
                                <h3>Check phone numbers</h3>
                                <p>Ensure every contact's Mobile phone number includes the country code, e.g.
                                    <code>+919876543210</code> — HeyDoot can't guess the country.
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

                        <!-- 1. Sending WhatsApp from HubSpot -->
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
                                    <p style="color: #4a5b4e;">A contact-based workflow runs a <strong>Custom
                                            code</strong>
                                        action that calls
                                        <code>POST https://&lt;HEYDOOT_API_BASE_URL&gt;/v1/messages/send</code>.
                                        HeyDoot accepts the message straight away (<strong>202</strong>) and reports
                                        delivery later by webhook.
                                    </p>
                                    <p style="color: #4a5b4e; margin-top: 10px;">Key request fields:
                                        <code>to</code> + <code>number_id</code> (or <code>conversation_id</code>),
                                        <code>text</code> or <code>attachment</code>,
                                        <code>dispatch_id</code> (recommended UUID idempotency key), and optional
                                        <code>user_id</code>, <code>username</code>, <code>user_email</code> for
                                        User Metrics.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 2. Workflow setup -->
                        <div id="workflow-setup" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: flex-start;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-code-branch" style="font-size: 28px; color: #FF7A59;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">2. Workflow setup</h3>
                                    <ol style="color: #4a5b4e; padding-left: 20px;">
                                        <li style="margin-bottom: 6px;"><strong>Automation → Workflows → Create workflow
                                                → Contact-based.</strong>
                                            Pick the trigger, e.g. <em>Lifecycle stage is Customer</em> or
                                            <em>Deal stage is Closed won</em>.
                                        </li>
                                        <li style="margin-bottom: 6px;">Add the <strong>Custom code</strong> action
                                            (Node.js).</li>
                                        <li style="margin-bottom: 6px;">Under <strong>Secrets</strong>, add
                                            <code>HEYDOOT_BASE_URL</code>, <code>HEYDOOT_TOKEN</code> and
                                            <code>HEYDOOT_NUMBER_ID</code>.
                                        </li>
                                        <li style="margin-bottom: 6px;">Under <strong>Property to include in
                                                code</strong>,
                                            add <code>mobilephone</code>, <code>firstname</code>,
                                            <code>heyDoot_conversation_id</code> and <code>hs_object_id</code>.
                                        </li>
                                        <li style="margin-bottom: 6px;">Paste the Node.js code and define outputs
                                            <code>message_ref</code>, <code>conversation_id</code> and
                                            <code>status</code> (all strings).
                                        </li>
                                        <li>Add a <strong>Set property value</strong> action:
                                            <code>heydoot_conversation_id</code> = the <code>conversation_id</code>
                                            output, so later sends reuse the same chat.
                                        </li>
                                    </ol>
                                    <p style="color: #4a5b4e; margin-top: 12px;"><strong>No Operations Hub?</strong>
                                        Let your relay or backend do the sending. Subscribe the private app to a
                                        contact property change (e.g. a <code>send_whatsapp_welcome</code> checkbox)
                                        under the app's <strong>Webhooks</strong> tab; HubSpot calls the relay, and the
                                        relay calls HeyDoot with the same body.</p>
                                    <p style="color: #4a5b4e; margin-top: 10px;">A <code>queued</code> status means
                                        accepted, not delivered yet. Delivery arrives by webhook
                                        (<code>hd.message.status</code>) with the same <code>message_ref</code>.</p>
                                </div>
                            </div>
                        </div>
                        <!-- 3. Receiving replies in HubSpot -->
                        <div id="receiving-replies" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: flex-start;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fab fa-whatsapp" style="font-size: 32px; color: #25D366;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">3. Receiving replies in HubSpot
                                    </h3>
                                    <p style="color: #4a5b4e;">The relay checks each HeyDoot webhook's signature,
                                        finds or creates the HubSpot contact, and logs the message on the contact's
                                        timeline as a WhatsApp communication
                                        (<code>hs_communication_channel_type: WHATS_APP</code>).</p>
                                    <p style="color: #4a5b4e; margin-top: 10px;"><strong>Register the webhook (HeyDoot
                                            admin):</strong></p>
                                    <ol style="color: #4a5b4e; padding-left: 20px;">
                                        <li>Deploy the relay so
                                            <code>https://&lt;YOUR_RELAY_DOMAIN&gt;/heydoot/events</code> exists.
                                        </li>
                                        <li>In HeyDoot, open <strong>Settings → Integrations → Webhooks</strong>, add
                                            that URL, and subscribe to <code>hd.message.received</code>,
                                            <code>hd.message.status</code> and <code>hd.number.disconnected</code>.
                                        </li>
                                        <li>Copy the signing secret (shown once) into the relay's
                                            <code>HEYDOOT_WEBHOOK_SECRET</code>.
                                        </li>
                                        <li>Leave <strong>Encrypt payloads</strong> off; HTTPS already encrypts the
                                            traffic.</li>
                                    </ol>
                                    <p style="color: #4a5b4e; margin-top: 10px;">The URL must be public HTTPS and
                                        answer <strong>2xx within 8 seconds</strong>. Deliveries without a 2xx are
                                        retried 6 more times over ~50 minutes, then marked exhausted.</p>
                                    <p style="color: #4a5b4e; margin-top: 10px;">Every delivery carries
                                        <code>x-hd-event</code>, <code>x-hd-timestamp</code> (Unix seconds) and
                                        <code>x-hd-signature</code> (hex HMAC-SHA256). The relay skips duplicate
                                        replies by <code>message_ref</code> and never moves a status backwards
                                        (e.g. read → delivered).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 4. Errors, limits & retries -->
                        <div id="errors-limits" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: flex-start;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-exclamation-triangle" style="font-size: 28px; color: #FF7A59;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">4. Errors, limits &amp; retries
                                    </h3>
                                    <p style="color: #4a5b4e;">Every HeyDoot error is JSON with an error code and a
                                        readable message. Retry only the temporary ones, always with the same
                                        <code>dispatch_id</code>.
                                    </p>
                                    <ul style="color: #4a5b4e; padding-left: 20px;">
                                        <li><strong>400</strong> <code>invalid_request</code>,
                                            <code>invalid_recipient</code>, <code>empty_message</code> — a field breaks
                                            the rules (e.g. phone without country code). Fix the contact's data.
                                        </li>
                                        <li><strong>401</strong> <code>unauthorized</code> — token missing, wrong,
                                            expired or revoked. Update the <code>HEYDOOT_TOKEN</code> secret.</li>
                                        <li><strong>402</strong> <code>api_not_licensed</code>,
                                            <code>api_quota_exceeded</code> — plan has no API access, or quota used up.
                                            Wait for <code>resets_at</code>, or upgrade.
                                        </li>
                                        <li><strong>403</strong> <code>forbidden</code>,
                                            <code>license_inactive</code> — token is read-only, or the organisation
                                            can't send right now. Use a Read &amp; Send token.
                                        </li>
                                        <li><strong>404</strong> <code>conversation_not_found</code>,
                                            <code>number_not_found</code> — clear keyword <code>conversation_id</code>
                                            and send by phone, or fix the number ID.
                                        </li>
                                        <li><strong>422</strong> <code>recipient_opted_out</code> — contact is on
                                            HeyDoot's Do-Not-Contact list. Don't retry; sync to HubSpot's opt-out.</li>
                                        <li><strong>429</strong> <code>rate_limited</code> — more than 600 requests/min
                                            (default). Wait <code>Retry-After</code> seconds.</li>
                                        <li><strong>502/503</strong> <code>connector_error</code>,
                                            <code>api_disabled</code> — WhatsApp line issue or API switched off by the
                                            admin. Retry with backoff / contact the admin.
                                        </li>
                                    </ul>
                                    <p style="color: #4a5b4e; margin-top: 10px;"><strong>HubSpot retries for
                                            you.</strong>
                                        When the custom code throws on a 429, 5xx or timeout, HubSpot retries the
                                        action for up to three days. The <code>dispatch_id</code> built from the
                                        enrollment makes those retries safe.</p>
                                    <p style="color: #4a5b4e; margin-top: 10px;"><strong>Throttle big
                                            enrollments.</strong>
                                        A workflow that enrolls thousands of contacts at once hits the rate limit and
                                        the WhatsApp ban risk. Set the workflow's action rate limit (e.g. 20 per
                                        minute) and keep campaigns to contacts who expect your messages.</p>
                                    <p style="color: #4a5b4e; margin-top: 10px;"><strong>Plan quota:</strong> responses
                                        carry <code>X-Quota-Limit</code>, <code>X-Quota-Remaining</code> and
                                        <code>X-Quota-Reset</code>. On 402 <code>api_quota_exceeded</code>, pause the
                                        workflow until the reset.
                                    </p>
                                    <p style="color: #4a5b4e; margin-top: 10px;"><strong>Phone format:</strong> HeyDoot
                                        accepts spaces and dashes, but the number must start with <code>+</code> and
                                        the country code. A contact stored as <code>98765 43210</code> fails with
                                        <code>invalid_recipient</code>.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- 5. Go-live checklist -->
                        <div id="go-live" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: flex-start;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-list-check" style="font-size: 28px; color: var(--wa-teal);"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">5. Go-live checklist</h3>
                                    <ul style="color: #4a5b4e; padding-left: 20px;">
                                        <li>Production base URL, API token (Read &amp; Send) and number ID are workflow
                                            secrets, <strong>not in code</strong>.</li>
                                        <li>HeyDoot API Access is on, and the plan includes API access with a quota
                                            that fits your volume.</li>
                                        <li>Contact mobile numbers include the country code.</li>
                                        <li>The custom code action is tested on one internal contact, and
                                            <code>heyDoot_conversation_id</code> is saved afterwards.
                                        </li>
                                        <li>Every send carries a <code>dispatch_id</code> that stays the same on
                                            HubSpot's retries.</li>
                                        <li>The workflow has an action rate limit set.</li>
                                        <li>The relay is public HTTPS, checks the timestamp and signature, and answers
                                            within 8 seconds.</li>
                                        <li>The private app token has only the two contact scopes and lives in the
                                            relay's environment.</li>
                                        <li>Replies are de-duplicated by <code>message_ref</code> in shared storage, and
                                            statuses never move backwards.</li>
                                        <li>Someone is alerted on <code>hd.number.disconnected</code>.</li>
                                        <li>A HubSpot sandbox or test portal uses its own HeyDoot token, webhook and
                                            number.</li>
                                    </ul>
                                    <p style="color: #4a5b4e; margin-top: 12px;"><strong>Not tested yet.</strong> The
                                        request formats match HeyDoot's code, and the HubSpot calls follow HubSpot's
                                        current docs, but neither example has run in a real HubSpot portal. Test both
                                        in a sandbox first, especially the phone search, which depends on how your
                                        portal stores numbers.</p>
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
                                Go to Settings → Properties → Search "HeyDoot" — all synced WhatsApp fields
                                appear under contact, company, or deal level. You can also add them to your record
                                sidebar. The key properties are <code>heyDoot_conversation_id</code> (the chat for this
                                contact) and <code>heyDoot_last_status</code> (delivery status of the last WhatsApp
                                sent).
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                How do I resync HeyDoot properties on HubSpot?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Inside HeyDoot integration settings, click "Resync Properties". This
                                will refresh field mapping and push any missing custom properties to HubSpot. Takes ~2
                                min.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                Can I disconnect the integration at any time?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Yes, from HeyDoot's HubSpot settings page, click "Disconnect". All
                                historical data remains in HubSpot, but new sync stops.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                Does it support media (images, documents) sync?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Yes, media links are stored as engagement attachments inside HubSpot
                                contact timeline. Outgoing attachments accept
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
                                When the custom code throws on a 429, 5xx or timeout, HubSpot retries the action for
                                up to three days. The <code>dispatch_id</code> built from the enrollment makes those
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