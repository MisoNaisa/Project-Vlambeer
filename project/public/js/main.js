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

    //Admin Game Script

    var recentlyDeleted = false;
    //Delete
    $('.admin .btn-delete').click(function(){
        if (confirm('Are you sure?')) {
            var _this = $(this);
            var data = {};
            var id = _this.parent('tr').next().attr('id');
            data['_method'] = 'DELETE';
            data['_token'] = $('.csrf input').val();
            $.ajax({
                type: "POST",
                url: 'games/' + id + '/destroy',
                data: data,
                success: function() {
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
    $('.admin input').click(function(){
        var btnLocation = $(this).closest('.detail').prev();
        showAndHide(btnLocation, '.btn-save', '.btn-delete');
    });

    function showAndHide(btnLocation, show, hide) {
        btnLocation.find(show).show();
        btnLocation.find(hide).hide();
    }

    // Save
    $('.admin .btn-save').click(function(){
        var _this = $(this);
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

        var data = {};
        data['input'] = JSON.stringify(gameObject);
        data['_method'] = 'PUT';
        data['_token'] = $('.csrf input').val();

        $.ajax({
            type: "POST",
            url: 'games/edit.php',
            data: data,
            success: function(result) {
                if (result = true) {
                    setTimeout(function(){
                        btnLocation.removeClass('loading');
                    }, 1000);
                    showAndHide(btnLocation, '.btn-delete', '.btn-save');
                }
            }
        });
    });

    if ($('.container').hasClass('cookie_cart_on')) {
        // COOKIE ADD / CHANGE PRODUCT SCRIPT
        var prevCart = JSON.parse($.cookie('cart')); // GET PREVIOUS OR STANDARD CART ON LOAD.
        countProducts(); // SET CART COUNTER ON LOAD


        $('.buy-now .add_to_cookie').click(function () {
            var input = $(this).parent().find('.quantity');
            var newQt = parseInt(input.val());
            var newProductId = parseInt($(this).attr('id'));
            var clothes = $(this).parent().find('.productoption');
            if (clothes.length > 0) {
                var clothesSize = clothes.find('.size').val();
                var clothesColor = clothes.find('.color').val();
            }

            // IF QUANTITY IS ABOVE 0
            if (input.val() > 0) {

                // SET PREVIOUS OR STANDARD
                prevCart = JSON.parse($.cookie('cart'));

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
                $.each(prevCart, function (index, value) {
                    var oldProductId = value[0];
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
                $.cookie('cart', JSON.stringify(prevCart), {expires: 7, path: '/'});

                console.log($.cookie('cart'));
            }
        });

        // Destroy Product in cart
        $('.shopping-cart .destroy_this').click(function () {
            var cart = JSON.parse($.cookie('cart'));
            var cart_id = $(this).data('id');
            var array_index = 0;
            // Find array by id and get index
            $.each(cart, function (index, value) {
                if (value[0] == cart_id) {
                    array_index = index;
                }
            });
            // Delete Array by index
            cart.splice(array_index, 1);

            //Set cookie
            $.cookie('cart', JSON.stringify(cart), {expires: 7, path: '/'});

            // Delete table row also
            $(this).closest('tr').remove();

            // Alert
            $.smkAlert({
                text: 'successvol verwijderd',
                type: 'success',
                time: 5,
                position: 'top-left'
            });

        });

    }

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


    //ADMINPANEL NAV
        ClearSelected();

    //IF SELECTED DONT CHANGE BACKGROUND
    $('.admin').hover(function(){
        if($('.admin').hasClass('navSelected')) {
            $(this).css('background', '#008C76');
            $(this).css('background', '');
        }
    });

    //HEADNAV AND SUBNAV - REMOVE EXISTING "SELECTED" CLASS
    function ClearSelected() {
        $('.admin .headnav, .admin .headnav li, .admin .subnav, .admin .subnav li, .admin .home').removeClass('navSelected');
    }

    //HOME - REMOVE EXISTING "SELECTED" CLASS
    function ClearSelectedHome() {
        $('.admin .home').removeClass('navSelected');
    }

    //GIVE SELECTED BUTTON "SELECTED" BACKGROUND
    function NavSelected(){
        //RESET FUNCTION
        if($('.admin .headnav').hasClass('navSelected')) {
            ClearSelectedHome();
        } else {
            $('.admin .headnav').addClass('navSelected');
            ClearSelectedHome();
        }

        //IF CLICKED GIVE "SELECTED" CLASS AND REMOVE EXISTING ONE
        $('.admin .headnav li, .admin .subnav li').click(function(){
            ClearSelected();
            $(this).addClass('navSelected');
        });
    }

    //NAV - HOME BUTTON
    $('.admin .home').click(function () {
        ClearSelected();

        var homeOptionOne = "Vlambeer website";
        var homeOptionTwo = "Home";

        //CHANGE HOME BUTTON TO REDIRECT (VLAMBEER SITE OR ADMINPANEL HOME)
        if($('.admin .home h4').html() === homeOptionOne) {
            //wanneer gelijk staat aan vlambeer website
            window.location.href = "http://vlambeer.dev";
        }else {
            //wanneer gelijk staat aan home
            if($('.admin .headnav').hasClass('OneTimeOnly')) {
                $('.admin .headnav').removeClass('OneTimeOnly');
            }

            if($('.admin .headnav').hasClass('hide')) {
                $('.admin .headnav').removeClass('hide');
                $('.admin .headnav').fadeToggle('2000', 'linear').delay('200');
                $('.admin .subnav').addClass('hide');
                $('.admin .headnav').fadeToggle('2000', 'linear');
            }
        }
        //HIERDOOR KOMT DE FADE TOGGLE ALS JE NAAR VLAMBEER GAAT    ============================
        if($('.admin .home h4').html(homeOptionOne)) {
            $('.admin .home h4').html(homeOptionOne);
        }
        else {
            $('.admin .home').fadeToggle('2000', 'linear').delay('200');
            $('.admin .home h4').html(homeOptionOne);
            $('.admin .home').fadeToggle('2000', 'linear');
        }
        console.log('check regel 351');
        //DIT STUK DUS NOG FIXEN!
    });

    //NAV - CHANGE CATEGORY
    $('.admin .headnav').click(function () {
        //CHANGE HOME BUTTON TO OPTION 2

        //NAV IF ALREADY SELECTED DO NOTHING
        if($('.admin .headnav').hasClass('OneTimeOnly')) {
            return false;
        }
        else {
            var homeOptionTwo = "Home";
            $('.admin .home').fadeToggle('2000', 'linear').delay('200');
            $('.admin .home h4').html(homeOptionTwo);
            $('.admin .home').fadeToggle('2000', 'linear');
        }

        //CATEGORY CHANGE WITH FADE
        $('.admin .headnav').fadeToggle('2000', 'linear').delay('200');
        $('.admin .headnav').addClass('hide');
        $(this).addClass('OneTimeOnly');
        $(this).removeClass('hide')
            .queue(function(){
                $(this).closest('li').next().removeClass('hide');
                NavSelected();
                $(this).dequeue();
            });
        $('.admin .headnav').fadeToggle('2000', 'linear');

        //LOCATE THE ADMIN PAGES
       var location = $(this).find('h4').html();

        $('.admin li[href="location"]').click(function(){
            alert('Sign new href executed.');
        });

        switch(location){
            case 'Users':
                window.location.href = "/admin/users";
                console.log('user');
                break;
            case 'Shop':
                window.location.href = "admin/shop";
                console.log('shop');
                break;
            case 'Products':
                window.location.href = "/products";
                console.log('product');
                break;
            case 'Games':
                window.location.href = "/games";
                console.log('game');
                break;
        }
    });


});