<?php
/**
 * The template for displaying all pages
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// Check if current page is built with Elementor
$is_elementor = false;
if ( did_action( 'elementor/loaded' ) && class_exists( '\Elementor\Plugin' ) ) {
    $document = \Elementor\Plugin::$instance->documents->get( get_the_ID() );
    if ( $document && $document->is_built_with_elementor() ) {
        $is_elementor = true;
    }
}
?>

<?php if ( $is_elementor ) : ?>

    <main id="primary" class="site-main gp-elementor-page-wrapper" style="width:100%; max-width:100%; padding:0; margin:0;">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </main>

<?php else : ?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php esc_html_e( 'SRS POLYMER', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php the_title(); ?></h1>
                <?php gp_breadcrumbs(); ?>
            </div>
        </div>
    </section>

    <!-- Page Content Section -->
    <section class="gp-section gp-page-content-section">
        <div class="gp-container">
            <div class="gp-page-layout-grid">
                
                <!-- Main Content Article -->
                <div class="gp-page-main-col">
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'gp-article' ); ?>>
                        <div class="gp-article-header">
                            <span class="gp-article-badge">🏭 <?php esc_html_e( 'Official Corporate Overview', 'gp-theme' ); ?></span>
                            <h2 class="gp-article-title"><?php the_title(); ?></h2>
                        </div>
                        <div class="entry-content gp-typography">
                            <?php
                            while ( have_posts() ) :
                                the_post();
                                the_content();

                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gp-theme' ),
                                    'after'  => '</div>',
                                ) );
                            endwhile;
                            ?>
                        </div>
                    </article>
                </div>

                <!-- Right Sidebar Widgets -->
                <aside class="gp-page-sidebar-col">
                    
                    <!-- Quick RFQ Widget Card -->
                    <div class="gp-sidebar-card gp-rfq-widget-card">
                        <div class="gp-sidebar-badge"><?php esc_html_e( 'Direct Consultation', 'gp-theme' ); ?></div>
                        <h3 class="gp-sidebar-card-title"><?php esc_html_e( 'Need Custom Tooling or Bulk Packaging?', 'gp-theme' ); ?></h3>
                        <p class="gp-sidebar-card-desc">
                            <?php esc_html_e( 'Speak directly with our technical mould design engineers for parison programming, custom blow moulds, or tactical UAV specifications.', 'gp-theme' ); ?>
                        </p>
                        <button class="gp-btn gp-btn-primary gp-btn-full gp-btn-rfq-trigger gp-btn-enquire" data-product="<?php the_title_attribute(); ?>">
                            <span><?php esc_html_e( 'Request Immediate Quote', 'gp-theme' ); ?></span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </button>
                        <div class="gp-sidebar-phone">
                            <span>📞 <?php esc_html_e( 'Direct Desk:', 'gp-theme' ); ?></span>
                            <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9]/', '', get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ) ); ?>">
                                <?php echo esc_html( get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ); ?>
                            </a>
                        </div>
                    </div>

                    <!-- ISO & Quality Guarantee Widget -->
                    <div class="gp-sidebar-card gp-quality-widget-card">
                        <h4 class="gp-sidebar-card-heading">🛡️ <?php esc_html_e( 'Manufacturing Assurance', 'gp-theme' ); ?></h4>
                        <ul class="gp-sidebar-checklist">
                            <li><strong>ISO 9001:2015</strong> <?php esc_html_e( 'Certified Manufacturing Facility', 'gp-theme' ); ?></li>
                            <li><strong>UN Approved</strong> <?php esc_html_e( 'Packaging for Corrosive Chemicals', 'gp-theme' ); ?></li>
                            <li><strong>MIL-SPEC</strong> <?php esc_html_e( 'Standards for Defence & UAV Drone Parts', 'gp-theme' ); ?></li>
                            <li><strong>4 Units</strong> <?php esc_html_e( 'Over 120,000 sq.ft. Plant Infrastructure', 'gp-theme' ); ?></li>
                        </ul>
                    </div>

                </aside>

            </div>
        </div>
    </section>

</main>

<?php endif; ?>

<?php
get_footer();
