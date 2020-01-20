$(document).ready(function(){
    $("#telefone").mask("(00) 00000-0000");
    $('.parallax').parallax();
    $(".button-collapse").sideNav();
    $('.slider').slider({
        interval: 2000

    });
    $('.slider2').slider({
        indicators: false,
        height: 200,
        interval: 2000



    });
    
    $('.modal').modal();


    $(window).scroll(function(){
        if($(window).scrollTop()>585){

            $('#navindex').addClass('teal accent-4');
        }else{
            $('#navindex').removeClass('teal accent-4');
        }

    });


    new WOW().init();
    


});

