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
            'slug'        => 'ppcp-grey',
            'title'       => 'PPCP Grey Granules',
            'category'    => 'PPCP & Polypropylene',
            'cat_slug'    => 'ppcp-polypropylene',
            'desc'        => 'SRS Polymer PPCP Grey Granules are engineered from high-grade virgin and precision reprocessed polypropylene block copolymer. Compounded with specialized thermal and processing stabilizers to ensure excellent melt flow, minimal warpage, and high impact resistance under extreme vibration and temperature cycles.',
            'capacity'    => 'MFI: 10 – 12 g/10min (ASTM D1238, 230°C / 2.16 kg)',
            'material'    => 'Automotive PP Block Copolymer (PPCP)',
            'weight'      => '25 Kg Net Multiwall Bags / 1,000 Kg Jumbo',
            'neck_size'   => 'Uniform 3mm Dana Pellets',
            'color'       => 'Industrial Grey / Dark Grey',
            'application' => 'Automotive Battery Casings, Two-Wheeler Fairings, Heavy Logistics Crates, Electrical Enclosures',
            'badge'       => 'Automotive Grade',
            'image_file'  => 'granules-ppcp-grey.jpg',
            'density'     => '0.905 g/cm³ (ASTM D792)',
            'tensile'     => '27 MPa (ASTM D638)',
            'impact'      => '105 J/m (ASTM D256, 23°C)',
            'flex'        => '1,250 MPa (ASTM D790)',
            'elong'       => '55% (ASTM D638)',
        ),
        array(
            'slug'        => 'ppcp-impact',
            'title'       => 'PPCP Impact Copolymer Granules',
            'category'    => 'PPCP & Polypropylene',
            'cat_slug'    => 'ppcp-polypropylene',
            'desc'        => 'Designed for components requiring unmatched toughness and resistance to high-energy shocks. Incorporates rubber-phase ethylene-propylene elastomer compounding to eliminate brittle failure even in sub-zero winter temperatures.',
            'capacity'    => 'MFI: 8 – 14 g/10min (ASTM D1238, 230°C / 2.16 kg)',
            'material'    => 'Elastomer Modified Polypropylene Block Copolymer',
            'weight'      => '25 Kg Net Laminated Bags',
            'neck_size'   => 'Milky Translucent Pellets',
            'color'       => 'Natural Milky / Off-White',
            'application' => 'Auto Front & Rear Bumpers, Crash Trays, Cold-Room Bins, Chemical Vessels, Industrial Pallets',
            'badge'       => 'High Impact',
            'image_file'  => 'granules-natural-white.jpg',
            'density'     => '0.900 g/cm³ (ASTM D792)',
            'tensile'     => '25 MPa (ASTM D638)',
            'impact'      => '135 J/m (At -20°C: 60 J/m)',
            'flex'        => '1,150 MPa (ASTM D790)',
            'elong'       => '85% (ASTM D638)',
        ),
        array(
            'slug'        => 'ppcp-black',
            'title'       => 'PPCP Black Granules',
            'category'    => 'PPCP & Polypropylene',
            'cat_slug'    => 'ppcp-polypropylene',
            'desc'        => 'SRS Polymer Carbon Black PPCP Pellets offer exceptional UV stabilization and environmental stress cracking resistance. Highly favored by crate manufacturers across India for quick cycle times and superior stacking strength.',
            'capacity'    => 'MFI: 9 – 13 g/10min (ASTM D1238, 230°C / 2.16 kg)',
            'material'    => 'Carbon Black Compounded Block Copolymer',
            'weight'      => '25 Kg Bags / 1,000 Kg Jumbo Bags',
            'neck_size'   => 'Jet Black Uniform Pellets',
            'color'       => 'Jet Black (2.5% Furnace Carbon Dispersion)',
            'application' => 'Logistics Crates, Warehouse Pallets, Cable Spools, Underbody Automotive Covers, Harvest Bins',
            'badge'       => 'Crate Grade',
            'image_file'  => 'granules-ppcp-black.jpg',
            'density'     => '0.920 g/cm³ (ASTM D792)',
            'tensile'     => '29 MPa (ASTM D638)',
            'impact'      => '90 J/m (ASTM D256)',
            'flex'        => '1,350 MPa (ASTM D790)',
            'elong'       => '45% (ASTM D638)',
        ),
        array(
            'slug'        => 'pp-talc',
            'title'       => 'PP Talc Filled Granules',
            'category'    => 'PPCP & Polypropylene',
            'cat_slug'    => 'ppcp-polypropylene',
            'desc'        => 'Compounded with ultra-fine surface-treated micronized talc to significantly boost heat deflection temperature (HDT up to 125°C) and dimensional stability, ensuring zero post-mould shrinkage and warped edges.',
            'capacity'    => 'MFI: 12 – 16 g/10min (ASTM D1238, 230°C / 2.16 kg)',
            'material'    => '20% – 40% Micronized Talc Reinforced PP',
            'weight'      => '25 Kg Moisture Barrier Bags',
            'neck_size'   => 'Compounded High-Stiffness Pellets',
            'color'       => 'Natural Greyish White / Pre-colored',
            'application' => 'Washing Machine Tubs, Air Conditioner Grilles, Automotive Dashboard Backing, Microwave Parts',
            'badge'       => 'Compounded',
            'image_file'  => 'granules-talc-filled.jpg',
            'density'     => '1.050 – 1.250 g/cm³ (ASTM D792)',
            'tensile'     => '32 MPa (ASTM D638)',
            'impact'      => '45 J/m (ASTM D256)',
            'flex'        => '2,600 MPa (ASTM D790)',
            'elong'       => '18% (ASTM D638)',
        ),
        array(
            'slug'        => 'polypropylene-natural-white',
            'title'       => 'Polypropylene Natural White Granules',
            'category'    => 'PPCP & Polypropylene',
            'cat_slug'    => 'ppcp-polypropylene',
            'desc'        => 'Prime virgin homopolymer polypropylene granules with superior crystal clarity, high stiffness, and FDA-compliant purity. Engineered for ultra-clean food container injection and medical packaging.',
            'capacity'    => 'MFI: 11 – 15 g/10min (ASTM D1238)',
            'material'    => 'Prime Homopolymer Polypropylene (PPHP)',
            'weight'      => '25 Kg Laminated Bags',
            'neck_size'   => 'High Clarity Pellets',
            'color'       => 'Natural Translucent White',
            'application' => 'Food Containers, Household Bins, High-Speed Injection Furniture, Syringes',
            'badge'       => 'Virgin Grade',
            'image_file'  => 'granules-natural-white.jpg',
            'density'     => '0.905 g/cm³ (ASTM D792)',
            'tensile'     => '34 MPa (ASTM D638)',
            'impact'      => '35 J/m (ASTM D256)',
            'flex'        => '1,500 MPa (ASTM D790)',
            'elong'       => '110% (ASTM D638)',
        ),
        array(
            'slug'        => 'polypropylene-glass-filled',
            'title'       => 'Polypropylene Glass Filled Granules',
            'category'    => 'PPCP & Polypropylene',
            'cat_slug'    => 'ppcp-polypropylene',
            'desc'        => 'Reinforced with 10% to 30% chemically coupled E-glass fibers, achieving extreme mechanical rigidity, creep resistance, and elevated HDT up to 150°C for under-the-hood engine bay applications.',
            'capacity'    => 'MFI: 6 – 10 g/10min (ASTM D1238)',
            'material'    => '10% – 30% Chemically Coupled Glass Fiber PP',
            'weight'      => '25 Kg Moisture Barrier Bags',
            'neck_size'   => 'Reinforced Engineering Pellets',
            'color'       => 'Natural / Black / Custom Shade',
            'application' => 'Automotive Radiator Fans, Power Tool Housings, Pump Impellers, Industrial Brackets',
            'badge'       => 'Glass Reinforced',
            'image_file'  => 'granules-glass-filled.jpg',
            'density'     => '1.120 g/cm³ (ASTM D792)',
            'tensile'     => '65 MPa (ASTM D638)',
            'impact'      => '85 J/m (ASTM D256)',
            'flex'        => '3,800 MPa (ASTM D790)',
            'elong'       => '6% (ASTM D638)',
        ),
        array(
            'slug'        => 'abs-white',
            'title'       => 'ABS White Granules',
            'category'    => 'ABS, PMMA & Nylon',
            'cat_slug'    => 'abs-pmma-nylon',
            'desc'        => 'Premium engineering ABS polymer with brilliant high-gloss surface aesthetics, high Izod impact strength, and exceptional dimensional stability for white goods and electronics manufacturing.',
            'capacity'    => 'MFI: 18 – 25 g/10min @ 220°C',
            'material'    => 'High-Gloss Acrylonitrile Butadiene Styrene (ABS)',
            'weight'      => '25 Kg Multiwall Bags',
            'neck_size'   => 'High-Rigidity Pellets',
            'color'       => 'Pure High-Whiteness Ivory White',
            'application' => 'Electronic Appliance Casings, Refrigerator Trims, Vacuum Cleaner Bodies, Switchgear',
            'badge'       => 'High Gloss',
            'image_file'  => 'granules-pp-milky-white.jpg',
            'density'     => '1.045 g/cm³ (ASTM D792)',
            'tensile'     => '44 MPa (ASTM D638)',
            'impact'      => '210 J/m (ASTM D256)',
            'flex'        => '2,250 MPa (ASTM D790)',
            'elong'       => '28% (ASTM D638)',
        ),
        array(
            'slug'        => 'red-pmma',
            'title'       => 'Red PMMA Granules',
            'category'    => 'ABS, PMMA & Nylon',
            'cat_slug'    => 'abs-pmma-nylon',
            'desc'        => 'Automotive lighting grade polymethyl methacrylate with precision UV stabilizers, delivering crystal clear optical transmittance and certified chromaticity coordinates for automotive rear lamp lenses.',
            'capacity'    => 'MFI: 1.5 – 3.0 g/10min @ 230°C',
            'material'    => 'UV-Stabilized Polymethyl Methacrylate (PMMA)',
            'weight'      => '25 Kg Moisture Sealed Bags',
            'neck_size'   => 'High Transparency Pellets',
            'color'       => 'Ruby Red Optical Transmission',
            'application' => 'Automotive Tail Lights, Warning Beacon Domes, Instrument Cluster Covers',
            'badge'       => 'Optical Grade',
            'image_file'  => 'granules-red-pmma.jpg',
            'density'     => '1.180 g/cm³ (ASTM D792)',
            'tensile'     => '68 MPa (ASTM D638)',
            'impact'      => '20 J/m (ASTM D256)',
            'flex'        => '3,100 MPa (ASTM D790)',
            'elong'       => '4% (ASTM D638)',
        ),
        array(
            'slug'        => 'acrylic-granules',
            'title'       => 'Acrylic Granules',
            'category'    => 'ABS, PMMA & Nylon',
            'cat_slug'    => 'abs-pmma-nylon',
            'desc'        => 'Prime optical grade virgin acrylic pellets offering 92% light transmittance, superior surface hardness, and weather resistance for light guides, cosmetic packaging, and high-clarity lenses.',
            'capacity'    => 'MFI: 2.0 – 4.5 g/10min @ 230°C',
            'material'    => 'Prime Optical Grade Virgin Acrylic Resin',
            'weight'      => '25 Kg Sealed Bags',
            'neck_size'   => '92% Light Transmittance Pellets',
            'color'       => 'Crystal Clear Glass Transparency',
            'application' => 'Optical Lenses, Cosmetic Jars, Signage Boards, Light Guide Panels',
            'badge'       => 'Crystal Clear',
            'image_file'  => 'granules-clear-transparent.jpg',
            'density'     => '1.190 g/cm³ (ASTM D792)',
            'tensile'     => '72 MPa (ASTM D638)',
            'impact'      => '18 J/m (ASTM D256)',
            'flex'        => '3,200 MPa (ASTM D790)',
            'elong'       => '5% (ASTM D638)',
        ),
        array(
            'slug'        => 'nylon-black',
            'title'       => 'Nylon Black Granules',
            'category'    => 'ABS, PMMA & Nylon',
            'cat_slug'    => 'abs-pmma-nylon',
            'desc'        => 'Compounded Polyamide 6/66 engineering resin featuring high tensile strength, self-lubricating wear resistance, and high thermal stability for mechanical gears and heavy industrial bushings.',
            'capacity'    => 'MFI: 25 – 40 g/10min @ 275°C',
            'material'    => 'Polyamide 6 / 66 (PA6/PA66) Compounded',
            'weight'      => '25 Kg Aluminium Foil Barrier Bags',
            'neck_size'   => 'Thermal Resistant Pellets',
            'color'       => 'Jet Black Wear-Resistant',
            'application' => 'Precision Gears, Heavy Bushings, Cable Ties, Industrial Fasteners',
            'badge'       => 'Polyamide 6/66',
            'image_file'  => 'granules-nylon-black.jpg',
            'density'     => '1.140 g/cm³ (ASTM D792)',
            'tensile'     => '78 MPa (ASTM D638)',
            'impact'      => '65 J/m (ASTM D256)',
            'flex'        => '2,800 MPa (ASTM D790)',
            'elong'       => '35% (ASTM D638)',
        ),
        array(
            'slug'        => 'nylon-white',
            'title'       => 'Nylon White Granules',
            'category'    => 'ABS, PMMA & Nylon',
            'cat_slug'    => 'abs-pmma-nylon',
            'desc'        => 'Unfilled virgin Polyamide 6 pellets delivering superior dielectric insulation, high toughness, and smooth melt flow for industrial monofilament, zip ties, and precision electronic insulators.',
            'capacity'    => 'MFI: 30 – 45 g/10min @ 235°C',
            'material'    => 'Unfilled Virgin Polyamide 6 (PA6)',
            'weight'      => '25 Kg Foil Vacuum Sacks',
            'neck_size'   => 'Natural PA6 Dana Pellets',
            'color'       => 'Natural Translucent White',
            'application' => 'Industrial Monofilament, Zip Fasteners, Precision Electronic Insulators',
            'badge'       => 'Natural PA6',
            'image_file'  => 'granules-natural-white.jpg',
            'density'     => '1.130 g/cm³ (ASTM D792)',
            'tensile'     => '75 MPa (ASTM D638)',
            'impact'      => '70 J/m (ASTM D256)',
            'flex'        => '2,750 MPa (ASTM D790)',
            'elong'       => '50% (ASTM D638)',
        ),
        array(
            'slug'        => 'abs-black',
            'title'       => 'ABS Black Granules',
            'category'    => 'ABS, PMMA & Nylon',
            'cat_slug'    => 'abs-pmma-nylon',
            'desc'        => 'High-impact engineering ABS compounded with deep jet furnace black for superior scratch resistance, high surface gloss, and dimensional stability in automotive exterior mouldings and protective gear.',
            'capacity'    => 'MFI: 16 – 22 g/10min @ 220°C',
            'material'    => 'High-Impact Engineering ABS Terpolymer',
            'weight'      => '25 Kg Laminated Bags',
            'neck_size'   => 'Deep Jet Black Pellets',
            'color'       => 'High-Gloss Jet Black',
            'application' => 'Automotive Exterior Trims, Two-Wheeler Helmets, Industrial Tool Casings',
            'badge'       => 'Engineering Grade',
            'image_file'  => 'granules-ppcp-black.jpg',
            'density'     => '1.050 g/cm³ (ASTM D792)',
            'tensile'     => '46 MPa (ASTM D638)',
            'impact'      => '220 J/m (ASTM D256)',
            'flex'        => '2,300 MPa (ASTM D790)',
            'elong'       => '25% (ASTM D638)',
        ),
        array(
            'slug'        => 'abs-fr-granules',
            'title'       => 'ABS FR Plastic Granules',
            'category'    => 'ABS, PMMA & Nylon',
            'cat_slug'    => 'abs-pmma-nylon',
            'desc'        => 'UL94 V-0 certified flame retardant ABS compound formulated with eco-friendly halogen-free flame retardants. Delivers self-extinguishing safety and high glow wire index for EV charging stations and electrical meters.',
            'capacity'    => 'MFI: 14 – 20 g/10min @ 220°C',
            'material'    => 'Flame Retardant ABS (UL94 V-0 Certified)',
            'weight'      => '25 Kg Moisture Barrier Bags',
            'neck_size'   => 'Self-Extinguishing Pellets',
            'color'       => 'Grey / Black / Custom Electric Shade',
            'application' => 'EV Charger Enclosures, Electrical Switchgear, Digital Energy Meter Boxes',
            'badge'       => 'Flame Retardant V0',
            'image_file'  => 'granules-abs-fr.jpg',
            'density'     => '1.180 g/cm³ (ASTM D792)',
            'tensile'     => '42 MPa (ASTM D638)',
            'impact'      => '160 J/m (ASTM D256)',
            'flex'        => '2,400 MPa (ASTM D790)',
            'elong'       => '20% (ASTM D638)',
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
 * Get fallback client logos & OEM brand partners
 */
function gp_get_default_clients() {
    return array(
        array( 
            'name'   => 'Tata AutoComp Systems', 
            'tag'    => 'Tier-1 Automotive OEM Components', 
            'sector' => 'Automotive',
            'abbr'   => 'TATA AUTO',
        ),
        array( 
            'name'   => 'Havells India Ltd', 
            'tag'    => 'Electrical & Flame Retardant Plastics', 
            'sector' => 'Electrical',
            'abbr'   => 'HAVELLS',
        ),
        array( 
            'name'   => 'Supreme Industries', 
            'tag'    => 'Industrial Crates & Injection Moulding', 
            'sector' => 'Packaging & Crates',
            'abbr'   => 'SUPREME',
        ),
        array( 
            'name'   => 'Motherson Group (MSSL)', 
            'tag'    => 'High-Impact Engineering Polymers', 
            'sector' => 'Automotive',
            'abbr'   => 'MOTHERSON',
        ),
        array( 
            'name'   => 'Nilkamal Limited', 
            'tag'    => 'Material Handling & Heavy Duty Pallets', 
            'sector' => 'Packaging & Crates',
            'abbr'   => 'NILKAMAL',
        ),
        array( 
            'name'   => 'Astral Poly Technik', 
            'tag'    => 'High-Toughness Pipe & Fitting Polymers', 
            'sector' => 'Pipes & Infra',
            'abbr'   => 'ASTRAL',
        ),
        array( 
            'name'   => 'Godrej Appliances', 
            'tag'    => 'Consumer Electronics & White Goods', 
            'sector' => 'Appliances',
            'abbr'   => 'GODREJ',
        ),
        array( 
            'name'   => 'Finolex Industries', 
            'tag'    => 'Rigid PVC Compounds & Conduit Materials', 
            'sector' => 'Pipes & Infra',
            'abbr'   => 'FINOLEX',
        ),
        array( 
            'name'   => 'Time Technoplast', 
            'tag'    => 'Industrial Blow Moulding & Chemical Drums', 
            'sector' => 'Packaging & Crates',
            'abbr'   => 'TIME TECH',
        ),
        array( 
            'name'   => 'Milton (Hamilton Housewares)', 
            'tag'    => 'Food-Grade Thermoware & Housewares', 
            'sector' => 'Consumer Goods',
            'abbr'   => 'MILTON',
        ),
        array( 
            'name'   => 'Lumax Industries', 
            'tag'    => 'Automotive Lighting & Acrylic Polymers', 
            'sector' => 'Automotive',
            'abbr'   => 'LUMAX',
        ),
        array( 
            'name'   => 'Crompton Greaves', 
            'tag'    => 'Electrical Enclosures & Fan Blades', 
            'sector' => 'Electrical',
            'abbr'   => 'CROMPTON',
        ),
    );
}

/**
 * Get fallback official certificates & accreditations
 */
function gp_get_default_certificates() {
    return array(
        array(
            'id'           => 'iso-9001',
            'code'         => 'ISO 9001:2015',
            'title'        => 'Quality Management System',
            'category'     => 'Quality Assurance',
            'cert_no'      => 'QMS/SRS/2024/9081',
            'body'         => 'TUV SUD / IAF Accredited Registrar',
            'validity'     => 'Valid through Dec 2027',
            'scope'        => 'Manufacturing, compounding, laboratory testing & wholesale distribution of virgin and reprocessed plastic granules (PP, HDPE, ABS, PVC, LDPE).',
            'badge_color'  => '#0097db',
            'seal_style'   => 'gp-seal-blue',
            'points'       => array(
                'ASTM D1238 Batch-Wise MFI Testing',
                'Zero Particulate Impurity Guarantee',
                'Batch Traceability & COA Included',
            ),
        ),
        array(
            'id'           => 'iso-14001',
            'code'         => 'ISO 14001:2015',
            'title'        => 'Environmental Management System',
            'category'     => 'Sustainability',
            'cert_no'      => 'EMS/SRS/2024/1429',
            'body'         => 'JAS-ANZ Certified Registrar',
            'validity'     => 'Valid through Aug 2027',
            'scope'        => 'Eco-compliant closed-loop polymer reprocessing, energy-efficient twin-screw compounding, and zero hazardous discharge industrial operations.',
            'badge_color'  => '#10b981',
            'seal_style'   => 'gp-seal-green',
            'points'       => array(
                '100% Circular Polymer Sourcing',
                'Zero Industrial Effluent Discharge',
                'Low-Carbon Twin Screw Extrusion',
            ),
        ),
        array(
            'id'           => 'rohs-reach',
            'code'         => 'RoHS & REACH Directive',
            'title'        => 'EU Chemical Safety & Non-Toxic',
            'category'     => 'Chemical Safety',
            'cert_no'      => 'CHM/SRS/2024/7740',
            'body'         => 'SGS International Laboratory Verified',
            'validity'     => 'Annual Lot Compliance Audited',
            'scope'        => 'Laboratory tested free from Lead (Pb), Cadmium (Cd), Mercury (Hg), Cr(VI), PBBs, PBDEs and 235+ EU REACH SVHC hazardous compounds.',
            'badge_color'  => '#6366f1',
            'seal_style'   => 'gp-seal-purple',
            'points'       => array(
                'Heavy Metal-Free Raw Formulations',
                'Suitable for Toy & Consumer Molding',
                'Full Export Regulatory Compliance',
            ),
        ),
        array(
            'id'           => 'astm-lab',
            'code'         => 'ASTM Testing Standards',
            'title'        => 'In-House Polymer Testing Lab',
            'category'     => 'Laboratory Accreditation',
            'cert_no'      => 'LAB/SRS/2024/5112',
            'body'         => 'NABL Traceable Test Equipment',
            'validity'     => 'Continuous In-House QA/QC',
            'scope'        => 'Standardized digital testing for Melt Flow Index (ASTM D1238), Density & Specific Gravity (ASTM D792), Izod Impact (ASTM D256) and Moisture (<0.05%).',
            'badge_color'  => '#ef233c',
            'seal_style'   => 'gp-seal-red',
            'points'       => array(
                'Computerized Rheology Testing',
                'Moisture Content < 0.05% Controlled',
                'Tensile & Elongation Yield Tested',
            ),
        ),
        array(
            'id'           => 'bis-is',
            'code'         => 'BIS / IS Standards',
            'title'        => 'Bureau of Indian Standards',
            'category'     => 'National Benchmark',
            'cert_no'      => 'BIS/SRS/2024/3028',
            'body'         => 'Government of India Standards',
            'validity'     => 'Certified Supply Standards',
            'scope'        => 'Conforming to IS 10951 (Polypropylene Moulding Materials) and IS 7328 (High Density Polyethylene Materials) for heavy engineering applications.',
            'badge_color'  => '#f59e0b',
            'seal_style'   => 'gp-seal-gold',
            'points'       => array(
                'Standard Raw Material Compliance',
                'High ESCR & Environmental Resilience',
                'Approved for Public & Infra Tenders',
            ),
        ),
        array(
            'id'           => 'msme-zed',
            'code'         => 'MSME ZED Gold Certified',
            'title'        => 'Zero Defect Zero Effect Standard',
            'category'     => 'Government Certification',
            'cert_no'      => 'ZED/SRS/2024/8831',
            'body'         => 'Ministry of MSME, Govt of India',
            'validity'     => 'National Excellence Awardee',
            'scope'        => 'Recognized for world-class lean manufacturing, systematic defect prevention, environmental preservation, and standardized 5S plant safety.',
            'badge_color'  => '#0d9488',
            'seal_style'   => 'gp-seal-teal',
            'points'       => array(
                'Zero-Defect Quality Manufacturing',
                'Strict 5S Industrial Plant Protocols',
                'Govt Recognized Export-Ready Unit',
            ),
        ),
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

    $pages_def = array(
        'home' => array(
            'title'    => 'Home',
            'template' => '',
            'is_front' => true,
        ),
        'about' => array(
            'title'    => 'About Us',
            'template' => 'page-templates/template-about.php',
            'is_front' => false,
        ),
        'products' => array(
            'title'    => 'Products',
            'template' => 'page-templates/template-products.php',
            'is_front' => false,
        ),
        'testing' => array(
            'title'    => 'ASTM Lab Standards',
            'template' => 'page-templates/template-testing.php',
            'is_front' => false,
        ),
        'certificates' => array(
            'title'    => 'Official Certifications',
            'template' => 'page-templates/template-certificates.php',
            'is_front' => false,
        ),
        'industries' => array(
            'title'    => 'Industries Served',
            'template' => 'page-templates/template-industries.php',
            'is_front' => false,
        ),
        'product-detail' => array(
            'title'    => 'Product Technical Specifications',
            'template' => 'page-templates/template-product-detail.php',
            'is_front' => false,
        ),
        'contact' => array(
            'title'    => 'Contact Us',
            'template' => 'page-templates/template-contact.php',
            'is_front' => false,
        ),
        'blog' => array(
            'title'    => 'Blog',
            'template' => '',
            'is_posts' => true,
        ),
    );

    $home_id = 0;
    $blog_id = 0;

    foreach ( $pages_def as $slug => $data ) {
        $page = get_page_by_path( $slug );
        if ( ! $page && $slug === 'about' ) {
            $page = get_page_by_path( 'about-us' );
        }
        if ( ! $page && $slug === 'contact' ) {
            $page = get_page_by_path( 'contact-us' );
        }
        if ( ! $page && $slug === 'blog' ) {
            $page = get_page_by_path( 'news' );
        }

        if ( ! $page ) {
            $page_id = wp_insert_post( array(
                'post_title'     => $data['title'],
                'post_name'      => $slug,
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
            ) );
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                $pages_created++;
            }
        } else {
            $page_id = $page->ID;
        }

        if ( $page_id && ! is_wp_error( $page_id ) ) {
            if ( ! empty( $data['template'] ) ) {
                update_post_meta( $page_id, '_wp_page_template', $data['template'] );
            }
            if ( ! empty( $data['is_front'] ) ) {
                $home_id = $page_id;
            }
            if ( ! empty( $data['is_posts'] ) ) {
                $blog_id = $page_id;
            }
        }
    }

    // Auto-configure Reading Settings
    if ( $home_id ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home_id );
    }
    if ( $blog_id ) {
        update_option( 'page_for_posts', $blog_id );
    }

    return array(
        'created'  => $pages_created,
        'home_id'  => $home_id,
        'blog_id'  => $blog_id,
    );
}

