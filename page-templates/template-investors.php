<?php
/**
 * Template Name: Investors Page
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php esc_html_e( 'STAKEHOLDER GOVERNANCE', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php esc_html_e( 'Investor Relations & SEBI Disclosures', 'gp-theme' ); ?></h1>
                <?php gp_breadcrumbs(); ?>
            </div>
        </div>
    </section>

    <section class="gp-section">
        <div class="gp-container">
            <div class="gp-section-header">
                <span class="gp-sub-tag"><?php esc_html_e( 'TRANSPARENCY & COMPLIANCE', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'Corporate Governance & Reports', 'gp-theme' ); ?></h2>
                <p class="gp-section-subtitle"><?php esc_html_e( 'Access statutory filings, financial information, board composition, and draft red herring prospectuses.', 'gp-theme' ); ?></p>
            </div>

            <div class="gp-services-grid">
                <div class="gp-service-card">
                    <h3 class="gp-service-title"><?php esc_html_e( 'Board Composition & Committees', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc"><?php esc_html_e( 'Details of our Executive Directors, Independent Board Members, Audit Committee, and Stakeholder Relationship Committee.', 'gp-theme' ); ?></p>
                    <a href="#contact" class="gp-card-link"><span><?php esc_html_e( 'Request Document ›', 'gp-theme' ); ?></span></a>
                </div>
                <div class="gp-service-card">
                    <h3 class="gp-service-title"><?php esc_html_e( 'Financial Statements & Audits', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc"><?php esc_html_e( 'Audited balance sheets, profit & loss statements, cash flow accounts, and statutory audit reports for preceding fiscal years.', 'gp-theme' ); ?></p>
                    <a href="#contact" class="gp-card-link"><span><?php esc_html_e( 'Request Statement ›', 'gp-theme' ); ?></span></a>
                </div>
                <div class="gp-service-card">
                    <h3 class="gp-service-title"><?php esc_html_e( 'Statutory Policies & Code of Conduct', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc"><?php esc_html_e( 'Whistleblower policy, POSH compliance, Materiality disclosure policy, CSR commitments, and Insider Trading code.', 'gp-theme' ); ?></p>
                    <a href="#contact" class="gp-card-link"><span><?php esc_html_e( 'View Policies ›', 'gp-theme' ); ?></span></a>
                </div>
                <div class="gp-service-card">
                    <h3 class="gp-service-title"><?php esc_html_e( 'RHP & Offer Documents', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc"><?php esc_html_e( 'Draft Red Herring Prospectus (DRHP) and Red Herring Prospectus (RHP) filed in accordance with SEBI ICDR regulations.', 'gp-theme' ); ?></p>
                    <a href="#contact" class="gp-card-link"><span><?php esc_html_e( 'Download Filing ›', 'gp-theme' ); ?></span></a>
                </div>
                <div class="gp-service-card">
                    <h3 class="gp-service-title"><?php esc_html_e( 'Industry Reports on Plastic Moulding', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc"><?php esc_html_e( 'Comprehensive third-party market assessment of Indian plastic moulding and defence drone manufacturing industry.', 'gp-theme' ); ?></p>
                    <a href="#contact" class="gp-card-link"><span><?php esc_html_e( 'Read Analysis ›', 'gp-theme' ); ?></span></a>
                </div>
                <div class="gp-service-card">
                    <h3 class="gp-service-title"><?php esc_html_e( 'Investor Grievance Redressal', 'gp-theme' ); ?></h3>
                    <p class="gp-service-desc"><?php esc_html_e( 'Direct contact channel to the Company Secretary and Registrar & Share Transfer Agent (RTA) for shareholder queries.', 'gp-theme' ); ?></p>
                    <a href="#contact" class="gp-card-link"><span><?php esc_html_e( 'Contact Compliance Officer ›', 'gp-theme' ); ?></span></a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
