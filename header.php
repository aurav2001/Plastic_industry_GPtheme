<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon.svg' ); ?>">
    <?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&family=Rajdhani:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <style id="gp-critical-layout-override">
        html:not(.wp-toolbar) {
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            background: #ffffff !important;
        }
        html.wp-toolbar {
            margin-top: 32px !important;
            background: #ffffff !important;
        }
        @media screen and (max-width: 782px) {
            html.wp-toolbar {
                margin-top: 46px !important;
            }
        }
        /* Lock WordPress Admin Bar firmly to the top of the viewport */
        body.admin-bar #wpadminbar {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            right: 0 !important;
            width: 100% !important;
            z-index: 999999 !important;
        }
        /* Hide WordPress logo dropdown menu in admin bar so it never blocks the theme header or logo */
        body.admin-bar #wpadminbar #wp-admin-bar-wp-logo {
            display: none !important;
        }
        body.admin-bar .gp-clean-header,
        body.admin-bar #masthead {
            top: 32px !important;
        }
        @media screen and (max-width: 782px) {
            body.admin-bar .gp-clean-header,
            body.admin-bar #masthead {
                top: 46px !important;
            }
        }
        @media screen and (max-width: 600px) {
            body.admin-bar #wpadminbar {
                position: fixed !important;
                top: 0 !important;
            }
            body.admin-bar .gp-clean-header,
            body.admin-bar #masthead {
                top: 46px !important;
            }
        }
        @media (min-width: 769px) {
            .gp-hero-slider-section {
                height: calc(100vh - 110px) !important;
                min-height: 500px !important;
                max-height: 820px !important;
            }
            .gp-hero-slider {
                height: 100% !important;
                min-height: 100% !important;
            }
            .gp-hero-slider-section .gp-hero-slide {
                height: 100% !important;
                min-height: 100% !important;
                padding: 10px 0 52px !important;
            }
            .gp-hero-slider-pagination {
                bottom: 12px !important;
            }
        }
        @media (max-height: 768px) and (min-width: 769px) {
            .gp-hero-slider-section {
                height: calc(100vh - 105px) !important;
                min-height: 480px !important;
            }
            .gp-hero-slider-section .gp-plastin-hero-title {
                font-size: clamp(1.6rem, 2.3vw, 2.2rem) !important;
                margin-bottom: 8px !important;
            }
            .gp-hero-slider-section .gp-plastin-hero-lead {
                font-size: 0.85rem !important;
                line-height: 1.45 !important;
                margin-bottom: 10px !important;
            }
            .gp-hero-spec-chips {
                margin-bottom: 12px !important;
            }
            .gp-hero-slider-section .gp-hero-slide {
                padding: 5px 0 44px !important;
            }
            .gp-hero-slider-pagination {
                bottom: 8px !important;
            }
        }
        /* Mega Dropdown for Products Menu (All 13 Polymer Grades) */
        .gp-nav-menu > li.menu-item-has-children {
            position: relative;
        }
        .gp-clean-header .main-navigation .sub-menu.gp-products-mega-menu,
        #site-navigation .sub-menu.gp-products-mega-menu,
        .gp-nav-menu .sub-menu.gp-products-mega-menu {
            position: absolute !important;
            top: 100% !important;
            left: -40px !important;
            width: 630px !important;
            max-width: 95vw !important;
            padding: 16px 20px 14px !important;
            border-radius: 14px !important;
            border-top: 3.5px solid #0097db !important;
            box-shadow: 0 22px 50px -8px rgba(11, 37, 69, 0.22), 0 4px 16px rgba(0, 0, 0, 0.05) !important;
            background: #ffffff !important;
            opacity: 0 !important;
            visibility: hidden !important;
            transform: translateY(12px) !important;
            transition: all 0.24s cubic-bezier(0.4, 0, 0.2, 1) !important;
            z-index: 9999 !important;
            pointer-events: none;
        }
        #site-navigation li.menu-item-has-children:hover > .sub-menu.gp-products-mega-menu,
        .gp-clean-header .main-navigation li:hover > .sub-menu.gp-products-mega-menu,
        .gp-nav-menu > li.menu-item-has-children:hover > .sub-menu.gp-products-mega-menu {
            opacity: 1 !important;
            visibility: visible !important;
            transform: translateY(0) !important;
            pointer-events: auto !important;
        }
        body {
            width: 100% !important;
            max-width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            border: none !important;
            box-shadow: none !important;
            background: #ffffff !important;
        }
        #page, .site-wrapper {
            width: 100% !important;
            max-width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            border: none !important;
            box-shadow: none !important;
            overflow-x: hidden;
        }
        .gp-topbar-inner {
            min-height: 40px;
            height: auto !important;
            padding: 4px 0 !important;
        }
        .gp-badge-iso {
            white-space: nowrap !important;
            flex-shrink: 0 !important;
        }
        .gp-topbar-item, .gp-topbar-link {
            white-space: nowrap !important;
        }
        .gp-whatsapp-widget, #gp-whatsapp-widget, .joinchat, #joinchat, .wa-chat-box, .whatsapp-chat-button {
            position: fixed !important;
            bottom: 30px !important;
            right: 30px !important;
            left: auto !important;
            z-index: 999999 !important;
        }
        .gp-wa-chatbox, #gp-wa-chatbox {
            position: absolute !important;
            bottom: 75px !important;
            right: 0 !important;
            left: auto !important;
            transform-origin: bottom right !important;
        }
        .gp-back-to-top, #gp-back-to-top {
            position: fixed !important;
            bottom: 102px !important;
            right: 36px !important;
            left: auto !important;
            width: 50px !important;
            height: 50px !important;
            background: #0b2545 !important;
            background: linear-gradient(135deg, #0b2545 0%, #134074 100%) !important;
            color: #ffffff !important;
            border: 2px solid rgba(255, 255, 255, 0.25) !important;
            border-radius: 50% !important;
            box-shadow: 0 8px 24px rgba(11, 37, 69, 0.35), 0 2px 6px rgba(0, 0, 0, 0.15) !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            cursor: pointer !important;
            z-index: 99999 !important;
            text-decoration: none !important;
        }
        .gp-back-to-top svg, #gp-back-to-top svg {
            stroke: #ffffff !important;
            width: 22px !important;
            height: 22px !important;
            display: block !important;
        }
        .gp-back-to-top:hover, #gp-back-to-top:hover {
            background: #ef233c !important;
            background: linear-gradient(135deg, #ef233c 0%, #d90429 100%) !important;
            color: #ffffff !important;
            box-shadow: 0 12px 30px rgba(239, 35, 60, 0.55) !important;
        }
        @media (max-width: 768px) {
            .gp-whatsapp-widget, #gp-whatsapp-widget, .joinchat, #joinchat {
                bottom: 20px !important;
                right: 20px !important;
                left: auto !important;
            }
            .gp-wa-chatbox, #gp-wa-chatbox {
                right: 0 !important;
                left: auto !important;
            }
            .gp-back-to-top, #gp-back-to-top {
                bottom: 90px !important;
                right: 26px !important;
            }
        }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site-wrapper">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gp-theme' ); ?></a>

    <?php
    $elementor_header_rendered = false;

    // 1. Elementor Pro Theme Builder Header
    if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'header' ) ) {
        $elementor_header_rendered = true;
    }

    // 2. Elementor Header & Footer Builder plugin support
    if ( ! $elementor_header_rendered && function_exists( 'hfe_render_header' ) && function_exists( 'hfe_header_enabled' ) && hfe_header_enabled() ) {
        hfe_render_header();
        $elementor_header_rendered = true;
    }

    if ( ! $elementor_header_rendered ) :
    ?>
    <!-- Top Contact & Notification Bar -->
    <div class="gp-topbar">
        <div class="gp-container gp-topbar-inner">

            <div class="gp-topbar-left">
                <span class="gp-badge-iso">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                    <?php echo esc_html( get_theme_mod( 'gp_company_cert', 'ISO 9001:2015 Certified Company' ) ); ?>
                </span>
                <span class="gp-topbar-item gp-hidden-mobile">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    <span><?php echo esc_html( get_theme_mod( 'gp_company_topbar_loc', 'Delhi-NCR Industrial Area, India' ) ); ?></span>
                </span>
            </div>

            <div class="gp-topbar-right">
                <a href="tel:<?php echo esc_attr( str_replace( array(' ', '-'), '', get_theme_mod( 'gp_company_phone', '+91-9876543210' ) ) ); ?>" class="gp-topbar-link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span><?php echo esc_html( get_theme_mod( 'gp_company_phone', '+91-9876543210' ) ); ?></span>
                </a>
                <a href="mailto:<?php echo esc_attr( get_theme_mod( 'gp_company_email', 'info@srspolymer.com' ) ); ?>" class="gp-topbar-link gp-hidden-mobile">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <span><?php echo esc_html( get_theme_mod( 'gp_company_email', 'info@srspolymer.com' ) ); ?></span>
                </a>
                <button type="button" class="gp-topbar-quick-rfq gp-rfq-modal-trigger" id="gp-topbar-rfq-btn">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <span><?php esc_html_e( 'Instant RFQ', 'gp-theme' ); ?></span>
                </button>
                <div class="gp-topbar-socials gp-hidden-sm">
                    <?php if ( get_theme_mod( 'gp_social_linkedin', 'https://in.linkedin.com/company/srs-polymer' ) ) : ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'gp_social_linkedin', 'https://in.linkedin.com/company/srs-polymer' ) ); ?>" target="_blank" rel="noopener" aria-label="LinkedIn">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'gp_social_facebook', 'https://www.facebook.com/srspolymer/' ) ) : ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'gp_social_facebook', 'https://www.facebook.com/srspolymer/' ) ); ?>" target="_blank" rel="noopener" aria-label="Facebook">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.5 5H18V0h-3.808C10.595 0 9 1.582 9 4.615V8z"/></svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header (Professional Unified Header) -->
    <header id="masthead" class="site-header gp-header gp-clean-header">
        <div class="gp-container gp-header-inner">
            <!-- Brand Logo -->
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="gp-logo-link" rel="home">
                    <div class="gp-logo-mark">
                        <svg width="40" height="40" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <polygon points="25,4 45,15 45,37 25,48 5,37 5,15" stroke="#0097db" stroke-width="2.5" fill="#f0f7fd" stroke-linejoin="round"/>
                            <line x1="25" y1="16" x2="25" y2="36" stroke="#0097db" stroke-width="2" stroke-linecap="round"/>
                            <line x1="13" y1="21" x2="37" y2="31" stroke="#0097db" stroke-width="2" stroke-linecap="round"/>
                            <line x1="13" y1="31" x2="37" y2="21" stroke="#0097db" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="25" cy="26" r="9.5" fill="#0b2545"/>
                            <text x="25" y="29.5" text-anchor="middle" fill="#ffffff" font-size="8" font-weight="900" font-family="'Poppins', sans-serif">SRS</text>
                            <circle cx="25" cy="16" r="3" fill="#0097db"/>
                            <circle cx="25" cy="36" r="3" fill="#00b4d8"/>
                            <circle cx="13" cy="21" r="3" fill="#0b2545"/>
                            <circle cx="37" cy="31" r="3" fill="#0097db"/>
                            <circle cx="13" cy="31" r="3" fill="#0097db"/>
                            <circle cx="37" cy="21" r="3" fill="#00b4d8"/>
                        </svg>
                    </div>
                    <div class="gp-logo-text">
                        <span class="gp-brand-name">SRS <span class="gp-accent" style="color:#0097db;">POLYMER</span></span>
                        <span class="gp-brand-sub"><span class="gp-live-dot-sub"></span> GREEN POLYTECH • ISO 9001:2015</span>
                    </div>
                </a>
            </div>

            <!-- Main Navigation Menu (Single Row, Crisp) -->
            <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'gp-theme' ); ?>">
                <?php
                if ( has_nav_menu( 'primary' ) ) :
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'gp-nav-menu',
                        'container'      => false,
                        'walker'         => class_exists( 'GP_Mega_Menu_Walker' ) ? new GP_Mega_Menu_Walker() : '',
                    ) );
                else :
                ?>
                <ul id="primary-menu" class="gp-nav-menu">
                    <li class="menu-item <?php echo is_front_page() ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'gp-theme' ); ?></a>
                    </li>
                    <li class="menu-item menu-item-has-children <?php echo function_exists( 'gp_is_active_nav_item' ) && gp_is_active_nav_item( 'products', 'page-templates/template-products.php' ) ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">
                            <?php esc_html_e( 'Products', 'gp-theme' ); ?> <svg class="gp-nav-chevron" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
                        </a>
                        <div class="sub-menu gp-products-mega-menu">
                            <div class="gp-mega-cols-grid">
                                <div class="gp-mega-col">
                                    <div class="gp-mega-col-head">
                                        <span>PPCP &amp; Polypropylene</span>
                                        <span class="gp-mega-col-count">6 Grades</span>
                                    </div>
                                    <ul class="gp-mega-col-list">
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=ppcp-grey' ) ); ?>"><span class="gp-mega-dot" style="background:#0097db;"></span>PPCP Grey Granules</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=ppcp-impact' ) ); ?>"><span class="gp-mega-dot" style="background:#10b981;"></span>PPCP Impact Copolymer</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=ppcp-black' ) ); ?>"><span class="gp-mega-dot" style="background:#0b2545;"></span>PPCP Black Granules</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=pp-talc' ) ); ?>"><span class="gp-mega-dot" style="background:#6366f1;"></span>PP Talc Filled Granules</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=polypropylene-natural-white' ) ); ?>"><span class="gp-mega-dot" style="background:#0097db;"></span>PP Natural White Granules</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=polypropylene-glass-filled' ) ); ?>"><span class="gp-mega-dot" style="background:#059669;"></span>PP Glass Filled Granules</a></li>
                                    </ul>
                                </div>
                                <div class="gp-mega-col">
                                    <div class="gp-mega-col-head">
                                        <span>ABS, PMMA &amp; Nylon</span>
                                        <span class="gp-mega-col-count">7 Grades</span>
                                    </div>
                                    <ul class="gp-mega-col-list">
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=abs-white' ) ); ?>"><span class="gp-mega-dot" style="background:#0891b2;"></span>ABS White Granules</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=abs-black' ) ); ?>"><span class="gp-mega-dot" style="background:#0f172a;"></span>ABS Black Granules</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=abs-fr-granules' ) ); ?>"><span class="gp-mega-dot" style="background:#ea580c;"></span>ABS FR Plastic Granules</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=red-pmma' ) ); ?>"><span class="gp-mega-dot" style="background:#dc2626;"></span>Red PMMA Granules</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=acrylic-granules' ) ); ?>"><span class="gp-mega-dot" style="background:#7c3aed;"></span>Acrylic Granules</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=nylon-black' ) ); ?>"><span class="gp-mega-dot" style="background:#1e293b;"></span>Nylon Black Granules</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/product-detail/?product=nylon-white' ) ); ?>"><span class="gp-mega-dot" style="background:#2563eb;"></span>Nylon White Granules</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gp-mega-footer-bar">
                                <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>">
                                    <span>Explore All 13 Polymer Grades &amp; Lab Specs</span>
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item <?php echo function_exists( 'gp_is_active_nav_item' ) && ( gp_is_active_nav_item( 'about', 'page-templates/template-about.php' ) || gp_is_active_nav_item( 'about-us', 'page-templates/template-about.php' ) ) ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About Mill', 'gp-theme' ); ?></a>
                    </li>
                    <li class="menu-item <?php echo function_exists( 'gp_is_active_nav_item' ) && gp_is_active_nav_item( 'testing', 'page-templates/template-testing.php' ) ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url( home_url( '/testing/' ) ); ?>"><?php esc_html_e( 'ASTM Lab', 'gp-theme' ); ?></a>
                    </li>
                    <li class="menu-item <?php echo function_exists( 'gp_is_active_nav_item' ) && ( gp_is_active_nav_item( 'certificates', 'page-templates/template-certificates.php' ) || gp_is_active_nav_item( 'certifications', 'page-templates/template-certificates.php' ) ) ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url( home_url( '/certificates/' ) ); ?>"><?php esc_html_e( 'Certifications', 'gp-theme' ); ?></a>
                    </li>
                    <li class="menu-item <?php echo function_exists( 'gp_is_active_nav_item' ) && gp_is_active_nav_item( 'industries', 'page-templates/template-industries.php' ) ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url( home_url( '/industries/' ) ); ?>"><?php esc_html_e( 'Industries', 'gp-theme' ); ?></a>
                    </li>
                    <li class="menu-item <?php echo function_exists( 'gp_is_active_nav_item' ) && gp_is_active_nav_item( 'contact', 'page-templates/template-contact.php' ) ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'gp-theme' ); ?></a>
                    </li>
                </ul>
                <?php endif; ?>
            </nav>

            <!-- Header Right CTAs (Phone & RFQ Button) -->
            <div class="gp-header-actions">
                <a href="tel:<?php echo esc_attr( str_replace( array(' ', '-'), '', get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ) ); ?>" class="gp-header-phone-quick gp-hidden-mobile" title="Call Mill Sales Desk">
                    <div class="gp-hp-icon">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span class="gp-hp-pulse"></span>
                    </div>
                    <div class="gp-hp-details">
                        <span class="gp-hp-lbl"><?php esc_html_e( 'Mill Sales Desk', 'gp-theme' ); ?></span>
                        <strong class="gp-hp-val"><?php echo esc_html( get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ); ?></strong>
                    </div>
                </a>

                <button type="button" class="gp-btn gp-btn-header-rfq gp-rfq-modal-trigger" id="gp-header-rfq-btn">
                    <span><?php esc_html_e( 'Instant Quote', 'gp-theme' ); ?></span>
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </button>

                <!-- Mobile Menu Hamburger Button -->
                <button class="gp-menu-toggle" id="gp-menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle Navigation', 'gp-theme' ); ?>">
                    <span class="gp-hamburger-bar"></span>
                    <span class="gp-hamburger-bar"></span>
                    <span class="gp-hamburger-bar"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Drawer Navigation -->
    <div class="gp-mobile-drawer" id="gp-mobile-drawer">
        <div class="gp-drawer-header">
            <div class="gp-logo-text">
                <span class="gp-brand-name"><?php echo esc_html( get_theme_mod( 'gp_company_short', 'SRS' ) ); ?> &bull; <?php echo esc_html( get_theme_mod( 'gp_company_name', 'SHRI RAM SHARNAM OVERSEAS' ) ); ?></span>
                <span class="gp-brand-sub"><?php echo esc_html( get_theme_mod( 'gp_company_division', 'GREEN POLYTECH LIMITED' ) ); ?></span>
            </div>
            <button class="gp-drawer-close" id="gp-drawer-close" aria-label="<?php esc_attr_e( 'Close Navigation', 'gp-theme' ); ?>">✕</button>
        </div>
        <div class="gp-drawer-content" id="gp-drawer-content">
            <!-- Injected dynamically via JS or WP Menu -->
        </div>
        <div class="gp-drawer-footer">
            <a href="tel:<?php echo esc_attr( str_replace( array(' ', '-'), '', get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ) ); ?>" class="gp-btn gp-btn-outline gp-btn-full">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 6px; vertical-align: middle;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span><?php echo esc_html( get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ); ?></span>
            </a>
            <a href="#contact" class="gp-btn gp-btn-primary gp-btn-full" style="margin-top: 10px;">
                <?php esc_html_e( 'Request a Quote', 'gp-theme' ); ?>
            </a>
        </div>
    </div>
    <div class="gp-drawer-backdrop" id="gp-drawer-backdrop"></div>
    <?php endif; ?>

    <div id="content" class="site-content">

