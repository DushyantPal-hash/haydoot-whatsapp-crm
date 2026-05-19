<?php
// Get current page for active highlighting
$current_page = basename($_SERVER['PHP_SELF']);
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
        color: var(--text-color, #b9b9b9);
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
        color: var(--text-color, #ffffff);
        text-decoration: none;
        font-weight: 500;
        transition: background 0.2s;
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
                <img src="<?php echo BASE_URL; ?>/assets/icons/favicon.png" alt="Logo"
                    style="width: 25px; height: 25px;">
            </div>
            <span>Hey<span style="color: var(--primary);">Doot</span></span>
        </a>

        <!-- Desktop Navigation -->
        <div class="nav-pill">
            <div class="nav-item">
                <a href="<?php echo BASE_URL; ?>/features.php" class="nav-link">Features</a>
                <div class="dropdown-menu">
                    <a href="javascript:void(0)"><i class="fas fa-inbox"></i> Multi-Number
                        Inbox</a>
                    <a href="javascript:void(0)"><i class="fas fa-ticket-alt"></i> Tickets &
                        Tasks</a>
                    <a href="javascript:void(0)"><i class="fas fa-users"></i> Group
                        Management</a>
                    <a href="javascript:void(0)"><i class="fas fa-robot"></i> AI
                        Automations</a>
                    <!-- <a href="<?php echo BASE_URL; ?>/multi-inbox.php"><i class="fas fa-inbox"></i> Multi-Number
                        Inbox</a>
                    <a href="<?php echo BASE_URL; ?>/tickets.php"><i class="fas fa-ticket-alt"></i> Tickets &
                        Tasks</a>
                    <a href="<?php echo BASE_URL; ?>/group-management.php"><i class="fas fa-users"></i> Group
                        Management</a>
                    <a href="<?php echo BASE_URL; ?>/automation.php"><i class="fas fa-robot"></i> AI
                        Automations</a> -->
                </div>
            </div>
            <div class="nav-item">
                <a href="<?php echo BASE_URL; ?>/integrations.php" class="nav-link">Integrations</a>
                <div class="dropdown-menu">
                    <a href="<?php echo BASE_URL; ?>/integrations/hubspot.php"><i class="fab fa-hubspot"></i>
                        HubSpot CRM Integration</a>
                    <a href="<?php echo BASE_URL; ?>/integrations/zapier.php"><i class="fas fa-bolt"></i>
                        Zapier & Make Integration</a>
                    <a href="<?php echo BASE_URL; ?>/integrations/odoo-int.php"><i class="fab fa-slack"></i>
                        Odoo WhatsApp Integration</a>
                </div>
            </div>
            <a href="<?php echo BASE_URL; ?>/pricing.php" class="nav-link">Pricing</a>
            <a href="<?php echo BASE_URL; ?>/whyus.php" class="nav-link">Why Us</a>
            <a href="<?php echo BASE_URL; ?>/about.php" class="nav-link">About Us</a>
            <a href="<?php echo BASE_URL; ?>/contact.php" class="nav-link">Contact Us</a>
        </div>

        <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>"
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
        <div class="mobile-nav-item">
            <div class="mobile-nav-link mobile-dropdown-trigger" data-dropdown="features-dropdown">
                <i class="fas fa-th-large"></i> Features
                <i class="fas fa-chevron-down dropdown-arrow"></i>
            </div>
            <div class="mobile-dropdown-menu" id="features-dropdown">
                <a href="<?php echo BASE_URL; ?>/multi-inbox.php"><i class="fas fa-inbox"></i> Multi-Number
                    Inbox</a>
                <a href="<?php echo BASE_URL; ?>/tickets.php"><i class="fas fa-ticket-alt"></i> Tickets &
                    Tasks</a>
                <a href="<?php echo BASE_URL; ?>/group-management.php"><i class="fas fa-users"></i> Group
                    Management</a>
                <a href="<?php echo BASE_URL; ?>/automation.php"><i class="fas fa-robot"></i> AI Automations</a>
            </div>
        </div>

        <div class="mobile-nav-item">
            <div class="mobile-nav-link mobile-dropdown-trigger" data-dropdown="integrations-dropdown">
                <i class="fas fa-plug"></i> Integrations
                <i class="fas fa-chevron-down dropdown-arrow"></i>
            </div>
            <div class="mobile-dropdown-menu" id="integrations-dropdown">
                <a href="<?php echo BASE_URL; ?>/integrations/hubspot.php"><i class="fab fa-hubspot"></i> HubSpot
                    CRM</a>
                <a href="<?php echo BASE_URL; ?>/integrations/zapier.php"><i class="fas fa-bolt"></i> Zapier &
                    Make</a>
                <a href="<?php echo BASE_URL; ?>/integrations/odoo-int.php"><i class="fab fa-slack"></i> Odoo
                    Integration</a>
            </div>
        </div>

        <a href="<?php echo BASE_URL; ?>/pricing.php" class="mobile-nav-link"><i class="fas fa-tag"></i>
            Pricing</a>
        <a href="<?php echo BASE_URL; ?>/whyus.php" class="mobile-nav-link"><i class="fas fa-star"></i> Why Us</a>
        <a href="<?php echo BASE_URL; ?>/about.php" class="mobile-nav-link"><i class="fas fa-info-circle"></i>
            About Us</a>
        <a href="<?php echo BASE_URL; ?>/contact.php" class="mobile-nav-link"><i class="fas fa-question-circle"></i>
            Contact Us</a>


        <div class="mobile-menu-cta">
            <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>"
                class="btn btn-primary btn-mobile-full demo-btn">
                <i class="fas fa-calendar-alt"></i> Book a Demo
            </a>
            <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>"
                class="btn btn-secondary btn-mobile-full trial-btn" style="border-radius: 14px;">
                <i class="fas fa-play-circle"></i> Start Free Trial
            </a>
        </div>
    </div>
</div>

<!-- NavBar Ends here -->