<?php
$page_meta = [
    'title' => 'HeyDoot - WhatsApp CRM for Teams, Support & Sales',
    'meta_title' => 'HeyDoot – WhatsApp CRM for Teams, Support & Sales',
    'description' => 'HeyDoot is a powerful WhatsApp CRM platform by HashStudioz that helps businesses manage multiple WhatsApp numbers, automate replies, handle group communication, assign chats, create tickets, and scale customer support without WhatsApp Business API.',
    'og_title' => 'HeyDoot - WhatsApp CRM for Teams, Support & Sales',
    'og_description' => 'Manage multiple WhatsApp numbers in one shared inbox. Automate replies, manage groups, assign chats, create tickets, and scale your WhatsApp operations with HeyDoot.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/',
    'twitter_title' => 'HeyDoot - WhatsApp CRM for Teams, Support & Sales',
    'twitter_description' => 'Scale your WhatsApp communication with shared inboxes, AI automation, ticketing, group management, and workflow automation — no API required.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',
    'canonical' => 'https://heydoot.com/'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "SoftwareApplication",
    "name" => "HeyDoot",
    "url" => "https://heydoot.com/",
    "applicationCategory" => "BusinessApplication",
    "operatingSystem" => "Web",
    "description" => "HeyDoot is a WhatsApp CRM and shared inbox platform for sales, support, and team collaboration. Manage multiple WhatsApp numbers, automate workflows, create tickets, and scale communication without API complexity.",
    "brand" => [
        "@type" => "Brand",
        "name" => "HashStudioz"
    ],
    "offers" => [
        "@type" => "Offer",
        "price" => "0",
        "priceCurrency" => "USD"
    ],
    "creator" => [
        "@type" => "Organization",
        "name" => "HashStudioz Technologies",
        "url" => "https://www.hashstudioz.com/"
    ]
];

$page_gtag_id = 'G-Q64SDSY0Y4';

include 'components/header.php';
?>
<?php
require_once 'config.php';
// include 'components/header.php';
include 'components/navbar.php';
?>
<!-- Page Content -->

<!-- Hero Section -->
<section class="hero">
    <div class="floating-dots"></div>
    <div class="hero-header">
        <h1>Manage <span style="color: var(--wa-head);">WhatsApp Groups</span> <br> for Modern Businesses at Scale</h1>
        <p class="hero-desc">Connect multiple WhatsApp numbers to one shared inbox. Enable your team to respond
            without direct access. <strong>No Business API required.</strong></p>
        <div class="cta-group">
            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%20Doot%20team%2C%20I%27d%20like%20a%20price%20quote%20for%20the%20Doot%20License."
                class="btn btn-primary btn-lg demo-btn" target="_blank">
                <i class="fab fa-whatsapp"></i> Book a demo on WhatsApp
            </a>
            <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>" class="btn btn-secondary btn-lg trial-btn">
                <i class="fas fa-play-circle"></i> Call for free trial
            </a>
        </div>
        <div class="visual-stage">
            <div class="float-card card-1"><i class="fas fa-check-circle" style="color: var(--wa-green);"></i> Setup
                Complete</div>
            <div class="float-card card-2"><i class="fas fa-sync-alt fa-spin" style="color: var(--wa-teal);"></i>
                Syncing...</div>
            <div class="float-card card-3"><i class="fas fa-bolt" style="color: #f5b042;"></i> Live Connection</div>
            <div class="float-card card-4"><i class="fas fa-user-friends"></i> 6 members online</div>
            <div class="phone-mockup-wrapper">
                <div class="mockup-phone">
                    <img src="<?php echo BASE_URL; ?>/assets/images/m1.webp" alt="HeyDoot preview">
                </div>
            </div>
            <div class="main-overlay-card">
                <div class="overlay-item">
                    <div style="display:flex; gap:14px;">
                        <div class="icon-circle"><i class="fas fa-inbox"></i></div>
                        <div>
                            <div style="font-weight:800;">Multi-Number Inbox</div>
                            <div style="font-size:0.7rem;">Active: 3 Regions (US, UK, IN)</div>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="overlay-item" style="border-bottom:none;">
                    <div style="display:flex; gap:14px;">
                        <div class="icon-circle"><i class="fas fa-robot"></i></div>
                        <div>
                            <div style="font-weight:800;">AI Analysis</div>
                            <div style="font-size:0.7rem;">Auto-Response + Routing</div>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 1) Features Section -->
