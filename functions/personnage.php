
<?php

require 'classes.php';
require 'monstres.php';

class Personnage {


  protected $_name;
  protected $_atk;
  protected $_mag;
  protected $_def;
  protected $_pv;
  protected $_xp;

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

 ?>
