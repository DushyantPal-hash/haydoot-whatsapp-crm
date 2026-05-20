<?php
// pages/contact.php
$page_meta = [
    'title' => 'Contact Us - HeyDoot WhatsApp CRM',
    'meta_title' => 'Contact Us | HeyDoot - Get in Touch with Our Team',
    'description' => 'Have questions about HeyDoot? Contact our sales and support team. We\'re here to help you with WhatsApp CRM solutions, pricing, and technical support.',
    'og_title' => 'Contact Us - HeyDoot WhatsApp CRM',
    'og_description' => 'Reach out to the HeyDoot team for sales inquiries, support, or general questions.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/contact',
    'twitter_title' => 'Contact Us - HeyDoot WhatsApp CRM',
    'twitter_description' => 'Get in touch with the HeyDoot team.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',
    'canonical' => 'https://heydoot.com/contact'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "ContactPage",
    "name" => "Contact HeyDoot",
    "url" => "https://heydoot.com/contact",
    "description" => "Contact the HeyDoot team for sales and support",
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
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 48px;
        margin-top: 48px;
    }

    .contact-info-card {
        background: white;
        border-radius: 32px;
        padding: 32px;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
        border: 1px solid #eef2f6;
    }

    .contact-method {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        padding: 20px 0;
        border-bottom: 1px solid #eef2f6;
    }

    .contact-method:last-child {
        border-bottom: none;
    }

    .contact-icon {
        width: 56px;
        height: 56px;
        background: rgba(37, 211, 102, 0.1);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: var(--wa-teal);
    }

    .contact-details h3 {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .contact-details p {
        color: #5a6b7e;
        margin-bottom: 4px;
    }

    .contact-details a {
        color: var(--wa-teal);
        text-decoration: none;
        font-weight: 500;
    }

    .contact-details a:hover {
        text-decoration: underline;
    }

    .contact-form {
        background: white;
        border-radius: 32px;
        padding: 32px;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
        border: 1px solid #eef2f6;
    }

    .contact-form-img {
        flex: 1;
        background: radial-gradient(ellipse at 30% 40%, rgba(37, 211, 102, 0.08), rgba(0, 161, 224, 0.05));
        border-radius: 64px;
        padding: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contact-form-img img {
        width: 100%;
        height: 100%;
        border-radius: 48px;
        box-shadow: 0 35px 55px -20px rgba(0, 0, 0, 0.25);
        transition: transform 0.3s ease;
        background: white;
        border: 2px solid rgba(255, 255, 255, 0.6);
    }

    .form-group {
        margin-bottom: 24px;
    }

    .form-group label {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
        color: #1a2a3a;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 14px 16px;
        border: 1px solid #eef2f6;
        border-radius: 16px;
        font-size: 1rem;
        transition: all 0.2s;
        background: #F8FAFE;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: var(--wa-green);
        background: white;
        box-shadow: 0 0 0 3px rgba(37, 211, 102, 0.1);
    }

    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }

    .btn-submit {
        background: var(--wa-green);
        color: white;
        border: none;
        padding: 14px 32px;
        border-radius: 50px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        width: 100%;
    }

    .btn-submit:hover {
        background: #128C7E;
        transform: translateY(-2px);
    }

    .map-container {
        border-radius: 32px;
        overflow: hidden;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
        margin-top: 48px;
    }

    .map-container iframe {
        width: 100%;
        height: 400px;
        border: 0;
    }

    .office-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 32px;
        margin-top: 48px;
    }

    .office-card {
        background: white;
        border-radius: 24px;
        padding: 24px;
        text-align: center;
        border: 1px solid #eef2f6;
        transition: transform 0.2s;
    }

    .office-card:hover {
        transform: translateY(-5px);
    }

    .office-icon {
        font-size: 40px;
        color: var(--wa-green);
        margin-bottom: 16px;
    }

    .office-card h3 {
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .office-card p {
        color: #5a6b7e;
        margin-bottom: 8px;
        line-height: 1.5;
    }

    .faq-mini {
        max-width: 800px;
        margin: 0 auto;
    }

    .faq-mini-item {
        background: #F8FAFE;
        border-radius: 16px;
        margin-bottom: 12px;
        overflow: hidden;
    }

    .faq-mini-question {
        padding: 18px 24px;
        font-weight: 600;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .faq-mini-question i {
        color: var(--wa-green);
        transition: transform 0.3s;
    }

    .faq-mini-question.active i {
        transform: rotate(180deg);
    }

    .faq-mini-answer {
        padding: 0 24px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
        color: #5a6b7e;
        line-height: 1.6;
    }

    .faq-mini-answer.active {
        padding: 0 24px 20px 24px;
        max-height: 200px;
    }

    @media (max-width: 768px) {
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 32px;
        }
    }

    .success-message {
        background: #d4edda;
        color: #155724;
        padding: 15px;
        border-radius: 12px;
        margin-bottom: 20px;
        display: none;
    }

    .error-message {
        background: #f8d7da;
        color: #721c24;
        padding: 15px;
        border-radius: 12px;
        margin-bottom: 20px;
        display: none;
    }
</style>

<main>
    <!-- Hero Section -->
    <section style="background: var(--bg-gradient-green); padding: 80px 0 60px;">
        <div class="floating-dots"></div>
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; text-align: center;">
            <span class="feature-pair-badge" style="color: var(--wa-green);"><i class=" fas fa-envelope"></i> Get in
                Touch</span>
            <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 16px;">We'd Love to <span
                    style="color: var(--wa-green);">Hear From You</span></h1>
            <p style="font-size: 1.2rem; color: #cdddef; max-width: 600px; margin: 0 auto;">Have questions about
                HeyDoot? Our team is here to help with sales, support, and general inquiries.</p>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section style="padding: 60px 0; background: #fff;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info-card">
                    <h2 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 8px;">Contact Information</h2>
                    <p style="color: #5a6b7e; margin-bottom: 24px;">Reach out through any of these channels</p>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="contact-details">
                            <h3>WhatsApp</h3>
                            <p>Chat with our sales team instantly</p>
                            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20a%20free%20trial"
                                target="_blank">
                                <?php echo WHATSAPP_NUMBER; ?>
                            </a>
                            <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20a%20free%20trial"
                                target="_blank">

                            </a>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-volume-control-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Phone</h3>
                            <p>Talk directly to our team</p>
                            <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>">
                                <?php echo PHONE_NUMBER; ?>
                            </a>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p>For general inquiries</p>
                            <a href="mailto:info@heydoot.com">info@heydoot.com</a>
                        </div>
                    </div>

                    <!-- <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Support</h3>
                            <p>Technical support 24/7</p>
                            <a href="mailto:support@heydoot.com">support@heydoot.com</a>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-file-invoice-dollar"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Sales & Billing</h3>
                            <p>For pricing and invoice questions</p>
                            <a href="mailto:sales@heydoot.com">sales@heydoot.com</a>
                        </div>
                    </div> -->
                </div>

                <!-- Contact Form -->
                <div class="contact-form-img">
                    <img src="<?php echo BASE_URL; ?>/assets/images/office.webp" alt="Office"
                        style="border-radius: 32px; box-shadow: 0 20px 30px -10px rgba(0,0,0,0.1);">
                </div>
                <!-- <div class="contact-form">
                    <h2 style="font-size: 1.6rem; font-weight: 700; margin-bottom: 8px;">Send us a Message</h2>
                    <p style="color: #5a6b7e; margin-bottom: 24px;">We'll get back to you within 24 hours</p>

                    <div id="successMessage" class="success-message">
                        <i class="fas fa-check-circle"></i> Thank you! Your message has been sent. We'll contact you
                        soon.
                    </div>
                    <div id="errorMessage" class="error-message">
                        <i class="fas fa-exclamation-triangle"></i> Oops! Something went wrong. Please try again.
                    </div>

                    <form id="contactForm">
                        <div class="form-group">
                            <label>Full Name *</label>
                            <input type="text" name="name" required placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <label>Email Address *</label>
                            <input type="email" name="email" required placeholder="john@example.com">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" placeholder="+1 234 567 8900">
                        </div>
                        <div class="form-group">
                            <label>Subject *</label>
                            <select name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="sales">Sales Inquiry</option>
                                <option value="support">Technical Support</option>
                                <option value="pricing">Pricing Question</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" required placeholder="Tell us how we can help..."></textarea>
                        </div>
                        <button type="submit" class="btn-submit">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Office Locations -->
    <section style="background: #F8FAFE; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge"><i class="fas fa-building"></i> Our Offices</span>
                <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 12px;">Global Presence</h2>
                <p style="color: #5a6b7e;">We serve customers worldwide from our offices</p>
            </div>

            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>India (Headquarters)</h3>
                    <p>PEGASUS TOWER Block A</p>
                    <p>Sector 68, Noida</p>
                    <p>Uttar Pradesh 201309</p>
                    <p style="margin-top: 12px;"><i class="fas fa-volume-control-phone"></i> <?php echo CALL_NUMBER; ?>
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>United States</h3>
                    <p>548 Market St, PMB 52935</p>
                    <p>San Francisco, CA 94104</p>
                    <p>USA</p>
                    <p style="margin-top: 12px;"><i class="fas fa-volume-control-phone"></i> +1 (555) 123-4567</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>United Kingdom</h3>
                    <p>86-90 Paul Street</p>
                    <p>London, EC2A 4NE</p>
                    <p>United Kingdom</p>
                    <p style="margin-top: 12px;"><i class="fas fa-volume-control-phone"></i> +44 20 1234 5678</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section style="padding: 60px 0; background: #fff;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 32px;">
                <h2 style="font-size: 1.8rem; font-weight: 700;">Find Us Here</h2>
                <p style="color: #5a6b7e;">Visit our headquarters in Noida</p>
            </div>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps?q=Office+No.+902,+9th+Floor,+Pegasus+Tower,+A-10,+Block+A,+Sector+68,+Noida,+Uttar+Pradesh+201309&output=embed"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%); padding: 80px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; text-align: center;">
            <h2 style="color: white; font-size: 2rem; margin-bottom: 20px;">Prefer to Start Immediately?</h2>
            <p style="color: #e0e0e0; font-size: 1.1rem; max-width: 600px; margin: 0 auto 32px;">Begin your free trial
                today — no credit card required.</p>
            <div class="cta-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20start%20a%20free%20trial"
                    class="btn btn-outline-light btn-lg"
                    style="border: 2px solid white; color: white; background: transparent;" target="_blank">
                    <i class="fab fa-whatsapp"></i> Start Free Trial
                </a>
                <a href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>" class="btn btn-cta-white btn-lg"
                    style="background: white; color: #1a2a3a;">
                    <i class="fas fa-volume-control-phone"></i> Call Now
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-container" style="background: #F0F8FF; padding: 60px 0;">
        <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">

            <div style="text-align: center; margin-bottom: 48px;">
                <span class="feature-pair-badge">
                    <i class="fas fa-question-circle"></i> Quick Answers
                </span>

                <h2 class="section-title" style="margin-bottom: 12px;">
                    Frequently Asked Questions
                </h2>

                <p class="section-sub">
                    Find quick answers to common questions
                </p>
            </div>

            <div class="faq-container">

                <div class="faq-item">
                    <div class="faq-question">
                        How quickly do you respond to inquiries?
                        <i class="fas fa-chevron-down"></i>
                    </div>

                    <div class="faq-answer">
                        We typically respond within 1-2 hours during business hours (9 AM - 6 PM IST).
                        For urgent issues, please WhatsApp or call us for immediate assistance.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do you offer a free trial?
                        <i class="fas fa-chevron-down"></i>
                    </div>

                    <div class="faq-answer">
                        Yes! We offer a 14-day free trial on all plans. No credit card required.
                        You can start your trial directly from our website or by contacting our sales team.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Can I get a demo before purchasing?
                        <i class="fas fa-chevron-down"></i>
                    </div>

                    <div class="faq-answer">
                        Absolutely! Our sales team would be happy to schedule a personalized demo
                        tailored to your business needs. Just reach out via WhatsApp or phone to book a demo.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do you provide onboarding support?
                        <i class="fas fa-chevron-down"></i>
                    </div>

                    <div class="faq-answer">
                        Yes, all paid plans include onboarding support. For Professional and Enterprise plans,
                        we provide dedicated onboarding sessions, team training, and setup assistance.
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>


<?php include 'components/footer.php'; ?>