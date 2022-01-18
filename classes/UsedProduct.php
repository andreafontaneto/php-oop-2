<?php

require_once __DIR__ . "/Product.php";

class UsedProduct extends Product{

  private $status;

  function __construct($_name, $_model, $_price, $_status){
    parent::__construct($_name, $_model, $_price);
    $this->status = $_status;
    $this->discount = 20;
  }

  public function setStatus($_status){
    $this->status = $_status;
  }

  public function getStatus(){
    return $this->status;
  }

  public function setDiscount($_discount){
    $this->discount += $_discount;
  }

  public function getDiscount(){
    return $this->discount;
  }

}