<?php

class User{

  private $name;
  private $lastname;
  private $age;
  private $mail;

  function __construct($_name, $_lastname, $_age)
  {
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->age = $_age;
  }

  // SETTER
  public function setName($_name){
    $this->name = $_name;
  }
  public function setLastname($_lastname){
    $this->lastname = $_lastname;
  }
  public function setAge($_age){
    $this->age = $_age;
  }
  public function setMail($_mail){
    $this->mail = $_mail;
  }

  // GETTER
  public function getName(){
    return $this->name;
  }
  public function getLastname(){
    return $this->lastname;
  }
  public function getAge(){
    return $this->age;
  }
  public function getMail(){
    return $this->mail;
  }
}