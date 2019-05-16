// navbar on scroll
$(window).scroll(function(){
    if($(this).scrollTop() > 100){
        $('nav').addClass('nav-scrolled');
    }else{
        $('nav').removeClass('nav-scrolled');
    }

});
// mendeteksi lebar layar untuk responsive navbar;
(function($) {
    var $window = $(window);
        // $html = $('html');

    function resize() {
        if ($window.width() < 992) {
            $('nav').addClass('navbar-dark bg-black');
            $('.collapse').addClass('navbar-dark bg-black');
            $('.navbar-nav').addClass('mx-auto');
            $('.navbar-nav').removeClass('ml-auto');
            $('.navbar-collapse').addClass('text-center');
        }else{
            $('nav').removeClass('navbar-dark bg-black');
            $('.collapse').removeClass('navbar-dark bg-black');
        }
    }
    $window
        .resize(resize)
        .trigger('resize');
})(jQuery);

// jquery animate scroll dengan easing
$('.page-scroll').on('click',function(e){

    var tujuan = $(this).attr('href');
    var eTujuan = $(tujuan);
    // $('body').scrollTop(100);
    $('body').animate({
        scrollTop: eTujuan.offset().top-10
    });
    e.preventDefault();
})



