<?php
/**
 * Template Name: Certifications & Compliance Page
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

<main id="primary" class="site-main gp-certificates-page">

    <!-- ========================================================================= -->
    <!-- 1. HERO BANNER                                                            -->
    <!-- ========================================================================= -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php esc_html_e( 'REGULATORY COMPLIANCE & INTERNATIONAL STANDARDS', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php esc_html_e( 'Quality Certifications & Audits', 'gp-theme' ); ?></h1>
                <p class="gp-page-banner-desc">
                    <?php esc_html_e( 'SRS Polymer manufactures in strict compliance with ISO 9001:2015, EU RoHS Directive, REACH SVHC, and US FDA standards. Verified by independent international testing bodies.', 'gp-theme' ); ?>
                </p>
                <?php if ( function_exists( 'gp_breadcrumbs' ) ) { gp_breadcrumbs(); } ?>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. CERTIFICATES GRID                                                      -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-section-certificates" id="certifications-list">
        <div class="gp-container">
            
            <div class="gp-section-header-plastin gp-sh-center">
                <span class="gp-section-kicker"><?php esc_html_e( 'ACCREDITED ASSURANCE', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title-clean"><?php esc_html_e( 'Verified Compliance For Global Supply Chains', 'gp-theme' ); ?></h2>
                <p class="gp-section-sub-clean gp-sub-center">
                    <?php esc_html_e( 'Click on any certificate card to view audited registration details, scope of polymer processing, and accredited validity certificates.', 'gp-theme' ); ?>
                </p>
            </div>

            <!-- Certificates 5-Column Grid -->
            <div class="gp-certificates-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin-top: 36px;">
                
                <?php
                $all_certs = array(
                    array(
                        'id'         => 'cert-iso-9001',
                        'code'       => 'ISO 9001:2015',
                        'name'       => 'Quality Management System',
                        'issuer'     => 'TUV SUD / IAF Accredited',
                        'cert_no'    => 'ISO-9001-QMS-2024-8841',
                        'validity'   => 'Valid till Dec 2027',
                        'color'      => '#0097db',
                        'points'     => array( 'Precision Compounding Control', 'Lot-to-Lot Traceability System', 'Continuous Process Improvement' ),
                        'scope'      => 'Manufacture, compounding, and wholesale distribution of virgin & reprocessed polymer granules (PP, HDPE, LDPE, ABS, PVC) and masterbatches for plastic injection and extrusion industries.',
                    ),
                    array(
                        'id'         => 'cert-rohs',
                        'code'       => 'RoHS 3 Compliant',
                        'name'       => 'Hazardous Substances Free',
                        'issuer'     => 'Directive 2011/65/EU & (EU) 2015/863',
                        'cert_no'    => 'ROHS-SRS-COMP-2025-019',
                        'validity'   => 'Annual Testing Audit - Current',
                        'color'      => '#10b981',
                        'points'     => array( 'Lead & Cadmium < 100 ppm', 'Zero Banned Phthalates (DEHP, BBP)', 'Safe for Electronics & Wiring' ),
                        'scope'      => 'Certified free of restricted heavy metals (Lead, Mercury, Cadmium, Hexavalent Chromium, PBB, PBDE) verified by ICP-OES laboratory spectrometry.',
                    ),
                    array(
                        'id'         => 'cert-reach',
                        'code'       => 'REACH Compliant',
                        'name'       => 'EU Chemical Safety Standard',
                        'issuer'     => 'Regulation (EC) No 1907/2006',
                        'cert_no'    => 'REACH-SVHC-240-SRS-92',
                        'validity'   => 'Updated to 240 SVHC List',
                        'color'      => '#8b5cf6',
                        'points'     => array( 'Zero Candidate List SVHC', 'Export-Ready for EU Moulding', 'Safe Chemical Pre-Registration' ),
                        'scope'      => 'Polymer compounds evaluated against the European Chemicals Agency (ECHA) candidate list of Substances of Very High Concern (SVHC), confirming concentrations strictly below 0.1% w/w.',
                    ),
                    array(
                        'id'         => 'cert-fda',
                        'code'       => 'FDA 21 CFR',
                        'name'       => 'Food Contact Safe Resin',
                        'issuer'     => 'US FDA 21 CFR 177.1520',
                        'cert_no'    => 'FDA-SRS-FC-2024-771',
                        'validity'   => 'Virgin PP & HDPE Grades',
                        'color'      => '#f59e0b',
                        'points'     => array( 'Zero Hazardous Leachables', 'Certified for Caps & Containers', 'Strict Sanitary Extrusion Line' ),
                        'scope'      => 'SRS Virgin PP and Food-Grade HDPE compounds formulated with FDA-cleared raw materials suitable for repeated contact with aqueous, acidic, and fatty foodstuffs.',
                    ),
                    array(
                        'id'         => 'cert-ce',
                        'code'       => 'CE Conformity',
                        'name'       => 'European Harmonized Norms',
                        'issuer'     => 'European Safety Directive',
                        'cert_no'    => 'CE-IND-SRS-2024-332',
                        'validity'   => 'Compliant Manufacturing Standard',
                        'color'      => '#ef233c',
                        'points'     => array( 'Conforms to EN 71-3 (Toy Safety)', 'High Mechanical Resilience', 'Audited Quality Assurance' ),
                        'scope'      => 'Polyamide and ABS compounding lots meet essential health and safety requirements for engineering consumer and industrial end-use articles sold within the European Economic Area.',
                    ),
                );

                foreach ( $all_certs as $cert ) :
                ?>
                    <article class="gp-certificate-card" id="<?php echo esc_attr( $cert['id'] ); ?>" style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                        <div class="gp-cert-card-top">
                            <span class="gp-cert-code-badge" style="background: <?php echo esc_attr( $cert['color'] ); ?>15; color: <?php echo esc_attr( $cert['color'] ); ?>; border: 1px solid <?php echo esc_attr( $cert['color'] ); ?>30;">
                                <?php echo esc_html( $cert['code'] ); ?>
                            </span>
                            <div class="gp-cert-verified-pill">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                <span><?php esc_html_e( 'Verified', 'gp-theme' ); ?></span>
                            </div>
                        </div>

                        <div class="gp-cert-card-content">
                            <h3 class="gp-cert-title"><?php echo esc_html( $cert['name'] ); ?></h3>
                            <p class="gp-cert-issuer"><?php echo esc_html( $cert['issuer'] ); ?></p>
                            
                            <ul class="gp-cert-points">
                                <?php foreach ( $cert['points'] as $pt ) : ?>
                                    <li>
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="<?php echo esc_attr( $cert['color'] ); ?>" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <span><?php echo esc_html( $pt ); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="gp-cert-card-footer">
                            <button type="button" class="gp-cert-view-btn gp-cert-modal-trigger" 
                                    data-id="<?php echo esc_attr( $cert['id'] ); ?>" 
                                    data-code="<?php echo esc_attr( $cert['code'] ); ?>"
                                    data-title="<?php echo esc_attr( $cert['name'] ); ?>"
                                    data-issuer="<?php echo esc_attr( $cert['issuer'] ); ?>"
                                    data-certno="<?php echo esc_attr( $cert['cert_no'] ); ?>"
                                    data-validity="<?php echo esc_attr( $cert['validity'] ); ?>"
                                    data-scope="<?php echo esc_attr( $cert['scope'] ); ?>">
                                <span><?php esc_html_e( 'View Audit Certificate', 'gp-theme' ); ?></span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </button>
                        </div>
                    </article>
                <?php endforeach; ?>

            </div>

            <!-- Direct Verification Contact Strip -->
            <div class="gp-custom-compounding-box" style="margin-top: 50px;">
                <div class="gp-cc-content">
                    <span class="gp-cc-pill"><?php esc_html_e( 'Audit Document Verification', 'gp-theme' ); ?></span>
                    <h3 class="gp-cc-title"><?php esc_html_e( 'Need Official Certified Copies for Customer Quality Audits?', 'gp-theme' ); ?></h3>
                    <p class="gp-cc-desc"><?php esc_html_e( 'Our regulatory affairs team provides signed, stamped copies of ISO certificates, RoHS testing reports, and batch analysis sheets for your vendor approval file.', 'gp-theme' ); ?></p>
                </div>
                <div class="gp-cc-actions">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gp-btn gp-btn-primary gp-rfq-modal-trigger" data-product="Official Certificate Copy">
                        <span><?php esc_html_e( 'Request Audit Documentation', 'gp-theme' ); ?></span>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();
