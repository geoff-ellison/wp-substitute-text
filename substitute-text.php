<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://geoffreyellison.com/
 * @since             1.0.0
 * @package           Substitute_Text
 *
 * @wordpress-plugin
 * Plugin Name:       Substitute Text
 * Plugin URI:        https://blog.geoffreyellison.com/substitute-text-wordpress-plugin/
 * Description:       This plugin provides a simple shortcode to easily substitute the right text based on a range of conditions, such as the type of device.
 * Version:           1.0.0
 * Author:            Geoff Ellison
 * Author URI:        https://geoffreyellison.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       substitute-text
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SUBSTITUTE_TEXT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-substitute-text-activator.php
 */
function activate_substitute_text() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-substitute-text-activator.php';
	Substitute_Text_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-substitute-text-deactivator.php
 */
function deactivate_substitute_text() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-substitute-text-deactivator.php';
	Substitute_Text_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_substitute_text' );
register_deactivation_hook( __FILE__, 'deactivate_substitute_text' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-substitute-text.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_substitute_text() {

	$plugin = new Substitute_Text();
	$plugin->run();

}
run_substitute_text();
