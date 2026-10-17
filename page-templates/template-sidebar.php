<?php
/**
 * Template Name: Page with Sidebar
 * Template Post Type: page
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
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

    <!-- Page Content Section with Sidebar -->
    <section class="gp-section gp-page-content-section">
        <div class="gp-container">
            <div class="gp-page-layout-grid">
                
                <!-- Main Content Article -->
                <div class="gp-page-main-col">
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'gp-article' ); ?>>
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
                    <?php if ( is_active_sidebar( 'sidebar-1' ) ) { dynamic_sidebar( 'sidebar-1' ); } else { get_sidebar(); } ?>
                </aside>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();
