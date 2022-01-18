<?php

require_once __DIR__ . "/User.php";

class VipUser extends User{

  private $priority;

  function ___construct($_name, $_lastname, $_age){
    parent::__construct($_name, $_lastname, $_age);
  }

  public function setPriority($_priority){
    if($this->age >= 20){
      $this->priority = "media";
    } else if ($this->age >= 50){
      $this->priority = "alta";
    }
  }

  public function getPriority(){
    return $this->priority;
  }
}