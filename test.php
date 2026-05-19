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
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 32px;
        margin-top: 48px;
    }

    .value-card {
        background: white;
        border-radius: 32px;
        padding: 40px 32px;
        text-align: center;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s, box-shadow 0.3s;
        border: 1px solid #eef2f6;
    }

    .value-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 30px 45px -15px rgba(0, 0, 0, 0.15);
    }

    .value-icon {
        font-size: 56px;
        color: var(--wa-green);
        margin-bottom: 24px;
    }

    .value-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 16px;
    }

    .value-card p {
        color: #5a6b7e;
        line-height: 1.6;
    }

    .testimonial-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 32px;
        margin-top: 48px;
    }

    .testimonial-card {
        background: white;
        border-radius: 32px;
        padding: 32px;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
        border: 1px solid #eef2f6;
        transition: transform 0.3s;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
    }

    .testimonial-card .quote-icon {
        font-size: 40px;
        color: var(--wa-green);
        opacity: 0.2;
        margin-bottom: 20px;
    }

    .testimonial-card p {
        font-size: 1rem;
        line-height: 1.6;
        color: #2c3e50;
        font-style: italic;
        margin-bottom: 24px;
    }

    .testimonial-author {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-top: 16px;
    }

    .testimonial-author img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        background: #eef2f6;
    }

    .testimonial-author h4 {
        margin: 0;
        font-size: 1rem;
        font-weight: 700;
    }

    .testimonial-author p {
        margin: 4px 0 0;
        font-size: 0.8rem;
        color: #8a9aaa;
        font-style: normal;
    }

    .stats-modern {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        gap: 40px;
        text-align: center;
        margin-top: 40px;
    }

    .stat-item-modern {
        flex: 1;
        min-width: 150px;
    }

    .stat-number-modern {
        font-size: 3rem;
        font-weight: 800;
        color: var(--wa-green);
    }

    .stat-label-modern {
        color: #5a6b7e;
        font-weight: 500;
    }

    .comparison-card {
        background: white;
        border-radius: 32px;
        padding: 32px;
        margin-top: 48px;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
    }

    .comparison-item {
        display: flex;
        justify-content: space-between;
        padding: 16px 0;
        border-bottom: 1px solid #eef2f6;
    }

    .comparison-item:last-child {
        border-bottom: none;
    }

    .comparison-feature {
        font-weight: 600;
        width: 40%;
    }

    .comparison-heydoot {
        width: 30%;
        color: var(--wa-green);
        font-weight: 600;
    }

    .comparison-others {
        width: 30%;
        color: #8a9aaa;
    }

    .badge-success {
        background: rgba(37, 211, 102, 0.1);
        color: var(--wa-green);
        padding: 4px 12px;
        border-radius: 40px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .feature-pair-badge {
        background: rgba(37, 211, 102, 0.1);
        color: var(--wa-green);
        padding: 6px 16px;
        border-radius: 40px;
        font-size: 0.85rem;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 20px;
    }

    .feature-showcase-item {
        display: flex;
        align-items: center;
        gap: 40px;
        margin-bottom: 60px;
        flex-wrap: wrap;
    }

    .feature-showcase-item.reverse {
        flex-direction: row-reverse;
    }

    .feature-showcase-content {
        flex: 1;
    }

    .feature-showcase-image {
        flex: 1;
        text-align: center;
    }

    .feature-showcase-image img {
        max-width: 100%;
        border-radius: 32px;
        box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .feature-showcase-item {
            flex-direction: column;
        }

        .feature-showcase-item.reverse {
            flex-direction: column;
        }

        .comparison-item {
            flex-direction: column;
            gap: 8px;
        }

        .comparison-feature,
        .comparison-heydoot,
        .comparison-others {
            width: 100%;
        }
    }
</style>

<main>
    <!-- Hero Section -->
    <section style="background: var(--bg-gradient-green); padding: 80px 0 60px;">
        <div class="floating-dots"></div>
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; text-align: center;">
            <span class="feature-pair-badge"><i class="fas fa-star"></i> Why Businesses Choose Us</span>
            <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 16px;">We're <span
                    style="color: var(--wa-green);">Redefining</span> WhatsApp Communication</h1>
            <p style="font-size: 1.2rem; color: #cdddef; max-width: 700px; margin: 0 auto;">Trusted by hundreds of teams
                worldwide to manage high-volume WhatsApp conversations without chaos.</p>
        </div>
    </section>

    <!-- Stats Section -->
    <section style="background: #fff; padding: 40px 0; border-bottom: 1px solid #eef2f6;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div class="stats-modern">
                <div class="stat-item-modern">
                    <div class="stat-number-modern">500+</div>
                    <div class="stat-label-modern">Businesses Trust Us</div>
                </div>
                <div class="stat-item-modern">
                    <div class="stat-number-modern">2M+</div>
                    <div class="stat-label-modern">Messages Processed</div>
                </div>
                <div class="stat-item-modern">
                    <div class="stat-number-modern">98%</div>
                    <div class="stat-label-modern">Customer Satisfaction</div>
                </div>
                <div class="stat-item-modern">
                    <div class="stat-number-modern">24/7</div>
                    <div class="stat-label-modern">Support Available</div>
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

    <!-- Feature Showcase Section -->
    <section style="background: #F8FAFE; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-rocket"></i> Powerful Features</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">Engineered for Team Collaboration
                </h2>
                <p style="color: #5a6b7e;">Everything you need to manage WhatsApp at scale</p>
            </div>

            <div class="feature-showcase-item">
                <div class="feature-showcase-content">
                    <div class="badge-success" style="display: inline-block; margin-bottom: 12px;">Shared Inbox</div>
                    <h3 style="font-size: 1.6rem; margin-bottom: 16px;">One Inbox for All Numbers</h3>
                    <p style="color: #5a6b7e; line-height: 1.6;">Connect multiple WhatsApp numbers to a single, unified
                        dashboard. Your entire team can see, assign, and respond to conversations without logging in and
                        out of different accounts.</p>
                    <ul style="margin-top: 20px; list-style: none; padding: 0;">
                        <li style="margin-bottom: 10px;"><i class="fas fa-check-circle"
                                style="color: var(--wa-green); margin-right: 10px;"></i> Real-time sync across all
                            devices</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-check-circle"
                                style="color: var(--wa-green); margin-right: 10px;"></i> Assign conversations to team
                            members</li>
                        <li><i class="fas fa-check-circle" style="color: var(--wa-green); margin-right: 10px;"></i> Add
                            internal notes and tags</li>
                    </ul>
                </div>
                <div class="feature-showcase-image">
                    <img src="<?php echo BASE_URL; ?>/assets/images/f1.webp" alt="Shared Inbox">
                </div>
            </div>

            <div class="feature-showcase-item reverse">
                <div class="feature-showcase-content">
                    <div class="badge-success" style="display: inline-block; margin-bottom: 12px;">AI Automation</div>
                    <h3 style="font-size: 1.6rem; margin-bottom: 16px;">Smart Automation</h3>
                    <p style="color: #5a6b7e; line-height: 1.6;">Let AI handle repetitive tasks. Auto-respond to FAQs,
                        route messages to the right agent, and trigger workflows based on keywords or intent.</p>
                    <ul style="margin-top: 20px; list-style: none; padding: 0;">
                        <li style="margin-bottom: 10px;"><i class="fas fa-check-circle"
                                style="color: var(--wa-green); margin-right: 10px;"></i> Keyword-based auto-responders
                        </li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-check-circle"
                                style="color: var(--wa-green); margin-right: 10px;"></i> Smart routing to departments
                        </li>
                        <li><i class="fas fa-check-circle" style="color: var(--wa-green); margin-right: 10px;"></i>
                            Schedule sequences and campaigns</li>
                    </ul>
                </div>
                <div class="feature-showcase-image">
                    <img src="<?php echo BASE_URL; ?>/assets/images/f4.webp" alt="AI Automation">
                </div>
            </div>

            <div class="feature-showcase-item">
                <div class="feature-showcase-content">
                    <div class="badge-success" style="display: inline-block; margin-bottom: 12px;">Ticket Management
                    </div>
                    <h3 style="font-size: 1.6rem; margin-bottom: 16px;">Turn Chats into Tickets</h3>
                    <p style="color: #5a6b7e; line-height: 1.6;">Convert every WhatsApp message into an actionable
                        ticket. Set priority, assign to team members, and track resolution times.</p>
                    <ul style="margin-top: 20px; list-style: none; padding: 0;">
                        <li style="margin-bottom: 10px;"><i class="fas fa-check-circle"
                                style="color: var(--wa-green); margin-right: 10px;"></i> One-click ticket creation</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-check-circle"
                                style="color: var(--wa-green); margin-right: 10px;"></i> SLA tracking and reminders</li>
                        <li><i class="fas fa-check-circle" style="color: var(--wa-green); margin-right: 10px;"></i>
                            Customer satisfaction surveys</li>
                    </ul>
                </div>
                <div class="feature-showcase-image">
                    <img src="<?php echo BASE_URL; ?>/assets/images/f2.webp" alt="Ticket Management">
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table -->
    <section style="background: #fff; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-chart-simple"></i> Why We're Better</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">HeyDoot vs. The Competition</h2>
                <p style="color: #5a6b7e;">See how we stack up against other WhatsApp solutions</p>
            </div>

            <div class="comparison-card">
                <div class="comparison-item">
                    <div class="comparison-feature">WhatsApp Business API Required?</div>
                    <div class="comparison-heydoot"><i class="fas fa-check-circle"></i> No</div>
                    <div class="comparison-others"><i class="fas fa-times-circle"></i> Yes (Most)</div>
                </div>
                <div class="comparison-item">
                    <div class="comparison-feature">Multiple Numbers in One Inbox</div>
                    <div class="comparison-heydoot"><i class="fas fa-check-circle"></i> Yes</div>
                    <div class="comparison-others"><i class="fas fa-times-circle"></i> Limited</div>
                </div>
                <div class="comparison-item">
                    <div class="comparison-feature">Team Collaboration Features</div>
                    <div class="comparison-heydoot"><i class="fas fa-check-circle"></i> Yes</div>
                    <div class="comparison-others"><i class="fas fa-times-circle"></i> Basic</div>
                </div>
                <div class="comparison-item">
                    <div class="comparison-feature">AI Automation</div>
                    <div class="comparison-heydoot"><i class="fas fa-check-circle"></i> Yes</div>
                    <div class="comparison-others"><i class="fas fa-times-circle"></i> Limited</div>
                </div>
                <div class="comparison-item">
                    <div class="comparison-feature">Ticket Management</div>
                    <div class="comparison-heydoot"><i class="fas fa-check-circle"></i> Yes</div>
                    <div class="comparison-others"><i class="fas fa-times-circle"></i> No</div>
                </div>
                <div class="comparison-item">
                    <div class="comparison-feature">Group Management</div>
                    <div class="comparison-heydoot"><i class="fas fa-check-circle"></i> Yes</div>
                    <div class="comparison-others"><i class="fas fa-times-circle"></i> Basic</div>
                </div>
                <div class="comparison-item">
                    <div class="comparison-feature">API Access</div>
                    <div class="comparison-heydoot"><i class="fas fa-check-circle"></i> Yes (Pro+)</div>
                    <div class="comparison-others"><i class="fas fa-check-circle"></i> Yes</div>
                </div>
                <div class="comparison-item">
                    <div class="comparison-feature">24/7 Support</div>
                    <div class="comparison-heydoot"><i class="fas fa-check-circle"></i> Yes</div>
                    <div class="comparison-others"><i class="fas fa-times-circle"></i> Limited</div>
                </div>
                <div class="comparison-item">
                    <div class="comparison-feature">Unlimited Agents</div>
                    <div class="comparison-heydoot"><i class="fas fa-check-circle"></i> Yes</div>
                    <div class="comparison-others"><i class="fas fa-times-circle"></i> Per-Seat Pricing</div>
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

            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p>"HeyDoot transformed how our support team handles WhatsApp. We've cut response times by 70% and
                        our agents love the shared inbox. The ability to assign chats and add internal notes has been a
                        game-changer."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson">
                        <div>
                            <h4>Sarah Johnson</h4>
                            <p>Support Director, TechFlow</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p>"Managing 15 different WhatsApp numbers across 6 countries was chaotic. HeyDoot brought
                        everything into one dashboard. Our sales team now responds 3x faster and we've seen a 40%
                        increase in conversions."</p>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                        <div>
                            <h4>Michael Chen</h4>
                            <p>Sales Director, GlobalTrade</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <p>"The automation features alone are worth the price. We've automated 80% of our customer queries,
                        allowing our team to focus on complex issues. Setup was incredibly easy and their support team
                        is amazing."</p>
                    <div class="testimonial-author">
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

    <!-- FAQ Section -->
    <section class="section-container" style="background: #fff; padding: 60px 0;">
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

            <div class="faq-container" style="max-width: 800px; margin: 0 auto;">

                <div class="faq-item"
                    style="background: #F8FAFE; border-radius: 16px; margin-bottom: 16px; overflow: hidden;">

                    <div class="faq-question"
                        style="padding: 20px 24px; font-weight: 600; cursor: pointer; display: flex; justify-content: space-between;">

                        What does "unlimited" actually mean?
                        <i class="fas fa-chevron-down" style="color: var(--wa-green);"></i>
                    </div>

                    <div class="faq-answer"
                        style="padding: 0 24px; max-height: 0; overflow: hidden; transition: all 0.3s;">

                        <p style="padding-bottom: 20px;">
                            One license covers every WhatsApp number you want to connect,
                            every agent you want to invite, and every message they send.
                            If you grow from 5 to 500 agents, the price doesn't change.
                            If you add ten new numbers next month, the price doesn't change.
                        </p>
                    </div>
                </div>

                <div class="faq-item"
                    style="background: #F8FAFE; border-radius: 16px; margin-bottom: 16px; overflow: hidden;">

                    <div class="faq-question"
                        style="padding: 20px 24px; font-weight: 600; cursor: pointer; display: flex; justify-content: space-between;">

                        Do I need the WhatsApp Business API?
                        <i class="fas fa-chevron-down" style="color: var(--wa-green);"></i>
                    </div>

                    <div class="faq-answer"
                        style="padding: 0 24px; max-height: 0; overflow: hidden; transition: all 0.3s;">

                        <p style="padding-bottom: 20px;">
                            No. HeyDoot connects via WhatsApp Web, the same way your phone does.
                            You can scale across multiple numbers without the paperwork,
                            template approvals, or per-conversation pricing that comes with
                            the official Business API.
                        </p>
                    </div>
                </div>

                <div class="faq-item"
                    style="background: #F8FAFE; border-radius: 16px; margin-bottom: 16px; overflow: hidden;">

                    <div class="faq-question"
                        style="padding: 20px 24px; font-weight: 600; cursor: pointer; display: flex; justify-content: space-between;">

                        How quickly can we go live?
                        <i class="fas fa-chevron-down" style="color: var(--wa-green);"></i>
                    </div>

                    <div class="faq-answer"
                        style="padding: 0 24px; max-height: 0; overflow: hidden; transition: all 0.3s;">

                        <p style="padding-bottom: 20px;">
                            Most customers are up and running within 24 hours.
                            We provision your dedicated instance, walk you through the QR connection on a call,
                            and help onboard your first batch of agents the same day.
                        </p>
                    </div>
                </div>

                <div class="faq-item"
                    style="background: #F8FAFE; border-radius: 16px; margin-bottom: 16px; overflow: hidden;">

                    <div class="faq-question"
                        style="padding: 20px 24px; font-weight: 600; cursor: pointer; display: flex; justify-content: space-between;">

                        Can I migrate away later?
                        <i class="fas fa-chevron-down" style="color: var(--wa-green);"></i>
                    </div>

                    <div class="faq-answer"
                        style="padding: 0 24px; max-height: 0; overflow: hidden; transition: all 0.3s;">

                        <p style="padding-bottom: 20px;">
                            Yes, any time. We'll hand over a full data export — contacts,
                            chat history, pipeline, quotations, the lot.
                            No proprietary formats, no exit fees, and no unnecessary barriers.
                        </p>
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
                    <i class="fas fa-phone-alt"></i> Talk to Sales
                </a>
            </div>
            <p style="color: #a0b0c0; margin-top: 24px; font-size: 0.85rem;">No credit card required. 14-day free trial.
            </p>
        </div>
    </section>
</main>


<?php include 'components/footer.php'; ?>