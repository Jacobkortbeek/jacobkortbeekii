<div class="container">
  <div class="row margin-top padAll">
    <div class="col-lg-6">
      <div class="experience backgroundGrey curvedCorner padAll bottomBorderRandom shadow margin-bot">
        <h2 class="text-center"><?php the_sub_field('box_one_title'); ?></h2>
        <ul class="skillList">
          <?php if( have_rows('box_one_icons') ) : while( have_rows('box_one_icons') ) : the_row(); ?>
          <li data-toggle="tooltip" data-placement="bottom" title="<?php the_sub_field('box_one_fa_icon_tool_tip'); ?>"><a href="<?php the_sub_field('box_one_fa_icon_link'); ?>"><i class="<?php the_sub_field('box_one_fa_icon'); ?>"></i></a></li>
        <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="learning backgroundGrey curvedCorner padAll bottomBorderRandom shadow margin-bot">
        <h2 class="text-center"><?php the_sub_field('box_two_title'); ?></h2>
        <ul class="skillList">
          <?php if( have_rows('box_two_icons') ) : while( have_rows('box_two_icons') ) : the_row(); ?>
          <?php $iconText = get_sub_field('icon_or_text'); ?>
          <li data-toggle="tooltip" data-placement="bottom" title="<?php the_sub_field('box_two_fa_icon_tool_tip'); ?>"><a href="<?php the_sub_field('box_two_fa_icon_link'); ?>"><i class="<?php if( $iconText == 'icon' ): the_sub_field('box_two_fa_icon'); endif; ?>">
            <?php if( $iconText == 'text' ): the_sub_field('text'); endif; ?>
            <?php echo $iconText; ?> hello</i></a></li>
        <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
