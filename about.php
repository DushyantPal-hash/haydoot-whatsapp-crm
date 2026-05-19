<?php
// pages/about.php
$page_meta = [
    'title' => 'About Us - HeyDoot WhatsApp CRM',
    'meta_title' => 'About Us | HeyDoot - Our Mission & Story',
    'description' => 'Learn about HeyDoot\'s mission to simplify WhatsApp communication for businesses worldwide. Founded by HashStudioz Technologies to provide enterprise-grade WhatsApp tools for all.',
    'og_title' => 'About Us - HeyDoot WhatsApp CRM',
    'og_description' => 'Discover the story behind HeyDoot and our mission to transform WhatsApp team collaboration.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/about',
    'twitter_title' => 'About Us - HeyDoot WhatsApp CRM',
    'twitter_description' => 'The story behind HeyDoot.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',
    'canonical' => 'https://heydoot.com/about'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "AboutPage",
    "name" => "About HeyDoot",
    "url" => "https://heydoot.com/about",
    "description" => "About HeyDoot - WhatsApp CRM platform",
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
    .mission-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 48px;
        align-items: center;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 32px;
        margin-top: 48px;
    }

    .team-card {
        text-align: center;
        background: white;
        border-radius: 32px;
        padding: 32px;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s;
        border: 1px solid #eef2f6;
    }

    .team-card:hover {
        transform: translateY(-8px);
    }

    .team-avatar {
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, var(--wa-green) 0%, #128C7E 100%);
        border-radius: 50%;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        color: white;
    }

    .timeline {
        position: relative;
        max-width: 800px;
        margin: 48px auto 0;
        padding: 20px 0;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 2px;
        height: 100%;
        background: linear-gradient(to bottom, var(--wa-green), #eef2f6);
    }

    .timeline-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 40px;
        position: relative;
    }

    .timeline-item:nth-child(odd) {
        flex-direction: row-reverse;
    }

    .timeline-content {
        width: 45%;
        background: white;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 10px 25px -8px rgba(0, 0, 0, 0.08);
        border: 1px solid #eef2f6;
    }

    .timeline-year {
        font-size: 1.2rem;
        font-weight: 800;
        color: var(--wa-green);
        margin-bottom: 8px;
    }

    .timeline-dot {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 16px;
        height: 16px;
        background: var(--wa-green);
        border-radius: 50%;
        top: 20px;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 32px;
        margin-top: 48px;
    }

    .value-item {
        text-align: center;
        padding: 24px;
        background: #F8FAFE;
        border-radius: 24px;
        transition: transform 0.3s;
    }

    .value-item:hover {
        transform: translateY(-5px);
    }

    .value-icon {
        width: 70px;
        height: 70px;
        background: rgba(37, 211, 102, 0.1);
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 32px;
        color: var(--wa-green);
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

    @media (max-width: 768px) {
        .mission-section {
            grid-template-columns: 1fr;
            gap: 32px;
        }

        .timeline::before {
            left: 20px;
        }

        .timeline-item,
        .timeline-item:nth-child(odd) {
            flex-direction: column;
            padding-left: 40px;
        }

        .timeline-content {
            width: 100%;
        }

        .timeline-dot {
            left: 12px;
            transform: none;
        }
    }
</style>

<main>
    <!-- Hero Section -->
    <section style="background: var(--bg-gradient-green); padding: 80px 0 60px;">
        <div class="floating-dots"></div>
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; text-align: center;">
            <span class="feature-pair-badge"><i class="fas fa-heart"></i> Our Story</span>
            <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 16px; ">About <span
                    style="color: var(--wa-green);">HeyDoot</span></h1>
            <p style="font-size: 1.2rem; color: #cdddef; max-width: 700px; margin: 0 auto;">We're on a mission to
                simplify WhatsApp communication for businesses worldwide.</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section-container" style="padding: 60px 0; background: #fff;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div class="mission-section">
                <div>
                    <span class="feature-pair-badge"><i class="fas fa-bullseye"></i> Our Mission</span>
                    <h2 style="font-size: 2rem; margin-bottom: 20px; color: #1a2a3a;">Empowering Teams with <span
                            style="color: var(--wa-green);">Seamless WhatsApp Collaboration</span></h2>
                    <p style="font-size: 1.1rem; line-height: 1.6; color: #5a6b7e;">HeyDoot was founded to solve a
                        simple problem: managing WhatsApp communication at scale is broken. Teams jump between phones,
                        lose context, and struggle to collaborate.</p>
                    <p style="margin-top: 20px; color: #5a6b7e;">We built HeyDoot to give every business a powerful,
                        unified inbox for WhatsApp — no API headaches, no limitations. Today, hundreds of teams trust
                        HeyDoot to handle millions of conversations. And we're just getting started.</p>
                    <div style="margin-top: 32px;;">
                        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20HeyDoot"
                            class="btn btn-primary"
                            style="background: var(--wa-green); border-color: var(--wa-green); padding: 10px"
                            target="_blank">
                            <i class="fab fa-whatsapp"></i> Join Our Journey
                        </a>
                    </div>
                </div>
                <div
                    style="background: linear-gradient(135deg, #F0F8FF 0%, #E8F4FD 100%); border-radius: 48px; padding: 48px 40px; text-align: center;">
                    <i class="fas fa-quote-right" style="font-size: 56px; color: var(--wa-green); opacity: 0.3;"></i>
                    <p style="font-size: 1.3rem; font-weight: 500; color: #1a2a3a; margin-top: 16px;">"Democratizing
                        access to enterprise-grade WhatsApp tools for businesses of all sizes."</p>
                    <p style="margin-top: 20px; color: var(--wa-green); font-weight: 600;">— HashStudioz Technologies
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section style="background: #F8FAFE; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-chart-line"></i> By the Numbers</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">HeyDoot in Numbers</h2>
                <p style="color: #5a6b7e;">The impact we've made so far</p>
            </div>
            <div class="stats-modern">
                <div class="stat-item-modern">
                    <div class="stat-number-modern">500+</div>
                    <div class="stat-label-modern">Active Businesses</div>
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
                    <div class="stat-number-modern">30+</div>
                    <div class="stat-label-modern">Countries Served</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section style="padding: 60px 0; background: #fff;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-gem"></i> Our Values</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">What We Stand For</h2>
                <p style="color: #5a6b7e;">The principles that guide everything we do</p>
            </div>
            <div class="values-grid">
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Customer First</h3>
                    <p style="color: #5a6b7e;">Our customers are at the heart of every decision we make. We build
                        features that solve real problems.</p>
                </div>
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Privacy & Security</h3>
                    <p style="color: #5a6b7e;">Your data is yours. We never sell customer data and maintain the highest
                        security standards.</p>
                </div>
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p style="color: #5a6b7e;">We're constantly improving and adding new features to help teams work
                        smarter.</p>
                </div>
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Transparency</h3>
                    <p style="color: #5a6b7e;">No hidden fees, no lock-in contracts, and honest communication at all
                        times.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Journey Timeline -->
    <section style="background: #F8FAFE; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-road"></i> Our Journey</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">The HeyDoot Story</h2>
                <p style="color: #5a6b7e;">Milestones that shaped our company</p>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2021</div>
                        <h3>Foundation</h3>
                        <p style="color: #5a6b7e;">HeyDoot was founded by HashStudioz Technologies with a vision to
                            transform WhatsApp communication for businesses.</p>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2022</div>
                        <h3>Public Launch</h3>
                        <p style="color: #5a6b7e;">Official launch of HeyDoot platform with core features: shared inbox,
                            team collaboration, and automation.</p>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2023</div>
                        <h3>Rapid Growth</h3>
                        <p style="color: #5a6b7e;">Reached 500+ businesses, launched API access, and introduced
                            AI-powered automation features.</p>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2024</div>
                        <h3>Global Expansion</h3>
                        <p style="color: #5a6b7e;">Expanded to serve customers in 30+ countries, launched enterprise
                            features and dedicated support.</p>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-year">2025</div>
                        <h3>The Future</h3>
                        <p style="color: #5a6b7e;">Continuing to innovate and build the most powerful WhatsApp
                            collaboration platform for teams worldwide.</p>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team Section -->
    <section style="padding: 60px 0; background: #fff;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-user-tie"></i> Leadership</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">Meet the Team</h2>
                <p style="color: #5a6b7e;">The passionate people behind HeyDoot</p>
            </div>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h3>Vikram Singh</h3>
                    <p style="color: var(--wa-green); font-weight: 500;">CEO & Founder</p>
                    <p style="color: #5a6b7e; font-size: 0.9rem;">15+ years in SaaS and enterprise software. Visionary
                        behind HeyDoot.</p>
                    <div style="margin-top: 16px;">
                        <a href="#" style="color: #1a2a3a; margin: 0 8px;"><i class="fab fa-linkedin"></i></a>
                        <a href="#" style="color: #1a2a3a; margin: 0 8px;"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h3>Priya Mehta</h3>
                    <p style="color: var(--wa-green); font-weight: 500;">CTO</p>
                    <p style="color: #5a6b7e; font-size: 0.9rem;">10+ years in full-stack development and AI systems.
                    </p>
                    <div style="margin-top: 16px;">
                        <a href="#" style="color: #1a2a3a; margin: 0 8px;"><i class="fab fa-linkedin"></i></a>
                        <a href="#" style="color: #1a2a3a; margin: 0 8px;"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h3>Ankit Sharma</h3>
                    <p style="color: var(--wa-green); font-weight: 500;">Head of Sales</p>
                    <p style="color: #5a6b7e; font-size: 0.9rem;">Former sales leader at multiple SaaS startups.</p>
                    <div style="margin-top: 16px;">
                        <a href="#" style="color: #1a2a3a; margin: 0 8px;"><i class="fab fa-linkedin"></i></a>
                        <a href="#" style="color: #1a2a3a; margin: 0 8px;"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h3>Neha Gupta</h3>
                    <p style="color: var(--wa-green); font-weight: 500;">Customer Success</p>
                    <p style="color: #5a6b7e; font-size: 0.9rem;">Dedicated to ensuring every customer succeeds.</p>
                    <div style="margin-top: 16px;">
                        <a href="#" style="color: #1a2a3a; margin: 0 8px;"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Built by HashStudioz Section -->
    <section style="background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%); padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; text-align: center;">
            <div style="max-width: 800px; margin: 0 auto;">
                <i class="fas fa-code-branch" style="font-size: 48px; color: var(--wa-green); margin-bottom: 24px;"></i>
                <h2 style="color: white; font-size: 2rem; margin-bottom: 16px;">Built with ❤️ by <span
                        style="color: var(--wa-green);">HashStudioz Technologies</span></h2>
                <p style="color: #e0e0e0; font-size: 1rem; line-height: 1.6;">HashStudioz is a global technology
                    consulting firm specializing in AI, IoT, and enterprise software solutions. With offices in India,
                    USA, and UK, we've helped 500+ businesses achieve digital transformation.</p>
                <div style="margin-top: 32px;">
                    <a href="https://www.hashstudioz.com/" target="_blank" class="btn btn-outline-light"
                        style="border: 2px solid white; color: white; background: transparent; padding: 12px 32px; border-radius: 40px; text-decoration: none;">
                        Visit HashStudioz <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background: #F0F8FF; padding: 80px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; text-align: center;">
            <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 20px;">Join Our Growing Community</h2>
            <p style="color: #5a6b7e; font-size: 1.1rem; max-width: 600px; margin: 0 auto 32px;">Be part of the WhatsApp
                communication revolution. Start your free trial today.</p>
            <div class="cta-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20a%20free%20trial%20of%20HeyDoot"
                    class="btn btn-primary btn-lg" style="background: var(--wa-green); border-color: var(--wa-green);"
                    target="_blank">
                    <i class="fab fa-whatsapp"></i> Start Free Trial
                </a>
                <a href="/contact" class="btn btn-secondary btn-lg">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'components/footer.php'; ?>