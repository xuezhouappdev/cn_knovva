<?php
/**
 * Created by PhpStorm.
 * User: xuezhou
 * Date: 2/14/17
 * Time: 2:38 PM
 */


include_once "../mysql_connect.php";



$tech_name = test_input($_POST['tech_name']);
$tech_email = test_input($_POST['tech_email']);
$tech_phone = test_input($_POST['tech_phone']);
$tech_textarea = test_input($_POST['tech_textarea']);

/* echo $sie_name."<br>";
 echo $sie_email."<br>" ;
 echo $sie_phone."<br>" ;
 echo "This is the text area".$sie_textarea."<br>";*/




if(($tech_name =="") || $tech_email  =="" || $tech_phone =="" ) {
    echo "Please make sure all the information has been completed";
}
else {
    $sql_tech_app = "INSERT INTO Client (ClientName, ClientPhone, ClientEmail, InterestedProgram,Isregistered)
VALUES ('".$tech_name."','".$tech_phone."','".$tech_email."','2','0')";


    //the record is input successfully.
    if($conn ->query($sql_tech_app)===TRUE) {
        echo "success";

    }
    else {
        echo "not success";
    }





}