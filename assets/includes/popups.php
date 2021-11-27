<?php 
//session_start();
// print_r($_SESSION['user_id']);
// exit;
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- <link rel="stylesheet" href="assets/css/plugins.css"> -->


<!-- css 
    <link rel="stylesheet" href="assets/css/navbar-login.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
    

</head>
<body>
    <div class="container-fuild">
        <div class="logo">
            <img src="assets/img/logo/SS-Logo.png" class="logo_img" />
        </div>
        <div class="all_content">
            <div class="content">
                <a href="#"> <h6 class="list"> <b>STORIES </b></h6> </a>
                <a href="#"><h6 class="list1"> <b> ENTERTAINMENT </b> </h6> </a>
                 <a href="#"> <h6 class="list1"> <b> MEMES </b> </h6> </a> 
                 <a href="#"> <h6 class="list1"> <b> PODCAST </b> </h6> </a>
                 <a href="#"> <h6 class="list1"> <b> GALLERY </b> </h6> </a>
                 <a href="#"> <h6 class="list1"> <b> ABOUT US </b> </h6> </a>
                 <a href="#"> <h6 class="list1"> <b> CONTACT US </b> </h6> </a>
            </div>
            <div class="login ">
                <div class="search_box">
                    <input  class="search_input" />
                    <i class="fa fa-search search" aria-hidden="true"></i>
                </div>
                <h6 class="login_text">LOGIN</h6>
                <i class="fa fa-moon-o moon icon" aria-hidden="true"></i>
                <i class="fa fa-sun-o sun icon" aria-hidden="true"></i>
            </div>
        </div>
        <div class="search_box1 ">
            <input  class="search_input1" />
            <i class="fa fa-search search1" aria-hidden="true"></i>
        </div>
    </div>

    <!-- JS ============================================ -->

<!-- Plugins JS 
     <script src="assets/js/plugins.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Main JS 
    <script src="assets/js/main.js"></script>

    <script>
         $('.moon').click(function(){
            var element = document.body;

            $('.sun,.moon,.black_logo,.white_logo').addClass('active')

            //element.classList.toggle("dark");

            $('body').addClass('dark');
            

    })

    $('.sun').click(function(){
        $('.sun,.moon,.black_logo,.white_logo').removeClass('active')
        $('body').removeClass('dark');
    })

    </script>
</body>
</html> -->


<!-- -------------------------------------------------login -------------------------------------------------->

<!-- <div class="inner_main"> -->

<div class=" main">


    <div class="outer_login_box">
    </div>
    <!-- <div class="login_box">
</div> -->
    <div class="login_title">
        <div class="cancel_login ">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <h3>Login</h3>

        <form action="login_con.php" class="form-group " method="POST">
            <div class="input_box"></div>
            <input type="text" placeholder="Username or Email" class="get_input" name="email2">


            <div class="input_box"></div>
            <input type="password" placeholder="Password" class="get_input" name="password2"> <br>
            <!-- <div class="check ">
            <input type="checkbox"  class="tik">
            <label for=""> Remember me</label>
        </div> -->

            <label class="container ">
                <input type="checkbox" name="remember">
                <span class="checkmark"></span> Remember me
            </label>
            <div class="buttons_box">
                <button type="submit" class="buttons" name="login"> LOGIN </button>
            </div>
        </form>

        <div class="forgot">
            <a href="#" style="  color: var(--black);"> Forgot Password? </a>
        </div>

        <div class="google">
            <a class="oauth-container" href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin" style="text-transform:none;color:black;">
                CONTINUE WITH GOOGLE </a>
        </div>

        <div class="account">
            <a href="#" style="  color: var(--black);"> Don't have an account? Sign Up </a>
        </div>
    </div>

</div>
<!-- </div> -->
<!-- -------------------------------------------------login Ends -------------------------------------------------->


<!---------------------------------------------------- signup -------------------------------------------------------------->

<div class="sign">


    <div class="outer_login_box sign_box">
    </div>
    <!-- <div class="login_box">
</div> -->
    <div class="login_title ">
        <div class="cancel_login ">
            <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <h3>Sign Up</h3>

        <form action="login_con.php" class="form-group " method="POST">
            <div class="input_box"></div>
            <input type="text" placeholder="Username or Email" class="get_input" name="email">


            <div class="input_box"></div>
            <input type="password" placeholder="Password" class="get_input" name="password"> <br>
            <!-- <div class="check ">
            <input type="checkbox"  class="tik">
            <label for=""> Remember me</label>
        </div> -->

            <label class="container ">
                <input type="checkbox" name="tandc">
                <span class="checkmark"></span> I agree to the Terms and Condition
            </label>
            <div class="buttons_box">
                <button type="submit" class="buttons" name="signup"> Sign Up </button>
            </div>
            
        </form>

        <div class="">
            <!-- <a href="#" style="  color: white;">  Forgot Password? </a> -->
        </div>

        <div class="">
            <!-- CONTINUE WITH GOOGLE -->
        </div>

        <div class="account_sign">
            <a href="#" style="  color: var(--black);"> Already have an account? Login </a>
        </div>
    </div>


