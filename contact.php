<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>联系我们</title>

    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">


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
            <h1>联系我们</h1>
        </div>
    </div>
</div>



<!-- contact-->

<div class="map">
    <div class="container">



        <div class="row">

            <div class="col-sm-7" >
                <form method="POST" action=""  id="contactemailform" style="border-right: 2px solid  rgba(146,146,146,0.1);padding-right: 24px">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 id="error" style="color:red;">
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">姓*</label>
                                <input type="text" class="form-control" name="contact_ln"  placeholder="Last Name" >


                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">

                                <label for="firstname">名*</label>
                                <input type="text" class="form-control" name="contact_fn"  placeholder="First Name" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">邮箱*</label>
                                <input type="email" class="form-control" name="contact_email" placeholder="Email" >

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">电话</label>
                                <input type="number" class="form-control" name="contact_phone"  placeholder="Phone" >

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">信息*</label>
                                <textarea class="form-control" rows="11" name="contact_textarea" ></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">


                            <button type="submit" name="submit" id="contact-submit-btn" class="btn btn-default">发送</button>
                        </div>
                    </div>

                </form>
            </div>

            <div class="col-sm-5">
                <h5><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp <a href="https://www.google.com/maps/place/222+Third+St,+Cambridge,+MA+02142/@42.367156,-71.0823859,17z/data=!3m1!4b1!4m5!3m4!1s0x89e370bb6afb650b:0x7bf7a9af0f3613cd!8m2!3d42.3671521!4d-71.0801972" target="_blank">222 3rd Street, Suite 3150, Cambridge, MA 02142</a></h5>
                <h5><i class="fa fa-phone" aria-hidden="true"></i>&nbsp <a href="callto:6175777770">617-577-7770</a></h5>
                <h5> <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp<a href="mailto:info@knovva.com">info@knovva.com</a></h5>



                <img src="image/map.png" class="img img-responsive" style="margin-top:64px">




                <!--                <script src="js/contact-map.js"></script>-->
            </div>


        </div>
    </div>
</div>
</div>


<!--<div class="contact-info">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--           <div class="col-sm-4">-->
<!--               <i class="fa fa-phone" aria-hidden="true"></i>-->
<!--               <h3>Call US</h3>-->
<!--               <h4><a href="callto:6175777770">617-577-7770</a></h4>-->
<!---->
<!---->
<!--           </div>-->
<!---->
<!--            <div class="col-sm-4">-->
<!--                <i class="fa fa-map-marker" aria-hidden="true"></i>-->
<!--                <h3>Address</h3>-->
<!--                <h4><a href="https://www.google.com/maps/place/222+Third+St,+Cambridge,+MA+02142/@42.367156,-71.0823859,17z/data=!3m1!4b1!4m5!3m4!1s0x89e370bb6afb650b:0x7bf7a9af0f3613cd!8m2!3d42.3671521!4d-71.0801972" target="_blank">222 3rd Street, Suite 3150, Cambridge, MA 02142</a></h4>-->
<!--            </div>-->
<!--            <div class="col-sm-4">-->
<!--                <i class="fa fa-envelope-o" aria-hidden="true"></i>-->
<!--                <h3>Email</h3>-->
<!--                <h4><a href="mailto:fdf@giantbug.com">fdf@giantbug.com</a></h4>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->






<div class="footer-wrapper">
    <?php
    include ("footer.php");
    ?>
</div>



<script src="js/contactemail.js">
</script>
<script  async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQxsMEH4W7YqPRe5bi5mgNas9MVYCB8a0&callback=initMap"
>
</script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>



</body>
</html>