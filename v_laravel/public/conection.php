<?php


if($_SERVER['SERVER_NAME'] == "opengiscrm.com" ) {  
    $dbHost     = "localhost";
    $dbUsername = "jonathan";
    $dbPassword = "123";
    $dbName     = "pymesshopjc";
                                          
}
  else { 
  
    $dbHost     = "localhost";
    $dbUsername = "jonathan";
    $dbPassword = "123";
    $dbName     = "pymesshopjc";
} 
   

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>