<section id="features-core" class="feature-showcase">
    <div class="container-fluid" style="width: 90%; max-width: 1280px;">
        <div style="text-align: center; margin-bottom: 20px;">
            <span class="security-badge">⚡ Next-Gen WhatsApp Toolkit</span>
            <h2 class="section-title" style="margin-bottom: 12px;">Everything you need, visually crafted</h2>
            <p class="section-sub" style="margin-bottom: 48px;">Explore the four pillars that empower your team to
                manage high-volume WhatsApp conversations without chaos.</p>
        </div>

        <!-- 1) MULTI-NUMBER INBOX -->
        <div class="feature-pair">
            <div class="feature-pair-content">
                <div class="feature-pair-badge"><i class="fas fa-inbox"></i> Unified Workspace</div>
                <h3>Multi-Number Inbox</h3>
                <p>Connect 10, 20, or 50 WhatsApp numbers into one powerful dashboard. Seamlessly switch between
                    regions, brands, or departments without logging in and out.</p>
                <ul class="feature-list-check">
                    <li><i class="fas fa-check-circle"></i> Centralized conversation hub</li>
                    <li><i class="fas fa-check-circle"></i> Real-time sync across devices</li>
                    <li><i class="fas fa-check-circle"></i> Assign & tag messages with zero friction</li>
                </ul>
            </div>
            <div class="feature-pair-image">
                <img src="<?php echo BASE_URL; ?>/assets/images/f1.webp" alt="Multi Number Inbox Dashboard"
                    style="border-radius: 32px; box-shadow: 0 20px 30px -10px rgba(0,0,0,0.1);">
            </div>
        </div>

        <!-- 2) CREATE TICKETS & TASKS -->
        <div class="feature-pair">
            <div class="feature-pair-content">
                <div class="feature-pair-badge"><i class="fas fa-ticket-alt"></i> Workflow Ops</div>
                <h3>Create Tickets & Tasks</h3>
                <p>Turn every WhatsApp message into an actionable ticket. Assign priority, set due dates, and
                    convert group discussions into trackable tasks — keep your support and sales SLAs on point.</p>
                <ul class="feature-list-check">
                    <li><i class="fas fa-check-circle"></i> One-click ticket creation</li>
                    <li><i class="fas fa-check-circle"></i> Internal notes & @mentions</li>
                    <li><i class="fas fa-check-circle"></i> Automate follow-ups based on status</li>
                </ul>
            </div>
            <div class="feature-pair-image">
                <img src="<?php echo BASE_URL; ?>/assets/images/f2.webp" alt="Tickets and Tasks inside HeyDoot">
            </div>
        </div>

        <!-- 3) MANAGE GROUPS -->
        <div class="feature-pair">
            <div class="feature-pair-content">
                <div class="feature-pair-badge"><i class="fas fa-users"></i> Community Hub</div>
                <h3>Manage Groups at Scale</h3>
                <p>Supercharge your WhatsApp group management: broadcast announcements, moderate members, assign
                    group admins, and auto-respond to frequently asked questions inside large communities without
                    chaos.</p>
                <ul class="feature-list-check">
                    <li><i class="fas fa-check-circle"></i> Group analytics & member insights</li>
                    <li><i class="fas fa-check-circle"></i> Scheduled broadcasts to multiple groups</li>
                    <li><i class="fas fa-check-circle"></i> Spam & moderation filters</li>
                </ul>
            </div>
            <div class="feature-pair-image">
                <img src="<?php echo BASE_URL; ?>/assets/images/f3.webp" alt="WhatsApp Groups Management Dashboard">
            </div>
        </div>

        <!-- 4) AUTOMATE ACTIONS -->
        <div class="feature-pair">
            <div class="feature-pair-content">
                <div class="feature-pair-badge"><i class="fas fa-robot"></i> AI + Workflow</div>
                <h3>Automate Actions</h3>
                <p>Design smart automation rules: auto-reply to common queries, route messages to the right
                    teammate, trigger webhooks, and create sequences that nurture leads — all without code.</p>
                <ul class="feature-list-check">
                    <li><i class="fas fa-check-circle"></i> Keyword + AI intent detection</li>
                    <li><i class="fas fa-check-circle"></i> Auto-assign labels & priorities</li>
                    <li><i class="fas fa-check-circle"></i> Schedule sequences & drip campaigns</li>
                </ul>
            </div>
            <div class="feature-pair-image">
                <img src="<?php echo BASE_URL; ?>/assets/images/f4.webp" alt="Automation actions workflow">
            </div>
        </div>
    </div>
