<?php

require '../functions/salle-next-function.php';

 ?>

<div id="salle" class="container-fluid">
  <div class="row">
    <div class="personnage col-md-6">
      <div class="row">
        <div class="img text-center col-md-6">
          <?php echo $personnage->afficherImg(), '<br>'; ?>
        </div>
        <div class="infos col-md-6">
          <?php echo '<span class="title">',$personnage->afficherName(), '</span><br><br><em>Classe</em> : ', $personnage->afficherClasse(), '<br> <em>Points de Vie</em> : <span class="pdv">',  $personnage->afficherPv(),'</span>'; ?>
        </div>
      </div>
      <div class="row">
        <div class="inventaire text-center col-md-6">
          <h3 class="text-uppercase title">Votre inventaire :</h3>
          <?php echo $personnage->afficherInt(); ?>
        </div>
        <div class="caracteristiques text-center col-md-6">
          <h3 class="text-uppercase title">Vos caractéristiques :</h3>
          <div class="row">
            <div class="col-md-6">
              <p><em>Attaque : <br>
              Magie : <br>
              Défense : <br>
              Vitesse : <br>
              Experience : <br></em></p>
            </div>
            <div class="text-center col-md-6">
              <p> <?php echo $personnage->afficherAtk(),'<br>', $personnage->afficherMag(),'<br>', $personnage->afficherDef(),'<br>', $personnage->afficherSpeed(),'<br>', $personnage->afficherXp(); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="btn-gauche col-md-6">
          <?php
          if ($monstre->afficherVisibilite() == true && $monstre->afficherMort() == false) {
            echo '<a href="../functions/attaquer.php"><button type="button" name="button" class="text-uppercase btn btn-primary">attaquer</button></a>';
            echo '<a href="../functions/sort.php"><button type="button" name="button" class="text-uppercase btn btn-primary">lancer un sort</button></a>';
            echo '<a href="../functions/fuir.php"><button type="button" name="button" class="text-uppercase btn btn-danger">fuir</button></a>';
          } else {
            echo '<button class="btn btn-default text-uppercase" disabled="disabled">attaquer</button>';
            echo '<button class="btn btn-default text-uppercase" disabled="disabled">lancer un sort</button>';
            echo '<button class="btn btn-default text-uppercase" disabled="disabled">fuir</button>';
          }
           ?>
        </div>
        <div class="col-md-6">
          <?php if ($coffre->afficherVisibilite() == true && $coffre->afficherOpen() == false) {
            echo '<a href="../functions/ouvrircoffre.php"><button type="button" name="button" class="text-uppercase btn btn-warning">ouvrir un coffre</button></a>';
          } else {
            echo '<button class="btn btn-default text-uppercase" disabled="disabled">ouvrir un coffre</button>';
          } ?>
        </div>
      </div>
      <div class="ouvrir">
        <?php if ($monstre->afficherMort() == true) {
          echo '<a href="../functions/ouvrirporte.php"><button type="button" name="button" class="text-uppercase btn btn-success">ouvrir la porte</button></a>';
        } else {
          echo '<button class="btn btn-default text-uppercase" disabled="disabled">ouvrir la porte</button>';
        } ?>
      </div>
    </div>
    <div class="monstre col-md-6">
      <div class="row">
        <div class="infos text-center col-md-6">
          <?php echo '<span class="title">',$monstre->afficherName(), '</span><br><br><em>Classe</em> : ', $monstre->afficherClasse(), '<br> <em>Points de Vie</em> : <span class="pdv">',  $monstre->afficherPv(),'</span>'; ?>
        </div>
        <div class="text-center col-md-6">
          <?php echo $monstre->afficherImg(), '<br>'; ?>
        </div>
      </div>
      <div class="row">
        <div class="text-right col-md-6">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-uppercase title">caractéristiques :</h3>
            </div>
          </div>
          <div class="row">
            </div>
            <div class="col-md-6">
              <p> <?php echo $monstre->afficherAtk(),'<br>', $monstre->afficherMag(),'<br>', $monstre->afficherDef(),'<br>', $monstre->afficherSpeed(); ?></p>
            </div>
            <div class="col-md-6">
              <p><em>: Attaque <br>
                : Magie <br>
                : Défense  <br>
                : Vitesse  <br>
              </p>
            </div>
          </div>
        <div class="text-center col-md-6">
          <p>COFFRE</p>
        </div>
      </div>
      <div class="row">
        <div class="text-center col-md-12">
          <?php if ($coffre->afficherOpen() == false && $monstre->afficherVisibilite() == false) {
            echo '<a href="../functions/observer.php"><button type="button" name="button" class="text-uppercase btn btn-warning">observer</button></a>';
          } else {
            echo '<button class="btn btn-default text-uppercase" disabled="disabled">observer</button>';
          } ?>
        </div>
      </div>
    </div>
  </div>
</div>
