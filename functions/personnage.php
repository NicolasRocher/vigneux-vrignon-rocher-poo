
<?php


class Personnage {

  private $_name;

  public function frapper($monstreAttaque){
    $monstreAttaque->_hp -= $this->_atk;
  }
  public function lancerSort($monstreAttaque){
    $monstreAttaque->_hp -= $this->_mag;
  }

  public function ouvrirPorte() {
    $this->_lv = $this->_lv +1; // a voir
  }

  public function ouvrirCoffre($coffreOuvert) {
    $coffreOuvert->_objet = $this->_wp; // ne permet que l'arme, pas la potion.
  }

  public function fuir() {
    $this->_hp = $this->_hp - 5;
  }

}

class Classe extends Personnage {

  public function __construct($name) {
    $this->_name = $name;
  }
}

$test = new Classe('Essai');
var_dump($test);

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