</section>

<!-- 2) Smart Automation Section -->
<section id="automation" class="section-container" style="background: #FDF7F0;">
    <div class="container-fluid">
        <div style="text-align: center; margin-bottom: 20px;">
            <span class="security-badge"><i class="fas fa-microchip"></i> Intelligent Engine</span>
            <h2 class="section-title" style="margin-bottom: 12px;">Smart Automation</h2>
            <p class="section-sub" style="margin-bottom: 48px;">Let AI handle repetitive tasks so your team focuses
                on what matters — fully customizable workflows.</p>
        </div>
        <div class="automation-grid">
            <div class="automation-card">
                <div class="automation-icon"><i class="fas fa-robot"></i></div>
                <h3>Auto-Responders</h3>
                <p>Set keyword-based triggers to instantly answer FAQs, after-hours messages, or lead qualifiers —
                    reduce response time by 80%.</p>
                <span class="automation-tag"><i class="fas fa-bolt"></i> 24/7 active</span>
                <ul class="automation-feature-list">
                    <li><i class="fas fa-check-circle"></i> Custom rules & conditions</li>
                    <li><i class="fas fa-check-circle"></i> Multi-language support</li>
                </ul>
            </div>
            <div class="automation-card">
                <div class="automation-icon"><i class="fas fa-code-branch"></i></div>
                <h3>Smart Routing</h3>
                <p>AI intent detection routes messages to right agents or teams automatically. Escalate complex
                    issues to senior reps.</p>
                <span class="automation-tag"><i class="fas fa-chart-line"></i> intelligent triage</span>
                <ul class="automation-feature-list">
                    <li><i class="fas fa-check-circle"></i> Department-based assignment</li>
                    <li><i class="fas fa-check-circle"></i> Load balancing</li>
                </ul>
            </div>
            <div class="automation-card">
                <div class="automation-icon"><i class="fas fa-envelope-open-text"></i></div>
                <h3>Sequence Campaigns</h3>
                <p>Schedule drip campaigns, broadcast sequences and nurture leads across WhatsApp with visual
                    automation builder.</p>
                <span class="automation-tag"><i class="fas fa-calendar-alt"></i> time-based flows</span>
                <ul class="automation-feature-list">
                    <li><i class="fas fa-check-circle"></i> Personalize by segments</li>
                    <li><i class="fas fa-check-circle"></i> Analytics per campaign</li>
                </ul>
            </div>
        </div>
        <div style="margin-top: 48px; text-align: center;">
            <a href="tel:+91 97185 17228" class="btn btn-ghost-dark btn-md demo-btn"><i class="fas fa-cogs"></i>
                Explore all triggers <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- 3) Seamless Integrations Section -->
