(function ($) {
    "use strict";

    $(document).ready(function () {

        // Your JS & jQuery Code here
        let langImg = $(".topnav.topnav--lang .languages.drop .pPanel ul li.active img");
        $(".topnav.topnav--lang .languages.drop .topnav-item span.topnav-item--image").html(langImg);

    });// end of document ready

    // $("#myCarousel")('cycle');
    // $("#myCarousel").on("slide.bs.carousel", function (e) {
    //     var $e = $(e.relatedTarget);
    //     var idx = $e.index();
    //     var itemsPerSlide = 1;
    //     var totalItems = $(".carousel-item").length;
    //
    //     if (idx >= totalItems - (itemsPerSlide - 1)) {
    //         var it = itemsPerSlide - (totalItems - idx);
    //         for (var i = 0; i < it; i++) {
    //             // append slides to end
    //             if (e.direction == "left") {
    //                 $(".carousel-item")
    //                     .eq(i)
    //                     .appendTo(".carousel-inner");
    //             } else {
    //                 $(".carousel-item")
    //                     .eq(0)
    //                     .appendTo($(this).find(".carousel-inner"));
    //             }
    //         }
    //     }
    // });

    $('.range_slider').slick({
        centerMode: true,
        arrows: true,
        centerPadding: '60px',
        prevArrow: "<button type='button' class='slick-prev'><i class='fa fa-chevron-left fa-2x' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next'><i class='fa fa-chevron-right fa-2x' aria-hidden='true'></i></button>",
        slidesToShow: 5,
        slidesToScroll: 3,
        // autoplay: true,
        // infinite: true,
        // autoplaySpeed: 2000,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

})(jQuery);