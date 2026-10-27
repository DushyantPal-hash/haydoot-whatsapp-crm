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

<style>
  .btn-guide {
    background: #0d6a2e;
    color: white;
    box-shadow: 0 2px 8px rgba(13, 106, 46, 0.25);
  }

  .btn-guide:hover {
    background: #0a5223;
    transform: translateY(-3px);
    box-shadow: 0 12px 22px -8px rgba(13, 106, 46, 0.35);
  }

  .guide-accent {
    color: #0d6a2e;
  }

  .setup-step {
    background: white;
    border-radius: 24px;
    padding: 24px;
    margin-bottom: 24px;
    border-left: 4px solid #0d6a2e;
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
    background: #0d6a2e;
    color: white;
    border-radius: 12px;
    font-weight: 700;
    margin-right: 12px;
  }

  .guide-code {
    background: #0f172a;
    color: #e2e8f0;
    border-radius: 16px;
    padding: 18px;
    overflow-x: auto;
    font-size: 0.82rem;
    line-height: 1.55;
    margin: 14px 0;
  }

  .guide-code code {
    font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
    white-space: pre;
  }

  .guide-code .lang {
    display: block;
    font-size: 0.7rem;
    color: #94a3b8;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 8px;
    font-family: inherit;
  }

  .guide-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.88rem;
    overflow-x: auto;
    display: block;
  }

  .guide-table th,
  .guide-table td {
    padding: 10px;
    border: 1px solid #d7e6dc;
    text-align: left;
    vertical-align: top;
  }

  .guide-table thead tr {
    background: #e9f5ef;
  }

  .badge-req {
    background: #fee2e2;
    color: #991b1b;
    font-size: 0.72rem;
    padding: 2px 8px;
    border-radius: 20px;
    font-weight: 600;
    white-space: nowrap;
  }

  .badge-opt {
    background: #fef3c7;
    color: #92400e;
    font-size: 0.72rem;
    padding: 2px 8px;
    border-radius: 20px;
    font-weight: 600;
    white-space: nowrap;
  }

  .method-pill {
    display: inline-block;
    font-size: 0.7rem;
    font-weight: 700;
    padding: 2px 8px;
    border-radius: 6px;
    letter-spacing: 0.04em;
  }

  .m-get {
    background: #dbeafe;
    color: #1e40af;
  }

  .m-post {
    background: #dcfce7;
    color: #166534;
  }

  .m-patch {
    background: #fef3c7;
    color: #92400e;
  }

  .m-delete {
    background: #fee2e2;
    color: #991b1b;
  }

  .guide-note {
    background: #f0fdf4;
    border-left: 4px solid #0d6a2e;
    border-radius: 12px;
    padding: 14px 18px;
    margin: 16px 0;
    color: #14532d;
  }

  .guide-note.warn {
    background: #fef2f2;
    border-left-color: #dc2626;
    color: #7f1d1d;
  }

  .guide-note.tip {
    background: #eff6ff;
    border-left-color: #2563eb;
    color: #1e3a8a;
  }
</style>

