<?php
//Connect to database using object orianted style
$serverName = "localhost";
$userName = "root";
$passWord = ""; //no passwrod
$dataBase = "mail";

//Create connection
$connect = new mysqli($serverName, $userName, $passWord, $dataBase);

//Check connection
if($connect->connect_error)
{
  die("Connecton failed: " . $connect->connect_error);
}

echo "Connection was successful";



 ?>
