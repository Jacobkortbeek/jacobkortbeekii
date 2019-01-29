<?php
  if( have_rows('page_builder') ):

    while( have_rows('page_builder') ) : the_row();

      if( get_row_layout() == 'hero' ):

         get_template_part( 'template-parts/hero', 'none' );

      elseif( get_row_layout() == 'image_and_text' ):

        get_template_part( 'template-parts/image_text', 'none' );

      elseif( get_row_layout() == 'project_skills' ):

        get_template_part( 'template-parts/project_skills', 'none' );

      elseif( get_row_layout() == 'blog_posts' ):

        get_template_part( 'template-parts/blog_posts', 'none' );

      elseif( get_row_layout() == 'portfolio_posts' ):

        get_template_part( 'template-parts/portfolio_posts', 'none' );

      elseif( get_row_layout() == 'design_posts' ):

        get_template_part( 'template-parts/design_posts', 'none' );

      elseif( get_row_layout() == 'book_review' ):

        get_template_part( 'template-parts/book_review', 'none' );

      elseif( get_row_layout() == 'contact' ):

        get_template_part( 'template-parts/contact', 'none' );

      elseif( get_row_layout() == 'page_header' ):

        get_template_part( 'template-parts/page_header', 'none' );

      elseif( get_row_layout() == 'double_box' ):

        get_template_part( 'template-parts/double_box', 'none' );

      elseif( get_row_layout() == 'posts_display' ):

        get_template_part( 'template-parts/posts_display', 'none' );

      endif;

    endwhile;

    else : ?>

    <p>there are no parts</p>

  <?php
  endif;
?>
