<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <section class="gp-section gp-404-section">
        <div class="gp-container">
            <div class="gp-404-card">
                <div class="gp-404-code">404</div>
                <h1 class="gp-404-title"><?php esc_html_e( 'Page Not Found', 'gp-theme' ); ?></h1>
                <p class="gp-404-desc">
                    <?php esc_html_e( 'The industrial page or product specification you are looking for might have been relocated, updated, or does not exist.', 'gp-theme' ); ?>
                </p>

                <div class="gp-404-search">
                    <form role="search" method="get" class="gp-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div class="gp-search-input-wrap">
                            <input type="search" class="gp-search-field" placeholder="<?php esc_attr_e( 'Search products, drums, drones...', 'gp-theme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                            <button type="submit" class="gp-btn gp-btn-primary">
                                <?php esc_html_e( 'Search', 'gp-theme' ); ?>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="gp-404-links">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="gp-btn gp-btn-primary">
                        <span><?php esc_html_e( 'Return to Home', 'gp-theme' ); ?></span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/#products' ) ); ?>" class="gp-btn gp-btn-outline">
                        <span><?php esc_html_e( 'Explore Product Catalog', 'gp-theme' ); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
