<?php
class Blre_Custom_Props {
	protected $loader;
	protected $plugin_name;
	protected $version;
	public function __construct() {
		if ( defined( 'BLRE_CUSTOM_PROPS_VERSION' ) ) {
			$this->version = BLRE_CUSTOM_PROPS_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'blre-custom-props';
		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
    $this->define_public_hooks();
    $this->add_theme_supports();
    $this->add_options_page();
	}
	private function load_dependencies() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-blre-custom-props-loader.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-blre-custom-props-i18n.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-blre-custom-props-admin.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-blre-custom-props-public.php';
		$this->loader = new Blre_Custom_Props_Loader();
	}
	private function set_locale() {
		$plugin_i18n = new Blre_Custom_Props_i18n();
		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );
	}
	private function define_admin_hooks() {
		$plugin_admin = new Blre_Custom_Props_Admin( $this->get_plugin_name(), $this->get_version() );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
	}
	private function define_public_hooks() {
		$plugin_public = new Blre_Custom_Props_Public( $this->get_plugin_name(), $this->get_version() );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
  }
  private function build_options_page($title, $slug) {
    acf_add_options_page(array(
      'page_title' 	=> $title,
      'menu_title'	=> $title,
      'menu_slug' 	=> $slug,
      'capability'	=> 'edit_posts',
      'redirect'		=> false
    ));
  }
	public function run() {
		$this->loader->run();
	}
	public function get_plugin_name() {
		return $this->plugin_name;
	}
	public function get_loader() {
		return $this->loader;
	}
	public function get_version() {
		return $this->version;
  }
  public function add_theme_supports() {
    if (function_exists('add_theme_support')) {
      // Add Menu Support
      add_theme_support('menus');
      // Add Thumbnail Theme Support
      add_theme_support('post-thumbnails');
      add_image_size('xsmall', 320, '');
      add_image_size('small', 640, '');
      add_image_size('medium', 960, '');
      add_image_size('large', 1280, '');
      add_image_size('xlarge', 1600, '');
      add_image_size('xxlarge', 1920, '');
      // Enables post and comment RSS feed links to head
      add_theme_support('automatic-feed-links');
      // Localisation Support
      load_theme_textdomain('lang_support', get_template_directory() . '/languages');
    }
  }

  public function add_options_page() {
    if( function_exists('acf_add_options_page') ) {
      $this->build_options_page('Theme Settings', 'theme-general-settings');
      $this->build_options_page('Neighborhoods', 'hood-settings');
    }
  }

}
