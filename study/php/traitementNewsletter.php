<?php
include("db.php");
include("InfosVisiteur.php");



if($_SERVER['REQUEST_METHOD']=="POST"){

    if(isset($_POST["email"])){

        if(empty($_POST["email"])){

            // on ne va pas effectuer l'insertion

            echo "veuillez fournir un email";



        }

        else{
                //ici on va effectuer l'insertion


                if(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
                    $infosVisiteur=new InfosVisiteur($bdd);
                    $insertion=$infosVisiteur->newsletter($_POST["email"]);

                  //  $infosVisiteur->newsletter($_POST["email"]);


                    //ici cest un email

                    echo "vous êtes abonné a notre newsletter";


                }
                else{

                    //ici ce nest pas un email


                    echo "veuillez fournir un email valide";

                }



        }

     

    }

  //  echo "je suis dan sle post";
}


?>