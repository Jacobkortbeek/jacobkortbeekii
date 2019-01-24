<div class="container pad-top pad-bottom">
  <div class="row">
    <div class="col-md-6 contactItemCont">
      <?php if( have_rows('contact_information') ):
              while( have_rows('contact_information') ) : the_row();
         ?>
         <div class="contactItem">
           <i class="<?php the_sub_field('contact_fa_icon'); ?>"></i>
           <?php
           if( have_rows('text_or_icon') ):

             while( have_rows('text_or_icon') ) : the_row();

               if( get_row_layout() == 'contact_text' ): ?>

                  <a href="<?php the_sub_field('contact_info_link'); ?>"><?php the_sub_field('contact_info'); ?></a>

              <?php elseif( get_row_layout() == 'contact_icon' ): ?>
                <?php if(have_rows('contact_icons') ) : while( have_rows( 'contact_icons' ) ) : the_row(); ?>
                 <li data-toggle="tooltip" data-placement="bottom" title="<?php the_sub_field('contact_icon_fa_tool_top'); ?>"><a href="<?php the_sub_field('contact_info_fa_link'); ?>"><i class="<?php the_sub_field('contact_icon_fa'); ?>"></i></a></li>
               <?php endwhile; endif;?>
           <?php else : ?>
           <p>there is no contetn</p>
         <?php endwhile; endif; ?>
         </div>
       <?php endwhile; endif;?>
      <!-- <div class="contactItem">
        <i class="fas fa-phone"></i>
        <a href="#">+44(0) 7511 035 174</a>
      </div>
      <div class="contactItem">
        <i class="fas fa-phone"></i>
        <a href="#">+44(0) 7511 035 174</a>
      </div> -->
    </div>
    <!-- <div class="col-md-6 contactItemCont">
      <div class="contactItem">
        <i class="fas fa-phone"></i>
        <a href="#">+44(0) 7511 035 174</a>
      </div>
      <div class="contactItem">
        <i class="fas fa-phone"></i>
        <a href="#">+44(0) 7511 035 174</a>
      </div>
    </div> -->
  </div>
  <div class="row">
    <div class="col-md-12">
      <form class="" action="index.html" method="post">
        This is where the contact form7 goes
      </form>
    </div>
  </div>
</div>
