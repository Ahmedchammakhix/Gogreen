<?PHP
	include "../../controller/clientC.php";
    
	$clientC = new clientC();
	$listeclient= $clientC->afficherClient();
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>Client</title>

	<!-- Fontfaces CSS-->
	<link href="css/font-face.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
     
                       
                      
                        
       
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        
                         <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fa fa-bar-chart"></i>Général</a>
                            
                        </li>
                       
                        <li>
                            <a href="showClient.php">
                                <i class="fas fa-users"></i>Clients</a>
                        </li>
                        <li>
                            <a href="showCommande.php">
                                <i class="fas fa-cart-arrow-down"></i>Commandes</a>
                        </li>
                    
						<li>
                            <a href="imprimerclient.php">
                                <i class="fa fa-lightbulb-o"></i>imprimer clients</a>
                        </li>
						<li>
						
                            <a href="addclient.php">
                                <i class="fa fa-lightbulb-o"></i>ajouter clients</a>
                      
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<header class="header-desktop">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="header-wrap">
							<form class="form-header" action="" method="POST">
                           
								<input class="au-input au-input--xl" type="text" name="search" placeholder="Recherche client..." />
								<button class="au-btn--submit" type="submit">
                            
									<i class="zmdi zmdi-search"></i>
								</button>
                                
							</form>
							
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
						<div class="row">
                            <div class="col-lg-9">
								<br>
                                <h2 class="title-1 m-b-25">Informations Clients</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">NOM</th>
                                                <th class="text-center">Prénom</th>
                                                <th class="text-center">Date De Naissance</th>
                                                <th class="text-center">Carte D Identité</th>
                                                <th class="text-center">Adresse Mail</th>
                                                <th class="text-center">Mot De Passe</th>
                                                <th class="text-center">Reduction</th>
                                                <th class="text-center">Carte</th>
                                                <th class="text-center"></th>
                                                <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        <?PHP
foreach($listeclient as $client){
?>
<tr>
<td class="text-center"><?PHP echo $client['id_client']; ?></td>
<td class="text-center"><?PHP echo $client['nom']; ?></td>
<td class="text-center"><?PHP echo $client['prenom']; ?></td>
<td class="text-center"><?PHP echo $client['dateNais']; ?></td>
<td class="text-center"><?PHP echo $client['cin']; ?></td>
<td class="text-center"><?PHP echo $client['email']; ?></td>
<td class="text-center"><?PHP echo $client['mdp']; ?></td>
<td class="text-center"><?PHP echo $client['reduction']; ?></td>
<td class="text-center"><?PHP echo $client['carte']; ?></td>
<td class="text-center">
<form method="POST" action="deleteClient.php">
<button type="submit" name="supprimer" class="au-btn au-btn-icon au-btn--blue">
 <i class="zmdi zmdi"></i>Supprimer</button>
 <input type="hidden" value=<?PHP echo $client['id_client']; ?> name="id_client">
 </form>  
 </td>

 <td class="text-center"> 
 <button class="au-btn au-btn-icon au-btn--blue">
 <a href="updateClient.php?id=<?PHP echo $client['id_client']; 
			?>">
 
 <i class="zmdi zmdi"></i>Modifier</button>
  </a>
 </td>
</tr>
<?PHP
}
?>
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
						
						<div class="row">
								<div class="col-md-12">
										<div class="copyright">
												<p>&copy; Copyright.Tous droits réservés. <a href="1.html"></a>.</p>
										</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTAINER-->

	</div>

	<!-- Jquery JS-->
	<script src="vendor/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS-->
	<script src="vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<!-- Vendor JS       -->
	<script src="vendor/slick/slick.min.js">
	</script>
	<script src="vendor/wow/wow.min.js"></script>
	<script src="vendor/animsition/animsition.min.js"></script>
	<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
	</script>
	<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendor/counter-up/jquery.counterup.min.js">
	</script>
	<script src="vendor/circle-progress/circle-progress.min.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="vendor/select2/select2.min.js">
	</script>

	<!-- Main JS-->
	<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
