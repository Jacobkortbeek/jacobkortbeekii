<div class="container-fluid bg-boneWhite shadow-lg">
  <div class="container margin-top pad-top-cont pad-bottom">
    <div class="row pad-bottom">
      <div class="col-lg-12">
        <h1 class="text-center">My Blog</h1>
      </div>
    </div>
    <div class="row">
      <?php

        $num_posts = get_option( 'posts_per_page' );

        $args = array(
          'post_type' => 'post',
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
            <img src="<?php the_post_thumbnail(); ?>" alt="">
            <i class="far fa-hand-pointer tapBlog dNonePc"></i>
          </div>
          <div class="jk-card-content">
            <h2><?php the_title(); ?></h2>
            <p>
              <?php the_excerpt(); ?>
            </p>
          </div>
          <div class="jk-card-reveal">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?>t</p>
            <a href="#">Read More</a>
          </div>
        </div>

      </div>
    <?php endif; ?>
      <?php $i++;?>
      <?php endwhile; endif; wp_reset_postdata(); ?>



      <!-- <div class="col-lg-4">

        <div class="jk-card bottomBorderRandom shadow margin-bot">
          <div class="jk-card-image">
            <img src="./assets/img/lukasz-szmigiel-33891-unsplash.jpg" alt="">
            <i class="far fa-hand-pointer tapBlog dNonePc"></i>
          </div>
          <div class="jk-card-content">
            <h2>Title</h2>
            <p>
              exerpt
            </p>
          </div>
          <div class="jk-card-reveal">
            <h2>title</h2>
            <p>more experpt</p>
            <a href="#">Read More</a>
          </div>
        </div>

      </div>
      <div class="col-lg-4">

        <div class="jk-card bottomBorderRandom shadow-lg margin-bot">
          <div class="jk-card-image">
            <img src="./assets/img/lukasz-szmigiel-33891-unsplash.jpg" alt="">
            <i class="far fa-hand-pointer tapBlog dNonePc"></i>
          </div>
          <div class="jk-card-content">
            <h2>Title</h2>
            <p>
              exerpt
            </p>
          </div>
          <div class="jk-card-reveal">
            <h2>title</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#">Read More</a>
          </div>
        </div>

      </div> -->
    </div>
    <div class="row pad-top-cont">
      <div class="col-lg-12">
        <button type="button" class="btn btn-primary float-right">See All My Blog Posts</button>
      </div>
    </div>
  </div>
</div>
