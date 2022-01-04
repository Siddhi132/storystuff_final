   
<?php
error_reporting(0);
require 'dbconnect.php';
// require 'profile_con.php';
 ?>

       <!-- latest -->

       <div class="container-fuild mt-5 px-5">

        <section class="latest">
            <div class="latest_box">
                <div class="latest_input">
                    <h1 > LATEST </h1>
                </div>
                <div class="button_box ">
                    <button class="view_more"> View More </button>
                </div>
            </div>
            <div class="latest_content  px-3">
                
                <!-- row1 -->
                <div class="row" >
                    <!-- <div class="img_box pr-0  pr-md-5">
                    <img src="assets/img/tree.jpg" class="img_pic mt-3" /> 
                        <h6 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div> -->
                    <?php
                            $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 1";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            $image = $row['image'];
                            $artical_id = $row['artical_id'];
                            $category_id = $row['category_id'];
                            $description = $row['description'];
                            $user_id = $row['user_id'];
                            $date = $row['date'];
                        
                            echo '<div class="img_box pr-0  pr-md-5">
                            <img src="'.$image.'" class="img_pic mt-3" /> 
                                <h6 class="mt-3">'.$description.' </h6>
                            </div>';
}

?>

                    <div class="content_box mt-3">
                        <!-- <div class="content1">
                            <h6 class="mt-3 mr-3 mr-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                            <span class="content1_img"><img src="assets/img/stair.jpg" class="content1_img" /> </span>
                        </div>
                        <div class="content1 mt-3">
                            <h6 class="mt-3 mr-3 mr-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                            <span class="content1_img"><img src="assets/img/circle.jpg" class="content1_img" /> </span>
                        </div>
                        <div class="content1 mt-3">
                            <h6 class="mt-3 mr-3 mr-lg-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                            <span class="content1_img"><img src="assets/img/dog.jpg" class="content1_img" /> </span>
                        </div> -->
                        <?php
                            $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 2,3";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            $image = $row['image'];
                            $artical_id = $row['artical_id'];
                            $category_id = $row['category_id'];
                            $description = $row['description'];
                            $user_id = $row['user_id'];
                            $date = $row['date'];
                        
                            echo '<div class="content1">
                            <span class="content1_img mt-2"><img src="'.$image.'" class="content1_img" /> </span>
                            <h6 class="mt-3 mr-3 mr-lg-0">'.$description.' </h6>
                        </div>';
}

?>
                    </div>
                </div>

                <!-- row2 -->
                <div class="row mt-3" >
                    <div class="content_box mt-3">
                        <!-- <div class="content1">
                        <span class="content1_img"><img src="assets/img/stair.jpg" class="content1_img" /> </span>
                            <h6 class="mt-3 ml-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                        </div>
                        <div class="content1 mt-3">
                        <span class="content1_img"><img src="assets/img/design.jpg" class="content1_img" /> </span>
                            <h6 class="mt-3  ml-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                        </div>
                        <div class="content1 mt-3">
                        <span class="content1_img"> <img src="assets/img/tree.jpg" class="content1_img" /> </span>
                            <h6 class="mt-3  ml-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                        </div> -->
                        <?php
                            $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 5,3";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            $image = $row['image'];
                            $artical_id = $row['artical_id'];
                            $category_id = $row['category_id'];
                            $description = $row['description'];
                            $user_id = $row['user_id'];
                            $date = $row['date'];
                        
                            echo '<div class="content1 mt-3">
                            <span class="content1_img"> <img src="'.$image.'" class="content1_img" /> </span>
                                <h6 class="mt-3  ml-4">'.$description.' </h6>
                            </div>';
}

?>

                    </div>
<!-- 
                    <div class="img_box pl-0 pl-md-5">
                    <img src="assets/img/contact-us-bg1.jpg" class="img_pic mt-3" />  
                        <h6 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div> -->

                    <?php
                            $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 10,1";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            $image = $row['image'];
                            $artical_id = $row['artical_id'];
                            $category_id = $row['category_id'];
                            $description = $row['description'];
                            $user_id = $row['user_id'];
                            $date = $row['date'];
                        
                            echo '<div class="img_box pl-0 pl-md-5">
                            <img src="'.$image.'" class="img_pic mt-3" />  
                                <h6 class="mt-3">'.$description.'</h6>
                            </div>';
}

?>
                </div>
            </div>
        </section>

         <!-- -------------------------------------------------login -------------------------------------------------->

    <!-- <div class="inner_main"> 

    <div class="main_mv">

        
