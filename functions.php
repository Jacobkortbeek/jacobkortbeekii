<?php

ini_set( 'mysql.trace_mode', 0 );


/**
* Get tools, filtered by the taxonomy term, if one was selected.
*
* @return WP_Query Tools in the taxonomy term if one was selected, else all.
*/
$GLOBALS['paged'] = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
function km_get_tools_in_taxonomy_term() {
  // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
return new WP_Query( array(
    'max_num_pages' => 9999,
    'post_type'      => array(
      'post',
      'designs',
      'portfolio',
      'book_review'
    ), // Change this to the slug of your post type.
    'posts_per_page' => 5, // Display a maximum of 500 options in the dropdown.
    'orderby' => 'post_date',
    'tax_query'      => km_get_tools_in_taxonomy_term_tax_query(),
    'paged' => $GLOBALS['paged'],
) );
}
/**
* Get the taxonomy query to be used by km_get_tools_in_taxonomy_term().
*
* @return array The taxonomy query if a term was selected, else an empty array.
*/
function km_get_tools_in_taxonomy_term_tax_query() {
$selected_term = km_get_selected_taxonomy_dropdown_term();
// If a term has been selected, use that in the taxonomy query.
if ( $selected_term ) {
  return array(
    array(
      'taxonomy' => 'category', // Change this to the slug of your taxonomy.
      'field'    => 'term_id',
      'terms'    => $selected_term,
    ),
  );
}
// Otherwise, don't filter based on a taxonomy term and just get all the results.
return array();
}
/**
* Get the selected taxonomy dropdown term slug.
*
* @return string The selected taxonomy dropdown term ID, else empty string.
*/
function km_get_selected_taxonomy_dropdown_term() {
return isset( $_GET[ 'category' ] ) && $_GET[ 'category' ] ? sanitize_text_field( $_GET[ 'category' ] ) : '';
}
$tools_in_taxonomy_term = km_get_tools_in_taxonomy_term();

// Numbered Pagination
function wplift_pagination() {
	// global $wp_query;
    // $published_posts = wp_count_posts()->publish;
    // $posts_per_page = get_option('posts_per_page');
    // $page_number_max = ceil($published_posts / $posts_per_page);
		$big = 999999999; // need an unlikely integer
			echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $tools_in_taxonomy_term->max_num_pages
		) );
}



  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'menus' );

  function register_theme_menus() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' ),
        'secondary-menu' => __( 'Secondary Menu' )
      )
    );
  }
  add_action( 'init', 'register_theme_menus' );

  function wpdocs_excerpt_more( $more ) {
    return ' ...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
function custom_excerpt_length( $length ) {
  return 6;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function create_posttype() {

  register_post_type( 'portfolio',
  // CPT Options
      array(
          'taxonomies'  => array( 'category' ),
          'supports' => array(
            'title',
            'editor',
            'thumbnail'
           ),
          'labels' => array(
              'name' => __( 'Portfolio' ),
              'singular_name' => __( 'Portfolio' ),
              'menu_name'           => __( 'Portfolio')
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'Portfolio'),
      )
  );

  register_post_type( 'designs',
  // CPT Options
      array(
          'taxonomies'  => array( 'category' ),
          'supports' => array(
            'title',
            'editor',
            'thumbnail'
           ),
          'labels' => array(
              'name' => __( 'Designs' ),
              'singular_name' => __( 'Designs' ),
              'menu_name'           => __( 'Designs')
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'Designs'),
      )
  );

  register_post_type( 'book_review',
  // CPT Options
      array(
          'taxonomies'  => array( 'category' ),
          'supports' => array(
            'title',
            'editor',
            'thumbnail'
           ),
          'labels' => array(
              'name' => __( 'Book Reviews' ),
              'singular_name' => __( 'book_review' ),
              'menu_name'           => __( 'Book Reviews')
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'book_review'),
      )
  );
}
add_action( 'init', 'create_posttype' );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
    'page_title' 	=> 'Theme General Settings',
    'menu_title'	=> 'Theme Settings',
    'menu_slug' 	=> 'theme-general-settings',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
  ));

}


  function wpt_theme_styles() {
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Ubuntu' );

    wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/css/all.min.css' );
    wp_enqueue_style( 'animsition', get_template_directory_uri() . '/css/animsition/css/animsition.min.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap_grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

  function wpt_theme_js() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'jk_nav', get_template_directory_uri() . '/js/jk-nav.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'animsition_js', get_template_directory_uri() . '/css/animsition/js/animsition.min.js', array('jquery'), ' ', true );
    wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/js/all.min.js', array('jquery'), ' ', true );
  }
  add_action( 'wp_enqueue_scripts', 'wpt_theme_js');
?>
