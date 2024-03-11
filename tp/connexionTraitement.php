<?php


include("db.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
        if(isset($_POST["email"],$_POST["password"])){

            if(empty($_POST["email"])||empty($_POST["password"]))  {


                echo "veuillez remplir tous les champs";

            }

            else{

                
                $selection=$bdd->prepare("SELECT * from users WHERE email=?");
                
                $selection->execute(array($_POST["email"]));

                
                
                if($selection->rowCount()==0){

                    echo "Les idantifiants de connexion sont incorrects";

                }

                else{
                    $resultat=$selection->fetch();



                   if (password_verify($_POST["password"],$resultat["passwords"])) {
                    
                    echo "connexion reussie";
                   }

                   else{

                    echo "Les idantifiants de connexion sont incorrects";
                   }

                    
                }

               /// echo "insertion effectuée";
               
              //  $insertion=$insertion->execute([$_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["password"]]);



            }



        }

}