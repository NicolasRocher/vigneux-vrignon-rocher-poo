
<?php


class Personnage {

  private $_atk = 20;
  private $_mag = 10;
  private $_def = 5;
  private $_hp = 50;
  private $_wp = false;
  private $_lv = 0;


  public function frapper($monstreAttaque){
    $monstreAttaque->_hp -= $this->_atk;
  }
  public function lancerSort($monstreAttaque){
    $monstreAttaque->_hp -= $this->_mag;
  }

  public function passerPorte() {
    $this->_lv = $this->_lv +1; // a voir
  }

  public function ouvrirCoffre($coffreOuvert) {
    $coffreOuvert->_objet = $this->_wp; // ne permet que l'arme, pas la potion.
  }

  public function fuir() {
    $this->_hp = $this->_hp - 5;
  }

}



 ?>
