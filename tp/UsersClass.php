<?php
session_start();
class UsersClass{


    public $db;

        public function __construct($db)
        {
            $this->db=$db;
        }


        public function inscription($nom,$prenom,$email,$password) 
        {

            
            $insertion=$this->db->prepare("INSERT INTO users(nom,prenom,email,passwords) VALUES(?,?,?,?) ");
            $insertion=$insertion->execute(array($nom,$prenom,$email,$password));

            
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
                        $_SESSION["prenom"]=$infos["prenom"];

                        $_SESSION["id"]=$infos["id"];

                    

                        return true;
                       }
        
                       else{
                 

                     
        
                       return false;
                       }
                       

                }




           



            
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




}