<?php

class Admin{

    
    public $db;

    public function __construct($db)
    {
        $this->db=$db;
    }

    public function totalUser()  {

      
        $selection=$this->db->query("SELECT * from users");
            
     //   $selection->execute(array($code));

                    return $selection->rowCount();
                
             
        } 
        public function prixTotalAchat()  {

            $selection=$this->db->query("SELECT achats.*,formations.* FROM achats INNER JOIN formations ON
             achats.idFormation=formations.id
            
             ");
                $total=0;
             while($resultat=$selection->fetch()){
                $total=$total+$resultat["prix"];

             }
      
             return $total;
            
        }
    public   function genererLettresMajuscules() {
            $lettres = range('A', 'Z'); // Crée un tableau de A à Z
            $chaine = implode('', $lettres); // Convertit le tableau en chaîne
        
          //  echo $chaine  ."   <br>";
            $chaineMelangee = str_shuffle($chaine); // Mélange les lettres de manière aléatoire
        
           // echo $chaineMelangee ."<br>";
            return substr($chaineMelangee, 0, 4); // Retourne les 4 premières lettres
        }

        public function verifyCode($code)  {

      
            $selection=$this->db->prepare("SELECT * from codes where code=?");
                
           $selection->execute(array($code));
    
              
    
                        return $selection->rowCount();
                
            
        }

        public function listeCategorie()  {

      
            $selection=$this->db->query("SELECT * from categorie");
                
           // $selection->execute(array($code));
    
              
    
                        return $selection;
                
            
        }

        public function insertionFormation($titre,$auteur,$idCategorie,$prix,$image)  {

            $insertion=$this->db->prepare("INSERT INTO formations(titre,auteur,prix,idCategorie,image) VALUES(?,?,?,?,?) ");
            $insertion=$insertion->execute(array($titre,$auteur,$prix,$idCategorie,$image));


            
        }
    
    
    


        public function listeUser()  {

      
            $selection=$this->db->query("SELECT * from users");
                
           // $selection->execute(array($code));
    
              
    
                        return $selection;
                
            
        }
    


        public function totalAchat()  {

      
            $selection=$this->db->query("SELECT * from achats");
                
         //   $selection->execute(array($code));
    
                        return $selection->rowCount();
                    
                 
            } 

        public function nombreUserAchat()  {

      
            $selection=$this->db->query("SELECT COUNT(DISTINCT idUser) AS nombre_utilisateur FROM achats ");
                
         //   $selection->execute(array($code));

                $resultat=$selection->fetch();
      
    
                       return $resultat["nombre_utilisateur"];
                    
                 
            } 

            public function insertionCode($code,$prix){

                $insertion=$this->db->prepare("INSERT INTO codes(code,montant) VALUES(?,?) ");
                    $insertion=$insertion->execute(array($code,$prix));
        
        
                
            }
        



     }

    ?>