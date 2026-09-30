<?php
/**
 * The template for displaying product archives
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

$default_products = gp_get_default_products();
?>

<main id="primary" class="site-main">

    <!-- Archive Banner -->
    <section class="gp-page-banner">
        <div class="gp-container">
            <div class="gp-page-banner-content">
                <span class="gp-sub-tag"><?php esc_html_e( 'COMPLETE CATALOG', 'gp-theme' ); ?></span>
                <h1 class="gp-page-title"><?php esc_html_e( 'Products & Solutions Catalog', 'gp-theme' ); ?></h1>
                <?php gp_breadcrumbs(); ?>
            </div>
        </div>
    </section>

    <!-- Products Catalog Section -->
    <section class="gp-section gp-catalog-section">
        <div class="gp-container">
            
            <!-- Category Filter Tabs -->
            <div class="gp-filter-tabs">
                <button class="gp-filter-btn active" data-filter="all"><?php esc_html_e( 'All Polymers', 'gp-theme' ); ?></button>
                <button class="gp-filter-btn" data-filter="pp-granules"><?php esc_html_e( 'PP Granules', 'gp-theme' ); ?></button>
                <button class="gp-filter-btn" data-filter="hdpe-granules"><?php esc_html_e( 'HDPE Granules', 'gp-theme' ); ?></button>
                <button class="gp-filter-btn" data-filter="abs-granules"><?php esc_html_e( 'ABS Granules', 'gp-theme' ); ?></button>
                <button class="gp-filter-btn" data-filter="pvc-compounds"><?php esc_html_e( 'PVC & Masterbatch', 'gp-theme' ); ?></button>
            </div>

            <div class="gp-products-grid" id="gp-products-grid">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        $terms = get_the_terms( get_the_ID(), 'gp_product_cat' );
                        $cat_slug = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->slug : 'pp-granules';
                        $cat_name = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->name : 'Polymer Dana';
                        $capacity = get_post_meta( get_the_ID(), '_gp_capacity', true );
                        $material = get_post_meta( get_the_ID(), '_gp_material', true );
                ?>
                    <div class="gp-product-card" data-category="<?php echo esc_attr( $cat_slug ); ?>">
                        <div class="gp-product-thumb">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'gp-product-thumb' ); ?>
                            <?php else : ?>
                                <div class="gp-product-placeholder">
                                    <span><?php echo esc_html( $cat_name ); ?></span>
                                </div>
                            <?php endif; ?>
                            <span class="gp-product-badge"><?php echo esc_html( $cat_name ); ?></span>
                        </div>
                        <div class="gp-product-content">
                            <h3 class="gp-product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="gp-product-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 14 ); ?></p>
                            <?php if ( ! empty( $capacity ) || ! empty( $material ) ) : ?>
                                <div class="gp-product-specs-chip-box">
                                    <?php if ( ! empty( $capacity ) ) : ?>
                                        <div class="gp-spec-chip">
                                            <span class="gp-spec-chip-icon">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                                </svg>
                                            </span>
                                            <div class="gp-spec-chip-info">
                                                <span class="gp-spec-chip-lbl"><?php esc_html_e( 'Capacity / Dimensions', 'gp-theme' ); ?></span>
                                                <span class="gp-spec-chip-val"><?php echo esc_html( $capacity ); ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ( ! empty( $material ) ) : ?>
                                        <div class="gp-spec-chip">
                                            <span class="gp-spec-chip-icon gp-icon-polymer">
                                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                                    <polyline points="2 17 12 22 22 17"></polyline>
                                                    <polyline points="2 12 12 17 22 12"></polyline>
                                                </svg>
                                            </span>
                                            <div class="gp-spec-chip-info">
                                                <span class="gp-spec-chip-lbl"><?php esc_html_e( 'Material / Grade', 'gp-theme' ); ?></span>
                                                <span class="gp-spec-chip-val"><?php echo esc_html( $material ); ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <div class="gp-product-actions">
                                <a href="<?php the_permalink(); ?>" class="gp-btn gp-btn-sm gp-btn-outline gp-btn-view-details">
                                    <?php esc_html_e( 'View Details', 'gp-theme' ); ?>
                                </a>
                                <button class="gp-btn gp-btn-sm gp-btn-primary gp-btn-enquire" data-product="<?php echo esc_attr( get_the_title() ); ?>">
                                    <?php esc_html_e( 'Enquire Now', 'gp-theme' ); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                else :
                    // Default Fallback
                    foreach ( $default_products as $p ) :
                        $img_src = GP_THEME_URI . '/assets/images/product-pp-granules.jpg';
                        if ( 'hdpe_granules' === $p['image_type'] ) {
                            $img_src = GP_THEME_URI . '/assets/images/product-hdpe-granules.jpg';
                        } elseif ( 'abs_granules' === $p['image_type'] ) {
                            $img_src = GP_THEME_URI . '/assets/images/product-abs-granules.jpg';
                        } elseif ( 'pvc_granules' === $p['image_type'] ) {
                            $img_src = GP_THEME_URI . '/assets/images/product-hdpe-granules.jpg';
                        } elseif ( 'masterbatch' === $p['image_type'] ) {
                            $img_src = GP_THEME_URI . '/assets/images/hero-slide-granules.jpg';
                        }
                ?>
                    <div class="gp-product-card" data-category="<?php echo esc_attr( $p['cat_slug'] ); ?>">
                        <div class="gp-product-thumb">
                            <img src="<?php echo esc_url( $img_src ); ?>" alt="<?php echo esc_attr( $p['title'] ); ?>" loading="lazy" />
                            <span class="gp-product-badge"><?php echo esc_html( $p['badge'] ); ?></span>
                        </div>
                        <div class="gp-product-content">
                            <span class="gp-product-cat-name"><?php echo esc_html( $p['category'] ); ?></span>
                            <h3 class="gp-product-title"><?php echo esc_html( $p['title'] ); ?></h3>
                            <p class="gp-product-excerpt"><?php echo esc_html( $p['desc'] ); ?></p>
                            <div class="gp-specs-meta">
                                <div class="gp-spec-row">
                                    <span class="gp-spec-label"><?php esc_html_e( 'MFI / Grade:', 'gp-theme' ); ?></span>
                                    <span class="gp-spec-val"><?php echo esc_html( $p['capacity'] ); ?></span>
                                </div>
                                <div class="gp-spec-row">
                                    <span class="gp-spec-label"><?php esc_html_e( 'Polymer:', 'gp-theme' ); ?></span>
                                    <span class="gp-spec-val"><?php echo esc_html( $p['material'] ); ?></span>
                                </div>
                            </div>
                            <div class="gp-product-actions">
                                <button class="gp-btn gp-btn-sm gp-btn-outline gp-btn-quickview"
                                    data-title="<?php echo esc_attr( $p['title'] ); ?>"
                                    data-cat="<?php echo esc_attr( $p['category'] ); ?>"
                                    data-capacity="<?php echo esc_attr( $p['capacity'] ); ?>"
                                    data-material="<?php echo esc_attr( $p['material'] ); ?>"
                                    data-weight="<?php echo esc_attr( $p['weight'] ); ?>"
                                    data-neck="<?php echo esc_attr( $p['neck_size'] ); ?>"
                                    data-color="<?php echo esc_attr( $p['color'] ); ?>"
                                    data-app="<?php echo esc_attr( $p['application'] ); ?>"
                                    data-cert="<?php echo esc_attr( $p['badge'] ); ?>"
                                    data-desc="<?php echo esc_attr( $p['desc'] ); ?>"
                                    data-img="<?php echo esc_url( $img_src ); ?>">
                                    <?php esc_html_e( 'View Details', 'gp-theme' ); ?>
                                </button>
                                <button class="gp-btn gp-btn-sm gp-btn-primary gp-btn-enquire" data-product="<?php echo esc_attr( $p['title'] ); ?>">
                                    <span><?php esc_html_e( 'Enquire', 'gp-theme' ); ?></span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>

            <!-- Product Quick Details Modal -->
            <div id="gp-quickview-modal" class="gp-quickview-modal" role="dialog" aria-modal="true" aria-hidden="true">
                <div class="gp-quickview-dialog">
                    <button type="button" class="gp-quickview-close" id="gp-quickview-close" aria-label="<?php esc_attr_e( 'Close', 'gp-theme' ); ?>">&times;</button>
                    <div class="gp-quickview-inner">
                        <div class="gp-quickview-media">
                            <div class="gp-product-main-image">
                                <img id="gp-qv-img" src="<?php echo esc_url( GP_THEME_URI . '/assets/images/product-pp-granules.jpg' ); ?>" alt="Product Preview" />
                            </div>
                            <div class="gp-product-badges-row" style="margin-top: 15px;">
                                <span class="gp-cert-badge" id="gp-qv-cert">Virgin & Reprocessed</span>
                                <span class="gp-cert-badge">ASTM Tested</span>
                            </div>
                        </div>
                        <div class="gp-quickview-info">
                            <span class="gp-product-category-label" id="gp-qv-cat">PP Granules</span>
                            <h3 class="gp-product-detail-title" id="gp-qv-title" style="font-size: 1.8rem;">Product Title</h3>
                            <p class="gp-product-short-desc" id="gp-qv-desc">Full polymer specification and processing parameters.</p>
                            
                            <div class="gp-specs-table-wrapper" style="padding: 16px; margin-bottom: 20px;">
                                <h4 class="gp-specs-heading" style="font-size: 1.1rem; margin-bottom: 10px;"><?php esc_html_e( 'Technical Specifications', 'gp-theme' ); ?></h4>
                                <table class="gp-specs-table">
                                    <tbody>
                                        <tr>
                                            <th><?php esc_html_e( 'Melt Flow Index (MFI)', 'gp-theme' ); ?></th>
                                            <td id="gp-qv-capacity">-</td>
                                        </tr>
                                        <tr>
                                            <th><?php esc_html_e( 'Polymer Grade / Material', 'gp-theme' ); ?></th>
                                            <td id="gp-qv-material">-</td>
                                        </tr>
                                        <tr>
                                            <th><?php esc_html_e( 'Packaging Size', 'gp-theme' ); ?></th>
                                            <td id="gp-qv-weight">-</td>
                                        </tr>
                                        <tr>
                                            <th><?php esc_html_e( 'Pellet Shape / Cut', 'gp-theme' ); ?></th>
                                            <td id="gp-qv-neck">-</td>
                                        </tr>
                                        <tr>
                                            <th><?php esc_html_e( 'Available Colors', 'gp-theme' ); ?></th>
                                            <td id="gp-qv-color">-</td>
                                        </tr>
                                        <tr>
                                            <th><?php esc_html_e( 'Recommended Application', 'gp-theme' ); ?></th>
                                            <td id="gp-qv-app">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="gp-product-cta-buttons">
                                <button type="button" class="gp-btn gp-btn-primary gp-btn-lg gp-btn-enquire" id="gp-qv-rfq-btn">
                                    <span><?php esc_html_e( 'Request Immediate Quote', 'gp-theme' ); ?></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="gp-pagination-wrapper">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '← ' . esc_html__( 'Previous', 'gp-theme' ),
                    'next_text' => esc_html__( 'Next', 'gp-theme' ) . ' →',
                ) );
                ?>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();
