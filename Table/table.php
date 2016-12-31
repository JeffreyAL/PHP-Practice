<!-- php code for database-->
<?php include 'inc/connect.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Form</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="container">

      <div class="col-md-12">
        <div class="page-header text-center">
          <h1>Table: City</h1>
        </div>
      </div>

      <table class="table table-hover">

        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>CountryCode</th>
            <th>District</th>
            <th>Population</th>
          </tr>
        </thead>

        <tbody>

          <?php

            $sql = "SELECT ID, Name, CountryCode, District,
            Population FROM city ORDER BY ID ASC";

            $data = mysqli_query($connect, $sql);

            // collect data from database
            while($run = mysqli_fetch_array($data)){

              //store collected data into local variable
              $id = $run['ID'];
              $name = $run['Name'];
              $cc = $run['CountryCode'];
              $district = $run['District'];
              $population = $run['Population'];
           ?>

           <tr>
             <td><?php echo "$id";?></td>
             <td><?php echo "$name";?></td>
             <td><?php echo "$cc";?></td>
             <td><?php echo "$district";?></td>
             <td><?php echo "$population";?></td>
           </tr>


           <?php } ?>


    </tbody>
  </table>
</div>




    </div> <!-- end of container-->

  </body>
</html>
