<?php
/**
 * Default Demo Data & Fallbacks for GP Theme
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Get fallback products list
 */
function gp_get_default_products() {
    return array(
        array(
            'title'       => 'Polypropylene (PP) Granules',
            'category'    => 'PP Granules',
            'cat_slug'    => 'pp-granules',
            'desc'        => 'Prime virgin and reprocessed Polypropylene (PP) plastic dana pellets. High tensile stiffness, low density, and smooth flowability for high-speed injection moulding and raffia woven applications.',
            'capacity'    => 'MFI: 11 - 14 g/10min (Injection Grade)',
            'material'    => 'Polypropylene Homo/Copolymer (PPHP & PPCP)',
            'weight'      => '25 Kg Moisture-Proof Poly Bags',
            'neck_size'   => 'Rice-shaped pellets (2.5mm)',
            'color'       => 'Milky White, Natural Translucent, Red, Blue',
            'application' => 'Injection Moulded Chairs, Buckets, Containers, Box Straps, Raffia Bags',
            'badge'       => 'Virgin & Reprocessed',
            'image_type'  => 'pp_granules',
        ),
        array(
            'title'       => 'HDPE Granules (Blow & Extrusion Grade)',
            'category'    => 'HDPE Granules',
            'cat_slug'    => 'hdpe-granules',
            'desc'        => 'High-density polyethylene plastic dana featuring high impact strength and environmental stress crack resistance (ESCR) for chemical containers, jerry cans, and pressure pipes.',
            'capacity'    => 'MFI: 0.35 - 1.2 g/10min (Blow & Pipe Grade)',
            'material'    => 'Virgin & Recycled HDPE (PE100 / PE80 Grade)',
            'weight'      => '25 Kg HDPE Laminated Sacks',
            'neck_size'   => 'Uniform 3mm Dana Pellets',
            'color'       => 'Natural White, Industrial Blue, Black UV',
            'application' => 'Blow Moulded Bottles, Chemical Drums, Water & Gas Pipes, Cable Ducts',
            'badge'       => 'High ESCR Grade',
            'image_type'  => 'hdpe_granules',
        ),
        array(
            'title'       => 'ABS Engineering Polymer Dana',
            'category'    => 'ABS Granules',
            'cat_slug'    => 'abs-granules',
            'desc'        => 'High-performance ABS plastic dana offering superior impact resistance, dimensional stability, and high-gloss surface finish for electrical and automotive manufacturing.',
            'capacity'    => 'MFI: 18 - 25 g/10min @ 220°C',
            'material'    => 'Acrylonitrile Butadiene Styrene (ABS Terpolymer)',
            'weight'      => '25 Kg Moisture Barrier Bags',
            'neck_size'   => 'High-Gloss Uniform Pellets',
            'color'       => 'Natural Ivory, Jet Black, Pre-colored',
            'application' => 'Electronic Appliance Enclosures, Switchboards, Automotive Dashboards, Helmets',
            'badge'       => 'High Impact Resistant',
            'image_type'  => 'abs_granules',
        ),
        array(
            'title'       => 'PVC Compound & Resins',
            'category'    => 'PVC Compounds',
            'cat_slug'    => 'pvc-compounds',
            'desc'        => 'Pre-mixed rigid and flexible plasticized PVC compound dana pellets with thermal stabilizers and fire retardants for cable insulation, shoes, and plumbing profiles.',
            'capacity'    => 'Hardness: Shore A 60 - Shore D 85',
            'material'    => 'Suspension Grade PVC Resin + Plasticizers',
            'weight'      => '25 Kg Poly Woven Bags',
            'neck_size'   => 'Extruded Cylindrical Granules',
            'color'       => 'Crystal Clear, Black, Red, Blue, Grey',
            'application' => 'Wire & Cable Sheathing, Footwear Soles, Flexible Tubing, Conduit Pipes',
            'badge'       => 'Flame Retardant (FR)',
            'image_type'  => 'pvc_granules',
        ),
        array(
            'title'       => 'LDPE & LLDPE Film Grade Granules',
            'category'    => 'LDPE & LLDPE',
            'cat_slug'    => 'ldpe-lldpe',
            'desc'        => 'Premium clarity virgin and recycled LDPE and metallocene LLDPE plastic dana with high dart impact and puncture resistance for blown film and packaging pouches.',
            'capacity'    => 'MFI: 2.0 - 4.5 g/10min (Film Grade)',
            'material'    => 'Low-Density Polyethylene (LDPE / m-LLDPE)',
            'weight'      => '25 Kg Laminated Bags',
            'neck_size'   => 'Translucent Spherical Pellets',
            'color'       => 'Natural High-Clarity, Milky White',
            'application' => 'Packaging Pouches, Shrink Wrap, Greenhouse Mulch Film, Squeeze Bottles',
            'badge'       => 'Food Grade Compliant',
            'image_type'  => 'pp_granules',
        ),
        array(
            'title'       => 'Color & Additive Masterbatches',
            'category'    => 'Masterbatches',
            'cat_slug'    => 'masterbatches',
            'desc'        => 'Highly concentrated polymer color masterbatches (White TiO2, Carbon Black, Red, Blue, Green, UV Stabilizers) delivering streak-free dispersion in plastic processing.',
            'capacity'    => 'Concentration: 30% - 75% Pigment Loading',
            'material'    => 'Polymer Carrier (PE / PP Based Matrix)',
            'weight'      => '25 Kg Sealed Moisture-Proof Bags',
            'neck_size'   => 'Micro-Pellet Granules (2mm)',
            'color'       => 'Vibrant Red, Blue, Green, Yellow, Pure White, Deep Black',
            'application' => 'Universal Coloring for PP, HDPE, LDPE, ABS Moulding & Film Extrusion',
            'badge'       => 'Streak-Free Dispersion',
            'image_type'  => 'masterbatch',
        ),
    );
}

