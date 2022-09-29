<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://geoffreyellison.com/
 * @since      1.0.0
 *
 * @package    Substitute_Text
 * @subpackage Substitute_Text/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Substitute_Text
 * @subpackage Substitute_Text/includes
 * @author     Geoff Ellison <geoff@ellisons.org>
 */
class Substitute_Text_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'substitute-text',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
