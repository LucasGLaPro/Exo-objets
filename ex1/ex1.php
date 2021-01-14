<!DOCTYPE html>
<html lang="en">
        <link rel="stylesheet" href="ex1.css">
    <body>

        <?php

            include "classexo1.php";
            $perso = new user("Michel", "Jammy");
            $perso->Afficheuser();

        ?>


        <table class="Object">
            <thead>
                <tr>
                    <th>User</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <p>- Nom : String</p>
                        <p>- Prenom : String</p>
                    </td>
                </tr>
                <tr>
                    <td>+ afficheUser() : void</td>
                </tr>
            </tbody>
        </table>

