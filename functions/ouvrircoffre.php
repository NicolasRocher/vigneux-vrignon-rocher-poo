<?php

include 'functions.php';
session_start();

$personnage = $_SESSION['personnage'];
$coffre = $_SESSION['coffre'];

if ($coffre->afficherOpen() == false) {
  $coffre->ouvrirCoffre($personnage);
  $personnage->recupererCoffre($coffre);
}

if ($personnage->afficherXp <= 1) {
  header('Location: ../controller/salle.php');
} else if ($personnage->afficherXp > 1) {
  header('Location: ../controller/salle-next.php');
} else {
  echo 'erreur';
}
 ?>
