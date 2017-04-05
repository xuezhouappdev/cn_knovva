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
                <div class="fill" style="background-image:url('image/home/start-up1.jpg');"></div>
                <div class="carousel-caption">
                </div>
                <div class="container">
                    <div class="activity-title">
                        <h1>START-UP<br>YOUTH BOOTSCAMP
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
                <div class="fill" style="background-image:url('image/home/start-up2.jpg');"></div>
                <div class="carousel-caption">
                    <!--<h2>Caption 2</h2>-->
                </div>
            </div>

            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('image/cs1.jpg');"></div>
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
            <p>Designed with top professors and industry leaders, Ivy League Start-Up Program in Cambridge, MA will allow students to cultivate their own original start-up ideas and the skills needed to make it big as a start-up CEO all while learning how to work with people from all over the globe. Taught by top Ivy League professors, our classes are held at Harvard Law School and will follow an advanced curriculum which is designed  to encourage creativity and build the technical skills needed to succeed in their endeavors.

                ​

                This novel program also offers supervised hotel accommodations for those students coming from out of town, meals, snacks and transportation to and from activities.

            </p>
        </div>
        <br>
        <div class="row">
            <h2>Missions</h2>
            <p>Ivy League Start-Up Program is a day and residential program that will take students through the process of developing their own creative business idea and the marketing process. Along the way, they will learn what it takes to become the next Bill Gates, Steve Jobs or Tariq Farid. From inception to operations, this camp will teach lessons in marketing, writing, product development, management, public speaking- Get what it takes to be the next big start-up CEO.<br><br>
                Since we also place extreme importance on being able to work well with others on a global scale, students from America will get an opportunity to meet other students from all over the world. They will be encouraged to interact with one another, as we teach lessons in cultural respect, overcoming language barriers and global networking- but most importantly, we'll show them how they can make friendships of global proportions.<br><br>
                Oh, and to make it even more interesting, the chosen best start-up idea will win $1,000 dollars.
            </p>
        </div>
        <br>
    </div>
</div>



<!-- video Showcase-->
<!--<div class="video">
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
</div>-->


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


<!--Benifits -->
<div class="benefit">
    <div class="container">
        <div class="row">
            <h2>Additional Benefits</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="image/start-up/fun.png" class="img img-responsive">
                <p><i>Fun</i></p>
                <h5>All Activities and Meals Included</h5>
            </div>

            <div class="col-md-3">
                <img src="image/start-up/philan.png" class="img img-responsive">
                <p><i>Philanthropy</i></p>
                <h5>Community Service-give back and boost your resume.
                </h5>
            </div>
            <div class="col-md-3">
                <img src="image/start-up/prize.png" class="img img-responsive">
                <p><i>Prizes</i></p>
                <h5>Best start-up idea wins $1000</h5>
            </div>

            <div class="col-md-3">
                <img src="image/start-up/oppo.png" class="img img-responsive">
                <p><i>Opportunity</i></p>
                <h5>Opportunities to meet with real investors.</h5>
            </div>
        </div>
    </div>
</div>


<!-- activity-->
<div class="activitypanel">
    <div class="container">
        <div class="row">
<!--   <h2>Activity</h2>-->
        </div>

        <div class="row">

            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Activity</h4></div>
                <div class="panel-body">

                    <p>Tours and trips throughout the Boston area along with various exciting and intellectual activities will be held every weekend and some weeknights. Activities will be tailored to the best interests of students and will be led by professionals. </p>
                    <h5>Activities includes:</h5>
                    <ul>
                        <li>Harvard and MIT campus tour with local students</li>
                        <li>Lectures with Harvard/MIT alumnus in terms of future college life and occupations</li>
                        <li>College application workshop and mock interview</li>
                        <li>Community service opportunity in local community farms or organizations</li>
                        <li>Boston historical sites tour (Duck Tour, Freedom Trail, Faneuil Hall, Quincy Market)
                            <ul>
                                <li>Boston historical sites tour (Duck Tour, Freedom Trail, Faneuil Hall, Quincy Market)</li>
                                <li>​Visits to local museums (Museum of Fine Arts, Museum of Science)</li>
                                <li>Laser tag game</li>
                                <li>Movie and game nights</li>
                                <li>Rich experience of various world cuisine</li>
                            </ul>
                        </li>
                    </ul>


                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>PROGRAM LOCATION</h5>
                            <p>Harvard Law School<br>10 Everett St, Cambridge, MA 02138</p>

                        </div>
                        <div class="col-md-6">
                            <h5>RENSIDENTIAL HOTEL LOCATION</h5>
                            <p>Holiday Inn Express<br>999 Broadway, Saugus, MA 01906<br>(Daily Shuttle will be provided)</p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div id="pro-map1"></div>
                            <script src="js/program-map.js"></script>
                        </div>
                        <div class="col-md-6">
                            <div id="pro-map2"></div>
                            <script src="js/program-map.js"></script>
                        </div>
                    </div>

                </div>
            </div>






        </div>

    </div>
</div>



<!-- Map-->
<!--<div class="program-map">
    <div class="container">
        <div class="row">
            <h2> Activity Locations</h2>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h4>PROGRAM LOCATION</h4>
                <p>Harvard Law School<br>10 Everett St, Cambridge, MA 02138</p>

            </div>
            <div class="col-md-6">
                <h4>RENSIDENTIAL HOTEL LOCATION</h4>
                <p>Holiday Inn Express<br>999 Broadway, Saugus, MA 01906<br>(Daily Shuttle will be provided)</p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div id="pro-map1"></div>
                <script src="js/program-map.js"></script>
            </div>
            <div class="col-md-6">
                <div id="pro-map2"></div>
                <script src="js/program-map.js"></script>
            </div>
        </div>
    </div>
</div>
-->




<!--Contact -->
<div class="program-contact">
    <div class="container">
        <div class="row">
            <h2>Free Registration</h2>
        </div>

        <form method="POST" id="form_startup" action="controller/controller_program_startup.php">
            <div id="startup_noti" style="color:white; text-align: left;margin: 10px 0">

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">

                        <input type="text" class="form-control" name="startup_name"  placeholder="Name">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        <select class="form-control">

                            <option value="" selected>Start-up Youth Bootcamp</option>

                        </select>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">

                        <input type="email" class="form-control" name="startup_email" placeholder="Email">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                        <input type="tel" class="form-control" name="startup_phone"  placeholder="Phone">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">

                        <textarea class="form-control" rows="11" placeholder="Please enter your questions here"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <button type="reset" class="btn btn-default">RESET</button>
                    <button type="submit" class="btn btn-default" id="startup_program_btn">SEND</button>
                </div>
            </div>

        </form>




        <!--        <button class="btn btn-default">Contact</button>-->
    </div>
</div>









<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>



<script  async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQxsMEH4W7YqPRe5bi5mgNas9MVYCB8a0&callback=initMap"
>
</script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>


</body>
</html>