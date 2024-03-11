<?php

// Chemin vers le fichier image
$filePath = 'mon.png';

// Vérifier si le fichier existe
if (file_exists($filePath)) {
    // Définir les en-têtes pour indiquer qu'il s'agit d'une image PNG
    header('Content-Type: image/png');

    // Lire et retourner le fichier image
    readfile($filePath);
} else {
    // Retourner une erreur si l'image n'est pas trouvée
    header("HTTP/1.0 404 Not Found");
    echo "Image non trouvée";
}
?>


openapi: 3.0.0
info:
  title: Image Retrieval API
  description: API pour récupérer des images depuis un serveur.
  version: 1.0.0
servers:
  - url: https://liberaservice.com
    description: Serveur principal
paths:
  /image:
    get:
      operationId: getImage
      summary: Récupère une image spécifique.
      responses:
        '200':
          description: Renvoie l'image demandée
          content:
            image/png:
              schema:
                type: string
                format: binary
        '404':
          description: Image non trouvée
