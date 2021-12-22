// Javascript Nav Fixed 
$(document).ready(function(){
    $(window).scroll(function(){
        if( $(window).scrollTop() > 100 ) {
            $("nav").addClass("fixed animate__animated animate__fadeInDown");
        } else {
            $("nav").removeClass("fixed animate__animated animate__fadeInDown");
        }
    });

    // Carousel Homepage
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

});        


