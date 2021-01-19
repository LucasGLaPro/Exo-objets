<?php

// Nous créons une classe « Personnage ».
class user
{
    public $player;


  public function __construct($dataJoueur)
  {
    $this->player =$dataJoueur;
  }

  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Personnage()
  {
    echo "<p>Le joueur n°".$this->player['idperso']." ".$this->player['nom']." posséde ".$this->player['vie']." PV !";
  }
}
