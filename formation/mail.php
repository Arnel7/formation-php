<?php
$destinataire = "arnellawson7@gmail.com";
$sujet = "Mail en production";


$headers = "From: test@liberaservice.com \r\n"; 
$headers .= "Reply-To: test@liberaservice.com \r\n"; 
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

/*
$message = <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenu de l'e-mail</title>
</head>
<body>
    <h1>Bonjour</h1>
    <p>des informations</p>
    <p>meme chose ici</p>
</body>
</html>
EOT;
*/
$message="hello voila notre texte";

$mail_envoye = mail($destinataire, $sujet, $message, $headers);

if ($mail_envoye) {
    echo "<p>L'e-mail a été envoyé avec succès.</p>";
} else {
    echo "<p>Une erreur s'est produite lors de l'envoi de l'e-mail.</p>";
}
?>
