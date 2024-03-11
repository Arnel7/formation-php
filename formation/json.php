<?php

/*$user=array("nom"=>"Arnel LAWSON","email"=>"arnellawson7@gmail.com","annee"=>2024,"femme"=>false);

echo json_encode($user);*/


$json='{
    "nom":"Arnel LAWSON",
    "email":"arnellawson7@gmail.com",
    "annee":2024,
    "femme":false
   
   }
   ';

   $infos=json_decode($json);


   echo $infos->nom ."<br>";
   echo $infos->email ."<br>";

   //echo $infos->dev ."<br>";
