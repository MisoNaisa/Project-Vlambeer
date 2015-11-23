$(document).ready(function(){
    $("div").find(".game-post").hover(function() {
        $(this).addClass('transition');

    }, function() {
        $(this).removeClass('transition');
    });
});
//
//.find( "span" )
//    .hover(function() {
//        $( this ).addClass( "hilite" );
//    }, function() {
//        $( this ).removeClass( "hilite" );
//    })