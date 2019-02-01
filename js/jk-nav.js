jQuery(document).ready(function($) {
  $(window).on('load', () => {
    $('.jk-nav').on('click', () => {
      console.log('nav click');
      $('.jk-nav-cont').addClass('showNav');
    });
    $('.jk-nav-cont').on('click', () => {
      console.log('nav X click');
      $('.jk-nav-cont').removeClass('showNav');
    });
  });
});
