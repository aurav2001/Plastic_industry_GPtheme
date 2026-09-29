<?php
/**
 * Custom template tags for this theme
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'gp_posted_on' ) ) :
    function gp_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() )
        );

        echo '<span class="posted-on"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> ' . $time_string . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
endif;

if ( ! function_exists( 'gp_posted_by' ) ) :
    function gp_posted_by() {
        echo '<span class="byline"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span></span>';
    }
endif;

if ( ! function_exists( 'gp_breadcrumbs' ) ) :
    function gp_breadcrumbs() {
        if ( is_front_page() ) {
            return;
        }

        echo '<nav class="gp-breadcrumbs" aria-label="Breadcrumb">';
        echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'gp-theme' ) . '</a>';
        echo '<span class="sep">/</span>';

        if ( is_singular( 'gp_product' ) ) {
            $terms = get_the_terms( get_the_ID(), 'gp_product_cat' );
            if ( $terms && ! is_wp_error( $terms ) ) {
                $term = array_shift( $terms );
                echo '<a href="' . esc_url( get_term_link( $term ) ) . '">' . esc_html( $term->name ) . '</a>';
                echo '<span class="sep">/</span>';
            }
            echo '<span class="current">' . esc_html( get_the_title() ) . '</span>';
        } elseif ( is_post_type_archive( 'gp_product' ) || is_tax( 'gp_product_cat' ) ) {
            if ( is_tax( 'gp_product_cat' ) ) {
                $term = get_queried_object();
                echo '<a href="' . esc_url( get_post_type_archive_link( 'gp_product' ) ) . '">' . esc_html__( 'Products', 'gp-theme' ) . '</a>';
                echo '<span class="sep">/</span>';
                echo '<span class="current">' . esc_html( $term->name ) . '</span>';
            } else {
                echo '<span class="current">' . esc_html__( 'Products Catalog', 'gp-theme' ) . '</span>';
            }
        } elseif ( is_single() ) {
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                echo '<span class="sep">/</span>';
            }
            echo '<span class="current">' . esc_html( get_the_title() ) . '</span>';
        } elseif ( is_page() ) {
            echo '<span class="current">' . esc_html( get_the_title() ) . '</span>';
        } elseif ( is_category() ) {
            echo '<span class="current">' . esc_html( single_cat_title( '', false ) ) . '</span>';
        } elseif ( is_search() ) {
            echo '<span class="current">' . esc_html__( 'Search: ', 'gp-theme' ) . esc_html( get_search_query() ) . '</span>';
        } elseif ( is_404() ) {
            echo '<span class="current">' . esc_html__( 'Error 404', 'gp-theme' ) . '</span>';
        }
        echo '</nav>';
    }
endif;
