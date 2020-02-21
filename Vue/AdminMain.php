<h2> Page d'administration </h2>


	<span class="bouton"><a href="index.php?module=admin&action=accueil">  Modifier le message d'accueil </a></span><br /><br />
	<span class="bouton"><a href="index.php?module=admin&action=creerLivre"> Ajouter un livre </a></span>

	<h3> Liste des livres </h3>
	<table>
		<tr>
			<th> Titre </th>
			<th> Auteur </th>
			<th> Description </th>
			<th> Date de publication </th>
			<th> Action </th>
		</tr>
		<?php
			foreach ($livresIds as $livreInfos)
			{
				$livre = new Livre($livreInfos['id']);
		?>
			<tr>
				<td> <a href="index.php?module=livre&id=<?php echo $livre->getId();?>"><?php echo htmlspecialchars($livre->getTitre()); ?></a></td>
				<td> <?php echo htmlspecialchars($livre->getAuteur()); ?></td>
				<td> <?php echo htmlspecialchars($livre->getDescription()); ?></td>
				<td> <?php $date = $livre->getDate(); $date = explode("-", $date); echo htmlspecialchars($date[2] . "/" . $date[1] . "/" . $date[0]); ?></td>
				<td>
					<a href="index.php?module=admin&action=editLivre&idLivre=<?php echo $livre->getId(); ?>"><img src="images/edit.png" title="Modifier" alt="Modifier"></a>
					<a href="index.php?module=admin&action=supLivre&idLivre=<?php echo $livre->getId(); ?>"><img src="images/delete.png" title="Supprimer" alt="Supprimer"></a>
				</td>
			</tr>
			<?php
			}
			?>
	</table>
