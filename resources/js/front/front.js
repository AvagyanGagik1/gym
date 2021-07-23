$(document).ready(function () {
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
        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            992: {
                items: 1,
                nav: true,
                navContainerClass: 'custom-nav-main-slider',
                navElement: 'div',
                navText: [
                    '<img src="/images/btnLeft.png">',
                    '<img src="/images/btnRight.png">',
                ]
            },
        }
    })


    $('.owl-two').owlCarousel({
        margin: 22,
        lazyLoad: true,
        autoWidth: true,
        smartSpeed: 800,
        responsiveClass: true,
        loop: true,
        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: false,
                margin: 11
            },
            400: {
                items: 1.2,
                nav: false,
                margin: 11
            },
            632: {
                items: 2,
                nav: false
            },
            1194: {
                items: 3,
                nav: true,
            },
            1495: {
                items: 4,
                nav: true,
                margin: 22,
                navContainerClass: 'custom-nav-program-slider',
                navElement: 'div',
                navText: [
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
        autoWidth: true,
        smartSpeed: 800,
        loop: true,
        dots: false,
        responsive: {
            0: {
                items: 1.2,
                nav: false
            },
            815: {
                items: 2,
                nav: false
            },
            1400: {
                items: 3,
            },
            1700: {
                items: 4,
            },
            1730: {
                items: 5,
                nav: true,
                navContainerClass: 'custom-nav-trainer-slider',
                navElement: 'div',
                navText: [
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
        loop: true,
        dots: false,
        responsive: {
            0: {
                items: 1.2,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        }
    })
    $('#hamburger').click(function () {
        $('.sideNav').addClass('sideNav-open')
        $('.overlay').css('display', 'flex').click(function () {
            $('.sideNav').removeClass('sideNav-open')
            $(this).hide('slow')
            $('body').css('overflow', 'auto')
        })
        $('body').css('overflow', 'hidden')
    })
    $('.owl-carousel-food').owlCarousel({
        responsiveClass: true,
        margin: 20,
        lazyLoad: true,
        smartSpeed: 800,
        loop: false,
        dots: false,
        autoWidth:true,
        responsive: {
            0: {
                items: 1,
            },
            600:{
                items:2,
                nav:false
            },
            1000: {
                items: 3,
            },
        }
    })
    $('.owl-carousel-comment').owlCarousel({
        autoplay: false,
        lazyLoad: true,
        margin: 20,
        responsiveClass: true,
        autoHeight: true,
        dots: false,
        loop: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            992: {
                items: 1,
                nav: true,
                navContainerClass: 'custom-text-comment',
                navElement: 'div',
                navText: [
                    '<img src="/images/ArrowR.png">',
                    '<img src="/images/ArrowL.png">',
                ]
            },
        }
    })
    $('.calendarOverlay').click(function () {
        $('.calendarOverlay').css('display', 'none')
        $('.sideCalendar').css('display', 'none')
        $('body').css('overflow', 'auto')
    })
    $('#closeCalendar').click(function () {
        $('.calendarOverlay').css('display', 'none')
        $('.sideCalendar').css('display', 'none')
        $('body').css('overflow', 'auto')
    })
    $('#openCalendar').click(function () {
        $('.calendarOverlay').css('display', 'block')
        $('.sideCalendar').css('display', 'flex')
        $('body').css('overflow', 'hidden')
    })
    $('#mainButton').click(function () {
        console.log('pix')
        $('#sideMenuOverlay').css('display', 'block')
        $('.sideMenu').css('display', 'flex')
    })
    $('#sideMenuOverlay').click(function () {
        $('#sideMenuOverlay').css('display', 'none')
        $('.sideMenu').css('display', 'none')
    })


    // youtube

    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag)

    let player;
    $('.playButton').click(function () {
        let video = $(this).attr('data-link')
        let height = window.getComputedStyle($('.preview')[0], null).getPropertyValue("height")
        player = new YT.Player('player', {
            height: height,
            width: 'inherit',
            videoId: video,
            playerVars: {
                'playsinline': 1,
                'autoplay': 1,
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

    $('.calcButton').click(function () {
        let calc = $(this).attr('data-calc')
        let id = $('#' + $(this).attr('data-type'))
        let input = $('#' + $(this).attr('data-input'))
        let number = Number(id.html())
        if (calc === '-') {
            number--
        } else {
            number++
        }
        id.html(number)
        input.val(number)
    })
    $('.FormNotSubmit').submit(function (e) {
        $('.emailError').empty()
        $('.passwordError').empty()
        $('.termsError').empty()
        e.preventDefault()
        let data = new FormData(e.target)
        axios.post(e.target.action, data).then((response) => {
            if (response.status === 200) {

                // sessionStorage.setItem('user',JSON.stringify(response.data))
                window.location = response.data.location
                console.log(response.data)
            }
        }).catch(error => {

            let err = error.response.data.errors
            if (err.email) {
                $('.emailError').removeClass('d-none').html(err.email[0])
            }
            if (err.password) {
                $('.passwordError').removeClass('d-none').html(err.password[0])
            }
            if (err.terms) {
                $('.termsError').removeClass('d-none').html(err.terms[0])
            }
        })
    })
    $('#changePhoto').change(function (e) {
        let data = new FormData()
        data.append('image', e.target.files[0])
        axios.post('/profile/user/change/avatar', data, {
            headers: {
                'content-type': 'multipart/form-data'
            }
        }).then((response) => {
            console.log(response.data)
            $('#avatarImage').attr('src', response.data.avatar)
            $('#headerUserAvatar').attr('src', response.data.avatar)
        })
    })
    $('#userNameSet').change(function () {
        axios.post('/profile/user/change/name', {'name': $(this).val()}).then((response) => {
            console.log(response.data)
        })
    })
    $('#userGenderSet').change(function () {
        axios.post('/profile/user/change/gender', {'gender': $(this).val()}).then((response) => {
            console.log(response.data)
        })
    })
    $('.plusMinusPersonal').click(function () {
        let input = $(this).parent().parent().children('input')
        let value = $(this).parent().parent().children('input').val()
        let calc = $(this).attr('data-calc')
        calc === '+' ? value++ : value--
        input.val(value)
    })

    $('.go-to-workout').click(function () {
        window.location = $(this).attr('data-link')
    })
    $('.news-item-read').click(function () {
        if ($(this).children('span.openButton').hasClass('d-none')) {
            $(this).parent().css('height', '129px')
            $(this).parent().children('p').css('height', '80px')
            $(this).children('span.openButton').removeClass('d-none')
            $(this).children('span.closeButton').addClass('d-none')
        } else {
            $(this).children('span.closeButton').removeClass('d-none')
            $(this).children('span.openButton').addClass('d-none')
            $(this).parent().css('height', 'auto')
            $(this).parent().children('p').css('height', 'auto')
        }
        console.log($(this).children('span.closeButton'), $(this).children('span.openButton'), $(this).parent().height())


    })
    $('.answerInput').click(function () {
        let parent_id = $(this).attr('data-parent')
        let user_id = $(this).attr('data-user')
        let workout_id = $(this).attr('data-workout')
        let program_id = $(this).attr('data-program')
        let button = $(this).attr('data-button')
        let placeholder = $(this).attr('data-place')
        $(this).parent().children('form').append(`
                    <input type="hidden" name="id" value="${program_id}">
                  <input type="hidden" name="parent_id" value="${parent_id}">
                  <input type="hidden" name="user_id" value="${user_id}">
                  <input type="hidden" name="workout_id" value="${workout_id}">
                <textarea placeholder="${placeholder}" name="text"></textarea>
                <button type="submit">${button}</button>
            `)
        $(this).hide()
    })
    $('.closeDescription').click(function (){
        $('.content-user-preview').toggle('slow',function (){
            $(this).toggleClass('visibleContent')
        })
        console.log($(this))
        $(this).children('span.openContent').toggleClass('d-none')
        $(this).children('span.closeContent').toggleClass('d-none')
        $(this).children('img').toggleClass('rotateImg')
    })
    $('.functional-training').click(function (){
        $('#youtubeModal').modal('toggle')
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag)
        let video = $(this).attr('data-link')
        let player = new YT.Player('fatPlayer', {
            height: '100%',
            width: 'inherit',
            videoId: video,
            playerVars: {
                'playsinline': 1,
                'autoplay': 1,
            },
            events: {
                'onReady': onPlayerReady,
                // 'onStateChange': onPlayerStateChange
            }

        });
        function onPlayerReady(event) {
            event.target.playVideo();
        }
        $('.closeYouTube').click(function stopVideo() {
            player.destroy();
        })
    })

})