<main>
  <!-- Hero Section -->
  <section class="hero" style="background: linear-gradient(135deg, #0a2b2c 0%, #1d4b2c 100%);padding: 20px 20px 20px;">
    <div class="floating-dots"></div>
    <div style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
      <div
        style="display: inline-block; background: rgba(255,255,255,0.15); backdrop-filter: blur(8px); padding: 6px 16px; border-radius: 60px; margin-bottom: 0;">
        <span style="color: #25D366; font-weight: 700; display: flex; align-items: center; gap: 10px;">
          <i class="fas fa-code"></i>
          Partner integration · API v1
        </span>
      </div>
    </div>
  </section>

  <section style="padding: 40px 0;">
    <div class="container-fluid">

      <!-- Two-column layout -->
      <div style="display: flex; gap: 48px; flex-wrap: wrap;">
        <!-- Sidebar -->
        <aside class="sidebar-card">
          <div
            style="position: sticky; top: 100px; background: white; border-radius: 28px; padding: 24px; box-shadow: var(--card-shadow); border: 1px solid rgba(0,0,0,0.04);">
            <h4 style="font-weight: 700; margin-bottom: 20px; font-size: 1.1rem;"><i class="fas fa-bookmark"
                style="color: #0d6a2e; margin-right: 8px;"></i> Contents</h4>
            <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
              <li><a href="#overview" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-info-circle"
                    style="color: #0d6a2e; width: 22px;"></i>
                  Overview</a></li>
              <li><a href="#credentials" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-key"
                    style="color: #0d6a2e; width: 22px;"></i> 1. Get credentials</a></li>
              <li><a href="#basics" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-server"
                    style="color: #0d6a2e; width: 22px;"></i> 2. Base URL &amp; headers</a></li>
              <li><a href="#numbers" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-phone"
                    style="color: #0d6a2e; width: 22px;"></i> 3. Find your number</a></li>
              <li><a href="#send" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-paper-plane"
                    style="color: #0d6a2e; width: 22px;"></i> 4. Send messages</a></li>
              <li><a href="#status" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-chart-line"
                    style="color: #0d6a2e; width: 22px;"></i> 5. Track
                  delivery</a></li>
              <li><a href="#read" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-comments"
                    style="color: #0d6a2e; width: 22px;"></i> 6. Read conversations</a></li>
              <li><a href="#webhooks" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-bolt"
                    style="color: #0d6a2e; width: 22px;"></i> 7. Webhooks</a></li>
              <li><a href="#errors" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-exclamation-triangle"
                    style="color: #0d6a2e; width: 22px;"></i>
                  Errors &amp; limits</a></li>
              <li><a href="#encryption" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-lock"
                    style="color: #0d6a2e; width: 22px;"></i> Payload encryption</a></li>
              <li><a href="#reference" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-list"
                    style="color: #0d6a2e; width: 22px;"></i> Endpoint reference</a></li>
              <li><a href="#golive" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-list-check"
                    style="color: #0d6a2e; width: 22px;"></i> Go-live
                  checklist</a></li>
            </ul>
            <div style="margin-top:24px;padding-top:20px;border-top:1px solid #f0f0f0;">
              <p style="font-size:.85rem;color:#6b7280;margin-bottom:10px;">Need a Postman collection?</p>
              <a href="<?php echo BASE_URL; ?>/postman-api.php"
                style="display:flex;align-items:center;gap:10px;background:#eef2ff;border-radius:14px;padding:12px 16px;color:#1E3A5F;font-weight:600;font-size:.9rem;text-decoration:none;">
                <i class="fas fa-code"></i>
                Postman API collection →
              </a>
            </div>
          </div>
        </aside>

        <!-- Main Content -->
        <main style="flex: 2.5; min-width: 280px;">
          <!-- Intro banner -->
          <div
            style="background: linear-gradient(105deg, #e9f5ef 0%, #f5fbf7 100%); border-left: 5px solid #0d6a2e; border-radius: 20px; padding: 20px 28px; margin-bottom: 48px;">
            <div class="eyebrow"
              style="font-size: 0.78rem; text-transform: uppercase; letter-spacing: 0.08em; color: #0d6a2e; font-weight: 700;">
              Partner integration · API v1</div>
            <h1 style="font-size: 1.9rem; font-weight: 800; margin: 8px 0 10px;color:#000;">Connecting your platform to
              HeyDoot</h1>
            <p style="color: #4b5563; max-width: 900px;">How any CRM, LMS, ERP or custom system can send WhatsApp
              messages through HeyDoot, follow their delivery, read conversations, and receive real-time events by
              webhook.</p>
            <div style="display: flex; flex-wrap: wrap; gap: 12px; margin-top: 14px;">
              <span
                style="background: white; border: 1px solid #d7e6dc; padding: 4px 12px; border-radius: 20px; font-size: 0.82rem; color: #14532d;"><i
                  class="fas fa-server"></i> REST + JSON over HTTPS</span>
              <span
                style="background: white; border: 1px solid #d7e6dc; padding: 4px 12px; border-radius: 20px; font-size: 0.82rem; color: #14532d;"><i
                  class="fas fa-key"></i> Bearer-token auth</span>
              <span
                style="background: white; border: 1px solid #d7e6dc; padding: 4px 12px; border-radius: 20px; font-size: 0.82rem; color: #14532d;"><i
                  class="fas fa-shield-alt"></i> HMAC-SHA256 signed webhooks</span>
            </div>
          </div>

          <!-- ═══════════════ OVERVIEW ═══════════════ -->
          <div id="overview" style="margin-bottom: 56px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
              <div
                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-info-circle" style="color: #0d6a2e; font-size: 22px;"></i>
              </div>
              <h2 style="font-size: 1.8rem; font-weight: 700;">Overview</h2>
            </div>
            <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
              <p style="color: #4a5568;">HeyDoot connects an organisation's WhatsApp numbers to one shared
                inbox. An integration talks to HeyDoot in two directions:</p>
              <ul style="list-style: none; margin-top: 14px;">
                <li style="margin-bottom: 12px; display: flex; gap: 12px;"><i class="fas fa-arrow-right"
                    style="color: #0d6a2e; margin-top: 4px;"></i> <span><strong>Your platform →
                      HeyDoot (REST API).</strong> Send messages, check delivery, list numbers,
                    read conversation history, assign chats. You call HeyDoot with an API
                    token.</span></li>
                <li style="display: flex; gap: 12px;"><i class="fas fa-arrow-left"
                    style="color: #0d6a2e; margin-top: 4px;"></i> <span><strong>HeyDoot → your
                      platform (webhooks).</strong> HeyDoot calls a URL you host when something
                    happens, such as a reply arriving, a message being delivered or read, or a
                    number disconnecting. Every call is signed so you can prove it came from
                    HeyDoot.</span></li>
              </ul>
            </div>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 14px;">What you
              need before you start</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;">
              <div class="feature-card" style="background: white; border-radius: 20px; padding: 20px;">
                <div style="font-weight: 700; color: #0d6a2e; margin-bottom: 6px;"><i class="fas fa-link"></i> Base URL
                </div>
                <p style="color:#4a5568; font-size:0.92rem;">The HeyDoot API address for your
                  organisation, e.g. <code>https://api.yourdomain.com</code>. Provided by the HeyDoot
                  team.</p>
              </div>
              <div class="feature-card" style="background: white; border-radius: 20px; padding: 20px;">
                <div style="font-weight: 700; color: #0d6a2e; margin-bottom: 6px;"><i class="fas fa-key"></i> API token
                </div>
                <p style="color:#4a5568; font-size:0.92rem;">A secret starting with
                  <code>hd_live_</code>, created by your HeyDoot admin. Sent as a Bearer token.
                </p>
              </div>
              <div class="feature-card" style="background: white; border-radius: 20px; padding: 20px;">
                <div style="font-weight: 700; color: #0d6a2e; margin-bottom: 6px;"><i class="fas fa-phone"></i> Number
                  ID</div>
                <p style="color:#4a5568; font-size:0.92rem;">The ID of the WhatsApp number to send from.
                  You can look it up with the API (step 3).</p>
              </div>
              <div class="feature-card" style="background: white; border-radius: 20px; padding: 20px;">
                <div style="font-weight: 700; color: #0d6a2e; margin-bottom: 6px;"><i class="fas fa-bolt"></i> Webhook
                  endpoint</div>
                <p style="color:#4a5568; font-size:0.92rem;">An <strong>HTTPS</strong> URL on the public
                  internet that you host, plus the signing secret HeyDoot gives you when the webhook
                  is created.</p>
              </div>
            </div>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 14px;">The
              integration at a glance</h3>
            <ol style="color:#4a5568; padding-left: 20px;">
              <li style="margin-bottom: 6px;">Admin creates an API token in HeyDoot</li>
              <li style="margin-bottom: 6px;">You call <code>GET /v1/numbers</code> to get the
                <code>number_id</code>
              </li>
              <li style="margin-bottom: 6px;">You send with <code>POST /v1/messages/send</code></li>
              <li style="margin-bottom: 6px;">Admin registers your webhook URL</li>
              <li>You receive replies and status updates, verify the signature, and process them</li>
            </ol>
          </div>

          <!-- ═══════════════ 1. CREDENTIALS ═══════════════ -->
          <div id="credentials" style="margin-bottom: 56px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
              <div
                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-key" style="color: #0d6a2e; font-size: 22px;"></i>
              </div>
              <h2 style="font-size: 1.8rem; font-weight: 700;"><span class="step-number"
                  style="margin-right: 8px;">1</span> Get your API token</h2>
            </div>

            <p style="color:#4a5568;">API tokens are created by an <strong>organisation admin</strong> in
              the HeyDoot web app. Developers do not create them through the API.</p>
            <ol style="color:#4a5568; padding-left: 20px; margin-top: 12px;">
              <li style="margin-bottom: 6px;">Sign in to HeyDoot as an admin.</li>
              <li style="margin-bottom: 6px;">Open <strong>Settings → Integrations → API Tokens</strong>.
              </li>
              <li style="margin-bottom: 6px;">Click to create a token. Give it a label that names your
                platform (for example <em>"Salesforce production"</em>), choose its <strong>access
                  level</strong> and an <strong>expiry</strong>.</li>
              <li>Copy the token right away. <strong>It is shown only once.</strong> HeyDoot stores only a
                hash of it, so a lost token can't be recovered. Revoke it and create a new one.</li>
            </ol>

            <div style="overflow-x:auto; margin-top: 20px;">
              <table class="guide-table">
                <thead>
                  <tr>
                    <th>Access level</th>
                    <th>Allows</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>Read-only</strong> (<code>read</code>)</td>
                    <td>List numbers and check their health, read conversations, messages, media,
                      templates, labels and quick replies, check message status.</td>
                  </tr>
                  <tr>
                    <td><strong>Read &amp; Send</strong> (<code>write</code>)</td>
                    <td>Everything in Read-only, plus sending, cancelling and retrying messages,
                      marking chats read, renaming contacts, assigning chats, and adding notes and
                      labels.</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p style="color:#4a5568; margin-top: 14px;">Expiry can be <em>No expiry</em>, 30, 90 or 365
              days. An admin can change the expiry later or revoke the token at any time. A revoked token
              stops working on the next request.</p>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 14px;">Also
              check these two settings</h3>
            <ul style="color:#4a5568; padding-left: 20px;">
              <li style="margin-bottom: 8px;"><strong>Settings → Integrations → API Access</strong> must
                be <strong>on</strong>. When an admin turns it off, every token call is refused with
                <code>503 api_disabled</code>. It works like an emergency switch.
              </li>
              <li>The organisation's HeyDoot plan must include <strong>external API access</strong>. Some
                plans set daily, weekly or monthly call limits (see <a href="#errors"
                  style="color:#0d6a2e; font-weight:600;">Errors &amp; limits</a>).</li>
            </ul>

            <div class="guide-note warn">
              <strong>Keep the token secret</strong>
              <p style="margin-top: 6px;">The token gives access to the whole organisation's WhatsApp
                data, across all its numbers. Store it in a secrets manager or a server-side environment
                variable. Never put it in browser code, a mobile app or a public repository. Use a
                separate token for each platform and environment so you can revoke one without affecting
                the others.</p>
            </div>
          </div>

          <!-- ═══════════════ 2. BASICS ═══════════════ -->
          <div id="basics" style="margin-bottom: 56px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
              <div
                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-server" style="color: #0d6a2e; font-size: 22px;"></i>
              </div>
              <h2 style="font-size: 1.8rem; font-weight: 700;"><span class="step-number"
                  style="margin-right: 8px;">2</span> Base URL, headers and request format</h2>
            </div>

            <p style="color:#4a5568;">Every API path is under <code>/v1</code>. Combine it with the base URL
              you were given:</p>
            <div class="guide-code">
              <span class="lang">text</span>
              <code>https://api.yourdomain.com/v1/messages/send
