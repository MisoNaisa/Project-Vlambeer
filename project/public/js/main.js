$().ready(function() {
    $('#content').hover(function() {
        $('#content').addClass('transition');
    },
    function() {
        $('#content').removeClass('transistion');
    })
});