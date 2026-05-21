<?php
$page_meta = [
    'title' => 'Services - HeyDoot',
    'meta_title' => 'HeyDoot Services',
    'description' => 'Explore all HeyDoot WhatsApp CRM services including automation, ticketing, shared inbox, Odoo integration, analytics, and AI workflows.',
    'canonical' => 'https://heydoot.com/services.php'
];

include 'components/header.php';
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
                <i class="fas fa-layer-group"></i> OUR SERVICES
            </span>
            <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 20px;">WhatsApp Solutions Built for <span
                    style="color: var( --wa-green);">Modern Businesses</span></h1>
            <p class="hero-desc" style="font-size: 1.2rem; color: #cdddef; max-width: 700px; margin: 0 auto;">
                Everything you need to manage customer communication, automate workflows,
                and scale your WhatsApp operations with HeyDoot.
            </p>
            <!-- <div class="cta-group" style="margin-top: 32px;">
                <a href="javascript:void(0)" class="btn btn-primary btn-lg"
                    style="background: var( --wa-green); border-color: var( --wa-green);">
                    <i class="fas fa-search"></i> Explore All Integrations
                </a>
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27m%20interested%20in%20custom%20integrations%20for%20HeyDoot"
                    class="btn btn-secondary btn-lg" target="_blank">
                    <i class="fab fa-whatsapp"></i> Request Custom Integration
                </a>
            </div> -->
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="section-container" style="background:#F8FDF9;">
    <div class="container-fluid">

        <h2 class="section-title">Explore HeyDoot Services</h2>

        <p class="section-sub">
            From shared inboxes to AI automation and Odoo integrations —
            HeyDoot helps your team collaborate faster and smarter.
        </p>

        <div class="feature-grid">

            <!-- Odoo Notifications -->
            <a href="<?php echo BASE_URL; ?>/services/odoo.php">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bell"></i>
                    </div>

                    <h3>Odoo Notifications on WhatsApp</h3>

                    <p>
                        Send automated WhatsApp alerts from Odoo for invoices,
                        orders, deliveries, reminders, and customer updates.
                    </p>
                </div>
            </a>

            <!-- Shared Inbox -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-inbox"></i>
                </div>

                <h3>Shared Inbox</h3>

                <p>
                    Manage multiple WhatsApp numbers from one centralized workspace
                    with real-time team collaboration.
                </p>
            </div>

            <!-- Ticketing -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-ticket-alt"></i>
                </div>

                <h3>Ticket Management</h3>

                <p>
                    Convert WhatsApp chats into actionable support tickets,
                    assign teams, and track conversations efficiently.
                </p>
            </div>

            <!-- Group Management -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>

                <h3>WhatsApp Group Management</h3>

                <p>
                    Moderate groups, manage broadcasts, monitor engagement,
                    and scale communities effortlessly.
                </p>
            </div>

            <!-- AI Automation -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-robot"></i>
                </div>

                <h3>AI Automation</h3>

                <p>
                    Automate replies, route conversations intelligently,
                    and streamline repetitive tasks with smart workflows.
                </p>
            </div>

            <!-- Analytics -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>

                <h3>Analytics & Reporting</h3>

                <p>
                    Monitor agent performance, customer engagement,
                    response times, and conversation trends.
                </p>
            </div>

            <!-- CRM Integrations -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-plug"></i>
                </div>

                <h3>CRM Integrations</h3>

                <p>
                    Connect HeyDoot with HubSpot, Salesforce,
                    Pipedrive, Slack, Zapier, and more.
                </p>
            </div>

            <!-- Broadcast Campaigns -->
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>

                <h3>Broadcast Campaigns</h3>

                <p>
                    Send personalized WhatsApp campaigns,
                    announcements, and marketing broadcasts at scale.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- WHY SERVICES SECTION -->
<section class="section-container" style="background:#ffffff;">
    <div class="container-fluid">

        <div style="text-align:center; margin-bottom:50px;">
            <span class="security-badge">
                <i class="fas fa-star"></i> WHY BUSINESSES CHOOSE HEYDOOT
            </span>

            <h2 class="section-title">Built for Sales, Support & Operations Teams</h2>

            <p class="section-sub">
                HeyDoot combines automation, collaboration, analytics,
                and CRM workflows into one powerful WhatsApp workspace.
            </p>
        </div>

        <div class="stats-row">

            <div class="stat-card">
                <div class="stat-number">10x</div>
                <p>Faster Team Collaboration</p>
            </div>

            <div class="stat-card">
                <div class="stat-number">24/7</div>
                <p>Automated Customer Support</p>
            </div>

            <div class="stat-card">
                <div class="stat-number">99.9%</div>
                <p>Reliable Message Sync</p>
            </div>

        </div>

    </div>
