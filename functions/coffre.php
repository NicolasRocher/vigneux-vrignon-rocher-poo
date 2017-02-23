<?php

  class Coffre {

    protected $_name;
    protected $_objet = array(1,2,3);
    protected $_nameObjet;
    protected $_bonus;
    protected $_open = false;

    public function __construct() {
      $this->_objet = array_rand($this->_objet, 1);
      if ($this->_objet == 0) {
        $this->_name = 'Coffre en Or';
        $this->_nameObjet = 'Bâton de Magicien';
        $this->_bonus = 15;
      } else if ($this->_objet == 1) {
        $this->_name = 'Coffre en Argent';
        $this->_nameObjet = 'Epée de Lave';
        $this->_bonus = 10;
      } else if ($this->_objet == 2) {
        $this->_name = 'Coffre en Bois';
        $this->_nameObjet = 'Potion';
        $this->_bonus = 5;
      } else {
        echo "une erreur c'est produite.";
      }
    }

    public function afficherOpen() {
      return $this->_open;
    }


    public function ouvrirCoffre($perso) {
      $this->_open = true;
      $perso->objet = $this->_nameObjet;
    }


  }

 ?>
