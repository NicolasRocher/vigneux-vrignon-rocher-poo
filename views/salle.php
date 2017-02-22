<?php
require 'header.php';
require '../functions/functions.php';
session_start();

?>

<?php


$personnage = $_SESSION['personnage'];
var_dump($personnage);

$coffre = new Coffre;
var_dump($coffre);

$coffre->ajouterObjet($personnage);
$personnage->ajouterBonus();

// if ($coffre->afficherOpen() == false) {
//   $coffre->open();
//   $coffre->ajouterObjet($personnage);
//   $personnage->ajouterBonus();
//   var_dump($personnage);
// }


 ?>

 <?php

include 'footer.php';

  ?>
