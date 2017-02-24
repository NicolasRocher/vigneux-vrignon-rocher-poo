<?php require '../functions/navbar-function.php' ?>

<div id="navbar" class="container-fluid">
  <div class="row">
    <div class="navbar-title col-md-6">
      <h1> <?php echo $salle->afficherTitle(); ?></h1>
    </div>
    <div class="icon col-md-3 col-md-offset-3">
      <h2> <?php echo $salle->afficherLieu(); ?></h2>
    </div>
  </div>
</div>
