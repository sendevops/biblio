<h3> Modification du message d'accueil </h3>

	<form action="index.php?module=admin" method="post">
			<label for="titre"> Titre </label> <br />
			<input name="titre" id="titre" value="<?php echo $accueil['titre']; ?>" size="35" /><br /><br />

			<label for="contenu"> Contenu </label><br />
			<textarea cols="65" rows="30" name="contenu" id="contenu"> <?php echo $accueil['contenu']; ?> </textarea><br /><br />

				<input type="hidden" name="objet" value="accueil" />

			<center>
				<input type="submit" value="Modifier" />
				<input type="reset" value="Annuler" />
			</center>
	</form>
