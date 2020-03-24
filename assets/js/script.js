class SaveWorld{

    constructor(){}

    sliderTop(){

        $('#slider').slick({
            prevArrow: '<a class="slick-prev" href="#"><span class="dashicons dashicons-arrow-left-alt"></span></a>',
            nextArrow: '<a class="slick-next" href="#"><span class="dashicons dashicons-arrow-right-alt"></span></a>',
            pauseOnFocus: false,
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true
        })

    }

    gallerySlick(){

        $('.sliderGallery').slick({
            arrows : false,
            pauseOnFocus: false,
            autoplay: true,
            autoplaySpeed: 3000,
            slidesToShow: 8,
            slidesToScroll: 1,
        })

    }

    sliderPrices(){

        $('.paseosPrecios').slick({
            arrows : false,
            pauseOnFocus: false,
            autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: 2.5,
            slidesToScroll: 1,
            centerMode: true
        })

    }

    sliderCitas(){

        $('#citas .overlay .centerContainer .center').slick({
            arrows : false,
            pauseOnFocus: true,
            autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true
        })

    }

    sliderSponsors(){

        var carousel = $('.box_trans .sponsors .slider_sponsors');

        if(carousel.hasClass('slick-initialized')){
            carousel.slick('unslick');
        }

        carousel.slick({
            arrows : false,
            pauseOnFocus: true,
            autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: 5,
            slidesToScroll: 1,
            fade: false
        })

    }

    activeMobileMenu(){

        $('header').toggleClass('activeMobile');

    }

    scrollingBodyOn(){

        $('body').addClass('scrolling');

    }

    scrollingBodyOff(){

        $('body').removeClass('scrolling');

    }

    scrollSmooth(){

        $('a[href*="#"]').smoothscroll({
            duration:  400,
            easing: 'swing'
        });

    }

    proximas_travesias_buttons(){

        $(document).on('click', '#container_box_proximas_travesias .buttons_modal a', function(e){

            e.preventDefault();

            

        })

    }

}

window.saveWorld = new SaveWorld();

$(document).ready(function(){

    // init slider top
    window.saveWorld.sliderTop();

    // init slider gallery
    window.saveWorld.gallerySlick();

    // init slider prices
    window.saveWorld.sliderPrices();

    // init slider citas
    window.saveWorld.sliderCitas();

    // scrollSmooth
    window.saveWorld.scrollSmooth();

    // slider sponsors
    // window.saveWorld.sliderSponsors();

    // init Aos
    AOS.init({
        throttleDelay: 500,
        duration: 1000
    });

})

$(document).on('click', 'header .mobileMenu', function(){

    window.saveWorld.activeMobileMenu();

})

$(window).scroll(function(){

    if(window.scrollY > 70){
        window.saveWorld.scrollingBodyOn();
    }else{
        window.saveWorld.scrollingBodyOff();
    }

})

$(document).on('click', '#paseosEspeciales .paseosPrecios .item .body a', function(){

    setTimeout(function(){
        window.saveWorld.sliderSponsors();
    }, 500);

})