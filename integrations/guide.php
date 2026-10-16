<?php
require_once dirname(__DIR__) . '/config.php';

$page_meta = [
    'title' => 'HeyDoot Integration Guide | Partner Integration & API v1',
    'meta_title' => 'HeyDoot Integration Guide – Connect Your CRM, ERP, or Custom App',
    'description' => 'Comprehensive integration guide for connecting CRM, LMS, ERP or custom platforms to HeyDoot. Send WhatsApp messages, track delivery, read conversations, and receive webhooks.',

    'og_title' => 'HeyDoot Partner Integration Guide · API v1',
    'og_description' => 'How any CRM, LMS, ERP or custom system can send WhatsApp messages through HeyDoot, track delivery, read conversations, and receive real-time events by webhook.',
    'og_image' => BASE_URL . '/assets/images/og-image.jpg',
    'og_url' => BASE_URL . '/integrations/guide.php',

    'twitter_title' => 'HeyDoot Partner Integration Guide · API v1',
    'twitter_description' => 'How any CRM, LMS, ERP or custom system can send WhatsApp messages through HeyDoot, track delivery, read conversations, and receive real-time events by webhook.',
    'twitter_image' => BASE_URL . '/assets/images/twitter-image.jpg',

    'canonical' => BASE_URL . '/integrations/guide.php'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "TechArticle",
    "headline" => "Connecting your platform to HeyDoot - Partner Integration & API v1",
    "name" => "HeyDoot Integration Guide",
    "description" => "How any CRM, LMS, ERP or custom system can send WhatsApp messages through HeyDoot, follow their delivery, read conversations, and receive real-time events by webhook.",
    "provider" => [
        "@type" => "Organization",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ],
    "url" => BASE_URL . '/integrations/guide.php'
];

$page_gtag_id = 'G-Q64SDSY0Y4';

include ROOT_PATH . '/components/header.php';
include ROOT_PATH . '/components/navbar.php';
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,700&family=Source+Sans+3:ital,wght@0,400;0,600;0,700;1,400&family=JetBrains+Mono:wght@400;600&display=swap">

<style>
/* Scoped Integration Guide Styles */
.guide-wrapper {
  --bg: #f6f8f7;
  --surface: #ffffff;
  --ink: #15211d;
  --ink-2: #44544e;
  --ink-3: #6b7a74;
  --line: #dde5e1;
  --accent: #0d7a62;
  --accent-soft: #e2f2ec;
  --code-bg: #10201b;
  --code-ink: #d9ece4;
  --code-key: #7fd8b8;
  --code-str: #f2c98a;
  --code-com: #7f978e;
  --warn: #9a5b00;
  --warn-soft: #fbf0dc;
  --danger: #b4232f;
  --get: #1d6fb8;
  --post: #0d7a62;
  --patch: #8a5a00;
  --delete: #b4232f;
  --f-display: "Bricolage Grotesque", "Segoe UI", system-ui, sans-serif;
  --f-body: "Source Sans 3", "Segoe UI", system-ui, sans-serif;
  --f-mono: "JetBrains Mono", ui-monospace, "SFMono-Regular", Menlo, Consolas, monospace;

  background: var(--bg);
  color: var(--ink);
  font-family: var(--f-body);
  font-size: 17px;
  line-height: 1.6;
  padding-bottom: 40px;
}

@media (prefers-color-scheme: dark) {
  .guide-wrapper:not([data-theme="light"]) {
    --bg: #0e1513; --surface: #141d1a; --ink: #e4ece8; --ink-2: #b2c0ba; --ink-3: #8a9a93;
    --line: #26332e; --accent: #4cc8a0; --accent-soft: #15302a;
    --code-bg: #0a110f; --code-ink: #d9ece4; --code-key: #7fd8b8; --code-str: #f2c98a; --code-com: #74897f;
    --warn: #f0b75c; --warn-soft: #2c2312; --danger: #ff7b85;
    --get: #6bb2f0; --post: #4cc8a0; --patch: #e8b450; --delete: #ff7b85;
    color-scheme: dark;
  }
}

.guide-wrapper * { box-sizing: border-box; }
.guide-wrap { max-width: 1200px; margin: 0 auto; padding-inline: 24px; padding-block: 40px 80px; display: grid; grid-template-columns: 240px minmax(0, 1fr); gap: 56px; }
@media (max-width: 900px) { .guide-wrap { grid-template-columns: minmax(0, 1fr); gap: 24px; padding-block: 24px 60px; } }

.guide-wrapper nav.toc { position: sticky; top: calc(env(safe-area-inset-top, 0px) + 90px); align-self: start; font-size: 14.5px; z-index: 10; max-height: calc(100vh - 110px); overflow-y: auto; padding-right: 8px; }
.guide-wrapper nav.toc .label { font-size: 11.5px; letter-spacing: .09em; text-transform: uppercase; color: var(--ink-3); font-weight: 700; margin-bottom: 10px; }
.guide-wrapper nav.toc ol { list-style: none; margin: 0; padding: 0; display: grid; gap: 2px; counter-reset: s; }
.guide-wrapper nav.toc a { display: block; padding: 6px 10px; border-radius: 6px; color: var(--ink-2); text-decoration: none; transition: background 0.15s, color 0.15s; font-size: 14px; }
.guide-wrapper nav.toc a:hover, .guide-wrapper nav.toc a:focus-visible { background: var(--accent-soft); color: var(--ink); outline: none; }
@media (max-width: 900px) {
  .guide-wrapper nav.toc { position: static; background: var(--surface); border: 1px solid var(--line); border-radius: 10px; padding: 14px; max-height: none; }
  .guide-wrapper nav.toc ol { grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); }
}

.guide-wrapper .guide-main { min-width: 0; }
.guide-wrapper header.doc { padding-bottom: 28px; border-bottom: 1px solid var(--line); margin-bottom: 8px; }
.guide-wrapper .eyebrow { font-size: 13px; letter-spacing: .1em; text-transform: uppercase; font-weight: 700; color: var(--accent); }
.guide-wrapper h1 { font-family: var(--f-display); font-size: clamp(32px, 5vw, 46px); line-height: 1.12; margin: 8px 0 14px; text-wrap: balance; letter-spacing: -.01em; color: var(--ink); }
.guide-wrapper .lede { font-size: 19px; color: var(--ink-2); max-width: 66ch; margin: 0; line-height: 1.55; }
.guide-wrapper .meta { display: flex; flex-wrap: wrap; gap: 8px 18px; margin-top: 18px; font-size: 14px; color: var(--ink-3); }
.guide-wrapper .meta span { background: var(--surface); border: 1px solid var(--line); padding: 4px 10px; border-radius: 6px; font-size: 13px; }

.guide-wrapper section { padding: 44px 0 0 0; margin: 0; scroll-margin-top: 90px; }
.guide-wrapper h2 { font-family: var(--f-display); font-size: 28px; line-height: 1.2; margin: 0 0 6px; text-wrap: balance; display: flex; gap: 12px; align-items: baseline; color: var(--ink); }
.guide-wrapper h2 .step { font-family: var(--f-mono); font-size: 14px; color: var(--accent); font-weight: 600; white-space: nowrap; }
.guide-wrapper h3 { font-family: var(--f-display); font-size: 20px; margin: 30px 0 8px; color: var(--ink); }
.guide-wrapper p, .guide-wrapper li { max-width: 72ch; }
.guide-wrapper p { margin: 10px 0; }
.guide-wrapper ul, .guide-wrapper ol { padding-left: 22px; }
.guide-wrapper li { margin: 4px 0; }
.guide-wrapper a { color: var(--accent); }
.guide-wrapper strong { font-weight: 700; }
.guide-wrapper code { font-family: var(--f-mono); font-size: .86em; background: var(--accent-soft); color: var(--ink); padding: 2px 6px; border-radius: 4px; overflow-wrap: anywhere; }

