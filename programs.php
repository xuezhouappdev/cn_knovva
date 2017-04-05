<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">


    <title>Programs
    </title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">

    <!-- Program -->
    <link rel="stylesheet" href="css/programs.css">
    <link rel="stylesheet" href="dist/sweetalert.css">

    <!-- sweet alert-->
    <script src="dist/sweetalert.min.js"></script>



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
            <h1>Programs</h1>
        </div>
    </div>
</div>



<!--on site-->
<div class="onsite_p section" id="onsiteprogram">
    <div class="container">

       <!-- <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="programs.php">Program</a></li>
            <li><a href="#">Understanding the Landscape of Study </a></li>
        </ul>-->

        <div class="row">
            <h2 >Summer Programs</h2>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="card_p">
                    <img src="image/program/sie.jpg" alt="Avatar" style="width:100%" class="img img-responsive">
                    <div class="sie-overlay" style="position: absolute;top:64px;left:0;padding:16px;background: #F2184F;transition: 0.5s linear;opacity:0;margin:0 15px">
                          <p style="text-align: justify;color:white;margin-left:0">This course is also available for blended learning. It includes a combination of interactive online and blended year-long courses.</p>
                    </div>
                    <h4 style="position: absolute;top:-7px;left:-9px"  id="hbr-btn"><span class="label label-primary" style="background: #f2184f;padding: 6px 16px;border-radius: 0;font-style:italic">BLENDED LEARNING</span></h4></h4>

                    <h4><b>Social Impact and Entrepreneurship</b></h4>

                    <p><i class="fa fa-book" aria-hidden="true"></i>&nbsp;<span>Subject: &nbsp;</span>Business</p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Location: &nbsp;</span>Boston, Massachusetts
                    </p>
                    <p><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;<span>Age: &nbsp;</span>Year 14 -18</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<span>Time: &nbsp;</span>July - August</p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<span>Duration: &nbsp;</span>2 Weeks</p>
                    <h5 style="text-align: center"><a href="program-sie.php" class="button_p">Read More</a></h5>

                    <script>
                        $(document).ready(function(){

                            $("#hbr-btn").hover(function(){

                                $(".sie-overlay").css("opacity", "0.8");
                            }, function(){
                                $(".sie-overlay").css("opacity", "0");
                            });


                        });




                    </script>

                </div>
            </div>


            <div class="col-md-4">



                <div class="card_p">
                    <img src="image/program/global.jpg" alt="Avatar" style="width:100%">
                    <h4><b>Global Affairs Institute</b></h4>
                    <p><i class="fa fa-book" aria-hidden="true"></i>&nbsp<span>Subject: &nbsp;</span>Political Science</p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Location: &nbsp;</span>Boston, Massachusetts
                    </p>
                    <p><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;<span>Age: &nbsp;</span>Year 14 -18</p>


                    <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<span>Time: &nbsp;</span>July - August</p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;
                        <span>Duration: &nbsp;</span>2 Weeks</p>
                    <h5 style="text-align: center"> <a href="program-gai.php" class="button_p">Read More</a></h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card_p">
                    <img src="image/program/rob.jpg" alt="Avatar" style="width:100%">
                    <h4><b>Applied Engineering & Robotics</b></h4>

                    <p><i class="fa fa-book" aria-hidden="true"></i>&nbsp<span>Subject: &nbsp;</span>Engineering</p>


                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Location: &nbsp;</span>Boston, Massachusetts
                    </p>
                    <p><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;<span>Age: &nbsp;</span>Year 14 -18</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<span>Time: &nbsp;</span>July - August</p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;
                        <span>Duration: &nbsp;</span>2 Weeks</p>
                    <h5 style="text-align: center"><a href="program-aer.php" class="button_p">Read More</a></h5>
                </div>
            </div>

        </div>



    </div>
</div>
</div>
<hr>


