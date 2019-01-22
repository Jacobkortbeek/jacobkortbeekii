<div class="container">
  <div class="row margin-top backgroundGrey curvedCorner padAll bottomBorderRandom shadow">

    <div class="col-lg-6 currentProject margin-bot">
      <h2 class="text-center"><?php the_sub_field('current_project_title'); ?></h2>

      <div class="fullCenter imgCont">
        <img class="shadow-sm" src="<?php the_sub_field('current_project_image'); ?>" alt="">
        <i class="far fa-hand-pointer tap dNonePc"></i>
        <div class="overlay">
          <h4 class="centered"><?php the_sub_field('current_project_name'); ?></h4>
          <a href="<?php the_sub_field('current_project_link'); ?>"><i class="fas fa-link"></i></a>
        </div>
      </div>

    </div>

    <div class="col-lg-6">
      <h2 class="text-center"><?php the_sub_field('skills_title'); ?></h2>
      <ul class="skillList">
        <?php if( have_rows('skills') ):
                while( have_rows('skills') ) : the_row();
           ?>
           <li data-toggle="tooltip" data-placement="bottom" title="<?php the_sub_field('skill_tool_tip'); ?>"><a href="<?php the_sub_field('skilllink'); ?>"><i class="<?php the_sub_field('skill_fa_icon'); ?>"></i></a></li>
         <?php endwhile; endif; ?>
      </ul>
    </div>
  </div>
</div>
