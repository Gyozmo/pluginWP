<?php

/*
Plugin Name: gyoplugin
Plugin URI: localhost:8080
Description: A  mwa
Version: 0.1
Author: Gyo
Author URI: localhost:8080
License: Dunno
Text Domain: gyogyo
*/

function wrapped($atts, $content=null){
echo "<b>".$content."</b>";
}

add_shortcode('wrapped', 'wrapped');