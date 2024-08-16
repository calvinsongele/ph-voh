 /* ==============
 ========= js documentation ==========================

 * template name: GOBANKQ 
 * version: 1.0
 * description: Banking & Finance HTML Template
 * author: softivus
 * author url: https://www.templatemonster.com/authors/softivus/

    ==================================================

     01. wow init
     -------------------------------------------------
     02. magnificPopup
     -------------------------------------------------
     03. odometer counter
     -------------------------------------------------
     04. form validate
     -------------------------------------------------
     05. card-slide slider
     -------------------------------------------------
     06. testimonial slider
     -------------------------------------------------
     07. mission slider
     -------------------------------------------------
     08. details slider
     -------------------------------------------------
     09. loan content slider
     -------------------------------------------------
     10. CircularProgressBar
     -------------------------------------------------

    ==================================================
============== */

(function ($) {
    "use strict";

    jQuery(document).ready(function () {

        // wow init
        // new WOW().init();
        new WOW({
            offset: 200
          }).init();
          
        //   niceSelect
        //   $('select').niceSelect();

        // magnific-popup
        $('.popup-video').magnificPopup({
            type: 'iframe'
        });

        // odometer counter
        $(".odometer").each(function () {
            $(this).isInViewport(function (status) {
                if (status === "entered") {
                    for (
                        var i = 0;
                        i < document.querySelectorAll(".odometer").length;
                        i++
                    ) {
                        var el = document.querySelectorAll(".odometer")[i];
                        el.innerHTML = el.getAttribute("data-odometer-final");
                    }
                }
            });
        });

        // form validate
        $("#frmContactus").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                message: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true
                },
                subject: {
                    required: true
                }
            },
            messages: {
                name: {
                    minlength: "Name should be at least 2 characters"
                },
                message: {
                    number: "Offer should be at least 5 characters"
                }
            }
        });


        // card-slide slider
        $(".card-slide")
            .not(".slick-initialized")
            .slick({
                infinite: true,
                // autoplay: true,
                focusOnSelect: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 1500,
                arrows: true,
                dots: false,
                prevArrow: $(".prev-card-slide"),
                nextArrow: $(".next-card-slide"),
                fade:true,
            });

        // testimonial slider
        $(".testimonial-slide")
        .not(".slick-initialized")
        .slick({
            infinite: true,
            autoplay: true,
            focusOnSelect: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 1500,
            arrows: true,
            dots: false,
            prevArrow: $(".prev-testimonial"),
            nextArrow: $(".next-testimonial"),
        });

        // mission slider
        $(".mission-slider")
        .not(".slick-initialized")
        .slick({
            infinite: true,
            autoplay: true,
            focusOnSelect: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            speed: 1500,
            arrows: true,
            dots: false,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        // details slider
        $(".details-slider")
        .not(".slick-initialized")
        .slick({
            infinite: true,
            autoplay: true,
            focusOnSelect: true,
            slidesToShow: 6,
            slidesToScroll: 6,
            speed: 1500,
            arrows: true,
            dots: false,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    },
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });

        // loan content slider
        $(".loan-content-slider")
        .not(".slick-initialized")
        .slick({
            infinite: true,
            autoplay: true,
            focusOnSelect: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            speed: 1500,
            arrows: true,
            dots: false,
            prevArrow: $(".prev-loan"),
            nextArrow: $(".next-loan"),
            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 4,
                    },
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });

        // sponsor-slider__company
        $('#sponsor-slider__company').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            // autoplay: true,
            autoplaySpeed: 0,
            speed: 5000,
            pauseOnHover: false,
            cssEase: 'linear',
            arrows: false,
            variableWidth:true,
        });


        // CircularProgressBar
        const elements = [].slice.call(document.querySelectorAll(".pie"));
        const circle = new CircularProgressBar("pie");

        const config = {
            root: null,
            rootMargin: "0px",
            threshold: 0.75,
            
        };

        const ovserver = new IntersectionObserver((entries, observer) => {
            entries.map((entry) => {
                if (entry.isIntersecting && entry.intersectionRatio > 0.75) {
                    circle.initial(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, config);

        elements.map((item) => {
            ovserver.observe(item);
        });


    });
})(jQuery);