<?php

include 'header.php'

//session_start();

?>

<section id="depart" class="container-fluid">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <form class="" action="functions/action_depart.php" method="POST">
        <input type="text" name="name" placeholder="Pseudo">
        <select name="classe">
          <option value="guerrier">Guerrier</option>
          <option value="magicien">Magicien</option>
          <option value="paladin">Paladin</option>
        </select>
        <input type="submit" name="" value="Continuer">
      </form>
    </div>
  </div>
</section>


<?php include 'footer.php' ?>
