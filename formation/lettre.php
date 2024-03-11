<?php

function genererLettresMajuscules() {
    $lettres = range('A', 'Z'); // Crée un tableau de A à Z
    $chaine = implode('', $lettres); // Convertit le tableau en chaîne

    echo $chaine  ."   <br>";
    $chaineMelangee = str_shuffle($chaine); // Mélange les lettres de manière aléatoire

    echo $chaineMelangee ."<br>";
    return substr($chaineMelangee, 0, 4); // Retourne les 4 premières lettres
}



// Utiliser la fonction
echo genererLettresMajuscules();
