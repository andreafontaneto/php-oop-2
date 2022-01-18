<?php
/////////////// 

/*
class USER
  - nome
  - cognome
  - età
  - mail

  >> User PREMIUM/VIP
    -> nome
    -> cognome
    -> età
    -> mail
      + priorità (in base al'età)
/*

/*
class PRODUCT
  - nome
  - prezzo
  - sconto

  >> USED Product
    -> nome
    -> prezzo
    -> sconto
      + status (grado A, grado B, grado C)
*/

/////////////// 


require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/UsedProduct.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/VipUser.php";

// PRODOTTO
$new_product = new Product("iPhone", "XS", 1200);
$new_product->setDiscount(5); 

var_dump($new_product);

// PRODOTTO USATO
$new_usedproduct = new UsedProduct("iPhone", "8", 500, "grado A");
$new_usedproduct->setDiscount(20);

var_dump($new_usedproduct);

// UTENTE
$new_user = new User("Mario", "Rossi", 30);
$new_user->setMail("mrossi@mail.com");

var_dump($new_user);

// UTENTE VIP
$new_vipuser = new VipUser("Giuseppe", "Verdi", 60, "alta");
$new_vipuser->setMail("gverdi@mail.com");

var_dump($new_vipuser);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 2</title>
</head>
<body>

  <!-- Content -->
  
</body>
</html>