/**
 * Get fallback industries list for Plastic Granules
 */
function gp_get_default_industries() {
    return array(
        array(
            'title' => 'Injection Moulding Units',
            'desc'  => 'High-flow PP and ABS granules for household plastics, furniture, buckets, crates, and precision components.',
            'icon'  => 'moulding',
        ),
        array(
            'title' => 'Blow Moulding & Containers',
            'desc'  => 'High ESCR HDPE granules for chemical drums, jerry cans, lube bottles, and edible oil containers.',
            'icon'  => 'blow',
        ),
        array(
            'title' => 'Automotive Plastics',
            'desc'  => 'High-impact ABS, Nylon, and PPCP granules for dashboards, interior trims, and under-the-hood brackets.',
            'icon'  => 'automotive',
        ),
        array(
            'title' => 'Woven Sacks & Raffia',
            'desc'  => 'High-tenacity PP raffia grade granules with uniform melt strength for cement and grain sacks.',
            'icon'  => 'raffia',
        ),
        array(
            'title' => 'Electrical & Electronics',
            'desc'  => 'Flame-retardant ABS and polycarbonate granules for switchboards, appliance casings, and meters.',
            'icon'  => 'electrical',
        ),
        array(
            'title' => 'Pipes & Agriculture Drip',
            'desc'  => 'PE100 / PE80 certified HDPE black granules and PVC compounds for potable water and irrigation lines.',
            'icon'  => 'pipes',
        ),
        array(
            'title' => 'Packaging Films & Pouches',
            'desc'  => 'High-clarity virgin LDPE and LLDPE film granules for retail pouches, shrink wrap, and liner bags.',
            'icon'  => 'film',
        ),
        array(
            'title' => 'Footwear & Cable Extrusion',
            'desc'  => 'Flexible PVC compound granules and TPR for electric wire insulation, footwear soles, and gaskets.',
            'icon'  => 'cable',
        ),
    );
}

/**
 * Get fallback client logos
 */
function gp_get_default_clients() {
    return array(
        array( 'name' => 'BASF Chemicals', 'tag' => 'Global Chemical Leader' ),
        array( 'name' => 'APAR Industries', 'tag' => 'Specialty Oils & Conductors' ),
        array( 'name' => 'HP Lubricants', 'tag' => 'Hindustan Petroleum' ),
        array( 'name' => 'Nalco Water', 'tag' => 'An Ecolab Company' ),
        array( 'name' => 'Ipca Laboratories', 'tag' => 'Global Pharma Leader' ),
        array( 'name' => 'Chem-Trend', 'tag' => 'Mould Release Agents' ),
        array( 'name' => 'Elantas Electrical', 'tag' => 'Insulation Solutions' ),
        array( 'name' => 'Neogen Chemicals', 'tag' => 'Specialty Bromine Chemicals' ),
        array( 'name' => 'Foseco India', 'tag' => 'Foundry Technologies' ),
        array( 'name' => 'Vidhi Specialty', 'tag' => 'Food Colors & Additives' ),
    );
}

/**
 * Get fallback news items
 */
function gp_get_default_news() {
    return array(
        array(
            'title'    => 'Virgin vs Recycled PP & HDPE Granules: Optimizing Manufacturing Costs',
            'date'     => 'February 20, 2025',
            'category' => 'Polymer Compounding',
            'summary'  => 'A comprehensive technical comparison of melt flow index (MFI), tensile yield, and cost optimization when blending virgin and reprocessed dana.',
            'readtime' => '4 min read',
        ),
        array(
            'title'    => 'Understanding Melt Flow Index (MFI) in High-Speed Injection Moulding',
            'date'     => 'February 12, 2025',
            'category' => 'Quality Control',
            'summary'  => 'Why batch-to-batch MFI consistency is vital to eliminate flash, sink marks, and nozzle choking across high-tonnage moulding presses.',
            'readtime' => '5 min read',
        ),
        array(
            'title'    => 'Polymer Dana Price Trends & Circular Raw Material Sourcing in India',
            'date'     => 'January 28, 2025',
            'category' => 'Industry Insights',
            'summary'  => 'How Indian plastic manufacturers are adopting circular engineering polymers, masterbatches, and sustainable reprocessed compounds.',
            'readtime' => '3 min read',
        ),
    );
}

