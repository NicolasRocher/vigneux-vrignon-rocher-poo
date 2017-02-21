<?php
require 'personnage.php';

class Monstre extends Personnage {



}

class Gobelin extends Monstre {

  protected $_name = 'Gobelin';

  public function __construct() {
    $this->_atk = 10;
    $this->_mag = 10;
    $this->_def = 10;
    $this->_pv = 10;
  }

}

$test = new Gobelin();
var_dump($test);


 ?>
