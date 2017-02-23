<?php

include 'functions.php';
session_start();

$personnage = $_SESSION['personnage'];
$monstre = $_SESSION['monstre'];

$personnage->fuir($monstre);

if($personnage->afficherPv() > 0) {
  if ($personnage->afficherXp <= 1) {
    header('Location: ../controller/salle.php');
  } else if ($personnage->afficherXp > 1) {
    header('Location: ../controller/salle-next.php');
  } else {
    echo 'erreur';
  }
} else {
  $personnage->mort();
  header('Location: ../views/loose.php');
}
var_dump($personnage);
var_dump($monstre);


 ?>
