<?php
/**
 * Default Demo Data, Fallbacks & 1-Click Demo Importer for GP Theme
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
 * Helper to attach a theme asset image as a post thumbnail
 */
function gp_attach_theme_image_to_post( $filename, $post_id, $title = '' ) {
    $img_path = GP_THEME_DIR . '/assets/images/' . $filename;
    if ( ! file_exists( $img_path ) ) {
        return 0;
    }

    $upload_dir = wp_upload_dir();
    $target_filename = sanitize_file_name( $filename );
    $target_path = $upload_dir['path'] . '/' . $target_filename;

    if ( ! file_exists( $target_path ) ) {
        @copy( $img_path, $target_path );
    }

    if ( ! file_exists( $target_path ) ) {
        return 0;
    }

    // Check if attachment already exists in database
    $file_rel = $upload_dir['subdir'] ? trim( $upload_dir['subdir'], '/' ) . '/' . $target_filename : $target_filename;
    $existing = get_posts( array(
        'post_type'      => 'attachment',
        'meta_key'       => '_wp_attached_file',
        'meta_value'     => $file_rel,
        'posts_per_page' => 1,
        'post_status'    => 'inherit',
    ) );

    if ( ! empty( $existing ) ) {
        $attach_id = $existing[0]->ID;
    } else {
        $filetype = wp_check_filetype( basename( $target_path ), null );
        $attachment = array(
            'guid'           => $upload_dir['url'] . '/' . basename( $target_path ),
            'post_mime_type' => $filetype['type'] ?: 'image/jpeg',
            'post_title'     => $title ?: preg_replace( '/\.[^.]+$/', '', basename( $target_path ) ),
            'post_content'   => '',
            'post_status'    => 'inherit',
        );
        $attach_id = wp_insert_attachment( $attachment, $target_path, $post_id );
        if ( ! is_wp_error( $attach_id ) ) {
            require_once( ABSPATH . 'wp-admin/includes/image.php' );
            $attach_data = wp_generate_attachment_metadata( $attach_id, $target_path );
            wp_update_attachment_metadata( $attach_id, $attach_data );
        }
    }

    if ( $attach_id && ! is_wp_error( $attach_id ) ) {
        set_post_thumbnail( $post_id, $attach_id );
        return $attach_id;
    }

    return 0;
}

/**
 * 1. Import Demo Pages
 */
function gp_import_demo_pages() {
    $pages_created = 0;

    // 1. Home Page
    $home_page = get_page_by_path( 'home' );
    if ( ! $home_page ) {
        $home_id = wp_insert_post( array(
            'post_title'     => 'Home',
            'post_name'      => 'home',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
        ) );
        if ( $home_id && ! is_wp_error( $home_id ) ) {
            $pages_created++;
        }
    } else {
        $home_id = $home_page->ID;
    }

    // 2. About Us Page
    $about_page = get_page_by_path( 'about' ) ?: get_page_by_path( 'about-us' );
    if ( ! $about_page ) {
        $about_id = wp_insert_post( array(
            'post_title'     => 'About Us',
            'post_name'      => 'about',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
        ) );
        if ( $about_id && ! is_wp_error( $about_id ) ) {
            update_post_meta( $about_id, '_wp_page_template', 'page-templates/template-about.php' );
            $pages_created++;
        }
    } else {
        $about_id = $about_page->ID;
        update_post_meta( $about_id, '_wp_page_template', 'page-templates/template-about.php' );
    }

    // 3. Contact Us Page
    $contact_page = get_page_by_path( 'contact' ) ?: get_page_by_path( 'contact-us' );
    if ( ! $contact_page ) {
        $contact_id = wp_insert_post( array(
            'post_title'     => 'Contact Us',
            'post_name'      => 'contact',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
        ) );
        if ( $contact_id && ! is_wp_error( $contact_id ) ) {
            update_post_meta( $contact_id, '_wp_page_template', 'page-templates/template-contact.php' );
            $pages_created++;
        }
    } else {
        $contact_id = $contact_page->ID;
        update_post_meta( $contact_id, '_wp_page_template', 'page-templates/template-contact.php' );
    }

    // 4. Blog Page
    $blog_page = get_page_by_path( 'blog' ) ?: get_page_by_path( 'news' );
    if ( ! $blog_page ) {
        $blog_id = wp_insert_post( array(
            'post_title'     => 'Blog',
            'post_name'      => 'blog',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
        ) );
        if ( $blog_id && ! is_wp_error( $blog_id ) ) {
            $pages_created++;
        }
    } else {
        $blog_id = $blog_page->ID;
    }

    // 5. Products Catalog Page
    $products_page = get_page_by_path( 'products' );
    if ( ! $products_page ) {
        $prod_id = wp_insert_post( array(
            'post_title'     => 'Products Catalog',
            'post_name'      => 'products',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
        ) );
        if ( $prod_id && ! is_wp_error( $prod_id ) ) {
            $pages_created++;
        }
    }

    // Auto-configure Reading Settings
    if ( ! empty( $home_id ) && ! is_wp_error( $home_id ) ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home_id );
    }
    if ( ! empty( $blog_id ) && ! is_wp_error( $blog_id ) ) {
        update_option( 'page_for_posts', $blog_id );
    }

    return array(
        'created'  => $pages_created,
        'home_id'  => $home_id,
        'about_id' => isset( $about_id ) ? $about_id : 0,
        'contact_id' => isset( $contact_id ) ? $contact_id : 0,
        'blog_id'  => $blog_id,
    );
}

