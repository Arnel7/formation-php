<?php

// Autoriser l'accès de toutes les origines
header('Access-Control-Allow-Origin: *');

// Définir le type de contenu de la réponse à JSON
header('Content-Type: application/json');

//header('Accept: application/json');

// Liste des méthodes HTTP autorisées
$methodesAutorisees = ['GET', 'PUT', 'DELETE'];

// Vérifier si la méthode de la requête est autorisée
if (!in_array($_SERVER['REQUEST_METHOD'], $methodesAutorisees)) {
    // Méthode non autorisée, envoyer une réponse 405 Method Not Allowed
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: ' . implode(', ', $methodesAutorisees)); // Informer le client des méthodes autorisées
    echo json_encode(['erreur' => 'Méthode non autorisée']);
    exit; // Arrêter l'exécution du script
}

// Votre logique d'API commence ici si la méthode est autorisée

echo json_encode(['message' => 'Salut']); // Exemple de réponse
