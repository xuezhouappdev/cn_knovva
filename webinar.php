
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Video| Knovva </title>






    <?php
    include "header.php";
    ?>

    <!-- CS -->
    <link rel="stylesheet" href="css/livestream.css">

    <!--ainimate -->
    <link rel="stylesheet" href="vendor/animate/animate.css">

    <!-- lightbox -->
    <link rel="stylesheet" href="vendor/fancybox-3.0/dist/jquery.fancybox.min.css" />
    <script src="vendor/fancybox-3.0/dist/jquery.fancybox.js"></script>



    <!-- Google KeyWord -->
    <meta name="keywords" content="" />



</head>
<body >




<!-- Live-->
<div class="live section">
    <div class="container">
     <div class="row">
         <div class="col-md-8">
             <iframe class="video" width="100%" height="500" src="https://www.youtube.com/embed/9aaMnIRkK3k$showinfo=0" frameborder="1" allowfullscreen></iframe>

         </div>
         <div class="col-md-4">

             <div class="panel panel-default">
                 <div class="panel-heading">
                    Past Videos
                 </div>
                 <div class="panel-body">

                         <p class="video " > <i class="fa fa-youtube-play infinite  bounceIn" aria-hidden="true"></i><a data-fancybox href="https://www.youtube.com/watch?v=b_xCApa88Yg&amp;autoplay=1&amp;rel=0&amp;showinfo=0">
                             2017 Model G20 Delegate Orientation
                         <p class="video " > <i class="fa fa-youtube-play infinite  bounceIn" aria-hidden="true"></i><a data-fancybox href="https://www.youtube.com/watch?v=b_xCApa88Yg&amp;autoplay=1&amp;rel=0&amp;&amp;showinfo=0">
                                 2017 Model G20 Delegate Orientation
                             </a></p>
                         <p class="video "> <i class="fa fa-youtube-play infinite  bounceIn" aria-hidden="true"></i><a data-fancybox href="https://www.youtube.com/watch?v=b_xCApa88Yg&amp;autoplay=1&amp;rel=0&amp;&amp;showinfo=0">
                                 2017 Model G20 Delegate Orientation
                             </a></p>
                         <p class="video "> <i class="fa fa-youtube-play infinite  bounceIn" aria-hidden="true"></i><a data-fancybox href="https://www.youtube.com/watch?v=b_xCApa88Yg&amp;autoplay=1&amp;rel=0&amp;&amp;showinfo=0">
                                 2017 Model G20 Delegate Orientation
                             </a></p>
                         <p class="video "> <i class="fa fa-youtube-play infinite  bounceIn" aria-hidden="true"></i><a data-fancybox href="https://www.youtube.com/watch?v=b_xCApa88Yg&amp;autoplay=1&amp;rel=0&amp;&amp;showinfo=0">
                                 2017 Model G20 Delegate Orientation
                             </a></p>
                         <p class="video "> <i class="fa fa-youtube-play infinite bounceIn" aria-hidden="true"></i><a data-fancybox href="https://www.youtube.com/watch?v=b_xCApa88Yg&amp;autoplay=1&amp;rel=0&amp;&amp;showinfo=0">
                                 2017 Model G20 Delegate Orientation
                             </a></p>

                 </div>
             </div>

             <script>
                 $( document ).ready(function() {

                     $(".video").mouseover(function(){
                         $(this).find("i").addClass("animated");
                     });

                     $(".video").mouseout(function(){
                         $(this).find("i").removeClass("animated");
                     });
                 });




             </script>


         </div>
     </div>
    </div>
</div>


<!-- History-->




<!-- Footer -->
<?php
include ("footer.php");
?>




</body>
</html>