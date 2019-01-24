<div class="container pad-top pad-bottom">
  <div class="row">
    <div class="col-md-6 contactItemCont">
      <?php if( have_rows('contact_information') ):
              while( have_rows('contact_information') ): the_row(); ?>

        <div class="contactItem">
          <i class="<?php the_sub_field('contact_fa_icon'); ?>"></i>
        </div>

        <?php if( have_rows('text_or_icon') ):
                while( have_rows('text_or_icon') ): the_row(); ?>

                <?php if( get_row_layout() == 'contact_text' ): ?>

                    <p>text</p>

                  <?php elseif( get_row_layout() == 'contact_icon' ): ?>

                    <p>icon</p>

                  <?php endif; ?>

        <?php endwhile; endif; ?>

      <?php endwhile; endif;?>
    </div>
  </div>
    <div class="row">
      <div class="col-md-12">
        <form class="" action="index.html" method="post">
          This is where the contact form7 goes
        </form>
      </div>
    </div>
</div>
