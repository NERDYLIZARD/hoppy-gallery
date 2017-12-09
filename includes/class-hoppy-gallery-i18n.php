<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/NERDYLIZARD/
 * @since      1.0.0
 *
 * @package    Hoppy_Gallery
 * @subpackage Hoppy_Gallery/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hoppy_Gallery
 * @subpackage Hoppy_Gallery/includes
 * @author     hoppy BOUASAVANH <bouasavanhhop@gmail.com>
 */
class Hoppy_Gallery_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hoppy-gallery',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
