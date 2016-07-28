<?php
/*
Plugin Name: Coffee Tester
Plugin URI: http://www.coffeecreativestudio.co.za
Description: Testing github shizzle since 2016
Version: 1.0.0
Text Domain: coffee-tester
Author: Frits Steyn
Author URI: http://frits.co.za
*/
require_once( 'updater.php' );
if ( is_admin() ) {
    new BFIGitHubPluginUpdater( __FILE__, 'CoffeeCreativeStudio', "coffee-tester" );
}