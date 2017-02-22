
<?php

require 'classes.php';
require 'monstres.php';

class Personnage {


  protected $_classe;
  protected $_name;
  protected $_atk;
  protected $_mag;
  protected $_def;
  protected $_pv;
  protected $_xp;
  protected $_int = array();
  public $objet;

  public function frapper($monstreAttaque){
    $monstreAttaque->_pv -= $this->_atk;
  }
  public function lancerSort($monstreAttaque){
    $monstreAttaque->_pv -= $this->_mag;
  }
  public function ouvrirPorte() {
    $this->_xp += 1;
    header('Location: salles.php');
  }
  public function ouvrirCoffre($coffreOuvert) {
    $coffreOuvert->_objet = $this->_wp; // ne permet que l'arme, pas la potion.
  }
  public function fuir() {
    $this->_pv = $this->_hp - 5;
  }
  public function addXp($addxp) {
    $this->_xp = $this->_xp + $addxp;
  }

  public function ajouterBonus() {
    if ($this->objet == true) {
      if ($this->objet !== 'Potion' ) {
        if (in_array($this->objet, $this->_int)) {
          if ($this->objet == 'Bâton de Magicien') {
            $this->_mag += 15;
          } else if ($this->objet == 'Epée de Lave') {
            $this->_atk += 10;
          } else {
            echo 'erreur';
          }
        } else {
          if ($this->objet == 'Bâton de Magicien') {
            array_push($this->_int, $this->objet);
            $this->_mag += 15;
          } else if ($this->objet == 'Epée de Lave') {
            array_push($this->_int, $this->objet);
            $this->_atk += 10;
          } else {
            echo 'erreur';
          }
        }
      } else if ($this->objet == 'Potion') {
        array_push($this->_int, $this->objet);
      } else {
        echo 'erreur';
      }
    }
  }

  public function afficherClasse() {
    return $this->_classe;
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
