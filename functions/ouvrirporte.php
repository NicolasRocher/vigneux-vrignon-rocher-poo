<?php

include 'functions.php';
session_start();

$personnage = $_SESSION['personnage'];
$porte = $_SESSION['porte'];

if ($porte->afficherOpenPorte() == false) {
  $porte->ouvrirPorte();
  $personnage->addXp(1);
  header('Location: ../controller/salle-next.php');
} else {
  header('Location: ../controller/start.php');
}

 ?>