/**
 * 2. Import Demo Products (All 13 Polymer Grades with Full Technical Data)
 */
function gp_import_demo_products() {
    $products = gp_get_default_products();
    $count    = 0;

    foreach ( $products as $p ) {
        $slug     = ! empty( $p['slug'] ) ? $p['slug'] : sanitize_title( $p['title'] );
        $existing = get_page_by_path( $slug, OBJECT, 'gp_product' );
        if ( ! $existing ) {
            $existing = get_page_by_path( sanitize_title( $p['title'] ), OBJECT, 'gp_product' );
        }

        $post_content = '<p>' . esc_html( $p['desc'] ) . '</p>' .
            '<h3>Technical Polymer Specifications</h3>' .
            '<ul>' .
            '<li><strong>Melt Flow Index:</strong> ' . esc_html( $p['capacity'] ) . '</li>' .
            '<li><strong>Base Polymer:</strong> ' . esc_html( $p['material'] ) . '</li>' .
            '<li><strong>Color Options:</strong> ' . esc_html( $p['color'] ) . '</li>' .
            '<li><strong>Primary Applications:</strong> ' . esc_html( $p['application'] ) . '</li>' .
            '<li><strong>Standard Packaging:</strong> ' . esc_html( $p['weight'] ) . '</li>' .
            ( ! empty( $p['density'] ) ? '<li><strong>Density:</strong> ' . esc_html( $p['density'] ) . '</li>' : '' ) .
            ( ! empty( $p['tensile'] ) ? '<li><strong>Tensile Yield:</strong> ' . esc_html( $p['tensile'] ) . '</li>' : '' ) .
            ( ! empty( $p['impact'] )  ? '<li><strong>Izod Impact:</strong> ' . esc_html( $p['impact'] ) . '</li>' : '' ) .
            ( ! empty( $p['flex'] )    ? '<li><strong>Flexural Modulus:</strong> ' . esc_html( $p['flex'] ) . '</li>' : '' ) .
            ( ! empty( $p['elong'] )   ? '<li><strong>Elongation at Break:</strong> ' . esc_html( $p['elong'] ) . '</li>' : '' ) .
            '</ul>' .
            '<h3>Quality Assurance & Certification</h3>' .
            '<p>Manufactured and compounded under ISO 9001:2015 and ASTM D1238 precision testing standards. Every dispatch includes a comprehensive Certificate of Analysis (COA) guaranteeing zero particulate impurities, consistent melt flow, and complete lot traceability.</p>';

        if ( ! $existing ) {
            $post_id = wp_insert_post( array(
                'post_title'   => $p['title'],
                'post_name'    => $slug,
                'post_content' => $post_content,
                'post_excerpt' => $p['desc'],
                'post_status'  => 'publish',
                'post_type'    => 'gp_product',
            ) );
            if ( ! is_wp_error( $post_id ) ) {
                $count++;
            }
        } else {
            $post_id = $existing->ID;
            wp_update_post( array(
                'ID'           => $post_id,
                'post_title'   => $p['title'],
                'post_content' => $post_content,
                'post_excerpt' => $p['desc'],
            ) );
            $count++;
        }

        if ( $post_id && ! is_wp_error( $post_id ) ) {
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
            if ( ! empty( $p['density'] ) ) update_post_meta( $post_id, '_gp_density', $p['density'] );
            if ( ! empty( $p['tensile'] ) ) update_post_meta( $post_id, '_gp_tensile', $p['tensile'] );
            if ( ! empty( $p['impact'] ) )  update_post_meta( $post_id, '_gp_impact', $p['impact'] );
            if ( ! empty( $p['flex'] ) )    update_post_meta( $post_id, '_gp_flex', $p['flex'] );
            if ( ! empty( $p['elong'] ) )   update_post_meta( $post_id, '_gp_elong', $p['elong'] );

            // Attach image
            $img_filename = ! empty( $p['image_file'] ) ? $p['image_file'] : 'granules-ppcp-grey.jpg';
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

            // Set Category safely
            if ( ! function_exists( 'wp_create_category' ) && defined( 'ABSPATH' ) && file_exists( ABSPATH . 'wp-admin/includes/taxonomy.php' ) ) {
                require_once ABSPATH . 'wp-admin/includes/taxonomy.php';
            }
            $cat_id = 0;
            $existing_cat = term_exists( $p['category'], 'category' );
            if ( $existing_cat ) {
                $cat_id = is_array( $existing_cat ) ? (int) $existing_cat['term_id'] : (int) $existing_cat;
            } else {
                $new_cat = wp_insert_term( $p['category'], 'category' );
                if ( ! is_wp_error( $new_cat ) && ! empty( $new_cat['term_id'] ) ) {
                    $cat_id = (int) $new_cat['term_id'];
                } elseif ( function_exists( 'wp_create_category' ) ) {
                    $res = wp_create_category( $p['category'] );
                    if ( $res && ! is_wp_error( $res ) ) {
                        $cat_id = (int) $res;
                    }
                }
            }
            if ( $cat_id > 0 ) {
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

    // Clear any previous menu items to ensure a clean, authentic structure on re-import
    $existing_items = wp_get_nav_menu_items( $menu_id );
    if ( ! empty( $existing_items ) ) {
        foreach ( $existing_items as $item ) {
            wp_delete_post( $item->ID, true );
        }
    }

    // 1. Home
    wp_update_nav_menu_item( $menu_id, 0, array(
        'menu-item-title'  => __( 'Home', 'gp-theme' ),
        'menu-item-url'    => home_url( '/' ),
        'menu-item-status' => 'publish',
    ) );

    // 2. Products (Parent with Mega-Menu children)
    $products_page = get_page_by_path( 'products' );
    $products_url  = $products_page ? get_permalink( $products_page->ID ) : home_url( '/products/' );
    $prod_item_id  = wp_update_nav_menu_item( $menu_id, 0, array(
        'menu-item-title'  => __( 'Products', 'gp-theme' ),
        'menu-item-url'    => $products_url,
        'menu-item-status' => 'publish',
    ) );

    // Add all 13 products as child items under Products
    if ( $prod_item_id && ! is_wp_error( $prod_item_id ) ) {
        $products_data = gp_get_default_products();
        foreach ( $products_data as $p ) {
            $p_slug = ! empty( $p['slug'] ) ? $p['slug'] : sanitize_title( $p['title'] );
            $detail_page = get_page_by_path( 'product-detail' );
            if ( $detail_page ) {
                $p_url = add_query_arg( 'product', $p_slug, get_permalink( $detail_page->ID ) );
            } else {
                $p_url = home_url( '/product-detail/?product=' . $p_slug );
            }
            wp_update_nav_menu_item( $menu_id, 0, array(
                'menu-item-title'     => $p['title'],
                'menu-item-url'       => $p_url,
                'menu-item-parent-id' => $prod_item_id,
                'menu-item-status'    => 'publish',
            ) );
        }
    }

    // 3. About Us / Mill
    $about_page = get_page_by_path( 'about' ) ?: get_page_by_path( 'about-us' );
    $about_url  = $about_page ? get_permalink( $about_page->ID ) : home_url( '/about/' );
    wp_update_nav_menu_item( $menu_id, 0, array(
        'menu-item-title'  => __( 'About Us', 'gp-theme' ),
        'menu-item-url'    => $about_url,
        'menu-item-status' => 'publish',
    ) );

    // 4. ASTM Lab Standards
    $testing_page = get_page_by_path( 'testing' );
    $testing_url  = $testing_page ? get_permalink( $testing_page->ID ) : home_url( '/testing/' );
    wp_update_nav_menu_item( $menu_id, 0, array(
        'menu-item-title'  => __( 'ASTM Lab', 'gp-theme' ),
        'menu-item-url'    => $testing_url,
        'menu-item-status' => 'publish',
    ) );

    // 5. Official Certifications
    $cert_page = get_page_by_path( 'certificates' );
    $cert_url  = $cert_page ? get_permalink( $cert_page->ID ) : home_url( '/certificates/' );
    wp_update_nav_menu_item( $menu_id, 0, array(
        'menu-item-title'  => __( 'Certifications', 'gp-theme' ),
        'menu-item-url'    => $cert_url,
        'menu-item-status' => 'publish',
    ) );

    // 6. Industries Served
    $ind_page = get_page_by_path( 'industries' );
    $ind_url  = $ind_page ? get_permalink( $ind_page->ID ) : home_url( '/industries/' );
    wp_update_nav_menu_item( $menu_id, 0, array(
        'menu-item-title'  => __( 'Industries', 'gp-theme' ),
        'menu-item-url'    => $ind_url,
        'menu-item-status' => 'publish',
    ) );

    // 7. Contact Us
    $contact_page = get_page_by_path( 'contact' ) ?: get_page_by_path( 'contact-us' );
    $contact_url  = $contact_page ? get_permalink( $contact_page->ID ) : home_url( '/contact/' );
    wp_update_nav_menu_item( $menu_id, 0, array(
        'menu-item-title'  => __( 'Contact', 'gp-theme' ),
        'menu-item-url'    => $contact_url,
        'menu-item-status' => 'publish',
    ) );

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
    // 0. Update Site Title & Tagline to Authentic SRS POLYMER
    update_option( 'blogname', 'SRS POLYMER' );
    update_option( 'blogdescription', 'Prime Virgin & Recycled Plastic Granules (Dana) | ISO 9001:2015' );

    // Configure core theme mods
    set_theme_mod( 'gp_company_name', 'SRS POLYMER' );
    set_theme_mod( 'gp_company_tagline', 'POLYMER RECYCLING & MANUFACTURING' );
    set_theme_mod( 'gp_company_division', 'SRS POLYMERS & DANA COMPOUNDING' );
    set_theme_mod( 'gp_company_phone', '+91 99999 99999' );
    set_theme_mod( 'gp_company_email', 'sales@srspolymer.com' );
    set_theme_mod( 'gp_company_address', 'Plot No. 42, Sector 8, IMT Manesar, Gurugram, Haryana - 122051' );
    set_theme_mod( 'gp_company_hours', 'Mon - Sat: 9:00 AM - 7:00 PM' );
    set_theme_mod( 'gp_whatsapp_number', '919999999999' );
    set_theme_mod( 'gp_whatsapp_message', 'Hello SRS Polymer, I am interested in your polymer granules catalog.' );

    // Ensure clean permalinks structure
    if ( get_option( 'permalink_structure' ) !== '/%postname%/' ) {
        update_option( 'permalink_structure', '/%postname%/' );
    }

    // 1. Pages (All 7 core templates)
    $pages_data = gp_import_demo_pages();

    // 2. Products (All 13 Polymer Grades with ASTM Specs)
    $products_count = gp_import_demo_products();

    // 3. Blog Posts (Technical polymer insights)
    $posts_count = gp_import_demo_posts();

    // 4. Menus (Full 7-item nav with 13 products)
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
 * Theme Activation Hook
 */
function gp_theme_activation_flag() {
    // Do not auto-import demo data on activation to avoid overwriting user content
    update_option( 'gp_show_activation_notice', 0 );
}
add_action( 'after_switch_theme', 'gp_theme_activation_flag' );

/**
 * Handle 1-Click Instant Setup Request from Admin (Manual only)
 */
function gp_handle_instant_setup_request() {
    if ( ! is_admin() || ! current_user_can( 'manage_options' ) ) {
        return;
    }

    if ( isset( $_GET['gp_run_instant_setup'] ) && check_admin_referer( 'gp_instant_setup_action', 'gp_nonce' ) ) {
        gp_run_full_demo_import();
        wp_safe_redirect( add_query_arg( array( 'gp_setup_done' => '1' ), remove_query_arg( array( 'gp_run_instant_setup', 'gp_nonce' ) ) ) );
        exit;
    }
}
add_action( 'admin_init', 'gp_handle_instant_setup_request' );

// Global auto-install notice removed to keep admin clean and prevent forced setup.
// Users can still optionally import demo content from Appearance -> Import Demo Data.

/**
 * Render Demo Import Admin Page
 */
function gp_render_demo_import_page() {
    $import_result = null;

    if ( isset( $_POST['gp_do_import'] ) && check_admin_referer( 'gp_import_demo_action', 'gp_demo_nonce' ) ) {
        $import_result = gp_run_full_demo_import();
    }

    $is_imported = get_option( 'gp_demo_imported' );
    $posts_count = wp_count_posts( 'post' ) ? wp_count_posts( 'post' )->publish : 0;
    $prod_count  = wp_count_posts( 'gp_product' ) ? wp_count_posts( 'gp_product' )->publish : 0;
    $pages_count = wp_count_posts( 'page' ) ? wp_count_posts( 'page' )->publish : 0;
    ?>
    <div class="wrap" style="max-width: 900px; margin-top: 25px;">
        <div style="background: linear-gradient(135deg, #0b2545 0%, #134074 100%); color: #fff; padding: 26px 30px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 10px 25px rgba(11,37,69,0.15);">
            <div style="display: flex; align-items: center; gap: 15px;">
                <span style="font-size: 36px;">🏭</span>
                <div>
                    <h1 style="color: #fff; margin: 0; font-size: 24px; font-weight: 700;">SRS Polymer — 1-Click Demo Importer</h1>
                    <p style="margin: 6px 0 0 0; color: #8ecae6; font-size: 14px;">Quickly import the 100% authentic original theme: all 13 polymer products with ASTM datasheets, 7 dedicated pages, technical blog articles, and primary navigation mega-menu.</p>
                </div>
            </div>
        </div>

        <?php if ( $import_result ) : ?>
            <div class="notice notice-success" style="padding: 16px 20px; border-left-color: #2a9d8f; background: #e8f8f5; border-radius: 8px; margin-bottom: 25px;">
                <h3 style="margin: 0 0 8px 0; color: #155724; font-size: 17px;">🎉 Authentic SRS Polymer Demo Content Imported Successfully!</h3>
                <p style="margin: 0 0 12px 0; color: #222; font-size: 14px;">Your WordPress website has been populated with the complete industrial factory content:</p>
                <ul style="list-style: disc; margin-left: 20px; color: #2d3748; line-height: 1.8;">
                    <li><strong>Site Identity & Theme Mods:</strong> Site title updated to "SRS POLYMER" with ISO 9001:2015 tagline.</li>
                    <li><strong>Pages Created & Assigned:</strong> <?php echo intval( $import_result['pages'] ); ?> pages (Home, Products, About Us, ASTM Lab Standards, Official Certifications, Industries Served, Contact Us).</li>
                    <li><strong>Products Added:</strong> <?php echo intval( $import_result['products'] ); ?> polymer grades (All 13 PPCP, PP Talc, ABS, PMMA, Acrylic, and Nylon resins with full ASTM testing metrics).</li>
                    <li><strong>Blog Articles Added:</strong> <?php echo intval( $import_result['posts'] ); ?> technical guides with high-res compounding images.</li>
                    <li><strong>Navigation Menu:</strong> Header primary menu created with full 7 navigation items & 13-grade dropdown!</li>
                    <li><strong>Reading Settings:</strong> Front page assigned to Home, Posts page assigned to Blog.</li>
                </ul>
                <div style="margin-top: 15px; display: flex; gap: 10px;">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" class="button button-primary" style="background: #0077b6; border-color: #005f92; font-weight: 600;">
                        🌐 View Live Website
                    </a>
                    <a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>" class="button button-secondary">
                        🧭 Manage Menus
                    </a>
                    <a href="<?php echo esc_url( admin_url( 'edit.php?post_type=gp_product' ) ); ?>" class="button button-secondary">
                        📦 View Products (13)
                    </a>
                </div>
            </div>
        <?php endif; ?>

        <!-- Import Details Card Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-bottom: 25px;">
            <div style="background: #fff; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0; text-align: center;">
                <span style="font-size: 28px;">📄</span>
                <h3 style="margin: 10px 0 4px 0; font-size: 16px;">7 Core Pages</h3>
                <p style="margin: 0; color: #64748b; font-size: 13px;">Home, Products, About, ASTM Lab, Certs, Industries, Contact</p>
                <div style="margin-top: 8px; font-weight: 700; color: #0077b6;"><?php echo intval( $pages_count ); ?> Current Pages</div>
            </div>

            <div style="background: #fff; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0; text-align: center;">
                <span style="font-size: 28px;">📦</span>
                <h3 style="margin: 10px 0 4px 0; font-size: 16px;">13 Polymer Grades</h3>
                <p style="margin: 0; color: #64748b; font-size: 13px;">PPCP, PP Talc, ABS, PMMA, Acrylic, Nylon PA6/66</p>
                <div style="margin-top: 8px; font-weight: 700; color: #0077b6;"><?php echo intval( $prod_count ); ?> Current Products</div>
            </div>

            <div style="background: #fff; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0; text-align: center;">
                <span style="font-size: 28px;">📰</span>
                <h3 style="margin: 10px 0 4px 0; font-size: 16px;">5 Blog Articles</h3>
                <p style="margin: 0; color: #64748b; font-size: 13px;">MFI testing, recycling, and compounding insights</p>
                <div style="margin-top: 8px; font-weight: 700; color: #0077b6;"><?php echo intval( $posts_count ); ?> Current Posts</div>
            </div>

            <div style="background: #fff; padding: 18px; border-radius: 8px; border: 1px solid #e2e8f0; text-align: center;">
                <span style="font-size: 28px;">🧭</span>
                <h3 style="margin: 10px 0 4px 0; font-size: 16px;">Mega-Menu</h3>
                <p style="margin: 0; color: #64748b; font-size: 13px;">7 main links + 13-grade product catalog mega menu</p>
                <div style="margin-top: 8px; font-weight: 700; color: #2a9d8f;">Primary Location</div>
            </div>
        </div>

        <!-- Main Action Box -->
        <div style="background: #fff; padding: 25px 30px; border-radius: 10px; border: 1px solid #e2e8f0; box-shadow: 0 2px 10px rgba(0,0,0,0.04);">
            <h2 style="margin-top: 0; font-size: 18px; color: #0b2545;">Ready to Import?</h2>
            <p style="color: #4a5568; line-height: 1.6; font-size: 14px;">
                Clicking the button below will configure site identity ("SRS POLYMER"), generate and assign all 7 page templates, seed all 13 polymer grades with complete ASTM datasheets and images, publish technical blog posts, and build the primary header navigation mega-menu matching the original static site.
            </p>

            <form method="post" onsubmit="return confirm('Do you want to import complete authentic demo data (all 7 pages, 13 polymer products, blogs, and mega-menu)?');">
                <?php wp_nonce_field( 'gp_import_demo_action', 'gp_demo_nonce' ); ?>
                <button type="submit" name="gp_do_import" value="1" class="button button-primary button-hero" style="background: #0077b6; border-color: #005f92; font-weight: 700; padding: 8px 32px; height: auto; font-size: 16px; border-radius: 6px;">
                    🚀 <?php echo $is_imported ? esc_html__( 'Re-Import / Sync Demo Content', 'gp-theme' ) : esc_html__( 'Import Complete Demo Data', 'gp-theme' ); ?>
                </button>
            </form>
        </div>
    </div>
    <?php
}
