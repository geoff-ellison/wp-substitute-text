<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://geoffreyellison.com/
 * @since      1.0.0
 *
 * @package    Substitute_Text
 * @subpackage Substitute_Text/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Substitute_Text
 * @subpackage Substitute_Text/public
 * @author     Geoff Ellison <geoff@ellisons.org>
 */
class Substitute_Text_Public {

    /**
     * The values to use in the 'insert' attribute in order to insert various texts.
     */
    private const INSERT_VALUE_YEAR = 'year';
    private const INSERT_VALUE_MONTH_FULL = 'month';
    private const INSERT_VALUE_MONTH_ABBR = 'month-abbr';
    private const INSERT_VALUE_MONTH_NUM = 'month-num';
    private const INSERT_VALUE_DATE_FORMAT = 'date-format';

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private string $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private string $version;

    /**
     * The permitted insert values.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $allowed_inserts    The list of strings allowed in the 'insert' attribute.
     */
    private $allowed_inserts = [
        self::INSERT_VALUE_YEAR,
        self::INSERT_VALUE_MONTH_FULL,
        self::INSERT_VALUE_MONTH_ABBR,
        self::INSERT_VALUE_MONTH_NUM,
        self::INSERT_VALUE_DATE_FORMAT,
    ];

    /**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/substitute-text-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/substitute-text-public.js', array( 'jquery' ), $this->version, false );

	}

	public function register_shortcodes() {
		add_shortcode( 'substitute_text', array( $this, 'substitute_text') );
		// add_shortcode( 'anothershortcode', array( $this, 'another_shortcode_function') );
	}

    // Add Shortcode
    function substitute_text($atts) {

        // Allowed attributes
        $atts = shortcode_atts(
            array(
                'mobile' => '',
                'desktop' => '',
                'tablet' => '',
                'insert' => '',
                'format' => '',
            ),
            $atts
        );

        $text = "";

        // Do any required insertions, or continue if there are none.
        if ($insert_text = $this->check_and_perform_insert($atts)) { return $insert_text; }

        if (wp_is_mobile()) {
            if (isset($atts["mobile"])) {
                $text = $atts["mobile"];
            }
        } else {
            if (isset($atts["desktop"])) {
                $text = $atts["desktop"];
            }
        }
        return $text;

    }

    function check_and_perform_insert($atts) {
        // If we don't have an insert value, or we have one that is not an allowed one, don't go on.
        if (!($atts['insert'] ?? false) || !in_array($atts['insert'], $this->allowed_inserts)) { return false; }

        // We've got a known insert value, so create the text to be inserted.
        switch ($atts['insert']) {
            case self::INSERT_VALUE_YEAR: $text = date("Y"); break;
            case self::INSERT_VALUE_MONTH_FULL: $text = date("F"); break;
            case self::INSERT_VALUE_MONTH_ABBR: $text = date("M"); break;
            case self::INSERT_VALUE_MONTH_NUM: $text = date("m"); break;
            case self::INSERT_VALUE_DATE_FORMAT:
                if ($atts['format'] ?? false) {
                    $text = date($atts['format']);
                } else {
                    $text = "";
                }
                break;
            default: $text = "";
        }
        return $text;
    }
}
