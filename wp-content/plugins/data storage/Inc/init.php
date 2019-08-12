<?php
/**
  *@package datastorage
*/
namespace Inc;

final class Init
{
  public static  function get_services(){
      return [
        Pages\Admin::class,
        Base\Enqueue::class,
      ];
    }

    public static function register_services(){
        foreach(self::get_services() as $class){
          $service = self::instantiate($class);
          if( method_exists( $service, 'register')){
            $service->register();
          }
        }
    }
    private static function instantiate($class){
        $service = new $class;
      return $service;
    }

}
?>
<!-- class DataStorage{
	function register(){

		add_action( 'admin_menu', array($this, 'add_admin_pages'));
		add_action( 'admin_enqueue_scripts', array($this, 'enqueue'));
	}
	function activate(){
		flush_rewrite_rules();
	}
	function deactivate(){
		flush_rewrite_rules();
	}
	function add_admin_pages(){
		add_menu_page( 'Data storage', 'Data storage', 'manage_options', 'data-storage', array($this, 'add_menu'), '',null);
	}
	function add_menu(){
		require_once plugin_dir_path(__FILE__). 'admin.php';
	}
	function enqueue(){
		wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyle.css', __FILE__));
		wp_enqueue_script( 'mypluginsctipt', plugins_url( '/assets/myscript.js', __FILE__));
	}
}

	if( class_exists( 'DataStorage' )){
		$datastorage = new DataStorage();
		$datastorage->register();
	}

	//Plugin Activation Hook
	register_activation_hook( __FILE__, array( $datastorage, 'activate'));

	//Plugin Deactivation Hook
	register_deactivation_hook(__FILE__, array( $datastorage, 'deactivate')); -->
