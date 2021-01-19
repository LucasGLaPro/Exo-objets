<?php
include "classexo9.php";

$MaBase = new PDO('mysql:host=192.168.65.192; dbname=Objet-Lucas-Ex1; charset=utf8','lucas', 'lucas');
$ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `personnage` ORDER BY nom ASC");


echo "<form action='' method='post'> <select name='nom'>";
while($TableauDunTuple = $ObjetResultatDeRequeteBrut->fetch())
    echo "<option value='".$TableauDunTuple['idperso']."'>".$TableauDunTuple['nom']."</option>";
echo "</select>";
echo "<br><input type='submit' value='valider' style='width:130px'></form>";



if(isset($_POST["nom"])) {
$perso1 = new user($_POST["nom"]);
$perso1->Personnage();
echo"Le perso ".$TableauDunTuple['nom']."a ete supr";
}else{
    echo"";
}
