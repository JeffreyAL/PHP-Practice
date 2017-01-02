<?php

$url = "";
if(isset($_GET['url']))
{
  $url = $_GET['url'];

  // action when delete
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

  // action when edit
  if($url == 'edit')
  {
    // store id from url-page
    $U_id = $_GET['id'];

    // create the sql for selection
    $sql = "SELECT * FROM city WHERE ID=$U_id";

    // collect the selected data
    $data = mysqli_query($connect, $sql);
    $run = mysqli_fetch_array($data);
    //echo "edit";

  }   ?>

  <div class="col-md-12">
    <h3>Edit form</h3>
    <form class="form-inline" method="post">



      <div class="form-group">
        <lable>ID</lable>
        <input type="text" name="id" class="form-control" value="<?php echo $run['ID'];  ?>"></input>
      </div>

      <div class="form-group">
        <lable>Name</lable>
        <input type="text" name="name" class="form-control" value="<?php echo $run['Name'];  ?>"></input>
      </div>

      <div class="form-group">
        <lable>CountryCode</lable>
        <input type="text" name="cc" class="form-control" value="<?php echo $run['CountryCode'];  ?>"></input>
      </div>

      <div class="form-group">
        <lable>District</lable>
        <input type="text" name="district" class="form-control" value="<?php echo $run['District'];  ?>"></input>
      </div>

      <div class="form-group">
        <lable>Population</lable>
        <input type="text" class="form-control" name="population" value="<?php echo $run['Population'];  ?>"></input>
      </div>


        <a href="table.php" class="btn btn-danger" role="button">Cancel</a>
        <button type="submit" class="btn btn-info">Update</button>


    </form>
  </div>

<?php
} // end of if -- isset
 ?>
