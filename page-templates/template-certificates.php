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

            <!-- Certificates Responsive Grid -->
            <div class="gp-certificates-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-top: 36px;">
                
                <?php
                $all_certs = array(
                    array(
                        'id'         => 'cert-iso-9001',
                        'code'       => 'ISO 9001:2015',
                        'name'       => 'Quality Management System',
                        'category'   => 'Quality Assurance',
                        'issuer'     => 'TUV SUD / IAF Accredited Registrar',
                        'cert_no'    => 'QMS/SRS/2024/9081',
                        'validity'   => 'Valid through Dec 2027',
                        'color'      => '#0097db',
                        'points'     => array(
                            'ASTM D1238 Batch-Wise MFI Rheology Testing',
                            'Zero Particulate Impurity Melt Filtration',
                            'Lot-to-Lot Traceability & Standard COA Included',
                        ),
                        'scope'      => 'Manufacturing, compounding, laboratory batch testing and nationwide distribution of virgin and reprocessed plastic granules (PP, HDPE, ABS, PVC, LDPE) and masterbatches for plastic injection and extrusion industries.',
                    ),
                    array(
                        'id'         => 'cert-iso-14001',
                        'code'       => 'ISO 14001:2015',
                        'name'       => 'Environmental Management System',
                        'category'   => 'Sustainability',
                        'issuer'     => 'JAS-ANZ Certified Registrar',
                        'cert_no'    => 'EMS/SRS/2024/1429',
                        'validity'   => 'Valid through Aug 2027',
                        'color'      => '#10b981',
                        'points'     => array(
                            '100% Circular Post-Industrial Polymer Compounding',
                            'Zero Industrial Effluent Discharge (ZLD Compliant)',
                            'Low-Carbon Twin Screw Degassing Technology',
                        ),
                        'scope'      => 'Eco-compliant closed-loop polymer recycling, energy-efficient twin-screw extrusion, vacuum volatile degassing, and sustainable reprocessed polymer supply chains.',
                    ),
                    array(
                        'id'         => 'cert-rohs',
                        'code'       => 'RoHS 3 Compliant',
                        'name'       => 'Hazardous Substances Free',
                        'category'   => 'Chemical Safety',
                        'issuer'     => 'Directive 2011/65/EU & (EU) 2015/863',
                        'cert_no'    => 'ROHS-SRS-COMP-2025-019',
                        'validity'   => 'Annual SGS Audit Verified',
                        'color'      => '#6366f1',
                        'points'     => array(
                            'Lead, Mercury, Cadmium < 100 ppm Tested',
                            'Zero Banned Phthalates (DEHP, BBP, DBP, DIBP)',
                            'Safe for Electrical, Electronics & Consumer Goods',
                        ),
                        'scope'      => 'Certified free of restricted heavy metals and plasticizers, laboratory verified by ICP-OES and GC-MS spectrometry for export electronic compliance.',
                    ),
                    array(
                        'id'         => 'cert-reach',
                        'code'       => 'REACH Compliant',
                        'name'       => 'EU Chemical Safety Standard',
                        'category'   => 'EU Compliance',
                        'issuer'     => 'Regulation (EC) No 1907/2006',
                        'cert_no'    => 'REACH-SVHC-240-SRS-92',
                        'validity'   => 'Updated to 240 SVHC List',
                        'color'      => '#8b5cf6',
                        'points'     => array(
                            'Zero Candidate List Substances of Very High Concern',
                            'Fully Compliant for Direct Moulding Exports to EU',
                            'Non-Toxic Formulations with Complete Chemical Dossier',
                        ),
                        'scope'      => 'Polymer compounds evaluated against the European Chemicals Agency (ECHA) candidate list of Substances of Very High Concern (SVHC), confirming concentrations strictly below 0.1% w/w.',
                    ),
                    array(
                        'id'         => 'cert-astm',
                        'code'       => 'ASTM Standards',
                        'name'       => 'In-House Polymer Testing Lab',
                        'category'   => 'Lab Accreditation',
                        'issuer'     => 'NABL Traceable Test Equipment',
                        'cert_no'    => 'LAB/SRS/2024/5112',
                        'validity'   => 'Continuous In-House QA/QC',
                        'color'      => '#ef233c',
                        'points'     => array(
                            'Computerized Extrusion Plastometer (MFI D1238)',
                            'Universal 50 kN Tensile & Flexural Modulus Tester',
                            'Notched Izod & Charpy Impact Toughness to -20°C',
                        ),
                        'scope'      => 'State-of-the-art testing laboratory calibrated to ASTM D1238, ASTM D792, ASTM D638, and ASTM D256 standards with lot-by-lot COA issuance.',
                    ),
                    array(
                        'id'         => 'cert-fda',
                        'code'       => 'FDA 21 CFR',
                        'name'       => 'Food Contact Safe Resin',
                        'category'   => 'Food Grade Safe',
                        'issuer'     => 'US FDA 21 CFR 177.1520',
                        'cert_no'    => 'FDA-SRS-FC-2024-771',
                        'validity'   => 'Virgin PP & HDPE Grades',
                        'color'      => '#f59e0b',
                        'points'     => array(
                            'Zero Hazardous Leachables or Odor Migration',
                            'Sanitary Extrusion Line for Caps, Closures & Tubs',
                            'Complies with Global Food Packaging Standards',
                        ),
                        'scope'      => 'SRS Virgin PP and Food-Grade HDPE compounds formulated with FDA-cleared raw materials suitable for repeated contact with aqueous, acidic, and fatty foodstuffs.',
                    ),
                    array(
                        'id'         => 'cert-ce',
                        'code'       => 'CE Conformity',
                        'name'       => 'European Harmonized Norms',
                        'category'   => 'Safety Directive',
                        'issuer'     => 'European Safety Directive & EN 71-3',
                        'cert_no'    => 'CE-IND-SRS-2024-332',
                        'validity'   => 'Compliant Manufacturing Standard',
                        'color'      => '#0284c7',
                        'points'     => array(
                            'Conforms to EN 71-3 Safety Standards (Toy Safety)',
                            'High Impact Resilience & Thermal Mechanical Stability',
                            'Audited Quality Assurance for Engineering Goods',
                        ),
                        'scope'      => 'Polyamide and ABS compounding lots meet essential health and safety requirements for engineering consumer and industrial end-use articles sold within the European Economic Area.',
                    ),
                    array(
                        'id'         => 'cert-bis',
                        'code'       => 'BIS / IS Standards',
                        'name'       => 'Bureau of Indian Standards',
                        'category'   => 'National Benchmark',
                        'issuer'     => 'Government of India Standards',
                        'cert_no'    => 'BIS/SRS/2024/3028',
                        'validity'   => 'Certified Supply Standards',
                        'color'      => '#0d9488',
                        'points'     => array(
                            'Conforms to IS 10951 (Polypropylene Materials)',
                            'Conforms to IS 7328 (HDPE Pipe & Extrusion Resins)',
                            'Approved for Public Works, Infra & OEM Tenders',
                        ),
                        'scope'      => 'Raw material formulations certified to meet national Indian standards for pressure piping, heavy-duty industrial containers, and engineering mouldings.',
                    ),
                );

                foreach ( $all_certs as $cert ) :
                ?>
                    <article class="gp-certificate-card" id="<?php echo esc_attr( $cert['id'] ); ?>" style="--card-accent: <?php echo esc_attr( $cert['color'] ); ?>;">
                        <div class="gp-cert-card-header">
                            <span class="gp-cert-badge-status" style="--badge-accent: <?php echo esc_attr( $cert['color'] ); ?>;">
                                <?php echo esc_html( $cert['category'] ); ?>
                            </span>
                            <span class="gp-cert-code">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="<?php echo esc_attr( $cert['color'] ); ?>" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                <span><?php echo esc_html( $cert['code'] ); ?></span>
                            </span>
                        </div>

                        <div class="gp-cert-visual-wrap">
                            <div class="gp-cert-seal-icon" style="color: <?php echo esc_attr( $cert['color'] ); ?>; background: <?php echo esc_attr( $cert['color'] ); ?>15;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                            </div>
                            <div class="gp-cert-visual-border">
                                <span class="gp-cert-accreditation-tag"><?php echo esc_html( $cert['issuer'] ); ?></span>
                            </div>
                        </div>

                        <div class="gp-cert-body">
                            <h3 class="gp-cert-title"><?php echo esc_html( $cert['name'] ); ?></h3>
                            <p class="gp-cert-scope"><?php echo esc_html( $cert['scope'] ); ?></p>

                            <?php if ( ! empty( $cert['points'] ) ) : ?>
                            <ul class="gp-cert-points-list">
                                <?php foreach ( $cert['points'] as $pt ) : ?>
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
                                    <strong class="gp-cmi-value"><?php echo esc_html( $cert['cert_no'] ); ?></strong>
                                </div>
                                <div class="gp-cert-meta-item">
                                    <span class="gp-cmi-label"><?php esc_html_e( 'Valid Through:', 'gp-theme' ); ?></span>
                                    <strong class="gp-cmi-value"><?php echo esc_html( $cert['validity'] ); ?></strong>
                                </div>
                            </div>

                            <div class="gp-cert-actions">
                                <button type="button" 
                                        class="gp-btn-view-cert" 
                                        data-id="<?php echo esc_attr( $cert['id'] ); ?>"
                                        data-code="<?php echo esc_attr( $cert['code'] ); ?>"
                                        data-title="<?php echo esc_attr( $cert['name'] ); ?>"
                                        data-certno="<?php echo esc_attr( $cert['cert_no'] ); ?>"
                                        data-body="<?php echo esc_attr( $cert['issuer'] ); ?>"
                                        data-validity="<?php echo esc_attr( $cert['validity'] ); ?>"
                                        data-scope="<?php echo esc_attr( $cert['scope'] ); ?>"
                                        data-color="<?php echo esc_attr( $cert['color'] ); ?>"
                                        data-cert-title="<?php echo esc_attr( $cert['name'] ); ?>"
                                        data-cert-code="<?php echo esc_attr( $cert['code'] ); ?>"
                                        data-cert-issuer="<?php echo esc_attr( $cert['issuer'] ); ?>"
                                        data-cert-number="<?php echo esc_attr( $cert['cert_no'] ); ?>"
                                        data-cert-validity="<?php echo esc_attr( $cert['validity'] ); ?>"
                                        data-cert-scope="<?php echo esc_attr( $cert['scope'] ); ?>">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    <span><?php esc_html_e( 'View Certificate', 'gp-theme' ); ?></span>
                                </button>
                                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gp-btn-download-cert gp-rfq-modal-trigger" data-product="Certificate Copy: <?php echo esc_attr( $cert['code'] ); ?>">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                    <span><?php esc_html_e( 'Request Copy', 'gp-theme' ); ?></span>
                                </a>
                            </div>
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
