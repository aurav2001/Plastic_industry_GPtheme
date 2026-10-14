<?php
/**
 * Template Name: ASTM Testing Laboratory Page
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// 1. Elementor Pro Theme Builder Single/Page Location
if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'single' ) ) {
    return;
}

// 2. Elementor Fullwidth Auto-Handling:
// If this page was edited/built with Elementor, or is currently in Elementor preview/editor mode
if ( function_exists( 'gp_is_elementor_active_on_page' ) && gp_is_elementor_active_on_page() ) {
    get_header();
    ?>
    <main id="primary" class="site-main gp-elementor-content-wrapper" style="width:100%; max-width:100%; padding:0; margin:0;">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </main>
    <?php
    get_footer();
    return;
}

get_header();

$phone     = get_theme_mod( 'gp_company_phone', '+91-8591585497' );
$clean_tel = preg_replace( '/[^0-9]/', '', $phone );
?>

<main id="primary" class="site-main gp-testing-page">

    <!-- ========================================================================= -->
    <!-- 1. HERO BANNER                                                            -->
    <!-- ========================================================================= -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php esc_html_e( 'IN-HOUSE ACCREDITED POLYMER LABORATORY', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php esc_html_e( 'ASTM & ISO Quality Testing Lab', 'gp-theme' ); ?></h1>
                <p class="gp-page-banner-desc">
                    <?php esc_html_e( 'Every polymer compounding lot produced at SRS Polymer is subjected to stringent physical, rheological, and mechanical testing. Learn about our testing protocols and computerized equipment.', 'gp-theme' ); ?>
                </p>
                <?php if ( function_exists( 'gp_breadcrumbs' ) ) { gp_breadcrumbs(); } ?>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. TESTING PARAMETERS & EQUIPMENT GRID                                    -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-plastin-testing" id="testing-lab">
        <div class="gp-container">
            
            <div class="gp-section-header-plastin gp-sh-center">
                <span class="gp-section-kicker"><?php esc_html_e( 'RIGOROUS BATCH VERIFICATION', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title-clean"><?php esc_html_e( '6 Key Testing Parameters & Instruments', 'gp-theme' ); ?></h2>
                <p class="gp-section-sub-clean gp-sub-center">
                    <?php esc_html_e( 'Each polymer shipment is accompanied by a certified Batch Certificate of Analysis (COA) guaranteeing zero variation in production runs.', 'gp-theme' ); ?>
                </p>
            </div>

            <!-- Testing Parameters Grid (6 Parameters) -->
            <div class="gp-testing-grid-plastin">
                
                <!-- 1. MFI Testing -->
                <div class="gp-test-card">
                    <div class="gp-test-card-top">
                        <span class="gp-test-standard">ASTM D1238 / ISO 1133</span>
                        <div class="gp-test-icon-badge">MFI</div>
                    </div>
                    <h3 class="gp-test-title"><?php esc_html_e( 'Melt Flow Index (MFI)', 'gp-theme' ); ?></h3>
                    <p class="gp-test-desc"><?php esc_html_e( 'Precision computerized MFI tester measuring exact melt mass-flow rate to guarantee consistent flow in injection and extrusion dies.', 'gp-theme' ); ?></p>
                    <div class="gp-test-meta">
                        <span><?php esc_html_e( 'Equipment:', 'gp-theme' ); ?> <strong>Digital Extrusion Plastometer</strong></span>
                    </div>
                </div>

                <!-- 2. Tensile & UTM -->
                <div class="gp-test-card">
                    <div class="gp-test-card-top">
                        <span class="gp-test-standard">ASTM D638 / ISO 527</span>
                        <div class="gp-test-icon-badge">UTM</div>
                    </div>
                    <h3 class="gp-test-title"><?php esc_html_e( 'Tensile & Flexural Strength', 'gp-theme' ); ?></h3>
                    <p class="gp-test-desc"><?php esc_html_e( 'Universal Testing Machine (UTM) measuring tensile yield, elongation at break, and 3-point flexural bending modulus.', 'gp-theme' ); ?></p>
                    <div class="gp-test-meta">
                        <span><?php esc_html_e( 'Equipment:', 'gp-theme' ); ?> <strong>Microprocessor UTM (50 kN)</strong></span>
                    </div>
                </div>

                <!-- 3. Izod Impact -->
                <div class="gp-test-card">
                    <div class="gp-test-card-top">
                        <span class="gp-test-standard">ASTM D256 / ISO 180</span>
                        <div class="gp-test-icon-badge">IZOD</div>
                    </div>
                    <h3 class="gp-test-title"><?php esc_html_e( 'Izod & Charpy Impact Test', 'gp-theme' ); ?></h3>
                    <p class="gp-test-desc"><?php esc_html_e( 'Pendulum impact testing on notched test specimens to measure fracture toughness and cold resistance down to -20°C.', 'gp-theme' ); ?></p>
                    <div class="gp-test-meta">
                        <span><?php esc_html_e( 'Equipment:', 'gp-theme' ); ?> <strong>Motorized Izod Impact Tester</strong></span>
                    </div>
                </div>

                <!-- 4. Ash & Filler Content -->
                <div class="gp-test-card">
                    <div class="gp-test-card-top">
                        <span class="gp-test-standard">ASTM D5630 / ISO 3451</span>
                        <div class="gp-test-icon-badge">ASH</div>
                    </div>
                    <h3 class="gp-test-title"><?php esc_html_e( 'Ash & Mineral Filler %', 'gp-theme' ); ?></h3>
                    <p class="gp-test-desc"><?php esc_html_e( 'High-temperature muffle furnace up to 1000°C verifying precise glass fiber, talc, and calcium carbonate percentage.', 'gp-theme' ); ?></p>
                    <div class="gp-test-meta">
                        <span><?php esc_html_e( 'Equipment:', 'gp-theme' ); ?> <strong>Programmed Muffle Furnace</strong></span>
                    </div>
                </div>

                <!-- 5. Specific Gravity & Density -->
                <div class="gp-test-card">
                    <div class="gp-test-card-top">
                        <span class="gp-test-standard">ASTM D792 / ISO 1183</span>
                        <div class="gp-test-icon-badge">DENS</div>
                    </div>
                    <h3 class="gp-test-title"><?php esc_html_e( 'Specific Gravity & Density', 'gp-theme' ); ?></h3>
                    <p class="gp-test-desc"><?php esc_html_e( 'Electronic immersion balance checking material purity, buoyancy, and displacement density with 4 decimal accuracy.', 'gp-theme' ); ?></p>
                    <div class="gp-test-meta">
                        <span><?php esc_html_e( 'Equipment:', 'gp-theme' ); ?> <strong>Digital Densimeter (0.0001 g/cm³)</strong></span>
                    </div>
                </div>

                <!-- 6. Spectrophotometer Color Matching -->
                <div class="gp-test-card">
                    <div class="gp-test-card-top">
                        <span class="gp-test-standard">CIE L*a*b* / ASTM E1347</span>
                        <div class="gp-test-icon-badge">COLOR</div>
                    </div>
                    <h3 class="gp-test-title"><?php esc_html_e( 'Color Matching (Delta E < 0.5)', 'gp-theme' ); ?></h3>
                    <p class="gp-test-desc"><?php esc_html_e( 'Dual-beam spectrophotometer guaranteeing identical color hue across repeating production batches for OEM parts.', 'gp-theme' ); ?></p>
                    <div class="gp-test-meta">
                        <span><?php esc_html_e( 'Equipment:', 'gp-theme' ); ?> <strong>X-Rite Color Spectrophotometer</strong></span>
                    </div>
                </div>

            </div>

            <!-- 4-Step Lab Testing Flow -->
            <div class="gp-testing-flow-box" style="margin-top: 50px; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 36px 30px;">
                <h3 style="font-size: 1.35rem; font-weight: 800; color: #0b2545; margin-bottom: 24px; text-align: center;"><?php esc_html_e( 'Our Standard 4-Step Quality Control Protocol', 'gp-theme' ); ?></h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
                    <div style="padding: 20px; background: #f8fafc; border-radius: 12px; border-left: 4px solid #0097db;">
                        <span style="font-size: 0.8rem; font-weight: 800; color: #0097db; text-transform: uppercase;">Step 01</span>
                        <h4 style="font-size: 1.05rem; font-weight: 700; color: #0b2545; margin: 8px 0 6px;">Raw Material Screening</h4>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.5; margin: 0;">Spectroscopy & moisture analysis on all virgin resin and pre-sorted post-industrial feedstocks before compounding.</p>
                    </div>
                    <div style="padding: 20px; background: #f8fafc; border-radius: 12px; border-left: 4px solid #0097db;">
                        <span style="font-size: 0.8rem; font-weight: 800; color: #0097db; text-transform: uppercase;">Step 02</span>
                        <h4 style="font-size: 1.05rem; font-weight: 700; color: #0b2545; margin: 8px 0 6px;">In-Line Compounding Control</h4>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.5; margin: 0;">Continuous melt temperature and pressure monitoring across 10 heating zones in German twin-screw extruders.</p>
                    </div>
                    <div style="padding: 20px; background: #f8fafc; border-radius: 12px; border-left: 4px solid #0097db;">
                        <span style="font-size: 0.8rem; font-weight: 800; color: #0097db; text-transform: uppercase;">Step 03</span>
                        <h4 style="font-size: 1.05rem; font-weight: 700; color: #0b2545; margin: 8px 0 6px;">Sample Test Moulding</h4>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.5; margin: 0;">ASTM test specimens moulded in-house to verify tensile yield, Izod impact, flexural modulus, and heat deflection.</p>
                    </div>
                    <div style="padding: 20px; background: #f8fafc; border-radius: 12px; border-left: 4px solid #0097db;">
                        <span style="font-size: 0.8rem; font-weight: 800; color: #0097db; text-transform: uppercase;">Step 04</span>
                        <h4 style="font-size: 1.05rem; font-weight: 700; color: #0b2545; margin: 8px 0 6px;">Batch COA Authorization</h4>
                        <p style="font-size: 0.88rem; color: #64748b; line-height: 1.5; margin: 0;">Formal sign-off by Quality Assurance Head. Sealed pallet labels with QR code linking directly to batch test results.</p>
                    </div>
                </div>
            </div>

            <!-- Lab Action Strip -->
            <div class="gp-lab-coa-strip" style="margin-top: 40px;">
                <div class="gp-coa-text">
                    <strong><?php esc_html_e( 'Need a Lot-Specific Certificate of Analysis (COA)?', 'gp-theme' ); ?></strong>
                    <span><?php esc_html_e( 'Download standard batch COA or request custom testing on your polymer sample.', 'gp-theme' ); ?></span>
                </div>
                <div class="gp-coa-actions">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gp-btn gp-btn-primary gp-rfq-modal-trigger" data-product="Certificate of Analysis (COA)">
                        <span><?php esc_html_e( 'Request Batch COA Report', 'gp-theme' ); ?></span>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();
