<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$phone     = get_theme_mod( 'gp_company_phone', '+91-8591585497' );
$clean_tel = preg_replace( '/[^0-9]/', '', $phone );
$email     = get_theme_mod( 'gp_company_email', 'info@srspolymer.com' );
$address   = get_theme_mod( 'gp_company_address', 'SRS Polymer Industrial Area, Phase-2, New Delhi, India' );
$cert      = get_theme_mod( 'gp_company_cert', 'ISO 9001:2015 Certified Polymer Supplier' );
$wa_enable = get_theme_mod( 'gp_enable_whatsapp', true );
$wa_number = get_theme_mod( 'gp_whatsapp_number', '918591585497' );
$wa_text   = get_theme_mod( 'gp_whatsapp_text', 'Hi SRS Polymer! I need price and availability for Plastic Granules (Dana).' );
?>

    </div><!-- #content -->

    <?php
    if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) :
    ?>
    <!-- Industrial CTA Banner before footer -->
    <section class="gp-cta-strip">
        <div class="gp-container">
            <div class="gp-cta-strip-card">
                <div class="gp-cta-strip-text">
                    <span class="gp-tag-pill"><?php esc_html_e( 'PARTNER WITH LEADERS', 'gp-theme' ); ?></span>
                    <h3><?php esc_html_e( 'Looking for Premium Plastic Granules (Dana) & Custom Compounding?', 'gp-theme' ); ?></h3>
                    <p><?php esc_html_e( 'From virgin PP & HDPE granules to high-impact ABS, PVC compounds, and masterbatches — we supply certified quality at competitive bulk rates.', 'gp-theme' ); ?></p>
                </div>
                <div class="gp-cta-strip-actions">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="gp-btn gp-btn-light gp-btn-lg">
                        <span><?php esc_html_e( 'Request Bulk Price Quote', 'gp-theme' ); ?></span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="tel:<?php echo esc_attr( $clean_tel ); ?>" class="gp-btn gp-btn-glass gp-btn-lg">
                        <span><?php esc_html_e( 'Speak to Polymer Specialist', 'gp-theme' ); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Site Footer -->
    <footer id="colophon" class="site-footer gp-footer">
        <div class="gp-container gp-footer-widgets">
            <div class="gp-footer-grid">
                <!-- Col 1: Bio & Cert -->
                <div class="gp-footer-col gp-footer-col-1">
                    <div class="gp-footer-brand">
                        <div class="gp-logo-mark">
                            <svg width="38" height="38" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <polygon points="25,4 45,15 45,37 25,48 5,37 5,15" stroke="#48cae4" stroke-width="2" fill="rgba(19, 64, 116, 0.5)" stroke-linejoin="round"/>
                                <line x1="25" y1="16" x2="25" y2="36" stroke="#48cae4" stroke-width="1.8" stroke-linecap="round"/>
                                <line x1="13" y1="21" x2="37" y2="31" stroke="#48cae4" stroke-width="1.8" stroke-linecap="round"/>
                                <line x1="13" y1="31" x2="37" y2="21" stroke="#48cae4" stroke-width="1.8" stroke-linecap="round"/>
                                <circle cx="25" cy="26" r="5" fill="#ffffff"/>
                                <circle cx="25" cy="16" r="3.5" fill="#00b4d8"/>
                                <circle cx="25" cy="36" r="3.5" fill="#ef233c"/>
                                <circle cx="13" cy="21" r="3.5" fill="#ef233c"/>
                                <circle cx="37" cy="31" r="3.5" fill="#00b4d8"/>
                                <circle cx="13" cy="31" r="3" fill="#00b4d8"/>
                                <circle cx="37" cy="21" r="3" fill="#ef233c"/>
                            </svg>
                        <h3 class="gp-footer-company"><?php echo esc_html( get_theme_mod( 'gp_company_name', 'SHRI RAM SHARNAM OVERSEAS' ) ); ?><span style="display:block; font-size: 0.8rem; font-weight: 600; color: var(--gp-accent-cyan); letter-spacing: 0.04em; margin-top: 4px;"><?php echo esc_html( get_theme_mod( 'gp_company_division', 'GREEN POLYTECH LIMITED' ) ); ?> (<?php echo esc_html( get_theme_mod( 'gp_company_short', 'SRS' ) ); ?>)</span></h3>
                    </div>
                    <p class="gp-footer-cert-badge">
                        <span class="gp-pulse-dot"></span> <?php echo esc_html( $cert ); ?>
                    </p>
                    <p class="gp-footer-desc">
                        <?php esc_html_e( 'Leading manufacturer, importer, and supplier of Virgin and Reprocessed Plastic Granules (Plastic Dana) including PP, HDPE, LDPE, ABS, PVC, and Color Masterbatches for plastic moulding and extrusion industries across India.', 'gp-theme' ); ?>
                    </p>
                    <div class="gp-footer-socials">
                        <?php if ( get_theme_mod( 'gp_social_linkedin', 'https://in.linkedin.com/company/srs-polymer' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'gp_social_linkedin', 'https://in.linkedin.com/company/srs-polymer' ) ); ?>" target="_blank" rel="noopener" aria-label="LinkedIn" class="gp-social-circle">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.75-1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'gp_social_facebook', 'https://www.facebook.com/jypolycontainer/' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'gp_social_facebook', 'https://www.facebook.com/jypolycontainer/' ) ); ?>" target="_blank" rel="noopener" aria-label="Facebook" class="gp-social-circle">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.5 5H18V0h-3.808C10.595 0 9 1.582 9 4.615V8z"/></svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Col 2: Useful Links -->
                <div class="gp-footer-col gp-footer-col-2">
                    <h4 class="gp-footer-heading"><?php esc_html_e( 'Quick Links', 'gp-theme' ); ?></h4>
                    <ul class="gp-footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><span class="gp-arrow">›</span> <?php esc_html_e( 'About SRS Polymer', 'gp-theme' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>#vision"><span class="gp-arrow">›</span> <?php esc_html_e( 'Our 25-Year Journey', 'gp-theme' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>#infrastructure"><span class="gp-arrow">›</span> <?php esc_html_e( 'Compounding Infrastructure', 'gp-theme' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>#lab"><span class="gp-arrow">›</span> <?php esc_html_e( 'MFI Testing & Lab Standards', 'gp-theme' ); ?></a></li>
                        <li><a href="<?php echo esc_url( get_post_type_archive_link( 'gp_product' ) ?: home_url( '/products/' ) ); ?>"><span class="gp-arrow">›</span> <?php esc_html_e( 'Plastic Dana Catalog', 'gp-theme' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span class="gp-arrow">›</span> <?php esc_html_e( 'Contact & Direct Enquiry', 'gp-theme' ); ?></a></li>
                    </ul>
                </div>

                <!-- Col 3: Products Offered -->
                <div class="gp-footer-col gp-footer-col-3">
                    <h4 class="gp-footer-heading"><?php esc_html_e( 'Polymer Products', 'gp-theme' ); ?></h4>
                    <ul class="gp-footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>#products" data-cat="pp-granules"><span class="gp-arrow">›</span> <?php esc_html_e( 'Polypropylene (PP) Granules', 'gp-theme' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>#products" data-cat="hdpe-granules"><span class="gp-arrow">›</span> <?php esc_html_e( 'HDPE Granules (Blow & Pipe)', 'gp-theme' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>#products" data-cat="abs-granules"><span class="gp-arrow">›</span> <?php esc_html_e( 'ABS Engineering Pellets', 'gp-theme' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>#products" data-cat="pvc-compounds"><span class="gp-arrow">›</span> <?php esc_html_e( 'PVC Compounds & Dana', 'gp-theme' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>#products" data-cat="masterbatches"><span class="gp-arrow">›</span> <?php esc_html_e( 'Color Masterbatches', 'gp-theme' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/products/' ) ); ?>#products" data-cat="pp-granules"><span class="gp-arrow">›</span> <?php esc_html_e( 'Reprocessed Plastic Dana', 'gp-theme' ); ?></a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact Us -->
                <div class="gp-footer-col gp-footer-col-4">
                    <h4 class="gp-footer-heading"><?php esc_html_e( 'Contact Plant & Office', 'gp-theme' ); ?></h4>
                    <div class="gp-footer-contact-item">
                        <div class="gp-contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div class="gp-contact-text">
                            <strong><?php esc_html_e( 'Plant Location:', 'gp-theme' ); ?></strong>
                            <p><?php echo esc_html( $address ); ?></p>
                        </div>
                    </div>

                    <div class="gp-footer-contact-item">
                        <div class="gp-contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div class="gp-contact-text">
                            <strong><?php esc_html_e( 'Call Direct:', 'gp-theme' ); ?></strong>
                            <p><a href="tel:<?php echo esc_attr( $clean_tel ); ?>"><?php echo esc_html( $phone ); ?></a></p>
                        </div>
                    </div>

                    <div class="gp-footer-contact-item">
                        <div class="gp-contact-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div class="gp-contact-text">
                            <strong><?php esc_html_e( 'Email Enquiry:', 'gp-theme' ); ?></strong>
                            <p><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Bar -->
        <div class="gp-footer-bottom">
            <div class="gp-container gp-footer-bottom-inner">
                <p class="gp-copyright-text">
                    &copy; <?php echo esc_html( date( 'Y' ) ); ?> <strong><?php echo esc_html( get_theme_mod( 'gp_company_name', 'SHRI RAM SHARNAM OVERSEAS' ) ); ?> (<?php echo esc_html( get_theme_mod( 'gp_company_division', 'GREEN POLYTECH LIMITED' ) ); ?>)</strong>. <?php esc_html_e( 'All Rights Reserved.', 'gp-theme' ); ?>
                </p>
                <div class="gp-footer-bottom-links">
                    <a href="#investors"><?php esc_html_e( 'Privacy Policy', 'gp-theme' ); ?></a>
                    <span class="sep">•</span>
                    <a href="#investors"><?php esc_html_e( 'Terms of Supply', 'gp-theme' ); ?></a>
                    <span class="sep">•</span>
                    <a href="#investors"><?php esc_html_e( 'SEBI Disclosures', 'gp-theme' ); ?></a>
                </div>
            </div>
        </div>
    </footer>
    <?php endif; ?>

    <!-- Floating WhatsApp Widget (matching Jyoti Joinchat) -->
    <?php if ( $wa_enable ) : ?>
    <div class="gp-whatsapp-widget" id="gp-whatsapp-widget" style="position: fixed !important; bottom: 30px !important; right: 30px !important; left: auto !important; z-index: 99999 !important;">
        <!-- Chat Popup Box -->
        <div class="gp-wa-chatbox" id="gp-wa-chatbox" style="position: absolute !important; bottom: 75px !important; right: 0 !important; left: auto !important; transform-origin: bottom right !important;">
            <div class="gp-wa-header">
                <div class="gp-wa-avatar">
                    <div class="gp-wa-avatar-img">SP</div>
                    <span class="gp-wa-status-dot"></span>
                </div>
                <div class="gp-wa-info">
                    <h4>SRS Polymer</h4>
                    <span><?php esc_html_e( 'Typically replies within minutes', 'gp-theme' ); ?></span>
                </div>
                <button class="gp-wa-close" id="gp-wa-close" aria-label="<?php esc_attr_e( 'Close WhatsApp Dialog', 'gp-theme' ); ?>">✕</button>
            </div>
            <div class="gp-wa-body">
                <div class="gp-wa-msg-bubble">
                    <p><?php esc_html_e( 'Hello 👋 How can we help you today?', 'gp-theme' ); ?></p>
                    <p class="gp-wa-sub"><?php esc_html_e( 'Ask about today’s rates for PP Granules, HDPE Dana, ABS Engineering Pellets, or Masterbatches.', 'gp-theme' ); ?></p>
                    <span class="gp-wa-time"><?php echo esc_html( date( 'H:i' ) ); ?></span>
                </div>
            </div>
            <div class="gp-wa-footer">
                <a href="https://api.whatsapp.com/send?phone=<?php echo esc_attr( $wa_number ); ?>&text=<?php echo esc_attr( rawurlencode( $wa_text ) ); ?>" target="_blank" rel="noopener" class="gp-btn-wa-send">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    <span><?php esc_html_e( 'Open Chat on WhatsApp', 'gp-theme' ); ?></span>
                </a>
            </div>
        </div>

        <!-- Trigger Button -->
        <button class="gp-wa-trigger" id="gp-wa-trigger" aria-label="<?php esc_attr_e( 'Chat with us on WhatsApp', 'gp-theme' ); ?>">
            <span class="gp-wa-pulse"></span>
            <svg width="32" height="32" viewBox="0 0 24 24" fill="#ffffff"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
            <span class="gp-wa-badge-notify">1</span>
        </button>
    </div>
    <?php endif; ?>

    <!-- Back to Top Button -->
    <button id="gp-back-to-top" class="gp-back-to-top" style="bottom: 102px !important; right: 36px !important; left: auto !important;" aria-label="<?php esc_attr_e( 'Back to top', 'gp-theme' ); ?>">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="18 15 12 9 6 15"></polyline></svg>
    </button>

    <!-- Quick RFQ Modal Dialog -->
    <div class="gp-modal" id="gp-rfq-modal" aria-hidden="true" role="dialog">
        <div class="gp-modal-dialog">
            <div class="gp-modal-header">
                <h3><?php esc_html_e( 'Request a Custom Quotation', 'gp-theme' ); ?></h3>
                <p><?php esc_html_e( 'Direct line to our technical sales team for bulk supply & OEM custom moulding.', 'gp-theme' ); ?></p>
                <button class="gp-modal-close" id="gp-rfq-modal-close" aria-label="<?php esc_attr_e( 'Close', 'gp-theme' ); ?>">✕</button>
            </div>
            <form class="gp-modal-form gp-ajax-rfq-form">
                <input type="hidden" name="action" value="gp_submit_contact">
                <div class="gp-form-row">
                    <div class="gp-form-group">
                        <label><?php esc_html_e( 'Full Name *', 'gp-theme' ); ?></label>
                        <input type="text" name="fullname" required placeholder="Example Name">
                    </div>
                    <div class="gp-form-group">
                        <label><?php esc_html_e( 'Company Name', 'gp-theme' ); ?></label>
                        <input type="text" name="company" placeholder="ABC Chemicals Ltd">
                    </div>
                </div>
                <div class="gp-form-row">
                    <div class="gp-form-group">
                        <label><?php esc_html_e( 'Email Address *', 'gp-theme' ); ?></label>
                        <input type="email" name="email" required placeholder="example@example.com">
                    </div>
                    <div class="gp-form-group">
                        <label><?php esc_html_e( 'Mobile / WhatsApp *', 'gp-theme' ); ?></label>
                        <input type="tel" name="phone" required placeholder="+91 98765 43210">
                    </div>
                </div>
                <div class="gp-form-row">
                    <div class="gp-form-group">
                        <label><?php esc_html_e( 'Product of Interest', 'gp-theme' ); ?></label>
                        <input type="text" name="product" id="gp-modal-product-field" placeholder="e.g. PP Granules / HDPE Dana (MFI 12)">
                    </div>
                    <div class="gp-form-group">
                        <label><?php esc_html_e( 'Estimated Quantity', 'gp-theme' ); ?></label>
                        <input type="text" name="quantity" placeholder="e.g. 5,000 pcs / 10 Units">
                    </div>
                </div>
                <div class="gp-form-group">
                    <label><?php esc_html_e( 'Detailed Requirements / Specifications', 'gp-theme' ); ?></label>
                    <textarea name="message" rows="3" placeholder="Please specify UN certification needs, color, neck aperture, delivery timeline..."></textarea>
                </div>
                <div class="gp-form-feedback"></div>
                <button type="submit" class="gp-btn gp-btn-primary gp-btn-full gp-btn-submit">
                    <span><?php esc_html_e( 'Submit Request Now', 'gp-theme' ); ?></span>
                </button>
            </form>
        </div>
        <div class="gp-modal-backdrop" id="gp-rfq-modal-backdrop"></div>
    </div>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
