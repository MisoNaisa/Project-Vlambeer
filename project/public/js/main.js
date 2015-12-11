$(document).ready(function(){
    $("div").find(".game-post").hover(function() {
        $(this).addClass('transition');

    }, function() {
        $(this).removeClass('transition');
    });

    $('.flexslider').flexslider({
        animation: "slide"
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

    $('.video-enable .section').css('margin-top', window.innerHeight + 'px');



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

    //Admin Game Script

    $('.admin .clickable').click(function (){
        var isNonactive = true;
        //Check if its already active
        if($(this).hasClass('active-row-title') ) {
            var isNonactive = false;
        }

        // Set All rows to default
        $('.admin .detail:visible').toggle();
        $('.admin .active-row-title').removeClass('active-row-title');

        //Only when item isn't already active
        if (isNonactive) {
            // Set new active class.
            $(this).next().toggle("fast");
            $(this).toggleClass('active-row-title');
        }

    });

    $('.admin input').click(function(){
        var btnLocation = $(this).closest('.detail').prev()
        btnLocation.find('.btn-save').show();
        btnLocation.find('.btn-delete').hide();
    });

    $('.admin .btn-save').click(function(){
        var formLocation = $(this).closest('tr').next();
        var id = formLocation.attr('id');
        var gameObject = {
            'id' : id
        };
        $('#' + id + ' input').each(function(){
            gameObject[$(this).attr('class')] = $(this).val();
        });

        var data = {};
        data['input'] = JSON.stringify(gameObject);
        data['_method'] = 'PUT';
        data['_token'] = $('.csrf input').val();

        $.ajax({
            type: "POST",
            url: 'games/edit.php',
            data: data,
            success: function(result) {
                $('.debug').html(result);
            },
            error:function(exception){alert('Exeption:'+exception);}
        });
    });


});