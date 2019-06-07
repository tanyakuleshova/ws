$(function () {
    var url = window.location.href;
    var segments = url.split( '/' );
    var id = segments[4];

    $("li[data-id]").each(function(){
        var list = $(this).data("id");
        if(list == id){
            console.log(list);
            $('[data-id*="' +  list + '"] .cat_list').css("font-weight", "bold");
        }
    });


    $('.menu-btn-open').click(openMenu);
    $('.menu-btn-close').click(closeMenu);

    function openMenu() {
        $('.main-nav').addClass('main-nav--active');
        $('.menu-btn-open').addClass('none');
        $('.menu-btn-close').removeClass('none');
        
    }

      function closeMenu() {
        $('.main-nav').removeClass('main-nav--active');
        $('.menu-btn-close').addClass('none');
        $('.menu-btn-open').removeClass('none');
        
    }
    new WOW().init();
    setTimeout(function() {
        $('.sound-ul').removeClass("sound-ul-none");
    }, 500);


});