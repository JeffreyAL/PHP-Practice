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
        <div class="page-header">
          <h1>Contact Form</h1>
        </div>
      </div>


      <form class="form-horizontal" method="post" role="form">
        <?php include 'inc/function.php'; ?>
        <!-- Name -->
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Name:</label>
          <div class="col-sm-4">
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
          </div>
        </div>

        <!-- Email -->
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-4">
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
          </div>
        </div>

        <!-- Text Area -->
        <div class="form-group">
          <label class="control-label col-sm-2" for="comment">Message:</label>
          <div class="col-sm-4">
            <textarea class=" form-control input-lg " name="message" rows="10" id="textarea" placeholder="Enter message" required></textarea>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="control-label col-sm-2" for="comment"></label>
          <div class="col-sm-4">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>

      </form>
    </div> <!-- end of container-->

  </body>
</html>
