jQuery(document).ready(function ($) {

    var window_size = jQuery(window).width();
    new WOW().init();
    var currentRequest = null;
 
    /* floor-plans slider */
    new Swiper('.floor-plans-slider', {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
            draggable: true,
        },
        pagination: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            1200: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 2,
            },
            0: {
                slidesPerView: 1.5,
            },
        },
    });


    //Gallery Slider
    new Swiper('.gallery-slider', {
        slidesPerView: 4,
        slidesPerColumn: 2,
        spaceBetween: 20,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        slidesPerColumnFill: 'column',
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
            draggable: true,
        },
        pagination: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
            breakpoints: {
                1499: {
                    slidesPerView: 3,
                },
                1199: {
                    slidesPerView: 2,
                },
                991: {
                    slidesPerView: 2,
                },
                0: {
                    slidesPerView: 2,
                },
            },
    });


    /* review slider */
    new Swiper('.review-slider', {
        slidesPerView: 1,
        spaceBetween: 35,
        loop: true,
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: false,
        },
        pagination: false,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            1200: {
                slidesPerView: 1,
            },
            991: {
                slidesPerView: 1,
            },
            0: {
                slidesPerView: 1,
            },
        },
    });

    var swiperThumbnails = new Swiper('.swiper-thumbnails', {
        spaceBetween: 10,
        slidesPerView: 10,
        // resistanceRatio: 0.6,
        //slidesOffsetBefore: 50,
        //slidesOffsetAfter: 50, 
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            1200: {
                slidesPerView: 10,
            },
            991: {
                slidesPerView: 5,
            },
            575: {
                slidesPerView: 3,
            },
            0: {
                slidesPerView: 3,
            },
        },       
    });
    
    var swiperGallery = new Swiper('.swiper-gallery', {
        spaceBetween: 10,
        simulateTouch: true,
        preloadImages: false,
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
            draggable: true,
        },
        loop: true,
        lazy: true,
        lazy: {
            loadPrevNext: false,
            loadOnTransitionStart: true
        },
        speed: 300,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        thumbs: {
            swiper: swiperThumbnails
        },
        
    });
    



    /* Scroll To Top JS */
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#scrollToTop').fadeIn();
        } else {
            jQuery('#scrollToTop').fadeOut();
        }
    });
    jQuery('#scrollToTop').click(function () {
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    /* Sticky Header JS */
    jQuery(window).scroll(function () { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    jQuery("#menu-item-21 a").first().attr('href', 'javascript:void(0);');
    jQuery("#main-menu .menu-item a").click(function () {
        jQuery("#site-navigation").removeClass("toggled");
    });




});


/* Window Load and Resize JS */
jQuery(window).on('load resize', function () {
    var window_size = jQuery(window).width();
    if (window_size <= 991) {



    }
});