└──────── base URL ───────┘└──── path ────┘</code>
            </div>

            <div style="overflow-x:auto; margin-top: 16px;">
              <table class="guide-table">
                <thead>
                  <tr>
                    <th>Header</th>
                    <th>Value</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code>Authorization</code></td>
                    <td><code>Bearer hd_live_…</code></td>
                    <td><span class="badge-req">required</span></td>
                  </tr>
                  <tr>
                    <td><code>Content-Type</code></td>
                    <td><code>application/json</code></td>
                    <td><span class="badge-req">required on POST / PATCH</span></td>
                  </tr>
                  <tr>
                    <td><code>Accept</code></td>
                    <td><code>application/json</code></td>
                    <td><span class="badge-opt">recommended</span></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <ul style="color:#4a5568; padding-left: 20px; margin-top: 16px;">
              <li style="margin-bottom: 8px;"><strong>Always use HTTPS.</strong> Production servers refuse
                plain HTTP with <code>403 https_required</code>.</li>
              <li style="margin-bottom: 8px;"><strong>JSON in, JSON out.</strong> Timestamps are ISO-8601
                in UTC, e.g. <code>2026-10-05T09:52:04.039Z</code>.</li>
              <li style="margin-bottom: 8px;"><strong>Body size.</strong> Up to 30 MB on
                <code>/v1/messages/*</code> (to allow attachments), and 512 KB on everything else.
              </li>
              <li style="margin-bottom: 8px;"><strong>Server-to-server.</strong> Call the API from your
                backend. Browser calls from other websites are blocked by CORS.</li>
              <li><strong>Interactive docs.</strong> The server publishes an OpenAPI 3 description at
                <code>/openapi.json</code> and a browsable version at <code>/docs</code> (both outside
                <code>/v1</code>). <code>/health</code> needs no token and returns the service status.
              </li>
            </ul>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Test
              your token</h3>
            <div class="guide-code">
              <span class="lang">bash</span>
              <code>curl https://api.yourdomain.com/v1/numbers \
  -H "Authorization: Bearer $HEYDOOT_TOKEN"</code>
            </div>
            <p style="color:#4a5568; margin-top: 10px;">A <code>200</code> with a list of numbers means the
              token works. A <code>401</code> means the token is missing, mistyped, expired or revoked.
            </p>
          </div>

          <!-- ═══════════════ 3. NUMBERS ═══════════════ -->
          <div id="numbers" style="margin-bottom: 56px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
              <div
                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-phone" style="color: #0d6a2e; font-size: 22px;"></i>
              </div>
              <h2 style="font-size: 1.8rem; font-weight: 700;"><span class="step-number"
                  style="margin-right: 8px;">3</span> Find the WhatsApp number to send from</h2>
            </div>

            <p style="color:#4a5568;">An organisation can have several WhatsApp numbers (for example a Sales
              line and a Support line). Each has a <code>number_id</code> (a UUID). You need it to start a
              new chat.</p>

            <div class="guide-code">
              <span class="lang">http</span>
              <code>GET /v1/numbers</code>
            </div>
            <div class="guide-code">
              <span class="lang">json</span>
              <code>{
  "data": [
    {
      "number_id": "01976117-a906-42f2-9b23-30394341f3ff",
      "number_label": "Sales line",
      "connection_state": "linked",
      "removed": false,
      "send_method": "device"
    }
  ],
  "total": 1
}</code>
            </div>
            <p style="color:#4a5568;"> <code>connection_state</code> is one of <code>pending</code>,
              <code>pairing</code>, <code>linked</code>, <code>disconnected</code>, <code>banned</code> or
              <code>error</code>. Only a <code>linked</code> number can send. To check one number before a
              send burst, call <code>GET /v1/numbers/{number_id}/health</code>, which returns
              <code>is_healthy</code> and <code>last_seen_at</code>.
            </p>

            <div class="guide-note tip">
              <strong>Tip</strong>
              <p style="margin-top: 6px;">Save the <code>number_id</code> in your platform's configuration
                rather than looking it up on every send. It doesn't change when the number is renamed.
              </p>
            </div>
          </div>

          <!-- ═══════════════ 4. SEND ═══════════════ -->
          <div id="send" style="margin-bottom: 56px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
              <div
                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-paper-plane" style="color: #0d6a2e; font-size: 22px;"></i>
              </div>
              <h2 style="font-size: 1.8rem; font-weight: 700;"><span class="step-number"
                  style="margin-right: 8px;">4</span> Send a message</h2>
            </div>

            <div class="guide-code">
              <span class="lang">http</span>
              <code>POST /v1/messages/send        // needs a Read &amp; Send token</code>
            </div>

            <p style="color:#4a5568;">Pick a recipient in one of two ways:</p>
            <ul style="color:#4a5568; padding-left: 20px;">
              <li style="margin-bottom: 8px;"><strong>New or existing chat by phone number:</strong> send
                <code>to</code> + <code>number_id</code>. HeyDoot finds the chat or creates it.
              </li>
              <li><strong>Reply in a known chat:</strong> send <code>conversation_id</code> (from a
                webhook or a conversation list). The chat already knows its number.</li>
            </ul>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 24px; margin-bottom: 12px;">Request
              fields</h3>
            <div style="overflow-x:auto;">
              <table class="guide-table">
                <thead>
                  <tr>
                    <th>Field</th>
                    <th>Type</th>
                    <th></th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code>to</code></td>
                    <td>string</td>
                    <td><span class="badge-opt">one of</span></td>
                    <td>Recipient phone in international format, e.g. <code>+919876543210</code>.
                      Spaces, dashes and the <code>+</code> are tolerated. It must have a country
                      code and be 8–15 digits.</td>
                  </tr>
                  <tr>
                    <td><code>number_id</code></td>
                    <td>uuid</td>
                    <td><span class="badge-opt">with <code>to</code></span></td>
                    <td>The WhatsApp number to send from.</td>
                  </tr>
                  <tr>
                    <td><code>conversation_id</code></td>
                    <td>string</td>
                    <td><span class="badge-opt">one of</span></td>
                    <td>Send into an existing chat instead of using <code>to</code>.</td>
                  </tr>
                  <tr>
                    <td><code>text</code></td>
                    <td>string</td>
                    <td><span class="badge-opt">text or attachment</span></td>
                    <td>Message text. With an attachment, it becomes the caption.</td>
                  </tr>
                  <tr>
                    <td><code>attachment</code></td>
                    <td>object</td>
                    <td><span class="badge-opt">text or attachment</span></td>
                    <td>See <a href="#attachments" style="color:#0d6a2e; font-weight:600;">Attachments</a>.</td>
                  </tr>
                  <tr>
                    <td><code>dispatch_id</code></td>
                    <td>uuid</td>
                    <td><span class="badge-opt">recommended</span></td>
                    <td>Your idempotency key. Resending with the same <code>dispatch_id</code>
                      returns the first result and <strong>does not send twice</strong>.</td>
                  </tr>
                  <tr>
                    <td><code>user_id</code></td>
                    <td>string ≤128</td>
                    <td><span class="badge-opt">recommended</span></td>
                    <td>ID of the person in <em>your</em> platform who sent the message. Shown in
                      HeyDoot's User Metrics.</td>
                  </tr>
                  <tr>
                    <td><code>username</code></td>
                    <td>string ≤200</td>
                    <td><span class="badge-opt">recommended</span></td>
                    <td>Display name of that person.</td>
                  </tr>
                  <tr>
                    <td><code>user_email</code></td>
                    <td>email ≤254</td>
                    <td><span class="badge-opt">recommended</span></td>
                    <td>Email of that person, so admins can tell who sent what.</td>
                  </tr>
                  <tr>
                    <td><code>reply_to_message_ref</code></td>
                    <td>string</td>
                    <td><span class="badge-opt">optional</span></td>
                    <td>Quote-reply to an earlier message in the same chat.</td>
                  </tr>
                  <tr>
                    <td><code>mentions</code></td>
                    <td>string[] ≤64</td>
                    <td><span class="badge-opt">optional</span></td>
                    <td>Phone numbers to @mention. Group chats only.</td>
                  </tr>
                  <tr>
                    <td><code>send_options</code></td>
                    <td>object</td>
                    <td><span class="badge-opt">optional</span></td>
                    <td><code>{"suppress_link_preview": true}</code> sends links without a preview
                      card.</td>
                  </tr>
                  <tr>
                    <td><code>lane</code></td>
                    <td>string</td>
                    <td><span class="badge-opt">optional</span></td>
                    <td><code>interactive</code> (one-to-one replies, the default pacing) or
                      <code>bulk</code> (mass sends, paced more slowly to protect the number).
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Example:
              text message</h3>
            <div class="guide-code">
              <span class="lang">bash</span>
              <code>curl -X POST https://api.yourdomain.com/v1/messages/send \
  -H "Authorization: Bearer $HEYDOOT_TOKEN" \
  -H "Content-Type: application/json" \
  -d '{
    "to": "+919876543210",
    "number_id": "01976117-a906-42f2-9b23-30394341f3ff",
    "text": "Hi Priya, your appointment is confirmed for 4 PM tomorrow.",
    "dispatch_id": "6c0e1b2a-58f4-4b7e-9d0c-2f1a7e3b9c11",
    "user_id": "agent-42",
    "username": "Riya Sharma",
    "user_email": "riya@yourcompany.com"
  }'</code>
            </div>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
              Response: <code>202 Accepted</code></h3>
            <div class="guide-code">
              <span class="lang">json</span>
              <code>{
  "status": "queued",
  "message_ref": "hd_4F0C9A1B7E2D3C5A6B8E9F",
  "conversation_id": "c3a1…",
  "dispatch_id": "6c0e1b2a-58f4-4b7e-9d0c-2f1a7e3b9c11",
  "provider_message_id": null,
  "track": { "status_url": "GET /v1/messages/hd_4F0C9A1B7E2D3C5A6B8E9F/status" }
}</code>
            </div>
            <p style="color:#4a5568; margin-top: 10px;"><code>202</code> means HeyDoot <strong>accepted and
                queued</strong> the message. It hasn't been delivered yet. Store the
              <code>message_ref</code>: it is HeyDoot's ID for this message and appears in every later
              status update and webhook.
            </p>

            <h3 id="attachments" style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
              Attachments</h3>
            <div style="overflow-x:auto;">
              <table class="guide-table">
                <thead>
                  <tr>
                    <th>Field</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code>kind</code> <span class="badge-req">required</span></td>
                    <td><code>image</code>, <code>document</code>, <code>audio</code> or
                      <code>video</code>
                    </td>
                  </tr>
                  <tr>
                    <td><code>source_url</code></td>
                    <td>A public <code>https://</code> URL HeyDoot downloads the file from.</td>
                  </tr>
                  <tr>
                    <td><code>file_base64</code></td>
                    <td>The file itself, as base64 or a data URI
                      (<code>data:application/pdf;base64,…</code>). Used instead of
                      <code>source_url</code> if both are sent. Max <strong>16 MB</strong>
                      decoded.
                    </td>
                  </tr>
                  <tr>
                    <td><code>file_name</code></td>
                    <td>Name the recipient sees, e.g. <code>Invoice-1042.pdf</code>.</td>
                  </tr>
                  <tr>
                    <td><code>mime_type</code></td>
                    <td>e.g. <code>application/pdf</code>. Detected automatically when omitted.</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="guide-code">
              <span class="lang">json</span>
              <code>{
  "conversation_id": "c3a1…",
  "text": "Your invoice is attached.",
  "attachment": {
    "kind": "document",
    "source_url": "https://files.yourcompany.com/invoices/1042.pdf",
    "file_name": "Invoice-1042.pdf"
  }
}</code>
            </div>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Sending
              safely</h3>
            <ul style="color:#4a5568; padding-left: 20px;">
              <li style="margin-bottom: 8px;"><strong>Always send a <code>dispatch_id</code></strong>, a
                new UUID per message, saved with the message on your side. If your request times out,
                retry with the <em>same</em> <code>dispatch_id</code> and the recipient still gets only
                one message.</li>
              <li style="margin-bottom: 8px;"><strong>Fill in <code>user_id</code>, <code>username</code>
                  and <code>user_email</code></strong> for messages a person sent. Without them, the
                message shows in HeyDoot's reports as <em>"API (no user)"</em>.</li>
              <li style="margin-bottom: 8px;"><strong>Templates:</strong> <code>GET /v1/templates</code>
                lists the organisation's saved texts with <code>{{name}}</code> or
                <code>{{name|fallback}}</code> placeholders. Fill them in on your side and send the
                finished text.
              </li>
              <li>Recipients on the organisation's <strong>Do-Not-Contact</strong> list are refused with
                <code>422 recipient_opted_out</code>. Don't retry these.
              </li>
            </ul>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Cancel
              or retry</h3>
            <div style="overflow-x:auto;">
              <table class="guide-table">
                <thead>
                  <tr>
                    <th>Call</th>
                    <th>What it does</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="method-pill m-post">POST</span>
                      <code>/v1/messages/{message_ref}/cancel</code>
                    </td>
                    <td>Stops a message that is still queued. Returns
                      <code>409 not_cancelable</code> once it has gone out.
                    </td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-post">POST</span>
                      <code>/v1/messages/{message_ref}/retry</code>
                    </td>
                    <td>Requeues a <code>failed</code> message. Returns <code>409</code> with a
                      reason if it can't be retried, such as <code>not_on_whatsapp</code>,
                      <code>not_failed</code>, or <code>reach_out_cooldown</code> (with
                      <code>retry_after</code>).
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- ═══════════════ 5. STATUS ═══════════════ -->
          <div id="status" style="margin-bottom: 56px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
              <div
                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-chart-line" style="color: #0d6a2e; font-size: 22px;"></i>
              </div>
              <h2 style="font-size: 1.8rem; font-weight: 700;"><span class="step-number"
                  style="margin-right: 8px;">5</span> Track delivery</h2>
            </div>
            <p style="color:#4a5568;">The best way is the <code>hd.message.status</code> webhook (step 7),
              which tells you as soon as the status changes. You can also ask for it directly:</p>

            <div class="guide-code">
              <span class="lang">http</span>
              <code>GET /v1/messages/{message_ref}/status</code>
            </div>
            <div class="guide-code">
              <span class="lang">json</span>
              <code>{
  "message_ref": "hd_4F0C9A1B7E2D3C5A6B8E9F",
  "dispatch_id": "6c0e1b2a-…",
  "conversation_id": "c3a1…",
  "status": "delivered",
  "content": { "text": "Hi Priya, …", "type": "text" },
  "timeline": { "queued_at": "2026-10-05T09:52:04Z", "sent_at": "2026-10-05T09:52:06Z" },
  "attempt_count": 1,
  "send_error": null
}</code>
            </div>

            <div style="overflow-x:auto; margin-top: 16px;">
              <table class="guide-table">
                <thead>
                  <tr>
                    <th>Status</th>
                    <th>Meaning</th>
                    <th>Final?</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code>queued</code></td>
                    <td>Accepted, waiting to go out.</td>
                    <td>No</td>
                  </tr>
                  <tr>
                    <td><code>sending</code></td>
                    <td>Being handed to WhatsApp.</td>
                    <td>No</td>
                  </tr>
                  <tr>
                    <td><code>pending_review</code></td>
                    <td>Held by the organisation's message monitoring for an admin to approve.</td>
                    <td>No</td>
                  </tr>
                  <tr>
                    <td><code>sent</code></td>
                    <td>Accepted by WhatsApp (one grey tick).</td>
                    <td>No</td>
                  </tr>
                  <tr>
                    <td><code>delivered</code></td>
                    <td>Reached the recipient's phone (two grey ticks).</td>
                    <td>No</td>
                  </tr>
                  <tr>
                    <td><code>read</code></td>
                    <td>Opened by the recipient (two blue ticks). Only if they have read receipts
                      on.</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td><code>failed</code></td>
                    <td>Could not be sent. <code>send_error</code> says why, e.g.
                      <code>not_on_whatsapp</code>.
                    </td>
                    <td>Yes, unless retried</td>
                  </tr>
                  <tr>
                    <td><code>blocked</code></td>
                    <td>Stopped by the organisation's message monitoring.</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td><code>canceled</code></td>
                    <td>Cancelled before sending.</td>
                    <td>Yes</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="guide-note">
              <strong>Polling</strong>
              <p style="margin-top: 6px;">If you poll instead of using webhooks, back off: check after a
                few seconds, then every 30–60 seconds, and stop once the status is final. Every poll
                counts toward your rate limit and plan quota.</p>
            </div>
          </div>

          <!-- ═══════════════ 6. READ ═══════════════ -->
          <div id="read" style="margin-bottom: 56px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
              <div
                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-comments" style="color: #0d6a2e; font-size: 22px;"></i>
              </div>
              <h2 style="font-size: 1.8rem; font-weight: 700;"><span class="step-number"
                  style="margin-right: 8px;">6</span> Read conversations and history</h2>
            </div>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">List conversations</h3>
            <div class="guide-code">
              <span class="lang">http</span>
              <code>GET /v1/conversations?number_id={number_id}&amp;limit=30</code>
            </div>
            <p style="color:#4a5568;">Returns the most recent chats first, with <code>has_more</code> for
              paging. Filters: <code>number_id</code>, <code>label_id</code>,
              <code>unassigned=true</code>, <code>assigned_to=&lt;user_id&gt;</code>. <code>limit</code>
              is 1–100 (default 30). For the next page, pass <code>before</code> (the last item's activity
              time) and <code>before_id</code> (its <code>conversation_id</code>).
            </p>
            <p style="color:#4a5568; margin-top: 10px;">Each item has <code>conversation_id</code>,
              <code>display_name</code>, <code>phone_number</code> (hidden if the organisation's privacy
              settings hide phone numbers), <code>is_group</code>, <code>unread_count</code>,
              <code>number_id</code>, <code>last_message</code>, assignment fields and
              <code>labels</code>.
            </p>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 24px; margin-bottom: 12px;">Messages
              in a conversation</h3>
            <div class="guide-code">
              <span class="lang">http</span>
              <code>GET /v1/conversations/{conversation_id}/messages?limit=50</code>
            </div>
            <p style="color:#4a5568;">Returns messages oldest-first. <code>limit</code> is 1–200 (default
              30). To load older messages, pass
              <code>before=&lt;queued_at of the oldest message you have&gt;</code>. Each message has
              <code>message_ref</code>, <code>direction</code> (<code>inbound</code> /
              <code>outbound</code>), <code>text</code>, <code>message_type</code>, <code>status</code>,
              <code>sender_name</code>, <code>has_media</code>, <code>media_mime</code> and timestamps.
            </p>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 24px; margin-bottom: 12px;">Media
            </h3>
            <div class="guide-code">
              <span class="lang">http</span>
              <code>GET /v1/conversations/{conversation_id}/messages/{message_ref}/media</code>
            </div>
            <p style="color:#4a5568;">Returns the raw file (image, PDF, voice note…) with its own content
              type. Use it when a message or webhook has <code>has_media: true</code>.</p>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 24px; margin-bottom: 12px;">Working
              with a chat</h3>
            <div style="overflow-x:auto;">
              <table class="guide-table">
                <thead>
                  <tr>
                    <th>Call</th>
                    <th>Body</th>
                    <th>Use</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="method-pill m-patch">PATCH</span>
                      <code>/v1/conversations/{id}/assign</code>
                    </td>
                    <td><code>{"external_user_id": "agent-42", "external_user_display_name": "Riya Sharma"}</code>
                    </td>
                    <td>Record which of <em>your</em> users owns the chat. Send <code>null</code> to
                      unassign. Fires <code>hd.conversation.assigned</code>.</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-post">POST</span>
                      <code>/v1/conversations/{id}/read</code>
                    </td>
                    <td>—</td>
                    <td>Mark the chat read (unread count to 0).</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-patch">PATCH</span>
                      <code>/v1/conversations/{id}/display-name</code>
                    </td>
                    <td><code>{"display_name": "Priya Verma"}</code></td>
                    <td>Set the contact's name from your records.</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-post">POST</span>
                      <code>/v1/conversations/{id}/notes</code>
                    </td>
                    <td><code>{"body": "Called back, wants a demo"}</code></td>
                    <td>Add an internal note (max 4000 characters). Not sent to the contact.</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-post">POST</span>
                      <code>/v1/conversations/{id}/labels</code>
                    </td>
                    <td><code>{"label_id": "…"}</code></td>
                    <td>Tag the chat. IDs come from <code>GET /v1/labels</code>.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- ═══════════════ 7. WEBHOOKS ═══════════════ -->
          <div id="webhooks" style="margin-bottom: 56px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
              <div
                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-bolt" style="color: #0d6a2e; font-size: 22px;"></i>
              </div>
              <h2 style="font-size: 1.8rem; font-weight: 700;"><span class="step-number"
                  style="margin-right: 8px;">7</span> Receive events with webhooks</h2>
            </div>

            <p style="color:#4a5568;">A webhook is a URL on your server that HeyDoot calls with an HTTP
              <code>POST</code> whenever a chosen event happens. This is how your platform learns about
              <strong>incoming replies</strong> and <strong>delivery updates</strong> without polling.
            </p>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 24px; margin-bottom: 12px;">Set it
              up</h3>
            <ol style="color:#4a5568; padding-left: 20px;">
              <li style="margin-bottom: 10px;">Build an endpoint on your server, e.g.
                <code>https://crm.yourcompany.com/heydoot/events</code>. It must be
                <strong>HTTPS</strong>, reachable from the internet, and on a public address (localhost
                and private IPs are refused). It should reply <code>2xx</code> within <strong>8
                  seconds</strong>.
              </li>
              <li style="margin-bottom: 10px;">A HeyDoot admin opens <strong>Settings → Integrations →
                  Webhooks</strong> and adds the URL, choosing:
                <ul style="padding-left: 20px; margin-top: 6px;">
                  <li><strong>Events</strong> to receive (at least one).</li>
                  <li><strong>Numbers</strong> (optional). Only events for these WhatsApp numbers are
                    sent. Leave empty for all numbers.</li>
                  <li><strong>Encrypt payloads</strong> (optional, see below).</li>
                </ul>
              </li>
              <li>HeyDoot shows a <strong>signing secret</strong> (64 hex characters), and an encryption
                key if encryption is on. <strong>Both are shown once.</strong> Store them on your
                server. To change the secret, delete the webhook and create it again.</li>
            </ol>
            <p style="color:#4a5568; margin-top: 12px;">An organisation can have up to 20 webhooks. Webhooks
              are managed by an admin in the HeyDoot app, not through API tokens, and need the Webhooks
              feature on the organisation's plan.</p>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Events
            </h3>
            <div style="overflow-x:auto;">
              <table class="guide-table">
                <thead>
                  <tr>
                    <th>Event</th>
                    <th>Sent when</th>
                    <th>Main fields</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code>hd.message.received</code></td>
                    <td>A contact sends a message to one of the numbers.</td>
                    <td><code>message_ref</code>, <code>conversation_id</code>,
                      <code>number_id</code>, <code>from</code>, <code>text</code>,
                      <code>message_type</code>, <code>sender_name</code>, <code>has_media</code>,
                      <code>media_mime</code>, <code>received_at</code>
                    </td>
                  </tr>
                  <tr>
                    <td><code>hd.message.status</code></td>
                    <td>An outgoing message changes status (sent, delivered, read, failed…).</td>
                    <td><code>message_ref</code>, <code>conversation_id</code>,
                      <code>number_id</code>, <code>status</code>, <code>send_error</code>,
                      <code>attempt_count</code>, <code>message_type</code>
                    </td>
                  </tr>
                  <tr>
                    <td><code>hd.message.deleted</code></td>
                    <td>A message is deleted for everyone.</td>
                    <td><code>message_ref</code>, <code>conversation_id</code>,
                      <code>direction</code>, <code>deleted_by</code> (<code>me</code> /
                      <code>contact</code>)
                    </td>
                  </tr>
                  <tr>
                    <td><code>hd.conversation.created</code></td>
                    <td>A new chat starts.</td>
                    <td><code>conversation_id</code>, <code>number_id</code>,
                      <code>direction</code>, <code>contact_name</code>, <code>is_group</code>,
                      <code>created_at</code>
                    </td>
                  </tr>
                  <tr>
                    <td><code>hd.conversation.assigned</code></td>
                    <td>A chat's owner changes.</td>
                    <td><code>conversation_id</code>, <code>external_user_id</code>,
                      <code>assigned_user_id</code>, previous owners, <code>assigned_at</code>
                    </td>
                  </tr>
                  <tr>
                    <td><code>hd.number.connected</code></td>
                    <td>A WhatsApp number comes online.</td>
                    <td><code>number_id</code>, <code>connection_state</code>, <code>reason</code>
                    </td>
                  </tr>
                  <tr>
                    <td><code>hd.number.disconnected</code></td>
                    <td>A number goes offline. It can't send until reconnected.</td>
                    <td><code>number_id</code>, <code>connection_state</code>, <code>reason</code>
                    </td>
                  </tr>
                  <tr>
                    <td><code>hd.automation.started</code> / <code>completed</code> /
                      <code>expired</code> / <code>cancelled</code>
                    </td>
                    <td>An automated workflow run changes state.</td>
                    <td><code>run_id</code>, <code>workflow_key</code>,
                      <code>conversation_id</code>, <code>status</code>, <code>answers</code>,
                      <code>variables</code>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">What a
              delivery looks like</h3>
            <div class="guide-code">
              <span class="lang">http</span>
              <code>POST /heydoot/events HTTP/1.1
Host: crm.yourcompany.com
Content-Type: application/json
x-hd-event: hd.message.received
x-hd-timestamp: 1759658524
x-hd-signature: 5b1f0c…e9a2   // hex HMAC-SHA256

{
  "event": "hd.message.received",
  "message_ref": "hd_9A2B…",
  "conversation_id": "c3a1…",
  "number_id": "01976117-a906-42f2-9b23-30394341f3ff",
  "direction": "inbound",
  "from": "919876543210",
  "text": "Yes, 4 PM works for me",
  "message_type": "text",
  "sender_name": "Priya",
  "has_media": false,
  "received_at": "2026-10-05T10:02:04.000Z"
}</code>
            </div>
            <p style="color:#4a5568;">The body is a flat JSON object: <code>event</code> plus that event's
              fields. Use <code>conversation_id</code> to reply with <code>POST /v1/messages/send</code>.
            </p>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Verify
              every request</h3>
            <p style="color:#4a5568;">Anyone can post to a public URL, so check the signature before
              trusting a request:</p>
            <ol style="color:#4a5568; padding-left: 20px;">
              <li style="margin-bottom: 6px;">Read the <strong>raw request body</strong> exactly as
                received, before any JSON parsing.</li>
              <li style="margin-bottom: 6px;">Build the string
                <code>&lt;x-hd-timestamp&gt;.&lt;raw body&gt;</code> (timestamp, a dot, then the body).
              </li>
              <li style="margin-bottom: 6px;">Compute <code>HMAC-SHA256</code> of it using your signing
                secret, as lowercase hex.</li>
              <li style="margin-bottom: 6px;">Compare it with <code>x-hd-signature</code> using a
                constant-time comparison.</li>
              <li>Reject the request if <code>x-hd-timestamp</code> is more than 5 minutes from your
                clock, to block replays.</li>
            </ol>

            <div class="guide-code">
              <span class="lang">node.js</span>
              <code>import express from 'express';
import { createHmac, timingSafeEqual } from 'node:crypto';

const SECRET = process.env.HEYDOOT_WEBHOOK_SECRET;
const app = express();

// express.raw keeps the exact bytes; the signature is over them, not over re-serialised JSON.
app.post('/heydoot/events', express.raw({ type: '*/*' }), (req, res) =&gt; {
  const ts  = req.get('x-hd-timestamp') ?? '';
  const sig = req.get('x-hd-signature') ?? '';
  if (Math.abs(Date.now() / 1000 - Number(ts)) &gt; 300) return res.sendStatus(401);

  const expected = createHmac('sha256', SECRET).update(`${ts}.`).update(req.body).digest('hex');
  const ok = sig.length === expected.length &amp;&amp; timingSafeEqual(Buffer.from(sig), Buffer.from(expected));
  if (!ok) return res.sendStatus(401);

  res.sendStatus(200);                       // acknowledge first…
  const event = JSON.parse(req.body.toString('utf8'));
  queue.push(event);                         // …then process in the background
});</code>
            </div>

            <div class="guide-code">
              <span class="lang">python</span>
              <code>import hmac, hashlib, time, os
