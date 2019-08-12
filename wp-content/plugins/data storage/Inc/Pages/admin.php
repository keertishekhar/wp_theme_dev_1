<?php
/**
  *@package datastorage
*/
namespace Inc\Pages;

use \Inc\Base\Basecontroller;
use \Inc\Api\SettingsApi;

class Admin extends Basecontroller
{
    public $settings;
    public $pages = array();
    public $subpages = array();

  public function __construct(){

    $this->settings = new SettingsApi();
    $this->pages = [
      [
      'page_title' => 'keerti',
      'menu_titile' => 'keerti',
      'capability' => 'manage_options',
      'menu_slug'  => 'Keerti_plugin',
      'callback'   => function(){ echo '<h1>keerti</h1>';},
      'icon_url'   => '',
      'position'    => 6
    ]
    ];
    $this->subpages  =[
      [
        'parent_slug' => 'Keerti_plugin',
        'page_title' => 'shekhar',
        'menu_titile' => 'shekhar',
        'capability' => 'manage_options',
        'menu_slug'  => 'keerti_shekhar',
        'callback'   => function(){ echo '<h1>keeri Shekhar</h1>';},
      ],
      [
        'parent_slug' => 'Keerti_plugin',
        'page_title' => 'singh',
        'menu_titile' => 'singh',
        'capability' => 'manage_options',
        'menu_slug'  => 'keerti_shekhar_singh',
        'callback'   => function(){ echo '<h1>keeri Shekhar singh</h1>';},
      ]

    ];
  }
  public function register(){
    $this->settings->addPages( $this->pages )->withSubPage( 'Dashboard' )->addSubpages( $this->subpages )->register();
   //echo "keerti shekhar singh bisht son of anand singh bisht from ghaziabad";
  // add_action( 'admin_menu', array( $this, 'add_admin_pages'));
	}
  // public function add_admin_pages(){
  //   add_menu_page( 'Data storage', 'Datastorage', 'manage_options', 'data_storage', array( $this , 'add_menu'), '',6);
  // }
  // public function add_menu(){
  //   require_once $this->plugin_path . 'template/admin.php';
  // }
}
?>
