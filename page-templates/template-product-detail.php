<?php
/**
 * Template Name: Product Detail Page
 * 
 * Displays full technical specifications, ASTM lab data, and factory RFQ form
 * for all 13 polymer grades.
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// 13 Products Database for Server-Side Pre-Rendering (Instant load & SEO)
$products_db = array(
    'ppcp-grey' => array(
        'slug'       => 'ppcp-grey',
        'name'       => 'PPCP Grey Granules',
        'category'   => 'Automotive PP Block Copolymer',
        'tagline'    => 'MFI: 10 – 12 • Automotive & Battery Cases',
        'image'      => 'assets/images/granules-ppcp-grey.jpg',
        'badge'      => 'Automotive Grade',
        'badgeColor' => '#0097db',
        'lead'       => 'SRS Polymer PPCP Grey Granules are engineered from high-grade virgin and precision reprocessed polypropylene block copolymer. Compounded with specialized thermal and processing stabilizers to ensure excellent melt flow, minimal warpage, and high impact resistance under extreme vibration and temperature cycles.',
        'mfi'        => '10 - 12 g/10min',
        'base'       => 'Block Copolymer',
        'pack'       => '25 Kg Bags',
        'form'       => 'Uniform Pellets',
        'specMfi'    => '10 – 12 g/10min (ASTM D1238, 230°C / 2.16 kg)',
        'density'    => '0.905 g/cm³ (ASTM D792)',
        'tensile'    => '27 MPa (ASTM D638)',
        'impact'     => '105 J/m (ASTM D256, 23°C)',
        'flex'       => '1,250 MPa (ASTM D790)',
        'elong'      => '55% (ASTM D638)',
        'colors'     => 'Consistent Industrial Grey / Dark Grey',
        'packaging'  => '25 Kg Net Multiwall Bags / 1,000 Kg Jumbo',
        'processing' => 'High-Speed Injection Moulding (Melt: 210°C - 235°C, Mould: 30°C - 50°C)',
        'apps'       => array( 'Automotive Battery Casings', 'Two-Wheeler Fairings', 'Battery Trays', 'Heavy Logistics Crates', 'Electrical Enclosures' ),
    ),
    'ppcp-impact' => array(
        'slug'       => 'ppcp-impact',
        'name'       => 'PPCP Impact Copolymer Granules',
        'category'   => 'High-Impact Polypropylene (PPCP)',
        'tagline'    => 'High Izod Impact • Auto Bumpers & Industrial Parts',
        'image'      => 'assets/images/granules-natural-white.jpg',
        'badge'      => 'High Impact',
        'badgeColor' => '#10b981',
        'lead'       => 'Designed for components requiring unmatched toughness and resistance to high-energy shocks. Incorporates rubber-phase ethylene-propylene elastomer compounding to eliminate brittle failure even in sub-zero winter temperatures.',
        'mfi'        => '8 – 14 g/10min',
        'base'       => 'Elastomer Modified PP',
        'pack'       => '25 Kg Bags',
        'form'       => 'Milky Pellets',
        'specMfi'    => '8 – 14 g/10min (ASTM D1238, 230°C / 2.16 kg)',
        'density'    => '0.900 g/cm³ (ASTM D792)',
        'tensile'    => '25 MPa (ASTM D638)',
        'impact'     => '135 J/m (At -20°C: 60 J/m)',
        'flex'       => '1,150 MPa (ASTM D790)',
        'elong'      => '85% (ASTM D638)',
        'colors'     => 'Natural Milky / Off-White',
        'packaging'  => '25 Kg Net Laminated Bags',
        'processing' => 'Injection Moulding & Extrusion (Melt: 205°C - 230°C, Mould: 25°C - 45°C)',
        'apps'       => array( 'Auto Front & Rear Bumpers', 'Crash Trays', 'Cold-Room Bins', 'Chemical Vessels', 'Industrial Pallets' ),
    ),
    'ppcp-black' => array(
        'slug'       => 'ppcp-black',
        'name'       => 'PPCP Black Granules',
        'category'   => 'Engineering Carbon Compounding',
        'tagline'    => 'Carbon Black Compound • Industrial Logistics Crates',
        'image'      => 'assets/images/granules-ppcp-black.jpg',
        'badge'      => 'Crate Grade',
        'badgeColor' => '#0b2545',
        'lead'       => 'SRS Polymer Carbon Black PPCP Pellets offer exceptional UV stabilization and environmental stress cracking resistance. Highly favored by crate manufacturers across India for quick cycle times and superior stacking strength.',
        'mfi'        => '9 – 13 g/10min',
        'base'       => 'Black Copolymer',
        'pack'       => '25 Kg Bags',
        'form'       => 'Jet Black Pellets',
        'specMfi'    => '9 – 13 g/10min (ASTM D1238, 230°C / 2.16 kg)',
        'density'    => '0.920 g/cm³ (ASTM D792)',
        'tensile'    => '29 MPa (ASTM D638)',
        'impact'     => '90 J/m (ASTM D256)',
        'flex'       => '1,350 MPa (ASTM D790)',
        'elong'      => '45% (ASTM D638)',
        'colors'     => 'Jet Black (2.5% Furnace Carbon Dispersion)',
        'packaging'  => '25 Kg Bags / 1,000 Kg Jumbo Bags',
        'processing' => 'High-Speed Injection (Melt: 215°C - 240°C, Mould: 35°C - 50°C)',
        'apps'       => array( 'Logistics Crates', 'Warehouse Pallets', 'Cable Spools', 'Underbody Automotive Covers', 'Harvest Bins' ),
    ),
    'pp-talc' => array(
        'slug'       => 'pp-talc',
        'name'       => 'PP Talc Filled Granules',
        'category'   => 'Mineral Reinforced Compounding',
        'tagline'    => '20% – 40% Mineral Filled • Appliance Bodies & Tubs',
        'image'      => 'assets/images/granules-talc-filled.jpg',
        'badge'      => 'Compounded',
        'badgeColor' => '#6366f1',
        'lead'       => 'Compounded with ultra-fine surface-treated micronized talc to significantly boost heat deflection temperature (HDT up to 125°C) and dimensional stability, ensuring zero post-mould shrinkage and warped edges.',
        'mfi'        => '12 – 16 g/10min',
        'base'       => 'Talc Reinforced PP',
        'pack'       => '25 Kg Laminated',
        'form'       => 'Extruded Pellets',
        'specMfi'    => '12 – 16 g/10min (ASTM D1238, 230°C / 2.16 kg)',
        'density'    => '1.15 – 1.25 g/cm³',
        'tensile'    => '35 MPa (ASTM D638)',
        'impact'     => '55 J/m (ASTM D256)',
        'flex'       => '2,800 MPa (ASTM D790)',
        'elong'      => '20% (ASTM D638)',
        'colors'     => 'Light Grey / Off-White Compounded',
        'packaging'  => '25 Kg Net Multiwall Bags',
        'processing' => 'Injection Moulding (Melt: 220°C - 250°C, Mould: 40°C - 60°C)',
        'apps'       => array( 'Washing Machine Outer Tubs', 'Air Cooler Bodies', 'Automotive HVAC Ducting', 'Appliance Structural Covers' ),
    ),
    'polypropylene-natural-white' => array(
        'slug'       => 'polypropylene-natural-white',
        'name'       => 'Polypropylene Natural White Granules',
        'category'   => 'Prime Homopolymer PP',
        'tagline'    => 'Prime Homopolymer • Household Bins & Furniture',
        'image'      => 'assets/images/granules-natural-white.jpg',
        'badge'      => 'Virgin Grade',
        'badgeColor' => '#0097db',
        'lead'       => 'SRS Polymer Prime Homopolymer PP Granules deliver pristine optical cleanliness, brilliant surface gloss, and non-toxic food-safe characteristics compliant with US FDA 21 CFR 177.1520 requirements.',
        'mfi'        => '11 – 13 g/10min',
        'base'       => 'Virgin Homopolymer',
        'pack'       => '25 Kg Net Bags',
        'form'       => 'Translucent White',
        'specMfi'    => '11 – 13 g/10min (ASTM D1238, 230°C / 2.16 kg)',
        'density'    => '0.905 g/cm³ (ASTM D792)',
        'tensile'    => '32 MPa (ASTM D638)',
        'impact'     => '40 J/m (ASTM D256)',
        'flex'       => '1,450 MPa (ASTM D790)',
        'elong'      => '120% (ASTM D638)',
        'colors'     => 'Natural Virgin Translucent White',
        'packaging'  => '25 Kg Net Bags',
        'processing' => 'Injection Moulding (Melt: 200°C - 230°C, Mould: 25°C - 45°C)',
        'apps'       => array( 'Household Bins', 'Moulded Furniture Chairs', 'Kitchen Storage Containers', 'Dispenser Closures' ),
    ),
    'polypropylene-glass-filled' => array(
        'slug'       => 'polypropylene-glass-filled',
        'name'       => 'Polypropylene Glass Filled Granules',
        'category'   => 'Fiber-Reinforced Polypropylene (PP GF)',
        'tagline'    => '10% – 30% Glass Fiber Reinforced • High Rigidity & Heat Resistance',
        'image'      => 'assets/images/granules-glass-filled.jpg',
        'badge'      => 'Glass Reinforced',
        'badgeColor' => '#059669',
        'lead'       => 'Compounded with chemically coupled E-glass fibers (10% to 30% GF) providing superior tensile strength, creep resistance, and dimensional stability at elevated temperatures up to 135°C. Replaces metal cast components in automotive and electrical housings.',
        'mfi'        => '6 – 10 g/10min',
        'base'       => 'Glass Coupled PP',
        'pack'       => '25 Kg Bags',
        'form'       => 'Cylindrical GF Pellets',
        'specMfi'    => '6 – 10 g/10min (ASTM D1238, 230°C / 2.16 kg)',
        'density'    => '1.04 – 1.15 g/cm³ (ASTM D792)',
        'tensile'    => '75 MPa (ASTM D638)',
        'impact'     => '75 J/m (ASTM D256)',
        'flex'       => '5,200 MPa (ASTM D790)',
        'elong'      => '4.5% (ASTM D638)',
        'colors'     => 'Natural Beige / Black Compounded',
        'packaging'  => '25 Kg Moisture-Proof Laminated Bags',
        'processing' => 'Injection Moulding (Melt: 220°C - 250°C, Mould: 50°C - 70°C)',
        'apps'       => array( 'Automotive Under-the-Hood Parts', 'Cooling Fan Blades', 'Power Tool Casings', 'Water Meter Bodies', 'Pump Impellers' ),
    ),
    'abs-white' => array(
        'slug'       => 'abs-white',
        'name'       => 'ABS White Granules',
        'category'   => 'High-Impact Acrylonitrile Butadiene Styrene (ABS)',
        'tagline'    => 'High Whiteness & Rigidity • Electronics & Home Appliances',
        'image'      => 'assets/images/granules-pp-milky-white.jpg',
        'badge'      => 'High Gloss',
        'badgeColor' => '#0891b2',
        'lead'       => 'Premium high-gloss ABS White Pellets engineered for maximum surface gloss, color uniformity, and excellent dimensional fidelity. Compatible with ultrasonic welding, pad printing, and high-precision injection moulds.',
        'mfi'        => '16 – 22 g/10min',
        'base'       => 'High-Gloss Terpolymer ABS',
        'pack'       => '25 Kg Bags',
        'form'       => 'Brilliant White Pellets',
        'specMfi'    => '16 – 22 g/10min (ASTM D1238, 220°C / 10 kg)',
        'density'    => '1.05 g/cm³ (ASTM D792)',
        'tensile'    => '46 MPa (ASTM D638)',
        'impact'     => '220 J/m (ASTM D256)',
        'flex'       => '2,400 MPa (ASTM D790)',
        'elong'      => '30% (ASTM D638)',
        'colors'     => 'Pure White (CIE L* > 92)',
        'packaging'  => '25 Kg Net Multi-Ply Kraft Bags',
        'processing' => 'Injection Moulding (Melt: 210°C - 240°C, Mould: 40°C - 60°C, Pre-dry 80°C / 2 hrs)',
        'apps'       => array( 'AC Front Grilles', 'Refrigerator Liner Panels', 'Washing Machine Tops', 'Electronic Router Enclosures', 'Mixer Grinder Bodies' ),
    ),
    'abs-black' => array(
        'slug'       => 'abs-black',
        'name'       => 'ABS Black Granules',
        'category'   => 'High-Impact Acrylonitrile Butadiene Styrene (ABS)',
        'tagline'    => 'High Toughness & UV Dispersion • Automotive Trims & Helmets',
        'image'      => 'assets/images/granules-ppcp-black.jpg',
        'badge'      => 'Engineering Grade',
        'badgeColor' => '#0f172a',
        'lead'       => 'Premium engineering-grade ABS Black Pellets formulated with deep furnace carbon black dispersion. Delivers uniform jet-black coloration, high impact resistance, and superb dimensional stability under thermal variations.',
        'mfi'        => '18 – 24 g/10min',
        'base'       => 'Terpolymer ABS Black',
        'pack'       => '25 Kg Bags',
        'form'       => 'Jet Black Glossy Pellets',
        'specMfi'    => '18 – 24 g/10min (ASTM D1238, 220°C / 10 kg)',
        'density'    => '1.05 g/cm³ (ASTM D792)',
        'tensile'    => '48 MPa (ASTM D638)',
        'impact'     => '230 J/m (ASTM D256)',
        'flex'       => '2,450 MPa (ASTM D790)',
        'elong'      => '35% (ASTM D638)',
        'colors'     => 'Jet Black High Gloss',
        'packaging'  => '25 Kg Net Multi-Ply Kraft Bags',
        'processing' => 'Injection Moulding (Melt: 215°C - 245°C, Mould: 45°C - 65°C, Pre-dry 80°C / 2 hrs)',
        'apps'       => array( 'Safety Helmets', 'Two-Wheeler Body Covers', 'Rearview Mirror Shells', 'Luggage Trolley Shells', 'Power Inverter Fascias' ),
    ),
    'abs-fr-granules' => array(
        'slug'       => 'abs-fr-granules',
        'name'       => 'ABS FR Plastic Granules',
        'category'   => 'Flame Retardant ABS (UL94 V-0 Rated)',
        'tagline'    => 'UL94 V-0 Self-Extinguishing • Electrical Switchgear & EV Enclosures',
        'image'      => 'assets/images/granules-abs-fr.jpg',
        'badge'      => 'Flame Retardant V0',
        'badgeColor' => '#ea580c',
        'lead'       => 'Halogen-free and UL94 V-0 certified Flame Retardant ABS granules engineered for critical electrical and electronics enclosures. Self-extinguishing within 10 seconds with zero flaming drips, accompanied by excellent glow wire test (GWFI) performance.',
        'mfi'        => '14 – 20 g/10min',
        'base'       => 'Flame Retardant ABS',
        'pack'       => '25 Kg Net Bags',
        'form'       => 'Light Ivory Pellets',
        'specMfi'    => '14 – 20 g/10min (ASTM D1238, 220°C / 10 kg)',
        'density'    => '1.18 – 1.20 g/cm³ (ASTM D792)',
        'tensile'    => '44 MPa (ASTM D638)',
        'impact'     => '160 J/m (ASTM D256)',
        'flex'       => '2,600 MPa (ASTM D790)',
        'elong'      => '25% (ASTM D638)',
        'colors'     => 'Off-White / Light Ivory / Custom Compounded',
        'packaging'  => '25 Kg Multi-Ply Paper Bags with PE Liner',
        'processing' => 'Injection Moulding (Melt: 200°C - 225°C, Mould: 50°C - 70°C, Pre-dry 80°C / 3 hrs)',
        'apps'       => array( 'EV Charging Station Boxes', 'Modular Switchboards & MCB Casings', 'Smart Energy Meter Housings', 'Power Distribution Units', 'IT Server Blade Bezels' ),
    ),
    'red-pmma' => array(
        'slug'       => 'red-pmma',
        'name'       => 'Red PMMA Granules',
        'category'   => 'Poly Methyl Methacrylate (PMMA / Acrylic)',
        'tagline'    => 'Optical Clarity & UV Stable • Automotive Tail Lights & Signals',
        'image'      => 'assets/images/granules-red-pmma.jpg',
        'badge'      => 'Optical Grade',
        'badgeColor' => '#dc2626',
        'lead'       => 'Optical-grade ruby and signal red PMMA acrylic granules engineered specifically for automotive lighting lenses. Exceptional outdoor weatherability, non-yellowing under prolonged solar exposure, and crystal-clear light transmission.',
        'mfi'        => '2.0 – 3.5 g/10min',
        'base'       => 'Optical Acrylic PMMA',
        'pack'       => '25 Kg Sealed Bags',
        'form'       => 'Ruby Red Optical Pellets',
        'specMfi'    => '2.0 – 3.5 g/10min (ASTM D1238, 230°C / 3.8 kg)',
        'density'    => '1.18 g/cm³ (ASTM D792)',
        'tensile'    => '68 MPa (ASTM D638)',
        'impact'     => '20 J/m (ASTM D256)',
        'flex'       => '3,100 MPa (ASTM D790)',
        'elong'      => '5.0% (ASTM D638)',
        'colors'     => 'Ruby Red / Automotive Signal Red (SAE J578 Compliant)',
        'packaging'  => '25 Kg Sealed Moisture Barrier Bags',
        'processing' => 'Injection Moulding (Melt: 215°C - 245°C, Mould: 60°C - 80°C, Pre-dry 85°C / 4 hrs)',
        'apps'       => array( 'Automotive Rear Tail Lamps', 'Emergency Flasher Lenses', 'Traffic Light Lenses', 'Aviation Ground Markers', 'Illuminated Brand Logos' ),
    ),
    'acrylic-granules' => array(
        'slug'       => 'acrylic-granules',
        'name'       => 'Acrylic Granules',
        'category'   => 'Pure PMMA Optical Molding Polymer',
        'tagline'    => '92% Light Transmission • Lenses, Displays & Lighting',
        'image'      => 'assets/images/granules-clear-transparent.jpg',
        'badge'      => 'Crystal Clear',
        'badgeColor' => '#7c3aed',
        'lead'       => 'Ultra-clear virgin PMMA acrylic granules exhibiting superior optical clarity (92% total luminous transmittance), high surface hardness, scratch resistance, and brilliant glass-like transparency for precision lighting and displays.',
        'mfi'        => '2.2 – 4.5 g/10min',
        'base'       => 'Pure PMMA Polymer',
        'pack'       => '25 Kg Bags',
        'form'       => 'Glass-Clear Pellets',
        'specMfi'    => '2.2 – 4.5 g/10min (ASTM D1238, 230°C / 3.8 kg)',
        'density'    => '1.19 g/cm³ (ASTM D792)',
        'tensile'    => '72 MPa (ASTM D638)',
        'impact'     => '22 J/m (ASTM D256)',
        'flex'       => '3,250 MPa (ASTM D790)',
        'elong'      => '4.5% (ASTM D638)',
        'colors'     => 'Crystal Clear Transparent (Light Transmission: 92%, Haze < 1%)',
        'packaging'  => '25 Kg Sealed Foil Lined Bags',
        'processing' => 'Optical Injection Moulding (Melt: 220°C - 250°C, Mould: 60°C - 80°C)',
        'apps'       => array( 'LED Light Diffusers & Light Guides', 'Speedometer Instrument Clusters', 'Eyewear & Magnifying Lenses', 'Luxury Cosmetic Packaging' ),
    ),
    'nylon-black' => array(
        'slug'       => 'nylon-black',
        'name'       => 'Nylon Black Granules',
        'category'   => 'Polyamide 6 / 66 (PA6/PA66)',
        'tagline'    => 'High Tensile & Wear Resistance • Industrial Gears & Fasteners',
        'image'      => 'assets/images/granules-nylon-black.jpg',
        'badge'      => 'Polyamide 6/66',
        'badgeColor' => '#1e293b',
        'lead'       => 'Heavy-duty black Polyamide 6 (Nylon 6) compound offering outstanding mechanical strength, abrasion resistance, and self-lubricating characteristics. Ideal for continuous load-bearing mechanical components and automotive clips.',
        'mfi'        => 'Medium-to-High Flow',
        'base'       => 'Polyamide 6 (PA6 Black)',
        'pack'       => '25 Kg Sealed Bags',
        'form'       => 'Jet Black Cylindrical Pellets',
        'specMfi'    => 'High Flow Viscosity (ASTM D1238, 235°C / 2.16 kg)',
        'density'    => '1.14 g/cm³ (ASTM D792)',
        'tensile'    => '78 MPa (ASTM D638)',
        'impact'     => '65 J/m (ASTM D256)',
        'flex'       => '2,750 MPa (ASTM D790)',
        'elong'      => '35% (ASTM D638)',
        'colors'     => 'Jet Black (Fine Carbon Black Compounded)',
        'packaging'  => '25 Kg Hermetically Sealed Aluminum Barrier Bags',
        'processing' => 'Injection Moulding (Melt: 240°C - 275°C, Mould: 70°C - 90°C, Pre-dry 80°C / 4 hrs)',
        'apps'       => array( 'Industrial Transmission Gears', 'Conveyor Roller Bushings', 'Heavy Duty Cable Clamps', 'Power Tool Internal Housings', 'Underhood Auto Fasteners' ),
    ),
    'nylon-white' => array(
        'slug'       => 'nylon-white',
        'name'       => 'Nylon White Granules',
        'category'   => 'Virgin Polyamide 6 (PA6 Natural / White)',
        'tagline'    => 'Prime Polyamide Pellets • Monofilament, Zip Ties & Industrial Moulding',
        'image'      => 'assets/images/granules-natural-white.jpg',
        'badge'      => 'Natural PA6',
        'badgeColor' => '#2563eb',
        'lead'       => 'Virgin and high-grade natural Nylon 6 / 66 granules with exceptional tensile toughness, fatigue resistance, and chemical resistance to oils, greases, and industrial fuels. Perfect for precision moulding and extruded zip ties.',
        'mfi'        => 'Medium Viscosity',
        'base'       => 'Virgin Polyamide 6',
        'pack'       => '25 Kg Sealed Bags',
        'form'       => 'Ivory / Off-White Pellets',
        'specMfi'    => 'Medium Flow Viscosity (ASTM D1238, 235°C / 2.16 kg)',
        'density'    => '1.13 g/cm³ (ASTM D792)',
        'tensile'    => '82 MPa (ASTM D638)',
        'impact'     => '70 J/m (ASTM D256)',
        'flex'       => '2,800 MPa (ASTM D790)',
        'elong'      => '45% (ASTM D638)',
        'colors'     => 'Natural Virgin Ivory White',
        'packaging'  => '25 Kg Moisture Barrier Bags',
        'processing' => 'Injection Moulding (Melt: 235°C - 265°C, Mould: 65°C - 85°C, Pre-dry 80°C / 4 hrs)',
        'apps'       => array( 'Self-Locking Cable Ties', 'Monofilament Ropes & Nets', 'Textile Bobbins', 'Fluid Reservoir Caps', 'Electrical Switch Insulators' ),
    ),
);

// Map common query string aliases
$req_product = isset( $_GET['product'] ) ? sanitize_text_field( strtolower( trim( $_GET['product'] ) ) ) : 'ppcp-impact';
if ( strpos( $req_product, 'ppcp' ) !== false && strpos( $req_product, 'grey' ) !== false ) {
    $active_key = 'ppcp-grey';
} elseif ( strpos( $req_product, 'ppcp' ) !== false && strpos( $req_product, 'impact' ) !== false ) {
    $active_key = 'ppcp-impact';
} elseif ( strpos( $req_product, 'ppcp' ) !== false && strpos( $req_product, 'black' ) !== false ) {
    $active_key = 'ppcp-black';
} elseif ( strpos( $req_product, 'talc' ) !== false ) {
    $active_key = 'pp-talc';
} elseif ( strpos( $req_product, 'glass' ) !== false ) {
    $active_key = 'polypropylene-glass-filled';
} elseif ( strpos( $req_product, 'natural' ) !== false || ( strpos( $req_product, 'white' ) !== false && strpos( $req_product, 'polypropylene' ) !== false ) ) {
    $active_key = 'polypropylene-natural-white';
} elseif ( strpos( $req_product, 'abs' ) !== false && ( strpos( $req_product, 'fr' ) !== false || strpos( $req_product, 'flame' ) !== false ) ) {
    $active_key = 'abs-fr-granules';
} elseif ( strpos( $req_product, 'abs' ) !== false && strpos( $req_product, 'white' ) !== false ) {
    $active_key = 'abs-white';
} elseif ( strpos( $req_product, 'abs' ) !== false && strpos( $req_product, 'black' ) !== false ) {
    $active_key = 'abs-black';
} elseif ( strpos( $req_product, 'pmma' ) !== false || strpos( $req_product, 'red' ) !== false ) {
    $active_key = 'red-pmma';
} elseif ( strpos( $req_product, 'acrylic' ) !== false ) {
    $active_key = 'acrylic-granules';
} elseif ( strpos( $req_product, 'nylon' ) !== false && strpos( $req_product, 'black' ) !== false ) {
    $active_key = 'nylon-black';
} elseif ( strpos( $req_product, 'nylon' ) !== false && strpos( $req_product, 'white' ) !== false ) {
    $active_key = 'nylon-white';
} elseif ( isset( $products_db[ $req_product ] ) ) {
    $active_key = $req_product;
} else {
    $active_key = 'ppcp-impact';
}

$p = $products_db[ $active_key ];
$p_img_url = get_theme_file_uri( $p['image'] );
$phone_val = get_theme_mod( 'gp_company_phone', '+91-8591585497' );
$clean_tel = preg_replace( '/[^0-9]/', '', $phone_val );
?>

<style id="gp-product-detail-styles">
.gp-detail-container { max-width: 1440px; margin: 0 auto; padding: 40px 24px 80px; }
.gp-detail-two-col { display: grid; grid-template-columns: 1fr 390px; gap: 40px; align-items: start; }
@media (max-width: 1100px) { .gp-detail-two-col { grid-template-columns: 1fr; } }
.gp-pdetail-card {
    background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px;
    box-shadow: 0 10px 30px rgba(11, 37, 69, 0.05); padding: 36px; margin-bottom: 30px;
}
.gp-pdetail-header-flex { display: grid; grid-template-columns: 340px 1fr; gap: 32px; align-items: center; margin-bottom: 30px; }
@media (max-width: 768px) { .gp-pdetail-header-flex { grid-template-columns: 1fr; } }
.gp-pdetail-image-wrap {
    position: relative; border-radius: 14px; overflow: hidden; background: #f8fafc;
    border: 1px solid #e2e8f0; box-shadow: 0 4px 18px rgba(0,0,0,0.06); text-align: center;
}
.gp-pdetail-image-wrap img { width: 100%; height: 320px; object-fit: cover; display: block; transition: transform 0.4s ease; }
.gp-pdetail-image-wrap:hover img { transform: scale(1.05); }
.gp-pdetail-badge-pill {
    display: inline-flex; align-items: center; gap: 6px; padding: 4px 14px; border-radius: 50px;
    font-size: 0.76rem; font-weight: 700; color: #ffffff; letter-spacing: 0.04em; text-transform: uppercase; margin-bottom: 12px;
}
.gp-pdetail-title { font-size: 2.1rem; font-weight: 800; color: #0b2545; line-height: 1.2; margin-bottom: 12px; }
.gp-pdetail-tagline { font-size: 1.02rem; color: #0097db; font-weight: 600; margin-bottom: 16px; }
.gp-pdetail-lead { font-size: 0.95rem; color: #475569; line-height: 1.65; margin-bottom: 20px; }
.gp-fast-specs-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(130px, 1fr)); gap: 12px;
    margin-top: 20px; padding: 18px; background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0;
}
.gp-fs-item { display: flex; flex-direction: column; }
.gp-fs-lbl { font-size: 0.72rem; text-transform: uppercase; color: #64748b; font-weight: 700; letter-spacing: 0.03em; margin-bottom: 4px; }
.gp-fs-val { font-size: 0.96rem; font-weight: 800; color: #0b2545; font-family: 'Rajdhani', sans-serif; }
.gp-tech-heading {
    font-size: 1.28rem; font-weight: 800; color: #0b2545; margin-bottom: 18px;
    display: flex; align-items: center; gap: 10px; border-left: 4px solid #0097db; padding-left: 12px;
}
.gp-detail-table { width: 100%; border-collapse: collapse; margin-bottom: 24px; font-size: 0.92rem; }
.gp-detail-table th, .gp-detail-table td { padding: 12px 16px; border-bottom: 1px solid #e2e8f0; text-align: left; }
.gp-detail-table th { width: 36%; background: #f8fafc; font-weight: 700; color: #334155; }
.gp-detail-table td { color: #1e293b; font-weight: 500; }
.gp-detail-table tr:hover td { background: #f0f9ff; }
.gp-app-chips-flex { display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 20px; }
.gp-app-pill {
    display: inline-flex; align-items: center; gap: 8px; background: #f0f9ff;
    border: 1px solid #bae6fd; border-radius: 8px; padding: 8px 14px; font-size: 0.88rem; font-weight: 600; color: #0369a1;
}
.gp-pquality-strip {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px;
    padding: 20px; background: linear-gradient(135deg, #07172b 0%, #0b2545 100%);
    border-radius: 12px; color: #ffffff; margin-top: 25px;
}
.gp-pquality-item { display: flex; align-items: center; gap: 12px; }
.gp-pquality-icon {
    width: 42px; height: 42px; border-radius: 50%; background: rgba(0, 151, 219, 0.25);
    display: flex; align-items: center; justify-content: center; color: #00b4d8; flex-shrink: 0; border: 1px solid rgba(0, 180, 216, 0.4);
}
.gp-pquality-text strong { display: block; font-size: 0.9rem; color: #ffffff; }
.gp-pquality-text span { font-size: 0.76rem; color: #94a3b8; }
.gp-pdetail-sidebar { position: sticky; top: 90px; }
.gp-pside-quote-card {
    background: #ffffff; border: 2px solid #0097db; border-radius: 18px;
    box-shadow: 0 16px 40px rgba(0, 151, 219, 0.12), 0 4px 12px rgba(11, 37, 69, 0.05);
    overflow: hidden;
}
.gp-pside-header { background: linear-gradient(135deg, #0b2545 0%, #0077b6 100%); padding: 22px 24px; color: #ffffff; }
.gp-pside-live-status {
    display: inline-flex; align-items: center; gap: 6px; font-size: 0.72rem;
    color: #10b981; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px;
}
.gp-pside-pulse { width: 7px; height: 7px; background: #10b981; border-radius: 50%; box-shadow: 0 0 6px #10b981; display: inline-block; }
.gp-pside-header h3 { font-size: 1.25rem; font-weight: 800; color: #ffffff; margin-bottom: 4px; line-height: 1.25; }
.gp-pside-header p { font-size: 0.8rem; color: #cbd5e1; margin: 0; }
.gp-pside-body { padding: 24px; }
.gp-pside-form-group { margin-bottom: 14px; }
.gp-pside-form-group label {
    display: block; font-size: 0.76rem; font-weight: 700; color: #334155;
    text-transform: uppercase; letter-spacing: 0.04em; margin-bottom: 5px;
}
.gp-pside-input, .gp-pside-select, .gp-pside-textarea {
    width: 100%; padding: 10px 14px; border: 1.5px solid #cbd5e1; border-radius: 8px;
    font-size: 0.9rem; font-family: 'Poppins', sans-serif; color: #0f172a; background: #ffffff;
    box-sizing: border-box; transition: all 0.2s ease;
}
.gp-pside-input:focus, .gp-pside-select:focus, .gp-pside-textarea:focus {
    outline: none; border-color: #0097db; box-shadow: 0 0 0 3px rgba(0, 151, 219, 0.18);
}
.gp-pside-submit-btn {
    width: 100%; background: linear-gradient(135deg, #0097db 0%, #0077b6 100%);
    color: #ffffff; border: none; padding: 13px 20px; border-radius: 8px;
    font-size: 0.96rem; font-weight: 700; font-family: 'Poppins', sans-serif;
    cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px;
    box-shadow: 0 6px 18px rgba(0, 151, 219, 0.35); transition: all 0.25s ease; margin-top: 10px;
}
.gp-pside-submit-btn:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0, 151, 219, 0.5); }
.gp-form-success-banner {
    display: none; background: #dcfce7; border: 1px solid #86efac; color: #166534;
    padding: 12px 14px; border-radius: 8px; font-size: 0.85rem; margin-top: 14px; line-height: 1.45;
}
.gp-trial-bag-card {
    display: flex; gap: 12px; align-items: center; background: #f0fdf4; border: 1px solid #bbf7d0;
    padding: 14px; border-radius: 10px; margin-top: 18px;
}
.gp-trial-bag-icon { font-size: 1.6rem; flex-shrink: 0; }
.gp-trial-bag-text { font-size: 0.8rem; color: #166534; line-height: 1.4; }
.gp-trial-bag-text strong { display: block; font-size: 0.88rem; margin-bottom: 2px; }
.gp-pside-direct-desk { margin-top: 20px; padding-top: 18px; border-top: 1px solid #e2e8f0; text-align: center; }
.gp-pside-wa-btn {
    display: inline-flex; align-items: center; justify-content: center; gap: 8px;
    width: 100%; background: #25d366; color: #ffffff !important; padding: 10px 16px;
    border-radius: 8px; font-weight: 700; font-size: 0.9rem; text-decoration: none;
    box-shadow: 0 4px 14px rgba(37, 211, 102, 0.3); transition: all 0.2s ease; margin-bottom: 10px;
}
.gp-pside-wa-btn:hover { background: #20ba5c; transform: translateY(-1px); }
.gp-pside-phone-link {
    display: inline-flex; align-items: center; justify-content: center; gap: 6px;
    font-size: 0.82rem; color: #475569; text-decoration: none; font-weight: 600;
}
.gp-pside-phone-link:hover { color: #0097db; }
</style>

<!-- Page Breadcrumb Banner -->
<section class="gp-page-banner">
    <div class="gp-container">
        <div class="gp-page-banner-content">
            <span class="gp-sub-tag" id="banner-category-tag"><?php echo esc_html( strtoupper( $p['category'] ) ); ?></span>
            <h1 class="gp-page-title" id="banner-product-title"><?php echo esc_html( $p['name'] ); ?></h1>
            <nav class="gp-breadcrumbs" aria-label="Breadcrumb" style="margin-top: 15px; font-size: 0.85rem; color: rgba(255,255,255,0.7);">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #0097db; text-decoration: none;"><?php esc_html_e( 'Home', 'gp-theme' ); ?></a> 
                <span style="margin: 0 6px;">›</span> 
                <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" style="color: #0097db; text-decoration: none;"><?php esc_html_e( 'Products', 'gp-theme' ); ?></a> 
                <span style="margin: 0 6px;">›</span> 
                <span style="color: #ffffff;" id="breadcrumb-current-name"><?php echo esc_html( $p['name'] ); ?></span>
            </nav>
        </div>
    </div>
</section>

<!-- Product Detail & Side Contact Form Section -->
<main id="primary" class="site-main" style="background: #f8fafc;">
    <div class="gp-detail-container">
        <div class="gp-detail-two-col">
            
            <!-- Left Column: Detailed Product Content -->
            <div class="gp-pdetail-main-col">
                
                <!-- Main Card (Media & Summary) -->
                <div class="gp-pdetail-card">
                    <div class="gp-pdetail-header-flex">
                        <div class="gp-pdetail-image-wrap">
                            <img src="<?php echo esc_url( $p_img_url ); ?>" id="detail-product-img" alt="<?php echo esc_attr( $p['name'] ); ?>">
                        </div>
                        <div class="gp-pdetail-summary">
                            <span class="gp-pdetail-badge-pill" id="detail-badge-pill" style="background: <?php echo esc_attr( $p['badgeColor'] ); ?>;"><?php echo esc_html( $p['badge'] ); ?></span>
                            <h2 class="gp-pdetail-title" id="detail-name"><?php echo esc_html( $p['name'] ); ?></h2>
                            <div class="gp-pdetail-tagline" id="detail-tagline"><?php echo esc_html( $p['tagline'] ); ?></div>
                            <p class="gp-pdetail-lead" id="detail-lead-desc"><?php echo esc_html( $p['lead'] ); ?></p>
                            
                            <div class="gp-fast-specs-grid">
                                <div class="gp-fs-item">
                                    <span class="gp-fs-lbl"><?php esc_html_e( 'Melt Flow Index', 'gp-theme' ); ?></span>
                                    <span class="gp-fs-val" id="fs-mfi"><?php echo esc_html( $p['mfi'] ); ?></span>
                                </div>
                                <div class="gp-fs-item">
                                    <span class="gp-fs-lbl"><?php esc_html_e( 'Polymer Base', 'gp-theme' ); ?></span>
                                    <span class="gp-fs-val" id="fs-base"><?php echo esc_html( $p['base'] ); ?></span>
                                </div>
                                <div class="gp-fs-item">
                                    <span class="gp-fs-lbl"><?php esc_html_e( 'Standard Pack', 'gp-theme' ); ?></span>
                                    <span class="gp-fs-val" id="fs-pack"><?php echo esc_html( $p['pack'] ); ?></span>
                                </div>
                                <div class="gp-fs-item">
                                    <span class="gp-fs-lbl"><?php esc_html_e( 'Pellet Form', 'gp-theme' ); ?></span>
                                    <span class="gp-fs-val" id="fs-form"><?php echo esc_html( $p['form'] ); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Technical Specifications Table -->
                    <div style="margin-top: 35px;">
                        <h3 class="gp-tech-heading">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            <?php esc_html_e( 'Verified Technical Specifications (ASTM Standards)', 'gp-theme' ); ?>
                        </h3>
                        <table class="gp-detail-table">
                            <tbody>
                                <tr>
                                    <th><?php esc_html_e( 'Melt Flow Index (MFI)', 'gp-theme' ); ?></th>
                                    <td id="spec-mfi"><?php echo esc_html( $p['specMfi'] ); ?></td>
                                </tr>
                                <tr>
                                    <th><?php esc_html_e( 'Density / Specific Gravity', 'gp-theme' ); ?></th>
                                    <td id="spec-density"><?php echo esc_html( $p['density'] ); ?></td>
                                </tr>
                                <tr>
                                    <th><?php esc_html_e( 'Tensile Strength at Yield', 'gp-theme' ); ?></th>
                                    <td id="spec-tensile"><?php echo esc_html( $p['tensile'] ); ?></td>
                                </tr>
                                <tr>
                                    <th><?php esc_html_e( 'Izod Impact Strength (Notched)', 'gp-theme' ); ?></th>
                                    <td id="spec-impact"><?php echo esc_html( $p['impact'] ); ?></td>
                                </tr>
                                <tr>
                                    <th><?php esc_html_e( 'Flexural Modulus', 'gp-theme' ); ?></th>
                                    <td id="spec-flex"><?php echo esc_html( $p['flex'] ); ?></td>
                                </tr>
                                <tr>
                                    <th><?php esc_html_e( 'Elongation at Break', 'gp-theme' ); ?></th>
                                    <td id="spec-elong"><?php echo esc_html( $p['elong'] ); ?></td>
                                </tr>
                                <tr>
                                    <th><?php esc_html_e( 'Available Colors / Form', 'gp-theme' ); ?></th>
                                    <td id="spec-colors"><?php echo esc_html( $p['colors'] ); ?></td>
                                </tr>
                                <tr>
                                    <th><?php esc_html_e( 'Standard Packaging', 'gp-theme' ); ?></th>
                                    <td id="spec-packaging"><?php echo esc_html( $p['packaging'] ); ?></td>
                                </tr>
                                <tr>
                                    <th><?php esc_html_e( 'Recommended Processing', 'gp-theme' ); ?></th>
                                    <td id="spec-processing"><?php echo esc_html( $p['processing'] ); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Key Applications -->
                    <div style="margin-top: 35px;">
                        <h3 class="gp-tech-heading">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                            <?php esc_html_e( 'Key Industrial & Manufacturing Applications', 'gp-theme' ); ?>
                        </h3>
                        <div class="gp-app-chips-flex" id="detail-app-chips">
                            <?php foreach ( $p['apps'] as $app ) : ?>
                                <span class="gp-app-pill">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <?php echo esc_html( $app ); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Recommended Moulding Guidelines -->
                    <div style="margin-top: 35px;">
                        <h3 class="gp-tech-heading">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                            <?php esc_html_e( 'Recommended Moulding Guidelines', 'gp-theme' ); ?>
                        </h3>
                        <table class="gp-detail-table">
                            <tbody>
                                <tr>
                                    <th><?php esc_html_e( 'Barrel Temperature', 'gp-theme' ); ?></th>
                                    <td>Rear: 195°C – 205°C | Middle: 210°C – 225°C | Front: 220°C – 235°C</td>
                                </tr>
                                <tr>
                                    <th><?php esc_html_e( 'Mould Temperature', 'gp-theme' ); ?></th>
                                    <td>30°C – 50°C (Water cooled for rapid cycle time)</td>
                                </tr>
                                <tr>
                                    <th><?php esc_html_e( 'Injection Pressure', 'gp-theme' ); ?></th>
                                    <td>70 – 110 MPa (Depending on wall thickness &amp; gate design)</td>
                                </tr>
                                <tr>
                                    <th><?php esc_html_e( 'Pre-Drying Conditions', 'gp-theme' ); ?></th>
                                    <td>Generally not required; if exposed to high humidity, dry at 75°C for 1.5 hours.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Quality & Guarantee Strip -->
                    <div class="gp-pquality-strip">
                        <div class="gp-pquality-item">
                            <div class="gp-pquality-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            </div>
                            <div class="gp-pquality-text">
                                <strong><?php esc_html_e( 'COA Certificate', 'gp-theme' ); ?></strong>
                                <span><?php esc_html_e( 'Lab report with every lot', 'gp-theme' ); ?></span>
                            </div>
                        </div>
                        <div class="gp-pquality-item">
                            <div class="gp-pquality-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </div>
                            <div class="gp-pquality-text">
                                <strong><?php esc_html_e( 'ISO 9001:2015', 'gp-theme' ); ?></strong>
                                <span><?php esc_html_e( 'Certified Compounding Mill', 'gp-theme' ); ?></span>
                            </div>
                        </div>
                        <div class="gp-pquality-item">
                            <div class="gp-pquality-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                            </div>
                            <div class="gp-pquality-text">
                                <strong><?php esc_html_e( '2,500+ MT Monthly', 'gp-theme' ); ?></strong>
                                <span><?php esc_html_e( 'Continuous Mill Capacity', 'gp-theme' ); ?></span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Right Column: Sticky Contact & Direct Mill Quotation Form -->
            <div class="gp-pdetail-sidebar">
                <div class="gp-pside-quote-card">
                    
                    <div class="gp-pside-header">
                        <div class="gp-pside-live-status">
                            <span class="gp-pside-pulse"></span> <?php esc_html_e( 'Sales Engineers Online', 'gp-theme' ); ?>
                        </div>
                        <h3><?php esc_html_e( 'Request Sample & Quote', 'gp-theme' ); ?></h3>
                        <p><?php esc_html_e( 'Direct mill rates, lot COA, and free trial bag for verified factories.', 'gp-theme' ); ?></p>
                    </div>

                    <div class="gp-pside-body">
                        <form id="gp-product-inquiry-form" onsubmit="handleProductInquiry(event)">
                            
                            <div class="gp-pside-form-group">
                                <label for="side-inq-product"><?php esc_html_e( 'Selected Polymer Grade', 'gp-theme' ); ?></label>
                                <input type="text" id="side-inq-product" class="gp-pside-input" value="<?php echo esc_attr( $p['name'] ); ?>" readonly style="background: #f1f5f9; font-weight: 700; color: #0077b6;">
                            </div>

                            <div class="gp-pside-form-group">
                                <label for="side-inq-name"><?php esc_html_e( 'Your Name *', 'gp-theme' ); ?></label>
                                <input type="text" id="side-inq-name" class="gp-pside-input" placeholder="e.g. Rahul Sharma" required>
                            </div>

                            <div class="gp-pside-form-group">
                                <label for="side-inq-company"><?php esc_html_e( 'Company / Factory Name *', 'gp-theme' ); ?></label>
                                <input type="text" id="side-inq-company" class="gp-pside-input" placeholder="e.g. Apex Moulding Pvt Ltd" required>
                            </div>

                            <div class="gp-pside-form-group">
                                <label for="side-inq-phone"><?php esc_html_e( 'Phone / WhatsApp Number *', 'gp-theme' ); ?></label>
                                <input type="tel" id="side-inq-phone" class="gp-pside-input" placeholder="+91 98765 43210" required>
                            </div>

                            <div class="gp-pside-form-group">
                                <label for="side-inq-email"><?php esc_html_e( 'Official Email', 'gp-theme' ); ?></label>
                                <input type="email" id="side-inq-email" class="gp-pside-input" placeholder="purchasing@company.com">
                            </div>

                            <div class="gp-pside-form-group">
                                <label for="side-inq-qty"><?php esc_html_e( 'Estimated Quantity Requirement *', 'gp-theme' ); ?></label>
                                <select id="side-inq-qty" class="gp-pside-select" required>
                                    <option value="Free Sample Trial Bag (5-10 Kg)"><?php esc_html_e( 'Free Sample Trial Bag (5 - 10 Kg)', 'gp-theme' ); ?></option>
                                    <option value="1 to 5 MT (Pilot Order)"><?php esc_html_e( '1 to 5 MT (Pilot Order)', 'gp-theme' ); ?></option>
                                    <option value="5 to 15 MT / Month" selected><?php esc_html_e( '5 to 15 MT / Month', 'gp-theme' ); ?></option>
                                    <option value="15 to 30 MT / Month"><?php esc_html_e( '15 to 30 MT / Month', 'gp-theme' ); ?></option>
                                    <option value="50+ MT Regular Supply"><?php esc_html_e( '50+ MT Regular Mill Supply', 'gp-theme' ); ?></option>
                                </select>
                            </div>

                            <div class="gp-pside-form-group">
                                <label for="side-inq-notes"><?php esc_html_e( 'Specific MFI or Application Notes', 'gp-theme' ); ?></label>
                                <textarea id="side-inq-notes" class="gp-pside-textarea" rows="2" placeholder="<?php esc_attr_e( 'e.g. Need high impact strength for 12V battery container...', 'gp-theme' ); ?>"></textarea>
                            </div>

                            <button type="submit" class="gp-pside-submit-btn">
                                <span><?php esc_html_e( 'Send Quotation Request', 'gp-theme' ); ?></span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </button>

                            <div class="gp-form-success-banner" id="form-success-banner">
                                ✓ <strong><?php esc_html_e( 'Thank you!', 'gp-theme' ); ?></strong> <?php esc_html_e( 'Your RFQ has been received. Our polymer sales engineer will contact you within 15 minutes with current mill prices and sample dispatch details!', 'gp-theme' ); ?>
                            </div>

                        </form>

                        <div class="gp-trial-bag-card">
                            <div class="gp-trial-bag-icon">🎁</div>
                            <div class="gp-trial-bag-text">
                                <strong><?php esc_html_e( 'Free Trial Sample Bag', 'gp-theme' ); ?></strong>
                                <?php esc_html_e( '5 Kg sample bags available for trial moulding on your plant machines.', 'gp-theme' ); ?>
                            </div>
                        </div>

                        <div class="gp-pside-direct-desk">
                            <a href="https://wa.me/<?php echo esc_attr( $clean_tel ); ?>?text=<?php echo rawurlencode( 'Hi SRS Polymer, I am interested in ' . $p['name'] . ' quotation.' ); ?>" target="_blank" rel="noopener" class="gp-pside-wa-btn" id="side-wa-link">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.698.077-2.226-.554-1.849-.763-3.045-2.645-3.136-2.768-.093-.122-.751-.998-.751-1.905s.475-1.353.645-1.537c.17-.184.372-.23.496-.23.125 0 .25.002.359.007.116.006.27-.044.423.324.156.376.533 1.302.579 1.397.046.095.077.206.015.328-.061.122-.093.199-.185.306-.092.108-.194.24-.277.323-.092.093-.188.194-.081.378.107.183.475.784 1.021 1.269.704.628 1.297.822 1.482.914.184.092.293.076.4-.046.107-.123.461-.537.584-.72.123-.184.247-.153.415-.092.17.062 1.077.508 1.262.6.184.093.308.138.354.215.046.077.046.452-.098.857z"/></svg>
                                <span><?php esc_html_e( 'Chat on WhatsApp RFQ', 'gp-theme' ); ?></span>
                            </a>
                            <a href="tel:<?php echo esc_attr( $clean_tel ); ?>" class="gp-pside-phone-link">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span><?php esc_html_e( 'Call Sales Desk:', 'gp-theme' ); ?> <?php echo esc_html( $phone_val ); ?></span>
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        </div> <!-- Closes .gp-detail-two-col -->
    </div> <!-- Closes .gp-detail-container -->

    <!-- Full Width: Explore All 13 Polymer Grades Section -->
    <section class="gp-all-products-fullwidth" style="width: 100%; background: #ffffff; padding: 56px 0 65px; border-top: 1.5px solid #e2e8f0;">
        <div style="max-width: 1440px; margin: 0 auto; padding: 0 28px;">
            <div style="text-align: center; margin-bottom: 34px;">
                <span class="gp-sub-tag" style="background: rgba(0,151,219,0.1); color: #0097db; padding: 6px 18px; border-radius: 20px; font-weight: 700; font-size: 0.78rem; letter-spacing: 0.9px; display: inline-block;"><?php esc_html_e( 'COMPLETE INDUSTRIAL PORTFOLIO', 'gp-theme' ); ?></span>
                <h3 style="font-size: 2.1rem; font-weight: 800; color: #0b2545; margin: 10px 0 8px;"><?php esc_html_e( 'Explore All Polymer Grades', 'gp-theme' ); ?></h3>
                <p style="font-size: 0.96rem; color: #64748b; max-width: 680px; margin: 0 auto;"><?php esc_html_e( 'Click on any polymer grade below to view lab ASTM specs, compounding data, and request custom lot mill quotation.', 'gp-theme' ); ?></p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 18px; width: 100%;" id="all-products-browser-grid">
                <?php
                foreach ( $products_db as $key => $prod_item ) :
                    $is_curr = ( $key === $active_key );
                    $card_link = add_query_arg( 'product', $prod_item['slug'], home_url( '/product-detail/' ) );
                    $card_img = get_theme_file_uri( $prod_item['image'] );
                ?>
                    <a href="<?php echo esc_url( $card_link ); ?>" style="background: #ffffff; border: <?php echo $is_curr ? '2px solid #0097db' : '1.5px solid #e2e8f0'; ?>; border-radius: 12px; padding: 14px 16px; display: flex; align-items: center; gap: 14px; box-shadow: <?php echo $is_curr ? '0 6px 20px rgba(0,151,219,0.22)' : '0 2px 8px rgba(11,37,69,0.04)'; ?>; transition: all 0.24s cubic-bezier(0.16, 1, 0.3, 1); text-decoration: none; color: inherit; position: relative;">
                        <img src="<?php echo esc_url( $card_img ); ?>" alt="<?php echo esc_attr( $prod_item['name'] ); ?>" style="width: 60px; height: 60px; object-fit: cover; border-radius: 10px; flex-shrink: 0; border: 1.5px solid #e2e8f0;">
                        <div style="flex: 1; min-width: 0;">
                            <div style="display: flex; align-items: center; gap: 6px; margin-bottom: 3px;">
                                <span style="font-size: 0.68rem; font-weight: 700; color: <?php echo esc_attr( $prod_item['badgeColor'] ); ?>; text-transform: uppercase; letter-spacing: 0.04em;"><?php echo esc_html( $prod_item['badge'] ); ?></span>
                                <?php if ( $is_curr ) : ?>
                                    <span style="font-size: 0.62rem; font-weight: 700; background: #e0f2fe; color: #0284c7; padding: 1px 6px; border-radius: 4px;"><?php esc_html_e( 'ACTIVE', 'gp-theme' ); ?></span>
                                <?php endif; ?>
                            </div>
                            <h4 style="font-size: 0.94rem; font-weight: 800; color: #0b2545; margin: 0 0 3px; line-height: 1.3;">
                                <?php echo esc_html( $prod_item['name'] ); ?>
                            </h4>
                            <span style="font-size: 0.76rem; color: #64748b; font-weight: 500; display: block;"><?php echo esc_html( $prod_item['tagline'] ); ?></span>
                        </div>
                        <div style="display: inline-flex; align-items: center; justify-content: center; width: 32px; height: 32px; border-radius: 50%; background: <?php echo $is_curr ? '#0097db' : '#f1f5f9'; ?>; color: <?php echo $is_curr ? '#ffffff' : '#64748b'; ?>; flex-shrink: 0;">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<script id="gp-product-detail-js">
function handleProductInquiry(e) {
    e.preventDefault();
    const banner = document.getElementById('form-success-banner');
    if (banner) {
        banner.style.display = 'block';
        banner.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
    
    // Optional AJAX submission to WordPress contact handler
    if (window.jQuery && typeof gp_ajax_obj !== 'undefined') {
        const formData = new FormData();
        formData.append('action', 'gp_contact_form');
        formData.append('security', gp_ajax_obj.nonce || '');
        formData.append('product', document.getElementById('side-inq-product').value);
        formData.append('fullname', document.getElementById('side-inq-name').value);
        formData.append('company', document.getElementById('side-inq-company').value);
        formData.append('phone', document.getElementById('side-inq-phone').value);
        formData.append('email', document.getElementById('side-inq-email').value);
        formData.append('quantity', document.getElementById('side-inq-qty').value);
        formData.append('message', document.getElementById('side-inq-notes').value);
        
        fetch(gp_ajax_obj.ajax_url, {
            method: 'POST',
            body: formData
        }).catch(err => console.log('RFQ note: ', err));
    }
    
    e.target.reset();
}
</script>

<?php
get_footer();