from flask import Flask, request, abort

SECRET = os.environ["HEYDOOT_WEBHOOK_SECRET"].encode()
app = Flask(__name__)

@app.post("/heydoot/events")
def heydoot_events():
    ts  = request.headers.get("x-hd-timestamp", "")
    sig = request.headers.get("x-hd-signature", "")
    if not ts.isdigit() or abs(time.time() - int(ts)) &gt; 300:
        abort(401)
    raw = request.get_data()                 # exact bytes
    expected = hmac.new(SECRET, ts.encode() + b"." + raw, hashlib.sha256).hexdigest()
    if not hmac.compare_digest(sig, expected):
        abort(401)
    enqueue(request.get_json(force=True))    # process asynchronously
    return "", 200</code>
            </div>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">
              Encrypted payloads (optional)</h3>
            <p style="color:#4a5568;">If the admin turned on <strong>Encrypt payloads</strong>, the body
              isn't JSON. It is a base64 string, sent with <code>Content-Type: text/plain</code> and the
              extra header <code>x-hd-encryption: aes-256-cbc</code>.</p>
            <ol style="color:#4a5568; padding-left: 20px;">
              <li style="margin-bottom: 6px;"><strong>Verify the signature first</strong>, exactly as
                above. It covers the encrypted text.</li>
              <li style="margin-bottom: 6px;">Base64-decode the body. The first 16 bytes are the IV and
                the rest is the ciphertext.</li>
              <li>Decrypt with AES-256-CBC (PKCS#7 padding) using the webhook's encryption key (64 hex
                characters = 32 bytes), then parse the result as JSON.</li>
            </ol>
            <div class="guide-code">
              <span class="lang">node.js</span>
              <code>import { createDecipheriv } from 'node:crypto';