<div class="outer_login_box">
</div>

<div class="login_title ">
    <div class="cancel_login ">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <h3>Login</h3>

    <form action="" class="form-group ">
        <div class="input_box"></div>
        <input type="text" placeholder="Username or Email" class="get_input">


        <div class="input_box"></div>
        <input type="password" placeholder="Password" class="get_input"> <br>
       

        <label class="container "> 
            <input type="checkbox">
            <span class="checkmark"></span> Remember me
        </label>
        <div class="buttons_box">
            <button type="submit" class="buttons"> LOGIN </button>
        </div>
    </form>

    <div class="forgot">
      <a href="#" style="  color: white;">  Forgot Password? </a>
    </div>

    <div class="google">
        CONTINUE WITH GOOGLE
    </div>

    <div class="account">
    <a href="#" style="  color: var(--black);"> Don't have an account?  Sign Up  </a>
    </div>
</div>

</div>
 </div> -->
<!-- -------------------------------------------------login Ends -------------------------------------------------->


<!---------------------------------------------------- signup -------------------------------------------------------------->

<!-- <div class="sign_mv" >

        
<div class="outer_login_box sign_box">
</div>

<div class="login_title ">
    <div class="cancel_login ">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <h3>Sign Up</h3>

    <form action="" class="form-group ">
        <div class="input_box"></div>
        <input type="text" placeholder="Username or Email" class="get_input">


        <div class="input_box"></div>
        <input type="password" placeholder="Password" class="get_input"> <br>
        
        <label class="container "> 
            <input type="checkbox">
            <span class="checkmark"></span> I agree to the Terms and Condition
        </label>
        <div class="buttons_box">
            <button type="submit" class="buttons"> Sign Up </button>
        </div>
    </form>

    <div class="">
      
    </div>

    <div class="">
      
    </div>

    <div class="account_sign" >
    <a href="#" style="  color: var(--black);">  Already have an account?  Login  </a>
    </div>
</div>

</div> -->
<!---------------------------------------------------- signup Ends-------------------------------------------------------------->


        <!-- stories -->

        

