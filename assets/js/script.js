$(document).ready(function () {
    $('.hero_slider').owlCarousel({
        items: 1, dots: true, loop: true, nav: false, responsive: {
            0: {
                margin: 0
            }, 992: {
                margin: 1
            }
        }
    })
    $('.navbar-toggler').click(function (e) {
        $(this).parents('.navbar').toggleClass('open');
    });
    $('.footer-heading').click(function (e) {
        e.preventDefault();
        let media = window.matchMedia('(max-width: 991px)').matches;
        if (media) {
            $(this).toggleClass('active').next('ul').fadeToggle();
        }
    });
    $('.headerMini_cart').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('openCart');
        let miniCart = $('.header-mini-cart');
        miniCart.fadeToggle(300);
    });
    $(document).click(function (e) {
        let target = $(e.target);
        if (target.parents('.headerMini_cart').length === 0 && target.parents('.header-mini-cart').length === 0) {
            let miniCart = $('.header-mini-cart');
            miniCart.fadeOut(300).removeClass('openCart');
        }
        // let miniCart = $('.header-mini-cart');
        // if (target.parents('.headerMini_cart').hasClass('openCart')) {
        //     miniCart.fadeOut(300);
        // }
    });
});