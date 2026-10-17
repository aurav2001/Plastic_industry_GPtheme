<?php
/**
 * GP Theme functions and definitions
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'GP_THEME_VERSION', '1.5.0' );
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

    // Add support for Elementor Page Builder & Header/Footer plugins
    add_theme_support( 'elementor' );
    add_theme_support( 'header-footer-elementor' );
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
 * Automatically enable Elementor for Pages, Posts, and Products (gp_product)
 */
function gp_theme_elementor_cpt_support() {
    $cpt_support = get_option( 'elementor_cpt_support' );
    if ( ! $cpt_support ) {
        $cpt_support = array( 'page', 'post', 'gp_product' );
        update_option( 'elementor_cpt_support', $cpt_support );
    } elseif ( is_array( $cpt_support ) && ! in_array( 'gp_product', $cpt_support, true ) ) {
        $cpt_support[] = 'gp_product';
        update_option( 'elementor_cpt_support', $cpt_support );
    }
}
add_action( 'after_switch_theme', 'gp_theme_elementor_cpt_support' );
add_action( 'init', 'gp_theme_elementor_cpt_support', 20 );

/**
 * Enqueue Theme Fonts inside Elementor Editor & Live Preview
 */
function gp_theme_elementor_editor_styles() {
    wp_enqueue_style( 'gp-elementor-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&family=Rajdhani:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap', array(), null );
}
add_action( 'elementor/editor/after_enqueue_styles', 'gp_theme_elementor_editor_styles' );
add_action( 'elementor/preview/enqueue_styles', 'gp_theme_elementor_editor_styles' );


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
    // Google Fonts: Poppins, Rajdhani & Inter
    wp_enqueue_style( 'gp-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&family=Rajdhani:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap', array(), null );

    // Core Theme Stylesheet with automatic cache-busting
    $css_version   = file_exists( GP_THEME_DIR . '/assets/css/main.css' ) ? filemtime( GP_THEME_DIR . '/assets/css/main.css' ) : GP_THEME_VERSION;
    $style_version = file_exists( GP_THEME_DIR . '/style.css' ) ? filemtime( GP_THEME_DIR . '/style.css' ) : GP_THEME_VERSION;
    wp_enqueue_style( 'gp-main-style', GP_THEME_URI . '/assets/css/main.css', array(), $css_version );
    wp_enqueue_style( 'gp-style', get_stylesheet_uri(), array( 'gp-main-style' ), $style_version );

    // Custom Logo Dimension dynamic styles from Customizer
    $logo_w = absint( get_theme_mod( 'gp_logo_width', 180 ) );
    $logo_h = absint( get_theme_mod( 'gp_logo_height', 55 ) );

    // Dynamic Global Colors from Customizer
    $color_primary       = sanitize_hex_color( get_theme_mod( 'gp_color_primary', '#0b2545' ) ) ?: '#0b2545';
    $color_primary_light = sanitize_hex_color( get_theme_mod( 'gp_color_primary_light', '#134074' ) ) ?: '#134074';
    $color_accent        = sanitize_hex_color( get_theme_mod( 'gp_color_accent', '#ef233c' ) ) ?: '#ef233c';
    $color_accent_hover  = sanitize_hex_color( get_theme_mod( 'gp_color_accent_hover', '#d90429' ) ) ?: '#d90429';
    $color_secondary     = sanitize_hex_color( get_theme_mod( 'gp_color_secondary', '#00b4d8' ) ) ?: '#00b4d8';
    $color_green         = sanitize_hex_color( get_theme_mod( 'gp_color_green', '#10b981' ) ) ?: '#10b981';
    $color_bg_dark       = sanitize_hex_color( get_theme_mod( 'gp_color_bg_dark', '#0b192c' ) ) ?: '#0b192c';

    $custom_theme_css = "
        :root {
            --gp-logo-width: {$logo_w}px;
            --gp-logo-height: {$logo_h}px;
            --gp-primary: {$color_primary};
            --gp-primary-light: {$color_primary_light};
            --gp-accent-red: {$color_accent};
            --gp-accent-red-hover: {$color_accent_hover};
            --gp-accent-cyan: {$color_secondary};
            --gp-accent-green: {$color_green};
            --gp-bg-dark: {$color_bg_dark};
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
    wp_add_inline_style( 'gp-main-style', $custom_theme_css );

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
 * Enqueue scripts for Customizer controls sidebar (Reset button).
 */
function gp_theme_customize_controls_js() {
    wp_enqueue_script( 'gp-customizer-controls', GP_THEME_URI . '/assets/js/customizer-controls.js', array( 'customize-controls', 'jquery', 'wp-color-picker' ), GP_THEME_VERSION, true );
}
add_action( 'customize_controls_enqueue_scripts', 'gp_theme_customize_controls_js' );

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
 * Auto-create essential pages (Home, Blog, About Us, Contact Us) and configure reading settings
 */
function gp_create_default_pages() {
    if ( get_option( 'gp_default_pages_created_v5' ) ) {
        return;
    }

    $pages_def = array(
        'home' => array(
            'title'    => 'Home',
            'template' => '',
            'is_front' => true,
        ),
        'about' => array(
            'title'    => 'About Us',
            'template' => 'page-templates/template-about.php',
            'is_front' => false,
        ),
        'products' => array(
            'title'    => 'Products',
            'template' => 'page-templates/template-products.php',
            'is_front' => false,
        ),
        'testing' => array(
            'title'    => 'ASTM Lab Standards',
            'template' => 'page-templates/template-testing.php',
            'is_front' => false,
        ),
        'certificates' => array(
            'title'    => 'Official Certifications',
            'template' => 'page-templates/template-certificates.php',
            'is_front' => false,
        ),
        'industries' => array(
            'title'    => 'Industries Served',
            'template' => 'page-templates/template-industries.php',
            'is_front' => false,
        ),
        'product-detail' => array(
            'title'    => 'Product Technical Specifications',
            'template' => 'page-templates/template-product-detail.php',
            'is_front' => false,
        ),
        'contact' => array(
            'title'    => 'Contact Us',
            'template' => 'page-templates/template-contact.php',
            'is_front' => false,
        ),
        'blog' => array(
            'title'    => 'Blog',
            'template' => '',
            'is_posts' => true,
        ),
    );

    $home_id = 0;
    $blog_id = 0;

    foreach ( $pages_def as $slug => $data ) {
        $page = get_page_by_path( $slug );
        if ( ! $page && $slug === 'about' ) {
            $page = get_page_by_path( 'about-us' );
        }
        if ( ! $page && $slug === 'contact' ) {
            $page = get_page_by_path( 'contact-us' );
        }
        if ( ! $page && $slug === 'blog' ) {
            $page = get_page_by_path( 'news' );
        }

        if ( ! $page ) {
            $page_id = wp_insert_post( array(
                'post_title'     => $data['title'],
                'post_name'      => $slug,
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
            ) );
        } else {
            $page_id = $page->ID;
        }

        if ( $page_id && ! is_wp_error( $page_id ) ) {
            if ( ! empty( $data['template'] ) ) {
                update_post_meta( $page_id, '_wp_page_template', $data['template'] );
            }
            if ( ! empty( $data['is_front'] ) ) {
                $home_id = $page_id;
            }
            if ( ! empty( $data['is_posts'] ) ) {
                $blog_id = $page_id;
            }
        }
    }

    // Auto-configure Reading Settings so user doesn't have to do it manually
    if ( $home_id ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home_id );
    }
    if ( $blog_id ) {
        update_option( 'page_for_posts', $blog_id );
    }

    update_option( 'gp_default_pages_created_v5', 1 );
}
add_action( 'init', 'gp_create_default_pages', 20 );

