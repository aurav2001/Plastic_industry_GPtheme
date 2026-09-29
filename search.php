<?php
/**
 * The template for displaying search results pages
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
                <span class="gp-sub-tag"><?php esc_html_e( 'SEARCH RESULTS', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title">
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Results for: %s', 'gp-theme' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                </h1>
                <?php gp_breadcrumbs(); ?>
            </div>
        </div>
    </section>

    <section class="gp-section gp-archive-section">
        <div class="gp-container">
            <div class="gp-two-col-layout">
                
                <div class="gp-main-col">
                    <?php if ( have_posts() ) : ?>
                        <div class="gp-news-grid">
                            <?php
                            while ( have_posts() ) : the_post();
                            ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class( 'gp-news-card' ); ?>>
                                    <div class="gp-news-body">
                                        <span class="gp-news-cat"><?php echo esc_html( get_post_type_object( get_post_type() )->labels->singular_name ); ?></span>
                                        <h3 class="gp-news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="gp-news-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 22 ); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="gp-news-readmore">
                                            <span><?php esc_html_e( 'View Page', 'gp-theme' ); ?></span>
                                            <span class="gp-arrow">→</span>
                                        </a>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>

                        <div class="gp-pagination-wrapper">
                            <?php
                            the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => '← ' . esc_html__( 'Previous', 'gp-theme' ),
                                'next_text' => esc_html__( 'Next', 'gp-theme' ) . ' →',
                            ) );
                            ?>
                        </div>

                    <?php else : ?>
                        <div class="gp-no-posts">
                            <h3><?php esc_html_e( 'Nothing Found', 'gp-theme' ); ?></h3>
                            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords or browse our product catalog.', 'gp-theme' ); ?></p>
                            <a href="<?php echo esc_url( home_url( '/#products' ) ); ?>" class="gp-btn gp-btn-primary"><?php esc_html_e( 'Browse Products', 'gp-theme' ); ?></a>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="gp-side-col">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();
