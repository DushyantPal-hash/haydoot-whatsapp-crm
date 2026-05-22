<?php
// pages/terms-of-service.php
$page_meta = [
    'title' => 'Terms of Service - HeyDoot WhatsApp CRM',
    'meta_title' => 'Terms of Service | HeyDoot - WhatsApp CRM for Teams',
    'description' => 'Read HeyDoot\'s Terms of Service to understand the legal agreement governing your use of our WhatsApp CRM platform, including acceptable use, billing, and liability.',
    'og_title' => 'Terms of Service - HeyDoot WhatsApp CRM',
    'og_description' => 'Legal terms and conditions for using HeyDoot\'s WhatsApp CRM platform.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/terms-of-service',
    'twitter_title' => 'Terms of Service - HeyDoot WhatsApp CRM',
    'twitter_description' => 'Understand the terms governing your use of HeyDoot.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',
    'canonical' => 'https://heydoot.com/terms-of-service'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "WebPage",
    "name" => "Terms of Service",
    "url" => "https://heydoot.com/terms-of-service",
    "description" => "HeyDoot Terms of Service - Legal agreement for WhatsApp CRM users.",
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

<!-- Terms of Service Hero Section -->
<section class="terms-hero" style="background: var(--bg-gradient-green); padding: 80px 0 60px;">
    <div class="floating-dots"></div>
    <div class="container-fluid">
        <div style="text-align: center;">
            <span class="security-badge"
                style="background: rgba(37, 211, 102, 0.1); color: var(--wa-green); margin-bottom: 20px; display: inline-block;">
                <i class="fas fa-gavel"></i> Legal Agreement
            </span>
            <h1 style="font-size: 3rem; font-weight: 800; margin-bottom: 20px; color: #dde0e2;">Terms of Service</h1>
            <p style="font-size: 1.2rem; color: #9fafc1; max-width: 800px; margin: 0 auto;">Please read these terms
                carefully before using HeyDoot. By using our service, you agree to be bound by these terms.</p>
        </div>
    </div>
</section>

<!-- Last Updated Banner -->
<section style="background: #fff; border-bottom: 1px solid #eef2f6;">
    <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto; padding: 20px 0;">
        <div style="background: var(--bg-gradient-green); padding: 15px 25px; border-radius: 16px; text-align: center;">
            <p style="margin: 0; color: #d6e0e9;"><i class="fas fa-calendar-alt"
                    style="color: var(--wa-green); margin-right: 10px;"></i> <strong>Effective Date:</strong> January 1,
                2026 &nbsp;|&nbsp; <strong>Last Updated:</strong> January 15, 2026</p>
        </div>
    </div>
</section>

<!-- Main Content -->
<section style="padding: 60px 0; background: #fff;">
    <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
        <div class="terms-grid" style="display: flex; gap: 48px; flex-wrap: wrap;">
            <!-- Sidebar Navigation -->
            <aside style="flex: 1; min-width: 250px;">
                <div
                    style="position: sticky; top: 100px; background: #F8FAFE; border-radius: 24px; padding: 24px; border: 1px solid #eef2f6;">
                    <h4 style="margin-bottom: 20px; font-weight: 700;">Contents</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 12px;"><a href="#agreement"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i>
                                Agreement</a></li>
                        <li style="margin-bottom: 12px;"><a href="#definitions"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i>
                                Definitions</a></li>
                        <li style="margin-bottom: 12px;"><a href="#account"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Account
                                Terms</a></li>
                        <li style="margin-bottom: 12px;"><a href="#acceptable-use"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Acceptable
                                Use</a></li>
                        <li style="margin-bottom: 12px;"><a href="#subscription"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i>
                                Subscription & Billing</a></li>
                        <li style="margin-bottom: 12px;"><a href="#cancellation"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i>
                                Cancellation & Refunds</a></li>
                        <li style="margin-bottom: 12px;"><a href="#data-ownership"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Data
                                Ownership</a></li>
                        <li style="margin-bottom: 12px;"><a href="#service-level"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Service
                                Level</a></li>
                        <li style="margin-bottom: 12px;"><a href="#limitations"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Limitations
                                of Liability</a></li>
                        <li style="margin-bottom: 12px;"><a href="#indemnification"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i>
                                Indemnification</a></li>
                        <li style="margin-bottom: 12px;"><a href="#termination"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i>
                                Termination</a></li>
                        <li style="margin-bottom: 12px;"><a href="#governing-law"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Governing
                                Law</a></li>
                        <li style="margin-bottom: 12px;"><a href="#modifications"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i>
                                Modifications</a></li>
                        <li style="margin-bottom: 12px;"><a href="#contact"
                                style="color: #2c3e50; text-decoration: none;"><i class="fas fa-chevron-right"
                                    style="font-size: 10px; margin-right: 8px; color: var(--wa-teal);"></i> Contact
                                Us</a></li>
                    </ul>
                </div>
            </aside>

            <!-- Main Terms Content -->
            <main style="flex: 3; min-width: 300px;">
                <!-- Agreement -->
                <div id="agreement" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">1. Agreement
                        to Terms</h2>
                    <p style="margin-bottom: 16px; line-height: 1.7;">These Terms of Service ("Terms") constitute a
                        legally binding agreement between you ("User," "you," "your") and HashStudioz Technologies
                        ("HeyDoot," "we," "us," "our") regarding your access to and use of the HeyDoot WhatsApp CRM
                        platform, website, and related services (collectively, the "Service").</p>
                    <p style="margin-bottom: 16px; line-height: 1.7;">By accessing or using the Service, you acknowledge
                        that you have read, understood, and agree to be bound by these Terms. If you do not agree with
                        any part of these Terms, you must not use the Service.</p>
                    <div style="background: #FDF7F0; padding: 20px; border-radius: 16px; margin-top: 20px;">
                        <i class="fas fa-exclamation-triangle" style="color: #f5b042; margin-right: 10px;"></i>
                        <strong>Important:</strong> These Terms contain a binding arbitration clause and class action
                        waiver. Please read them carefully as they affect your legal rights.
                    </div>
                </div>

                <!-- Definitions -->
                <div id="definitions" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">2. Definitions
                    </h2>
                    <ul style="margin-bottom: 20px; padding-left: 20px;">
                        <li style="margin-bottom: 12px;"><strong>"Account"</strong> means the registered user account
                            created to access the Service.</li>
                        <li style="margin-bottom: 12px;"><strong>"Agent"</strong> means an individual team member
                            authorized to use the Service under your Account.</li>
                        <li style="margin-bottom: 12px;"><strong>"Content"</strong> means any data, messages, files,
                            information, or materials uploaded, processed, or transmitted through the Service.</li>
                        <li style="margin-bottom: 12px;"><strong>"Subscription Fee"</strong> means the recurring fee
                            payable for access to the Service.</li>
                        <li style="margin-bottom: 12px;"><strong>"WhatsApp Number"</strong> means any telephone number
                            connected to the Service for WhatsApp communication.</li>
                        <li style="margin-bottom: 12px;"><strong>"HeyDoot"</strong> refers to the platform and services
                            provided by HashStudioz Technologies.</li>
                    </ul>
                </div>

                <!-- Account Terms -->
                <div id="account" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">3. Account
                        Terms</h2>
                    <p style="margin-bottom: 16px;">To use the Service, you must:</p>
                    <ul style="margin-bottom: 20px; padding-left: 20px;">
                        <li style="margin-bottom: 10px;">Be at least 18 years of age or the age of majority in your
                            jurisdiction</li>
                        <li style="margin-bottom: 10px;">Provide accurate, current, and complete registration
                            information</li>
                        <li style="margin-bottom: 10px;">Maintain the security and confidentiality of your account
                            credentials</li>
                        <li style="margin-bottom: 10px;">Promptly notify us of any unauthorized access or security
                            breach</li>
                        <li style="margin-bottom: 10px;">Accept full responsibility for all activities under your
                            Account</li>
                    </ul>
                    <p>You are responsible for all Content posted and activity that occurs under your Account, even when
                        Content is posted by others who have access to your Account. We reserve the right to suspend or
                        terminate accounts that violate these Terms.</p>
                </div>

                <!-- Acceptable Use -->
                <div id="acceptable-use" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">4. Acceptable
                        Use Policy</h2>
                    <p style="margin-bottom: 16px;">You agree NOT to use the Service for any unlawful, prohibited, or
                        abusive purposes, including but not limited to:</p>

                    <div style="background: #FFF3E0; padding: 20px; border-radius: 16px; margin: 20px 0;">
                        <h3 style="font-size: 1.2rem; margin-bottom: 15px;"><i class="fas fa-ban"
                                style="color: #f5b042;"></i> Prohibited Activities</h3>
                        <ul style="padding-left: 20px;">
                            <li style="margin-bottom: 8px;">Sending spam, unsolicited messages, or bulk marketing
                                without consent</li>
                            <li style="margin-bottom: 8px;">Harassing, abusing, threatening, or harming any person or
                                group</li>
                            <li style="margin-bottom: 8px;">Impersonating any person or entity</li>
                            <li style="margin-bottom: 8px;">Transmitting malware, viruses, or harmful code</li>
                            <li style="margin-bottom: 8px;">Violating WhatsApp's Terms of Service or acceptable use
                                policies</li>
                            <li style="margin-bottom: 8px;">Accessing or collecting data using automated means
                                (scraping) without permission</li>
                            <li style="margin-bottom: 8px;">Interfering with or disrupting the integrity of the Service
                            </li>
                            <li style="margin-bottom: 8px;">Sharing account credentials with unauthorized users</li>
                            <li style="margin-bottom: 8px;">Using the Service for illegal activities or to promote
                                violence</li>
                            <li>Reverse engineering, decompiling, or disassembling the Service</li>
                        </ul>
                    </div>

                    <p>We reserve the right to investigate and take appropriate legal action against anyone who violates
                        this policy, including suspending or terminating your Account.</p>
                </div>

                <!-- Subscription & Billing -->
                <div id="subscription" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">5.
                        Subscription & Billing</h2>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">5.1 Subscription Plans</h3>
                    <p>HeyDoot offers various subscription plans. The features, pricing, and limitations of each plan
                        are described on our website. We reserve the right to modify pricing with 30 days' advance
                        notice.</p>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">5.2 Billing Cycle</h3>
                    <p>Subscriptions are billed in advance on a monthly or annual basis, depending on your selected
                        plan. Payments are non-refundable except as expressly provided in these Terms.</p>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">5.3 Payment Methods</h3>
                    <p>You must provide valid payment information. By providing payment details, you authorize us to
                        charge the applicable Subscription Fees to your designated payment method. If payment fails, we
                        may suspend access to the Service until payment is updated.</p>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">5.4 Taxes</h3>
                    <p>Subscription Fees are exclusive of taxes. You are responsible for all applicable taxes, including
                        sales tax, VAT, GST, or other governmental charges, unless we are required to collect them by
                        law.</p>

                    <div style="background: #F0F8FF; padding: 15px 20px; border-radius: 12px; margin-top: 20px;">
                        <i class="fas fa-tag" style="color: var(--wa-teal); margin-right: 10px;"></i>
                        <strong>Special Offer:</strong> Annual subscriptions receive a 20% discount compared to monthly
                        billing.
                    </div>
                </div>

                <!-- Cancellation & Refunds -->
                <div id="cancellation" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">6.
                        Cancellation & Refunds</h2>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">6.1 Cancellation Policy</h3>
                    <p>You may cancel your subscription at any time through your account settings or by contacting
                        support. Upon cancellation, your access to the Service will continue until the end of your
                        current billing period, after which it will be terminated.</p>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">6.2 Refund Policy</h3>
                    <p>Subscription fees are non-refundable. We do not provide refunds for partial months, unused
                        features, or early termination. However, if we materially change these Terms or the Service, you
                        may request a pro-rata refund for the remaining subscription period.</p>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">6.3 Free Trial</h3>
                    <p>We offer a 14-day free trial. No payment information is required for the trial. If you do not
                        subscribe before the trial ends, your account will be suspended. You will not be charged
                        automatically after the trial.</p>
                </div>

                <!-- Data Ownership -->
                <div id="data-ownership" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">7. Data
                        Ownership & Intellectual Property</h2>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">7.1 Your Content</h3>
                    <p>You retain all ownership rights to the Content you submit, post, or transmit through the Service.
                        We do not claim ownership over your Content. By using the Service, you grant us a limited
                        license to host, process, and transmit your Content solely to provide the Service.</p>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">7.2 HeyDoot Intellectual
                        Property</h3>
                    <p>The Service, including its code, interface, features, trademarks, and logos, is owned by
                        HashStudioz Technologies and protected by copyright, trademark, and other intellectual property
                        laws. You may not copy, modify, or create derivative works of the Service without our explicit
                        permission.</p>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">7.3 Data Export</h3>
                    <p>Upon termination of your account, we will provide a complete export of your conversation data,
                        contacts, and settings in a standard format (JSON/CSV) upon request within 30 days.</p>

                    <div style="background: #F8FAFE; padding: 15px 20px; border-radius: 12px; margin-top: 20px;">
                        <i class="fas fa-database" style="color: var(--wa-teal); margin-right: 10px;"></i>
                        <strong>Data Retention:</strong> We retain your data for 90 days after account termination.
                        After this period, data is permanently deleted from our systems.
                    </div>
                </div>

                <!-- Service Level -->
                <div id="service-level" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">8. Service
                        Level & Availability</h2>
                    <p>We strive to provide a reliable and available Service. However, we do not guarantee 100% uptime.
                        The following circumstances may affect availability:</p>
                    <ul style="margin-bottom: 20px; padding-left: 20px;">
                        <li style="margin-bottom: 8px;">Scheduled maintenance (notified 48 hours in advance)</li>
                        <li style="margin-bottom: 8px;">Emergency maintenance for security or critical fixes</li>
                        <li style="margin-bottom: 8px;">Events beyond our reasonable control (force majeure)</li>
                        <li style="margin-bottom: 8px;">Third-party service disruptions (WhatsApp, cloud providers)</li>
                    </ul>
                    <p><strong>Target Uptime:</strong> 99.9% excluding scheduled maintenance and force majeure events.
                    </p>
                </div>

                <!-- Limitations of Liability -->
                <div id="limitations" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">9. Limitations
                        of Liability</h2>
                    <div style="background: #FFF3E0; padding: 20px; border-radius: 16px; margin-bottom: 20px;">
                        <p style="margin-bottom: 10px;"><strong>TO THE MAXIMUM EXTENT PERMITTED BY LAW:</strong></p>
                        <ul style="padding-left: 20px;">
                            <li style="margin-bottom: 8px;">HeyDoot and its affiliates shall not be liable for any
                                indirect, incidental, special, consequential, or punitive damages</li>
                            <li style="margin-bottom: 8px;">Our total liability shall not exceed the amount you paid us
                                during the 12 months preceding the claim</li>
                            <li style="margin-bottom: 8px;">We are not responsible for any damages arising from your
                                violation of WhatsApp's terms of service</li>
                            <li style="margin-bottom: 8px;">We are not liable for loss of data, revenue, profits, or
                                business opportunities</li>
                            <li>The Service is provided "AS IS" without warranties of merchantability, fitness for a
                                particular purpose, or non-infringement</li>
                        </ul>
                    </div>
                    <p>Some jurisdictions do not allow the exclusion of certain warranties or limitations of liability,
                        so these limitations may not apply to you.</p>
                </div>

                <!-- Indemnification -->
                <div id="indemnification" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">10.
                        Indemnification</h2>
                    <p>You agree to indemnify, defend, and hold harmless HeyDoot, HashStudioz Technologies, and our
                        officers, directors, employees, and agents from any claims, damages, losses, liabilities, costs,
                        or expenses (including reasonable attorney's fees) arising from:</p>
                    <ul style="margin-bottom: 20px; padding-left: 20px;">
                        <li style="margin-bottom: 8px;">Your use of the Service</li>
                        <li style="margin-bottom: 8px;">Your violation of these Terms</li>
                        <li style="margin-bottom: 8px;">Your violation of any third-party rights, including WhatsApp's
                            terms</li>
                        <li style="margin-bottom: 8px;">Your Content or any data transmitted through the Service</li>
                    </ul>
                </div>

                <!-- Termination -->
                <div id="termination" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">11.
                        Termination</h2>
                    <p>We may terminate or suspend your Account immediately, without prior notice or liability, for any
                        reason, including:</p>
                    <ul style="margin-bottom: 20px; padding-left: 20px;">
                        <li style="margin-bottom: 8px;">Breach of these Terms</li>
                        <li style="margin-bottom: 8px;">Violation of WhatsApp's terms of service</li>
                        <li style="margin-bottom: 8px;">Non-payment of Subscription Fees</li>
                        <li style="margin-bottom: 8px;">Request by law enforcement or government agency</li>
                        <li>Extended periods of inactivity (12+ months)</li>
                    </ul>
                    <p>Upon termination, your right to use the Service will immediately cease. Sections that by their
                        nature should survive termination (including data ownership, limitations of liability,
                        indemnification) will survive.</p>
                </div>

                <!-- Governing Law -->
                <div id="governing-law" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">12. Governing
                        Law & Dispute Resolution</h2>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">12.1 Governing Law</h3>
                    <p>These Terms shall be governed by and construed in accordance with the laws of India, without
                        regard to its conflict of law provisions. The courts of Chandigarh, India shall have exclusive
                        jurisdiction over any disputes.</p>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">12.2 Dispute Resolution</h3>
                    <p>Any dispute arising from these Terms or your use of the Service shall first be attempted to be
                        resolved through informal negotiation within 30 days. If unresolved, the dispute shall be
                        submitted to binding arbitration in Chandigarh, India, in accordance with the Arbitration and
                        Conciliation Act, 1996.</p>

                    <h3 style="font-size: 1.3rem; font-weight: 600; margin: 20px 0 12px;">12.3 Class Action Waiver</h3>
                    <p>You agree to resolve any disputes on an individual basis. You waive the right to participate in
                        any class, collective, or representative action or proceeding.</p>

                    <div style="background: #F0F8FF; padding: 15px 20px; border-radius: 12px; margin-top: 20px;">
                        <i class="fas fa-gavel" style="color: var(--wa-teal); margin-right: 10px;"></i>
                        <strong>Jurisdiction:</strong> These Terms are governed by Indian law. For users outside India,
                        you consent to the exclusive jurisdiction of courts in Chandigarh, India.
                    </div>
                </div>

                <!-- Modifications -->
                <div id="modifications" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">13.
                        Modifications to Terms</h2>
                    <p>We reserve the right to modify these Terms at any time. Material changes will be notified to you
                        via:</p>
                    <ul style="margin-bottom: 20px; padding-left: 20px;">
                        <li style="margin-bottom: 8px;">Email sent to the address associated with your Account</li>
                        <li style="margin-bottom: 8px;">Notice within the HeyDoot platform</li>
                        <li>Posting on our website with an updated "Effective Date"</li>
                    </ul>
                    <p>Your continued use of the Service after any changes constitutes acceptance of the modified Terms.
                        If you do not agree to the changes, you must stop using the Service and cancel your
                        subscription.</p>
                </div>

                <!-- Contact -->
                <div id="contact" class="terms-section" style="margin-bottom: 48px; scroll-margin-top: 80px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 20px; color: #1a2a3a;">14. Contact
                        Information
                    </h2>
                    <p>If you have questions, concerns, or requests regarding these Terms:</p>
                    <div style="background: #F8FAFE; padding: 24px; border-radius: 20px; margin-top: 20px;">
                        <p style="margin-bottom: 12px;"><i class="fas fa-envelope"
                                style="width: 30px; color: var(--wa-teal);"></i> <strong>Email:</strong> <a
                                href="mailto:<?php echo SITE_EMAIL; ?>" style="color: var(--wa-teal);">
                                <?php echo SITE_EMAIL; ?>
                            </a></p>
                        <p style="margin-bottom: 12px;"><i class="fas fa-headset"
                                style="width: 30px; color: var(--wa-teal);"></i> <strong>Phone:</strong> <a
                                href="tel:<?php echo str_replace(' ', '', PHONE_NUMBER); ?>"
                                style="color: var(--wa-teal);">
                                <?php echo PHONE_NUMBER; ?>
                            </a></p>
                        <p style="margin-bottom: 12px;"><i class="fas fa-map-marker-alt"
                                style="width: 30px; color: var(--wa-teal);"></i> <strong>Address:</strong> HashStudioz
                            Technologies, PEGASUS TOWER
                            Block A, Sector 68, Noida, Uttar Pradesh 201309, India</p>
                        <p><i class="fab fa-whatsapp" style="width: 30px; color: var(--wa-teal);"></i>
                            <strong>WhatsApp:</strong> <a
                                href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20know%20more%20about%20HeyDoot%20features"
                                style="color: var(--wa-teal);">
                                <?php echo CALL_NUMBER; ?>
                            </a>
                        </p>
                    </div>
                </div>

                <!-- Complete Agreement -->
                <div
                    style="background: var(--bg-gradient-teal); color: white; padding: 30px; border-radius: 24px; margin-top: 20px;">
                    <h3 style="color: white; margin-bottom: 16px;"><i class="fas fa-file-signature"></i> Entire
                        Agreement</h3>
                    <p style="margin-bottom: 0;">These Terms, together with our Privacy Policy, constitute the entire
                        agreement between you and HeyDoot regarding your use of the Service and supersede all prior
                        agreements and understandings, whether written or oral.</p>
                </div>
            </main>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="background: #F0F8FF; padding: 80px 0;">
    <div class="container" style="width: 90%; max-width: 1280px; margin: 0 auto;">
        <div class="cta-section"
            style="text-align: center; background: var(--bg-gradient-green); border-radius: 48px; padding: 60px 40px; color: white;">
            <h2 style="color: white; margin-bottom: 20px;">Questions about our Terms?</h2>
            <p style="margin-bottom: 32px;">Our legal team is available to address your concerns.</p>
            <div class="cta-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="https://wa.me/919718517228?text=I%20have%20a%20question%20about%20HeyDoot%20Terms%20of%20Service"
                    class="btn btn-outline-light btn-lg"
                    style="background: transparent; border: 2px solid white; color: white; padding: 12px 32px; border-radius: 40px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px;">
                    <i class="fab fa-whatsapp"></i> WhatsApp Legal Team
                </a>
                <a href="mailto:legal@heydoot.com" class="btn btn-cta-white btn-lg"
                    style="background: white; color: #1a2a3a; padding: 12px 32px; border-radius: 40px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px;">
                    <i class="fas fa-envelope"></i> Email Legal <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>

<!-- Smooth scroll for anchor links -->
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