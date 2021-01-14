<?php
include "classexo4.php";
$perso1 = new user("Julien");
$perso1->Personnage();
?><br><?php
$perso2 = new user("Ghyselen");
$perso2->Personnage();
$perso2->Attaquer($perso1);
$perso2->defense($perso1);

?>
