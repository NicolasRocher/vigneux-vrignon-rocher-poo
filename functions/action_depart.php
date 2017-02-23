<?php

session_start();

require 'functions.php';


if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['classe']) && !empty($_POST['classe'])) {

  if($_POST['classe'] == 'magicien') {
    $personnage = new Magicien($_POST['name']);
    $_SESSION['personnage'] = $personnage;
    var_dump($personnage);
    header ('Location: ../controller/start.php');
  } else if ($_POST['classe'] == 'barbare'){
    $personnage = new Barbare($_POST['name']);
    $_SESSION['personnage'] = $personnage;
    var_dump($personnage);
    header ('Location: ../controller/start.php');
  } else if ($_POST['classe'] == 'ranger'){
    $personnage = new Ranger($_POST['name']);
    $_SESSION['personnage'] = $personnage;
    var_dump($personnage);
    header ('Location: ../controller/start.php');
  } else {
    echo 'erreur';
  }

} else {
  echo 'veuillez remplir les champs requis';
}


 ?>
