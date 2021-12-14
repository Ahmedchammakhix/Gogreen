<?php
   
   include_once '../../controller/clientC.php';

    $error = "";
    $client = null;
    $clientC = new clientC(); 
  

    
	
 
  

    if( isset($_POST['nom']) 
        
        && isset($_POST['prenom']) 
        && isset($_POST['dateNais'])
         && isset($_POST["cin"])
         && isset($_POST["email"])
         && isset($_POST["mdp"])
        
         ) 
         { 
            
             if(  !empty($_POST['nom']) &&
            
             !empty($_POST['prenom']) &&
             !empty($_POST['dateNais']) &&
             !empty($_POST['cin']) &&
             !empty($_POST["email"]) &&
             !empty($_POST["mdp"]) 
              
             )
                {
                $client= new client($_POST['nom'],$_POST['dateNais'],$_POST['prenom'],$_POST['cin'] ,$_POST['email'],$_POST['mdp'],0,0);
                $clientC->ajoutClient($client);
                header('Location:showClient.php');
                }
           else 
               {
                   $error =" Missing information";
               } 
        
            }

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>Ajout client</title>

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
    <script src="js/produit.js"></script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/ahmed.png" alt="reydelmexico" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
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
                            <a href="showProduit.php">
                                <i class="fa fa-pie-chart"></i>Produits</a>
                        </li>
                        <li>
                            <a href="showCategorie.php">
                                <i class="fa fa-lightbulb-o"></i>Catégories</a>
                        </li>
						<li>
                            <a href="imprimerclient.php">
                                <i class="fa fa-lightbulb-o"></i>imprimer clients</a>
                        </li>
						<li>
						
                            <a href="addclient.php">
                                <i class="fa fa-lightbulb-o"></i>ajouter clients</a>
                      
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="logo.png"/>
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
			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						
						<div class="row">
                            <div class="col-lg-9">
								<br>
                                <h2 class="title-1 m-b-25">Ajouter un nouveau client</h2>
                                <div id="error">
                                    <?php echo $error; ?>
                                        </div>
                                        <div id="erreur"></div>
                                <form action="" method="POST" action="" name="client" id="client" method="POST" onclick=" return verifclient();">
                  <table  align="center">
                 <tr> 
                    <td> <label for="id_client">id_client: </label>
                    </td> 
                </tr>
                 <tr>
                    <td><input type="number" name="id_client" id="id_client" required ></td>
                </tr>
                <tr>
                    <td><label for="nom">nom: </label>  </td> 
                </tr> 
                <tr>
                    <td><input type="text" name="nom" id="nom" required maxlength="20"></td>
                </tr>
                <tr>
                    <td> <label for="prenom">prenom: </label>  </td> 
 
                </tr> 
                <tr>
                    <td><input type="text" name="prenom" id="prenom" required maxlength="20"></td>
                </tr>
                <tr>
                    <td>    <label for="dateNais">dateNais: </label></td> 
                </tr> 
                <tr>
                    <td><input type="text" name="dateNais" id="dateNais"  required  ></td> 
                </tr>
                <tr>
                    <td>    <label for="cin">cin: </label></td> 
                </tr> 
                <tr>
                <td><input type="text" name="cin" id="cin" required  >        
                        
          
            
                </td> 
                </tr>
                <tr>
                    <td><label for="email">email:</label></td> 
                </tr> 
                <tr>
                    <td>
                    <td><input type="text" name="email" id="email" required  > 
                        
          
                     
                    </td> 
                </tr>
                <tr>
                    <td>    <label for="mdp">mot de passe: </label></td> 
                </tr>
                
                

                
                <tr>

                <td> 

    <input type="text" id="mdp" name="mdp"  required />
    
 <!--</form>-->
 </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td></td><td> <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <input type="submit" class="au-btn au-btn-icon au-btn--blue" value="Envoyer">
                                    <input type="reset" class="au-btn au-btn-icon au-btn--blue" value="Annuler">
                                </div>
                            </div>
                </div></td></tr>
                
                  </table>
        </form>                   
                            
   </div>
</div>
						
                 	<div class="row">
								<div class="col-md-12">
										<div class="copyright">
												<p>&copy; Copyright.Tous droits réservés. <a href="../view/front/1.html"></a>.</p>
										</div>
								</div>
						</div>

					</div>
				</div>
			</div>
		
		<!-- END PAGE CONTAINER-->

	

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






