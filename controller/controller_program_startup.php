<?php
/**
 * Created by PhpStorm.
 * User: xuezhou
 * Date: 2/14/17
 * Time: 2:38 PM
 */


include_once "../mysql_connect.php";



$startup_name = test_input($_POST['startup_name']);
$startup_email = test_input($_POST['startup_email']);
$startup_phone = test_input($_POST['startup_phone']);
$startup_textarea = test_input($_POST['startup_textarea']);

/* echo $sie_name."<br>";
 echo $sie_email."<br>" ;
 echo $sie_phone."<br>" ;
 echo "This is the text area".$sie_textarea."<br>";*/




if(($startup_name =="") || $startup_email  =="" || $startup_phone =="" ) {
    echo "Please make sure all the information has been completed";
}
else {
    $sql_startup_app = "INSERT INTO Client (ClientName, ClientPhone, ClientEmail, InterestedProgram,Isregistered) VALUES ('".$startup_name."','".$startup_phone."','".$startup_email."','3','0')";




    //the record is input successfully.
    if($conn ->query($sql_startup_app)===TRUE) {
        echo "success";

    }
    else {
        echo "not success";
    }





}