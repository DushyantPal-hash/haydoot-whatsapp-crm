<?php
require_once dirname(__DIR__) . '/config.php';
$page_title = "Features - HeyDoot";
include ROOT_PATH . '/components/header.php';
include ROOT_PATH . '/components/navbar.php';
?>
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-icons-font@v11/font/simple-icons.min.css">
<style>
    /* Odoo accent colors */
    .btn-odoo {
        background: #714B67;
        color: white;
        box-shadow: 0 2px 8px rgba(113, 75, 103, 0.2);
    }

    .btn-odoo:hover {
        background: #5a3a52;
        transform: translateY(-3px);
        box-shadow: 0 12px 22px -8px rgba(113, 75, 103, 0.3);
    }

    .odoo-accent {
        color: #714B67;
    }

    .setup-step {
        background: white;
        border-radius: 24px;
        padding: 24px;
        margin-bottom: 24px;
        border-left: 4px solid #714B67;
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
        background: #714B67;
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

    .image-placeholder {
        background: linear-gradient(135deg, #f0f2f5 0%, #e4e8ed 100%);
        border-radius: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 200px;
        color: #714B67;
        font-size: 48px;
        border: 2px dashed #cbd5e1;
    }

    .metric-card {
        text-align: center;
        padding: 24px;
        background: white;
        border-radius: 24px;
    }
</style>

<main>
    <!-- Hero Section with Odoo flavor -->
    <section class="hero" style="background: linear-gradient(135deg, #2d1b28 0%, #4a2c42 100%);">
        <div class="floating-dots"></div>
        <div style="max-width: 900px; margin: 0 auto; position: relative; z-index: 2;">
            <div
                style="display: inline-block; background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); padding: 6px 18px; border-radius: 60px; margin-bottom: 24px;">
                <span style="color: #ffffff; font-weight: 700; display: flex; align-items: center; gap: 10px;"><i
                        class="si si-odoo"></i> Official Odoo Ready
                    Partner</span>
            </div>
            <h1 style="color: white;">Connect <span style="color: #ffffff;">HeyDoot</span> <br>with <span
                    style="color: #ffffff;">Odoo ERP</span></h1>
            <p class="hero-desc">Automate WhatsApp notifications for Sales Orders, Invoices, Purchase Orders, and Stock
                updates — directly from your Odoo instance.</p>
            <div class="cta-group">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20HeyDoot%20features"
                    class="btn btn-odoo btn-lg"><i class="si si-odoo"></i> Connect Odoo</a>
                <a href="<?php echo BASE_URL; ?>/services/odoo.php" class="btn btn-secondary btn-lg"><i
                        class="fas fa-file-alt"></i> View Services</a>
            </div>
        </div>
        <div class="visual-stage" style="margin-top: 20px;">
            <div class="float-card card-1"><i class="fab fa-whatsapp" style="color:#25D366; font-size: 22px;"></i>
                <span>SO Confirmed → WhatsApp</span>
            </div>
            <div class="float-card card-2"><i class="fas fa-truck" style="color:#714B67;"></i> <span>Delivery
                    Alerts</span></div>
            <div class="mockup-phone"
                style="width: 65%; margin: 0 auto; background: #1e1e2a; border-radius: 48px; padding: 8px;">
                <div style="background: #2a2a35; border-radius: 40px; padding: 30px 20px; text-align: center;">
                    <div style=" display: flex; justify-content: center; align-items: center;">
                        <i class="si si-odoo" style="font-size: 48px; color: #714B67;"></i>
                        <i class="fas fa-plus" style="margin: 0 20px; color: white;"></i>
                        <i class="fab fa-whatsapp" style="font-size: 48px; color: #25D366;"></i>
                    </div>
                    <p style="color: #aaa; margin-top: 16px;">Real-time ERP notifications · 2-way sync</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Integration Container -->
    <section style="padding: 40px 0;">
        <div class="container-fluid">

            <!-- Status Banner -->
            <div
                style="background: linear-gradient(105deg, #f3eef2 0%, #faf5f8 100%); border-left: 5px solid #714B67; border-radius: 20px; padding: 20px 28px; margin-bottom: 48px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                <div>
                    <i class="fas fa-check-circle" style="color: #714B67; margin-right: 12px;"></i>
                    <strong>HeyDoot Odoo WhatsApp Notifier is fully certified.</strong>
                    <span style="color: #4b5563;"> Connect your Odoo instance with HeyDoot to enable automated WhatsApp
                        messaging.</span>
                    <a href="#" style="color: #714B67; font-weight: 600;"> Start Integration →</a>
                </div>
                <div>
                    <a href="#"
                        style="background: #f3f4f6; padding: 8px 18px; border-radius: 40px; font-size: 0.85rem;"><i
                            class="fas fa-headset"></i> Troubleshooting: Messages not sending?</a>
                </div>
            </div>

            <!-- Two-column layout -->
            <div style="display: flex; gap: 48px; flex-wrap: wrap;">
                <!-- Sidebar -->
                <aside style="flex: 0.8; min-width: 240px;">
                    <div
                        style="position: sticky; top: 100px; background: white; border-radius: 28px; padding: 24px; box-shadow: var(--card-shadow); border: 1px solid rgba(0,0,0,0.04);">
                        <h4 style="font-weight: 700; margin-bottom: 20px; font-size: 1.1rem;"><i class="fas fa-cog"
                                style="color: #714B67; margin-right: 8px;"></i> On this page</h4>
                        <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px;">
                            <li><a href="#prerequisites" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-check-circle" style="color: #714B67;"></i> Prerequisites</a></li>
                            <li><a href="#setup-guide" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-list-ol" style="color: #714B67;"></i> Step-by-Step Setup Guide</a>
                            </li>
                            <!-- <li><a href="#why-odoo" style="color: #2c3e2f; font-size: 0.9rem;"><i class="fas fa-star"
                                        style="color: #714B67;"></i> Why Use HeyDoot with Odoo?</a></li>
                            <li><a href="#use-cases" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-briefcase" style="color: #714B67;"></i> Use Cases</a></li> -->
                            <!-- <li><a href="#metrics" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-chart-line" style="color: #714B67;"></i> Performance Metrics</a>
                            </li> -->
                            <li><a href="#faq-odoo" style="color: #2c3e2f;"><i class="fas fa-question-circle"
                                        style="color: #714B67;"></i> FAQs</a></li>
                            <li><a href="#cta" style="color: #2c3e2f;"><i class="fas fa-rocket"
                                        style="color: #714B67;"></i> Get Started</a></li>
                        </ul>
                    </div>
                </aside>

                <!-- Main Content -->
                <main style="flex: 2.5; min-width: 280px;">

                    <!-- Prerequisites -->
                    <div id="prerequisites" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #f1e8ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-clipboard-list" style="color: #714B67; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Prerequisites</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px 28px;">
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: #714B67;"></i> Active HeyDoot account
                                    (any paid plan)</li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: #714B67;"></i> Odoo instance
                                    (Community or Enterprise, v14+)</li>
                                <li style="margin-bottom: 14px; display: flex; gap: 12px;"><i
                                        class="fas fa-check-circle" style="color: #714B67;"></i> WhatsApp Business
                                    number connected via HeyDoot</li>
                                <li style="display: flex; gap: 12px;"><i class="fas fa-check-circle"
                                        style="color: #714B67;"></i> Admin access to Odoo for API configuration</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step-by-Step Setup Guide -->
                    <div id="setup-guide" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div
                                style="background: #f1e8ef; width: 48px; height: 48px; border-radius: 28px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-list-ol" style="color: #714B67; font-size: 22px;"></i>
                            </div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Step-by-Step Setup Guide</h2>
                        </div>

                        <!-- Image Placeholder 1 -->
                        <div style="margin-bottom: 32px;">
                            <img src="<?php echo BASE_URL; ?>/assets/images/integrations/dashboard.webp"
                                alt="Integration Dashboard"
                                style="width: 100%; height: auto; border-radius: 24px; box-shadow: var(--card-shadow); margin-bottom: 12px;">
                            <div style="text-align: center;">
                                <p style="font-size: 14px; color: #5a6a7a;">Odoo Integration Dashboard Preview</p>
                            </div>
                        </div>

                        <!-- Step 1 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">1</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Configure HeyDoot API</h3>
                            </div>
                            <p style="margin-bottom: 12px; color: #4a5568;">Navigate to: <strong>WhatsApp Notifier → API
                                    Configuration</strong></p>
                            <p>Add:</p>
                            <ul style="margin-left: 24px; margin-top: 8px;">
                                <li>API Base URL</li>
                                <li>Bearer Token</li>
                                <li>Admin Notification Number</li>
                                <li>Retry Settings</li>
                            </ul>
                            <p style="margin-top: 12px;">Then click: <strong>Test Connection</strong></p>
                        </div>

                        <!-- Image Placeholder 2 -->
                        <div style="margin-bottom: 32px;">
                            <img src="<?php echo BASE_URL; ?>/assets/images/integrations/odoo1.webp"
                                alt="API Configuration"
                                style="width: 100%; height: auto; border-radius: 24px; box-shadow: var(--card-shadow); margin-bottom: 12px;">
                            <div style="text-align: center;">
                                <p style="font-size: 14px; color: #5a6a7a;">API Configuration Screen</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">2</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Create Notification
                                    Templates</h3>
                            </div>
                            <p style="margin-bottom: 12px;">Navigate to: <strong>WhatsApp Notifier → Notification
                                    Templates</strong></p>
                            <p>Create templates for:</p>
                            <ul style="margin-left: 24px; margin-top: 8px;">
                                <li>Sales Orders</li>
                                <li>Purchase Orders</li>
                                <li>Stock Delivery</li>
                                <li>Invoice Updates</li>
                            </ul>
                            <p style="margin-top: 12px;">Enable: <strong>Customer Notifications + Admin
                                    Notifications</strong></p>
                        </div>

                        <!-- Image Placeholder 3 -->
                        <div style="margin-bottom: 32px;">
                            <img src="<?php echo BASE_URL; ?>/assets/images/integrations/odoo3.webp"
                                alt="Template Management UI"
                                style="width: 100%; height: auto; border-radius: 24px; box-shadow: var(--card-shadow); margin-bottom: 12px;">
                            <div style="text-align: center;">
                                <p style="font-size: 14px; color: #5a6a7a;">Template Management UI</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">3</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Select Odoo Events</h3>
                            </div>
                            <p>Choose which Odoo events should trigger WhatsApp messages.</p>
                            <p style="margin-top: 12px;"><strong>Supported Events:</strong></p>
                            <div style="display: flex; flex-wrap: wrap; gap: 12px; margin-top: 12px;">
                                <span style="background: #e9ecef; padding: 4px 12px; border-radius: 20px;">SO
                                    Confirmed</span>
                                <span style="background: #e9ecef; padding: 4px 12px; border-radius: 20px;">SO
                                    Shipped</span>
                                <span style="background: #e9ecef; padding: 4px 12px; border-radius: 20px;">SO
                                    Cancelled</span>
                                <span style="background: #e9ecef; padding: 4px 12px; border-radius: 20px;">PO
                                    Approved</span>
                                <span style="background: #e9ecef; padding: 4px 12px; border-radius: 20px;">PO
                                    Received</span>
                                <span style="background: #e9ecef; padding: 4px 12px; border-radius: 20px;">Delivery
                                    Validated</span>
                            </div>
                        </div>

                        <!-- Image Placeholder 4 -->
                        <div style="margin-bottom: 32px;">
                            <img src="<?php echo BASE_URL; ?>/assets/images/integrations/odoo4.webp"
                                alt="Event Selection Panel"
                                style="width: 100%; height: auto; border-radius: 24px; box-shadow: var(--card-shadow); margin-bottom: 12px;">
                            <div style="text-align: center;">
                                <p style="font-size: 14px; color: #5a6a7a;">Event Selection Panel</p>
                            </div>
                        </div>


                        <!-- Step 4 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">4</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Enable Auto or Manual
                                    Trigger</h3>
                            </div>
                            <p>Choose:</p>
                            <ul style="margin-left: 24px;">
                                <li>Automatic WhatsApp Trigger</li>
                                <li>Manual Send Option</li>
                                <li>Both</li>
                            </ul>
                        </div>

                        <!-- Image Placeholder 5 -->
                        <div style="margin-bottom: 32px;">
                            <img src="<?php echo BASE_URL; ?>/assets/images/integrations/odoo2.webp"
                                alt="Auto/Manual Trigger Settings"
                                style="width: 100%; height: auto; border-radius: 24px; box-shadow: var(--card-shadow); margin-bottom: 12px;">
                            <div style="text-align: center;">
                                <p style="font-size: 14px; color: #5a6a7a;">Auto/Manual Trigger Settings</p>
                            </div>
                        </div>


                        <!-- Step 5 -->
                        <div class="setup-step">
                            <div style="display: flex; align-items: center; margin-bottom: 16px;">
                                <span class="step-number">5</span>
                                <h3 style="font-size: 1.3rem; font-weight: 700; margin: 0;">Monitor Message Queue</h3>
                            </div>
                            <p>Navigate to: <strong>WhatsApp Notifier → Message Queue</strong></p>
                            <p>Track:</p>
                            <ul
                                style="margin-left: 24px; display: grid; grid-template-columns: repeat(2,1fr); gap: 8px;">
                                <li>✓ Pending Messages</li>
                                <li>✓ Sent Messages</li>
                                <li>✓ Failed Messages</li>
                                <li>✓ Retry Attempts</li>
                                <li>✓ Delivery Logs</li>
                            </ul>
                        </div>

                        <!-- Image Placeholder 6 -->
                        <div style="margin-bottom: 32px;">
                            <img src="<?php echo BASE_URL; ?>/assets/images/integrations/odoo5.webp"
                                alt="Message Queue Dashboard"
                                style="width: 100%; height: auto; border-radius: 24px; box-shadow: var(--card-shadow); margin-bottom: 12px;">
                            <div style="text-align: center;">
                                <p style="font-size: 14px; color: #5a6a7a;">Message Queue Dashboard</p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div id="faq-odoo" style="margin-top: 48px;">
                        <h3 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 24px;"><i
                                class="fas fa-question-circle" style="color: #714B67;"></i> FAQs</h3>

                        <div class="faq-item">
                            <div class="faq-question">Does HeyDoot support Odoo Community Edition? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Yes, the integration works with both Odoo Community and Enterprise
                                editions (v14 and above).</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Can I send media messages (images, PDFs) from Odoo? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Yes, you can attach order PDFs, invoices, or delivery slips as
                                WhatsApp media messages.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">How long does it take to set up the integration? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Most teams complete the setup in under 20 minutes using our
                                step-by-step guide.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Is there a free trial available? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Yes, we offer a 14-day free trial with full Odoo integration
                                features.</div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div id="cta"
                        style="background: linear-gradient(115deg, #2d1b28, #4a2c42); border-radius: 32px; padding: 48px; text-align: center; margin: 56px 0 32px; color: white;">
                        <i class="fab fa-whatsapp" style="font-size: 56px; color: #25D366; margin-bottom: 16px;"></i>
                        <h2 style="font-size: 2rem; font-weight: 800;">Automate Odoo Notifications with WhatsApp</h2>
                        <p style="margin-top: 16px; opacity: 0.9;">Integrate Odoo with HeyDoot and streamline customer
                            communication through automated WhatsApp alerts.</p>
                        <div
                            style="display: flex; flex-wrap: wrap; gap: 16px; justify-content: center; margin-top: 32px;">
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-code"></i> API-Based Integration</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-file-alt"></i> Custom Templates</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-toggle-on"></i> Auto & Manual Triggers</span>
                            <span style="background: rgba(255,255,255,0.15); padding: 6px 16px; border-radius: 40px;"><i
                                    class="fas fa-bolt"></i> Real-Time Notifications</span>
                        </div>
                        <div style="margin-top: 36px;">
                            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20HeyDoot%20features"
                                class="btn btn-lg" style="background: white; color: #714B67; font-weight: 700;"><i
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

                    <a href="#" class="utility-item utility-link">
                        <i class="fas fa-code"></i>
                        Odoo API Docs
                    </a>

                    <a href="tel:+919718517228" class="utility-item utility-link">
                        <i class="fas fa-headset"></i>
                        Support
                    </a>

                    <a href="#" class="dashboard-btn">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>

                </div>
            </div>
        </div>
    </section>
</main>

<?php include ROOT_PATH . '/components/footer.php'; ?>