.guide-wrapper .code { position: relative; margin: 14px 0; }
.guide-wrapper .code pre { margin: 0; background: var(--code-bg); color: var(--code-ink); border-radius: 10px; padding: 16px 18px; overflow-x: auto; font-family: var(--f-mono); font-size: 13.5px; line-height: 1.55; }
.guide-wrapper .code pre code { background: none; padding: 0; color: inherit; font-size: inherit; overflow-wrap: normal; }
.guide-wrapper .code .lang { position: absolute; top: 8px; right: 75px; font-family: var(--f-mono); font-size: 11px; color: var(--code-com); text-transform: uppercase; letter-spacing: .06em; pointer-events: none; }
.guide-wrapper .code button { position: absolute; top: 6px; right: 8px; font: 600 12px var(--f-body); color: var(--code-ink); background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.18); border-radius: 6px; padding: 4px 10px; cursor: pointer; transition: all 0.2s; }
.guide-wrapper .code button:hover, .guide-wrapper .code button:focus-visible { border-color: var(--code-key); background: rgba(255,255,255,0.12); outline: none; }
.guide-wrapper .k { color: var(--code-key); } .guide-wrapper .s { color: var(--code-str); } .guide-wrapper .c { color: var(--code-com); font-style: italic; }

.guide-wrapper .tbl { overflow-x: auto; margin: 14px 0; border: 1px solid var(--line); border-radius: 10px; background: var(--surface); }
.guide-wrapper table { border-collapse: collapse; width: 100%; font-size: 15px; }
.guide-wrapper th, .guide-wrapper td { text-align: left; padding: 10px 14px; border-bottom: 1px solid var(--line); vertical-align: top; }
.guide-wrapper th { font-size: 12px; letter-spacing: .07em; text-transform: uppercase; color: var(--ink-3); font-weight: 700; background: var(--bg); white-space: nowrap; }
.guide-wrapper tr:last-child td { border-bottom: 0; }
.guide-wrapper td code { white-space: nowrap; }
.guide-wrapper td.wrap-code code { white-space: normal; }

.guide-wrapper .m { font-family: var(--f-mono); font-size: 12px; font-weight: 600; padding: 2px 7px; border-radius: 4px; border: 1px solid currentColor; white-space: nowrap; }
.guide-wrapper .m.get { color: var(--get); } .guide-wrapper .m.post { color: var(--post); } .guide-wrapper .m.patch { color: var(--patch); } .guide-wrapper .m.delete { color: var(--delete); }
.guide-wrapper .req { font-size: 12px; font-weight: 700; color: var(--danger); white-space: nowrap; }
.guide-wrapper .opt { font-size: 12px; color: var(--ink-3); white-space: nowrap; }

.guide-wrapper .note { border: 1px solid var(--line); background: var(--surface); border-radius: 10px; padding: 14px 18px; margin: 16px 0; font-size: 15.5px; }
.guide-wrapper .note.tip { border-color: color-mix(in srgb, var(--accent) 40%, var(--line)); background: var(--accent-soft); }
.guide-wrapper .note.warn { border-color: color-mix(in srgb, var(--warn) 45%, var(--line)); background: var(--warn-soft); }
.guide-wrapper .note b:first-child { display: block; font-size: 12px; letter-spacing: .08em; text-transform: uppercase; margin-bottom: 4px; }
.guide-wrapper .note.warn b:first-child { color: var(--warn); }
.guide-wrapper .note.tip b:first-child { color: var(--accent); }
.guide-wrapper .note p { margin: 4px 0; }

.guide-wrapper .need { display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 12px; margin: 18px 0; }
.guide-wrapper .need div { background: var(--surface); border: 1px solid var(--line); border-radius: 10px; padding: 14px 16px; }
.guide-wrapper .need .t { font-weight: 700; display: block; margin-bottom: 4px; }
.guide-wrapper .need .w { font-size: 14.5px; color: var(--ink-2); display: block; margin-top: 2px; }
.guide-wrapper .need code { font-size: 13px; }

.guide-wrapper .flow { display: grid; grid-template-columns: repeat(auto-fit, minmax(170px, 1fr)); gap: 10px; margin: 18px 0; padding: 0; list-style: none; counter-reset: f; }
.guide-wrapper .flow li { counter-increment: f; background: var(--surface); border: 1px solid var(--line); border-radius: 10px; padding: 14px 16px; font-size: 15px; margin: 0; max-width: none; }
.guide-wrapper .flow li::before { content: counter(f); font-family: var(--f-mono); font-weight: 700; color: var(--accent); display: block; font-size: 14px; margin-bottom: 4px; }

.guide-wrapper .check { list-style: none; padding: 0; }
.guide-wrapper .check li { padding-left: 28px; position: relative; margin: 8px 0; }
.guide-wrapper .check li::before { content: ""; position: absolute; left: 2px; top: 6px; width: 14px; height: 14px; border: 2px solid var(--accent); border-radius: 4px; }

.guide-wrapper footer.doc-footer { margin-top: 56px; padding-top: 18px; border-top: 1px solid var(--line); color: var(--ink-3); font-size: 14px; }
</style>

