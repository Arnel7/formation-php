<?php

// L'URL de l'API
$url = "http://localhost/formation/api/infos.php";

// Les données à envoyer en POST, encodées en JSON
$data = json_encode(array(
    "key" => "value",
  
));

// Initialisation de cURL
$ch = curl_init($url);

// Configuration des options de cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Retourne la réponse au lieu de l'afficher
curl_setopt($ch, CURLOPT_POST, true); // Méthode de la requête : POST
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // Corps de la requête
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json', // Type de contenu envoyé
    'Accept: application/json', // Type de contenu accepté en dhhdhréponse
    'Authorization: Bearer  155sdjhjdjhjhdndjhjhd' // Votre token d'authentification
));

// Exécution de la requête
$response = curl_exec($ch);

// Vérification des erreurs
if(curl_errno($ch)) {
    echo 'Erreur cURL : ' . curl_error($ch);
}

// Fermeture de la session cURL
curl_close($ch);

// Affichage de la réponse
echo $response;

?>
