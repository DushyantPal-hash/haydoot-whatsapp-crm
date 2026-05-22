<?php
require_once dirname(__DIR__) . '/config.php';

$page_meta = [
    'title' => 'Zapier WhatsApp Integration | HeyDoot',
    'meta_title' => 'Zapier WhatsApp Integration – Connect Apps with WhatsApp Using HeyDoot',
    'description' => 'Connect Zapier with WhatsApp using HeyDoot and automate notifications, alerts, lead updates, customer communication, and workflows across thousands of apps without coding.',

    'og_title' => 'Zapier WhatsApp Integration | HeyDoot',
    'og_description' => 'Integrate Zapier with WhatsApp using HeyDoot. Automate workflows, app notifications, lead alerts, customer updates, and business communication instantly.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations/zapier.php',

    'twitter_title' => 'Zapier WhatsApp Integration | HeyDoot',
    'twitter_description' => 'Automate WhatsApp notifications and workflows with Zapier + HeyDoot. Connect thousands of apps and streamline customer communication.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',

    'canonical' => 'https://heydoot.com/integrations/zapier.php'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => "Zapier WhatsApp Integration",
    "serviceType" => "WhatsApp Integration Service",
    "provider" => [
        "@type" => "Organization",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ],
    "description" => "Integrate Zapier with WhatsApp using HeyDoot to automate notifications, app workflows, customer communication, lead alerts, and business messaging across multiple platforms.",
    "areaServed" => "Worldwide",
    "url" => "https://heydoot.com/integrations/zapier.php",
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

<main>
    <style>
        .orange-icon {
            background: #ffece3;
            color: #FF4A00;
        }

        .automation-card:hover .orange-icon {
            background: #FF4A00;
            color: white;
            transform: scale(0.98);
        }
    </style>

    <!-- Hero Section with Zapier flavor -->
    <section class="hero" style="background: linear-gradient(135deg, #0a1c1a 0%, #2d2a1f 100%);">
        <div class="floating-dots"></div>
        <div style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div
                style="display: inline-block; background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); padding: 6px 18px; border-radius: 60px; margin-bottom: 24px;">
                <span style="color: #FF4A00; font-weight: 700;"><i class="fas fa-bolt"></i> Official Zapier
                    Partner</span>
            </div>
            <h1 style="color: white;">Connect <span style="color: #FF4A00;">HeyDoot</span> <br>to 6,000+ apps via
                <span style="color: #FF4A00;">Zapier</span>
            </h1>
            <p class="hero-desc">Automate WhatsApp messages, create leads, sync conversations — no code. Trigger actions
                across your entire stack.</p>
            <div class="cta-group">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20HeyDoot%20features"
                    class="btn btn-zapier btn-lg" style="background: #FF4A00;"><i class="fas fa-bolt"></i>
                    Connect to Zapier</a>
                <a href="javascript:void(0)" class="btn btn-secondary btn-lg"><i class="fas fa-play-circle"></i> Watch
                    Demo</a>
            </div>
        </div>
        <div class="visual-stage" style="margin-top: 20px;">
            <div class="float-card card-1"><i class="fab fa-whatsapp" style="color:#25D366; font-size: 22px;"></i>
                <span>New message → Zap</span>
            </div>
            <div class="float-card card-2"><i class="fas fa-envelope-open-text" style="color:#FF4A00;"></i> <span>Email
                    to WhatsApp</span></div>
            <div class="mockup-phone"
                style="width: 65%; margin: 0 auto; background: #1e1e2a; border-radius: 48px; padding: 8px;">
                <div style="background: #2a2a35; border-radius: 40px; padding: 30px 20px; text-align: center;">
                    <div style=" display: flex; justify-content: center; align-items: center;">
                        <!-- <i class="fas fa-bolt" style="font-size: 48px; color: #FF4A00;"></i> -->
                        <img src="<?php echo BASE_URL; ?>/assets/icons/zapier-orange.svg" alt="Zapier"
                            style="width: 10%;">
                        <i class="fas fa-plus" style="margin: 0 20px; color: white;"></i>
                        <i class="fab fa-whatsapp" style="font-size: 48px; color: #25D366;"></i>
                    </div>
                    <p style="color: #aaa; margin-top: 16px;">2,000+ tasks / month · realtime sync</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Integration Container -->
    <section style="padding: 40px 0;">
        <div class="container-fluid">

            <!-- Status Banner -->
            <div
                style="background: linear-gradient(105deg, #fff1e6 0%, #fff8f0 100%); border-left: 5px solid #FF4A00; border-radius: 20px; padding: 20px 28px; margin-bottom: 48px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                <div>
                    <i class="fas fa-bolt" style="color: #FF4A00; margin-right: 12px;"></i>
                    <strong>HeyDoot + Zapier integration is live and fully certified.</strong>
                    <span style="color: #4b5563;"> Connect your HeyDoot account with Zapier to unlock 6000+
                        automations.</span>
                    <a href="javascript:void(0)" style="color: #FF4A00; font-weight: 600;"> Start building Zaps →</a>
                </div>
                <div>
                    <a href="javascript:void(0)"
                        style="background: #f3f4f6; padding: 8px 18px; border-radius: 40px; font-size: 0.85rem;"><i
                            class="fas fa-headset"></i> Troubleshooting: Zap not triggering?</a>
                </div>
            </div>

            <!-- Two-column layout -->
            <div style="display: flex; gap: 48px; flex-wrap: wrap;">
                <!-- Sidebar -->
                <aside style="flex: 0.8; min-width: 240px;">
                    <div
                        style="position: sticky; top: 100px; background: white; border-radius: 28px; padding: 24px; box-shadow: var(--card-shadow); border: 1px solid rgba(0,0,0,0.04);">
                        <h4 style="font-weight: 700; margin-bottom: 20px; font-size: 1.1rem;"><i class="fas fa-bolt"
                                style="color: #FF4A00; margin-right: 8px;"></i> On this page</h4>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
                            <li><a href="#prerequisites-zapier" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-check-circle" style="color: #FF4A00; width: 22px;"></i>
                                    Prerequisites</a></li>
                            <li><a href="#steps-zapier" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-link" style="color: #FF4A00;"></i> Steps to connect</a></li>
                            <li><a href="#what-can-be-done-zapier" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-magic" style="color: #FF4A00;"></i> What can be done?</a></li>
                            <li style="margin-left: 20px;"><a href="#trigger-whatsapp" style="font-size: 0.85rem;"> 1.
                                    Trigger: New WhatsApp message</a></li>
                            <li style="margin-left: 20px;"><a href="#action-send" style="font-size: 0.85rem;"> 2.
                                    Action: Send WhatsApp message</a></li>
                            <li style="margin-left: 20px;"><a href="#contact-sync" style="font-size: 0.85rem;"> 3. Sync
                                    contacts & media</a></li>
                            <li style="margin-left: 20px;"><a href="#template-workflow" style="font-size: 0.85rem;"> 4.
                                    Template-based campaigns</a></li>
                            <li style="margin-left: 20px;"><a href="#multi-step" style="font-size: 0.85rem;"> 5.
                                    Multi-step Zaps (CRM + WhatsApp)</a></li>
                            <li><a href="#zapier-faq" style="color: #2c3e2f;"><i class="fas fa-question-circle"></i>
                                    FAQs</a></li>
                            <li><a href="#done-zapier" style="color: #2c3e2f;"><i class="fas fa-check-double"></i> Done
                                </a></li>
                        </ul>
                    </div>
                </aside>

                <!-- Main Content -->
                <main style="flex: 2.5; min-width: 280px;">

                    <!-- Prerequisites Section -->
                    <div id="prerequisites-zapier" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #fff0e6; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-clipboard-list" style="color: #FF4A00; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Prerequisites</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: #FF4A00;"></i> Active HeyDoot account
                                    (any paid plan includes Zapier access)</li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: #FF4A00;"></i> Zapier account (Free
                                    tier works, but recommended Starter or above)</li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: #FF4A00;"></i> WhatsApp Business
                                    number connected via HeyDoot</li>
                                <li style="display: flex; gap: 12px;"><i class="fas fa-check-circle"
                                        style="color: #FF4A00;"></i> API access enabled (automatically configured when
                                    you add HeyDoot on Zapier)</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Steps to Connect -->
                    <div id="steps-zapier" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #fff0e6; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-rocket" style="color: #FF4A00; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Steps to connect HeyDoot with Zapier
                            </h2>
                        </div>
                        <div class="automation-grid">
                            <div class="automation-card">
                                <div class="automation-icon orange-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <h3>1. Find HeyDoot</h3>
                                <p>In Zapier, search "HeyDoot" under Apps → Click Connect.</p>
                            </div>
                            <div class="automation-card">
                                <div class="automation-icon orange-icon"><i class="fas fa-key"></i></div>
                                <h3>2. Authenticate</h3>
                                <p>Use your HeyDoot API key or OAuth login (popup).</p>
                            </div>
                            <div class="automation-card">
                                <div class="automation-icon orange-icon"><i class="fas fa-bullseye"></i></div>
                                <h3>3. Pick Trigger/Action</h3>
                                <p>Choose from events: New Inbound Message, Send Message, etc.</p>
                            </div>
                            <div class="automation-card">
                                <div class="automation-icon orange-icon"><i class="fas fa-laptop-code"></i></div>
                                <h3>4. Test & Publish</h3>
                                <p>Test your zap, turn it on — automation live</p>
                            </div>
                        </div>
                    </div>

                    <!-- What can be done (5 core features) -->
                    <div id="what-can-be-done-zapier" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #fff0e6; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-cogs" style="color: #FF4A00; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">What can be done with the integration?
                            </h2>
                        </div>

                        <div id="trigger-whatsapp" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: center;">
                                <div
                                    style="background: #ffece3; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fab fa-whatsapp" style="font-size: 32px; color: #25D366;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">1. Trigger: New WhatsApp message
                                    </h3>
                                    <p>Any incoming WhatsApp message can instantly trigger a Zap → create a row in
                                        Google Sheets, add contact to Mailchimp, or create a Trello card.</p>
                                </div>
                            </div>
                        </div>

                        <div id="action-send" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: center;">
                                <div
                                    style="background: #ffece3; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-paper-plane" style="font-size: 28px; color: #FF4A00;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">2. Action: Send WhatsApp message
                                    </h3>
                                    <p>Send automated replies, order confirmations, or reminders from any trigger
                                        (Typeform, Calendly, Shopify, etc).</p>
                                </div>
                            </div>
                        </div>

                        <div id="contact-sync" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: center;">
                                <div
                                    style="background: #ffece3; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-address-card" style="font-size: 28px; color: #FF4A00;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">3. Sync contacts & media</h3>
                                    <p>Automatically add/update WhatsApp contacts to your CRM (Salesforce, HubSpot,
                                        Pipedrive) using Zapier paths.</p>
                                </div>
                            </div>
                        </div>

                        <div id="template-workflow" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: center;">
                                <div
                                    style="background: #ffece3; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-layer-group" style="font-size: 28px; color: #FF4A00;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">4. Template-based campaigns</h3>
                                    <p>Send message templates with variables (order #, name) from Google Sheets or
                                        Airtable. Perfect for marketing & support.</p>
                                </div>
                            </div>
                        </div>

                        <div id="multi-step" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: center;">
                                <div
                                    style="background: #ffece3; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-code-branch" style="font-size: 28px; color: #FF4A00;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">5. Multi-step Zaps (CRM + WhatsApp)
                                    </h3>
                                    <p>Combine filters, delays, and lookups: e.g., new form entry → lookup lead score →
                                        send tailored WhatsApp message.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DONE section -->
                    <div id="done-zapier"
                        style="background: linear-gradient(115deg, #fef6e8, #fff2e5); border-radius: 32px; padding: 32px; text-align: center; margin: 40px 0 32px;">
                        <i class="fas fa-check-circle" style="font-size: 52px; color: #FF4A00;"></i>
                        <h2 style="font-size: 2rem; font-weight: 800; margin-top: 12px;">Done</h2>
                        <p style="margin-top: 8px;">Your HeyDoot + Zapier connection is ready. Start building powerful
                            cross-app workflows.</p>
                        <a href="javascript:void(0)" class="btn"
                            style="background: #FF4A00; color: white; margin-top: 20px; padding: 10px;"><i
                                class="fab fa-zapier"></i> Explore Zap Templates</a>
                    </div>

                    <!-- FAQ Section - using standard faq-item class for global script compatibility -->
                    <div id="zapier-faq" style="margin-top: 48px;">
                        <h3 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 24px;"><i
                                class="fas fa-question-circle" style="color: #FF4A00;"></i> FAQs ?</h3>

                        <div class="faq-item">
                            <div class="faq-question">How to view HeyDoot trigger properties in Zapier? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">After selecting HeyDoot trigger (New Message), click "Test trigger"
                                — Zapier will pull sample data, all available fields (text, sender number, media URL,
                                timestamp) appear as variables for subsequent actions.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Resyncing / updating HeyDoot fields on Zapier <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Simply reconnect the HeyDoot account inside Zapier (or refresh the
                                webhook URL). New fields become available when you re-select trigger/action.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Does HeyDoot support media messages (images, docs) via Zapier? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Yes. When using "New Media Message" trigger, you get public URLs for
                                images/documents. You can pass those to Google Drive, Slack, or any other app.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Is there any rate limit on HeyDoot Zapier actions? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">HeyDoot allows up to 30 messages/second on Enterprise plans,
                                standard plans handle 5–10 msg/sec — comfortable for most Zapier automations.</div>
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

                    <a href="javascript:void(0)" class="utility-item utility-link" style="color: #FF4A00;">
                        <i class="fas fa-code"></i>
                        Zapier API collection
                    </a>

                    <a href="tel:+919718517228" class="utility-item utility-link">
                        <i class="fas fa-headset"></i>
                        Support
                    </a>

                    <a href="javascript:void(0)" class="dashboard-btn" style=" background: #FF4A00; color: white;">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>

                </div>
            </div>
        </div>
    </section>
</main>

<?php include ROOT_PATH . '/components/footer.php'; ?>