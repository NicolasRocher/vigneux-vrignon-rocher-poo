<?php

include 'functions.php';
session_start();

$personnage = $_SESSION['personnage'];
$monstre = $_SESSION['monstre'];
$coffre = $_SESSION['coffre'];

if ($monstre->afficherVisibilite() == false && $coffre->afficherOpen() == false) {
  $monstre->changerVisibilite();
  $coffre->ouvrirCoffre($personnage);
  $personnage->recupererCoffre($coffre);
  header('Location: ../controller/salle.php');
} else {
  header('Location: ../controller/start.php');
}

 ?>
