<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 12/11/2018
 * Time: 11:33
 */
//var_dump($_POST);
if ((int)$_POST["nombre_sandwichs"]<=0){echo "Nombre de sandwitchs invalide";}
else {
    if ((int)$_POST["nombre_sandwichs"]<10) {
        $prix=4*$_POST["nombre_sandwichs"];
    }
    else {$prix=(4*$_POST["nombre_sandwichs"]*9)/10;}
    $c=0;
    $chaine=" ";
    if (isset($_POST["ingredient1"])) {$c++;$chaine=$chaine.$_POST["ingredient1"];}
    if (isset($_POST["ingredient2"])) {$c++;$chaine=$chaine." ".$_POST["ingredient2"];}
    if (isset($_POST["ingredient3"])) {$c++;$chaine=$chaine." ".$_POST["ingredient3"];}
    echo " Bonjour Mme/Mr ".$_POST["prenom"]." ".$_POST["nom"]."<br>";
    echo "Vous avez commandé ".$_POST["nombre_sandwichs"]." sandwichs ".$_POST["types"]."<br>";
    if ($c>0) {echo "Avec les suppléments suivants : ".$chaine."<br>";}
    echo "Le montant de la commande est de :  ".$prix." DT <br>";
    echo    " La livraison sera faite à l'adresse suivante:  ".$_POST["adresse"]."<br>";
}
?>