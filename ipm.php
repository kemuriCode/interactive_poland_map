<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/t0shifollow
 * @since             1.0.0
 * @package           Ipm
 *
 * @wordpress-plugin
 * Plugin Name:       Interactive Poland Map 
 * Plugin URI:        https://github.com/t0shifollow/interactive_poland_map
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            t0shi
 * Author URI:        https://github.com/t0shifollow
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ipm
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
define( 'IPM_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ipm-activator.php
 */
function activate_ipm() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ipm-activator.php';
	Ipm_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ipm-deactivator.php
 */
function deactivate_ipm() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ipm-deactivator.php';
	Ipm_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ipm' );
register_deactivation_hook( __FILE__, 'deactivate_ipm' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ipm.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ipm() {

	$plugin = new Ipm();
	$plugin->run();

}
run_ipm();
