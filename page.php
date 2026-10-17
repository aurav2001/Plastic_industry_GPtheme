<?php
/**
 * The template for displaying all pages
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

// 3. If this page is the Front Page (and not built with Elementor), directly render the full front-page.php template
if ( is_front_page() || ( is_page() && get_the_ID() == get_option( 'page_on_front' ) ) ) {
    include get_template_directory() . '/front-page.php';
    return;
}

get_header();
?>

<main id="primary" class="site-main">

    <!-- Page Header Banner -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php echo esc_html( get_theme_mod( 'gp_company_short', 'SRS' ) ); ?> <?php esc_html_e( 'POLYMER', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php the_title(); ?></h1>
                <?php if ( function_exists( 'gp_breadcrumbs' ) ) { gp_breadcrumbs(); } ?>
            </div>
        </div>
    </section>

    <!-- Page Content Section -->
    <section class="gp-section gp-page-content-section">
        <div class="gp-container">
            <div class="gp-page-layout-fullwidth">
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'gp-article gp-article-clean' ); ?>>
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
        </div>
    </section>

</main>

<?php
get_footer();
