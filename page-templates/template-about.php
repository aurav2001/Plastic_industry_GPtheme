<?php
/**
 * Template Name: About Us Page
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

$phone     = get_theme_mod( 'gp_company_phone', '+91-8591585497' );
$clean_tel = preg_replace( '/[^0-9]/', '', $phone );
$wa_num    = get_theme_mod( 'gp_wa_number', '918591585497' );
?>

<main id="primary" class="site-main gp-about-page">

    <!-- ========================================================================= -->
    <!-- 1. HERO BANNER                                                            -->
    <!-- ========================================================================= -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php esc_html_e( '25+ YEARS OF POLYMER EXCELLENCE', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php esc_html_e( 'About SRS Polymer Industries', 'gp-theme' ); ?></h1>
                <p class="gp-page-banner-desc">
                    <?php esc_html_e( 'India’s trusted manufacturer, compounder, and wholesale supplier of virgin and reprocessed plastic granules (plastic dana) engineered for injection moulding, blow moulding, and extrusion.', 'gp-theme' ); ?>
                </p>
                <?php gp_breadcrumbs(); ?>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. EXECUTIVE STORY & HERITAGE                                             -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-about-story-section" id="vision">
        <div class="gp-container">
            <div class="gp-about-story-grid">
                
                <!-- Story Left Content -->
                <div class="gp-about-story-text">
                    <span class="gp-sub-tag"><?php esc_html_e( 'OUR HERITAGE & JOURNEY', 'gp-theme' ); ?></span>
                    <h2 class="gp-section-title"><?php esc_html_e( 'Engineering Consistency In Every Polymer Pellet', 'gp-theme' ); ?></h2>
                    
                    <p class="gp-lead-text">
                        <?php esc_html_e( 'Established in 1999, SRS Polymer Industries has grown from a humble single-line compounding unit into a state-of-the-art polymer manufacturing enterprise with an annual compounding capacity exceeding 50,000 Metric Tonnes.', 'gp-theme' ); ?>
                    </p>

                    <p class="gp-body-text">
                        <?php esc_html_e( 'We specialize in formulating, compounding, and delivering prime virgin granules and high-grade reprocessed plastic dana (PP, HDPE, LDPE, ABS, PVC) alongside specialized color masterbatches. Our materials serve over 1,200 moulding and extrusion manufacturers across India, optimizing their cycle times and drastically lowering raw material overheads.', 'gp-theme' ); ?>
                    </p>

                    <div class="gp-about-points-list">
                        <div class="gp-point-item">
                            <span class="gp-point-icon">✓</span>
                            <div>
                                <strong><?php esc_html_e( 'Strict Melt Flow Index (MFI) Control', 'gp-theme' ); ?></strong>
                                <p><?php esc_html_e( 'Batch-by-batch ASTM testing ensures zero melt variation on your injection moulding and extrusion machines.', 'gp-theme' ); ?></p>
                            </div>
                        </div>
                        <div class="gp-point-item">
                            <span class="gp-point-icon">✓</span>
                            <div>
                                <strong><?php esc_html_e( 'Washed & Filtered Reprocessed Polymers', 'gp-theme' ); ?></strong>
                                <p><?php esc_html_e( 'Triple-stage melt filtration removes all particulate impurities for smooth, streak-free surface finishes.', 'gp-theme' ); ?></p>
                            </div>
                        </div>
                        <div class="gp-point-item">
                            <span class="gp-point-icon">✓</span>
                            <div>
                                <strong><?php esc_html_e( 'Direct Factory Pricing & 25kg Bulk Bags', 'gp-theme' ); ?></strong>
                                <p><?php esc_html_e( 'Moisture-barrier 25kg poly bags and prompt dispatch across Delhi-NCR, Rajasthan, Haryana, and Pan-India.', 'gp-theme' ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Story Right Visual Card -->
                <div class="gp-about-story-visual">
                    <div class="gp-director-card">
                        <div class="gp-director-badge">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                            <span><?php esc_html_e( 'ISO 9001:2015 Certified Company', 'gp-theme' ); ?></span>
                        </div>
                        <blockquote class="gp-director-quote">
                            "<?php esc_html_e( 'Our core philosophy is simple: delivering uniform melt consistency and zero-impurity plastic dana so moulders achieve faster machine cycles, fewer rejections, and higher profitability.', 'gp-theme' ); ?>"
                        </blockquote>
                        <div class="gp-director-footer">
                            <div class="gp-director-info">
                                <h4><?php esc_html_e( 'SRS Polymer Leadership Team', 'gp-theme' ); ?></h4>
                                <span><?php esc_html_e( 'Plant Operations & Compounding Specialists', 'gp-theme' ); ?></span>
                            </div>
                            <div class="gp-plant-seal">
                                <span class="gp-seal-txt"><?php esc_html_e( '100% QUALITY TESTED', 'gp-theme' ); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="gp-about-feature-box">
                        <div class="gp-feature-row">
                            <div class="gp-feature-item">
                                <span class="gp-feature-title"><?php esc_html_e( 'Plant Location', 'gp-theme' ); ?></span>
                                <span class="gp-feature-val"><?php esc_html_e( 'Delhi-NCR & Bhiwadi', 'gp-theme' ); ?></span>
                            </div>
                            <div class="gp-feature-item">
                                <span class="gp-feature-title"><?php esc_html_e( 'Packaging', 'gp-theme' ); ?></span>
                                <span class="gp-feature-val"><?php esc_html_e( '25 Kg Laminated Bags', 'gp-theme' ); ?></span>
                            </div>
                            <div class="gp-feature-item">
                                <span class="gp-feature-title"><?php esc_html_e( 'Granule Size', 'gp-theme' ); ?></span>
                                <span class="gp-feature-val"><?php esc_html_e( '2.5mm - 3mm Pellets', 'gp-theme' ); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. LIVE ANIMATED STATS BAR                                                -->
    <!-- ========================================================================= -->
    <section class="gp-stats-bar gp-about-stats-bar">
        <div class="gp-container">
            <div class="gp-stats-grid">
                
                <div class="gp-stat-item">
                    <div class="gp-stat-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    </div>
                    <div class="gp-stat-info">
                        <div class="gp-stat-number"><span class="gp-counter" data-target="50000">0</span><span class="gp-plus">+</span></div>
                        <h4 class="gp-stat-title"><?php esc_html_e( 'MT Annual Capacity', 'gp-theme' ); ?></h4>
                        <p class="gp-stat-desc"><?php esc_html_e( 'High-tonnage twin-screw compounding output', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-stat-item">
                    <div class="gp-stat-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <div class="gp-stat-info">
                        <div class="gp-stat-number"><span class="gp-counter" data-target="1200">0</span><span class="gp-plus">+</span></div>
                        <h4 class="gp-stat-title"><?php esc_html_e( 'B2B Moulders Supplied', 'gp-theme' ); ?></h4>
                        <p class="gp-stat-desc"><?php esc_html_e( 'Injection & blow moulding partners across India', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-stat-item">
                    <div class="gp-stat-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="gp-stat-info">
                        <div class="gp-stat-number"><span class="gp-counter" data-target="50">0</span><span class="gp-plus">+</span></div>
                        <h4 class="gp-stat-title"><?php esc_html_e( 'Polymer Formulations', 'gp-theme' ); ?></h4>
                        <p class="gp-stat-desc"><?php esc_html_e( 'PP, HDPE, ABS, PVC & custom masterbatches', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-stat-item">
                    <div class="gp-stat-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                    </div>
                    <div class="gp-stat-info">
                        <div class="gp-stat-number"><span class="gp-counter" data-target="25">0</span><span class="gp-plus">+</span></div>
                        <h4 class="gp-stat-title"><?php esc_html_e( 'Years Industry Trust', 'gp-theme' ); ?></h4>
                        <p class="gp-stat-desc"><?php esc_html_e( 'Consistent compounding excellence since 1999', 'gp-theme' ); ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. CORE PILLARS & VALUE PROPOSITION                                      -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-about-pillars-section">
        <div class="gp-container">
            <div class="gp-section-header gp-text-center">
                <span class="gp-sub-tag"><?php esc_html_e( 'OUR COMPETITIVE EDGE', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'Why Plastic Manufacturers Choose SRS Polymer', 'gp-theme' ); ?></h2>
                <p class="gp-section-subtitle">
                    <?php esc_html_e( 'From raw polymer sorting to microscopic pelletizing, we build consistency into every granule.', 'gp-theme' ); ?>
                </p>
            </div>

            <div class="gp-about-pillars-grid">
                
                <div class="gp-about-pillar-card">
                    <div class="gp-pillar-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </div>
                    <h3><?php esc_html_e( 'Cost-Effective Dana', 'gp-theme' ); ?></h3>
                    <p><?php esc_html_e( 'Reduce your raw material costs by 25% to 40% without compromising tensile strength, impact resistance, or surface finish.', 'gp-theme' ); ?></p>
                    <span class="gp-pillar-tag"><?php esc_html_e( 'Economic Advantage', 'gp-theme' ); ?></span>
                </div>

                <div class="gp-about-pillar-card">
                    <div class="gp-pillar-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                    </div>
                    <h3><?php esc_html_e( 'Zero MFI Variation', 'gp-theme' ); ?></h3>
                    <p><?php esc_html_e( 'Computerized melt flow indexing guarantees that every consignment runs seamlessly without needing constant barrel temperature adjustments.', 'gp-theme' ); ?></p>
                    <span class="gp-pillar-tag"><?php esc_html_e( 'MFI Consistency', 'gp-theme' ); ?></span>
                </div>

                <div class="gp-about-pillar-card">
                    <div class="gp-pillar-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    </div>
                    <h3><?php esc_html_e( 'Sustainable Recycling', 'gp-theme' ); ?></h3>
                    <p><?php esc_html_e( 'Eco-compliant closed-loop recycling processes turning post-industrial polymer scrap into high-performance engineering granules.', 'gp-theme' ); ?></p>
                    <span class="gp-pillar-tag"><?php esc_html_e( 'Circular Economy', 'gp-theme' ); ?></span>
                </div>

                <div class="gp-about-pillar-card">
                    <div class="gp-pillar-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                    </div>
                    <h3><?php esc_html_e( 'Ready Stock & Dispatch', 'gp-theme' ); ?></h3>
                    <p><?php esc_html_e( 'Extensive warehousing maintaining 5,000+ MT buffer stock ensuring same-day dispatch for Delhi-NCR and prompt transport across India.', 'gp-theme' ); ?></p>
                    <span class="gp-pillar-tag"><?php esc_html_e( 'Fast Logistics', 'gp-theme' ); ?></span>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. PLANT INFRASTRUCTURE & MACHINERY                                       -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-about-infra-section" id="infrastructure">
        <div class="gp-container">
            <div class="gp-section-header gp-text-center">
                <span class="gp-sub-tag"><?php esc_html_e( 'MANUFACTURING CAPACITY', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'Our Compounding Infrastructure', 'gp-theme' ); ?></h2>
                <p class="gp-section-subtitle">
                    <?php esc_html_e( 'Engineered with high-tonnage compounding lines, automated gravimetric feeders, and multi-mesh hydraulic screen changers.', 'gp-theme' ); ?>
                </p>
            </div>

            <div class="gp-infra-grid">
                
                <div class="gp-infra-card">
                    <div class="gp-infra-badge">01</div>
                    <h3 class="gp-infra-title"><?php esc_html_e( 'Co-Rotating Twin-Screw Extruders', 'gp-theme' ); ?></h3>
                    <p class="gp-infra-desc">
                        <?php esc_html_e( 'High-torque intermeshing twin-screw compounding lines with multiple vacuum degassing zones. Capable of thorough dispersion of mineral fillers (talc/calcium), impact modifiers, and color pigments.', 'gp-theme' ); ?>
                    </p>
                    <ul class="gp-infra-features">
                        <li><span>✓</span> <?php esc_html_e( 'L/D Ratio: 44:1 for optimal homogenization', 'gp-theme' ); ?></li>
                        <li><span>✓</span> <?php esc_html_e( 'Loss-in-weight gravimetric loss feeders', 'gp-theme' ); ?></li>
                        <li><span>✓</span> <?php esc_html_e( 'Continuous hydraulic dual-piston screen changers', 'gp-theme' ); ?></li>
                    </ul>
                </div>

                <div class="gp-infra-card">
                    <div class="gp-infra-badge">02</div>
                    <h3 class="gp-infra-title"><?php esc_html_e( 'Strand & Water-Ring Pelletizers', 'gp-theme' ); ?></h3>
                    <p class="gp-infra-desc">
                        <?php esc_html_e( 'Automated hot-face water ring and cold-strand pelletizers producing uniform 2.5mm - 3mm spherical and cylindrical granules with zero dust or oversize agglomerates.', 'gp-theme' ); ?>
                    </p>
                    <ul class="gp-infra-features">
                        <li><span>✓</span> <?php esc_html_e( 'Centrifugal dewatering & vibro-classifiers', 'gp-theme' ); ?></li>
                        <li><span>✓</span> <?php esc_html_e( 'Even pellet sizing for stable hopper feed', 'gp-theme' ); ?></li>
                        <li><span>✓</span> <?php esc_html_e( 'Air-conveyed cooling to automatic bagging bins', 'gp-theme' ); ?></li>
                    </ul>
                </div>

                <div class="gp-infra-card">
                    <div class="gp-infra-badge">03</div>
                    <h3 class="gp-infra-title"><?php esc_html_e( 'High-Speed Henschel Mixers', 'gp-theme' ); ?></h3>
                    <p class="gp-infra-desc">
                        <?php esc_html_e( 'Heavy-duty thermokinetic mixers delivering rapid friction-blending of pigments, UV stabilizers, anti-oxidants, and polymer carrier resins for custom masterbatches.', 'gp-theme' ); ?>
                    </p>
                    <ul class="gp-infra-features">
                        <li><span>✓</span> <?php esc_html_e( 'Streak-free colorant and TiO2 dispersion', 'gp-theme' ); ?></li>
                        <li><span>✓</span> <?php esc_html_e( 'Anti-blocking and slip additive premixing', 'gp-theme' ); ?></li>
                        <li><span>✓</span> <?php esc_html_e( 'Custom RAL & Pantone shade compounding', 'gp-theme' ); ?></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. QUALITY TESTING LAB STANDARDS                                         -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-about-lab-section" id="lab">
        <div class="gp-container">
            <div class="gp-section-header gp-text-center">
                <span class="gp-sub-tag"><?php esc_html_e( 'CERTIFIED TESTING FACILITY', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'Quality Control & Lab Standards', 'gp-theme' ); ?></h2>
                <p class="gp-section-subtitle">
                    <?php esc_html_e( 'Every polymer lot undergoes mandatory ASTM and ISO testing in our in-house lab before receiving dispatch approval.', 'gp-theme' ); ?>
                </p>
            </div>

            <div class="gp-lab-grid">
                
                <div class="gp-lab-card">
                    <div class="gp-lab-header">
                        <span class="gp-lab-std">ASTM D1238 / ISO 1133</span>
                        <h4><?php esc_html_e( 'Melt Flow Index (MFI)', 'gp-theme' ); ?></h4>
                    </div>
                    <p><?php esc_html_e( 'Digital melt flow indexing at 190°C & 230°C under 2.16kg and 5kg loads to confirm precise rheology for injection or blow processing.', 'gp-theme' ); ?></p>
                </div>

                <div class="gp-lab-card">
                    <div class="gp-lab-header">
                        <span class="gp-lab-std">ASTM D792 / ISO 1183</span>
                        <h4><?php esc_html_e( 'Specific Gravity & Density', 'gp-theme' ); ?></h4>
                    </div>
                    <p><?php esc_html_e( 'High-accuracy immersion densitometer testing ensuring true resin purity and zero filler deviation across polymer grades.', 'gp-theme' ); ?></p>
                </div>

                <div class="gp-lab-card">
                    <div class="gp-lab-header">
                        <span class="gp-lab-std">ASTM D256 / ISO 180</span>
                        <h4><?php esc_html_e( 'Izod & Charpy Impact', 'gp-theme' ); ?></h4>
                    </div>
                    <p><?php esc_html_e( 'Notched impact resistance testing verifying toughness and drop-impact resistance for heavy containers and automotive components.', 'gp-theme' ); ?></p>
                </div>

                <div class="gp-lab-card">
                    <div class="gp-lab-header">
                        <span class="gp-lab-std">ASTM D638 / ISO 527</span>
                        <h4><?php esc_html_e( 'Tensile & Elongation', 'gp-theme' ); ?></h4>
                    </div>
                    <p><?php esc_html_e( 'Universal tensile testing machine measuring ultimate tensile strength, yield stress, and percentage elongation at break.', 'gp-theme' ); ?></p>
                </div>

                <div class="gp-lab-card">
                    <div class="gp-lab-header">
                        <span class="gp-lab-std">ASTM D5630 / ISO 3451</span>
                        <h4><?php esc_html_e( 'Ash & Filler Content', 'gp-theme' ); ?></h4>
                    </div>
                    <p><?php esc_html_e( 'High-temperature muffle furnace ashing to precisely verify mineral filler loading (calcium carbonate, talc, glass fiber).', 'gp-theme' ); ?></p>
                </div>

                <div class="gp-lab-card">
                    <div class="gp-lab-header">
                        <span class="gp-lab-std">Karl Fischer / Halogen</span>
                        <h4><?php esc_html_e( 'Moisture Content (<0.05%)', 'gp-theme' ); ?></h4>
                    </div>
                    <p><?php esc_html_e( 'Halogen moisture analyzer verifying low moisture levels to eliminate splay marks, bubbles, and silver streaking during molding.', 'gp-theme' ); ?></p>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. COMPANY TIMELINE / MILESTONES                                         -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-about-timeline-section">
        <div class="gp-container">
            <div class="gp-section-header gp-text-center">
                <span class="gp-sub-tag"><?php esc_html_e( 'THE ROAD TO EXCELLENCE', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'Our Evolution: 1999 to 2026', 'gp-theme' ); ?></h2>
            </div>

            <div class="gp-timeline-wrapper">
                
                <div class="gp-timeline-item">
                    <div class="gp-timeline-year">1999</div>
                    <div class="gp-timeline-dot"></div>
                    <div class="gp-timeline-content">
                        <h4><?php esc_html_e( 'Founded in Delhi-NCR', 'gp-theme' ); ?></h4>
                        <p><?php esc_html_e( 'Started initial processing operations supplying basic LDPE and PP reprocessed dana to local bucket and container manufacturers.', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-timeline-item">
                    <div class="gp-timeline-year">2008</div>
                    <div class="gp-timeline-dot"></div>
                    <div class="gp-timeline-content">
                        <h4><?php esc_html_e( 'Twin-Screw Compounding Facility', 'gp-theme' ); ?></h4>
                        <p><?php esc_html_e( 'Installed our first high-torque twin-screw extrusion line, pioneering precision MFI blending for high-speed automated injection moulding.', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-timeline-item">
                    <div class="gp-timeline-year">2016</div>
                    <div class="gp-timeline-dot"></div>
                    <div class="gp-timeline-content">
                        <h4><?php esc_html_e( 'ASTM Certified Testing Lab', 'gp-theme' ); ?></h4>
                        <p><?php esc_html_e( 'Commissioned computerized melt flow indexing, densitometers, and spectrometer color matching systems to offer guaranteed batch consistency.', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-timeline-item">
                    <div class="gp-timeline-year">2021</div>
                    <div class="gp-timeline-dot"></div>
                    <div class="gp-timeline-content">
                        <h4><?php esc_html_e( 'Crossed 35,000 MT/Year Output', 'gp-theme' ); ?></h4>
                        <p><?php esc_html_e( 'Expanded manufacturing footprints across Bhiwadi and Delhi-NCR with dedicated lines for ABS engineering pellets and PVC compounding.', 'gp-theme' ); ?></p>
                    </div>
                </div>

                <div class="gp-timeline-item">
                    <div class="gp-timeline-year">2026</div>
                    <div class="gp-timeline-dot"></div>
                    <div class="gp-timeline-content">
                        <h4><?php esc_html_e( '50,000+ MT Sustainable Circular Hub', 'gp-theme' ); ?></h4>
                        <p><?php esc_html_e( 'Operating as a premier multi-polymer compounding center serving 1,200+ clients with automated bagging and Pan-India logistics.', 'gp-theme' ); ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 8. ABOUT PAGE CTA STRIP                                                   -->
    <!-- ========================================================================= -->
    <section class="gp-cta-strip">
        <div class="gp-container">
            <div class="gp-cta-strip-card">
                <div class="gp-cta-strip-text">
                    <span class="gp-tag-pill"><?php esc_html_e( 'SAMPLE BAGS AVAILABLE', 'gp-theme' ); ?></span>
                    <h3><?php esc_html_e( 'Looking for High-Consistency Plastic Dana for Your Moulding Machines?', 'gp-theme' ); ?></h3>
                    <p><?php esc_html_e( 'Test our PP, HDPE, ABS, and PVC granules on your own production floor. We provide 25kg sample bags and comprehensive lab test reports.', 'gp-theme' ); ?></p>
                </div>
                <div class="gp-cta-strip-actions">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gp-btn gp-btn-light gp-btn-lg">
                        <span><?php esc_html_e( 'Request Sample / Quote', 'gp-theme' ); ?></span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="https://wa.me/<?php echo esc_attr( $wa_num ); ?>?text=Hello%20SRS%20Polymer,%20I%20would%20like%20to%20know%20more%20about%20your%20plastic%20granules." target="_blank" rel="noopener" class="gp-btn gp-btn-glass gp-btn-lg">
                        <span><?php esc_html_e( 'WhatsApp Us Directly', 'gp-theme' ); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
