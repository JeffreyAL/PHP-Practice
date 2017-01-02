<?php
// action when delete
$url = "";
if(isset($_GET['url']))
{
  $url = $_GET['url'];

  if($url == 'delete')
  {
    $id = $_GET['id'];
    //echo "$id";

    $sql = "DELETE FROM city WHERE ID=$id ";

    $delete = mysqli_query($connect, $sql);
    if($delete){
      echo "<h4><a href='table.php'> Click me to: Update page </a></h4>";
    }
  }
}
 ?>
