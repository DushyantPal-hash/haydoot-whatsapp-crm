<?php
require_once dirname(__DIR__) . '/config.php';

$page_meta = [
    'title' => 'HubSpot WhatsApp Integration | HeyDoot',
    'meta_title' => 'HubSpot WhatsApp Integration – HeyDoot API & Webhook Setup Guide',
    'description' => 'Connect HubSpot and HeyDoot using the REST API and webhooks. Configure WhatsApp workflow sends, securely sync replies, handle delivery statuses, and prepare for production.',
    'og_title' => 'HubSpot WhatsApp Integration | HeyDoot',
    'og_description' => 'A complete technical guide to sending WhatsApp messages from HubSpot workflows and syncing replies through a secure HeyDoot webhook relay.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations/hubspot.php',
    'twitter_title' => 'HubSpot WhatsApp Integration | HeyDoot',
    'twitter_description' => 'Set up HeyDoot and HubSpot with API credentials, workflow actions, webhook signature verification, reply logging, and go-live checks.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',
    'canonical' => 'https://heydoot.com/integrations/hubspot.php'
];

$page_json_ld = [
    '@context' => 'https://schema.org',
    '@type' => 'TechArticle',
    'headline' => 'HeyDoot ↔ HubSpot Integration Guide',
    'description' => 'Technical guide to sending WhatsApp messages from HubSpot and securely logging replies through HeyDoot webhooks.',
    'author' => ['@type' => 'Organization', 'name' => 'HeyDoot'],
    'publisher' => ['@type' => 'Organization', 'name' => 'HeyDoot', 'url' => 'https://heydoot.com/'],
    'mainEntityOfPage' => 'https://heydoot.com/integrations/hubspot.php'
];

$page_gtag_id = 'G-Q64SDSY0Y4';

include ROOT_PATH . '/components/header.php';
include ROOT_PATH . '/components/navbar.php';
?>

