<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>Knovva 首页</title>



    <!--customer css-->
    <link rel="stylesheet" href="css/index_new.css">




</head>
<body data-spy="scroll" data-target=".header" data-offset="250">


<?php
include "header.php";


?>




<!-- top slider -->
<div id="myCarousel" class="carousel slide home-slider" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner home-slider" role="listbox">
        <div class="item active" style='
        background: url("image/skyatlas2.jpeg") center center no-repeat;
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
                <h1 style="font-size:56px;text-transform: uppercase;line-height: 72px">胸有丘壑万千<br>眼有星海万年</h1>
                <a href="programs">学术项目</a>
            </div>
        </div>
    </div>

    <div class="row textwrapper" style="">

        <h4>下滑浏览更多</h4>
        <h5 style=""><a href="#programs" id="downbutton"><i class="fa fa-chevron-down animated infinite fadeInUp" aria-hidden="true"></i></a></h5>

    </div>

    <script>
        $(document).ready(function(){
            $("#downbutton").on('click', function(event) {

                if(this.hash !=="") {
                    event.preventDefault();

                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 80
                    }, 800, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } //end if
            });


        })

    </script>


</div>





<!--ABOUT -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <h5 style="opacity: 0">机构简介</h5>
              <h2>Knovva Academy —— <br>未来领袖的摇篮</h2>
<!--                <h4>Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4>-->
                <p>Knovva Academy是创新型学习的领先机构，致力于通过跨文化跨学科的互动线上线下课程为青少年成长助力，培养主动学习、善于反思、具有国际视野和社会责任心的未来青年领袖。
                </p>
                <a href="about.php">了解详情</a>
            </div>


            <div class="col-md-6" align="center">
                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/wQxpjRl6gvA?autoplay=0&showinfo=0"  ></iframe>
            </div>
        </div>
    </div>

</div>



<!--  program new -->
<div class="programnew jumbotron" id="programs">
    <div class="container">

        <div class="row">
            <h2>学术<span>项目</span></h2>
        </div>

        <div class="row">
            <div class="col-md-5 col-md-offset-1">

                <div class="card" style='background: url("image/home/home-program1.jpg") center center no-repeat ;background-size: cover; '>

                    <h3>夏季项目</h3>
                    <p>Knovva Academy夏季项目为期两周，在哈佛大学所在地美国麻州剑桥市举办。项目期间，来自世界各国的高中生将就社会创新、国际外交等主题进行项目制学习，完成主题相关的内容学习和团队任务。
                    </p>

                    <div class="btnwrapper" >
                        <br>
                        <br>
                        <a href="programs.php">了解详情</a>
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
                        <a href="programs.php#onlineprogram">了解详情</a>
                    </div>
                </div>
            </div>

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
                    <h4><b>文化交融 </b></h4>
                    <p>项目全程与世界各地优秀青年共同学习，结交好友，体验文化碰撞，搭建全球网络。

                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="img img-responsive " src="image/home/home-benefit2.png" >
                        <h4><b>创新互动</b></h4>
                        <p>从哈佛学者开发的严谨、体系化的学科中选择最感兴趣的课程，实现个性化学习并应用国际前沿理念。


                        </p>
                </div>
            </div>



            <div class="col-sm-4" >
                <div class="card">
                    <img class="img img-responsive " src="image/home/home-benifit3.png" >
                    <h4><b>学生关怀</b></h4>
                    <p>我们为学生及家长提供安全、细致、周到的服务，项目前、中、后均得到资深教师、项目工作人员的学业和成长辅导。

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

                        <h4>“ 两天半的时间，能让一个人从对世界局势产生多深的理解呢？这次MG20峰会，着实让我体验到了从量变到质变，不只依靠个人的努力，它更是一个小团队合作的结果，一个大团队交流的结晶。来自世界各地的一百多个高中生齐聚一堂，组成了一个小世界，但我们却能从这个小世界里窥见无数文化与历史的交织，而正是它们才组成了我们现在的世界，也就是这个属于我们所有人的地球村。”
                        </h4>

                        <p >—— 山东省实验中学 王子睿</p>
                        <br>

                    </div>
                </div>

            </div>

            <div class="item">
                <div class="container">
                    <div class="row">


                        <br><br>
                        <h4>“ 如果你愿意与来自不同区域、文化、性格的人交流，G20是一个不容错过的机会。这里有大咖云集的教授，他们生动幽默、侃侃而谈；这里有世界各地的青少年，他们和你都有同一个梦想：make the world a better place！”
                        </h4><br>

                        <p > —— 重庆南开中学 林炜菡</p>
                        <br>


                    </div>
                </div>
            </div>

            <div class="item">
                <div class="container">
                    <div class="row">

                        <br>
                        <h4>“ The amount of things I’ve learned here is so much greater than what I could learn from reading a textbook from a classroom or listening to a lecture. This way of learning is definitely better than through, the traditional learning class system. ” </h4>

                        <p> - Federico Rollo from Boston Latin School </p>
                        <br>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="container">
                    <div class="row">

                        <br><br>
                        <h4>“ I met all these amazing people and they really had a great impact on my life. There is nothing I would trade in the world for this memory. Thank you. ” </h4>
                        <p> - Adelene Jeneid from Norwood High School</p>
                        <br>
                        <br>

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
            <h2>最新<span>动态</span></h2>
        </div>

        <!--slider-->
        <div id="myCarousel" class="carousel slide">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner">

                <div class="item active" >
                    <!-- Set the first background image using inline CSS below. -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="http://sd.sina.com.cn/edu/xykd/2016-02-29/105114132.html"><img class="img-responsive img img-thumbnail" src="image/post/1.jpg"></a>
                                <p><a href="http://sd.sina.com.cn/edu/xykd/2016-02-29/105114132.html">哈佛大学模拟G20峰会落幕 山东省实验中学代表表现优秀</a></p>
                            </div>
                            <div class="col-md-3">
                                <a href="http://www.modelg20cn.org/single-post/shandongexperimentalschoolnews"><img class="img-responsive img img-thumbnail" src="image/post/2.jpg"></a>
                                <p><a href="http://www.modelg20cn.org/single-post/shandongexperimentalschoolnews">
                                        山东省实验中学优秀学生赴美参加2017年第二届哈佛国际青少年模拟G20峰会</a></p>
                            </div>
                            <div class="col-md-3">
                                <a href="http://www.bilingochina.cn/index.php?c=content&a=show&id=291"><img class="img-responsive img img-thumbnail" src="image/post/5g20.jpg"></a>
                                <p><a href="http://www.bilingochina.cn/index.php?c=content&a=show&id=291">UFEIC学子赴哈佛参加国际青少年模拟G20峰会载誉归来</a></p>
                            </div>
                            <div class="col-md-3">
                                <a href="http://www.modelg20cn.org/single-post/2017/01/05/%E5%A6%82%E4%BD%95%E9%AB%98%E6%95%88%E8%A7%84%E5%88%92%E6%B4%BB%E5%8A%A8"><img class="img-responsive img img-thumbnail" src="image/post/4.jpg"></a>
                                <p><a>哈佛学者讲座：如何高效规划活动</a></p>
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
            <a href="applicationform.php">立即申请</a>
        </div>
    </div>
</div>




<!-- Footer -->
<?php
include ("footer.php");
?>


<!-- Hotjar Tracking Code for http://cn.knovva.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:493129,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>

</body>
</html>