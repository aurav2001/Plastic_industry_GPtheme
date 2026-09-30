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

$phone     = get_theme_mod( 'gp_company_phone', '+91-8591585497' );
$clean_tel = preg_replace( '/[^0-9]/', '', $phone );
$email     = get_theme_mod( 'gp_company_email', 'info@srspolymer.com' );
$address   = get_theme_mod( 'gp_company_address', 'SRS Polymer Compounding Mill & Warehouse, Delhi-NCR & Bhiwadi Industrial Area, India' );
$wa_num    = get_theme_mod( 'gp_wa_number', '918591585497' );
$nonce     = wp_create_nonce( 'gp_contact_nonce' );
?>

<main id="primary" class="site-main gp-contact-page">

    <!-- ========================================================================= -->
    <!-- 1. HERO BANNER                                                            -->
    <!-- ========================================================================= -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php esc_html_e( 'DIRECT FACTORY CONNECT', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php esc_html_e( 'Contact Plant & Sales Team', 'gp-theme' ); ?></h1>
                <p class="gp-page-banner-desc">
                    <?php esc_html_e( 'Connect directly with our polymer compounding engineers and dispatch team for bulk plastic dana rates, trial sample bags, and custom MFI formulations.', 'gp-theme' ); ?>
                </p>
                <?php gp_breadcrumbs(); ?>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. QUICK ACTION CARDS (3-COLUMN HIGHLIGHTS)                               -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-contact-top-strip">
        <div class="gp-container">
            <div class="gp-contact-action-cards">
                
                <!-- Card 1: Phone & Hotline -->
                <div class="gp-action-card">
                    <div class="gp-action-card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    </div>
                    <div class="gp-action-card-info">
                        <span class="gp-action-card-lbl"><?php esc_html_e( 'Sales Hotline & WhatsApp', 'gp-theme' ); ?></span>
                        <h4 class="gp-action-card-val"><a href="tel:<?php echo esc_attr( $clean_tel ); ?>"><?php echo esc_html( $phone ); ?></a></h4>
                        <p><?php esc_html_e( 'Mon - Sat: 9:00 AM - 7:30 PM IST', 'gp-theme' ); ?></p>
                        <a href="https://wa.me/<?php echo esc_attr( $wa_num ); ?>?text=Hello%20SRS%20Polymer,%20I%20am%20interested%20in%20plastic%20granules." target="_blank" rel="noopener" class="gp-action-link">
                            <span><?php esc_html_e( 'Instant WhatsApp Chat', 'gp-theme' ); ?></span> →
                        </a>
                    </div>
                </div>

                <!-- Card 2: Official Email -->
                <div class="gp-action-card">
                    <div class="gp-action-card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </div>
                    <div class="gp-action-card-info">
                        <span class="gp-action-card-lbl"><?php esc_html_e( 'Quotations & Purchase Orders', 'gp-theme' ); ?></span>
                        <h4 class="gp-action-card-val"><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></h4>
                        <p><?php esc_html_e( 'Guaranteed response within 2 business hours', 'gp-theme' ); ?></p>
                        <a href="mailto:<?php echo esc_attr( $email ); ?>" class="gp-action-link">
                            <span><?php esc_html_e( 'Email Purchase Order', 'gp-theme' ); ?></span> →
                        </a>
                    </div>
                </div>

                <!-- Card 3: Plant Location -->
                <div class="gp-action-card">
                    <div class="gp-action-card-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div class="gp-action-card-info">
                        <span class="gp-action-card-lbl"><?php esc_html_e( 'Compounding Mill & Warehouse', 'gp-theme' ); ?></span>
                        <h4 class="gp-action-card-val"><?php esc_html_e( 'Delhi-NCR & Bhiwadi Hub', 'gp-theme' ); ?></h4>
                        <p><?php echo esc_html( $address ); ?></p>
                        <span class="gp-action-badge"><?php esc_html_e( '5,000+ MT Ready Stock', 'gp-theme' ); ?></span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. MAIN CONTACT & QUOTATION FORM SECTION                                  -->
    <!-- ========================================================================= -->
    <section class="gp-section gp-contact-main-section" id="contact-form-area">
        <div class="gp-container">
            <div class="gp-contact-layout-grid">
                
                <!-- Left: Interactive Form -->
                <div class="gp-contact-form-col">
                    <div class="gp-form-card gp-contact-form-card">
                        <div class="gp-form-header">
                            <span class="gp-sub-tag"><?php esc_html_e( 'INSTANT FACTORY RFQ', 'gp-theme' ); ?></span>
                            <h2 class="gp-form-title"><?php esc_html_e( 'Request Polymer Dana Rates', 'gp-theme' ); ?></h2>
                            <p class="gp-form-subtitle"><?php esc_html_e( 'Fill in your requirements below for wholesale rates, batch test reports, and sample bag deliveries.', 'gp-theme' ); ?></p>
                        </div>

                        <form class="gp-ajax-rfq-form" id="gp-page-contact-form">
                            <input type="hidden" name="action" value="gp_submit_contact">
                            <input type="hidden" name="security" value="<?php echo esc_attr( $nonce ); ?>">
                            
                            <div class="gp-form-row">
                                <div class="gp-form-group">
                                    <label for="contact-name"><?php esc_html_e( 'Full Name *', 'gp-theme' ); ?></label>
                                    <input type="text" id="contact-name" name="fullname" required placeholder="e.g. Rajesh Sharma">
                                </div>
                                <div class="gp-form-group">
                                    <label for="contact-company"><?php esc_html_e( 'Company / Factory Name', 'gp-theme' ); ?></label>
                                    <input type="text" id="contact-company" name="company" placeholder="e.g. Apex Plastics Ltd.">
                                </div>
                            </div>

                            <div class="gp-form-row">
                                <div class="gp-form-group">
                                    <label for="contact-phone"><?php esc_html_e( 'Phone / WhatsApp Number *', 'gp-theme' ); ?></label>
                                    <input type="tel" id="contact-phone" name="phone" required placeholder="+91 98765 43210">
                                </div>
                                <div class="gp-form-group">
                                    <label for="contact-email"><?php esc_html_e( 'Email Address *', 'gp-theme' ); ?></label>
                                    <input type="email" id="contact-email" name="email" required placeholder="name@company.com">
                                </div>
                            </div>

                            <div class="gp-form-row">
                                <div class="gp-form-group">
                                    <label for="contact-product"><?php esc_html_e( 'Polymer Grade / Requirement', 'gp-theme' ); ?></label>
                                    <select id="contact-product" name="product">
                                        <option value="PP Granules (Injection/Raffia)"><?php esc_html_e( 'Polypropylene (PP) Granules', 'gp-theme' ); ?></option>
                                        <option value="HDPE Granules (Blow/Pipe Grade)"><?php esc_html_e( 'HDPE Granules (Blow & Extrusion)', 'gp-theme' ); ?></option>
                                        <option value="ABS Engineering Pellets"><?php esc_html_e( 'ABS Engineering Dana', 'gp-theme' ); ?></option>
                                        <option value="PVC Compounds & Resins"><?php esc_html_e( 'PVC Compounds & Dana', 'gp-theme' ); ?></option>
                                        <option value="Color & Additive Masterbatches"><?php esc_html_e( 'Color Masterbatches (White/Black/Colors)', 'gp-theme' ); ?></option>
                                        <option value="LDPE & LLDPE Film Granules"><?php esc_html_e( 'LDPE & LLDPE Film Granules', 'gp-theme' ); ?></option>
                                        <option value="Custom Compounding / Other"><?php esc_html_e( 'Custom Compounding / Other', 'gp-theme' ); ?></option>
                                    </select>
                                </div>
                                <div class="gp-form-group">
                                    <label for="contact-quantity"><?php esc_html_e( 'Estimated Quantity Required', 'gp-theme' ); ?></label>
                                    <select id="contact-quantity" name="quantity">
                                        <option value="Sample Bag (25 Kg)"><?php esc_html_e( 'Sample Trial Bag (25 Kg)', 'gp-theme' ); ?></option>
                                        <option value="1 MT to 5 MT"><?php esc_html_e( '1 MT to 5 MT', 'gp-theme' ); ?></option>
                                        <option value="5 MT to 15 MT"><?php esc_html_e( '5 MT to 15 MT', 'gp-theme' ); ?></option>
                                        <option value="Full Truck Load (20+ MT)"><?php esc_html_e( 'Full Truck Load (20+ MT)', 'gp-theme' ); ?></option>
                                        <option value="Monthly Contract Supply"><?php esc_html_e( 'Monthly Contract Supply', 'gp-theme' ); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="gp-form-group">
                                <label for="contact-message"><?php esc_html_e( 'Specific Requirements / Target MFI / Application', 'gp-theme' ); ?></label>
                                <textarea id="contact-message" name="message" rows="4" placeholder="<?php esc_attr_e( 'Please mention your machine application (e.g. 5L bottle blow moulding, chair injection moulding), target MFI, preferred color, or delivery location...', 'gp-theme' ); ?>"></textarea>
                            </div>

                            <div class="gp-form-feedback" style="display:none; margin-bottom:15px; padding:12px 16px; border-radius:6px; font-weight:600; font-size:0.92rem;"></div>

                            <button type="submit" class="gp-btn gp-btn-primary gp-btn-lg gp-btn-full gp-btn-submit">
                                <span><?php esc_html_e( 'Submit Request For Quotation', 'gp-theme' ); ?></span>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Right: Department Directory & Plant Card -->
                <div class="gp-contact-side-col">
                    
                    <!-- Direct Department Directory -->
                    <div class="gp-dept-directory-card">
                        <h3 class="gp-dept-title"><?php esc_html_e( 'Direct Department Directory', 'gp-theme' ); ?></h3>
                        
                        <div class="gp-dept-item">
                            <div class="gp-dept-icon">💼</div>
                            <div class="gp-dept-info">
                                <strong><?php esc_html_e( 'Commercial & Bulk Sales', 'gp-theme' ); ?></strong>
                                <p><?php esc_html_e( 'For wholesale quotes, institutional orders, and price contracts.', 'gp-theme' ); ?></p>
                                <a href="mailto:<?php echo esc_attr( $email ); ?>?subject=Sales%20Enquiry">sales@srspolymer.com</a>
                            </div>
                        </div>

                        <div class="gp-dept-item">
                            <div class="gp-dept-icon">🔬</div>
                            <div class="gp-dept-info">
                                <strong><?php esc_html_e( 'Quality Lab & Compounding', 'gp-theme' ); ?></strong>
                                <p><?php esc_html_e( 'For MFI reports, custom formulations, and polymer test certificates.', 'gp-theme' ); ?></p>
                                <a href="mailto:<?php echo esc_attr( $email ); ?>?subject=Technical%20Lab%20Query">lab@srspolymer.com</a>
                            </div>
                        </div>

                        <div class="gp-dept-item">
                            <div class="gp-dept-icon">🚚</div>
                            <div class="gp-dept-info">
                                <strong><?php esc_html_e( 'Logistics & Dispatch Desk', 'gp-theme' ); ?></strong>
                                <p><?php esc_html_e( 'For live consignment tracking, lorry receipts, and billing.', 'gp-theme' ); ?></p>
                                <a href="tel:<?php echo esc_attr( $clean_tel ); ?>"><?php echo esc_html( $phone ); ?></a>
                            </div>
                        </div>
                    </div>

                    <!-- Dispatch Assurance Box -->
                    <div class="gp-dispatch-assurance-card">
                        <div class="gp-assurance-badge">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00b4d8" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            <span><?php esc_html_e( 'Direct Mill Supply Guarantee', 'gp-theme' ); ?></span>
                        </div>
                        <ul class="gp-assurance-list">
                            <li><span>✓</span> <?php esc_html_e( 'Same-day dispatch for Delhi-NCR orders', 'gp-theme' ); ?></li>
                            <li><span>✓</span> <?php esc_html_e( '25kg moisture-barrier sealed packaging', 'gp-theme' ); ?></li>
                            <li><span>✓</span> <?php esc_html_e( 'Accompanying batch test analysis sheet', 'gp-theme' ); ?></li>
                            <li><span>✓</span> <?php esc_html_e( 'Pan-India transport network & GST invoice', 'gp-theme' ); ?></li>
                        </ul>
                    </div>

                    <!-- Direct WhatsApp Quick Connect -->
                    <div class="gp-quick-wa-box">
                        <div class="gp-wa-box-content">
                            <h4><?php esc_html_e( 'Need Rates Right Now?', 'gp-theme' ); ?></h4>
                            <p><?php esc_html_e( 'Chat with our plant manager directly on WhatsApp for live spot rates.', 'gp-theme' ); ?></p>
                            <a href="https://wa.me/<?php echo esc_attr( $wa_num ); ?>?text=Hi%20SRS%20Polymer,%20please%20share%20today's%20plastic%20dana%20rates." target="_blank" rel="noopener" class="gp-btn gp-btn-whatsapp">
                                <span><?php esc_html_e( 'WhatsApp Fast Response', 'gp-theme' ); ?></span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();
