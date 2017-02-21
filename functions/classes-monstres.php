<?php

class Gobelin extends Monstre {

  protected $_name = 'Gobelin';

  public function __construct() {
    $this->_atk = 10;
    $this->_mag = 10;
    $this->_def = 10;
    $this->_pv = 10;
  }
}

class MagicienNoir extends Monstre {

  protected $_name = 'Magicien Noir';

  public function __construct() {
    $this->_atk = 10;
    $this->_mag = 30;
    $this->_def = 30;
    $this->_pv = 50;
  }
}

class Dragon extends Monstre {

  protected $_name = 'Dragon';

  public function __construct() {
    $this->_atk = 100;
    $this->_mag = 100;
    $this->_def = 25;
    $this->_pv = 70;
  }
}


 ?>
