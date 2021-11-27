<?php
$conn=mysqli_connect("localhost","root","","storystuff2");
if(!$conn){
echo "Database connection not success!!";}
?>
<?php
    $sql = "SELECT * FROM artical where category_id='ENTERTAINMENT' AND artical_id=".$_POST['artical_id'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $userId = $row['user_id'];
    $description = $row['description'];
    $img = $row['image'];
    $artical_id=$row['artical_id'];
    $sql = "SELECT * FROM user where user_id=".$userId;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $userEmail = $row['email'];
    $output = '<div class="first_row">
                            <div class="username mr-3">
                                <span class="name mr-3"> <p> USERNAME </p> </span>
                                <span class="">';
    $output .= $userId.'</span>
                            </div>
                            <div class="mail">
                                <span class="name mr-3"> <p> MAIL </p> </span>
                                <span class=""> ';
    $output .= $userEmail.'</span>
    </div>
</div>

<div class="title">
    <span class="name mr-3"><p> STORY TITLE </p></span>
    <span class=""> ENTERTAINMENT </span>
    </div>

    <div class="title">
        <span class="name mr-3"><p> URL </p></span>
        <span class=""> http://localhost/storystuff_final/admin/dashboard.php </span>
        </div>

        <div class="first_row">
            <div class="username mr-3">
                <span class="name mr-3"> <p> SUMMARY </p> </span>
                <span class="">';
        $output .= $description.'</div>
        <div class="mail h-75" >
            <span class="name mr-3"> <p> TAGS/KEYWORDS </p> </span>
            <span class="">LOREM </span>
            </div>
        </div>

        <div class="title">
            <span class="name mr-3"><p> BODY </p></span>
            <span class="">';
        $output .= $description.'</span>
        </div>

        <div class="last_row">
            <div class="thumbnail">
               <span class="thumb_title"> THUMBNAIL </span>';
        $output .= '<img src="../'.$img.'" class="thumb_image">';
        $output .= '</div>
        </div>

        <div class="final_buttons">
                <button class="publish" id="decision_entertainment_mapping"> MAPPING </button>
                <a href="#pop"> <button class="publish" id="decision_entertainment_publish" name="'.$artical_id.'"> PUBLISH </button> </a>
                <button class="publish" id="decision_entertainment_review"> REVIEW </button>
                <button class="delete1" id="'.$artical_id.'"> DELETE </button>
        </div>';
        // echo print_r($row);
        echo $output;
?>
