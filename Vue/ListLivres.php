
<h3> Liste des livres </h3>
<table>
	<tr>
		<th> Titre </th>
		<th> Auteur </th>
		<th> Description </th>
		<th> Date de publication </th>
	</tr>
	<?php
		foreach ($livresIds as $livreInfos)
		{
			$livre = new Livre($livreInfos['id']);
	?>
		<tr>
			<td><a href="index.php?module=livre&id=<?php echo $livre->getId(); ?>">
						<?php echo htmlspecialchars($livre->getTitre()); ?>
					</a>
			</td>
			<td> <?php echo htmlspecialchars($livre->getAuteur()); ?></td>
			<td> <?php echo htmlspecialchars($livre->getDescription()); ?></td>
			<td> <?php $date = $livre->getDate(); $date = explode("-", $date); echo htmlspecialchars($date[2] . "/" . $date[1] . "/" . $date[0]); ?></td>
		</tr>
		<?php
		}
		?>
</table>
