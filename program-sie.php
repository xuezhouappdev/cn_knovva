<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> 美国高等教育介绍：了解学习环境
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
<div class="intro section" id="banner" style="background:url('image/program/sie.jpg');  background-size: cover;width: 100%;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;

    -o-background-size: cover;">
    <div class="container">
        <div class="row">

            <div class="intro-text">
                <h1>社会创新创业项目</h1>
                <a href="applicationform.php">立即报名</a>
            </div>
        </div>

    </div>

</div>



<!--ABOUT -->
<div class="about section">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index_2.php">首页</a></li>
            <li><a href="programs.php">浏览项目</a></li>
            <li><a href="#">社会创新创业项目
                </a></li>
        </ul>

        <div class="row">
            <div class="col-md-7">
                <h4>社会创新创业项目</h4>
                <hr>
                <p>社会创新项目是为期一年的、面向高中生（9-12年级）的混合制学习项目。项目围绕全球亟待解决的社会问题，启发学生挖掘自身潜能、利用创新模式攻克挑战。<br><br>
                    项目由三部分组成，分别在夏季、冬季和春季进行。夏季小学期为期两周，在哈佛大学所在地剑桥市举办。来自全球各地的学生将以小组为单位，参加美国大学讲座、互动工作坊等，学习创新创业的核心知识、掌握关键技能。同时，小组成员也将重点就一个社会问题进行深入研究。冬季小学期为期一周，在中国南京市举办。小组成员将进行一系列丰富的浸入式文化活动，并与各领域专家一起进行田野调查，进一步理解社会和环境问题。春季学期，学生将学习创新相关的线上课程，并创造解决社会问题的可行方式方法。
                </p>
            </div>
            <div class="col-md-5" >

                <div class="panel panel-primary" style="position: relative;top:48px">
                    <div class="panel-heading">Facts</div>
                    <div class="panel-body">




                        <p><b><i class="fa fa-book" aria-hidden="true"> </i>&nbsp;主题: </b>高等教育</p>
                        <P><b><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;时间& 地点: </b>2017夏季/线上课程</P>
                        <p><b><i class="fa fa-graduation-cap" aria-hidden="true"> </i>&nbsp;&nbsp;年级: </b>高中一年级 - 高中三年级</p>


<!--                        <a data-toggle="modal" data-target="#myModal" >>> VIEW AGENDA</a>-->
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
            <h2>项目特色</h2>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <img src="image/icon/icon-understand.png" class="img img-responsive">
                <h4><Span>深入</Span>&nbsp理解全球重要议题
                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-connect.png" class="img img-responsive">
                <h4><Span>建立</Span>&nbsp;全球青少年领袖网络

                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-strength.png" class="img img-responsive">
                <h4><Span>增强</Span>&nbsp;长期项目合作能力

                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-experience.png" class="img img-responsive">
                <h4><Span>提高</Span>&nbsp;分析解决问题能力


                </h4>
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