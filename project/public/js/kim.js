/**
 * Created by K on 15-1-2016.
 */

//$(document).ready(function(){
//
//    $(".newsletter .btn").click(function(){
//        return;
//        $.smkPrompt({
//            text:'If you want to recieve our newsletter enter your e-mail address.',
//            accept:'Ok',
//            cancel:'Cancel'
//        },function(res) {
//            // Code here
//            if (res) {
//                var data = {};
//                data['_method'] = 'PUT';
//                data['_token'] = $('.csrf input').val();
//
//                $.ajax({
//                    type: "POST",
//                    url: 'subscribe/' + res,
//                    data: data,
//                    success: function(result) {
//                        console.log(result);
//                        if(result == 0){
//                            $.smkAlert({
//                                text: 'E-mail already exists.',
//                                type: 'warning'
//                            });
//                        }
//                        if(result == 1) {
//                            $.smkAlert({
//                                text: 'You are now recieving our newsletter.',
//                                type: 'succes'
//                            });
//                        }
//                        if(result == 2) {
//                            $.smkAlert({
//                                text: 'Enter a valid e-mail address.',
//                                type: 'danger'
//                            });
//                        }
//
//                    }
//                });
//            }
//
//        });
//    });
//});

