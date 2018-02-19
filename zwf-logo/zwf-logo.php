<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://zwf-ontwerp.nl/
 * @since             1.0.0
 * @package           Zwf_Logo
 *
 * @wordpress-plugin
 * Plugin Name:       ZWF Logo
 * Plugin URI:        https://zwf-ontwerp.nl/
 * Description:       Voegt het logo van ZWF toe aan de footer onderaan de pagina.
 * Version:           1.0.0
 * Author:            ZWF Ontwerp
 * Author URI:        https://zwf-ontwerp.nl/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       zwf-logo
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-zwf-logo-activator.php
 */
function activate_zwf_logo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-zwf-logo-activator.php';
	Zwf_Logo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-zwf-logo-deactivator.php
 */
function deactivate_zwf_logo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-zwf-logo-deactivator.php';
	Zwf_Logo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_zwf_logo' );
register_deactivation_hook( __FILE__, 'deactivate_zwf_logo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-zwf-logo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_zwf_logo() {

	$plugin = new Zwf_Logo();
	$plugin->run();

}
run_zwf_logo();
