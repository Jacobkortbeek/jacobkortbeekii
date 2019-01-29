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

      // the query to set the posts per page to 5
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array('posts_per_page' => 5, 'paged' => $paged );
      query_posts($args); ?>
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
                <div class="padAll">
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
    <?php next_posts_link(); ?>
    <?php previous_posts_link(); ?>
    

		<?php wp_reset_postdata(); ?>

	<?php endif; ?>

</section>
