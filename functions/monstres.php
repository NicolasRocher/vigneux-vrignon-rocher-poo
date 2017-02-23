<?php

require 'classes-monstres.php';

class Monstre {

  protected $_name;
  protected $_atk;
  protected $_mag;
  protected $_def;
  protected $_pv;
  protected $_visibilite = false;

  public function afficherVisibilite() {
    return $this->_visibilite;
  }
  public function changerVisibilite() {
    $this->_visibilite = true;
  }

}


 ?>
