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
</style>

<main>
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
                <div class="calculator-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 28px;">

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
                                        2</span>
                                    <span style="font-size: 0.75rem; color: #5a6b7e;">Growing brands & scale.</span>
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
                                        class="calc-number-input" oninput="syncInputs('marketing')">
                                </div>
                                <input type="range" id="marketing_slider" min="0" max="100000" step="500" value="1000"
                                    class="range-slider-calc" oninput="syncSliders('marketing')">
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
                                        class="calc-number-input" oninput="syncInputs('utility')">
                                </div>
                                <input type="range" id="utility_slider" min="0" max="100000" step="500" value="500"
                                    class="range-slider-calc" oninput="syncSliders('utility')">
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
                                        class="calc-number-input" oninput="syncInputs('authentication')">
                                </div>
                                <input type="range" id="authentication_slider" min="0" max="100000" step="500"
                                    value="300" class="range-slider-calc" oninput="syncSliders('authentication')">
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

                        <!-- Total Cost Card -->
                        <div class="glass-card-calc" style="padding: 15px; position: relative; overflow: hidden;">
                            <div
                                style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: rgba(37, 211, 102, 0.06); border-radius: 50%;">
                            </div>
                            <div
                                style="position: absolute; bottom: -30px; left: -30px; width: 150px; height: 150px; background: rgba(37, 211, 102, 0.04); border-radius: 50%;">
                            </div>

                            <h2
                                style="text-transform: uppercase; font-size: 0.7rem; font-weight: 700; margin-bottom: 8px; color: #5a6b7e; position: relative; z-index: 1;">
                                Total Monthly Cost Estimate</h2>
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
                                                style="background: var(--wa-teal); display: inline-block; width: 10px; height: 10px; border-radius: 50%; margin-right: 10px;"></span>
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
                        <p style="font-size: 0.7rem; color: #5a6b7e; text-align: center;">Rates are optimized based on
                            selected volume tiers. Taxes excluded.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Toast Notification -->
    <div id="toast" class="toast-notification-calc">
        <div class="glass-card-calc" style="padding: 14px 20px; display: flex; align-items: center; gap: 14px;">
            <div
                style="background: rgba(37, 211, 102, 0.15); color: var(--wa-teal); border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                <i class="fa-solid fa-check-circle"></i>
            </div>
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
        starter: {
            marketing: 0.88,
            utility: 0.14,
            auth: 0.14,
            benefits: [
                "Affordable entrance rate for startups",
                "Intuitive broadcast controls dashboard",
                "Pre-vetted WhatsApp API templates",
                "Essential customer support inbox tools"
            ]
        },
        basic: {
            marketing: 0.81,
            utility: 0.13,
            auth: 0.13,
            benefits: [
                "Optimized volume cost structures",
                "Expanded scaling metrics for campaigns",
                "Multi-agent team support box setup",
                "CRM workflows & API integrations"
            ]
        },
        enterprise: {
            marketing: 0.71,
            utility: 0.12,
            auth: 0.12,
            benefits: [
                "Lowest industry volume costs",
                "Advanced webhook setups & REST API",
                "SLA-managed customized support",
                "High scalability bulk routing layout"
            ]
        }
    };

    // Global variables
    let currentPlan = 'starter';
    let chartInstance = null;
    const WHATSAPP_NUMBER = '<?php echo WHATSAPP_NUMBER; ?>';

    // Helper: Format currency in INR
    function formatRupee(amount) {
        return '₹' + amount.toLocaleString('en-IN', {
            maximumFractionDigits: 2,
            minimumFractionDigits: 2
        });
    }

    // Core calculation function
    function calculatePrice() {
        const mCount = Math.max(0, parseInt(document.getElementById('marketing').value) || 0);
        const uCount = Math.max(0, parseInt(document.getElementById('utility').value) || 0);
        const aCount = Math.max(0, parseInt(document.getElementById('authentication').value) || 0);

        const rates = planRates[currentPlan];

        const mTotal = mCount * rates.marketing;
        const uTotal = uCount * rates.utility;
        const aTotal = aCount * rates.auth;
        const grandTotal = mTotal + uTotal + aTotal;
        const totalVolume = mCount + uCount + aCount;
        const avgCost = totalVolume > 0 ? grandTotal / totalVolume : 0;

        // Update UI
        document.getElementById('totalCost').innerText = formatRupee(grandTotal);
        document.getElementById('totalVolumeLabel').innerText = totalVolume.toLocaleString('en-IN');
        document.getElementById('averageCostLabel').innerHTML = formatRupee(avgCost);

        // Rate labels
        document.getElementById('m_rate_lbl').innerHTML = `₹${rates.marketing.toFixed(2)}/ea`;
        document.getElementById('u_rate_lbl').innerHTML = `₹${rates.utility.toFixed(2)}/ea`;
        document.getElementById('a_rate_lbl').innerHTML = `₹${rates.auth.toFixed(2)}/ea`;

        // Cost labels
        document.getElementById('m_cost_lbl').innerHTML = formatRupee(mTotal);
        document.getElementById('u_cost_lbl').innerHTML = formatRupee(uTotal);
        document.getElementById('a_cost_lbl').innerHTML = formatRupee(aTotal);

        // Percentages
        const mPerc = grandTotal > 0 ? Math.round((mTotal / grandTotal) * 100) : 0;
        const uPerc = grandTotal > 0 ? Math.round((uTotal / grandTotal) * 100) : 0;
        const aPerc = grandTotal > 0 ? Math.round((aTotal / grandTotal) * 100) : 0;

        document.getElementById('m_perc').innerHTML = `${mPerc}%`;
        document.getElementById('u_perc').innerHTML = `${uPerc}%`;
        document.getElementById('a_perc').innerHTML = `${aPerc}%`;

        // Update chart
        updateChart([mTotal, uTotal, aTotal]);

        // Build WhatsApp link
        buildWhatsAppLink(mCount, uCount, aCount, formatRupee(grandTotal));
    }

    // Select plan handler
    function selectPlan(planKey) {
        currentPlan = planKey;

        // Update button styles
        ['starter', 'basic', 'enterprise'].forEach(key => {
            const btn = document.getElementById(`btn-${key}`);
            const dot = document.getElementById(`dot-${key}`);
            if (key === planKey) {
                btn.classList.add('active');
                dot.style.background = 'var(--wa-teal)';
            } else {
                btn.classList.remove('active');
                dot.style.background = '#cbd5e0';
            }
        });

        // Update benefits list
        const benefitsContainer = document.getElementById('planDetails');
        benefitsContainer.innerHTML = '';
        planRates[planKey].benefits.forEach(benefit => {
            const li = document.createElement('li');
            li.innerHTML = `<i class="fas fa-check-circle"></i> <span>${benefit}</span>`;
            benefitsContainer.appendChild(li);
        });

        calculatePrice();
    }

    // Sync number input with slider
    function syncInputs(id) {
        let val = parseInt(document.getElementById(id).value) || 0;
        if (val < 0) val = 0;
        document.getElementById(id).value = val;
        document.getElementById(`${id}_slider`).value = Math.min(val, 100000);
        calculatePrice();
    }

    // Sync slider with number input
    function syncSliders(id) {
        const val = parseInt(document.getElementById(`${id}_slider`).value) || 0;
        document.getElementById(id).value = val;
        calculatePrice();
    }

    // Apply preset values
    function applyPreset(marketing, utility, authentication) {
        document.getElementById('marketing').value = marketing;
        document.getElementById('marketing_slider').value = Math.min(marketing, 100000);
        document.getElementById('utility').value = utility;
        document.getElementById('utility_slider').value = Math.min(utility, 100000);
        document.getElementById('authentication').value = authentication;
        document.getElementById('authentication_slider').value = Math.min(authentication, 100000);
        calculatePrice();
        showNotification('Preset Loaded', 'Industry scenario metrics adjusted successfully.');
    }

    // Build WhatsApp pre-filled message link
    function buildWhatsAppLink(mCount, uCount, aCount, totalString) {
        const planFormatted = currentPlan.toUpperCase();
        const message = `Hello HeyDoot Team! 👋\n\n` +
            `I have calculated an estimated WhatsApp pricing layout with the following configurations:\n` +
            `• *Selected Plan Tier:* ${planFormatted}\n` +
            `• *Marketing Volume:* ${mCount.toLocaleString('en-IN')} Msg\n` +
            `• *Utility Volume:* ${uCount.toLocaleString('en-IN')} Msg\n` +
            `• *Authentication Volume:* ${aCount.toLocaleString('en-IN')} Msg\n` +
            `• *Estimated Total cost:* ${totalString} / Month\n\n` +
            `Please connect me with an expert to help integrate the sandbox and get started with WhatsApp API onboarding!`;

        const encodedMessage = encodeURIComponent(message);
        const targetUrl = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodedMessage}`;
        document.getElementById('directWhatsAppBtn').href = targetUrl;
    }

    // Initialize Chart.js
    function initChart() {
        const ctx = document.getElementById('distributionChart').getContext('2d');
        chartInstance = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Marketing', 'Utility', 'Authentication'],
                datasets: [{
                    data: [0, 0, 0],
                    backgroundColor: ['#25D366', '#3b82f6', '#6366f1'],
                    borderWidth: 0,
                    hoverOffset: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#1e293b',
                        titleColor: '#f1f5f9',
                        bodyColor: '#f1f5f9',
                        callbacks: {
                            label: function (context) {
                                return `₹${context.raw.toFixed(2)}`;
                            }
                        }
                    }
                },
                cutout: '65%'
            }
        });
    }

    // Update chart data
    function updateChart(datasetValues) {
        if (!chartInstance) return;
        const allZero = datasetValues.every(val => val === 0);
        chartInstance.data.datasets[0].data = allZero ? [1, 1, 1] : datasetValues;
        chartInstance.data.datasets[0].backgroundColor = allZero ? ['#94a3b8', '#94a3b8', '#94a3b8'] : ['#25D366', '#3b82f6', '#6366f1'];
        chartInstance.update();
    }

    // Copy breakdown to clipboard
    function copyToClipboard() {
        const total = document.getElementById('totalCost').innerText;
        const marketingQty = document.getElementById('marketing').value;
        const utilityQty = document.getElementById('utility').value;
        const authQty = document.getElementById('authentication').value;
        const mCost = document.getElementById('m_cost_lbl').innerText;
        const uCost = document.getElementById('u_cost_lbl').innerText;
        const aCost = document.getElementById('a_cost_lbl').innerText;
        const avgCost = document.getElementById('averageCostLabel').innerText;

        const textSummary = `HeyDoot WhatsApp Business API Pricing Estimation
