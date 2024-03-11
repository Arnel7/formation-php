<?php
// Initialisation de cURL
$curl = curl_init();

// Configuration de l'URL de la requête et d'autres options
curl_setopt($curl, CURLOPT_URL, "http://localhost/formation/api/infos.php?email=hhdhd@ggmail.com");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Exécution de la requête et fermeture de la session cURL
$response = curl_exec($curl);
curl_close($curl);

// Affichage de la réponse
echo $response;
