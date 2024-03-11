<?php

class Users{

    
    public $db;

    public function __construct($db)
    {
        $this->db=$db;
    }

    public function inscription($nom,$email,$password){

        $insertion=$this->db->prepare("INSERT INTO users(nom,email,passwords) VALUES(?,?,?) ");
            $insertion=$insertion->execute(array($nom,$email,$password));


        
    }



  /*  public function achatsUser($id)  {

      
        $selection=$this->db->prepare("SELECT * from achats WHERE idUser=?");
            
        $selection->execute(array($id));

            if($selection->rowCount()==0)
            {

                    return false;
                
            }

            else{

                    return $selection;
            }
        
    }*/

    public function achatsUser($id) {
       
        $selection = $this->db->prepare("
            SELECT formations.* 
            FROM achats 
            JOIN formations ON achats.idFormation = formations.id 
            WHERE achats.idUser = ?
            ");

            $selection->execute(array($id));

            if($selection->rowCount()==0)
            {

                    return false;
                
            }

            else{

                    return $selection;
            }

        
    }




    public function infosCode($code)  {

      
        $selection=$this->db->prepare("SELECT * from codes WHERE code=?");
            
        $selection->execute(array($code));

            if($selection->rowCount()==0)
            {

                    return false;
                
            }

            else{

                    return $resultat=$selection->fetch();
            }
        
    }




    
    public function connexion($email,$password) {

        $infos=$this->infosUser($email);

            if(!$infos){

                return false;
            }

            else{

                

                if (password_verify($password,$infos["passwords"])) {

                    $_SESSION["email"]=$infos["email"];
                    $_SESSION["nom"]=$infos["nom"];
                    $_SESSION["email"]=$infos["email"];
                    //$_SESSION["prenom"]=$infos["prenom"];

                    $_SESSION["id"]=$infos["id"];
                    $_SESSION["login"]=1; 

                

                    return true;
                   }
    
                   else{
             

                 
    
                   return false;
                   }
                   

            }




       



        
    }



            public function codePassword($email,$code)  {

                $requte=$this->db->prepare("UPDATE users SET codePassword=? WHERE email=?");
                $requte->execute(array($code,$email));


                
            }

            public function updatePassword($email,$password)  {

                $requte=$this->db->prepare("UPDATE users SET passwords=? WHERE email=?");
                $requte->execute(array($password,$email));


                
            }



    
    public function infosUser($email)  {

      
        $selection=$this->db->prepare("SELECT * from users WHERE email=?");
            
        $selection->execute(array($email));

            if($selection->rowCount()==0)
            {

                    return false;
                
            }

            else{

                    return $resultat=$selection->fetch();
            }
        
    }



    public function envoiesMail($email,$message) {


                        $url ="https://liberaservice.com/formationphp/mailPro.php";

                // Les données à envoyer via POST
                $data = array(
                    'message' =>$message,
                    'email' => $email
                );

                // Initialiser une session cURL
                $ch = curl_init($url);

                // Configurer les options de cURL pour une requête POST
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Pour retourner le résultat de la requête
                curl_setopt($ch, CURLOPT_POST, true); // Indiquer que la requête est de type POST
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); // Les données POST à envoyer

                // Exécuter la session cURL
                $response = curl_exec($ch);

                // Vérifier s'il y a eu des erreurs
                if(curl_errno($ch)) {
                    echo 'Erreur cURL : ' . curl_error($ch);
                }

                // Fermer la session cURL
                curl_close($ch);

                // Afficher la réponse de la requête
                return $response;

        
    }


     }