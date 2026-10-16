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
                    <a href="<?php echo BASE_URL; ?>/" class="logo">
                        <div class="logo-icon">
                            <img src="<?php echo BASE_URL; ?>/assets/images/logo/logo-white.png" alt="HeyDoot Logo" width="160" height="40" loading="lazy">
                        </div>
                    </a>
                </div>
                <p>Manage WhatsApp Groups at Scale for Modern Businesses</p>
                <div class="social-links">
                    <a href="https://www.linkedin.com/company/heydoot/" class="linkedin" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.threads.com/@heydootofficial" class="threads" target="_blank" rel="noopener noreferrer" aria-label="Threads"><i class="si si-threads"></i>
                    </a>
                    <a href="https://www.youtube.com/@HeyDootOfficial" class="youtube" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://x.com/HeyDoot" class="twitter" target="_blank" rel="noopener noreferrer" aria-label="Twitter"><i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/heydootofficial/" class="instagram" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i
                            class="fab fa-instagram"></i>
                    </a>
                    <a href="https://in.pinterest.com/heydootcom/" class="pinterest" target="_blank" rel="noopener noreferrer" aria-label="Pinterest"><i class="fab fa-pinterest"></i>
                    </a>
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
                <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>"><i class="fas fa-mobile-alt"></i>
                    <?php echo PHONE_NUMBER; ?>
                </a>
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20speak%20with%20the%20HeyDoot%20team%20about%20WhatsApp%20automation"
                    target="_blank" rel="noopener noreferrer">
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
                <a href="<?php echo BASE_URL; ?>/sitemap.html" class="utility-link" style="color: white">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo BASE_URL; ?>/script.js"></script>
</body>

</html>