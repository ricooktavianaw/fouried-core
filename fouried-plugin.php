<?php 
/**
 * Plugin Name: Fouried Core
 * Plugin URI: http://themeforest.net/user/Slashdown
 * Description: Important plug-in in order to make the Fouried work
 * Version: 1.0.0
 * Author: Rico Oktavian Adhi Wibowo
 * Author URI: Author's website
 * License: GNU General Public License, version 1
 */

foreach ( glob( dirname( __FILE__ ) . '/custom-post-type/*.php' ) as $file ) {
    require_once $file;
}

?>