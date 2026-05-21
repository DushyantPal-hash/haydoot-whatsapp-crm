<?php
// Meta tags configuration for the services page
$page_meta = [
    'title' => 'HeyDoot - Odoo WhatsApp Integration Services | Automate ERP Notifications',
    'meta_title' => 'HeyDoot – Odoo WhatsApp Integration Services | Automate ERP Notifications',
    'description' => 'Connect Odoo ERP with WhatsApp using HeyDoot. Automate order confirmations, invoice updates, delivery alerts, and purchase notifications. No WhatsApp Business API required.',
    'og_title' => 'HeyDoot - Odoo WhatsApp Integration Services',
    'og_description' => 'Seamless Odoo to WhatsApp integration. Send automated notifications for sales orders, invoices, deliveries, and purchase approvals directly to customers and admins.',
    'og_image' => 'https://heydoot.com/public/images/odoo-whatsapp-integration.webp',
    'og_url' => 'https://heydoot.com/services/odoo-whatsapp-integration',
    'twitter_title' => 'HeyDoot - Odoo WhatsApp Integration Services',
    'twitter_description' => 'Automate Odoo notifications on WhatsApp. Real-time ERP updates for orders, invoices, shipments, and more — no API complexity.',
    'twitter_image' => 'https://heydoot.com/public/images/odoo-whatsapp-integration.webp',
    'canonical' => 'https://heydoot.com/services/odoo-whatsapp-integration'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "Service",
    "name" => "Odoo WhatsApp Integration Service",
    "provider" => [
        "@type" => "Organization",
        "name" => "HashStudioz Technologies",
        "url" => "https://www.hashstudioz.com/"
    ],
    "description" => "Connect Odoo ERP with WhatsApp using HeyDoot API. Automate order confirmations, invoice updates, delivery alerts, purchase notifications, and custom messages to customers and admins.",
    "offers" => [
        "@type" => "Offer",
        "price" => "0",
        "priceCurrency" => "USD",
        "description" => "Free trial available"
    ],
    "areaServed" => "Worldwide",
    "serviceType" => "ERP Integration"
];

$page_gtag_id = 'G-Q64SDSY0Y4';

// Fixed: Correct path to config.php - going up one level from heydoot folder
require_once 'config.php';
$page_title = "Odoo WhatsApp Integration - HeyDoot Services";
include 'components/header.php';
include 'components/navbar.php';
?>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-icons-font@v11/font/simple-icons.min.css">

