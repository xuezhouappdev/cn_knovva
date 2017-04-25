<?php



/*function authenticate() {
    if($_SERVER['PHP_AUTH_USER'] !=='admin' && $_SERVER['PHP_AUTH_PW'] !=='admin' ) {

        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0 401 Unauthorized');
        echo "error";
        exit;
    }

}

authenticate();*/



date_default_timezone_set("America/Los_Angeles");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subscriber List</title>

    <link rel="stylesheet" href="vendor/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.css">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">

    <link rel="stylesheet" href="css/databaseform.css">


</head>
<body>


<?php
// include header
include "header.php";
include_once "mysql_connect.php";



?>


<!-- Banner-->
<div class="banner">
    <div class="container">
        <div class="row">
            <h2>Subscriber List</h2>
        </div>
    </div>
</div>



<!--Question-->
<div class="questions">
    <div class="container">
        <h2>Subscriber List</h2>
        <p>Below is the list for subscribers' emails</p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Timestamp Joined</th>
            </tr>
            </thead>
            <tbody>


  <?php
            $sql_getlist = "SELECT ID, Email,Timestamp FROM Subscriber";
            $result_getlist = $conn->query($sql_getlist);

            if ($result_getlist->num_rows > 0) {
            // output data of each row
                while($row = $result_getlist->fetch_assoc()) {


                ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo date("Y-m-d H:i:s", strtotime($row['Timestamp'])+3600); ?></td>
                </tr>
                <?php
                }
            }
            else {
            echo "0 results";
            }

            $conn->close();
  ?>

            </tbody>
        </table>
    </div>
</div>
<div class="question-overlay">

</div>



<div class="arrow-down">

</div>

<!--PHONE SEC -->
<!--<div class="footer-contact jumbotron">
    <div class="container">
        <div class="row">
            <h3>Did not find your answer?</h3>
            <h3>Just call at <span> (617)-577-7770 </span> for emergency service</h3>
        </div>
    </div>
</div>
-->








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