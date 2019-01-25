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
<div class="container postFilter">
  <div class="row">
    <div class="col-lg-12">
      <div class="dropdown">
        <button class="dropBtn shadow-sm">Filter</button>
        <div class="dropdownContent shadow" id="dropDownCont">
          <a href="#">Link</a>
          <a href="#">Link</a>
          <a href="#">Link</a>
          <a href="#">Link</a>
          <a href="#">Link</a>
          <a href="#">Link</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$query = new WP_Query(array(
  'posts_per_page' => -1,
  'post_type' => 'designs',
  'post_status' => 'publish'
));

while($query->have_posts()) :
?>

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
<?php endwhile; wp_reset_query();?>
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