<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #2d1b28 0%, #4a2c42 100%);
        --primary-color: #714B67;
        --primary-dark: #5a3a52;
        --wa-green: #25D366;
        --wa-teal: #128C7E;
        --card-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        background: #fafafc;
        color: #1a1a2e;
    }

    .container-fluid {
        width: 90%;
        max-width: 1280px;
        margin: 0 auto;
    }

    /* Hero Section */
    .hero {
        position: relative;
        background: var(--primary-gradient);
        padding: 80px 0;
        overflow: hidden;
        text-align: center;
    }

    .floating-dots {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: radial-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px);
        background-size: 24px 24px;
        pointer-events: none;
    }

    .hero-header {
        max-width: 900px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        padding: 0 20px;
    }

    .hero h1 {
        color: white;
        font-size: 3rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 20px;
    }

    .hero-desc {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto 24px;
    }

    .cta-group {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 32px;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 28px;
        border-radius: 40px;
        font-weight: 600;
        transition: var(--transition);
        text-decoration: none;
        border: none;
        cursor: pointer;
    }

    .btn-lg {
        padding: 14px 36px;
        font-size: 1rem;
    }

    .btn-primary {
        background: var(--wa-green);
        color: white;
    }

    .btn-primary:hover {
        background: #075E54;
        transform: translateY(-3px);
        box-shadow: 0 12px 22px -8px rgba(37, 211, 102, 0.3);
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
        border: 2px solid var(--primary-color);
        color: var(--primary-color);
    }

    .btn-ghost-dark:hover {
        background: var(--primary-color);
        color: white;
    }

    /* Visual Stage */
    .visual-stage {
        margin-top: 48px;
        position: relative;
        min-height: 400px;
    }

    .float-card {
        position: absolute;
        background: white;
        padding: 12px 20px;
        border-radius: 40px;
        display: flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        font-weight: 600;
        animation: float 6s ease-in-out infinite;
        z-index: 10;
    }

    .card-1 {
        top: 20px;
        left: 5%;
        animation-delay: 0s;
    }

    .card-2 {
        top: 100px;
        right: 5%;
        animation-delay: 1s;
    }

    .card-3 {
        bottom: 60px;
        left: 8%;
        animation-delay: 2s;
    }

    .card-4 {
        bottom: 20px;
        right: 8%;
        animation-delay: 3s;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    .mockup-phone-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .mockup-phone {
        max-width: 350px;
        margin: 0 auto;
        background: #1e1e2a;
        border-radius: 48px;
        padding: 12px;
        box-shadow: 0 30px 50px -20px rgba(0, 0, 0, 0.4);
    }

    .mockup-phone-inner {
        background: #2a2a35;
        border-radius: 40px;
        padding: 40px 24px;
        text-align: center;
    }

    .mockup-phone img {
        width: 100%;
        border-radius: 32px;
        display: block;
    }

    /* Section Styles */
    .section-container {
        padding: 80px 0;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 800;
        text-align: center;
        margin-bottom: 16px;
        color: #1a1a2e;
    }

    .section-sub {
        text-align: center;
        color: #4a5568;
        max-width: 700px;
        margin: 0 auto 48px;
        font-size: 1.1rem;
    }

    .security-badge {
        display: inline-block;
        background: rgba(113, 75, 103, 0.1);
        color: var(--primary-color);
        padding: 6px 16px;
        border-radius: 40px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 20px;
    }

    /* Feature Pairs */
    .feature-pair {
        display: flex;
        align-items: center;
        gap: 60px;
        margin-bottom: 80px;
        flex-wrap: wrap;
    }

    .feature-pair:nth-child(even) {
        flex-direction: row-reverse;
    }

    .feature-pair-content {
        flex: 1;
        min-width: 280px;
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
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    .feature-pair-content h3 {
        font-size: 1.8rem;
        margin-bottom: 16px;
    }

    .feature-pair-content p {
        color: #4a5568;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .feature-list-check {
        list-style: none;
    }

    .feature-list-check li {
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .feature-list-check li i {
        color: var(--primary-color);
    }

    .feature-pair-image {
        flex: 1;
        min-width: 280px;
    }

    .feature-pair-image img {
        width: 100%;
        border-radius: 32px;
        box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.1);
    }

    /* Feature Grid */
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 24px;
    }

    .feature-card {
        background: white;
        border-radius: 28px;
        padding: 32px;
        text-align: center;
        transition: var(--transition);
        box-shadow: var(--card-shadow);
        border: 1px solid rgba(0, 0, 0, 0.04);
    }

    .feature-card:hover {
        transform: translateY(-6px);
    }

    .feature-icon {
        width: 64px;
        height: 64px;
        background: rgba(113, 75, 103, 0.1);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 28px;
        color: var(--primary-color);
    }

    /* Automation Grid */
    .automation-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .automation-card {
        background: white;
        border-radius: 28px;
        padding: 32px;
        transition: var(--transition);
        box-shadow: var(--card-shadow);
    }

    .automation-icon {
        width: 56px;
        height: 56px;
        background: rgba(113, 75, 103, 0.1);
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    .automation-card h3 {
        margin-bottom: 12px;
    }

    .automation-card p {
        color: #4a5568;
        line-height: 1.5;
        margin-bottom: 16px;
    }

    .automation-tag {
        display: inline-block;
        background: #f0f0f0;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.7rem;
        margin-bottom: 16px;
    }

    .automation-feature-list {
        list-style: none;
        margin-top: 16px;
    }

    .automation-feature-list li {
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.9rem;
    }

    .automation-feature-list li i {
        color: var(--primary-color);
        font-size: 0.8rem;
    }

    /* Template Showcase */
    .template-showcase {
        background: white;
        border-radius: 32px;
        padding: 40px;
        box-shadow: var(--card-shadow);
    }

    .template-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 30px;
    }

    .template-card {
        background: #f8f9fc;
        border-radius: 24px;
        padding: 24px;
        border-left: 4px solid var(--primary-color);
    }

    .template-card h4 {
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .template-code {
        background: #1e1e2a;
        color: #e2e8f0;
        padding: 16px;
        border-radius: 16px;
        font-family: monospace;
        font-size: 0.8rem;
        margin-top: 16px;
    }

    /* Trigger Options */
    .trigger-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
    }

    .trigger-card {
        background: white;
        border-radius: 28px;
        padding: 28px;
        box-shadow: var(--card-shadow);
    }

    .trigger-badge {
        display: inline-block;
        padding: 6px 14px;
        border-radius: 30px;
        font-size: 0.75rem;
        font-weight: 600;
        margin-bottom: 16px;
    }

    .trigger-badge.auto {
        background: #e3f2fd;
        color: #0d6efd;
    }

    .trigger-badge.manual {
        background: #fff3e0;
        color: #fd7e14;
    }

    .trigger-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 16px;
    }

    .trigger-tag {
        background: #e9ecef;
        padding: 6px 14px;
        border-radius: 30px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    /* CTA Section */
    .cta-section {
        background: linear-gradient(115deg, #2d1b28, #4a2c42);
        border-radius: 48px;
        padding: 60px;
        text-align: center;
        color: white;
    }

    .cta-section h2 {
        font-size: 2rem;
        margin-bottom: 16px;
    }

    .cta-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 32px;
    }

    .btn-cta-white {
        background: white;
        color: var(--primary-color);
    }

    .btn-cta-white:hover {
        background: var(--wa-green);
        color: white;
    }

    /* FAQ Section */
    .faq-item {
        background: white;
        border-radius: 20px;
        margin-bottom: 16px;
        overflow: hidden;
        transition: var(--transition);
        border: 1px solid #eef2f6;
    }

    .faq-question {
        padding: 20px 24px;
        font-weight: 700;
        font-size: 1.1rem;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: white;
        transition: var(--transition);
    }

    .faq-question:hover {
        background: #f8f5f7;
    }

    .faq-question i {
        transition: transform 0.3s;
    }

    .faq-answer {
        padding: 0 24px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease-out;
        color: #4a5568;
        line-height: 1.6;
    }

    .faq-item.active .faq-answer {
        padding: 0 24px 24px 24px;
        max-height: 300px;
    }

    .faq-item.active .faq-question i {
        transform: rotate(180deg);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2rem;
        }

        .hero-desc {
            font-size: 1rem;
        }

        .float-card {
            display: none;
        }

        .feature-pair {
            flex-direction: column !important;
            gap: 30px;
        }

        .section-title {
            font-size: 1.8rem;
        }

        .cta-section {
            padding: 40px 20px;
        }

        .cta-section h2 {
            font-size: 1.5rem;
        }
    }