<style>
    .hs-guide {
        color: #26352c;
    }

    .hs-guide .guide-layout {
        display: flex;
        gap: 32px;
        align-items: flex-start;
    }

    .hs-guide .sidebar-card {
        flex: 0 0 270px;
        min-width: 240px;
    }

    .hs-guide .guide-main {
        flex: 1;
        min-width: 0;
    }

    .hs-guide .guide-card {
        background: #fff;
        border: 1px solid rgba(0, 0, 0, .06);
        border-radius: 22px;
        padding: 24px;
        margin-bottom: 22px;
        box-shadow: var(--card-shadow, 0 8px 24px rgba(0, 0, 0, .04));
    }

    .hs-guide .guide-section {
        margin-bottom: 48px;
        scroll-margin-top: 100px;
    }

    .hs-guide .section-heading {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 20px;
    }

    .hs-guide .section-icon {
        background: #e9f5ef;
        color: var(--wa-teal, #087f5b);
        width: 46px;
        height: 46px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 46px;
    }

    .hs-guide h2 {
        font-size: 1.7rem;
        font-weight: 750;
        margin: 0;
    }

    .hs-guide h3 {
        font-size: 1.2rem;
        font-weight: 700;
        margin: 0 0 12px;
    }

    .hs-guide p {
        line-height: 1.7;
    }

    .hs-guide .guide-table-wrap {
        overflow-x: auto;
        margin: 16px 0;
    }

    .hs-guide table {
        width: 100%;
        border-collapse: collapse;
        font-size: .94rem;
    }

    .hs-guide th,
    .hs-guide td {
        border: 1px solid #e4ebe6;
        padding: 12px 14px;
        text-align: left;
        vertical-align: top;
    }

    .hs-guide th {
        background: #eef7f1;
        font-weight: 700;
    }

    .hs-guide pre {
        background: #10251d;
        color: #e9fff2;
        padding: 20px;
        border-radius: 14px;
        overflow: auto;
        font-size: .86rem;
        line-height: 1.55;
        white-space: pre;
    }

    .hs-guide code {
        overflow-wrap: anywhere;
    }

    .hs-guide .inline-code {
        background: #eef3ef;
        padding: 2px 5px;
        border-radius: 5px;
        font-size: .92em;
    }

    .hs-guide .note {
        background: #fff8e7;
        border-left: 4px solid #e4a72c;
        border-radius: 10px;
        padding: 14px 16px;
        margin: 16px 0;
    }

    .hs-guide .info {
        background: #eef7ff;
        border-left: 4px solid #5395d8;
        border-radius: 10px;
        padding: 14px 16px;
        margin: 16px 0;
    }

    .hs-guide .toc-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 11px;
    }

    .hs-guide .toc-list a {
        color: #2c3e2f;
        font-size: .91rem;
        text-decoration: none;
    }

    .hs-guide .toc-list a:hover {
        color: var(--wa-teal, #087f5b);
        text-decoration: underline;
    }

    .hs-guide .check-list {
        list-style: none;
        padding: 0;
    }

    .hs-guide .check-list li {
        display: flex;
        gap: 10px;
        margin: 0 0 13px;
        line-height: 1.6;
    }

    .hs-guide .check-list i {
        color: var(--wa-teal, #087f5b);
        margin-top: 5px;
        flex: 0 0 auto;
    }

    .hs-guide .step-number {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        background: #ff7a59;
        color: #fff;
        border-radius: 50%;
        font-weight: 700;
        margin-right: 9px;
    }

    @media(max-width:900px) {
        .hs-guide .guide-layout {
            display: block;
        }

        .hs-guide .sidebar-card {
            width: 100%;
            margin-bottom: 28px;
        }

        .hs-guide .sidebar-sticky {
            position: static !important;
        }

        .hs-guide h2 {
            font-size: 1.45rem;
        }

        .hs-guide .guide-card {
            padding: 20px;
        }
    }
</style>

<main class="hs-guide">
    <section class="hero" style="background:linear-gradient(135deg,#0a2b2c 0%,#1d4b2c 100%);padding:28px 20px;">
        <div class="floating-dots"></div>
        <div style="max-width:1000px;margin:0 auto;position:relative;z-index:2;text-align:center;">
            <div
                style="display:inline-block;background:rgba(255,255,255,.15);backdrop-filter:blur(8px);padding:7px 16px;border-radius:60px;margin-bottom:14px;">
                <span style="color:#25D366;font-weight:600;"><i class="fab fa-hubspot"></i> HeyDoot ↔ HubSpot
                    Integration Guide</span>
            </div>
            <h1 style="color:#fff;font-size:clamp(2rem,4vw,3rem);font-weight:800;margin:8px 0 12px;">Connect HubSpot
                with WhatsApp</h1>
            <p style="color:rgba(255,255,255,.88);max-width:780px;margin:0 auto;line-height:1.7;">Send WhatsApp messages
                from HubSpot workflows, receive replies through signed webhooks, and log conversations securely on
                HubSpot contact timelines.</p>
            <p style="color:rgba(255,255,255,.7);font-size:.9rem;margin:14px 0 0;">Technical setup guide · October 16,
                2026</p>
        </div>
    </section>

    <section style="padding:38px 0;">
        <div class="container-fluid">
            <div class="guide-layout">
                <aside class="sidebar-card">
                    <div class="sidebar-sticky"
                        style="position:sticky;top:100px;background:#fff;border-radius:24px;padding:22px;box-shadow:var(--card-shadow);border:1px solid rgba(0,0,0,.05);">
                        <h4 style="font-weight:750;margin-bottom:18px;font-size:1.08rem;"><i class="fas fa-bookmark"
                                style="color:var(--wa-teal);margin-right:8px;"></i> On this page</h4>
                        <ul class="toc-list">
                            <li><a href="#overview">Overview & message flow</a></li>
                            <li><a href="#requirements">HubSpot plan requirements</a></li>
                            <li><a href="#credentials">Credentials & HubSpot setup</a></li>
                            <li><a href="#sending">Send WhatsApp from HubSpot</a></li>
                            <li style="margin-left:14px;"><a href="#workflow-setup">Workflow setup</a></li>
                            <li style="margin-left:14px;"><a href="#request-fields">Request fields</a></li>
                            <li style="margin-left:14px;"><a href="#workflow-code">Custom code action</a></li>
                            <li style="margin-left:14px;"><a href="#send-response">Response & no Operations Hub</a></li>
                            <li><a href="#receiving">Receive replies in HubSpot</a></li>
                            <li style="margin-left:14px;"><a href="#register-webhook">Register webhook</a></li>
                            <li style="margin-left:14px;"><a href="#relay-code">Relay code</a></li>
                            <li style="margin-left:14px;"><a href="#events-retries">Events, retries & duplicates</a>
                            </li>
                            <li><a href="#errors">Errors, limits & retries</a></li>
                            <li><a href="#go-live">Go-live checklist</a></li>
                            <li><a href="#testing-note">Testing note & sources</a></li>
                        </ul>
                        <div style="margin-top:22px;padding-top:18px;border-top:1px solid #eef0ee;">
                            <p style="font-size:.85rem;color:#6b7280;margin-bottom:10px;">Need API resources?</p>
                            <a href="<?php echo BASE_URL; ?>/postman-api.php"
                                style="display:flex;align-items:center;gap:9px;background:#eef7f1;border-radius:12px;padding:11px 13px;color:#1e563b;font-weight:650;font-size:.9rem;text-decoration:none;"><i
                                    class="fas fa-code"></i> Postman API collection</a>
                        </div>
                    </div>
                </aside>

                <div class="guide-main">
                    <section id="overview" class="guide-section">
                        <div class="section-heading">
                            <div class="section-icon"><i class="fas fa-project-diagram"></i></div>
                            <h2>Overview</h2>
                        </div>
                        <div class="guide-card">
                            <p>HubSpot connects to HeyDoot through HeyDoot's standard REST API and webhooks. HubSpot
                                sends WhatsApp messages from a workflow with a Bearer token. A small relay service
                                receives HeyDoot's webhooks, checks their signature and writes replies into HubSpot.</p>
                            <div class="guide-table-wrap">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Direction</th>
                                            <th>How</th>
                                            <th>Authentication</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>HubSpot → HeyDoot (send)</td>
                                            <td>Workflow Custom code action calls <code>POST /v1/messages/send</code>
                                            </td>
                                            <td><code>Authorization: Bearer &lt;HEYDOOT_API_TOKEN&gt;</code></td>
                                        </tr>
                                        <tr>
                                            <td>HeyDoot → relay (events)</td>
                                            <td>HeyDoot calls
                                                <code>https://&lt;YOUR_RELAY_DOMAIN&gt;/heydoot/events</code>
                                            </td>
                                            <td>HMAC-SHA256 signature with the webhook's signing secret</td>
                                        </tr>
                                        <tr>
                                            <td>Relay → HubSpot (log)</td>
                                            <td>Relay calls the HubSpot CRM API to log the message on the contact</td>
                                            <td><code>Authorization: Bearer &lt;HUBSPOT_PRIVATE_APP_TOKEN&gt;</code>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="info"><strong>Message flow:</strong> HubSpot only ever calls HeyDoot to send.
                                Everything coming back goes through the relay, which holds the only HubSpot token.</div>
                            <h3>Why a relay is needed</h3>
                            <p>HubSpot has no endpoint that can check HeyDoot's HMAC signature before writing data.
                                Without a check, anyone who finds the URL could write fake messages into your CRM. The
                                relay is about 80 lines of Node.js and runs on a serverless platform (AWS Lambda, Google
                                Cloud Functions, Vercel, Cloudflare Workers) or a small server.</p>
                        </div>
                    </section>

                    <section id="requirements" class="guide-section">
                        <div class="section-heading">
                            <div class="section-icon"><i class="fas fa-clipboard-list"></i></div>
                            <h2>Which HubSpot plan can do this?</h2>
                        </div>
                        <div class="guide-card">
                            <div class="guide-table-wrap">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Part</th>
                                            <th>HubSpot requirement</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sending from a workflow with custom code</td>
                                            <td>Operations Hub / Data Hub Professional or Enterprise</td>
                                        </tr>
                                        <tr>
                                            <td>Logging replies through the CRM API (relay)</td>
                                            <td>Any plan, including free, with a private app</td>
                                        </tr>
                                        <tr>
                                            <td>Sending without Operations Hub</td>
                                            <td>The relay (or your own backend) sends instead, triggered by a HubSpot
                                                webhook subscription or your app</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="note">Plan names change often. Confirm with your HubSpot admin that
                                <strong>Custom code</strong> appears in the workflow action list before you start.
                            </div>
                        </div>
                    </section>

                    <section id="credentials" class="guide-section">
                        <div class="section-heading">
                            <div class="section-icon"><i class="fas fa-key"></i></div>
                            <h2>Credentials and HubSpot setup</h2>
                        </div>
                        <div class="guide-card">
                            <p>You need four values from HeyDoot and one from HubSpot. Keep every secret in HubSpot
                                workflow secrets or the relay's environment variables, never in code.</p>
                            <div class="guide-table-wrap">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Value</th>
                                            <th>Where it comes from</th>
                                            <th>Stored in</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>HEYDOOT_API_BASE_URL</code></td>
                                            <td>The HeyDoot team</td>
                                            <td>Workflow secret <code>HEYDOOT_BASE_URL</code></td>
                                        </tr>
                                        <tr>
                                            <td><code>HEYDOOT_API_TOKEN</code> (<code>hd_live_…</code>, Read &amp; Send)
                                            </td>
                                            <td>HeyDoot admin → Settings → Integrations → API Tokens (shown once)</td>
                                            <td>Workflow secret <code>HEYDOOT_TOKEN</code> and relay env</td>
                                        </tr>
                                        <tr>
                                            <td><code>NUMBER_ID</code></td>
                                            <td>HeyDoot admin → Settings → Phones, or <code>GET /v1/numbers</code></td>
                                            <td>Workflow secret <code>HEYDOOT_NUMBER_ID</code></td>
                                        </tr>
                                        <tr>
                                            <td><code>WEBHOOK_SIGNING_SECRET</code></td>
                                            <td>Shown once when the relay URL is added as a HeyDoot webhook</td>
                                            <td>Relay env <code>HEYDOOT_WEBHOOK_SECRET</code></td>
                                        </tr>
                                        <tr>
                                            <td><code>HUBSPOT_PRIVATE_APP_TOKEN</code></td>
                                            <td>HubSpot private app (step 2 below)</td>
                                            <td>Relay env <code>HUBSPOT_TOKEN</code></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <ol>
                                <li><strong>Turn on HeyDoot API access.</strong> A HeyDoot admin checks that API Access
                                    is on and that the plan includes API calls, then creates a Read &amp; Send token
                                    labelled e.g. “HubSpot production”.</li>
                                <li><strong>Create a HubSpot private app.</strong> In HubSpot go to Settings →
                                    Integrations → Private Apps (newer portals may list it under Legacy Apps), create
                                    “HeyDoot relay” and grant these scopes:
                                    <ul>
                                        <li><code>crm.objects.contacts.read</code></li>
                                        <li><code>crm.objects.contacts.write</code></li>
                                    </ul>
                                    Copy the access token. It is used only by the relay.
                                </li>
                                <li><strong>Add two contact properties.</strong> In Settings → Properties → Contact
                                    properties, create:
                                    <ul>
                                        <li><code>heydoot_conversation_id</code> (single-line text): the HeyDoot chat
                                            for this contact, so replies go to the same chat.</li>
                                        <li><code>heydoot_last_status</code> (single-line text, optional): the delivery
                                            status of the last WhatsApp sent.</li>
                                    </ul>
                                </li>
                                <li><strong>Check phone numbers.</strong> Every contact's Mobile phone number must
                                    include the country code, e.g. <code>+919876543210</code>. HeyDoot can't guess the
                                    country.</li>
                            </ol>
                        </div>
                    </section>

                    <section id="sending" class="guide-section">
                        <div class="section-heading">
                            <div class="section-icon"><i class="fas fa-paper-plane"></i></div>
                            <h2>Sending a WhatsApp from HubSpot</h2>
                        </div>
                        <div class="guide-card">
                            <p>A contact-based workflow runs a Custom code action that calls
                                <code>POST https://&lt;HEYDOOT_API_BASE_URL&gt;/v1/messages/send</code>. HeyDoot accepts
                                the message straight away (<code>202</code>) and reports delivery later by webhook.
                            </p>
                            <h3 id="workflow-setup">Workflow setup</h3>
                            <ol>
                                <li>Automation → Workflows → Create workflow → Contact-based. Pick the trigger, e.g.
                                    Lifecycle stage is Customer or Deal stage is Closed won (in a deal-based workflow,
                                    use the associated contact).</li>
                                <li>Add the action <strong>Custom code</strong>, language Node.js.</li>
                                <li>Under Secrets, add <code>HEYDOOT_BASE_URL</code>, <code>HEYDOOT_TOKEN</code> and
                                    <code>HEYDOOT_NUMBER_ID</code>.
                                </li>
                                <li>Under Property to include in code, add <code>mobilephone</code>,
                                    <code>firstname</code>, <code>heydoot_conversation_id</code> and
                                    <code>hs_object_id</code>.
                                </li>
                                <li>Paste the code below, then define the outputs <code>message_ref</code>,
                                    <code>conversation_id</code> and <code>status</code> (all strings).
                                </li>
                                <li>Add a Set property value action after it: <code>heydoot_conversation_id</code> = the
                                    <code>conversation_id</code> output, so later sends reuse the same chat.
                                </li>
                            </ol>
                            <h3 id="request-fields">Request fields</h3>
                            <div class="guide-table-wrap">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Field</th>
                                            <th>Required</th>
                                            <th>Rules</th>
                                            <th>Meaning</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><code>to</code> + <code>number_id</code></td>
                                            <td>One of the two ways</td>
                                            <td>Phone with country code, e.g. <code>+919876543210</code></td>
                                            <td>Start or continue a chat by phone number</td>
                                        </tr>
                                        <tr>
                                            <td><code>conversation_id</code></td>
                                            <td>One of the two ways</td>
                                            <td>From an earlier send or a webhook</td>
                                            <td>Reply in a known chat</td>
                                        </tr>
                                        <tr>
                                            <td><code>text</code></td>
                                            <td>Text or attachment</td>
                                            <td>Message text; the caption when there is a file</td>
                                            <td>Text message or attachment caption</td>
                                        </tr>
                                        <tr>
                                            <td><code>attachment</code></td>
                                            <td>Text or attachment</td>
                                            <td>Example:
                                                <code>{"kind":"document","source_url":"https://…","file_name":"Quote.pdf"}</code>;
                                                max 16 MB
                                            </td>
                                            <td>Image, document, audio or video</td>
                                        </tr>
                                        <tr>
                                            <td><code>dispatch_id</code></td>
                                            <td>Recommended</td>
                                            <td>UUID</td>
                                            <td>Idempotency key: a retry with the same value never sends twice</td>
                                        </tr>
                                        <tr>
                                            <td><code>user_id</code>, <code>username</code>, <code>user_email</code>
                                            </td>
                                            <td>Recommended</td>
                                            <td>Up to 128 / 200 / 254 characters</td>
                                            <td>Who sent it (User Metrics)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 id="workflow-code">Custom code action (Node.js)</h3>
                            <pre><code>const axios = require('axios');
const crypto = require('crypto');

exports.main = async (event, callback) => {
  const p = event.inputFields;
  const base = process.env.HEYDOOT_BASE_URL.replace(/\/$/, '');

  const body = {
    text: `Hi ${p.firstname || 'there'}, thanks for choosing us! Reply here if you have any questions.`,
    // Same enrollment = same id, so HubSpot's automatic retry never double-sends.
    dispatch_id: uuidFrom(`${event.callbackId || p.hs_object_id}`),
    user_id: 'hubspot-workflow',
    username: 'HubSpot workflow',
  };

  if (p.heydoot_conversation_id) {
    body.conversation_id = p.heydoot_conversation_id;
  } else {
    if (!p.mobilephone) throw new Error('Contact has no mobile phone number');
    body.to = p.mobilephone; // must include the country code
    body.number_id = process.env.HEYDOOT_NUMBER_ID;
  }

  try {
    const { data } = await axios.post(`${base}/v1/messages/send`, body, {
      headers: { Authorization: `Bearer ${process.env.HEYDOOT_TOKEN}` },
      timeout: 15000, // custom code must finish within 20 s
    });
    callback({ outputFields: {
      message_ref: data.message_ref,
      conversation_id: data.conversation_id,
      status: data.status,
    } });
  } catch (err) {
    const code = err.response?.status;
    // 429 / 5xx / timeout: rethrow so HubSpot retries the action (same dispatch_id).
    if (!code || code === 429 || code >= 500) throw err;
    // 4xx: don't retry; surface the reason in the workflow history.
    callback({ outputFields: {
      message_ref: '', conversation_id: '',
      status: `error:${err.response.data?.error}`
    } });
  }
};

// Deterministic UUID (v4 layout) from a string.
function uuidFrom(s) {
  const h = crypto.createHash('sha256').update(s).digest('hex');
  return `${h.slice(0, 8)}-${h.slice(8, 12)}-4${h.slice(13, 16)}-a${h.slice(17, 20)}-${h.slice(20, 32)}`;
}</code></pre>
                            <div class="info">To send from a person instead of the workflow, set <code>user_id</code>,
                                <code>username</code> and <code>user_email</code> from the contact owner (include
                                <code>hubspot_owner_id</code> as a property and look the owner up), so HeyDoot's User
                                Metrics counts each sales rep separately.
                            </div>
                        </div>
                    </section>

                    <section id="send-response" class="guide-section">
                        <div class="section-heading">
                            <div class="section-icon"><i class="fas fa-check-double"></i></div>
                            <h2>Response and sending without Operations Hub</h2>
                        </div>
                        <div class="guide-card">
                            <h3>Response: 202 Accepted</h3>
                            <pre><code>{
  "status": "queued",
  "message_ref": "hd_4F0C9A1B7E2D3C5A6B8E9F",
  "conversation_id": "c3a1…",
  "dispatch_id": "6c0e1b2a-58f4-4b7e-9d0c-2f1a7e3b9c11"
}</code></pre>
                            <p><code>queued</code> means accepted, not delivered yet. Delivery arrives by webhook
                                (<code>hd.message.status</code>) with the same <code>message_ref</code>.</p>
                            <h3>No Operations Hub?</h3>
                            <p>Let your relay or backend do the sending. Subscribe the private app to a contact property
                                change (e.g. a <code>send_whatsapp_welcome</code> checkbox your team ticks) under the
                                app's Webhooks tab; HubSpot calls the relay, and the relay calls HeyDoot with the same
                                body as above. The workflow “Send a webhook” action is also gated to Operations Hub
                                Professional.</p>
                        </div>
                    </section>

                    <section id="receiving" class="guide-section">
                        <div class="section-heading">
                            <div class="section-icon"><i class="fas fa-comments"></i></div>
                            <h2>Receiving replies in HubSpot</h2>
                        </div>
                        <div class="guide-card">
                            <p>The relay checks each HeyDoot webhook's signature, finds or creates the HubSpot contact,
                                and logs the message on the contact's timeline as a WhatsApp communication
                                (<code>hs_communication_channel_type: WHATS_APP</code>).</p>
                            <h3 id="register-webhook">Register the webhook (HeyDoot admin)</h3>
                            <ol>
                                <li>Deploy the relay, so <code>https://&lt;YOUR_RELAY_DOMAIN&gt;/heydoot/events</code>
                                    exists.</li>
                                <li>In HeyDoot, open Settings → Integrations → Webhooks, add that URL, and choose
                                    <code>hd.message.received</code>, <code>hd.message.status</code> and
                                    <code>hd.number.disconnected</code>.
                                </li>
                                <li>Copy the signing secret (shown once) into the relay's
                                    <code>HEYDOOT_WEBHOOK_SECRET</code>.
                                </li>
                                <li>Leave Encrypt payloads off; HTTPS already encrypts the traffic.</li>
                            </ol>
                            <div class="note">The URL must be public HTTPS and answer with a 2xx response within 8
                                seconds.</div>
                            <h3 id="relay-code">Relay (Node.js 18+, Express)</h3>
                            <pre><code>const express = require('express');
const crypto = require('crypto');

const HS = 'https://api.hubapi.com';
const hsHeaders = {
  Authorization: `Bearer ${process.env.HUBSPOT_TOKEN}`,
  'Content-Type': 'application/json'
};
const seen = new Set(); // use Redis or a DB table in production

const app = express();

// Keep the raw bytes: the signature covers them exactly.
app.post('/heydoot/events', express.raw({ type: '*/*' }), async (req, res) => {
  const raw = req.body; // Buffer
  const ts = req.get('x-hd-timestamp') || '';
  const sig = req.get('x-hd-signature') || '';

  // 1. Replay protection, then 2. HMAC-SHA256 over "<timestamp>.<raw body>".
  if (!/^\\d+$/.test(ts) || Math.abs(Date.now() / 1000 - Number(ts)) > 300)
    return res.sendStatus(401);
  const expected = crypto.createHmac('sha256', process.env.HEYDOOT_WEBHOOK_SECRET)
    .update(`${ts}.`).update(raw).digest('hex');
  if (sig.length !== expected.length ||
      !crypto.timingSafeEqual(Buffer.from(sig), Buffer.from(expected)))
    return res.sendStatus(401);

  const ev = JSON.parse(raw.toString('utf8'));
  res.sendStatus(200); // acknowledge fast, then work

  try {
    if (ev.event === 'hd.message.received') await onReceived(ev);
    else if (ev.event === 'hd.message.status') await onStatus(ev);
    else if (ev.event === 'hd.number.disconnected')
      console.error('WhatsApp line disconnected', ev.number_id);
  } catch (e) {
    console.error('HubSpot write failed', ev.event, e);
  }
});

async function hs(method, path, body) {
  const r = await fetch(`${HS}${path}`, {
    method, headers: hsHeaders, body: body && JSON.stringify(body)
  });
  if (!r.ok) throw new Error(`HubSpot ${r.status}: ${await r.text()}`);
  return r.status === 204 ? null : r.json();
}

async function findContact(ev) {
  const search = (filters) => hs('POST', '/crm/v3/objects/contacts/search', {
    filterGroups: filters, limit: 1
  }).then((d) => d.results[0]);

  // Best match: the chat stored on the contact when we sent.
  let c = await search([{ filters: [{
    propertyName: 'heydoot_conversation_id',
    operator: 'EQ', value: ev.conversation_id
  }] }]);
  if (c) return c.id;

  // Next: the phone number's last 10 digits. Adapt to your portal's phone format.
  const digits = String(ev.from || '').replace(/\\D/g, '');
  if (digits) {
    const tail = `*${digits.slice(-10)}`;
    c = await search([
      { filters: [{ propertyName: 'mobilephone', operator: 'CONTAINS_TOKEN', value: tail }] },
      { filters: [{ propertyName: 'phone', operator: 'CONTAINS_TOKEN', value: tail }] },
    ]);
    if (c) return c.id;
  }

  // Otherwise create the contact.
  const created = await hs('POST', '/crm/v3/objects/contacts', {
    properties: {
      firstname: ev.sender_name || `+${digits}`,
      mobilephone: `+${digits}`,
    }
  });
  return created.id;
}

async function onReceived(ev) {
  if (seen.has(ev.message_ref)) return; // duplicate delivery
  seen.add(ev.message_ref);
  const contactId = await findContact(ev);

  await hs('PATCH', `/crm/v3/objects/contacts/${contactId}`, {
    properties: { heydoot_conversation_id: ev.conversation_id }
  });
  await hs('POST', '/crm/v3/objects/communications', {
    properties: {
      hs_communication_channel_type: 'WHATS_APP',
      hs_communication_logged_from: 'CRM',
      hs_communication_body: `WhatsApp from ${ev.sender_name || 'contact'}: ${ev.text || '[media]'}`,
      hs_timestamp: ev.received_at,
    },
    associations: [{
      to: { id: contactId },
      types: [{ associationCategory: 'HUBSPOT_DEFINED', associationTypeId: 81 }]
    }], // communication → contact
  });
}

const RANK = {
  queued: 0, sending: 1, pending_review: 1, sent: 2,
  delivered: 3, read: 4, failed: 4, blocked: 4, canceled: 4
};

async function onStatus(ev) {
  const found = await hs('POST', '/crm/v3/objects/contacts/search', {
    limit: 1,
    properties: ['heydoot_last_status'],
    filterGroups: [{ filters: [{
      propertyName: 'heydoot_conversation_id',
      operator: 'EQ', value: ev.conversation_id
    }] }]
  });
  const c = found.results[0];
  if (!c) return;

  // Events can arrive out of order: never move a status backwards (read → delivered).
  const old = c.properties.heydoot_last_status;
  if (old && (RANK[ev.status] ?? 0) < (RANK[old] ?? 0)) return;

  await hs('PATCH', `/crm/v3/objects/contacts/${c.id}`, {
    properties: { heydoot_last_status: ev.status }
  });
}

app.listen(process.env.PORT || 3000);</code></pre>
                            <div class="note"><strong>Production reminder:</strong> This guide's sample uses an
                                in-memory <code>seen</code> set for clarity. It is lost on restart and is not shared
                                across instances; use Redis or a database in production.</div>
                        </div>
                    </section>

                    <section id="events-retries" class="guide-section">
                        <div class="section-heading">
                            <div class="section-icon"><i class="fas fa-sync-alt"></i></div>
                            <h2>Webhook events, retries and duplicates</h2>
                        </div>
                        <div class="guide-card">
                            <h3>What the events carry</h3>
                            <ul>
                                <li><code>hd.message.received</code>: <code>message_ref</code>,
                                    <code>conversation_id</code>, <code>number_id</code>, <code>from</code> (digits),
                                    <code>text</code>, <code>message_type</code>, <code>sender_name</code>,
                                    <code>has_media</code> and <code>received_at</code>.
                                </li>
                                <li><code>hd.message.status</code>: <code>message_ref</code>,
                                    <code>conversation_id</code> and <code>status</code>, plus <code>send_error</code>
                                    on failure.
                                </li>
                            </ul>
                            <h3>Logging outgoing messages too</h3>
                            <p>To see sent messages on the timeline as well, have the relay log a communication when the
                                first <code>sent</code> status arrives, or add a Create activity step after the custom
                                code action in the workflow.</p>
                            <h3>Headers on every delivery</h3>
                            <ul>
                                <li><code>x-hd-event</code>: event name</li>
                                <li><code>x-hd-timestamp</code>: Unix seconds, new on every retry</li>
                                <li><code>x-hd-signature</code>: hex HMAC-SHA256</li>
                            </ul>
                            <h3>Retries and duplicates</h3>
                            <p>A delivery without a 2xx is retried 6 more times over about 50 minutes, then marked
                                exhausted (an admin can resend it from HeyDoot). The relay skips duplicate replies by
                                <code>message_ref</code> and ignores status updates that would go backwards. The
                                in-memory <code>seen</code> set is lost on restart and isn't shared across instances, so
                                use Redis or a database in production.
                            </p>
                        </div>
                    </section>

                    <section id="errors" class="guide-section">
                        <div class="section-heading">
                            <div class="section-icon"><i class="fas fa-exclamation-triangle"></i></div>
                            <h2>Errors, limits and retries</h2>
                        </div>
                        <div class="guide-card">
                            <p>Every HeyDoot error is JSON with an error code and a readable message. Retry only
                                temporary errors, always with the same <code>dispatch_id</code>. The custom code above
                                already follows this approach.</p>
                            <div class="guide-table-wrap">
                                <table>
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
                                            <td><code>invalid_request</code>, <code>invalid_recipient</code>,
                                                <code>empty_message</code>
                                            </td>
                                            <td>A field breaks the rules, e.g. a phone without country code</td>
                                            <td>Fix the contact's data</td>
                                        </tr>
                                        <tr>
                                            <td>401</td>
                                            <td><code>unauthorized</code></td>
                                            <td>Token missing, wrong, expired or revoked</td>
                                            <td>Update the <code>HEYDOOT_TOKEN</code> secret</td>
                                        </tr>
                                        <tr>
                                            <td>402</td>
                                            <td><code>api_not_licensed</code>, <code>api_quota_exceeded</code></td>
                                            <td>The plan has no API access, or the day/week/month quota is used up</td>
                                            <td>Wait for <code>resets_at</code>, or upgrade the plan</td>
                                        </tr>
                                        <tr>
                                            <td>403</td>
                                            <td><code>forbidden</code>, <code>license_inactive</code></td>
                                            <td>Token is read-only, or the organisation can't send right now</td>
                                            <td>Use a Read &amp; Send token / contact the HeyDoot admin</td>
                                        </tr>
                                        <tr>
                                            <td>404</td>
                                            <td><code>conversation_not_found</code>, <code>number_not_found</code></td>
                                            <td>Wrong ID</td>
                                            <td>Clear <code>heydoot_conversation_id</code> and send by phone, or fix the
                                                number ID</td>
                                        </tr>
                                        <tr>
                                            <td>422</td>
                                            <td><code>recipient_opted_out</code></td>
                                            <td>Contact is on HeyDoot's Do-Not-Contact list</td>
                                            <td>Don't retry; consider syncing it to HubSpot's opt-out</td>
                                        </tr>
                                        <tr>
                                            <td>429</td>
                                            <td><code>rate_limited</code></td>
                                            <td>More than 600 requests in a minute (default)</td>
                                            <td>Wait <code>Retry-After</code> seconds</td>
                                        </tr>
                                        <tr>
                                            <td>502 / 503</td>
                                            <td><code>connector_error</code>, <code>api_disabled</code></td>
                                            <td>WhatsApp line issue, or API access switched off by the admin</td>
                                            <td>Retry with backoff / contact the admin</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <ul>
                                <li><strong>HubSpot retries for you.</strong> When the custom code throws on a 429, 5xx
                                    or timeout, HubSpot retries the action for up to three days. The
                                    <code>dispatch_id</code> built from the enrollment makes those retries safe.
                                </li>
                                <li><strong>Throttle big enrollments.</strong> A workflow that enrolls thousands of
                                    contacts at once hits the rate limit and the WhatsApp ban risk. Set the workflow's
                                    action rate limit (e.g. 20 per minute) and keep campaigns to contacts who expect
                                    your messages.</li>
                                <li><strong>Plan quota.</strong> Responses carry <code>X-Quota-Limit</code>,
                                    <code>X-Quota-Remaining</code> and <code>X-Quota-Reset</code>. On
                                    <code>402 api_quota_exceeded</code>, pause the workflow until the reset.
                                </li>
                                <li><strong>Phone format.</strong> HeyDoot accepts spaces and dashes, but the number
                                    must start with <code>+</code> and the country code. A contact stored as
                                    <code>98765 43210</code> fails with <code>invalid_recipient</code>.
                                </li>
                            </ul>
                        </div>
                    </section>

                    <section id="go-live" class="guide-section">
                        <div class="section-heading">
                            <div class="section-icon"><i class="fas fa-clipboard-check"></i></div>
                            <h2>Go-live checklist</h2>
                        </div>
                        <div class="guide-card">
                            <p>Check each item before enabling the integration for production traffic.</p>
                            <ul class="check-list">
                                <li><i class="fas fa-check-circle"></i><span>Production base URL, API token (Read &amp;
                                        Send) and number ID are workflow secrets, not in code.</span></li>
                                <li><i class="fas fa-check-circle"></i><span>HeyDoot API Access is on, and the plan
                                        includes API access with a quota that fits your volume.</span></li>
                                <li><i class="fas fa-check-circle"></i><span>Contact mobile numbers include the country
                                        code.</span></li>
                                <li><i class="fas fa-check-circle"></i><span>The custom code action is tested on one
                                        internal contact, and <code>heydoot_conversation_id</code> is saved
                                        afterwards.</span></li>
                                <li><i class="fas fa-check-circle"></i><span>Every send carries a
                                        <code>dispatch_id</code> that stays the same on HubSpot's retries.</span></li>
                                <li><i class="fas fa-check-circle"></i><span>The workflow has an action rate limit
                                        set.</span></li>
                                <li><i class="fas fa-check-circle"></i><span>The relay is public HTTPS, checks the
                                        timestamp and signature, and answers within 8 seconds.</span></li>
                                <li><i class="fas fa-check-circle"></i><span>The private app token has only the two
                                        contact scopes and lives in the relay's environment.</span></li>
                                <li><i class="fas fa-check-circle"></i><span>Replies are de-duplicated by
                                        <code>message_ref</code> in shared storage, and statuses never move
                                        backwards.</span></li>
                                <li><i class="fas fa-check-circle"></i><span>Someone is alerted on
                                        <code>hd.number.disconnected</code>.</span></li>
                                <li><i class="fas fa-check-circle"></i><span>A HubSpot sandbox or test portal uses its
                                        own HeyDoot token, webhook and number.</span></li>
                            </ul>
                        </div>
                    </section>

                    <section id="testing-note" class="guide-section">
                        <div class="section-heading">
                            <div class="section-icon"><i class="fas fa-flask"></i></div>
                            <h2>Testing note & sources</h2>
                        </div>
                        <div class="guide-card">
                            <div class="note"><strong>Not tested yet.</strong> The request formats match HeyDoot's code,
                                and the HubSpot calls follow HubSpot's current docs, but neither example has run in a
                                real HubSpot portal. Test both in a sandbox first, especially the phone search, which
                                depends on how your portal stores numbers.</div>
                            <p><strong>Sources listed in the guide:</strong> HubSpot custom code actions · HubSpot
                                communications API · HubSpot CRM search API.</p>
                        </div>
                    </section>

                    <div id="done"
                        style="background:linear-gradient(115deg,#e8faf0,#e0f2fe);border-radius:28px;padding:30px;text-align:center;margin:34px 0;">
                        <i class="fas fa-check-circle" style="font-size:44px;color:var(--wa-teal);"></i>
                        <h2 style="margin:12px 0;">Ready for your sandbox test?</h2>
                        <p style="margin:8px auto;max-width:700px;">Verify sending, webhook signature validation, reply
                            logging, delivery status updates and retry behavior before switching on production traffic.
                        </p>
                        <a href="<?php echo BASE_URL; ?>/dashboard.php" class="btn btn-primary"
                            style="background:#0d6a2e;margin-top:12px;padding:10px 18px;"><i
                                class="fas fa-chart-line"></i> View Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include ROOT_PATH . '/components/footer.php'; ?>