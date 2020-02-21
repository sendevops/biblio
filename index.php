<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css">
		<title>Bibliothèque centrale</title>
	</head>
	<body>
		<div id="wrapper"> 
			<div id="header">
				<div id="subheader">
					<div class="container">
						<p>La plus grande bibliothèque en ligne</p>
							<a href="#">Guest</a>
							<a href="#">Panier</a> 
							<a href="#">Télécharger l'app</a>
							<a href="#">Assistance technique</a>
							<a href="#">Contact</a>
				</div><!-- fin subheader -->
				<div id="mainheader">
					<div id="logo">
						<span id="illustration-logo">biblio</span>
						<span id="illustration-logo2">TECH</span>
					</div> 
					<div id="search"> <!--search bar -->
						<form action="">
							<input type="text" name="search" placeholder="Tapez ici pour rechercher" class="search-area">
							<input type="submit" name="submit" value="Rechercher" class="search-btn">
						</form>
					</div> <!--fin search bar -->
					<div id="user-menu">
						<ul>
							<li><a href="#">Connexion</a></li>
							<li><a href="#">Inscription</a></li>
						</ul>
					</div>
				</div> <!-- fin mainheader -->
			</div> <!-- fin header -->
			<div id="navigation">
				<nav>
					<a href="index.php">Accueil</a>
					<a href="index.php?module=livre">Livres</a>
					<a href="#">Qui sommes nous ?</a>
					<a href="#">Nos partenaires</a>
					<a href="#">Nous contacter</a>
					<a href="index.php?module=admin">Administration</a>
				</nav>
			</div>
			<div class="container">
				<?php
				/*	if (isset($_GET['module']))
					{
						switch ($_GET['module'])
						{
							case 'livre':
								include_once('Controller/Livre.php');
							break;

							case 'commentaire':
								include_once('Controller/Commentaire.php');
							break;

							case 'admin':
								include_once('Controller/Admin.php');
							break;

							default:
								include_once('Controller/Accueil.php');
						}
					}
					else
					{
						include_once('Controller/Accueil.php');
					}
			*/	?>
			</div> <!-- fin container -->
			<!-- <div id="footer"> 
				<p> Copyright Bibliothèque Centrale 2018 </p>
			</div> --> 
		</div> <!-- fin wrapper -->
		<script src="js/jquery.js"></script>
		<script src="js/jquery.bxslider.js"></script>
		<script src="js/myjs.js"></script>

	</body>
</html>