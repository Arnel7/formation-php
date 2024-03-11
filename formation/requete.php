<?php
include("db.php");

/*
$nom="LAWSON";
$prenom="Arnel";
$age=23;



$insertion=$bdd->prepare("INSERT INTO utilisateurs(nom,prenom,age) VALUES (?,?,?) ");
$insertion=$insertion->execute([$nom,$prenom,$age]);

if($insertion){
    echo "insertion effectué";
}


*/


$selection=$bdd->query("SELECT * FROM utilisateurs");



while($resultat=$selection->fetch()){

echo $resultat["nom"] ."<br/>";

}







