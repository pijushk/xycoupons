//JS of dropdown
/*$(document).ready(function () {
 $(".dropdown").hover(
 function () {
 $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("fast");
 $(this).toggleClass('open');
 },
 function () {
 $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("fast");
 $(this).toggleClass('open');
 }
 );
 });*/

// JS of Sticky
var sticky = new Waypoint.Sticky({
    element: $("nav")[0]
});

//JS of slider
$("#owl-carouselSlide").owlCarousel({
    nav: true,
    dots: false,
    navText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>"
    ],
    slideSpeed: 300,
    paginationSpeed: 400,
    singleItem: true,
    autoplay: true,
    loop: true,

    // "singleItem:true" is a shortcut for:
    items: 1
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false

});
//JS of tranding Banner
$('.owl-carousel-tbanner').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 15,
    responsiveClass: true,
    dots: true,
    nav: false,
    navText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>"
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
});

//jQuery Mobile MeanMenu
jQuery('nav#mobile-menu').meanmenu();
$('.dropdown-toggle').dropdown();

// JS of Call to Back
$(document).ready(function ($) {
    $('body').scrollToTop({skin: 'cycle'});
});
//JS of dropdown
/*$(document).ready(function () {
 $(".dropdown").hover(
 function () {
 $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("fast");
 $(this).toggleClass('open');
 },
 function () {
 $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("fast");
 $(this).toggleClass('open');
 }
 );
 });*/

// JS of Sticky
var sticky = new Waypoint.Sticky({
    element: $("nav")[0]
});

//JS of slider
$("#owl-carouselSlide").owlCarousel({
    nav: true,
    dots: true,
    navText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>"
    ],
    slideSpeed: 300,
    paginationSpeed: 400,
    singleItem: true,
    autoplay: true,
    loop: true,

    // "singleItem:true" is a shortcut for:
    items: 1
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false

});
//JS of Recently used offers
$('.owl-carousel02').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 0,
    responsiveClass: true,
    dots: false,
    nav: true,
    navText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>"
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 4
        },
        1000: {
            items: 6
        }
    }
});

//jQuery Mobile MeanMenu
jQuery('nav#mobile-menu').meanmenu();
$('.dropdown-toggle').dropdown();

// JS of Call to Back
$(document).ready(function ($) {
    $('body').scrollToTop({skin: 'cycle'});
});

//JS toggle of product_category
$(document).on("click", "#readmore", function () {
    $("#showmore").toggle();
});

/*$('.dynamic_text').readmore({
 speed: 75,
 collapsedHeight: 40,
 moreLink: '<a href="#">more</a>',
 lessLink: '<a href="#">less</a>'
 });*/
$('body').on('click', '.lr-btn', function (e) {
    e.preventDefault();
    var a = $(this).data('type');
    if (a === 1) {
        $('#registerModal').modal('show');
    } else {
        $('#loginModal').modal('show');
    }
});
$('body').on('click', '.register-user-btn', function (e) {
    e.preventDefault();
    var form = $('#register-form');
    $.ajax({
        url: 'register',
        method: 'POST',
        data: form.serialize(),
        success: function (data) {
            console.log(data);
            var successMessage = '';
            $.each(data, function (key, value) {
                successMessage += value + '<br/>';
            });
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_SUCCESS,
                title: 'Success',
                message: successMessage,
            });
        },
        error: function (data, error) {
            //console.log(data);
            var errors = $.parseJSON(data.responseText);
            var errorList = '';
            $.each(errors, function (key, value) {
                errorList += value + '<br/>';
            });
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_DANGER,
                title: 'Error',
                message: errorList,
            });
        }
    });
});

$('body').on('click', '.login-user-button', function (e) {
    e.preventDefault();
    var form = $('#login-form');
    $.ajax({
        url: 'login',
        method: 'POST',
        data: form.serialize(),
        success: function (data) {
            var successMessage = '';
            $.each(data, function (key, value) {
                successMessage += value + '<br/>';
            });
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_SUCCESS,
                title: 'Success',
                message: successMessage,
            });
            window.location.reload();
        },
        error: function (data, error) {
            //console.log(data);
            var errors = $.parseJSON(data.responseText);
            var errorList = '';
            $.each(errors, function (key, value) {
                errorList += value + '<br/>';
            });
            BootstrapDialog.show({
                type: BootstrapDialog.TYPE_DANGER,
                title: 'Error',
                message: errorList,
            });
        }
    });
});
$(document).on('click', '.xy-cpn-get', function (e) {
   e.preventDefault();
    var a = $(this).data('title'),
        b = $(this).data('cpn-expire'),
        c = $(this).data('cpnid'),
        d = $(this).data('type'),
        e = $(this).data('cpn-merchant'),
        f = $(this).data('user-type');
    if(f === "nl"){
        $('#couponModalLabel').html(a);
        if(typeof b != 'undefined'){
            $('#cpn-expire').html("Offer ends "+b+" @<strong>xycoupons.com</strong>");
        }
        $('#couponModal').modal('show');
    }else{

    }
});
$("body").on('click', '.psl-b > p', function (e) {
    e.preventDefault();
    window.location.href = $(this).parent().find('a').attr('href');
});