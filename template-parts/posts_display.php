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
                <div class="pad-topBot">
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="margin-topBot shadow-sm">
                <?php the_post_thumbnail(); ?>
              </div>
              <!-- <img class="" src="./assets/img/lukasz-szmigiel-33891-unsplash.jpg" alt=""> -->
            </div>
          </div>
          <div class="row postButtonCont">
            <div class="col-lg-12">
              <div class="postButton">
                <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg active float-right" role="button" aria-pressed="true">Primary link</a>
              </div>
            </div>
          </div>
        </div>
			</article>

		<?php endwhile; ?>
    <?php

    // next_posts_link() usage with max_num_pages
    // previous_posts_link( 'Newer Entries' );
		// next_posts_link( 'Older Entries', $tools_in_taxonomy_term->max_num_pages );
    ?>
		<div class="container">
			<div class="row padAll margin-top">
				<div class="col-lg-12">
					<div class="page_nav centered">
						<?php wplift_pagination(); ?>
					</div>
				</div>
			</div>
		</div>
		<?php wp_reset_postdata(); ?>

	<?php endif; ?>

</section>

<?php/*
// set the "paged" parameter (use 'page' if the query is on a static front page)
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
  'max_num_pages' => 9999,
  'post_type' => array(
    'post',
    'designs',
    'portfolio',
    'book_review'),
  'posts_per_page' => 2,
  'orderby' => 'post_date',
  'paged' => $paged
);
// the query
$the_query = new WP_Query( $args );
?>

<?php if ( $the_query->have_posts() ) : ?>

<?php
// the loop
while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<p><?php the_title(); ?></p>
<?php endwhile; ?>

<?php

// next_posts_link() usage with max_num_pages
next_posts_link( 'Older Entries', $the_query->max_num_pages );
previous_posts_link( 'Newer Entries' );
?>
<p>above</p>
<?php
// clean up after the query and pagination
wp_reset_postdata();
?>

<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; */?>
