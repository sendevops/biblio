<?php
	// controleur du module livres
	include_once('App/Livre.php');
	include_once('App/Commentaire.php');

	if (isset($_GET['id']))
	{
		$livre = new Livre($_GET['id']);
		$idsCommentaires = getIdCommentaires($livre->getId());
		include_once('Vue/Livre.php');
	}
	else
	{
		$livresIds = getIdLivres();
		include_once('Vue/ListLivres.php');
	}
