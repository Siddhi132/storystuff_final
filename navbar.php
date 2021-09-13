<?php
require 'dbconnect.php';
require 'login_con.php';

  session_start();
//  print_r($_SESSION['user_id']);
// exit;
  

// if (isset($_SESSION['login'])) {
//     echo "hello";
// }
// exit;
?>



<!-- <script>
$(document).ready(function() {
$("#send").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var contact = $("#contact").val();
var gender = $("input[type=radio]:checked").val();
var msg = $("#msg").val();
if (name == '' || email == '' || contact == '' || gender == '' || msg == '') {
alert("Insertion Failed Some Fields are Blank....!!");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("refreshform.php", {
name1: name,
email1: email,
contact1: contact,
gender1: gender,
msg1: msg
}, function(data) {
alert(data);
$('#form')[0].reset(); // To reset form fields
});
}
});
});
</script> -->




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

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/dashboard copy.css">
    <link rel="stylesheet" href="assets/css/login copy.css">
    <link rel="stylesheet" href="assets/css/home copy.css">
    <link rel="stylesheet" href="assets/css/memes-internal copy.css">
    <link rel="stylesheet" href="assets/css/stories-internal copy.css">
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
            <img src="assets/img/logo/SS-Logo.png" id="logo" class="logo_img" />
        </div>
        <div class="all_content ">
            <div class="content ">
                <a href="#">
                    <h6 class="list" id="story"> <b>STORIES </b></h6>
                </a>
                <a href="#">
                    <h6 class="list1" id="entertainment"> <b> ENTERTAINMENT </b> </h6>
                </a>
                <a href="#">
                    <h6 class="list1" id="meme"> <b> MEMES </b> </h6>
                </a>
                <a href="#">
                    <h6 class="list1"> <b> PODCAST </b> </h6>
                </a>
                <a href="#">
                    <h6 class="list1"> <b> GALLERY </b> </h6>
                </a>
                <a href="#">
                    <h6 class="list1"> <b> ABOUT US </b> </h6>
                </a>
                <a href="#">
                    <h6 class="list1"> <b> CONTACT US </b> </h6>
                </a>
            </div>
            <div class="login ">
                <div class="search_box ">
                    <input class="search_input" />
                    <i class="fa fa-search search" aria-hidden="true"></i>
                </div>
                <div class="">
                    <?php


                        if (isset($_SESSION['email'])) {
                            echo "<i class='fa fa-user user_icon d-none d-lg-block' aria-hidden='true'></i><span>".$_SESSION['email']."</span>  <br>
                            <a href='logout.php' >LOGOUT</a>";
                        }
                        else{
                            echo "<h6 class='login_text'>LOGIN</h6>";
                        }
                    ?>
                    <!-- <h6 class="login_text">LOGIN</h6> -->
                    <!-- <i class="fa fa-user user_icon d-none d-lg-block" aria-hidden="true"></i>  <br>
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
    <?php 
        include_once "assets/includes/popups.php";
    ?>
    <div id="dynamic">
    </div>


    <!-- JS ============================================ -->

    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>



    <script>
    $(document).ready(function() {

        //Calling home page
        $.ajax({
            url: "home.php",
            type: "POST",

            success: function(data) {
                console.log(data);
                $('#dynamic').html(data);
            }
        });

        $('#logo').click(function() {
            $.ajax({
                url: "home.php",
                type: "POST",

                success: function(data) {
                    console.log(data);
                    $('#dynamic').html(data);
                }
            });
        })


        //Callling stories page
        $('.list').click(function() {
            $.ajax({
                url: "stories-internal.php",
                type: "POST",

                success: function(data) {
                    $('#dynamic').html(data);
                    console.log(data);
                }
            });
        })

        //Callling entertainment page
        $('#entertainment').click(function() {
            $.ajax({
                url: "entertainment-internal.php",
                type: "POST",

                success: function(data) {
                    $('#dynamic').html(data);
                    console.log(data);
                }
            });
        })
        //Callling memes page
        $('#meme').click(function() {
            $.ajax({
                url: "memes-internal.php",
                type: "POST",

                success: function(data) {
                    $('#dynamic').html(data);
                    console.log(data);
                }
            });
        })



        //dark mode
        $('.moon').click(function() {
            var element = document.body;
            //element.classList.toggle('dark');

            $('.sun,.moon,.black_logo,.white_logo').addClass('active');
            $('body').addClass('dark');

            var check = "dark";

            // $.ajax(
            //     {
            //     url: "memes-internal.php",

            //     data: 'check1=' + check,

            // });  

            //     $.post("memes-internal.php",{check1: check }, function(){

            //                 alert('success'); 
            //     });
        });

        $('.sun').click(function() {
            $('.sun,.moon,.black_logo,.white_logo').removeClass('active');
            $('body').removeClass('dark');

            var check = "light";

            // $.ajax(
            //     {
            //     url: "memes-internal.php",
            //     type: "POST",

            //     data: { check1: check},

            // });  


            // $.post("memes-internal.php",{check: check }, function(){
            //             alert('light '); 
            // });
        });
    });
    </script>


</body>

</html>