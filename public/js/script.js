//inisialisasi animatedonscroll
AOS.init({
    duration: 1200,
});
// navbar on scroll
$(window).scroll(function(){
    if($(this).scrollTop() > 100 && $(window).width() > 992){
        $('nav').addClass('nav-scrolled');
    }else{
        $('nav').removeClass('nav-scrolled');
    }

});
// mendeteksi lebar layar untuk responsive navbar;
(function($) {
    var $window = $(window);

    function resize() {
        if ($window.width() < 992) {
            $('nav').addClass('navbar-dark bg-black');
            $('.collapse').addClass('navbar-dark bg-black');
            $('nav').removeClass('fixed-top');
            $('nav').addClass('sticky-top');
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



