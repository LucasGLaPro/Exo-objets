<?php

// Nous créons une classe « Personnage ».
class user
{
    public $basenom;
    public $MaBase;
    public $Vie;

  public function __construct($id)
  {
    $this->MaBase = new PDO('mysql:host=192.168.65.192; dbname=Objet-Lucas-Ex1; charset=utf8','lucas', 'lucas');
    $this->basenom = $this->MaBase->query("SELECT * FROM `personnage` WHERE `idperso` = $id")->fetch();
    $this->Vie = $this->basenom['vie'];

  }

  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Personnage()
  {
    echo "Le personnage ".$this->basenom['nom']." a ".$this->Vie." de vie<p></p>";
  }

  public function Attaquer($target)
  {
  
    echo "<p>".$this->basenom['nom']." attaque ".$target->basenom['nom']."</p>";


    $target->Vie -= 50;
    


    $this->Vie = $this->MaBase->query("UPDATE `personnage` SET `vie`=".$target->Vie." WHERE idperso = 1");
    echo "<p>".$target->basenom['nom']." a pris 50 de dégat </p>";
  }

  public function soigne()
  {
    echo "".$this->basenom['nom']." se soigne attention !";
    $this->Vie += 49;
    $this->Vie = $this->MaBase->query("UPDATE `personnage` SET `vie`=".$this->Vie." WHERE idperso = 1");
  }
}

    