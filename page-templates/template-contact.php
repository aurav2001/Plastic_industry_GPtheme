<?php
/**
 * Template Name: Contact Us Page
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

$phone     = get_theme_mod( 'gp_company_phone', '+91-9876543210' );
$clean_tel = preg_replace( '/[^0-9]/', '', $phone );
$email     = get_theme_mod( 'gp_company_email', 'info@srspolymer.com' );
$address   = get_theme_mod( 'gp_company_address', 'SRS Polymer Compounding Mill & Warehouse, Delhi-NCR & Bhiwadi, India' );
?>

<main id="primary" class="site-main">

    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php esc_html_e( 'GET IN TOUCH', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php esc_html_e( 'Contact Plant & Sales Team', 'gp-theme' ); ?></h1>
                <?php gp_breadcrumbs(); ?>
            </div>
        </div>
    </section>

    <section class="gp-section gp-section-contact">
        <div class="gp-container">
            <div class="gp-contact-box">
                <div class="gp-contact-grid">
                    
                    <div class="gp-contact-left">
                        <span class="gp-sub-tag"><?php esc_html_e( 'HEADQUARTERS & COMPOUNDING PLANT', 'gp-theme' ); ?></span>
                        <h2 class="gp-contact-title"><?php esc_html_e( 'SRS Polymer Industries', 'gp-theme' ); ?></h2>
                        <p class="gp-contact-desc">
                            <?php esc_html_e( 'Our dedicated polymer consultants and lab engineers are on hand to support your procurement, custom MFI blending, and bulk dana supply requirements.', 'gp-theme' ); ?>
                        </p>

                        <div class="gp-contact-details-list">
                            <div class="gp-contact-line">
                                <div class="gp-line-icon">📍</div>
                                <div>
                                    <strong><?php esc_html_e( 'Plant Address:', 'gp-theme' ); ?></strong>
                                    <p><?php echo esc_html( $address ); ?></p>
                                </div>
                            </div>
                            <div class="gp-contact-line">
                                <div class="gp-line-icon">📞</div>
                                <div>
                                    <strong><?php esc_html_e( 'Telephone / Direct Line:', 'gp-theme' ); ?></strong>
                                    <p><a href="tel:<?php echo esc_attr( $clean_tel ); ?>"><?php echo esc_html( $phone ); ?></a></p>
                                </div>
                            </div>
                            <div class="gp-contact-line">
                                <div class="gp-line-icon">✉️</div>
                                <div>
                                    <strong><?php esc_html_e( 'Corporate Email:', 'gp-theme' ); ?></strong>
                                    <p><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></p>
                                </div>
                            </div>
                            <div class="gp-contact-line">
                                <div class="gp-line-icon">🏭</div>
                                <div>
                                    <strong><?php esc_html_e( 'Compounding Facilities:', 'gp-theme' ); ?></strong>
                                    <p><?php esc_html_e( 'Twin-screw extrusion lines and automated pelletizing units with 50,000+ MT annual polymer capacity.', 'gp-theme' ); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="gp-contact-right">
                        <div class="gp-form-card">
                            <h3 class="gp-form-card-title"><?php esc_html_e( 'Send a Direct Message', 'gp-theme' ); ?></h3>
                            <p class="gp-form-card-subtitle"><?php esc_html_e( 'Our sales engineers respond within 2 business hours.', 'gp-theme' ); ?></p>

                            <form class="gp-ajax-rfq-form" id="gp-page-contact-form">
                                <input type="hidden" name="action" value="gp_submit_contact">
                                
                                <div class="gp-form-row">
                                    <div class="gp-form-group">
                                        <label><?php esc_html_e( 'Full Name *', 'gp-theme' ); ?></label>
                                        <input type="text" name="fullname" required placeholder="John Doe">
                                    </div>
                                    <div class="gp-form-group">
                                        <label><?php esc_html_e( 'Company Name', 'gp-theme' ); ?></label>
                                        <input type="text" name="company" placeholder="Acme Ltd">
                                    </div>
                                </div>

                                <div class="gp-form-row">
                                    <div class="gp-form-group">
                                        <label><?php esc_html_e( 'Email Address *', 'gp-theme' ); ?></label>
                                        <input type="email" name="email" required placeholder="john@example.com">
                                    </div>
                                    <div class="gp-form-group">
                                        <label><?php esc_html_e( 'Mobile / WhatsApp *', 'gp-theme' ); ?></label>
                                        <input type="tel" name="phone" required placeholder="+91 98765 43210">
                                    </div>
                                </div>

                                <div class="gp-form-group">
                                    <label><?php esc_html_e( 'Polymer / Granule Requirement', 'gp-theme' ); ?></label>
                                    <input type="text" name="product" placeholder="e.g. PP Granules / HDPE Blow Grade / ABS Dana">
                                </div>

                                <div class="gp-form-group">
                                    <label><?php esc_html_e( 'Message Details', 'gp-theme' ); ?></label>
                                    <textarea name="message" rows="4" placeholder="How can we assist your business today?"></textarea>
                                </div>

                                <div class="gp-form-feedback"></div>

                                <button type="submit" class="gp-btn gp-btn-primary gp-btn-full gp-btn-submit">
                                    <span><?php esc_html_e( 'Submit Message', 'gp-theme' ); ?></span>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