<div class="guide-wrapper">
  <div class="guide-wrap">
    <nav class="toc" aria-label="Contents">
      <div class="label">Contents</div>
      <ol>
        <li><a href="#overview">Overview</a></li>
        <li><a href="#credentials">1. Get credentials</a></li>
        <li><a href="#basics">2. Base URL &amp; headers</a></li>
        <li><a href="#numbers">3. Find your number</a></li>
        <li><a href="#send">4. Send messages</a></li>
        <li><a href="#status">5. Track delivery</a></li>
        <li><a href="#read">6. Read conversations</a></li>
        <li><a href="#webhooks">7. Webhooks</a></li>
        <li><a href="#errors">Errors &amp; limits</a></li>
        <li><a href="#encryption">Payload encryption</a></li>
        <li><a href="#reference">Endpoint reference</a></li>
        <li><a href="#golive">Go-live checklist</a></li>
      </ol>
    </nav>

    <div class="guide-main">
      <header class="doc">
        <div class="eyebrow">Partner integration · API v1</div>
        <h1>Connecting your platform to HeyDoot</h1>
        <p class="lede">How any CRM, LMS, ERP or custom system can send WhatsApp messages through HeyDoot, follow their delivery, read conversations, and receive real-time events by webhook.</p>
        <div class="meta"><span>REST + JSON over HTTPS</span><span>Bearer-token auth</span><span>HMAC-SHA256 signed webhooks</span></div>
      </header>

      <!-- ───────────────────────── Overview ───────────────────────── -->
      <section id="overview">
        <h2>Overview</h2>
        <p>HeyDoot connects an organisation's WhatsApp numbers to one shared inbox. An integration talks to HeyDoot in two directions:</p>
        <ul>
          <li><strong>Your platform → HeyDoot (REST API).</strong> Send messages, check delivery, list numbers, read conversation history, assign chats. You call HeyDoot with an API token.</li>
          <li><strong>HeyDoot → your platform (webhooks).</strong> HeyDoot calls a URL you host when something happens, such as a reply arriving, a message being delivered or read, or a number disconnecting. Every call is signed so you can prove it came from HeyDoot.</li>
        </ul>

        <h3>What you need before you start</h3>
        <div class="need">
          <div><span class="t">Base URL</span><span class="w">The HeyDoot API address for your organisation, e.g. <code>https://api.yourdomain.com</code>. Provided by the HeyDoot team.</span></div>
          <div><span class="t">API token</span><span class="w">A secret starting with <code>hd_live_</code>, created by your HeyDoot admin. Sent as a Bearer token.</span></div>
          <div><span class="t">Number ID</span><span class="w">The ID of the WhatsApp number to send from. You can look it up with the API (step 3).</span></div>
          <div><span class="t">Webhook endpoint</span><span class="w">An <strong>HTTPS</strong> URL on the public internet that you host, plus the signing secret HeyDoot gives you when the webhook is created.</span></div>
        </div>

        <h3>The integration at a glance</h3>
        <ol class="flow">
          <li>Admin creates an API token in HeyDoot</li>
          <li>You call <code>GET /v1/numbers</code> to get the <code>number_id</code></li>
          <li>You send with <code>POST /v1/messages/send</code></li>
          <li>Admin registers your webhook URL</li>
          <li>You receive replies and status updates, verify the signature, and process them</li>
        </ol>
      </section>

      <!-- ───────────────────────── 1. Credentials ───────────────────────── -->
      <section id="credentials">
        <h2><span class="step">Step 1</span> Get your API token</h2>
        <p>API tokens are created by an <strong>organisation admin</strong> in the HeyDoot web app. Developers do not create them through the API.</p>
        <ol>
          <li>Sign in to HeyDoot as an admin.</li>
          <li>Open <strong>Settings → Integrations → API Tokens</strong>.</li>
          <li>Click to create a token. Give it a label that names your platform (for example <em>"Salesforce production"</em>), choose its <strong>access level</strong> and an <strong>expiry</strong>.</li>
          <li>Copy the token right away. <strong>It is shown only once.</strong> HeyDoot stores only a hash of it, so a lost token can't be recovered. Revoke it and create a new one.</li>
        </ol>

        <div class="tbl"><table>
          <thead><tr><th>Access level</th><th>Allows</th></tr></thead>
          <tbody>
            <tr><td><strong>Read-only</strong> (<code>read</code>)</td><td>List numbers and check their health, read conversations, messages, media, templates, labels and quick replies, check message status.</td></tr>
            <tr><td><strong>Read &amp; Send</strong> (<code>write</code>)</td><td>Everything in Read-only, plus sending, cancelling and retrying messages, marking chats read, renaming contacts, assigning chats, and adding notes and labels.</td></tr>
          </tbody>
        </table></div>
        <p>Expiry can be <em>No expiry</em>, 30, 90 or 365 days. An admin can change the expiry later or revoke the token at any time. A revoked token stops working on the next request.</p>

        <h3>Also check these two settings</h3>
        <ul>
          <li><strong>Settings → Integrations → API Access</strong> must be <strong>on</strong>. When an admin turns it off, every token call is refused with <code>503 api_disabled</code>. It works like an emergency switch.</li>
          <li>The organisation's HeyDoot plan must include <strong>external API access</strong>. Some plans set daily, weekly or monthly call limits (see <a href="#errors">Errors &amp; limits</a>).</li>
        </ul>

        <div class="note warn"><b>Keep the token secret</b>
          <p>The token gives access to the whole organisation's WhatsApp data, across all its numbers. Store it in a secrets manager or a server-side environment variable. Never put it in browser code, a mobile app or a public repository. Use a separate token for each platform and environment so you can revoke one without affecting the others.</p>
        </div>
      </section>

      <!-- ───────────────────────── 2. Basics ───────────────────────── -->
      <section id="basics">
        <h2><span class="step">Step 2</span> Base URL, headers and request format</h2>
        <p>Every API path is under <code>/v1</code>. Combine it with the base URL you were given:</p>
        <div class="code"><span class="lang">text</span><pre><code>https://api.yourdomain.com/v1/messages/send
