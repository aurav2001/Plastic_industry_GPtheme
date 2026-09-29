<?php
/**
 * The template for displaying all single posts
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <!-- Post Header Banner -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <div class="gp-entry-meta-top">
                    <?php gp_posted_on(); ?>
                    <span class="sep">•</span>
                    <?php gp_posted_by(); ?>
                </div>
                <h1 class="gp-page-title"><?php the_title(); ?></h1>
                <?php gp_breadcrumbs(); ?>
            </div>
        </div>
    </section>

    <section class="gp-section gp-single-section">
        <div class="gp-container">
            <div class="gp-two-col-layout">
                
                <!-- Main Post Content -->
                <div class="gp-main-col">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                    ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'gp-single-article' ); ?>>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="gp-single-featured-image">
                                    <?php the_post_thumbnail( 'full' ); ?>
                                </div>
                            <?php endif; ?>

                            <div class="entry-content gp-typography">
                                <?php
                                the_content();

                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gp-theme' ),
                                    'after'  => '</div>',
                                ) );
                                ?>
                            </div>

                            <footer class="gp-entry-footer">
                                <div class="gp-tags-list">
                                    <?php the_tags( '<span class="gp-tags-label">Tags:</span> ', ', ' ); ?>
                                </div>
                            </footer>

                            <!-- Post Navigation -->
                            <div class="gp-post-navigation">
                                <div class="gp-nav-prev"><?php previous_post_link( '%link', '← %title' ); ?></div>
                                <div class="gp-nav-next"><?php next_post_link( '%link', '%title →' ); ?></div>
                            </div>

                            <!-- Comments Section -->
                            <?php
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Sidebar -->
                <div class="gp-side-col">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();
