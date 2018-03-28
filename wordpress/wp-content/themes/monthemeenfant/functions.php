<?php
function wpm_enqueue_styles(){
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );

register_nav_menus( array('menu-principal' => 'Menu principal') );