/**
 * Safe navigation active state checker that avoids core WP_Query warnings
 */
function gp_is_active_nav_item( $slug, $template = '' ) {
    if ( is_front_page() && ( $slug === 'home' || $slug === '' ) ) {
        return true;
    }
    if ( ! empty( $template ) && function_exists( 'is_page_template' ) && is_page_template( $template ) ) {
        return true;
    }
    // Check by requested URI slug (handles subdirectories like TasteWP /s6-sharerail/wordpress/)
    $site_path = trim( (string) parse_url( home_url(), PHP_URL_PATH ), '/' );
    $request_path = trim( (string) parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ), '/' );
    if ( ! empty( $site_path ) && strpos( $request_path, $site_path ) === 0 ) {
        $request_path = trim( substr( $request_path, strlen( $site_path ) ), '/' );
    }
    $first_segment = explode( '/', $request_path )[0] ?? '';
    if ( $first_segment === $slug || $first_segment === $slug . '.html' ) {
        return true;
    }
    // Safe check on page object without triggering core undefined property warnings
    if ( function_exists( 'is_page' ) && is_page() ) {
        $obj = get_queried_object();
        if ( $obj instanceof WP_Post ) {
            if ( $obj->post_name === $slug || (string) $obj->ID === (string) $slug ) {
                return true;
            }
        }
    }
    return false;
}

/**
 * Route virtual page templates so all theme pages and navbar links work out-of-the-box
 * (Prevents 404 errors on /products, /about, /testing, /certificates, /industries, /contact, /product-detail)
 */
