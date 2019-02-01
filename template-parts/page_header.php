



<div class="container-fluid headerAbout fullCenter" style="color: <?php the_sub_field( 'heading_text_color' ); ?>;
<?php
  $pageHeader = get_sub_field( 'page_header_image' );
  if($pageHeader == 'image') :
 ?>
    background-image: linear-gradient( <?php the_sub_field( 'page_hader_rgb_color_value' ); ?>, <?php the_sub_field( 'page_hader_rgb_color_value' ); ?>), url('<?php the_sub_field('header_page_image'); ?>'); ">
  <?php
    elseif($pageHeader == 'color') :
  ?>
  background-color: <?php the_sub_field( 'page_header_background_color' ); ?>">
<?php endif; ?>
  <div class="row">
    <div class="col-lg-12">
      <h1><?php the_sub_field('page_header_title'); ?></h1>
    </div>
  </div>
</div>
