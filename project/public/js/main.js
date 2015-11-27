$(document).ready(function(){
    $("div").find(".game-post").hover(function() {
        $(this).addClass('transition');

    }, function() {
        $(this).removeClass('transition');
    });
});



//    Jordey zijn zooi
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