/**
 * 2. Import Demo Products
 */
function gp_import_demo_products() {
    $products = gp_get_default_products();
    $image_map = array(
        'pp_granules'   => 'product-pp-granules.jpg',
        'hdpe_granules' => 'product-hdpe-granules.jpg',
        'abs_granules'  => 'product-abs-granules.jpg',
        'pvc_granules'  => 'product-hdpe-granules.jpg',
        'masterbatch'   => 'hero-slide-granules.jpg',
    );

    $count = 0;

    foreach ( $products as $p ) {
        // Check if product already exists
        $existing = get_page_by_path( sanitize_title( $p['title'] ), OBJECT, 'gp_product' );
        if ( $existing ) {
            continue;
        }

        $post_id = wp_insert_post( array(
            'post_title'   => $p['title'],
            'post_name'    => sanitize_title( $p['title'] ),
            'post_content' => '<p>' . esc_html( $p['desc'] ) . '</p>' .
                '<h3>High Performance Polymer Dana Quality</h3>' .
                '<p>Manufactured and compounded using prime virgin polymers and precision reprocessed resins under ASTM D1238 and ISO 9001:2015 testing protocols. Engineered for consistent Melt Flow Index (MFI), zero nozzle clogging, high tensile strength, and uniform pellet cut.</p>' .
                '<ul>' .
                '<li><strong>Melt Flow Index:</strong> ' . esc_html( $p['capacity'] ) . '</li>' .
                '<li><strong>Base Polymer:</strong> ' . esc_html( $p['material'] ) . '</li>' .
                '<li><strong>Color Options:</strong> ' . esc_html( $p['color'] ) . '</li>' .
                '<li><strong>Primary Applications:</strong> ' . esc_html( $p['application'] ) . '</li>' .
                '<li><strong>Standard Packaging:</strong> ' . esc_html( $p['weight'] ) . ' with moisture barrier inner liner.</li>' .
                '</ul>' .
                '<h3>Quality Assurance & Certification</h3>' .
                '<p>Every dispatch includes a comprehensive Certificate of Analysis (COA) specifying tested MFI values, ash content (<0.5%), moisture ratio, and tensile yield strength.</p>',
            'post_excerpt' => $p['desc'],
            'post_status'  => 'publish',
            'post_type'    => 'gp_product',
        ) );

        if ( ! is_wp_error( $post_id ) ) {
            $count++;

            // Assign Category
            wp_set_object_terms( $post_id, $p['category'], 'gp_product_cat' );

            // Meta fields
            update_post_meta( $post_id, '_gp_capacity', $p['capacity'] );
            update_post_meta( $post_id, '_gp_material', $p['material'] );
            update_post_meta( $post_id, '_gp_weight', $p['weight'] );
            update_post_meta( $post_id, '_gp_neck_size', $p['neck_size'] );
            update_post_meta( $post_id, '_gp_color', $p['color'] );
            update_post_meta( $post_id, '_gp_application', $p['application'] );
            update_post_meta( $post_id, '_gp_cert', $p['badge'] );

            // Attach image
            $img_filename = isset( $image_map[ $p['image_type'] ] ) ? $image_map[ $p['image_type'] ] : 'product-pp-granules.jpg';
            gp_attach_theme_image_to_post( $img_filename, $post_id, $p['title'] );
        }
    }

    return $count;
}

