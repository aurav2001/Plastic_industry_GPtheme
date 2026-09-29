<?php
/**
 * GP Theme Customizer Options
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
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
    // Section: Company Info & Contact
    // -------------------------------------------------------------
    $wp_customize->add_section( 'gp_company_info', array(
        'title'       => __( 'Company Info & Contact', 'gp-theme' ),
        'priority'    => 30,
        'description' => __( 'Configure contact details and certification displayed across the theme header and footer.', 'gp-theme' ),
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
        'default'           => 'SRS Polymer Compounding Mill & Warehouse, Delhi-NCR & Bhiwadi, India',
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
        'default'           => 'Hi SRS Polymer! I need wholesale rates and availability for Plastic Granules (Dana).',
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
