<?php
/**
 * Template Name: Elementor Full Width
 * Template Post Type: page, post, gp_product
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main gp-elementor-fullwidth-wrapper" style="width:100%; max-width:100%; padding:0; margin:0;">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php
get_footer();
