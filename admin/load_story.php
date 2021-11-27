<?php
 $conn=mysqli_connect("localhost","root","","storystuff2");
 if(!$conn){
 echo "Database connection not success!!";
 }
            $sql6 = "SELECT * FROM `artical` where `category_id`='STORIES' and delete_status=0 ORDER BY `date` DESC";
            $result = mysqli_query($conn, $sql6);
            $output ="";
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
                    $output .= '<div class="par_story" id='.$artical_id.'>
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

            echo $output;
?>