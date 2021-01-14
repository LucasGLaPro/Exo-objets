<?php

// Nous créons une classe « Personnage ».
class user
{
    public $basenom;

  public function __construct($id)
  {
    $MaBase = new PDO('mysql:host=192.168.65.192; dbname=Objet-Lucas-Ex1; charset=utf8','lucas', 'lucas');
    $this->basenom = $MaBase->query("SELECT * FROM `personnage` WHERE `idperso` = $id")->fetch();

  }

  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Personnage()
  {
    echo "Le personnage ".$this->basenom['nom']." a ".$this->basenom['vie']." de vie<p></p>";
  }

}

    