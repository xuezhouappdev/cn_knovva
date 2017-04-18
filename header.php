<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Knovva Header</title>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Noto+Sans|Seymour+One" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

    
</head>

<style>

</style>


<body>
<!--NOTE! THIS IS FOR RESUING ON THE PAGES NOT INCLUDING INDEX PAGE, INDEX PAGE HAS A FULL-WIDTH BACKGROUND, WHICH SHOULD BE DEALT WITH
SEPERATELY-->

<!--Header-->
<div class="header" >
    <div class="container">

        <div class="navbar-fixed-top">
          <div class="row">



              <a href="index.php"><img id="logo" src="image/logo-trim.png" class="img-responsive img" ></a>





                <ul id="menuitem" >
                    <li><a href="index"> 首页 </a></li>
                    <li><a href="about"> 机构简介 </a></li>

                    <li class="dropdown"> <!--programdropdown -->
                        <a class="dropbtn" href="programs">学术项目</a>

                        <div class="dropdown-content"><!--programdropdown content -->
                            <a href="program-sie">社会创新创业项目</a>
                            <a href="program-gai">青少年领袖外交家项目</a>
                            <a href="program-aer">青少年机器人工程师项目</a>
                            <a href="program-landscape">美国高等院校专业及就业选择</a>
                            <a href="program-socialmedia">美国社交媒体和在线沟通要领</a>
                            <a href="program-harrypotter">英文原版精读之哈利波特系列</a>
                            <a href="program-irg">英文原版精读之科技前沿</a>



                        </div>

                    </li>
<!--                    <li><a href="#"> Teacher </a></li>-->

                   <!-- <li><a href="gallery.php" class="disabled"> Gallery </a></li>-->
                  <!--  <li><a href="career.php"> Career </a></li>-->
<!--                    <li><a href="blog/" target="_blank"> Blog </a></li>-->
                    <li><a href="blog"> 最近新闻 </a></li>
                    <li><a href="contact"> 联系方式 </a></li>
                    <li><a href="applicationform" style="background: #7c5eb2;padding: 8px 16px;border-radius: 5%;color: white"><i class="fa fa-hand-o-up" aria-hidden="true"></i>&nbsp;立即申请</a></li>
                 <!--   <li><a href="faq.php"> FAQ </a></li>-->
                   <!-- <li> <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></li>-->


                </ul>


          </div>

        </div>

    </div>

</div>

<!-- overlay -->

<div class="subscribe-overlay" id="myNav" style="display: none">
    <div class="container">
        <div class="row">
            <a><i class="fa fa-times" id="crosssign" aria-hidden="true"></i></a>
        </div>

        <div class="row">
            <div class="sb-input">



                <div class="overlay-content">

                    <form  method="post" id="header_subscribeform">

                           <div class="input-group middle">
                               <div class="row" style="text-align: left">
                                   <h5 id="noti" style="color: white"></h5>
                               </div>

                               <div class="row" style="display: inherit">
                                   <input type="email" class="form-control" placeholder="Your Email" name="header_email">
                                   <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" id="subscribbtn" name="submit" >Subscribe</button>
                                   </span>
                               </div>

                               <script src="js/header-subscribe.js"></script>
                           </div>
                    </form>


                </div>
            </div>
        </div>

    </div>
</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<!--<script src="js/index.js"></script>-->
<script src="js/index-subscription.js"></script>

<script>
    $(function(){
        // this will get the full URL at the address bar


        var url = window.location.href;
        //alert(url)

        // passes on every "a" tag
        $(".header ul >li:not(:last-child) >a").each(function() {
            // checks if its the same on the address bar


            if(url === (this.href)) {

                $(this).css({"color":"#6e539e","font-weight":"500"});
            }
        });
    });

</script>

</body>
</html>