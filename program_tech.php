<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Program - Tech Lab Youth Bootscamp
    </title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">

    <!-- Program base CSS-->
    <link rel="stylesheet" href="css/programbase.css">
</head>


<?php
// include header
include "header.php";
?>

<body>

<!--CS-->
<div class="intro" id="banner">

    <!--slider-->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('image/home/techlab1.jpg');"></div>
                <div class="carousel-caption">
                </div>
                <div class="container">
                    <div class="activity-title">
                        <h1>TECH-LAB<br>YOUTH BOOTSCAMP
                        </h1>
                        <hr>
                        <h5>For: 9th - 12th graders from around the world  </h5>
                        <h5> Program Dates: December 2017 – July 2018. Registration opening soon.</h5>
                        <h5> Location: December 2017 - Nairobi,  Kenya/ January 2018 - June, Monthly online learning seminars/ July 2018 - Cambridge, Massachusetts, USA
                        </h5>
                    </div>
                </div>
            </div>

            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('image/home/techlab2.jpg');"></div>
                <div class="carousel-caption">
                    <!--<h2>Caption 2</h2>-->
                </div>
            </div>

            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('image/home/techlab3.jpg');"></div>
                <div class="carousel-caption">
                    <!--<h2>Caption 3</h2>-->
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </div>

    <!--Slider ends-->

</div>



<!--ABOUT -->
<div class="about">
    <div class="container">
        <div class="row">
            <h2>About</h2>
            <p>During the summer, students from all over the world will arrive at NUVU STUDIOS (in conjunction with MIT) in Cambridge, MA for a two-week, pre-college program all about technology innovation.
                During this program, students not only invent their own product but learn how to create their own technological innovations, under guidance from NUVU and Knovva staff.
                Students will learn from elite faculty and collaborate with peers in small classes (max 6:1 student to coach ratio), tour college campuses and gain valuable insights into college life all while getting a taste of (supervised) independent living. Our students start their day at NUVU Studio where they will be taught how to navigate the creative process that's involved in product innovation and be given the tech skills needed to develop the 'next big thing'.
            </p>
        </div>
<br>
        <div class="row">
            <h2>About NUVU</h2>
            <p><a style="color: #ff3e68"href="https://cambridge.nuvustudio.com/">NUVU Studio</a>  is an innovation school in partnership with PhD and graduate students and faculty from the Massachusetts Institute of Technology.
                We have reserved spots in NUVU’s two-week studio program through our partnership. Students in our program will not only get to experience innovation design with NUVU, but they will expand their interests and skill set and gain hands-on experience in their desired field.<br><br>
                Our Ivy League Innovation Program immerses students into the world of innovative design while mixing a little bit of fun for the summer. Our students will leave with a better idea of the direction they want to pursue before heading off to college, with some new friends and some great memories.

            </p>
        </div>
    </div>
</div>

<!-- video Showcase-->
<div class="video">
    <h2>Program Showcase</h2>
    <div class="container">
        <div class="col-lg-4" align="center">
            <iframe width="100%" height="280px" src="https://youtube.com/embed/VK6b1LgJX5M"  allowfullscreen ></iframe>
            <h4>Nuvu Studio Overview</h4>
        </div>
        <div class="col-lg-4" align="center">
            <iframe width="100%" height="280px" src="https://youtube.com/embed/AHrgmKkQXHo"  allowfullscreen ></iframe>
            <h4>Student Project</h4>
        </div>
        <div class="col-lg-4" align="center">
            <iframe width="100%" height="280px" src="https://www.youtube.com/embed/tkA69Yh5j2M"  allowfullscreen ></iframe>
           <h4> Student Project</h4>
        </div>
    </div>
</div>

<!-- Themes and Topics-->
<div class="theme">
    <div class="container">
        <h2>Themes and Topics</h2>
        <div class="row">
            <div class="col-md-2">
                <img src="image/tech/cars.png" class="img img-responsive">
            </div>
            <div class="col-md-10">
                <h4>Robo Cars</h4>
                <p> In this Studio, students will be constructing futuristic robo-electric cars! These cars will be designed to maneuver and turn in agile ways and speed across a racecourse. Students will ride the waves of radio frequency and modulation, thus understanding transmitters, receivers, and RC communication.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <img src="image/tech/home.png" class="img img-responsive">
            </div>
            <div class="col-md-10">
                <h4>Homebots</h4>
                <p>In this studio, students will explore new technologies and concepts for interactive home assistant robots. Using 3d fabrication tools and software, such as laser-cutters and 3d printers, students will prototype and build their assistant robots and test them with their peers and coaches.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <img src="image/tech/space.png" class="img img-responsive">
            </div>
            <div class="col-md-10">
                <h4>Spacebots</h4>
                <p> In this studio, students will learn all about the systems and components for designing a Mars Rover Mission from the ground up with focused attention on the design of the actual rover. We will start with basic lessons on chemistry, rocketry, and orbital mechanics, then focus on the rover design including basics of robotics (sensors, actuators, microcontrollers), physics, and programming.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <img src="image/tech/wear.png" class="img img-responsive">
            </div>
            <div class="col-md-10">
                <h4>Health Wearable Tech</h4>
                <p>In this Studio, students will be developing the next generation of health-focused wearable tech products! Using innovative textiles, materials and technologies, you will learn to how to design wearable tech products that will improve the lives of people, patients, doctors and other healthcare professionals.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <img src="image/tech/battble.png" class="img img-responsive">
            </div>
            <div class="col-md-10">
                <h4>Battlebotics (Advanced)</h4>
                <p>  In this Studio, students will be constructing remote-controlled robot vehicles that will compete in NuVu Battlebotics, NuVu’s premier robot games. In 3 minutes, each student team will maneuver their custom machine around terrain filled with surprises to try and gain the most points! Student teams will be given a set of supplies, equipment, and tools that they can use to design and build their robots. </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <img src="image/tech/farm.png" class="img img-responsive">
            </div>
            <div class="col-md-10">
                <h4>Farmbots (Advanced)</h4>
                <p>  In this Studio, students will be learning about the robots and technology that make up the farming and agriculture industries and designing the next generation of robotic systems to support food production. Students will learn the basics of electronics, microcontrollers and computer programming.</p>
            </div>
        </div>


    </div>
</div>



<!--Contact -->
<div class="program-contact">
    <div class="container">
        <div class="row">
            <h2>Free Registration</h2>
        </div>

        <form method="post" id="form_tech">
            <div id="tech_noti" style="color:white; text-align: left;margin: 10px 0">

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">

                        <input type="text" class="form-control" name="tech_name"  placeholder="Name">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        <select class="form-control">


                            <option value="" selected>Tech-Lab Youth Bootcamp</option>

                        </select>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">

                        <input type="email" class="form-control" name="tech_email" placeholder="Email">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        <input type="tel" class="form-control" name="tech_phone"  placeholder="Phone">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">

                        <textarea class="form-control" rows="11" placeholder="Please enter your questions here" name="tech_textarea"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <button type="reset" class="btn btn-default">RESET</button>
                    <button type="submit" class="btn btn-default" id="tech_program_btn">SEND</button>
                </div>
            </div>

            <script src="js/program_tech.js"></script>

        </form>




        <!--        <button class="btn btn-default">Contact</button>-->
    </div>
</div>









<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>


</body>
</html>