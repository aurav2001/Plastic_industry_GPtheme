/**
 * File customizer.js.
 * Theme Customizer enhancements for real-time live preview without page reloads.
 */
( function( $ ) {
    // Logo Max Width
    wp.customize( 'gp_logo_width', function( value ) {
        value.bind( function( to ) {
            $( '.custom-logo' ).css( 'max-width', to + 'px' );
            document.documentElement.style.setProperty( '--gp-logo-width', to + 'px' );
        } );
    } );

    // Logo Max Height
    wp.customize( 'gp_logo_height', function( value ) {
        value.bind( function( to ) {
            $( '.custom-logo' ).css( 'max-height', to + 'px' );
            $( '.custom-logo-link' ).css( 'max-height', to + 'px' );
            document.documentElement.style.setProperty( '--gp-logo-height', to + 'px' );
        } );
    } );

    // Global Theme Colors Real-time Live Preview
    var colorProps = {
        'gp_color_primary': '--gp-primary',
        'gp_color_primary_light': '--gp-primary-light',
        'gp_color_accent': '--gp-accent-red',
        'gp_color_accent_hover': '--gp-accent-red-hover',
        'gp_color_secondary': '--gp-accent-cyan',
        'gp_color_green': '--gp-accent-green',
        'gp_color_bg_dark': '--gp-bg-dark'
    };

    $.each( colorProps, function( settingKey, cssVar ) {
        wp.customize( settingKey, function( value ) {
            value.bind( function( to ) {
                document.documentElement.style.setProperty( cssVar, to );
            } );
        } );
    } );

    // Real-time Company Name Updates
    wp.customize( 'gp_company_name', function( value ) {
        value.bind( function( to ) {
            $( '.gp-brand-name' ).text( to );
        } );
    } );

    wp.customize( 'gp_company_division', function( value ) {
        value.bind( function( to ) {
            $( '.gp-brand-sub' ).text( to );
        } );
    } );

    wp.customize( 'gp_company_short', function( value ) {
        value.bind( function( to ) {
            $( '.gp-logo-mark text, .gp-brand-short-badge' ).text( to );
        } );
    } );

} )( jQuery );
