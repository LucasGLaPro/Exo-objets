<?php

// Nous créons une classe « Personnage ».
class user
{
    public $basenom;
    public $MaBase;
    public $Vie;
    private $Tableau = Array();
  public function __construct($id)
  {
    $this->MaBase = new PDO('mysql:host=192.168.65.192; dbname=Objet-Lucas-Ex1; charset=utf8','lucas', 'lucas');
    $this->basenom = $this->MaBase->query("SELECT * FROM `personnage` WHERE `idperso` = $id")->fetch();
    $this->Vie = $this->basenom['vie'];

  }

  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Personnage()
  {
    array_push($tableau, $this->basenom['nom']);
    $this->basenom['nom'] = $tableau[1] ;
  }
}
