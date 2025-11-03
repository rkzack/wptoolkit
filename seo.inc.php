<?php

/**
 * Forcefully remove "WordPress" and any preceding em dash or space from the <title> tag.
 *
 * Starts output buffering and filters the final HTML output to remove
 * occurrences of "— WordPress" or "&#8212; WordPress" from the page title.
 * This ensures a cleaner title output across all front-end requests,
 * regardless of theme or plugin output behavior.
 *
 * @since 1.0.0
 * @package WP.Toolkit
 *
 * @return void
 *
 * @hooked init 9999
 */
function wptk_force_remove_wordpress() {
    ob_start(function ($buffer) {
        // Regular expression to remove '— WordPress' or '&#8212; WordPress' with optional spaces
        return preg_replace('/<title>(.*?)\s*(&#8212;|—)\s*WordPress(.*?)<\/title>/i', '<title>$1$3</title>', $buffer);
    });
}
add_action('init', 'wptk_force_remove_wordpress', 9999);

