<?php
// Nous créons une classe « Personnage ».
class user
{
  private $_vie = 100;
  private $_Speudo;

  public function __construct($Speudo)
  {
     $this->_Speudo = $Speudo;

  }

  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Personnage()
  {
    echo "J'ai ".$this->_vie." de vie et je m'apelle  ".$this->_Speudo."  ";
  }
}

    