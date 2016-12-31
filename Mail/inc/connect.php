<?php
//Connect to database using object orianted style 
$serverName = "localhost";
$userName = "root";
$passWord = ""; //no passwrod

//Create connection
$connect = new mysqli($serverName, $userName, $passWord);

//Check connection
if($connection->connect_error)
{
  die("Connecton failed: " . $connection->connect_error);
}

echo "Connection was successful";



 ?>
