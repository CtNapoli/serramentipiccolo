jQuery(document).ready(function($) {
    if($('#full-header-slider .swiper-container')){
        var swiper = new Swiper('#full-header-slider .swiper-container', {
            loop: true,
            navigation: {
                nextEl: '.custom-next',
                prevEl: '.custom-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    }

    var w = Math.max(document.documentElement.clientHeight, window.innerWidth || 0);

    if (w > 1200) {
        if($('#products .swiper-container')){
            var swiper = new Swiper('#products .swiper-container', {
                slidesPerView: 3,
                spaceBetween: 10,
                freeMode: true,
                pagination: {
                    el: '.custom-pagination',
                    clickable: true,
                },
            });
        }
    } else if (w > 992 && w < 1200) {
        if($('#products .swiper-container')){
            var swiper = new Swiper('#products .swiper-container', {
                slidesPerView: 2,
                spaceBetween: 10,
                freeMode: true,
                pagination: {
                    el: '.custom-pagination',
                    clickable: true,
                },
            });
        }
    } else {
        if($('#products .swiper-container')){
            var swiper = new Swiper('#products .swiper-container', {
                grabCursor: true,
                pagination: {
                    el: '.custom-pagination',
                    clickable: true,
                },
            });
        }
    }
});