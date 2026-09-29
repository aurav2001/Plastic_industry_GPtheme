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
                                <span class="gp-placeholder-brand">JYOTI GLOBAL PLAST</span>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo esc_html( $cat_name ); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="gp-product-badges-row">
                        <span class="gp-cert-badge">🛡️ UN Approved Packaging</span>
                        <span class="gp-cert-badge">🏅 ISO 9001:2015</span>
                        <span class="gp-cert-badge">🇮🇳 100% Made in India</span>
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
                                        <th><?php esc_html_e( 'Capacity / Dimensions', 'gp-theme' ); ?></th>
                                        <td><?php echo esc_html( $capacity ); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ( ! empty( $material ) ) : ?>
                                    <tr>
                                        <th><?php esc_html_e( 'Polymer Material', 'gp-theme' ); ?></th>
                                        <td><?php echo esc_html( $material ); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ( ! empty( $weight ) ) : ?>
                                    <tr>
                                        <th><?php esc_html_e( 'Approx Weight', 'gp-theme' ); ?></th>
                                        <td><?php echo esc_html( $weight ); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <?php if ( ! empty( $neck_size ) ) : ?>
                                    <tr>
                                        <th><?php esc_html_e( 'Neck / Process', 'gp-theme' ); ?></th>
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
                                        <th><?php esc_html_e( 'Certifications', 'gp-theme' ); ?></th>
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
