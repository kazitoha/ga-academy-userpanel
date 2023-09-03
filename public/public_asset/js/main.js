$(document).ready(function () {

    // / owl carousle js----
$('.home_slider').owlCarousel({
    loop: true,
    autoplay: true,
    items:1,
    autoplayTimeout: 6000,
    nav: true,
    navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],


});


   // / owl carousle js----
   $('.voice_parts').owlCarousel({
    loop: true,
    autoplay: true,
    items:1,
    autoplayTimeout: 7000,
    // animateIn: 'fadeIn',

    dots: true,
    nav: false,
});

// news slider----
$('.owl-news').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  autoHeight: true,
  dots:true,
  animateIn:true,
  rtl:false,
  autoplayTimeout:2500,
  autoplay:true,
  responsive:{
      0:{
          items:1
      },

      600:{
          items:1
      },
      1000:{
          items:3
      }
  }
});




//Research Activities--------------
$('.research-owl').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  autoHeight: true,
  dots:true,
  animateIn:true,
  rtl:false,
  autoplayTimeout:2500,
  autoplay:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:3
      }
  }
});




//FEATURED- NEWS & EVENTS--------------
$('.feature-event-news').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  autoHeight: true,
  dots:false,
  animateIn:true,
  rtl:false,
  autoplayTimeout:5000,
  autoplay:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:2
      }
  }
});
//Vice Chancellor Speech & Quotes--------------
$('.voice-owl').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  autoHeight: true,
  dots:true,
  animateIn:true,
  rtl:false,
  autoplayTimeout:2500,
  autoplay:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:2
      }
  }
});






//    stickytop menu
$(window).scroll(function(){
    var scrolling=$(this).scrollTop();
     var sticky=$('.sticky_top');
     if(scrolling>50){
         sticky .addClass('menu_bg');
     }
     else{
           sticky .removeClass('menu_bg');
     }
  });

  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 150});

  var html_body = $('html, body');
  $('nav a').on('click', function () {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
          html_body.animate({
              scrollTop: target.offset().top - 50
          }, 2000);
          return false;
      }
  }
  });

  // back back-to-top
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn();
    } else {
      $('.back-to-top').fadeOut();
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    },2000);
    return false;
  });

  // counter js start---
  $('.counter').counterUp({
    delay: 10,
    time: 2000
  });
  $('.counter').addClass('animated fadeInDownBig');
  $('h3').addClass('animated fadeIn');


  // venobox jss
$('.venobox').venobox({

});


//gallary image filter
var mixer = mixitup('.gallery-filter');
var mixer = mixitup(containerEl);
var mixer = mixitup(containerEl, {
    selectors: {
        target: '.blog-item'
    },
    animation: {
        duration: 300
    }
});



});
