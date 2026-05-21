<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-icons-font@v11/font/simple-icons.min.css">
<style>
    .whatsapp-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 20px;
        background: #25D366;
        color: #fff;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
    }

    .whatsapp-btn i {
        font-size: 20px;
    }
</style>
<!-- Footer -->
<footer class="footer">
    <div class="container-fluid">
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="logo" style="margin-bottom: 16px;">
                    <div class="logo-icon">
                        <img src="<?php echo BASE_URL; ?>/assets/images/logo/logo-white.png" alt="Logo">
                    </div>
                </div>
                <p>Manage WhatsApp Groups at Scale for Modern Businesses</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Product</h4>
                <a href="<?php echo BASE_URL; ?>/integrations.php">Integrations</a>
                <a href="<?php echo BASE_URL; ?>/features.php">Features</a>
                <a href="<?php echo BASE_URL; ?>/services.php">Services</a>
                <a href="<?php echo BASE_URL; ?>/pricing.php">Pricing</a>
            </div>
            <div class="footer-links">
                <h4>Company</h4>
                <a href="<?php echo BASE_URL; ?>/about.php">About Us</a>
                <a href="<?php echo BASE_URL; ?>/whyus.php">Why Us</a>
                <a href="<?php echo BASE_URL; ?>/faq.php">FAQ</a>
            </div>
            <div class="footer-links">
                <h4>Contact</h4>
                <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>"><i
                        class="fas fa-volume-control-phone"></i>
                    <?php echo PHONE_NUMBER; ?>
                </a>
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20HeyDoot%20features"
                    target="_blank">
                    <i class="si si-whatsapp" style="font-size: 15px; color: #25D366;"></i> Chat on WhatsApp
                </a>

                <a href="mailto:<?php echo SITE_EMAIL; ?>"><i class="fas fa-envelope"></i>
                    <?php echo SITE_EMAIL; ?>
                </a>
            </div>
        </div>
        <div class="utility-bar" style=" justify-content: center;">
            <div class="utility-bar-inner">
                <span class="utility-item" style="color: whitesmoke"><i class="far fa-copyright"></i>
                    <?php echo date('Y'); ?> HeyDoot. All rights reserved.
                </span>
                <a href="<?php echo BASE_URL; ?>/privacy-policy.php" class="utility-link" style="color: white">Privacy
                    Policy</a>
                <a href="<?php echo BASE_URL; ?>/terms-of-service.php" class="utility-link" style="color: white">Terms
                    of
                    Service</a>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo BASE_URL; ?>/script.js"></script>
</body>

</html>