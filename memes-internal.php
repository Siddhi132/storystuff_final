<?php
 //include_once "dark.php";
// $a =isset($_POST['check1'])?$_POST['check1']:'not yet';
// echo $a ;


   
?>

    <?php $page = 'index';
   
 
    //echo $flag;
       // include_once "assets/includes/navbar.php";
    //     if($_SESSION['flag'] == "dark"){ 
    //         echo "right";
            
    //         echo " <script>
           
    //         $('.sun,.moon,.black_logo,.white_logo').addClass('active');
    //         $('body').addClass('dark');
           
    //          </script> ";
    //     }
    //     else{
    //         echo "  <script>
    //         $('.sun,.moon,.black_logo,.white_logo').removeClass('active')
    //         $('body').removeClass('dark');
           
    //              </script>";
    //  }
    // if(isset($_GET['check1'])){
    
    //     $name= $_GET['check1'];
    //     echo $name;
    // }
    // else{
    //     echo "not";
    // }

    // $test = $_GET['check1'];
    // echo $test;
    ?>


<section class="whole_box">
    <div class="container-fluid">
        <div class="memes">
            <h2> Memes </h2>
        </div>

        <!------------------------------------------------------row 1 ----------------------------------------------->
        <div class="memes_grid mt-5  px-lg-5 px-md-3 br">
            <div class="memes_box ml-lg-5 ml-md-3  mt-4 mt-sm-0 br">
               <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>
            </div>
                <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->

            <div class="memes_box ml-md-5    mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>

            <div class="memes_box ml-md-5  mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>

            <div class="memes_box ml-md-5  mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>
        </div>

        <!------------------------------------------ PARTICULAR MEME POPUP--------------------------------------- -->
        <div class="meme_particular " >
            <span class="close"> <ion-icon name="close-outline"> </ion-icon></span>
            <div class="user_info">
                <img src="assets/img/tree.jpg" class="user_meme_pic" />
                <div class="user_meme_name "> 
                    <h6 class="name_meme"> USERNAME </h6>
                    <!-- <div class="line"></div> -->
                    <h6 class="id_meme"> USER ID </h6> 
                </div>
            </div>

            <div class="meme_info ">
                <div class="meme_slider owl-carousel" id="owl-demo">
                    <img src="assets/img/memes/meme1.jpg" class="memes_slider_img" alt="">
                    <img src="assets/img/memes/meme1.jpg" class="memes_slider_img" alt="">
                    <img src="assets/img/memes/meme1.jpg" class="memes_slider_img" alt="">
                    <img src="assets/img/memes/meme1.jpg" class="memes_slider_img" alt="">
                </div> 

                <div class="meme_icon mt-2">
                    <span class="meme_heart"> <i class="fa fa-heart-o" aria-hidden="true"></i> </span>
                    <span class="meme_bookmark"> <i class="fa fa-bookmark-o" aria-hidden="true"></i> </span>
                    <span class="meme_send"> <ion-icon name="send-sharp"></ion-icon> </span>
                </div>

                <div class="meme_text text_size">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ducimus iste quae repudiandae, fugiat reiciendis labore. Voluptatibus quasi sequi neque et deleniti, laborum, dolorum recusandae libero animi error cupiditate. Corrupti?
                </div>

                <div class="comment_box text_size">
                    <h5> <b> Comments </b> </h5>
                </div>
                <input type="text" class="comment_text">

                <div class="view_comment ">
                    <span class="view" > <i class="fa fa-play fa-rotate-90" aria-hidden="true"></i> </span>

                    <h6 class="view_text text_size">VIEW COMMENTS</h6>
                </div>

                <div class="hide_comment ">
                    <span class="hide" > <i class="fa fa-play fa-rotate-270" aria-hidden="true"></i> </span>

                    <h6 class="hide_text text_size">HIDE COMMENTS</h6>
                </div>

                <div class="comments_all text_size  mt-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque praesentium a soluta labore minus accusamus illum perferendis sit accusantium! Adipisci in ipsa doloribus nulla ex dolorum vel consectetur quo nisi.
                </div>
            </div>



        </div>
        <!------------------------------------------------------row 2 ----------------------------------------------->
        <div class="memes_grid1 mv_grid">
            <div class="memes_box memes_box1 ml-lg-5 ml-md-3 mt-0  mt-sm-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>

            <div class="memes_box memes_box1 ml-md-5   mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>

            <div class="memes_box memes_box1 ml-md-5  mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>
        </div>

        <!------------------------------------------------------row 3 ----------------------------------------------->
        <div class="memes_grid  px-lg-5 px-md-3">
            <div class="memes_box ml-lg-5 ml-md-3   mt-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>

            <div class="memes_box ml-md-5   mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>

            <div class="memes_box ml-md-5  mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>

            <div class="memes_box ml-md-5  mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>
        </div>

        <!------------------------------------------------------row 4 ----------------------------------------------->
     <div class="memes_grid1 ">
            <div class="memes_box memes_box1 ml-lg-5 ml-md-3   mt-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>

            <div class="memes_box memes_box1 ml-md-5   mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>

            <div class="memes_box memes_box1 ml-md-5  mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>
        </div>

        <!------------------------------------------------------row 5 ----------------------------------------------->
        <div class="memes_grid  px-lg-5 px-md-3 ">
            <div class="memes_box ml-lg-5 ml-md-3   mt-0">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>

            <div class="memes_box ml-md-5   mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>

            <div class="memes_box ml-md-5  mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>

            <div class="memes_box ml-md-5  mt-md-0 ">
                <a href="#"> <img src="assets/img/memes/meme1.jpg" class="memes_img" alt=""> </a>

                 <!-- <div class="lower border">
                    <div class="text">
                        <h5>Lorem ipsum</h5>
                    </div>
                    <div class="icons ">
                        <span class="icon_heart"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                        <ion-icon name="add-outline" class="icon_plus" ></ion-icon>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<script src="assets/js/plugins.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
   
    $(document).ready(function() {
    var owl = $("#owl-demo");

        owl.owlCarousel({
            animateOut: 'fadeOut',
            items: 1,
        });

        

     $(".next").click(function(){
            owl.trigger('next.owl.carousel');
        })

    $(".prev").click(function(){
        owl.trigger('prev.owl.carousel');
    })

    $(document).keydown(function(event){
            var keycode = (event.keyCode ? event.keyCode : event.which);
            if(keycode == "39"){
                owl.trigger('next.owl.carousel');
            }
            else if(keycode == "37"){
                owl.trigger('prev.owl.carousel');
            }
        });
});
</script>
