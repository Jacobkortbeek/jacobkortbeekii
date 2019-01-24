<div class="container-fluid bg-boneWhite shadow">
  <div class="container margin-top pad-top-cont pad-bottom">
    <div class="row pad-bottom">
      <div class="col-md-12">
        <h1 class="text-center">My Book Reviews</h1>
      </div>
    </div>
    <div class="row">
      <?php

        $num_posts = get_option( 'posts_per_page' );

        $args = array(
          'post_type' => 'book_review',
          'posts_per_page' => $num_posts,
          'orderby' => 'post_date'
        );

        $query = new WP_Query( $args );

      ?>
      <?php $i=0; if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
        <?php if( $i < 3 ) : ?>
          <div class="col-lg-4">

            <div class="jk-card bottomBorderRandom shadow margin-bot">
              <div class="jk-card-image">
                <?php the_post_thumbnail(); ?>
                <i class="far fa-hand-pointer tapBlog dNonePc"></i>
              </div>
              <div class="jk-card-content">
                <h2><?php the_title(); ?></h2>
                  <?php the_excerpt(); ?>
              </div>
              <div class="jk-card-reveal">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <a href="<?php the_permalink(); ?>">Read More</a>
              </div>
            </div>

          </div>
    <?php endif; ?>
      <?php $i++;?>
      <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
    <div class="row pad-top-cont">
      <div class="col-md-12">
        <a href="<?php the_sub_field('book_button_link'); ?>"></a> <button type="button" class="btn btn-primary float-right"><?php the_sub_field('book_button_text'); ?></button>
      </div>
    </div>
  </div>
</div>
