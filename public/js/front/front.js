/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/front/front.js ***!
  \*************************************/
$(document).ready(function () {
  $('#owl-carousel').owlCarousel({
    autoplay: true,
    lazyLoad: true,
    margin: 20,

    /*
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    */
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 5000,
    smartSpeed: 800,
    nav: true,
    responsive: {
      0: {
        items: 1
      }
    }
  });
  $('#owl-carousel-program').owlCarousel({
    responsiveClass: true,
    margin: 22,
    lazyLoad: true,
    autoWidth: false,
    smartSpeed: 800,
    responsive: {
      0: {
        items: 1.2
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      },
      1100: {
        items: 4
      }
    }
  });
  $('#owl-carousel-trainer').owlCarousel({
    responsiveClass: true,
    margin: 22,
    lazyLoad: true,
    smartSpeed: 800,
    loop: false,
    responsive: {
      0: {
        items: 1.2
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      },
      1100: {
        items: 4
      }
    }
  });
  $('#olw-carousel-news').owlCarousel({
    responsiveClass: true,
    margin: 20,
    lazyLoad: true,
    smartSpeed: 800,
    loop: false,
    responsive: {
      0: {
        items: 1.2
      },
      1000: {
        items: 3
      }
    }
  });
  $('#hamburger').click(function () {
    $('.sideNav').css('display', 'flex').addClass('sideNav-open');
    $('.overlay').css('display', 'flex').click(function () {
      $('.sideNav').hide('slow');
      $(this).hide('slow');
      $('body').css('overflow', 'auto');
    });
    $('body').css('overflow', 'hidden');
  });
  $('#food-owl-carousel').owlCarousel({
    responsiveClass: true,
    margin: 20,
    lazyLoad: true,
    smartSpeed: 800,
    loop: false,
    responsive: {
      0: {
        items: 1.2
      },
      1000: {
        items: 3
      }
    }
  });
  $('#closeCalendar').click(function () {
    $('.calendarOverlay').css('display', 'none');
    $('.sideCalendar').css('display', 'none');
  });
  $('#openCalendar').click(function () {
    $('.calendarOverlay').css('display', 'block');
    $('.sideCalendar').css('display', 'flex');
  });
});
/******/ })()
;