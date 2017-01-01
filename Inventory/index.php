
<!DOCTYPE html>
<html>
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
          <h1>Inventory System</h1>
        </div>
      </div>

      <div class="col-md-6">
        <form class="form-horizontal" method="post" role="form">

          <?php
          // item string string int double
          //$box = new item("amazon Box", "xxxxyxa", 10, 7.95);
          include ('inventory.php');
           ?>

          <!-- Name -->
          <div class="form-group">
            <label class="control-label" for="name">Name:</label>
            <div class="">
              <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
          </div>

          <!-- UPC -->
          <div class="form-group">
            <label class="control-label" for="email">UPC:</label>
            <div class="">
              <input type="text" name="upc" class="form-control" placeholder="Enter upc">
            </div>
          </div>

          <!-- Quantity -->
          <div class="form-group">
            <label class="control-label" for="email">Quantity:</label>
            <div class="">
              <input type="text" name="quantity" class="form-control" placeholder="Enter Quantity">
            </div>
          </div>

          <!-- Price -->
          <div class="form-group">
            <label class="control-label" for="email">Price:</label>
            <div class="">
              <input type="text" name="price" class="form-control" placeholder="Enter Price">
            </div>
          </div>



          <!-- Button -->
          <div class="form-group">
            <label class="control-label" for="comment"></label>
            <div class="">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </div>



  </body>
</html>
