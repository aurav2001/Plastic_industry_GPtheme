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
?>

<main id="primary" class="site-main">

    <!-- Hero Banner -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php esc_html_e( 'DISCOVER OUR HERITAGE', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php esc_html_e( 'About SRS Polymer Industries', 'gp-theme' ); ?></h1>
                <?php gp_breadcrumbs(); ?>
            </div>
        </div>
    </section>

    <!-- Company Profile & Story -->
    <section class="gp-section gp-section-about-full">
        <div class="gp-container">
            <div class="gp-about-grid">
                
                <div class="gp-about-content">
                    <span class="gp-sub-tag"><?php esc_html_e( '25+ YEARS OF DEDICATION', 'gp-theme' ); ?></span>
                    <h2 class="gp-section-title"><?php esc_html_e( 'Polymer Compounding & Processing Excellence', 'gp-theme' ); ?></h2>
                    
                    <p class="gp-lead-text">
                        <?php esc_html_e( 'SRS Polymer Industries is a premier manufacturer, processor, and distributor of virgin and reprocessed plastic granules (plastic dana), engineering polymers, and specialty masterbatches in India.', 'gp-theme' ); ?>
                    </p>

                    <p class="gp-body-text">
                        <?php esc_html_e( 'With modern twin-screw compounding extruders and computerized Melt Flow Index (MFI) testing equipment, we supply high-tonnage injection moulders, blow moulding units, pipe extrusion plants, and raffia sack manufacturers with dependable raw materials at wholesale rates.', 'gp-theme' ); ?>
                    </p>

                    <div class="gp-highlight-box">
                        <div class="gp-highlight-icon">🎖️</div>
                        <div class="gp-highlight-text">
                            <strong><?php esc_html_e( 'Mission & Quality Commitment', 'gp-theme' ); ?></strong>
                            <p><?php esc_html_e( 'To empower plastic manufacturers across India with zero-defect, uniform polymer dana that optimizes machine cycle times and lowers production costs.', 'gp-theme' ); ?></p>
                        </div>
                    </div>
                </div>

                <div class="gp-about-visual">
                    <div class="gp-stats-card-group">
                        <div class="gp-mini-stat-card">
                            <span class="gp-mini-stat-num">50,000+</span>
                            <span class="gp-mini-stat-label"><?php esc_html_e( 'MT Annual Polymer Capacity', 'gp-theme' ); ?></span>
                        </div>
                        <div class="gp-mini-stat-card">
                            <span class="gp-mini-stat-num">1200+</span>
                            <span class="gp-mini-stat-label"><?php esc_html_e( 'B2B Manufacturers Supplied', 'gp-theme' ); ?></span>
                        </div>
                        <div class="gp-mini-stat-card">
                            <span class="gp-mini-stat-num">50+</span>
                            <span class="gp-mini-stat-label"><?php esc_html_e( 'Polymer Dana Grades', 'gp-theme' ); ?></span>
                        </div>
                        <div class="gp-mini-stat-card">
                            <span class="gp-mini-stat-num">100%</span>
                            <span class="gp-mini-stat-label"><?php esc_html_e( 'Computerized Lab Batch Tested', 'gp-theme' ); ?></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Manufacturing Infrastructure Highlights -->
    <section class="gp-section gp-section-services" style="background:#f8fafc;">
        <div class="gp-container">
            <div class="gp-section-header gp-text-center">
                <span class="gp-sub-tag"><?php esc_html_e( 'INFRASTRUCTURE & ADVANCED MACHINERY', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'State-of-the-Art Plant Capabilities', 'gp-theme' ); ?></h2>
            </div>

            <div class="gp-services-grid">
                <div class="gp-service-card">
                    <h3 class="gp-service-title"><?php esc_html_e( 'High-Output Extrusion Blow Lines', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc"><?php esc_html_e( 'Continuous and accumulator head extrusion blow moulding machines capable of processing 100ml to 250 Litre containers with wall-thickness parison programming.', 'gp-theme' ); ?></p>
                </div>
                <div class="gp-service-card">
                    <h3 class="gp-service-title"><?php esc_html_e( 'Microprocessor Injection Presses', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc"><?php esc_html_e( 'Tonnage range from 80 Tons up to 1200 Tons with automated robotic take-out arms, In-Mould Labelling (IML) stations, and hot runner tooling.', 'gp-theme' ); ?></p>
                </div>
                <div class="gp-service-card">
                    <h3 class="gp-service-title"><?php esc_html_e( 'Defence UAV Composite Cleanrooms', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc"><?php esc_html_e( 'Specialized climate-controlled composite prepreg lamination, autoclave curing, and avionics testing cleanrooms for military drone production.', 'gp-theme' ); ?></p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
