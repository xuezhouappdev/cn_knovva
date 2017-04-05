<?php
/**
 * Created by PhpStorm.
 * User: xuezhou
 * Date: 2/14/17
 * Time: 2:38 PM
 */


include_once "../mysql_connect.php";



  $sie_name = test_input($_POST['sie_name']);
  $sie_email = test_input($_POST['sie_email']);
  $sie_phone = test_input($_POST['sie_phone']);
  $sie_textarea = test_input($_POST['sie_textarea']);

/* echo $sie_name."<br>";
 echo $sie_email."<br>" ;
 echo $sie_phone."<br>" ;
 echo "This is the text area".$sie_textarea."<br>";*/




  if(($sie_name =="") || $sie_email  =="" || $sie_phone =="" ) {
     echo "Please make sure all the information has been completed";
  }
   else {
      $sql_sie_app = "INSERT INTO Client (ClientName, ClientPhone, ClientEmail, InterestedProgram,Isregistered)
VALUES ('".$sie_name."','".$sie_phone."','".$sie_email."','1','0')";


     //the record is input successfully.
      if($conn ->query($sql_sie_app)===TRUE) {
          echo "success";

      }
      else {
        echo "not success";
      }





   }