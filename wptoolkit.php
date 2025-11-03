<?php

/*
Plugin Name: WP.Toolkit
Plugin URI:  https://wordpress.org
Description: WP Tools and Security Kit
Author: Richard Zack
Version: 1.0.0
Author URI: https://wordpress.org
*/

defined('ABSPATH') || exit;

require_once __DIR__ . '/security.inc.php';
require_once __DIR__ . '/seo.inc.php';
require_once __DIR__ . '/tools.inc.php';
require_once __DIR__ . '/ux.inc.php';

/**
 * Dependents can: add_action('wptk/ready', fn() => { ... });
 */
add_action('plugins_loaded', function () {
    do_action('wptk/ready');
});