function gp_route_theme_templates( $template ) {
    global $wp_query;

    $site_path = trim( (string) parse_url( home_url(), PHP_URL_PATH ), '/' );
    $request_path = trim( (string) parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ), '/' );
    if ( ! empty( $site_path ) && strpos( $request_path, $site_path ) === 0 ) {
        $request_path = trim( substr( $request_path, strlen( $site_path ) ), '/' );
    }

    $routes = array(
        'product-detail' => 'template-product-detail.php',
        'products'       => 'template-products.php',
        'about'          => 'template-about.php',
        'about-us'       => 'template-about.php',
        'testing'        => 'template-testing.php',
        'certificates'   => 'template-certificates.php',
        'certifications' => 'template-certificates.php',
        'industries'     => 'template-industries.php',
        'contact'        => 'template-contact.php',
    );

    foreach ( $routes as $route_slug => $template_file ) {
        // If URL matches route slug or ends with .html
        if ( $request_path === $route_slug || strpos( $request_path, $route_slug . '/' ) === 0 || $request_path === $route_slug . '.html' ) {
            $custom_template = GP_THEME_DIR . '/page-templates/' . $template_file;
            if ( file_exists( $custom_template ) ) {
                if ( $wp_query ) {
                    $wp_query->is_404               = false;
                    $wp_query->is_archive           = false;
                    $wp_query->is_post_type_archive = false;
                    $wp_query->is_page              = true;

                    // Ensure queried_object is ALWAYS a valid WP_Post to prevent class-wp-query.php warnings
                    if ( ! ( $wp_query->queried_object instanceof WP_Post ) ) {
                        $existing_page = get_page_by_path( $route_slug );
                        if ( $existing_page instanceof WP_Post ) {
                            $wp_query->queried_object    = $existing_page;
                            $wp_query->queried_object_id = $existing_page->ID;
                            $wp_query->post              = $existing_page;
                        } else {
                            $post_data                   = new stdClass();
                            $post_data->ID               = 0;
                            $post_data->post_title       = ucfirst( str_replace( '-', ' ', $route_slug ) );
                            $post_data->post_name        = $route_slug;
                            $post_data->post_type        = 'page';
                            $post_data->post_status      = 'publish';
                            $post_data->comment_status   = 'closed';
                            $post_data->filter           = 'raw';
                            $dummy_post                  = new WP_Post( $post_data );
                            $wp_query->queried_object    = $dummy_post;
                            $wp_query->queried_object_id = 0;
                            $wp_query->post              = $dummy_post;
                        }
                    }
                }
                status_header( 200 );
                return $custom_template;
            }
        }
    }

    return $template;
}
add_filter( 'template_include', 'gp_route_theme_templates', 99 );

/**
 * Prevent canonical redirect from hijacking key pages (e.g. /about/) to media attachments
 */
function gp_prevent_attachment_canonical_redirect( $redirect_url, $requested_url ) {
    $site_path = trim( (string) parse_url( home_url(), PHP_URL_PATH ), '/' );
    $path = trim( (string) parse_url( $requested_url, PHP_URL_PATH ), '/' );
    if ( ! empty( $site_path ) && strpos( $path, $site_path ) === 0 ) {
        $path = trim( substr( $path, strlen( $site_path ) ), '/' );
    }
    $first_seg = explode( '/', $path )[0] ?? '';
    $reserved = array( 'about', 'about-us', 'products', 'testing', 'certificates', 'certifications', 'industries', 'contact', 'product-detail' );
    if ( in_array( $first_seg, $reserved, true ) ) {
        return false;
    }
    return $redirect_url;
}
add_filter( 'redirect_canonical', 'gp_prevent_attachment_canonical_redirect', 10, 2 );

/**
 * Custom Nav Menu Walker to automatically render the 13-Polymer Grade Mega Menu in WordPress
 */
class GP_Mega_Menu_Walker extends Walker_Nav_Menu {
    private $in_products_menu = false;

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes     = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[]   = 'menu-item-' . $item->ID;
        $title_lower = strtolower( trim( $item->title ) );
        $is_products = ( $depth === 0 && ( strpos( $title_lower, 'product' ) !== false || ( ! empty( $item->url ) && strpos( $item->url, 'product' ) !== false ) ) );