function decryptHeyDoot(rawBody, keyHex) {
  const buf = Buffer.from(rawBody.toString('utf8'), 'base64');
  const d = createDecipheriv('aes-256-cbc', Buffer.from(keyHex, 'hex'), buf.subarray(0, 16));
  return JSON.parse(Buffer.concat([d.update(buf.subarray(16)), d.final()]).toString('utf8'));
}</code>
            </div>
            <p style="color:#4a5568;">This format works natively in Salesforce Apex
              (<code>Crypto.decryptWithManagedIV('AES256', key, blob)</code>).</p>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Retries
              and reliability</h3>
            <ul style="color:#4a5568; padding-left: 20px;">
              <li style="margin-bottom: 8px;">Only a <code>2xx</code> reply counts as delivered. Timeouts
                (8 s), errors, and redirects (<code>3xx</code>) count as failures.</li>
              <li style="margin-bottom: 8px;">A failed delivery is retried <strong>6 more times</strong>:
                three at about 1-minute gaps, then three at about 15-minute gaps. That's roughly 50
                minutes in total. After that it is marked <em>exhausted</em>, and an admin can resend it
                from HeyDoot.</li>
              <li style="margin-bottom: 8px;">Each retry carries a new <code>x-hd-timestamp</code> and
                signature.</li>
              <li style="margin-bottom: 8px;">Because of retries, <strong>the same event can arrive more
                  than once</strong>, and events can arrive out of order. Remove duplicates using
                <code>event</code> + <code>message_ref</code> (+ <code>status</code> for status events).
                Never move a message's status backwards (for example, don't overwrite <code>read</code>
                with <code>delivered</code>).
              </li>
              <li style="margin-bottom: 8px;">Reply <code>200</code> straight away and do slow work
                (database writes, CRM updates) in a background queue, so you stay under the 8-second
                limit.</li>
              <li>Admins can see every delivery attempt in HeyDoot (status, HTTP code, error), which helps
                when debugging.</li>
            </ul>
          </div>

          <!-- ═══════════════ ERRORS ═══════════════ -->
          <div id="errors" style="margin-bottom: 56px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
              <div
                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-exclamation-triangle" style="color: #0d6a2e; font-size: 22px;"></i>
              </div>
              <h2 style="font-size: 1.8rem; font-weight: 700;">Errors, rate limits and quotas</h2>
            </div>

            <p style="color:#4a5568;">Every error has the same shape. Use <code>error</code> in your code
              and show or log <code>message</code>:</p>
            <div class="guide-code">
              <span class="lang">json</span>
              <code>{
  "error": "invalid_request",
  "message": "Number: Must be a valid id; Text: Is required",
  "details": { /* field-level detail, when relevant */ }
}</code>
            </div>

            <div style="overflow-x:auto; margin-top: 16px;">
              <table class="guide-table">
                <thead>
                  <tr>
                    <th>Status</th>
                    <th>Common <code>error</code> codes</th>
                    <th>What to do</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><code>400</code></td>
                    <td><code>invalid_request</code>, <code>invalid_json</code>,
                      <code>invalid_recipient</code>, <code>empty_message</code>,
                      <code>attachment_source_required</code>,
                      <code>number_id_conflicts_with_conversation</code>
                    </td>
                    <td>Fix the request. Don't retry it unchanged.</td>
                  </tr>
                  <tr>
                    <td><code>401</code></td>
                    <td><code>unauthorized</code></td>
                    <td>The token is missing, wrong, expired or revoked. Get a valid token.</td>
                  </tr>
                  <tr>
                    <td><code>402</code></td>
                    <td><code>api_not_licensed</code>, <code>api_quota_exceeded</code>,
                      <code>feature_not_licensed</code>
                    </td>
                    <td>Plan limit. See below. Wait for <code>resets_at</code> or ask the
                      organisation to upgrade.</td>
                  </tr>
                  <tr>
                    <td><code>403</code></td>
                    <td><code>forbidden</code>, <code>license_inactive</code>,
                      <code>over_limit</code>, <code>https_required</code>
                    </td>
                    <td>The token's access level is too low, the endpoint isn't open to API tokens,
                      or the organisation's subscription is inactive.</td>
                  </tr>
                  <tr>
                    <td><code>404</code></td>
                    <td><code>conversation_not_found</code>, <code>number_not_found</code>,
                      <code>message_not_found</code>
                    </td>
                    <td>Check the ID. IDs from another organisation also return 404.</td>
                  </tr>
                  <tr>
                    <td><code>409</code></td>
                    <td><code>not_cancelable</code>, <code>not_failed</code>,
                      <code>not_on_whatsapp</code>, <code>reach_out_cooldown</code>
                    </td>
                    <td>The action doesn't fit the message's current state.</td>
                  </tr>
                  <tr>
                    <td><code>413</code></td>
                    <td><code>payload_too_large</code>, <code>attachment_too_large</code></td>
                    <td>Make the file smaller (max 16 MB), or send a <code>source_url</code>
                      instead.</td>
                  </tr>
                  <tr>
                    <td><code>422</code></td>
                    <td><code>recipient_opted_out</code></td>
                    <td>The contact is on Do-Not-Contact. Don't retry.</td>
                  </tr>
                  <tr>
                    <td><code>429</code></td>
                    <td><code>rate_limited</code></td>
                    <td>Wait for <code>Retry-After</code> seconds, then retry.</td>
                  </tr>
                  <tr>
                    <td><code>502</code> / <code>503</code></td>
                    <td><code>connector_error</code>, <code>api_disabled</code>,
                      <code>database_unavailable</code>
                    </td>
                    <td>Temporary. Retry with backoff, using the same <code>dispatch_id</code>. For
                      <code>api_disabled</code>, contact the organisation's admin.
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Rate
              limit</h3>
            <p style="color:#4a5568;">Each API token can make <strong>600 requests per minute</strong> by
              default (fixed one-minute windows). Every response carries:</p>
            <div class="guide-code">
              <span class="lang">http</span>
              <code>X-RateLimit-Limit: 600