<section id="integrations" class="section-container" style="background: #F0F8FF;">
    <div class="container-fluid">
        <h2 class="section-title">Seamless Integrations</h2>
        <p class="section-sub">Connect HeyDoot with your favorite tools and supercharge your workflow.</p>
        <div class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="fab fa-slack"></i></div>
                <h3>Slack & Teams</h3>
                <p>Receive WhatsApp notifications and reply directly from Slack or Microsoft Teams.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fab fa-hubspot"></i></div>
                <h3>CRM Sync</h3>
                <p>Sync conversations with HubSpot, Salesforce, or Pipedrive.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-database"></i></div>
                <h3>Zapier / Make</h3>
                <p>Connect 5000+ apps: Google Sheets, Mailchimp, Webhooks — build custom automations.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4) Enterprise-Grade Security Section -->
<section id="security" class="section-container" style="background: #FDF7F0;">
    <div class="container-fluid">
        <div style="text-align: center; margin-bottom: 20px;">
            <span class="security-badge"><i class="fas fa-shield"></i> TRUST • PRIVACY • COMPLIANCE</span>
            <h2 class="section-title" style="margin-bottom: 12px;">Enterprise-Grade Security</h2>
            <p class="section-sub" style="margin-bottom: 48px;">Built with modern security architecture to protect
                your conversations, customer data, and business operations — seamlessly integrated into HeyDoot's
                ecosystem.</p>
        </div>

        <div class="security-grid-layout">
            <div class="security-content-block">
                <div class="security-point">
                    <div class="feature-icon" style="width: 10%;"><i class="fas fa-lock"></i></div>
                    <div style="width: 90%;">
                        <h4>256-bit End-to-End Encryption</h4>
                        <p>Every message, attachment, and API request is encrypted using enterprise-grade AES-256
                            standards — ensuring your data remains private and secure at every layer.</p>
                    </div>
                </div>
                <div class="security-point">
                    <div class="feature-icon" style="width: 10%;"><i class="fas fa-user-shield"></i></div>
                    <div style="width: 90%;">
                        <h4>Advanced Access Management</h4>
                        <p>Role-based permissions, multi-factor authentication, and secure admin controls that adapt
                            to your team structure.</p>
                    </div>
                </div>
                <div class="security-point">
                    <div class="feature-icon" style="width: 10%;"><i class="fas fa-server"></i></div>
                    <div style="width: 90%;">
                        <h4>Secure Cloud Infrastructure</h4>
                        <p>Hosted on highly secure cloud environments with continuous monitoring, automated backups,
                            and 99.99% uptime reliability.</p>
                    </div>
                </div>
            </div>
            <div class="security-visual">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1200&auto=format&fit=crop"
                    alt="Cyber Security Shield" class="shield-image">
            </div>
        </div>

        <div class="security-card-grid">
            <div class="security-feature-card">
                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=800&auto=format&fit=crop"
                    alt="Encryption" class="feature-image">
                <div class="feature-icon"><i class="fas fa-lock"></i></div>
                <div class="sec-card-heading">
                    <h3>End-to-End Encryption</h3>
                    <p>Military-grade encryption for messages and media, protecting every conversation from
                        unauthorized access.</p>
                </div>
            </div>
            <div class="security-feature-card">
                <img src="https://images.unsplash.com/photo-1526378722484-bd91ca387e72?q=80&w=800&auto=format&fit=crop"
                    alt="Access Control" class="feature-image">
                <div class="feature-icon"><i class="fas fa-user-check"></i></div>
                <div class="sec-card-heading">
                    <h3>Role-Based Access</h3>
                    <p>Granular permissions for agents, managers, and admins — enforce least-privilege principle.
                    </p>
                </div>
            </div>
            <div class="security-feature-card">
                <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?q=80&w=800&auto=format&fit=crop"
                    alt="Compliance" class="feature-image">
                <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="sec-card-heading">
                    <h3>GDPR & SOC2 Ready</h3>
                    <p>Compliance-focused infrastructure with audit logs, data retention controls, and secure
                        handling.</p>
                </div>
            </div>
        </div>

        <div class="security-stats-modern">
            <div class="stat-item">
                <div class="stat-number">99.99%</div>
                <div class="stat-label">Platform Uptime</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">256-bit</div>
                <div class="stat-label">Data Encryption</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Threat Monitoring</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">SOC2</div>
                <div class="stat-label">Compliance Ready</div>
            </div>
        </div>
    </div>
