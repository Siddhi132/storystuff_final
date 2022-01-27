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
    <div class="container-fluid  px-5">
        <section id="latest" class="all px-5 px-sm-0">
            <div class="latest_story mt-5">
                <h1 > LATEST </h1>
            </div>
            <div class="row  ml-1">
                <!-- <div class="text1 text_mv">
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos assumenda accusantium velit, ullam perferendis provident </h6>
                </div>
                <div class="text1 text2 text_mv">
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos assumenda accusantium velit, ullam perferendis provident </h6>
                </div>
                <div class="text1 text2 text1_mv">
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos assumenda accusantium velit, ullam perferendis provident </h6>
                </div>
                <div class="text1 text2 text3 text1_mv">
                    <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos assumenda accusantium velit, ullam perferendis provident </h6>
                </div> -->
                <?php
                            $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 4,4";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            $image = $row['image'];
                            $artical_id = $row['artical_id'];
                            $category_id = $row['category_id'];
                            $description = $row['description'];
                            $user_id = $row['user_id'];
                            $date = $row['date'];
                        
                            echo '<div class="text1 text2  text1_mv">
                            <h6>'.$description.'</h6>
                            </div>';
}

?>
                
            </div>
        </section>

        <!-- stories -->
        <section id="stories" class="all px-5 px-sm-0 my-story">
            <!-- <div class="latest_story mt-5">
                <h6 > <b>  ENTERTAINMENT <b> </h6>
            </div>
            <div class="latest_story mt-1 ">
                <h2 > HEADLINE </h2>
            </div>
            <div class="row3 pb-4">
                <div class="publish">
                    <h6 class="publish_text">PUBLISHED BY</h6>
                    <h6>DATE</h6>
                </div>
                <div class="symbol">
                    <img src="assets/img/logo/label.png" class="black_logo" />
                    <img src="assets/img/logo/white.png" class="white_logo" />
                    <i class="fa fa-share-alt fa-lg mt-1" class="share" aria-hidden="true" ></i>
                    <div class="modal fade" id="share" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title w-100" id="exampleModalLabel">Share This Post</h2>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-auto">
                                <div class="social">
                                    <a href="#" id="share-wa" class="sharer button"><i class="fa fa-3x fa-whatsapp text-success"></i></a>
                                    <a href="#" id="share-fb" class="sharer button"><i class="fa fa-3x fa-facebook-square text-primary"></i></a>
                                    <a href="#" id="share-tw" class="sharer button"><i class="fa fa-3x fa-twitter-square text-primary"></i></a>
                                    <a href="#" id="share-li" class="sharer button"><i class="fa fa-3x fa-linkedin-square text-primary"></i></a>
                                    <a href="#" id="share-gp" class="sharer button"><i class="fa fa-3x fa-google-plus-square text-danger"></i></a>
                                    <a href="#" id="share-em" class="sharer button"><i class="fa fa-3x fa-envelope-square text-dark"></i></a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="story mt-5"  id="story-img">
                
            </div> -->
        </section>

        <!-- more stories -->
        <section class="all px-5 px-sm-0">
            <div class="latest_story row3 mt-5">
                <h1 > MORE ENTERTAINMENT </h1>
            </div>
            <div class="all_stories ">
                <div class="row px-md-5 ">
                    <!-- <img src="assets/img/tree.jpg" class="all_story_img" />
                    <img src="assets/img/tree.jpg" class="all_story_img" />
                    <img src="assets/img/tree.jpg" class="all_story_img" /> -->
                    <?php
                            $sql = "SELECT * FROM `artical` where `category_id`='ENTERTAINMENT' ORDER BY `date` DESC";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            $image = $row['image'];
                            $artical_id = $row['artical_id'];
                            $category_id = $row['category_id'];
                            $ription = $row['description'];
                            $user_id = $row['user_id'];
                            $date = $row['date'];
                            echo '<button style="background:transparent;border:0px;z-index:1;" class="artical_id" id='.$artical_id.'><img src="'.$image.'" class="all_story_img" id="artical-img"/></button>';
}
?>
                    <!-- <img src="assets/img/tree.jpg" class="all_story_img" />
                    <img src="assets/img/tree.jpg" class="all_story_img" /> -->
                </div>
            </div>
        </section>
    </div>

    <script>
         $(document).ready(function () {
            function loadData(id)
            {
                $.ajax(
                    {
                    type: "POST",
                    url: "ent-internal-logic.php",
                    data: {'artical-id':id},
                    success: function (data) {
                        $('.my-story').html(data);
                    }
                });
            }
            $(".artical_id").click(function () { 
                var element = $(this).attr("id");
                loadData(element);
            });
            loadData(15);
        });
    </script>
    

    <script src="assets/js/plugins.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>