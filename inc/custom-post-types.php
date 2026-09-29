<?php
/**
 * Register Custom Post Types and Taxonomies for GP Theme
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Custom Post Type: gp_product
 */
function gp_register_product_cpt() {
    $labels = array(
        'name'                  => _x( 'Products', 'Post Type General Name', 'gp-theme' ),
        'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'gp-theme' ),
        'menu_name'             => __( 'Products Catalog', 'gp-theme' ),
        'name_admin_bar'        => __( 'Product', 'gp-theme' ),
        'archives'              => __( 'Product Archives', 'gp-theme' ),
        'attributes'            => __( 'Product Attributes', 'gp-theme' ),
        'all_items'             => __( 'All Products', 'gp-theme' ),
        'add_new_item'          => __( 'Add New Product', 'gp-theme' ),
        'add_new'               => __( 'Add New', 'gp-theme' ),
        'new_item'              => __( 'New Product', 'gp-theme' ),
        'edit_item'             => __( 'Edit Product', 'gp-theme' ),
        'update_item'           => __( 'Update Product', 'gp-theme' ),
        'view_item'             => __( 'View Product', 'gp-theme' ),
        'view_items'            => __( 'View Products', 'gp-theme' ),
        'search_items'          => __( 'Search Product', 'gp-theme' ),
        'not_found'             => __( 'Not found', 'gp-theme' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'gp-theme' ),
    );

    $args = array(
        'label'                 => __( 'Product', 'gp-theme' ),
        'description'           => __( 'Plastic Moulding & Defence Products Catalog', 'gp-theme' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'taxonomies'            => array( 'gp_product_cat' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-products',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rewrite'               => array( 'slug' => 'products' ),
    );
    register_post_type( 'gp_product', $args );
}
add_action( 'init', 'gp_register_product_cpt', 0 );

/**
 * Register Taxonomy: gp_product_cat
 */
function gp_register_product_taxonomy() {
    $labels = array(
        'name'                       => _x( 'Product Categories', 'Taxonomy General Name', 'gp-theme' ),
        'singular_name'              => _x( 'Product Category', 'Taxonomy Singular Name', 'gp-theme' ),
        'menu_name'                  => __( 'Product Categories', 'gp-theme' ),
        'all_items'                  => __( 'All Categories', 'gp-theme' ),
        'new_item_name'              => __( 'New Category Name', 'gp-theme' ),
        'add_new_item'               => __( 'Add New Category', 'gp-theme' ),
        'edit_item'                  => __( 'Edit Category', 'gp-theme' ),
        'update_item'                => __( 'Update Category', 'gp-theme' ),
        'view_item'                  => __( 'View Category', 'gp-theme' ),
        'search_items'               => __( 'Search Categories', 'gp-theme' ),
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
        'show_in_rest'               => true,
        'rewrite'                    => array( 'slug' => 'product-category' ),
    );
    register_taxonomy( 'gp_product_cat', array( 'gp_product' ), $args );
}
add_action( 'init', 'gp_register_product_taxonomy', 0 );

/**
 * Add Product Specification Meta Boxes
 */
function gp_add_product_metaboxes() {
    add_meta_box(
        'gp_product_specs',
        __( 'Product Technical Specifications', 'gp-theme' ),
        'gp_render_product_specs_metabox',
        'gp_product',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'gp_add_product_metaboxes' );

function gp_render_product_specs_metabox( $post ) {
    wp_nonce_field( 'gp_save_product_specs', 'gp_product_specs_nonce' );

    $capacity    = get_post_meta( $post->ID, '_gp_capacity', true );
    $material    = get_post_meta( $post->ID, '_gp_material', true );
    $weight      = get_post_meta( $post->ID, '_gp_weight', true );
    $neck_size   = get_post_meta( $post->ID, '_gp_neck_size', true );
    $color       = get_post_meta( $post->ID, '_gp_color', true );
    $application = get_post_meta( $post->ID, '_gp_application', true );
    $cert        = get_post_meta( $post->ID, '_gp_cert', true );
    ?>
    <table class="form-table" style="width:100%;">
        <tr>
            <th style="width:20%;"><label for="gp_capacity"><?php esc_html_e( 'Capacity / Dimensions', 'gp-theme' ); ?></label></th>
            <td><input type="text" id="gp_capacity" name="gp_capacity" value="<?php echo esc_attr( $capacity ); ?>" class="regular-text" placeholder="e.g. 50L - 250L / 1200x800mm" /></td>
        </tr>
        <tr>
            <th><label for="gp_material"><?php esc_html_e( 'Material / Grade', 'gp-theme' ); ?></label></th>
            <td><input type="text" id="gp_material" name="gp_material" value="<?php echo esc_attr( $material ); ?>" class="regular-text" placeholder="e.g. 100% Virgin Food Grade HDPE / PP / Carbon Composite" /></td>
        </tr>
        <tr>
            <th><label for="gp_weight"><?php esc_html_e( 'Weight / Thickness', 'gp-theme' ); ?></label></th>
            <td><input type="text" id="gp_weight" name="gp_weight" value="<?php echo esc_attr( $weight ); ?>" class="regular-text" placeholder="e.g. 8.5 kg approx" /></td>
        </tr>
        <tr>
            <th><label for="gp_neck_size"><?php esc_html_e( 'Moulding Type / Process', 'gp-theme' ); ?></label></th>
            <td><input type="text" id="gp_neck_size" name="gp_neck_size" value="<?php echo esc_attr( $neck_size ); ?>" class="regular-text" placeholder="e.g. Extrusion Blow Moulding / Injection Moulding" /></td>
        </tr>
        <tr>
            <th><label for="gp_color"><?php esc_html_e( 'Standard Colors', 'gp-theme' ); ?></label></th>
            <td><input type="text" id="gp_color" name="gp_color" value="<?php echo esc_attr( $color ); ?>" class="regular-text" placeholder="e.g. Blue, White, Black, Custom RAL shades" /></td>
        </tr>
        <tr>
            <th><label for="gp_application"><?php esc_html_e( 'Key Applications', 'gp-theme' ); ?></label></th>
            <td><input type="text" id="gp_application" name="gp_application" value="<?php echo esc_attr( $application ); ?>" class="large-text" placeholder="e.g. Chemicals, Lubricants, Paints, Food processing, Aerospace" /></td>
        </tr>
        <tr>
            <th><label for="gp_cert"><?php esc_html_e( 'Certifications & Compliance', 'gp-theme' ); ?></label></th>
            <td><input type="text" id="gp_cert" name="gp_cert" value="<?php echo esc_attr( $cert ); ?>" class="regular-text" placeholder="e.g. UN Approved, ISO 9001:2015, FDA Compliant" /></td>
        </tr>
    </table>
    <?php
}

function gp_save_product_specs( $post_id ) {
    if ( ! isset( $_POST['gp_product_specs_nonce'] ) || ! wp_verify_nonce( $_POST['gp_product_specs_nonce'], 'gp_save_product_specs' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $fields = array( 'gp_capacity', 'gp_material', 'gp_weight', 'gp_neck_size', 'gp_color', 'gp_application', 'gp_cert' );
    foreach ( $fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, '_' . $field, sanitize_text_field( $_POST[ $field ] ) );
        }
    }
}
add_action( 'save_post_gp_product', 'gp_save_product_specs' );