/**
 * 3. Import Demo Blog Posts
 */
function gp_import_demo_posts() {
    $demo_posts = array(
        array(
            'title'     => 'Virgin vs Recycled PP & HDPE Granules: Optimizing Manufacturing Costs',
            'category'  => 'Polymer Compounding',
            'tags'      => array( 'PP Granules', 'HDPE', 'Recycling', 'Cost Optimization' ),
            'excerpt'   => 'A comprehensive technical comparison of melt flow index (MFI), tensile yield, and cost optimization when blending virgin and reprocessed dana for industrial moulders.',
            'image'     => 'hero-slide-sustainable.jpg',
            'content'   => '<p>In plastic injection moulding and extrusion processes, raw material overhead accounts for up to 60-70% of total production cost. Choosing the right balance between prime virgin polymer granules and compounded recycled dana is one of the most critical decisions for plant managers.</p>' .
                '<h2>Understanding Mechanical Property Differences</h2>' .
                '<p>While prime virgin polymers deliver pristine color clarity and repeatable Melt Flow Index (MFI) characteristics, modern computer-controlled reprocessing technologies allow recycled PP and HDPE dana to achieve up to 92-95% of original tensile properties at a fraction of the cost.</p>' .
                '<h3>Key Factors When Blending Dana:</h3>' .
                '<ul>' .
                '<li><strong>Melt Flow Uniformity:</strong> Always ensure the MFI of the virgin carrier matches the reprocessed batch within +/- 1.5 g/10min.</li>' .
                '<li><strong>Melt Filtration:</strong> Use multi-stage 80 to 120 mesh melt screeners to capture microscopic particulate inclusions.</li>' .
                '<li><strong>Thermal History:</strong> Add antioxidant stabilizers (Irganox 1010/168) during compounding to prevent polymer chain scission.</li>' .
                '</ul>' .
                '<h2>Cost vs. Quality Optimization Matrix</h2>' .
                '<p>For non-food grade industrial containers, crates, automotive trims, and box straps, a 70:30 or 50:50 blend ratio provides substantial raw material cost reductions while exceeding drop impact and compression standards.</p>',
        ),
        array(
            'title'     => 'Understanding Melt Flow Index (MFI) in High-Speed Injection Moulding',
            'category'  => 'Quality Control',
            'tags'      => array( 'Injection Moulding', 'MFI Testing', 'Quality Control' ),
            'excerpt'   => 'Why batch-to-batch MFI consistency is vital to eliminate flash, sink marks, and nozzle choking across high-tonnage moulding presses.',
            'image'     => 'product-abs-granules.jpg',
            'content'   => '<p>Melt Flow Index (MFI), measured according to ASTM D1238 or ISO 1133 standards, defines the rate of extrusion of molten polymer through a standardized die under fixed weight and temperature conditions.</p>' .
                '<h2>Why MFI Fluctuations Ruin Cycle Times</h2>' .
                '<p>When feeding granules into a multi-cavity moulding press, an unexpected drop in MFI leads to short-shots, high injection pressure alarms, and warped parts. Conversely, an excessively high MFI creates flash on mould parting lines and drooling at the sprue bushing.</p>' .
                '<h3>MFI Selection Guidelines by Application:</h3>' .
                '<ul>' .
                '<li><strong>MFI 0.35 - 1.2 g/10min:</strong> Extrusion blow moulding for chemical drums and jerry cans.</li>' .
                '<li><strong>MFI 3.0 - 5.0 g/10min:</strong> Raffia tape extrusion and woven cement sack production.</li>' .
                '<li><strong>MFI 10 - 15 g/10min:</strong> Standard injection moulding of household plastics, buckets, and furniture.</li>' .
                '<li><strong>MFI 25 - 40 g/10min:</strong> Ultra-thin wall food containers and rapid-cycle multi-cavity packaging.</li>' .
                '</ul>' .
                '<p>At SRS Polymer, every batch is verified on computerized extrusion plastometers with full traceability test certificates.</p>',
        ),
        array(
            'title'     => 'Polymer Dana Price Trends & Circular Raw Material Sourcing in India',
            'category'  => 'Industry Insights',
            'tags'      => array( 'Polymer Trends', 'Indian Industry', 'Raw Materials' ),
            'excerpt'   => 'How Indian plastic manufacturers are adopting circular engineering polymers, masterbatches, and sustainable reprocessed compounds under EPR mandates.',
            'image'     => 'hero-slide-plastics.jpg',
            'content'   => '<p>The Indian polymer market is undergoing a structural transformation driven by Extended Producer Responsibility (EPR) regulations and fluctuating crude oil derivative prices. Processors are increasingly integrating certified post-consumer resin (PCR) into mainstream production lines.</p>' .
                '<h2>Regulatory Push Towards Recycled Content</h2>' .
                '<p>The Plastic Waste Management (PWM) guidelines mandate minimum percentages of recycled plastic in packaging and industrial items. Sourcing consistent, odorless, and degassed reprocessed polymer dana has become essential for maintaining compliance without sacrificing line speed.</p>' .
                '<h3>Strategic Procurement Tips for 2025:</h3>' .
                '<ul>' .
                '<li>Lock in quarterly volume supply contracts with established compounding partners rather than spot market trading.</li>' .
                '<li>Verify washing plant sanitization and vacuum degassing capabilities of recycled polymer suppliers.</li>' .
                '<li>Adopt universal masterbatch formulations capable of masking substrate color variability in reprocessed grades.</li>' .
                '</ul>',
        ),
        array(
            'title'     => 'The Science of Color Masterbatches: Achieving Uniform Dispersion & UV Stability',
            'category'  => 'Masterbatches',
            'tags'      => array( 'Masterbatches', 'UV Stabilizers', 'Color Matching' ),
            'excerpt'   => 'Key compounding guidelines for selecting carrier resins, titanium dioxide grades, and carbon black loadings for weather-resistant outdoor plastics.',
            'image'     => 'hero-slide-granules.jpg',
            'content'   => '<p>A masterbatch is a concentrated mixture of pigments and functional additives encapsulated during a heat process into a carrier resin, which is then cooled and cut into a granular shape. Achieving streak-free coloring requires matching the melt temperature and carrier index with the base plastic dana.</p>' .
                '<h2>Common Coloring Defects and Solutions</h2>' .
                '<p>Pigment agglomerates, streaking, and poor opacity often stem from using a masterbatch with an incompatible carrier polymer (e.g., using a high-density carrier with a low-melt index PP).</p>' .
                '<ul>' .
                '<li><strong>White Masterbatches:</strong> Utilize rutile-grade TiO2 (min. 60-70% concentration) with optical brighteners for high opacity at 1-2% addition dosage.</li>' .
                '<li><strong>Black Masterbatches:</strong> Premium furnace carbon black (<25nm particle size) ensures optimal UV shielding and deep jetness for agriculture drip pipes.</li>' .
                '<li><strong>Color Consistency:</strong> Always request spectrophotometer delta-E readings below 0.8 against standard Pantone or RAL swatches.</li>' .
                '</ul>',
        ),
        array(
            'title'     => 'Blow Moulding Troubleshooting: Preventing Environmental Stress Cracking (ESCR)',
            'category'  => 'Technical Guide',
            'tags'      => array( 'Blow Moulding', 'HDPE Granules', 'ESCR', 'Containers' ),
            'excerpt'   => 'Practical troubleshooting guide for chemical container blow moulding using high-density polyethylene (HDPE) polymer resins.',
            'image'     => 'product-hdpe-granules.jpg',
            'content'   => '<p>Environmental Stress Cracking (ESCR) is the premature brittle failure of a polymer caused by the simultaneous action of tensile stress and chemical exposure to surfactants, detergents, or agricultural lubricants.</p>' .
                '<h2>Selecting the Correct Resin Grade</h2>' .
                '<p>Standard injection-grade HDPE lacks the long molecular chain tangling needed to resist chemical pinhole cracking. Container manufacturers must specify PE100 or bimodal high-molecular-weight HDPE (HMW-HDPE) with ASTM D1693 ESCR test ratings exceeding 1,000 hours.</p>' .
                '<h3>Machine Tuning for Crack Prevention:</h3>' .
                '<ul>' .
                '<li>Ensure parison melt temperature remains between 180°C and 195°C to prevent excessive molecular orientation.</li>' .
                '<li>Optimize pinch-off blade geometry and cooling channels to eliminate weak weld seams at the bottom of the container.</li>' .
                '<li>Maintain uniform wall thickness using parison programmers on blow moulding machines.</li>' .
                '</ul>',
        ),
    );

    $count = 0;

    foreach ( $demo_posts as $p ) {
        // Check if already exists
        $existing = get_page_by_path( sanitize_title( $p['title'] ), OBJECT, 'post' );
        if ( $existing ) {
            continue;
        }

        $post_id = wp_insert_post( array(
            'post_title'   => $p['title'],
            'post_name'    => sanitize_title( $p['title'] ),
            'post_content' => $p['content'],
            'post_excerpt' => $p['excerpt'],
            'post_status'  => 'publish',
            'post_type'    => 'post',
        ) );

        if ( ! is_wp_error( $post_id ) ) {
            $count++;

            // Set Category
            $cat_id = wp_create_category( $p['category'] );
            if ( $cat_id && ! is_wp_error( $cat_id ) ) {
                wp_set_post_categories( $post_id, array( $cat_id ) );
            }

            // Set Tags
            if ( ! empty( $p['tags'] ) ) {
                wp_set_post_tags( $post_id, $p['tags'] );
            }

            // Attach Image
            if ( ! empty( $p['image'] ) ) {
                gp_attach_theme_image_to_post( $p['image'], $post_id, $p['title'] );
            }
        }
    }

    return $count;
}

