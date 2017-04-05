<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Global Affairs Institute
    </title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">

    <!-- Program -->
    <link rel="stylesheet" href="css/program_template.css">
    <link rel="stylesheet" href="dist/sweetalert.css">

    <!-- sweet alert-->
    <script src="dist/sweetalert.min.js"></script>



</head>


<?php
// include header
include "header.php";
?>

<body>

<!--CS-->
<div class="intro section" id="banner" style="background:url('image/program/global.jpg');  background-size: cover;width: 100%;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;

    -o-background-size: cover;">
    <div class="container">
        <div class="row">

            <div class="intro-text">
                <h1>Global Affairs Institute </h1>
                <a href="applicationform.php">ENROLL NOW</a>
            </div>
        </div>

    </div>

</div>



<!--ABOUT -->
<div class="about section">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index_2.php">Home</a></li>
            <li><a href="programs.php">Program</a></li>
            <li><a href="#">Global Affairs Institute </a></li>
        </ul>

        <div class="row">
            <div class="col-md-7">
                <h4>Global Affairs Institute </h4>
                <hr>
                <p>Knovva Academy’s Global Affairs Institute is a two-week summer initiative for a cohort of international high school students seeking to learn about the depths of Global Affairs and International Politics. Students will learn from top MIT and Harvard scholars to understand the people, histories, cultures, and politics that shape the current international landscape. We want to help students understand the underlying nature of the political world, and to propel them forward in their own intellectual and professional careers. This program will inject students into the field of global politics, and embolden them to be leaders in any international environment.<br><br>

                    Complementary online learning will be available after the summer program ends in order to continue exploring and supporting efforts to make an impact around the globe.</p>
            </div>
            <div class="col-md-5" >

                <div class="panel panel-primary" style="position: relative;top:48px">
                    <div class="panel-heading">Facts</div>
                    <div class="panel-body">



                        <p><b><i class="fa fa-book" aria-hidden="true"> </i>&nbsp;&nbsp;SUBJECT: </b>Political Science</p>
                        <P><b><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;LOCATION: </b>Boston, MA</P>
                        <p><b><i class="fa fa-graduation-cap" aria-hidden="true"> </i>&nbsp;&nbsp;AGE: </b>Year 14 -18</p>
                        <p><b><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;TIME: </b>July - August</p>
                        <p><b><i class="fa fa-clock-o" aria-hidden="true"> </i>&nbsp;&nbsp;DURATION: </b>2 Weeks</p>
<!--                <a data-toggle="modal" data-target="#myModal" > >> VIEW AGENDA</a>-->
                    </div>
                </div>

            </div>


            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">

                    <!-- agender content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">AGENDA</h4>
                        </div>
                        <div class="modal-body">
                            <ul class="agenda">
                                <li><b>Week 1: </b><br>Introduction to US Social Media</li>
                                <li><b>Week 2: </b><br>The Art of Informal Electronic Communications </li>
                                <li><b>Week 3: </b><br>Professionalism</li>

                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
</div>
</div>

<!-- FEATURES-->
<div class="features section">
    <div class="container">
        <div class="row">
            <h2>YOUR EXPERIENCE INCLUDES</h2>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <img src="image/icon/icon-deepen.png" class="img img-responsive">
                <h4><Span>Deepen</Span>&nbsp;your understanding of international politics and governance
                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-connect.png" class="img img-responsive">
                <h4><Span>Connect</Span>&nbsp;with a peer network that is passionate about making a difference through government


                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-understand.png" class="img img-responsive">
                <h4><Span>Understand</Span>&nbsp;the underlying principles, philosophies, and values that shape global affairs

                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-explore.png" class="img img-responsive">
                <h4><Span>Explore</Span>&nbsp;the rich history and politics of the city of Boston, MA



                </h4>
            </div>


        </div>
    </div>
</div>






<!-- CTA-->
<div class="calltoaction section">
    <div class="container">
        <div class="row">
            <h2>Start learning with Knovva Academy.</h2>
            <p><i>We’ll help you every step of the way.</i></p>
            <a href="applicationform.php">ENROLL NOW</a>
        </div>
    </div>
</div>





<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>






<!--<script>
    swal({
        title: "Error!",
        text: "Here's my error message!",
        type: "error",
        confirmButtonText: "Cool"
    });
</script>-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>


</body>
</html>