</section>

<!-- HOW IT WORKS -->
<section class="section-container" style="background:#FDF7F0;">
    <div class="container-fluid">

        <div style="text-align:center; margin-bottom:60px;">
            <span class="security-badge">
                <i class="fas fa-cogs"></i> SIMPLE PROCESS
            </span>

            <h2 class="section-title">How HeyDoot Works</h2>

            <p class="section-sub">
                Get started within minutes without complicated API approvals.
            </p>
        </div>

        <div class="feature-grid">

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-qrcode"></i>
                </div>

                <h3>Connect WhatsApp</h3>

                <p>
                    Scan QR code and connect your WhatsApp numbers instantly
                    to the HeyDoot dashboard.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users-cog"></i>
                </div>

                <h3>Invite Your Team</h3>

                <p>
                    Add agents, assign permissions,
                    and manage conversations collaboratively.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-rocket"></i>
                </div>

                <h3>Scale Operations</h3>

                <p>
                    Automate workflows, create campaigns,
                    and handle thousands of messages effortlessly.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- INDUSTRIES -->
<section class="section-container" style="background:#F0F8FF;">
    <div class="container-fluid">

        <div style="text-align:center; margin-bottom:60px;">
            <span class="security-badge">
                <i class="fas fa-briefcase"></i> INDUSTRIES
            </span>

            <h2 class="section-title">Industries We Support</h2>

            <p class="section-sub">
                HeyDoot helps businesses across multiple industries streamline communication.
            </p>
        </div>

        <div class="feature-grid">

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <h3>E-commerce</h3>

                <p>
                    Automate order confirmations, shipping updates,
                    and customer support conversations.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-hospital"></i>
                </div>

                <h3>Healthcare</h3>

                <p>
                    Send appointment reminders, patient notifications,
                    and support communication securely.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>

                <h3>Education</h3>

                <p>
                    Manage student communication,
                    announcements, and parent engagement efficiently.
                </p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-building"></i>
                </div>

                <h3>Real Estate</h3>

                <p>
                    Handle property inquiries,
                    automate lead follow-ups, and manage buyers.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- ADVANCED FEATURES -->
<section class="section-container" style="background:#ffffff;">
    <div class="container-fluid">

        <div style="text-align:center; margin-bottom:60px;">
            <span class="security-badge">
                <i class="fas fa-layer-group"></i> ADVANCED FEATURES
            </span>

            <h2 class="section-title">More Powerful Features</h2>

            <p class="section-sub">
                Everything your growing business needs to scale communication.
            </p>
        </div>

        <div class="automation-grid">

            <div class="automation-card">

                <div class="automation-icon">
                    <i class="fas fa-user-tag"></i>
                </div>

                <h3>Smart Assignment</h3>

                <p>
                    Automatically assign chats to available agents
                    using smart routing logic.
                </p>

                <span class="automation-tag">
                    AI Routing
                </span>

            </div>

            <div class="automation-card">

                <div class="automation-icon">
                    <i class="fas fa-comments"></i>
                </div>

                <h3>Internal Collaboration</h3>

                <p>
                    Use internal notes and mentions
                    to collaborate without leaving WhatsApp chats.
                </p>

                <span class="automation-tag">
                    Team Collaboration
                </span>

            </div>

            <div class="automation-card">

                <div class="automation-icon">
                    <i class="fas fa-clock"></i>
                </div>

                <h3>Scheduled Messaging</h3>

                <p>
                    Schedule reminders, campaigns,
                    and customer follow-ups automatically.
                </p>

                <span class="automation-tag">
                    Workflow Automation
                </span>

            </div>

        </div>

    </div>
</section>

<!-- CTA -->
<section class="section-container" style="background:#FDF7F0;">
    <div class="container-fluid">
        <div class="cta-section">
            <h2>
                One Platform for Every WhatsApp Workflow
            </h2>
            <p>
                Support customers, automate operations,
                manage teams, and grow your business with HeyDoot.
            </p>
            <div class="cta-buttons">

                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20HeyDoot%20features"
                    class="btn btn-outline-light btn-lg">

                    <i class="fab fa-whatsapp"></i>
                    Start Free Trial
                </a>

                <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>" class=" btn btn-cta-white btn-lg">

                    <i class="fas fa-phone"></i>
                    Talk to Expert
                </a>

            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>