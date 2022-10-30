<?php
/**
 * Plugin Name:       WP Svelte Sample
 * Description:       A sample plugin to illustrate how to set up Svelte for WordPress.
 * Plugin URI:        https://github.com/chwnam/wp-svelte-sample
 * Author:            changwoo
 * Author URI:        https://blog.changwoo.pe.kr
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      8.0
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const WP_SVELTE_SAMPLE_MAIN    = __FILE__;
const WP_SVELTE_SAMPLE_VERSION = '1.0.0';

require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/scripts.php';
require_once __DIR__ . '/includes/shortcodes.php';
