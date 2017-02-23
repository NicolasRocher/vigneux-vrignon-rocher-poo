<?php

class Ranger extends Personnage {
  protected $_xp = 0;
  protected $_int = array();
  public $objet;

  public function __construct($name) {
    $this->_classe = 'Ranger';
    $this->_name = $name;
    $this->_atk += 40;
    $this->_mag += 0;
    $this->_def += 25;
    $this->_pv += 30;
    $this->_speed += 10;
    $this->_resume = 'Le <strong>Ranger</strong> est un personnage qui favorise la "ruse" plutôt que le combat.
    Mais s\'il doit se battre, alors ce sera au corps à corps ! Avec sa <span>vitalité</span> et sa
    <span>force</span>, le <strong>Ranger</strong> est un très bon personnage de melée.<br><br>
    ';
    $this->_atouts = '<span class="title">Atouts</span><br>Attaque<br>Vie<br>';
    $this->_faiblesses = '<span class="title">Faiblesses</span><br>Magie<br>Défense<br>';
    $this->_capacites = 'Attaquer à l\'épée';
  }
}

class Magicien extends Personnage {
  protected $_xp = 0;
  protected $_int = array();
  public $objet;


  public function __construct($name) {
    $this->_classe = 'Magicien';
    $this->_name = $name;
    $this->_atk += 0;
    $this->_mag += 50;
    $this->_def += 20;
    $this->_pv += 20;
    $this->_speed += 10;
    $this->_resume = 'Le <strong>Magicien</strong> est un personnage qui favorise la stratégie plutôt que le combat rapproché.
    Avec sa <span>magie</span> et sa <span>défense</span>, le <strong>Magicien</strong> est un très bon personnage à distance.<br><br>
    ';
    $this->_atouts = '<span class="title">Atouts</span><br>Magie<br>Défense<br>';
    $this->_faiblesses = '<span class="title">Faiblesses</span><br>Attaque<br>Vie<br>';
    $this->_capacites = 'Lancer un sortilège';
  }
}

class Barbare extends Personnage {
  protected $_xp = 0;
  protected $_int = array();
  public $objet;


  public function __construct($name) {
    $this->_classe = 'Barbare';
    $this->_name = $name;
    $this->_atk += 50;
    $this->_mag += 50;
    $this->_def += 50;
    $this->_pv += 50;
    $this->_speed += 10;
    $this->_resume = 'Le <strong>Barbare</strong> est un personnage qui favorise la le rentre dedans.
    Avec ses <span>capacités</span> toutes très élevées, le <strong>Paladin</strong> est un un personnage ambyvalent et innarétable.<br><br>
    ';
    $this->_atouts = '<span class="title">Atouts</span><br>Attaque<br>Défense<br>';
    $this->_faiblesses = '<span class="title">Faiblesses</span><br>Vie';
    $this->_capacites = array('Lancer un Sort', 'Attaquer à l\'épée');
  }

  public function afficherBarbareArray() {
    foreach($this->_capacites as $values) {
      echo $values.'<br>';
    }
  }
}


 ?>