└──────── base URL ───────┘└──── path ────┘</code></pre></div>

        <div class="tbl"><table>
          <thead><tr><th>Header</th><th>Value</th><th></th></tr></thead>
          <tbody>
            <tr><td><code>Authorization</code></td><td><code>Bearer hd_live_…</code></td><td><span class="req">required</span></td></tr>
            <tr><td><code>Content-Type</code></td><td><code>application/json</code></td><td><span class="req">required on POST / PATCH</span></td></tr>
            <tr><td><code>Accept</code></td><td><code>application/json</code></td><td><span class="opt">recommended</span></td></tr>
          </tbody>
        </table></div>

        <ul>
          <li><strong>Always use HTTPS.</strong> Production servers refuse plain HTTP with <code>403 https_required</code>.</li>
          <li><strong>JSON in, JSON out.</strong> Timestamps are ISO-8601 in UTC, e.g. <code>2026-10-05T09:52:04.039Z</code>.</li>
          <li><strong>Body size.</strong> Up to 30 MB on <code>/v1/messages/*</code> (to allow attachments), and 512 KB on everything else.</li>
          <li><strong>Server-to-server.</strong> Call the API from your backend. Browser calls from other websites are blocked by CORS.</li>
          <li><strong>Interactive docs.</strong> The server publishes an OpenAPI 3 description at <code>/openapi.json</code> and a browsable version at <code>/docs</code> (both outside <code>/v1</code>). <code>/health</code> needs no token and returns the service status.</li>
        </ul>

        <h3>Test your token</h3>
        <div class="code"><span class="lang">bash</span><pre><code><span class="k">curl</span> https://api.yourdomain.com/v1/numbers \
  -H <span class="s">"Authorization: Bearer $HEYDOOT_TOKEN"</span></code></pre></div>
        <p>A <code>200</code> with a list of numbers means the token works. A <code>401</code> means the token is missing, mistyped, expired or revoked.</p>
      </section>

      <!-- ───────────────────────── 3. Numbers ───────────────────────── -->
      <section id="numbers">
        <h2><span class="step">Step 3</span> Find the WhatsApp number to send from</h2>
        <p>An organisation can have several WhatsApp numbers (for example a Sales line and a Support line). Each has a <code>number_id</code> (a UUID). You need it to start a new chat.</p>
        <div class="code"><span class="lang">http</span><pre><code><span class="k">GET</span> /v1/numbers</code></pre></div>
        <div class="code"><span class="lang">json</span><pre><code>{
  <span class="k">"data"</span>: [
    {
      <span class="k">"number_id"</span>: <span class="s">"01976117-a906-42f2-9b23-30394341f3ff"</span>,
      <span class="k">"number_label"</span>: <span class="s">"Sales line"</span>,
      <span class="k">"connection_state"</span>: <span class="s">"linked"</span>,
      <span class="k">"removed"</span>: false,
      <span class="k">"send_method"</span>: <span class="s">"device"</span>
    }
  ],
  <span class="k">"total"</span>: 1
}</code></pre></div>
        <p><code>connection_state</code> is one of <code>pending</code>, <code>pairing</code>, <code>linked</code>, <code>disconnected</code>, <code>banned</code> or <code>error</code>. Only a <code>linked</code> number can send. To check one number before a send burst, call <code>GET /v1/numbers/{number_id}/health</code>, which returns <code>is_healthy</code> and <code>last_seen_at</code>.</p>
        <div class="note tip"><b>Tip</b><p>Save the <code>number_id</code> in your platform's configuration rather than looking it up on every send. It doesn't change when the number is renamed.</p></div>
      </section>

      <!-- ───────────────────────── 4. Send ───────────────────────── -->
      <section id="send">
        <h2><span class="step">Step 4</span> Send a message</h2>
        <div class="code"><span class="lang">http</span><pre><code><span class="k">POST</span> /v1/messages/send        <span class="c">// needs a Read &amp; Send token</span></code></pre></div>
        <p>Pick a recipient in one of two ways:</p>
        <ul>
          <li><strong>New or existing chat by phone number:</strong> send <code>to</code> + <code>number_id</code>. HeyDoot finds the chat or creates it.</li>
          <li><strong>Reply in a known chat:</strong> send <code>conversation_id</code> (from a webhook or a conversation list). The chat already knows its number.</li>
        </ul>

        <h3>Request fields</h3>
        <div class="tbl"><table>
          <thead><tr><th>Field</th><th>Type</th><th></th><th>Description</th></tr></thead>
          <tbody>
            <tr><td><code>to</code></td><td>string</td><td><span class="opt">one of</span></td><td>Recipient phone in international format, e.g. <code>+919876543210</code>. Spaces, dashes and the <code>+</code> are tolerated. It must have a country code and be 8–15 digits.</td></tr>
            <tr><td><code>number_id</code></td><td>uuid</td><td><span class="opt">with <code>to</code></span></td><td>The WhatsApp number to send from.</td></tr>
            <tr><td><code>conversation_id</code></td><td>string</td><td><span class="opt">one of</span></td><td>Send into an existing chat instead of using <code>to</code>.</td></tr>
            <tr><td><code>text</code></td><td>string</td><td><span class="opt">text or attachment</span></td><td>Message text. With an attachment, it becomes the caption.</td></tr>
            <tr><td><code>attachment</code></td><td>object</td><td><span class="opt">text or attachment</span></td><td>See <a href="#attachments">Attachments</a>.</td></tr>
            <tr><td><code>dispatch_id</code></td><td>uuid</td><td><span class="opt">recommended</span></td><td>Your idempotency key. Resending with the same <code>dispatch_id</code> returns the first result and <strong>does not send twice</strong>.</td></tr>
            <tr><td><code>user_id</code></td><td>string ≤128</td><td><span class="opt">recommended</span></td><td>ID of the person in <em>your</em> platform who sent the message. Shown in HeyDoot's User Metrics.</td></tr>
            <tr><td><code>username</code></td><td>string ≤200</td><td><span class="opt">recommended</span></td><td>Display name of that person.</td></tr>
            <tr><td><code>user_email</code></td><td>email ≤254</td><td><span class="opt">recommended</span></td><td>Email of that person, so admins can tell who sent what.</td></tr>
            <tr><td><code>reply_to_message_ref</code></td><td>string</td><td><span class="opt">optional</span></td><td>Quote-reply to an earlier message in the same chat.</td></tr>
            <tr><td><code>mentions</code></td><td>string[] ≤64</td><td><span class="opt">optional</span></td><td>Phone numbers to @mention. Group chats only.</td></tr>
            <tr><td><code>send_options</code></td><td>object</td><td><span class="opt">optional</span></td><td><code>{"suppress_link_preview": true}</code> sends links without a preview card.</td></tr>
            <tr><td><code>lane</code></td><td>string</td><td><span class="opt">optional</span></td><td><code>interactive</code> (one-to-one replies, the default pacing) or <code>bulk</code> (mass sends, paced more slowly to protect the number).</td></tr>
          </tbody>
        </table></div>

        <h3>Example: text message</h3>
        <div class="code"><span class="lang">bash</span><pre><code><span class="k">curl</span> -X POST https://api.yourdomain.com/v1/messages/send \
  -H <span class="s">"Authorization: Bearer $HEYDOOT_TOKEN"</span> \
  -H <span class="s">"Content-Type: application/json"</span> \
  -d <span class="s">'{
    "to": "+919876543210",
    "number_id": "01976117-a906-42f2-9b23-30394341f3ff",
    "text": "Hi Priya, your appointment is confirmed for 4 PM tomorrow.",
    "dispatch_id": "6c0e1b2a-58f4-4b7e-9d0c-2f1a7e3b9c11",
    "user_id": "agent-42",
    "username": "Riya Sharma",
    "user_email": "riya@yourcompany.com"
  }'</span></code></pre></div>

        <h3>Response: <code>202 Accepted</code></h3>
        <div class="code"><span class="lang">json</span><pre><code>{
  <span class="k">"status"</span>: <span class="s">"queued"</span>,
  <span class="k">"message_ref"</span>: <span class="s">"hd_4F0C9A1B7E2D3C5A6B8E9F"</span>,
  <span class="k">"conversation_id"</span>: <span class="s">"c3a1…"</span>,
  <span class="k">"dispatch_id"</span>: <span class="s">"6c0e1b2a-58f4-4b7e-9d0c-2f1a7e3b9c11"</span>,
  <span class="k">"provider_message_id"</span>: null,
  <span class="k">"track"</span>: { <span class="k">"status_url"</span>: <span class="s">"GET /v1/messages/hd_4F0C9A1B7E2D3C5A6B8E9F/status"</span> }
}</code></pre></div>
        <p><code>202</code> means HeyDoot <strong>accepted and queued</strong> the message. It hasn't been delivered yet. Store the <code>message_ref</code>: it is HeyDoot's ID for this message and appears in every later status update and webhook.</p>

        <h3 id="attachments">Attachments</h3>
        <div class="tbl"><table>
          <thead><tr><th>Field</th><th>Description</th></tr></thead>
          <tbody>
            <tr><td><code>kind</code> <span class="req">required</span></td><td><code>image</code>, <code>document</code>, <code>audio</code> or <code>video</code></td></tr>
            <tr><td><code>source_url</code></td><td>A public <code>https://</code> URL HeyDoot downloads the file from.</td></tr>
            <tr><td><code>file_base64</code></td><td>The file itself, as base64 or a data URI (<code>data:application/pdf;base64,…</code>). Used instead of <code>source_url</code> if both are sent. Max <strong>16 MB</strong> decoded.</td></tr>
            <tr><td><code>file_name</code></td><td>Name the recipient sees, e.g. <code>Invoice-1042.pdf</code>.</td></tr>
            <tr><td><code>mime_type</code></td><td>e.g. <code>application/pdf</code>. Detected automatically when omitted.</td></tr>
          </tbody>
        </table></div>
        <div class="code"><span class="lang">json</span><pre><code>{
  <span class="k">"conversation_id"</span>: <span class="s">"c3a1…"</span>,
  <span class="k">"text"</span>: <span class="s">"Your invoice is attached."</span>,
  <span class="k">"attachment"</span>: {
    <span class="k">"kind"</span>: <span class="s">"document"</span>,
    <span class="k">"source_url"</span>: <span class="s">"https://files.yourcompany.com/invoices/1042.pdf"</span>,
    <span class="k">"file_name"</span>: <span class="s">"Invoice-1042.pdf"</span>
  }
}</code></pre></div>

        <h3>Sending safely</h3>
        <ul>
          <li><strong>Always send a <code>dispatch_id</code></strong>, a new UUID per message, saved with the message on your side. If your request times out, retry with the <em>same</em> <code>dispatch_id</code> and the recipient still gets only one message.</li>
          <li><strong>Fill in <code>user_id</code>, <code>username</code> and <code>user_email</code></strong> for messages a person sent. Without them, the message shows in HeyDoot's reports as <em>"API (no user)"</em>.</li>
          <li><strong>Templates:</strong> <code>GET /v1/templates</code> lists the organisation's saved texts with <code>{{name}}</code> or <code>{{name|fallback}}</code> placeholders. Fill them in on your side and send the finished text.</li>
          <li>Recipients on the organisation's <strong>Do-Not-Contact</strong> list are refused with <code>422 recipient_opted_out</code>. Don't retry these.</li>
        </ul>

        <h3>Cancel or retry</h3>
        <div class="tbl"><table>
          <thead><tr><th>Call</th><th>What it does</th></tr></thead>
          <tbody>
            <tr><td class="wrap-code"><span class="m post">POST</span> <code>/v1/messages/{message_ref}/cancel</code></td><td>Stops a message that is still queued. Returns <code>409 not_cancelable</code> once it has gone out.</td></tr>
            <tr><td class="wrap-code"><span class="m post">POST</span> <code>/v1/messages/{message_ref}/retry</code></td><td>Requeues a <code>failed</code> message. Returns <code>409</code> with a reason if it can't be retried, such as <code>not_on_whatsapp</code>, <code>not_failed</code>, or <code>reach_out_cooldown</code> (with <code>retry_after</code>).</td></tr>
          </tbody>
        </table></div>
      </section>

      <!-- ───────────────────────── 5. Status ───────────────────────── -->
      <section id="status">
        <h2><span class="step">Step 5</span> Track delivery</h2>
        <p>The best way is the <code>hd.message.status</code> webhook (step 7), which tells you as soon as the status changes. You can also ask for it directly:</p>
        <div class="code"><span class="lang">http</span><pre><code><span class="k">GET</span> /v1/messages/{message_ref}/status</code></pre></div>
        <div class="code"><span class="lang">json</span><pre><code>{
  <span class="k">"message_ref"</span>: <span class="s">"hd_4F0C9A1B7E2D3C5A6B8E9F"</span>,
  <span class="k">"dispatch_id"</span>: <span class="s">"6c0e1b2a-…"</span>,
  <span class="k">"conversation_id"</span>: <span class="s">"c3a1…"</span>,
  <span class="k">"status"</span>: <span class="s">"delivered"</span>,
  <span class="k">"content"</span>: { <span class="k">"text"</span>: <span class="s">"Hi Priya, …"</span>, <span class="k">"type"</span>: <span class="s">"text"</span> },
  <span class="k">"timeline"</span>: { <span class="k">"queued_at"</span>: <span class="s">"2026-10-05T09:52:04Z"</span>, <span class="k">"sent_at"</span>: <span class="s">"2026-10-05T09:52:06Z"</span> },
  <span class="k">"attempt_count"</span>: 1,
  <span class="k">"send_error"</span>: null
}</code></pre></div>

        <div class="tbl"><table>
          <thead><tr><th>Status</th><th>Meaning</th><th>Final?</th></tr></thead>
          <tbody>
            <tr><td><code>queued</code></td><td>Accepted, waiting to go out.</td><td>No</td></tr>
            <tr><td><code>sending</code></td><td>Being handed to WhatsApp.</td><td>No</td></tr>
            <tr><td><code>pending_review</code></td><td>Held by the organisation's message monitoring for an admin to approve.</td><td>No</td></tr>
            <tr><td><code>sent</code></td><td>Accepted by WhatsApp (one grey tick).</td><td>No</td></tr>
            <tr><td><code>delivered</code></td><td>Reached the recipient's phone (two grey ticks).</td><td>No</td></tr>
            <tr><td><code>read</code></td><td>Opened by the recipient (two blue ticks). Only if they have read receipts on.</td><td>Yes</td></tr>
            <tr><td><code>failed</code></td><td>Could not be sent. <code>send_error</code> says why, e.g. <code>not_on_whatsapp</code>.</td><td>Yes, unless retried</td></tr>
            <tr><td><code>blocked</code></td><td>Stopped by the organisation's message monitoring.</td><td>Yes</td></tr>
            <tr><td><code>canceled</code></td><td>Cancelled before sending.</td><td>Yes</td></tr>
          </tbody>
        </table></div>
        <div class="note"><b>Polling</b><p>If you poll instead of using webhooks, back off: check after a few seconds, then every 30–60 seconds, and stop once the status is final. Every poll counts toward your rate limit and plan quota.</p></div>
      </section>

      <!-- ───────────────────────── 6. Read ───────────────────────── -->
      <section id="read">
        <h2><span class="step">Step 6</span> Read conversations and history</h2>
        <h3>List conversations</h3>
        <div class="code"><span class="lang">http</span><pre><code><span class="k">GET</span> /v1/conversations?number_id={number_id}&amp;limit=30</code></pre></div>
        <p>Returns the most recent chats first, with <code>has_more</code> for paging. Filters: <code>number_id</code>, <code>label_id</code>, <code>unassigned=true</code>, <code>assigned_to=&lt;user_id&gt;</code>. <code>limit</code> is 1–100 (default 30). For the next page, pass <code>before</code> (the last item's activity time) and <code>before_id</code> (its <code>conversation_id</code>).</p>
        <p>Each item has <code>conversation_id</code>, <code>display_name</code>, <code>phone_number</code> (hidden if the organisation's privacy settings hide phone numbers), <code>is_group</code>, <code>unread_count</code>, <code>number_id</code>, <code>last_message</code>, assignment fields and <code>labels</code>.</p>

        <h3>Messages in a conversation</h3>
        <div class="code"><span class="lang">http</span><pre><code><span class="k">GET</span> /v1/conversations/{conversation_id}/messages?limit=50</code></pre></div>
        <p>Returns messages oldest-first. <code>limit</code> is 1–200 (default 30). To load older messages, pass <code>before=&lt;queued_at of the oldest message you have&gt;</code>. Each message has <code>message_ref</code>, <code>direction</code> (<code>inbound</code> / <code>outbound</code>), <code>text</code>, <code>message_type</code>, <code>status</code>, <code>sender_name</code>, <code>has_media</code>, <code>media_mime</code> and timestamps.</p>

        <h3>Media</h3>
        <div class="code"><span class="lang">http</span><pre><code><span class="k">GET</span> /v1/conversations/{conversation_id}/messages/{message_ref}/media</code></pre></div>
        <p>Returns the raw file (image, PDF, voice note…) with its own content type. Use it when a message or webhook has <code>has_media: true</code>.</p>

        <h3>Working with a chat</h3>
        <div class="tbl"><table>
          <thead><tr><th>Call</th><th>Body</th><th>Use</th></tr></thead>
          <tbody>
            <tr><td class="wrap-code"><span class="m patch">PATCH</span> <code>/v1/conversations/{id}/assign</code></td><td class="wrap-code"><code>{"external_user_id": "agent-42", "external_user_display_name": "Riya Sharma"}</code></td><td>Record which of <em>your</em> users owns the chat. Send <code>null</code> to unassign. Fires <code>hd.conversation.assigned</code>.</td></tr>
            <tr><td class="wrap-code"><span class="m post">POST</span> <code>/v1/conversations/{id}/read</code></td><td>—</td><td>Mark the chat read (unread count to 0).</td></tr>
            <tr><td class="wrap-code"><span class="m patch">PATCH</span> <code>/v1/conversations/{id}/display-name</code></td><td class="wrap-code"><code>{"display_name": "Priya Verma"}</code></td><td>Set the contact's name from your records.</td></tr>
            <tr><td class="wrap-code"><span class="m post">POST</span> <code>/v1/conversations/{id}/notes</code></td><td class="wrap-code"><code>{"body": "Called back, wants a demo"}</code></td><td>Add an internal note (max 4000 characters). Not sent to the contact.</td></tr>
            <tr><td class="wrap-code"><span class="m post">POST</span> <code>/v1/conversations/{id}/labels</code></td><td class="wrap-code"><code>{"label_id": "…"}</code></td><td>Tag the chat. IDs come from <code>GET /v1/labels</code>.</td></tr>
          </tbody>
        </table></div>
      </section>

      <!-- ───────────────────────── 7. Webhooks ───────────────────────── -->
      <section id="webhooks">
        <h2><span class="step">Step 7</span> Receive events with webhooks</h2>
        <p>A webhook is a URL on your server that HeyDoot calls with an HTTP <code>POST</code> whenever a chosen event happens. This is how your platform learns about <strong>incoming replies</strong> and <strong>delivery updates</strong> without polling.</p>

        <h3>Set it up</h3>
        <ol>
          <li>Build an endpoint on your server, e.g. <code>https://crm.yourcompany.com/heydoot/events</code>. It must be <strong>HTTPS</strong>, reachable from the internet, and on a public address (localhost and private IPs are refused). It should reply <code>2xx</code> within <strong>8 seconds</strong>.</li>
          <li>A HeyDoot admin opens <strong>Settings → Integrations → Webhooks</strong> and adds the URL, choosing:
            <ul>
              <li><strong>Events</strong> to receive (at least one).</li>
              <li><strong>Numbers</strong> (optional). Only events for these WhatsApp numbers are sent. Leave empty for all numbers.</li>
              <li><strong>Encrypt payloads</strong> (optional, see below).</li>
            </ul>
          </li>
          <li>HeyDoot shows a <strong>signing secret</strong> (64 hex characters), and an encryption key if encryption is on. <strong>Both are shown once.</strong> Store them on your server. To change the secret, delete the webhook and create it again.</li>
        </ol>
        <p>An organisation can have up to 20 webhooks. Webhooks are managed by an admin in the HeyDoot app, not through API tokens, and need the Webhooks feature on the organisation's plan.</p>

        <h3>Events</h3>
        <div class="tbl"><table>
          <thead><tr><th>Event</th><th>Sent when</th><th>Main fields</th></tr></thead>
          <tbody>
            <tr><td><code>hd.message.received</code></td><td>A contact sends a message to one of the numbers.</td><td class="wrap-code"><code>message_ref</code>, <code>conversation_id</code>, <code>number_id</code>, <code>from</code>, <code>text</code>, <code>message_type</code>, <code>sender_name</code>, <code>has_media</code>, <code>media_mime</code>, <code>received_at</code></td></tr>
            <tr><td><code>hd.message.status</code></td><td>An outgoing message changes status (sent, delivered, read, failed…).</td><td class="wrap-code"><code>message_ref</code>, <code>conversation_id</code>, <code>number_id</code>, <code>status</code>, <code>send_error</code>, <code>attempt_count</code>, <code>message_type</code></td></tr>
            <tr><td><code>hd.message.deleted</code></td><td>A message is deleted for everyone.</td><td class="wrap-code"><code>message_ref</code>, <code>conversation_id</code>, <code>direction</code>, <code>deleted_by</code> (<code>me</code> / <code>contact</code>)</td></tr>
            <tr><td><code>hd.conversation.created</code></td><td>A new chat starts.</td><td class="wrap-code"><code>conversation_id</code>, <code>number_id</code>, <code>direction</code>, <code>contact_name</code>, <code>is_group</code>, <code>created_at</code></td></tr>
            <tr><td><code>hd.conversation.assigned</code></td><td>A chat's owner changes.</td><td class="wrap-code"><code>conversation_id</code>, <code>external_user_id</code>, <code>assigned_user_id</code>, previous owners, <code>assigned_at</code></td></tr>
            <tr><td><code>hd.number.connected</code></td><td>A WhatsApp number comes online.</td><td class="wrap-code"><code>number_id</code>, <code>connection_state</code>, <code>reason</code></td></tr>
            <tr><td><code>hd.number.disconnected</code></td><td>A number goes offline. It can't send until reconnected.</td><td class="wrap-code"><code>number_id</code>, <code>connection_state</code>, <code>reason</code></td></tr>
            <tr><td><code>hd.automation.started</code> / <code>completed</code> / <code>expired</code> / <code>cancelled</code></td><td>An automated workflow run changes state.</td><td class="wrap-code"><code>run_id</code>, <code>workflow_key</code>, <code>conversation_id</code>, <code>status</code>, <code>answers</code>, <code>variables</code></td></tr>
          </tbody>
        </table></div>

        <h3>What a delivery looks like</h3>
        <div class="code"><span class="lang">http</span><pre><code><span class="k">POST</span> /heydoot/events HTTP/1.1
Host: crm.yourcompany.com
Content-Type: application/json
x-hd-event: hd.message.received
x-hd-timestamp: 1759658524
x-hd-signature: 5b1f0c…e9a2   <span class="c">// hex HMAC-SHA256</span>

{
  <span class="k">"event"</span>: <span class="s">"hd.message.received"</span>,
  <span class="k">"message_ref"</span>: <span class="s">"hd_9A2B…"</span>,
  <span class="k">"conversation_id"</span>: <span class="s">"c3a1…"</span>,
  <span class="k">"number_id"</span>: <span class="s">"01976117-a906-42f2-9b23-30394341f3ff"</span>,
  <span class="k">"direction"</span>: <span class="s">"inbound"</span>,
  <span class="k">"from"</span>: <span class="s">"919876543210"</span>,
  <span class="k">"text"</span>: <span class="s">"Yes, 4 PM works for me"</span>,
  <span class="k">"message_type"</span>: <span class="s">"text"</span>,
  <span class="k">"sender_name"</span>: <span class="s">"Priya"</span>,
  <span class="k">"has_media"</span>: false,
  <span class="k">"received_at"</span>: <span class="s">"2026-10-05T10:02:04.000Z"</span>
}</code></pre></div>
        <p>The body is a flat JSON object: <code>event</code> plus that event's fields. Use <code>conversation_id</code> to reply with <code>POST /v1/messages/send</code>.</p>

        <h3>Verify every request</h3>
        <p>Anyone can post to a public URL, so check the signature before trusting a request:</p>
        <ol>
          <li>Read the <strong>raw request body</strong> exactly as received, before any JSON parsing.</li>
          <li>Build the string <code>&lt;x-hd-timestamp&gt;.&lt;raw body&gt;</code> (timestamp, a dot, then the body).</li>
          <li>Compute <code>HMAC-SHA256</code> of it using your signing secret, as lowercase hex.</li>
          <li>Compare it with <code>x-hd-signature</code> using a constant-time comparison.</li>
          <li>Reject the request if <code>x-hd-timestamp</code> is more than 5 minutes from your clock, to block replays.</li>
        </ol>

        <div class="code"><span class="lang">node.js</span><pre><code><span class="k">import</span> express <span class="k">from</span> <span class="s">'express'</span>;
<span class="k">import</span> { createHmac, timingSafeEqual } <span class="k">from</span> <span class="s">'node:crypto'</span>;

<span class="k">const</span> SECRET = process.env.HEYDOOT_WEBHOOK_SECRET;
<span class="k">const</span> app = express();

<span class="c">// express.raw keeps the exact bytes; the signature is over them, not over re-serialised JSON.</span>
app.post(<span class="s">'/heydoot/events'</span>, express.raw({ type: <span class="s">'*/*'</span> }), (req, res) => {
  <span class="k">const</span> ts  = req.get(<span class="s">'x-hd-timestamp'</span>) ?? <span class="s">''</span>;
  <span class="k">const</span> sig = req.get(<span class="s">'x-hd-signature'</span>) ?? <span class="s">''</span>;
  <span class="k">if</span> (Math.abs(Date.now() / 1000 - Number(ts)) > 300) <span class="k">return</span> res.sendStatus(401);

  <span class="k">const</span> expected = createHmac(<span class="s">'sha256'</span>, SECRET).update(`${ts}.`).update(req.body).digest(<span class="s">'hex'</span>);
  <span class="k">const</span> ok = sig.length === expected.length &amp;&amp; timingSafeEqual(Buffer.from(sig), Buffer.from(expected));
  <span class="k">if</span> (!ok) <span class="k">return</span> res.sendStatus(401);

  res.sendStatus(200);                       <span class="c">// acknowledge first…</span>
  <span class="k">const</span> event = JSON.parse(req.body.toString(<span class="s">'utf8'</span>));
  queue.push(event);                         <span class="c">// …then process in the background</span>
});</code></pre></div>

        <div class="code"><span class="lang">python</span><pre><code><span class="k">import</span> hmac, hashlib, time, os
