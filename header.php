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
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
        <link rel="icon" type="image/svg+xml" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/favicon.svg' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    <style id="gp-whatsapp-critical-override">
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

    <!-- Top Contact & Notification Bar -->
    <?php
    if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) :
    ?>
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

    <!-- Main Navigation Header -->
    <header id="masthead" class="site-header gp-header">
        <div class="gp-container gp-header-inner">
            <!-- Brand / Logo -->
            <div class="site-branding">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="gp-logo-link" rel="home">
                        <div class="gp-logo-mark">
                            <svg width="38" height="38" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="25,4 45,15 45,37 25,48 5,37 5,15" stroke="#0b2545" stroke-width="2.5" fill="#f0f7fd" stroke-linejoin="round"/>
                                <line x1="25" y1="16" x2="25" y2="36" stroke="#0077b6" stroke-width="2" stroke-linecap="round"/>
                                <line x1="13" y1="21" x2="37" y2="31" stroke="#0077b6" stroke-width="2" stroke-linecap="round"/>
                                <line x1="13" y1="31" x2="37" y2="21" stroke="#0077b6" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="25" cy="26" r="5" fill="#0b2545"/>
                                <circle cx="25" cy="16" r="3.5" fill="#00b4d8"/>
                                <circle cx="25" cy="36" r="3.5" fill="#ef233c"/>
                                <circle cx="13" cy="21" r="3.5" fill="#ef233c"/>
                                <circle cx="37" cy="31" r="3.5" fill="#00b4d8"/>
                                <circle cx="13" cy="31" r="3" fill="#00b4d8"/>
                                <circle cx="37" cy="21" r="3" fill="#ef233c"/>
                            </svg>
                        </div>
                        <div class="gp-logo-text">
                            <span class="gp-brand-name">SRS <span class="gp-accent">POLYMER</span></span>
                            <span class="gp-brand-sub"><?php esc_html_e( 'Virgin & Recycled Plastic Granules (Dana)', 'gp-theme' ); ?></span>
                        </div>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Main Navigation Menu -->
            <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'gp-theme' ); ?>">
                <?php
                if ( has_nav_menu( 'primary' ) ) :
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'gp-nav-menu',
                    ) );
                else :
                    // Default Fallback Menu matching Jyoti Global Plast reference
                ?>
                <ul id="primary-menu" class="gp-nav-menu">
                    <li class="menu-item current-menu-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'gp-theme' ); ?></a></li>
                    
                    <li class="menu-item menu-item-has-children">
                        <a href="#about"><?php esc_html_e( 'About Us', 'gp-theme' ); ?> <span class="gp-dropdown-icon">▾</span></a>
                        <ul class="sub-menu">
                            <li><a href="#story"><?php esc_html_e( 'Company Profile', 'gp-theme' ); ?></a></li>
                            <li><a href="#infra"><?php esc_html_e( 'Our Infrastructure', 'gp-theme' ); ?></a></li>
                            <li><a href="#testing"><?php esc_html_e( 'Quality & Testing Lab', 'gp-theme' ); ?></a></li>
                        </ul>
                    </li>

                    <li class="menu-item menu-item-has-children">
                        <a href="<?php echo esc_url( get_post_type_archive_link( 'gp_product' ) ?: home_url( '/products/' ) ); ?>">
                            <?php esc_html_e( 'Products', 'gp-theme' ); ?> <span class="gp-dropdown-icon">▾</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="<?php echo esc_url( get_post_type_archive_link( 'gp_product' ) ?: home_url( '/products/' ) ); ?>" style="font-weight: 700; color: #00b4d8;">
                                    ✦ <?php esc_html_e( 'All Products Catalog', 'gp-theme' ); ?>
                                </a>
                            </li>
                            <?php
                            $product_cats = get_terms( array(
                                'taxonomy'   => 'gp_product_cat',
                                'hide_empty' => false,
                            ) );
                            if ( ! empty( $product_cats ) && ! is_wp_error( $product_cats ) ) :
                                foreach ( $product_cats as $pcat ) :
                                    printf(
                                        '<li><a href="%s">%s</a></li>',
                                        esc_url( get_term_link( $pcat ) ),
                                        esc_html( $pcat->name )
                                    );
                                endforeach;
                            else :
                            ?>
                                <li><a href="#products" data-cat="blow-moulding"><?php esc_html_e( 'Blow Moulding', 'gp-theme' ); ?></a></li>
                                <li><a href="#products" data-cat="injection-moulding"><?php esc_html_e( 'Injection Moulding', 'gp-theme' ); ?></a></li>
                                <li><a href="#products" data-cat="pp-granules"><?php esc_html_e( 'PP Granules', 'gp-theme' ); ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </li>

                    <li class="menu-item"><a href="#contact"><?php esc_html_e( 'Contact', 'gp-theme' ); ?></a></li>
                </ul>
                <?php endif; ?>
            </nav>

            <!-- Header Right CTAs -->
            <div class="gp-header-actions">
                <a href="#contact" class="gp-btn gp-btn-primary gp-btn-rfq" id="gp-header-rfq-btn">
                    <span><?php esc_html_e( 'Request a Quote', 'gp-theme' ); ?></span>
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>

                <!-- Mobile Menu Button -->
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
                <span class="gp-brand-name">SRS <span class="gp-accent">POLYMER</span></span>
            </div>
            <button class="gp-drawer-close" id="gp-drawer-close" aria-label="<?php esc_attr_e( 'Close Navigation', 'gp-theme' ); ?>">✕</button>
        </div>
        <div class="gp-drawer-content" id="gp-drawer-content">
            <!-- Injected dynamically via JS or WP Menu -->
        </div>
        <div class="gp-drawer-footer">
            <a href="tel:<?php echo esc_attr( str_replace( array(' ', '-'), '', get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ) ); ?>" class="gp-btn gp-btn-outline gp-btn-full">
                📞 <?php echo esc_html( get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ); ?>
            </a>
            <a href="#contact" class="gp-btn gp-btn-primary gp-btn-full" style="margin-top: 10px;">
                <?php esc_html_e( 'Request a Quote', 'gp-theme' ); ?>
            </a>
        </div>
    </div>
    <div class="gp-drawer-backdrop" id="gp-drawer-backdrop"></div>
    <?php endif; ?>

    <div id="content" class="site-content">
