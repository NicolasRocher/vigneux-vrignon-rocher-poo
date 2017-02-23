<?php

class Porte {

  protected $_name;
  protected $_open;

  public function __construct($name) {
    $this->_name = $name;
    $this->_open = false;
  }

  public function afficherOpenPorte() {
    return $this->_open;
  }

  public function ouvrirPorte() {
    $this->_open = true;
  }
}

 ?>
