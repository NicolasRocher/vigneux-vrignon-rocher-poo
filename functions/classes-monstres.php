<?php

class Gobelin extends Monstre {

  protected $_name = 'Gobelin';

  public function __construct($classe) {
    $this->_img = '<img src="" style="width:128px; height:128px;"/>';
    $this->_atk = 10;
    $this->_mag = 10;
    $this->_def = 10;
    $this->_pv = 100;
    $this->_speed += 5;
    $this->_classe = $classe;
  }
}

class MagicienNoir extends Monstre {

  protected $_name = 'Magicien Noir';

  public function __construct($classe) {
    $this->_img = '<img src="../img/magicienn.jpg" />';
    $this->_atk = 10;
    $this->_mag = 30;
    $this->_def = 30;
    $this->_pv = 50;
    $this->_speed += 5;
    $this->_classe = $classe;

  }
}

class Dragon extends Monstre {

  protected $_name = 'Dragon';

  public function __construct($classe) {
    $this->_img = '<img src="../img/dragon.jpg" />';
    $this->_atk = 100;
    $this->_mag = 100;
    $this->_def = 25;
    $this->_pv = 70;
    $this->_speed += 5;
    $this->_classe = $classe;

  }
}


 ?>
