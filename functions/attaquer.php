<?php

include 'functions.php';
session_start();

$personnage = $_SESSION['personnage'];
$monstre = $_SESSION['monstre'];



while ($monstre->afficherPv() > 0 && $personnage->afficherPv() > 0) {
  if ($monstre->afficherSpeed() >= $personnage->afficherSpeed()) {
    $monstre->frapper($personnage);
    $personnage->frapper($monstre);
  } else {
    $personnage->frapper($monstre);
    $monstre->frapper($personnage);
  }
}
if($personnage->afficherPv() > 0) {
  $monstre->mort();
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
