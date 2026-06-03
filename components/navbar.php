<?php
// Get current page for active highlighting
$current_page = basename($_SERVER['PHP_SELF']);
// NAVBAR DATA
$navbar = [

    [
        'title' => 'Features',
        'link' => BASE_URL . '/features.php',
        'icon' => 'fas fa-th-large',

        'submenu' => [

            [
                'title' => 'Multi-Number Inbox',
                'link' => 'javascript:void(0)',
                'icon' => 'fas fa-inbox'
            ],

            [
                'title' => 'Tickets & Tasks',
                'link' => 'javascript:void(0)',
                'icon' => 'fas fa-ticket-alt'
            ],

            [
                'title' => 'Group Management',
                'link' => 'javascript:void(0)',
                'icon' => 'fas fa-users'
            ],

            [
                'title' => 'AI Automations',
                'link' => 'javascript:void(0)',
                'icon' => 'fas fa-robot'
            ]

        ]
    ],

    [
        'title' => 'Integrations',
        'link' => BASE_URL . '/integrations.php',
        'icon' => 'fas fa-plug',

        'submenu' => [

            [
                'title' => 'HubSpot Integration',
                'link' => BASE_URL . '/integrations/hubspot.php',
                'icon' => 'fab fa-hubspot'
            ],

            [
                'title' => 'Zapier & Make Integration',
                'link' => BASE_URL . '/integrations/zapier.php',
                'icon' => 'fas fa-bolt'
            ],

            [
                'title' => 'Odoo WhatsApp Integration',
                'link' => BASE_URL . '/integrations/odoo.php',
                'icon' => 'fab fa-slack'
            ],
            [
                'title' => 'Smoobu WhatsApp Integration',
                'link' => BASE_URL . '/integrations/smoobu.php',
                'icon' => 'fas fa-building'
            ]

        ]
    ],

    [
        'title' => 'Services',
        'link' => BASE_URL . '/services.php',
        'icon' => 'fas fa-briefcase'
    ],
    [
        'title' => 'Pricing',
        'link' => BASE_URL . '/pricing.php',
        'icon' => 'fas fa-tag'
    ],

    [
        'title' => 'Why Us',
        'link' => BASE_URL . '/whyus.php',
        'icon' => 'fas fa-star'
    ],

    [
        'title' => 'About Us',
        'link' => BASE_URL . '/about.php',
        'icon' => 'fas fa-info-circle'
    ],

    [
        'title' => 'Contact Us',
        'link' => BASE_URL . '/contact.php',
        'icon' => 'fas fa-question-circle'
    ]
];
?>