X-RateLimit-Remaining: 587</code>
            </div>
            <p style="color:#4a5568;">Over the limit you get <code>429</code> with
              <code>Retry-After: 60</code>. Spread bulk sends out rather than sending them all at once.
            </p>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Plan
              quotas</h3>
            <p style="color:#4a5568;">Plans can cap API calls per <strong>day</strong>,
              <strong>week</strong> and <strong>month</strong>, counted for the whole organisation (all
              tokens together) in the organisation's time zone. Refused calls don't count. Responses
              include:
            </p>
            <div class="guide-code">
              <span class="lang">http</span>
              <code>X-Quota-Limit: 5000
X-Quota-Remaining: 4812
X-Quota-Reset: 2026-10-06T00:00:00+05:30</code>
            </div>
            <p style="color:#4a5568; margin-top: 10px;">When a limit is used up:</p>
            <div class="guide-code">
              <span class="lang">json</span>
              <code>// 402 Payment Required, with a Retry-After header
{
  "error": "api_quota_exceeded",
  "window": "day",
  "limit": 5000,
  "used": 5000,
  "resets_at": "2026-10-06T00:00:00+05:30",
  "message": "Daily API quota of 5000 calls reached; resets at …"
}</code>
            </div>
            <p style="color:#4a5568;">Pause sending until <code>resets_at</code> and keep the unsent
              messages in your own queue. Retrying sooner won't help.</p>

            <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Retry
              policy in short</h3>
            <ul style="color:#4a5568; padding-left: 20px;">
              <li style="margin-bottom: 8px;"><strong>Retry</strong> on network errors, <code>429</code>,
                <code>502</code> and <code>503</code>, with exponential backoff (e.g. 2 s, 4 s, 8 s…
                capped at 60 s), and always with the same <code>dispatch_id</code>.
              </li>
              <li style="margin-bottom: 8px;"><strong>Don't retry</strong> other <code>4xx</code> errors
                without changing something first.</li>
              <li>For <code>402 api_quota_exceeded</code>, wait until <code>resets_at</code>.</li>
            </ul>
          </div>

          <!-- ═══════════════ ENCRYPTION ═══════════════ -->
          <div id="encryption" style="margin-bottom: 56px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
              <div
                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-lock" style="color: #0d6a2e; font-size: 22px;"></i>
              </div>
              <h2 style="font-size: 1.8rem; font-weight: 700;">Optional: encrypted API traffic</h2>
            </div>
            <p style="color:#4a5568;">HTTPS already encrypts all traffic. Some organisations also want the
              JSON itself encrypted end to end. If the organisation's admin turns this on, they give you a
              shared key and an algorithm (<code>AES-256-GCM</code> recommended; <code>AES-128-GCM</code>,
              <code>AES-256-CBC</code> and <code>AES-128-CBC</code> are also supported).
            </p>
            <ul style="color:#4a5568; padding-left: 20px; margin-top: 12px;">
              <li style="margin-bottom: 8px;"><strong>Requests:</strong> send this envelope instead of the
                plain body. Plain JSON requests are still accepted.</li>
              <li><strong>Responses:</strong> once it is on, every JSON response comes back in the same
                envelope, and you decrypt it with the same key. File downloads (media) are not
                encrypted.</li>
            </ul>
            <div class="guide-code">
              <span class="lang">json</span>
              <code>{
  "algorithm": "AES-256-GCM",
  "iv":   "&lt;base64, 12 bytes for GCM / 16 for CBC&gt;",
  "data": "&lt;base64 ciphertext of the JSON body&gt;",
  "tag":  "&lt;base64 auth tag, GCM only&gt;"
}</code>
            </div>
            <p style="color:#4a5568;">Use a new random IV for every request. Some early errors are always
              plain JSON, because they happen before decryption: <code>401</code>, <code>429</code> and
              <code>503 api_disabled</code>. If decryption fails you get
              <code>400 decryption_failed</code>. Check that the key and algorithm match.
            </p>
          </div>

          <!-- ═══════════════ REFERENCE ═══════════════ -->
          <div id="reference" style="margin-bottom: 56px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
              <div
                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-list" style="color: #0d6a2e; font-size: 22px;"></i>
              </div>
              <h2 style="font-size: 1.8rem; font-weight: 700;">Endpoint reference</h2>
            </div>
            <p style="color:#4a5568;">All the endpoints an API token can use. <em>Read</em> works with
              either token type, and <em>Send</em> needs a Read &amp; Send token.</p>

            <div style="overflow-x:auto; margin-top: 16px;">
              <table class="guide-table">
                <thead>
                  <tr>
                    <th>Method</th>
                    <th>Path</th>
                    <th>Access</th>
                    <th>Purpose</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/numbers</code></td>
                    <td>Read</td>
                    <td>List WhatsApp numbers</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/numbers/{number_id}/health</code></td>
                    <td>Read</td>
                    <td>Is this number online?</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-post">POST</span></td>
                    <td><code>/v1/messages/send</code></td>
                    <td>Send</td>
                    <td>Send text or a file</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/messages/{message_ref}/status</code></td>
                    <td>Read</td>
                    <td>Delivery status of one message</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-post">POST</span></td>
                    <td><code>/v1/messages/{message_ref}/cancel</code></td>
                    <td>Send</td>
                    <td>Cancel a queued message</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-post">POST</span></td>
                    <td><code>/v1/messages/{message_ref}/retry</code></td>
                    <td>Send</td>
                    <td>Retry a failed message</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/conversations</code></td>
                    <td>Read</td>
                    <td>List chats</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/conversations/{id}</code></td>
                    <td>Read</td>
                    <td>One chat</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/conversations/{id}/messages</code></td>
                    <td>Read</td>
                    <td>Chat history</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/conversations/{id}/messages/{message_ref}/media</code></td>
                    <td>Read</td>
                    <td>Download a file</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/conversations/{id}/members</code></td>
                    <td>Read</td>
                    <td>Group members (groups only)</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-patch">PATCH</span></td>
                    <td><code>/v1/conversations/{id}/assign</code></td>
                    <td>Send</td>
                    <td>Assign / unassign</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-post">POST</span></td>
                    <td><code>/v1/conversations/{id}/read</code></td>
                    <td>Send</td>
                    <td>Mark read</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-patch">PATCH</span></td>
                    <td><code>/v1/conversations/{id}/display-name</code></td>
                    <td>Send</td>
                    <td>Rename contact</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span> <span class="method-pill m-post">POST</span></td>
                    <td><code>/v1/conversations/{id}/notes</code></td>
                    <td>Read / Send</td>
                    <td>Internal notes</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-post">POST</span> <span class="method-pill m-delete">DELETE</span>
                    </td>
                    <td><code>/v1/conversations/{id}/labels</code></td>
                    <td>Send</td>
                    <td>Add / remove a label</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/templates</code></td>
                    <td>Read</td>
                    <td>Saved message templates</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/labels</code></td>
                    <td>Read</td>
                    <td>Available labels</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/quick-replies</code></td>
                    <td>Read</td>
                    <td>Saved quick replies</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/opt-outs</code></td>
                    <td>Read</td>
                    <td>Do-Not-Contact list</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-post">POST</span></td>
                    <td><code>/v1/automations/runs</code></td>
                    <td>Send</td>
                    <td>Start an automated workflow for a contact</td>
                  </tr>
                  <tr>
                    <td><span class="method-pill m-get">GET</span></td>
                    <td><code>/v1/automations/runs/{id}</code></td>
                    <td>Read</td>
                    <td>Workflow run status</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="guide-note">
              <strong>Done in the HeyDoot app, not the API</strong>
              <p style="margin-top: 6px;">Creating API tokens, managing webhooks, users, teams, campaigns
                and templates, connecting WhatsApp numbers, and reports. These are admin tasks, and they
                refuse API tokens with <code>403</code>.</p>
            </div>
          </div>

          <!-- ═══════════════ GO-LIVE ═══════════════ -->
          <div id="golive" style="margin-bottom: 56px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
              <div
                style="background: #e9f5ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-list-check" style="color: #0d6a2e; font-size: 22px;"></i>
              </div>
              <h2 style="font-size: 1.8rem; font-weight: 700;">Go-live checklist</h2>
            </div>
            <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
              <ul style="list-style: none;">
                <li style="margin-bottom: 12px; display: flex; gap: 12px;">
                  <i class="fas fa-check-circle" style="color: #0d6a2e;"></i>
                  <span>
                    You have the production <strong>base URL</strong> and a production <strong>API
                      token</strong>, separate from testing, stored in a secrets manager.
                  </span>
                </li>
                <li style="margin-bottom: 12px; display: flex; gap: 12px;"><i class="fas fa-check-circle"
                    style="color: #0d6a2e;"></i> <strong>API
                    Access</strong> is on and the plan includes API access, with quotas that fit
                  your expected volume.</li>
                <li style="margin-bottom: 12px; display: flex; gap: 12px;"><i class="fas fa-check-circle"
                    style="color: #0d6a2e;"></i> The
                  <code>number_id</code> for each line you send from is in your configuration, and the
                  number is <code>linked</code>.
                </li>
                <li style="margin-bottom: 12px; display: flex; gap: 12px;"><i class="fas fa-check-circle"
                    style="color: #0d6a2e;"></i> Every send carries a
                  unique <code>dispatch_id</code>, plus <code>user_id</code> / <code>username</code> /
                  <code>user_email</code> for messages a person sent.
                </li>
                <li style="margin-bottom: 12px; display: flex; gap: 12px;"><i class="fas fa-check-circle"
                    style="color: #0d6a2e;"></i> You store
                  <code>message_ref</code> and <code>conversation_id</code> against your own records.
                </li>
                <li style="margin-bottom: 12px; display: flex; gap: 12px;">
                  <i class="fas fa-check-circle" style="color: #0d6a2e;"></i>
                  <span>
                    Your webhook endpoint
                    is HTTPS and public, <strong>verifies the signature</strong>, rejects old
                    timestamps, replies within 8 s, and removes duplicate events.
                  </span>
                </li>
                <li style="margin-bottom: 12px; display: flex; gap: 12px;"><i class="fas fa-check-circle"
                    style="color: #0d6a2e;"></i> Retries use backoff,
                  reuse the <code>dispatch_id</code>, and stop on <code>4xx</code>.
                  <code>402 api_quota_exceeded</code> pauses until <code>resets_at</code>.
                </li>
                <li style="margin-bottom: 12px; display: flex; gap: 12px;"><i class="fas fa-check-circle"
                    style="color: #0d6a2e;"></i> You alert on
                  <code>hd.number.disconnected</code>, because messages can't go out until the number
                  reconnects.
                </li>
                <li style="display: flex; gap: 12px;"><i class="fas fa-check-circle" style="color: #0d6a2e;"></i> You
                  have a plan to rotate the token: create the new
                  one, deploy it, then revoke the old one.</li>
              </ul>
            </div>

            <p style="color:#6b7280; margin-top: 16px; font-size: 0.9rem;"><em>HeyDoot partner integration
                guide · API v1 · Questions about your base URL, plan limits or a webhook that isn't
                arriving: contact your HeyDoot administrator.</em></p>
          </div>

          <!-- CTA -->
          <div id="cta"
            style="background: linear-gradient(115deg, #0a2b2c, #1d4b2c); border-radius: 32px; padding: 48px; text-align: center; margin: 56px 0 32px; color: white;">
            <i class="fab fa-whatsapp" style="font-size: 56px; color: #25D366; margin-bottom: 16px;"></i>
            <h2 style="font-size: 2rem; font-weight: 800;">Start building on HeyDoot</h2>
            <p style="margin-top: 16px; opacity: 0.9;">Get your base URL and API token from your HeyDoot
              admin, then follow this guide end-to-end. Most integrations are live in a day.</p>
            <div style="display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; margin-top: 32px;">
              <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                  class="fas fa-server"></i> REST + JSON</span>
              <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                  class="fas fa-key"></i> Bearer Token</span>
              <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                  class="fas fa-shield-alt"></i> HMAC-SHA256 Webhooks</span>
              <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                  class="fas fa-lock"></i> Optional AES Encryption</span>
            </div>
            <div style="margin-top: 36px; display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
              <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20help%20with%20the%20HeyDoot%20API%20integration"
                class="btn btn-lg" style="background: white; color: #0d6a2e; font-weight: 700;"><i
                  class="fab fa-whatsapp"></i> Talk to the team</a>
              <a href="<?php echo BASE_URL; ?>/postman-api.php" class="btn btn-lg"
                style="background: rgba(255,255,255,0.15); color: white; font-weight: 700;"><i class="fas fa-code"></i>
                Postman collection</a>
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

          <a href="<?php echo BASE_URL; ?>/postman-api.php" class="utility-item utility-link" style="color: #0d6a2e;">
            <i class="fas fa-code"></i>
            Postman API collection
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