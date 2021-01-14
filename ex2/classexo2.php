<?php
// Nous créons une classe « Personnage ».
class user
{
  private $_vie;
  private $_Speudo;

  public function __construct($vie, $Speudo)
  {
     $this->_vie = $vie;
     $this->_Speudo = $Speudo;

  }

  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Personnage()
  {
    echo "J'ai ".$this->_vie." de vie et je m'apelle  ".$this->_Speudo."  ";
  }
}

    