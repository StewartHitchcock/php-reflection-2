$('.slides').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    dots: true,
    appenddots:$()
});


$('.hamburger').click(function(){
    $(this).toggleClass('is-active');
    $('.body').toggleClass('open');
    $('#scrollbar').toggleClass('sb-class');
    $('#stop-scroll').toggleClass('stop-scroll');
})

// Code to disable the div on click

$('#stop-scroll').click(function(){
    $(this).toggleClass('stop-scroll');
    $('.hamburger').toggleClass('is-active');
    $('.body').toggleClass('open'); 
    $('#scrollbar').toggleClass('sb-class');
})





