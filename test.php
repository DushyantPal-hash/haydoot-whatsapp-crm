<?php
$page_meta = [
    'title' => 'WhatsApp API Pricing Calculator - HeyDoot',
    'meta_title' => 'WhatsApp Business API Cost Calculator | HeyDoot',
    'description' => 'Calculate your WhatsApp Business API costs instantly with HeyDoot\'s pricing calculator. Get accurate estimates for Marketing, Utility & Authentication conversations.',
    'og_title' => 'WhatsApp API Pricing Calculator | Estimate Your Costs',
    'og_description' => 'Use our interactive calculator to estimate your monthly WhatsApp Business API costs based on your conversation volumes.',
    'og_image' => 'https://heydoot.com/public/images/calculator-og.png',
    'og_url' => 'https://heydoot.com/calculator',
    'twitter_title' => 'WhatsApp API Cost Calculator - HeyDoot',
    'twitter_description' => 'Interactive WhatsApp Business API pricing estimator.',
    'twitter_image' => 'https://heydoot.com/public/images/calculator-og.png',
    'canonical' => 'https://heydoot.com/calculator'
];

$page_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "WebApplication",
    "name" => "HeyDoot WhatsApp API Pricing Calculator",
    "url" => "https://heydoot.com/calculator",
    "description" => "Interactive tool to estimate WhatsApp Business API conversation costs",
    "applicationCategory" => "BusinessApplication",
    "operatingSystem" => "All",
    "offers" => [
        "@type" => "Offer",
        "price" => "0",
        "priceCurrency" => "INR",
        "availability" => "https://schema.org/InStock"
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
    /* Calculator specific styles */
    .calculator-section {
        background: linear-gradient(145deg, #F8FDF9 0%, #F0F7FF 100%);
        padding: 40px 0 80px;
    }

    .glass-card-calc {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.5);
        border-radius: 24px;
        box-shadow: 0 20px 35px -12px rgba(0, 0, 0, 0.08);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .glass-card-calc:hover {
        transform: translateY(-2px);
        box-shadow: 0 25px 40px -15px rgba(0, 0, 0, 0.12);
    }

    .whatsapp-gradient-badge {
        background: linear-gradient(135deg, var(--wa-green) 0%, #075E54 100%);
        border-radius: 20px;
    }

    .plan-selector-btn {
        background: rgba(0, 0, 0, 0.03);
        border: 1px solid rgba(0, 0, 0, 0.08);
        border-radius: 20px;
        padding: 20px 16px;
        text-align: left;
        width: 100%;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .plan-selector-btn.active {
        background: linear-gradient(145deg, #e8f5e9 0%, #f1f8e9 100%);
        border-color: var(--wa-teal);
        box-shadow: 0 8px 20px -8px rgba(37, 211, 102, 0.2);
    }

    .plan-selector-btn.active .plan-dot {
        background: var(--wa-teal) !important;
        box-shadow: 0 0 0 2px white, 0 0 0 4px var(--wa-teal);
    }

    .plan-dot {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        transition: all 0.2s;
    }

    .preset-chip {
        background: rgba(0, 0, 0, 0.04);
        border: 1px solid rgba(0, 0, 0, 0.06);
        border-radius: 40px;
        padding: 6px 16px;
        font-size: 0.7rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s;
    }

    .preset-chip:hover {
        background: rgba(37, 211, 102, 0.1);
        border-color: var(--wa-teal);
        transform: translateY(-2px);
    }

    .calc-number-input {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 8px 12px;
        width: 130px;
        text-align: right;
        font-weight: 700;
        transition: all 0.2s;
    }

    .calc-number-input:focus {
        outline: none;
        border-color: var(--wa-teal);
        box-shadow: 0 0 0 3px rgba(37, 211, 102, 0.1);
    }

    .range-slider-calc {
        -webkit-appearance: none;
        width: 100%;
        background: #e2e8f0;
        height: 4px;
        border-radius: 4px;
    }

    .range-slider-calc:focus {
        outline: none;
    }

    .range-slider-calc::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: var(--wa-teal);
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        border: 2px solid white;
    }

    .range-slider-calc::-webkit-slider-thumb:hover {
        transform: scale(1.2);
    }

    .breakdown-item {
        background: rgba(0, 0, 0, 0.02);
        border: 1px solid rgba(0, 0, 0, 0.04);
        border-radius: 16px;
        padding: 14px;
        transition: all 0.2s;
    }

    .breakdown-item:hover {
        background: rgba(37, 211, 102, 0.04);
        transform: translateX(4px);
    }

    .stat-mini-card {
        background: rgba(0, 0, 0, 0.02);
        border: 1px solid rgba(0, 0, 0, 0.04);
        border-radius: 16px;
        padding: 16px;
    }

    .toast-notification-calc {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 1000;
        transition: all 0.3s ease;
        transform: translateX(120%);
        opacity: 0;
    }

    .toast-notification-calc.show {
        transform: translateX(0);
        opacity: 1;
    }

    .benefits-list {
        list-style: none;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 12px;
    }

    .benefits-list li {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 0.85rem;
    }

    .benefits-list li i {
        color: var(--wa-teal);
        font-size: 0.8rem;
    }

    @media (max-width: 992px) {
        .calculator-grid {
            grid-template-columns: 1fr !important;
            gap: 24px !important;
        }
    }

    @media (max-width: 768px) {
        .calculator-section {
            padding: 30px 0 60px;
        }

        .plan-selector-btn {
            padding: 16px 12px !important;
        }

        .plan-selector-btn .plan-title {
            font-size: 1.1rem !important;
        }

        .toast-notification-calc {
            left: 20px;
            right: 20px;
            bottom: 20px;
            transform: translateY(120%);
        }

        .toast-notification-calc.show {
            transform: translateY(0);
        }
    }

    /* New section styles */
    .faq-item {
        background: white;
        border-radius: 16px;
        padding: 20px;
        margin-bottom: 16px;
        cursor: pointer;
        transition: all 0.2s ease;
        border: 1px solid #e2e8f0;
    }

    .faq-item:hover {
        border-color: var(--wa-teal);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .faq-question {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: 700;
        font-size: 1rem;
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
        color: #5a6b7e;
        font-size: 0.9rem;
        line-height: 1.5;
    }

    .faq-item.active .faq-answer {
        max-height: 300px;
        margin-top: 12px;
    }

    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.85rem;
    }

    .comparison-table th,
    .comparison-table td {
        padding: 14px 12px;
        text-align: left;
        border-bottom: 1px solid #e2e8f0;
    }

    .comparison-table th {
        background: #f8fafc;
        font-weight: 700;
        color: #1a2a3a;
    }

    .comparison-table tr:hover td {
        background: #f8fdf9;
    }

    .testimonial-card {
        background: white;
        border-radius: 20px;
        padding: 24px;
        border: 1px solid #e2e8f0;
        transition: all 0.2s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px -12px rgba(0, 0, 0, 0.1);
    }

    .integration-icon {
        width: 60px;
        height: 60px;
        background: #f8fafc;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        transition: all 0.2s ease;
    }

    .integration-item:hover .integration-icon {
        background: rgba(37, 211, 102, 0.1);
        transform: translateY(-4px);
    }

    .stats-counter {
        font-size: 2.5rem;
        font-weight: 800;
        color: var(--wa-teal);
    }

    .industry-card {
        background: white;
        border-radius: 20px;
        padding: 20px;
        text-align: center;
        border: 1px solid #e2e8f0;
        transition: all 0.2s ease;
    }

    .industry-card:hover {
        border-color: var(--wa-teal);
        transform: translateY(-4px);
    }

    .resource-card {
        display: flex;
        align-items: center;
        gap: 16px;
        background: white;
        border-radius: 16px;
        padding: 16px;
        border: 1px solid #e2e8f0;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .resource-card:hover {
        border-color: var(--wa-teal);
        transform: translateX(4px);
        text-decoration: none;
    }
</style>

<main>
    <!-- Hero Section -->
    <section class="hero" style="background: linear-gradient(135deg, #0a2b2c 0%, #1d4b2c 100%);">
        <div class="floating-dots"></div>
        <div style="max-width: 950px; margin: 0 auto; position: relative; z-index: 2; text-align:center;">
            <div
                style="display: inline-flex; align-items:center; gap:10px; background: rgba(255,255,255,0.08); backdrop-filter: blur(10px); padding: 8px 18px; border-radius: 60px; margin-bottom: 26px; border:1px solid rgba(255,255,255,0.08);">

                <span
                    style="width:10px; height:10px; background:#25D366; border-radius:50%; display:inline-block; animation:pulse 1.5s infinite;"></span>

                <span style="color: #25D366; font-weight: 700; letter-spacing: .3px;">
                    <i class="fa fa-calculator" aria-hidden="true"></i>
                    Live WhatsApp API Pricing Calculator
                </span>
            </div>
            <h1
                style="color: white; font-size: clamp(2.8rem, 6vw, 5rem); line-height:1.1; font-weight:900; margin-bottom:20px;">
                Estimate Your
                <span
                    style="background: linear-gradient(90deg,#25D366,#86efac); -webkit-background-clip:text; -webkit-text-fill-color:transparent;">
                    WhatsApp API
                </span>
                Costs Instantly
            </h1>
            <p class="hero-desc"
                style="max-width:760px; margin:0 auto 30px; color:rgba(255,255,255,0.75); font-size:1.1rem;">
                Calculate marketing, utility, and authentication conversation pricing in real-time.
                Compare plans, estimate monthly usage, and launch your WhatsApp operations with HeyDoot.
            </p>
            <div class="cta-group" style="justify-content:center;">

                <a href="#calculator" class="btn btn-primary btn-lg"
                    style="background: linear-gradient(135deg,#25D366,#128C7E); border:none; box-shadow: 0 10px 30px rgba(37,211,102,0.25);">

                    <i class="fas fa-bolt"></i>
                    Start Calculating
                </a>

                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20a%20pricing%20consultation%20for%20HeyDoot"
                    target="_blank" class="btn btn-secondary btn-lg" style="border:1px solid rgba(255,255,255,0.1);">

                    <i class="fab fa-whatsapp"></i>
                    Talk to Sales
                </a>
            </div>
        </div>
        <div class="visual-stage" style="margin-top: 50px; position:relative; z-index:2;">
            <!-- Floating Cards -->
            <div class="float-card card-1">
                <i class="fas fa-chart-line" style="color:#25D366; font-size:20px;"></i>
                <span>Live pricing updates</span>
            </div>
            <div class="float-card card-2">
                <i class="fas fa-bolt" style="color:#facc15;"></i>
                <span>Real-time cost estimates</span>
            </div>
            <div class="float-card card-3">
                <i class="fas fa-layer-group" style="color:#60a5fa;"></i>
                <span>Tier-based pricing</span>
            </div>
            <!-- Main Calculator Mockup -->
            <div class="mockup-phone"
                style="width: min(90%, 850px); margin: 0 auto; background: #1e1e2a; border-radius: 42px; padding: 10px; border:1px solid rgba(255,255,255,0.08); box-shadow:0 30px 80px rgba(0,0,0,0.45);">

                <div style="background: #2a2a35; border-radius: 34px; padding: 30px; overflow:hidden;">

                    <!-- Top -->
                    <div
                        style="display:flex; justify-content:space-between; align-items:center; margin-bottom:25px; flex-wrap:wrap; gap:15px;">

                        <div>
                            <div style="color:#25D366; font-size:13px; font-weight:700; letter-spacing:1px;">
                                HEYDOOT CALCULATOR
                            </div>

                            <h3 style="color:white; margin:6px 0 0; font-size:28px; font-weight:800;">
                                Monthly Estimate
                            </h3>
                        </div>

                        <div
                            style="background:rgba(37,211,102,0.12); border:1px solid rgba(37,211,102,0.2); padding:12px 18px; border-radius:18px;">

                            <div style="font-size:12px; color:#86efac; margin-bottom:2px;">
                                Estimated Total
                            </div>

                            <div style="font-size:30px; font-weight:900; color:white;">
                                ₹18,420
                            </div>
                        </div>
                    </div>

                    <!-- Analytics -->
                    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(180px,1fr)); gap:18px;">

                        <div
                            style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.06); border-radius:22px; padding:20px;">

                            <div style="font-size:13px; color:#94a3b8; margin-bottom:10px;">
                                Marketing
                            </div>

                            <div style="font-size:26px; font-weight:800; color:white;">
                                12,000
                            </div>

                            <div style="color:#25D366; margin-top:8px; font-size:13px;">
                                ₹0.88 / conversation
                            </div>
                        </div>

                        <div
                            style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.06); border-radius:22px; padding:20px;">

                            <div style="font-size:13px; color:#94a3b8; margin-bottom:10px;">
                                Utility
                            </div>

                            <div style="font-size:26px; font-weight:800; color:white;">
                                4,500
                            </div>

                            <div style="color:#60a5fa; margin-top:8px; font-size:13px;">
                                ₹0.14 / conversation
                            </div>
                        </div>

                        <div
                            style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.06); border-radius:22px; padding:20px;">

                            <div style="font-size:13px; color:#94a3b8; margin-bottom:10px;">
                                Authentication
                            </div>

                            <div style="font-size:26px; font-weight:800; color:white;">
                                8,000
                            </div>
                            <div style="color:#c084fc; margin-top:8px; font-size:13px;">
                                ₹0.14 / conversation
                            </div>
                        </div>
                    </div>
                    <!-- Bottom -->
                    <div
                        style="margin-top:25px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;">

                        <div style="display:flex; gap:10px; flex-wrap:wrap;">

                            <span
                                style="background:rgba(37,211,102,0.12); color:#86efac; padding:8px 14px; border-radius:50px; font-size:12px; font-weight:700;">
                                Live INR Pricing
                            </span>

                            <span
                                style="background:rgba(59,130,246,0.12); color:#93c5fd; padding:8px 14px; border-radius:50px; font-size:12px; font-weight:700;">
                                Tier Optimized
                            </span>

                        </div>

                        <div style="color:#94a3b8; font-size:13px;">
                            Avg cost per message:
                            <strong style="color:white;">₹0.52</strong>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="calculator-section">
        <div class="container-fluid">
            <div>
                <!-- Header -->
                <header
                    style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; margin-bottom: 32px; padding-bottom: 16px; border-bottom: 2px solid #e2e8f0; gap: 16px;">
                    <div style="display: flex; align-items: center; gap: 16px; flex-wrap: wrap;">
                        <div class="whatsapp-gradient-badge"
                            style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-whatsapp" style="color: white; font-size: 2rem;"></i>
                        </div>
                        <div>
                            <span
                                style="background: rgba(37, 211, 102, 0.15); color: var(--wa-teal); border-radius: 40px; padding: 4px 16px; font-size: 0.75rem; font-weight: 600; display: inline-block; margin-bottom: 8px;">
                                Official API Partner
                            </span>
                            <h1 style="font-size: 2rem; font-weight: 800; margin-bottom: 0; color: #1a2a3a;">HeyDoot
                                Calculator</h1>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <p style="margin-bottom: 4px; font-weight: 600; color: #2c3e50;">WhatsApp Business API</p>
                        <p style="margin-bottom: 0; color: #5a6b7e; font-size: 0.85rem;">Live Indian Rupee (INR) Pricing
                            Engine</p>
                    </div>
                </header>

                <!-- Main Calculator Grid -->
                <div class="calculator-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 28px;"
                    id="calculator">
                    <!-- LEFT PANEL -->
                    <div style="display: flex; flex-direction: column; gap: 24px;">

                        <!-- Plan Selector Card -->
                        <div class="glass-card-calc" style="padding: 15px;">
                            <h2
                                style="font-size: 0.85rem; font-weight: 700; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px; color: #475569;">
                                <i class="fa-solid fa-layer-group"
                                    style="color: var(--wa-teal); margin-right: 8px;"></i>
                                Select HeyDoot Plan
                            </h2>
                            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;">
                                <!-- Starter Plan -->
                                <button type="button" onclick="selectPlan('starter')" id="btn-starter"
                                    class="plan-selector-btn active">
                                    <div style="position: absolute; top: 12px; right: 12px;">
                                        <div
                                            style="border: 1px solid #cbd5e0; border-radius: 50%; width: 18px; height: 18px; display: flex; align-items: center; justify-content: center;">
                                            <div class="plan-dot" id="dot-starter" style="background: var(--wa-teal);">
                                            </div>
                                        </div>
                                    </div>
                                    <span
                                        style="display: block; font-size: 0.7rem; text-transform: uppercase; color: #5a6b7e; font-weight: 600; margin-bottom: 4px;">Starter</span>
                                    <span class="plan-title"
                                        style="display: block; font-size: 1.3rem; font-weight: 700; color: #1a2a3a; margin-bottom: 4px;">Tier
                                        1</span>
                                    <span style="font-size: 0.75rem; color: #5a6b7e;">Small startups & retail.</span>
                                </button>
                                <!-- Basic Plan -->
                                <button type="button" onclick="selectPlan('basic')" id="btn-basic"
                                    class="plan-selector-btn">
                                    <div style="position: absolute; top: 12px; right: 12px;">
                                        <div
                                            style="border: 1px solid #cbd5e0; border-radius: 50%; width: 18px; height: 18px; display: flex; align-items: center; justify-content: center;">
                                            <div class="plan-dot" id="dot-basic" style="background: #cbd5e0;"></div>
                                        </div>
                                    </div>
                                    <span
                                        style="display: block; font-size: 0.7rem; text-transform: uppercase; color: #5a6b7e; font-weight: 600; margin-bottom: 4px;">Basic</span>
                                    <span class="plan-title"
                                        style="display: block; font-size: 1.3rem; font-weight: 700; color: #1a2a3a; margin-bottom: 4px;">Tier
                                        2
                                    </span>
                                    <span style="font-size: 0.75rem; color: #5a6b7e;">Growing brands & scale.
                                    </span>
                                </button>
                                <!-- Enterprise Plan -->
                                <button type="button" onclick="selectPlan('enterprise')" id="btn-enterprise"
                                    class="plan-selector-btn">
                                    <div style="position: absolute; top: 12px; right: 12px;">
                                        <div
                                            style="border: 1px solid #cbd5e0; border-radius: 50%; width: 18px; height: 18px; display: flex; align-items: center; justify-content: center;">
                                            <div class="plan-dot" id="dot-enterprise" style="background: #cbd5e0;">
                                            </div>
                                        </div>
                                    </div>
                                    <span
                                        style="display: block; font-size: 0.7rem; text-transform: uppercase; color: #5a6b7e; font-weight: 600; margin-bottom: 4px;">Enterprise</span>
                                    <span class="plan-title"
                                        style="display: block; font-size: 1.3rem; font-weight: 700; color: #1a2a3a; margin-bottom: 4px;">Tier
                                        3</span>
                                    <span style="font-size: 0.75rem; color: #5a6b7e;">Bulk rates & priority API.</span>
                                </button>
                            </div>
                        </div>

                        <!-- Presets Card -->
                        <div class="glass-card-calc"
                            style="padding: 15px; display: flex; flex-wrap: wrap; align-items: center; gap: 10px;">
                            <span
                                style="text-transform: uppercase; font-size: 0.7rem; font-weight: 700; color: #5a6b7e;">Quick
                                Presets:</span>
                            <button onclick="applyPreset(1500, 500, 200)" class="preset-chip">🌱 Small Biz</button>
                            <button onclick="applyPreset(8000, 3000, 1500)" class="preset-chip">📦 E-Commerce</button>
                            <button onclick="applyPreset(25000, 10000, 45000)" class="preset-chip">⚡ FinTech
                                OTPs</button>
                            <button onclick="applyPreset(50000, 15000, 8000)" class="preset-chip">🚀 Enterprise</button>
                        </div>

                        <!-- Message Configuration Card -->
                        <div class="glass-card-calc" style="padding: 15px;">
                            <h2
                                style="font-size: 0.85rem; font-weight: 700; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px; color: #475569;">
                                <i class="fa-solid fa-sliders-h" style="color: var(--wa-teal); margin-right: 8px;"></i>
                                Message Configuration
                            </h2>

                            <!-- Marketing -->
                            <div style="margin-bottom: 10px;">
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; flex-wrap: wrap; gap: 10px;">
                                    <div>
                                        <div style="font-weight: 700;">Marketing Conversations</div>
                                        <small style="color: #5a6b7e; font-size: 0.75rem;">Broadcasts, offers &
                                            launches</small>
                                    </div>
                                    <input type="number" id="marketing" value="1000" min="0" step="100"
                                        class="calc-number-input" oninput="syncInputs('marketing')"
                                        style="background :#25d36652">
                                </div>
                                <input type="range" id="marketing_slider" min="0" max="100000" step="500" value="1000"
                                    class="range-slider-calc" oninput="syncSliders('marketing')"
                                    style="background :#25d36652">
                            </div>

                            <!-- Utility -->
                            <div style="margin-bottom: 10px;">
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; flex-wrap: wrap; gap: 10px;">
                                    <div>
                                        <div style="font-weight: 700;">Utility Conversations</div>
                                        <small style="color: #5a6b7e; font-size: 0.75rem;">Tracking, receipts &
                                            alerts</small>
                                    </div>
                                    <input type="number" id="utility" value="500" min="0" step="100"
                                        class="calc-number-input" oninput="syncInputs('utility')"
                                        style="background :#136eff38">
                                </div>
                                <input type="range" id="utility_slider" min="0" max="100000" step="500" value="500"
                                    class="range-slider-calc" oninput="syncSliders('utility')"
                                    style="background :#136eff38">
                            </div>

                            <!-- Authentication -->
                            <div>
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; flex-wrap: wrap; gap: 10px;">
                                    <div>
                                        <div style="font-weight: 700;">Authentication Conversations</div>
                                        <small style="color: #5a6b7e; font-size: 0.75rem;">OTPs & secure logins</small>
                                    </div>
                                    <input type="number" id="authentication" value="300" min="0" step="100"
                                        class="calc-number-input" oninput="syncInputs('authentication')"
                                        style="background :#3135f142">
                                </div>
                                <input type="range" id="authentication_slider" min="0" max="100000" step="500"
                                    value="300" class="range-slider-calc" oninput="syncSliders('authentication')"
                                    style="background :#3135f142">
                            </div>
                        </div>

                        <!-- Plan Benefits Card -->
                        <div class="glass-card-calc" style="padding: 15px;">
                            <h3
                                style="text-transform: uppercase; font-size: 0.7rem; font-weight: 700; margin-bottom: 16px; color: #5a6b7e;">
                                <i class="fa-regular fa-star" style="color: #f59e0b; margin-right: 8px;"></i>
                                Plan Inclusions
                            </h3>
                            <ul class="benefits-list" id="planDetails"></ul>
                        </div>
                    </div>

                    <!-- RIGHT PANEL -->
                    <div style="display: flex; flex-direction: column; gap: 24px;">
                        <div class="glass-card-calc" style="padding: 15px; position: relative; overflow: hidden;">
                            <div
                                style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: rgba(37, 211, 102, 0.06); border-radius: 50%;">
                            </div>
                            <div
                                style="position: absolute; bottom: -30px; left: -30px; width: 150px; height: 150px; background: rgba(37, 211, 102, 0.04); border-radius: 50%;">
                            </div>
                            <h2
                                style="text-transform: uppercase; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px; color: #5a6b7e; position: relative; z-index: 1;">
                                Total Monthly Cost Estimate
                            </h2>
                            <div
                                style="display: flex; align-items: baseline; gap: 8px; margin-bottom: 10px; position: relative; z-index: 1;">
                                <span style="font-size: 3.2rem; font-weight: 800; color: #1a2a3a;"
                                    id="totalCost">₹0.00</span>
                                <span style="color: #5a6b7e; font-weight: 600;">/ Month</span>
                            </div>
                            <div
                                style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; position: relative; z-index: 1;">
                                <div class="stat-mini-card">
                                    <small style="color: #5a6b7e; display: block; margin-bottom: 6px;">Total
                                        Messages</small>
                                    <div style="font-weight: 800; font-size: 1.3rem;" id="totalVolumeLabel">0</div>
                                </div>
                                <div class="stat-mini-card">
                                    <small style="color: #5a6b7e; display: block; margin-bottom: 6px;">Avg Cost /
                                        Msg</small>
                                    <div style="font-weight: 800; font-size: 1.3rem; color: var(--wa-teal);"
                                        id="averageCostLabel">₹0.00</div>
                                </div>
                            </div>
                        </div>
                        <!-- Cost Distribution Card -->
                        <div class="glass-card-calc" style="padding: 15px;">
                            <h3
                                style="text-transform: uppercase; font-size: 0.7rem; font-weight: 700; margin-bottom: 20px; color: #5a6b7e;">
                                <i class="fa-solid fa-chart-pie" style="color: var(--wa-teal); margin-right: 8px;"></i>
                                Cost Distribution
                            </h3>
                            <!-- Chart Container -->
                            <div style="max-width: 150px; margin: 0 auto 24px;">
                                <canvas id="distributionChart" width="120" height="120"
                                    style="width: 100%; height: auto;"></canvas>
                            </div>
                            <!-- Breakdown Items -->
                            <div style="display: flex; flex-direction: column; gap: 12px;">
                                <div class="breakdown-item"
                                    style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <div style="font-weight: 600;">
                                            <span
                                                style="background: var(--wa-green); display: inline-block; width: 10px; height: 10px; border-radius: 50%; margin-right: 10px;"></span>
                                            Marketing (<span id="m_perc">0%</span>)
                                        </div>
                                    </div>
                                    <div style="text-align: right;">
                                        <div style="font-weight: 700;" id="m_cost_lbl">₹0.00</div>
                                        <small style="color: #5a6b7e; font-size: 0.7rem;"
                                            id="m_rate_lbl">₹0.88/ea</small>
                                    </div>
                                </div>
                                <div class="breakdown-item"
                                    style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <div style="font-weight: 600;">
                                            <span
                                                style="background: #3b82f6; display: inline-block; width: 10px; height: 10px; border-radius: 50%; margin-right: 10px;"></span>
                                            Utility (<span id="u_perc">0%</span>)
                                        </div>
                                    </div>
                                    <div style="text-align: right;">
                                        <div style="font-weight: 700;" id="u_cost_lbl">₹0.00</div>
                                        <small style="color: #5a6b7e; font-size: 0.7rem;"
                                            id="u_rate_lbl">₹0.14/ea</small>
                                    </div>
                                </div>
                                <div class="breakdown-item"
                                    style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <div style="font-weight: 600;">
                                            <span
                                                style="background: #6366f1; display: inline-block; width: 10px; height: 10px; border-radius: 50%; margin-right: 10px;"></span>
                                            Auth (<span id="a_perc">0%</span>)
                                        </div>
                                    </div>
                                    <div style="text-align: right;">
                                        <div style="font-weight: 700;" id="a_cost_lbl">₹0.00</div>
                                        <small style="color: #5a6b7e; font-size: 0.7rem;"
                                            id="a_rate_lbl">₹0.14/ea</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Action Buttons -->
                        <div style="display: flex; flex-direction: column; gap: 12px;">
                            <button onclick="copyToClipboard()"
                                style="background: #1a2a3a; color: white; border: none; border-radius: 40px; padding: 14px 20px; font-weight: 600; cursor: pointer; transition: all 0.2s; display: flex; align-items: center; justify-content: center; gap: 10px;">
                                <i class="fa-solid fa-copy"></i> Copy Breakdown Details
                            </button>
                            <a id="directWhatsAppBtn" href="#" target="_blank"
                                style="background: var(--wa-green); color: white; border: none; border-radius: 40px; padding: 14px 20px; font-weight: 700; text-align: center; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 10px; transition: all 0.2s;">
                                <i class="fab fa-whatsapp"></i> Get Started with HeyDoot
                            </a>
                        </div>
                        <p style="font-size: 0.7rem; color: #5a6b7e; text-align: center;">
                            Rates are optimized based on
                            selected volume tiers. Taxes excluded.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== NEW SECTIONS ADDED ==================== -->

    <!-- Trust Badges / Statistics Section -->
    <section style="padding: 60px 0; background: white;">
        <div class="container-fluid">
            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 32px; text-align: center;">
                <div>
                    <div class="stats-counter" data-target="5000">0</div>
                    <div style="font-weight: 600; margin-top: 8px;">+ Active Businesses</div>
                </div>
                <div>
                    <div class="stats-counter" data-target="5000000">0</div>
                    <div style="font-weight: 600; margin-top: 8px;">Messages Delivered</div>
                </div>
                <div>
                    <div class="stats-counter" data-target="99.9">0</div>
                    <div style="font-weight: 600; margin-top: 8px;">% Uptime SLA</div>
                </div>
                <div>
                    <div class="stats-counter" data-target="24">0</div>
                    <div style="font-weight: 600; margin-top: 8px;">/7 Support Availability</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table Section -->
    <section style="padding: 60px 0; background: #F8FDF9;">
        <div class="container-fluid">
            <div style="text-align: center; max-width: 700px; margin: 0 auto 48px;">
                <span
                    style="background: rgba(37, 211, 102, 0.15); color: var(--wa-teal); border-radius: 40px; padding: 4px 16px; font-size: 0.75rem; font-weight: 600;">Compare
                    Plans</span>
                <h2 style="font-size: 2rem; font-weight: 800; margin-top: 16px; color: #1a2a3a;">Find the Perfect Plan
                    for Your Business</h2>
                <p style="color: #5a6b7e; margin-top: 12px;">Compare features, pricing, and support levels across all
                    tiers.</p>
            </div>
            <div style="overflow-x: auto;">
                <table class="comparison-table" style="min-width: 600px;">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Starter</th>
                            <th>Basic</th>
                            <th>Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Marketing Rate</td>
                            <td>₹0.88</td>
                            <td>₹0.81</td>
                            <td>₹0.71</td>
                        </tr>
                        <tr>
                            <td>Utility Rate</td>
                            <td>₹0.14</td>
                            <td>₹0.13</td>
                            <td>₹0.12</td>
                        </tr>
                        <tr>
                            <td>Authentication Rate</td>
                            <td>₹0.14</td>
                            <td>₹0.13</td>
                            <td>₹0.12</td>
                        </tr>
                        <tr>
                            <td>API Access</td>
                            <td>✓ Basic</td>
                            <td>✓ Full REST</td>
                            <td>✓ Priority + Webhooks</td>
                        </tr>
                        <tr>
                            <td>Support</td>
                            <td>Email</td>
                            <td>Email + Chat</td>
                            <td>24/7 Dedicated</td>
                        </tr>
                        <tr>
                            <td>SLAs</td>
                            <td>—</td>
                            <td>99.5%</td>
                            <td>99.9%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section style="padding: 60px 0; background: white;">
        <div class="container-fluid">
            <div style="text-align: center; max-width: 700px; margin: 0 auto 48px;">
                <span
                    style="background: rgba(37, 211, 102, 0.15); color: var(--wa-teal); border-radius: 40px; padding: 4px 16px; font-size: 0.75rem; font-weight: 600;">Trusted
                    by 5000+ Brands</span>
                <h2 style="font-size: 2rem; font-weight: 800; margin-top: 16px; color: #1a2a3a;">What Our Customers Say
                </h2>
                <p style="color: #5a6b7e; margin-top: 12px;">Real success stories from businesses using HeyDoot.</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
                <div class="testimonial-card">
                    <i class="fas fa-quote-left" style="color: #25D366; font-size: 24px; opacity: 0.5;"></i>
                    <p style="margin-top: 16px; color: #2c3e50; line-height: 1.6;">"HeyDoot's pricing calculator helped
                        us forecast our WhatsApp costs accurately. The API integration was seamless and their support is
                        exceptional."</p>
                    <div style="display: flex; align-items: center; gap: 12px; margin-top: 20px;">
                        <div style="width: 48px; height: 48px; background: #e2e8f0; border-radius: 50%;"></div>
                        <div><strong>Rahul Mehta</strong><br><small style="color: #5a6b7e;">CTO, ShopEase</small></div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-left" style="color: #25D366; font-size: 24px; opacity: 0.5;"></i>
                    <p style="margin-top: 16px; color: #2c3e50; line-height: 1.6;">"The tier-based pricing saved us 25%
                        on our monthly WhatsApp costs. Highly recommend HeyDoot for any business using WhatsApp API."
                    </p>
                    <div style="display: flex; align-items: center; gap: 12px; margin-top: 20px;">
                        <div style="width: 48px; height: 48px; background: #e2e8f0; border-radius: 50%;"></div>
                        <div><strong>Priya Sharma</strong><br><small style="color: #5a6b7e;">Marketing Head,
                                FinPay</small></div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-left" style="color: #25D366; font-size: 24px; opacity: 0.5;"></i>
                    <p style="margin-top: 16px; color: #2c3e50; line-height: 1.6;">"From onboarding to daily operations,
                        HeyDoot has been a reliable partner. Their enterprise plan offers unbeatable value."</p>
                    <div style="display: flex; align-items: center; gap: 12px; margin-top: 20px;">
                        <div style="width: 48px; height: 48px; background: #e2e8f0; border-radius: 50%;"></div>
                        <div><strong>Amit Kumar</strong><br><small style="color: #5a6b7e;">Founder, UrbanCart</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Use Cases Section -->
    <section style="padding: 60px 0; background: #F8FDF9;">
        <div class="container-fluid">
            <div style="text-align: center; max-width: 700px; margin: 0 auto 48px;">
                <span
                    style="background: rgba(37, 211, 102, 0.15); color: var(--wa-teal); border-radius: 40px; padding: 4px 16px; font-size: 0.75rem; font-weight: 600;">Use
                    Cases</span>
                <h2 style="font-size: 2rem; font-weight: 800; margin-top: 16px; color: #1a2a3a;">Perfect for Every
                    Industry</h2>
                <p style="color: #5a6b7e; margin-top: 12px;">See how businesses leverage HeyDoot's WhatsApp API.</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px;">
                <div class="industry-card"><i class="fas fa-store" style="font-size: 32px; color: #25D366;"></i>
                    <h3 style="margin: 16px 0 8px;">E‑Commerce</h3><small style="color: #5a6b7e;">Order updates, cart
                        reminders, support</small>
                </div>
                <div class="industry-card"><i class="fas fa-credit-card" style="font-size: 32px; color: #25D366;"></i>
                    <h3 style="margin: 16px 0 8px;">FinTech</h3><small style="color: #5a6b7e;">OTPs, transaction alerts,
                        KYC</small>
                </div>
                <div class="industry-card"><i class="fas fa-hotel" style="font-size: 32px; color: #25D366;"></i>
                    <h3 style="margin: 16px 0 8px;">Travel & Hospitality</h3><small style="color: #5a6b7e;">Booking
                        confirmations, boarding passes</small>
                </div>
                <div class="industry-card"><i class="fas fa-graduation-cap"
                        style="font-size: 32px; color: #25D366;"></i>
                    <h3 style="margin: 16px 0 8px;">EdTech</h3><small style="color: #5a6b7e;">Class reminders,
                        assignment alerts</small>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section style="padding: 60px 0; background: white;">
        <div class="container-fluid">
            <div style="text-align: center; max-width: 700px; margin: 0 auto 48px;">
                <span
                    style="background: rgba(37, 211, 102, 0.15); color: var(--wa-teal); border-radius: 40px; padding: 4px 16px; font-size: 0.75rem; font-weight: 600;">FAQ</span>
                <h2 style="font-size: 2rem; font-weight: 800; margin-top: 16px; color: #1a2a3a;">Frequently Asked
                    Questions</h2>
                <p style="color: #5a6b7e; margin-top: 12px;">Everything you need to know about WhatsApp API pricing.</p>
            </div>
            <div style="max-width: 800px; margin: 0 auto;">
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-question">What is a WhatsApp Business conversation? <i class="fas fa-chevron-down"
                            style="transition: transform 0.2s;"></i></div>
                    <div class="faq-answer">A conversation is a 24-hour message thread initiated by either a business or
                        user. Meta charges per conversation, not per message. Marketing, Utility, and Authentication
                        conversations have different rates.</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-question">Are there any hidden fees? <i class="fas fa-chevron-down"
                            style="transition: transform 0.2s;"></i></div>
                    <div class="faq-answer">No. HeyDoot charges only the conversation rates shown. GST as applicable may
                        be added. No setup fees, monthly minimums, or termination charges.</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-question">How do I upgrade my plan? <i class="fas fa-chevron-down"
                            style="transition: transform 0.2s;"></i></div>
                    <div class="faq-answer">You can upgrade anytime from your HeyDoot dashboard. Higher tiers apply
                        instantly for subsequent conversations and your first billing cycle.</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-question">Do you offer a free trial? <i class="fas fa-chevron-down"
                            style="transition: transform 0.2s;"></i></div>
                    <div class="faq-answer">Yes. We offer a 14-day trial with 500 free conversations. No credit card
                        required. Get full API access and sandbox testing.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section style="padding: 80px 0; background: linear-gradient(135deg, #0a2b2c 0%, #1d4b2c 100%);">
        <div class="container-fluid" style="text-align: center;">
            <h2 style="color: white; font-size: 2rem; font-weight: 800; margin-bottom: 16px;">Ready to scale with
                WhatsApp?</h2>
            <p style="color: rgba(255,255,255,0.75); max-width: 500px; margin: 0 auto 32px;">Join 5000+ businesses
                already using HeyDoot. Get started in minutes, pay only for what you use.</p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hi%2C%20I%27d%20like%20to%20get%20started%20with%20HeyDoot"
                    target="_blank"
                    style="background: #25D366; color: white; padding: 14px 32px; border-radius: 40px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px;"><i
                        class="fab fa-whatsapp"></i> Start Free Trial</a>
                <a href="tel:+918369191337"
                    style="background: transparent; border: 2px solid rgba(255,255,255,0.3); color: white; padding: 12px 32px; border-radius: 40px; font-weight: 600; text-decoration: none;"><i
                        class="fas fa-phone"></i> Talk to Sales</a>
            </div>
        </div>
    </section>

    <!-- Toast Notification -->
    <div id="toast" class="toast-notification-calc">
        <div class="glass-card-calc" style="padding: 14px 20px; display: flex; align-items: center; gap: 14px;">
            <div
                style="background: rgba(37, 211, 102, 0.15); color: var(--wa-teal); border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                <i class="fa-solid fa-check-circle"></i></div>
            <div>
                <div style="text-transform: uppercase; font-size: 0.7rem; font-weight: 700; color: #5a6b7e;"
                    id="toastTitle">Alert</div>
                <div style="font-weight: 600; font-size: 0.9rem;" id="toastMessage">Message</div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
    // ========================
    // Pricing Configuration
    // ========================
    const planRates = {
        starter: { marketing: 0.88, utility: 0.14, auth: 0.14, benefits: ["Affordable entrance rate for startups", "Intuitive broadcast controls dashboard", "Pre-vetted WhatsApp API templates", "Essential customer support inbox tools"] },
        basic: { marketing: 0.81, utility: 0.13, auth: 0.13, benefits: ["Optimized volume cost structures", "Expanded scaling metrics for campaigns", "Multi-agent team support box setup", "CRM workflows & API integrations"] },
        enterprise: { marketing: 0.71, utility: 0.12, auth: 0.12, benefits: ["Lowest industry volume costs", "Advanced webhook setups & REST API", "SLA-managed customized support", "High scalability bulk routing layout"] }
    };

    let currentPlan = 'starter';
    let chartInstance = null;
    const WHATSAPP_NUMBER = '<?php echo WHATSAPP_NUMBER; ?>';

    function formatRupee(amount) { return '₹' + amount.toLocaleString('en-IN', { maximumFractionDigits: 2, minimumFractionDigits: 2 }); }

    function calculatePrice() {
        const mCount = Math.max(0, parseInt(document.getElementById('marketing').value) || 0);
        const uCount = Math.max(0, parseInt(document.getElementById('utility').value) || 0);
        const aCount = Math.max(0, parseInt(document.getElementById('authentication').value) || 0);
        const rates = planRates[currentPlan];
        const mTotal = mCount * rates.marketing, uTotal = uCount * rates.utility, aTotal = aCount * rates.auth, grandTotal = mTotal + uTotal + aTotal, totalVolume = mCount + uCount + aCount, avgCost = totalVolume > 0 ? grandTotal / totalVolume : 0;
        document.getElementById('totalCost').innerText = formatRupee(grandTotal);
        document.getElementById('totalVolumeLabel').innerText = totalVolume.toLocaleString('en-IN');
        document.getElementById('averageCostLabel').innerHTML = formatRupee(avgCost);
        document.getElementById('m_rate_lbl').innerHTML = `₹${rates.marketing.toFixed(2)}/ea`;
        document.getElementById('u_rate_lbl').innerHTML = `₹${rates.utility.toFixed(2)}/ea`;
        document.getElementById('a_rate_lbl').innerHTML = `₹${rates.auth.toFixed(2)}/ea`;
        document.getElementById('m_cost_lbl').innerHTML = formatRupee(mTotal);
        document.getElementById('u_cost_lbl').innerHTML = formatRupee(uTotal);
        document.getElementById('a_cost_lbl').innerHTML = formatRupee(aTotal);
        const mPerc = grandTotal > 0 ? Math.round((mTotal / grandTotal) * 100) : 0, uPerc = grandTotal > 0 ? Math.round((uTotal / grandTotal) * 100) : 0, aPerc = grandTotal > 0 ? Math.round((aTotal / grandTotal) * 100) : 0;
        document.getElementById('m_perc').innerHTML = `${mPerc}%`;
        document.getElementById('u_perc').innerHTML = `${uPerc}%`;
        document.getElementById('a_perc').innerHTML = `${aPerc}%`;
        updateChart([mTotal, uTotal, aTotal]);
        buildWhatsAppLink(mCount, uCount, aCount, formatRupee(grandTotal));
    }

    function selectPlan(planKey) {
        currentPlan = planKey;
        ['starter', 'basic', 'enterprise'].forEach(key => {
            const btn = document.getElementById(`btn-${key}`), dot = document.getElementById(`dot-${key}`);
            if (key === planKey) { btn.classList.add('active'); dot.style.background = 'var(--wa-teal)'; }
            else { btn.classList.remove('active'); dot.style.background = '#cbd5e0'; }
        });
        const benefitsContainer = document.getElementById('planDetails');
        benefitsContainer.innerHTML = '';
        planRates[planKey].benefits.forEach(benefit => { const li = document.createElement('li'); li.innerHTML = `<i class="fas fa-check-circle"></i> <span>${benefit}</span>`; benefitsContainer.appendChild(li); });
        calculatePrice();
    }

    function syncInputs(id) { let val = parseInt(document.getElementById(id).value) || 0; if (val < 0) val = 0; document.getElementById(id).value = val; document.getElementById(`${id}_slider`).value = Math.min(val, 100000); calculatePrice(); }
    function syncSliders(id) { const val = parseInt(document.getElementById(`${id}_slider`).value) || 0; document.getElementById(id).value = val; calculatePrice(); }
    function applyPreset(marketing, utility, authentication) { document.getElementById('marketing').value = marketing; document.getElementById('marketing_slider').value = Math.min(marketing, 100000); document.getElementById('utility').value = utility; document.getElementById('utility_slider').value = Math.min(utility, 100000); document.getElementById('authentication').value = authentication; document.getElementById('authentication_slider').value = Math.min(authentication, 100000); calculatePrice(); showNotification('Preset Loaded', 'Industry scenario metrics adjusted successfully.'); }
    function buildWhatsAppLink(mCount, uCount, aCount, totalString) { const planFormatted = currentPlan.toUpperCase(); const message = `Hello HeyDoot Team! 👋\n\nI have calculated an estimated WhatsApp pricing layout with the following configurations:\n• *Selected Plan Tier:* ${planFormatted}\n• *Marketing Volume:* ${mCount.toLocaleString('en-IN')} Msg\n• *Utility Volume:* ${uCount.toLocaleString('en-IN')} Msg\n• *Authentication Volume:* ${aCount.toLocaleString('en-IN')} Msg\n• *Estimated Total cost:* ${totalString} / Month\n\nPlease connect me with an expert to help integrate the sandbox and get started with WhatsApp API onboarding!`; const encodedMessage = encodeURIComponent(message); const targetUrl = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodedMessage}`; document.getElementById('directWhatsAppBtn').href = targetUrl; }

    function initChart() {
        const ctx = document.getElementById('distributionChart').getContext('2d');
        chartInstance = new Chart(ctx, { type: 'doughnut', data: { labels: ['Marketing', 'Utility', 'Authentication'], datasets: [{ data: [0, 0, 0], backgroundColor: ['#25D366', '#3b82f6', '#6366f1'], borderWidth: 0, hoverOffset: 8 }] }, options: { responsive: true, maintainAspectRatio: true, plugins: { legend: { display: false }, tooltip: { backgroundColor: '#1e293b', titleColor: '#f1f5f9', bodyColor: '#f1f5f9', callbacks: { label: function (context) { return `₹${context.raw.toFixed(2)}`; } } } }, cutout: '65%' } });
    }
    function updateChart(datasetValues) { if (!chartInstance) return; const allZero = datasetValues.every(val => val === 0); chartInstance.data.datasets[0].data = allZero ? [1, 1, 1] : datasetValues; chartInstance.data.datasets[0].backgroundColor = allZero ? ['#94a3b8', '#94a3b8', '#94a3b8'] : ['#25D366', '#3b82f6', '#6366f1']; chartInstance.update(); }
    function copyToClipboard() {
        const total = document.getElementById('totalCost').innerText, marketingQty = document.getElementById('marketing').value, utilityQty = document.getElementById('utility').value, authQty = document.getElementById('authentication').value, mCost = document.getElementById('m_cost_lbl').innerText, uCost = document.getElementById('u_cost_lbl').innerText, aCost = document.getElementById('a_cost_lbl').innerText, avgCost = document.getElementById('averageCostLabel').innerText;
        const textSummary = `HeyDoot WhatsApp Business API Pricing Estimation\n=========================================\nSelected Tier: ${currentPlan.toUpperCase()} Plan\n\nBreakdown:\n- Marketing Messages: ${marketingQty} (${mCost})\n- Utility Messages: ${utilityQty} (${uCost})\n- Authentication Messages: ${authQty} (${aCost})\n\nTotal Estimated Monthly Cost: ${total}\nAverage Cost Per Message: ${avgCost}\n\nGenerated via HeyDoot Interactive Calculator\nhttps://heydoot.com/calculator`;
        navigator.clipboard.writeText(textSummary).then(() => { showNotification('Copied!', 'Price calculation copied to clipboard.'); }).catch(() => { showNotification('Error', 'Could not copy to clipboard. Please try again.'); });
    }
    function showNotification(title, message) { const toast = document.getElementById('toast'); document.getElementById('toastTitle').innerText = title; document.getElementById('toastMessage').innerText = message; toast.classList.add('show'); setTimeout(() => { toast.classList.remove('show'); }, 3000); }
    function toggleFaq(el) { el.classList.toggle('active'); const icon = el.querySelector('.fa-chevron-down'); if (icon) icon.style.transform = el.classList.contains('active') ? 'rotate(180deg)' : 'rotate(0deg)'; }

    // Counter animation
    function animateCounter(el, target) { let current = 0, step = target / 50; const timer = setInterval(() => { current += step; if (current >= target) { el.innerText = target.toLocaleString(); clearInterval(timer); } else { el.innerText = Math.floor(current).toLocaleString(); } }, 30); }
    function initCounters() { document.querySelectorAll('.stats-counter').forEach(el => { const target = parseFloat(el.getAttribute('data-target')); animateCounter(el, target); }); }

    document.addEventListener('DOMContentLoaded', function () { initChart(); selectPlan('starter'); document.getElementById('marketing').value = 1000; document.getElementById('marketing_slider').value = 1000; document.getElementById('utility').value = 500; document.getElementById('utility_slider').value = 500; document.getElementById('authentication').value = 300; document.getElementById('authentication_slider').value = 300; calculatePrice(); initCounters(); });
</script>

<?php include 'components/footer.php'; ?>