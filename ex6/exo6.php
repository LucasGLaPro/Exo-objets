<?php
include "classexo6.php";
$perso1 = new user(1);
$perso1->Personnage();

$perso2 = new user(2);
$perso2->Personnage();

$perso3 = new user(5);
$perso3->Personnage();

$perso2->Attaquer($perso1);
$perso1->soigne();
?>
