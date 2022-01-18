<?php

class Product{

  private $name;
  private $model;
  private $price;
  private $discount = 0;

  function __construct($_name, $_model, $_price)
  {
    $this->name = $_name;
    $this->model = $_model;
    $this->price = $_price;
  }

  // SETTER
  public function setName($_name){
    $this->name = $_name;
  } 
  public function setModel($_model){
    $this->model = $_model;
  }
  public function setPrice($_price){
    $this->price = $_price;
  }
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }

  // GETTER
  public function getName(){
    return $this->name;
  }
  public function getModel(){
    return $this->model;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getDiscount(){
    return $this->discount;
  }

}