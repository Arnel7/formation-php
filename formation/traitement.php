<?php


if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_POST["nom"],$_POST["email"])){
      //  if(isset($_POST["nom"])&& isset($_POST["email"]))

      ///$nom=$_POST["nom"];

      if(empty($_POST["nom"]) && empty($_POST["email"])) {

            $erreur= "veuillez remplir tous les champs "  ."<br/>";

      }

      elseif(empty($_POST["nom"])){

        $erreur= "veuillez remplir le champ nom "  ."<br/>";

      }

      elseif(empty($_POST["email"])){
        $erreur= "veuillez remplir le champ email "  ."<br/>";
   

      }






      if(!empty(($_POST["email"]))){
        if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
            $erreur= "veuillez forunir un email valide  "  ."<br/>";

         }


    }


      else{


       

        echo  htmlspecialchars($_POST["nom"]);

        echo $_POST["email"] ."<br/>";

      }

        

    }

  

}



/*

if(isset($_POST["submit"])){


    echo $_POST["nom"] ."<br/>";

    echo $_POST["email"] ."<br/>";

}
*/
 
?>


