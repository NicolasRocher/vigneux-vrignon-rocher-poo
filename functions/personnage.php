
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
  protected $_speed;
  protected $_resume;
  protected $_stats;
  protected $_mort = false;

  public function frapper($victime){
    if ($victime->_def >= $this->_atk) {
      return;
    } else {
      $victime->_pv -= ($this->_atk - $victime->_def);
    }
  }
  public function lancerSort($victime){
    if ($victime->_def >= $this->_mag) {
      return;
    } else {
      $victime->_pv -= ($this->_mag - $victime->_def);
    }
  }
  public function ouvrirPorte() {
    $this->_xp += 1;
    header('Location: salles.php');
  }
  public function fuir($monstre) {
    $monstre->_mort = true;
    $this->_pv -= 5;
  }
  public function addXp($addxp) {
    $this->_xp = $this->_xp + $addxp;
  }
  public function recupererCoffre() {
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

  public function afficherMort() {
    return $this->_mort;
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
  public function afficherSpeed() {
    return $this->_speed;
  }
  public function afficherResume() {
    return $this->_resume;
  }
  public function afficherInt() {
    foreach ($this->_int as $items) {
      return '- ' . $items . '<br>';
    }
  }
  public function afficherAtouts() {
    return $this->_atouts;
  }
  public function afficherFaiblesses() {
    return $this->_faiblesses;
  }
  public function afficherXp() {
    return $this->_xp;
  }
  public function afficherCapacites() {
    if ($this->_capacites !== array()) {
      return $this->_capacites;
    } else {
      foreach ($this->_capacites as $keys => $capacite) {
        return $capacite[$keys];
      }
    }
  }

  public function mort() {
    $this->_mort = true;
  }

}

 ?>
