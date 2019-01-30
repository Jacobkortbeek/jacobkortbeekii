<?php get_header(); ?>
<div class="post">
  <?php while ( have_posts() ) : the_post(); ?>
    <div class="contianer-fluid fullCenter heading">
      <div class="row">
        <div class="col-lg-12">
          <h2><?php the_title(); ?></h2>
        </div>
      </div>
    </div>

    <div class="container img pad-top-cont">
      <div class="row">
        <div class="col-lg-4">
          <?php the_post_thumbnail(); ?>
          <a href="#" class="round fullCenter"><i class="fas fa-link"></i></a>
        </div>
        <div class="col-lg-8">
          <?php the_content(); ?>
        </div>
      </div>
    </div>

    <div class="container pad-top-cont">
      <div class="row">

      </div>
    </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
