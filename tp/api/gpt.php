<?php

// Votre clé API OpenAI 
$openAIKey = '';

// Initialisation de cURL
$ch = curl_init();

// Configuration des options de cURL
curl_setopt($ch, CURLOPT_URL, "https://api.openai.com/v1/chat/completions");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer $openAIKey",
]);

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    "model" => "gpt-3.5-turbo",
    "messages" => [
        [
            "role" => "system",
            "content" => "Tu es un développeur PHP avec 8 ans d'experience "
        ],
        [
            "role" => "user",
            "content" => "qu'est ce que PHP?"
        ],
    ],
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Exécution de la requête POST
$response = curl_exec($ch);

// Vérification des erreurs
if (curl_errno($ch)) {
    echo 'Erreur Curl : ' . curl_error($ch);
}

// Fermeture de la session cURL
curl_close($ch);

// Affichage de la réponse
///echo $response;






// Décodage de la réponse JSON en objet PHP
$data = json_decode($response);

// Accès à la réponse de l'assistant
if (isset($data->choices[0]->message->content)) {
    $assistantResponse = $data->choices[0]->message->content;
    echo "Réponse de l'assistant: " . $assistantResponse;
} else {
    echo "La réponse de l'assistant n'a pas été trouvée.";
}
