<link rel="stylesheet" href="back.css" type="text/css" media="all" />
<?php
 include_once '../Controller/categorieC.php';
 
 $co = new categorieC();
 if(isset($_GET['id'])){
   $categorieC = new categorieC();
   $listeC = $categorieC->afficherCategorieDetail($_GET['id']);
 
 foreach($listeC as $categorie){
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
            <h2>Edit Categorie</h2>
          </div>
          <!-- End Box Head -->
            <!-- Form -->
            <div class="form">
              <p> 
                <label>Nom </label>
                <input type="text" class="field size1" name="nom" value=<?php echo $categorie['nomC'];?> />
              </p>
              


              <p> 
                <label>Description </label>
                <input type="text" class="field size1" name="description" value=<?php echo $categorie['description'];?> />
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
 $categorie = null;

 // create an instance of the controller

 $categorieC = new categorieC();
 if (
     isset($_POST["nom"]) && 
     isset($_POST["description"])
 ) {
     if (
         !empty($_POST["nom"]) &&  
         !empty($_POST["description"]) 
     ) {
         $categorie = new categorie(
             $_POST['nom'],
             $_POST['description']
         );
        $categorieC->modifierCategorie($_GET['id'],$categorie);
         
         header('Location:backCategorie');
     }
     else
         $error = "Missing information";
 }

 
}}

?>