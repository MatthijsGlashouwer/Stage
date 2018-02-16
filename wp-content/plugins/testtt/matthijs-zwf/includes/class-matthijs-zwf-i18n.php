<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       matthijsglashouwer@hotmail.com
 * @since      1.0.0
 *
 * @package    Matthijs_Zwf
 * @subpackage Matthijs_Zwf/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Matthijs_Zwf
 * @subpackage Matthijs_Zwf/includes
 * @author     matthijs glashouwer <matthijsglashouwer@hotmail.com>
 */
class Matthijs_Zwf_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'matthijs-zwf',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
