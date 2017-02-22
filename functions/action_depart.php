<?php

require 'functions.php';



if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['classe']) && !empty($_POST['classe'])) {

  if($_POST['classe'] == 'magicien') {
    $personnage = new Magicien($_POST['name']);
    var_dump($personnage);
    //header ('Location: ../views/start.php');
  } else if ($_POST['classe'] == 'paladin'){
    $personnage = new Paladin($_POST['name']);
    var_dump($personnage);
    //header ('Location: ../views/start.php');
  } else if ($_POST['classe'] == 'guerrier'){
    $personnage = new Guerrier($_POST['name']);
    var_dump($personnage);
    //header ('Location: ../views/start.php');
  } else {
    echo 'erreur';
  }

} else {
  echo 'veuillez remplir les champs requis';
}


 ?>
