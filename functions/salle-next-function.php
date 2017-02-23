<?php

require '../functions/functions.php';
session_start();

$personnage = $_SESSION['personnage'];

if ($personnage->afficherXp() == 1) {
  $salle = new Salle('Niveau 2', 'Souterrains');
  $_SESSION['salle'] = $salle;
  $porte = new Porte('Porte niveau 3');
  $_SESSION['porte'] = $porte;
  $coffre = new Coffre();
  $_SESSION['coffre'] = $coffre;
  $monstre = new MagicienNoir();
  $_SESSION['monstre'] = $monstre;
} else if ($personnage->afficherXp() == 2) {
  $salle = new Salle('Niveau 3', 'Cachots');
  $_SESSION['salle'] = $salle;
  $porte = new Porte('Porte niveau 4');
  $_SESSION['porte'] = $porte;
  $coffre = new Coffre();
  $_SESSION['coffre'] = $coffre;
  $monstre = new Gobelin();
  $_SESSION['monstre'] = $monstre;
} else if ($personnage->afficherXp() == 3) {
  $salle = new Salle('Niveau 4', 'Cimetière');
  $_SESSION['salle'] = $salle;
  $porte = new Porte('Porte niveau 5');
  $_SESSION['porte'] = $porte;
  $coffre = new Coffre();
  $_SESSION['coffre'] = $coffre;
  $monstre = new MagicienNoir();
  $_SESSION['monstre'] = $monstre;
} else if ($personnage->afficherXp() == 4) {
  $salle = new Salle('Niveau 6', 'Antre du Dragon');
  $_SESSION['salle'] = $salle;
  $porte = new Porte('Porte niveau la fin ..');
  $_SESSION['porte'] = $porte;
  $coffre = new Coffre();
  $_SESSION['coffre'] = $coffre;
  $monstre = new Dragon();
  $_SESSION['monstre'] = $monstre;
} else if ($personnage->afficherXp() >= 5){
  header('Location: win.php');
} else {
  echo 'erreur';
}

 ?>
