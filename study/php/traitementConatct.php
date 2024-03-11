<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

    $infos="On vient de rcevoir un email de : ";
    $infos.=$_POST["nom"];
    $infos.=" dont l'email est " .$_POST["email"] ." et le numero de télephone est " .$_POST["phone"] ." ";

    $infos.=" son message est ";

    $infos.=$_POST["message"];

    // L'URL où envoyer la requête POST
$url ="https://liberaservice.com/formationphp/mail.php";

// Les données à envoyer via POST
$data = array(
    'message' => $infos,
    
);

// Initialiser une session cURL
$ch = curl_init($url);

// Configurer les options de cURL pour une requête POST
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Pour retourner le résultat de la requête
curl_setopt($ch, CURLOPT_POST, true); // Indiquer que la requête est de type POST
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); // Les données POST à envoyer

// Exécuter la session cURL
$response = curl_exec($ch);

// Vérifier s'il y a eu des erreurs
if(curl_errno($ch)) {
    echo 'Erreur cURL : ' . curl_error($ch);
}

// Fermer la session cURL
curl_close($ch);

// Afficher la réponse de la requête
echo $response;


    

   // echo $infos;


}