</section>

<!-- 5) Actionable Analytics Section -->
<section id="analytics" class="section-container" style="background: #F0F8FF;">
    <div class="container-fluid">
        <h2 class="section-title">Actionable Analytics</h2>
        <p class="section-sub">Measure performance, understand trends, and optimize your WhatsApp strategy.</p>
        <div><img src="<?php echo BASE_URL; ?>/assets/images/m3.webp"
                style="border-radius: 48px; width:100%; object-fit:cover;" alt="why-heydoot">
        </div>
        <div class="stats-row">
            <div class="stat-card">
                <div class="stat-number">98%</div>
                <p>Faster response time</p><i class="fas fa-charging-station" style="color: var(--wa-teal);"></i>
            </div>
            <div class="stat-card">
                <div class="stat-number">3x</div>
                <p>Higher engagement</p><i class="fas fa-users" style="color: var(--wa-teal);"></i>
            </div>
            <div class="stat-card">
                <div class="stat-number">24/7</div>
                <p>Automated coverage</p><i class="fas fa-clock" style="color: var(--wa-teal);"></i>
            </div>
        </div>
        <div class="feature-grid" style="margin-top: 32px;">
            <div class="feature-card"><i class="fas fa-chart-pie"
                    style="font-size: 32px; margin-bottom: 16px; color:var(--wa-teal);"></i>
                <h3>Conversation Volume</h3>
                <p>Track peak hours, busiest agents, and team workload distribution.</p>
            </div>
            <div class="feature-card"><i class="fas fa-smile"
                    style="font-size: 32px; margin-bottom: 16px; color:var(--wa-teal);"></i>
                <h3>CSAT & Sentiment</h3>
                <p>AI-driven sentiment analysis and customer satisfaction scoring.</p>
            </div>
        </div>
    </div>
</section>

<!-- 6) Why Choose HeyDoot? -->
<section id="why" class="section-container" style="background: #FDF7F0;">
    <div class="container-fluid">
        <h2 class="section-title">Why Choose HeyDoot?</h2>
        <p class="section-sub">The smarter way to handle WhatsApp at scale — without the API headaches.</p>
        <div class="why-grid">
            <div><img src="<?php echo BASE_URL; ?>/assets/images/m2.webp"
                    style="border-radius: 48px; width:100%; object-fit:cover;" alt="why-heydoot"></div>
            <ul class="why-list">
                <li>
                    <div class="feature-icon" style="margin-bottom: 0;"><i class="fas fa-bolt"></i></div>
                    <div><strong>No Official API Needed</strong><br>Use your personal or business numbers without
                        restrictions. Plug & play.</div>
                </li>
                <li>
                    <div class="feature-icon" style="margin-bottom: 0;"><i class="fas fa-globe"></i></div>
                    <div><strong>Global Teams, Local Numbers</strong><br>Manage +30 numbers from one dashboard.
                        Ideal for international brands.</div>
                </li>
                <li>
                    <div class="feature-icon" style="margin-bottom: 0;"><i class="fas fa-headset"></i></div>
                    <div><strong>Dedicated Support</strong><br>24/7 live chat and onboarding session for enterprise
                        plans.</div>
                </li>
                <li>
                    <div class="feature-icon" style="margin-bottom: 0;"><i class="fas fa-gem"></i></div>
                    <div><strong>Future-proof & Scalable</strong><br>From 5 to 500+ agents, HeyDoot grows with your
                        business.</div>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- 7) FAQ Section -->
