<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>美国高等院校专业及就业选择
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
           <h1>美国高等院校专业及就业选择</h1>
           <a href="applicationform.php">立即报名</a>
       </div>
   </div>

  </div>

</div>



<!--ABOUT -->
<div class="about section">
    <div class="container" >
        <ul class="breadcrumb">
            <li><a href="index_2.php">首页</a></li>
            <li><a href="programs.php">项目浏览</a></li>
            <li><a href="#">美国高等院校专业及就业选择</a></li>
        </ul>

        <div class="row">
            <div class="col-md-7">
                <h4>美国高等院校专业及就业选择 </h4>
                <hr>
                <p>美国高等教育系统机构繁多、结构复杂，各院校自主权较大、专业设置灵活、信息庞杂，为非英语为母语国家的申请者科学地进行专业选择和就学准备带来了挑战。美国高等院校专业及就业选择为期7周，旨在促进有志来美就读本科或研究生的国际学生系统理解美国高等教育的机构设置、学科设置、就业前景等，为学生择校择业提供参考。</p>
            </div>
            <div class="col-md-5" >

                <div class="panel panel-primary" style="position: relative;top:48px">
                    <div class="panel-heading">Facts</div>
                    <div class="panel-body">

                        <p><b><i class="fa fa-book" aria-hidden="true"> </i>&nbsp;&nbsp;主题: </b>美国高等教育</p>
                        <P><b><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;地点: </b>美国剑桥</P>
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
            <h2>项目特色</h2>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <img src="image/icon/icon-explore.png" class="img img-responsive">
                <h4><Span>系统</Span>&nbsp;了解美国高等教育体系


                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-deepen.png" class="img img-responsive">
                <h4><Span>深入  </Span>&nbsp;探索不同专业的知识技能




                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-understand.png" class="img img-responsive">
                <h4><Span>前瞻</Span>&nbsp;不同专业的职业前景



                </h4>
            </div>
            <div class="col-sm-3">
                <img src="image/icon/icon-discover.png" class="img img-responsive">
                <h4><Span>  发现</Span>&nbsp;人生的无限可能


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