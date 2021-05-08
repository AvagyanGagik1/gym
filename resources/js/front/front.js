$(document).ready(function (){
    $('#owl-carousel').owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        margin: 20,
        /*
       animateOut: 'fadeOut',
       animateIn: 'fadeIn',
       */
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
        }
    })
    $('#owl-carousel-program').owlCarousel({
        responsiveClass: true,
        margin: 20,
        responsive:{
            0:{
                items:1.2,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            },
            1100:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })
})
