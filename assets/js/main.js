(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  const portfolioLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });
  const kegiatanLightbox = GLightbox({
    selector: '.kegiatan-lightbox'
  });

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
      $(".navbar").addClass("sticky-top shadow-sm");
    } else {
      $(".navbar").removeClass("sticky-top shadow-sm");
    }
  });

  // Smooth scrolling on the navbar links
  $(".navbar-nav a").on('click', function (event) {
      if (this.hash !== "") {
          event.preventDefault();

          $('html, body').animate({
              scrollTop: $(this.hash).offset().top - 45
          }, 500, 'easeInOutExpo');
      }
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 500, "easeInOutExpo");
    return false;
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });
  new Swiper(".hero-slider", {
    speed: 400,
    loop: true,
    autoplay: false,
    // {
    //     delay: 5000,
    //     disableOnInteraction: false
    //   },

    slidesPerView: 1,
    spaceBetween: 0,
  });

  
  $('.tabs-1-slider').owlCarousel({
    loop:false,
    margin:10,
    dots: false,
    nav: true,
    navText : [
        '<i class="fas fa-chevron-left"></i>',
        '<i class="fas fa-chevron-right"></i>'
    ],
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,
        },
        1000:{
            items:2,
        }
    }
})

  // Testimonials carousel
  
    $('.tabs-2-slider').owlCarousel({
        loop:false,
        margin:10,
        dots: false,
    nav: true,
    navText : [
        '<i class="fas fa-chevron-left"></i>',
        '<i class="fas fa-chevron-right"></i>'
    ],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:2,
            }
        }
    })
    $('.tabs-3-slider').owlCarousel({
        loop:false,
        margin:10,
        dots: false,
        nav: true,
        navText : [
            '<i class="fas fa-chevron-left"></i>',
            '<i class="fas fa-chevron-right"></i>'
        ],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:2,
            }
        }
    })

    var cardSlider = new Swiper(".training-service-slider", {
        autoplay: false,
        // {
        // 	delay: 4000,
        // 	disableOnInteraction: false
        // },
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        slidesPerView: 4,
        spaceBetween: 30,
        breakpoints: {
          // when window width is >= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          // when window width is >= 640px
          600: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          767: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          // when window is <= 991px
          991: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
        },
      });

    var cardSlider = new Swiper(".training-service-full-slider", {
        autoplay: false,
        // {
        // 	delay: 4000,
        // 	disableOnInteraction: false
        // },
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        slidesPerView: 2,
        spaceBetween: 30,
        breakpoints: {
          // when window width is >= 480px
          480: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          // when window width is >= 640px
          600: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          767: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          // when window is <= 991px
          991: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
        },
      });
    
    

})(jQuery);
