<?php 
    add_theme_support('menus'); 
    add_theme_support('custom-logo');
    function register_my_menus() {
        register_nav_menus(
          array(
            'principal' => __( 'Principal Menu' ),
            'secondaire' => __( 'Secondaire Menu' )
          )
        );
      }
      add_action( 'init', 'register_my_menus' ); 