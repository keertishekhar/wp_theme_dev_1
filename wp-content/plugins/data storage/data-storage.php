<?php
/**
  *@package datastorage
*/
/*
	*Plugin Name: data storage
	*Plugin URI: www.google.com
	*Author: keerti shekhar
	*Author URI: facebook.com/sonuxzious
	*Description: This is a plugin for data Storage in wordpress database.
	*Version: 1.0.0
	*Licence: GPL v2 or later
*/

defined( 'ABSPATH' ) or die( 'You are not Allowed to Use this Plugin You silly Boy' );

if( file_exists( dirname(__FILE__) . '/vendor/autoload.php')){
	require_once dirname(__FILE__) .'/vendor/autoload.php';
}
 			//Plugin Activation Hook
		 function activate_data_storage_plugin(){
			 Inc\Base\Activate::activate();
		 }
		  register_activation_hook( __FILE__, array(__FILE__, 'activate_data_storage_plugin'));
		//Plugin Deactivation Hook
		 function deactivate_data_storage_plugin(){
			Inc\Base\Deactivate::deactivate();
		 }
			register_deactivation_hook(__FILE__, array( __FILE__, 'deactivate_data_storage_plugin'));

if( class_exists('Inc\\Init')){
		Inc\Init::register_services();
}
