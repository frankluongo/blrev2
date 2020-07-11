<?php
class CustomPlugin {
	protected $loader;
	public function __construct() {
		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
    $this->define_public_hooks();
    $this->add_theme_supports();
    $this->add_options_page();
    $this->add_menus();
	}
	private function load_dependencies() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/Loader.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/i18n.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/Admin.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/Public.php';
		$this->loader = new Loader();
	}
	private function set_locale() {
		$plugin_i18n = new i18n();
		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );
	}
	private function define_admin_hooks() {
		$plugin_admin = new Admin();
		// $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		// $this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
	}
	private function define_public_hooks() {
    $pluginPublic = new PluginPublic();
    $pluginPublic->enqueue_scripts();
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
	public function get_loader() {
		return $this->loader;
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

  public function add_menus() {
    function register_menus() {
      register_nav_menus(
        array(
          'headerNav' => __('Header Menu'),
          'footerNav' => __('Footer Menu'),
        )
      );
    }
    add_action('init', 'register_menus');
  }
}
