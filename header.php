<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=1">
    <title>Knovva Header</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="vendor/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">

    <!-- custom css-->
    <link rel="stylesheet" href="css/header.css">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="vendor/bootstrap-3.3.7/js/bootstrap.min.js"></script>

    
</head>

<style>

</style>


<body>
<!--NOTE! THIS IS FOR RESUING ON THE PAGES NOT INCLUDING INDEX PAGE, INDEX PAGE HAS A FULL-WIDTH BACKGROUND, WHICH SHOULD BE DEALT WITH
SEPERATELY-->

<!--Header-->
<div class="header" >
    <div class="container">

        <div class="navbar-fixed-top homepage" id="mynav">
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
                    <li><a href="blog"> 最近新闻 </a></li>
                    <li><a href="contact"> 联系方式 </a></li>
                    <li><a href="applicationform" style="background: #7c5eb2;padding: 8px 16px;border-radius: 5%;color: white"><i class="fa fa-hand-o-up" aria-hidden="true"></i>&nbsp;立即申请</a></li>
                    <li class="icon"><a href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                </ul>
          </div>
        </div>
    </div>

    <!--side nav-->
    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0);" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index">首页</a>
        <a href="about">机构简介</a>
        <a href="programs">学术项目</a>
        <a href="blog.php">最近新闻</a>
        <a href="contact">联系方式</a>
        <a href="applicationform">立即申请</a>
    </div>

</div>



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


    function openNav () {
        document.getElementById("mySidenav").style.width ="100%";
    }

    function closeNav () {
        document.getElementById("mySidenav").style.width ="0%";

    }


    //scroll to control the navigation
    $(window).scroll(function(){
        if($(document).scrollTop() > 30) {

            $('#mynav').addClass("add");
        }
        else {
            $('#mynav').removeClass("add");
        }

    });


</script>

</body>
</html>