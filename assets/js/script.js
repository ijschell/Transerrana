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
            responsive : [
                {
                    breakpoint : 800,
                    settings : {
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint : 550,
                    settings : {
                        slidesToShow: 2
                    }
                }
            ]
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
            centerMode: true,
            responsive : [
                {
                    breakpoint : 800,
                    settings : {
                        slidesToShow: 2,
                        centerMode: false
                    }
                },
                {
                    breakpoint : 550,
                    settings : {
                        slidesToShow: 1,
                        centerMode: false
                    }
                },
            ]
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
            fade: false,
            responsive : [
                {
                    breakpoint : 550,
                    settings : {
                        slidesToShow: 2,
                    }
                }
            ]
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

    contact_select(){

        // get possibles options
        var options = [];

        $('#options_to_contact > div').each(function(k, v){

            options.push($(v).data('title'));

        });

        if(options.length > 0){

            // repace contact select for options
            $('#menu_paseos').html('');

            $('#menu_paseos').append('<option value="-- Seleccionar paseo --">-- Seleccionar paseo --</option>');

            for (var index = 0; index < options.length; index++) {
                var element = options[index];
                
                $('#menu_paseos').append('<option value="'+element+'">'+element+'</option>');

            }

        }

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

    // select contact
    window.saveWorld.contact_select();

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