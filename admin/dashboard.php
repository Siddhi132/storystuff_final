<?php
// error_reporting(0);
// require './dbconnect.php';

$conn=mysqli_connect("localhost","root","","storystuff2");
if(!$conn){
echo "Database connection not success!!";
}

session_start();
 ?>

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
                        <?php
                                $sql6 = "SELECT * FROM `artical` where `category_id`='STORIES' ORDER BY `date` DESC";
                                $result = mysqli_query($conn, $sql6);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $image = $row['image'];
                                    $artical_id = $row['artical_id'];
                                    $category_id = $row['category_id'];
                                    $description = $row['description'];
                                    $user_id = $row['user_id'];
                                    $date = $row['date'];
                                    $sql4="select * from `user` where user_id=$user_id";
                                    $result3 = mysqli_query($conn, $sql4);
                                    while ($row = mysqli_fetch_assoc($result3)) {
                                        $user_email=$row['email'];
                                        echo '<div class="par_story" id='.$artical_id.'>
                                <div class="s_image_box">
                                    <img src="../'.$image.'" class="s_image" alt="">
                                </div>
                                <div class="content_user">
                                    <div class="content_title ">
                                        <p class="mr-md-5" >'.$artical_id.'</p>
                                        <p class="email"> '.$user_email.' </p>
                                    </div>
                                    <div class="content_story ">
                                        <p >'.$description.'</p>
                                    </div>
                                </div>
                            </div>';
                                    }
                                    
                                }
                        ?>
                        <!-- <div class="par_story" >
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
                        </div> -->
                    </div>
                </div>

                 <!-- all entertainment -->
                 <div class="entertainment_box">
                    <div class="s_title">
                        <i class="fa fa-arrow-left arrow" aria-hidden="true"></i>
                        <p class="s_text"> ENTERTAINMENT </p>
                    </div>

                    <div class="all_story ">
                    <?php
                                $sql6 = "SELECT * FROM `artical` where `category_id`='ENTERTAINMENT' ORDER BY `date` DESC";
                                $result = mysqli_query($conn, $sql6);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $image = $row['image'];
                                    $artical_id = $row['artical_id'];
                                    $category_id = $row['category_id'];
                                    $description = $row['description'];
                                    $user_id = $row['user_id'];
                                    $date = $row['date'];
                                    $sql4="select * from `user` where user_id=$user_id";
                                    $result3 = mysqli_query($conn, $sql4);
                                    while ($row = mysqli_fetch_assoc($result3)) {
                                        $user_email=$row['email'];
                                        echo '<div class="par_story" id='.$artical_id.'>
                                <div class="s_image_box">
                                    <img src="../'.$image.'" class="s_image" alt="">
                                </div>
                                <div class="content_user">
                                    <div class="content_title ">
                                        <p class="mr-md-5" >'.$artical_id.'</p>
                                        <p class="email"> '.$user_email.' </p>
                                    </div>
                                    <div class="content_story ">
                                        <p >'.$description.'</p>
                                    </div>
                                </div>
                            </div>';
                                    }
                                    
                                }
                        ?>
                        <!-- <div class="par_entertainment" >
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
                        </div> -->

                        <!-- <div class="par_entertainment ">
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
                        </div> -->
                    </div>
                </div>

                <!-- all memes -->
                <div class="memes_box">
                    <div class="s_title">
                        <i class="fa fa-arrow-left arrow" aria-hidden="true"></i>
                        <p class="s_text"> MEMES </p>
                    </div>

                    <div class="all_story ">
                    <?php
                                $sql6 = "SELECT * FROM `artical` where `category_id`='MEMES' ORDER BY `date` DESC";
                                $result = mysqli_query($conn, $sql6);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $image = $row['image'];
                                    $artical_id = $row['artical_id'];
                                    $category_id = $row['category_id'];
                                    $description = $row['description'];
                                    $user_id = $row['user_id'];
                                    $date = $row['date'];
                                    $sql4="select * from `user` where user_id=$user_id";
                                    $result3 = mysqli_query($conn, $sql4);
                                    while ($row = mysqli_fetch_assoc($result3)) {
                                        $user_email=$row['email'];
                                        echo '<div class="par_story" id='.$artical_id.'>
                                <div class="s_image_box">
                                    <img src="../'.$image.'" class="s_image" alt="">
                                </div>
                                <div class="content_user">
                                    <div class="content_title ">
                                        <p class="mr-md-5" >'.$artical_id.'</p>
                                        <p class="email"> '.$user_email.' </p>
                                    </div>
                                    <div class="content_story ">
                                        <p >'.$description.'</p>
                                    </div>
                                </div>
                            </div>';
                                    }
                                    
                                }
                        ?>
                        <!-- <div class="par_memes" >
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

                        <div class="par_memes ">
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
                        </div> -->
                    </div>
                </div>

                <!-- all podcast -->
                <div class="podcast_box">
                    <div class="s_title">
                        <i class="fa fa-arrow-left arrow" aria-hidden="true"></i>
                        <p class="s_text"> PODCAST </p>
                    </div>

                    <div class="all_story ">
                        
                        <div class="par_podcast" >
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

                        <div class="par_podcast ">
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
                        <div class="par_gallery" >
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

                        <div class="par_gallery ">
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
                       
                </div>

                 <!-- particular entertainment -->
                 <div class="par_entertainment_content">
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
                            <span class="name mr-3"><p> ENTERTAINMENT TITLE </p></span>
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
                                <button class="publish" id="decision_entertainment_mapping"> MAPPING </button>
                                <a href="#pop"> <button class="publish" id="decision_entertainment_publish"> PUBLISH </button> </a>
                                <button class="publish" id="decision_entertainment_review"> REVIEW </button>
                                <button class="delete" id="decision_entertainment_delete"> DELETE </button>
                        </div>
                    </div>

                     <!-- particular memes -->
                <div class="par_memes_content">
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
                            <span class="name mr-3"><p> DOCUMENT TITLE </p></span>
                            <span class=""> Lorem ipsum dolor sit amet. </span>
                        </div>

                        <div class="title">
                            <span class="name mr-3"><p> URL </p></span>
                            <span class=""> http://localhost/storystuff_final/admin/dashboard.php </span>
                        </div>

                        <div class="first_row">
                            <div class="username mr-3">
                                <span class="name mr-3"> <p> MAPPING </p> </span>
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
                               <span class="thumb_title"> IMAGE </span>
                               <img src="../assets/img/circle.jpg" class="thumb_image">
                            </div>
                        </div>

                        <div class="final_buttons">
                                <button class="publish" id="decision_memes_mapping"> MAPPING </button>
                                <a href="#pop"><button class="publish" id="decision_memes_publish"> PUBLISH </button></a>
                                <button class="publish" id="decision_memes_review"> REVIEW </button>
                                <button class="delete" id="decision_memes_delete"> DELETE </button>
                        </div>

                       
                </div>

                 <!-- particular podcast -->
                 <div class="par_podcast_content">
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
                            <span class="name mr-3"><p> PODCAST TITLE </p></span>
                            <span class=""> Lorem ipsum dolor sit amet. </span>
                        </div>

                        <div class="title">
                            <span class="name mr-3"><p> HEADING </p></span>
                            <span class=""> http://localhost/storystuff_final/admin/dashboard.php </span>
                        </div>

                        <div class="first_row">
                            <div class="username mr-3">
                                <span class="name mr-3"> <p> MAPPING </p> </span>
                                <span class="">   Asperiores maxime id nemo itaque molestiae obcaecati doloremque magni nihil accusantium corporis. Rem ex ad, alias eveniet nam incidunt nemo natus corporis. </span>
                            </div>
                            <div class="mail h-75" >
                                <span class="name mr-3"> <p> TAGS/KEYWORDS </p> </span>
                                <span class=""> LOREM </span>
                            </div>
                        </div>

                        <div class="title">
                            <span class="name mr-3"><p> SCRIPT EDITING </p></span>
                            <span class="">  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi ab voluptate rem porro quaerat ullam reprehenderit excepturi assumenda unde. Earum temporibus porro ut delectus minima quam nemo officiis cupiditate consectetur? </span>
                        </div>

                        <div class="last_row">
                            <div class="thumbnail">
                               <span class="thumb_title"> IMAGE </span>
                               <img src="../assets/img/circle.jpg" class="thumb_image">
                            </div>
                        </div>

                        <div class="final_buttons">
                                <button class="publish" id="decision_podcast_mapping"> MAPPING </button>
                                <a href="#pop"><button class="publish" id="decision_podcast_publish"> PUBLISH </button></a>
                                <button class="publish" id="decision_podcast_review"> REVIEW </button>
                                <button class="delete" id="decision_podcast_delete"> DELETE </button>
                        </div>

                       
                </div>

                 <!-- particular gallery -->
                 <div class="par_gallery_content">
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
                            <span class="name mr-3"><p> GALLERY TITLE </p></span>
                            <span class=""> Lorem ipsum dolor sit amet. </span>
                        </div>

                        <div class="title">
                            <span class="name mr-3"><p> HEADING </p></span>
                            <span class=""> http://localhost/storystuff_final/admin/dashboard.php </span>
                        </div>

                        <div class="first_row">
                            <div class="username mr-3">
                                <span class="name mr-3"> <p> MAPPING </p> </span>
                                <span class="">   Asperiores maxime id nemo itaque molestiae obcaecati doloremque magni nihil accusantium corporis. Rem ex ad, alias eveniet nam incidunt nemo natus corporis. </span>
                            </div>
                            <div class="mail h-75" >
                                <span class="name mr-3"> <p> TAGS/KEYWORDS </p> </span>
                                <span class=""> LOREM </span>
                            </div>
                        </div>

                        <div class="title">
                            <span class="name mr-3"><p> SCRIPT EDITING </p></span>
                            <span class="">  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi ab voluptate rem porro quaerat ullam reprehenderit excepturi assumenda unde. Earum temporibus porro ut delectus minima quam nemo officiis cupiditate consectetur? </span>
                        </div>

                        <div class="last_row">
                            <div class="thumbnail">
                               <span class="thumb_title"> IMAGE </span>
                               <img src="../assets/img/circle.jpg" class="thumb_image">
                            </div>
                        </div>

                        <div class="final_buttons">
                                <button class="publish" id="decision_gallery_mapping"> MAPPING </button>
                                <a href="#pop"><button class="publish" id="decision_gallery_publish"> PUBLISH </button></a>
                                <button class="publish" id="decision_gallery_review"> REVIEW </button>
                                <button class="delete" id="decision_gallery_delete"> DELETE </button>
                        </div>

                       
                </div>

               
            </div>

            
        </div>

        <!-- published -->
        <!-- <div class="pop_div_s">
            <div class="popup" id="pop">
                <span class="times_div"> <i class="fa fa-times mr-3 mt-3" id="back_main_s" aria-hidden="true"></i>  </span>
                <div class="tick"> <ion-icon name="checkmark-outline" class=" mr-2"style="font-size:30px"></ion-icon> PUBLISHED!</div>
                <div class="pop_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum suscipit consequuntur dolorem, tempore magni facilis voluptatem, obcaecati repellendus corporis quae amet voluptas numquam rerum hic, non ipsam nostrum possimus neque?</div>
            </div>
        </div>

        <div class="pop_div_e">
            <div class="popup" id="pop">
                <span class="times_div"> <i class="fa fa-times mr-3 mt-3" id="back_main_e" aria-hidden="true"></i>  </span>
                <div class="tick"> <ion-icon name="checkmark-outline" class=" mr-2"style="font-size:30px"></ion-icon> PUBLISHED!</div>
                <div class="pop_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum suscipit consequuntur dolorem, tempore magni facilis voluptatem, obcaecati repellendus corporis quae amet voluptas numquam rerum hic, non ipsam nostrum possimus neque?</div>
            </div>
        </div>

        <div class="pop_div_m">
            <div class="popup" id="pop">
                <span class="times_div"> <i class="fa fa-times mr-3 mt-3" id="back_main_m" aria-hidden="true"></i>  </span>
                <div class="tick"> <ion-icon name="checkmark-outline" class=" mr-2"style="font-size:30px"></ion-icon> PUBLISHED!</div>
                <div class="pop_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum suscipit consequuntur dolorem, tempore magni facilis voluptatem, obcaecati repellendus corporis quae amet voluptas numquam rerum hic, non ipsam nostrum possimus neque?</div>
            </div>
        </div>

        <div class="pop_div_p">
            <div class="popup" id="pop">
                <span class="times_div"> <i class="fa fa-times mr-3 mt-3" id="back_main_p" aria-hidden="true"></i>  </span>
                <div class="tick"> <ion-icon name="checkmark-outline" class=" mr-2"style="font-size:30px"></ion-icon> PUBLISHED!</div>
                <div class="pop_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum suscipit consequuntur dolorem, tempore magni facilis voluptatem, obcaecati repellendus corporis quae amet voluptas numquam rerum hic, non ipsam nostrum possimus neque?</div>
            </div>
        </div>

        <div class="pop_div_g">
            <div class="popup" id="pop">
                <span class="times_div"> <i class="fa fa-times mr-3 mt-3" id="back_main_g" aria-hidden="true"></i>  </span>
                <div class="tick"> <ion-icon name="checkmark-outline" class=" mr-2"style="font-size:30px"></ion-icon> PUBLISHED!</div>
                <div class="pop_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum suscipit consequuntur dolorem, tempore magni facilis voluptatem, obcaecati repellendus corporis quae amet voluptas numquam rerum hic, non ipsam nostrum possimus neque?</div>
            </div>
        </div> -->

        <!-- publishing -->
        <div class="pop_div_s pop_div_e pop_div_m pop_div_p pop_div_g">
            <div class="popup" id="pop">
                <span class="times_div"> <i class="fa fa-times mr-3 mt-3" id="back" aria-hidden="true"></i>  </span>
                <div class="hour"> <i class="fa fa-hourglass-o  mr-2" style="font-size:30px" aria-hidden="true"></i> PUBLISHING </div>
                <div class="pop_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum suscipit consequuntur dolorem, tempore magni facilis voluptatem, obcaecati repellendus corporis quae amet voluptas numquam rerum hic, non ipsam nostrum possimus neque?</div>
            </div>
        </div>

        <!-- couldn't publish -->
        <!-- <div class="pop_div_s pop_div_e pop_div_m pop_div_p pop_div_g">
            <div class="popup" id="pop">
                <span class="times_div"> <i class="fa fa-times mr-3 mt-3 " id="back" aria-hidden="true"></i>  </span>
                <div class="outline"> <ion-icon name="close-outline" class=" mr-2" style="font-size:30px"></ion-icon> COULDN'T PUBLISH </div>
                <div class="pop_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum suscipit consequuntur dolorem, tempore magni facilis voluptatem, obcaecati repellendus corporis quae amet voluptas numquam rerum hic, non ipsam nostrum possimus neque?</div>
            </div>
        </div> -->
        
    </section>



    <!-- js -->
     <!-- Plugins JS -->
     <script src="../assets/js/plugins.js"></script>
     <script src="../assets/js/jqueryscrolldetector.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
            $(".arrow,.par_story, .par_entertainment, .par_memes, .par_podcast, .par_gallery").click(function(){
                $('.blind,.story_box,.entertainment_box,.memes_box, .podcast_box, .gallery_box,.main_box').removeClass('active')
            });
            
            //when particular stories will be clicked
            $(".par_story").click(function(){
                function loadData(id)
                {
                    $.ajax({
                    type: "post",
                    url: "par_story_content.php",
                    data: {'artical_id':id},
                    success: function (data) {
                        $(".par_story_content").html(data);
                    }   
                    });
                }
                var id = $(this).attr('id');
                loadData(id);
                
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

                $("#entertainment_but, #memes_but, #podcast_but, #gallery_but").click(function(){
                    $('.par_story_content,.main_box').removeClass('active');
                    $("#story_but").css({
                        "background-color":"white",
                        "color":"#0F83AA"
                    });

                    $('.pop_div_s,.pop_div_e,.pop_div_m,.pop_div_p,.pop_div_g').removeClass('active');
                $('.main_box').removeClass('opa');
                });
                $(window).scrollTop(0);
            });

            //when particular entertainment will be clicked
            $(".par_entertainment").click(function(){
                $('.par_entertainment_content,.main_box').addClass('active');

                $("#entertainment_but").css({
                    "background-color":"#0F83AA",
                    "color":"white"
                });

                $("#entertainment_but").click(function(){
                    $('.blind,.entertainment_box,.main_box').addClass('active');
                    $('.par_entertainment_content').removeClass('active');
                    $("#entertainment_but").css({
                        "background-color":"white",
                        "color":"#0F83AA"
                    });
                });

                $("#story_but, #memes_but, #podcast_but, #gallery_but").click(function(){
                    $('.par_entertainment_content,.main_box').removeClass('active');
                    $("#entertainment_but").css({
                        "background-color":"white",
                        "color":"#0F83AA"
                    });

                    $('.pop_div_s,.pop_div_e,.pop_div_m,.pop_div_p,.pop_div_g').removeClass('active');
                $('.main_box').removeClass('opa');
                });
            
            });

             //when particular memes will be clicked
            $(".par_memes").click(function(){
                $('.par_memes_content,.main_box').addClass('active');

                $("#memes_but").css({
                    "background-color":"#0F83AA",
                    "color":"white"
                });

                $("#memes_but").click(function(){
                    $('.blind,.memes_box,.main_box').addClass('active');
                    $('.par_memes_content').removeClass('active');
                    $("#memes_but").css({
                        "background-color":"white",
                        "color":"#0F83AA"
                    });
                });

                $("#story_but, #entertainment_but, #podcast_but, #gallery_but").click(function(){
                    $('.par_memes_content,.main_box').removeClass('active');
                    $("#memes_but").css({
                        "background-color":"white",
                        "color":"#0F83AA"
                    });

                    $('.pop_div_s,.pop_div_e,.pop_div_m,.pop_div_p,.pop_div_g').removeClass('active');
                $('.main_box').removeClass('opa');
                });
            
            });

            //when particular podcast will be clicked
            $(".par_podcast").click(function(){
                $('.par_podcast_content,.main_box').addClass('active');

                $("#podcast_but").css({
                    "background-color":"#0F83AA",
                    "color":"white"
                });



                $("#podcast_but").click(function(){
                    $('.blind,.podcast_box,.main_box').addClass('active');
                    $('.par_podcast_content').removeClass('active');
                    $("#podcast_but").css({
                        "background-color":"white",
                        "color":"#0F83AA"
                    });
                });

                $("#story_but, #entertainment_but, #memes_but, #gallery_but").click(function(){
                    $('.par_podcast_content,.main_box').removeClass('active');
                    $("#podcast_but").css({
                        "background-color":"white",
                        "color":"#0F83AA"
                    });

                    $('.pop_div_s,.pop_div_e,.pop_div_m,.pop_div_p,.pop_div_g').removeClass('active');
                    $('.main_box').removeClass('opa');
                });
            
            });


            //when particular gallery will be clicked
            $(".par_gallery").click(function(){
                $('.par_gallery_content,.main_box').addClass('active');

                $("#gallery_but").css({
                    "background-color":"#0F83AA",
                    "color":"white"
                });

                $("#gallery_but").click(function(){
                    $('.blind,.gallery_box,.main_box').addClass('active');
                    $('.par_gallery_content').removeClass('active');
                    $("#gallery_but").css({
                        "background-color":"white",
                        "color":"#0F83AA"
                    });
                });

                $("#story_but, #entertainment_but, #memes_but, #podcast_but").click(function(){
                    $('.par_gallery_content,.main_box').removeClass('active');
                    $("#gallery_but").css({
                        "background-color":"white",
                        "color":"#0F83AA"
                    });

                    $('.pop_div_s,.pop_div_e,.pop_div_m,.pop_div_p,.pop_div_g').removeClass('active');
                    $('.main_box').removeClass('opa');
                });
            
            });

            // $(".publish,.delete").click(function(){
            //     $('.blind,.story_box,.main_box,.par_story_content').removeClass('active');

            //     $("#story_but").css({
            //             "background-color":"white",
            //             "color":"#0F83AA"
            //     });
            // });

            // $("#decision_story_mapping, #decision_story_review, #decision_story_delete,#decision_entertainment_mapping,  #decision_entertainment_review, #decision_entertainment_delete,#decision_memes_mapping, #decision_memes_publish, #decision_memes_review, #decision_memes_delete,#decision_podcast_mapping, #decision_podcast_publish, #decision_podcast_review, #decision_podcast_delete, #decision_gallery_mapping, #decision_gallery_publish, #decision_gallery_review, #decision_gallery_delete").click(function(){
            //     $('.blind,.story_box,  .entertainment_box, .memes_box, .podcast_box, .gallery_box, .main_box,.par_story_content, .par_entertainment_content, .par_memes_content, .par_podcast_content, .par_gallery_content').removeClass('active');

            //     $("#story_but, #entertainment_but, #memes_but,#podcast_but, #gallery_but").css({
            //             "background-color":"white",
            //             "color":"#0F83AA"
            //     });

            //     $(window).scrollTop(0);
            // });

            $("#decision_story_publish").click(function(){
                $('.pop_div_s').addClass('active');
                $('.main_box').addClass('opa');

                // $(window).scrollTop(500);
            });
            $("#decision_entertainment_publish").click(function(){
                $('.pop_div_e').addClass('active');
                $('.main_box').addClass('opa');

                // $(window).scrollTop(500);
            });
            $("#decision_memes_publish").click(function(){
                $('.pop_div_m').addClass('active');
                $('.main_box').addClass('opa');

                // $(window).scrollTop(500);
            });
            $("#decision_podcast_publish").click(function(){
                $('.pop_div_p').addClass('active');
                $('.main_box').addClass('opa');

                // $(window).scrollTop(500);
            });
            $("#decision_gallery_publish").click(function(){
                $('.pop_div_g').addClass('active');
                $('.main_box').addClass('opa');

                // $(window).scrollTop(500);
            });

            $("#back").click(function(){
                $('.pop_div_s,.pop_div_e,.pop_div_m,.pop_div_p,.pop_div_g').removeClass('active');
                $('.main_box').removeClass('opa');
            });

            $("#back_main_s").click(function(){
                $('.pop_div_s').removeClass('active');
                $('.main_box').removeClass('opa');
                $('.blind,.story_box,.main_box').addClass('active');
                $('.par_story_content').removeClass('active');
                $("#story_but").css({
                    "background-color":"white",
                    "color":"#0F83AA"
                });
                
                $(window).scrollTop(300);
            });

            $("#back_main_e").click(function(){
                $('.pop_div_e').removeClass('active');
                $('.main_box').removeClass('opa');
                $('.blind,.entertainment_box,.main_box').addClass('active');
                $('.par_entertainment_content').removeClass('active');
                $("#entertainment_but").css({
                    "background-color":"white",
                    "color":"#0F83AA"
                });
                
                $(window).scrollTop(300);
            });

            $("#back_main_m").click(function(){
                $('.pop_div_m').removeClass('active');
                $('.main_box').removeClass('opa');
                $('.blind,.memes_box,.main_box').addClass('active');
                $('.par_memes_content').removeClass('active');
                $("#memes_but").css({
                    "background-color":"white",
                    "color":"#0F83AA"
                });
                
                $(window).scrollTop(300);
            });

            $("#back_main_p").click(function(){
                $('.pop_div_p').removeClass('active');
                $('.main_box').removeClass('opa');
                $('.blind,.podcast_box,.main_box').addClass('active');
                $('.par_podcast_content').removeClass('active');
                $("#podcast_but").css({
                    "background-color":"white",
                    "color":"#0F83AA"
                });
                
                $(window).scrollTop(300);
            });

            $("#back_main_g").click(function(){
                $('.pop_div_g').removeClass('active');
                $('.main_box').removeClass('opa');
                $('.blind,.gallery_box,.main_box').addClass('active');
                $('.par_gallery_content').removeClass('active');
                $("#gallery_but").css({
                    "background-color":"white",
                    "color":"#0F83AA"
                });
                
                $(window).scrollTop(300);
            });

            
        });
    </script>
</body>    
</html>