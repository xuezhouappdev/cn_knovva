<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">


    <title> 最近新闻 </title>

    <!-- Google KeyWord -->
    <meta name="keywords" content="keyword1, keyword2, keyword3" />

</head>

<body data-spy="scroll" data-target=".header" data-offset="300">

<?php
// include header
include "header.php";
?>


<!-- Banner-->
<div class="banner" style="background: #D874BD; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(#D874BD,  #6E539E ); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(#D874BD,  #6E539E ); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(#D874BD,  #6E539E ); /* For Firefox 3.6 to 15 */
  background: linear-gradient(#D874BD,  #6E539E ); /* Standard syntax */


  min-height: 200px;
  width: 100%;
  opacity: 0.8;
  background-size: cover;
  color: white;">
    <div class="container">
        <div class="row">
            <h1 style="position: relative;
    margin-top: 110px;
    color: #fdfdfd;
    border-left: 3px solid #f3f3f3;
    padding-left: 7px;">Blog</h1>
        </div>
    </div>
</div>




<div class="blogwrapper">

    <iframe src="cnblog"  onload="this.style.height=this.contentDocument.body.scrollHeight+20 +'px';" width="100%" scrolling="no" style="padding: 32px 64px;margin-bottom: 48px;border: none" >
    </iframe>

    <hr>
</div>







<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="vendor/bootstrap-3.3.7/js/bootstrap.min.js"></script>



</body>
</html>