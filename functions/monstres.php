<?php

require 'classes-monstres.php';

class Monstre extends Personnage{

  protected $_visibilite = false;

  public function afficherVisibilite() {
    return $this->_visibilite;
  }
  public function changerVisibilite() {
    $this->_visibilite = true;
  }
  
}


 ?>
