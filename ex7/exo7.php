<?php
include "classexo7.php";
$Players = array();
$MaBase = new PDO('mysql:host=192.168.65.192; dbname=Objet-Lucas-Ex1; charset=utf8','lucas', 'lucas');
                    $query = $MaBase->query("SELECT * FROM personnage");

                while($userArray = $query->fetch())
                    array_push($Players, new user($userArray));
            
                foreach($Players as $value) 
                    $value->Personnage();

?>