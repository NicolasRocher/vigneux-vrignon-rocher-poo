<?php

  class Coffre {

    private $_name;
    private $_objet = array(1,2,3);
    private $_nameObjet;

    public function __construct() {
      $this->_objet = array_rand($this->_objet, 1);
      if ($this->_objet == 0) {
        $this->_name = 'Coffre en Or';
        $this->_nameObjet = 'Bâton de Magicien';
      } else if ($this->_objet == 1) {
        $this->_name = 'Coffre en Argent';
        $this->_nameObjet = 'Epée de Lave';
      } else if ($this->_objet == 2) {
        $this->_name = 'Coffre en Bois';
        $this->_nameObjet = 'Potion';
      } else {
        echo "une erreur c'est produite.";
      }
    }


  }

 ?>