</style>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="floating-dots"></div>
        <div class="hero-header">
            <div
                style="display: inline-block; background: rgba(255,255,255,0.12); backdrop-filter: blur(8px); padding: 6px 18px; border-radius: 60px; margin-bottom: 24px;">
                <span style="color: #ffffff; font-weight: 700; display: flex; align-items: center; gap: 10px;">
                    <i class="si si-odoo"></i> Odoo WhatsApp Integration
                </span>
            </div>
            <h1>Automate <span style="color: #ffffff;">Odoo Notifications</span> <br>on WhatsApp with <span
                    style="color: #ffffff;">HeyDoot</span></h1>
            <p class="hero-desc">Connect your Odoo ERP with WhatsApp using the HeyDoot API and automatically send order
                updates, purchase notifications, delivery alerts, invoices, and custom messages to customers and admins.
            </p>
            <p class="hero-desc" style="font-size: 1rem;">No WhatsApp Business API approval complexity. Fast setup with
                customizable templates and manual or automated triggers.</p>
            <div class="cta-group">
                <a href="https://wa.me/<?php echo defined('WHATSAPP_NUMBER') ? WHATSAPP_NUMBER : '1234567890'; ?>?text=Hi%2C%20I%27d%20like%20to%20integrate%20Odoo%20with%20WhatsApp"
                    class="btn btn-primary btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i> Start Integration
                </a>
                <a href="<?php echo defined('BASE_URL') ? BASE_URL : '/'; ?>integrations/odoo.php"
                    class="btn btn-secondary btn-lg">
                    <i class="fas fa-book-open"></i> View Documentation
                </a>
            </div>
            <div class="visual-stage">
                <div class="float-card card-1"><i class="fab fa-whatsapp" style="color:#25D366;"></i> <span>Order
                        Confirmed → WhatsApp</span></div>
                <div class="float-card card-2"><i class="fas fa-file-invoice" style="color:var(--primary-color);"></i>
                    <span>Invoice Updates</span>
                </div>
                <div class="float-card card-3"><i class="fas fa-shipping-fast" style="color:#128C7E;"></i>
                    <span>Delivery Alerts</span>
                </div>
                <div class="float-card card-4"><i class="fas fa-chart-line" style="color:#f5b042;"></i> <span>Real-time
                        Analytics</span></div>
                <div class="mockup-phone-wrapper">
                    <div class="mockup-phone">
                        <div class="mockup-phone-inner">
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <i class="si si-odoo" style="font-size: 48px; color: var(--primary-color);"></i>
                                <i class="fas fa-plus" style="margin: 0 20px; color: white;"></i>
                                <i class="fab fa-whatsapp" style="font-size: 48px; color: #25D366;"></i>
                            </div>
                            <p style="color: #aaa; margin-top: 16px;">Real-time ERP notifications · 2-way sync</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 1) Key Features Section -->
    <section id="key-features" class="section-container" style="background: #FDF7F0;">
        <div class="container-fluid">
            <div style="text-align: center; margin-bottom: 20px;">
                <span class="security-badge">⚡ Enterprise Integration</span>
                <h2 class="section-title">Everything you need to connect Odoo & WhatsApp</h2>
                <p class="section-sub">Powerful features that transform how your business communicates ERP updates via
                    WhatsApp.</p>
            </div>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-check-circle"></i></div>
                    <h3>Odoo to WhatsApp Automation</h3>
                    <p>Automatically send WhatsApp notifications from Odoo based on business events like order
                        confirmation, invoice generation, and delivery updates.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-lock"></i></div>
                    <h3>Secure API Authentication</h3>
                    <p>Bearer Token Authentication with end-to-end encryption ensures your business data remains
                        protected at all times.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Real-time Delivery</h3>
                    <p>Instant message delivery with automatic retry mechanisms and queue management for high-volume
                        scenarios.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-palette"></i></div>
                    <h3>Customizable Templates</h3>
                    <p>Create separate notification templates for customers and admins with dynamic Odoo variables.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-toggle-on"></i></div>
                    <h3>Auto & Manual Triggers</h3>
                    <p>Flexible trigger options for any workflow — automatic on events or manual from Odoo interface.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Delivery Status Tracking</h3>
                    <p>Monitor all messages from a unified dashboard with detailed delivery and read receipts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2) API Integration Section -->
    <section id="api-integration" class="section-container" style="background: #F0F8FF;">
        <div class="container-fluid">
            <div class="feature-pair">
                <div class="feature-pair-content">
                    <div class="feature-pair-badge"><i class="fas fa-code"></i> Simple Setup</div>
                    <h3>HeyDoot API Integration</h3>
                    <p>Easily connect Odoo with HeyDoot using secure API credentials. Our RESTful API makes integration
                        straightforward for developers and non-technical users alike.</p>
                    <ul class="feature-list-check">
                        <li><i class="fas fa-check-circle"></i> Secure Bearer Token Authentication</li>
                        <li><i class="fas fa-check-circle"></i> Simple API Configuration with webhook support</li>
                        <li><i class="fas fa-check-circle"></i> Real-time Message Delivery with low latency</li>
                        <li><i class="fas fa-check-circle"></i> Retry & Queue Management for failed messages</li>
                        <li><i class="fas fa-check-circle"></i> Delivery Status Tracking with analytics</li>
                    </ul>
                    <a href="<?php echo defined('BASE_URL') ? BASE_URL : '/'; ?>integrations/odoo.php"
                        class="btn btn-ghost-dark" style="margin-top: 20px;">Read API Docs <i
                            class="fas fa-arrow-right"></i></a>
                </div>
                <div class="feature-pair-image">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop"
                        alt="API Integration Dashboard">
                </div>
            </div>
        </div>
    </section>

    <!-- 3) WhatsApp Templates Section -->
    <section id="whatsapp-templates" class="section-container" style="background: #FDF7F0;">
        <div class="container-fluid">
            <div style="text-align: center; margin-bottom: 20px;">
                <span class="security-badge"><i class="fas fa-file-alt"></i> Ready-to-Use Templates</span>
                <h2 class="section-title">WhatsApp Templates for Admin & Customers</h2>
                <p class="section-sub">Pre-built templates for common Odoo events — fully customizable to match your
                    brand voice.</p>
            </div>
            <div class="template-showcase">
                <div class="template-grid">
                    <div class="template-card">
                        <h4><i class="fas fa-user" style="color: var(--primary-color);"></i> Customer Notifications</h4>
                        <ul style="list-style: none;">
                            <li>✓ Order confirmation with details</li>
                            <li>✓ Invoice generation alerts</li>
                            <li>✓ Shipping and tracking updates</li>
                            <li>✓ Delivery confirmation</li>
                            <li>✓ Payment reminders</li>
                        </ul>
                    </div>
                    <div class="template-card">
                        <h4><i class="fas fa-user-shield" style="color: var(--primary-color);"></i> Admin Notifications
                        </h4>
                        <ul style="list-style: none;">
                            <li>✓ New order alerts</li>
                            <li>✓ Purchase order approvals</li>
                            <li>✓ Failed transaction alerts</li>
                            <li>✓ Low inventory warnings</li>
                            <li>✓ Delivery status exceptions</li>
                        </ul>
                    </div>
                    <div class="template-card">
                        <h4><i class="fas fa-pen-fancy" style="color: var(--primary-color);"></i> Custom Templates</h4>
                        <p>Create dynamic templates with Odoo variables:</p>
                        <div class="template-code">
                            Dear {{customer_name}},<br>
                            Your order {{order_reference}} has been confirmed.<br>
                            Amount: {{amount}} | Status: {{status}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4) Trigger Options Section -->
    <section id="trigger-options" class="section-container" style="background: #F0F8FF;">
        <div class="container-fluid">
            <div style="text-align: center; margin-bottom: 20px;">
                <span class="security-badge"><i class="fas fa-bolt"></i> Flexible Workflows</span>
                <h2 class="section-title">Manual & Automatic Trigger Options</h2>
                <p class="section-sub">Choose how and when WhatsApp notifications are sent from your Odoo instance.</p>
            </div>
            <div class="trigger-grid">
                <div class="trigger-card">
                    <span class="trigger-badge auto">⚡ Automatic Triggers</span>
                    <h3>Event-Based Automation</h3>
                    <p>Send messages automatically when specific events occur in Odoo — no manual intervention required.
                    </p>
                    <div class="trigger-list">
                        <span class="trigger-tag">Sales Order Confirmed</span>
                        <span class="trigger-tag">PO Approved</span>
                        <span class="trigger-tag">Invoice Generated</span>
                        <span class="trigger-tag">Delivery Completed</span>
                        <span class="trigger-tag">Payment Received</span>
                        <span class="trigger-tag">Inventory Low</span>
                    </div>
                </div>
                <div class="trigger-card">
                    <span class="trigger-badge manual">📝 Manual Triggers</span>
                    <h3>On-Demand Sending</h3>
                    <p>Allow admins or staff to send WhatsApp notifications manually from within Odoo when needed.</p>
                    <div class="trigger-list">
                        <span class="trigger-tag">Customer Follow-ups</span>
                        <span class="trigger-tag">Payment Reminders</span>
                        <span class="trigger-tag">Support Responses</span>
                        <span class="trigger-tag">Custom Alerts</span>
                        <span class="trigger-tag">Bulk Announcements</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5) Business Events Automation -->
    <section id="business-events" class="section-container" style="background: #FDF7F0;">
        <div class="container-fluid">
            <div style="text-align: center; margin-bottom: 20px;">
                <span class="security-badge"><i class="fas fa-chart-line"></i> Full Coverage</span>
                <h2 class="section-title">Business Events Automation</h2>
                <p class="section-sub">Automate notifications across your entire Odoo workflow.</p>
            </div>
            <div class="feature-grid">
                <div class="feature-card"><i class="fas fa-shopping-cart"
                        style="font-size: 28px; color: var(--primary-color); margin-bottom: 16px; display: block;"></i>
                    <h3>Sales Order Confirmation</h3>
                </div>
                <div class="feature-card"><i class="fas fa-file-signature"
                        style="font-size: 28px; color: var(--primary-color); margin-bottom: 16px; display: block;"></i>
                    <h3>Purchase Order Approval</h3>
                </div>
                <div class="feature-card"><i class="fas fa-file-invoice"
                        style="font-size: 28px; color: var(--primary-color); margin-bottom: 16px; display: block;"></i>
                    <h3>Invoice Updates</h3>
                </div>
                <div class="feature-card"><i class="fas fa-shipping-fast"
                        style="font-size: 28px; color: var(--primary-color); margin-bottom: 16px; display: block;"></i>
                    <h3>Shipping Notifications</h3>
                </div>
                <div class="feature-card"><i class="fas fa-check-double"
                        style="font-size: 28px; color: var(--primary-color); margin-bottom: 16px; display: block;"></i>
                    <h3>Delivery Confirmation</h3>
                </div>
                <div class="feature-card"><i class="fas fa-exclamation-triangle"
                        style="font-size: 28px; color: var(--primary-color); margin-bottom: 16px; display: block;"></i>
                    <h3>Backorder Alerts</h3>
                </div>
                <div class="feature-card"><i class="fas fa-credit-card"
                        style="font-size: 28px; color: var(--primary-color); margin-bottom: 16px; display: block;"></i>
                    <h3>Payment Status Updates</h3>
                </div>
                <div class="feature-card"><i class="fas fa-boxes"
                        style="font-size: 28px; color: var(--primary-color); margin-bottom: 16px; display: block;"></i>
                    <h3>Inventory Notifications</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- 6) Why Choose HeyDoot for Odoo Integration -->
    <section id="why-choose" class="section-container" style="background: #F0F8FF;">
        <div class="container-fluid">
            <div class="feature-pair">
                <div class="feature-pair-image">
                    <img src="<?php echo BASE_URL; ?>/assets/images/logo/heydoot.webp" alt="Why Choose HeyDoot">
                </div>
                <div class="feature-pair-content">
                    <div class="feature-pair-badge"><i class="fas fa-gem"></i> Why HeyDoot</div>
                    <h3>The smarter way to connect Odoo & WhatsApp</h3>
                    <ul class="feature-list-check">
                        <li><i class="fas fa-check-circle"></i> <strong>No WhatsApp Business API needed</strong> — Use
                            your existing numbers without approval delays</li>
                        <li><i class="fas fa-check-circle"></i> <strong>10-minute setup</strong> — Most businesses
                            complete integration in under 10 minutes</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Unlimited scalability</strong> — From startups
                            to enterprises handling thousands of messages</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Dedicated support</strong> — 24/7 live chat and
                            onboarding assistance</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Cost-effective</strong> — No per-conversation
                            pricing, predictable monthly subscription</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 7) FAQ Section -->
    <section id="faq" class="section-container" style="background: #FDF7F0;">
        <div class="container-fluid">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-sub">Everything you need to know about Odoo WhatsApp integration.</p>
            <div>
                <div class="faq-item">
                    <div class="faq-question">Do I need WhatsApp Business API approval? <i
                            class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">No! HeyDoot handles all WhatsApp Business API complexities. You just need a
                        WhatsApp Business number connected via HeyDoot — no lengthy approval process required.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How long does integration take? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Most businesses complete the setup in under 10 minutes using our API
                        configuration guide. We provide step-by-step documentation and live support if needed.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can I send bulk WhatsApp messages from Odoo? <i
                            class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Yes, you can send bulk notifications using our queue management system with
                        automatic retry handling. Perfect for promotional campaigns and mass alerts.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Is there a free trial available? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Yes, we offer a 14-day free trial with full Odoo integration features
                        included. No credit card required.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What Odoo versions are supported? <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">HeyDoot supports Odoo 12, 13, 14, 15, 16, and 17 — both Community and
                        Enterprise editions.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can I customize notification templates? <i
                            class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Absolutely! You can create fully customized templates with dynamic Odoo
                        variables like customer name, order ID, amount, status, and more.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8) CTA Section -->
    <section class="section-container" style="background: #F0F8FF;">
        <div class="container-fluid">
            <div class="cta-section">
                <i class="fab fa-whatsapp" style="font-size: 56px; color: #25D366; margin-bottom: 16px;"></i>
                <h2>Ready to automate Odoo notifications?</h2>
                <p>Connect Odoo with WhatsApp in minutes. No WhatsApp Business API approval required.</p>
                <div class="cta-buttons">
                    <a href="https://wa.me/<?php echo defined('WHATSAPP_NUMBER') ? WHATSAPP_NUMBER : '1234567890'; ?>?text=Hi%2C%20I%27d%20like%20to%20integrate%20Odoo%20with%20WhatsApp"
                        class="btn btn-primary btn-lg" target="_blank">
                        <i class="fab fa-whatsapp"></i> Get Started Today
                    </a>
                    <a href="tel:<?php echo defined('PHONE_NUMBER') ? str_replace(' ', '', PHONE_NUMBER) : '1234567890'; ?>"
                        class="btn btn-cta-white btn-lg">
                        <i class="fas fa-calendar-alt"></i> Book a Demo
                    </a>
                </div>
                <p style="margin-top: 28px; font-size: 0.85rem; opacity: 0.8;">Free 14-day trial · No credit card
                    required · Cancel anytime</p>
            </div>
        </div>
    </section>
</main>


<?php include 'components/footer.php'; ?>