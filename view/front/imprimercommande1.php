<?php
include "../../controller/commandeC.php";
include "../../controller/clientC.php";

$F=$_GET['prix_tot'];
$K=0.25;
$T=$F*$K;


?>
<html>
<head>
    <meta charset="utf-8">
    <title>FACTURE</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
<a class="logo" href="commande.php">
        
        </a>
        
        <body onload="window.print()">
        <header class="clearfix">
      <div id="logo">
      <a class="logo" href="index.php">
        <img src="logo.png" >
        </a>      </div>
      <div id="company">
        <h2 class="name">GOGREEN</h2>
        <div>455 Tunisia, AR 7879, TN</div>
        <div>(216) 71-045-056</div>
        <div><a href="mailto:company@example.com">gogreen@esprit.tn</a></div>
      </div>
      </div>
    </header>
              
<hr>
<table border=1  border="1" cellspacing="1" cellpadding="1" style="position: relative;down: 200px">
        <tr>
<th class="no" >client</th>
<th class="no">id commande</th>
<th class="no">etat</th>
<th class="no" >nom du produit</th>
<th class="no" >quantite</th>
<th class="total">prix </th>
        


                
        </tr>

        <?PHP
              
        ?>
            <tr>
            <td><span>CLBIO</span><?PHP echo $_GET['client']; ?></td>
             <td><span>CMD</span><?PHP echo $_GET['id_commande']; ?></td>
           <td><?PHP echo $_GET['etat']; ?></td>
            <td><?PHP echo $_GET['nomproduit']; ?></td>
            <td><?PHP echo $_GET['qte']; ?></td>
             <td style="position: relative;right: 15px"><?PHP echo $_GET['prix_tot']; ?></td>

                        
                        
                </tr>
                <tfoot style="position: relative;left: 100spx" >
          
          <tr>
            <td colspan="2"></td>
            <td colspan="3">TAX 25%</td>
            <td style="position: relative;right: 15px"><?PHP echo $T  ; ?></td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td colspan="3">GRAND TOTAL</td>
            <td style="position: relative;right: 15px"><?PHP echo $T+$F  ; ?><span>DNT</span></td>
          </tr>
        </tfoot>
        
</table>
<p>
<p>
<p>
<p>  
<div id="thanks">Thank you!</div>
<span>*************************************************************************************************************************************</span>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
      <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>

<span>*************************************************************************************************************************************</span>



<p><p><p><p>

<span style="position: relative;left: 100px">Manager signature::</span>

<p>
<p>




<img style="position: relative;left: 100px" src="signature.png" >


</body>
</html>
