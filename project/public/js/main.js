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

    //ADMINPANEL
    //FADES IN THE HEADNAV ON PAGE LOAD
    $('.admin .headnav, .admin .subnav, .admin .home, .admin .section').css('opacity', 0);
    $('.admin .headnav, .admin .subnav, .admin .home, .admin .section').fadeTo(1000, 1)

    //Admin Game Script

    var recentlyDeleted = false;
    //Delete
    $('.admin .btn-delete').click(function(){
        if (confirm('Are you sure?')) {
            var _this = $(this);
            var type = _this.data('type');
            var data = {};
            var id = _this.parent('tr').next().attr('id');
            data['_token'] = $('.csrf input').val();
            data['input'] = JSON.stringify({id : id, type: type});
            $.ajax({
                type: "POST",
                url: 'ajax/remove',
                data: data,
                success: function(result) {
                    _this.parent('tr').hide('slow');
                    _this.parent('tr').next().hide('slow');
                }
            });
            recentlyDeleted = true;
        }
    });

    //Row toggling
    $('.admin .clickable').click(function (){
        var isNonactive = true;
        //Check if its already active
        if($(this).hasClass('active-row-title') ) {
            isNonactive = false;
        }

        //Check if its deleted
        if (recentlyDeleted == true) {
            isNonactive = false;
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
        recentlyDeleted = false;
    });

    //Show save after change
    $('.admin input, .admin select, .admin textarea').click(function(){
        var btnLocation = $(this).closest('.detail').prev();
        showAndHide(btnLocation, '.btn-save', '.btn-delete');
    });

    function showAndHide(btnLocation, show, hide) {
        btnLocation.find(show).show();
        btnLocation.find(hide).hide();
    }

    // All Save Methods
    $('.admin-game .btn-save').click(function(){
        saveAdmin($(this), 'ajax/games/edit');
    });

    $('.admin-user .btn-save').click(function(){
        saveAdmin($(this), 'ajax/user/edit');
    });

    $('.admin-shop .btn-save').click(function(){
        saveAdmin($(this), 'ajax/shop/edit');
    });



    function saveAdmin(_this, url) {
        var formLocation = _this.closest('tr').next();
        var btnLocation = _this.closest('.clickable');
        var id = formLocation.attr('id');
        btnLocation.addClass('loading');
        var gameObject = {
            'game_id' : id
        };

        $('#' + id + ' input').each(function(){
            gameObject[$(this).attr('class')] = $(this).val();
        });

        $('#' + id + ' textarea').each(function(){
            gameObject[$(this).attr('class')] = $(this).val();
        });

        $('#' + id + ' select').each(function(){
            gameObject[$(this).attr('class')] = $(this).val();
        });

        var data = {};
        data['input'] = JSON.stringify(gameObject);
        data['_token'] = $('.csrf input').val();

        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: function(result) {
                $('.debug').html(result);
                console.log(result);
                if (result = true) {
                    setTimeout(function(){
                        btnLocation.removeClass('loading');
                    }, 1000);
                    showAndHide(btnLocation, '.btn-delete', '.btn-save');
                }
            }
        });
    }

    // COOKIE ADD / CHANGE PRODUCT SCRIPT
    if (!$('body').hasClass('admin')) {
        var prevCart = JSON.parse( $.cookie('cart') ); // GET PREVIOUS OR STANDARD CART ON LOAD.
        countProducts(); // SET CART COUNTER ON LOAD
    }

    $('.buy-now .add_to_cookie').click(function(){
        var input = $(this).parent().find('.quantity');
        var newQt = parseInt( input.val() );
        var newProductId = parseInt( $(this).attr('id') );
        var clothes = $(this).parent().find('.productoption');
        if (clothes.length > 0) {
            var clothesSize = clothes.find('.size').val();
            var clothesColor = clothes.find('.color').val();
        }

        // IF QUANTITY IS ABOVE 0
        if (input.val() > 0) {

            // SET PREVIOUS OR STANDARD
            prevCart = JSON.parse( $.cookie('cart') );

            // ADD ALERT
            if (input.val() == 1) {
                $.smkAlert({
                    text: 'product toegevoegd',
                    type: 'success',
                    time: 5,
                    position: 'top-left'
                });
            } else {
                $.smkAlert({
                    text: 'producten toegevoegd',
                    type: 'success',
                    time: 5,
                    position: 'top-left'
                });
            }


            // SET INPUT TO 1 AFTER ADDING TO CART
            input.val(1);

            var alreadyExists = false;
            $.each(prevCart, function( index, value ) {
                var oldProductId =  value[0];
                var oldQt = value[1];
                var oldColor = value[2];
                var oldSize = value[3];

                // IF item already exists
                if (oldProductId == newProductId && alreadyExists == false && oldColor == clothesColor && oldSize == clothesSize) {
                    value[1] = oldQt + newQt;
                    alreadyExists = true;
                }

            });

            // ADD / SAVE NEW PRODUCT ITEM
            if (alreadyExists == false) {
                prevCart.push([
                    newProductId,
                    newQt,
                    clothesColor,
                    clothesSize
                ]);
            }

            // SET CART COUNTER
            countProducts();

            // SET COOKIE
            $.cookie('cart', JSON.stringify(prevCart), { expires: 7, path: '/'});

            console.log($.cookie('cart') );
        }
    });

    // Destroy Product in cart
    $('.shopping-cart .destroy_this').click(function(){
        var cart = JSON.parse( $.cookie('cart') );
        var cart_id = $(this).data('id');
        var array_index = 0;
        // Find array by id and get index
        $.each(cart, function( index, value) {
            if (value[0] == cart_id) {
                array_index = index;
            }
        });
        // Delete Array by index
        cart.splice(array_index, 1);

        //Set cookie
        $.cookie('cart', JSON.stringify(cart), { expires: 7, path: '/'});

        // Delete table row also
        $(this).closest('tr').remove();

        // Alert
        $.smkAlert({
            text: 'successvol verwijderd',
            type: 'success',
            time: 5,
            position: 'top-left'
        });

        //UPDATE TOTAL PRICE ON PRODUCT REMOVE FROM CART
        var total = 0;
        $('.cartPrice').each(function(){
            total += parseFloat($(this).html());
        });
        total = total.toFixed(2);
        $('#total').html(total);

        //UPDATE VAT PRICE ON PRODUCT REMOVE FROM CART
        var vat = total/100*21;
        vat = vat.toFixed(2);
        $('#vat').html(vat);


        //UPDATE EXVAT PRICE ON PRODUCT REMOVE FROM CART
        var exvat = total - vat;
        exvat = exvat.toFixed(2);
        $('#exvat').html(exvat);

    });
    // PRODUCT COUNTER
    function countProducts() {
        var i = 0;
        $.each(prevCart, function( index, value) {
            i += value[1];
        });
        $('.list-group-item .item-count').text( i );
    }

    // Buttons Add / minus by product
    $('.buy-now .add').click(function(){
        var input = $(this).parent().find('.quantity');
        var i = parseInt(input.val());
        input.val(i + 1);
    });

    $('.buy-now .minus').click(function(){
        var input = $(this).parent().find('.quantity');
        var i = parseInt(input.val());
        if (i > 1) { input.val(i - 1) }
    });

    // message order
    if ($('.container').hasClass('message_user')) {
        console.log('detected');
        if ($('.container').hasClass('success')) {
            console.log('success');
            $.smkAlert({
                text: 'Your payment went successful',
                type: 'success',
                time: 5,
                position: 'top-left'
            });
        } else {
            console.log('Failed {}');
            $.smkAlert({
                text: 'Your payment failed',
                type: 'danger',
                time: 5,
                position: 'top-left'
            });
        }
    }

});
