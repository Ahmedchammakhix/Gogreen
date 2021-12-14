<?php
	include "../../controller/clientC.php";
    
	$clientC = new clientC();
	$listeclient= $clientC->afficherClient();
?>
<html>

<body onload="window.print()">

<br>
<br>
<?php

foreach($listeclient as $client){
?>

                        <a class="logo" href="showClient.php">
                            <img src="logo.png" alt="logo" />
                        </a>
<h1 style="font-size: 50px">Nom : <?PHP echo $client['nom'];?></h1>
<h5 style="font-size: 25px">Prenom : <?php echo $client['prenom'];?></h5>
<h2 style="font-size: 40px">Date De Naissa,ce : <?php echo $client['dateNais'];?></h2>
<h2 style="font-size: 40px">Carte D Identité : <?php echo $client['cin'];?></h2>
<h2 style="font-size: 25px">Adresse Mail : <?php echo  $client['email'];?></h2>
<h2 style="font-size: 30px">Mot De Passe : <?php echo $client['mdp'] ;?></h2>
<h2 style="font-size: 30px">Reduction : <?php echo $client['reduction'] ;?></h2>
<h2 style="font-size: 30px">Carte : <?php echo $client['carte'] ;?></h2>
<br>
<br>
<br>
<br>
<?php } ?>

</body>
</html>
