<?php

require_once __DIR__ . "/Product.php";

class UsedProduct extends Product{

  private $status;

  function __construct($_name, $_model, $_price, $_status){
    parent::__construct($_name, $_model, $_price);
    $this->status = $_status;
  }

  public function setDiscount($_discount){
    $this->discount =+ $_discount;
  }

}