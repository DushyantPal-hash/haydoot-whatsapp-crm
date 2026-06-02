<?php
require_once dirname(__DIR__) . '/config.php';

$page_meta = [
    'title' => 'Smoobu WhatsApp Integration | HeyDoot',
    'meta_title' => 'Smoobu WhatsApp Integration – Automate Guest Communication with HeyDoot',
    'description' => 'Connect Smoobu with WhatsApp using HeyDoot and automate booking confirmations, check-in instructions, reminders, guest support, and post-stay reviews without API complexity.',

    'og_title' => 'Smoobu WhatsApp Integration | HeyDoot',
    'og_description' => 'Integrate Smoobu with WhatsApp using HeyDoot. Automate reservation notifications, pre-arrival instructions, guest communication, and review requests directly from your PMS.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/integrations/smoobu.php',

    'twitter_title' => 'Smoobu WhatsApp Integration | HeyDoot',
    'twitter_description' => 'Automate vacation rental guest communication on WhatsApp with HeyDoot + Smoobu. Send booking updates, reminders, check-in details, and support messages effortlessly.',
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
    "description" => "Integrate Smoobu PMS with WhatsApp using HeyDoot to automate booking confirmations, pre-arrival reminders, check-in instructions, guest support, and review collection workflows.",
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
        background: #1E3A5F;
        color: white;
        box-shadow: 0 2px 8px rgba(30, 58, 95, 0.2);
    }

    .btn-smoobu:hover {
        background: #152c48;
        transform: translateY(-3px);
        box-shadow: 0 12px 22px -8px rgba(30, 58, 95, 0.3);
    }

    .smoobu-accent {
        color: #1E3A5F;
    }

    .section-block {
        margin-bottom: 56px;
    }

    .section-header {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 28px;
    }

    .icon-circle {
        background: #e9f5ef;
        width: 52px;
        height: 52px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon-circle i {
        font-size: 24px;
        color: var(--wa-teal);
    }

    h2 {
        font-size: 1.8rem;
        font-weight: 700;
    }

    .step-card {
        background: white;
        border-radius: 28px;
        padding: 28px 20px;
        box-shadow: var(--card-shadow);
        border: var(--border-light);
    }

    .step-num {
        background: #1E3A5F;
        width: 42px;
        height: 42px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        color: white;
        font-size: 1.4rem;
        margin-bottom: 20px;
    }

    .use-case-item,
    .benefit-item {
        background: white;
        border-radius: 24px;
        padding: 15px 20px;
        transition: all 0.2s;
        border: var(--border-light);
    }

    .use-case-item p,
    .benefit-item p {
        margin-top: 8px;
        color: #4b5563;
        font-size: 1.0rem;
        margin-bottom: 5px;
    }

    .use-case-item h3,
    .benefit-item h3 {
        display: flex;
        align-items: center;
        font-size: 20px;
        gap: 10px;
    }
</style>

<main>
    <!-- Hero section (Smoobu style) -->
    <section class="hero" style="background: linear-gradient(135deg, #0f2b3d 0%, #1E3A5F 100%);">
        <div class="floating-dots"></div>
        <div style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div
                style="display: inline-block; background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); padding: 6px 18px; border-radius: 60px; margin-bottom: 24px;">
                <span style="color: #ffffff; font-weight: 700; display: flex; align-items: center; gap: 10px;">
                    <i class="fab fa-whatsapp"></i> <i class="fas fa-exchange-alt"></i> <i class="fas fa-building"></i>
                    Official Smoobu Partner</span>
            </div>
            <h1>Connect HeyDoot <br>with <span style="color: #F59E0B;">Smoobu</span></h1>
            <p class="hero-desc">Automate guest communication on WhatsApp — booking confirmations, check-in
                instructions, reminders, and support directly from your PMS reservation data.</p>
            <div class="cta-group">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20integrate%20Smoobu%20with%20WhatsApp%20using%20HeyDoot"
                    class="btn btn-smoobu btn-lg"><i class="fab fa-whatsapp"></i> Connect Smoobu</a>
                <a href="<?php echo BASE_URL; ?>/services/smoobu.php" class="btn btn-secondary btn-lg"><i
                        class="fas fa-calendar-alt"></i> View Services</a>
            </div>
            <div class="visual-stage" style="margin-top: 20px;">
                <div class="float-card card-1"><i class="fab fa-whatsapp" style="color:#25D366; font-size: 22px;"></i>
                    <span>New Booking → WhatsApp</span>
                </div>

                <div class="float-card card-2"><i class="fas fa-times-circle" style="color:#e74c3c;"></i>
                    <span>Cancellation Alerts</span>
                </div>
                <div class="mockup-phone"
                    style="width: 65%; margin: 0 auto; background: #1e1e2a; border-radius: 48px; padding: 8px;">
                    <div style="background: #2a2a35; border-radius: 40px; padding: 30px 20px; text-align: center;">
                        <div style=" display: flex; justify-content: center; align-items: center;">
                            <i class="fas fa-building" style="font-size: 48px; color: #1E3A5F;"></i>
                            <i class="fas fa-plus" style="margin: 0 20px; color: white;"></i>
                            <i class="fab fa-whatsapp" style="font-size: 48px; color: #25D366;"></i>
                        </div>
                        <p style="color: #aaa; margin-top: 16px;">Real-time reservation alerts · 2-way sync</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <!-- status banner -->
            <div
                style="background: linear-gradient(105deg, #fff7ed 0%, #fffbeb 100%); border-left: 5px solid #F59E0B; border-radius: 20px; padding: 20px 28px; margin-bottom: 48px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                <div>
                    <i class="fas fa-info-circle" style="color: #F59E0B; margin-right: 12px;"></i>
                    <strong>Integration active:</strong>
                    <span style="color: #4b5563;">Real-time reservation sync from Smoobu to HeyDoot. Automate up to 90%
                        of guest messaging.</span>
                    <a href="<?php echo BASE_URL; ?>/404.php" style="color: var(--wa-teal); font-weight: 600;"> Setup
                        guide →</a>
                </div>
                <!-- <div>
                    <a href="<?php echo BASE_URL; ?>/404.php"
                        style="background: #f3f4f6; padding: 8px 18px; border-radius: 40px; font-size: 0.85rem;"><i
                            class="fas fa-bug"></i> Troubleshooting: Not receiving notifications</a>
                </div> -->
            </div>

            <div style="display: flex; gap: 48px; flex-wrap: wrap;">
                <!-- Sidebar on this page -->
                <aside style="flex: 0.8; min-width: 240px;">
                    <div
                        style="position: sticky; top: 100px; background: white; border-radius: 28px; padding: 24px; box-shadow: var(--card-shadow); border: 1px solid rgba(0,0,0,0.04);">
                        <h4 style="font-weight: 700; margin-bottom: 20px; font-size: 1.1rem;"><i class="fas fa-bookmark"
                                style="color: var(--wa-teal); margin-right: 8px;"></i> On this page</h4>

                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
                            <li>
                                <a href="#prerequisites" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-check-circle" style="color: var(--wa-teal); width: 22px;"></i>
                                    Prerequisites
                                </a>
                            </li>
                            <li>
                                <a href="#steps" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-plug" style="color: var(--wa-teal); width: 22px;"></i>
                                    Steps to
                                    connect
                                </a>
                            </li>
                            <li>
                                <a href="#features" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-star" style="color: var(--wa-teal); width: 22px;"></i> Key
                                    features
                                </a>
                            </li>
                            <li>
                                <a href="#benefits" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-chart-line" style="color: var(--wa-teal); width: 22px;"></i>
                                    Benefits
                                </a>
                            </li>
                            <li>
                                <a href="#usecases" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-briefcase" style="color: var(--wa-teal); width: 22px;"></i> Use
                                    cases
                                </a>
                            </li>
                            <li>
                                <a href="#workflow" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-sync-alt" style="color: var(--wa-teal); width: 22px;"></i> How it
                                    works
                                </a>
                            </li>
                            <li>
                                <a href="#faqs" style="color: #2c3e2f; font-size: 0.9rem;">
                                    <i class="fas fa-question-circle" style="color: var(--wa-teal); width: 22px;"></i>
                                    FAQs
                                </a>
                            </li>

                        </ul>
                    </div>
                </aside>

                <!-- main content -->
                <main style="flex: 2.5; min-width: 280px;">
                    <!-- Prerequisites -->
                    <div id="prerequisites" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-clipboard-list"></i></div>
                            <h2>Prerequisites</h2>
                        </div>
                        <div class=" automation-grid"
                            style="grid-template-columns: repeat(auto-fit, minmax(320px,1fr)); display: grid; gap: 20px;">
                            <div class="automation-card benefit-item">
                                <h3><i class="fas fa-check-circle" style="color: #0f6b3a; margin-right: 5px;"></i>
                                    <strong>Active Smoobu account</strong>
                                </h3>
                                <p style="margin-top: 5px;">Connected properties & API access enabled</p>
                            </div>
                            <div class="automation-card benefit-item">
                                <h3><i class="fas fa-check-circle" style="color: #0f6b3a; margin-right: 5px;"></i>
                                    <strong>HeyDoot account</strong>
                                </h3>
                                <p style="margin-top: 5px;">Approved WhatsApp Business API number &
                                    templates</p>
                            </div>
                            <div class="automation-card benefit-item">
                                <h3><i class="fas fa-check-circle" style="color: #0f6b3a; margin-right: 5px;"></i>
                                    <strong>Admin access</strong>
                                </h3>
                                <p style="margin-top: 5px;">Both platforms & guest phone numbers collection</p>
                            </div>
                        </div>
                    </div>

                    <!-- Steps to connect -->
                    <div id="steps" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-rocket"></i></div>
                            <h2>Steps to connect HeyDoot with Smoobu</h2>
                        </div>
                        <div class="feature-grid">
                            <div class="step-card feature-card">
                                <div class="step-num">1</div>
                                <h3>Log in to HeyDoot</h3>
                                <p>Access dashboard → Settings → Integrations → PMS</p>
                            </div>
                            <div class="step-card feature-card">
                                <div class="step-num">2</div>
                                <h3>Select Smoobu</h3>
                                <p>Choose Smoobu from the list, enter API Key & credentials</p>
                            </div>
                            <div class="step-card feature-card">
                                <div class="step-num ">3</div>
                                <h3>Authorize data</h3>
                                <p>Grant access to reservations, guest details, property info</p>
                            </div>
                            <div class="step-card feature-card">
                                <div class="step-num">4</div>
                                <h3>Configure WhatsApp templates</h3>
                                <p>Booking confirm, check-in, house rules, review requests</p>
                            </div>
                            <div class="step-card feature-card">
                                <div class="step-num">5</div>
                                <h3>Enable automation triggers</h3>
                                <p>New booking, 7d before check-in, 24h prior, post-stay</p>
                            </div>
                            <div class="step-card feature-card">
                                <div class="step-num">6</div>
                                <h3>Test & go live</h3>
                                <p>Test reservation, verify message delivery, activate</p>
                            </div>
                        </div>
                    </div>

                    <!-- Key Features -->
                    <div id="features" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-cogs"></i></div>
                            <h2>Key Features</h2>
                        </div>
                        <div class="feature-grid">
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-comment-dots"></i>
                                    <strong>Automated WhatsApp
                                        Messaging</strong>
                                </h3>
                                <p>Based on reservation events</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-sync-alt"></i>
                                    <strong>Real-time Reservation Sync</strong>
                                </h3>
                                <p>Guest details, dates, property data</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-building"></i>
                                    <strong>Multi-Property
                                        Support</strong>
                                </h3>
                                <p>Manage all rentals from one dashboard</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3>
                                    <i class="fas fa-user-edit"></i>
                                    <strong>Personalized
                                        Variables</strong>
                                </h3>
                                <p>Guest name, property, arrival time</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-reply-all"></i>
                                    <strong>Two-Way
                                        Communication</strong>
                                </h3>
                                <p>Guests reply & continue conversation</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-reply-all"></i> <strong>Two-Way
                                        Guest
                                        Comm</strong>
                                </h3>
                                <p>Guests reply & continue conversation</p>
                            </div>
                            <div class="benefit-item automation-card">
                                <h3><i class="fas fa-chart-simple"></i>
                                    <strong>Delivery & Read
                                        Tracking</strong>
                                </h3>
                                <p>Monitor message engagement</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefits -->
                    <div id="benefits" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-chart-line"></i></div>
                            <h2>Benefits for Property Managers</h2>
                        </div>
                        <div class="feature-grid">
                            <div class="benefit-item feature-card">
                                <h3><i class="fas fa-clock"></i>
                                    Save time – eliminate manual messaging
                                </h3>
                            </div>
                            <div class="benefit-item feature-card">
                                <h3><i class="fas fa-smile"></i>
                                    Increase guest satisfaction
                                </h3>
                            </div>
                            <div class="benefit-item feature-card">
                                <h3><i class="fas fa-calendar-times"></i>
                                    Reduce no-shows with reminders
                                </h3>
                            </div>
                            <div class="benefit-item feature-card">
                                <h3><i class="fas fa-chart-line"></i>
                                    Higher review scores
                                </h3>
                            </div>
                            <div class="benefit-item feature-card">
                                <h3><i class="fas fa-charging-station"></i>
                                    Scale operations easily
                                </h3>
                            </div>
                        </div>
                    </div>

                    <!-- Use Cases -->
                    <div id="usecases" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-briefcase"></i></div>
                            <h2>Use Cases</h2>
                        </div>
                        <div class="feature-grid">
                            <div class="use-case-item automation-card">
                                <h3>📘 <strong>Booking Confirmation:</strong></h3>
                                <p>Instant WhatsApp after reservation</p>
                            </div>
                            <div class="use-case-item automation-card">
                                <h3>🗝️ <strong>Pre-Arrival:</strong></h3>
                                <p>Check-in instructions, parking, local tips</p>
                            </div>
                            <div class="use-case-item automation-card">
                                <h3>🏠 <strong>House rules & property info:</strong></h3>
                                <p>Shared automatically</p>
                            </div>
                            <div class="use-case-item automation-card">
                                <h3>⏰ <strong>Checkout reminders & review requests:</strong></h3>
                                <p>Sent automatically at the end of the stay</p>
                            </div>
                            <div class="use-case-item automation-card">
                                <h3>🛎️ <strong>Guest Support:</strong></h3>
                                <p>Two-way chat during stay</p>
                            </div>
                            <div class="use-case-item automation-card">
                                <h3>💰 <strong>Upselling:</strong></h3>
                                <p>Early check-in, airport
                                    transfer,
                                    transfer,
                                    extras
                            </div>
                        </div>
                    </div>

                    <!-- How it works flow -->
                    <div id="workflow" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-diagram-project"></i></div>
                            <h2>How It Works</h2>
                        </div>
                        <div style="background: #f4f9f5; border-radius: 32px; padding: 28px; text-align: center;">
                            <div
                                style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; align-items: center;">
                                <span><i class="fas fa-calendar-check"></i> Booking created in Smoobu</span> <i
                                    class="fas fa-arrow-right"></i>
                                <span><i class="fas fa-cloud-upload-alt"></i> Reservation synced to HeyDoot</span>
                                <i class="fas fa-arrow-right"></i>
                                <span><i class="fas fa-bolt"></i> Automation triggered</span> <i
                                    class="fas fa-arrow-right"></i>
                                <span><i class="fab fa-whatsapp"></i> Personalized WhatsApp sent → guest reply via
                                    HeyDoot
                                    inbox</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs -->
                    <div id="faqs" class="section-block">
                        <div class="section-header">
                            <div class="icon-circle"><i class="fas fa-question-circle"></i></div>
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        <div class="faq-list">
                            <div class="faq-item">
                                <div class="faq-question">Do I need a WhatsApp Business API account? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Yes, you need an approved WhatsApp Business API number
                                    through
                                    HeyDoot to send automated messages.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Can I connect multiple Smoobu properties? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Absolutely, HeyDoot supports multi-property automation
                                    across all
                                    your listings.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Are guest details synced automatically? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Yes, reservations and guest information sync in real time
                                    from
                                    Smoobu.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Can guests reply to messages? <i
                                        class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">Yes, two-way communication is fully supported; replies
                                    appear in
                                    HeyDoot inbox.</div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Is the integration secure? <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">Yes, data is encrypted via secure API connections and OAuth.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">How long does setup take? <i class="fas fa-chevron-down"></i>
                                </div>
                                <div class="faq-answer">Most property managers complete the integration in under 10
                                    minutes.
                                </div>
                            </div>
                            <div class="faq-item">
                                <div class="faq-question">Can I send messages in multiple languages? <i
                                        class="fas fa-chevron-down"></i></div>
                                <div class="faq-answer">Yes, templates can be configured in different languages
                                    based on
                                    guest preferences. Smoobu also supports language-aware communication workflows.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DONE CTA -->
                    <div
                        style="background: linear-gradient(105deg, #eef6ed, #e1f0e5); border-radius: 36px; padding: 36px 28px; text-align: center; margin: 32px 0 24px;">
                        <i class="fas fa-party-horn" style="font-size: 48px; color: var(--wa-teal);"></i>
                        <h2 style="font-size: 2rem; font-weight: 800;">Ready to Automate Guest Communication?</h2>
                        <p style="margin-top: 12px;">Connect Smoobu + HeyDoot today and deliver seamless WhatsApp
                            experiences from booking to checkout.
                        </p>

                        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20connect%20Smoobu%20with%20HeyDoot"
                            class="btn btn-primary" style="background: #0d6a2e; margin-top: 20px; padding: 10px;"><i
                                class="fab fa-whatsapp"></i> Start automation
                        </a>
                    </div>
                </main>
            </div>

            <!-- Utility bar similar to example -->
            <div class="utility-bar">
                <div class="utility-item"><i class="fas fa-search"></i> Search docs...</div>
                <span style="background: #f0f2ee; padding: 4px 12px; border-radius: 30px;">⌘K</span>
                <a href="<?php echo BASE_URL; ?>/404.php" class="utility-item"><i class="fas fa-code"></i> API
                    reference</a>
                <a href="tel:+919718517228" class="utility-item"><i class="fas fa-headset"></i> Support</a>
                <a href="<?php echo BASE_URL; ?>/404.php" class="dashboard-btn"><i class="fas fa-tachometer-alt"></i>
                    HeyDoot
                    Dashboard</a>
            </div>
        </div>
    </section>
</main>


<?php include ROOT_PATH . '/components/footer.php'; ?>