<section class="latest">
            <div class="latest_box">
                <div class="latest_input">
                    <h1 > STORIES </h1>
                </div>
            </div>
            <div class="story_content  pl-3">
                <div class="row_flex">
                    <div class="button_story_box button_story_box_top ">
                        <button class="view_more"> View More </button>
                    </div> 
                    <!-- row1 -->
                    <!-- 1st  -->
                    <div class="row row1_story" >
                        <?php
                            $sql = "SELECT * FROM `artical` where `category_id`='STORIES' ORDER BY `date` DESC LIMIT 1";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            $image = $row['image'];
                            $artical_id = $row['artical_id'];
                            $category_id = $row['category_id'];
                            $description = $row['description'];
                            $user_id = $row['user_id'];
                            $date = $row['date'];
                        
                            echo '<div class="img_box pr-0 pr-md-5">
                            <img src="' . $image . '" class="img_story_pic mt-sm-3 mt-4" />
                            <h6 class="mt-3">' . $description . '</h6>
                            </div>';
                            }

                        ?>
                       <!-- 2nd 3rd 4th -->
                        <div class="content_box ">
                            <?php
                                     $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 1,3";
                                     $result = mysqli_query($conn, $sql);
                                     while ($row = mysqli_fetch_assoc($result)) {
                                     $image = $row['image'];
                                     $artical_id = $row['artical_id'];
                                     $category_id = $row['category_id'];
                                     $description = $row['description'];
                                     $user_id = $row['user_id'];
                                     $date = $row['date'];

                                    echo '<div class="content1 mt-3">
                                    <span class="story1_img">
                                        <img src="' . $image . '" class="story1_img" />
                                    </span>
                                    <h6 class="mt-3 ml-4">' . $description . '</h6>
                                </div>';
                                }

                            ?>
                        </div>

                     <!-- </div>  -->


                    <!-- row2 -->
                     <!-- 1st   -->
                    <div class="row row1_story mt-5  ml-1" >
                        <?php
                            $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 4,1";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            $image = $row['image'];
                            $artical_id = $row['artical_id'];
                            $category_id = $row['category_id'];
                            $description = $row['description'];
                            $user_id = $row['user_id'];
                            $date = $row['date'];
                        
                            echo '<div class="img_box pr-0 pr-md-5">
                            <img src="' . $image . '" class="img_story_pic mt-sm-3 mt-4" />
                            <h6 class="mt-3">' . $description . '</h6>
                            </div>';
                            }
                        ?>

                        <!-- 2 3 4  -->
                        <div class="content_box ">
                            <?php
                                   $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 5,3";
                                   $result = mysqli_query($conn, $sql);
                                   while ($row = mysqli_fetch_assoc($result)) {
                                   $image = $row['image'];
                                   $artical_id = $row['artical_id'];
                                   $category_id = $row['category_id'];
                                   $description = $row['description'];
                                   $user_id = $row['user_id'];
                                   $date = $row['date'];

                                  echo '<div class="content1 mt-3">
                                  <span class="story1_img">
                                      <img src="' . $image . '" class="story1_img" />
                                  </span>
                                  <h6 class="mt-3 ml-4">' . $description . '</h6>
                              </div>';
                              }
                            ?>
                        </div>
                    </div>
                    <div class="button_story_box button_story_box_bottom mt-5">
                        <button class="view_more"> View More </button>
                    </div>
                </div>

               
            </div>

                <!-- POPULAR STORY  -->
                <div class="row1_flex">

                    <div class="popular mt-5 mt-lg-0  pl-3">
                        <h3> POPULAR STORIES </h3>
                    </div>
                    <div class="mt-5 pl-3">
                    <?php
                                   $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 8,3";
                                   $result = mysqli_query($conn, $sql);
                                   while ($row = mysqli_fetch_assoc($result)) {
                                   $image = $row['image'];
                                   $artical_id = $row['artical_id'];
                                   $category_id = $row['category_id'];
                                   $description = $row['description'];
                                   $user_id = $row['user_id'];
                                   $date = $row['date'];                           
                      
                          echo '<div class="content1 mt-3">
                          <span class="content1_img">
                            <img src="' . $image . '" class="content1_img" />
                          </span>
                          <h6 class="mt-3 ml-4 ">' . $description . '</h6>
                            </div>';
                      }
                      ?>
                    </div>
                    <div class="button_story_box button_story_box1  ml-4">
                        <button class="view_more"> View More </button>
                    </div>
                </div>

                
            </div>
        </section>

        <!-- ENTERTAINMENT -->
        <section class="latest">
            <div class="latest_box">
                <div class="latest_input">
                    <h1 > ENTERTAINMENT </h1>
                </div>
            </div>
            <div class="enter_content  pl-3 ">
                <div class="row  main_enter">
                <?php
                                   $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 1,2";
                                   $result = mysqli_query($conn, $sql);
                                   while ($row = mysqli_fetch_assoc($result)) {
                                   $image = $row['image'];
                                   $artical_id = $row['artical_id'];
                                   $category_id = $row['category_id'];
                                   $description = $row['description'];
                                   $user_id = $row['user_id'];
                                   $date = $row['date'];                           
                      
                          echo '<div class="img_enter_box img_enter_box1   ">
                          <img src="' . $image . '" class="img_enter_pic mt-sm-3 mt-4" height="230" />
                          <h6 class="mt-3 ">' . $description . '</h6>
                      </div>';
                      }
                      ?>  
                      
                      <?php
                                   $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 1,1";
                                   $result = mysqli_query($conn, $sql);
                                   while ($row = mysqli_fetch_assoc($result)) {
                                   $image = $row['image'];
                                   $artical_id = $row['artical_id'];
                                   $category_id = $row['category_id'];
                                   $description = $row['description'];
                                   $user_id = $row['user_id'];
                                   $date = $row['date'];                           
                      
                          echo '<div class="img_enter_box img_enter_box1  mr-0">
                          <img src="' . $image . '" class="img_enter_pic mt-sm-3 mt-4" height="230" />
                          <h6 class="mt-3 ">' . $description . '</h6>
                      </div>';
                      }
                      ?>  
                    <!-- <div class="img_enter_box img_enter_box1  ">
                        <img src="assets/img/tree.jpg" class="img_enter_pic mt-sm-3 mt-4" height="230"/>
                        <h6 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div>
                    <div class="img_enter_box img_enter_box1  ">
                        <img src="assets/img/man.jpg" class="img_enter_pic mt-sm-3 mt-4" height="230"/>
                        <h6 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div>
                    <div class="img_enter_box img_enter_box2  mr-0">
                        <img src="assets/img/stair.jpg" class="img_enter_pic mt-sm-3 mt-4" height="230" />
                        <h6 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div> -->
                </div>
                <div class="row mt-md-5">
                    <div class="enter_content1   ">
                   

                    <?php
                                   $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 2,3";
                                   $result = mysqli_query($conn, $sql);
                                   while ($row = mysqli_fetch_assoc($result)) {
                                   $image = $row['image'];
                                   $artical_id = $row['artical_id'];
                                   $category_id = $row['category_id'];
                                   $description = $row['description'];
                                   $user_id = $row['user_id'];
                                   $date = $row['date'];                           
                      
                          echo '<div class="content1  mt-3">  <span class="enter_img">
                          <img src="' . $image . '" class="enter_img " /></span>
                          <h6 class="mt-3 ml-4">' . $description . '</h6>
                      </div>';
                      }
                      ?>  
                        <!-- <div class="content1">
                        <span class="enter_img">
                            <img src="assets/img/stair.jpg" class="enter_img " /> </span>
                            <h6 class="mt-3 ml-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                        </div>
                        <div class="content1 mt-3">
                        <span class="enter_img">
                            <img src="assets/img/dog.jpg" class="enter_img" /> </span>
                            <h6 class="mt-3 ml-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                        </div>
                        <div class="content1 mt-3">
                        <span class="enter_img">
                            <img src="assets/img/design.jpg" class="enter_img" /> </span>
                            <h6 class="mt-3 ml-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                        </div> -->
                    
                    </div>
                    <div class="enter_content1 enter_content_mv  ">
                   
                    <?php
                                   $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 2,3";
                                   $result = mysqli_query($conn, $sql);
                                   while ($row = mysqli_fetch_assoc($result)) {
                                   $image = $row['image'];
                                   $artical_id = $row['artical_id'];
                                   $category_id = $row['category_id'];
                                   $description = $row['description'];
                                   $user_id = $row['user_id'];
                                   $date = $row['date'];                           
                      
                          echo '<div class="content1 mt-3 ">  <span class="enter_img">
                          <img src="' . $image . '" class="enter_img " /></span>
                          <h6 class="mt-3 ml-4">' . $description . '</h6>
                      </div>';
                      }
                      ?>  
                    
                    </div>
                </div>
                <div class="button_enter_box mt-5">
                        <button class="view_more"> View More </button>
                </div>
            </div>
           
        </section>

        <!-- memes -->

        <section class="latest">
            <div class="latest_box">
                <div class="latest_input">
                    <h1 > MEMES </h1>
                </div>
            </div>
            <div class="memes_content    mt-3">
                <div class="memes_small">
                <?php
                                   $sql = "SELECT * FROM `artical` where `category_id`='MEMES' ORDER BY `date` DESC LIMIT 0,6";
                                   $result = mysqli_query($conn, $sql);
                                   while ($row = mysqli_fetch_assoc($result)) {
                                   $image = $row['image'];
                                   $artical_id = $row['artical_id'];
                                   $category_id = $row['category_id'];
                                   $description = $row['description'];
                                   $user_id = $row['user_id'];
                                   $date = $row['date'];                           
                      
                          echo '<div class="content1 con1 mt-3">
                          <span class="memes_small_img">
                              <img src="'.$image.'" class="memes_small_img" /> </span>
                              <h6 class="mt-3 ml-4 ml-md-0 ml-lg-4">'.$description.' </h6>
                          </div>';
                      }
                      ?>  
                    <!-- <div class="content1 con1">
                        <span class="memes_small_img">
                            <img src="assets/img/design.jpg" class="memes_small_img" />
                        </span>
                        <h6 class="mt-3 ml-4 ml-md-0 ml-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div>
                    <div class="content1 con1 mt-3">
                    <span class="memes_small_img">
                        <img src="assets/img/man.jpg" class="memes_small_img" /> </span>
                        <h6 class="mt-3 ml-4 ml-md-0 ml-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div>
                    <div class="content1 con1 mt-3">
                         <span class="memes_small_img">
                        <img src="assets/img/dog.jpg" class="memes_small_img" /> </span>
                        <h6 class="mt-3 ml-4 ml-md-0 ml-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div>
                    <div class="content1 con1 mt-3">
                         <span class="memes_small_img">
                        <img src="assets/img/tree.jpg" class="memes_small_img" /> </span>
                        <h6 class="mt-3 ml-4 ml-md-0 ml-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div>
                    <div class="content1 con1 mt-3">
                         <span class="memes_small_img">
                        <img src="assets/img/contact-bg.jpg" class="memes_small_img" /> </span>
                        <h6 class="mt-3 ml-4 ml-md-0 ml-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div>
                    <div class="content1 con1 mt-3">
                         <span class="memes_small_img">
                        <img src="assets/img/man.jpg" class="memes_small_img" /> </span>
                        <h6 class="mt-3 ml-4 ml-md-0 ml-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div> -->
                </div>
                <div class="memes_large ">
                <?php
                                   $sql = "SELECT * FROM `artical` where `category_id`='MEMES' ORDER BY `date` DESC LIMIT 3,3";
                                   $result = mysqli_query($conn, $sql);
                                   while ($row = mysqli_fetch_assoc($result)) {
                                   $image = $row['image'];
                                   $artical_id = $row['artical_id'];
                                   $category_id = $row['category_id'];
                                   $description = $row['description'];
                                   $user_id = $row['user_id'];
                                   $date = $row['date'];                           
                      
                          echo '<div class="img_meme_box  ml-0 ml-lg-5 pl-lg-3">
                         
                              <img src="'.$image.'" class="img_meme_large_pic" /> 
                              <h6 class="mt-3 ">'.$description.' </h6>
                          </div>';
                      }
                      ?>  
                    <!-- <div class="img_meme_box  ml-0 ml-lg-5 pl-lg-3">
                        <img src="assets/img/tree.jpg" class="img_meme_large_pic " /> 
                        <h6 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div>
                    <div class="img_meme_box ml-0 ml-lg-5 pl-lg-3">
                    <img src="assets/img/man.jpg" class="img_meme_large_pic mt-sm-3 mt-4" /> 
                        <h6 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div>
                    <div class="img_meme_box ml-0 ml-lg-5 pl-lg-3">
                     <img src="assets/img/stair.jpg" class="img_meme_large_pic mt-sm-3 mt-4" /> 
                        <h6 class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                    </div> -->

                  
                  
                </div>
                
            </div>
            <div class="button_enter_box  mt-5 pt-2">
                        <button class="view_more"> View More </button>
                    </div>
        </section>


         <!-- PODCAST -->

    <section class="">
        <div class="latest_box">
            <div class="latest_input">
                <h1 > PODCASTS </h1>
            </div>
        </div>

        <!-- <section id="slider" class="">
            <input type="radio" name="slider" id="s1" checked>
            <input type="radio" name="slider" id="s2">
            <input type="radio" name="slider" id="s3">
            <input type="radio" name="slider" id="s4">
            <input type="radio" name="slider" id="s5">

            <label for="s1" id="slide1">1</label>
            <label for="s2" id="slide2">2</label>
            <label for="s3" id="slide3">3</label>
            <label for="s4" id="slide4">4</label>
            <label for="s5" id="slide5">5</label>
        </section> -->


        <div style="" class=" slider_box">
            <div class="arrow  ">
                <span class="tap prev_mv d-block d-md-none" ></span>
        <span class="fa fa-chevron-left  prev d-none d-md-block "></span>

            </div>

            <div class="slider_podcast carousel owl-carousel  px-0 " id="owl-demo">
            <?php
                                   $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 3,5";
                                   $result = mysqli_query($conn, $sql);
                                   while ($row = mysqli_fetch_assoc($result)) {
                                   $image = $row['image'];
                                   $artical_id = $row['artical_id'];
                                   $category_id = $row['category_id'];
                                   $description = $row['description'];
                                   $user_id = $row['user_id'];
                                   $date = $row['date'];                           
                      
                          echo '<div class="all_img">
                          <div class="blur_box">
                              <img  class="blur_img" src="'.$image.'">
                          </div>
                          <div class="small_box">
                              <img class="small_img" src="'.$image.'">
                          </div>
                          <div class="text_slider">
                              <h4> '.$description.'</h4>
                          </div>
                      </div>';
                      }
                      ?>  
                <!-- <div class="all_img">
                    <div class="blur_box">
                        <img  class="blur_img" src="assets/img/tree.jpg">
                    </div>
                    <div class="small_box">
                        <img class="small_img" src="assets/img/tree.jpg">
                    </div>
                    <div class="text_slider">
                        <h4> lorem ipsum </h4>
                    </div>
                </div>
           
                <div class="all_img">
                    <div class="blur_box">
                        <img  class="blur_img" src="assets/img/stair.jpg">
                    </div>
                    <div class="small_box">
                        <img class="small_img" src="assets/img/stair.jpg">
                    </div>
                    <div class="text_slider">
                        <h4> lorem ipsum </h4>
                    </div>
                </div>

                <div class="all_img">
                    <div class="blur_box">
                        <img  class="blur_img" src="assets/img/tree.jpg">
                    </div>
                    <div class="small_box">
                        <img class="small_img" src="assets/img/tree.jpg">
                    </div>
                    <div class="text_slider">
                        <h4> lorem ipsum </h4>
                    </div>
                </div>

                <div class="all_img">
                    <div class="blur_box">
                        <img  class="blur_img" src="assets/img/stair.jpg">
                    </div>
                    <div class="small_box">
                        <img class="small_img" src="assets/img/stair.jpg">
                    </div>
                    <div class="text_slider">
                        <h4> lorem ipsum </h4>
                    </div>
                </div>

                <div class="all_img">
                    <div class="blur_box">
                        <img  class="blur_img" src="assets/img/tree.jpg">
                    </div>
                    <div class="small_box">
                        <img class="small_img" src="assets/img/tree.jpg">
                    </div>
                    <div class="text_slider">
                        <h4> lorem ipsum </h4>
                    </div>
                </div> -->
            </div>
            <div class="arrow  ">
            <span class="tap next_mv d-block d-md-none" ></span>
            <span class="fa fa-chevron-right   next d-none d-md-block "></span>

            </div>
        </div>
        <div class="arrow_mv ">
        <span class="fa fa-chevron-left  prev  mr-5 d-block d-md-none "></span>
        <span class="fa fa-chevron-right  next d-block d-md-none "></span>

        </div>


       <!-- <div class="row mt-5 pt-5 pl-3 ">
            <div class="row_podcast_flex">
                <div class="pod_inner_box">
                     <?php
                    //                $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 0,2";
                    //                $result = mysqli_query($conn, $sql);
                    //                while ($row = mysqli_fetch_assoc($result)) {
                    //                $image = $row['image'];
                    //                $artical_id = $row['artical_id'];
                    //                $category_id = $row['category_id'];
                    //                $description = $row['description'];
                    //                $user_id = $row['user_id'];
                    //                $date = $row['date'];
                      
                    //       echo '<div class="content1">
                    //       <span class="podcast_img"><img src="'.$image.'" class="podcast_img" /> </span>
                    //           <h6 class="mt-3 ml-4">'.$description.'</h6>
                    //       </div>';
                    //   }
                      ?>  
                     <div class="content1">
                    <span class="podcast_img"><img src="assets/img/stair.jpg" class="podcast_img" /> </span>
                        <h6 class="mt-3 ml-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h6>
                    </div>
                    <div class="content1 ">
                       <span class="podcast_img">  <img src="assets/img/tree.jpg" class="podcast_img" /> </span>
                        <h6 class="mt-3 ml-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h6>
                    </div> 
                </div>
               
                <div class="pod_inner_box mt-3">
                <?php
                    //                $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 2,2";
                    //                $result = mysqli_query($conn, $sql);
                    //                while ($row = mysqli_fetch_assoc($result)) {
                    //                $image = $row['image'];
                    //                $artical_id = $row['artical_id'];
                    //                $category_id = $row['category_id'];
                    //                $description = $row['description'];
                    //                $user_id = $row['user_id'];
                    //                $date = $row['date'];                           
                      
                    //       echo '<div class="content1">
                    //       <span class="podcast_img"><img src="'.$image.'" class="podcast_img" /> </span>
                    //           <h6 class="mt-3 ml-4 ">'.$description.'</h6>
                    //       </div>';
                    //   }
                      ?>  
                     <div class="content1">
                       <span class="podcast_img">  <img src="assets/img/man.jpg" class="podcast_img" /> </span>
                        <h6 class="mt-3 ml-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h6>
                    </div>
                    <div class="content1 ">
                       <span class="podcast_img">  <img src="assets/img/dog.jpg" class="podcast_img" /> </span>
                        <h6 class="mt-3 ml-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h6>
                    </div> 
                </div>
            </div>
            <div class="row_podcast_flex row1_podcast_flex ">
                <div class="pod_inner_box">
                <?php
                    //                $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 4,2";
                    //                $result = mysqli_query($conn, $sql);
                    //                while ($row = mysqli_fetch_assoc($result)) {
                    //                $image = $row['image'];
                    //                $artical_id = $row['artical_id'];
                    //                $category_id = $row['category_id'];
                    //                $description = $row['description'];
                    //                $user_id = $row['user_id'];
                    //                $date = $row['date'];                           
                      
                    //       echo '<div class="content1">
                    //       <span class="podcast_img"><img src="'.$image.'" class="podcast_img" /> </span>
                    //           <h6 class="mt-3 ml-4 ">'.$description.'</h6>
                    //       </div>';
                    //   }
                      ?>  
                    <div class="content1">
                       <span class="podcast_img">  <img src="assets/img/design.jpg" class="podcast_img" /> </span>
                        <h6 class="mt-3 ml-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h6>
                    </div>
                    <div class="content1 ">
                       <span class="podcast_img">  <img src="assets/img/cactus.jpg" class="podcast_img" /> </span>
                        <h6 class="mt-3 ml-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h6>
                    </div> 
                </div>
               
                <div class="pod_inner_box mt-3">
                <?php
                    //                $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 6,2";
                    //                $result = mysqli_query($conn, $sql);
                    //                while ($row = mysqli_fetch_assoc($result)) {
                    //                $image = $row['image'];
                    //                $artical_id = $row['artical_id'];
                    //                $category_id = $row['category_id'];
                    //                $description = $row['description'];
                    //                $user_id = $row['user_id'];
                    //                $date = $row['date'];                           
                      
                    //       echo '<div class="content1">
                    //       <span class="podcast_img"><img src="'.$image.'" class="podcast_img" /> </span>
                    //           <h6 class="mt-3 ml-4 ">'.$description.'</h6>
                    //       </div>';
                    //   }
                      ?>  
                    <div class="content1">
                       <span class="podcast_img">  <img src="assets/img/circle.jpg" class="podcast_img" /> </span>
                        <h6 class="mt-3 ml-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h6>
                    </div>
                    <div class="content1 ">
                       <span class="podcast_img">  <img src="assets/img/contact-us-bg1.jpg" class="podcast_img" /> </span>
                        <h6 class="mt-3 ml-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. </h6>
                    </div> 
                </div>
            </div>-->


            <div class="row mt-md-5">
                    <div class="enter_content1   ">
                   

                    <?php
                                   $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 2,3";
                                   $result = mysqli_query($conn, $sql);
                                   while ($row = mysqli_fetch_assoc($result)) {
                                   $image = $row['image'];
                                   $artical_id = $row['artical_id'];
                                   $category_id = $row['category_id'];
                                   $description = $row['description'];
                                   $user_id = $row['user_id'];
                                   $date = $row['date'];                           
                      
                          echo '<div class="content1  mt-3">  <span class="enter_img">
                          <img src="' . $image . '" class="enter_img " /></span>
                          <h6 class="mt-3 ml-4">' . $description . '</h6>
                      </div>';
                      }
                      ?>  
                        <!-- <div class="content1">
                        <span class="enter_img">
                            <img src="assets/img/stair.jpg" class="enter_img " /> </span>
                            <h6 class="mt-3 ml-4 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                        </div>
                        <div class="content1 mt-3">
                        <span class="enter_img">
                            <img src="assets/img/dog.jpg" class="enter_img" /> </span>
                            <h6 class="mt-3 ml-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                        </div>
                        <div class="content1 mt-3">
                        <span class="enter_img">
                            <img src="assets/img/design.jpg" class="enter_img" /> </span>
                            <h6 class="mt-3 ml-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, ea aspernatur excepturi accusantium animi unde. </h6>
                        </div> -->
                    
                    </div>
                    <div class="enter_content1 enter_content_mv  ">
                   
                    <?php
                                   $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 2,3";
                                   $result = mysqli_query($conn, $sql);
                                   while ($row = mysqli_fetch_assoc($result)) {
                                   $image = $row['image'];
                                   $artical_id = $row['artical_id'];
                                   $category_id = $row['category_id'];
                                   $description = $row['description'];
                                   $user_id = $row['user_id'];
                                   $date = $row['date'];                           
                      
                          echo '<div class="content1 mt-3 ">  <span class="enter_img">
                          <img src="' . $image . '" class="enter_img " /></span>
                          <h6 class="mt-3 ml-4">' . $description . '</h6>
                      </div>';
                      }
                      ?>  
                    
                    </div>
                </div>


            <div class="button_enter_box  mt-4 mb-4">
                        <button class="view_more"> View More </button>
                </div>

                
        </div>
        <!-- <div class="podcast_slider hi-slide ">
            <ul>
                <li>  <img src="assets/img/tree.jpg" class="podcast_img" /> </li> 
                <li> <img src="assets/img/tree.jpg" class="podcast_img" /> </li>
                <li> <img src="assets/img/tree.jpg" class="podcast_img" /> </li>
                <li> <img src="assets/img/tree.jpg" class="podcast_img" /> </li>
                <li> <img src="assets/img/tree.jpg" class="podcast_img" /> </li>
            </ul>
        </div> -->

     
        <!-- <div class="carousel " >
	<div class="carousel-item">
		<img src="https://images.pexels.com/photos/356378/pexels-photo-356378.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Dog" title="Dog">
		<h3>
			Someone Famous 1
		</h3>
	</div>
	
	<div class="carousel-item">
		<img src="https://images.pexels.com/photos/1485637/pexels-photo-1485637.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Dog" title="Dog">
		<h3>
			Someone Famous 2
		</h3>
	</div>
	
	<div class="carousel-item">
		<img src="https://images.pexels.com/photos/1254140/pexels-photo-1254140.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Dog" title="Dog">
		<h3>
			Someone Famous 3
		</h3>
	</div>
	
	<div class="carousel-item">
		<img src="https://images.pexels.com/photos/374898/pexels-photo-374898.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Dog" title="Dog">
		<h3>
			Someone Famous 4
		</h3>
	</div>
	
	<div class="carousel-item">
		<img src="https://images.pexels.com/photos/58997/pexels-photo-58997.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Dog" title="Dog">
		<h3>
			Someone Famous 5
		</h3>
	</div>
	
	<div class="carousel-item">
		<img src="https://images.pexels.com/photos/434090/pexels-photo-434090.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Dog" title="Dog">
		<h3>
			Someone Famous 6
		</h3>
	</div>
	
	<div class="carousel-item">
		<img src="https://images.pexels.com/photos/733416/pexels-photo-733416.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Dog" title="Dog">
		<h3>
			Someone Famous 7
		</h3>
	</div>
	
	<div class="carousel-item">
		<img src="https://images.pexels.com/photos/160846/french-bulldog-summer-smile-joy-160846.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Dog" title="Dog">
		<h3>
			Someone Famous 8
		</h3>
	</div>
	
	<div class="carousel-item">
		<img src="https://images.pexels.com/photos/551628/pexels-photo-551628.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Dog" title="Dog">
		<h3>
			Someone Famous 9
		</h3>
	</div>
