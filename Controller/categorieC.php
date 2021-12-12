<?php
include_once("C:/xampp/htdocs/greeno/config.php");
include_once("C:/xampp/htdocs/greeno/Model/categorie.php");

class categorieC
{
    function afficherCategorie(){
        $sql="select * from categorie";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}

public function ajouterCategorie($categorie){
    $sql="insert into categorie(nomC,description) values(:nomC,:description)";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute([
        'nomC'=>$categorie->getNom(),
        'description'=>$categorie->getDescription()
        ]);
        
    }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}

function modifierCategorie($id,$categorie) {
    $sql="UPDATE  categorie set nomC=:nomC,description=:description where refC=".$id."";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
    
        $query->execute([
            'nomC' => $categorie->getNom(),
            'description' => $categorie->getDescription()
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }		
  }
public function afficherCategorieDetail(int $rech1)
    {
        $sql="select * from categorie where refC=".$rech1."";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
public function supprimerCategorie($id)
{
    $sql = "DELETE FROM categorie WHERE refC=".$id."";
    $db = config::getConnexion();
    $query =$db->prepare($sql);
    
    try {
        $query->execute();
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());

    }
}
}

?>