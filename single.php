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

    <div class="container pad-top-cont">
      <div class="row">
        <div class="col-lg-12">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
