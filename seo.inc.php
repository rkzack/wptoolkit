<?php

/**
 * Forcefully remove "WordPress" and the preceding emdash/space (or HTML entity) from the <title> tag on every page request.
 */
function wptk_force_remove_wordpress() {
    ob_start(function ($buffer) {
        // Regular expression to remove '— WordPress' or '&#8212; WordPress' with optional spaces
        return preg_replace('/<title>(.*?)\s*(&#8212;|—)\s*WordPress(.*?)<\/title>/i', '<title>$1$3</title>', $buffer);
    });
}
add_action('init', 'wptk_force_remove_wordpress', 9999);

