$(function () {
     $('.navbar-nav li a').each(function () {
         var location = window.location.href;
         var link = this.href;
         if(location == link) {
             $(this).parent().addClass("active");
         }
     });
    $(".navbar-toggle").on("click", function () {
        $(this).toggleClass("active");
    });

    if ($(window).width() <='750') {
        $(".navbar").addClass("navbar-fixed-top");
    }

});


$(window).scroll(function () {
    if ($(window).width() >'750') {
        scrollTop = $("body").scrollTop();
        //navbarOffset = $(".navbar").offset().top;
        var navbarOffset = 215;
        if ($(window).width() <='1024')
            navbarOffset=116;

        if (scrollTop > navbarOffset && !$(".navbar").hasClass("navbar-fixed-top"))
            $(".navbar").addClass("navbar-fixed-top");
        else if (scrollTop <= navbarOffset && $(".navbar").hasClass("navbar-fixed-top"))
            $(".navbar").removeClass("navbar-fixed-top");
    }
});