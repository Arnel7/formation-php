<?php

class UsersClassApi{

    public $db;

    public function __construct($db)
    {
        $this->db=$db;
    }


    public function inscription($nom,$prenom,$email,$password) 
    {

        $token = bin2hex(random_bytes(16)); 

        
        $insertion=$this->db->prepare("INSERT INTO apiuser(nom,prenom,email,passwords,token) VALUES(?,?,?,?,?) ");
        $insertion=$insertion->execute(array($nom,$prenom,$email,$password,$token));

        
    }
     
    public function infosUser($email){

        $selection=$this->db->query('SELECT * from  apiuser WHERE email= "'.$email.'"   ');

        return $selection;
        
    }

    public function infosUserToken($token){

        $selection=$this->db->query('SELECT * from  apiuser WHERE token= "'.$token.'"   ');

        return $selection;
        
    }


    public function siMembre($email) {

        $selection=$this->db->query('SELECT * from  apiuser WHERE email= "'.$email.'"   ');
        $nombre=$selection->rowCount();

        return $nombre;
        
    }



    public function siMembreToken($token) {

        $selection=$this->db->query('SELECT * from  apiuser WHERE token= "'.$token.'"   ');
        $nombre=$selection->rowCount();

        return $nombre;
        
    }



    public function connexion($password,$hash){

        if(password_verify($password,$hash)){


            return true ;
        }

        else{

            return false;
        }



    }


}