<?php
/**
 * Template Name: Industries & Applications Page
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

$phone     = get_theme_mod( 'gp_company_phone', '+91-8591585497' );
$clean_tel = preg_replace( '/[^0-9]/', '', $phone );
?>

<main id="primary" class="site-main gp-industries-page">

    <!-- ========================================================================= -->
    <!-- 1. HERO BANNER                                                            -->
    <!-- ========================================================================= -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php esc_html_e( 'MARKET SECTORS & APPLICATIONS', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php esc_html_e( 'Industries Powered By Our Polymer Dana', 'gp-theme' ); ?></h1>
                <p class="gp-page-banner-desc">
                    <?php esc_html_e( 'From automotive Tier-1 moulding and electrical appliances to rigid packaging and irrigation pipes, SRS Polymer formulations power critical end-use sectors across PAN-India.', 'gp-theme' ); ?>
                </p>
                <?php if ( function_exists( 'gp_breadcrumbs' ) ) { gp_breadcrumbs(); } ?>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. INDUSTRIES MATRIX                                                      -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-plastin-industries" id="market-sectors">
        <div class="gp-container">
            
            <div class="gp-section-header-plastin gp-sh-center">
                <span class="gp-section-kicker"><?php esc_html_e( 'END-USE CAPABILITIES', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title-clean"><?php esc_html_e( 'High-Precision Polymers For Demanding Sectors', 'gp-theme' ); ?></h2>
                <p class="gp-section-sub-clean gp-sub-center">
                    <?php esc_html_e( 'Engineered for high melt stability, mold release efficiency, and defect-free finishes at competitive bulk prices.', 'gp-theme' ); ?>
                </p>
            </div>

            <div class="gp-plastin-ind-grid" style="margin-top: 36px;">
                
                <div class="gp-pind-card">
                    <div class="gp-pind-icon">🚗</div>
                    <h3 class="gp-pind-title"><?php esc_html_e( 'Automotive & EV Components', 'gp-theme' ); ?></h3>
                    <p class="gp-pind-desc"><?php esc_html_e( 'PPCP battery containers, 20% / 30% glass-filled PP radiator fan shrouds, ABS interior trims, door latches, and under-the-hood brackets.', 'gp-theme' ); ?></p>
                    <span class="gp-pind-grades"><?php esc_html_e( 'Recommended Grades:', 'gp-theme' ); ?> PPCP High Impact, PP 30% GF, ABS Engineering</span>
                </div>

                <div class="gp-pind-card">
                    <div class="gp-pind-icon">⚡</div>
                    <h3 class="gp-pind-title"><?php esc_html_e( 'Electrical & White Goods', 'gp-theme' ); ?></h3>
                    <p class="gp-pind-desc"><?php esc_html_e( 'UL94 V-0 flame-retardant ABS switchboards, PVC cable compounding, talc-filled PP washing machine tubs, and refrigerator liner extrusions.', 'gp-theme' ); ?></p>
                    <span class="gp-pind-grades"><?php esc_html_e( 'Recommended Grades:', 'gp-theme' ); ?> ABS Flame Retardant, PP Talc Filled, PVC Wire Compound</span>
                </div>

                <div class="gp-pind-card">
                    <div class="gp-pind-icon">📦</div>
                    <h3 class="gp-pind-title"><?php esc_html_e( 'Rigid Packaging & Chemical Drums', 'gp-theme' ); ?></h3>
                    <p class="gp-pind-desc"><?php esc_html_e( 'High environmental stress crack resistance (ESCR) HDPE for 200L L-ring drums, 50L chemical jerricans, lubricant jugs, and bottle caps.', 'gp-theme' ); ?></p>
                    <span class="gp-pind-grades"><?php esc_html_e( 'Recommended Grades:', 'gp-theme' ); ?> HDPE Blow Moulding, PP Random Copolymer</span>
                </div>

                <div class="gp-pind-card">
                    <div class="gp-pind-icon">🚰</div>
                    <h3 class="gp-pind-title"><?php esc_html_e( 'Pipes, Fittings & Agriculture', 'gp-theme' ); ?></h3>
                    <p class="gp-pind-desc"><?php esc_html_e( 'PE-100 & PE-80 certified HDPE compounds for high-pressure potable water pipes, drip irrigation lateral tubes, and rigid PVC drainage elbows.', 'gp-theme' ); ?></p>
                    <span class="gp-pind-grades"><?php esc_html_e( 'Recommended Grades:', 'gp-theme' ); ?> HDPE Pipe Grade, PVC Rigid Fitting Compound</span>
                </div>

                <div class="gp-pind-card">
                    <div class="gp-pind-icon">🪑</div>
                    <h3 class="gp-pind-title"><?php esc_html_e( 'Moulded Furniture & Logistics Crates', 'gp-theme' ); ?></h3>
                    <p class="gp-pind-desc"><?php esc_html_e( 'High-rigidity PP homopolymer and recycled PP dana for monobloc chairs, milk crates, heavy-duty industrial warehouse pallets, and collapsible bins.', 'gp-theme' ); ?></p>
                    <span class="gp-pind-grades"><?php esc_html_e( 'Recommended Grades:', 'gp-theme' ); ?> PP Injection Grade, Reprocessed Black & Color Dana</span>
                </div>

                <div class="gp-pind-card">
                    <div class="gp-pind-icon">👜</div>
                    <h3 class="gp-pind-title"><?php esc_html_e( 'Raffia & Woven Packaging', 'gp-theme' ); ?></h3>
                    <p class="gp-pind-desc"><?php esc_html_e( 'High-tenacity PP raffia compounds for zero tape breakages during high-speed extrusion weaving of cement sacks, sugar bags, and FIBC jumbo liners.', 'gp-theme' ); ?></p>
                    <span class="gp-pind-grades"><?php esc_html_e( 'Recommended Grades:', 'gp-theme' ); ?> PP Raffia Dana, Calcium Carbonate Masterbatch</span>
                </div>

            </div>

            <!-- Material Selection Help Box -->
            <div class="gp-custom-compounding-box" style="margin-top: 50px;">
                <div class="gp-cc-content">
                    <span class="gp-cc-pill"><?php esc_html_e( 'Custom Material Formulation', 'gp-theme' ); ?></span>
                    <h3 class="gp-cc-title"><?php esc_html_e( 'Need Polymer Material Recommendation For Your Specific Moulding Tool?', 'gp-theme' ); ?></h3>
                    <p class="gp-cc-desc"><?php esc_html_e( 'Our application engineers provide comprehensive tooling feasibility studies, melt viscosity recommendations, and free trial material batches.', 'gp-theme' ); ?></p>
                </div>
                <div class="gp-cc-actions">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gp-btn gp-btn-primary gp-rfq-modal-trigger" data-product="Application Consulting">
                        <span><?php esc_html_e( 'Talk to Polymer Specialist', 'gp-theme' ); ?></span>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();
