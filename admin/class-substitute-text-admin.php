<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://geoffreyellison.com/
 * @since      1.0.0
 *
 * @package    Substitute_Text
 * @subpackage Substitute_Text/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Substitute_Text
 * @subpackage Substitute_Text/admin
 * @author     Geoff Ellison <geoff@ellisons.org>
 */
class Substitute_Text_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Substitute_Text_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Substitute_Text_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/substitute-text-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Substitute_Text_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Substitute_Text_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/substitute-text-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function add_menu() {
        // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
        add_menu_page( "Substitute Text", "Substitute Text", 'manage_options', $this->plugin_name . '-info', array( $this, 'show_info' ));
    }

	public function show_info() {
        include( plugin_dir_path( __FILE__ ) . 'partials/substitute-text-admin-display.php' );
    }

}
