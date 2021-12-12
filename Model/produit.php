<?php
class produit{
    private ?int $ref = null;
    private ?string $nom = null;
    private ?float $prix = null;
    private ?string $categorie = null;
    private ?string $image = null;
    function __construct(string $nom,float $prix,string $categorie,string $image)
    {
        
        $this->nom=$nom;
        $this->prix=$prix;
        $this->categorie=$categorie;
        $this->image=$image;
        
    }
    function getRef(): int{
        return $this->ref;
    }
    function getNom(): string{
        return $this->nom;
    }
    function getImage(): string{
        return $this->image;
    }
    function getCategorie(): string{
        return $this->categorie;
    }
    function getPrix(): float{
        return $this->prix;
    }
   
    function setNom(string $nom): void{
        $this->nom=$nom;
    }
    function setPrix(float $prix): void{
        $this->prix=$prix;
    }
    
}
?>