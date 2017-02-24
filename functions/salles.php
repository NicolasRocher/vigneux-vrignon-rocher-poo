<?php

class Salle {
  // valeurs à modifier
  private $_title;
  private $_lieu;

  public function __construct($title, $lieu) {
    $this->_title = $title;
    $this->_lieu = $lieu;
  }

  public function afficherTitle() {
    return $this->_title;
  }
  public function afficherLieu() {
    return $this->_lieu;
  }


}
 ?>
