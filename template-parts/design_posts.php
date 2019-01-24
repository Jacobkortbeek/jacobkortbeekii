<div class="container-fluid">
  <div class="container pad-top">
    <div class="row pad-bottom">
      <div class="col-md-12">
        <h1 class="text-center">My Designs</h1>
      </div>
    </div>
    <div class="row">

      <?php

        $num_posts = get_option( 'posts_per_page' );

        $args = array(
          'post_type' => 'designs',
          'posts_per_page' => $num_posts,
          'orderby' => 'post_date'
        );

        $query = new WP_Query( $args );

      ?>
      <?php $i=0; if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
        <?php if( $i < 4 ) : ?>
          <div class="col-md-6">
            <div class="portCont">
              <h4 class="text-center"><?php the_title(); ?></h4>
              <div class="fullCenter imgCont shadow">
                <?php the_post_thumbnail(); ?>
                <i class="far fa-hand-pointer tap dNonePc"></i>
                <div class="overlay">
                  <h4 class="centered"><?php the_field( 'hover_text' ); ?></h4>
                  <a href="<?php the_permalink(); ?>"><i class="fab fa-readme"></i></a>
                </div>
              </div>
            </div>
          </div>

    <?php endif; ?>
      <?php $i++;?>
      <?php endwhile; endif; wp_reset_postdata(); ?>

    </div>
    <!-- <div class="row">

      <div class="col-md-6">
        <div class="portCont">
          <h4 class="text-center">Title of Design</h4>
          <div class="fullCenter imgCont shadow">
            <img src="./assets/img/lukasz-szmigiel-33891-unsplash.jpg" alt="">
            <div class="overlay">
              <h4 class="centered">This is the test text</h4>
              <a href="#"><i class="fab fa-readme"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="row pad-top-cont">
      <div class="col-md-12">
        <button type="button" class="btn btn-primary float-right">See My Desgin Library</button>
      </div>
    </div>
  </div>
</div>
