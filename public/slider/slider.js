var $ = jQuery.noConflict();
$(window).load(function() {
    $('.lslider').flexslider({
        animation: "fade",
        controlNav: false,
        slideshow: true,
        directionNav: false,
        slideshowSpeed: 3000

    });
    $(function() {
        $('.show_menu').click(function(){
            $('.menu').fadeIn();
            $('.show_menu').fadeOut();
            $('.hide_menu').fadeIn();
        });
        $('.hide_menu').click(function(){
            $('.menu').fadeOut();
            $('.show_menu').fadeIn();
            $('.hide_menu').fadeOut();
        });
    });
});