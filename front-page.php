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

            <!-- Slide 1: Premium Plastic Granules (Dana) -->
            <div class="gp-hero-slide gp-slide-active" data-slide="0">
                <div class="gp-hero-bg gp-hero-bg-defence"></div>
                <div class="gp-hero-overlay"></div>
                <div class="gp-container gp-hero-content-wrapper">
                    <div class="gp-hero-content">
                        <div class="gp-hero-badge">
                            <span class="gp-badge-dot"></span>
                            <span><?php esc_html_e( 'PRIME VIRGIN & RECYCLED POLYMERS', 'gp-theme' ); ?></span>
                        </div>
                        <h1 class="gp-hero-title">
                            <?php esc_html_e( 'Premium Plastic Granules', 'gp-theme' ); ?><br>
                            <span class="gp-text-highlight"><?php esc_html_e( '(Dana) For Industry', 'gp-theme' ); ?></span>
                        </h1>
                        <p class="gp-hero-lead">
                            <?php esc_html_e( 'High-quality Polypropylene (PP), High-Density Polyethylene (HDPE), ABS Engineering Pellets, and PVC Compounds engineered for high-speed injection moulding, blow moulding, and extrusion.', 'gp-theme' ); ?>
                        </p>
                        <div class="gp-hero-cta-group">
                            <a href="#products" class="gp-btn gp-btn-primary gp-btn-lg">
                                <span><?php esc_html_e( 'Explore Plastic Dana', 'gp-theme' ); ?></span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            <a href="#contact" class="gp-btn gp-btn-outline gp-btn-lg">
                                <span><?php esc_html_e( 'Get Today’s Dana Rates', 'gp-theme' ); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Consistent MFI & Compounding -->
            <div class="gp-hero-slide" data-slide="1">
                <div class="gp-hero-bg gp-hero-bg-plastics"></div>
                <div class="gp-hero-overlay"></div>
                <div class="gp-container gp-hero-content-wrapper">
                    <div class="gp-hero-content">
                        <div class="gp-hero-badge">
                            <span class="gp-badge-dot"></span>
                            <span><?php esc_html_e( 'SRS POLYMER COMPOUNDING', 'gp-theme' ); ?></span>
                        </div>
                        <h2 class="gp-hero-title">
                            <?php esc_html_e( 'Consistent MFI & Batch-Tested', 'gp-theme' ); ?><br>
                            <span class="gp-text-highlight"><?php esc_html_e( 'Polymer Pellets', 'gp-theme' ); ?></span>
                        </h2>
                        <p class="gp-hero-lead">
                            <?php esc_html_e( 'Zero-impurity virgin and customized reprocessed plastic granules. Batch-tested for exact Melt Flow Index (MFI), tensile strength, density, and color consistency.', 'gp-theme' ); ?>
                        </p>
                        <div class="gp-hero-cta-group">
                            <a href="#products" class="gp-btn gp-btn-primary gp-btn-lg">
                                <span><?php esc_html_e( 'Browse Granules Catalog', 'gp-theme' ); ?></span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            <a href="#contact" class="gp-btn gp-btn-outline gp-btn-lg">
                                <span><?php esc_html_e( 'Request Specs Sheet', 'gp-theme' ); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Sustainable Recycled Polymers -->
            <div class="gp-hero-slide" data-slide="2">
                <div class="gp-hero-bg gp-hero-bg-sustainable"></div>
                <div class="gp-hero-overlay"></div>
                <div class="gp-container gp-hero-content-wrapper">
                    <div class="gp-hero-content">
                        <div class="gp-hero-badge">
                            <span class="gp-badge-dot"></span>
                            <span><?php esc_html_e( 'SUSTAINABLE CIRCULAR ECONOMY', 'gp-theme' ); ?></span>
                        </div>
                        <h2 class="gp-hero-title">
                            <?php esc_html_e( 'Cost-Effective Recycled', 'gp-theme' ); ?><br>
                            <span class="gp-text-highlight"><?php esc_html_e( '& Custom Compounds', 'gp-theme' ); ?></span>
                        </h2>
                        <p class="gp-hero-lead">
                            <?php esc_html_e( 'Cut raw material overheads with our premium reprocessed dana and specialized color masterbatches. Suitable for pipes, packaging, automotive, and household items.', 'gp-theme' ); ?>
                        </p>
                        <div class="gp-hero-cta-group">
                            <a href="#contact" class="gp-btn gp-btn-primary gp-btn-lg">
                                <span><?php esc_html_e( 'Request Sample Bag', 'gp-theme' ); ?></span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            <a href="#testing" class="gp-btn gp-btn-outline gp-btn-lg">
                                <span><?php esc_html_e( 'Testing Lab Standards', 'gp-theme' ); ?></span>
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
    <!-- 2. FLOATING COUNTER STATS BAR (Polymer Compounding Capacity & Network)     -->
    <!-- ========================================================================= -->
    <section class="gp-stats-bar" id="units">
        <div class="gp-container">
            <div class="gp-stats-grid">
                
                <div class="gp-stat-item">
                    <div class="gp-stat-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    </div>
                    <div class="gp-stat-info">
                        <div class="gp-stat-number"><span class="gp-counter" data-target="50000">0</span><span class="gp-plus">+</span></div>
                        <h4 class="gp-stat-title"><?php esc_html_e( 'MT Annual Capacity', 'gp-theme' ); ?></h4>
                        <p class="gp-stat-desc"><?php esc_html_e( 'State-of-the-art twin screw extrusion & compounding facilities.', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-stat-item">
                    <div class="gp-stat-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <div class="gp-stat-info">
                        <div class="gp-stat-number"><span class="gp-counter" data-target="1200">0</span><span class="gp-plus">+</span></div>
                        <h4 class="gp-stat-title"><?php esc_html_e( 'B2B Manufacturers', 'gp-theme' ); ?></h4>
                        <p class="gp-stat-desc"><?php esc_html_e( 'Supplying injection moulders, blow molders, pipe & cable units.', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-stat-item">
                    <div class="gp-stat-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    </div>
                    <div class="gp-stat-info">
                        <div class="gp-stat-number"><span class="gp-counter" data-target="50">0</span><span class="gp-plus">+</span></div>
                        <h4 class="gp-stat-title"><?php esc_html_e( 'Polymer Dana Grades', 'gp-theme' ); ?></h4>
                        <p class="gp-stat-desc"><?php esc_html_e( 'PP, HDPE, ABS, PVC, LDPE & custom color masterbatches.', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-stat-item">
                    <div class="gp-stat-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    </div>
                    <div class="gp-stat-info">
                        <div class="gp-stat-number"><span class="gp-counter" data-target="25">0</span><span class="gp-plus">+</span></div>
                        <h4 class="gp-stat-title"><?php esc_html_e( 'Years Dedication', 'gp-theme' ); ?></h4>
                        <p class="gp-stat-desc"><?php esc_html_e( 'Decades of polymer specialization with lab-tested batch consistency.', 'gp-theme' ); ?></p>
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
                        <span class="gp-sub-tag"><?php esc_html_e( 'ABOUT SRS POLYMER', 'gp-theme' ); ?></span>
                        <h2 class="gp-section-title">
                            <?php esc_html_e( 'Consistent Polymer Quality,', 'gp-theme' ); ?><br>
                            <span class="gp-accent"><?php esc_html_e( 'Tailored Compounding Solutions', 'gp-theme' ); ?></span>
                        </h2>
                    </div>

                    <p class="gp-lead-text">
                        <?php esc_html_e( 'SRS Polymer is a premier manufacturer, processor, and supplier of virgin and reprocessed plastic granules (plastic dana), engineering polymers, and specialty masterbatches across India.', 'gp-theme' ); ?>
                    </p>

                    <p class="gp-body-text">
                        <?php esc_html_e( 'We supply injection moulding, blow moulding, and pipe extrusion units with premium polymer pellets that ensure uniform melt flow index (MFI), zero nozzle choking, superior tensile strength, and reduced manufacturing cycle times.', 'gp-theme' ); ?>
                    </p>

                    <div class="gp-highlight-box">
                        <div class="gp-highlight-icon">🇮🇳</div>
                        <div class="gp-highlight-text">
                            <strong><?php esc_html_e( 'Direct Compounding Plant • Ready 25kg Bag Stock', 'gp-theme' ); ?></strong>
                            <p><?php esc_html_e( 'Our sustained dedication to polymer compounding empowers moulding factories with dependable batch-to-batch consistency and wholesale mill rates.', 'gp-theme' ); ?></p>
                        </div>
                    </div>

                    <div class="gp-features-pills">
                        <span class="gp-pill">✓ <?php esc_html_e( 'Lab-Tested Melt Flow Index (MFI)', 'gp-theme' ); ?></span>
                        <span class="gp-pill">✓ <?php esc_html_e( 'Prime Virgin & Reprocessed Dana', 'gp-theme' ); ?></span>
                        <span class="gp-pill">✓ <?php esc_html_e( 'High ESCR & Izod Impact Tested', 'gp-theme' ); ?></span>
                        <span class="gp-pill">✓ <?php esc_html_e( 'Standard 25 Kg Moisture Barrier Bags', 'gp-theme' ); ?></span>
                    </div>

                    <div class="gp-about-actions">
                        <a href="#contact" class="gp-btn gp-btn-primary">
                            <span><?php esc_html_e( 'Request Bulk Price List', 'gp-theme' ); ?></span>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        <a href="#testing" class="gp-btn gp-btn-ghost">
                            <span><?php esc_html_e( 'View Lab Testing Standards ›', 'gp-theme' ); ?></span>
                        </a>
                    </div>
                </div>

                <div class="gp-about-visual">
                    <div class="gp-visual-card">
                        <div class="gp-visual-img-container">
                            <div class="gp-industrial-scene">
                                <div class="gp-industrial-badge-top">
                                    <span class="gp-dot-live"></span> <?php esc_html_e( 'Twin-Screw Extrusion Lines Running', 'gp-theme' ); ?>
                                </div>
                                <div class="gp-scene-graphic">
                                    <svg viewBox="0 0 400 300" class="gp-tech-blueprint" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="400" height="300" rx="12" fill="#0b2545"/>
                                        <circle cx="200" cy="150" r="90" stroke="#134074" stroke-width="2" stroke-dasharray="6 6"/>
                                        <circle cx="200" cy="150" r="60" stroke="#00b4d8" stroke-width="2"/>
                                        <!-- Granule Pellets Graphic -->
                                        <circle cx="160" cy="130" r="14" fill="#00b4d8" opacity="0.9"/>
                                        <circle cx="190" cy="120" r="12" fill="#ef233c" opacity="0.9"/>
                                        <circle cx="225" cy="135" r="15" fill="#ffd166" opacity="0.9"/>
                                        <circle cx="175" cy="165" r="13" fill="#06d6a0" opacity="0.9"/>
                                        <circle cx="210" cy="170" r="14" fill="#118ab2" opacity="0.9"/>
                                        <circle cx="240" cy="165" r="11" fill="#ffffff" opacity="0.9"/>
                                        <text x="200" y="230" text-anchor="middle" fill="#90e0ef" font-size="14" font-weight="bold">SRS POLYMER DANA</text>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Stat Badges -->
                        <div class="gp-floating-badge gp-badge-left">
                            <span class="gp-floating-num">50+</span>
                            <span class="gp-floating-label"><?php esc_html_e( 'Polymer Dana Grades', 'gp-theme' ); ?></span>
                        </div>

                        <div class="gp-floating-badge gp-badge-right">
                            <span class="gp-floating-num">100%</span>
                            <span class="gp-floating-label"><?php esc_html_e( 'Batch Lab Tested', 'gp-theme' ); ?></span>
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
                <span class="gp-sub-tag"><?php esc_html_e( 'OUR PRODUCT RANGE', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'What We Supply', 'gp-theme' ); ?></h2>
                <p class="gp-section-subtitle">
                    <?php esc_html_e( 'Comprehensive polymer processing, custom compounding, and high-performance masterbatches.', 'gp-theme' ); ?>
                </p>
            </div>

            <div class="gp-services-grid">
                
                <!-- Service 1: PP & HDPE Granules -->
                <div class="gp-service-card gp-card-featured" id="pp-hdpe">
                    <div class="gp-service-top">
                        <div class="gp-service-icon-box">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                        </div>
                        <span class="gp-service-pill"><?php esc_html_e( 'High Demand', 'gp-theme' ); ?></span>
                    </div>
                    <h3 class="gp-service-title"><?php esc_html_e( 'Polypropylene & HDPE Granules', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc">
                        <?php esc_html_e( 'Virgin natural and reprocessed PP and HDPE dana pellets engineered for high-flow injection moulding, blow moulded containers, and heavy-duty raffia tapes.', 'gp-theme' ); ?>
                    </p>
                    <ul class="gp-service-list">
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'Virgin & Reprocessed PP Homopolymer / Copolymer', 'gp-theme' ); ?></li>
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'High ESCR Blow Grade HDPE Granules (MFI 0.35 - 1.2)', 'gp-theme' ); ?></li>
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'PP Raffia Dana for Woven Sacks & Straps', 'gp-theme' ); ?></li>
                    </ul>
                    <a href="#products" class="gp-card-link" data-cat="pp-granules">
                        <span><?php esc_html_e( 'Explore PP & HDPE Dana', 'gp-theme' ); ?></span>
                        <span class="gp-arrow">→</span>
                    </a>
                </div>

                <!-- Service 2: ABS & Engineering Polymers -->
                <div class="gp-service-card">
                    <div class="gp-service-top">
                        <div class="gp-service-icon-box">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                        </div>
                        <span class="gp-service-pill"><?php esc_html_e( 'Engineering Grade', 'gp-theme' ); ?></span>
                    </div>
                    <h3 class="gp-service-title"><?php esc_html_e( 'ABS & Engineering Dana', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc">
                        <?php esc_html_e( 'High-impact ABS, Polycarbonate, and Nylon granules delivering superior dimensional stability, heat resistance, and mirror-gloss surface finish.', 'gp-theme' ); ?>
                    </p>
                    <ul class="gp-service-list">
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'High-Gloss Natural Ivory & Black ABS Pellets', 'gp-theme' ); ?></li>
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'Flame Retardant (FR-V0) Formulations', 'gp-theme' ); ?></li>
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'Impact Strength > 250 J/m for Electronic Casings', 'gp-theme' ); ?></li>
                    </ul>
                    <a href="#products" class="gp-card-link" data-cat="abs-granules">
                        <span><?php esc_html_e( 'Explore ABS Granules', 'gp-theme' ); ?></span>
                        <span class="gp-arrow">→</span>
                    </a>
                </div>

                <!-- Service 3: PVC & Masterbatches -->
                <div class="gp-service-card">
                    <div class="gp-service-top">
                        <div class="gp-service-icon-box">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        </div>
                        <span class="gp-service-pill"><?php esc_html_e( 'Compound & Color', 'gp-theme' ); ?></span>
                    </div>
                    <h3 class="gp-service-title"><?php esc_html_e( 'PVC Compounds & Masterbatches', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc">
                        <?php esc_html_e( 'Pre-stabilized flexible/rigid PVC compounds for wire insulation, footwear, and conduit pipes, plus high-dispersion color masterbatches.', 'gp-theme' ); ?>
                    </p>
                    <ul class="gp-service-list">
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'Flexible PVC Compound for Cables & Footwear Soles', 'gp-theme' ); ?></li>
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'Rigid PVC Granules for Conduit & Profiles', 'gp-theme' ); ?></li>
                        <li><span class="gp-check">✓</span> <?php esc_html_e( 'Concentrated Color & White TiO2 Masterbatches', 'gp-theme' ); ?></li>
                    </ul>
                    <a href="#products" class="gp-card-link" data-cat="pvc-compounds">
                        <span><?php esc_html_e( 'Explore PVC & Masterbatches', 'gp-theme' ); ?></span>
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
                <span class="gp-sub-tag"><?php esc_html_e( 'POLYMER CATALOG', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'Engineered Plastic Granules (Dana)', 'gp-theme' ); ?></h2>
                <p class="gp-section-subtitle">
                    <?php esc_html_e( 'Discover our ready stock of prime virgin and high-grade recycled granules for injection moulding, blow moulding, and extrusion.', 'gp-theme' ); ?>
                </p>
            </div>

            <!-- Filter Tabs (Dynamically matches whatever categories exist in WP) -->
            <div class="gp-filter-tabs">
                <button class="gp-filter-btn active" data-filter="all"><?php esc_html_e( 'All Products', 'gp-theme' ); ?></button>
                <?php
                $existing_terms = get_terms( array(
                    'taxonomy'   => 'gp_product_cat',
                    'hide_empty' => true,
                ) );
                if ( ! empty( $existing_terms ) && ! is_wp_error( $existing_terms ) ) :
                    foreach ( $existing_terms as $t ) :
                ?>
                    <button class="gp-filter-btn" data-filter="<?php echo esc_attr( $t->slug ); ?>"><?php echo esc_html( $t->name ); ?></button>
                <?php
                    endforeach;
                else :
                ?>
                    <button class="gp-filter-btn" data-filter="blow-moulding"><?php esc_html_e( 'Blow Moulding', 'gp-theme' ); ?></button>
                    <button class="gp-filter-btn" data-filter="injection-moulding"><?php esc_html_e( 'Injection Moulding', 'gp-theme' ); ?></button>
                    <button class="gp-filter-btn" data-filter="pp-granules"><?php esc_html_e( 'PP Granules', 'gp-theme' ); ?></button>
                <?php endif; ?>
            </div>

            <!-- Product Cards Grid -->
            <div class="gp-products-grid" id="gp-products-grid">
                <?php
                // Show exactly 3 featured product cards on homepage
                $product_query = new WP_Query( array(
                    'post_type'      => 'gp_product',
                    'posts_per_page' => 3,
                    'post_status'    => 'publish',
                    'orderby'        => 'menu_order title',
                    'order'          => 'ASC',
                ) );

                if ( $product_query->have_posts() ) :
                    while ( $product_query->have_posts() ) : $product_query->the_post();
                        $terms = get_the_terms( get_the_ID(), 'gp_product_cat' );
                        $cat_slug = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->slug : 'all';
                        $cat_name = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : __( 'Product', 'gp-theme' );
                        $capacity = get_post_meta( get_the_ID(), '_gp_capacity', true );
                        $material = get_post_meta( get_the_ID(), '_gp_material', true );
                        $weight   = get_post_meta( get_the_ID(), '_gp_weight', true );
                        $neck     = get_post_meta( get_the_ID(), '_gp_neck_size', true );
                        $color    = get_post_meta( get_the_ID(), '_gp_color', true );
                        $app      = get_post_meta( get_the_ID(), '_gp_application', true );
                        $cert     = get_post_meta( get_the_ID(), '_gp_cert', true );
                        $thumb_url = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'gp-product-thumb' ) : '';
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
                            <span class="gp-product-badge"><?php echo esc_html( ! empty( $cert ) ? $cert : $cat_name ); ?></span>
                        </div>
                        <div class="gp-product-content">
                            <span class="gp-product-cat-name"><?php echo esc_html( $cat_name ); ?></span>
                            <h3 class="gp-product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="gp-product-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 14 ); ?></p>
                            <?php if ( ! empty( $capacity ) || ! empty( $material ) ) : ?>
                                <div class="gp-specs-meta">
                                    <?php if ( ! empty( $capacity ) ) : ?>
                                        <div class="gp-spec-row">
                                            <span class="gp-spec-label"><?php esc_html_e( 'Capacity / Spec:', 'gp-theme' ); ?></span>
                                            <span class="gp-spec-val"><?php echo esc_html( $capacity ); ?></span>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ( ! empty( $material ) ) : ?>
                                        <div class="gp-spec-row">
                                            <span class="gp-spec-label"><?php esc_html_e( 'Material / Grade:', 'gp-theme' ); ?></span>
                                            <span class="gp-spec-val"><?php echo esc_html( $material ); ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <div class="gp-product-actions">
                                <button class="gp-btn gp-btn-sm gp-btn-outline gp-btn-quickview"
                                    data-title="<?php echo esc_attr( get_the_title() ); ?>"
                                    data-cat="<?php echo esc_attr( $cat_name ); ?>"
                                    data-capacity="<?php echo esc_attr( $capacity ); ?>"
                                    data-material="<?php echo esc_attr( $material ); ?>"
                                    data-weight="<?php echo esc_attr( $weight ); ?>"
                                    data-neck="<?php echo esc_attr( $neck ); ?>"
                                    data-color="<?php echo esc_attr( $color ); ?>"
                                    data-app="<?php echo esc_attr( $app ); ?>"
                                    data-cert="<?php echo esc_attr( $cert ); ?>"
                                    data-desc="<?php echo esc_attr( get_the_excerpt() ); ?>"
                                    data-img="<?php echo esc_url( $thumb_url ); ?>">
                                    <?php esc_html_e( 'View Details', 'gp-theme' ); ?>
                                </button>
                                <button class="gp-btn gp-btn-sm gp-btn-primary gp-btn-enquire" data-product="<?php echo esc_attr( get_the_title() ); ?>">
                                    <span><?php esc_html_e( 'Enquire Now', 'gp-theme' ); ?></span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Default Fallback Products for SRS Polymer Plastic Granules (3 Cards)
                    foreach ( array_slice( $default_products, 0, 3 ) as $p ) :
                        $img_src = GP_THEME_URI . '/assets/images/product-pp-granules.jpg';
                        if ( 'hdpe_granules' === $p['image_type'] ) {
                            $img_src = GP_THEME_URI . '/assets/images/product-hdpe-granules.jpg';
                        } elseif ( 'abs_granules' === $p['image_type'] ) {
                            $img_src = GP_THEME_URI . '/assets/images/product-abs-granules.jpg';
                        } elseif ( 'pvc_granules' === $p['image_type'] ) {
                            $img_src = GP_THEME_URI . '/assets/images/product-hdpe-granules.jpg';
                        } elseif ( 'masterbatch' === $p['image_type'] ) {
                            $img_src = GP_THEME_URI . '/assets/images/hero-slide-granules.jpg';
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
                                    <span class="gp-spec-label"><?php esc_html_e( 'MFI / Grade:', 'gp-theme' ); ?></span>
                                    <span class="gp-spec-val"><?php echo esc_html( $p['capacity'] ); ?></span>
                                </div>
                                <div class="gp-spec-row">
                                    <span class="gp-spec-label"><?php esc_html_e( 'Polymer:', 'gp-theme' ); ?></span>
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

            <!-- View All Products in Catalog -->
            <div class="gp-view-all-wrap gp-text-center" style="margin-top: 35px; margin-bottom: 20px;">
                <a href="<?php echo esc_url( get_post_type_archive_link( 'gp_product' ) ?: home_url( '/products/' ) ); ?>" class="gp-btn gp-btn-primary gp-btn-md">
                    <span><?php esc_html_e( 'View All Products & Categories', 'gp-theme' ); ?></span>
                    <span class="gp-arrow">→</span>
                </a>
            </div>

            <div class="gp-catalog-cta gp-text-center">
                <p><?php esc_html_e( 'Need custom Melt Flow Index (MFI) compounding, color matching, or bulk truckload pricing?', 'gp-theme' ); ?></p>
                <a href="#contact" class="gp-btn gp-btn-outline gp-btn-lg">
                    <span><?php esc_html_e( 'Get Wholesale Dana Quote Today', 'gp-theme' ); ?></span>
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
                            <img id="gp-qv-img" src="<?php echo esc_url( GP_THEME_URI . '/assets/images/product-pp-granules.jpg' ); ?>" alt="Product Preview" />
                        </div>
                        <div class="gp-product-badges-row" style="margin-top: 15px;">
                            <span class="gp-cert-badge" id="gp-qv-cert">Virgin & Reprocessed</span>
                            <span class="gp-cert-badge">ASTM Tested</span>
                        </div>
                    </div>
                    <div class="gp-quickview-info">
                        <span class="gp-product-category-label" id="gp-qv-cat">PP Granules</span>
                        <h3 class="gp-product-detail-title" id="gp-qv-title" style="font-size: 1.8rem;">Product Title</h3>
                        <p class="gp-product-short-desc" id="gp-qv-desc">Full polymer specification and processing parameters.</p>
                        
                        <div class="gp-specs-table-wrapper" style="padding: 16px; margin-bottom: 20px;">
                            <h4 class="gp-specs-heading" style="font-size: 1.1rem; margin-bottom: 10px;"><?php esc_html_e( 'Technical Specifications', 'gp-theme' ); ?></h4>
                            <table class="gp-specs-table">
                                <tbody>
                                    <tr>
                                        <th><?php esc_html_e( 'Melt Flow Index (MFI)', 'gp-theme' ); ?></th>
                                        <td id="gp-qv-capacity">-</td>
                                    </tr>
                                    <tr>
                                        <th><?php esc_html_e( 'Polymer Grade / Material', 'gp-theme' ); ?></th>
                                        <td id="gp-qv-material">-</td>
                                    </tr>
                                    <tr>
                                        <th><?php esc_html_e( 'Packaging Size', 'gp-theme' ); ?></th>
                                        <td id="gp-qv-weight">-</td>
                                    </tr>
                                    <tr>
                                        <th><?php esc_html_e( 'Pellet Shape / Cut', 'gp-theme' ); ?></th>
                                        <td id="gp-qv-neck">-</td>
                                    </tr>
                                    <tr>
                                        <th><?php esc_html_e( 'Available Colors', 'gp-theme' ); ?></th>
                                        <td id="gp-qv-color">-</td>
                                    </tr>
                                    <tr>
                                        <th><?php esc_html_e( 'Recommended Application', 'gp-theme' ); ?></th>
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
                    <span class="gp-sub-tag"><?php esc_html_e( 'BATCH QUALITY ASSURANCE', 'gp-theme' ); ?></span>
                    <h2 class="gp-section-title">
                        <?php esc_html_e( 'State-of-the-Art Polymer', 'gp-theme' ); ?><br>
                        <span class="gp-accent"><?php esc_html_e( 'Testing Laboratory', 'gp-theme' ); ?></span>
                    </h2>
                    <p class="gp-section-subtitle">
                        <?php esc_html_e( 'Every polymer batch is analyzed in our testing lab to guarantee consistent melt flow rates, zero contamination, and optimal moulding performance.', 'gp-theme' ); ?>
                    </p>
                </div>

                <div class="gp-testing-grid">
                    
                    <div class="gp-testing-card">
                        <div class="gp-test-number">01</div>
                        <h4 class="gp-test-title"><?php esc_html_e( 'Melt Flow Index (MFI) Test', 'gp-theme' ); ?></h4>
                        <p class="gp-test-desc">
                            <?php esc_html_e( 'Computerized extrusion plastometer testing under ASTM D1238 standards guarantees precise flowability for high-speed injection and extrusion.', 'gp-theme' ); ?>
                        </p>
                        <span class="gp-test-badge"><?php esc_html_e( 'ASTM D1238 Standard', 'gp-theme' ); ?></span>
                    </div>

                    <div class="gp-testing-card">
                        <div class="gp-test-number">02</div>
                        <h4 class="gp-test-title"><?php esc_html_e( 'Density & Specific Gravity', 'gp-theme' ); ?></h4>
                        <p class="gp-test-desc">
                            <?php esc_html_e( 'Electronic immersion balance analysis confirms virgin polymer purity and precise density tolerances between 0.90 g/cm³ and 1.45 g/cm³.', 'gp-theme' ); ?>
                        </p>
                        <span class="gp-test-badge"><?php esc_html_e( 'ASTM D792 Certified', 'gp-theme' ); ?></span>
                    </div>

                    <div class="gp-testing-card">
                        <div class="gp-test-number">03</div>
                        <h4 class="gp-test-title"><?php esc_html_e( 'Izod Impact & Tensile Modulus', 'gp-theme' ); ?></h4>
                        <p class="gp-test-desc">
                            <?php esc_html_e( 'Digital pendulum impact hammer testing ensures maximum toughness and structural resilience for automotive and engineering applications.', 'gp-theme' ); ?>
                        </p>
                        <span class="gp-test-badge"><?php esc_html_e( 'ASTM D256 / ISO 180', 'gp-theme' ); ?></span>
                    </div>

                    <div class="gp-testing-card">
                        <div class="gp-test-number">04</div>
                        <h4 class="gp-test-title"><?php esc_html_e( 'Ash & Moisture Content', 'gp-theme' ); ?></h4>
                        <p class="gp-test-desc">
                            <?php esc_html_e( 'Halogen moisture analyzers and high-temp muffle furnace incineration eliminate splay marks, bubbles, and thermal degradation in finished products.', 'gp-theme' ); ?>
                        </p>
                        <span class="gp-test-badge"><?php esc_html_e( 'Moisture < 0.05%', 'gp-theme' ); ?></span>
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
                            <?php esc_html_e( 'Get Wholesale Polymer Rates', 'gp-theme' ); ?><br>
                            <span class="gp-accent"><?php esc_html_e( 'Direct Mill & Compounding Supply', 'gp-theme' ); ?></span>
                        </h2>
                        <p class="gp-contact-desc">
                            <?php esc_html_e( 'Whether you require a sample 25kg bag or regular truckloads of PP, HDPE, ABS, or PVC granules, our technical polymer team ensures best competitive market rates and immediate dispatch.', 'gp-theme' ); ?>
                        </p>

                        <div class="gp-contact-details-list">
                            <div class="gp-contact-line">
                                <div class="gp-line-icon">📍</div>
                                <div>
                                    <strong><?php esc_html_e( 'Plant & Corporate Office:', 'gp-theme' ); ?></strong>
                                    <p><?php echo esc_html( get_theme_mod( 'gp_company_address', 'SRS Polymer Industrial Area, Delhi-NCR & Bhiwadi, India' ) ); ?></p>
                                </div>
                            </div>
                            <div class="gp-contact-line">
                                <div class="gp-line-icon">📞</div>
                                <div>
                                    <strong><?php esc_html_e( 'Telephone & WhatsApp:', 'gp-theme' ); ?></strong>
                                    <p><a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9]/', '', get_theme_mod( 'gp_company_phone', '+91-9876543210' ) ) ); ?>"><?php echo esc_html( get_theme_mod( 'gp_company_phone', '+91-9876543210' ) ); ?></a></p>
                                </div>
                            </div>
                            <div class="gp-contact-line">
                                <div class="gp-line-icon">✉️</div>
                                <div>
                                    <strong><?php esc_html_e( 'Official Email:', 'gp-theme' ); ?></strong>
                                    <p><a href="mailto:<?php echo esc_attr( get_theme_mod( 'gp_company_email', 'info@srspolymer.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'gp_company_email', 'info@srspolymer.com' ) ); ?></a></p>
                                </div>
                            </div>
                            <div class="gp-contact-line">
                                <div class="gp-line-icon">⏱️</div>
                                <div>
                                    <strong><?php esc_html_e( 'Operating Hours:', 'gp-theme' ); ?></strong>
                                    <p><?php esc_html_e( 'Monday to Saturday: 9:00 AM - 7:00 PM IST', 'gp-theme' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Interactive RFQ Form -->
                    <div class="gp-contact-right">
                        <div class="gp-form-card">
                            <h3 class="gp-form-card-title"><?php esc_html_e( 'Request a Quote / Sample Bag', 'gp-theme' ); ?></h3>
                            <p class="gp-form-card-subtitle"><?php esc_html_e( 'Guaranteed response with today’s polymer rates within 2 hours.', 'gp-theme' ); ?></p>

                            <form class="gp-ajax-rfq-form" id="gp-main-contact-form">
                                <input type="hidden" name="action" value="gp_submit_contact">
                                
                                <div class="gp-form-row">
                                    <div class="gp-form-group">
                                        <label for="rfq_name"><?php esc_html_e( 'Your Name *', 'gp-theme' ); ?></label>
                                        <input type="text" id="rfq_name" name="fullname" required placeholder="Example Name">
                                    </div>
                                    <div class="gp-form-group">
                                        <label for="rfq_company"><?php esc_html_e( 'Company / Factory Name', 'gp-theme' ); ?></label>
                                        <input type="text" id="rfq_company" name="company" placeholder="e.g. Modern Plastics Ltd">
                                    </div>
                                </div>

                                <div class="gp-form-row">
                                    <div class="gp-form-group">
                                        <label for="rfq_email"><?php esc_html_e( 'Email Address *', 'gp-theme' ); ?></label>
                                        <input type="email" id="rfq_email" name="email" required placeholder="example@example.com">
                                    </div>
                                    <div class="gp-form-group">
                                        <label for="rfq_phone"><?php esc_html_e( 'Mobile / WhatsApp *', 'gp-theme' ); ?></label>
                                        <input type="tel" id="rfq_phone" name="phone" required placeholder="+91 98765 43210">
                                    </div>
                                </div>

                                <div class="gp-form-row">
                                    <div class="gp-form-group">
                                        <label for="rfq_product"><?php esc_html_e( 'Polymer / Granules Requirement', 'gp-theme' ); ?></label>
                                        <select id="rfq_product" name="product">
                                            <option value=""><?php esc_html_e( '-- Select Polymer / Granules Grade --', 'gp-theme' ); ?></option>
                                            <?php
                                            $rfq_query = new WP_Query( array(
                                                'post_type'      => 'gp_product',
                                                'posts_per_page' => 50,
                                                'post_status'    => 'publish',
                                                'orderby'        => 'title',
                                                'order'          => 'ASC',
                                            ) );
                                            if ( $rfq_query->have_posts() ) :
                                                while ( $rfq_query->have_posts() ) : $rfq_query->the_post();
                                                    printf( '<option value="%s">%s</option>', esc_attr( get_the_title() ), esc_html( get_the_title() ) );
                                                endwhile;
                                                wp_reset_postdata();
                                            else :
                                                // Fallback industry granule grades
                                                $fallback_granules = array(
                                                    'Polypropylene (PP) Granules',
                                                    'HDPE Granules (Blow & Pipe Grade)',
                                                    'ABS Engineering Polymer Dana',
                                                    'PVC Compound (Rigid / Flexible)',
                                                    'LDPE & LLDPE Film Granules',
                                                    'Color & Additive Masterbatches',
                                                    'Custom Polymer Compounding',
                                                );
                                                foreach ( $fallback_granules as $fg ) :
                                                    printf( '<option value="%s">%s</option>', esc_attr( $fg ), esc_html( $fg ) );
                                                endforeach;
                                            endif;
                                            ?>
                                        </select>
                                    </div>
                                    <div class="gp-form-group">
                                        <label for="rfq_quantity"><?php esc_html_e( 'Estimated Quantity (MT / Bags)', 'gp-theme' ); ?></label>
                                        <input type="text" id="rfq_quantity" name="quantity" placeholder="e.g. 5 MT or 200 Bags">
                                    </div>
                                </div>

                                <div class="gp-form-group">
                                    <label for="rfq_message"><?php esc_html_e( 'MFI, Grade & Delivery Requirements', 'gp-theme' ); ?></label>
                                    <textarea id="rfq_message" name="message" rows="4" placeholder="Mention required Melt Flow Index (MFI), virgin or reprocessed grade, color, destination city, etc."></textarea>
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
