<?php

include("../db.php");
include("UsersClassApi.php");


if($_SERVER["REQUEST_METHOD"]=="GET"){


    $reponse=array();

    if(isset($_GET["email"],$_GET["password"],$_GET["nom"],$_GET["prenom"])){
        // ici je fais le traitement

        $password=password_hash($_GET["password"],PASSWORD_DEFAULT);

        $inscription=new UsersClassApi($bdd);

        $inscription->inscription($_GET["nom"],$_GET["prenom"],$_GET["email"],$password);

        $reponse["erreur"]=false;
        $reponse["message"]="inscription effectué";



    }

    else{

        // ici je vais indiquer qu'il  a une erreur

        $reponse["erreur"]=true;
        $reponse["message"]="il manque un parametre";

    }

    echo json_encode($reponse);

}


