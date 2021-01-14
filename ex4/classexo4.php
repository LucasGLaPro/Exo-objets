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

  public function Attaquer($target)
  {

    echo "<p>".$this->_Speudo." attaque ".$target->_Speudo."</p>";
    $target->_vie = $target->_vie - 50;
    echo "<p>".$target->_Speudo." a pris 50 de dégat </p>";
  }


  public function defense($deff)
  {
    
    echo "<p>".$deff->_Speudo." riposte </p>";
    $this->_vie = $this->_vie - 50;
    echo"<p>Ghyselen a maintenant ".$this->_vie."</p>";

  }
}

    