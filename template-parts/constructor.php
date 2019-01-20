<?php
  if( have_rows('page_builder') ):

    while( hvae_rows('page_builder') ) : the_row();

      if( get_row_layout() == 'hero' ):

         get_template_part( 'template-parts/hero', 'none' );

      // elseif( get_row_layout() == 'nextpart' ):
      //   this is the next part

      endif;

    endwhile;

    else : ?>

    <p>there are no parts</p>

  <?php
  endif;
?>
