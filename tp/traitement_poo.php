<?php

include("db.php");

include("UsersClass.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
        if(isset($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["password"])){

            if(empty($_POST["nom"])||empty($_POST["prenom"])||empty($_POST["email"])||empty($_POST["password"]))  {


                echo "veuillez remplir tous les champs";

            }

            else{
                $password=password_hash($_POST["password"],PASSWORD_DEFAULT);

               

               $inscription= new UsersClass($bdd);

               $inscription->inscription($_POST["nom"],$_POST["prenom"],$_POST["email"],$password);




                echo " oui touit s'est bien passé";
               
             

            }



        }

}