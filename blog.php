<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">


    <title> 最近新闻
    </title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">



    <!-- sweet alert-->
    <script src="dist/sweetalert.min.js"></script>

    <!-- Google KeyWord -->

    <meta name="keywords" content="keyword1, keyword2, keyword3" />

</head>

<body data-spy="scroll" data-target=".header" data-offset="300">

<?php
// include header
include "header.php";
?>



<!-- Banner-->
<div class="banner">
    <div class="container">
        <div class="row">
            <h1>Blog</h1>
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
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>



</body>
</html>