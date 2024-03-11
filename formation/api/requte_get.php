<?php

// Les paramètres à envoyer
$params = [
    'param1' => 'value1',
    'param2' => 'value2'
];

// Construction de la chaîne de requête
$queryString = http_build_query($params);

// L'URL de base de l'API
$baseUrl = "http://localhost/formation/api/infos.php";

// Ajout de la chaîne de requête à l'URL
$urlWithParams = $baseUrl . "?" . $queryString;

// Initialisation de cURL
$curl = curl_init();

// Configuration de l'URL de la requête avec les paramètres
curl_setopt($curl, CURLOPT_URL, $urlWithParams);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Exécution de la requête
$response = curl_exec($curl);

// Fermeture de la session cURL
curl_close($curl);

// Affichage de la réponse
echo $response;
