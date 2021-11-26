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
                            $sql = "SELECT * FROM `artical` ORDER BY `date` DESC LIMIT 1,4";
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
            
        </section>

        <!-- more stories -->
        <section class="all px-5 px-sm-0">
            <div class="latest_story row3 mt-5">
                <h1 > MORE STORIES </h1>
            </div>
            <div class="all_stories ">
                <div class="row px-md-5 ">
                    <!-- <img src="assets/img/tree.jpg" class="all_story_img" />
                    <img src="assets/img/tree.jpg" class="all_story_img" />
                    <img src="assets/img/tree.jpg" class="all_story_img" /> -->
                    <?php
                            $sql = "SELECT * FROM `artical` where `category_id`='STORIES' ORDER BY `date` DESC";
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
                    url: "stories-internal-logic.php",
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
            loadData(8);
        });
    </script>
    <script src="assets/js/plugins.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
