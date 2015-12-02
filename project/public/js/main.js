$(document).ready(function(){
    $("div").find(".game-post").hover(function() {
        $(this).addClass('transition');

    }, function() {
        $(this).removeClass('transition');
    });
});



//  Home  - image background

    $(".game-post").hover(function(){
        var background = $(this).find('.img').css('background-image').replace('url(', '').replace(')', '');
        console.log(background);
        $("body").addClass('backgroundTransition');
        setTimeout(function(){
            $('body').css("background",'url(' + background + ')')
            $('body').removeClass('backgroundTransition');
        },100);

    }, function(){
        var defaultBackground = "../img/background.jpg";
        $("body").addClass('backgroundTransition');
        setTimeout(function(){
            $('body').css("background",'url(' + defaultBackground + ')');
            $('body').removeClass('backgroundTransition');
        },100);
    });

    // Game-info page - Full screen bg video

    $('.info-game .section').css('margin-top', window.innerHeight + 'px');



    $(".section .video-table .fa").click( function (){
        $('video').prop('muted', !$('video').prop('muted'));

        if ( $('.section .video-table .fa-volume-off').hasClass('hidden') ) {
            $('.section .video-table .hidden').removeClass('hidden');
            $('.section .video-table .fa-volume-up').addClass('hidden');
        } else {
            $('.section .video-table .hidden').removeClass('hidden');
            $('.section .video-table .fa-volume-off').addClass('hidden');
        }

    });




