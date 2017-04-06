<?php

//function authenticate() {
//    if($_SERVER['PHP_AUTH_USER'] !=='admin' && $_SERVER['PHP_AUTH_PW'] !=='22233150' ) {
//
//        header('WWW-Authenticate: Basic realm="Only for internal use"');
//        header('HTTP/1.0 401 Unauthorized');
//        echo "error";
//        exit;
//    }
//
//}
//
//authenticate();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Knovva 首页</title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">

    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link rel="stylesheet" href="css/index_new.css">


    <!--JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>







</head>
<body >


<?php
include "header.php";


?>




<!-- top slider -->
<div id="myCarousel" class="carousel slide home-slider" data-ride="carousel">
    <!-- Indicators -->
  <!--  <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>

    </ol>
-->
    <!-- Wrapper for slides -->
    <div class="carousel-inner home-slider" role="listbox">

        <div class="item active" style='
        background: url("image/skyatlas2.jpg") center center no-repeat;
        min-height: 110vh;
        width: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;'>
            <div class="slidertextwrapper" style='
                    text-align: center;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    color: white;

' >
                <h1 style="font-size:56px;text-shadow: 5px 5px 10px rgba(0,0,0,0.68);text-transform: uppercase;line-height: 72px">胸有丘壑万千<br>眼有星辰大海</h1>
                <a href="programs.php">学术项目</a>
            </div>

        </div>

        <!--<div class="item" style='
        background: url("image/home/home_brand4.jpg") center center no-repeat;
        min-height: 100vh;
        width: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;'>
            <div class="slidertextwrapper" style='
                    text-align: center;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    color: white;

' >
                <h1 style="font-size:50px;">Connect to the World, Connect to Your Future</h1>
            </div>

        </div>

        <div class="item" style='
        background: url("image/home/home_brand3.jpg") center center no-repeat;
        min-height: 100vh;
        width: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;'>
            <div class="slidertextwrapper" style='
                    text-align: center;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    color: white;

' >
                <h1 style="font-size:50px;">Connect to the World, Connect to Your Future</h1>
            </div>

        </div>-->


    </div>

    <!-- Left and right controls -->
    <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>-->

</div>





<!--ABOUT -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <h5 style="opacity: 0">机构简介</h5>
              <h2>Knovva Academy助你发掘潜能、成就梦想</h2>
<!--                <h4>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4>-->
                <p>Knovva Academy是创新型学习的领先机构，致力于通过跨文化跨学科的互动线上线下课程为青少年成长助力，培养主动学习、善于反思、具有国际视野和社会责任心的世界公民和未来青年领袖。
                </p>
                <a href="about.php">了解更多</a>
            </div>


            <div class="col-md-6" align="center">
                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/tkA69Yh5j2M"  allowfullscreen ></iframe>
            </div>
        </div>
    </div>

</div>



<!--  program new -->
<div class="programnew jumbotron">
    <div class="container">

        <div class="row">
            <h2>学术<span>项目</span></h2>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">

                <div class="card" style='background: url("image/home/home-program1.jpg") center center no-repeat ;background-size: cover; '>

                    <h3>夏季项目</h3>
                    <p>Knovva Academy夏季项目为期两周，在哈佛大学所在地波士顿地区举办。项目期间，来自世界各国的高中生将就社会创新、国际外交等主题进行项目制学习，完成主题相关的内容学习和小组任务。
                    </p>

                    <div class="btnwrapper" >
                        <br>
                        <br>
                        <a href="programs.php">更多信息</a>
                    </div>
                </div>
            </div>


            <div class="col-md-5 ">
                <div class="card" style='background: url("image/home/home-program2.jpg") center center no-repeat;background-size: cover; '>

                    <h3>在线项目</h3>
                    <p>Knovva Academy互动在线课程面向全球学生，主题涵盖语言学习、人生规划、技能提升等，让你足不出户享尽顶尖学习资源，与世界青少年共同成长。
                    </p>
                    <div class="btnwrapper">
                        <br><br><br>
                        <a href="programs.php#onlineprogram">更多信息</a>
                    </div>
                </div>
            </div>
<!--            -->
<!--            <div class="col-sm-4">-->
<!--                <div class="card" style='background: url("image/home/home_brand6.jpg") center right no-repeat'>-->
<!---->
<!--                    <h3>Blended Learning</h3>-->
<!--                    <p>Knovva Academy provides a variety of interactive online and blended year-long courses and programs to maximize your learning, motivation and direction in your fields of interest.</p>-->
<!--                    <div class="btnwrapper">-->
<!--                        <br><br>-->
<!--                        <a href="programs.php#yearlongprogram">Read More</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

        </div>
    </div>
</div>


<!--Benifit -->
<div class="benefit">
    <div class="container">
        <div class="row">
            <h2>项目<span>特色</span></h2>
        </div>

        <div class="row">

            <div class="col-sm-4">
                <div class="card">
                    <img class="img img-responsive " src="image/home/home-benefit.png">
                    <h4><b>国际大本营 </b></h4>
                    <p>有机会认识来自世界各地包括北美，南美和非洲等地区的朋友，结交小伙伴，体验不同文化的碰撞

                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="img img-responsive " src="image/home/home-benefit2.png" >
                        <h4><b>创新型互动课程</b></h4>
                        <p>从哈佛学者开发的严谨、体系化的众多学科中选择最感兴趣的课程，实现个性化学习，学习并应用全新的理念和概念


                        </p>
                </div>
            </div>



            <div class="col-sm-4" >
                <div class="card">
                    <img class="img img-responsive " src="image/home/home-benifit3.png" >
                    <h4><b>客户关怀</b></h4>
                    <p>我们为学生及家长提供安全、细致、周到的服务，从项目开始之前直至结束之后

                    </p>
                </div>
            </div>




        </div>

    </div>
