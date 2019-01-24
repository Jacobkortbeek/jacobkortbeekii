jQuery(document).ready(function($) {
  // jQuery('p:empty').remove();
  //colours for the social icons background
  $(window).on("load", function() {
    $('.fa-twitter').parent().css("background-color", "#00aced");
    $('.fa-linkedin').parent().css("background-color", "#0077b5");
    $('.fa-github').parent().css("background-color", "#ffffff");
    $('.fa-instagram').parent().css("background-image", "linear-gradient(to bottom right, #5442d6, #b927a3, #f01f3f, #fec053)");
    $('.fa-codepen').parent().css("background-color", "#26282c");
    $('.fa-codepen').parent().css("color", "#ffffff");
    $('.fa-whatsapp').parent().css("background-color", "#25d366");

    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });

  $('.imgCont').hover(
    function(){
      $(".imgCont .overlay svg").addClass('animated rubberBand');
      $(".imgCont h4").addClass('animated bounceIn');

    },
    function(){
      $(".imgCont i").removeClass('animated rubberBand');
      $(".imgCont .overlay svg").removeClass('animated bounceIn');
    }
  );


  //this is a toDo: make the whole li animated without comprimising the location.
  $('.hvr-img').hover(
    function(){
      $(".hvr-img a").each((i) => {
        setTimeout(() => {
          $(".hvr-img a").eq(i).removeClass('bounceOutUp');
          $(".hvr-img a").eq(i).addClass('animated bounceInDown');
        }, 150 * (i+1));
      });
    },
    function(){
      $(".hvr-img a").each((i) => {
        setTimeout(() => {
          $(".hvr-img a").eq(i).removeClass('bounceInDown');
          $(".hvr-img a").eq(i).addClass('bounceOutUp');
        }, 150 * (i+1));
      });
    }
  );

  });

  $(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    console.log(wScroll);
    $('.foreGround-mountain').css({
      'transform' : 'translate(0px, '+ wScroll /5 +'% )'
    });
    $('.main-mountain').css({
      'transform' : 'translate(0px, '+ wScroll /5 +'% )'
    });
    $('.top-moutain').css({
      'transform' : 'translate(0px, '+ wScroll /3 +'% )'
    });

    //skill animated
    if($('.skillList')[0]){
      if (wScroll > $('.skillList').offset().top - 1100) {
        $('.skillList li').each((i) => {
          setTimeout(function(){
            $('.skillList li').eq(i).css({
              'opacity': '1',
            });
            $('.skillList li').eq(i).addClass('animated rollIn');
          }, 150 * (i+1));
        });
      }
    };

  });

  //Random color function
  $(window).on('load', () => {
    var rannumber1=Math.floor(Math.random() * 256 );
    var rannumber2=Math.floor(Math.random() * 256 );
    var rannumber3=Math.floor(Math.random() * 256 );
    var ranrgb="rgb("+rannumber1+","+rannumber2+","+rannumber3+")";

    $('.bottomBorderRandom').each((i) => {
      var rannumber1=Math.floor(Math.random() * 256 );
      var rannumber2=Math.floor(Math.random() * 256 );
      var rannumber3=Math.floor(Math.random() * 256 );
      var ranrgb="rgb("+rannumber1+","+rannumber2+","+rannumber3+")";
      $('.bottomBorderRandom').eq(i).addClass('bbr'+i);
      $('.bbr'+i).css({'border-bottom': '5px solid '+ ranrgb});
      console.log('here '+ i );
      console.log('is this: ' + this);
      console.log('color: ' + ranrgb);
    });

    let bottomBorderRandLength = $('.bottomBorderRandom').length;
    console.log(bottomBorderRandLength);
  });

  function dropDown() {
    $('#dropDownCont').toggleClass('showD animated fadeInDown');
    console.log('D clicked');
  }

  //animsition
  $(document).ready(function() {
    $(".animsition").animsition({
      inClass: 'rotate-in-sm',
      outClass: 'rotate-out-sm',
      inDuration: 1500,
      outDuration: 800,
      linkElement: '.animsition-link',
      // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
      loading: true,
      loadingParentElement: 'body', //animsition wrapper element
      loadingClass: 'animsition-loading',
      loadingInner: '', // e.g '<img src="loading.svg" />'
      timeout: false,
      timeoutCountdown: 5000,
      onLoadEvent: true,
      browser: [ 'animation-duration', '-webkit-animation-duration'],
      // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
      // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
      overlay : false,
      overlayClass : 'animsition-overlay-slide',
      overlayParentElement : 'body',
      transition: function(url){ window.location.href = url; }
    });
  });

});