<!--on line-->
<div class="online_p section" id="onlineprogram">
    <div class="container">

        <!-- <ul class="breadcrumb">
             <li><a href="index.php">Home</a></li>
             <li><a href="programs.php">Program</a></li>
             <li><a href="#">Understanding the Landscape of Study </a></li>
         </ul>-->

        <div class="row">
            <h2>Online Programs</h2>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card_p">
                    <img src="image/program/Landscape.jpg" alt="Avatar" style="width:100%">
                    <h4><b>Understanding the Landscape of Study</b></h4>

                    <p><i class="fa fa-book" aria-hidden="true"></i>&nbsp<span>Subject: &nbsp;</span>American Culture</p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Location: &nbsp;</span>Online</p>
                    <p><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;<span>Age: &nbsp;</span>Year 14 -18</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<span>Time: &nbsp;</span>July - August</p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<span>Duration: &nbsp;</span>7 Weeks</p>

                    <h5 style="text-align: center"><a href="program_template.php" class="button_p">Read More</a></h5>


                </div>
            </div>


            <div class="col-md-4">
                <div class="card_p">
                    <img src="image/program/social.jpg" alt="Avatar" style="width:100%">
                    <h4><b>U.S. Social Media Use and Electronic Correspondence</b></h4>

                    <p><i class="fa fa-book" aria-hidden="true"></i>&nbsp<span>Subject: &nbsp;</span>American Culture</p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Location: &nbsp;</span>Online</p>
                    <p><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;<span>Age: &nbsp;</span>Year 14 -18</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<span>Time: &nbsp;</span>July - August</p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<span>Duration: &nbsp;</span>3 Weeks</p>

                    <h5 style="text-align: center"><a href="program-socialmedia.php" class="button_p">Read More</a></h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card_p">
                    <img src="image/program/hary.jpg" alt="Avatar" style="width:100%">
                    <h4><b>The Harry Potter Reading Group</b></h4>
                    <p><i class="fa fa-book" aria-hidden="true"></i>&nbsp<span>Subject: &nbsp;</span>Literature</p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Location: &nbsp;</span>Online</p>
                    <p><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;<span>Age: &nbsp;</span>Year 14 -18</p>
                    <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<span>Time: &nbsp;</span>Sep - Nov</p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<span>Duration: &nbsp;</span>7 Weeks</p>
                    <br>
                    <h5 style="text-align: center"><a href="program-harrypotter.php" class="button_p">Read More</a></h5>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card_p">
                    <img src="image/program/creativity.jpg" alt="Avatar" style="width:100%">
                    <h4><b>The Innovation Reading Group: Creativity and Change in the New Millennium</b></h4>

                    <p><i class="fa fa-book" aria-hidden="true"></i>&nbsp<span>Subject: &nbsp;</span>Literature</p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span>Location: &nbsp;</span>Online</p>

                    <p><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;<span>Age: &nbsp;</span>Year 14 -18</p>


                    <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<span>Time: &nbsp;</span>Sep - Nov</p>
                    <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<span>Duration: &nbsp;</span>7 Weeks</p>

                    <h5 style="text-align: center"><a href="program-irg.php" class="button_p "  >Read More</a></h5>


                </div>
            </div>


            <!--<div class="col-md-4">
                <div class="card_p">
                    <img src="image/program/social.jpg" alt="Avatar" style="width:100%">
                    <h4><b>U.S. Social Media Use and Electronic Correspondence</b></h4>
                    <p>Lorem ipsum dolor sit amet, ne magna soluta principes cum, te falli nemore sea. Et eos graeco noluisse platonem. Amet omnesque his ea.
                    </p>
                    <a href="program-socialmedia.php" class="button_p">Read More</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card_p">
                    <img src="image/program/hary.jpg" alt="Avatar" style="width:100%">
                    <h4><b>The Harry Potter Reading Group</b></h4>
                    <p>Lorem ipsum dolor sit amet, ne magna soluta principes cum, te falli nemore sea. Et eos graeco noluisse platonem. Amet omnesque his ea.
                    </p>
                    <a href="program-harrypotter.php" class="button_p">Read More</a>
                </div>
            </div>-->

        </div>

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