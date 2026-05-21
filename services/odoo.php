<?php
require_once dirname(__DIR__) . '/config.php';
$page_meta = [
    'title' => 'Odoo WhatsApp Integration | HeyDoot',
    'meta_title' => 'Odoo WhatsApp Integration – Automate Odoo Notifications with HeyDoot',
    'description' => 'Connect Odoo with WhatsApp using HeyDoot and automate order confirmations, invoices, delivery updates, payment reminders, and customer notifications without WhatsApp API complexity.',

    'og_title' => 'Odoo WhatsApp Integration | HeyDoot',
    'og_description' => 'Automate Odoo notifications on WhatsApp with HeyDoot. Send order updates, invoices, shipping alerts, and customer notifications directly from Odoo.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/services/odoo.php',

    'twitter_title' => 'Odoo WhatsApp Integration | HeyDoot',
    'twitter_description' => 'Integrate Odoo with WhatsApp using HeyDoot and automate business notifications, invoices, reminders, and customer communication.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',

    'canonical' => 'https://heydoot.com/services/odoo.php'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => "Odoo WhatsApp Integration",
    "serviceType" => "WhatsApp Integration Service",
    "provider" => [
        "@type" => "Organization",
        "name" => "HeyDoot",
        "url" => "https://heydoot.com/"
    ],
    "description" => "Integrate Odoo ERP with WhatsApp using HeyDoot to automate order updates, invoice notifications, delivery alerts, payment reminders, and customer communication workflows.",
    "areaServed" => "Worldwide",
    "url" => "https://heydoot.com/services/odoo.php",
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

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-icons-font@v11/font/simple-icons.min.css">

<style>
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

    .feature-grid-odoo {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 28px;
        margin-top: 24px;
    }

    .feature-card-odoo {
        background: white;
        border-radius: 28px;
        padding: 28px;
        transition: all 0.25s ease;
        border: 1px solid rgba(0, 0, 0, 0.04);
        box-shadow: var(--card-shadow);
    }

    .feature-card-odoo:hover {
        transform: translateY(-6px);
    }

    .template-example {
        background: #f8f9fc;
        border-radius: 20px;
        padding: 20px;
        font-family: monospace;
        border-left: 4px solid #714B67;
        margin: 16px 0;
    }

    .badge-trigger {
        display: inline-block;
        background: #e9ecef;
        padding: 6px 14px;
        border-radius: 30px;
        font-size: 0.75rem;
        font-weight: 600;
        margin: 4px;
    }

    .feature-pair-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: rgba(113, 75, 103, 0.1);
        padding: 6px 14px;
        border-radius: 30px;
        font-size: 0.8rem;
        font-weight: 600;
        color: #714B67;
        margin-bottom: 20px;
    }

    .feature-list-check {
        list-style: none;
    }

    .feature-list-check li {
        margin-bottom: 5px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 14px;
    }

    .feature-list-check li i {
        color: #714B67;
    }

    .btn-secondary {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-3px);
    }

    .btn-ghost-dark {
        background: transparent;
        border: 2px solid #714B67;
        ;
        color: #714B67;
        ;
    }

    .btn-ghost-dark:hover {
        background: #714B67;
        ;
        color: white;
    }

    .badge-auto {
        background: #e3f2fd;
        color: #0d6efd;
    }

    .badge-manual {
        background: #fff3e0;
        color: #fd7e14;
    }

    .section-icon {
        background: #f1e8ef;
        width: 48px;
        height: 48px;
        border-radius: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<main>
    <!-- Hero Section -->
    <section class="hero" style="background: linear-gradient(135deg, #2d1b28 0%, #4a2c42 100%);">
        <div class="floating-dots"></div>
        <div style="margin: 0 auto; position: relative; z-index: 2;">
            <div
                style="display: inline-block; background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); padding: 6px 18px; border-radius: 60px; margin-bottom: 24px;">
                <span style="color: #ffffff; font-weight: 700; display: flex; align-items: center; gap: 10px;"><i
                        class="si si-odoo"></i> Odoo WhatsApp
                    Integration</span>
            </div>
            <h1 style="color: white;">Automate <span style="color: #ffffff;">Odoo Notifications</span> <br>on WhatsApp
            </h1>
            <!-- <p class="hero-desc">Connect your Odoo ERP with WhatsApp using the HeyDoot API and automatically send order
                updates, purchase notifications, delivery alerts, invoices, and custom messages to customers and admins.
            </p> -->
            <p class="hero-desc" style="font-size: 1rem;">No WhatsApp Business API approval complexity. Fast setup with
                customizable templates and manual or automated triggers.</p>
            <div class="cta-group">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20HeyDoot%20features"
                    class="btn btn-odoo btn-lg"><i class="fab fa-whatsapp"></i> Start Integration</a>
                <a href="<?php echo BASE_URL; ?>/integrations/odoo.php" class="btn btn-secondary btn-lg"><i
                        class="fas fa-book-open"></i>
                    View Documentation</a>
            </div>
        </div>
        <div class="visual-stage" style="margin-top: 20px;">
            <div class="float-card card-1"><i class="fab fa-whatsapp" style="color:#25D366;"></i> <span>Order Confirmed
                    → WhatsApp</span></div>
            <div class="float-card card-2"><i class="fas fa-file-invoice" style="color:#714B67;"></i> <span>Invoice
                    Updates</span></div>
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

    <!-- Trusted Section -->
    <section style="padding: 30px 0; background: #fff; border-bottom: 1px solid #edf2f7;">

        <div class="container-fluid">

            <div style="display:flex; justify-content:space-between; gap:20px; flex-wrap:wrap; align-items:center;">

                <div style="display:flex; align-items:center; gap:12px;">
                    <i class="fas fa-check-circle" style="color:#714B67; font-size:22px;"></i>
                    <div>
                        <strong>Fast Setup</strong>
                        <p style="margin:0; color:#64748b;">Integration in under 10 minutes</p>
                    </div>
                </div>

                <div style="display:flex; align-items:center; gap:12px;">
                    <i class="fas fa-shield-alt" style="color:#714B67; font-size:22px;"></i>
                    <div>
                        <strong>Secure API</strong>
                        <p style="margin:0; color:#64748b;">Encrypted WhatsApp communication</p>
                    </div>
                </div>

                <div style="display:flex; align-items:center; gap:12px;">
                    <i class="fas fa-bolt" style="color:#714B67; font-size:22px;"></i>
                    <div>
                        <strong>Automation Ready</strong>
                        <p style="margin:0; color:#64748b;">Trigger notifications instantly</p>
                    </div>
                </div>

                <div style="display:flex; align-items:center; gap:12px;">
                    <i class="fab fa-whatsapp" style="color:#25D366; font-size:22px;"></i>
                    <div>
                        <strong>No API Complexity</strong>
                        <p style="margin:0; color:#64748b;">Managed by HeyDoot</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Main Content -->
    <section style="padding: 60px 0;">
        <div class="container-fluid">

            <!-- Status Banner -->
            <div
                style="background: linear-gradient(105deg, #f3eef2 0%, #faf5f8 100%); border-left: 5px solid #714B67; border-radius: 20px; padding: 20px 28px; margin-bottom: 48px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                <div>
                    <i class="fas fa-check-circle" style="color: #714B67; margin-right: 12px;"></i>
                    <strong>Ready to integrate?</strong> Connect Odoo with WhatsApp in under 10 minutes.
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20HeyDoot%20features"
                        style="color: #714B67; font-weight: 600; margin-left: 12px;">Get API Keys →</a>
                </div>
                <div>
                    <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>"
                        style="background: #f3f4f6; padding: 8px 18px; border-radius: 40px; font-size: 0.85rem;"><i
                            class="fas fa-headset"></i> Need help? Contact Support</a>
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
                            <li><a href="#key-features" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-star" style="color: #714B67;"></i> Key Features</a></li>
                            <li><a href="#api-integration" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-code" style="color: #714B67;"></i> HeyDoot API Integration</a>
                            </li>
                            <li><a href="#whatsapp-templates" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-file-alt" style="color: #714B67;"></i> WhatsApp Templates</a></li>
                            <li><a href="#custom-templates" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-pen-fancy" style="color: #714B67;"></i> Custom WhatsApp
                                    Templates</a></li>
                            <li><a href="#trigger-options" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-bolt" style="color: #714B67;"></i> Manual & Automatic Triggers</a>
                            </li>
                            <li><a href="#business-events" style="color: #2c3e2f; font-size: 0.9rem;"><i
                                        class="fas fa-chart-line" style="color: #714B67;"></i> Business Events
                                    Automation</a></li>
                            <li><a href="#faq-odoo-service" style="color: #2c3e2f;"><i class="fas fa-question-circle"
                                        style="color: #714B67;"></i> FAQs</a></li>
                        </ul>
                    </div>
                </aside>

                <!-- Main Content -->
                <main style="flex: 2.5; min-width: 280px;">

                    <!-- Key Features -->
                    <div id="key-features" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div class="section-icon"><i class="fas fa-star"
                                    style="color: #714B67; font-size: 22px;"></i></div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Key Features</h2>
                        </div>
                        <div class="feature-grid-odoo">
                            <div class="feature-card-odoo"><i class="fas fa-check-circle"
                                    style="color: #714B67; font-size: 28px;"></i>
                                <h3 style="margin: 16px 0 8px;">Odoo to WhatsApp Automation</h3>
                                <p>Automatically send WhatsApp notifications from Odoo based on business events</p>
                            </div>
                            <div class="feature-card-odoo"><i class="fas fa-lock"
                                    style="color: #714B67; font-size: 28px;"></i>
                                <h3 style="margin: 16px 0 8px;">Secure API Authentication</h3>
                                <p>Bearer Token Authentication with end-to-end encryption</p>
                            </div>
                            <div class="feature-card-odoo"><i class="fas fa-chart-simple"
                                    style="color: #714B67; font-size: 28px;"></i>
                                <h3 style="margin: 16px 0 8px;">Real-time Delivery</h3>
                                <p>Instant message delivery with retry & queue management</p>
                            </div>
                            <div class="feature-card-odoo"><i class="fas fa-palette"
                                    style="color: #714B67; font-size: 28px;"></i>
                                <h3 style="margin: 16px 0 8px;">Customizable Templates</h3>
                                <p>Create separate templates for customers & admins</p>
                            </div>
                            <div class="feature-card-odoo"><i class="fas fa-toggle-on"
                                    style="color: #714B67; font-size: 28px;"></i>
                                <h3 style="margin: 16px 0 8px;">Auto & Manual Triggers</h3>
                                <p>Flexible trigger options for any workflow</p>
                            </div>
                            <div class="feature-card-odoo"><i class="fas fa-chart-line"
                                    style="color: #714B67; font-size: 28px;"></i>
                                <h3 style="margin: 16px 0 8px;">Delivery Status Tracking</h3>
                                <p>Monitor all messages from unified dashboard</p>
                            </div>
                        </div>
                    </div>

                    <!-- HeyDoot API Integration -->
                    <div id="api-integration" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div class="section-icon"><i class="fas fa-code"
                                    style="color: #714B67; font-size: 22px;"></i></div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">HeyDoot API Integration</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 28px;">
                            <div class="feature-pair">
                                <div class="feature-pair-content">
                                    <div class="feature-pair-badge"><i class="fas fa-code"></i> Simple Setup</div>
                                    <h3 style=" font-size: 18px;">HeyDoot API Integration</h3>
                                    <p style=" font-size: 16px;">Easily connect Odoo with HeyDoot using secure API
                                        credentials. Our RESTful
                                        API makes integration
                                        straightforward for developers and non-technical users alike.</p>
                                    <ul class="feature-list-check">
                                        <li><i class="fas fa-check-circle"></i> Secure Bearer Token Authentication
                                        </li>
                                        <li><i class="fas fa-check-circle"></i> Simple API Configuration with
                                            webhook support</li>
                                        <li><i class="fas fa-check-circle"></i> Real-time Message Delivery with low
                                            latency</li>
                                        <li><i class="fas fa-check-circle"></i> Retry & Queue Management for failed
                                            messages</li>
                                        <li><i class="fas fa-check-circle"></i> Delivery Status Tracking with
                                            analytics</li>
                                    </ul>
                                    <a href="<?php echo defined('BASE_URL') ? BASE_URL : '/'; ?>integrations/odoo.php"
                                        class="btn btn-ghost-dark" style="margin-top: 20px; padding: 8px 15px;">Read
                                        API Docs <i class="fas fa-arrow-right"></i></a>
                                </div>
                                <div class="feature-pair-image">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/logo/heydoot.webp"
                                        alt="API Integration Dashboard">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp Templates for Admin & Customers -->
                    <div id="whatsapp-templates" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div class="section-icon"><i class="fas fa-file-alt"
                                    style="color: #714B67; font-size: 22px;"></i></div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">WhatsApp Templates for Admin & Customers
                            </h2>
                        </div>
                        <div
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px,1fr)); gap: 28px;">
                            <div class="feature-card-odoo">
                                <h3><i class="fas fa-user" style="color: #714B67;"></i> Customer Notifications</h3>
                                <ul style="margin-top: 16px; list-style: none;">
                                    <li>✓ Order confirmation</li>
                                    <li>✓ Invoice updates</li>
                                    <li>✓ Shipping updates</li>
                                    <li>✓ Delivery alerts</li>
                                    <li>✓ Payment reminders</li>
                                </ul>
                            </div>
                            <div class="feature-card-odoo">
                                <h3><i class="fas fa-user-shield" style="color: #714B67;"></i> Admin Notifications</h3>
                                <ul style="margin-top: 16px; list-style: none;">
                                    <li>✓ New order alerts</li>
                                    <li>✓ Purchase approvals</li>
                                    <li>✓ Failed transactions</li>
                                    <li>✓ Inventory warnings</li>
                                    <li>✓ Delivery status alerts</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Custom WhatsApp Templates -->
                    <div id="custom-templates" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div class="section-icon"><i class="fas fa-pen-fancy"
                                    style="color: #714B67; font-size: 22px;"></i></div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Custom WhatsApp Templates</h2>
                        </div>
                        <div class="feature-card" style="background: white; border-radius: 28px; padding: 28px;">
                            <p>Create dynamic templates with Odoo variables like:</p>
                            <div style="display: flex; flex-wrap: wrap; gap: 12px; margin: 20px 0;">
                                <span class="badge-trigger">Customer Name</span>
                                <span class="badge-trigger">Order ID</span>
                                <span class="badge-trigger">Invoice Number</span>
                                <span class="badge-trigger">Product Details</span>
                                <span class="badge-trigger">Payment Amount</span>
                                <span class="badge-trigger">Delivery Status</span>
                            </div>
                            <div class="template-example">
                                <i class="fas fa-comment-dots"
                                    style="color: #714B67; margin-bottom: 12px; display: inline-block;"></i>
                                <strong>Template Example:</strong>
                                <p style="margin-top: 12px; font-family: monospace;">
                                    Dear {{customer_name}},<br><br>
                                    Your order {{order_reference}} has been confirmed successfully.<br><br>
                                    Amount: {{amount}}<br>
                                    Status: {{status}}<br><br>
                                    Thank you,<br>
                                    {{company_name}}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Manual & Automatic Trigger Options -->
                    <div id="trigger-options" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div class="section-icon"><i class="fas fa-bolt"
                                    style="color: #714B67; font-size: 22px;"></i></div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Manual & Automatic Trigger Options</h2>
                        </div>

                        <div style="margin-bottom: 28px;">
                            <h3 style="font-size: 1.3rem; margin-bottom: 16px;"><span class="badge-trigger badge-auto">⚡
                                    Automatic Triggers</span></h3>
                            <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px;">
                                <p>Send messages automatically when an event occurs in Odoo.</p>
                                <div style="display: flex; flex-wrap: wrap; gap: 12px; margin-top: 16px;">
                                    <span class="badge-trigger">Sales Order Confirmed</span>
                                    <span class="badge-trigger">PO Approved</span>
                                    <span class="badge-trigger">Invoice Generated</span>
                                    <span class="badge-trigger">Delivery Completed</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 style="font-size: 1.3rem; margin-bottom: 16px;"><span
                                    class="badge-trigger badge-manual">📝 Manual Triggers</span></h3>
                            <div class="feature-card" style="background: white; border-radius: 28px; padding: 24px;">
                                <p>Allow admins or staff to send WhatsApp notifications manually from Odoo.</p>
                                <div style="display: flex; flex-wrap: wrap; gap: 12px; margin-top: 16px;">
                                    <span class="badge-trigger">Follow-ups</span>
                                    <span class="badge-trigger">Payment reminders</span>
                                    <span class="badge-trigger">Customer support</span>
                                    <span class="badge-trigger">Custom alerts</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Business Events Automation -->
                    <div id="business-events" style="margin-bottom: 56px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div class="section-icon"><i class="fas fa-chart-line"
                                    style="color: #714B67; font-size: 22px;"></i></div>
                            <h2 style="font-size: 1.8rem; font-weight: 700;">Business Events Automation</h2>
                        </div>
                        <div class="feature-grid-odoo"
                            style="grid-template-columns: repeat(auto-fit, minmax(240px,1fr));">
                            <div class="feature-card-odoo"><i class="fas fa-shopping-cart"></i> Sales Order Confirmation
                            </div>
                            <div class="feature-card-odoo"><i class="fas fa-file-signature"></i> Purchase Order Approval
                            </div>
                            <div class="feature-card-odoo"><i class="fas fa-file-invoice"></i> Invoice Updates</div>
                            <div class="feature-card-odoo"><i class="fas fa-shipping-fast"></i> Shipping Notifications
                            </div>
                            <div class="feature-card-odoo"><i class="fas fa-check-double"></i> Delivery Confirmation
                            </div>
                            <div class="feature-card-odoo"><i class="fas fa-exclamation-triangle"></i> Backorder Alerts
                            </div>
                            <div class="feature-card-odoo"><i class="fas fa-credit-card"></i> Payment Status Updates
                            </div>
                            <div class="feature-card-odoo"><i class="fas fa-boxes"></i> Inventory Notifications</div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div
                        style="background: linear-gradient(115deg, #2d1b28, #4a2c42); border-radius: 32px; padding: 48px; text-align: center; margin: 56px 0 32px; color: white;">
                        <i class="fab fa-whatsapp" style="font-size: 56px; color: #25D366; margin-bottom: 16px;"></i>
                        <h2 style="font-size: 2rem; font-weight: 800;">Ready to automate Odoo notifications?</h2>
                        <p style="margin-top: 16px; max-width: 600px; margin-left: auto; margin-right: auto;">Connect
                            Odoo with WhatsApp in minutes. No WhatsApp Business API approval required.</p>
                        <div style="margin-top: 32px;">
                            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%20Doot%20team%2C%20I%27d%20like%20a%20price%20quote%20for%20the%20Doot%20License."
                                class="btn btn-lg" style="background: white; color: #714B67; font-weight: 700;"><i
                                    class="fab fa-whatsapp"></i> Get Started Today</a>
                            <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>"
                                class="btn btn-outline-light btn-lg" style="margin-left: 16px;"><i
                                    class="fas fa-calendar-alt"></i> Book a Demo</a>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div id="faq-odoo-service" style="margin-top: 48px;">
                        <h3 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 24px;"><i
                                class="fas fa-question-circle" style="color: #714B67;"></i> Frequently Asked Questions
                        </h3>

                        <div class="faq-item">
                            <div class="faq-question">Do I need WhatsApp Business API approval? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">No! HeyDoot handles all WhatsApp Business API complexities. You just
                                need a WhatsApp Business number connected via HeyDoot.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">How long does integration take? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Most businesses complete the setup in under 10 minutes using our API
                                configuration guide.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Can I send bulk WhatsApp messages from Odoo? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Yes, you can send bulk notifications using our queue management
                                system with retry handling.</div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">Is there a free trial available? <i
                                    class="fas fa-chevron-down"></i></div>
                            <div class="faq-answer">Yes, we offer a 14-day free trial with full Odoo integration
                                features.</div>
                        </div>
                    </div>

                </main>
            </div>

            <!-- Utility bar -->
            <div
                style="display: flex; justify-content: flex-end; gap: 28px; margin-top: 56px; padding-top: 24px; border-top: 1px solid #e2e8f0; flex-wrap: wrap;">
                <div style="display: flex; gap: 16px; align-items: center;">
                    <span><i class="fas fa-search"></i> Search...</span>
                    <span
                        style="background: #f1f5f9; padding: 6px 12px; border-radius: 12px; font-family: monospace;">Ctrl
                        K</span>
                    <a href="<?php echo BASE_URL; ?>/integrations/odoo.php" style="color: #714B67;"><i
                            class="fas fa-code"></i> API Documentation</a>
                    <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>"><i class="fas fa-headset"></i>
                        Support</a>
                    <a href="#" class="btn btn-sm" style="background: #714B67; color: white;"><i
                            class="fas fa-tachometer-alt"></i> Dashboard</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include ROOT_PATH . '/components/footer.php'; ?>