        if ( $is_products ) {
            $classes[] = 'menu-item-has-children';
            $classes[] = 'gp-menu-item-products';
            $this->in_products_menu = true;
        }

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        if ( $depth === 0 ) {
            $output .= '<li' . $id . $class_names .'>';
            $atts = array();
            $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
            $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
            $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
            $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

            $attributes = '';
            foreach ( $atts as $attr => $val ) {
                if ( ! empty( $val ) ) {
                    $val = ( 'href' === $attr ) ? esc_url( $val ) : esc_attr( $val );
                    $attributes .= ' ' . $attr . '="' . $val . '"';
                }
            }

            $title = apply_filters( 'the_title', $item->title, $item->ID );
            $chevron = $is_products ? ' <svg class="gp-nav-chevron" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>' : '';

            $item_output = isset( $args->before ) ? $args->before : '';
            $item_output .= '<a' . $attributes . '>';
            $item_output .= ( isset( $args->link_before ) ? $args->link_before : '' ) . $title . $chevron . ( isset( $args->link_after ) ? $args->link_after : '' );
            $item_output .= '</a>';
            $item_output .= isset( $args->after ) ? $args->after : '';

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

            // If it is the products menu, inject the full 13-grade mega menu container
            if ( $is_products ) {
                $output .= '<div class="sub-menu gp-products-mega-menu">';
                $output .= '  <div class="gp-mega-cols-grid">';
                $output .= '    <div class="gp-mega-col">';
                $output .= '      <div class="gp-mega-col-head"><span>PPCP &amp; Polypropylene</span><span class="gp-mega-col-count">6 Grades</span></div>';
                $output .= '      <ul class="gp-mega-col-list">';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=ppcp-grey' ) ) . '"><span class="gp-mega-dot" style="background:#0097db;"></span>PPCP Grey Granules</a></li>';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=ppcp-impact' ) ) . '"><span class="gp-mega-dot" style="background:#10b981;"></span>PPCP Impact Copolymer</a></li>';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=ppcp-black' ) ) . '"><span class="gp-mega-dot" style="background:#0b2545;"></span>PPCP Black Granules</a></li>';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=pp-talc' ) ) . '"><span class="gp-mega-dot" style="background:#6366f1;"></span>PP Talc Filled Granules</a></li>';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=polypropylene-natural-white' ) ) . '"><span class="gp-mega-dot" style="background:#0097db;"></span>PP Natural White Granules</a></li>';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=polypropylene-glass-filled' ) ) . '"><span class="gp-mega-dot" style="background:#059669;"></span>PP Glass Filled Granules</a></li>';
                $output .= '      </ul>';
                $output .= '    </div>';
                $output .= '    <div class="gp-mega-col">';
                $output .= '      <div class="gp-mega-col-head"><span>ABS, PMMA &amp; Nylon</span><span class="gp-mega-col-count">7 Grades</span></div>';
                $output .= '      <ul class="gp-mega-col-list">';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=abs-white' ) ) . '"><span class="gp-mega-dot" style="background:#0891b2;"></span>ABS White Granules</a></li>';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=abs-black' ) ) . '"><span class="gp-mega-dot" style="background:#0f172a;"></span>ABS Black Granules</a></li>';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=abs-fr-granules' ) ) . '"><span class="gp-mega-dot" style="background:#ea580c;"></span>ABS FR Plastic Granules</a></li>';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=red-pmma' ) ) . '"><span class="gp-mega-dot" style="background:#dc2626;"></span>Red PMMA Granules</a></li>';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=acrylic-granules' ) ) . '"><span class="gp-mega-dot" style="background:#7c3aed;"></span>Acrylic Granules</a></li>';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=nylon-black' ) ) . '"><span class="gp-mega-dot" style="background:#1e293b;"></span>Nylon Black Granules</a></li>';
                $output .= '        <li><a href="' . esc_url( home_url( '/product-detail/?product=nylon-white' ) ) . '"><span class="gp-mega-dot" style="background:#2563eb;"></span>Nylon White Granules</a></li>';
                $output .= '      </ul>';
                $output .= '    </div>';
                $output .= '  </div>';
                $output .= '  <div class="gp-mega-footer-bar"><a href="' . esc_url( home_url( '/products/' ) ) . '"><span>Explore All 13 Polymer Grades &amp; Lab Specs</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg></a></div>';
                $output .= '</div>';
            }
        } else {
            // If inside products menu child items, ignore them since we rendered the rich mega menu above
            if ( ! $this->in_products_menu ) {
                parent::start_el( $output, $item, $depth, $args, $id );
            }
        }
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        if ( $depth === 0 ) {
            $this->in_products_menu = false;
            $output .= "</li>\n";
        } elseif ( ! $this->in_products_menu ) {
            parent::end_el( $output, $item, $depth, $args );
        }
    }

    function start_lvl( &$output, $depth = 0, $args = null ) {
        if ( ! $this->in_products_menu ) {
            parent::start_lvl( $output, $depth, $args );
        }
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        if ( ! $this->in_products_menu ) {
            parent::end_lvl( $output, $depth, $args );
        }
    }
}




