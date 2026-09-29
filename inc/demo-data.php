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
            'title'       => 'Full Open Top Drums',
            'category'    => 'Blow Moulding',
            'cat_slug'    => 'blow-moulding',
            'desc'        => 'Heavy duty open-top polymer drums with galvanized clamping ring and gasketed lid, engineered for solid, powder, and semi-liquid chemical handling.',
            'capacity'    => '30 Litres - 250 Litres',
            'material'    => 'High Density Polyethylene (HDPE)',
            'weight'      => '2.8 kg - 9.5 kg',
            'neck_size'   => 'Full Open Mouth (380mm - 475mm)',
            'color'       => 'Industrial Blue, Black, Natural White',
            'application' => 'Chemicals, Bulk Drugs, Specialty Paints, Food Ingredients',
            'badge'       => 'UN Approved',
            'image_type'  => 'drum',
        ),
        array(
            'title'       => 'Industrial Jerry Cans',
            'category'    => 'Blow Moulding',
            'cat_slug'    => 'blow-moulding',
            'desc'        => 'Stackable, leak-proof jerry cans featuring ergonomic integrated handles, anti-surge design, and tamper-evident screw closures.',
            'capacity'    => '5 Litres, 10 Litres, 20 Litres, 25 Litres, 35 Litres',
            'material'    => 'UV Stabilized Virgin HDPE',
            'weight'      => '450g - 1450g',
            'neck_size'   => '45mm / 50mm / 60mm Din Standard',
            'color'       => 'Blue, Red, Yellow, White',
            'application' => 'Edible Oils, Agrochemicals, Engine Lubricants, Sanitizers',
            'badge'       => 'Stackable 1+3',
            'image_type'  => 'jerrycan',
        ),
        array(
            'title'       => 'Narrow Mouth Carboys',
            'category'    => 'Blow Moulding',
            'cat_slug'    => 'blow-moulding',
            'desc'        => 'Precision blow moulded narrow-neck containers designed for hazardous and non-hazardous liquid chemical transport and long-term storage.',
            'capacity'    => '20 Litres - 100 Litres',
            'material'    => 'High Molecular Weight HDPE (HMW-HDPE)',
            'weight'      => '1.2 kg - 4.2 kg',
            'neck_size'   => '63mm Threaded Neck with EPDM seal',
            'color'       => 'Standard Blue, Milky White',
            'application' => 'Corrosive Acids, Industrial Solvents, Bio-fertilizers',
            'badge'       => 'Zero-Leak Seal',
            'image_type'  => 'carboy',
        ),
        array(
            'title'       => 'Wide Mouth Jars & Containers',
            'category'    => 'Blow Moulding',
            'cat_slug'    => 'blow-moulding',
            'desc'        => 'High-clarity, sturdy wide-mouth jars offering superior moisture barrier, effortless filling, and complete dispensing of viscous materials.',
            'capacity'    => '1 kg - 15 kg / 1L - 15L',
            'material'    => 'Food Grade HDPE & Polypropylene (PP)',
            'weight'      => '120g - 850g',
            'neck_size'   => '80mm - 120mm Wide Aperture',
            'color'       => 'White, Translucent, Silver',
            'application' => 'Greases, Inks, Pharmaceutical Powders, Pastes',
            'badge'       => 'FDA Compliant',
            'image_type'  => 'jar',
        ),
        array(
            'title'       => 'Industrial Pail Buckets',
            'category'    => 'Injection Moulding',
            'cat_slug'    => 'injection-moulding',
            'desc'        => 'Injection moulded tamper-evident plastic pails equipped with heavy-duty metal/plastic handles and tear-off security strip lids.',
            'capacity'    => '1 Litre - 20 Litres',
            'material'    => 'High Impact Copolymer Polypropylene (PPCP)',
            'weight'      => '110g - 880g',
            'neck_size'   => 'Snap-fit Tamper Evident Lip',
            'color'       => 'White, Yellow, Custom IML Printed',
            'application' => 'Decorative Paints, Adhesives, Food Syrups, Grease',
            'badge'       => 'IML Printable',
            'image_type'  => 'bucket',
        ),
        array(
            'title'       => 'Toys & Kids Ergonomic Furniture',
            'category'    => 'Injection Moulding',
            'cat_slug'    => 'injection-moulding',
            'desc'        => 'Safe, smooth-edged, non-toxic educational toys, play equipment, and lightweight institutional children furniture.',
            'capacity'    => 'Load tested up to 75 kg',
            'material'    => 'BPA-Free Virgin Polypropylene with Smooth Finish',
            'weight'      => '350g - 2.8 kg',
            'neck_size'   => 'Modular Snap-lock Tooling',
            'color'       => 'Multi-color (Red, Blue, Green, Yellow)',
            'application' => 'Preschools, Daycare, Playgrounds, Export Retail',
            'badge'       => 'BPA Free & Safe',
            'image_type'  => 'toy',
        ),
        array(
            'title'       => 'Precision Automotive Components',
            'category'    => 'Injection Moulding',
            'cat_slug'    => 'injection-moulding',
            'desc'        => 'Engineering plastic automotive parts with tight tolerances, thermal resistance, and structural strength for Tier-1 OEM suppliers.',
            'capacity'    => 'Custom Dimensions per CAD Specs',
            'material'    => 'Nylon 66, POM, ABS, Glass-filled PP',
            'weight'      => '15g - 1.8 kg',
            'neck_size'   => 'High Precision Micro-Tolerances (+/- 0.02mm)',
            'color'       => 'Black, Natural',
            'application' => 'Under-the-hood brackets, Fluid reservoirs, Interior trim',
            'badge'       => 'Automotive Spec',
            'image_type'  => 'autopart',
        ),
        array(
            'title'       => 'IM4-Pro Surveillance Drone System',
            'category'    => 'Defence & Aerospace',
            'cat_slug'    => 'defence-aerospace',
            'desc'        => 'Heavy-endurance tactical UAV built with carbon-fibre composites and composite airframe for border surveillance and reconnaissance missions.',
            'capacity'    => 'Flight Range: 25 km | Endurance: 90 mins',
            'material'    => 'Carbon-Fibre & High-Modulus Polymer Composites',
            'weight'      => 'All-Up Weight: 6.8 kg',
            'neck_size'   => 'Quick-release Gimbal Bay (EO/IR Thermal)',
            'color'       => 'Matte Tactical Grey / Camo',
            'application' => 'Defence Recon, Perimeter Security, Tactical Intelligence',
            'badge'       => 'Military Grade',
            'image_type'  => 'drone_surveillance',
        ),
        array(
            'title'       => 'AeroClean & Industrial Drone',
            'category'    => 'Defence & Aerospace',
            'cat_slug'    => 'defence-aerospace',
            'desc'        => 'High-pressure tethered wash drone designed for high-rise glass facades, solar farm cleaning, and critical infrastructure maintenance.',
            'capacity'    => 'Working Height: up to 120m | Payload: 12 kg',
            'material'    => 'Corrosion-Resistant Polymer & Carbon Composite',
            'weight'      => '9.5 kg dry weight',
            'neck_size'   => 'Adjustable Dual Spray Nozzle Assembly',
            'color'       => 'Industrial Safety Yellow & Black',
            'application' => 'Solar Parks, High Rise Buildings, Industrial Chimneys',
            'badge'       => 'Patented System',
            'image_type'  => 'drone_clean',
        ),
        array(
            'title'       => 'AeroCrop Precision Agri Drone',
            'category'    => 'Defence & Aerospace',
            'cat_slug'    => 'defence-aerospace',
            'desc'        => 'DGCA Type-Certified agricultural spraying and multispectral crop inspection drone with automated terrain hugging radar.',
            'capacity'    => '16 Litres Tank Capacity | 1 Acre in 7 mins',
            'material'    => 'Chemical-Resistant Polypropylene & Aviation Carbon',
            'weight'      => '14 kg with spray boom',
            'neck_size'   => 'Centrifugal Atomizing Spray Nozzles',
            'color'       => 'Vibrant Green & White',
            'application' => 'Crop Protection, Foliar Nutrition, Precision Agriculture',
            'badge'       => 'DGCA Certified',
            'image_type'  => 'drone_agri',
        ),
        array(
            'title'       => 'Aerospace Composite Parts & Connectors',
            'category'    => 'Defence & Aerospace',
            'cat_slug'    => 'defence-aerospace',
            'desc'        => 'Hermetically sealed avionics connectors, composite battery enclosures, and lightweight structural brackets for aerospace applications.',
            'capacity'    => 'Operating Temp: -55°C to +175°C',
            'material'    => 'PEEK, PPS, Ultem & Glass-Reinforced Polymer',
            'weight'      => 'Ultra-Lightweight Precision Parts',
            'neck_size'   => 'Mil-DTL Standard Compliant Pinouts',
            'color'       => 'Cadmium Plated / Natural PEEK Tan',
            'application' => 'Avionics, Drones, Ground Control Units, Radars',
            'badge'       => 'MIL-SPEC',
            'image_type'  => 'connector',
        ),
    );
}

