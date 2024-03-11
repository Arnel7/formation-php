<?php


include("../db.php");
include("UsersClassApi.php");



if($_SERVER["REQUEST_METHOD"]=="GET"){

    $user=new UsersClassApi($bdd);


    $reponse=array();

    if(isset($_GET["email"],$_GET["password"])){

        $nombre=$user->siMembre($_GET["email"]);

            if($nombre>0){
                $infos=$user->infosUser($_GET["email"]);
                $resultat=$infos->fetch();

                    $connexion=$user->connexion($_GET["password"],$resultat["passwords"]);

                        if($connexion){
                                    // connexion reussie

                                    $reponse["erreur"]=false;
                                    $reponse["message"]="connexion reussie";

                                    $reponse["email"]=$resultat["email"];
                                    $reponse["nom"]=$resultat["nom"];
                                    $reponse["prenom"]=$resultat["prenom"];
                                    $reponse["token"]=$resultat["token"];



                                   

                        }

                        else{
                            $reponse["erreur"]=true;

                            $reponse["message"]="les idantifiants sont incorrects";




                            //connexion impossible
                        }



            }

            else{

                $reponse["erreur"]=true;

                $reponse["message"]="l'email n'existe pas";




            }



    }
    else{


        
        $reponse["erreur"]=true;
        $reponse["message"]="il manque un parametre";


    }


    
    echo json_encode($reponse);

}
       