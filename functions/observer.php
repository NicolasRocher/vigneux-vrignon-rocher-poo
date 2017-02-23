<?php

include 'functions.php';
session_start();

$personnage = $_SESSION['personnage'];
$monstre = $_SESSION['monstre'];
$coffre = $_SESSION['coffre'];

if ($monstre->afficherVisibilite() == false && $coffre->afficherOpen() == false) {
  $monstre->changerVisibilite();
  $coffre->changerVisibilite();
}

if ($personnage->afficherXp <= 1) {
  header('Location: ../controller/salle.php');
} else if ($personnage->afficherXp > 1) {
  header('Location: ../controller/salle-next.php');
} else {
  echo 'erreur';
}
 ?>
