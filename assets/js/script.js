class SaveWorld{

    constructor(){}

    sliderTop(){

        $('#slider').slick({
            prevArrow: '<a class="slick-prev" href="#"><span class="dashicons dashicons-arrow-left-alt"></span></a>',
            nextArrow: '<a class="slick-next" href="#"><span class="dashicons dashicons-arrow-right-alt"></span></a>',
            pauseOnFocus: false,
            autoplay: true,
            autoplaySpeed: 3000,
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

}

$(document).ready(function(){

    var saveWorld = new SaveWorld();

    // init slider top
    saveWorld.sliderTop();

    // init slider gallery
    saveWorld.gallerySlick();

    // init slider prices
    saveWorld.sliderPrices();

    // init slider citas
    saveWorld.sliderCitas();

    // init Aos
    AOS.init();

})