<?php
/**
 * The template for displaying the front page - Plastin-Style Clean B2B Polymer Layout
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// 1. Elementor Pro Theme Builder Single/Front Page Location
if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'single' ) ) {
    return;
}

// 2. Elementor Fullwidth Auto-Handling:
// If the front page is built with Elementor or currently in Elementor editor/preview mode
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

// Fetch default fallback data

$default_products     = gp_get_default_products();
$default_industries   = gp_get_default_industries();
$default_clients      = gp_get_default_clients();
$default_certificates = gp_get_default_certificates();
$default_news         = gp_get_default_news();
?>

<main id="primary" class="site-main gp-plastin-layout">

    <!-- ========================================================================= -->
    <!-- 1. PLASTIN-STYLE CLEAN B2B HERO SECTION (SPLIT LAYOUT)                   -->
    <!-- ========================================================================= -->
    <!-- ========================================================================= -->
    <!-- 1. DYNAMIC HIGH-TECH HERO SLIDER (MAZEDAR MULTI-SLIDE & QUOTATION DESK)    -->
    <!-- ========================================================================= -->
    <section class="gp-hero gp-hero-slider-section" id="home">
        <div class="gp-hero-slider" id="gp-hero-slider">

            <!-- SLIDE 1: Prime Virgin & Recycled Polymer Granules (Dana) -->
            <div class="gp-hero-slide gp-slide-active" data-slide="0">
                <div class="gp-hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-slide-granules.jpg' ); ?>');"></div>
                <div class="gp-hero-overlay"></div>
                <div class="gp-container gp-hero-content-wrapper">
                    <div class="gp-hero-slide-content gp-hero-slide-anim">
                        <div class="gp-hero-badge-clean">
                            <span class="gp-badge-dot-green"></span>
                            <span class="gp-badge-text"><?php esc_html_e( 'ISO 9001:2015 Certified Polymer Compounder & Exporter', 'gp-theme' ); ?></span>
                        </div>

                        <h1 class="gp-plastin-hero-title">
                            <?php esc_html_e( 'High-Performance Virgin & Reprocessed', 'gp-theme' ); ?><br>
                            <span class="gp-title-highlight"><?php esc_html_e( 'Plastic Granules (Dana)', 'gp-theme' ); ?></span>
                        </h1>

                        <p class="gp-plastin-hero-lead">
                            <?php esc_html_e( 'Direct compounding mill supply of PPCP, PP Glass Filled, HDPE Blow/Pipe, ABS Pellets, and custom PVC Compounds. Batch-tested for exact Melt Flow Index (MFI), tensile strength, and zero-impurity consistency.', 'gp-theme' ); ?>
                        </p>

                        <!-- Key Spec Chips -->
                        <div class="gp-hero-spec-chips">
                            <span class="gp-spec-chip">✓ <strong>2,500+ MT</strong> Monthly Capacity</span>
                            <span class="gp-spec-chip">✓ <strong>ASTM Tested</strong> Lab with COA</span>
                            <span class="gp-spec-chip">✓ <strong>12 Twin-Screw</strong> Extrusion Lines</span>
                            <span class="gp-spec-chip">✓ <strong>Free Trial Sample</strong> Approval</span>
                        </div>

                        <!-- Action CTAs -->
                        <div class="gp-hero-actions-group">
                            <a href="#products" class="gp-btn gp-btn-primary gp-btn-lg">
                                <span><?php esc_html_e( 'Browse Polymer Grades', 'gp-theme' ); ?></span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            <a href="#contact" class="gp-btn gp-btn-secondary gp-btn-lg gp-rfq-modal-trigger">
                                <span><?php esc_html_e( 'Request Free Sample Bag', 'gp-theme' ); ?></span>
                            </a>
                            <a href="https://wa.me/918591585497?text=Hi%20SRS%20Polymer,%20I%20need%20a%20quotation%20for%20Plastic%20Dana" target="_blank" rel="noopener" class="gp-btn gp-btn-wa-hero">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.698.077-2.226-.554-1.849-.763-3.045-2.645-3.136-2.768-.093-.122-.751-.998-.751-1.905s.475-1.353.645-1.537c.17-.184.372-.23.496-.23.125 0 .25.002.359.007.116.006.27-.044.423.324.156.376.533 1.302.579 1.397.046.095.077.206.015.328-.061.122-.093.199-.185.306-.092.108-.194.24-.277.323-.092.093-.188.194-.081.378.107.183.475.784 1.021 1.269.704.628 1.297.822 1.482.914.184.092.293.076.4-.046.107-.123.461-.537.584-.72.123-.184.247-.153.415-.092.17.062 1.077.508 1.262.6.184.093.308.138.354.215.046.077.046.452-.098.857z"/></svg>
                                <span><?php esc_html_e( 'WhatsApp RFQ', 'gp-theme' ); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2: In-House Testing Laboratory & Batch Consistency -->
            <div class="gp-hero-slide" data-slide="1">
                <div class="gp-hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-slide-plastics.jpg' ); ?>');"></div>
                <div class="gp-hero-overlay"></div>
                <div class="gp-container gp-hero-content-wrapper">
                    <div class="gp-hero-slide-content gp-hero-slide-anim">
                        <div class="gp-hero-badge-clean">
                            <span class="gp-badge-dot-cyan"></span>
                            <span class="gp-badge-text"><?php esc_html_e( 'ASTM & ISO Precision Laboratory Testing', 'gp-theme' ); ?></span>
                        </div>

                        <h2 class="gp-plastin-hero-title">
                            <?php esc_html_e( 'In-House Testing & Guaranteed', 'gp-theme' ); ?><br>
                            <span class="gp-title-highlight" style="color: #00b4d8;"><?php esc_html_e( 'MFI & Tensile Batch Consistency', 'gp-theme' ); ?></span>
                        </h2>

                        <p class="gp-plastin-hero-lead">
                            <?php esc_html_e( 'Zero-ash impurity virgin & customized polymer pellets. Batch-tested for exact Melt Flow Index (ASTM D1238), Tensile Modulus (ASTM D638), Charpy Impact, and Spectrophotometer Delta E < 0.5 color accuracy.', 'gp-theme' ); ?>
                        </p>

                        <div class="gp-hero-spec-chips">
                            <span class="gp-spec-chip">✓ <strong>ASTM D1238</strong> MFI Plastometer</span>
                            <span class="gp-spec-chip">✓ <strong>50 kN UTM</strong> Tensile Testing</span>
                            <span class="gp-spec-chip">✓ <strong>-20°C Charpy</strong> Impact Toughness</span>
                            <span class="gp-spec-chip">✓ <strong>COA Certificate</strong> With Every Lot</span>
                        </div>

                        <div class="gp-hero-actions-group">
                            <a href="#testing" class="gp-btn gp-btn-primary gp-btn-lg" style="background: #0097db; border-color: #0097db;">
                                <span><?php esc_html_e( 'Explore ASTM Lab Standards', 'gp-theme' ); ?></span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            <a href="#contact" class="gp-btn gp-btn-secondary gp-btn-lg gp-rfq-modal-trigger">
                                <span><?php esc_html_e( 'Request Lot COA Report', 'gp-theme' ); ?></span>
                            </a>
                            <a href="#certificates" class="gp-btn gp-btn-text" style="color: #38bdf8;">
                                <span><?php esc_html_e( 'View Accreditations', 'gp-theme' ); ?> →</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 3: Custom Compounding & OEM Supply -->
            <div class="gp-hero-slide" data-slide="2">
                <div class="gp-hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-slide-sustainable.jpg' ); ?>');"></div>
                <div class="gp-hero-overlay"></div>
                <div class="gp-container gp-hero-content-wrapper">
                    <div class="gp-hero-slide-content gp-hero-slide-anim">
                        <div class="gp-hero-badge-clean">
                            <span class="gp-badge-dot-green"></span>
                            <span class="gp-badge-text"><?php esc_html_e( 'Custom Formulations & OEM Compounding', 'gp-theme' ); ?></span>
                        </div>

                        <h2 class="gp-plastin-hero-title">
                            <?php esc_html_e( 'Custom Polymer Compounding for', 'gp-theme' ); ?><br>
                            <span class="gp-title-highlight" style="color: #2ec4b6;"><?php esc_html_e( 'Automotive & Industrial OEM', 'gp-theme' ); ?></span>
                        </h2>

                        <p class="gp-plastin-hero-lead">
                            <?php esc_html_e( 'Specialized high-impact PPCP, PP 20% Glass Filled, UV-stabilized HDPE Blow grade, and flame-retardant ABS compounds tailored for high-speed injection and blow moulding cycles.', 'gp-theme' ); ?>
                        </p>

                        <div class="gp-hero-spec-chips">
                            <span class="gp-spec-chip">✓ <strong>Automotive PPCP</strong> Battery &amp; Bumpers</span>
                            <span class="gp-spec-chip">✓ <strong>HDPE Blow Grade</strong> 200L Drums</span>
                            <span class="gp-spec-chip">✓ <strong>Engineering ABS</strong> High-Gloss Pellets</span>
                            <span class="gp-spec-chip">✓ <strong>Custom Colors</strong> Exact RAL Shade</span>
                        </div>

                        <div class="gp-hero-actions-group">
                            <a href="#contact" class="gp-btn gp-btn-primary gp-btn-lg gp-rfq-modal-trigger" style="background:#2ec4b6; border-color:#2ec4b6;">
                                <span><?php esc_html_e( 'Request Custom Formulation', 'gp-theme' ); ?></span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </a>
                            <a href="#products" class="gp-btn gp-btn-secondary gp-btn-lg">
                                <span><?php esc_html_e( 'Browse All Grades', 'gp-theme' ); ?></span>
                            </a>
                            <a href="#story" class="gp-btn gp-btn-text" style="color: #2ec4b6;">
                                <span><?php esc_html_e( 'Compounding Infrastructure', 'gp-theme' ); ?> →</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Slider Navigation Controls (Glassmorphic Arrows) -->
        <button class="gp-hero-nav-btn gp-hero-nav-prev" id="gp-prev-hero" aria-label="<?php esc_attr_e( 'Previous Slide', 'gp-theme' ); ?>">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
        </button>
        <button class="gp-hero-nav-btn gp-hero-nav-next" id="gp-next-hero" aria-label="<?php esc_attr_e( 'Next Slide', 'gp-theme' ); ?>">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </button>

        <!-- Slide Progress Pagination Strip -->
        <div class="gp-hero-slider-pagination">
            <div class="gp-container gp-pagination-flex">
                <div class="gp-slider-counter">
                    <span class="gp-curr-slide-num">01</span> / <span class="gp-total-slide-num">03</span>
                </div>
                <div class="gp-slider-bullets-group">
                    <button class="gp-indicator active" data-index="0" aria-label="Slide 1">
                        <span class="gp-ind-bar"><span class="gp-ind-fill"></span></span>
                        <span class="gp-ind-label"><?php esc_html_e( 'Plastic Dana', 'gp-theme' ); ?></span>
                    </button>
                    <button class="gp-indicator" data-index="1" aria-label="Slide 2">
                        <span class="gp-ind-bar"><span class="gp-ind-fill"></span></span>
                        <span class="gp-ind-label"><?php esc_html_e( 'ASTM Lab & MFI', 'gp-theme' ); ?></span>
                    </button>
                    <button class="gp-indicator" data-index="2" aria-label="Slide 3">
                        <span class="gp-ind-bar"><span class="gp-ind-fill"></span></span>
                        <span class="gp-ind-label"><?php esc_html_e( 'Compounding & OEM', 'gp-theme' ); ?></span>
                    </button>
                </div>
            </div>
        </div>

    </section>


    <!-- ========================================================================= -->
    <!-- 2B. LATEST PRODUCTS SHOWCASE (PLASTIN-STYLE MOLECULAR POLYMER GRID)       -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-latest-products" id="latest-products">
        <div class="gp-container">

            <!-- Plastin Signature Title with Dual Underline -->
            <div class="gp-latest-header-center">
                <h2 class="gp-latest-title">
                    <span class="gp-lt-dark"><?php esc_html_e( 'Latest', 'gp-theme' ); ?></span>
                    <span class="gp-lt-accent"><?php esc_html_e( 'Products', 'gp-theme' ); ?></span>
                </h2>
                <div class="gp-latest-title-divider">
                    <span class="gp-ltd-dark"></span>
                    <span class="gp-ltd-accent"></span>
                </div>
                <p class="gp-latest-subtitle">
                    <?php esc_html_e( 'Prime Virgin & Compounded Polymer Granules for Industrial Injection & Blow Moulding', 'gp-theme' ); ?>
                </p>
            </div>

            <!-- 5-Column Responsive Product Showcase Grid -->
            <div class="gp-latest-products-grid">
                <?php
                $latest_products = array(
                    array(
                        'slug'        => 'ppcp-grey',
                        'name'        => 'PPCP Grey Granules',
                        'grade'       => 'MFI: 10 – 12',
                        'app'         => 'Automotive & Battery Cases',
                        'image'       => 'assets/images/granules-ppcp-grey.jpg',
                        'badge'       => 'Automotive',
                        'badge_color' => '#0097db',
                    ),
                    array(
                        'slug'        => 'ppcp-impact',
                        'name'        => 'PPCP Impact Copolymer Granules',
                        'grade'       => 'High Izod Impact',
                        'app'         => 'Auto Bumpers & Industrial Parts',
                        'image'       => 'assets/images/granules-natural-white.jpg',
                        'badge'       => 'High Impact',
                        'badge_color' => '#10b981',
                    ),
                    array(
                        'slug'        => 'ppcp-black',
                        'name'        => 'PPCP Black Granules',
                        'grade'       => 'Carbon Black Compound',
                        'app'         => 'Industrial Logistics Crates',
                        'image'       => 'assets/images/granules-ppcp-black.jpg',
                        'badge'       => 'Crate Grade',
                        'badge_color' => '#0b2545',
                    ),
                    array(
                        'slug'        => 'pp-talc',
                        'name'        => 'PP Talc Filled Granules',
                        'grade'       => '20% – 40% Mineral Filled',
                        'app'         => 'Appliance Bodies & Tubs',
                        'image'       => 'assets/images/granules-talc-filled.jpg',
                        'badge'       => 'Compounded',
                        'badge_color' => '#6366f1',
                    ),
                    array(
                        'slug'        => 'polypropylene-natural-white',
                        'name'        => 'Polypropylene Natural White Granules',
                        'grade'       => 'Prime Homopolymer',
                        'app'         => 'Household Bins & Furniture',
                        'image'       => 'assets/images/granules-natural-white.jpg',
                        'badge'       => 'Virgin Grade',
                        'badge_color' => '#0097db',
                    ),
                    array(
                        'slug'        => 'polypropylene-glass-filled',
                        'name'        => 'Polypropylene Glass Filled Granules',
                        'grade'       => '10% – 30% GF Compounded',
                        'app'         => 'Under-the-hood & Power Tools',
                        'image'       => 'assets/images/granules-glass-filled.jpg',
                        'badge'       => 'Glass Reinforced',
                        'badge_color' => '#059669',
                    ),
                    array(
                        'slug'        => 'abs-white',
                        'name'        => 'ABS White Granules',
                        'grade'       => 'High Rigidity & Whiteness',
                        'app'         => 'Electronics & Home Appliances',
                        'image'       => 'assets/images/granules-pp-milky-white.jpg',
                        'badge'       => 'High Gloss',
                        'badge_color' => '#0891b2',
                    ),
                    array(
                        'slug'        => 'red-pmma',
                        'name'        => 'Red PMMA Granules',
                        'grade'       => 'UV Stabilized Ruby Red',
                        'app'         => 'Auto Tail Lights & Signals',
                        'image'       => 'assets/images/granules-red-pmma.jpg',
                        'badge'       => 'Optical Grade',
                        'badge_color' => '#dc2626',
                    ),
                    array(
                        'slug'        => 'acrylic-granules',
                        'name'        => 'Acrylic Granules',
                        'grade'       => '92% Light Transmission',
                        'app'         => 'Optical Lenses, Signs & Displays',
                        'image'       => 'assets/images/granules-clear-transparent.jpg',
                        'badge'       => 'Crystal Clear',
                        'badge_color' => '#7c3aed',
                    ),
                    array(
                        'slug'        => 'nylon-black',
                        'name'        => 'Nylon Black Granules',
                        'grade'       => 'High Wear & Thermal Rating',
                        'app'         => 'Gears, Bushings & Fasteners',
                        'image'       => 'assets/images/granules-nylon-black.jpg',
                        'badge'       => 'Polyamide 6/66',
                        'badge_color' => '#1e293b',
                    ),
                    array(
                        'slug'        => 'nylon-white',
                        'name'        => 'Nylon White Granules',
                        'grade'       => 'Virgin Polyamide Pellets',
                        'app'         => 'Monofilament, Zip Ties & Industrial',
                        'image'       => 'assets/images/granules-natural-white.jpg',
                        'badge'       => 'Natural PA6',
                        'badge_color' => '#2563eb',
                    ),
                    array(
                        'slug'        => 'abs-black',
                        'name'        => 'ABS Black Granules',
                        'grade'       => 'High Impact & Chemical Resistance',
                        'app'         => 'Automotive Trims & Helmets',
                        'image'       => 'assets/images/granules-ppcp-black.jpg',
                        'badge'       => 'Engineering Grade',
                        'badge_color' => '#0f172a',
                    ),
                    array(
                        'slug'        => 'abs-fr-granules',
                        'name'        => 'ABS FR Plastic Granules',
                        'grade'       => 'UL94 V-0 Self Extinguishing',
                        'app'         => 'Switchgear, Meter Boxes & EV Chargers',
                        'image'       => 'assets/images/granules-abs-fr.jpg',
                        'badge'       => 'Flame Retardant V0',
                        'badge_color' => '#ea580c',
                    ),
                );

                foreach ( $latest_products as $prod ) : 
                    $detail_url = esc_url( home_url( '/product-detail.html?product=' . $prod['slug'] ) );
                ?>
                    <div class="gp-latest-product-card">
                        <div class="gp-lp-shape-wrap">
                            <div class="gp-lp-shape-hex">
                                <div class="gp-lp-shape-inner">
                                    <img src="<?php echo esc_url( get_theme_file_uri( $prod['image'] ) ); ?>" 
                                         alt="<?php echo esc_attr( $prod['name'] ); ?>" 
                                         loading="lazy">
                                    <div class="gp-lp-overlay-action">
                                        <a href="<?php echo $detail_url; ?>" class="gp-lp-action-btn gp-lp-view-btn" title="<?php esc_attr_e( 'View Details & Specs', 'gp-theme' ); ?>">
                                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        </a>
                                        <a href="#contact" class="gp-lp-action-btn gp-lp-quote-btn gp-rfq-modal-trigger" data-product="<?php echo esc_attr( $prod['name'] ); ?>" title="<?php esc_attr_e( 'Request Mill Price', 'gp-theme' ); ?>">
                                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <span class="gp-lp-floating-badge" style="background: <?php echo esc_attr( $prod['badge_color'] ); ?>;">
                                <?php echo esc_html( $prod['badge'] ); ?>
                            </span>
                        </div>

                        <div class="gp-latest-product-info">
                            <h3 class="gp-lp-title">
                                <a href="<?php echo $detail_url; ?>" title="<?php esc_attr_e( 'View Details', 'gp-theme' ); ?>">
                                    <?php echo esc_html( $prod['name'] ); ?>
                                </a>
                            </h3>
                            <span class="gp-lp-spec"><?php echo esc_html( $prod['grade'] ); ?></span>
                            <span class="gp-lp-app"><?php echo esc_html( $prod['app'] ); ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Bottom Quick Formulation Help Bar -->
            <div class="gp-latest-cta-bar">
                <span><?php esc_html_e( 'Looking for custom MFI, UV-stabilized, or color-compounded masterbatch dana?', 'gp-theme' ); ?></span>
                <a href="#contact" class="gp-btn gp-btn-primary gp-btn-sm gp-rfq-modal-trigger" data-product="Custom Polymer Compounding Formulation">
                    <span><?php esc_html_e( 'Get Instant Factory Quotation', 'gp-theme' ); ?> →</span>
                </a>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- ========================================================================= -->
    <!-- 3. SINGLE-ROW AUTO-SLIDING ENGINEERED POLYMER PRODUCT CARDS                -->
    <!-- ========================================================================= -->
    <style>
        .gp-single-row-products-section {
            padding: 55px 0 65px;
            background: linear-gradient(180deg, #f4f8fc 0%, #ffffff 100%);
            position: relative;
            overflow: hidden;
        }
        .gp-spec-marquee-wrapper {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding: 16px 0 24px;
            mask-image: linear-gradient(to right, transparent, black 2.5%, black 97.5%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 2.5%, black 97.5%, transparent);
        }
        .gp-spec-marquee-track {
            display: flex !important;
            flex-direction: row !important;
            flex-wrap: nowrap !important;
            width: max-content !important;
            gap: 22px !important;
            animation: gpSpecMarquee 36s linear infinite !important;
            padding: 12px 6px !important;
            will-change: transform;
        }
        .gp-spec-marquee-wrapper:hover .gp-spec-marquee-track {
            animation-play-state: paused !important;
        }
        @keyframes gpSpecMarquee {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-50% - 11px));
            }
        }
        .gp-spec-marquee-track .gp-plastin-product-card {
            flex: 0 0 320px !important;
            width: 320px !important;
            min-width: 320px !important;
            max-width: 320px !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: space-between !important;
            box-sizing: border-box !important;
            white-space: normal !important;
            background: #ffffff !important;
            border: 1px solid rgba(0, 151, 219, 0.22) !important;
            border-radius: 16px !important;
            box-shadow: 0 10px 28px rgba(11, 37, 69, 0.08) !important;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease !important;
            margin: 0 !important;
            position: relative !important;
            overflow: hidden !important;
        }
        .gp-spec-marquee-track .gp-plastin-product-card:hover {
            transform: translateY(-8px) scale(1.02) !important;
            border-color: #0097db !important;
            box-shadow: 0 20px 45px rgba(0, 151, 219, 0.22) !important;
            z-index: 10;
        }
        .gp-spec-marquee-track .gp-pcard-badge {
            position: absolute !important;
            top: 12px !important;
            left: 12px !important;
            z-index: 6 !important;
            background: linear-gradient(135deg, #0b2545 0%, #0097db 100%) !important;
            color: #ffffff !important;
            font-size: 0.72rem !important;
            font-weight: 800 !important;
            letter-spacing: 0.04em !important;
            padding: 4px 10px !important;
            border-radius: 999px !important;
            box-shadow: 0 4px 12px rgba(11, 37, 69, 0.35) !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
        }
        .gp-spec-marquee-track .gp-pcard-badge.gp-badge-accent {
            background: linear-gradient(135deg, #ef233c 0%, #d90429 100%) !important;
        }
        .gp-spec-marquee-track .gp-pcard-media {
            position: relative !important;
            width: 100% !important;
            height: 160px !important;
            overflow: hidden !important;
            background: #e2e8f0 !important;
            margin: 0 !important;
            border-radius: 16px 16px 0 0 !important;
        }
        .gp-spec-marquee-track .gp-pcard-media img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
            display: block !important;
            transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1) !important;
        }
        .gp-spec-marquee-track .gp-plastin-product-card:hover .gp-pcard-media img {
            transform: scale(1.08) !important;
        }
        .gp-spec-marquee-track .gp-pcard-body {
            padding: 16px 16px 18px !important;
            display: flex !important;
            flex-direction: column !important;
            flex-grow: 1 !important;
            background: #ffffff !important;
        }
        .gp-spec-marquee-track .gp-pcard-cat {
            font-size: 0.7rem !important;
            font-weight: 700 !important;
            text-transform: uppercase !important;
            letter-spacing: 0.05em !important;
            color: #0097db !important;
            margin-bottom: 4px !important;
        }
        .gp-spec-marquee-track .gp-pcard-title {
            font-size: 1.02rem !important;
            font-weight: 700 !important;
            color: #0b2545 !important;
            line-height: 1.35 !important;
            margin: 0 0 6px 0 !important;
            min-height: 2.7em !important;
            display: -webkit-box !important;
            -webkit-line-clamp: 2 !important;
            -webkit-box-orient: vertical !important;
            overflow: hidden !important;
        }
        .gp-spec-marquee-track .gp-pcard-title a {
            color: #0b2545 !important;
            text-decoration: none !important;
            transition: color 0.2s ease !important;
        }
        .gp-spec-marquee-track .gp-pcard-title a:hover {
            color: #0097db !important;
        }
        .gp-spec-marquee-track .gp-pcard-desc {
            font-size: 0.8rem !important;
            color: #64748b !important;
            line-height: 1.45 !important;
            margin: 0 0 12px 0 !important;
            min-height: 2.9em !important;
            display: -webkit-box !important;
            -webkit-line-clamp: 2 !important;
            -webkit-box-orient: vertical !important;
            overflow: hidden !important;
        }
        .gp-spec-marquee-track .gp-pcard-specs-table {
            background: #f8fafc !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 8px !important;
            padding: 8px 10px !important;
            margin-bottom: 14px !important;
            display: flex !important;
            flex-direction: column !important;
            gap: 5px !important;
        }
        .gp-spec-marquee-track .gp-spec-row {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
            font-size: 0.74rem !important;
            line-height: 1.3 !important;
        }
        .gp-spec-marquee-track .gp-spec-name {
            color: #64748b !important;
            font-weight: 500 !important;
        }
        .gp-spec-marquee-track .gp-spec-val {
            color: #0b2545 !important;
            font-weight: 700 !important;
            text-align: right !important;
        }
        .gp-spec-marquee-track .gp-pcard-footer {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            gap: 8px !important;
            margin-top: auto !important;
            padding-top: 10px !important;
            border-top: 1px solid #f1f5f9 !important;
        }
        .gp-spec-marquee-track .gp-btn-pcard-quote {
            flex: 1 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 6px !important;
            padding: 8px 12px !important;
            font-size: 0.8rem !important;
            font-weight: 700 !important;
            color: #ffffff !important;
            background: #0b2545 !important;
            border: none !important;
            border-radius: 6px !important;
            cursor: pointer !important;
            transition: background 0.2s ease !important;
        }
        .gp-spec-marquee-track .gp-btn-pcard-quote:hover {
            background: #0097db !important;
        }
        .gp-spec-marquee-track .gp-btn-tds-link {
            padding: 7px 10px !important;
            font-size: 0.78rem !important;
            font-weight: 600 !important;
            color: #0097db !important;
            text-decoration: none !important;
            border: 1px solid rgba(0, 151, 219, 0.3) !important;
            border-radius: 6px !important;
            white-space: nowrap !important;
            transition: all 0.2s ease !important;
        }
        .gp-spec-marquee-track .gp-btn-tds-link:hover {
            background: #0097db !important;
            color: #ffffff !important;
        }
        .gp-marquee-controls-strip {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 16px;
        }
        .gp-marquee-status-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(0, 151, 219, 0.08);
            border: 1px solid rgba(0, 151, 219, 0.25);
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 0.78rem;
            font-weight: 700;
            color: #0097db;
            letter-spacing: 0.02em;
        }
        .gp-marquee-status-pill .gp-live-dot {
            width: 8px;
            height: 8px;
            background: #10b981;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.25);
            animation: gpPulseDot 1.6s infinite ease-in-out;
        }
        .gp-marquee-ctrl-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            border: 1px solid rgba(0, 151, 219, 0.3);
            background: #ffffff;
            color: #0097db;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .gp-marquee-ctrl-btn:hover {
            background: #0097db;
            color: #ffffff;
        }
        @keyframes gpPulseDot {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.3); opacity: 0.7; }
        }
    </style>

    <section class="gp-section gp-single-row-products-section" id="products">
        <div class="gp-container">
            
            <div class="gp-section-header-plastin">
                <div class="gp-marquee-controls-strip">
                    <div>
                        <span class="gp-section-kicker"><?php esc_html_e( 'B2B POLYMER SPECIFICATIONS', 'gp-theme' ); ?></span>
                        <h2 class="gp-section-title-clean"><?php esc_html_e( 'Engineered Polymer Granules & Compounds', 'gp-theme' ); ?></h2>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                        <span class="gp-marquee-status-pill">
                            <span class="gp-live-dot"></span>
                            <span id="gpMarqueeStatusText"><?php esc_html_e( 'Auto-Sliding • Hover to Pause', 'gp-theme' ); ?></span>
                        </span>
                        <button type="button" class="gp-marquee-ctrl-btn" id="gpMarqueeToggle" title="<?php esc_attr_e( 'Pause / Resume Slide', 'gp-theme' ); ?>" aria-label="Toggle Auto-Slide">
                            <svg id="gpPauseIcon" width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><rect x="6" y="4" width="4" height="16"></rect><rect x="14" y="4" width="4" height="16"></rect></svg>
                            <svg id="gpPlayIcon" width="15" height="15" viewBox="0 0 24 24" fill="currentColor" style="display: none;"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                        </button>
                        <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="gp-btn gp-btn-sm gp-btn-outline gp-btn-catalog-link">
                            <span><?php esc_html_e( 'View All 8 Products', 'gp-theme' ); ?> →</span>
                        </a>
                    </div>
                </div>
                <p class="gp-section-sub-clean">
                    <?php esc_html_e( 'Formulated for superior processability, high mechanical impact, and uniform melt flow index. Each lot is supplied with a comprehensive Laboratory Certificate of Analysis (COA).', 'gp-theme' ); ?>
                </p>
            </div>

            <?php
            $gp_spec_products = array(
                array(
                    'id'        => 1,
                    'cat_key'   => 'pp',
                    'badge'     => 'Best Seller',
                    'badge_cls' => '',
                    'image'     => 'granules-ppcp-black.jpg',
                    'cat_name'  => 'Polypropylene Compounding',
                    'title'     => 'PPCP Impact Copolymer Granules',
                    'desc'      => 'Formulated for high cold-impact strength, optimal flowability, and crack resistance. Available in Black, Grey, and Natural shades.',
                    'specs'     => array(
                        'Melt Flow Index (MFI)' => '8 – 14 g/10min',
                        'Density'               => '0.90 – 0.92 g/cm³',
                        'Izod Impact Strength'  => '85 – 110 J/m',
                        'Applications'          => 'Battery Casings, Auto Parts, Crates',
                    ),
                ),
                array(
                    'id'        => 2,
                    'cat_key'   => 'pp',
                    'badge'     => 'Engineering Grade',
                    'badge_cls' => 'gp-badge-accent',
                    'image'     => 'granules-ppcp-grey.jpg',
                    'cat_name'  => 'Reinforced Compounds',
                    'title'     => 'PP Glass Filled Granules (10% - 30% GF)',
                    'desc'      => 'Short glass fiber reinforced polypropylene offering high tensile modulus, elevated heat deflection, and dimensional stability.',
                    'specs'     => array(
                        'Glass Fiber Content'   => '10%, 20%, 30% GF',
                        'Tensile Strength'      => '60 – 85 MPa',
                        'HDT (0.45 MPa)'        => '140°C – 155°C',
                        'Applications'          => 'Automotive Under-the-Hood, Fans, Pumps',
                    ),
                ),
                array(
                    'id'        => 3,
                    'cat_key'   => 'abs',
                    'badge'     => 'High Gloss',
                    'badge_cls' => '',
                    'image'     => 'product-abs-granules.jpg',
                    'cat_name'  => 'Acrylonitrile Butadiene Styrene',
                    'title'     => 'ABS Engineering Pellets (Black & Natural)',
                    'desc'      => 'Virgin and premium reprocessed ABS granules with high surface gloss, rigid structural integrity, and flame retardancy options.',
                    'specs'     => array(
                        'Melt Flow Index'       => '15 – 25 g/10min',
                        'Density'               => '1.04 – 1.06 g/cm³',
                        'Tensile Strength'      => '42 – 50 MPa',
                        'Applications'          => 'Appliance Housings, Helmets, Toys',
                    ),
                ),
                array(
                    'id'        => 4,
                    'cat_key'   => 'hdpe',
                    'badge'     => 'Blow Moulding',
                    'badge_cls' => '',
                    'image'     => 'product-hdpe-granules.jpg',
                    'cat_name'  => 'High-Density Polyethylene',
                    'title'     => 'HDPE Granules (Blow & Pipe Grade)',
                    'desc'      => 'Engineered for exceptional environmental stress crack resistance (ESCR) and melt strength for blow drums, jerricans, and HDPE pipes.',
                    'specs'     => array(
                        'MFI (190°C/2.16kg)'    => '0.3 – 1.2 g/10min',
                        'Density'               => '0.952 – 0.958 g/cm³',
                        'ESCR (F50)'            => '> 400 Hours',
                        'Applications'          => 'Jerricans, Drums, Bottles, Drip Pipes',
                    ),
                ),
                array(
                    'id'        => 5,
                    'cat_key'   => 'pp',
                    'badge'     => 'Mineral Filled',
                    'badge_cls' => 'gp-badge-accent',
                    'image'     => 'granules-talc-filled.jpg',
                    'cat_name'  => 'Mineral Filled Compounds',
                    'title'     => 'PP Talc Filled Compounds (20% - 40%)',
                    'desc'      => 'Micronized talc-filled polypropylene for minimum mold shrinkage, high dimensional stability, and low cycle times.',
                    'specs'     => array(
                        'Talc Content'          => '20%, 30%, 40%',
                        'Flexural Modulus'      => '2200 – 3500 MPa',
                        'Shrinkage Rate'        => '0.6% – 0.9%',
                        'Applications'          => 'White Goods, AC Louvers, Dashboard Trim',
                    ),
                ),
                array(
                    'id'        => 6,
                    'cat_key'   => 'nylon',
                    'badge'     => 'Polyamide',
                    'badge_cls' => '',
                    'image'     => 'granules-natural-white.jpg',
                    'cat_name'  => 'Polyamide (PA6 / PA66)',
                    'title'     => 'Nylon 6 & 66 Pellets (Unfilled & Glass Filled)',
                    'desc'      => 'Engineering polyamide granules offering superior abrasion resistance, high tensile endurance, and continuous service temperature up to 130°C.',
                    'specs'     => array(
                        'Melting Point'         => '220°C (PA6) / 260°C (PA66)',
                        'Tensile Yield'         => '75 – 140 MPa',
                        'Water Absorption'      => '1.5% – 2.0%',
                        'Applications'          => 'Gears, Bushes, Cable Ties, Fasteners',
                    ),
                ),
                array(
                    'id'        => 7,
                    'cat_key'   => 'pvc',
                    'badge'     => 'Compounded',
                    'badge_cls' => '',
                    'image'     => 'granules-clear-transparent.jpg',
                    'cat_name'  => 'Polyvinyl Chloride Compounds',
                    'title'     => 'PVC Compounds (Wire, Cable & Moulding)',
                    'desc'      => 'Plasticized and rigid PVC granules with lead-free non-toxic stabilizer options, high electrical insulation, and flame retardance.',
                    'specs'     => array(
                        'Hardness'              => 'Shore A 55 – 95 / Shore D 75',
                        'Volume Resistivity'    => '> 10¹³ Ω·cm',
                        'Oxygen Index (LOI)'    => '> 30%',
                        'Applications'          => 'Wires, Cables, Gaskets, Shoe Soles',
                    ),
                ),
                array(
                    'id'        => 8,
                    'cat_key'   => 'pvc',
                    'badge'     => 'Masterbatch',
                    'badge_cls' => 'gp-badge-accent',
                    'image'     => 'granules-masterbatch-red.jpg',
                    'cat_name'  => 'Colorants & Functional Additives',
                    'title'     => 'Color, White, Black & UV Masterbatches',
                    'desc'      => 'High pigment dispersion masterbatches for precise shade matching, UV stabilization, anti-static properties, and optical brightness.',
                    'specs'     => array(
                        'Pigment Loading'       => '30% – 70% Dispersion',
                        'Carrier Resin'         => 'PP, PE, PS, Universal Carrier',
                        'Dosage Ratio'          => '1% – 3%',
                        'Applications'          => 'Moulding, Films, Extrusion Pipes',
                    ),
                ),
            );
            ?>

            <!-- Single Row Continuous Auto-Sliding Marquee Track -->
            <div class="gp-spec-marquee-wrapper" id="gp-spec-marquee-wrap">
                <div class="gp-spec-marquee-track" id="gpSpecTrack">
                    <?php
                    // Repeat 2 sets for completely seamless infinite auto-slide loop
                    for ( $set = 1; $set <= 2; $set++ ) :
                        foreach ( $gp_spec_products as $p ) :
                    ?>
                        <article class="gp-plastin-product-card" data-category="<?php echo esc_attr( $p['cat_key'] ); ?>">
                            <div class="gp-pcard-badge <?php echo esc_attr( $p['badge_cls'] ); ?>"><?php echo esc_html( $p['badge'] ); ?></div>
                            <div class="gp-pcard-media">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/' . $p['image'] ); ?>" alt="<?php echo esc_attr( $p['title'] ); ?>" loading="lazy">
                                <div class="gp-pcard-overlay-actions">
                                    <button type="button" class="gp-pcard-quickview-btn" data-prod-id="<?php echo esc_attr( $p['id'] ); ?>">
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                        <span><?php esc_html_e( 'Quick View', 'gp-theme' ); ?></span>
                                    </button>
                                </div>
                            </div>
                            <div class="gp-pcard-body">
                                <div class="gp-pcard-cat"><?php echo esc_html( $p['cat_name'] ); ?></div>
                                <h3 class="gp-pcard-title">
                                    <a href="#contact" class="gp-rfq-modal-trigger" data-product="<?php echo esc_attr( $p['title'] ); ?>"><?php echo esc_html( $p['title'] ); ?></a>
                                </h3>
                                <p class="gp-pcard-desc"><?php echo esc_html( $p['desc'] ); ?></p>
                                
                                <div class="gp-pcard-specs-table">
                                    <?php foreach ( $p['specs'] as $spec_k => $spec_v ) : ?>
                                        <div class="gp-spec-row">
                                            <span class="gp-spec-name"><?php echo esc_html( $spec_k ); ?>:</span>
                                            <span class="gp-spec-val"><?php echo esc_html( $spec_v ); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="gp-pcard-footer">
                                    <button type="button" class="gp-btn gp-btn-pcard-quote gp-rfq-modal-trigger" data-product="<?php echo esc_attr( $p['title'] ); ?>">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        <span><?php esc_html_e( 'Get Best Price', 'gp-theme' ); ?></span>
                                    </button>
                                    <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" class="gp-btn-tds-link"><?php esc_html_e( 'View TDS', 'gp-theme' ); ?></a>
                                </div>
                            </div>
                        </article>
                    <?php
                        endforeach;
                    endfor;
                    ?>
                </div>
            </div>

            <script>
            (function() {
                var track = document.getElementById('gpSpecTrack');
                var toggleBtn = document.getElementById('gpMarqueeToggle');
                var pauseIcon = document.getElementById('gpPauseIcon');
                var playIcon = document.getElementById('gpPlayIcon');
                var statusText = document.getElementById('gpMarqueeStatusText');
                if (track && toggleBtn) {
                    var isPaused = false;
                    toggleBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        isPaused = !isPaused;
                        if (isPaused) {
                            track.style.animationPlayState = 'paused';
                            if (pauseIcon) pauseIcon.style.display = 'none';
                            if (playIcon) playIcon.style.display = 'block';
                            if (statusText) statusText.textContent = 'Auto-Slide Paused';
                        } else {
                            track.style.animationPlayState = 'running';
                            if (pauseIcon) pauseIcon.style.display = 'block';
                            if (playIcon) playIcon.style.display = 'none';
                            if (statusText) statusText.textContent = 'Auto-Sliding • Hover to Pause';
                        }
                    });
                }
            })();
            </script>

            <!-- Bottom Custom Compounding Callout -->
            <div class="gp-custom-compounding-box">
                <div class="gp-cc-content">
                    <span class="gp-cc-pill"><?php esc_html_e( 'Custom Polymer Formulations', 'gp-theme' ); ?></span>
                    <h3 class="gp-cc-title"><?php esc_html_e( 'Need a Custom MFI, Flame Retardant, or Color Matched Compound?', 'gp-theme' ); ?></h3>
                    <p class="gp-cc-desc"><?php esc_html_e( 'Our compounding metallurgists and polymer engineers formulate custom grades tailored to your machine specs, tooling cycles, and target cost.', 'gp-theme' ); ?></p>
                </div>
                <div class="gp-cc-actions">
                    <a href="#contact" class="gp-btn gp-btn-primary gp-rfq-modal-trigger" data-product="Custom Compounding Formulation">
                        <span><?php esc_html_e( 'Request Custom Formulation', 'gp-theme' ); ?></span>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. MANUFACTURING INFRASTRUCTURE & EXTENSIONS (PLASTIN ABOUT STYLE)         -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-plastin-about" id="story">
        <div class="gp-container">
            <div class="gp-plastin-about-grid">
                
                <!-- Left: Infrastructure Visual & Counters -->
                <div class="gp-about-media-col">
                    <div class="gp-about-main-image-wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-facility.jpg' ); ?>" alt="SRS Polymer Compounding Facility" class="gp-about-facility-img" loading="lazy">
                        
                        <div class="gp-about-stat-overlay">
                            <div class="gp-stat-badge-item">
                                <span class="gp-sb-num">40+</span>
                                <span class="gp-sb-text"><?php esc_html_e( 'Years Industry Experience', 'gp-theme' ); ?></span>
                            </div>
                            <div class="gp-stat-badge-divider"></div>
                            <div class="gp-stat-badge-item">
                                <span class="gp-sb-num">2,500</span>
                                <span class="gp-sb-text"><?php esc_html_e( 'MT Monthly Dispatch', 'gp-theme' ); ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Compounding Mill Details -->
                <div class="gp-about-content-col">
                    <div class="gp-sh-top">
                        <span class="gp-section-kicker"><?php esc_html_e( 'MANUFACTURING EXCELLENCE', 'gp-theme' ); ?></span>
                        <h2 class="gp-section-title-clean"><?php esc_html_e( 'State-of-the-Art Compounding Infrastructure in Delhi-NCR', 'gp-theme' ); ?></h2>
                    </div>

                    <p class="gp-about-paragraph">
                        <?php esc_html_e( 'Shri Ram Sharnam Overseas (Green Polytech Limited) is one of North India’s premier polymer compounders and exporters. Spread across state-of-the-art facilities in Delhi-NCR and Bhiwadi, we operate 12 advanced co-rotating twin-screw extruders and automated underwater pelletizing lines.', 'gp-theme' ); ?>
                    </p>

                    <div class="gp-about-features-list">
                        <div class="gp-af-item">
                            <div class="gp-af-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                            </div>
                            <div class="gp-af-info">
                                <h4><?php esc_html_e( 'Multi-Stage Vacuum Degassing & Filtration', 'gp-theme' ); ?></h4>
                                <p><?php esc_html_e( 'Triple screen continuous melt filtration eliminating carbon specks, moisture voids, and foreign contaminants.', 'gp-theme' ); ?></p>
                            </div>
                        </div>

                        <div class="gp-af-item">
                            <div class="gp-af-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                            </div>
                            <div class="gp-af-info">
                                <h4><?php esc_html_e( 'Uniform Cylindrical Pellets (No Tails or Fines)', 'gp-theme' ); ?></h4>
                                <p><?php esc_html_e( 'Die-face and underwater cutting produces uniform 2.5mm - 3mm pellets designed for steady hopper feeding without bridge formation.', 'gp-theme' ); ?></p>
                            </div>
                        </div>

                        <div class="gp-af-item">
                            <div class="gp-af-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <div class="gp-af-info">
                                <h4><?php esc_html_e( 'PAN-India 48-Hour Ready Dispatch Fleet', 'gp-theme' ); ?></h4>
                                <p><?php esc_html_e( 'Strategically positioned buffer stocks of 500+ MT across major industrial hubs ensures your factory never faces downtime.', 'gp-theme' ); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="gp-about-action-row">
                        <a href="#contact" class="gp-btn gp-btn-primary">
                            <span><?php esc_html_e( 'Schedule Factory Visit', 'gp-theme' ); ?></span>
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                        <a href="#certificates" class="gp-btn gp-btn-outline">
                            <span><?php esc_html_e( 'View Quality Accreditations', 'gp-theme' ); ?></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. IN-HOUSE TECHNICAL TESTING LABORATORY (ASTM & ISO STANDARDS)           -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-plastin-testing" id="testing">
        <div class="gp-container">
            
            <div class="gp-section-header-plastin gp-sh-center">
                <span class="gp-section-kicker"><?php esc_html_e( 'QUALITY ASSURANCE & TESTING LAB', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title-clean"><?php esc_html_e( 'In-House Testing According to ASTM & ISO Norms', 'gp-theme' ); ?></h2>
                <p class="gp-section-sub-clean gp-sub-center">
                    <?php esc_html_e( 'Every production batch is tested across key mechanical, thermal, and rheological parameters before dispatch. A Certificate of Analysis (COA) is issued for each lot.', 'gp-theme' ); ?>
                </p>
            </div>

            <!-- Testing Parameters Grid (4 Key Highlights) -->
            <div class="gp-testing-grid-plastin" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
                
                <!-- 1. MFI Testing -->
                <div class="gp-test-card">
                    <div class="gp-test-card-top">
                        <span class="gp-test-standard">ASTM D1238 / ISO 1133</span>
                        <div class="gp-test-icon-badge">MFI</div>
                    </div>
                    <h3 class="gp-test-title"><?php esc_html_e( 'Melt Flow Index (MFI)', 'gp-theme' ); ?></h3>
                    <p class="gp-test-desc"><?php esc_html_e( 'Precision computerized MFI tester measuring exact melt mass-flow rate to guarantee consistent flow in dies.', 'gp-theme' ); ?></p>
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
                    <p class="gp-test-desc"><?php esc_html_e( 'Universal Testing Machine (UTM) measuring tensile yield, elongation at break, and 3-point bending modulus.', 'gp-theme' ); ?></p>
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
                    <p class="gp-test-desc"><?php esc_html_e( 'Pendulum impact testing on notched test specimens to measure fracture toughness and cold resistance.', 'gp-theme' ); ?></p>
                    <div class="gp-test-meta">
                        <span><?php esc_html_e( 'Equipment:', 'gp-theme' ); ?> <strong>Motorized Izod Impact Tester</strong></span>
                    </div>
                </div>

                <!-- 4. Spectrophotometer Color Matching -->
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

            <!-- Lab Action Strip with Link to Testing Page -->
            <div class="gp-lab-coa-strip">
                <div class="gp-coa-text">
                    <strong><?php esc_html_e( 'Need a Lot-Specific Certificate of Analysis (COA)?', 'gp-theme' ); ?></strong>
                    <span><?php esc_html_e( 'Download standard batch COA or explore our complete 6-instrument laboratory protocol.', 'gp-theme' ); ?></span>
                </div>
                <div class="gp-coa-actions">
                    <a href="<?php echo esc_url( home_url( '/testing/' ) ); ?>" class="gp-btn gp-btn-primary">
                        <span><?php esc_html_e( 'View Full Testing Lab & Protocols', 'gp-theme' ); ?> →</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. OFFICIAL CERTIFICATES & ACCREDITATIONS SECTION (#certificates)         -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-certificates" id="certificates">
        <div class="gp-container">

            <div class="gp-section-header-plastin gp-sh-center">
                <span class="gp-section-kicker"><?php esc_html_e( 'OFFICIAL ACCREDITATIONS', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title-clean"><?php esc_html_e( 'Quality, Safety & Environmental Certifications', 'gp-theme' ); ?></h2>
                <p class="gp-section-sub-clean gp-sub-center">
                    <?php esc_html_e( 'All manufacturing and compounding processes adhere strictly to global polymer quality frameworks, environmental guidelines, and hazardous substance directives.', 'gp-theme' ); ?>
                </p>
            </div>

            <!-- 6 Accreditations Grid -->
            <div class="gp-certificates-grid">
                <?php foreach ( $default_certificates as $cert ) : 
                    $cert_id       = isset( $cert['id'] ) ? $cert['id'] : '';
                    $cert_code     = isset( $cert['code'] ) ? $cert['code'] : '';
                    $cert_title    = isset( $cert['title'] ) ? $cert['title'] : '';
                    $cert_category = isset( $cert['category'] ) ? $cert['category'] : ( isset( $cert['status'] ) ? $cert['status'] : 'Certified' );
                    $cert_issuer   = isset( $cert['body'] ) ? $cert['body'] : ( isset( $cert['issuer'] ) ? $cert['issuer'] : 'Accredited Registrar' );
                    $cert_number   = isset( $cert['cert_no'] ) ? $cert['cert_no'] : ( isset( $cert['number'] ) ? $cert['number'] : 'Verified' );
                    $cert_validity = isset( $cert['validity'] ) ? $cert['validity'] : 'Active';
                    $cert_scope    = isset( $cert['scope'] ) ? $cert['scope'] : '';
                    $cert_color    = isset( $cert['badge_color'] ) ? $cert['badge_color'] : '#0097db';
                    $cert_points   = isset( $cert['points'] ) && is_array( $cert['points'] ) ? $cert['points'] : array();
                ?>
                    <article class="gp-certificate-card" id="<?php echo esc_attr( $cert_id ); ?>" style="--card-accent: <?php echo esc_attr( $cert_color ); ?>;">
                        <div class="gp-cert-card-header">
                            <span class="gp-cert-badge-status" style="--badge-accent: <?php echo esc_attr( $cert_color ); ?>;">
                                <?php echo esc_html( $cert_category ); ?>
                            </span>
                            <span class="gp-cert-code">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="<?php echo esc_attr( $cert_color ); ?>" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                <span><?php echo esc_html( $cert_code ); ?></span>
                            </span>
                        </div>

                        <div class="gp-cert-visual-wrap">
                            <div class="gp-cert-seal-icon" style="color: <?php echo esc_attr( $cert_color ); ?>; background: <?php echo esc_attr( $cert_color ); ?>15;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                            </div>
                            <div class="gp-cert-visual-border">
                                <span class="gp-cert-accreditation-tag"><?php echo esc_html( $cert_issuer ); ?></span>
                            </div>
                        </div>

                        <div class="gp-cert-body">
                            <h3 class="gp-cert-title"><?php echo esc_html( $cert_title ); ?></h3>
                            <p class="gp-cert-scope"><?php echo esc_html( $cert_scope ); ?></p>

                            <?php if ( ! empty( $cert_points ) ) : ?>
                            <ul class="gp-cert-points-list">
                                <?php foreach ( $cert_points as $pt ) : ?>
                                    <li>
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <span><?php echo esc_html( $pt ); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>

                            <div class="gp-cert-meta-grid">
                                <div class="gp-cert-meta-item">
                                    <span class="gp-cmi-label"><?php esc_html_e( 'Reg / Cert No:', 'gp-theme' ); ?></span>
                                    <strong class="gp-cmi-value"><?php echo esc_html( $cert_number ); ?></strong>
                                </div>
                                <div class="gp-cert-meta-item">
                                    <span class="gp-cmi-label"><?php esc_html_e( 'Valid Through:', 'gp-theme' ); ?></span>
                                    <strong class="gp-cmi-value"><?php echo esc_html( $cert_validity ); ?></strong>
                                </div>
                            </div>

                            <div class="gp-cert-actions">
                                <button type="button" 
                                        class="gp-btn-view-cert" 
                                        data-id="<?php echo esc_attr( $cert_id ); ?>"
                                        data-code="<?php echo esc_attr( $cert_code ); ?>"
                                        data-title="<?php echo esc_attr( $cert_title ); ?>"
                                        data-certno="<?php echo esc_attr( $cert_number ); ?>"
                                        data-body="<?php echo esc_attr( $cert_issuer ); ?>"
                                        data-validity="<?php echo esc_attr( $cert_validity ); ?>"
                                        data-scope="<?php echo esc_attr( $cert_scope ); ?>"
                                        data-color="<?php echo esc_attr( $cert_color ); ?>"
                                        data-cert-title="<?php echo esc_attr( $cert_title ); ?>"
                                        data-cert-code="<?php echo esc_attr( $cert_code ); ?>"
                                        data-cert-issuer="<?php echo esc_attr( $cert_issuer ); ?>"
                                        data-cert-number="<?php echo esc_attr( $cert_number ); ?>"
                                        data-cert-validity="<?php echo esc_attr( $cert_validity ); ?>"
                                        data-cert-scope="<?php echo esc_attr( $cert_scope ); ?>">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    <span><?php esc_html_e( 'View Certificate', 'gp-theme' ); ?></span>
                                </button>
                                <a href="#contact" class="gp-btn-download-cert gp-rfq-modal-trigger" data-product="Certificate Copy: <?php echo esc_attr( $cert_code ); ?>">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                    <span><?php esc_html_e( 'Request Copy', 'gp-theme' ); ?></span>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div style="text-align: center; margin-top: 32px;">
                <a href="<?php echo esc_url( home_url( '/certificates/' ) ); ?>" class="gp-btn gp-btn-outline">
                    <span><?php esc_html_e( 'View Full Regulatory Accreditations & Audits', 'gp-theme' ); ?> →</span>
                </a>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. INDUSTRIES & APPLICATION VERTICALS (#industries)                       -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-plastin-industries" id="industries">
        <div class="gp-container">
            
            <div class="gp-section-header-plastin gp-sh-center">
                <span class="gp-section-kicker"><?php esc_html_e( 'MARKET SECTORS', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title-clean"><?php esc_html_e( 'Industries Powered By Our Polymer Dana', 'gp-theme' ); ?></h2>
                <p class="gp-section-sub-clean gp-sub-center">
                    <?php esc_html_e( 'From Tier-1 automotive moulding to high-volume rigid packaging, our grades meet strict international specifications.', 'gp-theme' ); ?>
                </p>
            </div>

            <div class="gp-plastin-ind-grid">
                
                <div class="gp-pind-card">
                    <div class="gp-pind-icon">🚗</div>
                    <h3 class="gp-pind-title"><?php esc_html_e( 'Automotive & EV Parts', 'gp-theme' ); ?></h3>
                    <p class="gp-pind-desc"><?php esc_html_e( 'PPCP battery cases, PP 20% GF radiator fans, ABS door handles, dashboard clips, and bumper components.', 'gp-theme' ); ?></p>
                    <span class="gp-pind-grades"><?php esc_html_e( 'Recommended:', 'gp-theme' ); ?> PPCP, PP GF, ABS</span>
                </div>

                <div class="gp-pind-card">
                    <div class="gp-pind-icon">⚡</div>
                    <h3 class="gp-pind-title"><?php esc_html_e( 'Electrical & Appliances', 'gp-theme' ); ?></h3>
                    <p class="gp-pind-desc"><?php esc_html_e( 'Flame-retardant ABS switchplates, PVC wire insulation, PP mineral-filled washing machine tubs, and cooler bodies.', 'gp-theme' ); ?></p>
                    <span class="gp-pind-grades"><?php esc_html_e( 'Recommended:', 'gp-theme' ); ?> ABS FR, PVC, PP Talc</span>
                </div>

                <div class="gp-pind-card">
                    <div class="gp-pind-icon">📦</div>
                    <h3 class="gp-pind-title"><?php esc_html_e( 'Rigid Packaging & Drums', 'gp-theme' ); ?></h3>
                    <p class="gp-pind-desc"><?php esc_html_e( 'High-ESCR HDPE chemical jerricans, 200L L-ring drums, cosmetic bottles, and industrial logistics crates.', 'gp-theme' ); ?></p>
                    <span class="gp-pind-grades"><?php esc_html_e( 'Recommended:', 'gp-theme' ); ?> HDPE Blow, PPCP Crates</span>
                </div>

                <div class="gp-pind-card">
                    <div class="gp-pind-icon">🚰</div>
                    <h3 class="gp-pind-title"><?php esc_html_e( 'Pipes, Fittings & Agriculture', 'gp-theme' ); ?></h3>
                    <p class="gp-pind-desc"><?php esc_html_e( 'PE-100 & PE-80 pressure pipe compounds, drip irrigation lateral tubes, and rigid PVC plumbing fittings.', 'gp-theme' ); ?></p>
                    <span class="gp-pind-grades"><?php esc_html_e( 'Recommended:', 'gp-theme' ); ?> HDPE Pipe, Rigid PVC</span>
                </div>

                <div class="gp-pind-card">
                    <div class="gp-pind-icon">🪑</div>
                    <h3 class="gp-pind-title"><?php esc_html_e( 'Household & Moulded Furniture', 'gp-theme' ); ?></h3>
                    <p class="gp-pind-desc"><?php esc_html_e( 'Virgin and reprocessed PP dana for plastic chairs, storage bins, kitchenware, and industrial pallets.', 'gp-theme' ); ?></p>
                    <span class="gp-pind-grades"><?php esc_html_e( 'Recommended:', 'gp-theme' ); ?> PP Injection, Black Dana</span>
                </div>

                <div class="gp-pind-card">
                    <div class="gp-pind-icon">👜</div>
                    <h3 class="gp-pind-title"><?php esc_html_e( 'Raffia & Woven Sacks', 'gp-theme' ); ?></h3>
                    <p class="gp-pind-desc"><?php esc_html_e( 'PP raffia granules with high tenacity and low tape breakages for cement bags, sugar sacks, and FIBC jumbo bags.', 'gp-theme' ); ?></p>
                    <span class="gp-pind-grades"><?php esc_html_e( 'Recommended:', 'gp-theme' ); ?> PP Raffia, CaCO3 Filler</span>
                </div>

            </div>

            <div style="text-align: center; margin-top: 32px;">
                <a href="<?php echo esc_url( home_url( '/industries/' ) ); ?>" class="gp-btn gp-btn-primary">
                    <span><?php esc_html_e( 'View Full Industry Solutions & Technical Grades', 'gp-theme' ); ?> →</span>
                </a>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 8. VALUED CLIENTELE & OEM SUPPLY NETWORK (#clients)                       -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-clients" id="clients">
        <div class="gp-container">

            <div class="gp-section-header-plastin gp-sh-center">
                <span class="gp-section-kicker"><?php esc_html_e( 'TRUSTED BY LEADING BRANDS', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title-clean"><?php esc_html_e( 'Supplying India’s Leading Moulding & OEM Brands', 'gp-theme' ); ?></h2>
                <p class="gp-section-sub-clean gp-sub-center">
                    <?php esc_html_e( 'Over 1,200 moulding units and Tier-1 automotive manufacturers depend on SRS Polymer for daily production runs.', 'gp-theme' ); ?>
                </p>
            </div>

            <!-- Client Sector Filter Chips -->
            <div class="gp-clients-filter-wrap">
                <button type="button" class="gp-client-chip active" data-sector="all"><?php esc_html_e( 'All Sectors (12+)', 'gp-theme' ); ?></button>
                <button type="button" class="gp-client-chip" data-sector="automotive"><?php esc_html_e( 'Automotive OEM', 'gp-theme' ); ?></button>
                <button type="button" class="gp-client-chip" data-sector="electrical"><?php esc_html_e( 'Electrical & Appliances', 'gp-theme' ); ?></button>
                <button type="button" class="gp-client-chip" data-sector="packaging"><?php esc_html_e( 'Industrial Packaging', 'gp-theme' ); ?></button>
                <button type="button" class="gp-client-chip" data-sector="pipes"><?php esc_html_e( 'Pipes & Infrastructure', 'gp-theme' ); ?></button>
            </div>

            <!-- Infinite Dual Marquee Track -->
            <div class="gp-marquee-container">
                <div class="gp-marquee-track gp-track-forward" id="gp-clients-track-1">
                    <?php for ( $loop = 0; $loop < 2; $loop++ ) : ?>
                        <?php foreach ( $default_clients as $client ) : 
                            $c_sector_raw = isset( $client['sector'] ) ? strtolower( $client['sector'] ) : 'all';
                            $c_slug = 'all';
                            if ( strpos( $c_sector_raw, 'auto' ) !== false ) $c_slug = 'automotive';
                            elseif ( strpos( $c_sector_raw, 'elect' ) !== false || strpos( $c_sector_raw, 'appliance' ) !== false ) $c_slug = 'electrical';
                            elseif ( strpos( $c_sector_raw, 'pack' ) !== false || strpos( $c_sector_raw, 'crate' ) !== false ) $c_slug = 'packaging';
                            elseif ( strpos( $c_sector_raw, 'pipe' ) !== false || strpos( $c_sector_raw, 'infra' ) !== false ) $c_slug = 'pipes';
                            
                            $c_abbr = isset( $client['abbr'] ) ? $client['abbr'] : strtoupper( substr( $client['name'], 0, 4 ) );
                            $c_tag  = isset( $client['tag'] ) ? $client['tag'] : ( isset( $client['cat'] ) ? $client['cat'] : 'Industrial Moulding' );
                        ?>
                            <div class="gp-client-logo-card" data-sector="<?php echo esc_attr( $c_slug ); ?>">
                                <div class="gp-cl-logo-box">
                                    <span class="gp-cl-monogram"><?php echo esc_html( $c_abbr ); ?></span>
                                </div>
                                <div class="gp-cl-content">
                                    <div class="gp-cl-badge-top"><?php echo esc_html( $client['sector'] ); ?></div>
                                    <div class="gp-cl-name"><?php echo esc_html( $client['name'] ); ?></div>
                                    <div class="gp-cl-category"><?php echo esc_html( $c_tag ); ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endfor; ?>
                </div>

                <div class="gp-marquee-track gp-track-reverse" id="gp-clients-track-2">
                    <?php for ( $loop = 0; $loop < 2; $loop++ ) : ?>
                        <?php foreach ( array_reverse( $default_clients ) as $client ) : 
                            $c_sector_raw = isset( $client['sector'] ) ? strtolower( $client['sector'] ) : 'all';
                            $c_slug = 'all';
                            if ( strpos( $c_sector_raw, 'auto' ) !== false ) $c_slug = 'automotive';
                            elseif ( strpos( $c_sector_raw, 'elect' ) !== false || strpos( $c_sector_raw, 'appliance' ) !== false ) $c_slug = 'electrical';
                            elseif ( strpos( $c_sector_raw, 'pack' ) !== false || strpos( $c_sector_raw, 'crate' ) !== false ) $c_slug = 'packaging';
                            elseif ( strpos( $c_sector_raw, 'pipe' ) !== false || strpos( $c_sector_raw, 'infra' ) !== false ) $c_slug = 'pipes';
                            
                            $c_abbr = isset( $client['abbr'] ) ? $client['abbr'] : strtoupper( substr( $client['name'], 0, 4 ) );
                            $c_tag  = isset( $client['tag'] ) ? $client['tag'] : ( isset( $client['cat'] ) ? $client['cat'] : 'Industrial Moulding' );
                        ?>
                            <div class="gp-client-logo-card" data-sector="<?php echo esc_attr( $c_slug ); ?>">
                                <div class="gp-cl-logo-box">
                                    <span class="gp-cl-monogram"><?php echo esc_html( $c_abbr ); ?></span>
                                </div>
                                <div class="gp-cl-content">
                                    <div class="gp-cl-badge-top"><?php echo esc_html( $client['sector'] ); ?></div>
                                    <div class="gp-cl-name"><?php echo esc_html( $client['name'] ); ?></div>
                                    <div class="gp-cl-category"><?php echo esc_html( $c_tag ); ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endfor; ?>
                </div>
            </div>

            <!-- Trust Bar / Key Statistics -->
            <div class="gp-clients-trust-bar">
                <div class="gp-trust-metric">
                    <span class="gp-tm-val">99.4%</span>
                    <span class="gp-tm-lbl"><?php esc_html_e( 'Batch Spec Compliance', 'gp-theme' ); ?></span>
                </div>
                <div class="gp-trust-metric">
                    <span class="gp-tm-val">48 Hrs</span>
                    <span class="gp-tm-lbl"><?php esc_html_e( 'Average Dispatch SLA', 'gp-theme' ); ?></span>
                </div>
                <div class="gp-trust-metric">
                    <span class="gp-tm-val">100%</span>
                    <span class="gp-tm-lbl"><?php esc_html_e( 'Lot Traceability with COA', 'gp-theme' ); ?></span>
                </div>
                <div class="gp-trust-metric">
                    <span class="gp-tm-val">25+ Yrs</span>
                    <span class="gp-tm-lbl"><?php esc_html_e( 'OEM Vendor Standing', 'gp-theme' ); ?></span>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 9. PLASTIN DIRECT B2B RFQ INQUIRY SECTION (#contact)                      -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-plastin-rfq" id="contact">
        <div class="gp-container">
            <div class="gp-rfq-split-box">
                
                <!-- Left: Direct Factory Contact & Advantage -->
                <div class="gp-rfq-info-col">
                    <span class="gp-section-kicker"><?php esc_html_e( 'DIRECT MILL DISPATCH', 'gp-theme' ); ?></span>
                    <h2 class="gp-rfq-box-title"><?php esc_html_e( 'Ready To Elevate Your Moulding Quality & Cut Polymer Costs?', 'gp-theme' ); ?></h2>
                    <p class="gp-rfq-box-desc">
                        <?php esc_html_e( 'Send us your required polymer grade, target MFI, and monthly tonnage. Our polymer applications team will provide factory-direct quotation and trial sample dispatch within 24 hours.', 'gp-theme' ); ?>
                    </p>

                    <div class="gp-contact-cards-list">
                        <div class="gp-ccard">
                            <div class="gp-ccard-icon">📞</div>
                            <div>
                                <strong><?php esc_html_e( 'Direct Polymer Hotline:', 'gp-theme' ); ?></strong>
                                <a href="tel:+919876543210">+91-9876543210 / +91-9818277775</a>
                            </div>
                        </div>

                        <div class="gp-ccard">
                            <div class="gp-ccard-icon">💬</div>
                            <div>
                                <strong><?php esc_html_e( 'WhatsApp RFQ Desk:', 'gp-theme' ); ?></strong>
                                <a href="https://wa.me/919876543210?text=Hi%20SRS%20Polymer,%20I%20need%20a%20quotation%20for%20Plastic%20Dana" target="_blank" rel="noopener">+91-9876543210 (Instant Reply)</a>
                            </div>
                        </div>

                        <div class="gp-ccard">
                            <div class="gp-ccard-icon">📍</div>
                            <div>
                                <strong><?php esc_html_e( 'Compounding Plants & Corporate Office:', 'gp-theme' ); ?></strong>
                                <span>Delhi-NCR Industrial Area & Bhiwadi Industrial Area, Rajasthan, India</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Comprehensive RFQ Form -->
                <div class="gp-rfq-form-col">
                    <div class="gp-rfq-form-card">
                        <h3 class="gp-rfc-title"><?php esc_html_e( 'Submit Your Polymer Requirement', 'gp-theme' ); ?></h3>
                        <p class="gp-rfc-subtitle"><?php esc_html_e( 'Fill details below for instantaneous factory rate sheet', 'gp-theme' ); ?></p>

                        <form class="gp-plastin-rfq-form" id="gp-main-rfq-form">
                            <div class="gp-form-row gp-form-row-2col">
                                <div class="gp-form-group">
                                    <label for="rfq-name"><?php esc_html_e( 'Contact Person Name *', 'gp-theme' ); ?></label>
                                    <input type="text" id="rfq-name" name="name" class="gp-input-custom" placeholder="e.g. Rajesh Sharma" required>
                                </div>
                                <div class="gp-form-group">
                                    <label for="rfq-company"><?php esc_html_e( 'Company / Firm Name *', 'gp-theme' ); ?></label>
                                    <input type="text" id="rfq-company" name="company" class="gp-input-custom" placeholder="e.g. Apex Plastics Ltd." required>
                                </div>
                            </div>

                            <div class="gp-form-row gp-form-row-2col">
                                <div class="gp-form-group">
                                    <label for="rfq-phone"><?php esc_html_e( 'Mobile / WhatsApp No. *', 'gp-theme' ); ?></label>
                                    <input type="tel" id="rfq-phone" name="phone" class="gp-input-custom" placeholder="+91 98765 43210" required>
                                </div>
                                <div class="gp-form-group">
                                    <label for="rfq-email"><?php esc_html_e( 'Email Address', 'gp-theme' ); ?></label>
                                    <input type="email" id="rfq-email" name="email" class="gp-input-custom" placeholder="procurement@company.com">
                                </div>
                            </div>

                            <div class="gp-form-row gp-form-row-2col">
                                <div class="gp-form-group">
                                    <label for="rfq-polymer"><?php esc_html_e( 'Required Polymer Grade *', 'gp-theme' ); ?></label>
                                    <select id="rfq-polymer" name="polymer" class="gp-select-custom" required>
                                        <option value="PPCP Impact Copolymer Granules">PPCP Impact Copolymer Granules</option>
                                        <option value="Polypropylene 20% / 30% Glass Filled">PP Glass Filled (PP GF)</option>
                                        <option value="PP Talc Filled Compounds">PP Talc Filled Compounds</option>
                                        <option value="HDPE Granules (Blow & Pipe Grade)">HDPE Granules (Blow & Pipe)</option>
                                        <option value="ABS Engineering Pellets">ABS Engineering Pellets</option>
                                        <option value="Nylon 6 & 66 Compounded Pellets">Nylon 6 & 66 (PA6/PA66)</option>
                                        <option value="PVC Compounds (Flexible / Rigid)">PVC Compounds</option>
                                        <option value="Color & Additive Masterbatches">Color & Additive Masterbatches</option>
                                        <option value="Reprocessed PP/HDPE Black Dana">Reprocessed PP / HDPE Black Dana</option>
                                        <option value="Custom Formulation">Other / Custom Formulation</option>
                                    </select>
                                </div>
                                <div class="gp-form-group">
                                    <label for="rfq-quantity"><?php esc_html_e( 'Estimated Monthly Tonnage *', 'gp-theme' ); ?></label>
                                    <input type="text" id="rfq-quantity" name="quantity" class="gp-input-custom" placeholder="e.g. 5 MT / 10 MT" value="5 MT" required>
                                </div>
                            </div>

                            <div class="gp-form-row">
                                <div class="gp-form-group">
                                    <label for="rfq-specs"><?php esc_html_e( 'Specific Technical Requirements (MFI, Color, Application, Delivery City)', 'gp-theme' ); ?></label>
                                    <textarea id="rfq-specs" name="specs" class="gp-textarea-custom" rows="3" placeholder="e.g. MFI around 10-12, Black color, for battery box moulding in Greater Noida."></textarea>
                                </div>
                            </div>

                            <button type="submit" class="gp-btn gp-btn-primary gp-btn-full gp-btn-rfq-submit">
                                <span><?php esc_html_e( 'Send Mill Enquiry & Request Sample', 'gp-theme' ); ?></span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </button>

                            <div class="gp-rfq-msg" id="gp-rfq-status-msg" style="display:none;"></div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<!-- ========================================================================= -->
<!-- REALISTIC CERTIFICATE LIGHTBOX MODAL (#gp-cert-modal)                     -->
<!-- ========================================================================= -->
<div class="gp-cert-modal-backdrop" id="gp-cert-modal" role="dialog" aria-modal="true" aria-labelledby="gp-cert-modal-code" style="display: none;">
    <div class="gp-cert-modal-dialog">
        <button type="button" class="gp-cert-modal-close" id="gp-cert-modal-close" aria-label="<?php esc_attr_e( 'Close Certificate', 'gp-theme' ); ?>">✕</button>

        <div class="gp-cert-frame">
            <div class="gp-cert-frame-inner">
                <div class="gp-cert-modal-header">
                    <div class="gp-cert-guilloche">
                        <svg width="48" height="48" viewBox="0 0 100 100" fill="none" stroke="#0097db" stroke-width="2">
                            <circle cx="50" cy="50" r="45" stroke-dasharray="3 3"/>
                            <circle cx="50" cy="50" r="38"/>
                            <polygon points="50,15 62,38 85,38 67,52 73,75 50,62 27,75 33,52 15,38 38,38" fill="rgba(0, 151, 219, 0.1)"/>
                        </svg>
                    </div>
                    <div class="gp-cert-modal-titles">
                        <span class="gp-cert-super-title"><?php esc_html_e( 'CERTIFICATE OF COMPLIANCE & QUALITY REGISTRATION', 'gp-theme' ); ?></span>
                        <h2 class="gp-cert-main-title" id="gp-cert-modal-code">ISO 9001:2015</h2>
                        <p class="gp-cert-accreditor-tag" id="gp-cert-modal-title">Quality Management System</p>
                    </div>
                </div>

                <div class="gp-cert-certified-block">
                    <span class="gp-cert-certifies-text"><?php esc_html_e( 'This is to officially certify that the manufacturing, testing, and compounding operations of:', 'gp-theme' ); ?></span>
                    <h3 class="gp-cert-recipient-name"><?php echo esc_html( get_theme_mod( 'gp_company_name', 'SHRI RAM SHARNAM OVERSEAS' ) ); ?></h3>
                    <p class="gp-cert-recipient-div"><?php echo esc_html( get_theme_mod( 'gp_company_division', 'GREEN POLYTECH LIMITED' ) ); ?></p>
                    <p class="gp-cert-facility-address"><?php echo esc_html( get_theme_mod( 'gp_company_topbar_loc', 'Delhi-NCR & Bhiwadi Industrial Area, Rajasthan, India' ) ); ?></p>
                </div>

                <div class="gp-cert-scope-box">
                    <strong class="gp-cert-scope-title"><?php esc_html_e( 'Certified Scope of Operations:', 'gp-theme' ); ?></strong>
                    <p class="gp-cert-scope-text" id="gp-cert-modal-scope">
                        Manufacture, compounding, laboratory batch-testing, and supply of virgin and reprocessed Polymer Granules (PP, HDPE, ABS, PVC) and specialized additive masterbatches for industrial moulding applications.
                    </p>
                </div>

                <div class="gp-cert-verification-strip">
                    <div class="gp-cert-reg-item">
                        <span><?php esc_html_e( 'Registration / Certificate No:', 'gp-theme' ); ?></span>
                        <strong id="gp-cert-modal-certno">ISO-9001-QMS-2024-8841</strong>
                    </div>
                    <div class="gp-cert-reg-item">
                        <span><?php esc_html_e( 'Current Validity Through:', 'gp-theme' ); ?></span>
                        <strong id="gp-cert-modal-validity">Valid till Dec 2027</strong>
                    </div>
                    <div class="gp-cert-reg-item">
                        <span><?php esc_html_e( 'Accredited Registrar / Body:', 'gp-theme' ); ?></span>
                        <strong id="gp-cert-modal-body" class="gp-verified-text">TUV SUD / IAF Accredited</strong>
                    </div>
                </div>

                <div class="gp-cert-footer-auth">
                    <div class="gp-cert-seal-gold">
                        <div class="gp-gold-seal-inner">
                            <span>OFFICIAL</span>
                            <strong>SEAL</strong>
                            <span>ACCREDITED</span>
                        </div>
                    </div>
                    <div class="gp-cert-qr-wrap">
                        <div class="gp-cert-qr-box">
                            <svg width="54" height="54" viewBox="0 0 24 24" fill="#0b2545">
                                <path d="M2 2h8v8H2V2zm2 2v4h4V4H4zm10-2h8v8h-8V2zm2 2v4h4V4h-4zM2 14h8v8H2v-8zm2 2v4h4v-4H4zm14 0h4v2h-4v-2zm-4 0h2v4h-2v-4zm4 4h4v2h-4v-2zm-2-2h2v2h-2v-2zm-2 2h2v2h-2v-2z"/>
                            </svg>
                        </div>
                        <span class="gp-qr-caption"><?php esc_html_e( 'Scan for COA Verification', 'gp-theme' ); ?></span>
                    </div>
                    <div class="gp-cert-signature">
                        <div class="gp-signature-line">SRS / Green Polytech Quality Directorate</div>
                        <span class="gp-sig-label"><?php esc_html_e( 'Head of Quality Assurance &amp; Technical Testing', 'gp-theme' ); ?></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="gp-cert-modal-actions">
            <a href="#contact" class="gp-btn gp-btn-primary gp-cert-modal-quote gp-rfq-modal-trigger" id="gp-cert-modal-req-btn" data-product="Official Certificate Copy">
                <span><?php esc_html_e( 'Request Official Certificate Copy / COA', 'gp-theme' ); ?></span>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</div>

<?php
get_footer();
