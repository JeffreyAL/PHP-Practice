<?php

 class Item{

  //class variables
  private $name;
  private $upc;
  private $quantity;
  private $price;

  // constructor
  function __construct($name,$upc,$quantity,$price)
  {
    $this->name = $name;
    $this->upc = $upc;
    $this->quantity = $quantity;
    $this->price = $price;
    echo "constructor";
  }

  // functions
  function getName(){
    return $name;
  }

  function getUPC(){
    return $upc;
  }

  function getQuantity(){
    return $quantity;
  }

  function getPrice(){
    return $price;
  }


}
 ?>
