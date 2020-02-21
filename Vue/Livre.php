<h3> Détail du livre </h3>

<div id="detail">
	Titre : <?php echo htmlspecialchars($livre->getTitre()); ?> <br />
	Auteur : <?php echo htmlspecialchars($livre->getAuteur()); ?> <br />
	Description : <?php echo htmlspecialchars($livre->getDescription()); ?> <br />
	date de publication : <?php $date = explode("-", $livre->getDate()); echo htmlspecialchars($date[2] . "/" . $date[1] . "/" . $date[0]); ?> <br />
</div>

<h3> Commentaires </h3>
<div>
	<?php
		foreach($idsCommentaires as $commentaireInfos)
		{
			$commentaire = new Commentaire($commentaireInfos['id']);
	?>
		<p class="comment">
			<b><?php echo htmlspecialchars($commentaire->getAuteur()); ?></b> a écrit : <br />
			<?php echo htmlspecialchars($commentaire->getCommentaire()); ?> <br />
			le <span class="date"><?php echo htmlspecialchars($commentaire->getDate()); ?></span>
		</p>
	<?php
		}
	?>
</div>

<h3> Ajouter un commentaire </h3>

<form method="post" action="index.php?module=commentaire">
	<label for="nom"> Nom </label>
	<input type="text" id="nom" name="nom"><br />
	<label for="commentaire">Commentaire</label><br />
	<textarea name="commentaire" id="commentaire"></textarea><br />
	<input type="hidden" name="idLivre" value="<?php echo $livre->getId(); ?>">
	<input type="submit" value="Envoyer"><input type="reset" value="Annuler">
</form>
