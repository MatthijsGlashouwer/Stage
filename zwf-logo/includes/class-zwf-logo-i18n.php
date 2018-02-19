<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://zwf-ontwerp.nl/
 * @since      1.0.0
 *
 * @package    Zwf_Logo
 * @subpackage Zwf_Logo/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Zwf_Logo
 * @subpackage Zwf_Logo/includes
 * @author     ZWF Ontwerp <info@zwfontwerp.nl>
 */
class Zwf_Logo_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'zwf-logo',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
