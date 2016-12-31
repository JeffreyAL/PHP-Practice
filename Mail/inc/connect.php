<?php
//Connect to database using object orianted style
$serverName = "localhost";
$userName = "root";
$passWord = ""; //no passwrod

//Create connection
$connect = new mysqli($serverName, $userName, $passWord);

//Check connection
if($connect->connect_error)
{
  die("Connecton failed: " . $connect->connect_error);
}

echo "Connection was successful";



 ?>
