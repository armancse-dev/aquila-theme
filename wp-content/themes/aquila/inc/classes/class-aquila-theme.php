<?php
/**
 * Bootstraps the theme.
 * 
 * @package Aquila
 */

 namespace AQUILA_THEME\Inc;

// use AQUILA_THEME\Inc\Assets;
use AQUILA_THEME\Inc\Traits\Singleton;

 class AQUILA_THEME {
    use Singleton;
    
    protected function __construct()
    {
        // wp_die('hello');
        // load class.
        Assets::get_instance();
        $this->setup_hooks();

    }

    protected function setup_hooks(){
        /**
         * Actions hooks
         */

       
    }

    
 }

