<?php
/**
 * Template Name: Defence & Aerospace Page
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <section class="gp-page-banner gp-page-banner-defence">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag gp-sub-tag-red"><?php esc_html_e( 'TACTICAL INNOVATION', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php esc_html_e( 'Defence & Aerospace Division', 'gp-theme' ); ?></h1>
                <p class="gp-hero-lead" style="max-width: 700px; margin: 15px auto 0 auto; color: #cbd5e1;">
                    <?php esc_html_e( 'Developing sovereign defence unmanned systems, tactical reconnaissance UAVs, precision agricultural drones, and aerospace-grade composite components.', 'gp-theme' ); ?>
                </p>
                <?php gp_breadcrumbs(); ?>
            </div>
        </div>
    </section>

    <!-- Drone Systems Grid -->
    <section class="gp-section">
        <div class="gp-container">
            <div class="gp-section-header gp-text-center">
                <span class="gp-sub-tag"><?php esc_html_e( 'UNMANNED AERIAL VEHICLES', 'gp-theme' ); ?></span>
                <h2 class="gp-section-title"><?php esc_html_e( 'Mission-Ready Drone Platforms', 'gp-theme' ); ?></h2>
            </div>

            <div class="gp-products-grid">
                
                <div class="gp-product-card">
                    <div class="gp-product-thumb">
                        <div class="gp-product-visual-box gp-visual-drone_surveillance">
                            <span class="gp-visual-tag"><?php esc_html_e( 'Surveillance', 'gp-theme' ); ?></span>
                            <div class="gp-product-icon-graphic">
                                <svg viewBox="0 0 120 100" width="100" height="84"><path d="M20 50L60 30L100 50L60 70Z" fill="#0b2545" stroke="#ef233c" stroke-width="2"/><circle cx="20" cy="50" r="10" stroke="#00b4d8" stroke-width="2"/><circle cx="100" cy="50" r="10" stroke="#00b4d8" stroke-width="2"/><circle cx="60" cy="50" r="6" fill="#ef233c"/></svg>
                            </div>
                        </div>
                        <span class="gp-product-badge"><?php esc_html_e( 'Military Grade', 'gp-theme' ); ?></span>
                    </div>
                    <div class="gp-product-content">
                        <span class="gp-product-cat-name"><?php esc_html_e( 'Tactical UAV', 'gp-theme' ); ?></span>
                        <h3 class="gp-product-title"><?php esc_html_e( 'IM4-Pro Heavy Surveillance Drone', 'gp-theme' ); ?></h3>
                        <p class="gp-product-excerpt"><?php esc_html_e( 'High-endurance tactical UAV built with carbon-fibre composite airframe, dual EO/IR thermal imaging, encrypted telecommand link, and 25km line-of-sight range.', 'gp-theme' ); ?></p>
                        <div class="gp-specs-meta">
                            <div class="gp-spec-row"><span class="gp-spec-label">Flight Range:</span><span class="gp-spec-val">25 km</span></div>
                            <div class="gp-spec-row"><span class="gp-spec-label">Endurance:</span><span class="gp-spec-val">90+ Minutes</span></div>
                        </div>
                        <button class="gp-btn gp-btn-sm gp-btn-primary gp-btn-enquire gp-btn-full" data-product="IM4-Pro Surveillance Drone">
                            <span><?php esc_html_e( 'Enquire for Defence', 'gp-theme' ); ?></span>
                        </button>
                    </div>
                </div>

                <div class="gp-product-card">
                    <div class="gp-product-thumb">
                        <div class="gp-product-visual-box gp-visual-drone_clean">
                            <span class="gp-visual-tag"><?php esc_html_e( 'Industrial Cleaning', 'gp-theme' ); ?></span>
                            <div class="gp-product-icon-graphic">
                                <svg viewBox="0 0 120 100" width="100" height="84"><polygon points="60,20 90,60 30,60" fill="#134074" stroke="#ffffff" stroke-width="2"/><circle cx="60" cy="70" r="8" fill="#00b4d8"/></svg>
                            </div>
                        </div>
                        <span class="gp-product-badge"><?php esc_html_e( 'Patented Tech', 'gp-theme' ); ?></span>
                    </div>
                    <div class="gp-product-content">
                        <span class="gp-product-cat-name"><?php esc_html_e( 'Industrial Maintenance', 'gp-theme' ); ?></span>
                        <h3 class="gp-product-title"><?php esc_html_e( 'AeroClean Facade & Solar Drone', 'gp-theme' ); ?></h3>
                        <p class="gp-product-excerpt"><?php esc_html_e( 'Tethered high-pressure wash drone for sky-scraper architectural facades, industrial chimneys, and mega-scale solar park panel cleaning without manual scaffolding.', 'gp-theme' ); ?></p>
                        <div class="gp-specs-meta">
                            <div class="gp-spec-row"><span class="gp-spec-label">Height:</span><span class="gp-spec-val">Up to 120 Meters</span></div>
                            <div class="gp-spec-row"><span class="gp-spec-label">Pressure:</span><span class="gp-spec-val">150 Bar Continuous</span></div>
                        </div>
                        <button class="gp-btn gp-btn-sm gp-btn-primary gp-btn-enquire gp-btn-full" data-product="AeroClean Drone">
                            <span><?php esc_html_e( 'Request Demonstration', 'gp-theme' ); ?></span>
                        </button>
                    </div>
                </div>

                <div class="gp-product-card">
                    <div class="gp-product-thumb">
                        <div class="gp-product-visual-box gp-visual-drone_agri">
                            <span class="gp-visual-tag"><?php esc_html_e( 'Agriculture', 'gp-theme' ); ?></span>
                            <div class="gp-product-icon-graphic">
                                <svg viewBox="0 0 120 100" width="100" height="84"><rect x="30" y="30" width="60" height="40" rx="8" fill="#0b2545" stroke="#00b4d8" stroke-width="2"/><line x1="20" y1="50" x2="100" y2="50" stroke="#ef233c" stroke-width="3"/></svg>
                            </div>
                        </div>
                        <span class="gp-product-badge"><?php esc_html_e( 'DGCA Certified', 'gp-theme' ); ?></span>
                    </div>
                    <div class="gp-product-content">
                        <span class="gp-product-cat-name"><?php esc_html_e( 'Precision Agriculture', 'gp-theme' ); ?></span>
                        <h3 class="gp-product-title"><?php esc_html_e( 'AeroCrop Precision Agri Drone', 'gp-theme' ); ?></h3>
                        <p class="gp-product-excerpt"><?php esc_html_e( 'Type-certified agricultural spraying drone with 16L chemical payload, centrifugal micron nozzles, autonomous obstacle avoidance radar, and terrain tracking.', 'gp-theme' ); ?></p>
                        <div class="gp-specs-meta">
                            <div class="gp-spec-row"><span class="gp-spec-label">Payload:</span><span class="gp-spec-val">16 Litres</span></div>
                            <div class="gp-spec-row"><span class="gp-spec-label">Coverage:</span><span class="gp-spec-val">1 Acre / 7 Mins</span></div>
                        </div>
                        <button class="gp-btn gp-btn-sm gp-btn-primary gp-btn-enquire gp-btn-full" data-product="AeroCrop Drone">
                            <span><?php esc_html_e( 'Enquire for Agri Tech', 'gp-theme' ); ?></span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();
