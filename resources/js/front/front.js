$(document).ready(function (){
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
        responsive:{
            0:{
                items:1,
            },
        }
    })

    $('#owl-carousel-program').owlCarousel({
        responsiveClass: true,
        margin: 20,
        lazyLoad: true,
        smartSpeed: 800,
        responsive:{
            0:{
                items:1.2,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            },
            1100:{
                items:4,
            }
        }
    })
    $('#owl-carousel-trainer').owlCarousel({
        responsiveClass: true,
        margin: 20,
        lazyLoad: true,
        smartSpeed: 800,
        loop: false,
        responsive:{
            0:{
                items:1.2,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            },
            1100:{
                items:4,
            }
        }
    })
    $('#olw-carousel-news').owlCarousel({
        responsiveClass: true,
        margin: 20,
        lazyLoad: true,
        smartSpeed: 800,
        loop: false,
        responsive:{
            0:{
                items:1.2,
            },
            1000:{
                items:3,
            },
        }
    })
})
