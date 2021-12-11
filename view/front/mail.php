<?php
include "../../controller/commandeC.php";
include "../../controller/clientC.php";

?>
<html>

<a class="logo" href="commande.php">
        <img src="" alt="Cool Admin">
        </a>
        
        <body onload="window.print()">

<hr>
<table border=1 align = 'center'>
        <tr>
<th>client</th>
<th>id commande</th>
                <th>etat</th>
<th>nom du produit</th>
<th>quantite</th>
<th>prix total</th>
        


                
        </tr>

        <?PHP
              
        ?>
            <tr>
    <td><?PHP echo $_GET['client']; ?></td>
    <td><?PHP echo $_GET['id_commande']; ?></td>
     <td><?PHP echo $_GET['etat']; ?></td>
    <td><?PHP echo $_GET['nomproduit']; ?></td>
    <td><?PHP echo $_GET['qte']; ?></td>
    <td><?PHP echo $_GET['prix_tot']; ?></td>

                        
                        
                </tr>
        <?PHP
                
        ?>
</table>
</body>
</html>
