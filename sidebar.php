<?php
/**
 * The sidebar containing the main widget area
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<aside id="secondary" class="widget-area gp-sidebar">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <!-- Default Fallback Widgets -->
        <section class="widget widget_search">
            <h3 class="widget-title"><?php esc_html_e( 'Search Site', 'gp-theme' ); ?></h3>
            <form role="search" method="get" class="gp-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="gp-search-input-wrap">
                    <input type="search" class="gp-search-field" placeholder="<?php esc_attr_e( 'Search products, news...', 'gp-theme' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                    <button type="submit" class="gp-search-submit" aria-label="<?php esc_attr_e( 'Search', 'gp-theme' ); ?>">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </button>
                </div>
            </form>
        </section>

        <!-- Product Categories Widget -->
        <section class="widget widget_categories">
            <h3 class="widget-title"><?php esc_html_e( 'Product Categories', 'gp-theme' ); ?></h3>
            <ul>
                <li><a href="<?php echo esc_url( home_url( '/#products' ) ); ?>">Blow Moulded Drums & Jars</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#products' ) ); ?>">Stackable Jerry Cans</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#products' ) ); ?>">Injection Moulded Pail Buckets</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#products' ) ); ?>">Toys & Kids Ergonomic Furniture</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#products' ) ); ?>">Precision Automotive Spares</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#defence' ) ); ?>">Defence Surveillance Drones</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#defence' ) ); ?>">Mil-Spec Drone Connectors</a></li>
            </ul>
        </section>

        <!-- Download Corporate Brochure Card -->
        <section class="widget gp-brochure-widget">
            <div class="gp-brochure-card">
                <div class="gp-brochure-icon">📄</div>
                <h4><?php esc_html_e( 'Corporate Profile & Product Catalog', 'gp-theme' ); ?></h4>
                <p><?php esc_html_e( 'Download technical datasheets, UN certificates, and plant capabilities.', 'gp-theme' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="gp-btn gp-btn-light gp-btn-full">
                    <span><?php esc_html_e( 'Request PDF Catalog', 'gp-theme' ); ?></span>
                </a>
            </div>
        </section>

        <!-- Quick Contact Widget -->
        <section class="widget gp-contact-widget">
            <h3 class="widget-title"><?php esc_html_e( 'Need Immediate Assistance?', 'gp-theme' ); ?></h3>
            <p><?php esc_html_e( 'Our application engineers are available Mon-Sat to consult on your custom moulding needs.', 'gp-theme' ); ?></p>
            <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9]/', '', get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ) ); ?>" class="gp-btn gp-btn-primary gp-btn-full" style="margin-top: 10px;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 6px; vertical-align: middle;"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span><?php echo esc_html( get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ); ?></span>
            </a>
        </section>
    <?php endif; ?>
</aside>
