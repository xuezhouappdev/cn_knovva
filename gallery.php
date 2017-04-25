<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Gallery
    </title>

    <link rel="stylesheet" href="vendor/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">

    <!-- Program base CSS-->
    <link rel="stylesheet" href="css/about-old.css">

    <!-- Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="vendor/bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <script src="js/instafeed.min.js"></script>



    <script type="text/javascript">
        var userFeed = new Instafeed({
            get: 'user',
            userId: '183917197',
            accessToken: '183917197.0ffac1c.3010c29623f143ae979a1b38fe5583d9',
            template: '<div class="col-md-3"><a href="{{link}}"><img class="img img-responsive"  src="{{image}}" style="padding:10px;"/></a></div>',
            limit: '16',
            resolution: "low_resolution"
        });
        userFeed.run();
    </script>





</head>


<?php
// include header
include "header.php";
?>

<body>








<!--Header-about-->
<div class="header-about">
    <div class="container">
        <div class="row">
            <h1>Gallery</h1>
        </div>
    </div>

</div>


<!-- Insta feed-->
<div class="insbody" style="margin: 100px auto">
    <div class="container">
        <div class="row">
            <div id="instafeed">

            </div>
        </div>




    </div>
</div>


<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>














</body>
</html>