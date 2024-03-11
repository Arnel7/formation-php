<?php

include("../db.php");
include("UsersClassApi.php");



if($_SERVER["REQUEST_METHOD"]=="GET"){

    $user=new UsersClassApi($bdd);


    $reponse=array();


    
$authorizationHeader=null;


// Vérifier si le header 'Authorization' est présent
if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
    // Récupérer la valeur du header 'Authorization'
    $authorizationHeader = $_SERVER['HTTP_AUTHORIZATION'];
 //   echo "Header Authorization : " . $authorizationHeader;
} elseif (function_exists('apache_request_headers')) {
    // Une alternative pour les serveurs utilisant Apache, si HTTP_AUTHORIZATION n'est pas directement disponible
    $requestHeaders = apache_request_headers();
    // Recherche de l'en-tête 'Authorization' dans les en-têtes de la requête, insensible à la casse
    $authorizationHeader = isset($requestHeaders['Authorization']) ? $requestHeaders['Authorization'] : (isset($requestHeaders['authorization']) ? $requestHeaders['authorization'] : null);
    if ($authorizationHeader !== null) {
    //    echo "Header Authorization : " . $authorizationHeader;
    } else {
    //    echo "Le header Authorization n'est pas présent.";
    }
} else {
  //  echo "Le header Authorization n'est pas présent.";
}
  


        if($authorizationHeader!=null){

            $partie=explode(' ',$authorizationHeader);


                $restant=array_slice($partie,1);

                $token=implode("",$restant);


                $nombre=$user->siMembreToken($token);


                if($nombre>0){
                    $infos=$user->infosUserToken($token);
                    $resultat=$infos->fetch();
                    $reponse["erreur"]=false;
                    $reponse["message"]="connexion reussie";

                    $reponse["email"]=$resultat["email"];
                    $reponse["nom"]=$resultat["nom"];
                    $reponse["prenom"]=$resultat["prenom"];
                    $reponse["token"]=$resultat["token"];

    
                
    
    
    
                }
    
                else{
    
                    $reponse["erreur"]=true;
    
                    $reponse["message"]="le token  n'existe pas";
    
    
    
    
                }
    



        }

        else{

                 $reponse["erreur"]=true;
    
                    $reponse["message"]="le token  n'existe pas ou n'a pas été fourni";
    

        }
  

//$reponse["token"]=$authorizationHeader;








echo json_encode($reponse);



}

   
