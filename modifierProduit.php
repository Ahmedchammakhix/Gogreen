<link rel="stylesheet" href="back.css" type="text/css" media="all" />
<?php
 include_once '../Controller/produitC.php';
 include_once '../Controller/categorieC.php';

$categorieC = new categorieC();
$listeCat = $categorieC->afficherCategorie();
 
 $co = new produitC();
 if(isset($_GET['id'])){
   $produitC = new produitC();
   $listeC = $produitC->afficherProduitDetail($_GET['id']);
 
 foreach($listeC as $produit){
 ?>
 <body>
<!--<link rel="stylesheet" href="css3/style.css" type="text/css" media="all" />-->


  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="#">Antico</a></h1>
  </div>
   <form action="" method="post">
   <!-- Box -->
   <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Edit Product</h2>
          </div>
          <!-- End Box Head -->
            <!-- Form -->
            <div class="form">
              <p> 
                <label>Nom </label>
                <input type="text" class="field size1" name="nom" value=<?php echo $produit['nom'];?> />
              </p>
              


              <p> 
                <label>Prix </label>
                <input type="float" class="field size1" name="prix" value=<?php echo $produit['prix'];?> />
              </p>
              <p>
<select name="categorie" class="field small-field" >
            <?php foreach ($listeCat as $cat ){?> 
              <option value="<?php echo $cat['nomC'];?>"><?php echo $cat['nomC'];?></option>
              <?php } ?>
            </select>
</p>
              <p> 
                <label>Image </label>
                <input type="file" class="field size1" name="image" value=<?php echo $produit['image'];}?> />
              </p>

             

             
            </div>
            <!-- End Form -->
            <!-- Form Buttons -->
            <div class="buttons">
              <input type="Reset" class="button" value="Reset" />
              <input type="submit" class="button" value="submit" />
            </div>
            <!-- End Form Buttons -->
          </form>
 </div>
 </div>
 <?php
 // create event
 $produit = null;

 // create an instance of the controller

 $produitC = new produitC();
 if (
     isset($_POST["nom"]) && 
     isset($_POST["prix"])&& 
     isset($_POST["categorie"])&&
     isset($_POST["image"])
 ) {
     if (
         !empty($_POST["nom"]) &&  
         !empty($_POST["prix"]) && 
         !empty($_POST["categorie"]) && 
         !empty($_POST["image"])  
     ) {
         $produit = new produit(
             $_POST['nom'],
             $_POST['prix'],
             $_POST['categorie'],
             $_POST['image']
         );
        
        $produitC->modifierProduit($_GET['id'],$produit);
         
         header('Location:backProduit.php');
     }
     else
         $error = "Missing information";
 }

 
}

?>