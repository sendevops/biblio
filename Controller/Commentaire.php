<?php
  if (isset($_POST))
  {
  	if(!empty($_POST['nom']) && !empty($_POST['commentaire']) && !empty($_POST['idLivre']))
  	{
  		$_POST['idLivre'] = (int)$_POST['idLivre'];
  		include_once('APP/Commentaire.php');
    	addCommentaire($_POST['idLivre'], $_POST['nom'], $_POST['commentaire']);
  	}
  	else
  	{

  	}
  }
  else 
  {

  }
 header('location:index.php?module=livre&id=' . $_POST['idLivre']);