/**
 * 4. Setup & Assign Primary Navigation Menu
 */
function gp_import_demo_menus() {
    $menu_name = 'Primary Navigation Menu';
    $menu_obj  = wp_get_nav_menu_object( $menu_name );

    if ( ! $menu_obj ) {
        $menu_id = wp_create_nav_menu( $menu_name );
    } else {
        $menu_id = $menu_obj->term_id;
    }

    if ( ! $menu_id || is_wp_error( $menu_id ) ) {
        return false;
    }

    // Check if menu already has items
    $menu_items = wp_get_nav_menu_items( $menu_id );
    if ( empty( $menu_items ) ) {
        // 1. Home
        wp_update_nav_menu_item( $menu_id, 0, array(
            'menu-item-title'  => __( 'Home', 'gp-theme' ),
            'menu-item-url'    => home_url( '/' ),
            'menu-item-status' => 'publish',
        ) );

        // 2. About Us
        $about_page = get_page_by_path( 'about' ) ?: get_page_by_path( 'about-us' );
        if ( $about_page ) {
            wp_update_nav_menu_item( $menu_id, 0, array(
                'menu-item-title'     => __( 'About Us', 'gp-theme' ),
                'menu-item-object'    => 'page',
                'menu-item-object-id' => $about_page->ID,
                'menu-item-type'      => 'post_type',
                'menu-item-status'    => 'publish',
            ) );
        }

        // 3. Products (Parent)
        $prod_archive_url = get_post_type_archive_link( 'gp_product' ) ?: home_url( '/products/' );
        $prod_item_id = wp_update_nav_menu_item( $menu_id, 0, array(
            'menu-item-title'  => __( 'Products', 'gp-theme' ),
            'menu-item-url'    => $prod_archive_url,
            'menu-item-status' => 'publish',
        ) );

        // Sub items for Product Categories
        if ( $prod_item_id && ! is_wp_error( $prod_item_id ) ) {
            $product_cats = get_terms( array(
                'taxonomy'   => 'gp_product_cat',
                'hide_empty' => false,
            ) );

            if ( ! empty( $product_cats ) && ! is_wp_error( $product_cats ) ) {
                foreach ( $product_cats as $cat ) {
                    wp_update_nav_menu_item( $menu_id, 0, array(
                        'menu-item-title'     => $cat->name,
                        'menu-item-url'       => get_term_link( $cat ),
                        'menu-item-parent-id' => $prod_item_id,
                        'menu-item-status'    => 'publish',
                    ) );
                }
            } else {
                $default_subcats = array(
                    'PP Granules'     => home_url( '/product-cat/pp-granules/' ),
                    'HDPE Granules'   => home_url( '/product-cat/hdpe-granules/' ),
                    'ABS Granules'    => home_url( '/product-cat/abs-granules/' ),
                    'PVC Compounds'   => home_url( '/product-cat/pvc-compounds/' ),
                    'Masterbatches'   => home_url( '/product-cat/masterbatches/' ),
                );
                foreach ( $default_subcats as $name => $url ) {
                    wp_update_nav_menu_item( $menu_id, 0, array(
                        'menu-item-title'     => $name,
                        'menu-item-url'       => $url,
                        'menu-item-parent-id' => $prod_item_id,
                        'menu-item-status'    => 'publish',
                    ) );
                }
            }
        }

        // 4. Blog
        $blog_page = get_page_by_path( 'blog' ) ?: get_page_by_path( 'news' );
        if ( $blog_page ) {
            wp_update_nav_menu_item( $menu_id, 0, array(
                'menu-item-title'     => __( 'Blog', 'gp-theme' ),
                'menu-item-object'    => 'page',
                'menu-item-object-id' => $blog_page->ID,
                'menu-item-type'      => 'post_type',
                'menu-item-status'    => 'publish',
            ) );
        }

        // 5. Contact Us
        $contact_page = get_page_by_path( 'contact' ) ?: get_page_by_path( 'contact-us' );
        if ( $contact_page ) {
            wp_update_nav_menu_item( $menu_id, 0, array(
                'menu-item-title'     => __( 'Contact', 'gp-theme' ),
                'menu-item-object'    => 'page',
                'menu-item-object-id' => $contact_page->ID,
                'menu-item-type'      => 'post_type',
                'menu-item-status'    => 'publish',
            ) );
        }
    }

    // Assign to Primary theme location
    $locations = get_theme_mod( 'nav_menu_locations' );
    if ( ! is_array( $locations ) ) {
        $locations = array();
    }
    $locations['primary'] = $menu_id;
    set_theme_mod( 'nav_menu_locations', $locations );

    return true;
}

