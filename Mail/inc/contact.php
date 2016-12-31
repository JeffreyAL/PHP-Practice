<?php

//set variables to Empty
$name = $email = $message = "";
$status = true;

// when the button is pressed
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $emailTo = ""; // email you want to send the message to
 $subject = "New Email";

//check if the text are valide
 $name =  test_input($_POST['name']);
 $email = test_input($_POST['email']);
 $message = test_input($_POST['message']);

// check for empty data -----
 if(empty($_POST['name'])){
   echo "Error: name is empty";
   $status = false;
 }

 else if(empty($_POST['email'])){
   echo "Error: email is empty";
   $status = false;
 }

 else if(empty($_POST['message'])){
   echo "Error: message is empty";
   $status = false;
 }

 // send email
 if($status == true)
 {
   //mail($emailTo, $subject, $message, "From: " . $name);
   //echo "email was sent";

   //add the data into the database id, name, email, message
   $SQL = "INSERT INTO email (id, name, email, message)
    VALUES ('', '$name', '$email', '$message');";


   if(mysqli_query($connect, $SQL)){
     echo "Upload to database successful";
   } else {
     echo "failed";
   }


 mysqli_close($connect); // close the database
 }

} // end of server method-post

//check for unwanted data/text
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
