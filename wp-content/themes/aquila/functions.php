<?php
/**
 * Theme Functions.
 * 
 * @package Aquila
 */

 function aquila_enqueue_scripts(){
   // wp_enqueue_style( 'style', get_stylesheet_uri() , [], filemtime( get_template_directory(). '/style.css' ), 'all' );
   // wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory(). '/assets/main.js' ), true );

   wp_register_style( 'style', get_stylesheet_uri() , [], filemtime( get_template_directory(). '/style.css' ), 'all' );
   wp_register_script( 'main-script', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory(). '/assets/main.js' ), true );

   wp_enqueue_style('style');
   wp_enqueue_script('main-script');

 }
 add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' );
?>