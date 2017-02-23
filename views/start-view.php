<?php

require '../functions/start-function.php';

 ?>

<div id="start" class="container-fluid">
  <div class="row">
    <div class="profil col-md-4 col-md-offset-1">
      <div id="row-top" class="row">
        <div class="profil-img col-md-4">
          <?php if($personnage->afficherClasse() == 'Magicien') {
            echo '<img src="../img/magicien.jpg" />';
          } else if ($personnage->afficherClasse() == 'Ranger') {
            echo '<img src="../img/ranger.jpg" />';
          } else if ($personnage->afficherClasse() == 'Barbare') {
            echo '<img src="../img/barbare.jpg" />';
          } else {
            echo 'Image de classe';
          }?>
        </div>
        <div class="infos col-md-8">
          <h3><span class="profil-title">Vos informations :</span></h3>
          <p>
            <?php echo '<strong>Pseudo :</strong> ', $personnage->afficherName() ,'<br><strong>Classe :</strong> ', $personnage->afficherClasse();
            ?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="resume col-md-10 col-md-offset-1">
          <h3><?php echo $personnage->afficherClasse(); ?></h3>
          <p><?php echo $personnage->afficherResume(); ?></p>
          <div class="row">
            <div class="col-md-6">
              <p><?php echo $personnage->afficherAtouts(); ?></p>
            </div>
            <div class="col-md-6">
              <p><?php echo $personnage->afficherFaiblesses(); ?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h3>Les capacités du <?php echo $personnage->afficherClasse(); ?></h3>
              <p><?php echo $personnage->afficherCapacites(); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-md-offset-1">
      <a href="salle.php"><button type="button" name="button" class="text-uppercase">commencer</button></a>
    </div>
  </div>
</div>
