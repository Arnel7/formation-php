<?php

include("db.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
        if(isset($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["password"])){

            if(empty($_POST["nom"])||empty($_POST["prenom"])||empty($_POST["email"])||empty($_POST["password"]))  {


                echo "veuillez remplir tous les champs";

            }

            else{
                $password=password_hash($_POST["password"],PASSWORD_DEFAULT);

                $insertion=$bdd->prepare("INSERT INTO users(nom,prenom,email,passwords) VALUES(?,?,?,?) ");
                $insertion=$insertion->execute(array($_POST["nom"],$_POST["prenom"],$_POST["email"],$password));

                echo "insertion effectuée";
               
              //  $insertion=$insertion->execute([$_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["password"]]);



            }



        }

}