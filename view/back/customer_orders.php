<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); 

include "../../controller/commandeC.php";

 $commandeC=new commandeC();
 
    $listcommande=$commandeC->affichercommande();
	?>

<br><br><br>


<div class="main-content">
				<div class="section__content section__content--p30">
						
						<div class="row">
                            <div class="col-lg-9">
								<br><br><br><br>
                                <h2 style="position: relative;left: 400px" 
                                class="card-title">Informations Commandes</h2> 
                                <div id="google_translate_element"></div>

        
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
         
                                <div style="position: relative;left: 250px" class="table-responsive">
                                <table id="dataTable" class="table table-bordered verticle-middle table-responsive-sm" >
                                   

                                    <thead class="thead-dark">

    <tr class="table-success" style="position: relative;right: 50px">
       
     <th   >******  Id commande </th>
        
        <th scope="col">etat</th>
         <th scope="col">ID client</th>
       
        <th>  total
                        </th>
      <th scope="col">supression</th>
      
        
       
        


    </tr>
</thead>
<?php

foreach ($listcommande as $row)
{
   $l=0;
   


 ?>    
    
        <tr style="position: relative;right: 50px" valign="middle" class="table-active">
            
            <td align="center"><span>CMD</span><?php echo $row["id_commande"] ?></td>
            
           
            
             <td align="center">
             <center>  <form action="modifiecommande.php" method="post" style="position: relative;top: 10px">
                   
             <input type="hidden" id="id_commande" name="id_commande"   value="<?php echo $row["id_commande"] ?>">
                   <select class="nice-select default-select form-control wide mb-3" name="etat" id="etat" >
                   
    <option  value="en cours be patient!!!!!" class="badge light badge-danger"<?php if ($row["etat"]=="en cours be patient!!!!!" ) echo "selected" ; ?>>en cours be patient!!!!!</option>
       <option class="badge light badge-success" value="validée" <?php if ($row["etat"]=="validée") echo "selected" ; ?>>validée</option>
       
    </select>
    <center>  <button type="submit" class="btn btn-success btn sweet-success">update</button>
               </form></center>
           </td>
            <td> <span>CLBIO</span><?php echo  $row["client"] ?></td>
       
           
            <td align="center"><?php echo $row["prix_tot"].' '.'TND' ?></td>
                <td>
                
                    
          <input type="hidden" id="id_commande" name="id_commande" value="<?php echo $row["id_commande"] ?>">
          <input type="hidden" id="prix_tot" name="prix_tot" value="<?php echo $row["prix_tot"] ?>">
         
          <input type="hidden" id="client" name="client" value="<?php echo $row["client"] ?>">

          
               <center> <form action="supprimercommande.php" method="get">
               
                    
          <input type="hidden" id="id_commande" name="id_commande" value="<?php echo $row["id_commande"] ?>">
                   
                  <button   type="submit" class="btn btn-danger shadow btn-xs sharp" ><i class="fa fa-trash" aria-hidden="true"></i></button></form></center>
                 
                  
              

                  
            
       
            
        </tr>

		<?php
}


