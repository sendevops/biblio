<?php
		// controleur du module admin
		include_once('App/Accueil.php');
		include_once('App/Livre.php');
		include_once('App/Commentaire.php');

		if (isset($_GET['action'])) // si action est defini dans l'url
		{
			switch ($_GET['action'])
			{
				case 'accueil':
					$accueil = getAccueil();
					include_once('Vue/AdminFormAccueil.php');
				break;

				case 'creerLivre':
					include_once('Vue/AdminFormLivre.php');
				break;

				case 'editLivre':
				if (isset($_GET['idLivre']))
				{
					$idLivre = intval($_GET['idLivre']);
					$livre = new Livre($idLivre);
					$idsCommentaires = getIdCommentaires($livre->getId());
				}
				include_once('Vue/AdminFormLivre.php');
				break;

				case 'supLivre':
					$idLivre = intval($_GET['idLivre']);
					deleteLivre($idLivre);
				break;

				default: // si la valeur de action est differente de celles citées ci-dessus
					echo 'Page introuvable';
			}
		}
		else{ // cas ou action n'existe pas dans l'url
			$livresIds = getIdLivres();
			include_once('Vue/AdminMain.php');
		}

		if (isset($_POST['objet'])){
			switch ($_POST['objet']) {
				case 'accueil':
					setAccueil($_POST['titre'], $_POST['contenu']);
				break;

				case 'livre':
					if (!empty($_POST['titre']) && !empty($_POST['auteur']) && !empty($_POST['description']) && !empty($_POST['date'])){
					  if (isset($_POST['idLivre'])){
						$idLivre = (int)$_POST['idLivre'];
						$livre = new Livre($idLivre);
						$livre->modifier($_POST['titre'], $_POST['auteur'], $_POST['description'], $_POST['date']);
					  }
					  else{
						addLivre($_POST['titre'], $_POST['auteur'], $_POST['description'], $_POST['date']);
					  }
					}
				break;

				default:
			}
			header('location:index.php?module=admin');
		}
