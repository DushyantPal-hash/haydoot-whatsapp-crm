<?php
require_once 'config.php';
$page_meta = [
    'title' => 'Frequently Asked Questions | HeyDoot',
    'meta_title' => 'FAQ – Frequently Asked Questions About HeyDoot',
    'description' => 'Find answers to common questions about HeyDoot, WhatsApp integrations, pricing, setup, automation, multi-agent access, CRM integrations, and customer communication features.',

    'og_title' => 'Frequently Asked Questions | HeyDoot',
    'og_description' => 'Explore HeyDoot FAQs covering WhatsApp automation, CRM integrations, team collaboration, setup process, pricing, and support.',
    'og_image' => 'https://heydoot.com/public/images/m1.png',
    'og_url' => 'https://heydoot.com/faq.php',

    'twitter_title' => 'Frequently Asked Questions | HeyDoot',
    'twitter_description' => 'Get answers to common HeyDoot questions about WhatsApp integrations, automation, CRM connectivity, and team collaboration.',
    'twitter_image' => 'https://heydoot.com/public/images/m1.png',

    'canonical' => 'https://heydoot.com/faq.php'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "What is HeyDoot?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "HeyDoot is a WhatsApp communication and automation platform that helps businesses manage chats, automate workflows, integrate CRMs, and collaborate with teams."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Can I integrate WhatsApp with my CRM using HeyDoot?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes, HeyDoot supports integrations with CRMs and tools like HubSpot, Odoo, Zapier, and other business platforms."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Does HeyDoot support multi-agent access?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes, HeyDoot allows multiple team members to manage WhatsApp conversations collaboratively with role-based access."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Can I automate notifications and reminders?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Yes, you can automate reminders, notifications, customer updates, lead alerts, and workflow messages through HeyDoot."
            ]
        ]
    ]
];

$page_gtag_id = 'G-Q64SDSY0Y4';

include 'components/header.php';
include 'components/navbar.php';
?>

<!-- Page Content -->
<main>
    <div class="page-header">
        <h1>Frequently Asked <span style="color: var(--wa-green);">Questions</span></h1>
        <p>Everything you need to know about HeyDoot.</p>
    </div>

    <section class="section-container">
        <div class="container-fluid faq-container">
            <div class="faq-item">
                <div class="faq-question">Do I need WhatsApp Business API? <i class="fas fa-chevron-down"></i></div>
                <div class="faq-answer">No! HeyDoot works with any WhatsApp number, personal or business. No API
                    approval or monthly fees from Meta.</div>
            </div>
            <div>
                <div class="faq-item">
                    <div class="faq-question">What does "unlimited" actually mean? <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        It means exactly that. One license covers every WhatsApp number you want to connect, every agent
                        you want to invite, and every message they send. If you grow from 5 to 500 agents, the price
                        doesn't change. If you add ten new numbers next month, the price doesn't change.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do I need the WhatsApp Business API? <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">No. Doot connects via WhatsApp Web, the same way your phone does. You can
                        scale across multiple numbers without the paperwork, template approvals, or per-conversation
                        pricing that comes with the official Business API.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How quickly can we go live? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Most customers are up and running within 24 hours of the first WhatsApp
                        message. We provision your dedicated instance, walk you through the QR connection on a call, and
                        help onboard your first batch of agents the same day.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What happens if WhatsApp disconnects? <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">Every message is persisted to your instance the moment it arrives. If a
                        WhatsApp session drops, your team keeps working — viewing history, updating CRM fields,
                        preparing replies. When it reconnects, queued messages fire out and nothing is ever lost.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can I migrate away later? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Yes, any time. We'll hand over a full data export — contacts, chat history,
                        pipeline, quotations, the lot. No proprietary formats, no exit fees, no "contact your account
                        manager." We hope you stay, but we won't hold your data hostage.
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Is it secure? <i class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Absolutely. Messages are encrypted end-to-end, and we never store your chat
                        history beyond your retention policy.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Can multiple team members use the same number? <i
                            class="fas fa-chevron-down"></i></div>
                    <div class="faq-answer">Yes, the shared inbox allows unlimited agents to respond from one number
                        simultaneously.</div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Page Content Ends here -->

<?php include 'components/footer.php'; ?>