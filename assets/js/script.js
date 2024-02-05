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
    $('.category_grid').owlCarousel({
        items: 5, margin: 30, dots: false, loop: true, nav: false, responsive: {
            0: {
                items: 1
            }, 410: {
                items: 2
            }, 768: {
                items: 3
            }, 992: {
                items: 4
            }, 1200: {
                items: 5
            }
        }
    })
    $('.product_item_img_slider').owlCarousel({
        items: 1,
        margin: 1,
        dots: false,
        loop: false,
        nav: true,
        navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>']
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
    $('.headerMini_popup_link').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('openCart');
        let miniCart = $(this).next('.header-mini-cart');
        miniCart.toggleClass('d-block');
    });
    $('.wishlist-icon').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
    });
    $(document).click(function (e) {
        let target = $(e.target);
        if (target.parents('.headerMini_popup_link').length === 0 && target.parents('.header-mini-cart').length === 0 && target.hasClass('headerMini_popup_link') !== true) {
            let miniCart = $('.header-mini-cart');
            miniCart.removeClass('d-block');
            $('.headerMini_popup_link').removeClass('openCart');
        }
    });

    function f() {
        let media = window.matchMedia('(min-width: 992px)').matches;
        if (media) {
            $('.footer-heading').removeClass('active');
            $('.footer-item ul').show();
        } else {
            $('.footer-item ul').hide();
        }
    }

    f();
    $(window).resize(function () {
        f();
    })

    $('.show-more-btn-main').click(function (e) {
        e.preventDefault();
        var el = $(this);
        el.text(el.text() === 'Show More' ? 'Show Less' : 'Show More');
        console.log($(this).parents('.show-more-btn'))
        $(this).parents('.show-more-btn').prev('.show-more').fadeToggle();
    });
    setTimeout(function () {
        $('#preloader').addClass('d-none');
    }, 500)
    $('.product_delete').click(function (e) {
        e.preventDefault();
        $(this).parents('.product_item').remove();
    });
    $('.forget_btn').click(function (e) {
        e.preventDefault();
        $('.page_popup').addClass('show');
        $('#resetPopupPage').show();
        $('body').addClass('lock-scroll');
    });
    $('.addNewAddressBtn').click(function (e) {
        e.preventDefault();
        $('.page_popup').addClass('show');
        $('#newAddressPopup').show();
        $('body').addClass('lock-scroll');
    });
    $('.downloadOrderDetails, .dashboard_table_buttons .download').click(function (e) {
        e.preventDefault();
        $('.page_popup').addClass('show');
        $('#DownloadOrderDetails').show();
        $('body').addClass('lock-scroll');
    });
    let tableRow = '';
    $('.dashboard_table_buttons .delete').click(function (e) {
        e.preventDefault();
        $('.page_popup').addClass('show');
        $('#dashboardTableDelete').show();
        $('body').addClass('lock-scroll');
        tableRow = $(this).parents('tr');
    });
    $('.delete_dashboard_tableRow').click(function (e) {
        e.preventDefault();
        $(tableRow).remove();
        $('.page_popup').removeClass('show');
        $('#dashboardTableDelete').hide();
        $('body').removeClass('lock-scroll');
    });
    $('.offer_btn').click(function (e) {
        e.preventDefault();
        $('.page_popup').addClass('show');
        $('#createOffer').show();
        $('body').addClass('lock-scroll');
    });
    $('.createTicketWrapper').click(function (e) {
        e.preventDefault();
        $('.page_popup').addClass('show');
        $('#createTicket').show();
        $('body').addClass('lock-scroll');
    });
    $('.close_popup, .page_popup_overlay').click(function (e) {
        e.preventDefault();
        $('.page_popup').removeClass('show');
        $('.page_popup_wrapper').hide();
        $('body').removeClass('lock-scroll');
    });
    $('.password_outer .fa-solid').click(function (e) {
        e.preventDefault();
        if ($(this).hasClass('fa-eye-slash')) {
            $(this).removeClass('fa-eye-slash').addClass('fa-eye');
            $(this).prev('input').attr('type', 'text');
        } else {
            $(this).removeClass('fa-eye').addClass('fa-eye-slash');
            $(this).prev('input').attr('type', 'password');
        }
    });
    $('.product_item_img_slider .owl-prev, .product_item_img_slider .owl-next').click(function (e) {
        e.preventDefault();
    });
    $('.chatTextBox').keyup(function (e) {
        $(this).next('.dashboard_chat_textareaProp').find('.chatLen').text($(this).val().length);
    })
    $('#file').change(function (e) {
        e.preventDefault();
        var filename = $(this).val().replace(/.*(\/|\\)/, '');
        $(this).next('img').hide();
        $(this).parents('label').find('span').text(filename);
    })
    $('.send_offer_btn').click(function (e) {
        e.preventDefault();
        $('.dashboard_conversations_chatOffer').removeClass('d-none');
        $('.page_popup').removeClass('show');
        $('.page_popup_wrapper').hide();
        $('body').removeClass('lock-scroll');
    });
    $('.cancelOfferBtn').click(function (e) {
        e.preventDefault();
        $('.dashboard_conversations_chatOffer').addClass('d-none');
    });
});