=========================================
Selected Tier: ${currentPlan.toUpperCase()} Plan

Breakdown:
- Marketing Messages: ${marketingQty} (${mCost})
- Utility Messages: ${utilityQty} (${uCost})
- Authentication Messages: ${authQty} (${aCost})

Total Estimated Monthly Cost: ${total}
Average Cost Per Message: ${avgCost}

Generated via HeyDoot Interactive Calculator
https://heydoot.com/calculator`;

        navigator.clipboard.writeText(textSummary).then(() => {
            showNotification('Copied!', 'Price calculation copied to clipboard.');
        }).catch(() => {
            showNotification('Error', 'Could not copy to clipboard. Please try again.');
        });
    }

    // Show toast notification
    function showNotification(title, message) {
        const toast = document.getElementById('toast');
        document.getElementById('toastTitle').innerText = title;
        document.getElementById('toastMessage').innerText = message;

        toast.classList.add('show');
        setTimeout(() => {
            toast.classList.remove('show');
        }, 3000);
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function () {
        initChart();
        selectPlan('starter');
        // Set initial input values
        document.getElementById('marketing').value = 1000;
        document.getElementById('marketing_slider').value = 1000;
        document.getElementById('utility').value = 500;
        document.getElementById('utility_slider').value = 500;
        document.getElementById('authentication').value = 300;
        document.getElementById('authentication_slider').value = 300;
        calculatePrice();
    });
</script>

<?php include 'components/footer.php'; ?>