/**
 * Master Demo Import Runner
 */
function gp_run_full_demo_import() {
    // 1. Pages
    $pages_data = gp_import_demo_pages();

    // 2. Products
    $products_count = gp_import_demo_products();

    // 3. Blog Posts
    $posts_count = gp_import_demo_posts();

    // 4. Menus
    $menu_done = gp_import_demo_menus();

    // 5. Flush rewrite rules
    if ( function_exists( 'gp_register_product_cpt' ) ) {
        gp_register_product_cpt();
    }
    if ( function_exists( 'gp_register_product_taxonomy' ) ) {
        gp_register_product_taxonomy();
    }
    flush_rewrite_rules( false );

    update_option( 'gp_demo_imported', 1 );
    update_option( 'gp_demo_products_seeded', 1 );

    return array(
        'pages'    => $pages_data['created'],
        'products' => $products_count,
        'posts'    => $posts_count,
        'menu'     => $menu_done,
    );
}

/**
 * Register Admin Menu for 1-Click Demo Import
 */
function gp_register_demo_import_menu() {
    add_theme_page(
        __( 'GP Demo Import', 'gp-theme' ),
        __( 'Import Demo Data', 'gp-theme' ),
        'manage_options',
        'gp-demo-import',
        'gp_render_demo_import_page'
    );
}
add_action( 'admin_menu', 'gp_register_demo_import_menu' );

