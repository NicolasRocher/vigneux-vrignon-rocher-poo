<?php
require 'header.php';
require '../functions/functions.php';
session_start();

?>

<?php


$personnage = $_SESSION['personnage'];
var_dump($personnage);

$salle = new Salle('Niveau 1','Entree');
var_dump($salle);

$coffre = new Coffre;
var_dump($coffre);


 ?>

 <?php

include 'footer.php';

  ?>
