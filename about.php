<?php
require_once 'config.php';
$page_title = "About Us - HeyDoot";
include ROOT_PATH . '/components/header.php';
include ROOT_PATH . '/components/navbar.php';
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
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 32px;
        margin-top: 48px;
    }

    .team-card {
        text-align: center;
        background: white;
        border-radius: 32px;
        padding: 32px;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
    }

    .team-avatar {
        width: 120px;
        height: 120px;
        background: var(--wa-teal);
        border-radius: 50%;
        margin: 0 auto 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 48px;
        color: white;
    }

    @media (max-width: 768px) {
        .mission-section {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="page-header">
    <h1>About <span style="color: var(--wa-green);">HeyDoot</span></h1>
    <p>We're on a mission to simplify WhatsApp communication for businesses worldwide.</p>
</div>

<section class="section-container">
    <div class="container-fluid">
        <div class="mission-section">
            <div>
                <h2 style="font-size: 2rem; margin-bottom: 20px;">Our Mission</h2>
                <p style="font-size: 1.1rem; line-height: 1.6;">HeyDoot was founded to solve a simple problem:
                    managing WhatsApp communication at scale is broken. Teams jump between phones, lose context, and
                    struggle to collaborate. We built HeyDoot to give every business a powerful, unified inbox for
                    WhatsApp — no API headaches, no limitations.</p>
                <p style="margin-top: 20px;">Today, hundreds of teams trust HeyDoot to handle millions of
                    conversations. And we're just getting started.</p>
            </div>
            <div style="background: #e6f7ec; border-radius: 48px; padding: 40px; text-align: center;">
                <i class="fas fa-quote-right" style="font-size: 48px; color: var(--wa-teal); opacity: 0.5;"></i>
                <p style="font-size: 1.2rem; font-weight: 500;">"Democratizing access to enterprise-grade WhatsApp
                    tools for businesses of all sizes."</p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="section-container" style="background: #F0F8FF;">
    <div class="container-fluid">
        <h2 class="section-title">Meet Our Leadership</h2>
        <div class="team-grid">
            <div class="team-card">
                <div class="team-avatar"><i class="fas fa-user-tie"></i></div>
                <h3>Michael Chen</h3>
                <p>CEO & Co-founder</p>
            </div>
            <div class="team-card">
                <div class="team-avatar"><i class="fas fa-laptop-code"></i></div>
                <h3>Sarah Williams</h3>
                <p>CTO & Co-founder</p>
            </div>
            <div class="team-card">
                <div class="team-avatar"><i class="fas fa-chart-line"></i></div>
                <h3>David Rodriguez</h3>
                <p>Head of Product</p>
            </div>
            <div class="team-card">
                <div class="team-avatar"><i class="fas fa-users"></i></div>
                <h3>Emily Park</h3>
                <p>Customer Success</p>
            </div>
        </div>
    </div>
</section> -->

<?php include ROOT_PATH . '/components/footer.php'; ?>