/**
 * Automatically seed demo products into WordPress CPT if database has none
 */
function gp_seed_demo_products_once() {
    if ( get_option( 'gp_demo_products_seeded' ) ) {
        return;
    }

    $existing = get_posts( array(
        'post_type'      => 'gp_product',
        'posts_per_page' => 1,
        'post_status'    => 'any',
    ) );

    if ( ! empty( $existing ) ) {
        update_option( 'gp_demo_products_seeded', 1 );
        return;
    }

    $products = gp_get_default_products();
    $image_map = array(
        'pp_granules'        => 'product-pp-granules.jpg',
        'hdpe_granules'      => 'product-hdpe-granules.jpg',
        'abs_granules'       => 'product-abs-granules.jpg',
        'pvc_granules'       => 'product-hdpe-granules.jpg',
        'masterbatch'        => 'hero-slide-granules.jpg',
        'drum'               => 'product-pp-granules.jpg',
        'jerrycan'           => 'product-hdpe-granules.jpg',
        'carboy'             => 'product-hdpe-granules.jpg',
        'jar'                => 'product-abs-granules.jpg',
        'bucket'             => 'product-pp-granules.jpg',
        'drone_surveillance' => 'hero-slide-granules.jpg',
        'drone_agri'         => 'hero-slide-granules.jpg',
        'connector'          => 'product-abs-granules.jpg',
    );

    foreach ( $products as $p ) {
        $post_id = wp_insert_post( array(
            'post_title'   => $p['title'],
            'post_content' => '<p>' . esc_html( $p['desc'] ) . '</p><h3>High Performance Polymer Dana Quality</h3><p>Manufactured and compounded using prime virgin polymers and precision reprocessed resins under ASTM D1238 and ISO testing protocols. Engineered for consistent Melt Flow Index (MFI), zero nozzle clogging, high tensile strength, and uniform pellet cut.</p><ul><li>Batch-tested for exact Melt Flow Index (MFI) and density consistency.</li><li>Zero foreign contamination with multi-stage computerized melt screening.</li><li>Delivered in heavy-duty 25 Kg moisture barrier poly-lined bags.</li></ul>',
            'post_excerpt' => $p['desc'],
            'post_status'  => 'publish',
            'post_type'    => 'gp_product',
        ) );

        if ( ! is_wp_error( $post_id ) ) {
            // Assign Taxonomy
            wp_set_object_terms( $post_id, $p['category'], 'gp_product_cat' );

            // Set Post Meta
            update_post_meta( $post_id, '_gp_capacity', $p['capacity'] );
            update_post_meta( $post_id, '_gp_material', $p['material'] );
            update_post_meta( $post_id, '_gp_weight', $p['weight'] );
            update_post_meta( $post_id, '_gp_neck_size', $p['neck_size'] );
            update_post_meta( $post_id, '_gp_color', $p['color'] );
            update_post_meta( $post_id, '_gp_application', $p['application'] );
            update_post_meta( $post_id, '_gp_cert', $p['badge'] );

            // Attach Featured Image if available
            $img_filename = isset( $image_map[ $p['image_type'] ] ) ? $image_map[ $p['image_type'] ] : 'product-drum-blue.jpg';
            $img_path = GP_THEME_DIR . '/assets/images/' . $img_filename;

            if ( file_exists( $img_path ) && function_exists( 'wp_insert_attachment' ) ) {
                $upload_dir = wp_upload_dir();
                $target_path = $upload_dir['path'] . '/' . basename( $img_path );
                @copy( $img_path, $target_path );

                if ( file_exists( $target_path ) ) {
                    $attachment = array(
                        'guid'           => $upload_dir['url'] . '/' . basename( $img_path ),
                        'post_mime_type' => 'image/jpeg',
                        'post_title'     => $p['title'],
                        'post_content'   => '',
                        'post_status'    => 'inherit'
                    );
                    $attach_id = wp_insert_attachment( $attachment, $target_path, $post_id );
                    if ( ! is_wp_error( $attach_id ) ) {
                        require_once( ABSPATH . 'wp-admin/includes/image.php' );
                        $attach_data = wp_generate_attachment_metadata( $attach_id, $target_path );
                        wp_update_attachment_metadata( $attach_id, $attach_data );
                        set_post_thumbnail( $post_id, $attach_id );
                    }
                }
            }
        }
    }

    update_option( 'gp_demo_products_seeded', 1 );
}
add_action( 'init', 'gp_seed_demo_products_once', 20 );
