<div class="container pad-top-cont">
  <div class="row img-text">
    <div class="col-lg-6 margin-bot">
      <div class="hvr-img fullCenter">
        <img class="round shadow" src="<?php the_sub_field('headshot_image'); ?>" alt="">
        <i class="far fa-hand-pointer tapBlog dNonePc"></i>
        <ul class="circle-container">
          <?php if( have_rows('social_media') ):
                  while( have_rows('social_media') ) : the_row();
             ?>
             <li><a href="<?php the_sub_field('fa_link'); ?>"><i class="<?php the_sub_field('fa_icon'); ?>"></i></a></li>
           <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
    <div class="col-lg-6">
      <h1><?php the_sub_field('text_header'); ?></h1>
      <p>
        <?php the_sub_field('text_content'); ?>
      </p>
      <br />
      <a href="<?php the_sub_field('button_link') ?>"><button type="button" class="btn btn-primary float-right"><?php the_sub_field('button_text') ?></button></a>
    </div>
  </div>
</div>
