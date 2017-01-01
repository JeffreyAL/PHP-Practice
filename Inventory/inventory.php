<?php include ('item.php');?>

<?php
$itemArray = array(100);
$totalNum = 0;

//$box = new Item("amazon Box", "xxxxyxa", 10, 7.95);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  // store user input to variables
  $name = $_POST['name'];
  $upc = $_POST['upc'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];

  //check for empty variables
  if(!empty($name) || !empty($upc) || !empty($quantity) || !empty($price)){
    $item = new Item($name, $upc, $quantity, $price);
  }

}

function addItem($item)
{

}

 ?>
