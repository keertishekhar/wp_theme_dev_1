<?php
/**
*@package DataStorage
*/
namespace Inc\Base;

use \Inc\Base\Basecontroller;

class Enqueue extends Basecontroller
{
  public function register(){
  		add_action( 'admin_enqueue_scripts', array($this, 'enqueue'));
  }
  public function enqueue(){
    wp_enqueue_style( 'mypluginstyle', $this->plugin_url .'/assets/mystyle.css');
    wp_enqueue_script( 'mypluginsctipt', $this->plugin_url .'/assets/myscript.js');
  }

}
?>
