<?php

// L'URL où envoyer la requête POST
$url = 'http://localhost/formation/api/infos.php';

// Les données à envoyer via POST
$data = array(
    'cle' => 'valeur',
    'autre_cle' => 'autre_valeur'
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

?>
