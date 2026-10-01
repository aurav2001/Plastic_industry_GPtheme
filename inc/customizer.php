<?php
/**
 * GP Theme Customizer Options
 * Includes Global Color Controls and Company Info
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( class_exists( 'WP_Customize_Control' ) ) {
    class GP_Customize_Reset_Colors_Control extends WP_Customize_Control {
        public $type = 'gp_reset_colors';
        public function render_content() {
            ?>
            <div style="margin: 20px 0 10px 0; padding: 14px; background: #f0f7fd; border: 1px dashed #0077b6; border-radius: 8px; text-align: center;">
                <p style="margin: 0 0 10px 0; font-size: 13px; color: #0b2545; font-weight: 600;">
                    <?php esc_html_e( 'Want to restore original colors?', 'gp-theme' ); ?>
                </p>
                <button type="button" id="gp-reset-colors-btn" class="button button-secondary" style="width: 100%; font-weight: 600; color: #0b2545; border-color: #0077b6; padding: 7px 10px; height: auto; white-space: normal; line-height: 1.35; font-size: 13px;">
                    🔄 <?php esc_html_e( 'Reset to Default Colors', 'gp-theme' ); ?>
                </button>
            </div>
            <?php
        }
    }
}

function gp_theme_customize_register( $wp_customize ) {
    // -------------------------------------------------------------
    // Section: Site Identity (Logo Dimensions)
    // -------------------------------------------------------------
    $wp_customize->add_setting( 'gp_logo_width', array(
        'default'           => 180,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( 'gp_logo_width', array(
        'label'       => __( 'Logo Max Width (px)', 'gp-theme' ),
        'description' => __( 'Adjust the width of your custom logo image.', 'gp-theme' ),
        'section'     => 'title_tagline',
        'priority'    => 9,
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 50,
            'max'  => 400,
            'step' => 5,
        ),
    ) );

    $wp_customize->add_setting( 'gp_logo_height', array(
        'default'           => 55,
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( 'gp_logo_height', array(
        'label'       => __( 'Logo Max Height (px)', 'gp-theme' ),
        'description' => __( 'Adjust the height of your custom logo image to keep the header balanced.', 'gp-theme' ),
        'section'     => 'title_tagline',
        'priority'    => 10,
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 25,
            'max'  => 120,
            'step' => 1,
        ),
    ) );

    // -------------------------------------------------------------
    // Section: Global Site Colors (NEW)
    // -------------------------------------------------------------
    $wp_customize->add_section( 'gp_theme_colors', array(
        'title'       => __( 'Global Site Colors', 'gp-theme' ),
        'priority'    => 25,
        'description' => __( 'Customize the global color palette across your entire website (buttons, headers, accents, footer). Changes reflect in real-time.', 'gp-theme' ),
    ) );

    // Primary Brand Color (Dark Navy)
    $wp_customize->add_setting( 'gp_color_primary', array(
        'default'           => '#0b2545',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gp_color_primary', array(
        'label'       => __( 'Primary Brand Color', 'gp-theme' ),
        'description' => __( 'Used for headers, brand text, and primary dark styling.', 'gp-theme' ),
        'section'     => 'gp_theme_colors',
    ) ) );

    // Primary Light Color
    $wp_customize->add_setting( 'gp_color_primary_light', array(
        'default'           => '#134074',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gp_color_primary_light', array(
        'label'       => __( 'Primary Light / Navy', 'gp-theme' ),
        'description' => __( 'Used for gradients, topbar highlights, and accents.', 'gp-theme' ),
        'section'     => 'gp_theme_colors',
    ) ) );

    // Primary Accent Color (CTA Buttons)
    $wp_customize->add_setting( 'gp_color_accent', array(
        'default'           => '#ef233c',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gp_color_accent', array(
        'label'       => __( 'CTA / Action Accent Color', 'gp-theme' ),
        'description' => __( 'Used for Request a Quote buttons, badges, and prominent links.', 'gp-theme' ),
        'section'     => 'gp_theme_colors',
    ) ) );

    // Accent Hover Color
    $wp_customize->add_setting( 'gp_color_accent_hover', array(
        'default'           => '#d90429',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gp_color_accent_hover', array(
        'label'       => __( 'CTA Button Hover Color', 'gp-theme' ),
        'section'     => 'gp_theme_colors',
    ) ) );

    // Secondary Accent Color (Cyan / Tech Blue)
    $wp_customize->add_setting( 'gp_color_secondary', array(
        'default'           => '#00b4d8',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gp_color_secondary', array(
        'label'       => __( 'Secondary Accent (Cyan / Blue)', 'gp-theme' ),
        'description' => __( 'Used for product tags, subtitles, icon highlights, and borders.', 'gp-theme' ),
        'section'     => 'gp_theme_colors',
    ) ) );

    // Eco / Green Accent Color
    $wp_customize->add_setting( 'gp_color_green', array(
        'default'           => '#10b981',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gp_color_green', array(
        'label'       => __( 'Eco / Green Accent Color', 'gp-theme' ),
        'description' => __( 'Used for sustainability tags, recycled badges, and online status.', 'gp-theme' ),
        'section'     => 'gp_theme_colors',
    ) ) );

    // Footer & Dark Background Color
    $wp_customize->add_setting( 'gp_color_bg_dark', array(
        'default'           => '#0b192c',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gp_color_bg_dark', array(
        'label'       => __( 'Footer & Dark Background', 'gp-theme' ),
        'description' => __( 'Background color for site footer and dark highlight sections.', 'gp-theme' ),
        'section'     => 'gp_theme_colors',
    ) ) );

    // Reset to Default Colors Action Control
    $wp_customize->add_setting( 'gp_color_reset_action', array(
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( new GP_Customize_Reset_Colors_Control( $wp_customize, 'gp_color_reset_action', array(
        'section'  => 'gp_theme_colors',
        'priority' => 150,
    ) ) );

    // -------------------------------------------------------------
    // Section: Company Info & Contact
    // -------------------------------------------------------------
    $wp_customize->add_section( 'gp_company_info', array(
        'title'       => __( 'Company Info & Contact', 'gp-theme' ),
        'priority'    => 30,
        'description' => __( 'Configure your company name, brand abbreviation, and contact details displayed across header, footer, and contact sections.', 'gp-theme' ),
    ) );

    // Full Company Name
    $wp_customize->add_setting( 'gp_company_name', array(
        'default'           => 'SHRI RAM SHARNAM OVERSEAS',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'gp_company_name', array(
        'label'       => __( 'Full Company Name (Main)', 'gp-theme' ),
        'description' => __( 'Example: SHRI RAM SHARNAM OVERSEAS', 'gp-theme' ),
        'section'     => 'gp_company_info',
        'type'        => 'text',
    ) );

    // Division / Subtitle
    $wp_customize->add_setting( 'gp_company_division', array(
        'default'           => 'GREEN POLYTECH LIMITED',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'gp_company_division', array(
        'label'       => __( 'Company Division / Subtitle', 'gp-theme' ),
        'description' => __( 'Example: GREEN POLYTECH LIMITED', 'gp-theme' ),
        'section'     => 'gp_company_info',
        'type'        => 'text',
    ) );

    // Short Name / Brand Acronym
    $wp_customize->add_setting( 'gp_company_short', array(
        'default'           => 'SRS',
        'transport'         => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'gp_company_short', array(
        'label'       => __( 'Short Name / Acronym', 'gp-theme' ),
        'description' => __( 'Example: SRS (displayed on logo badge and short labels)', 'gp-theme' ),
        'section'     => 'gp_company_info',
        'type'        => 'text',
    ) );

    // ISO Certification Tagline
    $wp_customize->add_setting( 'gp_company_cert', array(
        'default'           => 'ISO 9001:2015 Certified Company',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'gp_company_cert', array(
        'label'    => __( 'Certification / Subtitle', 'gp-theme' ),
        'section'  => 'gp_company_info',
        'type'     => 'text',
    ) );

    // Topbar Location
    $wp_customize->add_setting( 'gp_company_topbar_loc', array(
        'default'           => 'Delhi-NCR & Bhiwadi Industrial Area, India',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'gp_company_topbar_loc', array(
        'label'    => __( 'Topbar Location Text', 'gp-theme' ),
        'section'  => 'gp_company_info',
        'type'     => 'text',
    ) );

    // Phone Number
    $wp_customize->add_setting( 'gp_company_phone', array(
        'default'           => '+91-9876543210',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'gp_company_phone', array(
        'label'    => __( 'Primary Phone Number', 'gp-theme' ),
        'section'  => 'gp_company_info',
        'type'     => 'text',
    ) );

    // Email Address
    $wp_customize->add_setting( 'gp_company_email', array(
        'default'           => 'info@srspolymer.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'gp_company_email', array(
        'label'    => __( 'Sales & Support Email', 'gp-theme' ),
        'section'  => 'gp_company_info',
        'type'     => 'email',
    ) );

    // Address
    $wp_customize->add_setting( 'gp_company_address', array(
        'default'           => 'SHRI RAM SHARNAM OVERSEAS - GREEN POLYTECH LIMITED, Industrial Area, Delhi-NCR & Bhiwadi, India',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'gp_company_address', array(
        'label'    => __( 'Corporate & Plant Address', 'gp-theme' ),
        'section'  => 'gp_company_info',
        'type'     => 'textarea',
    ) );

    // -------------------------------------------------------------
    // Section: WhatsApp Floating Widget
    // -------------------------------------------------------------
    $wp_customize->add_section( 'gp_whatsapp_section', array(
        'title'       => __( 'WhatsApp Floating Widget', 'gp-theme' ),
        'priority'    => 35,
    ) );

    $wp_customize->add_setting( 'gp_enable_whatsapp', array(
        'default'           => true,
        'sanitize_callback' => 'gp_sanitize_checkbox',
    ) );
    $wp_customize->add_control( 'gp_enable_whatsapp', array(
        'label'    => __( 'Enable Floating WhatsApp Button', 'gp-theme' ),
        'section'  => 'gp_whatsapp_section',
        'type'     => 'checkbox',
    ) );

    $wp_customize->add_setting( 'gp_whatsapp_number', array(
        'default'           => '919876543210',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'gp_whatsapp_number', array(
        'label'       => __( 'WhatsApp Phone Number (with Country Code)', 'gp-theme' ),
        'description' => __( 'Example: 919876543210 (no plus or spaces)', 'gp-theme' ),
        'section'     => 'gp_whatsapp_section',
        'type'        => 'text',
    ) );

    $wp_customize->add_setting( 'gp_whatsapp_text', array(
        'default'           => 'Hi SRS Green Polytech! I need wholesale rates and availability for Plastic Granules (Dana).',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'gp_whatsapp_text', array(
        'label'    => __( 'Default WhatsApp Message', 'gp-theme' ),
        'section'  => 'gp_whatsapp_section',
        'type'     => 'text',
    ) );

    // -------------------------------------------------------------
    // Section: Social Links
    // -------------------------------------------------------------
    $wp_customize->add_section( 'gp_social_links', array(
        'title'    => __( 'Social Media Links', 'gp-theme' ),
        'priority' => 40,
    ) );

    $wp_customize->add_setting( 'gp_social_linkedin', array(
        'default'           => 'https://in.linkedin.com/company/srs-polymer',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'gp_social_linkedin', array(
        'label'    => __( 'LinkedIn URL', 'gp-theme' ),
        'section'  => 'gp_social_links',
        'type'     => 'url',
    ) );

    $wp_customize->add_setting( 'gp_social_facebook', array(
        'default'           => 'https://www.facebook.com/srspolymer/',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'gp_social_facebook', array(
        'label'    => __( 'Facebook URL', 'gp-theme' ),
        'section'  => 'gp_social_links',
        'type'     => 'url',
    ) );
}
add_action( 'customize_register', 'gp_theme_customize_register' );

function gp_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
