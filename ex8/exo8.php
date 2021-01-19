<?php
include "classexo8.php";
?>
Ajoutez un personnage
<form action="" method="post">
Nom:<input type="text" name="prenom" required/>
Vie:<input type="number" name="mdp" required/>
<input type="submit" name="Valider" />
<button type="submit" name="Reset">Reset</button></form>

<?php
if(isset($_POST["prenom"])) {
$perso1 = new user($_POST["prenom"],$_POST["mdp"]);
$perso1->Personnage();
echo"Personnage ajouté";
}else{
    echo"";
}
