/**
 * File customizer.js.
 * Theme Customizer enhancements for a better user experience.
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
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
} )( jQuery );
