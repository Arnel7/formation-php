<?php

class InfosVisiteur{

    
    public $db;

    public function __construct($db)
    {
        $this->db=$db;
    }


    public function selectionCategorie(){

        $selection=$this->db->query('SELECT * from  categorie  ');

        return $selection;
        
    }
        public function infosFormation($id){
            $selection=$this->db->prepare("SELECT * from formations WHERE id=?");
            
            $selection->execute(array($id));

            return $selection;

        }


        public function updateStatutCode($id)  {
            $valeur=0;

            $requte=$this->db->prepare("UPDATE codes SET actif=? WHERE id=?");
            $requte->execute(array($valeur,$id));


            
        }

        public function achats($idUser,$idFormation){

            $insertion=$this->db->prepare("INSERT INTO achats(idUser,idFormation) VALUES(?,?) ");
                $insertion=$insertion->execute(array($idUser,$idFormation));
    
    
            
        }
        
      


    public function selectionFormation(){

        $selection=$this->db->query('SELECT * from  formations ORDER BY id DESC  LIMIT 3  ');

        return $selection;
        
    }

    public function newsletter($email){

        $insertion=$this->db->prepare("INSERT INTO newsletter(email) VALUES(?) ");
            $insertion=$insertion->execute(array($email));


        
    }



}