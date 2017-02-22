<?php

class Guerrier extends Personnage {

  public function __construct($name) {
    $this->_classe = 'Guerrier';
    $this->_name = $name;
    $this->_atk += 40;
    $this->_def += 25;
    $this->_pv += 30;
  }
}

class Magicien extends Personnage {

  public function __construct($name) {
    $this->_classe = 'Magicien';
    $this->_name = $name;
    $this->_mag += 50;
    $this->_def += 20;
    $this->_pv += 20;
  }
}

class Paladin extends Personnage {

  public function __construct($name) {
    $this->_classe = 'Paladin';
    $this->_name = $name;
    $this->_atk += 50;
    $this->_mag += 50;
    $this->_def += 50;
    $this->_pv += 50;
  }
}


 ?>