</div>  -->
    </section>

    
   
    <!-- JS ============================================ -->

<!-- Plugins JS -->
<!-- <script src="assets/js/plugins.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> -->
<!-- <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>            -->

 <!-- <script src="assets/js/jquery.min.js"></script> 
 <script src="assets/js/jquery.hislide.js"></script> -->  
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  -->

 

<!-- Main JS -->
<!-- <script>
    $(document).ready(function() {
	$('.carousel').carousel();
}); 
</script> -->

<?php
// echo "
// <script>
//          $('.moon').click(function(){
//             var element = document.body;
//             //element.classList.toggle('dark');

//             $('.sun,.moon,.black_logo,.white_logo').addClass('active');
//             $('body').addClass('dark');

//             var check = $('.sun,.moon,.black_logo,.white_logo').hasClass('active');
            
           
//     })";

//   if(){
          
//     //     $flag=false; 
//     //    $_SESSION['flag']=$flag; 
//   }
//     echo  "
//     <script> $('.sun').click(function(){
//         $('.sun,.moon,.black_logo,.white_logo').removeClass('active');
//         $('body').removeClass('dark');

           
//     })

//     </script>";
?>

<script>
//     $(document).ready(function(){
//         $('.moon').click(function(){
//        var element = document.body;
//        //element.classList.toggle('dark');

//        $('.sun,.moon,.black_logo,.white_logo').addClass('active');
//        $('body').addClass('dark');

//        var check = "dark";
       
//        $.ajax(
//            {
//            url: "memes-internal.php",
          
//            data: 'check1=' + check,
          
//        });  

//     //     $.post("memes-internal.php",{check1: check }, function(){
            
//     //                 alert('success'); 
//     //     });
//      }) ;

//         $('.sun').click(function(){
//         $('.sun,.moon,.black_logo,.white_logo').removeClass('active');
//         $('body').removeClass('dark');

//         var check = "light";
            
//             $.ajax(
//                 {
//                 url: "memes-internal.php",
//                 type: "POST",

//                 data: { check1: check},
//                 success: function () {
//                         alert('light mode');
//                 }
//             });  


//         // $.post("memes-internal.php",{check: check }, function(){
//         //             alert('light '); 
//         // });
//         });
//     })
    
 </script>




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

        $(".next_mv").click(function(){
            owl.trigger('next.owl.carousel');
        })

        $(".prev_mv").click(function(){
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