/**
 * Theme Activation Notice Hook
 */
function gp_theme_activation_flag() {
    update_option( 'gp_show_activation_notice', 1 );
}
add_action( 'after_switch_theme', 'gp_theme_activation_flag' );

/**
 * Admin Notice Prompting Demo Import
 */
function gp_demo_import_admin_notice() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    // Dismiss notice if imported or dismissed
    if ( get_option( 'gp_demo_imported' ) || get_option( 'gp_dismiss_import_notice' ) ) {
        return;
    }

    $current_screen = get_current_screen();
    if ( $current_screen && $current_screen->id === 'appearance_page_gp-demo-import' ) {
        return;
    }

    $import_url = admin_url( 'themes.php?page=gp-demo-import' );
    $dismiss_url = wp_nonce_url( add_query_arg( 'gp_dismiss_notice', '1' ), 'gp_dismiss_nonce' );

    if ( isset( $_GET['gp_dismiss_notice'] ) && check_admin_referer( 'gp_dismiss_nonce' ) ) {
        update_option( 'gp_dismiss_import_notice', 1 );
        return;
    }
    ?>
    <div class="notice notice-info is-dismissible" style="padding: 14px 18px; border-left-color: #0077b6; background: #f0f7fd;">
        <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px;">
            <div>
                <strong style="font-size: 15px; color: #0b2545;">🚀 Welcome to SRS Polymer Theme!</strong>
                <p style="margin: 4px 0 0 0; color: #4a5568; font-size: 13px;">
                    Would you like to import complete demo content (Pages, Blog Articles, Products Catalog, and Navigation Menu) in 1 click?
                </p>
            </div>
            <div>
                <a href="<?php echo esc_url( $import_url ); ?>" class="button button-primary" style="background: #0077b6; border-color: #005f92; font-weight: 600; padding: 4px 16px;">
                    📥 Import Demo Data Now
                </a>
            </div>
        </div>
    </div>
    <?php
}
add_action( 'admin_notices', 'gp_demo_import_admin_notice' );

