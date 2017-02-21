
<?php


class Personnage {

  public function frapper($monstreAttaque){
    $monstreAttaque->_pv -= $this->_atk;
  }
  public function lancerSort($monstreAttaque){
    $monstreAttaque->_pv -= $this->_mag;
  }
  public function ouvrirPorte() {
    $this->_xp += 1;
    //header('Location: salles.php');
  }
  public function ouvrirCoffre($coffreOuvert) {
    $coffreOuvert->_objet = $this->_wp; // ne permet que l'arme, pas la potion.
  }
  public function fuir() {
    $this->_pv = $this->_hp - 5;
  }

  public function afficherName() {
    return $this->_name;
  }
  public function afficherPv() {
    return $this->_pv;
  }
  public function afficherAtk() {
    return $this->_atk;
  }
  public function afficherMag() {
    return $this->_mag;
  }
  public function afficherDef() {
    return $this->_def;
  }
  public function afficherXp() {
    return $this->_xp;
  }
  public function afficherWeapon() {
    return $this->_weapon;
  }

}

class Guerrier extends Personnage {

  protected $_name;
  protected $_atk = 50;
  protected $_mag = 0;
  protected $_def = 30;
  protected $_pv = 50;
  protected $_xp = 0;

  public function __construct($name) {
    $this->_name = $name;
  }
}
class Magicien extends Personnage {

  protected $_name;
  protected $_atk = 0;
  protected $_mag = 50;
  protected $_def = 15;
  protected $_pv = 40;
  protected $_xp = 0;

  public function __construct($name) {
    $this->_name = $name;
  }
}
class Paladin extends Personnage {

  protected $_name;
  protected $_atk = 50;
  protected $_mag = 50;
  protected $_def = 40;
  protected $_pv = 60;
  protected $_xp = 0;

  public function __construct($name) {
    $this->_name = $name;
  }
}

Class Monstre extends Personnage {

  protected $_name = 'Gobelin';
  protected $_pv = 30;
  protected $_def = 10;

}


$guerrier = new Guerrier('Nico');
$magicien = new Magicien('Rémi');
$paladin = new Paladin('Roland');

$paladin->frapper($guerrier);
$magicien->lancerSort($paladin);
$guerrier->frapper($magicien);

echo 'La vie du paladin est de : ', $paladin->afficherPv() ;
echo 'La vie du magicien est de : ', $magicien->afficherPv() ;
echo 'La vie du guerrier est de : ', $guerrier->afficherPv() ;


 ?>
