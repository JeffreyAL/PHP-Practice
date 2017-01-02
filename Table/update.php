<?php
// action when update is pressed
if($_SERVER["REQUEST_METHOD"] == "POST"){

  // collect user data
  $id = $_POST['id'];
  $name = $_POST['name'];
  $cc = $_POST['cc'];
  $district = $_POST['district'];
  $population = $_POST['population'];

  // update the data on the database
  $sql = "UPDATE city SET ID = '$id', Name = '$name', CountryCode = '$cc',
  District = '$district', Population = '$population' WHERE ID=$id ";
  // run the update on the database
  if(mysqli_query($connect, $sql)){
    echo "Update was successful";
    echo "<a href='table.php'> Click me to complete update</a>";
  } else {
    echo "fail to Update";
  }


mysqli_close($connect); // close the database

}


 ?>
