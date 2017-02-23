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
       ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">

      <a href="../functions/observer.php"><button type="button" name="button" class="text-uppercase">observer</button></a>
      <a href="attaquer.php"><button type="button" name="button" class="text-uppercase">attaquer</button></a>
      <a href="sort.php"><button type="button" name="button" class="text-uppercase">lancer un sort</button></a>
      <a href="fuir.php"><button type="button" name="button" class="text-uppercase">fuir</button></a>
      <a href="../functions/ouvrirporte.php"><button type="button" name="button" class="text-uppercase">ouvrir la porte</button></a>


    </div>
  </div>
</div>
