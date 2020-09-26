<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              bestdecoders.com
 * @since             1.1.0
 * @package           Price Per Unit For WooCommerce
 *
 * @wordpress-plugin
 * Plugin Name:       Price Per Unit For WooCommerce
 * Plugin URI:        bestdecoders.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Best Decoders
 * Author URI:        bestdecoders.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ppu
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.1.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'RANGE_SLIDER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-range_slider-activator.php
 */
function activate_range_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-range_slider-activator.php';
	Range_slider_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-range_slider-deactivator.php
 */
function deactivate_range_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-range_slider-deactivator.php';
	Range_slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_range_slider' );
register_deactivation_hook( __FILE__, 'deactivate_range_slider' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-range_slider.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_range_slider() {

	$plugin = new Range_slider();
	$plugin->run();

}
run_range_slider();
