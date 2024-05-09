jQuery(document).ready(function() {

    let $ = jQuery;



    // const yatchSlide = jQuery(".yatch-slide").slick({
    //     dots: false,
    //     arrows: false,
    //     autoplay: false,
    //     infinite: true,
    //     rtl: true,
    //     loop: true,
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     pauseOnHover: false,
    //     autoplaySpeed: 0,
    //     speed: 60000,
    //     prevArrow: '<div class="slick-left"><i class="fas fa-chevron-left"></i></div>',
    //     nextArrow: '<div class="slick-right"><i class="fas fa-chevron-right"></i></div>',

    //     cssEase: 'linear',
    //     responsive: [{
    //             breakpoint: 991,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //             }
    //         },
    //         {
    //             breakpoint: 600,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //             }
    //         },
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1,

    //             }
    //         }
    //     ]
    // });



    jQuery('.first-hero-slide').slick({
        slidesToShow: 1,
        fade: true,
        // slidesToScroll: 1,
        autoplay: true,
        dots: false,
        // centerMode: true,
        focusOnSelect: true,
        arrows: true,
        autoplaySpeed: 3000,
        speed: 1000,
        prevArrow: '<div class="slick-left"><i class="fas fa-chevron-left"></i></div>',
        nextArrow: '<div class="slick-right"><i class="fas fa-chevron-right"></i></div>',
    });


    jQuery('section.res-header .phone-bar i').click(function() {
        jQuery('.phone-navigation').addClass('phone-navigation-add');
        jQuery('body').addClass('body-over');
    })

    jQuery('.phone-navigation h3').click(function() {
        jQuery('.phone-navigation').removeClass('phone-navigation-add');
        jQuery('body').removeClass('body-over');
    })


    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {

            $('header').addClass('header-shadow');

        } else {

            $('header').removeClass('header-shadow')

        }

    });


    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {

            $('.res-header').addClass('header-shadow');

        } else {

            $('.res-header').removeClass('header-shadow')

        }

    });
    AOS.init();

    jQuery('.press-slider').slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        arrows: true,
        adaptiveHeight: true,
        dots:false,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
                 breakpoint: 991,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1
                 }
             },
             {
                 breakpoint: 600,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1
                 }
             },
             {
                 breakpoint: 480,
                 settings: {
                     slidesToShow: 1,
                     arrows:false,
                     slidesToScroll: 1,

                 }
             }
        ]
    });




});