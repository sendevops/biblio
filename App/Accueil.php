<?php
	function getAccueil()
	{
			include ('connexionbdd.php');
			$retour = $bdd->query('SELECT * from accueil');
			$reponse = $retour->fetch();
			return $reponse;
	}

	function setAccueil($titre, $contenu)
	{
		include ('connexionbdd.php');
		$retour = $bdd->prepare('UPDATE accueil SET titre = :titre, contenu = :contenu') OR die(print_r($bdd->errorinfo()));
		$retour->execute(array(
			'titre' => $titre,
			'contenu' => $contenu,
		));
	}
?>
