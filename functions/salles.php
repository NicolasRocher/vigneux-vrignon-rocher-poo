<?php

class Salle {
  // valeurs à modifier
  private $_title = 0;
  private $_lieu = '';
  private $_coffres = 0;
  private $_monstres = 0;

  public function __construct($title, $lieu) {
    $this->_title = $title;
    $this->_lieu = $lieu;
  }


}
 ?>
