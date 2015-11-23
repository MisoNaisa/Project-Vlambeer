$().ready(function() {
    $('.game-post').hover(function() {
        $('.game-post').addClass('transition');
    },
    function() {
        $('.game-post').removeClass('transistion');
    })
});