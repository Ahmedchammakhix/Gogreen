<?php
 include_once '../Controller/categorieC.php';
 $co = new categorieC();
 if(isset($_GET['id'])){
     $co->supprimerCategorie($_GET['id']);
 
    header('Location:backCategorie');
    }

 ?>