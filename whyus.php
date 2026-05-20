<?php
// pages/why-us.php
$page_meta = [
    'title' => 'Why Us - HeyDoot WhatsApp CRM',
    'meta_title' => 'Why Businesses Choose HeyDoot | WhatsApp CRM Platform',
    'description' => 'Discover why hundreds of teams trust HeyDoot for their WhatsApp communication. No API needed, global scale, 24/7 support, and future-proof solutions.',
    'og_title' => 'Why Us - HeyDoot WhatsApp CRM',
    'og_description' => 'Learn why businesses choose HeyDoot for WhatsApp team collaboration.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/why-us',
    'twitter_title' => 'Why Us - HeyDoot WhatsApp CRM',
    'twitter_description' => 'The smarter way to handle WhatsApp at scale.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',
    'canonical' => 'https://heydoot.com/why-us'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "WebPage",
    "name" => "Why Choose HeyDoot",
    "url" => "https://heydoot.com/why-us",
    "description" => "Why businesses choose HeyDoot for WhatsApp CRM",
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
    .value-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 32px;
        margin-top: 48px;
    }

    .value-card {
        background: white;
        border-radius: 32px;
        padding: 40px 32px;
        text-align: center;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s;
    }

    .value-icon {
        font-size: 56px;
        color: var(--wa-teal);
        margin-bottom: 24px;
    }



    .feature-card .quote-icon {
        font-size: 28px;
        color: var(--wa-dark);
        /* opacity: 0.2; */
        margin-bottom: 10px;
    }

    .feature-author {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-top: 16px;
    }

    .feature-author img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        background: #eef2f6;
    }

    /* =========================
   Comparison Table
========================= */

    .comparison-card {
        background: linear-gradient(145deg, #ffffff, #f9fbff);
        border-radius: 24px;
        overflow: hidden;
        border: 1px solid #e5ecf5;
        box-shadow:
            0 10px 30px rgba(0, 0, 0, 0.04),
            0 2px 10px rgba(0, 0, 0, 0.03);
        position: relative;
    }

    /* Header */
    .comparison-header {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        /* background: linear-gradient(90deg, #00A1E0, #0f172a); */
        background: var(--bg-gradient-green);
        color: #fff;
        padding: 22px 28px;
        font-weight: 700;
        font-size: 1rem;
    }

    .comparison-header div:nth-child(2),
    .comparison-header div:nth-child(3) {
        text-align: center;
    }

    /* Rows */
    .comparison-item {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        align-items: center;
        padding: 22px 28px;
        border-bottom: 1px solid #eef2f7;
        transition: all 0.25s ease;
    }

    .comparison-item:hover {
        background: #f8fbff;
        transform: scale(1.01);
    }

    .comparison-item:last-child {
        border-bottom: none;
    }

    /* Alternate Rows */
    .comparison-item:nth-child(even) {
        background: #fcfdff;
    }

    /* Feature */
    .comparison-feature {
        font-size: 1rem;
        font-weight: 600;
        color: #1e293b;
    }

    /* HeyDoot */
    .comparison-heydoot {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-weight: 700;
        color: #00A1E0;
    }

    .comparison-heydoot i {
        color: #10b981;
    }

    /* Others */
    .comparison-others {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        font-weight: 600;
        color: #64748b;
    }

    .comparison-others .fa-times-circle {
        color: #ef4444;
    }

    .comparison-others .fa-check-circle {
        color: #f59e0b;
    }


    /* Mobile */
    @media (max-width: 768px) {

        .comparison-header {
            display: none;
        }

        .comparison-item {
            grid-template-columns: 1fr;
            gap: 14px;
            padding: 22px;
        }

        .comparison-heydoot,
        .comparison-others {
            justify-content: flex-start;
            width: fit-content;
            padding: 10px 14px;
            border-radius: 12px;
        }

        .comparison-heydoot {
            background: rgba(0, 161, 224, 0.08);
        }

        .comparison-others {
            background: rgba(239, 68, 68, 0.08);
        }
    }
</style>

<main>
    <!-- Hero Section -->
    <section style="background: var(--bg-gradient-green); padding: 80px 0 60px;">
        <div class="floating-dots"></div>
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; text-align: center;">
            <span class="feature-pair-badge" style="color: var(--wa-green);"><i class="fas fa-star"></i> Why Businesses
                Choose Us</span>
            <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 16px;">We're <span
                    style="color: var(--wa-green);">Redefining</span> WhatsApp Communication</h1>
            <p style="font-size: 1.2rem; color: #cdddef; max-width: 700px; margin: 0 auto;">Trusted by hundreds of teams
                worldwide to manage high-volume WhatsApp conversations without chaos.</p>
        </div>
    </section>

    <!-- Stats Bar -->
    <section style="background: #fff; border-bottom: 1px solid #eef2f6;">
        <div class="container-fluid">
            <div class="stats-row"
                style="display: flex; justify-content: space-around; flex-wrap: wrap; gap: 30px; text-align: center;">
                <div class="stat-card" style="background: transparent; box-shadow: none;">
                    <div class="stat-number" style="font-size: 2.5rem;">500+</div>
                    <p style="margin: 0;">Businesses Trust Us</p>
                </div>
                <div class="stat-card" style="background: transparent; box-shadow: none;">
                    <div class="stat-number" style="font-size: 2.5rem;">2M+</div>
                    <p style="margin: 0;">Messages Processed</p>
                </div>
                <div class="stat-card" style="background: transparent; box-shadow: none;">
                    <div class="stat-number" style="font-size: 2.5rem;">98%</div>
                    <p style="margin: 0;">Customer Satisfaction</p>
                </div>
                <div class="stat-card" style="background: transparent; box-shadow: none;">
                    <div class="stat-number" style="font-size: 2.5rem;">24/7</div>
                    <p style="margin: 0;">Support Available</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Core Values Section -->
    <section class="section-container" style="padding: 60px 0; background: #fff;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-heart"></i> Our Core Values</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">What Makes HeyDoot Different?</h2>
                <p style="color: #5a6b7e;">We've built a platform that puts your team first</p>
            </div>

            <div class="value-grid">
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-bolt"></i></div>
                    <h3>No API Needed</h3>
                    <p>Use your personal or business WhatsApp numbers without restrictions. No paperwork, no template
                        approvals, no per-conversation pricing. Plug & play setup in minutes.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-globe"></i></div>
                    <h3>Global Scale</h3>
                    <p>Manage 30+ numbers from one dashboard. Perfect for international brands, distributed teams, and
                        multi-region operations. Add numbers as you grow.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-headset"></i></div>
                    <h3>24/7 Support</h3>
                    <p>Dedicated support team available around the clock. Enterprise plans include personalized
                        onboarding, training sessions, and a dedicated account manager.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon"><i class="fas fa-gem"></i></div>
                    <h3>Future-proof</h3>
                    <p>From 5 to 500+ agents, HeyDoot grows with your business. We're constantly adding new features
                        based on customer feedback. No lock-in, exit anytime.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="all-features" class="feature-showcase">
        <div class="container-fluid" style="width: 90%; max-width: 1280px;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-rocket"></i> Powerful Features</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">Engineered for Team Collaboration
                </h2>
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

    <!-- Comparison Table -->
    <section style="background: #fff; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">

            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge">
                    <i class="fas fa-chart-simple"></i> Why We're Better
                </span>

                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">
                    HeyDoot vs. The Competition
                </h2>

                <p style="color: #5a6b7e;">
                    See how we stack up against other WhatsApp solutions
                </p>
            </div>

            <div class="comparison-card">

                <!-- Header -->
                <div class="comparison-header">
                    <div>Features</div>
                    <div>HeyDoot</div>
                    <div>Others</div>
                </div>

                <!-- Rows -->
                <div class="comparison-item">
                    <div class="comparison-feature">WhatsApp Business API Required?</div>
                    <div class="comparison-heydoot">
                        <i class="fas fa-check-circle"></i> No
                    </div>
                    <div class="comparison-others">
                        <i class="fas fa-times-circle"></i> Yes (Most)
                    </div>
                </div>

                <div class="comparison-item">
                    <div class="comparison-feature">Multiple Numbers in One Inbox</div>
                    <div class="comparison-heydoot">
                        <i class="fas fa-check-circle"></i> Yes
                    </div>
                    <div class="comparison-others">
                        <i class="fas fa-times-circle"></i> Limited
                    </div>
                </div>

                <div class="comparison-item">
                    <div class="comparison-feature">Team Collaboration Features</div>
                    <div class="comparison-heydoot">
                        <i class="fas fa-check-circle"></i> Yes
                    </div>
                    <div class="comparison-others">
                        <i class="fas fa-times-circle"></i> Basic
                    </div>
                </div>

                <div class="comparison-item">
                    <div class="comparison-feature">AI Automation</div>
                    <div class="comparison-heydoot">
                        <i class="fas fa-check-circle"></i> Yes
                    </div>
                    <div class="comparison-others">
                        <i class="fas fa-times-circle"></i> Limited
                    </div>
                </div>

                <div class="comparison-item">
                    <div class="comparison-feature">Ticket Management</div>
                    <div class="comparison-heydoot">
                        <i class="fas fa-check-circle"></i> Yes
                    </div>
                    <div class="comparison-others">
                        <i class="fas fa-times-circle"></i> No
                    </div>
                </div>

                <div class="comparison-item">
                    <div class="comparison-feature">Group Management</div>
                    <div class="comparison-heydoot">
                        <i class="fas fa-check-circle"></i> Yes
                    </div>
                    <div class="comparison-others">
                        <i class="fas fa-times-circle"></i> Basic
                    </div>
                </div>

                <div class="comparison-item">
                    <div class="comparison-feature">API Access</div>
                    <div class="comparison-heydoot">
                        <i class="fas fa-check-circle"></i> Yes (Pro+)
                    </div>
                    <div class="comparison-others">
                        <i class="fas fa-check-circle"></i> Yes
                    </div>
                </div>

                <div class="comparison-item">
                    <div class="comparison-feature">24/7 Support</div>
                    <div class="comparison-heydoot">
                        <i class="fas fa-check-circle"></i> Yes
                    </div>
                    <div class="comparison-others">
                        <i class="fas fa-times-circle"></i> Limited
                    </div>
                </div>

                <div class="comparison-item">
                    <div class="comparison-feature">Unlimited Agents</div>
                    <div class="comparison-heydoot">
                        <i class="fas fa-check-circle"></i> Yes
                    </div>
                    <div class="comparison-others">
                        <i class="fas fa-times-circle"></i> Per-Seat Pricing
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section style="background: #F0F8FF; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-quote-left"></i> Testimonials</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">Trusted by Teams Worldwide</h2>
                <p style="color: #5a6b7e;">Don't just take our word for it</p>
            </div>

            <div class="feature-grid">
                <div class="feature-card">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p>"HeyDoot transformed how our support team handles WhatsApp. We've cut response times by 70% and
                        our agents love the shared inbox. The ability to assign chats and add internal notes has been a
                        game-changer."</p>
                    <div class="feature-author">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson">
                        <div>
                            <h4>Sarah Johnson</h4>
                            <p>Support Director, TechFlow</p>
                        </div>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p>"Managing 15 different WhatsApp numbers across 6 countries was chaotic. HeyDoot brought
                        everything into one dashboard. Our sales team now responds 3x faster and we've seen a 40%
                        increase in conversions."</p>
                    <div class="feature-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                        <div>
                            <h4>Michael Chen</h4>
                            <p>Sales Director, GlobalTrade</p>
                        </div>
                    </div>
                </div>
                <div class="feature-card">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p>"The automation features alone are worth the price. We've automated 80% of our customer queries,
                        allowing our team to focus on complex issues. Setup was incredibly easy and their support team
                        is amazing."</p>
                    <div class="feature-author">
                        <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Priya Sharma">
                        <div>
                            <h4>Priya Sharma</h4>
                            <p>Operations Head, EduTech India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%); padding: 80px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; text-align: center;">
            <h2 style="color: white; font-size: 2.2rem; margin-bottom: 20px;">Ready to transform your WhatsApp
                communication?</h2>
            <p style="color: #e0e0e0; font-size: 1.1rem; max-width: 600px; margin: 0 auto 32px;">Join hundreds of teams
                who've upgraded to HeyDoot — start your free trial today.</p>
            <div class="cta-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20a%20free%20trial%20of%20HeyDoot"
                    class="btn btn-outline-light btn-lg"
                    style="border: 2px solid white; color: white; background: transparent;" target="_blank">
                    <i class="fab fa-whatsapp"></i> Start Free Trial
                </a>
                <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>" class="btn btn-cta-white btn-lg"
                    style="background: white; color: #1a2a3a;">
                    <i class="fas fa-volume-control-phone"></i> Talk to Sales
                </a>
            </div>
            <p style="color: #a0b0c0; margin-top: 24px; font-size: 0.85rem;">No credit card required. 14-day free trial.
            </p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-container" style="background: #F0F8FF; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge">
                    <i class="fas fa-question-circle"></i> Common Questions
                </span>

                <h2 class="section-title" style="margin-bottom: 12px;">
                    Frequently Asked Questions
                </h2>

                <p class="section-sub">
                    Everything you need to know about HeyDoot
                </p>
            </div>

            <div class="faq-container">

                <div class="faq-item">
                    <div class="faq-question">
                        What does "unlimited" actually mean?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        One license covers every WhatsApp number you want to connect,
                        every agent you want to invite, and every message they send.
                        If you grow from 5 to 500 agents, the price doesn't change.
                        If you add ten new numbers next month, the price doesn't change.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do I need the WhatsApp Business API?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        No. HeyDoot connects via WhatsApp Web, the same way your phone does.
                        You can scale across multiple numbers without the paperwork,
                        template approvals, or per-conversation pricing that comes with
                        the official Business API.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        How quickly can we go live?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Most customers are up and running within 24 hours.
                        We provision your dedicated instance, walk you through the QR connection on a call,
                        and help onboard your first batch of agents the same day.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I migrate away later?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        Yes, any time. We'll hand over a full data export — contacts,
                        chat history, pipeline, quotations, the lot.
                        No proprietary formats, no exit fees, and no unnecessary barriers.
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>


<?php include 'components/footer.php'; ?>