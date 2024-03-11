<?php

class Voiture{

    public $nom;
    private $couleur;

    public function __construct($nom,$couleur)
    {
        $this->nom=$nom;
        $this->couleur=$couleur;
        
    } 
       


    protected function monNom()  {

        echo "je suis " .$this->nom   ." et ma couleur est  "  .$this->couleur  ."\n";
        
    }

    public function affiche()  {

       $this->monNom();
        
    }








}

class Toyota extends Voiture{

    public function message()  {

        echo "Qui suis-je?";
        
    }

    public function afficheDeux()  {

        $this->monNom();
         
     }
 






}


$objet=new Toyota("toyota","verte");
$objet->message();
$objet->afficheDeux();






/*
$objet=new Voiture("volvo","rouge");

$objet->monNom();
*/



/*
$objetDeux=new Voiture("range rover","noire");

$objetDeux->monNom();

*/



// Décodage de la réponse JSON en objet PHP
$data = json_decode($response);

// Accès à la réponse de l'assistant
if (isset($data->choices[0]->message->content)) {
    $assistantResponse = $data->choices[0]->message->content;
    echo "Réponse de l'assistant: " . $assistantResponse;
} else {
    echo "La réponse de l'assistant n'a pas été trouvée.";
}
