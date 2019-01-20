<?php
  function wpt_theme_styles() {
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

  function wpt_theme_js() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'jk_nav', get_template_directory_uri() . '/js/jk-nav.js', array('jquery'), ' ', true );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_js');
?>
