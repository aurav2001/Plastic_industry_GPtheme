<?php
/**
 * The template for displaying the front page
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// Fetch default fallback data
$default_products   = gp_get_default_products();
$default_industries = gp_get_default_industries();
$default_clients    = gp_get_default_clients();
$default_news       = gp_get_default_news();
?>

<main id="primary" class="site-main">

    <!-- ========================================================================= -->
    <!-- 1. HERO SLIDER SECTION                                                    -->
    <!-- ========================================================================= -->
    <section class="gp-hero" id="home">
        <div class="gp-hero-slider" id="gp-hero-slider">

            <!-- Slide 1: Defence & Aerospace -->
            <div class="gp-hero-slide gp-slide-active" data-slide="0">
                <div class="gp-hero-bg gp-hero-bg-defence"></div>
                <div class="gp-hero-overlay"></div>
                <div class="gp-container gp-hero-content-wrapper">
                    <div class="gp-hero-content">
                        <div class="gp-hero-badge">
                            <span class="gp-badge-dot"></span>
                            <span><?php esc_html_e( 'DEFENCE & AEROSPACE DIVISION', 'gp-theme' ); ?></span>
                        </div>
                        <h1 class="gp-hero-title">
                            <?php esc_html_e( 'Future of Defence', 'gp-theme' ); ?><br>
                            <span class="gp-text-highlight"><?php esc_html_e( 'And Aerospace', 'gp-theme' ); ?></span>
                        </h1>
                        <p class="gp-hero-lead">
                            <?php esc_html_e( 'Cutting-edge indigenous drone technology, surveillance UAV systems, and high-strength composite airframe components built for mission-critical reliability.', 'gp-theme' ); ?>
                        </p>
                        <div class="gp-hero-cta-group">
                            <a href="#defence" class="gp-btn gp-btn-primary gp-btn-lg">
                                <span><?php esc_html_e( 'Explore Defence Solutions', 'gp-theme' ); ?></span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            <a href="#contact" class="gp-btn gp-btn-outline gp-btn-lg">
                                <span><?php esc_html_e( 'Request Specs Sheet', 'gp-theme' ); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Blow & Injection Moulding -->
            <div class="gp-hero-slide" data-slide="1">
                <div class="gp-hero-bg gp-hero-bg-plastics"></div>
                <div class="gp-hero-overlay"></div>
                <div class="gp-container gp-hero-content-wrapper">
                    <div class="gp-hero-content">
                        <div class="gp-hero-badge">
                            <span class="gp-badge-dot"></span>
                            <span><?php esc_html_e( '40+ YEARS OF EXCELLENCE', 'gp-theme' ); ?></span>
                        </div>
                        <h2 class="gp-hero-title">
                            <?php esc_html_e( 'Manufacturing Pioneers in', 'gp-theme' ); ?><br>
                            <span class="gp-text-highlight"><?php esc_html_e( 'Plastic Engineering', 'gp-theme' ); ?></span>
                        </h2>
                        <p class="gp-hero-lead">
                            <?php esc_html_e( 'Widest range of Blow & Injection Moulded packaging, drums, jerry cans, pails, and precision automotive components. 100% Made in India under one roof.', 'gp-theme' ); ?>
                        </p>
                        <div class="gp-hero-cta-group">
                            <a href="#products" class="gp-btn gp-btn-primary gp-btn-lg">
                                <span><?php esc_html_e( 'Browse Product Catalog', 'gp-theme' ); ?></span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            <a href="#story" class="gp-btn gp-btn-outline gp-btn-lg">
                                <span><?php esc_html_e( 'Our Manufacturing Story', 'gp-theme' ); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Sustainable Industrial Packaging -->
            <div class="gp-hero-slide" data-slide="2">
                <div class="gp-hero-bg gp-hero-bg-sustainable"></div>
                <div class="gp-hero-overlay"></div>
                <div class="gp-container gp-hero-content-wrapper">
                    <div class="gp-hero-content">
                        <div class="gp-hero-badge">
                            <span class="gp-badge-dot"></span>
                            <span><?php esc_html_e( 'ISO 9001:2015 CERTIFIED', 'gp-theme' ); ?></span>
                        </div>
                        <h2 class="gp-hero-title">
                            <?php esc_html_e( 'Sustainable Manufacturing', 'gp-theme' ); ?><br>
                            <span class="gp-text-highlight"><?php esc_html_e( 'The Path To Greener Future', 'gp-theme' ); ?></span>
                        </h2>
                        <p class="gp-hero-lead">
                            <?php esc_html_e( 'UN-certified hazardous chemical containment, food-grade FDA compliant containers, and zero-defect quality control across 4 manufacturing units.', 'gp-theme' ); ?>
                        </p>
                        <div class="gp-hero-cta-group">
                            <a href="#contact" class="gp-btn gp-btn-primary gp-btn-lg">
                                <span><?php esc_html_e( 'Contact Sales Team', 'gp-theme' ); ?></span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            <a href="#testing" class="gp-btn gp-btn-outline gp-btn-lg">
                                <span><?php esc_html_e( 'Testing Facilities', 'gp-theme' ); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Slider Controls & Indicators -->
        <div class="gp-hero-nav">
            <div class="gp-container gp-hero-nav-inner">
                <div class="gp-slider-indicators">
                    <button class="gp-indicator active" data-slide-to="0" aria-label="Slide 1"></button>
                    <button class="gp-indicator" data-slide-to="1" aria-label="Slide 2"></button>
                    <button class="gp-indicator" data-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="gp-slider-arrows">
                    <button class="gp-arrow-btn gp-prev-slide" id="gp-prev-hero" aria-label="Previous Slide">‹</button>
                    <button class="gp-arrow-btn gp-next-slide" id="gp-next-hero" aria-label="Next Slide">›</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. FLOATING COUNTER STATS BAR (4 Units, 1000+ Clients, 100+ Products)     -->
    <!-- ========================================================================= -->
    <section class="gp-stats-bar" id="units">
        <div class="gp-container">
            <div class="gp-stats-grid">
                
                <div class="gp-stat-item">
                    <div class="gp-stat-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    </div>
                    <div class="gp-stat-info">
                        <div class="gp-stat-number"><span class="gp-counter" data-target="4">0</span></div>
                        <h4 class="gp-stat-title"><?php esc_html_e( 'Manufacturing Units', 'gp-theme' ); ?></h4>
                        <p class="gp-stat-desc"><?php esc_html_e( 'State-of-the-art blow & injection facilities ensuring efficiency & safety.', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-stat-item">
                    <div class="gp-stat-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <div class="gp-stat-info">
                        <div class="gp-stat-number"><span class="gp-counter" data-target="1000">0</span><span class="gp-plus">+</span></div>
                        <h4 class="gp-stat-title"><?php esc_html_e( 'Global Clients', 'gp-theme' ); ?></h4>
                        <p class="gp-stat-desc"><?php esc_html_e( 'Trusted by industry leaders like BASF, APAR, HP, Nalco & Ipca.', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-stat-item">
                    <div class="gp-stat-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    </div>
                    <div class="gp-stat-info">
                        <div class="gp-stat-number"><span class="gp-counter" data-target="100">0</span><span class="gp-plus">+</span></div>
                        <h4 class="gp-stat-title"><?php esc_html_e( 'Products Offered', 'gp-theme' ); ?></h4>
                        <p class="gp-stat-desc"><?php esc_html_e( 'Precision blow drums, jerry cans, pails, toys, auto parts & drones.', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-stat-item">
                    <div class="gp-stat-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <div class="gp-stat-info">
                        <div class="gp-stat-number"><span class="gp-counter" data-target="40">0</span><span class="gp-plus">+</span></div>
                        <h4 class="gp-stat-title"><?php esc_html_e( 'Years Dedication', 'gp-theme' ); ?></h4>
                        <p class="gp-stat-desc"><?php esc_html_e( 'Decades of polymer specialization with 100% in-house tooling.', 'gp-theme' ); ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. OUR STORY & ABOUT SECTION                                              -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-about" id="story">
        <div class="gp-container">
            <div class="gp-about-grid">
                
                <div class="gp-about-content">
                    <div class="gp-section-header">
                        <span class="gp-sub-tag"><?php esc_html_e( 'OUR STORY', 'gp-theme' ); ?></span>
                        <h2 class="gp-section-title">
                            <?php esc_html_e( 'Innovative Technologies,', 'gp-theme' ); ?><br>
                            <span class="gp-accent"><?php esc_html_e( 'Tailored Solutions', 'gp-theme' ); ?></span>
                        </h2>
                    </div>

                    <p class="gp-lead-text">
                        <?php esc_html_e( 'We are a leading Plastic & FRP moulding enterprise specializing in the manufacturing of Industrial Packaging Containers, Automotive Spares, Children Ergonomic Toys & Furniture, and advanced Defence & Aerospace Drone systems.', 'gp-theme' ); ?>
                    </p>

                    <p class="gp-body-text">
                        <?php esc_html_e( 'Our products are crafted using world-class extrusion blow moulding machines, high-tonnage micro-processor injection moulding presses, and aerospace composite cleanrooms. We collaborate closely with tier-1 enterprise clients to optimize manufacturing for superior durability, zero leakage, faster dispatch, and significant cost savings.', 'gp-theme' ); ?>
                    </p>

                    <div class="gp-highlight-box">
                        <div class="gp-highlight-icon">🇮🇳</div>
                        <div class="gp-highlight-text">
                            <strong><?php esc_html_e( '100% Made in India • Under One Roof', 'gp-theme' ); ?></strong>
                            <p><?php esc_html_e( 'Our sustained dedication of over 40 years to polymer engineering empowers us to offer the widest array of industrial solutions with end-to-end tooling, quality testing, and logistics support.', 'gp-theme' ); ?></p>
                        </div>
                    </div>

                    <div class="gp-features-pills">
                        <span class="gp-pill">✓ <?php esc_html_e( 'UN Hazard Chemical Approved', 'gp-theme' ); ?></span>
                        <span class="gp-pill">✓ <?php esc_html_e( 'FDA Approved Food Grade', 'gp-theme' ); ?></span>
                        <span class="gp-pill">✓ <?php esc_html_e( 'ISO 9001:2015 Certified Lab', 'gp-theme' ); ?></span>
                        <span class="gp-pill">✓ <?php esc_html_e( 'MIL-SPEC Defence Standards', 'gp-theme' ); ?></span>
                    </div>

                    <div class="gp-about-actions">
                        <a href="#contact" class="gp-btn gp-btn-primary">
                            <span><?php esc_html_e( 'Schedule Plant Visit', 'gp-theme' ); ?></span>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        <a href="#testing" class="gp-btn gp-btn-ghost">
                            <span><?php esc_html_e( 'View Testing Standards ›', 'gp-theme' ); ?></span>
                        </a>
                    </div>
                </div>

                <div class="gp-about-visual">
                    <div class="gp-visual-card">
                        <div class="gp-visual-img-container">
                            <!-- High quality industrial plant illustration/render -->
                            <div class="gp-industrial-scene">
                                <div class="gp-industrial-badge-top">
                                    <span class="gp-dot-live"></span> <?php esc_html_e( 'Unit 1-4 Operating at Full Capacity', 'gp-theme' ); ?>
                                </div>
                                <div class="gp-scene-graphic">
                                    <svg viewBox="0 0 400 300" class="gp-tech-blueprint" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="400" height="300" rx="12" fill="#0b2545"/>
                                        <circle cx="200" cy="150" r="90" stroke="#134074" stroke-width="2" stroke-dasharray="6 6"/>
                                        <circle cx="200" cy="150" r="60" stroke="#00b4d8" stroke-width="2"/>
                                        <!-- Drum Silhouette -->
                                        <rect x="170" y="90" width="60" height="95" rx="12" stroke="#ffffff" stroke-width="3" fill="#134074"/>
                                        <line x1="170" y1="115" x2="230" y2="115" stroke="#ffffff" stroke-width="2"/>
                                        <line x1="170" y1="140" x2="230" y2="140" stroke="#ffffff" stroke-width="2"/>
                                        <line x1="170" y1="165" x2="230" y2="165" stroke="#ffffff" stroke-width="2"/>
                                        <!-- Drone Wing Silhouette -->
                                        <path d="M120 70 L200 110 L280 70" stroke="#ef233c" stroke-width="3"/>
                                        <circle cx="120" cy="70" r="8" fill="#ef233c"/>
                                        <circle cx="280" cy="70" r="8" fill="#ef233c"/>
                                        <circle cx="200" cy="110" r="6" fill="#00b4d8"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Stat Badges -->
                        <div class="gp-floating-badge gp-badge-left">
                            <span class="gp-floating-num">40+</span>
                            <span class="gp-floating-label"><?php esc_html_e( 'Years Industry Leadership', 'gp-theme' ); ?></span>
                        </div>

                        <div class="gp-floating-badge gp-badge-right">
                            <span class="gp-floating-num">100%</span>
                            <span class="gp-floating-label"><?php esc_html_e( 'Leakage-Free Guarantee', 'gp-theme' ); ?></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. CORE CAPABILITIES / WHAT WE DO                                         -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-services" id="capabilities">
        <div class="gp-container">
            <div class="gp-section-header gp-text-center">
                <span class="gp-sub-tag"><?php esc_html_e( 'OUR CAPABILITIES', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'What We Do', 'gp-theme' ); ?></h2>
                <p class="gp-section-subtitle">
                    <?php esc_html_e( 'Comprehensive polymer processing, precision tooling, and aerospace composite engineering.', 'gp-theme' ); ?>
                </p>
            </div>

            <div class="gp-services-grid">
                
                <!-- Service 1: Defence & Aerospace -->
                <div class="gp-service-card gp-card-featured" id="defence">
                    <div class="gp-service-top">
                        <div class="gp-service-icon-box">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                        </div>
                        <span class="gp-service-pill"><?php esc_html_e( 'Specialized Division', 'gp-theme' ); ?></span>
                    </div>
                    <h3 class="gp-service-title"><?php esc_html_e( 'Defence & Aerospace', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc">
                        <?php esc_html_e( 'Manufacturing high-performance tactical drone platforms (IM4-Pro), agricultural & cleaning drones, and lightweight composite airframes with precision engineering.', 'gp-theme' ); ?>
                    </p>
                    <ul class="gp-service-list">
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'IM4-Pro Surveillance Drones', 'gp-theme' ); ?></li>
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'AeroClean & AeroCrop UAVs', 'gp-theme' ); ?></li>
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'MIL-SPEC Avionics Connectors', 'gp-theme' ); ?></li>
                    </ul>
                    <a href="#products" class="gp-card-link" data-cat="defence-aerospace">
                        <span><?php esc_html_e( 'Explore Defence Products', 'gp-theme' ); ?></span>
                        <span class="gp-arrow">→</span>
                    </a>
                </div>

                <!-- Service 2: Blow Moulding -->
                <div class="gp-service-card">
                    <div class="gp-service-top">
                        <div class="gp-service-icon-box">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                        </div>
                        <span class="gp-service-pill"><?php esc_html_e( 'Industrial Grade', 'gp-theme' ); ?></span>
                    </div>
                    <h3 class="gp-service-title"><?php esc_html_e( 'Blow Moulding Packaging', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc">
                        <?php esc_html_e( 'Robust container solutions engineered for corrosive chemicals, edible oils, and hazardous fluids with zero-permeation and stackable strength.', 'gp-theme' ); ?>
                    </p>
                    <ul class="gp-service-list">
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'Full Open Top Drums (30L - 250L)', 'gp-theme' ); ?></li>
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'Stackable Jerry Cans (5L - 35L)', 'gp-theme' ); ?></li>
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'Narrow & Wide Mouth Carboys', 'gp-theme' ); ?></li>
                    </ul>
                    <a href="#products" class="gp-card-link" data-cat="blow-moulding">
                        <span><?php esc_html_e( 'Explore Blow Moulded', 'gp-theme' ); ?></span>
                        <span class="gp-arrow">→</span>
                    </a>
                </div>

                <!-- Service 3: Injection Moulding -->
                <div class="gp-service-card">
                    <div class="gp-service-top">
                        <div class="gp-service-icon-box">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        </div>
                        <span class="gp-service-pill"><?php esc_html_e( 'High Precision', 'gp-theme' ); ?></span>
                    </div>
                    <h3 class="gp-service-title"><?php esc_html_e( 'Injection Moulding', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc">
                        <?php esc_html_e( 'High-tonnage precision injection moulding for tamper-evident pails, In-Mould Labelling (IML), automotive engineering parts, and durable children furniture.', 'gp-theme' ); ?>
                    </p>
                    <ul class="gp-service-list">
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'Pail Buckets for Paints & Grease', 'gp-theme' ); ?></li>
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'Toys & Ergonomic Kids Furniture', 'gp-theme' ); ?></li>
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'Automotive Functional Spares', 'gp-theme' ); ?></li>
                    </ul>
                    <a href="#products" class="gp-card-link" data-cat="injection-moulding">
                        <span><?php esc_html_e( 'Explore Injection Moulded', 'gp-theme' ); ?></span>
                        <span class="gp-arrow">→</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. INDUSTRIES WE SERVE (8 Grid Cards matching Jyoti reference)            -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-industries" id="industries">
        <div class="gp-container">
            <div class="gp-section-header gp-text-center">
                <span class="gp-sub-tag"><?php esc_html_e( 'WHO ARE OUR CLIENTS', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'Industries We Serve', 'gp-theme' ); ?></h2>
                <p class="gp-section-subtitle">
                    <?php esc_html_e( 'Providing cutting-edge polymer solutions to empower diverse industries, driving safety, innovation, and supply chain efficiency.', 'gp-theme' ); ?>
                </p>
            </div>

            <div class="gp-industries-grid">
                <?php foreach ( $default_industries as $ind ) : ?>
                    <div class="gp-industry-card">
                        <div class="gp-industry-icon">
                            <?php if ( 'defence' === $ind['icon'] ) : ?>
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            <?php elseif ( 'automotive' === $ind['icon'] ) : ?>
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                            <?php elseif ( 'toys' === $ind['icon'] ) : ?>
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                            <?php elseif ( 'paint' === $ind['icon'] ) : ?>
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 11l-8-8-8 8"></path><path d="M5 11v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-8"></path></svg>
                            <?php elseif ( 'food' === $ind['icon'] ) : ?>
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                            <?php elseif ( 'chemical' === $ind['icon'] ) : ?>
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 2v7.31L4.89 20a2 2 0 0 0 1.66 3h14.9a2 2 0 0 0 1.66-3L18 9.31V2"></path><path d="M8.5 2h7"></path><path d="M14 9.3V4"></path></svg>
                            <?php elseif ( 'pharma' === $ind['icon'] ) : ?>
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z"></path><path d="m8.5 8.5 7 7"></path></svg>
                            <?php else : ?>
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                            <?php endif; ?>
                        </div>
                        <h4 class="gp-industry-title"><?php echo esc_html( $ind['title'] ); ?></h4>
                        <p class="gp-industry-desc"><?php echo esc_html( $ind['desc'] ); ?></p>
                        <span class="gp-industry-hover-arrow">→</span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. FEATURED PRODUCTS SHOWCASE WITH CATEGORY FILTER TABS                   -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-products" id="products">
        <div class="gp-container">
            <div class="gp-section-header gp-text-center">
                <span class="gp-sub-tag"><?php esc_html_e( 'CATALOG SHOWCASE', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'Engineered Product Solutions', 'gp-theme' ); ?></h2>
                <p class="gp-section-subtitle">
                    <?php esc_html_e( 'Discover our precision manufactured portfolio across industrial packaging, automotive plastics, and defence UAV systems.', 'gp-theme' ); ?>
                </p>
            </div>

            <!-- Filter Tabs -->
            <div class="gp-filter-tabs">
                <button class="gp-filter-btn active" data-filter="all"><?php esc_html_e( 'All Products (100+)', 'gp-theme' ); ?></button>
                <button class="gp-filter-btn" data-filter="blow-moulding"><?php esc_html_e( 'Blow Moulding', 'gp-theme' ); ?></button>
                <button class="gp-filter-btn" data-filter="injection-moulding"><?php esc_html_e( 'Injection Moulding', 'gp-theme' ); ?></button>
                <button class="gp-filter-btn" data-filter="defence-aerospace"><?php esc_html_e( 'Defence & Aerospace', 'gp-theme' ); ?></button>
            </div>

            <!-- Product Cards Grid -->
            <div class="gp-products-grid" id="gp-products-grid">
                <?php
                // Check if WP posts exist in 'gp_product' CPT
                $product_query = new WP_Query( array(
                    'post_type'      => 'gp_product',
                    'posts_per_page' => 12,
                    'post_status'    => 'publish',
                ) );

                if ( $product_query->have_posts() ) :
                    while ( $product_query->have_posts() ) : $product_query->the_post();
                        $terms = get_the_terms( get_the_ID(), 'gp_product_cat' );
                        $cat_slug = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->slug : 'blow-moulding';
                        $cat_name = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : 'Industrial';
                        $capacity = get_post_meta( get_the_ID(), '_gp_capacity', true );
                        $material = get_post_meta( get_the_ID(), '_gp_material', true );
                ?>
                    <div class="gp-product-card" data-category="<?php echo esc_attr( $cat_slug ); ?>">
                        <div class="gp-product-thumb">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'gp-product-thumb' ); ?>
                            <?php else : ?>
                                <div class="gp-product-placeholder">
                                    <span class="gp-placeholder-cat"><?php echo esc_html( $cat_name ); ?></span>
                                </div>
                            <?php endif; ?>
                            <span class="gp-product-badge"><?php echo esc_html( $cat_name ); ?></span>
                        </div>
                        <div class="gp-product-content">
                            <h3 class="gp-product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="gp-product-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 14 ); ?></p>
                            <?php if ( ! empty( $capacity ) ) : ?>
                                <div class="gp-product-meta-row">
                                    <span class="gp-meta-tag">📏 <?php echo esc_html( $capacity ); ?></span>
                                </div>
                            <?php endif; ?>
                            <div class="gp-product-actions">
                                <a href="<?php the_permalink(); ?>" class="gp-btn gp-btn-sm gp-btn-outline"><?php esc_html_e( 'View Details', 'gp-theme' ); ?></a>
                                <button class="gp-btn gp-btn-sm gp-btn-primary gp-btn-enquire" data-product="<?php echo esc_attr( get_the_title() ); ?>">
                                    <?php esc_html_e( 'Enquire Now', 'gp-theme' ); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Default Fallback Products matching Jyoti Global Plast reference
                    foreach ( $default_products as $p ) :
                        $img_src = GP_THEME_URI . '/assets/images/product-drum-blue.jpg';
                        if ( 'jerrycan' === $p['image_type'] ) {
                            $img_src = GP_THEME_URI . '/assets/images/product-jerrycan.jpg';
                        } elseif ( strpos( $p['image_type'], 'drone' ) !== false || 'connector' === $p['image_type'] ) {
                            $img_src = GP_THEME_URI . '/assets/images/product-uav-drone.jpg';
                        } elseif ( 'bucket' === $p['image_type'] || 'jar' === $p['image_type'] ) {
                            $img_src = GP_THEME_URI . '/assets/images/product-bucket-paint.jpg';
                        }
                ?>
                    <div class="gp-product-card" data-category="<?php echo esc_attr( $p['cat_slug'] ); ?>">
                        <div class="gp-product-thumb">
                            <img src="<?php echo esc_url( $img_src ); ?>" alt="<?php echo esc_attr( $p['title'] ); ?>" loading="lazy" />
                            <span class="gp-product-badge"><?php echo esc_html( $p['badge'] ); ?></span>
                        </div>
                        <div class="gp-product-content">
                            <span class="gp-product-cat-name"><?php echo esc_html( $p['category'] ); ?></span>
                            <h3 class="gp-product-title"><?php echo esc_html( $p['title'] ); ?></h3>
                            <p class="gp-product-excerpt"><?php echo esc_html( $p['desc'] ); ?></p>
                            <div class="gp-specs-meta">
                                <div class="gp-spec-row">
                                    <span class="gp-spec-label"><?php esc_html_e( 'Capacity:', 'gp-theme' ); ?></span>
                                    <span class="gp-spec-val"><?php echo esc_html( $p['capacity'] ); ?></span>
                                </div>
                                <div class="gp-spec-row">
                                    <span class="gp-spec-label"><?php esc_html_e( 'Material:', 'gp-theme' ); ?></span>
                                    <span class="gp-spec-val"><?php echo esc_html( $p['material'] ); ?></span>
                                </div>
                            </div>
                            <div class="gp-product-actions">
                                <button class="gp-btn gp-btn-sm gp-btn-outline gp-btn-quickview"
                                    data-title="<?php echo esc_attr( $p['title'] ); ?>"
                                    data-cat="<?php echo esc_attr( $p['category'] ); ?>"
                                    data-capacity="<?php echo esc_attr( $p['capacity'] ); ?>"
                                    data-material="<?php echo esc_attr( $p['material'] ); ?>"
                                    data-weight="<?php echo esc_attr( $p['weight'] ); ?>"
                                    data-neck="<?php echo esc_attr( $p['neck_size'] ); ?>"
                                    data-color="<?php echo esc_attr( $p['color'] ); ?>"
                                    data-app="<?php echo esc_attr( $p['application'] ); ?>"
                                    data-cert="<?php echo esc_attr( $p['badge'] ); ?>"
                                    data-desc="<?php echo esc_attr( $p['desc'] ); ?>"
                                    data-img="<?php echo esc_url( $img_src ); ?>">
                                    <?php esc_html_e( 'View Details', 'gp-theme' ); ?>
                                </button>
                                <button class="gp-btn gp-btn-sm gp-btn-primary gp-btn-enquire" data-product="<?php echo esc_attr( $p['title'] ); ?>">
                                    <span><?php esc_html_e( 'Enquire', 'gp-theme' ); ?></span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>

            <div class="gp-catalog-cta gp-text-center">
                <p><?php esc_html_e( 'Require custom moulds, specialized polymer blends, or tailored drone payload capacities?', 'gp-theme' ); ?></p>
                <a href="#contact" class="gp-btn gp-btn-outline gp-btn-lg">
                    <span><?php esc_html_e( 'Consult Our Tooling & Moulding Engineers', 'gp-theme' ); ?></span>
                </a>
            </div>
        </div>

        <!-- Product Quick Details Modal -->
        <div id="gp-quickview-modal" class="gp-quickview-modal" role="dialog" aria-modal="true" aria-hidden="true">
            <div class="gp-quickview-dialog">
                <button type="button" class="gp-quickview-close" id="gp-quickview-close" aria-label="<?php esc_attr_e( 'Close', 'gp-theme' ); ?>">&times;</button>
                <div class="gp-quickview-inner">
                    <div class="gp-quickview-media">
                        <div class="gp-product-main-image">
                            <img id="gp-qv-img" src="<?php echo esc_url( GP_THEME_URI . '/assets/images/product-drum-blue.jpg' ); ?>" alt="Product Preview" />
                        </div>
                        <div class="gp-product-badges-row" style="margin-top: 15px;">
                            <span class="gp-cert-badge" id="gp-qv-cert">UN Approved Packaging</span>
                            <span class="gp-cert-badge">ISO 9001:2015</span>
                        </div>
                    </div>
                    <div class="gp-quickview-info">
                        <span class="gp-product-category-label" id="gp-qv-cat">Blow Moulding</span>
                        <h3 class="gp-product-detail-title" id="gp-qv-title" style="font-size: 1.8rem;">Product Title</h3>
                        <p class="gp-product-short-desc" id="gp-qv-desc">Full product engineering specification.</p>
                        
                        <div class="gp-specs-table-wrapper" style="padding: 16px; margin-bottom: 20px;">
                            <h4 class="gp-specs-heading" style="font-size: 1.1rem; margin-bottom: 10px;"><?php esc_html_e( 'Technical Specifications', 'gp-theme' ); ?></h4>
                            <table class="gp-specs-table">
                                <tbody>
                                    <tr>
                                        <th><?php esc_html_e( 'Capacity', 'gp-theme' ); ?></th>
                                        <td id="gp-qv-capacity">-</td>
                                    </tr>
                                    <tr>
                                        <th><?php esc_html_e( 'Material', 'gp-theme' ); ?></th>
                                        <td id="gp-qv-material">-</td>
                                    </tr>
                                    <tr>
                                        <th><?php esc_html_e( 'Approx Weight', 'gp-theme' ); ?></th>
                                        <td id="gp-qv-weight">-</td>
                                    </tr>
                                    <tr>
                                        <th><?php esc_html_e( 'Neck / Process', 'gp-theme' ); ?></th>
                                        <td id="gp-qv-neck">-</td>
                                    </tr>
                                    <tr>
                                        <th><?php esc_html_e( 'Colors', 'gp-theme' ); ?></th>
                                        <td id="gp-qv-color">-</td>
                                    </tr>
                                    <tr>
                                        <th><?php esc_html_e( 'Application', 'gp-theme' ); ?></th>
                                        <td id="gp-qv-app">-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="gp-product-cta-buttons">
                            <button type="button" class="gp-btn gp-btn-primary gp-btn-lg gp-btn-enquire" id="gp-qv-rfq-btn">
                                <span><?php esc_html_e( 'Request Immediate Quote', 'gp-theme' ); ?></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. INFRASTRUCTURE & QUALITY TESTING FACILITIES                            -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-testing" id="testing">
        <div class="gp-container">
            <div class="gp-testing-layout">
                
                <div class="gp-testing-header">
                    <span class="gp-sub-tag"><?php esc_html_e( 'ZERO-DEFECT BENCHMARKS', 'gp-theme' ); ?></span>
                    <h2 class="gp-section-title">
                        <?php esc_html_e( 'World-Class Quality &', 'gp-theme' ); ?><br>
                        <span class="gp-accent"><?php esc_html_e( 'Testing Laboratory', 'gp-theme' ); ?></span>
                    </h2>
                    <p class="gp-section-subtitle">
                        <?php esc_html_e( 'Every batch undergoes rigorous chemical, mechanical, and environmental endurance tests to ensure 100% UN packaging compliance and aerospace-grade durability.', 'gp-theme' ); ?>
                    </p>
                </div>

                <div class="gp-testing-grid">
                    
                    <div class="gp-testing-card">
                        <div class="gp-test-number">01</div>
                        <h4 class="gp-test-title"><?php esc_html_e( 'Drop Impact Test', 'gp-theme' ); ?></h4>
                        <p class="gp-test-desc">
                            <?php esc_html_e( 'Filled to nominal capacity with chilled anti-freeze liquid down to -18°C and dropped from heights up to 1.8 meters onto concrete without any rupture or leakage.', 'gp-theme' ); ?>
                        </p>
                        <span class="gp-test-badge"><?php esc_html_e( 'UN Standard 6.1.5.3', 'gp-theme' ); ?></span>
                    </div>

                    <div class="gp-testing-card">
                        <div class="gp-test-number">02</div>
                        <h4 class="gp-test-title"><?php esc_html_e( 'Hydrostatic Pressure Test', 'gp-theme' ); ?></h4>
                        <p class="gp-test-desc">
                            <?php esc_html_e( 'Internal hydraulic pressurization up to 250 kPa sustained for 30 minutes to verify seam integrity, gasket resilience, and zero fluid seepage.', 'gp-theme' ); ?>
                        </p>
                        <span class="gp-test-badge"><?php esc_html_e( 'Zero Seepage Rating', 'gp-theme' ); ?></span>
                    </div>

                    <div class="gp-testing-card">
                        <div class="gp-test-number">03</div>
                        <h4 class="gp-test-title"><?php esc_html_e( 'Stacking & Load Endurance', 'gp-theme' ); ?></h4>
                        <p class="gp-test-desc">
                            <?php esc_html_e( 'Subjected to top-load compressive force equivalent to a 3-meter warehouse stack at 40°C for 28 consecutive days without deformation.', 'gp-theme' ); ?>
                        </p>
                        <span class="gp-test-badge"><?php esc_html_e( '1+3 Stack Endurance', 'gp-theme' ); ?></span>
                    </div>

                    <div class="gp-testing-card">
                        <div class="gp-test-number">04</div>
                        <h4 class="gp-test-title"><?php esc_html_e( 'Aero Composite Analysis', 'gp-theme' ); ?></h4>
                        <p class="gp-test-desc">
                            <?php esc_html_e( 'Ultrasonic non-destructive testing (NDT), vibration harmonics, and thermal resistance validation for drone airframes and avionics connectors.', 'gp-theme' ); ?>
                        </p>
                        <span class="gp-test-badge"><?php esc_html_e( 'Aerospace Standards', 'gp-theme' ); ?></span>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 8. CLIENT BRANDS MARQUEE (BASF, APAR, HP, Nalco, Ipca, Foseco)           -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-clients">
        <div class="gp-container">
            <div class="gp-section-header gp-text-center">
                <span class="gp-sub-tag"><?php esc_html_e( 'TRUSTED BY GLOBAL LEADERS', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'Our Valued Clientele', 'gp-theme' ); ?></h2>
                <p class="gp-section-subtitle">
                    <?php esc_html_e( 'A true partnership is built on mutual trust, technical precision, and unwavering reliability.', 'gp-theme' ); ?>
                </p>
            </div>
        </div>

        <div class="gp-marquee-container">
            <div class="gp-marquee-track">
                <?php
                // Render logos twice for seamless infinite scrolling loop
                for ( $i = 0; $i < 2; $i++ ) :
                    foreach ( $default_clients as $client ) :
                ?>
                    <div class="gp-client-pill">
                        <span class="gp-client-icon">🏢</span>
                        <div class="gp-client-text">
                            <strong><?php echo esc_html( $client['name'] ); ?></strong>
                            <small><?php echo esc_html( $client['tag'] ); ?></small>
                        </div>
                    </div>
                <?php
                    endforeach;
                endfor;
                ?>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 9. LATEST NEWS & DEFENCE INSIGHTS                                         -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-news" id="news">
        <div class="gp-container">
            <div class="gp-section-header-split">
                <div>
                    <span class="gp-sub-tag"><?php esc_html_e( 'NEWS & EVENTS', 'gp-theme' ); ?></span>
                    <h2 class="gp-section-title"><?php esc_html_e( 'Latest News & Insights', 'gp-theme' ); ?></h2>
                </div>
                <div>
                    <a href="#contact" class="gp-btn gp-btn-outline"><?php esc_html_e( 'Media Enquiries ›', 'gp-theme' ); ?></a>
                </div>
            </div>

            <div class="gp-news-grid">
                <?php
                $news_query = new WP_Query( array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                ) );

                if ( $news_query->have_posts() ) :
                    while ( $news_query->have_posts() ) : $news_query->the_post();
                ?>
                    <article class="gp-news-card">
                        <div class="gp-news-thumb">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'gp-news-thumb' ); ?>
                            <?php else : ?>
                                <div class="gp-news-placeholder">
                                    <span><?php esc_html_e( 'Industry Insights', 'gp-theme' ); ?></span>
                                </div>
                            <?php endif; ?>
                            <span class="gp-news-date"><?php echo esc_html( get_the_date( 'M d, Y' ) ); ?></span>
                        </div>
                        <div class="gp-news-body">
                            <span class="gp-news-cat"><?php the_category( ', ' ); ?></span>
                            <h3 class="gp-news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="gp-news-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 18 ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="gp-news-readmore">
                                <span><?php esc_html_e( 'Read More', 'gp-theme' ); ?></span>
                                <span class="gp-arrow">→</span>
                            </a>
                        </div>
                    </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Default fallback news items matching Jyoti reference
                    foreach ( $default_news as $news_item ) :
                ?>
                    <article class="gp-news-card">
                        <div class="gp-news-thumb">
                            <div class="gp-news-placeholder">
                                <span><?php echo esc_html( $news_item['category'] ); ?></span>
                            </div>
                            <span class="gp-news-date"><?php echo esc_html( $news_item['date'] ); ?></span>
                        </div>
                        <div class="gp-news-body">
                            <span class="gp-news-cat"><?php echo esc_html( $news_item['category'] ); ?></span>
                            <h3 class="gp-news-title"><?php echo esc_html( $news_item['title'] ); ?></h3>
                            <p class="gp-news-excerpt"><?php echo esc_html( $news_item['summary'] ); ?></p>
                            <span class="gp-news-readmore">
                                <span><?php esc_html_e( 'Read Full Article', 'gp-theme' ); ?></span>
                                <span class="gp-arrow">→</span>
                            </span>
                        </div>
                    </article>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 10. INTERACTIVE RFQ / CONTACT SECTION                                     -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-contact" id="contact">
        <div class="gp-container">
            <div class="gp-contact-box">
                <div class="gp-contact-grid">
                    
                    <!-- Left: Contact Info & Value Prop -->
                    <div class="gp-contact-left">
                        <span class="gp-sub-tag"><?php esc_html_e( 'DIRECT FACTORY ENQUIRY', 'gp-theme' ); ?></span>
                        <h2 class="gp-contact-title">
                            <?php esc_html_e( 'Let’s Build Superior', 'gp-theme' ); ?><br>
                            <span class="gp-accent"><?php esc_html_e( 'Solutions Together', 'gp-theme' ); ?></span>
                        </h2>
                        <p class="gp-contact-desc">
                            <?php esc_html_e( 'Whether you require bulk supply of UN-certified drums, custom blow moulds, precision injection parts, or tactical drone components, our engineering team is here to help.', 'gp-theme' ); ?>
                        </p>

                        <div class="gp-contact-details-list">
                            <div class="gp-contact-line">
                                <div class="gp-line-icon">📍</div>
                                <div>
                                    <strong><?php esc_html_e( 'Plant & Corporate Office:', 'gp-theme' ); ?></strong>
                                    <p><?php echo esc_html( get_theme_mod( 'gp_company_address', 'R-554/555/556/558 TTC MIDC industrial area Rabale Navi Mumbai, Thane 400701, MH, India' ) ); ?></p>
                                </div>
                            </div>
                            <div class="gp-contact-line">
                                <div class="gp-line-icon">📞</div>
                                <div>
                                    <strong><?php esc_html_e( 'Telephone & WhatsApp:', 'gp-theme' ); ?></strong>
                                    <p><a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9]/', '', get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ) ); ?>"><?php echo esc_html( get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ); ?></a></p>
                                </div>
                            </div>
                            <div class="gp-contact-line">
                                <div class="gp-line-icon">✉️</div>
                                <div>
                                    <strong><?php esc_html_e( 'Official Email:', 'gp-theme' ); ?></strong>
                                    <p><a href="mailto:<?php echo esc_attr( get_theme_mod( 'gp_company_email', 'info@jyotiglobalplast.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'gp_company_email', 'info@jyotiglobalplast.com' ) ); ?></a></p>
                                </div>
                            </div>
                            <div class="gp-contact-line">
                                <div class="gp-line-icon">⏱️</div>
                                <div>
                                    <strong><?php esc_html_e( 'Operating Hours:', 'gp-theme' ); ?></strong>
                                    <p><?php esc_html_e( 'Monday to Saturday: 9:00 AM - 6:30 PM IST', 'gp-theme' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Interactive RFQ Form -->
                    <div class="gp-contact-right">
                        <div class="gp-form-card">
                            <h3 class="gp-form-card-title"><?php esc_html_e( 'Request a Quote / Callback', 'gp-theme' ); ?></h3>
                            <p class="gp-form-card-subtitle"><?php esc_html_e( 'Guaranteed response within 4 business hours.', 'gp-theme' ); ?></p>

                            <form class="gp-ajax-rfq-form" id="gp-main-contact-form">
                                <input type="hidden" name="action" value="gp_submit_contact">
                                
                                <div class="gp-form-row">
                                    <div class="gp-form-group">
                                        <label for="rfq_name"><?php esc_html_e( 'Your Name *', 'gp-theme' ); ?></label>
                                        <input type="text" id="rfq_name" name="fullname" required placeholder="John Doe">
                                    </div>
                                    <div class="gp-form-group">
                                        <label for="rfq_company"><?php esc_html_e( 'Company Name', 'gp-theme' ); ?></label>
                                        <input type="text" id="rfq_company" name="company" placeholder="e.g. Acme Chemicals">
                                    </div>
                                </div>

                                <div class="gp-form-row">
                                    <div class="gp-form-group">
                                        <label for="rfq_email"><?php esc_html_e( 'Email Address *', 'gp-theme' ); ?></label>
                                        <input type="email" id="rfq_email" name="email" required placeholder="john@example.com">
                                    </div>
                                    <div class="gp-form-group">
                                        <label for="rfq_phone"><?php esc_html_e( 'Mobile / WhatsApp *', 'gp-theme' ); ?></label>
                                        <input type="tel" id="rfq_phone" name="phone" required placeholder="+91 98765 43210">
                                    </div>
                                </div>

                                <div class="gp-form-row">
                                    <div class="gp-form-group">
                                        <label for="rfq_product"><?php esc_html_e( 'Product / Requirement', 'gp-theme' ); ?></label>
                                        <select id="rfq_product" name="product">
                                            <option value="Blow Moulded Drums & Jerry Cans"><?php esc_html_e( 'Blow Moulded Drums & Jerry Cans', 'gp-theme' ); ?></option>
                                            <option value="Injection Moulded Pail Buckets"><?php esc_html_e( 'Injection Moulded Pail Buckets', 'gp-theme' ); ?></option>
                                            <option value="Toys & Children Furniture"><?php esc_html_e( 'Toys & Children Furniture', 'gp-theme' ); ?></option>
                                            <option value="Automotive Precision Spares"><?php esc_html_e( 'Automotive Precision Spares', 'gp-theme' ); ?></option>
                                            <option value="Defence Drones & Components"><?php esc_html_e( 'Defence Drones & UAV Components', 'gp-theme' ); ?></option>
                                            <option value="Custom OEM Tooling & Moulding"><?php esc_html_e( 'Custom OEM Tooling & Moulding', 'gp-theme' ); ?></option>
                                        </select>
                                    </div>
                                    <div class="gp-form-group">
                                        <label for="rfq_quantity"><?php esc_html_e( 'Estimated Quantity', 'gp-theme' ); ?></label>
                                        <input type="text" id="rfq_quantity" name="quantity" placeholder="e.g. 5,000 units">
                                    </div>
                                </div>

                                <div class="gp-form-group">
                                    <label for="rfq_message"><?php esc_html_e( 'Project Specifications & Details', 'gp-theme' ); ?></label>
                                    <textarea id="rfq_message" name="message" rows="4" placeholder="Mention volume requirements, UN packaging specs, color choices or custom technical dimensions..."></textarea>
                                </div>

                                <div class="gp-form-feedback"></div>

                                <button type="submit" class="gp-btn gp-btn-primary gp-btn-full gp-btn-submit">
                                    <span><?php esc_html_e( 'Send RFQ Enquiry Now', 'gp-theme' ); ?></span>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main><!-- #primary -->

<?php
get_footer();
