<?php
/**
 * Standalone Static HTML Generator for Local Preview
 * Renders header.php + templates + footer.php with mock WordPress environment
 * Generates: index.html, about.html, products.html, testing.html, certificates.html, industries.html, contact.html
 */

define( 'ABSPATH', __DIR__ . '/' );

// Mock WordPress Helper Functions
function esc_html__( $text, $domain = 'default' ) { return htmlspecialchars( (string) $text, ENT_QUOTES, 'UTF-8' ); }
function esc_html_e( $text, $domain = 'default' ) { echo esc_html__( $text, $domain ); }
function esc_attr__( $text, $domain = 'default' ) { return htmlspecialchars( (string) $text, ENT_QUOTES, 'UTF-8' ); }
function esc_attr_e( $text, $domain = 'default' ) { echo esc_attr__( $text, $domain ); }
function esc_url( $url ) { return htmlspecialchars( (string) $url, ENT_QUOTES, 'UTF-8' ); }
function esc_attr( $text ) { return htmlspecialchars( (string) $text, ENT_QUOTES, 'UTF-8' ); }
function esc_html( $text ) { return htmlspecialchars( (string) $text, ENT_QUOTES, 'UTF-8' ); }

function add_action( $hook, $callback, $priority = 10, $accepted_args = 1 ) {}
function add_filter( $hook, $callback, $priority = 10, $accepted_args = 1 ) {}
function wp_create_nonce( $action = -1 ) { return 'mock_nonce_123'; }
function check_ajax_referer() { return true; }
function wp_send_json_success( $data = null ) {}
function wp_send_json_error( $data = null ) {}
function wp_unslash( $val ) { return $val; }
function sanitize_text_field( $str ) { return trim( strip_tags( $str ) ); }
function sanitize_email( $email ) { return trim( $email ); }
function wp_mail() { return true; }
function wp_kses_post( $str ) { return $str; }
function wp_kses( $str, $allowed ) { return $str; }
function number_format_i18n( $num, $dec = 0 ) { return number_format( $num, $dec ); }

function language_attributes() { echo 'lang="en"'; }
function bloginfo( $show = '' ) { if ( $show === 'charset' ) echo 'UTF-8'; else echo ''; }
function has_site_icon() { return false; }
function get_template_directory_uri() { return '.'; }
function get_template_directory() { return __DIR__; }
function get_theme_file_uri( $file = '' ) { return './' . ltrim( $file, '/' ); }
function get_theme_file_path( $file = '' ) { return __DIR__ . '/' . ltrim( $file, '/' ); }

$GLOBALS['is_front_page'] = true;
$GLOBALS['current_page_slug'] = '';

function home_url( $path = '' ) {
    $trimmed = trim( (string) $path, '/' );
    if ( empty( $trimmed ) || $trimmed === '#' ) {
        return 'index.html';
    }
    if ( strpos( $trimmed, '#' ) === 0 ) {
        return 'index.html' . $trimmed;
    }
    if ( strpos( $trimmed, '#' ) !== false ) {
        $parts = explode( '#', $trimmed, 2 );
        $slug = trim( $parts[0], '/' );
        $hash = '#' . $parts[1];
        return ( $slug === '' ? 'index.html' : $slug . '.html' ) . $hash;
    }
    return $trimmed . '.html';
}

function is_front_page() { return ! empty( $GLOBALS['is_front_page'] ); }
function is_home() { return false; }
function is_singular( $post_type = '' ) { return false; }
function is_category() { return false; }
function is_tag() { return false; }
function is_page( $page = '' ) {
    if ( empty( $page ) ) return ! is_front_page();
    return $GLOBALS['current_page_slug'] === $page;
}
function is_page_template( $tpl = '' ) {
    return strpos( $tpl, $GLOBALS['current_page_slug'] ) !== false;
}
function is_post_type_archive( $pt = '' ) { return false; }
function is_tax( $taxonomy = '', $term = '' ) { return false; }
function get_post_type_archive_link( $pt = '' ) { return 'products.html'; }
function get_term_link( $term, $tax = '' ) { return 'products.html'; }
function get_terms( $args = [] ) {
    return [
        (object)[ 'term_id' => 1, 'name' => 'PP Granules (PPCP/Homopolymer)', 'slug' => 'pp-granules' ],
        (object)[ 'term_id' => 2, 'name' => 'HDPE Granules (Blow/Injection)', 'slug' => 'hdpe-granules' ],
        (object)[ 'term_id' => 3, 'name' => 'ABS Engineering Pellets', 'slug' => 'abs-granules' ],
        (object)[ 'term_id' => 4, 'name' => 'PVC & Color Masterbatches', 'slug' => 'pvc-masterbatches' ],
    ];
}
function is_wp_error( $thing ) { return false; }
function is_404() { return false; }
function is_search() { return false; }
function is_archive() { return false; }
function get_option( $opt, $default = false ) { return $default; }
function get_permalink( $id = 0 ) { return '#blog'; }
function has_custom_logo() { return false; }
function wp_get_attachment_image_src( $id, $size = 'full' ) { return false; }
function the_custom_logo() {}
function body_class( $class = '' ) {
    $prefix = is_front_page() ? 'home page-template-default ' : 'page page-template ';
    echo 'class="' . $prefix . esc_attr( $class ) . '"';
}
function wp_body_open() {}
function has_nav_menu( $location = '' ) { return false; }
function wp_nav_menu( $args = [] ) { return; }
function locate_template( $templates ) { return ''; }
function get_template_part( $slug, $name = null ) {}

