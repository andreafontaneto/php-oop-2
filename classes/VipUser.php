<?php

require_once __DIR__ . "/User.php";

class VipUser extends User{

  private $priority;

  function ___construct($_name, $_lastname, $_age, $_priority){
    parent::__construct($_name, $_lastname, $_age);
    $this->priority = $_priority;
  }
}