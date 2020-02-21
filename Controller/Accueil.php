<?php
	// controleur du module accueil
	include_once('App/Accueil.php');

	$accueil = getAccueil();

	include_once('Vue/AccueilMain.php');