function gp_breadcrumbs() {
    $title = ucfirst( $GLOBALS['current_page_slug'] ?: 'Page' );
    echo '<nav class="gp-breadcrumbs" aria-label="Breadcrumb" style="margin-top: 15px; font-size: 0.85rem; color: rgba(255,255,255,0.7);"><a href="index.html" style="color: #0097db; text-decoration: none;">Home</a> <span style="margin: 0 6px;">›</span> <span style="color: #ffffff;">' . esc_html( $title ) . '</span></nav>';
}

class WP_Query {
    public $posts = [];
    public $post_count = 0;
    public function __construct( $args = [] ) { $this->posts = []; $this->post_count = 0; }
    public function have_posts() { return false; }
    public function the_post() {}
    public function rewind_posts() {}
}
function wp_reset_postdata() {}
function have_posts() { return false; }
function the_post() {}
function the_title() {}
function the_permalink() {}
function the_excerpt() {}
function has_post_thumbnail() { return false; }
function the_post_thumbnail() {}
function get_the_date( $format = 'd M Y' ) { return date( $format ); }
function get_post_meta() { return ''; }

function get_theme_mod( $name, $default = false ) {
    $defaults = [
        'gp_company_name'       => 'SRS POLYMER',
        'gp_company_division'   => 'Shri Ram Sharnam Overseas • Green Polytech',
        'gp_company_short'      => 'SRS',
        'gp_company_tagline'    => 'ISO 9001:2015 Certified Polymer Compounding',
        'gp_company_phone'      => '+91-8591585497',
        'gp_company_email'      => 'info@srspolymer.com',
        'gp_company_address'    => 'Plot No. 42, Sector 8, IMT Manesar, Gurugram, Haryana - 122050',
        'gp_whatsapp_number'    => '918591585497',
        'gp_whatsapp_message'   => 'Hello SRS Polymer! I am looking for quotation and technical data sheet for plastic granules (Dana).',
        'gp_social_linkedin'    => 'https://in.linkedin.com/company/srs-polymer',
        'gp_social_facebook'    => 'https://www.facebook.com/srspolymer/',
        'gp_social_instagram'   => 'https://www.instagram.com/srspolymer/',
        'gp_social_youtube'     => 'https://www.youtube.com/@srspolymer',
        'gp_footer_about'       => 'SRS Polymer (Shri Ram Sharnam Overseas - Green Polytech) is an ISO 9001:2015 certified polymer compounding mill delivering prime virgin and engineered recycled plastic granules (dana) with precise MFI testing across PAN-India.',
        'gp_enable_whatsapp'    => true,
        'gp_enable_watermark'   => false,
    ];
    return isset( $defaults[ $name ] ) ? $defaults[ $name ] : $default;
}

function wp_head() {
    echo "    <!-- Google Fonts -->\n";
    echo "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\n";
    echo "    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\n";
    echo "    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&family=Rajdhani:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap\" rel=\"stylesheet\">\n";
    echo "    <!-- Theme CSS -->\n";
    echo "    <link rel=\"stylesheet\" href=\"assets/css/main.css\">\n";
    echo "    <link rel=\"stylesheet\" href=\"style.css\">\n";
}

function wp_footer() {
    echo "    <script src=\"assets/js/main.js\"></script>\n";
}

// Include demo data functions
require_once __DIR__ . '/inc/demo-data.php';

// Custom get_header and get_footer overrides
function get_header() {
    require __DIR__ . '/header.php';
}

function get_footer() {
    require __DIR__ . '/footer.php';
}

// Pages to render
$pages_map = [
    'index.html'        => [ 'file' => __DIR__ . '/front-page.php',                      'is_front' => true,  'slug' => '' ],
    'about.html'        => [ 'file' => __DIR__ . '/page-templates/template-about.php',        'is_front' => false, 'slug' => 'about' ],
    'products.html'     => [ 'file' => __DIR__ . '/page-templates/template-products.php',     'is_front' => false, 'slug' => 'products' ],
    'testing.html'      => [ 'file' => __DIR__ . '/page-templates/template-testing.php',      'is_front' => false, 'slug' => 'testing' ],
    'certificates.html' => [ 'file' => __DIR__ . '/page-templates/template-certificates.php', 'is_front' => false, 'slug' => 'certificates' ],
    'industries.html'   => [ 'file' => __DIR__ . '/page-templates/template-industries.php',   'is_front' => false, 'slug' => 'industries' ],
    'contact.html'      => [ 'file' => __DIR__ . '/page-templates/template-contact.php',      'is_front' => false, 'slug' => 'contact' ],
];

foreach ( $pages_map as $output_file => $cfg ) {
    $GLOBALS['is_front_page']     = $cfg['is_front'];
    $GLOBALS['current_page_slug'] = $cfg['slug'];

    ob_start();
    require $cfg['file'];
    $html = ob_get_clean();

    file_put_contents( __DIR__ . '/' . $output_file, $html );
    echo "SUCCESS: {$output_file} generated (" . strlen( $html ) . " bytes)\n";
}
