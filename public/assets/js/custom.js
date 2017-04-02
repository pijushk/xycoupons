//JS of dropdown
$(document).ready(function () {
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
});

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
$(document).ready(function () {
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
});

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

$('.dynamic_text').readmore({
    speed: 75,
    collapsedHeight: 40,
    moreLink: '<a href="#">more</a>',
    lessLink: '<a href="#">less</a>'
});