/**
 * Get fallback industries list
 */
function gp_get_default_industries() {
    return array(
        array(
            'title' => 'Defence & Aerospace',
            'desc'  => 'Advanced drone airframes, composite hardware, and MIL-SPEC components for national security.',
            'icon'  => 'defence',
        ),
        array(
            'title' => 'Automotive Parts',
            'desc'  => 'Precision injection moulded functional parts, brackets, and fluid reservoir systems for OEM automotive makers.',
            'icon'  => 'automotive',
        ),
        array(
            'title' => 'Toys & Kids Furniture',
            'desc'  => 'Non-toxic, ultra-durable, child-safe ergonomic school furniture, modular playsets, and nursery products.',
            'icon'  => 'toys',
        ),
        array(
            'title' => 'Paint & Coatings',
            'desc'  => 'Robust, tamper-evident pail buckets with IML graphics for domestic and industrial paints and coatings.',
            'icon'  => 'paint',
        ),
        array(
            'title' => 'Food & Beverages',
            'desc'  => '100% Food-grade FDA-certified containers for syrups, edible oils, and food ingredients.',
            'icon'  => 'food',
        ),
        array(
            'title' => 'Chemical Industries',
            'desc'  => 'UN-certified high-density HDPE drums and jerry cans impervious to hazardous and corrosive acids.',
            'icon'  => 'chemical',
        ),
        array(
            'title' => 'Pharmaceuticals',
            'desc'  => 'Cleanroom-manufactured airtight jars and bulk packaging solutions conforming to pharmacopoeia standards.',
            'icon'  => 'pharma',
        ),
        array(
            'title' => 'Grease & Lubricants',
            'desc'  => 'Heavy-duty leakproof containers with precision pour spouts and chemical-resistant polymer formulations.',
            'icon'  => 'lubricant',
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
            'title'    => 'India’s Drone Defence Strategy: Swarms, Threats & Future Warfare',
            'date'     => 'February 14, 2025',
            'category' => 'Defence & Aerospace',
            'summary'  => 'Exploring how indigenous composite manufacturing and drone technology are revolutionizing Indian defence surveillance and border protection.',
            'readtime' => '4 min read',
        ),
        array(
            'title'    => 'Defence Production Surged 174% — India’s Global Export Surge',
            'date'     => 'February 12, 2025',
            'category' => 'Manufacturing',
            'summary'  => 'Indigenous manufacturing capabilities across plastics, composites, and precision hardware drive unprecedented multi-fold industrial growth.',
            'readtime' => '5 min read',
        ),
        array(
            'title'    => 'The Evolution of Sustainable Polymer Packaging in Industrial Supply Chains',
            'date'     => 'January 28, 2025',
            'category' => 'Sustainability',
            'summary'  => 'How next-generation HDPE and PCR recycled blends offer zero-leakage chemical storage while reducing industrial carbon footprints.',
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
        'drum'               => 'product-drum-blue.jpg',
        'jerrycan'           => 'product-jerrycan.jpg',
        'carboy'             => 'product-drum-blue.jpg',
        'jar'                => 'product-bucket-paint.jpg',
        'bucket'             => 'product-bucket-paint.jpg',
        'drone_surveillance' => 'product-uav-drone.jpg',
        'drone_agri'         => 'product-uav-drone.jpg',
        'connector'          => 'product-uav-drone.jpg',
    );

    foreach ( $products as $p ) {
        $post_id = wp_insert_post( array(
            'post_title'   => $p['title'],
            'post_content' => '<p>' . esc_html( $p['desc'] ) . '</p><h3>High Performance Industrial Quality</h3><p>Manufactured using virgin polymers and tested under ASTM / ISO testing protocols. Engineered for highest chemical compatibility, drop impact resilience, and long-term durability in critical industrial and defence environments.</p><ul><li>100% Leak-tested with computerized pneumatic pressure decay systems.</li><li>UV-stabilized resin prevents environmental stress cracking (ESC).</li><li>Suitable for global export consignments with UN compliance.</li></ul>',
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
