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
$new_vipuser = new VipUser("Gianfranmarcangelo", "Baldopio", 60);
$new_vipuser->setMail("gfmabp@mail.com");
$new_vipuser->setPriority(20);

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

  <h2>Nome Prodotto: <?php echo $new_product->getName() ?></h2>
  <h2>Modello: <?php echo $new_product->getModel() ?></h2>
  <h3>Prezzo: <?php echo $new_product->getPrice() ?></h3>
  <h3>Sconto del <?php echo $new_product->getDiscount() ?> %</h3>

  <hr>

  <h2>Nome Prodotto Usato: <?php echo $new_usedproduct->getName() ?></h2>
  <h2>Modello: <?php echo $new_usedproduct->getModel() ?></h2>
  <h3>Prezzo: <?php echo $new_usedproduct->getPrice() ?></h3>
  <h3>Sconto: <?php echo $new_usedproduct->getDiscount() ?> %</h3>
  <h3>Stato: <?php echo $new_usedproduct->getStatus() ?></h3>

  <hr>

  <h2>Nome Utente: <?php echo $new_user->getName() ?></h2>
  <h2>Cognome Utente: <?php echo $new_user->getLastname() ?></h2>
  <h2>Età: <?php echo $new_user->getAge() ?></h2>
  <h3>Mail: <?php echo $new_user->getMail() ?></h3>

  <hr>

  <h2>Nome Utente VIP: <?php echo $new_vipuser->getName() ?></h2>
  <h2>Cognome Utente VIP: <?php echo $new_vipuser->getLastname() ?></h2>
  <h2>Età UV: <?php echo $new_vipuser->getAge() ?></h2>
  <h3>Mail UV: <?php echo $new_vipuser->getMail() ?></h3>
  <h3>Priorità UV: <?php echo $new_vipuser->getPriority() ?></h3>

  <hr>
  
</body>
</html>