<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>index.php</title>
    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/css/formValidation.min.css" integrity="sha512-B9GRVQaYJ7aMZO3WC2UvS9xds1D+gWQoNiXiZYRlqIVszL073pHXi0pxWxVycBk0fnacKIE3UHuWfSeETDCe7w==" crossorigin="anonymous" referrerpolicy="no-referrer" />   <!--form validation -->

    <link href="https://fonts.google.com/specimen/Montserrat#standard-styles" rel="stylesheet">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/navbar.css">
     <link rel="stylesheet" href="assets/css/common.css">
     <link rel="stylesheet" href="assets/css/dashboard.css">
  
    <!-- <link rel="stylesheet" href="assets/css/jquery-hislide.css"> -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--<script src="dark.js"></script>-->


</head>

<body>

    <div class="container-fuild">
        <div class="logo">
            <img src="../assets/img/logo/SS-Logo.png" id="logo" class="logo_img" />
        </div>
        <div class="all_content ">
            <div class="content ">
                <a href="#" > <h6 class="list" id="story"> <b>STORIES </b></h6> </a>
                <a href="#" > <h6 class="list1" id="entertainment"> <b> ENTERTAINMENT </b> </h6> </a>
                <a href="#" >  <h6 class="list1" id="meme"> <b> MEMES </b> </h6> </a>
                 <a href="#"> <h6 class="list1" id="podcast"> <b> PODCAST </b> </h6> </a>
                 <a href="#"> <h6 class="list1" id="gallery"> <b> GALLERY </b> </h6> </a>
                 <a href="#"> <h6 class="list1" id="about"> <b> ABOUT US </b> </h6> </a>
                 <a href="#"> <h6 class="list1" id="contact"> <b> CONTACT US </b> </h6> </a>
            </div>
            <div class="login ">
                <div class="search_box ">
                    <input class="search_input" />
                    <i class="fa fa-search search" aria-hidden="true"></i>
                </div>
                <div class="">
                    <?php
                        if(isset($_SESSION['login'])){
                            echo " <img src='assets/img/profile.jpg ' alt='' class='profile_pic d-none d-lg-block'><span>".$_SESSION['email']."</span>  <br>
                            <a href='logout.php' >LOGOUT</a>";
                        }
                        else{
                            echo "<h6 class='login_text'>LOGIN</h6>";
                        }
                    ?>
                    <!-- <h6 class="login_text">LOGIN</h6> -->
                    <!-- <img src='assets/img/profile.jpg ' alt='' class='profile_pic d-none d-lg-block'> <br>
                 <h6 class="login_text">LOGOUT</h6>  -->
                </div>
                <i class="fa fa-moon-o moon icon" aria-hidden="true"></i>
                <i class="fa fa-sun-o sun icon" aria-hidden="true"></i>
            </div>
        </div>

        <!--------------------------------search and dashboard for mobile view------------------------------------->
        <div class="search_box1 ">
            <input class="search_input1" />
            <i class="fa fa-search search1" aria-hidden="true"></i>
            
            <!-- <i class="fa fa-user user_icon_mv d-lg-none" aria-hidden="true"></i> -->
        </div>
    </div>

    <!--------------------------------- admin panel ---------------------------------------------------------->
    <section>
        <div class="container-fluid outer ">
            <div class="main_box ">
                <div class="blind"> 
                
                    <!-- admin title -->
                    <div class="admin">
                        <div class="admin_title ">
                            ADMIN PANEL
                        </div>
                        <div class="dot ">
                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </div>
                    </div>

                    <!-- buttons -->
                    <div class="all_buttons">
                        <div class="button ">
                            <div class="circle_box">
                                <div class="circle">
                                    <p> 7 </p>
                                </div>
                            </div>
                            <button class="but" id="story_but"> STORIES </button>
                        </div>
                        <div class="button ">
                            <div class="circle_box  enter_circle">
                                <div class="circle">
                                    <p> 7 </p>
                                </div>
                            </div>
                            <button class="but" id="entertainment_but">ENTERTAINMENT </button>
                        </div>
                        <div class="button ">
                            <div class="circle_box ">
                                <div class="circle">
                                    <p> 7 </p>
                                </div>
                            </div>
                            <button class="but" id="memes_but"> MEMES </button>
                        </div>
                        <div class="button ">
                            <div class="circle_box">
                                <div class="circle">
                                    <p> 7 </p>
                                </div>
                            </div>
                            <button class="but" id="podcast_but"> PODCAST </button>
                        </div>
                        <div class="button ">
                            <div class="circle_box">
                                <div class="circle">
                                    <p> 7 </p>
                                </div>
                            </div>
                            <button class="but" id="gallery_but"> GALLERY </button>
                        </div>
                    </div>
                </div> 

                <!-- all stories -->
                <div class="story_box">
                    <div class="s_title">
                        <i class="fa fa-arrow-left arrow" aria-hidden="true"></i>
                        <p class="s_text"> STORIES </p>
                    </div>

                    <div class="all_story ">
                        <div class="par_story" >
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title ">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story ">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- all entertainment -->
                 <div class="entertainment_box">
                    <div class="s_title">
                        <i class="fa fa-arrow-left arrow" aria-hidden="true"></i>
                        <p class="s_text"> ENTERTAINMENT </p>
                    </div>

                    <div class="all_story ">
                        <div class="par_story" >
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title ">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story ">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- all memes -->
                <div class="memes_box">
                    <div class="s_title">
                        <i class="fa fa-arrow-left arrow" aria-hidden="true"></i>
                        <p class="s_text"> MEMES </p>
                    </div>

                    <div class="all_story ">
                        <div class="par_story" >
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title ">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story ">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- all podcast -->
                <div class="podcast_box">
                    <div class="s_title">
                        <i class="fa fa-arrow-left arrow" aria-hidden="true"></i>
                        <p class="s_text"> PODCAST </p>
                    </div>

                    <div class="all_story ">
                        <div class="par_story" >
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title ">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story ">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- all gallery -->
                <div class="gallery_box">
                    <div class="s_title">
                        <i class="fa fa-arrow-left arrow" aria-hidden="true"></i>
                        <p class="s_text"> GALLERY </p>
                    </div>

                    <div class="all_story ">
                        <div class="par_story" >
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title ">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story ">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>

                        <div class="par_story ">
                            <div class="s_image_box">
                                <img src="../assets/img/circle.jpg" class="s_image" alt="">
                            </div>
                            <div class="content_user">
                                <div class="content_title">
                                    <p class="mr-md-5" > LOREM IPSUM DOLOR </p>
                                    <p class="email"> loremipsumdolor@mail.com </p>
                                </div>
                                <div class="content_story">
                                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus dolor assumenda numquam est doloribus molestias dolore nam culpa quas ex modi porro fuga, explicabo deleniti consectetur quam labore laborum alias.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- particular story -->
                <div class="par_story_content">
                        <div class="first_row">
                            <div class="username mr-3">
                                <span class="name mr-3"> <p> USERNAME </p> </span>
                                <span class=""> LOREM IPSUM DOLOR </span>
                            </div>
                            <div class="mail">
                                <span class="name mr-3"> <p> MAIL </p> </span>
                                <span class=""> loremipsumdolor@mail.com </span>
                            </div>
                        </div>

                        <div class="title">
                            <span class="name mr-3"><p> STORY TITLE </p></span>
                            <span class=""> Lorem ipsum dolor sit amet. </span>
                        </div>

                        <div class="title">
                            <span class="name mr-3"><p> URL </p></span>
                            <span class=""> http://localhost/storystuff_final/admin/dashboard.php </span>
                        </div>

                        <div class="first_row">
                            <div class="username mr-3">
                                <span class="name mr-3"> <p> SUMMARY </p> </span>
                                <span class="">   Asperiores maxime id nemo itaque molestiae obcaecati doloremque magni nihil accusantium corporis. Rem ex ad, alias eveniet nam incidunt nemo natus corporis. </span>
                            </div>
                            <div class="mail h-75" >
                                <span class="name mr-3"> <p> TAGS/KEYWORDS </p> </span>
                                <span class=""> LOREM </span>
                            </div>
                        </div>

                        <div class="title">
                            <span class="name mr-3"><p> BODY </p></span>
                            <span class="">  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi ab voluptate rem porro quaerat ullam reprehenderit excepturi assumenda unde. Earum temporibus porro ut delectus minima quam nemo officiis cupiditate consectetur? </span>
                        </div>

                        <div class="last_row">
                            <div class="thumbnail">
                               <span class="thumb_title"> THUMBNAIL </span>
                               <img src="../assets/img/circle.jpg" class="thumb_image">
                            </div>
                        </div>

                        <div class="final_buttons">
                              
                                <button class="publish" id="decision_publish"> PUBLISH </button>
                                <button class="publish" id="decision_review"> REVIEW </button>
                                <button class="delete" id="decision_delete"> DELETE </button>
                        </div>

                       
                </div>
            </div>
        </div>
    </section>



    <!-- js -->
     <!-- Plugins JS -->
     <script src="../assets/js/plugins.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function(){

            //main page
            $("#story_but").click (function(){
                $('.blind,.story_box').addClass('active');
                $('.entertainment_box, .memes_box, .podcast_box, .gallery_box').removeClass('active')
            });

            $("#entertainment_but").click (function(){
                $('.blind,.entertainment_box').addClass('active');
                $('.story_box,  .memes_box, .podcast_box, .gallery_box').removeClass('active')
               
            });

            $("#memes_but").click (function(){
                $('.blind,.memes_box').addClass('active');
                $('.story_box, .entertainment_box, .podcast_box, .gallery_box').removeClass('active')
            });

            $("#podcast_but").click (function(){
                $('.blind,.podcast_box').addClass('active');
                $('.story_box,.entertainment_box, .memes_box,  .gallery_box').removeClass('active')
            });

            $("#gallery_but").click (function(){
                $('.blind,.gallery_box').addClass('active');
                $('.story_box,.entertainment_box, .memes_box, .podcast_box').removeClass('active')
            });

            //all stories
            $(".arrow,.par_story").click(function(){
                $('.blind,.story_box,.entertainment_box,.memes_box, .podcast_box, .gallery_box,.main_box').removeClass('active')
            });

            //when particular stories will be clicked
            $(".par_story").click(function(){
                $('.par_story_content,.main_box').addClass('active')

                $("#story_but").css({
                    "background-color":"#0F83AA",
                    "color":"white"
                });

                $("#story_but").click(function(){
                    $('.blind,.story_box,.main_box').addClass('active');
                    $('.par_story_content').removeClass('active');
                    $("#story_but").css({
                        "background-color":"white",
                        "color":"#0F83AA"
                    });
                });
            
            });

            $(".publish,.delete").click(function(){
                $('.blind,.story_box,.main_box,.par_story_content').removeClass('active');

                $("#story_but").css({
                        "background-color":"white",
                        "color":"#0F83AA"
                });
            });
        });
    </script>
</body>    
</html>