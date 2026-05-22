<?php
require_once dirname(__DIR__) . '/config.php';

$page_meta = [
    'title' => 'HubSpot WhatsApp Integration | HeyDoot',
    'meta_title' => 'HubSpot WhatsApp Integration – Automate Customer Conversations with HeyDoot',
    'description' => 'Connect HubSpot with WhatsApp using HeyDoot and automate lead engagement, deal updates, customer support, reminders, and sales conversations without WhatsApp API complexity.',

    'og_title' => 'HubSpot WhatsApp Integration | HeyDoot',
    'og_description' => 'Integrate HubSpot with WhatsApp using HeyDoot. Automate lead notifications, deal updates, customer communication, and sales workflows directly from HubSpot.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations/hubspot.php',

    'twitter_title' => 'HubSpot WhatsApp Integration | HeyDoot',
    'twitter_description' => 'Automate HubSpot customer communication on WhatsApp with HeyDoot. Send lead updates, reminders, sales notifications, and customer messages instantly.',
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
    "description" => "Integrate HubSpot CRM with WhatsApp using HeyDoot to automate lead notifications, deal updates, reminders, customer engagement, and sales communication workflows.",
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
    <section class="hero" style="background: linear-gradient(135deg, #0a2b2c 0%, #1d4b2c 100%);">
        <div class="floating-dots"></div>
        <div style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div
                style="display: inline-block; background: rgba(255,255,255,0.15); backdrop-filter: blur(8px); padding: 6px 16px; border-radius: 60px; margin-bottom: 24px;">
                <span style="color: #25D366; font-weight: 600;"><i class="fab fa-hubspot"></i> HubSpot Native
                    Integration</span>
            </div>
            <h1 style="color: white;">Connect HeyDoot <br>with <span style="color: #FF7A59;">HubSpot</span></h1>
            <p class="hero-desc">Sync WhatsApp conversations, automatically create contacts, and trigger workflows — all
                within your HubSpot CRM.</p>
            <div class="cta-group">
                <a href="#" class="btn btn-primary btn-lg"
                    style="background: #FF7A59; box-shadow: 0 4px 12px rgba(255,122,89,0.3);"><i
                        class="fab fa-hubspot"></i> Connect HubSpot</a>
                <a href="#" class="btn btn-secondary btn-lg"><i class="fas fa-book-open"></i> View Docs</a>
            </div>
        </div>
        <div class="visual-stage" style="margin-top: 20px;">
            <div class="float-card card-1"><i class="fab fa-whatsapp" style="color:#25D366; font-size: 22px;"></i>
                <span>Live chat → HubSpot</span>
            </div>
            <div class="float-card card-2"><i class="fas fa-ticket-alt" style="color:#FF7A59;"></i> <span>Auto-create
                    tickets</span></div>
            <div class="mockup-phone"
                style="width: 65%; margin: 0 auto; background: #1e1e2a; border-radius: 48px; padding: 8px;">
                <div style="background: #2a2a35; border-radius: 40px; padding: 30px 20px; text-align: center;">
                    <div style=" display: flex; justify-content: center; align-items: center;">
                        <i class=" fab fa-hubspot" style="font-size: 48px; color: #FF7A59;"></i>
                        <i class="fas fa-plus" style="margin: 0 20px; color: white;"></i>
                        <i class="fab fa-whatsapp" style="font-size: 48px; color: #25D366;"></i>
                    </div>
                    <p style="color: #aaa; margin-top: 16px;">Sync active · 2-way integration</p>
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 40px 0;">
        <!-- Main Integration Content (matches image layout) -->
        <div class="container-fluid">

            <!-- Integration Status Banner -->
            <div
                style="background: linear-gradient(105deg, #fff7ed 0%, #fffbeb 100%); border-left: 5px solid #F59E0B; border-radius: 20px; padding: 20px 28px; margin-bottom: 48px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                <div>
                    <i class="fas fa-info-circle" style="color: #F59E0B; margin-right: 12px;"></i>
                    <strong>HeyDoot integration for HubSpot is currently under review.</strong>
                    <span style="color: #4b5563;">In order to use HeyDoot integration with HubSpot, you can connect with
                        HubSpot from</span>
                    <a href="#" style="color: var(--wa-teal); font-weight: 600;"> HeyDoot HubSpot settings →</a>
                </div>
                <div>
                    <a href="#"
                        style="background: #f3f4f6; padding: 8px 18px; border-radius: 40px; font-size: 0.85rem;"><i
                            class="fas fa-bug"></i> Troubleshooting: Not receiving notifications</a>
                </div>
            </div>

            <!-- Two-column layout: On this page sidebar + main content (like image) -->
            <div style="display: flex; gap: 48px; flex-wrap: wrap;">
                <!-- Sidebar "On this page" -->
                <aside style="flex: 0.8; min-width: 240px;">
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
                            <li style="margin-left: 20px;"><a href="#linking-chats"
                                    style="font-size: 0.85rem; color: #5a6b5f;"> 1. Linking chats to HubSpot </a></li>
                            <li style="margin-left: 20px;"><a href="#syncing-messages"
                                    style="font-size: 0.85rem; color: #5a6b5f;"> 2. Syncing WhatsApp messages </a>
                            </li>
                            <li style="margin-left: 20px;"><a href="#syncing-tickets"
                                    style="font-size: 0.85rem; color: #5a6b5f;"> 3. Syncing tickets to HubSpot </a>
                            </li>
                            <li style="margin-left: 20px;"><a href="#auto-create"
                                    style="font-size: 0.85rem; color: #5a6b5f;"> 4. Auto-create contacts & companies
                                </a>
                            </li>
                            <li style="margin-left: 20px;"><a href="#workflow-actions"
                                    style="font-size: 0.85rem; color: #5a6b5f;"> 5. Sending message via workflow</a>
                            </li>
                            <li><a href="#faqs" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-question-circle" style="color: var(--wa-teal);"></i> FAQs ?</a>
                            </li>
                            <li><a href="#done" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-party-horn"
                                        style="color: var(--wa-teal);"></i> Done </a></li>
                        </ul>
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
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: var(--wa-teal);"></i> Active HeyDoot
                                    account with WhatsApp Business
                                    API access</li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: var(--wa-teal);"></i> HubSpot account
                                    (Professional or Enterprise
                                    recommended for workflows)</li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: var(--wa-teal);"></i> Admin
                                    permissions in both platforms</li>
                                <li style="display: flex; gap: 12px;"><i class="fas fa-check-circle"
                                        style="color: var(--wa-teal);"></i> API key or OAuth setup ready from HeyDoot
                                    side
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
                                <h3>Install App</h3>
                                <p>Go to HubSpot App Marketplace, search "HeyDoot" and click install.</p>
                            </div>
                            <div class="automation-card" style="padding: 24px;">
                                <div class="automation-icon" style="background: #FF7A59; color: white;">2</div>
                                <h3>Authenticate</h3>
                                <p>Login with your HeyDoot credentials & grant access to contact/ deals.</p>
                            </div>
                            <div class="automation-card" style="padding: 24px;">
                                <div class="automation-icon" style="background: #FF7A59; color: white;">3</div>
                                <h3>Map Fields</h3>
                                <p>Map WhatsApp fields to HubSpot properties (e.g., phone, last conversation).</p>
                            </div>
                            <div class="automation-card" style="padding: 24px;">
                                <div class="automation-icon" style="background: #FF7A59; color: white;">4</div>
                                <h3>Sync Rules</h3>
                                <p>Choose auto-create, ticket sync, or workflow triggers — done</p>
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

                        <!-- 1. Linking chats -->
                        <div id="linking-chats" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: center;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-comments" style="font-size: 28px; color: #FF7A59;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">1. Linking chats to HubSpot </h3>
                                    <p style="color: #4a5b4e;">Associate any WhatsApp conversation with existing HubSpot
                                        contacts, deals, or tickets. View full chat history inside HubSpot timeline.</p>
                                </div>
                            </div>
                        </div>
                        <!-- 2. Syncing messages -->
                        <div id="syncing-messages" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: center;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fab fa-whatsapp" style="font-size: 32px; color: #25D366;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">2. Syncing WhatsApp messages to
                                        HubSpot
                                    </h3>
                                    <p>Incoming & outgoing WhatsApp messages are logged as notes/activities on the
                                        contact
                                        record. Never lose context.</p>
                                </div>
                            </div>
                        </div>
                        <!-- 3. Syncing tickets -->
                        <div id="syncing-tickets" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: center;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-ticket-alt" style="font-size: 28px; color: #FF7A59;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">3. Syncing tickets to HubSpot
                                    </h3>
                                    <p>Automatically create HubSpot tickets from WhatsApp support conversations based on
                                        keywords or sentiment.</p>
                                </div>
                            </div>
                        </div>
                        <!-- 4. Auto-create contacts -->
                        <div id="auto-create" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: center;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-user-plus" style="font-size: 28px; color: var(--wa-teal);"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">4. Auto-create contacts and
                                        companies
                                        on HubSpot</h3>
                                    <p>When a new WhatsApp user messages, HeyDoot instantly creates a contact (and
                                        company
                                        if applicable) in HubSpot.</p>
                                </div>
                            </div>
                        </div>
                        <!-- 5. Sending message via workflow -->
                        <div id="workflow-actions" class="feature-card"
                            style="margin-bottom: 28px; background: white; border-radius: 28px; padding: 28px;">
                            <div style="display: flex; gap: 20px; align-items: center;">
                                <div
                                    style="background: #eef2ff; width: 64px; height: 64px; border-radius: 32px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-code-branch" style="font-size: 28px; color: #FF7A59;"></i>
                                </div>
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 700;">5. Sending a message using HubSpot
                                        workflow actions</h3>
                                    <p>Use HubSpot workflows to trigger WhatsApp messages (order updates, reminders,
                                        follow-ups) directly from HeyDoot.</p>
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
                        <a href="#" class="btn btn-primary"
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
                                How to view HeyDoot properties on HubSpot?
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                Go to Settings → Properties → Search "HeyDoot" — all synced WhatsApp
                                fields appear under contact, company, or deal level. You can also add them to your
                                record sidebar.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                Resyncing HeyDoot properties on HubSpot
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
                                contact timeline.
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

                    <a href="#" class="utility-item utility-link" style="color: var(--wa-teal);">
                        <i class="fas fa-code"></i>
                        Postman API collection
                    </a>

                    <a href="tel:+919718517228" class="utility-item utility-link">
                        <i class="fas fa-headset"></i>
                        Support
                    </a>

                    <a href="#" class="dashboard-btn" style="background: #0d6a2e; color: white;">
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