<!-- Add these CSS styles for mobile dropdowns -->
<style>
    /* Mobile Menu Dropdown Styles */
    .mobile-nav-item {
        width: 100%;
    }

    .mobile-dropdown-trigger {
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
    }

    .dropdown-arrow {
        transition: transform 0.3s ease;
        font-size: 12px;
    }

    .mobile-dropdown-trigger.active .dropdown-arrow {
        transform: rotate(180deg);
    }

    .mobile-dropdown-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
        background: rgba(0, 0, 0, 0.02);
        border-radius: 12px;
        margin: 0 16px;
        padding-left: 32px;
    }

    .mobile-dropdown-menu.active {
        max-height: 500px;
        transition: max-height 0.4s ease-in;
    }

    .mobile-dropdown-menu a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 16px;
        color: var(--text-color, #0f4f1e);
        text-decoration: none;
        font-size: 14px;
        border-radius: 8px;
        transition: background 0.2s;
    }

    .mobile-dropdown-menu a:hover {
        background: rgba(0, 0, 0, 0.05);
    }

    .mobile-dropdown-menu i {
        width: 20px;
        font-size: 14px;
    }

    /* Adjust existing mobile-nav-link styles */
    .mobile-nav-link {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 20px;
        color: var(--text-color, #1d4b2c);
        text-decoration: none;
        font-weight: 500;
        transition: background 0.2s;
        justify-content: flex-start;
    }

    .mobile-nav-link i {
        width: 24px;
    }
</style>

<!-- NavBar -->
<div class="sticky-nav-wrapper" id="stickyNavWrapper">
    <nav class="navbar">
        <a href="<?php echo BASE_URL; ?>/" class="logo">
            <div class="logo-icon">
                <img src="<?php echo BASE_URL; ?>/assets/images/logo/logo.png" alt="HeyDoot Logo">
            </div>
        </a>

        <!-- Desktop Navigation -->
        <div class="nav-pill">
            <?php foreach ($navbar as $item): ?>

                <?php if (isset($item['submenu'])): ?>

                    <div class="nav-item">

                        <a href="<?= $item['link']; ?>" class="nav-link">
                            <?= $item['title']; ?>
                        </a>

                        <div class="dropdown-menu">

                            <?php foreach ($item['submenu'] as $sub): ?>

                                <a href="<?= $sub['link']; ?>">
                                    <i class="<?= $sub['icon']; ?>"></i>
                                    <?= $sub['title']; ?>
                                </a>

                            <?php endforeach; ?>

                        </div>

                    </div>

                <?php else: ?>

                    <a href="<?= $item['link']; ?>" class="nav-link">
                        <?= $item['title']; ?>
                    </a>

                <?php endif; ?>

            <?php endforeach; ?>
        </div>

        <a href="tel:<?php echo str_replace(' ', '', CALL_NUMBER); ?>"
            class="btn btn-primary btn-sm demo-btn desktop-only">
            <i class="fas fa-calendar-alt"></i> Book a demo
        </a>
        <button class="hamburger" id="hamburgerBtn" aria-label="Open menu">
            <span></span><span></span><span></span>
        </button>
    </nav>
</div>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-overlay" id="menuOverlay"></div>
    <div class="mobile-menu-panel">
        <div class="mobile-menu-header">
            <a href="<?php echo BASE_URL; ?>/" class="logo" style="font-size: 18px;">
                <div class="logo-icon">
                    <img src="<?php echo BASE_URL; ?>/assets/icons/favicon.png" alt="Logo"
                        style="width: 22px; height: 22px;">
                </div>
                <span>Hey<span style="color: var(--primary);">Doot</span></span>
            </a>
            <button class="mobile-menu-close" id="menuClose"><i class="fas fa-times"></i></button>
        </div>

        <!-- Mobile Navigation with Dropdowns -->
        <?php foreach ($navbar as $key => $item): ?>

            <?php if (isset($item['submenu'])): ?>

                <div class="mobile-nav-item">

                    <div class="mobile-nav-link mobile-dropdown-trigger" data-dropdown="dropdown-<?= $key; ?>">

                        <div>
                            <i class="<?= $item['icon']; ?>"></i>
                            <?= $item['title']; ?>
                        </div>

                        <i class="fas fa-chevron-down dropdown-arrow"></i>

                    </div>

                    <div class="mobile-dropdown-menu" id="dropdown-<?= $key; ?>">

                        <?php foreach ($item['submenu'] as $sub): ?>

                            <a href="<?= $sub['link']; ?>">

                                <i class="<?= $sub['icon']; ?>"></i>
                                <?= $sub['title']; ?>

                            </a>

                        <?php endforeach; ?>

                    </div>

                </div>

            <?php else: ?>

                <a href="<?= $item['link']; ?>" class="mobile-nav-link">

                    <i class="<?= $item['icon']; ?>"></i>
                    <?= $item['title']; ?>

                </a>

            <?php endif; ?>

        <?php endforeach; ?>


        <div class="mobile-menu-cta">
            <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>"
                class="btn btn-primary btn-mobile-full demo-btn">
                <i class="fas fa-calendar-alt"></i> Book a Demo
            </a>
            <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>"
                class="btn btn-secondary btn-mobile-full trial-btn">
                <i class="fas fa-play-circle"></i> Start Free Trial
            </a>
        </div>
    </div>
</div>


<!-- Floating WhatsApp and Contact Button for Mobile -->
<style>
    /* Floating Buttons Container */
    .floating-buttons {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        gap: 12px;
        z-index: 90;
        align-items: flex-end;
        justify-content: space-between;
        width: 96%;
    }

    /* Default Button Style */
    .floating-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 58px;
        height: 58px;
        border-radius: 50px;
        text-decoration: none;
        overflow: hidden;
        white-space: nowrap;
        transition: all 0.35s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        position: relative;
    }

    /* Icons */
    .floating-btn i {
        font-size: 24px !important;
        min-width: 58px;
        text-align: center;
    }

    /* Hidden Text */
    .btn-label {
        opacity: 0;
        max-width: 0;
        transition: all 0.3s ease;
        font-size: 16px;
        font-weight: 600;
    }

    /* Expand ONLY hovered button */
    .floating-btn:hover {
        width: 180px;
        justify-content: flex-start;
    }

    /* Show text only on hovered button */
    .floating-btn:hover .btn-label {
        opacity: 1;
        max-width: 120px;
    }

    /* WhatsApp */
    .whatsapp-btn-float {
        background: #25D366;
        color: white;
        border: 2px solid #25D366;
        border-radius: 13px;
    }

    /* Call */
    .contact-btn {
        background: var(--primary);
        color: white;
    }

    /* Optional hover effects */
    .whatsapp-btn-float:hover {
        /* background: #128C7E; */
        /* border-color: #128C7E; */
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
    }

    .contact-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(10, 115, 156, 0.58);
    }

    /* Mobile Only */
    @media (max-width: 769px) {
        .floating-buttons {
            flex-direction: column;
        }
    }
</style>
<div class="container-fluid">
    <div class="floating-buttons">
        <a href="https://wa.me/<?php echo str_replace([' ', '+', '-', '(', ')'], '', WHATSAPP_NUMBER); ?>"
            class="floating-btn whatsapp-btn-float" target="_blank" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
            <span class="btn-label">WhatsApp</span>
        </a>

        <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>" class="floating-btn contact-btn"
            aria-label="Call us">
            <i class="fas fa-headset"></i>
            <span class="btn-label">97185 17228</span>
        </a>
    </div>
</div>



<!-- NavBar Ends here -->