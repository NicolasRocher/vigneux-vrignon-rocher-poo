<?php

include '../functions/functions.php';
session_start();

$personnage = $_SESSION['personnage'];

$salle = new Salle('Niveau 1','Entrée');
$_SESSION['salle'] = $salle;
$monstre = new Gobelin();
$_SESSION['monstre'] = $monstre;
$coffre = new Coffre();
$_SESSION['coffre'] = $coffre;
 ?>
