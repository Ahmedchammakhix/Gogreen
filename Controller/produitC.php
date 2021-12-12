<?php
include_once("C:/xampp/htdocs/greeno/config.php");
include_once("C:/xampp/htdocs/greeno/Model/produit.php");

class produitC
{
    
    function afficherProduit(){
        $sql="select * from produit";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}
function afficherJoin(){
    $sql="select * from produit inner join categorie on produit.categorie=categorie.nomC";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
}

catch(Exception $e){
    echo 'Erreur: '.$e->getMessage();
}
}
function afficherProduitTrie(string $selon){
    $sql="select * from produit order by ".$selon."";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
}

catch(Exception $e){
    echo 'Erreur: '.$e->getMessage();
}
}
public function afficherProduitRech(string $rech1,string $selon)
{
    $sql="select * from produit where $selon like '".$rech1."%'";
    
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
public function ajouterProduit($produit){
    $sql="insert into produit(nom,prix,categorie,image) values(:nom,:prix,:categorie,:image)";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute([
        'nom'=>$produit->getNom(),
        'prix'=>$produit->getPrix(),
        'categorie'=>$produit->getCategorie(),
        'image'=>$produit->getImage()
        ]);
        
    }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}
public function statistiques()
{
    $sql="SELECT categorie,count(*) from produit group by categorie ";
    
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function modifierProduit($id,$produit) {
    $sql="UPDATE  produit set nom=:nom,prix=:prix,categorie=:categorie,image=:image where ref=".$id."";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
    
        $query->execute([
            'nom' => $produit->getNom(),
            'prix' => $produit->getPrix(),
            'categorie'=>$produit->getCategorie(),
            'image' => $produit->getImage()
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }		
  }
public function afficherProduitDetail(int $rech1)
    {
        $sql="select * from produit where ref=".$rech1."";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
public function supprimerProduit($id)
{
    $sql = "DELETE FROM produit WHERE ref=".$id."";
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