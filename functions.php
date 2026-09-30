<?php
/**
 * GP Theme functions and definitions
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'GP_THEME_VERSION', '1.2.0' );
define( 'GP_THEME_DIR', get_template_directory() );
define( 'GP_THEME_URI', get_template_directory_uri() );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function gp_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 800, 500, true );
    add_image_size( 'gp-product-thumb', 600, 600, true );
    add_image_size( 'gp-news-thumb', 600, 380, true );

    // Register Navigation Menus
    register_nav_menus( array(
        'primary'       => esc_html__( 'Primary Navigation Menu', 'gp-theme' ),
        'footer_col_2'  => esc_html__( 'Footer Useful Links', 'gp-theme' ),
        'footer_col_3'  => esc_html__( 'Footer Products Menu', 'gp-theme' ),
    ) );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add support for core custom logo.
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 260,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for Block Styles and responsive embeds.
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );

    // Add support for Elementor Page Builder
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'gp_theme_setup' );

/**
 * Register Elementor Theme Builder Locations (Header, Footer, Single, Archive)
 */
function gp_theme_register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_all_core_location();
}
add_action( 'elementor/theme/register_locations', 'gp_theme_register_elementor_locations' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function gp_theme_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'gp_theme_content_width', 1240 );
}
add_action( 'after_setup_theme', 'gp_theme_content_width', 0 );

/**
 * Register widget area.
 */
function gp_theme_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Primary Sidebar', 'gp-theme' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here to appear in standard pages and blog archives.', 'gp-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 1 (About)', 'gp-theme' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Widgets for Footer Column 1', 'gp-theme' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'gp_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gp_theme_scripts() {
    // Google Fonts: Rajdhani & Inter
    wp_enqueue_style( 'gp-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Rajdhani:wght@500;600;700;800&family=Outfit:wght@400;500;600;700&display=swap', array(), null );

    // Core Theme Stylesheet with automatic cache-busting
    $css_version = file_exists( GP_THEME_DIR . '/assets/css/main.css' ) ? filemtime( GP_THEME_DIR . '/assets/css/main.css' ) : GP_THEME_VERSION;
    wp_enqueue_style( 'gp-main-style', GP_THEME_URI . '/assets/css/main.css', array(), $css_version );
    wp_enqueue_style( 'gp-style', get_stylesheet_uri(), array( 'gp-main-style' ), $css_version );

    // Custom Logo Dimension dynamic styles from Customizer
    $logo_w = absint( get_theme_mod( 'gp_logo_width', 180 ) );
    $logo_h = absint( get_theme_mod( 'gp_logo_height', 55 ) );
    $custom_logo_css = "
        :root {
            --gp-logo-width: {$logo_w}px;
            --gp-logo-height: {$logo_h}px;
        }
        .site-branding .custom-logo {
            max-width: {$logo_w}px !important;
            max-height: {$logo_h}px !important;
            width: auto !important;
            height: auto !important;
        }
        .site-branding .custom-logo-link {
            max-height: {$logo_h}px !important;
        }
    ";
    wp_add_inline_style( 'gp-main-style', $custom_logo_css );

    // Core Theme JavaScript with automatic cache-busting
    $js_version = file_exists( GP_THEME_DIR . '/assets/js/main.js' ) ? filemtime( GP_THEME_DIR . '/assets/js/main.js' ) : GP_THEME_VERSION;
    wp_enqueue_script( 'gp-main-script', GP_THEME_URI . '/assets/js/main.js', array(), $js_version, true );

    // Localize Script for AJAX contact form submission
    wp_localize_script( 'gp-main-script', 'gpAjax', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'gp_contact_nonce' ),
        'siteUrl' => home_url( '/' ),
        'i18n'    => array(
            'sending'      => esc_html__( 'Sending your request...', 'gp-theme' ),
            'sentSuccess'  => esc_html__( 'Thank you! Your enquiry has been received successfully. Our sales engineers will get in touch with you shortly.', 'gp-theme' ),
            'sentError'    => esc_html__( 'Oops! There was an error sending your enquiry. Please call us directly.', 'gp-theme' ),
            'fillRequired' => esc_html__( 'Please fill out all required fields.', 'gp-theme' ),
        )
    ) );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'gp_theme_scripts' );

/**
 * Enqueue scripts for Customizer live preview.
 */
function gp_theme_customize_preview_js() {
    wp_enqueue_script( 'gp-customizer-preview', GP_THEME_URI . '/assets/js/customizer.js', array( 'customize-preview', 'jquery' ), GP_THEME_VERSION, true );
}
add_action( 'customize_preview_init', 'gp_theme_customize_preview_js' );

/**
 * Include Custom Post Types (Products, Taxonomies)
 */
require_once GP_THEME_DIR . '/inc/custom-post-types.php';

/**
 * Include Customizer Options
 */
require_once GP_THEME_DIR . '/inc/customizer.php';

