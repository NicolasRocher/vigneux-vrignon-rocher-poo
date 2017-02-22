<?php

class Porte {

  protected $_name;
  protected $_open;

  public function __construct() {
    $this->_name = 'bonjour';
    $this->_open = false;
  }


  public function ouvrirPorte() {
    $this->_open = true;
  }
}

 ?>
