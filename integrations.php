<?php
$page_meta = [
    'title' => 'Integrations - HeyDoot WhatsApp CRM',
    'meta_title' => 'Integrations | HeyDoot - Connect WhatsApp with Your Favorite Tools',
    'description' => 'Connect HeyDoot with Slack, Teams, HubSpot, Salesforce, Zapier, and 5000+ apps. Build powerful WhatsApp workflows with our REST API and webhooks.',
    'og_title' => 'Integrations - HeyDoot WhatsApp CRM',
    'og_description' => 'Seamlessly integrate WhatsApp with your existing tools. CRM, collaboration, automation, and more.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations',
    'twitter_title' => 'Integrations - HeyDoot WhatsApp CRM',
    'twitter_description' => 'Connect, automate, and scale with HeyDoot integrations.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',
    'canonical' => 'https://heydoot.com/integrations'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "WebPage",
    "name" => "HeyDoot Integrations",
    "url" => "https://heydoot.com/integrations",
    "description" => "Connect HeyDoot WhatsApp CRM with your favorite business tools.",
    "isPartOf" => [
        "@type" => "WebSite",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ]
];

$page_gtag_id = 'G-Q64SDSY0Y4';

include 'components/header.php';
?>
<?php
require_once 'config.php';
include 'components/navbar.php';
?>

<!-- Hero Section -->
<section style="background: var(--bg-gradient-green); padding: 80px 0 60px;">
    <div class="floating-dots"></div>
    <div class="container-fluid">
        <div style="text-align: center;">
            <span class="security-badge"
                style="background: rgba(37, 211, 102, 0.1); color: var( --wa-green); margin-bottom: 20px; display: inline-block;">
                <i class="fas fa-puzzle-piece"></i> 50+ Integrations & Growing
            </span>
            <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 20px;">Seamless <span
                    style="color: var( --wa-green);">Integrations</span></h1>
            <p class="hero-desc" style="font-size: 1.2rem; color: #cdddef; max-width: 700px; margin: 0 auto;">Connect
                HeyDoot with your favorite tools and supercharge your WhatsApp workflow. No coding required.</p>
            <div class="cta-group" style="margin-top: 32px;">
                <a href="javascript:void(0)" class="btn btn-primary btn-lg"
                    style="background: var( --wa-green); border-color: var( --wa-green);">
                    <i class="fas fa-search"></i> Explore All Integrations
                </a>
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27m%20interested%20in%20custom%20integrations%20for%20HeyDoot"
                    class="btn btn-secondary btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i> Request Custom Integration
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section style="background: #fff; border-bottom: 1px solid #eef2f6;">
    <div class="container-fluid">
        <div class="stats-row"
            style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: 30px; text-align: center;">
            <div class="stat-card" style="background: transparent; box-shadow: none;">
                <div class="stat-number" style="font-size: 2.5rem;">50+</div>
                <p style="margin: 0;">Native Integrations</p>
            </div>
            <div class="stat-card" style="background: transparent; box-shadow: none;">
                <div class="stat-number" style="font-size: 2.5rem;">5000+</div>
                <p style="margin: 0;">Apps via Zapier</p>
            </div>
            <div class="stat-card" style="background: transparent; box-shadow: none;">
                <div class="stat-number" style="font-size: 2.5rem;">24/7</div>
                <p style="margin: 0;">Sync Reliability</p>
            </div>
            <div class="stat-card" style="background: transparent; box-shadow: none;">
                <div class="stat-number" style="font-size: 2.5rem;">99.9%</div>
                <p style="margin: 0;">API Uptime</p>
            </div>
        </div>
    </div>
</section>

