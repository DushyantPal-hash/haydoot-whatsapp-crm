<?php
$page_meta = [
    'title' => 'Privacy Policy - HeyDoot WhatsApp CRM',
    'meta_title' => 'Privacy Policy | HeyDoot - WhatsApp CRM for Teams',
    'description' => 'Read HeyDoot\'s privacy policy to understand how we collect, use, and protect your data. We prioritize transparency and security for your WhatsApp communications.',
    'og_title' => 'Privacy Policy - HeyDoot WhatsApp CRM',
    'og_description' => 'Learn about HeyDoot\'s commitment to data privacy, security measures, and how we handle your information.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/privacy-policy',
    'twitter_title' => 'Privacy Policy - HeyDoot WhatsApp CRM',
    'twitter_description' => 'Transparent privacy practices for your WhatsApp CRM data.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',
    'canonical' => 'https://heydoot.com/privacy-policy'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "WebPage",
    "name" => "Privacy Policy",
    "url" => "https://heydoot.com/privacy-policy",
    "description" => "HeyDoot Privacy Policy - Data protection and privacy practices for WhatsApp CRM users.",
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

<!-- Privacy Policy Hero Section -->
<section class="hero">
    <div class="floating-dots"></div>
    <div class="container-fluid">
        <div style="text-align: center;">
            <span class="security-badge"
                style="background: rgba(37, 211, 102, 0.1); color: var(--wa-green); margin-bottom: 20px; display: inline-block;">
                <i class="fas fa-shield-alt"></i> Updated: January 2026
            </span>
            <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 20px; ">Privacy Policy</h1>
            <p style="font-size: 1.2rem; color: #d6d6d6; max-width: 800px; margin: 0 auto;">Your trust is our priority.
                Learn how we protect your data and respect your privacy.</p>
        </div>
    </div>
</section>

<!-- Last Updated Banner -->
<section style="background: #fff; border-bottom: 1px solid #eef2f6;">
    <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; padding: 20px 0;">
        <div style="background: var(--bg-gradient-green); padding: 15px 25px; border-radius: 16px; text-align: center;">
            <p style="margin: 0; color: #f1f1f2;"><i class="fas fa-calendar-alt"
                    style="color: var(--wa-green); margin-right: 10px;"></i> <strong>Effective Date:</strong> January 1,
                2026 &nbsp;|&nbsp; <strong>Last Reviewed:</strong> January 15, 2026</p>
        </div>
    </div>
</section>

<!-- Main Content -->
<section style="padding: 60px 0; background: #fff;">
    <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
        <div class="privacy-grid" style="display: flex; gap: 48px; flex-wrap: wrap;">
            <!-- Sidebar Navigation -->
            <aside style="flex: 1; min-width: 250px;">
                <div
                    style="position: sticky; top: 100px; background: #F8FAFE; border-radius: 24px; padding: 24px; border: 1px solid #eef2f6;">
                    <h4 style="margin-bottom: 20px; font-weight: 700;">Contents</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 12px;"><a href="#intro"
                                style="color: #2c3e50; text-decoration: none; transition: color 0.2s;"><i
                                    class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i>
                                Introduction</a></li>
                        <li style="margin-bottom: 12px;"><a href="#info-collect"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Information
                                We Collect</a></li>
                        <li style="margin-bottom: 12px;"><a href="#info-use"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> How We Use
                                Your Information</a></li>
                        <li style="margin-bottom: 12px;"><a href="#data-security"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Data
                                Security</a></li>
                        <li style="margin-bottom: 12px;"><a href="#data-sharing"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Data
                                Sharing</a></li>
                        <li style="margin-bottom: 12px;"><a href="#your-rights"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Your
                                Rights</a></li>
                        <li style="margin-bottom: 12px;"><a href="#cookies"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Cookies &
                                Tracking</a></li>
                        <li style="margin-bottom: 12px;"><a href="#thirdparty"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Third-Party
                                Links</a></li>
                        <li style="margin-bottom: 12px;"><a href="#children"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Children's
                                Privacy</a></li>
                        <li style="margin-bottom: 12px;"><a href="#policy-changes"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Policy
                                Changes</a></li>
                        <li style="margin-bottom: 12px;"><a href="#contact"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Contact
                                Us</a></li>
                    </ul>
                </div>
            </aside>

            <!-- Main Privacy Content -->
            <main style="flex: 3; min-width: 300px;">
                <!-- Introduction -->
                <div id="intro" class="privacy-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">Introduction
                    </h2>
                    <p style="margin-bottom: 16px; line-height: 1.7;">Welcome to HeyDoot ("we," "our," "us"). We are
                        committed to protecting your personal information and your right to privacy. This Privacy Policy
                        explains how we collect, use, disclose, and safeguard your information when you use our WhatsApp
                        CRM platform and website (<a href="https://heydoot.com"
                            style="color: var(--wa-teal);">https://heydoot.com</a>).</p>
                    <p style="margin-bottom: 16px; line-height: 1.7;">HeyDoot is a product of <strong>HashStudioz
                            Technologies</strong>, and we follow strict data protection standards including GDPR and
                        CCPA compliance frameworks. By using our services, you agree to the collection and use of
                        information in accordance with this policy.</p>
                    <div style="background: #F0F8FF; padding: 20px; border-radius: 16px; margin-top: 20px;">
                        <i class="fas fa-info-circle" style="color: var(--wa-teal); margin-right: 10px;"></i>
                        <strong>Key Principle:</strong> We never sell your personal data. Period.
                    </div>
                </div>

                <!-- Information We Collect -->
                <div id="info-collect" class="privacy-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">Information We
                        Collect</h2>
                    <p style="margin-bottom: 20px;">We collect information that you provide directly to us,
                        automatically through your use of our services, and from third-party sources.</p>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 24px 0 16px;">1. Information You Provide
                    </h3>
                    <ul style="margin-bottom: 20px; padding-left: 20px;">
                        <li style="margin-bottom: 10px;"><strong>Account Information:</strong> Name, email address,
                            phone number, company name, and password when you register.</li>
                        <li style="margin-bottom: 10px;"><strong>WhatsApp Numbers:</strong> The WhatsApp numbers you
                            connect to our platform.</li>
                        <li style="margin-bottom: 10px;"><strong>Communication Data:</strong> Messages, media files, and
                            conversation history processed through our platform.</li>
                        <li style="margin-bottom: 10px;"><strong>Billing Information:</strong> Payment details, billing
                            address, and subscription information.</li>
                        <li style="margin-bottom: 10px;"><strong>Support Data:</strong> Information you provide when
                            contacting our support team.</li>
                    </ul>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 24px 0 16px;">2. Automatically Collected
                        Information</h3>
                    <ul style="margin-bottom: 20px; padding-left: 20px;">
                        <li style="margin-bottom: 10px;"><strong>Usage Data:</strong> Log data, IP addresses, browser
                            type, device information, pages visited, time spent, and interaction metrics.</li>
                        <li style="margin-bottom: 10px;"><strong>Cookies & Similar Technologies:</strong> We use cookies
                            to remember preferences and analyze usage patterns.</li>
                        <li style="margin-bottom: 10px;"><strong>Performance Data:</strong> Response times, message
                            volumes, and system performance metrics.</li>
                    </ul>

                    <div style="background: #FDF7F0; padding: 20px; border-radius: 16px; margin: 20px 0;">
                        <i class="fas fa-database" style="color: var(--wa-teal); margin-right: 10px;"></i>
                        <strong>Note about WhatsApp Data:</strong> HeyDoot does not access or store your WhatsApp
                        contacts beyond what is necessary for platform functionality. All message data is encrypted
                        end-to-end.
                    </div>
                </div>

                <!-- How We Use Your Information -->
                <div id="info-use" class="privacy-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">How We Use
                        Your Information</h2>
                    <p style="margin-bottom: 20px;">We use your information for the following purposes:</p>
                    <div class="use-grid"
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin: 24px 0;">
                        <div style="background: #F8FAFE; padding: 20px; border-radius: 16px;">
                            <i class="fas fa-cogs"
                                style="font-size: 28px; color: var(--wa-teal); margin-bottom: 12px; display: inline-block;"></i>
                            <h4 style="margin-bottom: 10px;">Provide & Maintain Service</h4>
                            <p style="color: #5a6b7e;">Operate our platform, process WhatsApp messages, and deliver core
                                functionality.</p>
                        </div>
                        <div style="background: #F8FAFE; padding: 20px; border-radius: 16px;">
                            <i class="fas fa-chart-line"
                                style="font-size: 28px; color: var(--wa-teal); margin-bottom: 12px; display: inline-block;"></i>
                            <h4 style="margin-bottom: 10px;">Improve & Optimize</h4>
                            <p style="color: #5a6b7e;">Analyze usage patterns to enhance features, performance, and user
                                experience.</p>
                        </div>
                        <div style="background: #F8FAFE; padding: 20px; border-radius: 16px;">
                            <i class="fas fa-headset"
                                style="font-size: 28px; color: var(--wa-teal); margin-bottom: 12px; display: inline-block;"></i>
                            <h4 style="margin-bottom: 10px;">Customer Support</h4>
                            <p style="color: #5a6b7e;">Respond to inquiries, troubleshoot issues, and provide technical
                                assistance.</p>
                        </div>
                        <div style="background: #F8FAFE; padding: 20px; border-radius: 16px;">
                            <i class="fas fa-shield-alt"
                                style="font-size: 28px; color: var(--wa-teal); margin-bottom: 12px; display: inline-block;"></i>
                            <h4 style="margin-bottom: 10px;">Security & Compliance</h4>
                            <p style="color: #5a6b7e;">Detect fraud, prevent abuse, and comply with legal obligations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Data Security -->
                <div id="data-security" class="privacy-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">Data Security
                    </h2>
                    <p style="margin-bottom: 16px;">We implement industry-standard security measures to protect your
                        data:</p>
                    <ul style="margin-bottom: 20px; padding-left: 20px;">
                        <li style="margin-bottom: 10px;"><i class="fas fa-lock"
                                style="color: var(--wa-teal); margin-right: 10px;"></i> <strong>Encryption:</strong>
                            AES-256 encryption for data at rest and TLS 1.3 for data in transit.</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-user-shield"
                                style="color: var(--wa-teal); margin-right: 10px;"></i> <strong>Access
                                Controls:</strong> Strict role-based access controls and multi-factor authentication.
                        </li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-database"
                                style="color: var(--wa-teal); margin-right: 10px;"></i> <strong>Regular
                                Backups:</strong> Automated encrypted backups with point-in-time recovery.</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-chart-simple"
                                style="color: var(--wa-teal); margin-right: 10px;"></i> <strong>Monitoring:</strong>
                            24/7 security monitoring and regular penetration testing.</li>
                    </ul>
                    <div
                        style="background: #FFF3E0; padding: 15px 20px; border-radius: 12px; border-left: 4px solid #f5b042;">
                        <i class="fas fa-exclamation-triangle" style="color: #f5b042; margin-right: 10px;"></i>
                        <strong>Important:</strong> While we take every precaution, no method of transmission over the
                        Internet is 100% secure. You are responsible for maintaining the security of your account
                        credentials.
                    </div>
                </div>

                <!-- Data Sharing -->
                <div id="data-sharing" class="privacy-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">Data Sharing
                    </h2>
                    <p style="margin-bottom: 20px;">We do not sell your personal information. We may share your data in
                        these limited circumstances:</p>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">Service Providers</h3>
                    <p>We engage trusted third-party companies to perform services on our behalf:</p>
                    <ul style="margin-bottom: 20px; padding-left: 20px;">
                        <li>Cloud hosting providers (AWS, Google Cloud)</li>
                        <li>Payment processors (Stripe, Razorpay)</li>
                        <li>Analytics services (Google Analytics, Mixpanel)</li>
                        <li>Customer support tools (Intercom, Zendesk)</li>
                    </ul>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">Legal Requirements</h3>
                    <p>We may disclose your information if required by law, court order, or governmental regulation, or
                        to protect our rights, property, or safety.</p>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">Business Transfers</h3>
                    <p>In the event of a merger, acquisition, or asset sale, your data may be transferred. We will
                        notify you before any such transfer.</p>
                </div>

                <!-- Your Rights -->
                <div id="your-rights" class="privacy-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">Your Privacy
                        Rights</h2>
                    <p>Depending on your location, you may have the following rights:</p>
                    <div class="rights-grid"
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; margin: 24px 0;">
                        <div style="border: 1px solid #eef2f6; padding: 16px; border-radius: 12px;">
                            <i class="fas fa-eye"
                                style="color: var(--wa-teal); margin-bottom: 8px; display: inline-block;"></i>
                            <strong>Access</strong>
                            <p style="margin: 8px 0 0; font-size: 0.9rem;">Request a copy of your data</p>
                        </div>
                        <div style="border: 1px solid #eef2f6; padding: 16px; border-radius: 12px;">
                            <i class="fas fa-edit"
                                style="color: var(--wa-teal); margin-bottom: 8px; display: inline-block;"></i>
                            <strong>Rectification</strong>
                            <p style="margin: 8px 0 0; font-size: 0.9rem;">Correct inaccurate information</p>
                        </div>
                        <div style="border: 1px solid #eef2f6; padding: 16px; border-radius: 12px;">
                            <i class="fas fa-trash-alt"
                                style="color: var(--wa-teal); margin-bottom: 8px; display: inline-block;"></i>
                            <strong>Deletion</strong>
                            <p style="margin: 8px 0 0; font-size: 0.9rem;">Request data deletion (Right to be forgotten)
                            </p>
                        </div>
                        <div style="border: 1px solid #eef2f6; padding: 16px; border-radius: 12px;">
                            <i class="fas fa-download"
                                style="color: var(--wa-teal); margin-bottom: 8px; display: inline-block;"></i>
                            <strong>Portability</strong>
                            <p style="margin: 8px 0 0; font-size: 0.9rem;">Receive data in a machine-readable format</p>
                        </div>
                        <div style="border: 1px solid #eef2f6; padding: 16px; border-radius: 12px;">
                            <i class="fas fa-ban"
                                style="color: var(--wa-teal); margin-bottom: 8px; display: inline-block;"></i>
                            <strong>Objection</strong>
                            <p style="margin: 8px 0 0; font-size: 0.9rem;">Opt-out of certain processing</p>
                        </div>
                        <div style="border: 1px solid #eef2f6; padding: 16px; border-radius: 12px;">
                            <i class="fas fa-sliders-h"
                                style="color: var(--wa-teal); margin-bottom: 8px; display: inline-block;"></i>
                            <strong>Restriction</strong>
                            <p style="margin: 8px 0 0; font-size: 0.9rem;">Limit how we process your data</p>
                        </div>
                    </div>
                    <p>To exercise these rights, contact us at <a href="mailto:privacy@heydoot.com"
                            style="color: var(--wa-teal);">privacy@heydoot.com</a>. We will respond within 30 days.</p>
                </div>

                <!-- Cookies -->
                <div id="cookies" class="privacy-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">Cookies &
                        Tracking Technologies</h2>
                    <p>We use cookies and similar technologies to:</p>
                    <ul style="margin-bottom: 20px; padding-left: 20px;">
                        <li>Authenticate users and maintain session state</li>
                        <li>Remember user preferences and settings</li>
                        <li>Analyze platform usage and performance</li>
                        <li>Serve relevant advertisements (on marketing pages only)</li>
                    </ul>
                    <p>You can control cookies through your browser settings. Disabling cookies may affect certain
                        platform features.</p>
                    <div style="background: #F8FAFE; padding: 15px; border-radius: 12px; margin-top: 16px;">
                        <i class="fas fa-cookie-bite" style="color: var(--wa-teal); margin-right: 10px;"></i>
                        <strong>Cookie Types We Use:</strong> Essential (required), Functional (preferences), Analytics
                        (performance), Marketing (with consent).
                    </div>
                </div>

                <!-- Third Party Links -->
                <div id="thirdparty" class="privacy-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">Third-Party
                        Links</h2>
                    <p>Our website and platform may contain links to third-party websites, products, or services. We are
                        not responsible for the privacy practices of these third parties. We encourage you to review
                        their privacy policies before providing any personal information.</p>
                </div>

                <!-- Children's Privacy -->
                <div id="children" class="privacy-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">Children's
                        Privacy</h2>
                    <p>HeyDoot is not intended for children under 13 years of age (or under 16 in the EEA/UK). We do not
                        knowingly collect personal information from children. If you believe a child has provided us
                        with personal information, please contact us, and we will delete it promptly.</p>
                </div>

                <!-- Policy Changes -->
                <div id="policy-changes" class="privacy-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">Changes to
                        This Privacy Policy</h2>
                    <p>We may update this Privacy Policy from time to time. We will notify you of material changes by:
                    </p>
                    <ul style="margin-bottom: 20px; padding-left: 20px;">
                        <li>Posting the updated policy on our website with a new "Effective Date"</li>
                        <li>Sending an email notification to registered users</li>
                        <li>Displaying a prominent notice within the HeyDoot platform</li>
                    </ul>
                    <p>We encourage you to review this Privacy Policy periodically.</p>
                </div>

                <!-- Contact -->
                <div id="contact" class="privacy-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">Contact Us
                    </h2>
                    <p>If you have questions, concerns, or requests regarding this Privacy Policy or our data practices:
                    </p>
                    <div style="background: #F8FAFE; padding: 24px; border-radius: 20px; margin-top: 20px;">
                        <p style="margin-bottom: 12px;"><i class="fas fa-envelope"
                                style="width: 30px; color: var(--wa-teal);"></i> <strong>Email:</strong> <a
                                href="mailto:<?php echo SITE_EMAIL; ?>" style="color: var(--wa-teal);">
                                <?php echo SITE_EMAIL; ?>
                            </a></p>
                        <p style="margin-bottom: 12px;"><i class="fas fa-headset"
                                style="width: 30px; color: var(--wa-teal);"></i> <strong>Phone:</strong> <a
                                href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>"
                                style="color: var(--wa-teal);"><?php echo PHONE_NUMBER; ?></a></p>
                        <p style="margin-bottom: 12px;"><i class="fas fa-map-marker-alt"
                                style="width: 30px; color: var(--wa-teal);"></i> <strong>Address:</strong> HashStudioz
                            Technologies, PEGASUS TOWER
                            Block A, Sector 68, Noida, Uttar Pradesh 201309, India</p>
                        <p><i class="fab fa-whatsapp" style="width: 30px; color: var(--wa-teal);"></i>
                            <strong>WhatsApp:</strong> <a
                                href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20HeyDoot%20features"
                                style="color: var(--wa-teal);"><?php echo CALL_NUMBER; ?></a>
                        </p>
                    </div>
                    <p style="margin-top: 20px;">For data protection inquiries, you may also contact our Data Protection
                        Officer (DPO) at <strong>dpo@heydoot.com</strong>.</p>
                </div>

                <!-- GDPR & CCPA Notice -->
                <div
                    style="background: var(--bg-gradient-teal); color: white; padding: 30px; border-radius: 24px; margin-top: 20px;">
                    <h3 style="color: white; margin-bottom: 16px;"><i class="fas fa-gavel"></i> Additional Information
                        for EEA, UK & California Residents</h3>
                    <p style="margin-bottom: 12px;">If you reside in the European Economic Area (EEA), United Kingdom,
                        or California, you have additional rights under GDPR and CCPA:</p>
                    <ul style="padding-left: 20px; margin-bottom: 0;">
                        <li style="margin-bottom: 8px;"><strong>Legal Basis for Processing:</strong> We process your
                            data based on contract necessity, legitimate interests, consent, or legal obligations.</li>
                        <li style="margin-bottom: 8px;"><strong>Data Transfers:</strong> Your information may be
                            transferred to and processed in countries outside your residence, including India and the
                            United States.</li>
                        <li style="margin-bottom: 8px;"><strong>Do Not Sell:</strong> We do not sell your personal
                            information. California residents may opt-out of any future "sale" of data (which we do not
                            engage in).</li>
                        <li><strong>Authorized Agent:</strong> California residents may use an authorized agent to
                            submit privacy requests.</li>
                    </ul>
                </div>
            </main>
        </div>
    </div>
</section>

<!-- CTA Section - Same style as main page -->
<section style="background: #F0F8FF; padding: 80px 0;">
    <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
        <div class="cta-section"
            style="text-align: center; background: var(--bg-gradient-teal); border-radius: 48px; padding: 60px 40px; color: white;">
            <h2 style="color: white; margin-bottom: 20px;">Have questions about your data?</h2>
            <p style="margin-bottom: 32px;">Our privacy team is here to help. Reach out anytime.</p>
            <div class="cta-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="https://wa.me/919718517228?text=I%20have%20a%20privacy%20question%20about%20HeyDoot"
                    class="btn btn-outline-light btn-lg"
                    style="background: transparent; border: 2px solid white; color: white; padding: 12px 32px; border-radius: 40px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px;">
                    <i class="fab fa-whatsapp"></i> WhatsApp Privacy Team
                </a>
                <a href="mailto:privacy@heydoot.com" class="btn btn-cta-white btn-lg"
                    style="background: white; color: #1a2a3a; padding: 12px 32px; border-radius: 40px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px;">
                    <i class="fas fa-envelope"></i> Email DPO <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>

<!-- Add smooth scroll for anchor links -->
<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
</script>