<?php
require_once 'config.php';
$page_title = "Features - HeyDoot";
include ROOT_PATH . '/components/header.php';
include ROOT_PATH . '/components/navbar.php';
?>
<!-- Page Content -->
<main>
    <div class="page-header">
        <h1>Powerful Features <span style="color: var(--wa-green);">for Every Team</span></h1>
        <p>Everything you need to manage WhatsApp conversations at scale, all in one platform.</p>
    </div>

    <section class="feature-showcase">
        <div class="container-fluid" style="width: 90%; max-width: 1280px;">
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
</main>
<!-- Page Content Ends here -->

<?php include ROOT_PATH . '/components/footer.php'; ?>