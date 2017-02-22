<?php
require 'header.php';
require '../functions/functions.php';
session_start();

?>

<?php


$personnage = $_SESSION['personnage'];
var_dump($personnage);

$salle = new Salle('Niveau 1', 'Entrée');
var_dump($salle);

$coffre = new Coffre;
var_dump($coffre);

$porte = new Porte;
$porte->ouvrirPorte();
var_dump($porte);

$coffre->ouvrirCoffre($personnage);
var_dump($coffre);
$personnage->recupererCoffre();

 ?>

 <?php

include 'footer.php';

  ?>
