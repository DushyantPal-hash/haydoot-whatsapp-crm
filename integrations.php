<?php
require_once 'config.php';
$page_title = "Integrations - HeyDoot";
include ROOT_PATH . '/components/header.php';
include ROOT_PATH . '/components/navbar.php';
?>

<!-- Page Content -->
<main>
    <section class="hero" style="padding: 60px 20px;">
        <h1>Seamless <span style="color: #25D366;">Integrations</span></h1>
        <p class="hero-desc">Connect HeyDoot with your favorite tools and supercharge your workflow</p>
    </section>

    <section class="section-container">
        <div class="container-fluid">
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fab fa-slack"></i></div>
                    <h3>Slack</h3>
                    <p>Receive WhatsApp notifications and reply directly from Slack. Keep your team in the loop
                        without switching apps.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fab fa-microsoft"></i></div>
                    <h3>Microsoft Teams</h3>
                    <p>Integrate WhatsApp conversations into Microsoft Teams for seamless collaboration.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fab fa-hubspot"></i></div>
                    <h3>HubSpot CRM</h3>
                    <p>Sync conversations directly to HubSpot. Track customer interactions and manage leads
                        efficiently.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fab fa-salesforce"></i></div>
                    <h3>Salesforce</h3>
                    <p>Two-way sync between WhatsApp and Salesforce. Log messages, create contacts, and update
                        records.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Zapier</h3>
                    <p>Connect with 5000+ apps. Automate workflows between WhatsApp and your favorite tools.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-code"></i></div>
                    <h3>REST API</h3>
                    <p>Build custom integrations with our powerful REST API. Webhooks, real-time events, and more.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-container" style="background: #FDF7F0;">
        <div class="container-fluid">
            <div class="cta-section">
                <h2>Need a custom integration?</h2>
                <p>Our team can help you build exactly what you need.</p>
                <div class="cta-buttons">
                    <a href="javascript:void(0)" class="btn btn-outline-light btn-lg demo-btn">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Page Content Ends here -->

<?php include ROOT_PATH . '/components/footer.php'; ?>