<span class="k">from</span> flask <span class="k">import</span> Flask, request, abort

SECRET = os.environ[<span class="s">"HEYDOOT_WEBHOOK_SECRET"</span>].encode()
app = Flask(__name__)

<span class="k">@app.post</span>(<span class="s">"/heydoot/events"</span>)
<span class="k">def</span> heydoot_events():
    ts  = request.headers.get(<span class="s">"x-hd-timestamp"</span>, <span class="s">""</span>)
    sig = request.headers.get(<span class="s">"x-hd-signature"</span>, <span class="s">""</span>)
    <span class="k">if not</span> ts.isdigit() <span class="k">or</span> abs(time.time() - int(ts)) > 300:
        abort(401)
    raw = request.get_data()                 <span class="c"># exact bytes</span>
    expected = hmac.new(SECRET, ts.encode() + b<span class="s">"."</span> + raw, hashlib.sha256).hexdigest()
    <span class="k">if not</span> hmac.compare_digest(sig, expected):
        abort(401)
    enqueue(request.get_json(force=True))    <span class="c"># process asynchronously</span>
    <span class="k">return</span> <span class="s">""</span>, 200</code></pre></div>

        <h3>Encrypted payloads (optional)</h3>
        <p>If the admin turned on <strong>Encrypt payloads</strong>, the body isn't JSON. It is a base64 string, sent with <code>Content-Type: text/plain</code> and the extra header <code>x-hd-encryption: aes-256-cbc</code>.</p>
        <ol>
          <li><strong>Verify the signature first</strong>, exactly as above. It covers the encrypted text.</li>
          <li>Base64-decode the body. The first 16 bytes are the IV and the rest is the ciphertext.</li>
          <li>Decrypt with AES-256-CBC (PKCS#7 padding) using the webhook's encryption key (64 hex characters = 32 bytes), then parse the result as JSON.</li>
        </ol>
        <div class="code"><span class="lang">node.js</span><pre><code><span class="k">import</span> { createDecipheriv } <span class="k">from</span> <span class="s">'node:crypto'</span>;

<span class="k">function</span> decryptHeyDoot(rawBody, keyHex) {
  <span class="k">const</span> buf = Buffer.from(rawBody.toString(<span class="s">'utf8'</span>), <span class="s">'base64'</span>);
  <span class="k">const</span> d = createDecipheriv(<span class="s">'aes-256-cbc'</span>, Buffer.from(keyHex, <span class="s">'hex'</span>), buf.subarray(0, 16));
  <span class="k">return</span> JSON.parse(Buffer.concat([d.update(buf.subarray(16)), d.final()]).toString(<span class="s">'utf8'</span>));
}</code></pre></div>
        <p>This format works natively in Salesforce Apex (<code>Crypto.decryptWithManagedIV('AES256', key, blob)</code>).</p>

        <h3>Retries and reliability</h3>
        <ul>
          <li>Only a <code>2xx</code> reply counts as delivered. Timeouts (8 s), errors, and redirects (<code>3xx</code>) count as failures.</li>
          <li>A failed delivery is retried <strong>6 more times</strong>: three at about 1-minute gaps, then three at about 15-minute gaps. That's roughly 50 minutes in total. After that it is marked <em>exhausted</em>, and an admin can resend it from HeyDoot.</li>
          <li>Each retry carries a new <code>x-hd-timestamp</code> and signature.</li>
          <li>Because of retries, <strong>the same event can arrive more than once</strong>, and events can arrive out of order. Remove duplicates using <code>event</code> + <code>message_ref</code> (+ <code>status</code> for status events). Never move a message's status backwards (for example, don't overwrite <code>read</code> with <code>delivered</code>).</li>
          <li>Reply <code>200</code> straight away and do slow work (database writes, CRM updates) in a background queue, so you stay under the 8-second limit.</li>
          <li>Admins can see every delivery attempt in HeyDoot (status, HTTP code, error), which helps when debugging.</li>
        </ul>
      </section>

      <!-- ───────────────────────── Errors ───────────────────────── -->
      <section id="errors">
        <h2>Errors, rate limits and quotas</h2>
        <p>Every error has the same shape. Use <code>error</code> in your code and show or log <code>message</code>:</p>
        <div class="code"><span class="lang">json</span><pre><code>{
  <span class="k">"error"</span>: <span class="s">"invalid_request"</span>,
  <span class="k">"message"</span>: <span class="s">"Number: Must be a valid id; Text: Is required"</span>,
  <span class="k">"details"</span>: { <span class="c">/* field-level detail, when relevant */</span> }
}</code></pre></div>

        <div class="tbl"><table>
          <thead><tr><th>Status</th><th>Common <code>error</code> codes</th><th>What to do</th></tr></thead>
          <tbody>
            <tr><td><code>400</code></td><td class="wrap-code"><code>invalid_request</code>, <code>invalid_json</code>, <code>invalid_recipient</code>, <code>empty_message</code>, <code>attachment_source_required</code>, <code>number_id_conflicts_with_conversation</code></td><td>Fix the request. Don't retry it unchanged.</td></tr>
            <tr><td><code>401</code></td><td class="wrap-code"><code>unauthorized</code></td><td>The token is missing, wrong, expired or revoked. Get a valid token.</td></tr>
            <tr><td><code>402</code></td><td class="wrap-code"><code>api_not_licensed</code>, <code>api_quota_exceeded</code>, <code>feature_not_licensed</code></td><td>Plan limit. See below. Wait for <code>resets_at</code> or ask the organisation to upgrade.</td></tr>
            <tr><td><code>403</code></td><td class="wrap-code"><code>forbidden</code>, <code>license_inactive</code>, <code>over_limit</code>, <code>https_required</code></td><td>The token's access level is too low, the endpoint isn't open to API tokens, or the organisation's subscription is inactive.</td></tr>
            <tr><td><code>404</code></td><td class="wrap-code"><code>conversation_not_found</code>, <code>number_not_found</code>, <code>message_not_found</code></td><td>Check the ID. IDs from another organisation also return 404.</td></tr>
            <tr><td><code>409</code></td><td class="wrap-code"><code>not_cancelable</code>, <code>not_failed</code>, <code>not_on_whatsapp</code>, <code>reach_out_cooldown</code></td><td>The action doesn't fit the message's current state.</td></tr>
            <tr><td><code>413</code></td><td class="wrap-code"><code>payload_too_large</code>, <code>attachment_too_large</code></td><td>Make the file smaller (max 16 MB), or send a <code>source_url</code> instead.</td></tr>
            <tr><td><code>422</code></td><td class="wrap-code"><code>recipient_opted_out</code></td><td>The contact is on Do-Not-Contact. Don't retry.</td></tr>
            <tr><td><code>429</code></td><td class="wrap-code"><code>rate_limited</code></td><td>Wait for <code>Retry-After</code> seconds, then retry.</td></tr>
            <tr><td><code>502</code> / <code>503</code></td><td class="wrap-code"><code>connector_error</code>, <code>api_disabled</code>, <code>database_unavailable</code></td><td>Temporary. Retry with backoff, using the same <code>dispatch_id</code>. For <code>api_disabled</code>, contact the organisation's admin.</td></tr>
          </tbody>
        </table></div>

        <h3>Rate limit</h3>
        <p>Each API token can make <strong>600 requests per minute</strong> by default (fixed one-minute windows). Every response carries:</p>
        <div class="code"><span class="lang">http</span><pre><code>X-RateLimit-Limit: 600
