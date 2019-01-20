<?php
  function wpt_theme_styles() {
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Ubuntu' );

    wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
    wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/css/all.min.css' );
    wp_enqueue_style( 'animsition', get_template_directory_uri() . '/css/animsition/css/animsition.min.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

  function wpt_theme_js() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'jk_nav', get_template_directory_uri() . '/js/jk-nav.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'animsition_js', get_template_directory_uri() . '/css/animsition/js/animsition.min.js', array('jquery'), ' ', true );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_js');
?>
