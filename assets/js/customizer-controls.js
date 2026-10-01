/**
 * Customizer Controls JavaScript
 * Handles "Reset to Default Colors" action inside Customizer sidebar
 */
(function($) {
    'use strict';

    $(document).ready(function() {
        var defaultThemeColors = {
            'gp_color_primary': '#0b2545',
            'gp_color_primary_light': '#134074',
            'gp_color_accent': '#ef233c',
            'gp_color_accent_hover': '#d90429',
            'gp_color_secondary': '#00b4d8',
            'gp_color_green': '#10b981',
            'gp_color_bg_dark': '#0b192c'
        };

        $(document).on('click', '#gp-reset-colors-btn', function(e) {
            e.preventDefault();

            if (!confirm('Kya aap sabhi site colors ko original default (purana color) me reset karna chahte hain?')) {
                return;
            }

            $.each(defaultThemeColors, function(settingKey, hexValue) {
                if (wp.customize && wp.customize(settingKey)) {
                    wp.customize(settingKey).set(hexValue);

                    var control = wp.customize.control(settingKey);
                    if (control && control.container) {
                        var picker = control.container.find('.color-picker-hex');
                        if (picker.length && picker.wpColorPicker) {
                            picker.wpColorPicker('color', hexValue);
                        }
                    }
                }
            });
        });
    });
})(jQuery);