X-RateLimit-Remaining: 587</code></pre></div>
        <p>Over the limit you get <code>429</code> with <code>Retry-After: 60</code>. Spread bulk sends out rather than sending them all at once.</p>

        <h3>Plan quotas</h3>
        <p>Plans can cap API calls per <strong>day</strong>, <strong>week</strong> and <strong>month</strong>, counted for the whole organisation (all tokens together) in the organisation's time zone. Refused calls don't count. Responses include:</p>
        <div class="code"><span class="lang">http</span><pre><code>X-Quota-Limit: 5000
X-Quota-Remaining: 4812
X-Quota-Reset: 2026-10-06T00:00:00+05:30</code></pre></div>
        <p>When a limit is used up:</p>
        <div class="code"><span class="lang">json</span><pre><code><span class="c">// 402 Payment Required, with a Retry-After header</span>
{
  <span class="k">"error"</span>: <span class="s">"api_quota_exceeded"</span>,
  <span class="k">"window"</span>: <span class="s">"day"</span>,
  <span class="k">"limit"</span>: 5000,
  <span class="k">"used"</span>: 5000,
  <span class="k">"resets_at"</span>: <span class="s">"2026-10-06T00:00:00+05:30"</span>,
  <span class="k">"message"</span>: <span class="s">"Daily API quota of 5000 calls reached; resets at …"</span>
}</code></pre></div>
        <p>Pause sending until <code>resets_at</code> and keep the unsent messages in your own queue. Retrying sooner won't help.</p>

        <h3>Retry policy in short</h3>
        <ul>
          <li><strong>Retry</strong> on network errors, <code>429</code>, <code>502</code> and <code>503</code>, with exponential backoff (e.g. 2 s, 4 s, 8 s… capped at 60 s), and always with the same <code>dispatch_id</code>.</li>
          <li><strong>Don't retry</strong> other <code>4xx</code> errors without changing something first.</li>
          <li>For <code>402 api_quota_exceeded</code>, wait until <code>resets_at</code>.</li>
        </ul>
      </section>

      <!-- ───────────────────────── Encryption ───────────────────────── -->
      <section id="encryption">
        <h2>Optional: encrypted API traffic</h2>
        <p>HTTPS already encrypts all traffic. Some organisations also want the JSON itself encrypted end to end. If the organisation's admin turns this on, they give you a shared key and an algorithm (<code>AES-256-GCM</code> recommended; <code>AES-128-GCM</code>, <code>AES-256-CBC</code> and <code>AES-128-CBC</code> are also supported).</p>
        <ul>
          <li><strong>Requests:</strong> send this envelope instead of the plain body. Plain JSON requests are still accepted.</li>
          <li><strong>Responses:</strong> once it is on, every JSON response comes back in the same envelope, and you decrypt it with the same key. File downloads (media) are not encrypted.</li>
        </ul>
        <div class="code"><span class="lang">json</span><pre><code>{
  <span class="k">"algorithm"</span>: <span class="s">"AES-256-GCM"</span>,
  <span class="k">"iv"</span>:   <span class="s">"&lt;base64, 12 bytes for GCM / 16 for CBC&gt;"</span>,
  <span class="k">"data"</span>: <span class="s">"&lt;base64 ciphertext of the JSON body&gt;"</span>,
  <span class="k">"tag"</span>:  <span class="s">"&lt;base64 auth tag, GCM only&gt;"</span>
}</code></pre></div>
        <p>Use a new random IV for every request. Some early errors are always plain JSON, because they happen before decryption: <code>401</code>, <code>429</code> and <code>503 api_disabled</code>. If decryption fails you get <code>400 decryption_failed</code>. Check that the key and algorithm match.</p>
      </section>

      <!-- ───────────────────────── Reference ───────────────────────── -->
      <section id="reference">
        <h2>Endpoint reference</h2>
        <p>All the endpoints an API token can use. <em>Read</em> works with either token type, and <em>Send</em> needs a Read &amp; Send token.</p>
        <div class="tbl"><table>
          <thead><tr><th>Method</th><th>Path</th><th>Access</th><th>Purpose</th></tr></thead>
          <tbody>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/numbers</code></td><td>Read</td><td>List WhatsApp numbers</td></tr>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/numbers/{number_id}/health</code></td><td>Read</td><td>Is this number online?</td></tr>
            <tr><td><span class="m post">POST</span></td><td><code>/v1/messages/send</code></td><td>Send</td><td>Send text or a file</td></tr>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/messages/{message_ref}/status</code></td><td>Read</td><td>Delivery status of one message</td></tr>
            <tr><td><span class="m post">POST</span></td><td><code>/v1/messages/{message_ref}/cancel</code></td><td>Send</td><td>Cancel a queued message</td></tr>
            <tr><td><span class="m post">POST</span></td><td><code>/v1/messages/{message_ref}/retry</code></td><td>Send</td><td>Retry a failed message</td></tr>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/conversations</code></td><td>Read</td><td>List chats</td></tr>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/conversations/{id}</code></td><td>Read</td><td>One chat</td></tr>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/conversations/{id}/messages</code></td><td>Read</td><td>Chat history</td></tr>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/conversations/{id}/messages/{message_ref}/media</code></td><td>Read</td><td>Download a file</td></tr>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/conversations/{id}/members</code></td><td>Read</td><td>Group members (groups only)</td></tr>
            <tr><td><span class="m patch">PATCH</span></td><td><code>/v1/conversations/{id}/assign</code></td><td>Send</td><td>Assign / unassign</td></tr>
            <tr><td><span class="m post">POST</span></td><td><code>/v1/conversations/{id}/read</code></td><td>Send</td><td>Mark read</td></tr>
            <tr><td><span class="m patch">PATCH</span></td><td><code>/v1/conversations/{id}/display-name</code></td><td>Send</td><td>Rename contact</td></tr>
            <tr><td><span class="m get">GET</span> <span class="m post">POST</span></td><td><code>/v1/conversations/{id}/notes</code></td><td>Read / Send</td><td>Internal notes</td></tr>
            <tr><td><span class="m post">POST</span> <span class="m delete">DELETE</span></td><td><code>/v1/conversations/{id}/labels</code></td><td>Send</td><td>Add / remove a label</td></tr>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/templates</code></td><td>Read</td><td>Saved message templates</td></tr>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/labels</code></td><td>Read</td><td>Available labels</td></tr>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/quick-replies</code></td><td>Read</td><td>Saved quick replies</td></tr>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/opt-outs</code></td><td>Read</td><td>Do-Not-Contact list</td></tr>
            <tr><td><span class="m post">POST</span></td><td><code>/v1/automations/runs</code></td><td>Send</td><td>Start an automated workflow for a contact</td></tr>
            <tr><td><span class="m get">GET</span></td><td><code>/v1/automations/runs/{id}</code></td><td>Read</td><td>Workflow run status</td></tr>
          </tbody>
        </table></div>
        <div class="note"><b>Done in the HeyDoot app, not the API</b>
          <p>Creating API tokens, managing webhooks, users, teams, campaigns and templates, connecting WhatsApp numbers, and reports. These are admin tasks, and they refuse API tokens with <code>403</code>.</p>
        </div>
      </section>

      <!-- ───────────────────────── Go-live ───────────────────────── -->
      <section id="golive">
        <h2>Go-live checklist</h2>
        <ul class="check">
          <li>You have the production <strong>base URL</strong> and a production <strong>API token</strong>, separate from testing, stored in a secrets manager.</li>
          <li><strong>API Access</strong> is on and the plan includes API access, with quotas that fit your expected volume.</li>
          <li>The <code>number_id</code> for each line you send from is in your configuration, and the number is <code>linked</code>.</li>
          <li>Every send carries a unique <code>dispatch_id</code>, plus <code>user_id</code> / <code>username</code> / <code>user_email</code> for messages a person sent.</li>
          <li>You store <code>message_ref</code> and <code>conversation_id</code> against your own records.</li>
          <li>Your webhook endpoint is HTTPS and public, <strong>verifies the signature</strong>, rejects old timestamps, replies within 8 s, and removes duplicate events.</li>
          <li>Retries use backoff, reuse the <code>dispatch_id</code>, and stop on <code>4xx</code>. <code>402 api_quota_exceeded</code> pauses until <code>resets_at</code>.</li>
          <li>You alert on <code>hd.number.disconnected</code>, because messages can't go out until the number reconnects.</li>
          <li>You have a plan to rotate the token: create the new one, deploy it, then revoke the old one.</li>
        </ul>
      </section>

      <footer class="doc-footer">HeyDoot partner integration guide · API v1 · Questions about your base URL, plan limits or a webhook that isn't arriving: contact your HeyDoot administrator.</footer>
    </div>
  </div>
</div>

<script>
document.querySelectorAll('.guide-wrapper .code').forEach(function (box) {
  var btn = document.createElement('button');
  btn.type = 'button';
  btn.textContent = 'Copy';
  btn.addEventListener('click', function () {
    var text = box.querySelector('pre').innerText;
    var done = function () { btn.textContent = 'Copied!'; setTimeout(function () { btn.textContent = 'Copy'; }, 1500); };
    var fallback = function () {
      var r = document.createRange(); r.selectNodeContents(box.querySelector('pre'));
      var s = window.getSelection(); s.removeAllRanges(); s.addRange(r);
      btn.textContent = 'Press Ctrl+C';
    };
    try { navigator.clipboard.writeText(text).then(done, fallback); } catch (e) { fallback(); }
  });
  box.appendChild(btn);
});
</script>

<?php include ROOT_PATH . '/components/footer.php'; ?>
