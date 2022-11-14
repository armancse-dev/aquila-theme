<?php
/**
 * Theme Functions.
 * 
 * @package Aquila
 */

 function aquila_enqueue_scripts(){
   // wp_enqueue_style( 'style', get_stylesheet_uri() , [], filemtime( get_template_directory(). '/style.css' ), 'all' );
   // wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory(). '/assets/main.js' ), true );

   //register styles
   wp_register_style( 'style', get_stylesheet_uri() , [], filemtime( get_template_directory(). '/style.css' ), 'all' );

   //register Bootstrap
   wp_register_style( 'bootstrap-css', get_template_directory_uri(). '/assets/src/library/css/bootstrap.min.css' , [], false, 'all' );

   //register scripts
   wp_register_script( 'main-script', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory(). '/assets/main.js' ), true );

   //register bootstrap scripts
   wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], true );

   //enqueue style
   wp_enqueue_style('style');
   wp_enqueue_style('bootstrap-css');


   //enqueue scripts
   wp_enqueue_script('main-script');
   wp_enqueue_script('bootstrap-js');

   

 }
 add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' );
?>