/**
 * Render Demo Import Admin Page
 */
function gp_render_demo_import_page() {
    $import_result = null;

    if ( isset( $_POST['gp_do_import'] ) && check_admin_referer( 'gp_import_demo_action', 'gp_demo_nonce' ) ) {
        $import_result = gp_run_full_demo_import();
    }

    $is_imported = get_option( 'gp_demo_imported' );
    $posts_count = wp_count_posts( 'post' )->publish;
    $prod_count  = wp_count_posts( 'gp_product' )->publish;
    $pages_count = wp_count_posts( 'page' )->publish;
    ?>
    <div class="wrap" style="max-width: 900px; margin-top: 25px;">
        <div style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #fff; padding: 26px 30px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 25px rgba(11,37,69,0.15);">
            <div style="display: flex; align-items: center; gap: 15px;">
                <span style="font-size: 36px;">🏭</span>
                <div>
                    <h1 style="color: #fff; margin: 0; font-size: 24px; font-weight: 700;">SRS Polymer — 1-Click Demo Importer</h1>
                    <p style="margin: 6px 0 0 0; color: #8ecae6; font-size: 14px;">Quickly import sample products, technical blog posts, essential company pages, and pre-configured navigation menus.</p>
                </div>
            </div>
        </div>

        <?php if ( $import_result ) : ?>
            <div class="notice notice-success" style="padding: 16px 20px; border-left-color: #2a9d8f; background: #e8f8f5; border-radius: 8px; margin-bottom: 25px;">
                <h3 style="margin: 0 0 8px 0; color: #155724; font-size: 17px;">🎉 Demo Content Imported Successfully!</h3>
                <p style="margin: 0 0 12px 0; color: #222; font-size: 14px;">Your WordPress website has been populated with full industrial catalog content:</p>
                <ul style="list-style: disc; margin-left: 20px; color: #2d3748; line-height: 1.8;">
                    <li><strong>Pages Created:</strong> <?php echo intval( $import_result['pages'] ); ?> (Home, About Us, Contact Us, Blog, Products)</li>
                    <li><strong>Blog Articles Added:</strong> <?php echo intval( $import_result['posts'] ); ?> (with compounding categories & high-res images)</li>
                    <li><strong>Products Added:</strong> <?php echo intval( $import_result['products'] ); ?> (PP, HDPE, ABS, PVC, LDPE, Masterbatches)</li>
                    <li><strong>Navigation Menu:</strong> Header primary menu created and linked!</li>
                    <li><strong>Reading Settings:</strong> Front page set to Home, Posts page set to Blog!</li>
                </ul>
                <div style="margin-top: 15px; display: flex; gap: 10px;">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" class="button button-primary" style="background: #0077b6; border-color: #005f92; font-weight: 600;">
                        🌐 View Live Website
                    </a>
                    <a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>" class="button button-secondary">
                        🧭 Manage Menus
                    </a>
                    <a href="<?php echo esc_url( admin_url( 'edit.php?post_type=gp_product' ) ); ?>" class="button button-secondary">
                        📦 View Products
                    </a>
                </div>
            </div>
        <?php endif; ?>

        <!-- Import Details Card Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-bottom: 25px;">
            <div style="background: #fff; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0; text-align: center;">
                <span style="font-size: 28px;">📄</span>
                <h3 style="margin: 10px 0 4px 0; font-size: 16px;">Pages</h3>
                <p style="margin: 0; color: #64748b; font-size: 13px;">Home, About Us, Contact, Blog, Catalog</p>
                <div style="margin-top: 8px; font-weight: 700; color: #0077b6;"><?php echo intval( $pages_count ); ?> Current Pages</div>
            </div>

            <div style="background: #fff; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0; text-align: center;">
                <span style="font-size: 28px;">📦</span>
                <h3 style="margin: 10px 0 4px 0; font-size: 16px;">Products</h3>
                <p style="margin: 0; color: #64748b; font-size: 13px;">PP, HDPE, ABS, PVC, Masterbatches</p>
                <div style="margin-top: 8px; font-weight: 700; color: #0077b6;"><?php echo intval( $prod_count ); ?> Current Products</div>
            </div>

            <div style="background: #fff; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0; text-align: center;">
                <span style="font-size: 28px;">📰</span>
                <h3 style="margin: 10px 0 4px 0; font-size: 16px;">Blog Articles</h3>
                <p style="margin: 0; color: #64748b; font-size: 13px;">Technical polymer insights & guides</p>
                <div style="margin-top: 8px; font-weight: 700; color: #0077b6;"><?php echo intval( $posts_count ); ?> Current Posts</div>
            </div>

            <div style="background: #fff; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0; text-align: center;">
                <span style="font-size: 28px;">🧭</span>
                <h3 style="margin: 10px 0 4px 0; font-size: 16px;">Navbar Menu</h3>
                <p style="margin: 0; color: #64748b; font-size: 13px;">Auto-linked header menu with dropdowns</p>
                <div style="margin-top: 8px; font-weight: 700; color: #2a9d8f;">Primary Location</div>
            </div>
        </div>

        <!-- Main Action Box -->
        <div style="background: #fff; padding: 25px 30px; border-radius: 10px; border: 1px solid #e2e8f0; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
            <h2 style="margin-top: 0; font-size: 18px; color: #0b2545;">Ready to Import?</h2>
            <p style="color: #4a5568; line-height: 1.6; font-size: 14px;">
                Clicking the button below will safely create all demo pages, assign templates, populate the plastic products catalog with specifications, write sample technical blog articles with images, and build the primary header navigation menu. Existing content will not be overwritten.
            </p>

            <form method="post" onsubmit="return confirm('Do you want to import complete demo data (pages, blogs, products, and menu)?');">
                <?php wp_nonce_field( 'gp_import_demo_action', 'gp_demo_nonce' ); ?>
                <button type="submit" name="gp_do_import" value="1" class="button button-primary button-hero" style="background: #0077b6; border-color: #005f92; font-weight: 700; padding: 8px 32px; height: auto; font-size: 16px; border-radius: 6px;">
                    🚀 <?php echo $is_imported ? esc_html__( 'Re-Import / Sync Demo Content', 'gp-theme' ) : esc_html__( 'Import Complete Demo Data', 'gp-theme' ); ?>
                </button>
            </form>
        </div>
    </div>
    <?php
}
