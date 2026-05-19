<?php
// pages/features.php
$page_meta = [
    'title' => 'Features - HeyDoot WhatsApp CRM',
    'meta_title' => 'Features | HeyDoot - Powerful WhatsApp CRM for Teams',
    'description' => 'Explore HeyDoot\'s powerful features: multi-number inbox, ticket management, group management, AI automation, analytics, and more. Scale your WhatsApp communication.',
    'og_title' => 'Features - HeyDoot WhatsApp CRM',
    'og_description' => 'Discover the powerful features that make HeyDoot the best WhatsApp CRM for teams.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/features',
    'twitter_title' => 'Features - HeyDoot WhatsApp CRM',
    'twitter_description' => 'Powerful WhatsApp features for modern teams.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',
    'canonical' => 'https://heydoot.com/features'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "WebPage",
    "name" => "HeyDoot Features",
    "url" => "https://heydoot.com/features",
    "description" => "WhatsApp CRM features for teams",
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

<style>
    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 40px;
        background: white;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .comparison-table th,
    .comparison-table td {
        padding: 16px;
        text-align: left;
        border-bottom: 1px solid #eef2f6;
    }

    .comparison-table th {
        background: #F8FAFE;
        font-weight: 700;
        color: #1a2a3a;
    }

    .comparison-table td:first-child {
        font-weight: 600;
    }

    .comparison-table i.fa-check {
        color: var(--wa-green);
    }

    .comparison-table i.fa-times {
        color: #cbd5e1;
    }
</style>

<!-- Page Content -->
<main>
    <!-- Hero Section -->
    <section class="integrations-hero" style="background: var(--bg-gradient-green); padding: 80px 0 60px;">
        <div class="floating-dots"></div>
        <div class="container-fluid">
            <div style="text-align: center;">
                <span class="security-badge"
                    style="background: rgba(37, 211, 102, 0.15); color: var(--wa-green); margin-bottom: 20px; display: inline-block;">
                    <i class="fas fa-star"></i> Powerful Features
                </span>
                <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 20px; color: white;">Everything You <span
                        style="color: var(--wa-green);">Need to Succeed</span></h1>
                <p style="font-size: 1.2rem; color: #cdddef; max-width: 700px; margin: 0 auto;">Powerful WhatsApp tools
                    that help your team collaborate, automate, and scale.</p>
                <div class="cta-group" style="margin-top: 32px;">
                    <a href="#all-features" class="btn btn-primary btn-lg"
                        style="background: var(--wa-green); border-color: var(--wa-green);">
                        <i class="fas fa-arrow-down"></i> Explore All Features
                    </a>
                    <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20HeyDoot%20features"
                        class="btn btn-outline-light btn-lg" target="_blank">
                        <i class="fab fa-whatsapp"></i> Chat with Sales
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="all-features" class="feature-showcase">
        <div class="container-fluid" style="width: 90%; max-width: 1280px;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-rocket"></i> Core Features</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">Built for Modern Teams</h2>
                <p style="color: #5a6b7e;">Everything you need to manage WhatsApp at scale</p>
            </div>
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
                <div class="feature-pair-image"><img src="<?php echo BASE_URL; ?>/assets/images//f1.webp"
                        alt="Multi Number Inbox Dashboard"
                        style="border-radius: 32px; box-shadow: 0 20px 30px -10px rgba(0,0,0,0.1);"></div>
            </div>
            <div class="feature-pair">
                <div class="feature-pair-content">
                    <div class="feature-pair-badge"><i class="fas fa-ticket-alt"></i> Workflow Ops</div>
                    <h3>Create Tickets & Tasks</h3>
                    <p>Turn every WhatsApp message into an actionable ticket. Assign priority, set due dates, and
                        convert group discussions into trackable tasks.</p>
                    <ul class="feature-list-check">
                        <li><i class="fas fa-check-circle"></i> One-click ticket creation</li>
                        <li><i class="fas fa-check-circle"></i> Internal notes & @mentions</li>
                        <li><i class="fas fa-check-circle"></i> Automate follow-ups based on status</li>
                    </ul>
                </div>
                <div class="feature-pair-image"><img src="<?php echo BASE_URL; ?>/assets/images//f2.webp"
                        alt="Tickets and Tasks inside HeyDoot"></div>
            </div>
            <div class="feature-pair">
                <div class="feature-pair-content">
                    <div class="feature-pair-badge"><i class="fas fa-users"></i> Community Hub</div>
                    <h3>Manage Groups at Scale</h3>
                    <p>Supercharge your WhatsApp group management: broadcast announcements, moderate members, assign
                        group admins, and auto-respond to FAQs.</p>
                    <ul class="feature-list-check">
                        <li><i class="fas fa-check-circle"></i> Group analytics & member insights</li>
                        <li><i class="fas fa-check-circle"></i> Scheduled broadcasts to multiple groups</li>
                        <li><i class="fas fa-check-circle"></i> Spam & moderation filters</li>
                    </ul>
                </div>
                <div class="feature-pair-image"><img src="<?php echo BASE_URL; ?>/assets/images//f3.webp"
                        alt="WhatsApp Groups Management Dashboard"></div>
            </div>
            <div class="feature-pair">
                <div class="feature-pair-content">
                    <div class="feature-pair-badge"><i class="fas fa-robot"></i> AI + Workflow</div>
                    <h3>Automate Actions</h3>
                    <p>Design smart automation rules: auto-reply to common queries, route messages to the right
                        teammate, trigger webhooks, and create sequences.</p>
                    <ul class="feature-list-check">
                        <li><i class="fas fa-check-circle"></i> Keyword + AI intent detection</li>
                        <li><i class="fas fa-check-circle"></i> Auto-assign labels & priorities</li>
                        <li><i class="fas fa-check-circle"></i> Schedule sequences & drip campaigns</li>
                    </ul>
                </div>
                <div class="feature-pair-image"><img src="<?php echo BASE_URL; ?>/assets/images//f4.webp"
                        alt="Automation actions workflow">
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Features Grid -->
    <section style="background: #F8FAFE; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-plus-circle"></i> More Features</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">And So Much More</h2>
                <p style="color: #5a6b7e;">Advanced capabilities to supercharge your workflow</p>
            </div>
            <div class="feature-grid"
                style="display: grid; grid-template-columns: repeat(auto-fill, minmax(380px, 1fr)); gap: 24px;">
                <div class="feature-card"
                    style="background: #F8FAFE; border-radius: 20px; padding: 24px; transition: transform 0.2s;">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Advanced Analytics</h3>
                    <p>Track conversation volumes, agent performance, response times, and customer satisfaction scores
                        with detailed dashboards and exportable reports.</p>
                </div>
                <div class="feature-card"
                    style="background: #F8FAFE; border-radius: 20px; padding: 24px; transition: transform 0.2s;">
                    <div class="feature-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>REST API Access</h3>
                    <p>Build custom integrations with our powerful API. Send messages, manage contacts, and automate
                        workflows programmatically.</p>
                </div>
                <div class="feature-card"
                    style="background: #F8FAFE; border-radius: 20px; padding: 24px; transition: transform 0.2s;">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Enterprise Security</h3>
                    <p>256-bit encryption, role-based access controls, SSO support, and compliance with GDPR and SOC2
                        standards.</p>
                </div>
                <div class="feature-card"
                    style="background: #F8FAFE; border-radius: 20px; padding: 24px; transition: transform 0.2s;">
                    <div class="feature-icon">
                        <i class="fas fa-sliders-h"></i>
                    </div>
                    <h3>Custom Workflows</h3>
                    <p>Build custom automation workflows with conditions, actions, and triggers tailored to your
                        business processes.</p>
                </div>
                <div class="feature-card"
                    style="background: #F8FAFE; border-radius: 20px; padding: 24px; transition: transform 0.2s;">
                    <div class="feature-icon">
                        <i class="fas fa-tags"></i>
                    </div>
                    <h3>Smart Labeling</h3>
                    <p>Auto-tag conversations based on keywords, sentiment, or custom rules. Organize and filter
                        messages effortlessly.</p>
                </div>
                <div class="feature-card"
                    style="background: #F8FAFE; border-radius: 20px; padding: 24px; transition: transform 0.2s;">
                    <div class="feature-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Canned Responses</h3>
                    <p>Save and reuse message templates. Respond to common questions faster with keyboard shortcuts and
                        templates.</p>
                </div>
                <div class="feature-card"
                    style="background: #F8FAFE; border-radius: 20px; padding: 24px; transition: transform 0.2s;">
                    <div class="feature-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Data Export</h3>
                    <p>Export all your conversations, contacts, and analytics data in CSV or JSON format. No lock-in,
                        full ownership.</p>
                </div>
                <div class="feature-card"
                    style="background: #F8FAFE; border-radius: 20px; padding: 24px; transition: transform 0.2s;">
                    <div class="feature-icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h3>Real-time Notifications</h3>
                    <p>Get instant notifications for new messages, mentions, and assigned chats via browser, email, or
                        webhooks.</p>
                </div>
                <div class="feature-card"
                    style="background: #F8FAFE; border-radius: 20px; padding: 24px; transition: transform 0.2s;">
                    <div class="feature-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Team Management</h3>
                    <p>Set role-based permissions, track agent activity, and manage shifts with detailed team analytics.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Comparison Table -->
    <section style="padding: 60px 0; background: #fff;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-chart-simple"></i> Feature Comparison</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">What's Included in Each Plan?</h2>
                <p style="color: #5a6b7e;">Compare features across our pricing plans</p>
            </div>
            <div style="overflow-x: auto;">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Starter</th>
                            <th>Professional</th>
                            <th>Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>WhatsApp Numbers</td>
                            <td>Up to 3</td>
                            <td>Up to 15</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td>Team Members</td>
                            <td>5</td>
                            <td>20</td>
                            <td>Unlimited</td>
                        </tr>
                        <tr>
                            <td>Shared Inbox</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Ticket Management</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Group Management</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Basic Automation</td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>AI Automation</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>API Access</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Integrations</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Advanced Analytics</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Custom Integrations</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>Priority Support</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                        <tr>
                            <td>SLA Guarantee</td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-times"></i></td>
                            <td><i class="fas fa-check"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%); padding: 80px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; text-align: center;">
            <h2 style="color: white; font-size: 2rem; margin-bottom: 20px;">Ready to Experience These Features?</h2>
            <p style="color: #e0e0e0; font-size: 1.1rem; max-width: 600px; margin: 0 auto 32px;">Start your 14-day free
                trial today and see why hundreds of teams trust HeyDoot.</p>
            <div class="cta-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20a%20free%20trial%20of%20HeyDoot"
                    class="btn btn-outline-light btn-lg"
                    style="border: 2px solid white; color: white; background: transparent;" target="_blank">
                    <i class="fab fa-whatsapp"></i> Start Free Trial
                </a>
                <a href="/pricing" class="btn btn-cta-white btn-lg" style="background: white; color: #1a2a3a;">
                    <i class="fas fa-tag"></i> View Pricing
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-container" style="background: #F0F8FF; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge">
                    <i class="fas fa-question-circle"></i> FAQs
                </span>
                <h2 class="section-title" style="margin-bottom: 12px;">
                    Frequently Asked Questions
                </h2>
                <p class="section-sub">
                    Got questions? We've got answers.
                </p>
            </div>

            <div class="faq-container">

                <div class="faq-item">
                    <div class="faq-question">
                        Can I connect multiple WhatsApp numbers?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes! HeyDoot allows you to connect as many WhatsApp numbers as you need. The Starter plan
                        includes up to 3 numbers, Professional up to 15, and Enterprise offers unlimited numbers.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do I need the WhatsApp Business API?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        No! HeyDoot works with any WhatsApp number, personal or business. No API approval, no template
                        reviews, and no per-conversation fees from Meta.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can multiple agents use the same number?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Absolutely! The shared inbox allows unlimited agents to respond from one number simultaneously.
                        All conversations are synced in real-time.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Is there a free trial?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes! All plans come with a 14-day free trial. No credit card required. You'll get full access to
                        all features of your chosen plan.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I upgrade or downgrade my plan?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes! You can change your plan at any time. Upgrades take effect immediately, and downgrades
                        apply at the next billing cycle.
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<!-- Page Content Ends here -->

<?php include ROOT_PATH . '/components/footer.php'; ?>