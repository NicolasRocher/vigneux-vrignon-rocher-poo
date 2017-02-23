<?php

include 'functions.php';
session_start();

$personnage = $_SESSION['personnage'];
$monstre = $_SESSION['monstre'];

if ($monstre->afficherVisibilite() == false && $coffre->afficherOpen() == false) {
  $monstre->changerVisibilite();
  $coffre->ouvrirCoffre($personnage);
  $personnage->recupererCoffre($coffre);
  header('Location: ../controller/salle.php');
} else {
  header('Location: ../controller/start.php');
}

 ?>
