<?php
// Nous créons une classe « Personnage ».
class user
{
    private $player;
    private $vie;
    private $MaBase;


  public function __construct($dataJoueur,$vie)
  {
    $this->player =$dataJoueur;
    $this->vie =$vie;
    $this->MaBase = new PDO('mysql:host=192.168.65.192; dbname=Objet-Lucas-Ex1; charset=utf8','lucas', 'lucas');
  }

  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Personnage()
  {
      $nom = $this->player;
      $viee = $this->vie;
      $this->MaBase->query("INSERT INTO `personnage`(`nom`, `vie`) VALUES ('$nom','$viee')");
      
      

    




  }
}
