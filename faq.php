<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAQ</title>



    <link rel="stylesheet" href="css/faq.css">


</head>
<body>


<?php
// include header
include "header.php";
?>


<!-- Banner-->
<div class="banner">
    <div class="container">
        <div class="row">
            <h2>Frequently Asked Questions</h2>
        </div>
    </div>
</div>



<!--Question-->
<div class="questions">
    <div class="container">
        <div class="panel-group" id="accordion">
            <!--Q1-->
            <div class="panel panel-default">
                <div class="panel-heading" >
                    <h4 class="panel-title">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Question1. The content for question?</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>


            <!--Q2-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Question2. The content for question?</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>


            <!--Q3-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Question3. The content for question?</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>


            <!--Q4-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Question4. The content for question?</a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>


            <!--Q5-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Question5. The content for question?</a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>


            <!--Q6-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Question6. The content for question?</a>
                    </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="question-overlay">

</div>



<div class="arrow-down">

</div>

<!--PHONE SEC -->
<div class="footer-contact jumbotron">
    <div class="container">
        <div class="row">
            <h3>Did not find your answer?</h3>
            <h3>Just call at <span> (617)-577-7770 </span> for emergency service</h3>
        </div>
    </div>
</div>




<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>


<script>
  /*  $(document).ready(function(){


        $(".panel.panel-default a").click(function(){
            //alert("TEt");
            $(this).css("text-decoration","none");
            $(".panel-heading").css({"background":"white","color":"black"});
            $(".panel-heading i").removeClass("fa-minus-circle").addClass("fa-plus-circle").css("color","#ff3e68");

            $(this).parent().parent().css({"background":"#ff3e68","color":"white"});
            $(this).prev().addClass("fa-minus-circle").removeClass("fa-plus-circle").css("color","white");


        })


    })*/
</script>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="vendor/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script src="js/accordian.js"></script>



</body>
</html>