</div>


<div class="testimonial section">

    <div id="myCarousel2" class="carousel slide home-slider" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel2" data-slide-to="1"></li>
            <li data-target="#myCarousel2" data-slide-to="2"></li>
            <li data-target="#myCarousel2" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="row">

                        <h4>"Seeing how much I liked this program, I predict other Knovva Academy programs would be just as good or even better." - Participant from Boston Latin School
                        </h4><br>

                    </div>
                </div>

            </div>

            <div class="item">
                <div class="container">
                    <div class="row">



                        <h4>"They made learning fun and exciting! Knovva Academy showed something different, a different style of learning and discovering new concepts." - Participant from Fenway High School</h4><br>


                    </div>
                </div>
            </div>

            <div class="item">
                <div class="container">
                    <div class="row">



                        <h4>"I had an awesome experience and got the chance to improve myself. I will take any opportunities to enrich my life with Knovva Academy." - Participant from Liuzhou High School</h4><br>

                    </div>
                </div>
            </div>

            <div class="item">
                <div class="container">
                    <div class="row">


                        <h4>"I’m always trying to find programs to improve myself because I want to make an impact to the world or the people around me. At Knovva Academy, I got to develop new practical skills, build connection with different cultures, and understand the responsibility of being a global citizen. Thank you everyone." - Participant from Dalian No. 24 High School</h4>


                    </div>
                </div>
            </div>


        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>




<!-- POST -->
<div class="post ">
    <div class="container">
        <div class="row">
            <h2>最近<span>新闻</span></h2>
        </div>

        <!--slider-->
        <div id="myCarousel" class="carousel slide">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-responsive img img-thumbnail" src="image/post/cambridge.jpg">
                                <p><a href="http://finance.yahoo.com/news/cambridge-education-foundation-attracts-big-120100747.html">Cambridge Education Foundation Attracts Big Names and International Students</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive img img-thumbnail" src="image/post/fenway.jpg">
                                <p><a href="http://www.fenwayhs.org/2017/02/28/fenway-students-at-2017-model-g20-summit/">Fenway Students at 2017 Model G20 Summit</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive img img-thumbnail" src="image/post/5g20.jpg">
                                <p><a href="http://www.bls.org/apps/news/show_news.jsp?REC_ID=442233&id=10">Five Students Participate in Model G20 Summit</a></p>
                            </div>
                            <div class="col-md-3">
                                <img class="img-responsive img img-thumbnail" src="image/post/triptochina.jpg">
                                <p><a href="http://www.modelg20.org/single-post/2016/12/12/Our-Inspiration-Trip-to-China">Our Inspirational Trip to China</a></p>
                            </div>
                        </div>
                    </div>
                </div>

<!--                <div class="item">-->
<!--                    <!-- Set the second background image using inline CSS below. -->
<!--                    <div class="container">-->
<!--                        <div class="container">-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-3">-->
<!--                                    <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                    <p><a href="#">2</a></p>-->
<!--                                </div>-->
<!--                                <div class="col-md-3">-->
<!--                                    <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                    <p><a href="#">2</a></p>-->
<!--                                </div>-->
<!--                                <div class="col-md-3">-->
<!--                                    <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                    <p><a href="#">2</a></p>-->
<!--                                </div>-->
<!--                                <div class="col-md-3">-->
<!--                                    <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                    <p><a href="#">2</a></p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="item">-->
<!--                    <!-- Set the third background image using inline CSS below. -->
<!--                    <div class="container">-->
<!--                        <div class="row">-->
<!--                            <div class="col-md-3">-->
<!--                                <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                <p><a href="#">3</a></p>-->
<!--                            </div>-->
<!--                            <div class="col-md-3">-->
<!--                                <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                <p><a href="#">3</a></p>-->
<!--                            </div>-->
<!--                            <div class="col-md-3">-->
<!--                                <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                <p><a href="#">3</a></p>-->
<!--                            </div>-->
<!--                            <div class="col-md-3">-->
<!--                                <img class="img-responsive" src="http://placehold.it/350x200">-->
<!--                                <p><a href="#">3</a></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

            </div>

        </div>

    </div>
</div>


<!-- CTA-->
<div class="calltoaction section">
    <div class="container">
        <div class="row">
            <h2>开启Knovva的旅程</h2>
            <p><i>探索发现最好的你</i></p>
            <a href="applicationform.php">立即报名</a>
        </div>
    </div>
</div>


<!-- Partner -->
<!--<div class="partner">
  <div class="container">
      <div class="row">
         <div class="col-md-2">
             <img src="image/p1.png" class="img-responsive img-circle">

         </div>
          <div class="col-md-2">
              <img src="image/p2.png" class=" img-responsive img-circle">

          </div>
          <div class="col-md-2">
              <img src="image/p3.png" class="img-responsive img-circle">

          </div>
          <div class="col-md-2">
              <img src="image/p4.png" class=" img-responsive img-circle">

          </div>
          <div class="col-md-2">
              <img src="image/p5.png" class=" img-responsive img-circle">

          </div>
          <div class="col-md-2">
              <img src="image/p6.png" class=" img-responsive img-circle">

          </div>
      </div>
  </div>
</div>
-->

<!-- Footer -->
<?php
include ("footer.php");
?>




</body>
</html>