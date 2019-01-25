<div class="container pad-top pad-bottom">
  <div class="row">

      <?php if( have_rows('contact_information') ):
              while( have_rows('contact_information') ): the_row(); ?>
      <div class="col-md-6 contactItemCont">
        <div class="contactItem">
          <i class="<?php the_sub_field('contact_fa_icon'); ?>"></i>


          <?php if( have_rows('text_or_icon') ): while( have_rows('text_or_icon') ): the_row(); ?>

                  <?php if( get_row_layout() == 'contact_text' ): ?>

                      <a class="marginLeft" href="<?php the_sub_field('contact_info_link'); ?>"><?php the_sub_field('contact_info'); ?></a>

                    <?php elseif( get_row_layout() == 'contact_icon' ): ?>
                      <ul class="contactIcons">
                      <?php if( have_rows('contact_icons') ) : while( have_rows('contact_icons') ) : the_row(); ?>

                          <li data-toggle="tooltip" data-placement="bottom" title="@name"><a href="#"><i class="fab fa-twitter fullCenter"></i></a></li>

                      <?php endwhile; endif; ?>
                      </ul>
                    <?php endif; ?>

          <?php endwhile; endif; ?>
        </div>
      </div>
      <?php endwhile; endif;?>
  </div>
    <div class="row">
      <div class="col-md-12">
        <?php the_sub_field('contact_form_link'); ?>
      </div>
    </div>
</div>
