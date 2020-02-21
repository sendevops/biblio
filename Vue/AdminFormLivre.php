
<h3><?php if(isset($idLivre)){echo 'Modifier un livre';}else{ echo 'Ajouter un livre';} ?></h3>
<div>
	<form action="index.php?module=admin" method="post" enctype="multipart/form-data">
		<p>
			<label for="titre"> Titre </label> <br />
			<input name="titre" id="titre" value="<?php if(isset($livre)) {echo $livre->getTitre();}?>" size="35"/><br /><br />

			<label for="auteur"> Auteur </label> <br />
			<input name="auteur" id="auteur" value="<?php if(isset($livre)) {echo $livre->getAuteur();}?>" size="35"/><br /><br />

			<label for="date"> Date de publication </label> <br />
			<input name="date" id="date" type="date" value="<?php if(isset($livre)) {echo $livre->getDate();}?>"/><br /><br />

			<label for="description"> Description </label><br />
			<textarea name="description" id="description"><?php if(isset($livre)){echo $livre->getDescription();}?></textarea><br /><br />
			<?php
			if(isset($livre))
			{
				echo '<input type="hidden" name="idLivre" value="' . $livre->getId() . '"/>' ;
			}
			?>
				<input type="hidden" name="objet" value="livre" />
				<input type="submit" value="<?php if(isset($livre)){echo 'Modifier';}else{ echo 'Ajouter' ; } ?>" />
				<input type="reset" value="Annuler" />
		</p>
	</form>
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
</div>
