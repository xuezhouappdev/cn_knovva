<?php
/**
 * Created by PhpStorm.
 * User: xuezhou
 * Date: 2/9/17
 * Time: 8:29 PM
 */


include_once "../mysql_connect.php";
$email=$_POST['footer_email'];

if(isset($_POST['footer_email']) && (!filter_var($email, FILTER_VALIDATE_EMAIL) === false )) {





    $sql_search_email = "SELECT * FROM Subscriber WHERE Email = '".$email."' ";

    $result = $conn->query($sql_search_email);

    $count = $result->num_rows;

//echo $count."<br>"."this is important<br>";

    if($result->num_rows==0) {


        $sql_insert = "INSERT INTO Subscriber (Email) values ('".$email."')";

        if ($conn ->query($sql_insert)===TRUE) {
            echo "You have been enrolled to our newsletter.";

        }else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    }

    else {

        echo "Your email has been existed in our Database";

    }





}
else {
    echo "Please enter a valid email address";
}



