<?php
/**
 * The template for displaying a single product
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

$capacity    = get_post_meta( get_the_ID(), '_gp_capacity', true );
$material    = get_post_meta( get_the_ID(), '_gp_material', true );
$weight      = get_post_meta( get_the_ID(), '_gp_weight', true );
$neck_size   = get_post_meta( get_the_ID(), '_gp_neck_size', true );
$color       = get_post_meta( get_the_ID(), '_gp_color', true );
$application = get_post_meta( get_the_ID(), '_gp_application', true );
$cert        = get_post_meta( get_the_ID(), '_gp_cert', true );

$terms = get_the_terms( get_the_ID(), 'gp_product_cat' );
$cat_name = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : 'Industrial';
?>

<main id="primary" class="site-main">

    <!-- Product Header Banner -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php echo esc_html( $cat_name ); ?></span>
                <h1 class="gp-page-title"><?php the_title(); ?></h1>
                <?php gp_breadcrumbs(); ?>
            </div>
        </div>
    </section>

    <!-- Product Details Section -->
    <section class="gp-section gp-product-detail-section">
        <div class="gp-container">
            
            <div class="gp-product-detail-grid">
                
                <!-- Left: Product Media / Graphic -->
                <div class="gp-product-gallery-box">
                    <div class="gp-product-main-image">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'full' ); ?>
                        <?php else : ?>
                            <div class="gp-product-placeholder-big">
                                <span class="gp-placeholder-brand">SRS POLYMER</span>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo esc_html( $cat_name ); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="gp-product-badges-row">
                        <span class="gp-cert-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 5px; vertical-align: middle;"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            <?php esc_html_e( 'Prime Virgin & Recycled', 'gp-theme' ); ?>
                        </span>
                        <span class="gp-cert-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 5px; vertical-align: middle;"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                            <?php esc_html_e( 'Lab Batch Tested (MFI)', 'gp-theme' ); ?>
                        </span>
                        <span class="gp-cert-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 5px; vertical-align: middle;"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" y1="22" x2="4" y2="15"></line></svg>
                            <?php esc_html_e( '100% Made in India', 'gp-theme' ); ?>
                        </span>
                    </div>
                </div>

                <!-- Right: Product Specs & Actions -->
                <div class="gp-product-info-box">
                    <span class="gp-product-category-label"><?php echo esc_html( $cat_name ); ?></span>
                    <h2 class="gp-product-detail-title"><?php the_title(); ?></h2>
                    
                    <div class="gp-product-short-desc">
                        <?php the_excerpt(); ?>
                    </div>

                    <!-- Technical Specifications Table -->
                    <div class="gp-specs-table-wrapper">
                        <h4 class="gp-specs-heading"><?php esc_html_e( 'Technical Specifications', 'gp-theme' ); ?></h4>
                        <table class="gp-specs-table">
                            <tbody>
                                <?php if ( ! empty( $capacity ) ) : ?>
                                    <tr>
                                        <th><?php esc_html_e( 'Melt Flow Index (MFI)', 'gp-theme' ); ?></th>
                                        <td><?php echo esc_html( $capacity ); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ( ! empty( $material ) ) : ?>
                                    <tr>
                                        <th><?php esc_html_e( 'Polymer Grade / Material', 'gp-theme' ); ?></th>
                                        <td><?php echo esc_html( $material ); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ( ! empty( $weight ) ) : ?>
                                    <tr>
                                        <th><?php esc_html_e( 'Packaging Size', 'gp-theme' ); ?></th>
                                        <td><?php echo esc_html( $weight ); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ( ! empty( $neck_size ) ) : ?>
                                    <tr>
                                        <th><?php esc_html_e( 'Pellet Shape / Cut', 'gp-theme' ); ?></th>
                                        <td><?php echo esc_html( $neck_size ); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ( ! empty( $color ) ) : ?>
                                    <tr>
                                        <th><?php esc_html_e( 'Available Colors', 'gp-theme' ); ?></th>
                                        <td><?php echo esc_html( $color ); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ( ! empty( $application ) ) : ?>
                                    <tr>
                                        <th><?php esc_html_e( 'Key Applications', 'gp-theme' ); ?></th>
                                        <td><?php echo esc_html( $application ); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ( ! empty( $cert ) ) : ?>
                                    <tr>
                                        <th><?php esc_html_e( 'Grade / Classification', 'gp-theme' ); ?></th>
                                        <td><?php echo esc_html( $cert ); ?></td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Action Buttons -->
                    <div class="gp-product-cta-buttons">
                        <button class="gp-btn gp-btn-primary gp-btn-lg gp-btn-enquire" data-product="<?php echo esc_attr( get_the_title() ); ?>">
                            <span><?php esc_html_e( 'Request Bulk Quote', 'gp-theme' ); ?></span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </button>
                        <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9]/', '', get_theme_mod( 'gp_company_phone', '+91-8591585497' ) ) ); ?>" class="gp-btn gp-btn-outline gp-btn-lg">
                            <span><?php esc_html_e( 'Speak to Engineer', 'gp-theme' ); ?></span>
                        </a>
                    </div>

                    <!-- Direct Side Contact Form -->
                    <div class="gp-single-side-form-wrap" style="margin-top: 30px; background: #f8fafc; border: 1.5px solid #e2e8f0; border-radius: 12px; padding: 22px;">
                        <h4 style="font-size: 1.1rem; font-weight: 800; color: #0b2545; margin-bottom: 6px; display: flex; align-items: center; gap: 8px;">
                            <span style="width: 8px; height: 8px; background: #10b981; border-radius: 50%; display: inline-block;"></span>
                            <?php esc_html_e( 'Direct Mill Enquiry & Free Sample Bag', 'gp-theme' ); ?>
                        </h4>
                        <p style="font-size: 0.82rem; color: #64748b; margin-bottom: 14px;"><?php esc_html_e( 'Fill out for immediate lot availability, custom MFI matching, and test sample bags.', 'gp-theme' ); ?></p>
                        
                        <form class="gp-ajax-rfq-form" style="display: flex; flex-direction: column; gap: 10px;">
                            <input type="hidden" name="product" value="<?php echo esc_attr( get_the_title() ); ?>">
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                                <input type="text" name="name" placeholder="<?php esc_attr_e( 'Your Name *', 'gp-theme' ); ?>" required style="padding: 9px 12px; border-radius: 6px; border: 1.5px solid #cbd5e1; font-size: 0.88rem;">
                                <input type="text" name="company" placeholder="<?php esc_attr_e( 'Company Name *', 'gp-theme' ); ?>" required style="padding: 9px 12px; border-radius: 6px; border: 1.5px solid #cbd5e1; font-size: 0.88rem;">
                            </div>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                                <input type="tel" name="phone" placeholder="<?php esc_attr_e( 'Phone / WhatsApp *', 'gp-theme' ); ?>" required style="padding: 9px 12px; border-radius: 6px; border: 1.5px solid #cbd5e1; font-size: 0.88rem;">
                                <input type="email" name="email" placeholder="<?php esc_attr_e( 'Email Address', 'gp-theme' ); ?>" style="padding: 9px 12px; border-radius: 6px; border: 1.5px solid #cbd5e1; font-size: 0.88rem;">
                            </div>
                            <select name="quantity" style="padding: 9px 12px; border-radius: 6px; border: 1.5px solid #cbd5e1; font-size: 0.88rem; background: #ffffff;">
                                <option value="Free 5-10 Kg Trial Sample"><?php esc_html_e( 'Free 5-10 Kg Trial Sample Bag', 'gp-theme' ); ?></option>
                                <option value="1-5 MT Pilot Order"><?php esc_html_e( '1 - 5 MT Pilot Order', 'gp-theme' ); ?></option>
                                <option value="5-15 MT / Month" selected><?php esc_html_e( '5 - 15 MT / Month Regular Supply', 'gp-theme' ); ?></option>
                                <option value="25+ MT Bulk Supply"><?php esc_html_e( '25+ MT Bulk Mill Supply', 'gp-theme' ); ?></option>
                            </select>
                            <textarea name="notes" rows="2" placeholder="<?php esc_attr_e( 'Requirements (e.g. MFI, Tensile, Moulding Application)...', 'gp-theme' ); ?>" style="padding: 9px 12px; border-radius: 6px; border: 1.5px solid #cbd5e1; font-size: 0.88rem;"></textarea>
                            <button type="submit" class="gp-btn gp-btn-primary gp-btn-block" style="padding: 10px 18px; font-weight: 700; border-radius: 6px; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px;">
                                <span><?php esc_html_e( 'Send Mill Enquiry', 'gp-theme' ); ?></span>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </button>
                        </form>
                    </div>

                </div>

            </div>

            <!-- Full Product Description & Content -->
            <div class="gp-product-detailed-content">
                <div class="gp-section-header">
                    <h3 class="gp-section-title"><?php esc_html_e( 'Engineering Details & Quality Standards', 'gp-theme' ); ?></h3>
                </div>
                <div class="entry-content gp-typography">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>

            <!-- Related Products Section -->
            <div class="gp-related-products-section">
                <h3 class="gp-related-title"><?php esc_html_e( 'Related Solutions in This Category', 'gp-theme' ); ?></h3>
                <div class="gp-products-grid">
                    <?php
                    $related = new WP_Query( array(
                        'post_type'      => 'gp_product',
                        'posts_per_page' => 3,
                        'post__not_in'   => array( get_the_ID() ),
                    ) );

                    if ( $related->have_posts() ) :
                        while ( $related->have_posts() ) : $related->the_post();
                    ?>
                        <div class="gp-product-card">
                            <div class="gp-product-thumb">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail( 'gp-product-thumb' ); ?>
                                <?php else : ?>
                                    <div class="gp-product-placeholder">
                                        <span><?php the_title(); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="gp-product-content">
                                <h4 class="gp-product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <div class="gp-product-actions">
                                    <a href="<?php the_permalink(); ?>" class="gp-btn gp-btn-sm gp-btn-outline"><?php esc_html_e( 'View Details', 'gp-theme' ); ?></a>
                                    <button class="gp-btn gp-btn-sm gp-btn-primary gp-btn-enquire" data-product="<?php echo esc_attr( get_the_title() ); ?>">
                                        <?php esc_html_e( 'Enquire', 'gp-theme' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();