<!-- All Integrations Section -->
<section id="all-integrations" class="section-container" style="padding: 60px 0; background: #fff;">
    <div class="container-fluid">
        <div style="text-align: center; margin-bottom: 48px;">
            <h2 class="section-title" style="margin-bottom: 12px;">Everything You Need, Connected</h2>
            <p class="section-sub">HeyDoot integrates seamlessly with the tools you already use</p>
        </div>

        <!-- Category: CRM -->
        <div style="margin-bottom: 60px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                <i class="fas fa-chart-line" style="font-size: 28px; color: var( --wa-teal);"></i>
                <h3 style="font-size: 1.6rem; font-weight: 700; margin: 0;">CRM & Sales Platforms</h3>
            </div>
            <div class="feature-grid"
                style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
                <div class="feature-card"
                    style="background: #F8FAFE; border-radius: 20px; padding: 24px; transition: transform 0.2s;">
                    <div class="feature-icon"
                        style="background: #fff; width: 60px; height: 60px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fab fa-salesforce" style="font-size: 32px; color: #00A1E0;"></i>
                    </div>
                    <h3>Salesforce</h3>
                    <p>Two-way sync between WhatsApp and Salesforce. Log messages, create contacts, update records, and
                        track customer journeys automatically.</p>
                    <span class="integration-badge"
                        style="display: inline-block; background: #eef2f6; padding: 4px 12px; border-radius: 20px; font-size: 0.75rem; margin-top: 12px;">Native
                        Integration</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"
                        style="background: #fff; width: 60px; height: 60px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fab fa-hubspot" style="font-size: 32px; color: #FF7A59;"></i>
                    </div>
                    <h3>HubSpot</h3>
                    <p>Sync conversations directly to HubSpot. Track customer interactions, manage leads, and enrich
                        contact profiles automatically.</p>
                    <span class="integration-badge"
                        style="display: inline-block; background: #eef2f6; padding: 4px 12px; border-radius: 20px; font-size: 0.75rem; margin-top: 12px;">Native
                        Integration</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"
                        style="background: #fff; width: 60px; height: 60px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="si si-piped" style="font-size: 32px; color: #34A85A;"></i>

                    </div>
                    <h3>Pipedrive</h3>
                    <p>Turn WhatsApp conversations into deals. Create leads, update pipelines, and track sales
                        activities without leaving HeyDoot.</p>
                    <span class="integration-badge">Native Integration</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"
                        style="background: #fff; width: 60px; height: 60px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fas fa-cloud" style="font-size: 32px; color: #F44336;"></i>
                    </div>
                    <h3>Zoho CRM</h3>
                    <p>Seamless integration with Zoho. Sync contacts, log activities, and manage customer relationships
                        from WhatsApp.</p>
                    <span class="integration-badge">Native Integration</span>
                </div>
            </div>
        </div>

        <!-- Category: Collaboration -->
        <div style="margin-bottom: 60px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                <i class="fas fa-comments" style="font-size: 28px; color: var( --wa-teal);"></i>
                <h3 style="font-size: 1.6rem; font-weight: 700; margin: 0;">Team Collaboration</h3>
            </div>
            <div class="feature-grid"
                style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fab fa-slack" style="font-size: 32px; color: #4A154B;"></i>
                    </div>
                    <h3>Slack</h3>
                    <p>Receive WhatsApp notifications and reply directly from Slack. Keep your team in the loop without
                        switching apps. Send messages, share updates, and collaborate seamlessly.</p>
                    <span class="integration-badge">Native Integration</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fab fa-microsoft" style="font-size: 32px; color: #6264A7;"></i>
                    </div>
                    <h3>Microsoft Teams</h3>
                    <p>Integrate WhatsApp conversations into Microsoft Teams. Assign chats, collaborate on responses,
                        and keep everyone aligned.</p>
                    <span class="integration-badge">Native Integration</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fab fa-discord" style="font-size: 32px; color: #5865F2;"></i>
                    </div>
                    <h3>Discord</h3>
                    <p>Bridge WhatsApp messages to Discord channels. Perfect for community managers and gaming
                        communities.</p>
                    <span class="integration-badge">Coming Soon</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-envelope" style="font-size: 32px; color: #D14836;"></i>
                    </div>
                    <h3>Email (Gmail/Outlook)</h3>
                    <p>Convert WhatsApp conversations to email tickets. Reply via email and sync responses back to
                        WhatsApp.</p>
                    <span class="integration-badge">Native Integration</span>
                </div>
            </div>
        </div>

        <!-- Category: Automation -->
        <div style="margin-bottom: 60px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                <i class="fas fa-robot" style="font-size: 28px; color: var( --wa-teal);"></i>
                <h3 style="font-size: 1.6rem; font-weight: 700; margin: 0;">Automation & iPaaS</h3>
            </div>
            <div class="feature-grid"
                style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="si si-zapier" style="font-size: 32px; color: #FF4A00;"></i>
                    </div>
                    <h3>Zapier</h3>
                    <p>Connect with 5000+ apps. Automate workflows between WhatsApp and your favorite tools. Send leads
                        to Google Sheets, create Trello cards, and more.</p>
                    <span class="integration-badge">Native Integration</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-code-branch"
                            style="font-size: 32px; color: #FF6C37;"></i></div>
                    <h3>Make (Integromat)</h3>
                    <p>Build complex visual automation scenarios. Connect WhatsApp to databases, CRMs, and any API with
                        ease.</p>
                    <span class="integration-badge">Native Integration</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-diagram-project"
                            style="font-size: 32px; color: #0052CC;"></i></div>
                    <h3>n8n</h3>
                    <p>Self-hosted automation workflows. Connect HeyDoot to your internal systems with fair-code
                        automation.</p>
                    <span class="integration-badge">Available</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-code" style="font-size: 32px; color: #2C3E50;"></i></div>
                    <h3>Webhooks</h3>
                    <p>Real-time HTTP callbacks for every event. Build your own integrations with our powerful webhook
                        system.</p>
                    <span class="integration-badge">Developer</span>
                </div>
            </div>
        </div>

        <!-- Category: Help Desk -->
        <div style="margin-bottom: 60px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                <i class="fas fa-headset" style="font-size: 28px; color: var( --wa-teal);"></i>
                <h3 style="font-size: 1.6rem; font-weight: 700; margin: 0;">Help Desk & Support</h3>
            </div>
            <div class="feature-grid"
                style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-ticket-alt" style="font-size: 32px; color: #F79F1F;"></i>
                    </div>
                    <h3>Zendesk</h3>
                    <p>Convert WhatsApp messages to Zendesk tickets. Two-way sync for seamless customer support across
                        channels.</p>
                    <span class="integration-badge">Native Integration</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-life-ring" style="font-size: 32px; color: #1E88E5;"></i>
                    </div>
                    <h3>Freshdesk</h3>
                    <p>WhatsApp to Freshdesk integration. Automate ticket creation, updates, and resolution tracking.
                    </p>
                    <span class="integration-badge">Native Integration</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-comment-dots"
                            style="font-size: 32px; color: #006B5E;"></i></div>
                    <h3>Intercom</h3>
                    <p>Connect WhatsApp to Intercom. Manage all customer conversations from one unified inbox.</p>
                    <span class="integration-badge">Coming Soon</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-headset" style="font-size: 32px; color: #4F46E5;"></i>
                    </div>
                    <h3>Help Scout</h3>
                    <p>Sync WhatsApp conversations to Help Scout. Provide exceptional support across channels.</p>
                    <span class="integration-badge">Available</span>
                </div>
            </div>
        </div>

        <!-- Category: E-commerce -->
        <div style="margin-bottom: 60px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                <i class="fas fa-shopping-cart" style="font-size: 28px; color: var( --wa-teal);"></i>
                <h3 style="font-size: 1.6rem; font-weight: 700; margin: 0;">E-commerce & Payments</h3>
            </div>
            <div class="feature-grid"
                style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fab fa-shopify" style="font-size: 32px; color: #7AB55C;"></i>
                    </div>
                    <h3>Shopify</h3>
                    <p>Sync orders, send abandoned cart reminders, and provide order updates via WhatsApp.</p>
                    <span class="integration-badge">Native Integration</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fab fa-wordpress" style="font-size: 32px; color: #96588A;"></i>
                    </div>
                    <h3>WooCommerce</h3>
                    <p>Connect your WordPress store. Send order confirmations, shipping updates, and support messages.
                    </p>
                    <span class="integration-badge">Available</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fab fa-stripe" style="font-size: 32px; color: #635BFF;"></i>
                    </div>
                    <h3>Stripe</h3>
                    <p>Send payment links, invoice reminders, and payment confirmations via WhatsApp.</p>
                    <span class="integration-badge">Available</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-credit-card"
                            style="font-size: 32px; color: #00457E;"></i></div>
                    <h3>Razorpay</h3>
                    <p>Indian payment gateway integration. Collect payments, send invoices, and automate reminders.</p>
                    <span class="integration-badge">Native Integration</span>
                </div>
            </div>
        </div>

        <!-- Category: Marketing -->
        <div style="margin-bottom: 60px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                <i class="fas fa-chart-simple" style="font-size: 28px; color: var( --wa-teal);"></i>
                <h3 style="font-size: 1.6rem; font-weight: 700; margin: 0;">Marketing & Analytics</h3>
            </div>
            <div class="feature-grid"
                style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fab fa-mailchimp" style="font-size: 32px; color: #FFE01B;"></i>
                    </div>
                    <h3>Mailchimp</h3>
                    <p>Sync WhatsApp contacts to Mailchimp audiences. Run email and WhatsApp campaigns together.</p>
                    <span class="integration-badge">Available</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-table" style="font-size: 32px; color: #4285F4;"></i>
                    </div>
                    <h3>Google Sheets</h3>
                    <p>Log conversations, export analytics, and build custom reports directly to Google Sheets.</p>
                    <span class="integration-badge">Native Integration</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fab fa-google" style="font-size: 32px; color: #4285F4;"></i>
                    </div>
                    <h3>Google Analytics</h3>
                    <p>Track WhatsApp campaign performance, click-through rates, and conversion metrics.</p>
                    <span class="integration-badge">Available</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-chart-line" style="font-size: 32px; color: #FF3366;"></i>
                    </div>
                    <h3>Klaviyo</h3>
                    <p>E-commerce marketing automation. Sync WhatsApp conversations and build omnichannel flows.</p>
                    <span class="integration-badge">Coming Soon</span>
                </div>
            </div>
        </div>

        <!-- Category: Developer Tools -->
        <div style="margin-bottom: 60px;">
            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                <i class="fas fa-terminal" style="font-size: 28px; color: var( --wa-teal);"></i>
                <h3 style="font-size: 1.6rem; font-weight: 700; margin: 0;">Developer Tools</h3>
            </div>
            <div class="feature-grid"
                style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-code" style="font-size: 32px; color: #2C3E50;"></i></div>
                    <h3>REST API</h3>
                    <p>Full-featured REST API. Send/receive messages, manage contacts, and automate everything.
                        Comprehensive documentation included.</p>
                    <span class="integration-badge">Developer</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fas fa-plug" style="font-size: 32px; color: #FF6C37;"></i></div>
                    <h3>WebSocket API</h3>
                    <p>Real-time event streaming. Get instant notifications for new messages, status updates, and more.
                    </p>
                    <span class="integration-badge">Developer</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fab fa-python" style="font-size: 32px; color: #3776AB;"></i>
                    </div>
                    <h3>Python SDK</h3>
                    <p>Official Python library. Build custom WhatsApp bots and automations with ease.</p>
                    <span class="integration-badge">Open Source</span>
                </div>
                <div class="feature-card" style="background: #F8FAFE; border-radius: 20px; padding: 24px;">
                    <div class="feature-icon"><i class="fab fa-node-js" style="font-size: 32px; color: #339933;"></i>
                    </div>
                    <h3>Node.js SDK</h3>
                    <p>Official Node.js library. Integrate WhatsApp into your JavaScript applications effortlessly.</p>
                    <span class="integration-badge">Open Source</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- API Section -->