</div>
<!---------------------------------------------------- signup Ends-------------------------------------------------------------->

<!----------------------------------------------------- dashboard ------------------------------------------>
<div class="out_con">
    <div class="main_box">
        <i class="fa fa-times cancel" aria-hidden="true"></i>

        <div class="user">
        <img src="assets/img/profile.jpg" class="user_pic" />
            <div class="user_name ">
                <h6 class="name"> <?php

                        echo $_SESSION['email'];
                    ?></h6>
                <!-- <div class="line"></div> -->
                <h6 class="id"> <?php
                echo $_SESSION['user_id'];
                ?></h6>
            </div>
            <div class="symbols">
                <i class="fa fa-ellipsis-h dot" aria-hidden="true"></i>
                <i class="fa fa-plus plus" aria-hidden="true"></i>
                <i class="fa fa-times cross" aria-hidden="true"></i>
            </div>
        </div>

        <div class="form_main_box">
            <div class="form_box">
                <form class="form" action="profile_con.php" method="POST" enctype="multipart/form-data">
                    <div style="display:flex;"> 
                    <select class="get col-10" name="role" id="story">
                            <option>STORIES</option>
                            <option>ENTERTAINMENT</option>
                            <option>MEMES</option>
                            <option>PODCASTS</option>
                        </select> <span style="margin-top:10px; margin-left:4px"><i>Edit </i></span> </div>

                    <div style="display:flex; ">
                    <input class=" get  col-10" name="title" id="title" placeholder="TITLE"
                            type="text" /><span style="margin-top:10px; margin-left:4px"><i>Edit </i></span> </div>
                    <div style="display:flex; ">
                    <textarea placeholder="CONTENT" name="content" id="content" rows="7" type="text"
                            class=" get1 col-10 " ALIGN="centre" required></textarea> <span
                            style="margin-top:10px; margin-left:4px"><i>Edit </i></span> </div>

                            <div style="display:flex; "> 
                    <div class="holder get col-10" id="holder_image">IMAGES</div>
                    <input class="  get col-10" name="image" type="file" style="display:none"
                            id="image" placeholder="IMAGES" onchange="sub(this)" /> <span style="margin-top:10px; margin-left:4px"><i>Edit
                            </i></span> </div>

                    <div style="display:flex; ">
                    <div class="holder get col-10" id="holder_video">VIDEOS</div>
                    <input class=" get  col-10" type="file" name="videos" id="video" style="display:none"
                            placeholder="VIDEOS"  onchange="video_fun(this)"/> <span style="margin-top:10px; margin-left:4px"><i>Edit </i></span>
                    </div>
                    <input class="send" type="submit" name="send" id="send" value="SEND"> </button>
                </form>
            </div>

        </div>


        <h4 class="saved"> Saved Post </h4>
        <div class="img_grid">
            <div class="row rows">
                <div class=" grid_box"></div>
                <div class=" grid_box"></div>
                <div class=" grid_box"></div>
                <!-- </div> -->

                <!-- <div class="row rows"> -->
                <div class=" grid_box"></div>
                <div class=" grid_box"></div>
                <div class=" grid_box"></div>
                <!-- </div> -->

                <!-- <div class="row rows"> -->
                <div class=" grid_box"></div>
                <div class=" grid_box"></div>
                <div class=" grid_box"></div>
                <!-- </div> -->

                <!-- <div class="row rows"> -->
                <div class=" grid_box"></div>
                <div class=" grid_box"></div>
                <div class=" grid_box"></div>
                <!-- </div> -->

                <!-- <div class="row rows"> -->
                <div class=" grid_box"></div>
                <div class=" grid_box"></div>
                <div class=" grid_box"></div>
            </div>
        </div>
    </div>
</div>

<!-- -----------------------------------------------------dashboard ends------------------------------------------ -->


<!------------------------------------------------- javascript ------------------------------------------------------->
<script>
      function sub(obj) {
            var file = obj.value;
            var fileName = file.split("\\");
           
            document.getElementById("holder_image").innerHTML = fileName[fileName.length - 1];
            // document.myForm.submit();
            // event.preventDefault();
          }

          function video_fun(e) {
            var file_video = e.value;
            var fileName_video = file_video.split("\\");
           
            document.getElementById("holder_video").innerHTML = fileName_video[fileName_video.length - 1];
            // document.myForm.submit();
            // event.preventDefault();
          }

        //   $('#image').change(function(obj){
        //       $('.holder').css("background","red");
        //         var file = obj.value;
        //         console.log(file);
        //         var fileName = file.split("\\");
        //         document.getElementById("holder").innerHTML = fileName[fileName.length - 1];
        //         document.myForm.submit();
        //         event.preventDefault();
        //   })
</script>
<!-- <script>
document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('holder_image'),
        {
            fields: {
               
                    validators: {
                        notEmpty: {
                            message: 'Please select an image'
                        },
                        file: {
                            extension: 'jpeg,jpg,png',
                            type: 'image/jpeg,image/png',
                           // maxSize: 2097152,   // 2048 * 1024
                            message: 'The selected file is not valid'
                        },
                    }
                },
            },
        
    );
});

</script> -->