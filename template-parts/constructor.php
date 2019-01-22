<?php
  if( have_rows('page_builder') ):

    while( have_rows('page_builder') ) : the_row();

      if( get_row_layout() == 'hero' ):

         get_template_part( 'template-parts/hero', 'none' );

      elseif( get_row_layout() == 'image_and_text' ):

        get_template_part( 'template-parts/image_text', 'none' );

      elseif( get_row_layout() == 'project_skills' ):

        get_template_part( 'template-parts/project_skills', 'none' );

      endif;

    endwhile;

    else : ?>

    <p>there are no parts</p>

  <?php
  endif;
?>
