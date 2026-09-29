<?php
/**
 * The template for displaying archive pages
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <!-- Archive Banner -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <?php
                the_archive_title( '<h1 class="gp-page-title">', '</h1>' );
                the_archive_description( '<div class="gp-archive-description">', '</div>' );
                gp_breadcrumbs();
                ?>
            </div>
        </div>
    </section>

    <!-- Archive Content -->
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
                                    <div class="gp-news-thumb">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail( 'gp-news-thumb' ); ?>
                                        <?php else : ?>
                                            <div class="gp-news-placeholder">
                                                <span><?php esc_html_e( 'News Article', 'gp-theme' ); ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <span class="gp-news-date"><?php echo esc_html( get_the_date( 'M d, Y' ) ); ?></span>
                                    </div>
                                    <div class="gp-news-body">
                                        <span class="gp-news-cat"><?php the_category( ', ' ); ?></span>
                                        <h3 class="gp-news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <p class="gp-news-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 18 ); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="gp-news-readmore">
                                            <span><?php esc_html_e( 'Read More', 'gp-theme' ); ?></span>
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
                            <h3><?php esc_html_e( 'No Posts Found', 'gp-theme' ); ?></h3>
                            <p><?php esc_html_e( 'It seems there are no articles published in this archive yet.', 'gp-theme' ); ?></p>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="gp-btn gp-btn-primary"><?php esc_html_e( 'Back to Home', 'gp-theme' ); ?></a>
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
