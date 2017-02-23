<?php

require '../functions/salle-function.php';

 ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <?php
      var_dump($salle);
      var_dump($monstre);
      var_dump($personnage);
      var_dump($porte);
      var_dump($coffre);

       ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <?php if ($monstre->afficherVisibilite() == true) {
        echo '<a href="../functions/attaquer.php"><button type="button" name="button" class="text-uppercase btn btn-primary">attaquer</button></a>';
        echo '<a href="../functions/sort.php"><button type="button" name="button" class="text-uppercase btn btn-primary">lancer un sort</button></a>';
        echo '<a href="../functions/fuir.php"><button type="button" name="button" class="text-uppercase btn btn-danger">fuir</button></a>';
      } else {
        echo '<button class="btn btn-default text-uppercase" disabled="disabled">attaquer</button>';
        echo '<button class="btn btn-default text-uppercase" disabled="disabled">lancer un sort</button>';
        echo '<button class="btn btn-default text-uppercase" disabled="disabled">fuir</button>';
      }
      if ($coffre->afficherVisibilite() == true && $coffre->afficherOpen() == false) {
        echo '<a href="../functions/ouvrircoffre.php"><button type="button" name="button" class="text-uppercase btn btn-warning">ouvrir un coffre</button></a>';
      } else {
        echo '<button class="btn btn-default text-uppercase" disabled="disabled">ouvrir un coffre</button>';
      }
      if ($coffre->afficherOpen() == false && $monstre->afficherVisibilite() == false) {
        echo '<a href="../functions/observer.php"><button type="button" name="button" class="text-uppercase btn btn-warning">observer</button></a>';
      } else {
        echo '<button class="btn btn-default text-uppercase" disabled="disabled">observer</button>';
      }

      if ($monstre->afficherMort() == true) {
        echo '<a href="../functions/ouvrirporte.php"><button type="button" name="button" class="text-uppercase btn btn-success">ouvrir la porte</button></a>';
      } else {
        echo '<button class="btn btn-default text-uppercase" disabled="disabled">ouvrir la porte</button>';
      }
      ?>
    </div>
  </div>
</div>
