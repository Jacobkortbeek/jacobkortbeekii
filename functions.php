<?php

ini_set( 'mysql.trace_mode', 0 );

function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";

}



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
