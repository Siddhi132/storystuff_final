$(document).ready(function(){

    // $('.carousel').carousel({
        
    //     indicators:true
    // });
    
    // navbar
    $('.search').click(function(){
        $('.search_input,.search,.search_box').addClass('active');
    });
    $('.search1').click(function(){
        $('.search_input1,search1').addClass('active')
    });
   
    // login
        $('.login_text').click(function(){
            $('.main,.main_mv').addClass('active')
        });
    
        $('.login_text').click(function(){
            $('.container-fuild,.container-fluid').addClass('active')
        });

        // signup

        $('.account').click(function(){
            $('.sign,.sign_mv,.container-fuild').addClass('active')
        });
    
        $('.account').click(function(){
            $('.main,.main_mv').removeClass('active')
        });

        $('.account_sign').click(function(){
            $('.main,.main_mv,.container-fuild').addClass('active')
        });

        $('.account_sign').click(function(){
            $('.sign,.sign_mv').removeClass('active')
        });
        $('.cancel_login').click(function(){
            $('.main,.main_mv,.sign,.sign_mv,.container-fuild,.container-fluid').removeClass('active')
        });

        //dashboard
        $('.user_icon,.user_icon_mv,.profile_pic,.profile_pic_mv').click(function(){
            $('.main_box,.container-fuild,.container-fluid').addClass('active')
        });
    
        $('#holder_image').click(function() {
            $('#image').click();
          });

          $('#holder_video').click(function() {
            $('#video').click();
          });

        $('.cancel').click(function(){
            $('.main_box,.container-fuild,.container-fluid').removeClass('active')
        });

        // memes
        $('.icon_heart').click(function(){
            $('.icon_heart').addClass('active')
        });

        $('.icon_plus').click(function(){
            $('.icon_plus').addClass('active')
        });

        $('.view').click(function(){
            $('.view_comment,.hide_comment,.comments_all,.mv_grid').addClass('active')
        });

        $('.hide').click(function(){
            $('.view_comment,.hide_comment,.comments_all,.mv_grid').removeClass('active')
        });

        $('.memes_img').click(function(){
            $('.meme_particular,.memes_grid').addClass('active')
        });

        $('.close').click(function(){
            $('.meme_particular,.memes_grid').removeClass('active')
        });
        // $('.cancel_login').click(function(){
        //     $('.container-fuild').removeClass('active')
        // });
    
    // $( ".icon" ).on("click", function() {
    //     if( $( "body" ).hasClass( "dark" )) {
    //         $( "body" ).removeClass( "dark" );
    //         $( ".sun" ).removeClass( "active" );
    //     } else {
    //         $( "body" ).addClass( "dark" );
    //         $( ".sun" ).addClass( "active" );
    //     }
    // });

   



    $('.plus').click(function(){
        $('.form_main_box,.cross,.plus,.img_grid').addClass('active')
    });

    $('.cross').click(function(){
        $('.form_main_box,.cross,.plus,.img_grid').removeClass('active')
    });

    $('.saved').click(function(){
        $('.form_main_box,.cross,.plus,.img_grid').removeClass('active')
    });

   


    //    podcast slider

//     $('#selector').theta_carousel({ 
//         selectedIndex: 12,
//         distance: 125,
//         designedForWidth: 1920,
//         designedForHeight: 925,
//         distanceInFallbackMode: 250,
//         scaleZ: 0.86,
//         path: {
//                 settings: {
//                         shiftY: 201,
//                         shiftZ: 440,
//                         rotationAngleZY: -17,
//                         wideness: 521
//                 }
//         },
//         shadow: true,
//         shadowBlurRadius: 62,
//         shadowSpreadRadius: 2,
//         fadeAway: true,
//         fadeAwayBezierPoints: {
//                 p1: {
//                         x: 0,
//                         y: 100
//                 },
//                 p2: {
//                         x: 97,
//                         y: 97
//                 },
//                 p3: {
//                         x: 97,
//                         y: 98
//                 },
//                 p4: {
//                         x: 100,
//                         y: 0
//                 }
//         },
//         popoutSelected: true,
//         popoutSelectedShiftY: -54,
//         popoutSelectedShiftZ: 155
//     });

  //  $('.carousel').carousel();


// $('.podcast_slider').hiSlide(function(event){

//     speed: 1000
    // interval: 3000, // 3秒一次的频率滚动
    // var keycode = (event.keyCode ? event.keyCode : event.which);
    // if(keycode == "39"){
    //    $('.podcast_slider').trigger('hi-next');
    // }
    // else if(keycode == "37"){
    //    $('.podcast_slider').trigger('hi-prev');
    // }
    // })

   
    // function loadData()
    //         {
    //             var id=$(this)
    //             $.ajax(
    //                 {
    //                 type: "POST",
    //                 url: "stories-internal-logic.php",
    //                 data: {'artical-id':id},
    //                 success: function (data) {
    //                     console.log(data);
    //                 }
    //             });
    //         }
    
      
    
});



   

 
