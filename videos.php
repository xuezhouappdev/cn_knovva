<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Video| Knovva </title>



    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- CS -->
    <link rel="stylesheet" href="css/livestream.css">

    <!-- lightbox -->
    <link rel="stylesheet" href="vendor/fancybox-3.0/dist/jquery.fancybox.min.css" />
    <script src="vendor/fancybox-3.0/dist/jquery.fancybox.js"></script>


    <!-- Google KeyWord -->
    <meta name="keywords" content="" />



</head>

<?php
include "header.php";
?>

<body >


<!-- outmost div-->
<div class="outmost  section">


    <!-- banner -->
    <div class="banner" style=";z-index: 1">

        <div class="herotext">
            <h1>Live Webinar</h1>
                    <a id="play">加入直播</a>
                    <a id="pastbutton" href="#pastwebinar">历史直播</a>

            <script>
                $(document).ready(function() {

                    <!--control the video-->
                    $("#play").click(function(){
                        $(".banner").animate({
                            "opacity": 0,
                            "z-index" :"0"},1000);
                    });

                    <!--control smoth scroll-->
                    $("#pastbutton").on('click', function(event) {

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



                });//ready ends


            </script>
        </div>
    </div>



    <!-- Live-->
    <div class="live section" style="position: absolute;top:56px;">
        <div class="container">
            <div class="row" style="height: 95vh">
                    <h5>Now Playing: </h5>
<!--                     <iframe class="video" width="100%" height="75%" src="https://www.youtube.com/embed/9aaMnIRkK3k$showinfo=0" frameborder="1" allowfullscreen></iframe>-->
                <embed height="80%" width="100%" quality="high" allowfullscreen="true" type="application/x-shockwave-flash" src="//static.hdslb.com/miniloader.swf" flashvars="aid=9641357&page=1" pluginspage="//www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash"></embed>
            </div>
        </div>
    </div>
</div>

<hr>

<!-- History-->
<div class="history section" id="pastwebinar">
    <div class="container">
        <h3>历史直播</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">

                        <img class="img img-responsive" src="image/webinar/g20.png">
                    </div>
                    <div class="text">

                        <h5>2017 Model G20 出行准备讲座</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="video/modelg20-orientation.mp4"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;观看回播</a>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">
                        <img class="img img-responsive" src="image/webinar/g20.png">
                    </div>
                    <div class="text">
                        <h5>2017 Model G20 出行准备讲座</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="video/parents.mp4"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;观看回播</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">
                        <img class="img img-responsive" src="image/webinar/g20.png">
                    </div>
                    <div class="text">
                        <h5>2017 Model G20 - Mindset</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="video/modelg20-webinar.mp4"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;观看回播</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">
                        <img class="img img-responsive" src="image/webinar/g20.png">
                    </div>
                    <div class="text">
                        <h5>2017 Model G20 学生讲座</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="video/modelg20-writing.mp4"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;观看回播</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">
                        <img class="img img-responsive" src="image/webinar/earlyshow1.png">
                    </div>
                    <div class="text">
                        <h5>Early Show Night - Eps 1</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="video/ENSep-1.mp4"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;观看回播</a>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">
                    <img class="img img-responsive" src="image/webinar/earlyshow2.png">
                    </div>
                    <div class="text">
                        <h5>Early Show Night - Eps 2</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="video/ENSep-2.mp4"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;观看回播</a>
                    </div>
                </div>
            </div>


            <div class="col-md-3">
                <div class="card">
                    <div class="imgwrapper">
                        <img class="img img-responsive" src="image/webinar/earlyshow3.png">
                    </div>
                    <div class="text">
                        <h5>Early Show Night - Eps 3</h5>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Thu July 14, 2016 09:00pm</p>
                        <a data-fancybox href="video/earlyshownight.mp4"><i class="fa fa-play-circle" aria-hidden="true"></i>&nbsp;观看回播</a>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>



<!-- Footer -->
<?php
include ("footer.php");
?>




</body>
</html>