<section id="faq" class="section-container" style="background: #F0F8FF;">
    <div class="container-fluid">
        <h2 class="section-title">Frequently Asked Questions</h2>
        <p class="section-sub">Everything you need to know about HeyDoot.</p>
        <div>
            <div class="faq-item">
                <div class="faq-question">What does "unlimited" actually mean? <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    It means exactly that. One license covers every WhatsApp number you want to connect, every agent
                    you want to invite, and every message they send. If you grow from 5 to 500 agents, the price
                    doesn't change. If you add ten new numbers next month, the price doesn't change.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Do I need the WhatsApp Business API? <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">No. Doot connects via WhatsApp Web, the same way your phone does. You can
                    scale across multiple numbers without the paperwork, template approvals, or per-conversation
                    pricing that comes with the official Business API.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">How quickly can we go live? <i class="fas fa-chevron-down"></i></div>
                <div class="faq-answer">Most customers are up and running within 24 hours of the first WhatsApp
                    message. We provision your dedicated instance, walk you through the QR connection on a call, and
                    help onboard your first batch of agents the same day.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">What happens if WhatsApp disconnects? <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">Every message is persisted to your instance the moment it arrives. If a
                    WhatsApp session drops, your team keeps working — viewing history, updating CRM fields,
                    preparing replies. When it reconnects, queued messages fire out and nothing is ever lost.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Can I migrate away later? <i class="fas fa-chevron-down"></i></div>
                <div class="faq-answer">Yes, any time. We'll hand over a full data export — contacts, chat history,
                    pipeline, quotations, the lot. No proprietary formats, no exit fees, no "contact your account
                    manager." We hope you stay, but we won't hold your data hostage.
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Is it secure? <i class="fas fa-chevron-down"></i></div>
                <div class="faq-answer">Absolutely. Messages are encrypted end-to-end, and we never store your chat
                    history beyond your retention policy.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Can multiple team members use the same number? <i
                        class="fas fa-chevron-down"></i></div>
                <div class="faq-answer">Yes, the shared inbox allows unlimited agents to respond from one number
                    simultaneously.</div>
            </div>
        </div>
</section>

<!-- 8) Image -->
<section class="section-container" style="background: #FDF7F0;">
    <div class="container-fluid"><img src="<?php echo BASE_URL; ?>/assets/images/m4.webp"
            style="border-radius: 48px; width:100%;" alt="footer visual"
            onerror="this.src='https://placehold.co/1200x300/ffffff/128C7E?text=HeyDoot+Trusted+by+Teams';"></div>
</section>

<!-- 9) CTA Section -->
<section class="section-container" style="background: #F0F8FF;">
    <div class="container-fluid">
        <div class="cta-section">
            <h2>Ready to scale your WhatsApp communication?</h2>
            <p>Join hundreds of teams who’ve upgraded to HeyDoot — start your free trial today.</p>
            <div class="cta-buttons">
                <a href="https://wa.me/919500069296?text=Hi%20Doot%20team%2C%20I%27d%20like%20a%20price%20quote%20for%20the%20Doot%20License.%0A%0ATeam%20size%3A%20%0AExpected%20numbers%3A%20%0AUse%20case%3A%20"
                    class="btn btn-outline-light btn-lg demo-btn"><i class="fab fa-whatsapp"></i> Chat with
                    sales</a>
                <a href="tel:+91 97185 17228" class="btn btn-cta-white btn-lg trial-btn"><i
                        class="fas fa-calendar-alt"></i> Book Demo <i class="fas fa-arrow-right"></i></a>
            </div>
            <p style="margin-top: 28px; font-size:0.85rem;">No credit card required. Free 14-day trial.</p>
        </div>
    </div>
</section>
<!-- Page Content Ends here -->


<?php include 'components/footer.php'; ?>