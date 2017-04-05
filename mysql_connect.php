<?php
/**
 * Created by PhpStorm.
 * User: xuezhou
 * Date: 2/9/17
 * Time: 5:33 PM
 */



DEFINE ('DB_USER','echochow_admin');

DEFINE ('DB_PSWD','zx199019zxa');

DEFINE ('DB_HOST','localhost');

DEFINE ('DB_NAME','echochow_knovva');



// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PSWD,DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully!";
if($conn) {
    //echo "Connected successfully!";
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
