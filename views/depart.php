<?php

include 'header.php'

//session_start();

?>

<section id="depart" class="container-fluid">
  <div id="background" class="row">
    <div id="creation" class="col-md-12">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h2 class="text-uppercase text-center">créer<br> votre personnage !</h2>
        </div>
      </div>
      <div class="row">
        <div id="formulaire" class="col-md-10 col-md-offset-1">
          <form class="formulaire" action="functions/action_depart.php" method="POST">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <input type="text" name="name" placeholder="Pseudo">
              </div>
            </div>
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <select name="classe">
                  <option value="guerrier">Guerrier</option>
                  <option value="magicien">Magicien</option>
                  <option value="paladin">Paladin</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <input class="btn-creer text-uppercase" type="submit" name="" value="Continuer">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'footer.php' ?>
