<?php
/*
Plugin Name: Coffee Tester
Plugin URI: https://github.com/CoffeeCreativeStudio/coffee-tester
Description: Testing github shizzle since 2016
Version: 1.9.7
Text Domain: coffee-tester
Author: Frits Steyn
Author URI: http://www.coffeecreativestudio.co.za
*/
add_action( 'init', 'coffee_tester_updater_test_init' );
function coffee_tester_updater_test_init() {

	include_once 'updater.php';

	define( 'WP_GITHUB_FORCE_UPDATE', true );

	if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin

		$config = array(
			'slug' => plugin_basename( __FILE__ ),
			'proper_folder_name' => 'coffee-tester',
			'api_url' => 'https://api.github.com/CoffeeCreativeStudio/coffee-tester',
			'raw_url' => 'https://raw.github.com/CoffeeCreativeStudio/coffee-tester/master',
			'github_url' => 'https://github.com/CoffeeCreativeStudio/coffee-tester',
			'zip_url' => 'https://github.com/CoffeeCreativeStudio/coffee-tester/archive/master.zip',
			'sslverify' => false,
			'requires' => '3.0',
			'tested' => '4.5.3',
			'readme' => 'README.md',
			'access_token' => '',
		);

		new WP_GitHub_Updater( $config );

	}

}
//some random comment for version 1.9.7