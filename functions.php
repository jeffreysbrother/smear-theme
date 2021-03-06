<?php

  add_theme_support( 'menus' );

  function register_theme_menus() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' )
      )
    );
  }
  add_action( 'init', 'register_theme_menus' );


  function jb_theme_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'blueimp-css', '//blueimp.github.io/Gallery/css/blueimp-gallery.min.css' );
    wp_enqueue_style( 'gallery', get_template_directory_uri() . '/css/bootstrap-image-gallery.min.css' );
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  }
  add_action( 'wp_enqueue_scripts', 'jb_theme_styles' );


  //try to add jQuery (my app.js file doesn't work without this section)
  function include_jQuery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js#asynchload', false, '2.2.4', true);
        wp_enqueue_script('jquery');
    }
  }
  add_action('init', 'include_jQuery');


  function jb_theme_js() {
    wp_enqueue_script( 'blueimp-js', '//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'image-gallery-js', get_template_directory_uri() . '/js/bootstrap-image-gallery.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'gist', get_template_directory_uri() . '/js/gist-embed.min.js', array('jquery'), '', true );
  }
  add_action( 'wp_enqueue_scripts', 'jb_theme_js' );


// just in case WooCommerce screws up the shop, single product, and taxonomy pages
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
function my_theme_wrapper_start() {
  echo '<div class="container">';
  echo '<div class="row">';
  echo '<div class="lg-col-12">'
}
function my_theme_wrapper_end() {
  echo '</div>'; 
  echo '</div>';
  echo '</div>';
}

// declare WooCommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
