<?php
/**
 * Template Name: Products Catalog Page
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

<main id="primary" class="site-main gp-products-page">

    <!-- ========================================================================= -->
    <!-- 1. HERO BANNER                                                            -->
    <!-- ========================================================================= -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php esc_html_e( 'B2B POLYMER CATALOG & TECHNICAL SPECIFICATIONS', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php esc_html_e( 'Engineered Polymer Granules & Compounds', 'gp-theme' ); ?></h1>
                <p class="gp-page-banner-desc">
                    <?php esc_html_e( 'Explore our complete portfolio of virgin and high-grade reprocessed plastic dana (PPCP, HDPE, ABS, PVC, Nylon) and masterbatches. Every lot is precision tested for MFI, density, and impact strength with batch COA documentation.', 'gp-theme' ); ?>
                </p>
                <?php if ( function_exists( 'gp_breadcrumbs' ) ) { gp_breadcrumbs(); } ?>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. SEARCH & CATEGORY FILTER BAR                                           -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-products-catalog-section" id="catalog">
        <div class="gp-container">
            
            <div class="gp-catalog-controls-bar">
                <div class="gp-catalog-filter-tabs" id="gp-product-filters">
                    <button class="gp-cat-btn active" data-filter="all"><?php esc_html_e( 'All Polymer Products (8)', 'gp-theme' ); ?></button>
                    <button class="gp-cat-btn" data-filter="pp"><?php esc_html_e( 'PPCP & PP Compounds', 'gp-theme' ); ?></button>
                    <button class="gp-cat-btn" data-filter="hdpe"><?php esc_html_e( 'HDPE & Blow Grades', 'gp-theme' ); ?></button>
                    <button class="gp-cat-btn" data-filter="abs"><?php esc_html_e( 'ABS Engineering Pellets', 'gp-theme' ); ?></button>
                    <button class="gp-cat-btn" data-filter="pvc"><?php esc_html_e( 'PVC Compounds & Wire', 'gp-theme' ); ?></button>
                    <button class="gp-cat-btn" data-filter="nylon"><?php esc_html_e( 'Nylon & Polyamide', 'gp-theme' ); ?></button>
                </div>
            </div>

            <!-- Full Product Grid -->
            <div class="gp-plastin-products-grid" id="gp-products-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(290px, 1fr)); gap: 24px; margin-top: 30px;">

                <!-- 1. PPCP Impact Copolymer Granules -->
                <article class="gp-plastin-product-card" data-category="pp">
                    <div class="gp-pcard-badge"><?php esc_html_e( 'Best Seller', 'gp-theme' ); ?></div>
                    <div class="gp-pcard-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-pp-granules.jpg' ); ?>" alt="PPCP Impact Copolymer Granules" loading="lazy">
                        <div class="gp-pcard-overlay-actions">
                            <button type="button" class="gp-pcard-quickview-btn" data-prod-id="1">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <span><?php esc_html_e( 'Quick View', 'gp-theme' ); ?></span>
                            </button>
                        </div>
                    </div>
                    <div class="gp-pcard-body">
                        <div class="gp-pcard-cat"><?php esc_html_e( 'Polypropylene Compounding', 'gp-theme' ); ?></div>
                        <h3 class="gp-pcard-title">
                            <a href="#contact" class="gp-rfq-modal-trigger" data-product="PPCP Impact Copolymer Granules"><?php esc_html_e( 'PPCP Impact Copolymer Granules', 'gp-theme' ); ?></a>
                        </h3>
                        <p class="gp-pcard-desc"><?php esc_html_e( 'Formulated for high cold-impact strength, optimal flowability, and crack resistance. Available in Black, Grey, and Natural shades.', 'gp-theme' ); ?></p>
                        
                        <div class="gp-pcard-specs-table">
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Melt Flow Index (MFI)', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">8 – 14 g/10min</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Density', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">0.90 – 0.92 g/cm³</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Izod Impact Strength', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">85 – 110 J/m</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Applications', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val"><?php esc_html_e( 'Battery Casings, Auto Parts, Crates', 'gp-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="gp-pcard-footer">
                            <button type="button" class="gp-btn gp-btn-pcard-quote gp-rfq-modal-trigger" data-product="PPCP Impact Copolymer Granules">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span><?php esc_html_e( 'Get Best Price', 'gp-theme' ); ?></span>
                            </button>
                            <a href="#contact" class="gp-btn-tds-link gp-rfq-modal-trigger" data-product="PPCP Technical Data Sheet"><?php esc_html_e( 'View TDS', 'gp-theme' ); ?></a>
                        </div>
                    </div>
                </article>

                <!-- 2. Polypropylene Glass Filled Granules -->
                <article class="gp-plastin-product-card" data-category="pp">
                    <div class="gp-pcard-badge gp-badge-accent"><?php esc_html_e( 'Engineering Grade', 'gp-theme' ); ?></div>
                    <div class="gp-pcard-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-abs-granules.jpg' ); ?>" alt="Polypropylene Glass Filled Granules" loading="lazy">
                        <div class="gp-pcard-overlay-actions">
                            <button type="button" class="gp-pcard-quickview-btn" data-prod-id="2">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <span><?php esc_html_e( 'Quick View', 'gp-theme' ); ?></span>
                            </button>
                        </div>
                    </div>
                    <div class="gp-pcard-body">
                        <div class="gp-pcard-cat"><?php esc_html_e( 'Reinforced Compounds', 'gp-theme' ); ?></div>
                        <h3 class="gp-pcard-title">
                            <a href="#contact" class="gp-rfq-modal-trigger" data-product="Polypropylene Glass Filled (PP GF 20%/30%)"><?php esc_html_e( 'PP Glass Filled Granules (10% - 30% GF)', 'gp-theme' ); ?></a>
                        </h3>
                        <p class="gp-pcard-desc"><?php esc_html_e( 'Short glass fiber reinforced polypropylene offering high tensile modulus, elevated heat deflection, and dimensional stability.', 'gp-theme' ); ?></p>
                        
                        <div class="gp-pcard-specs-table">
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Glass Fiber Content', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">10%, 20%, 30% GF</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Tensile Strength', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">60 – 85 MPa</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'HDT (0.45 MPa)', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">140°C – 155°C</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Applications', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val"><?php esc_html_e( 'Automotive Under-the-Hood, Fans, Pumps', 'gp-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="gp-pcard-footer">
                            <button type="button" class="gp-btn gp-btn-pcard-quote gp-rfq-modal-trigger" data-product="Polypropylene Glass Filled (PP GF 20%/30%)">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span><?php esc_html_e( 'Get Best Price', 'gp-theme' ); ?></span>
                            </button>
                            <a href="#contact" class="gp-btn-tds-link gp-rfq-modal-trigger" data-product="PP Glass Filled TDS"><?php esc_html_e( 'View TDS', 'gp-theme' ); ?></a>
                        </div>
                    </div>
                </article>

                <!-- 3. ABS Engineering Pellets -->
                <article class="gp-plastin-product-card" data-category="abs">
                    <div class="gp-pcard-badge"><?php esc_html_e( 'High Gloss', 'gp-theme' ); ?></div>
                    <div class="gp-pcard-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-abs-granules.jpg' ); ?>" alt="ABS Engineering Pellets" loading="lazy">
                        <div class="gp-pcard-overlay-actions">
                            <button type="button" class="gp-pcard-quickview-btn" data-prod-id="3">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <span><?php esc_html_e( 'Quick View', 'gp-theme' ); ?></span>
                            </button>
                        </div>
                    </div>
                    <div class="gp-pcard-body">
                        <div class="gp-pcard-cat"><?php esc_html_e( 'Acrylonitrile Butadiene Styrene', 'gp-theme' ); ?></div>
                        <h3 class="gp-pcard-title">
                            <a href="#contact" class="gp-rfq-modal-trigger" data-product="ABS Engineering Pellets (High Gloss Black & White)"><?php esc_html_e( 'ABS Engineering Pellets (Black & Natural)', 'gp-theme' ); ?></a>
                        </h3>
                        <p class="gp-pcard-desc"><?php esc_html_e( 'Virgin and premium reprocessed ABS granules with high surface gloss, rigid structural integrity, and flame retardancy options.', 'gp-theme' ); ?></p>
                        
                        <div class="gp-pcard-specs-table">
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Melt Flow Index', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">15 – 25 g/10min</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Density', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">1.04 – 1.06 g/cm³</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Tensile Strength', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">42 – 50 MPa</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Applications', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val"><?php esc_html_e( 'Appliance Housings, Helmets, Toys', 'gp-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="gp-pcard-footer">
                            <button type="button" class="gp-btn gp-btn-pcard-quote gp-rfq-modal-trigger" data-product="ABS Engineering Pellets (High Gloss Black & White)">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span><?php esc_html_e( 'Get Best Price', 'gp-theme' ); ?></span>
                            </button>
                            <a href="#contact" class="gp-btn-tds-link gp-rfq-modal-trigger" data-product="ABS Pellets TDS"><?php esc_html_e( 'View TDS', 'gp-theme' ); ?></a>
                        </div>
                    </div>
                </article>

                <!-- 4. HDPE Granules (Blow & Pipe Grade) -->
                <article class="gp-plastin-product-card" data-category="hdpe">
                    <div class="gp-pcard-badge"><?php esc_html_e( 'Blow Moulding', 'gp-theme' ); ?></div>
                    <div class="gp-pcard-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-hdpe-granules.jpg' ); ?>" alt="HDPE Granules Blow & Pipe Grade" loading="lazy">
                        <div class="gp-pcard-overlay-actions">
                            <button type="button" class="gp-pcard-quickview-btn" data-prod-id="4">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <span><?php esc_html_e( 'Quick View', 'gp-theme' ); ?></span>
                            </button>
                        </div>
                    </div>
                    <div class="gp-pcard-body">
                        <div class="gp-pcard-cat"><?php esc_html_e( 'High-Density Polyethylene', 'gp-theme' ); ?></div>
                        <h3 class="gp-pcard-title">
                            <a href="#contact" class="gp-rfq-modal-trigger" data-product="HDPE Granules (Blow & Pipe Grade)"><?php esc_html_e( 'HDPE Granules (Blow & Pipe Grade)', 'gp-theme' ); ?></a>
                        </h3>
                        <p class="gp-pcard-desc"><?php esc_html_e( 'Engineered for exceptional environmental stress crack resistance (ESCR) and melt strength for blow drums, jerricans, and HDPE pipes.', 'gp-theme' ); ?></p>
                        
                        <div class="gp-pcard-specs-table">
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'MFI (190°C/2.16kg)', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">0.3 – 1.2 g/10min</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Density', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">0.952 – 0.958 g/cm³</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'ESCR (F50)', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">> 400 Hours</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Applications', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val"><?php esc_html_e( 'Jerricans, Drums, Bottles, Drip Pipes', 'gp-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="gp-pcard-footer">
                            <button type="button" class="gp-btn gp-btn-pcard-quote gp-rfq-modal-trigger" data-product="HDPE Granules (Blow & Pipe Grade)">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span><?php esc_html_e( 'Get Best Price', 'gp-theme' ); ?></span>
                            </button>
                            <a href="#contact" class="gp-btn-tds-link gp-rfq-modal-trigger" data-product="HDPE Granules TDS"><?php esc_html_e( 'View TDS', 'gp-theme' ); ?></a>
                        </div>
                    </div>
                </article>

                <!-- 5. PP Talc Filled Compounds -->
                <article class="gp-plastin-product-card" data-category="pp">
                    <div class="gp-pcard-badge gp-badge-accent"><?php esc_html_e( 'Mineral Filled', 'gp-theme' ); ?></div>
                    <div class="gp-pcard-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-pp-granules.jpg' ); ?>" alt="PP Talc Filled Compounds" loading="lazy">
                        <div class="gp-pcard-overlay-actions">
                            <button type="button" class="gp-pcard-quickview-btn" data-prod-id="5">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <span><?php esc_html_e( 'Quick View', 'gp-theme' ); ?></span>
                            </button>
                        </div>
                    </div>
                    <div class="gp-pcard-body">
                        <div class="gp-pcard-cat"><?php esc_html_e( 'Mineral Filled Compounds', 'gp-theme' ); ?></div>
                        <h3 class="gp-pcard-title">
                            <a href="#contact" class="gp-rfq-modal-trigger" data-product="PP Talc Filled Compounds (20% - 40%)"><?php esc_html_e( 'PP Talc Filled Compounds (20% - 40%)', 'gp-theme' ); ?></a>
                        </h3>
                        <p class="gp-pcard-desc"><?php esc_html_e( 'Micronized talc-filled polypropylene for minimum mold shrinkage, high dimensional stability, and low cycle times.', 'gp-theme' ); ?></p>
                        
                        <div class="gp-pcard-specs-table">
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Talc Content', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">20%, 30%, 40%</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Flexural Modulus', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">2200 – 3500 MPa</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Shrinkage Rate', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">0.6% – 0.9%</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Applications', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val"><?php esc_html_e( 'White Goods, AC Louvers, Dashboard Trim', 'gp-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="gp-pcard-footer">
                            <button type="button" class="gp-btn gp-btn-pcard-quote gp-rfq-modal-trigger" data-product="PP Talc Filled Compounds (20% - 40%)">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span><?php esc_html_e( 'Get Best Price', 'gp-theme' ); ?></span>
                            </button>
                            <a href="#contact" class="gp-btn-tds-link gp-rfq-modal-trigger" data-product="PP Talc Filled TDS"><?php esc_html_e( 'View TDS', 'gp-theme' ); ?></a>
                        </div>
                    </div>
                </article>

                <!-- 6. Nylon 6 & 66 Compounded Pellets -->
                <article class="gp-plastin-product-card" data-category="nylon">
                    <div class="gp-pcard-badge"><?php esc_html_e( 'Polyamide', 'gp-theme' ); ?></div>
                    <div class="gp-pcard-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/product-abs-granules.jpg' ); ?>" alt="Nylon 6 & 66 Compounded Pellets" loading="lazy">
                        <div class="gp-pcard-overlay-actions">
                            <button type="button" class="gp-pcard-quickview-btn" data-prod-id="6">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <span><?php esc_html_e( 'Quick View', 'gp-theme' ); ?></span>
                            </button>
                        </div>
                    </div>
                    <div class="gp-pcard-body">
                        <div class="gp-pcard-cat"><?php esc_html_e( 'Polyamide (PA6 / PA66)', 'gp-theme' ); ?></div>
                        <h3 class="gp-pcard-title">
                            <a href="#contact" class="gp-rfq-modal-trigger" data-product="Nylon 6 & 66 (PA6/PA66) Pellets"><?php esc_html_e( 'Nylon 6 & 66 Pellets (Unfilled & Glass Filled)', 'gp-theme' ); ?></a>
                        </h3>
                        <p class="gp-pcard-desc"><?php esc_html_e( 'Engineering polyamide granules offering superior abrasion resistance, high tensile endurance, and continuous service temperature up to 130°C.', 'gp-theme' ); ?></p>
                        
                        <div class="gp-pcard-specs-table">
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Melting Point', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">220°C (PA6) / 260°C (PA66)</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Tensile Yield', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">75 – 140 MPa</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Water Absorption', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">1.5% – 2.0%</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Applications', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val"><?php esc_html_e( 'Gears, Bushes, Cable Ties, Fasteners', 'gp-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="gp-pcard-footer">
                            <button type="button" class="gp-btn gp-btn-pcard-quote gp-rfq-modal-trigger" data-product="Nylon 6 & 66 (PA6/PA66) Pellets">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span><?php esc_html_e( 'Get Best Price', 'gp-theme' ); ?></span>
                            </button>
                            <a href="#contact" class="gp-btn-tds-link gp-rfq-modal-trigger" data-product="Nylon Pellets TDS"><?php esc_html_e( 'View TDS', 'gp-theme' ); ?></a>
                        </div>
                    </div>
                </article>

                <!-- 7. PVC Compounds (Rigid & Flexible) -->
                <article class="gp-plastin-product-card" data-category="pvc">
                    <div class="gp-pcard-badge"><?php esc_html_e( 'Compounded', 'gp-theme' ); ?></div>
                    <div class="gp-pcard-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/granules-clear-transparent.jpg' ); ?>" alt="PVC Compounds Rigid & Flexible" loading="lazy">
                        <div class="gp-pcard-overlay-actions">
                            <button type="button" class="gp-pcard-quickview-btn" data-prod-id="7">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <span><?php esc_html_e( 'Quick View', 'gp-theme' ); ?></span>
                            </button>
                        </div>
                    </div>
                    <div class="gp-pcard-body">
                        <div class="gp-pcard-cat"><?php esc_html_e( 'Polyvinyl Chloride Compounds', 'gp-theme' ); ?></div>
                        <h3 class="gp-pcard-title">
                            <a href="#contact" class="gp-rfq-modal-trigger" data-product="PVC Compounds (Rigid & Flexible)"><?php esc_html_e( 'PVC Compounds (Wire, Cable & Moulding)', 'gp-theme' ); ?></a>
                        </h3>
                        <p class="gp-pcard-desc"><?php esc_html_e( 'Plasticized and rigid PVC granules with lead-free non-toxic stabilizer options, high electrical insulation, and flame retardance.', 'gp-theme' ); ?></p>
                        
                        <div class="gp-pcard-specs-table">
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Hardness', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">Shore A 55 – 95 / Shore D 75</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Volume Resistivity', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">> 10¹³ Ω·cm</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Oxygen Index (LOI)', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">> 30%</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Applications', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val"><?php esc_html_e( 'Wires, Cables, Gaskets, Shoe Soles', 'gp-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="gp-pcard-footer">
                            <button type="button" class="gp-btn gp-btn-pcard-quote gp-rfq-modal-trigger" data-product="PVC Compounds (Rigid & Flexible)">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span><?php esc_html_e( 'Get Best Price', 'gp-theme' ); ?></span>
                            </button>
                            <a href="#contact" class="gp-btn-tds-link gp-rfq-modal-trigger" data-product="PVC Compounds TDS"><?php esc_html_e( 'View TDS', 'gp-theme' ); ?></a>
                        </div>
                    </div>
                </article>

                <!-- 8. Color & Additive Masterbatches -->
                <article class="gp-plastin-product-card" data-category="pvc">
                    <div class="gp-pcard-badge gp-badge-accent"><?php esc_html_e( 'Masterbatch', 'gp-theme' ); ?></div>
                    <div class="gp-pcard-media">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/granules-masterbatch-red.jpg' ); ?>" alt="Color & Additive Masterbatches" loading="lazy">
                        <div class="gp-pcard-overlay-actions">
                            <button type="button" class="gp-pcard-quickview-btn" data-prod-id="8">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                <span><?php esc_html_e( 'Quick View', 'gp-theme' ); ?></span>
                            </button>
                        </div>
                    </div>
                    <div class="gp-pcard-body">
                        <div class="gp-pcard-cat"><?php esc_html_e( 'Colorants & Functional Additives', 'gp-theme' ); ?></div>
                        <h3 class="gp-pcard-title">
                            <a href="#contact" class="gp-rfq-modal-trigger" data-product="Color & Additive Masterbatches"><?php esc_html_e( 'Color, White, Black & UV Masterbatches', 'gp-theme' ); ?></a>
                        </h3>
                        <p class="gp-pcard-desc"><?php esc_html_e( 'High pigment dispersion masterbatches for precise shade matching, UV stabilization, anti-static properties, and optical brightness.', 'gp-theme' ); ?></p>
                        
                        <div class="gp-pcard-specs-table">
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Pigment Loading', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">30% – 70% Dispersion</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Carrier Resin', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">PP, PE, PS, Universal Carrier</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Dosage Ratio', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val">1% – 3%</span>
                            </div>
                            <div class="gp-spec-row">
                                <span class="gp-spec-name"><?php esc_html_e( 'Applications', 'gp-theme' ); ?>:</span>
                                <span class="gp-spec-val"><?php esc_html_e( 'Moulding, Films, Extrusion Pipes', 'gp-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="gp-pcard-footer">
                            <button type="button" class="gp-btn gp-btn-pcard-quote gp-rfq-modal-trigger" data-product="Color & Additive Masterbatches">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span><?php esc_html_e( 'Get Best Price', 'gp-theme' ); ?></span>
                            </button>
                            <a href="#contact" class="gp-btn-tds-link gp-rfq-modal-trigger" data-product="Masterbatches TDS"><?php esc_html_e( 'View TDS', 'gp-theme' ); ?></a>
                        </div>
                    </div>
                </article>

            </div>

            <!-- Custom Formulation Callout Box -->
            <div class="gp-custom-compounding-box" style="margin-top: 50px;">
                <div class="gp-cc-content">
                    <span class="gp-cc-pill"><?php esc_html_e( 'Custom Polymer Formulations', 'gp-theme' ); ?></span>
                    <h3 class="gp-cc-title"><?php esc_html_e( 'Need a Custom MFI, Flame Retardant, or Color Matched Compound?', 'gp-theme' ); ?></h3>
                    <p class="gp-cc-desc"><?php esc_html_e( 'Our compounding metallurgists and polymer engineers formulate custom grades tailored to your machine specs, tooling cycles, and target cost.', 'gp-theme' ); ?></p>
                </div>
                <div class="gp-cc-actions">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gp-btn gp-btn-primary gp-rfq-modal-trigger" data-product="Custom Compounding Formulation">
                        <span><?php esc_html_e( 'Request Custom Formulation', 'gp-theme' ); ?></span>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();
