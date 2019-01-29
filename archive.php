<?php
/*
Template Name: Archives
*/
get_header(); ?>
<!-- Header -->
<div class="container-fluid postTitle fullCenter">
  <div class="row">
    <div class="col-lg-12">
      <h2>Posts</h2>
    </div>
  </div>
</div>

<!-- filter -->
<div class="tools-dropdown">

	<form id="tool-category-select" class="tool-category-select" method="get">

		<?php
		// Create and display the dropdown menu.
		wp_dropdown_categories(
			array(
				'orderby'         => 'NAME', // Order the items in the dropdown menu by their name.
				'taxonomy'        => 'category', // Only include posts with the taxonomy of 'tools'.
				'name'            => 'category', // Change this to the
				'show_option_all' => 'Show All Posts', // Text the dropdown will display when none of the options have been selected.
				'selected'        => km_get_selected_taxonomy_dropdown_term(), // Set which option in the dropdown menu is the currently selected one.
			) );
		?>

		<input type="submit" value="View" />
	</form>

</div>

<section id="tools-listing">

	<?php $tools_in_taxonomy_term = km_get_tools_in_taxonomy_term(); ?>

	<!-- If posts were found, -->
	<?php if ( $tools_in_taxonomy_term->have_posts() ) : ?>

		<!-- Loop through every post. -->
		<?php while ( $tools_in_taxonomy_term->have_posts() ) : $tools_in_taxonomy_term->the_post(); ?>

			<!-- Display each post's title and content - you can change this section to display whatever post content you want. -->
			<article class="tool-entry">
        <div class="container post curvedCorner bottomBorderRandom shadow margin-topBot">
          <div class="row postCont">
            <div class="col-lg-6">
              <div class="post-textCont">
                <h2 class="postHeading"><?php the_title(); ?></h2>
                <p class="padAll"></p>
                  <?php the_content(); ?>
                </p></p>
              </div>
            </div>
            <div class="col-lg-6">
              <img class="margin-topBot shadow-sm" src="./assets/img/lukasz-szmigiel-33891-unsplash.jpg" alt="">
            </div>
          </div>
          <div class="row postButtonCont">
            <div class="col-lg-12">
              <div class="postButton">
                <a href="#" class="btn btn-primary btn-lg active float-right" role="button" aria-pressed="true">Primary link</a>
              </div>
            </div>
          </div>
        </div>
			</article>

		<?php endwhile; ?>

		<?php wp_reset_postdata(); ?>

	<?php endif; ?>

</section>

<?php

  $num_posts = get_option( 'posts_per_page' );
  $post_types = array(
    'post',
    'designs',
    'portfolio',
    'book_review'
  );
  $args = array(
    'post_type' => $post_types,
    'posts_per_page' => $num_posts,
    'orderby' => 'post_date'
  );

  $query = new WP_Query( $args );

?>
<?php $i=0; if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
<div class="container post curvedCorner bottomBorderRandom shadow margin-topBot">
  <div class="row postCont">
    <div class="col-lg-6">
      <div class="post-textCont">
        <h2 class="postHeading"><?php the_title(); ?></h2>
        <p class="padAll">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class="col-lg-6">
      <img class="margin-topBot shadow-sm" src="./assets/img/lukasz-szmigiel-33891-unsplash.jpg" alt="">
    </div>
  </div>
  <div class="row postButtonCont">
    <div class="col-lg-12">
      <div class="postButton">
        <a href="#" class="btn btn-primary btn-lg active float-right" role="button" aria-pressed="true">Primary link</a>
      </div>
    </div>
  </div>
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>
<div class="container post curvedCorner bottomBorderRandom shadow margin-topBot">
  <div class="row postCont">
    <div class="col-lg-6">
      <div class="post-textCont">
        <h2 class="postHeading">Title 11</h2>
        <p class="padAll">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class="col-lg-6">
      <img class="margin-topBot shadow-sm" src="./assets/img/lukasz-szmigiel-33891-unsplash.jpg" alt="">
    </div>
  </div>
  <div class="row postButtonCont">
    <div class="col-lg-12">
      <div class="postButton">
        <a href="#" class="btn btn-primary btn-lg active float-right" role="button" aria-pressed="true">Primary link</a>
      </div>
    </div>
  </div>
</div>

<div class="container post curvedCorner bottomBorderRandom shadow margin-topBot">
  <div class="row postCont">
    <div class="col-lg-6">
      <div class="post-textCont">
        <h2 class="postHeading">Title</h2>
        <p class="padAll">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class="col-lg-6">
      <img class="margin-topBot shadow-sm" src="./assets/img/lukasz-szmigiel-33891-unsplash.jpg" alt="">
    </div>
  </div>
  <div class="row postButtonCont">
    <div class="col-lg-12">
      <div class="postButton">
        <a href="#" class="btn btn-primary btn-lg active float-right" role="button" aria-pressed="true">Primary link</a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
