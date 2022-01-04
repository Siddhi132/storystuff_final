<div class="container-fluid px-5 ">

    <!-- upper titles -->
    <div class="all-titles">
        <div class="podcast-title">
            <b> PODCAST </b>
        </div>
        <div class="podcast-headline ">
        <b>  HEADLINE </b>
        </div>
        <div class="podcast-published">
            PUBLISHED BY
        </div>
        <div class="podcast-date">
            DATE
        </div>
    </div>

    <!-- main audio -->
    <div class="main-audio ">
        
        <div class="audio-image-box">
            <img src="assets/img/circle.jpg" class="audio-image" alt="">
            <img src="assets/img/circle.jpg" class="audio-small-image" alt="">
            <p class="audio-title"> <b>TITLE </b> </p>
           <div class="content-box"> 
               <p class="audio-content"> Lorem ipsum dolor sit amet, consectetur adipiscing elit  </p> 
            </div>

            <audio controls controlsList="nodownload">
            <source src="assets/audio/test.mp3" type="audio/mpeg">
            </audio>
        </div>

        <div class="podcast-content ">
            <div class="podcast-symbols">
                <i class="fa fa-align-left" aria-hidden="true"></i>
                <i class="fa fa-heart" aria-hidden="true"></i>
                <i class="fa fa-share-alt" aria-hidden="true"></i>
            </div>
            <button class="btn-follow"> FOLLOW </button>
            <span class="about-div"> 
                <p class="podcast-about"> About </p> 
                <ion-icon name="close-outline" class="about-cancel"></ion-icon>
            </span>
            <div class="podcast-about-content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis magni officia sed beatae, repellat commodi ullam nostrum suscipit expedita natus id optio velit corporis consequuntur nam autem at quae dolor?
            </div>
        </div>
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
            <div class="row pl-md-5 ">
                <img src="assets/img/tree.jpg" class="all_story_img" />
                <img src="assets/img/design.jpg" class="all_story_img" />
                <img src="assets/img/dog.jpg" class="all_story_img" />
                <img src="assets/img/man.jpg" class="all_story_img" />
                <!-- <img src="assets/img/cactus.jpg" class="all_story_img" /> -->
            </div>
        </div>
    </section>
</div>

<script src="assets/js/plugins.js"></script> 
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

<script>
     $(document).ready(function(){

        //main page
        $(".podcast-about").click (function(){
            $('.podcast-about-content,.about-cancel').addClass('active');
        });

        $(".about-cancel").click (function(){
            $('.podcast-about-content,.about-cancel').removeClass('active');
        });
     })
</script>