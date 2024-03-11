<?php

//echo "une information obtenue par POST";


$authorizationHeader="";


// Vérifier si le header 'Authorization' est présent
if (isset($_SERVER['HTTP_AUTHORIZATION'])) {
    // Récupérer la valeur du header 'Authorization'
    $authorizationHeader = $_SERVER['HTTP_AUTHORIZATION'];
    echo "Header Authorization : " . $authorizationHeader;
} elseif (function_exists('apache_request_headers')) {
    // Une alternative pour les serveurs utilisant Apache, si HTTP_AUTHORIZATION n'est pas directement disponible
    $requestHeaders = apache_request_headers();
    // Recherche de l'en-tête 'Authorization' dans les en-têtes de la requête, insensible à la casse
    $authorizationHeader = isset($requestHeaders['Authorization']) ? $requestHeaders['Authorization'] : (isset($requestHeaders['authorization']) ? $requestHeaders['authorization'] : null);
    if ($authorizationHeader !== null) {
        echo "Header Authorization : " . $authorizationHeader;
    } else {
        echo "Le header Authorization n'est pas présent.";
    }
} else {
    echo "Le header Authorization n'est pas présent.";
}
  

?>


