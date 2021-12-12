<?php
class categorie{
    private ?int $refC = null;
    private ?string $nomC = null;
    private ?string $description = null;
    function __construct(string $nomC,string $description)
    {
        
        $this->nomC=$nomC;
        $this->description=$description;
        
    }
    function getRef(): int{
        return $this->refC;
    }
    function getNom(): string{
        return $this->nomC;
    }
    function getDescription(): string{
        return $this->description;
    }
   
    function setNom(string $nomC): void{
        $this->nomC=$nomC;
    }
    function setDescription(string $description): void{
        $this->description=$description;
    }
    
}
?>