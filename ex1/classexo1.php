<?php
// Nous créons une classe « Personnage ».
class user
{
  private $nom;
  private $prenom;

  public function __construct($nom, $prenom)
  {
     $this->nom = $nom;
     $this->prenom = $prenom;

  }

  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function Afficheuser()
  {
    echo "Je suis nommé $this->nom $this->prenom";
  }
}

    