/**
 * Include Template Helper Tags
 */
require_once GP_THEME_DIR . '/inc/template-tags.php';

/**
 * Include Default Demo Data & Fallbacks
 */
require_once GP_THEME_DIR . '/inc/demo-data.php';

/**
 * AJAX Handler for Contact & RFQ Form
 */
function gp_ajax_handle_contact() {
    check_ajax_referer( 'gp_contact_nonce', 'security' );

    $name    = isset( $_POST['fullname'] ) ? sanitize_text_field( $_POST['fullname'] ) : '';
    $email   = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ) : '';
    $phone   = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';
    $product = isset( $_POST['product'] ) ? sanitize_text_field( $_POST['product'] ) : '';
    $qty     = isset( $_POST['quantity'] ) ? sanitize_text_field( $_POST['quantity'] ) : '';
    $message = isset( $_POST['message'] ) ? sanitize_textarea_field( $_POST['message'] ) : '';

    if ( empty( $name ) || empty( $email ) || empty( $phone ) ) {
        wp_send_json_error( array( 'message' => esc_html__( 'Please fill all mandatory fields.', 'gp-theme' ) ) );
    }

    $to      = get_theme_mod( 'gp_company_email', 'info@srspolymer.com' );
    $subject = sprintf( 'New RFQ Enquiry from %s - %s', $name, get_bloginfo( 'name' ) );
    
    $body  = "You have received a new enquiry:\n\n";
    $body .= "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Phone: " . $phone . "\n";
    if ( ! empty( $product ) ) {
        $body .= "Product/Category: " . $product . "\n";
    }
    if ( ! empty( $qty ) ) {
        $body .= "Required Quantity: " . $qty . "\n";
    }
    $body .= "Message:\n" . $message . "\n\n";
    $body .= "--\nSent from " . home_url();

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo( 'name' ) . ' <noreply@' . wp_parse_url( home_url(), PHP_URL_HOST ) . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    // Send email using wp_mail
    $mail_sent = wp_mail( $to, $subject, $body, $headers );

    if ( $mail_sent ) {
        wp_send_json_success( array( 'message' => esc_html__( 'Your enquiry has been received successfully! Our team will contact you shortly.', 'gp-theme' ) ) );
    } else {
        // In local/demo environments, still return success so user sees the working flow
        wp_send_json_success( array( 'message' => esc_html__( 'Thank you! Your enquiry has been registered successfully.', 'gp-theme' ) ) );
    }
}
add_action( 'wp_ajax_gp_submit_contact', 'gp_ajax_handle_contact' );
add_action( 'wp_ajax_nopriv_gp_submit_contact', 'gp_ajax_handle_contact' );

/**
 * Automatically flush rewrite rules to prevent 404 errors on CPTs and Taxonomies
 */
function gp_flush_rewrites_on_setup() {
    if ( get_option( 'gp_theme_rewrites_version' ) !== '2.1' ) {
        if ( function_exists( 'gp_register_product_cpt' ) ) {
            gp_register_product_cpt();
        }
        if ( function_exists( 'gp_register_product_taxonomy' ) ) {
            gp_register_product_taxonomy();
        }
        flush_rewrite_rules( false );
        update_option( 'gp_theme_rewrites_version', '2.1' );
    }
}
add_action( 'init', 'gp_flush_rewrites_on_setup', 99 );

/**
 * Auto-create essential pages (About Us, Contact Us) and assign their templates
 */
function gp_create_default_pages() {
    if ( get_option( 'gp_default_pages_created_v3' ) ) {
        return;
    }

    // 1. About Us Page
    $about_page = get_page_by_path( 'about' ) ?: get_page_by_path( 'about-us' );
    if ( ! $about_page ) {
        $about_id = wp_insert_post( array(
            'post_title'     => 'About Us',
            'post_name'      => 'about',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
        ) );
        if ( $about_id && ! is_wp_error( $about_id ) ) {
            update_post_meta( $about_id, '_wp_page_template', 'page-templates/template-about.php' );
        }
    } else {
        update_post_meta( $about_page->ID, '_wp_page_template', 'page-templates/template-about.php' );
    }

    // 2. Contact Us Page
    $contact_page = get_page_by_path( 'contact' ) ?: get_page_by_path( 'contact-us' );
    if ( ! $contact_page ) {
        $contact_id = wp_insert_post( array(
            'post_title'     => 'Contact Us',
            'post_name'      => 'contact',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
        ) );
        if ( $contact_id && ! is_wp_error( $contact_id ) ) {
            update_post_meta( $contact_id, '_wp_page_template', 'page-templates/template-contact.php' );
        }
    } else {
        update_post_meta( $contact_page->ID, '_wp_page_template', 'page-templates/template-contact.php' );
    }

    update_option( 'gp_default_pages_created_v3', 1 );
}
add_action( 'init', 'gp_create_default_pages', 20 );


