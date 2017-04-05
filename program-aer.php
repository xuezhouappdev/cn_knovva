<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Applied Engineering & Robotics
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
<div class="intro section" id="banner" style="background:url('image/program/rob.jpg');  background-size: cover;width: 100%;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;

    -o-background-size: cover;">
    <div class="container">
        <div class="row">

            <div class="intro-text">
                <h1>Applied Engineering & Robotics </h1>
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
            <li><a href="#">Applied Engineering & Robotics</a></li>
        </ul>

        <div class="row">
            <div class="col-md-7">
                <h4>Applied Engineering & Robotics</h4>
                <hr>
                <p>The Applied Engineering & Robotics program begins with two-weeks of in-person learning with top thinkers from MIT and/or Harvard for a fun a challenging immersive experience in robotics and engineering, designed for an elite cohort of international students. This program offers half-day learning laboratory sessions and mentorship, and afternoon classes on product design, engineering design, and project management. Additionally, the participants will have the opportunity to travel and explore the cities of Cambridge and Boston. The program culminates in a new technology, designed and created with your own hands.<br><br>

                    Optional complementary online learning is available post-launch to help students continue to grow their projects and explore models of using their technologies to make an impact.</p>
            </div>
            <div class="col-md-5" >
                <div class="panel panel-primary" style="position: relative;top:48px">
                    <div class="panel-heading">Facts</div>
                    <div class="panel-body">





                        <p><b><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;SUBJECT: </b>Engineering</p>

                        <P><b><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;LOCATION: </b>Boston, MA</P>
                        <p><b><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;AGE: </b>Year 14 -18</p>
                        <p><b><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;TIME: </b>July - August</p>
                        <p><b><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;DURATION: </b>2 Weeks</p>
<!--                <P><b><i class="fa fa-usd" aria-hidden="true"></i>&nbsp;&nbsp;COSTS: </b>Social Science Tracks</P>-->
<!--                <P><i>Each week will include two one-hour lectures, preliminary readings & video, and discussion board.</i> </P>-->
<!--                <a data-toggle="modal" data-target="#myModal" > >>VIEW AGENDA</a>-->
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
                <img src="image/icon/icon-explore.png" class="img img-responsive">
                <h4><Span>Explore</Span>&nbsp;the principles of engineering and robotics first-hand

                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-connect.png" class="img img-responsive">
                <h4><Span>Connect </Span>&nbsp; with a peer network passionate about creative construction



                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-learn.png" class="img img-responsive">
                <h4><Span>Learn</Span>&nbsp;practical soft-skills that facilitate the process of engineering


                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-build.png" class="img img-responsive">
                <h4><Span>Build</Span>&nbsp;something! And have fun while you do it


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