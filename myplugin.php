<?php

/*
Plugin Name: myfirstplugin
Plugin URI: localhost:8080
Description: this is my first plugin !!!
Version: 0.1
Author: Gyo
Author URI: localhost:8080
License: Dunno
Text Domain: gyogyo
*/

add_filter( 'filter_name', 'your_function_name' );

function ( $variable ) {
// Your code
return $variable;
}

