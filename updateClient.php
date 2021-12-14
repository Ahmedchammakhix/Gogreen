<?php
	include '../../config.php';
	include_once '../../controller/clientC.php';
    include_once '../../model/client.php';
	
session_start() ;


    
    $error = "";
    $clientt= NULL ;
    $clientC = new clientC(); 
    $client1C = new clientC();
	

			
			
       if(isset($_POST['Envoyer']))
	{
		
		if (
            !empty($_POST['nom']) &&
            !empty($_POST['prenom']) &&
            !empty($_POST['dateNais']) &&
            !empty($_POST['cin']) &&
            !empty($_POST['email']) &&
            !empty($_POST['mdp']) &&
            !empty($_POST['reduction']) &&
            !empty($_POST['carte']) 
        ) {
			
		 $clientt = new client(
		 
                $_POST['nom'],
                $_POST['prenom'], 
                $_POST['dateNais'],
                $_POST['cin'],
                $_POST['email'],
                $_POST['mdp'],
                $_POST['reduction'],
                $_POST['carte']
			);
			var_dump($clientt['nom']);
			
          $clientC->modifierClient($clientt, $_GET['id']);
            header('Location:showClient.php');
        }
        else
            $error = "Missing information";
	}
//


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
	<title>Modifier Client</title>

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
    	<!-- JS verif-->
        <script src="js/script.js"></script>

</head>

<body class="animsition">
<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
$sql="SELECT * from client where id_client=(:id)";
			$db = config::getConnexion();
			
				$query=$db->prepare($sql);
				$query-> bindParam(':id', $id, PDO::PARAM_STR);

				$query->execute();

$client=$query->fetch();	}
			?>

    <div class="page-wrapper">
       

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="logo.png" alt="" />
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
                            <a href="showProduit.php">
                                <i class="fa fa-pie-chart"></i>Produits</a>
                        </li>
                        <li>
                            <a href="showCategorie.php">
                                <i class="fa fa-lightbulb-o"></i>Catégories</a>
                        </li>
                     
                      
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
		<div class="page-container">
			
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						
						<div class="row">
                            <div class="col-lg-9">
								<br>
                              
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                    <a href="showClient.php">  <i class="zmdi zmdi text-center"></i>Retour à la liste</button></a>
                                </div>
                            </div>
                        
                                 <hr>
                                 <br>
                                <h2 class="title-1 m-b-25 text-center">Modifier Client</h2>
                                <div id="error">
					
                                    <?php echo $error; 

 									 ?>
                                </div>
                                <div id="erreur"></div>
                                <?php
		 ?>
                <form  method="POST" >
                  <table  align="center">
                  <tr> 
                    <td> <label for="nom">Nom: </label>
                    </td> 
                </tr>
                 <tr>
                    <td><input type="text" name="nom" id="nom"  required value = "<?php echo htmlentities($client['nom']); ?>"></td>
                </tr>
                <tr> 
                    <td> <label for="prenom">Prenom: </label>
                    </td> 
                </tr>
                 <tr>
                    <td><input type="text" name="prenom" id="prenom"  required value = "<?php echo $client['prenom']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="dateNais">Date De Naissance: </label>  </td> 
                </tr> 
                <tr>
                <td><input type="date" name="dateNais" id="dateNais" required value = "<?php echo $client['dateNais']; ?>"maxlength="20"></td>
                </tr>
                <tr>
                    <td> <label for="cin">Carte D Identité: </label>  </td> 
 
                </tr> 
                <tr>
                <td><input type="text" name="cin" id="cin" required value = "<?php echo $client['cin']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>    <label for="surface">Adresse Mail: </label></td> 
                </tr> 
                <tr>
                    <td><input type="email" name="email" id="email" required value = "<?php echo $client['email']; ?>" maxlength="20"></td> 
                </tr>
                <tr>
                    <td>    <label for="mdp">Mot De Passe: </label></td> 
                </tr> 
                <tr>
                    <td><input type="password" name="mdp" id="mdp" required value = "<?php echo $client['mdp']; ?>" maxlength="20"></td> 
                </tr>
                <tr>
                    <td>    <label for="reduction">Reduction: </label></td> 
                </tr> 
                <tr>
                    <td><input type="text" name="reduction" id="reduction" required value = "<?php echo $client['reduction']; ?>" ></td> 
                </tr>
                <tr>
                    <td>    <label for="carte">Carte: </label></td> 
                </tr> 
                <tr>
                    <td><input type="text" name="carte" id="carte" required value = "<?php echo $client['carte']; ?>" ></td> 
                </tr>
               
                <tr></tr>
                <tr></tr>
                <tr>
                    <td></td><td> <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <input type="submit" class="au-btn au-btn-icon au-btn--blue" value="Envoyer" onclick="verifLocal();">
                                    <input type="reset" class="au-btn au-btn-icon au-btn--blue" value="Annuler"> 
                                </div>
                            </div>
                </div></td></tr>
                
                
                  </table>
        </form>                   
        <?php
		
		?>                                                         
   </div>
</div>
						
                 	<div class="row">
								<div class="col-md-12">
										<div class="copyright">
												<p>&copy; Copyright.Tous droits réservés. <a href="../../../view/front/1.php"></a>.</p>
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







