<?php
require_once dirname(__DIR__) . '/config.php';
$page_meta = [
    'title' => 'Smoobu WhatsApp Integration | HeyDoot',
    'meta_title' => 'Smoobu WhatsApp Integration – Booking Messages & Guest Replies with HeyDoot',
    'description' => 'Connect Smoobu with WhatsApp using HeyDoot. Send booking confirmations, check-in details, changes and cancellations from Smoobu, and post guest replies back into the booking inbox.',

    'og_title' => 'Smoobu WhatsApp Integration | HeyDoot',
    'og_description' => 'Integrate Smoobu with WhatsApp via a small relay. Send confirmations, check-in info, changes and cancellations; guest replies appear in the booking\'s Smoobu inbox.',

    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations/smoobu.php',

    'twitter_title' => 'Smoobu WhatsApp Integration | HeyDoot',
    'twitter_description' => 'Smoobu bookings trigger WhatsApp sends via HeyDoot; guest replies land in the Smoobu inbox. Includes daily check-in reminders.',

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
    "description" => "HeyDoot Smoobu WhatsApp Integration connects Smoobu bookings with WhatsApp through a small relay. Booking events trigger WhatsApp messages, and guest replies are posted back into the booking's Smoobu inbox.",
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
    .btn-smoobu {
        background: #2563EB;
        color: white;
        box-shadow: 0 2px 8px rgba(37, 99, 235, 0.25);
    }

    .btn-smoobu:hover {
        background: #1d4ed8;
        transform: translateY(-3px);
        box-shadow: 0 12px 22px -8px rgba(37, 99, 235, 0.35);
    }

    .smoobu-accent {
        color: #2563EB;
    }

    .setup-step {
        background: white;
        border-radius: 24px;
        padding: 24px;
        margin-bottom: 24px;
        border-left: 4px solid #2563EB;
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
        background: #2563EB;
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

    .smoobu-code {
        background: #0f172a;
        color: #e2e8f0;
        border-radius: 16px;
        padding: 18px;
        overflow-x: auto;
        font-size: 0.82rem;
        line-height: 1.55;
        margin-top: 14px;
    }

    .smoobu-code code {
        font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace;
    }

    .smoobu-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.88rem;
        overflow-x: auto;
        display: block;
    }

    .smoobu-table th,
    .smoobu-table td {
        padding: 10px;
        border: 1px solid #d7e6dc;
        text-align: left;
        vertical-align: top;
    }

    .smoobu-table thead tr {
        background: #e8effd;
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
    <!-- Hero Section with Smoobu flavor -->
    <section class="hero"
        style="background: linear-gradient(135deg, #0b1c3f 0%, #1e3a8a 100%);padding: 20px 20px 20px;">
        <div class="floating-dots"></div>
        <div style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div
                style="display: inline-block; background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); padding: 6px 16px; border-radius: 60px; margin-bottom: 0;">
                <span style="color: #ffffff; font-weight: 700; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-home"></i>
                    Booking Events + Signed Webhooks for Smoobu
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
                                style="color: #2563EB; margin-right: 8px;"></i> On this page</h4>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px;">
                            <li><a href="#overview" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-info-circle" style="color: #2563EB;"></i> Overview</a></li>
                            <li><a href="#benefits" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-gift"
                                        style="color: #2563EB;"></i> What a rental business gets</a>
                            </li>
                            <li><a href="#prerequisites" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-check-circle" style="color: #2563EB;"></i> What you need</a></li>
                            <li><a href="#setup-guide" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-list-ol" style="color: #2563EB;"></i> Credentials &amp; setup</a>
                            </li>
                            <li><a href="#sending" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-paper-plane" style="color: #2563EB;"></i> Sending on booking
                                    events</a></li>
                            <li><a href="#checkin" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-calendar-check" style="color: #2563EB;"></i> Check-in
                                    reminders</a>
                            </li>
                            <li><a href="#receiving" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-inbox"
                                        style="color: #2563EB;"></i> Guest replies in Smoobu</a>
                            </li>
                            <li><a href="#errors-limits" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-exclamation-triangle" style="color: #2563EB;"></i> Errors &amp;
                                    retries</a></li>
                            <li><a href="#go-live" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-list-check" style="color: #2563EB;"></i> Go-live checklist</a>
                            </li>
                            <li><a href="#faq-smoobu" style="color: #2c3e2f;"><i class="fas fa-question-circle"
                                        style="color: #2563EB;"></i> FAQs</a></li>
                            <li><a href="#cta" style="color: #2c3e2f;"><i class="fas fa-rocket"
                                        style="color: #2563EB;"></i> Get Started</a></li>
                        </ul>
                        <div style="margin-top:24px;padding-top:20px;border-top:1px solid #f0f0f0;">
                            <p style="font-size:.85rem;color:#6b7280;margin-bottom:10px;">Need API / technical docs?</p>
                            <a href="<?php echo BASE_URL; ?>/services/smoobu.php"
                                style="display:flex;align-items:center;gap:10px;background:#e8effd;border-radius:14px;padding:12px 16px;color:#1E3A5F;font-weight:600;font-size:.9rem;text-decoration:none;">
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
                                style="background: #e8effd; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-info-circle" style="color: #2563EB; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Overview</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <p style="color: #4a5568; margin-bottom: 18px;">
                                Smoobu connects to HeyDoot through a small relay service: Smoobu tells the relay about
                                each booking, the relay sends the guest a WhatsApp through HeyDoot, and guest replies
                                are
                                posted back into the booking's Smoobu inbox.
                            </p>

                            <div style="overflow-x:auto; margin-bottom: 20px;">
                                <table class="smoobu-table">
                                    <thead>
                                        <tr>
                                            <th>Direction</th>
                                            <th>How</th>
                                            <th>Auth</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Smoobu → relay (bookings)</td>
                                            <td>Smoobu webhook to
                                                <code
                                                    class="hubspot-code-1">https://&lt;YOUR_RELAY_DOMAIN&gt;/smoobu/&lt;RELAY_PATH_SECRET&gt;</code>
                                            </td>
                                            <td>secret path; the relay re-reads the booking from Smoobu</td>
                                        </tr>
                                        <tr>
                                            <td>relay → HeyDoot (send)</td>
                                            <td><code class="hubspot-code-1">POST /v1/messages/send</code></td>
                                            <td><code
                                                    class="hubspot-code-1">Authorization: Bearer &lt;HEYDOOT_API_TOKEN&gt;</code>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>HeyDoot → relay (replies)</td>
                                            <td>HeyDoot webhook to
                                                <code
                                                    class="hubspot-code-1">https://&lt;YOUR_RELAY_DOMAIN&gt;/heydoot/events</code>
                                            </td>
                                            <td>HMAC-SHA256 with the webhook's signing secret</td>
                                        </tr>
                                        <tr>
                                            <td>relay → Smoobu (log)</td>
                                            <td><code
                                                    class="hubspot-code-1">POST /api/reservations/{id}/messages/send-message-to-host</code>
                                            </td>
                                            <td>Smoobu HMAC API key + secret</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p style="color:#4a5568; font-style: italic;">
                                Bookings trigger WhatsApp sends; guest replies land in the Smoobu inbox.
                            </p>
                            <p style="color:#4a5568; margin-top: 12px;">
                                The relay sits in the middle of both directions: it is the only part that holds the
                                HeyDoot token and the Smoobu key.
                            </p>
                            <p style="color:#4a5568; margin-top: 12px;">
                                <strong>Why a relay is needed.</strong> Smoobu webhooks can only call a URL; they can't
                                add HeyDoot's Bearer token or reshape the data. Smoobu also doesn't sign its webhooks,
                                so the relay treats each one as a hint and fetches the booking from Smoobu's API before
                                sending anything. The relay is about 150 lines of Node.js and runs on any small server
                                or
                                serverless platform.
                            </p>
                        </div>
                    </div>

                    <!-- Benefits -->
                    <div id="benefits" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8effd; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-gift" style="color: #2563EB; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">What a rental business gets</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <div style="overflow-x:auto;">
                                <table class="smoobu-table">
                                    <thead>
                                        <tr>
                                            <th>Moment</th>
                                            <th>WhatsApp to the guest</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>booking created (<code>newReservation</code>)</td>
                                            <td>confirmation with dates, property and the guest app link</td>
                                        </tr>
                                        <tr>
                                            <td>day before arrival (scheduled job)</td>
                                            <td>check-in time, address and access details</td>
                                        </tr>
                                        <tr>
                                            <td>booking changed (<code>updateReservation</code>)</td>
                                            <td>the new dates</td>
                                        </tr>
                                        <tr>
                                            <td>booking cancelled (<code>cancelReservation</code>)</td>
                                            <td>cancellation notice</td>
                                        </tr>
                                        <tr>
                                            <td>guest replies on WhatsApp</td>
                                            <td>the reply appears in the booking's Smoobu messages, visible only to the
                                                host</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Prerequisites -->
                    <div id="prerequisites" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8effd; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-clipboard-list" style="color: #2563EB; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">What you need before you start</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 14px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i>
                                    <span>
                                        <strong>HeyDoot</strong>:
                                        base URL <code
                                            class="hubspot-code-1">https://&lt;HEYDOOT_API_BASE_URL&gt;</code>, a
                                        <em>Read &amp;
                                            Send</em>
                                        API token, and the number ID of the WhatsApp line
                                    </span>
                                </li>
                                <li style="margin-bottom: 14px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i>
                                    <strong>Smoobu</strong>:
                                    an account with API access, and an API key + secret (<em>Settings → Advanced → API
                                        Keys</em>)
                                </li>
                                <li style="display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i> A place to run the relay over public HTTPS, with a
                                    small database (Postgres, MySQL or SQLite) for the booking ↔ chat mapping</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Credentials & setup -->
                    <div id="setup-guide" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8effd; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-list-ol" style="color: #2563EB; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Credentials and setup</h2>
                        </div>

                        <p style="color:#4a5568; margin-bottom:18px;">
                            All secrets live in the relay's environment variables, never in code.
                        </p>

                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="smoobu-table">
                                <thead>
                                    <tr>
                                        <th>Env variable</th>
                                        <th>Value</th>
                                        <th>Where it comes from</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="hubspot-code-1">HEYDOOT_BASE_URL</code></td>
                                        <td><code class="hubspot-code-1">https://&lt;HEYDOOT_API_BASE_URL&gt;</code>
                                        </td>
                                        <td>the HeyDoot team</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">HEYDOOT_TOKEN</code></td>
                                        <td><code class="hubspot-code-1">hd_live_…</code> (Read &amp; Send)</td>
                                        <td>HeyDoot admin → Settings → Integrations → API Tokens</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">HEYDOOT_NUMBER_ID</code></td>
                                        <td>the WhatsApp line UUID</td>
                                        <td>HeyDoot admin → Settings → Phones</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">HEYDOOT_WEBHOOK_SECRET</code></td>
                                        <td>shown once when the HeyDoot webhook is added</td>
                                        <td>HeyDoot → Settings → Integrations → Webhooks</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">SMOOBU_API_KEY</code> /
                                            <code>SMOOBU_API_SECRET</code>
                                        </td>
                                        <td>API key + secret</td>
                                        <td>Smoobu → Settings → Advanced → API Keys</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">RELAY_PATH_SECRET</code></td>
                                        <td>a random string you choose</td>
                                        <td>you</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">DEFAULT_COUNTRY_CODE</code></td>
                                        <td>e.g. <code class="hubspot-code-1">91</code></td>
                                        <td>you</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Step 1 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">1</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">HeyDoot</h3>
                            </div>
                            <p>A HeyDoot admin checks that API Access is on, creates a <em>Read &amp; Send</em> token
                                labelled "Smoobu relay", and notes the number ID.</p>
                        </div>

                        <!-- Step 2 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">2</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Smoobu API key</h3>
                            </div>
                            <p>Create an API key and secret. Use HMAC signing (below): Smoobu's older
                                <code class="hubspot-code-1">Api-Key</code> header is deprecated and stops working on
                                <strong>31 October
                                    2026</strong>.
                            </p>
                        </div>

                        <!-- Step 3 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">3</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Smoobu webhook</h3>
                            </div>
                            <p>In Smoobu's API settings, enter
                                <code
                                    class="hubspot-code-1">https://&lt;YOUR_RELAY_DOMAIN&gt;/smoobu/&lt;RELAY_PATH_SECRET&gt;</code>.
                                Smoobu
                                sends every event to it; there is no per-event choice, so the relay ignores what it
                                doesn't need.
                            </p>
                        </div>

                        <!-- Step 4 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">4</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">HeyDoot webhook</h3>
                            </div>
                            <p>In HeyDoot, open <strong>Settings → Integrations → Webhooks</strong>, add
                                <code class="hubspot-code-1">https://&lt;YOUR_RELAY_DOMAIN&gt;/heydoot/events</code>,
                                choose
                                <code class="hubspot-code-1">hd.message.received</code>, <code>hd.message.status</code>
                                and
                                <code class="hubspot-code-1">hd.number.disconnected</code>, and copy the signing secret.
                            </p>
                        </div>

                        <!-- Step 5 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">5</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Database table</h3>
                            </div>
                            <p>The relay remembers which HeyDoot chat belongs to which booking:</p>
                            <pre class="smoobu-code"><code>CREATE TABLE smoobu_chats (
  booking_id      BIGINT PRIMARY KEY,
  conversation_id TEXT,
  guest_phone     TEXT NOT NULL,
  arrival         DATE,
  sent_kinds      TEXT NOT NULL DEFAULT ''  -- e.g. 'confirm,checkin' so nothing is sent twice
);
CREATE INDEX smoobu_chats_conv ON smoobu_chats (conversation_id);</code></pre>
                        </div>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Signing
                            Smoobu API calls</h3>
                        <p style="color:#4a5568; margin-bottom:12px;">
                            Every call carries <code class="hubspot-code-1">X-API-Key</code>, <code
                                class="hubspot-code-1">X-Timestamp</code> (ISO 8601 UTC),
                            <code class="hubspot-code-1">X-Nonce</code> (a new UUID v4) and <code
                                class="hubspot-code-1">X-Signature</code>. The signature is
                            Base64 HMAC-SHA256, keyed with the API secret, over these seven lines joined by
                            <code class="hubspot-code-1">\n</code>: method, path, sorted query string, timestamp, nonce,
                            hex SHA-256 of the
                            body, API key.
                        </p>
                        <pre class="smoobu-code"><code>const crypto = require('crypto');

async function smoobu(method, path, body) {
  const raw = body ? JSON.stringify(body) : '';
  const [p, q = ''] = path.split('?');
  const query = q.split('&').filter(Boolean).sort().join('&'); // keys/values RFC 3986 encoded
  const ts = new Date().toISOString().replace(/\.\d{3}Z$/, 'Z');
  const nonce = crypto.randomUUID();
  const bodyHash = crypto.createHash('sha256').update(raw).digest('hex');
  const canonical = [method, p, query, ts, nonce, bodyHash, process.env.SMOOBU_API_KEY].join('\n');
  const sig = crypto.createHmac('sha256', process.env.SMOOBU_API_SECRET).update(canonical).digest('base64');

  const r = await fetch(`https://login.smoobu.com${path}`, {
    method,
    headers: {
      'Content-Type': 'application/json',
      'X-API-Key':   process.env.SMOOBU_API_KEY,
      'X-Timestamp': ts,
      'X-Nonce':     nonce,
      'X-Signature': sig,
    },
    body: raw || undefined,
  });
  if (!r.ok) throw new Error(`Smoobu ${r.status}: ${await r.text()}`);
  return r.json();
}</code></pre>
                        <p style="color:#4a5568; margin-top: 12px;">
                            Check it with <code class="hubspot-code-1">await smoobu('GET', '/api/me')</code>: it returns
                            your Smoobu user's
                            id, name and email.
                        </p>
                    </div>

                    <!-- Sending on booking events -->
                    <div id="sending" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8effd; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-paper-plane" style="color: #2563EB; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Sending WhatsApp on Smoobu booking
                                events</h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            Smoobu posts <code class="hubspot-code-1">{"action", "user", "data"}</code> to the relay for
                            every event. The relay
                            acts on four booking actions, re-reads the booking from Smoobu, and sends through HeyDoot.
                        </p>

                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="smoobu-table">
                                <thead>
                                    <tr>
                                        <th>Smoobu action</th>
                                        <th>Relay does</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code class="hubspot-code-1">newReservation</code></td>
                                        <td>sends the confirmation, stores the booking ↔ chat mapping</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">updateReservation</code></td>
                                        <td>sends the new dates, only when the arrival date changed</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">cancelReservation</code></td>
                                        <td>sends a cancellation notice</td>
                                    </tr>
                                    <tr>
                                        <td><code class="hubspot-code-1">deleteReservation</code>, <code
                                                class="hubspot-code-1">updateRates</code>,
                                            <code class="hubspot-code-1">newMessage</code>, price elements, online
                                            check-in update
                                        </td>
                                        <td>ignored (answer 200)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 12px;">Relay: Smoobu webhook
                            handler</h3>
                        <pre class="smoobu-code"><code>const express = require('express');
const app = express();
// db: your database client (pg, mysql2, better-sqlite3); smoobu(): from the setup section.

app.post(`/smoobu/${process.env.RELAY_PATH_SECRET}`, express.json(), async (req, res) =&gt; {
  res.sendStatus(200); // acknowledge first
  const { action, data } = req.body || {};
  if (!['newReservation', 'updateReservation', 'cancelReservation'].includes(action) || !data?.id) return;

  try {
    // Smoobu webhooks aren't signed: trust only what the API returns.
    const b = await smoobu('GET', `/api/reservations/${Number(data.id)}`);
    if (b['is-blocked-booking']) return;              // owner block, no guest
    const phone = toE164(b.phone);
    if (!phone) return console.warn('booking without usable phone', b.id);

    const row = await db.get('SELECT * FROM smoobu_chats WHERE booking_id = ?', [b.id]);

    if (action === 'newReservation') {
      if (row?.sent_kinds.includes('confirm')) return; // duplicate webhook
      await sendToGuest(b, phone, 'confirm', confirmText(b));
    } else if (action === 'updateReservation') {
      if (!row || String(row.arrival) === b.arrival) return; // nothing guest-facing changed
      await sendToGuest(b, phone, `update-${b.arrival}`, updateText(b));
    } else {
      await sendToGuest(b, phone, 'cancel', cancelText(b));
    }
  } catch (e) {
    console.error('smoobu event failed', action, data.id, e);
  }
});

async function sendToGuest(b, phone, kind, text) {
  const row = await db.get('SELECT * FROM smoobu_chats WHERE booking_id = ?', [b.id]);
  const body = {
    text,
    dispatch_id: uuidFrom(`smoobu-${b.id}-${kind}`), // same event twice = one message
    user_id: 'smoobu-relay', username: 'Smoobu automation',
    ...(row?.conversation_id ? { conversation_id: row.conversation_id }
                             : { to: phone, number_id: process.env.HEYDOOT_NUMBER_ID }),
  };
  const r = await fetch(`${process.env.HEYDOOT_BASE_URL}/v1/messages/send`, {
    method: 'POST',
    headers: { Authorization: `Bearer ${process.env.HEYDOOT_TOKEN}`, 'Content-Type': 'application/json' },
    body: JSON.stringify(body),
  });
  const out = await r.json();
  if (!r.ok) throw new Error(`HeyDoot ${r.status} ${out.error}: ${out.message}`);

  await db.run(
    `INSERT INTO smoobu_chats (booking_id, conversation_id, guest_phone, arrival, sent_kinds)
     VALUES (?, ?, ?, ?, ?)
     ON CONFLICT (booking_id) DO UPDATE SET
       conversation_id = excluded.conversation_id,
       arrival         = excluded.arrival,
       sent_kinds      = smoobu_chats.sent_kinds || ',' || excluded.sent_kinds`,
    [b.id, out.conversation_id, phone, b.arrival, kind]);
}

// Smoobu stores phones as typed ("+49123...", "0177..."). HeyDoot needs + and the country code.
function toE164(p, defaultCc = process.env.DEFAULT_COUNTRY_CODE || '91') {
  const d = String(p || '').replace(/[^\d+]/g, '');
  if (d.startsWith('+'))  return d.length &gt;= 9 ? d : null;
  if (d.startsWith('00')) return `+${d.slice(2)}`;
  const national = d.replace(/^0+/, '');
  return national.length &gt;= 8 ? `+${defaultCc}${national}` : null;
}

function uuidFrom(s) {
  const h = require('crypto').createHash('sha256').update(s).digest('hex');
  return `${h.slice(0,8)}-${h.slice(8,12)}-4${h.slice(13,16)}-a${h.slice(17,20)}-${h.slice(20,32)}`;
}</code></pre>

                        <h3 style="font-size: 1.3rem; font-weight: 700; margin-top: 28px; margin-bottom: 12px;">Message
                            texts</h3>
                        <p style="color:#4a5568; margin-bottom:12px;">
                            Adapt the wording and language; <code class="hubspot-code-1">b.language</code> holds the
                            guest's language code.
                        </p>
                        <pre class="smoobu-code"><code>const confirmText = (b) =&gt;
  `Hi ${b.firstname || b['guest-name']}, your stay at ${b.apartment.name} is confirmed: ` +
  `${b.arrival} to ${b.departure}. Check-in from ${b['check-in'] || '15:00'}. ` +
  `Your guest guide: ${b['guest-app-url']}`;

const updateText = (b) =&gt;
  `Hi ${b.firstname || b['guest-name']}, your booking at ${b.apartment.name} now runs ` +
  `${b.arrival} to ${b.departure}.`;

const cancelText = (b) =&gt;
  `Hi ${b.firstname || b['guest-name']}, your booking at ${b.apartment.name} for ` +
  `${b.arrival} has been cancelled.`;</code></pre>
                    </div>

                    <!-- Check-in reminders -->
                    <div id="checkin" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8effd; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-calendar-check" style="color: #2563EB; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Check-in details the day before
                                arrival</h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            Smoobu has no "day before" webhook, so run a daily job (e.g. 10:00 local time) that lists
                            tomorrow's arrivals and sends each one once:
                        </p>
                        <pre class="smoobu-code"><code>async function sendCheckinReminders() {
  const tomorrow = new Date(Date.now() + 864e5).toISOString().slice(0, 10);
  for (let page = 1; ; page++) {
    const r = await smoobu('GET',
      `/api/reservations?arrivalFrom=${tomorrow}&arrivalTo=${tomorrow}` +
      `&excludeBlocked=true&page=${page}&pageSize=100`);
    for (const b of r.bookings) {
      const row = await db.get('SELECT sent_kinds FROM smoobu_chats WHERE booking_id = ?', [b.id]);
      const phone = toE164(b.phone);
      if (!phone || row?.sent_kinds.includes('checkin')) continue;
      await sendToGuest(b, phone, 'checkin',
        `Hi ${b['guest-name']}, see you tomorrow at ${b.apartment.name}! ` +
        `Check-in from ${b['check-in'] || '15:00'}. ` +
        `Directions and door code: ${b['guest-app-url']}`);
    }
    if (page &gt;= r.page_count) break;
  }
}</code></pre>
                        <p style="color:#4a5568; margin-top: 12px;">
                            <strong>Guest phone numbers.</strong> Smoobu only has the phone the booking channel passed
                            on. Some channels share no number, or a masked one that isn't on WhatsApp. Those sends fail
                            with <code class="hubspot-code-1">not_on_whatsapp</code> in the status webhook; fall back to
                            Smoobu's own messaging
                            for them.
                        </p>
                    </div>

                    <!-- Guest replies in Smoobu -->
                    <div id="receiving" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8effd; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-inbox" style="color: #2563EB; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Guest replies in Smoobu</h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            When a guest answers on WhatsApp, HeyDoot calls the relay. The relay checks the signature,
                            finds the booking by <code class="hubspot-code-1">conversation_id</code>, and posts the
                            reply as an internal host
                            message on that booking, so the host sees it in Smoobu and it stays hidden from the guest.
                        </p>

                        <pre class="smoobu-code"><code>const crypto = require('crypto');

// Raw body: HeyDoot's signature covers the exact bytes.
app.post('/heydoot/events', express.raw({ type: '*/*' }), async (req, res) =&gt; {
  const raw = req.body;
  const ts  = req.get('x-hd-timestamp') || '';
  const sig = req.get('x-hd-signature') || '';
  if (!/^\d+$/.test(ts) || Math.abs(Date.now() / 1000 - Number(ts)) &gt; 300) return res.sendStatus(401);

  const expected = crypto.createHmac('sha256', process.env.HEYDOOT_WEBHOOK_SECRET)
    .update(`${ts}.`).update(raw).digest('hex');
  if (sig.length !== expected.length ||
      !crypto.timingSafeEqual(Buffer.from(sig), Buffer.from(expected))) return res.sendStatus(401);

  const ev = JSON.parse(raw.toString('utf8'));
  res.sendStatus(200);

  try {
    const row = ev.conversation_id &amp;&amp;
      await db.get('SELECT booking_id FROM smoobu_chats WHERE conversation_id = ?', [ev.conversation_id]);
    if (!row) return; // a chat not started by a booking

    if (ev.event === 'hd.message.received') {
      if (await db.get('SELECT 1 FROM seen_refs WHERE ref = ?', [ev.message_ref])) return; // duplicate
      await db.run('INSERT INTO seen_refs (ref) VALUES (?)', [ev.message_ref]);

      await smoobu('POST', `/api/reservations/${row.booking_id}/messages/send-message-to-host`, {
        subject: 'WhatsApp reply',
        messageBody: `WhatsApp from ${ev.sender_name || 'guest'}: ${ev.text || 'photo or file - open HeyDoot'}`,
        internal: true, // hidden from the guest
      });
    } else if (ev.event === 'hd.message.status' &amp;&amp; ev.status === 'failed') {
      await smoobu('POST', `/api/reservations/${row.booking_id}/messages/send-message-to-host`, {
        subject: 'WhatsApp not delivered',
        messageBody: `The WhatsApp to this guest failed (${ev.send_error || 'unknown'}). Contact them through Smoobu instead.`,
        internal: true,
      });
    }
  } catch (e) {
    console.error('heydoot event failed', ev.event, e);
  }
});</code></pre>

                        <p style="color:#4a5568; margin-top: 12px;">
                            Add <code class="hubspot-code-1">CREATE TABLE seen_refs (ref TEXT PRIMARY KEY);</code> next
                            to
                            <code class="hubspot-code-1">smoobu_chats</code>.
                        </p>
                        <p style="color:#4a5568; margin-top: 12px;">
                            <strong>Answering the guest.</strong> The host replies from the HeyDoot inbox, where the
                            full WhatsApp chat lives. Smoobu's own "send to guest" goes through the booking channel
                            (Airbnb, Booking.com, email), not WhatsApp.
                        </p>
                        <p style="color:#4a5568; margin-top: 12px;">
                            <strong>Disconnected line.</strong> On <code
                                class="hubspot-code-1">hd.number.disconnected</code>, alert whoever
                            looks after WhatsApp (email, Slack): nothing can be sent until the line is reconnected in
                            HeyDoot.
                        </p>
                        <p style="color:#4a5568; margin-top: 12px;">
                            <strong>Retries and duplicates.</strong> HeyDoot retries a delivery without a 2xx 6 more
                            times over about 50 minutes. The <code class="hubspot-code-1">seen_refs</code> table stops a
                            reply from appearing
                            twice in Smoobu.
                        </p>
                    </div>

                    <!-- Errors, limits, retries -->
                    <div id="errors-limits" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8effd; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-exclamation-triangle" style="color: #2563EB; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Errors, limits and retries</h2>
                        </div>
                        <p style="color:#4a5568; margin-bottom:16px;">
                            Retry only temporary errors, always with the same <code
                                class="hubspot-code-1">dispatch_id</code>; the relay builds
                            it from booking id + message kind, so a retry never double-sends.
                        </p>

                        <div style="overflow-x:auto; margin-bottom: 24px;">
                            <table class="smoobu-table">
                                <thead>
                                    <tr>
                                        <th>From</th>
                                        <th>HTTP</th>
                                        <th>Error</th>
                                        <th>Cause</th>
                                        <th>What to do</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>HeyDoot</td>
                                        <td>400</td>
                                        <td><code class="hubspot-code-1">invalid_request</code>, <code
                                                class="hubspot-code-1">invalid_recipient</code></td>
                                        <td>phone without country code, or too short</td>
                                        <td>check <code class="hubspot-code-1">DEFAULT_COUNTRY_CODE</code> and the
                                            booking's phone</td>
                                    </tr>
                                    <tr>
                                        <td>HeyDoot</td>
                                        <td>401</td>
                                        <td><code class="hubspot-code-1">unauthorized</code></td>
                                        <td>token wrong or revoked</td>
                                        <td>update <code class="hubspot-code-1">HEYDOOT_TOKEN</code></td>
                                    </tr>
                                    <tr>
                                        <td>HeyDoot</td>
                                        <td>402</td>
                                        <td><code class="hubspot-code-1">api_not_licensed</code>, <code
                                                class="hubspot-code-1">api_quota_exceeded</code></td>
                                        <td>no API access on the plan, or quota used up</td>
                                        <td>wait for <code class="hubspot-code-1">resets_at</code>, or upgrade</td>
                                    </tr>
                                    <tr>
                                        <td>HeyDoot</td>
                                        <td>403</td>
                                        <td><code class="hubspot-code-1">forbidden</code>, <code
                                                class="hubspot-code-1">license_inactive</code></td>
                                        <td>read-only token, or the organisation can't send</td>
                                        <td>use a Read &amp; Send token / contact the HeyDoot admin</td>
                                    </tr>
                                    <tr>
                                        <td>HeyDoot</td>
                                        <td>422</td>
                                        <td><code class="hubspot-code-1">recipient_opted_out</code></td>
                                        <td>guest is on the Do-Not-Contact list</td>
                                        <td>don't retry</td>
                                    </tr>
                                    <tr>
                                        <td>HeyDoot</td>
                                        <td>429</td>
                                        <td><code class="hubspot-code-1">rate_limited</code></td>
                                        <td>over 600 requests a minute</td>
                                        <td>wait <code class="hubspot-code-1">Retry-After</code> seconds</td>
                                    </tr>
                                    <tr>
                                        <td>HeyDoot</td>
                                        <td>502 / 503</td>
                                        <td><code class="hubspot-code-1">connector_error</code></td>
                                        <td>WhatsApp line issue</td>
                                        <td>retry after 2, 4, 8 s</td>
                                    </tr>
                                    <tr>
                                        <td>Smoobu</td>
                                        <td>401</td>
                                        <td><code class="hubspot-code-1">bad signature</code></td>
                                        <td>clock more than 5 min off, or a reused nonce</td>
                                        <td>sync the server clock (NTP); new nonce per call</td>
                                    </tr>
                                    <tr>
                                        <td>Smoobu</td>
                                        <td>429</td>
                                        <td>over 700 requests a minute</td>
                                        <td>too many calls</td>
                                        <td>wait until <code class="hubspot-code-1">X-RateLimit-Retry-After</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p style="color:#4a5568; margin-bottom:12px;">
                            <strong>Failed webhook work.</strong> The relay answers 200 before working, so neither side
                            retries a failure inside the relay. Log failures and re-run them: for Smoobu events, a
                            nightly job can list bookings with <code
                                class="hubspot-code-1">modifiedFrom=&lt;yesterday&gt;</code> and send
                            anything missing from <code class="hubspot-code-1">sent_kinds</code>.
                        </p>
                        <p style="color:#4a5568; margin-bottom:12px;">
                            <strong>Plan quota:</strong> HeyDoot responses carry <code
                                class="hubspot-code-1">X-Quota-Remaining</code>; pause
                            sends when it is low.
                        </p>
                        <p style="color:#4a5568;">
                            <strong>Ban risk:</strong> booking messages go to guests who just booked and expect to hear
                            from you. Never use the relay for bulk promotions to past guests.
                        </p>
                    </div>

                    <!-- Go-live checklist -->
                    <div id="go-live" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #e8effd; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-list-check" style="color: #2563EB; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Go-live checklist</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i> HeyDoot token (Read
                                    &amp; Send), number ID and Smoobu key + secret are relay env variables, not in code
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i> HeyDoot API Access is
                                    on, with a plan quota that fits your bookings</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i> Smoobu calls use HMAC
                                    signing, not the <code class="hubspot-code-1">Api-Key</code> header (it stops
                                    working on 31 October 2026)
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i> The relay server's
                                    clock is synced (Smoobu rejects timestamps more than 5 minutes off)</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i> The Smoobu webhook URL
                                    contains <code class="hubspot-code-1">RELAY_PATH_SECRET</code>, and the relay
                                    re-reads each booking from
                                    the API</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i>
                                    <code class="hubspot-code-1">DEFAULT_COUNTRY_CODE</code> matches where most guests'
                                    national numbers come
                                    from
                                </li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i> One test booking on
                                    your own phone produced the confirmation, and your WhatsApp reply showed up in
                                    Smoobu</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i> The daily check-in job
                                    runs once a day and skips bookings already reminded</li>
                                <li style="margin-bottom: 12px; display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i> <code class="hubspot-code-1">seen_refs</code>
                                    and <code class="hubspot-code-1">smoobu_chats</code> live in a real database, not
                                    memory</li>
                                <li style="display: flex; gap: 8px;"><i class="fas fa-check-circle"
                                        style="color: #2563EB;"></i> Someone is alerted on
                                    <code class="hubspot-code-1">hd.number.disconnected</code> and on failed sends
                                </li>
                            </ul>
                            <p style="color:#4a5568; margin-top: 12px;">
                                <strong>Not tested yet.</strong> The HeyDoot calls match HeyDoot's code, and the Smoobu
                                calls follow Smoobu's API docs, but the relay hasn't run against a real Smoobu account.
                                Test with a test booking first, especially the HMAC signing and how your channels pass
                                guest phone numbers.
                            </p>
                            <p style="color:#6b7280; margin-top: 10px; font-size:0.85rem;"><em>Sources: Smoobu API
                                    documentation (authentication, reservations, messages, webhooks)</em></p>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div id="faq-smoobu" style="margin-top: 48px;">
                        <h3 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 24px;"><i
                                class="fas fa-question-circle" style="color: #2563EB;"></i> FAQs</h3>

                        <div class="faq-item">
                            <div class="faq-question">Why do I need a relay between Smoobu and HeyDoot? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Smoobu webhooks can only call a URL; they can't add HeyDoot's Bearer
                                token or reshape the data. Smoobu also doesn't sign its webhooks, so the relay treats
                                each one as a hint and fetches the booking from Smoobu's API before sending anything.
                                The relay is about 150 lines of Node.js and holds the only HeyDoot token and Smoobu
                                key.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Do I need the Smoobu Api-Key header? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">No. Use HMAC signing (<code class="hubspot-code-1">X-API-Key</code>,
                                <code class="hubspot-code-1">X-Timestamp</code>,
                                <code class="hubspot-code-1">X-Nonce</code>, <code
                                    class="hubspot-code-1">X-Signature</code>). The old <code
                                    class="hubspot-code-1">Api-Key</code> header is
                                deprecated and stops working on 31 October 2026.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Will every channel's guest phone work on WhatsApp? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">No. Smoobu only has the phone the booking channel passed on. Some
                                channels share no number, or a masked one that isn't on WhatsApp. Those sends fail with
                                <code class="hubspot-code-1">not_on_whatsapp</code> in the status webhook; fall back to
                                Smoobu's own messaging
                                for them.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">How are check-in reminders sent the day before arrival? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Smoobu has no "day before" webhook, so run a daily job (e.g. 10:00
                                local time) that lists tomorrow's arrivals and sends each one once, tracked by
                                <code class="hubspot-code-1">sent_kinds</code> in <code
                                    class="hubspot-code-1">smoobu_chats</code>.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Where do guest replies appear? <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">As an internal host message on the booking in Smoobu's messages.
                                It's visible to the host only, so the guest doesn't see it. The host answers from the
                                HeyDoot inbox, where the full WhatsApp chat lives.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">How do you avoid sending the same message twice? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">The relay builds a deterministic <code
                                    class="hubspot-code-1">dispatch_id</code> from the
                                booking id + message kind (e.g. <code
                                    class="hubspot-code-1">smoobu-1234-confirm</code>), so a repeated webhook
                                or a retry never sends twice. It also tracks <code
                                    class="hubspot-code-1">sent_kinds</code> per booking and
                                de-duplicates replies with a <code class="hubspot-code-1">seen_refs</code> table.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Can I use this for bulk promotions to past guests? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">No. Booking messages go to guests who just booked and expect to hear
                                from you. Never use the relay for bulk promotions to past guests — it risks your
                                WhatsApp line being banned.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Is there a free trial available? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Yes, we offer a 14-day free trial with full Smoobu integration
                                features.</div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div id="cta"
                        style="background: linear-gradient(115deg, #0b1c3f, #1e3a8a); border-radius: 32px; padding: 48px; text-align: center; margin: 56px 0 32px; color: white;">
                        <i class="fab fa-whatsapp" style="font-size: 56px; color: #25D366; margin-bottom: 16px;"></i>
                        <h2 style="font-size: 2rem; font-weight: 800;">Send Booking WhatsApps from Smoobu</h2>
                        <p style="margin-top: 16px; opacity: 0.9;">Deploy the relay, drop your secrets into environment
                            variables, add the two webhook URLs, and your bookings start sending WhatsApp
                            automatically.</p>
                        <div
                            style="display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; margin-top: 32px;">
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-code"></i> Node.js Relay</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-shield-alt"></i> Signed Webhooks</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-calendar-check"></i> Check-in Reminders</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-inbox"></i> Replies in Smoobu Inbox</span>
                        </div>
                        <div style="margin-top: 36px;">
                            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20the%20HeyDoot%20Smoobu%20WhatsApp%20integration"
                                class="btn btn-lg" style="background: white; color: #2563EB; font-weight: 700;"><i
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

                    <a href="<?php echo BASE_URL; ?>/smoobu-api.php" class="utility-item utility-link">
                        <i class="fas fa-code"></i>
                        Smoobu API Docs
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