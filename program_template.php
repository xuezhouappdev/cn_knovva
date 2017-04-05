<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Understanding the Landscape of Study
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
<div class="intro section" id="banner" style="background:url('image/program/Landscape.jpg'); background-size: cover;width: 100%;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;

    -o-background-size: cover;">
  <div class="container">
   <div class="row">

       <div class="intro-text">
           <h1>Understanding the Landscape of Study</h1>
           <a href="applicationform.php">ENROLL NOW</a>
       </div>
   </div>

  </div>

</div>



<!--ABOUT -->
<div class="about section">
    <div class="container" >
        <ul class="breadcrumb">
            <li><a href="index_2.php">Home</a></li>
            <li><a href="programs.php">Program</a></li>
            <li><a href="#">Understanding the Landscape of Study </a></li>
        </ul>

        <div class="row">
            <div class="col-md-7">
                <h4>Introduction to Higher Education Learning in the U.S: Understanding the Landscape of Study </h4>
                <hr>
                <p>This 7-week course will  help prospective international students understand the landscape of college learning in the U.S. Many colleges have thousands of course offerings and dozens of majors and academic concentrations; navigating this diverse selection of professional or academic trajectories can be challenging. This interactive Online Course is designed to help students understand the variety of Majors and Minors and college learning environments to prepare students to make wise, practical, and deliberate steps in their academic career.</p>
            </div>
            <div class="col-md-5" >

                <div class="panel panel-primary" style="position: relative;top:48px">
                    <div class="panel-heading">Facts</div>
                    <div class="panel-body">

                        <p><b><i class="fa fa-book" aria-hidden="true"> </i>&nbsp;&nbsp;SUBJECT: </b>American Culture</p>
                        <P><b><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;LOCATION: </b>Boston, MA</P>
                        <p><b><i class="fa fa-graduation-cap" aria-hidden="true"> </i>&nbsp;&nbsp;AGE: </b>Year 14 -18</p>
                        <p><b><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;TIME: </b>July - August</p>
                        <p><b><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;DURATION: </b>7 Weeks</p>
              <a data-toggle="modal" data-target="#myModal" >>>VIEW AGENDA</a>

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
                                <li><b>Week 1: </b><br>The College Landscape: Understanding the Types of Universities Out There</li>
                                <li><b>Week 2: </b><br>Business Tracks</li>
                                <li><b>Week 3: </b><br>Social Science Tracks</li>
                                <li><b>Week 4: </b><br>Humanities & Arts Tracks</li>
                                <li><b>Week 5: </b><br>Engineering Tracks</li>
                                <li><b>Week 6: </b><br>Math & Computer Science Tracks</li>
                                <li><b>Week 7: </b><br>Science Tracks</li>
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
                <h4><Span>Explore</Span>&nbsp;the educational diversity of an American university


                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-deepen.png" class="img img-responsive">
                <h4><Span>Deepen  </Span>&nbsp; your understanding of your academic interests




                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-understand.png" class="img img-responsive">
                <h4><Span>Understand</Span>&nbsp;the link between your studies and your professional path



                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-discover.png" class="img img-responsive">
                <h4><Span>Discover</Span>&nbsp;your interests, passions and the possibilities that lay before you


                </h4>
            </div>


        </div>
    </div>
</div>


<!-- CTA-->
<div class="calltoaction section">
    <div class="container">
        <div class="row">
             <h2>READY TO TAKE YOUR SYLLABUS ABROAD?</h2>
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