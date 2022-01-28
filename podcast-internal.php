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


<div class="container-fluid px-5 ">
<div class="main-audio-2">






    <!-- upper titles -->
   

    <!-- main audio -->
    
    </div>  
        
    <!-- <div   class="podcast-content-main border">
        
    </div> -->
    

    <!-- audio track -->
    <!-- <div class="audio-div">
       
    </div> -->

    <!-- more podcast -->
    <section class="all px-5 px-sm-0">
        <div class="latest_story row3 mt-5">
            <h1 > MORE PODCASTS </h1>
        </div>
        <div class="all_stories ">


        <?php
                            $sql = "SELECT * FROM `artical` where `category_id`='PODCASTS' AND delete_status=2 ORDER BY `date` DESC";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            $image = $row['image'];
                            $video=$row['video'];
                            $artical_id = $row['artical_id'];
                            $category_id = $row['category_id'];
                            $ription = $row['description'];
                            $user_id = $row['user_id'];
                            $date = $row['date'];
                            echo '<button style="background:transparent;border:0px;z-index:1;" class="artical_id" id='.$artical_id.'><img src="'.$image.'" class="all_story_img" id="artical-img"/></button>';
                        }
                    ?>

<!-- 
            <div class="row pl-md-5 ">
                <img src="assets/img/tree.jpg" class="all_story_img" />
                <img src="assets/img/design.jpg" class="all_story_img" />
                <img src="assets/img/dog.jpg" class="all_story_img" />
                <img src="assets/img/man.jpg" class="all_story_img" />
            </div> -->
        </div>
    </section>
</div>
<script>
        $(document).ready(function () {

            $(".podcast-about").click (function(){
            $('.podcast-about-content,.about-cancel').addClass('active');
        });

        $(".about-cancel").click (function(){
            $('.podcast-about-content,.about-cancel').removeClass('active');

        });

        function likePodcast(articalId,userEmail) {  
        $.ajax({
            type: "POST",
            url: "like_podcast.php",
            data: {'artical_id':articalId,'email':userEmail},
            success: function (data) {
                if($('.podcast_heart i').attr('class')!='fa fa-heart')
                {
                    $('.podcast_heart i').attr('class','fa fa-heart');
                    var temp = Number.parseInt($('.podcast_heart p').html())?Number.parseInt($('.podcast_heart p').html()):0;
                    $('.podcast_heart p').html(temp+1);
                }
                
            }
        });
    }
        $(document).on("click",".podcast_heart",function () 
        {
            <?php if(isset($_SESSION['login']))
            {
                
                echo 'var articalId=$(this).attr("id");
                var userEmail = "'.$_SESSION['email'].'";
                
                likePodcast(articalId,userEmail);';
            }
            else
            {
                echo "; 
                $(window).scrollTop(0);
                $('.login_text').click();    
                
                ";
            }
            ?>
        });


        function countLikes(id) {  
        $.ajax({
            type: "POST",
            url: "like_count.php",
            data: {'artical_id':id},
            dataType : "JSON",
            success: function (data) {
                var temp = (data);
                $('#likes_count').html(temp['likes']);
                if(temp['liked'])
                {
                    $('.podcast_heart i').attr('class','fa fa-heart');
                }
                else
                {
                    $('.podcast_heart i').attr('class','fa fa-heart-o');
                }
            }
        });
    }

        function loadData(id)
        {
            $.ajax(
                {
                type: "POST",
                url: "podcast-internal-logic.php",
                data: {'artical-id':id},
                success: function (data) {
                    $('.main-audio-2').html(data);
                    countLikes(id);
                }
            });
        }
        
        $(".artical_id").click(function () { 
            var element = $(this).attr("id");
            loadData(element);
        });
        loadData(28);
    });
    </script>
<script src="assets/js/plugins.js"></script> 
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

