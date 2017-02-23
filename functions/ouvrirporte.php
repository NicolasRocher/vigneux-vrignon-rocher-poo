<?php

include 'functions.php';
session_start();

$personnage = $_SESSION['personnage'];
$porte = $_SESSION['porte'];

if ($porte->afficherOpenPorte() == false) {
  $personnage->addXp(1);
  $porte->ouvrirPorte();
  header('Location: ../controller/salle-next.php');
} else {
  header('Location: ../controller/salle.php');
}

 ?>