<section id="api" class="section-container" style="background: #FDF7F0; padding: 60px 0;">
    <div class="container-fluid">
        <div style="text-align: center; margin-bottom: 48px;">
            <span class="security-badge"><i class="fas fa-code"></i> Powerful & Flexible</span>
            <h2 class="section-title" style="margin-bottom: 12px;">REST API & Webhooks</h2>
            <p class="section-sub">Build custom integrations with our developer-friendly APIs</p>
        </div>
        <div class="automation-grid">
            <div class="automation-card">
                <div class="automation-icon">
                    <i class="fas fa-paper-plane"></i>
                </div>
                <h3>Send Messages</h3>
                <p style="margin-bottom: 15px;">Programmatically send text, images, documents, and templates via API.
                </p>
                <code
                    style="background: #f0f0f0; padding: 8px 12px; border-radius: 8px; display: inline-block; font-size: 0.8rem;">POST /api/v1/messages/send</code>
            </div>
            <div class="automation-card">
                <div class="automation-icon">
                    <i class="fas fa-download"></i>
                </div>
                <h3>Receive Webhooks</h3>
                <p style="margin-bottom: 15px;">Get real-time notifications for incoming messages, status updates, and
                    events.</p>
                <code
                    style="background: #f0f0f0; padding: 8px 12px; border-radius: 8px; display: inline-block; font-size: 0.8rem;">POST /webhook/incoming</code>
            </div>
            <div class="automation-card">
                <div class="automation-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Manage Contacts</h3>
                <p style="margin-bottom: 15px;">Create, update, and sync contact lists programmatically.</p>
                <code
                    style="background: #f0f0f0; padding: 8px 12px; border-radius: 8px; display: inline-block; font-size: 0.8rem;">GET /api/v1/contacts</code>
            </div>
            <div class="automation-card">
                <div class="automation-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Analytics API</h3>
                <p style="margin-bottom: 15px;">Fetch conversation metrics, agent performance, and engagement data.</p>
                <code
                    style="background: #f0f0f0; padding: 8px 12px; border-radius: 8px; display: inline-block; font-size: 0.8rem;">GET /api/v1/analytics</code>
            </div>
        </div>
        <div style="text-align: center; margin-top: 40px;">
            <a href="javascript:void(0)" class="btn btn-primary btn-lg"
                style="background: var( --wa-teal); border-color: var( --wa-teal);">
                <i class="fas fa-book-open"></i> View API Documentation
            </a>
        </div>
    </div>
