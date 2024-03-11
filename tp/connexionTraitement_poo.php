<?php


include("db.php");
include("UsersClass.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
        if(isset($_POST["email"],$_POST["password"])){

            if(empty($_POST["email"])||empty($_POST["password"]))  {


                echo "veuillez remplir tous les champs";

            }

           else{
            $connexion= new UsersClass($bdd);

           $connexion= $connexion->connexion($_POST["email"],$_POST["password"]);

            if($connexion){


                header("Location:infos.php");
                echo "connexion reussie";
            }


            else{

                echo "connexion echouée";
            }



           }


        }

}