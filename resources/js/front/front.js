$(document).ready(function (){
    $('.owl-one').owlCarousel({
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
        dots:false,
        responsive:{
            0:{
                items:1,
                nav: true,
                navContainerClass: 'custom-nav-main-slider',
                navElement:'div',
                navText:[
                    '<img src="/images/btnLeft.png">',
                    '<img src="/images/btnRight.png">',
                ]
            },
        }
    })

    $('.owl-two').owlCarousel({
        margin: 22,
        lazyLoad: true,
        autoWidth:false,
        smartSpeed: 800,
        loop:true,
        dots:false,
        responsive:{
            0:{
                items:1,
                nav:false,
                margin:11
            },
            400:{
                items:1.2,
                nav:false,
                margin:11
            },
            632:{
                items:2,
                nav:false
            },
            1194:{
                items:3,
                nav:true,
            },
            1495:{
                items:4,
                nav:true,
                margin:22,
                navContainerClass: 'custom-nav-program-slider',
                navElement:'div',
                navText:[
                    '<img src="/images/ArrowR.png">',
                    '<img src="/images/ArrowL.png">',
                ]
            }
        }
    })
    $('.owl-three').owlCarousel({
        responsiveClass: true,
        margin: 22,
        lazyLoad: true,
        smartSpeed: 800,
        loop:true,
        dots:false,
        responsive:{
            0:{
                items:1.2,
                nav:false
            },
            815:{
                items:2,
                nav:false
            },
            1400:{
                items:3,
            },
            1700:{
                items:4,
            },
            1730:{
                items:5,
                nav:true,
                navContainerClass: 'custom-nav-trainer-slider',
                navElement:'div',
                navText:[
                    '<img src="/images/ArrowRW.png">',
                    '<img src="/images/ArrowLW.png">',
                ]
            }
        }
    })
    $('.owl-four').owlCarousel({
        responsiveClass: true,
        margin: 20,
        lazyLoad: true,
        smartSpeed: 800,
        loop:true,
        dots:false,
        responsive:{
            0:{
                items:1,
            },
            1000:{
                items:3,
            },
        }
    })
    $('#hamburger').click(function (){
        $('.sideNav').css('display', 'flex').addClass('sideNav-open')
        $('.overlay').css('display', 'flex').click(function (){
            $('.sideNav').hide('slow')
            $(this).hide('slow')
            $('body').css('overflow','auto')
        })
        $('body').css('overflow','hidden')
    })
    $('#food-owl-carousel').owlCarousel({
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
    $('#closeCalendar').click(function (){
        $('.calendarOverlay').css('display','none')
        $('.sideCalendar').css('display','none')
    })
    $('#openCalendar').click(function (){
        $('.calendarOverlay').css('display','block')
        $('.sideCalendar').css('display','flex')
    })



    // youtube

    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag)

    let player;
    $('#playButton').click(function (){

        player = new YT.Player('player', {
            height: 'inherit',
            width: 'inherit',
            videoId: 'M7lc1UVf-VE',
            playerVars: {
                'playsinline': 1,
                'autoplay':1,
            },
            events: {
                'onReady': onPlayerReady,
                // 'onStateChange': onPlayerStateChange
            }
        });
        $('#player').show()
        $('#playButton').hide()
        $('.preview').hide()

    })
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // var done = false;
    // function onPlayerStateChange(event) {
    //     if (event.data == YT.PlayerState.PLAYING && !done) {
    //         setTimeout(stopVideo, 6000);
    //         done = true;
    //     }
    // }
    function stopVideo() {
        player.stopVideo();
    }

})

