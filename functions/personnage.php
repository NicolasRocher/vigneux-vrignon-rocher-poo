
<?php


class Personnage {

  public function frapper($monstreAttaque){
    $monstreAttaque->_pv -= $this->_atk;
  }
  public function lancerSort($monstreAttaque){
    $monstreAttaque->_pv -= $this->_mag;
  }
  public function ouvrirPorte() {
    $this->_lv = $this->_lv +1; // a voir
  }
  public function ouvrirCoffre($coffreOuvert) {
    $coffreOuvert->_objet = $this->_wp; // ne permet que l'arme, pas la potion.
  }
  public function fuir() {
    $this->_pv = $this->_hp - 5;
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

}



$guerrier = new Guerrier('Warrior');
var_dump($guerrier );

$magicien = new Magicien('Mago');
var_dump($magicien);

$paladin = new Paladin('Paladum');
var_dump($paladin);

$monstre = new Monstre();
$magicien->lancerSort($monstre);
var_dump($monstre);

// au clic sur le boutton 'jouer' :
//$perso = new Personnage;

// au clic du boutton 'attaquer' :
//$perso->frapper($monstre);

// au clic du boutton 'lancer un sort' :
//$perso->lancerSort($monstre);

// au clic du boutton 'ouvrir coffre' :
//$perso->ouvrirCoffre($coffre);

// au clic du boutton 'ouvrir porte' :
//$perso->ouvrirPorte($porte);

 ?>