</section>

<!-- Custom Integration CTA -->
<section style="background: linear-gradient(115deg, #2d1b28, #4a2c42); padding: 80px 0;">
    <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; text-align: center;">
        <h2 style="color: white; font-size: 2.2rem; margin-bottom: 20px;">Need a custom integration?</h2>
        <p style="color: #e0e0e0; font-size: 1.1rem; max-width: 600px; margin: 0 auto 32px;">Don't see your tool listed?
            Our team can build a custom integration for your specific needs.</p>
        <div class="cta-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%20need%20a%20custom%20integration%20for%20HeyDoot"
                class="btn btn-outline-light btn-lg"
                style="border: 2px solid white; color: white; background: transparent;" target="_blank">
                <i class="fab fa-whatsapp"></i> Request Custom Integration
            </a>
            <!-- <a href="mailto:sales@heydoot.com" class="btn btn-cta-white btn-lg"
                style="background: white; color: #1a2a3a;">
                <i class="fas fa-envelope"></i> Email Sales Team
            </a> -->
            <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>" class=" btn btn-cta-white btn-lg
                trial-btn"><i class="fas fa-calendar-alt"></i>
                Book Demo <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- Integration Benefits -->
<section style="padding: 60px 0; background: #fff;">
    <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 48px;">
            <h2 class="section-title">Why Integrate with HeyDoot?</h2>
            <p class="section-sub">Seamless connections that transform your workflow</p>
        </div>
        <div class="benefits-grid"
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            <div style="text-align: center; padding: 20px;">
                <i class="fas fa-clock" style="font-size: 48px; color: var( --wa-teal); margin-bottom: 16px;"></i>
                <h3>Save Time</h3>
                <p style="color: #5a6b7e;">Automate repetitive tasks and eliminate manual data entry across platforms.
                </p>
            </div>
            <div style="text-align: center; padding: 20px;">
                <i class="fas fa-chart-line" style="font-size: 48px; color: var( --wa-teal); margin-bottom: 16px;"></i>
                <h3>Increase Efficiency</h3>
                <p style="color: #5a6b7e;">Streamline communication and reduce context switching between apps.</p>
            </div>
            <div style="text-align: center; padding: 20px;">
                <i class="fas fa-shield-alt" style="font-size: 48px; color: var( --wa-teal); margin-bottom: 16px;"></i>
                <h3>Secure & Reliable</h3>
                <p style="color: #5a6b7e;">Enterprise-grade security with encrypted data transmission and storage.</p>
            </div>
            <div style="text-align: center; padding: 20px;">
                <i class="fas fa-expand-alt" style="font-size: 48px; color: var( --wa-teal); margin-bottom: 16px;"></i>
                <h3>Scalable</h3>
                <p style="color: #5a6b7e;">From 10 to 10,000+ conversations, our integrations scale with you.</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section-container" style="background: #F0F8FF; padding: 60px 0;">
    <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 48px;">
            <span class="security-badge" style="background: rgba(37, 211, 102, 0.1); color: var( --wa-teal);">
                <i class="fas fa-question-circle"></i> Frequently Asked Questions
            </span>
            <h2 class="section-title" style="margin-bottom: 12px;">Got Questions About Integrations?</h2>
            <p class="section-sub">Everything you need to know about connecting HeyDoot with your tools</p>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    Do I need the WhatsApp Business API for integrations?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    No! HeyDoot works with any WhatsApp number, personal or business. Our integrations work seamlessly
                    with all WhatsApp numbers without requiring API approval or monthly fees from Meta.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    How do I set up integrations?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Most integrations can be set up in minutes through our intuitive dashboard. Simply navigate to
                    Settings > Integrations, select your desired app, and follow the OAuth authentication flow. For
                    Zapier and Make, we provide pre-built connectors. Our team also offers personalized setup assistance
                    for enterprise customers.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Can I connect multiple CRMs at the same time?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Yes! HeyDoot supports simultaneous connections to multiple CRMs. You can sync different WhatsApp
                    numbers to different CRMs or route conversations based on custom rules. There's no limit to how many
                    integrations you can have active.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Is my data secure during integration?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Absolutely. All data transmitted between HeyDoot and integrated services is encrypted using TLS 1.3.
                    We never store your API keys or credentials in plain text. All connections are OAuth-based where
                    possible, and we maintain SOC2 compliance for data security.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    What if my tool isn't listed?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Don't worry! You can still connect using our REST API or webhooks. Alternatively, our team can build
                    a custom integration for your specific needs. Contact our sales team to discuss custom integration
                    requirements.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    How much do integrations cost?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    All native integrations are included in your HeyDoot subscription at no additional cost. There are
                    no hidden fees for connecting to Slack, Teams, CRMs, or automation platforms. Custom integrations
                    may require a one-time setup fee depending on complexity.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Can I sync historical WhatsApp data?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Yes, when you first connect a CRM or help desk, we can back-sync up to 90 days of conversation
                    history. For enterprise plans, we can sync up to 12 months of historical data upon request.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Do you offer real-time sync?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Absolutely. All integrations support real-time or near-real-time synchronization. Messages, contact
                    updates, and ticket changes sync within seconds across connected platforms.
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'components/footer.php'; ?>