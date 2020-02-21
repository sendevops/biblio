<?php
  class Commentaire
  {
    private $idCommentaire;
    private $idLivre;
    private $auteur;
    private $commentaire;
    private $date;

    public function __construct($idCommentaire)
    {
      $idCommentaire = (int)$idCommentaire;
			include ('connexionbdd.php');
			$retour = $bdd->prepare('SELECT * from commentaires WHERE id = ?');
			$retour->execute(array($idCommentaire));
			$commentaire = $retour->fetch();

			$this->idCommentaire = $commentaire['id'];
			$this->idLivre = $commentaire['idlivre'];
			$this->auteur = $commentaire['nom'];
			$this->commentaire = $commentaire['commentaire'];
			$this->date = $commentaire['date'];
    }

    public function getIdCommentaire()
    {
      return $this->idCommentaire;
    }

    public function setIdCommentaire($newIdCommentaire)
    {
      $this->idCommentaire = $newIdCommentaire;
    }

    public function getIdLivre()
    {
      return $this->idLivre;
    }

    public function setIdLivre($newIdLivre)
    {
      $this->idLivre = $newIdLivre;
    }

    public function getAuteur()
    {
      return $this->auteur;
    }

    public function setAuteur($newAuteur)
    {
      $this->idCommentaire = $newAuteur;
    }

    public function getCommentaire()
    {
      return $this->commentaire;
    }

    public function setCommentaire($newDescription)
    {
      $this->commentaire = $newCommentaire;
    }

    public function getDate()
    {
      return $this->date;
    }

    public function setDate($newDate)
    {
      $this->date = $newDate;
    }
  }

  function getIdCommentaires($idLivre)
  {
    include('connexionbdd.php');
    $retour = $bdd->prepare('SELECT id from commentaires WHERE idlivre = ?');
    $retour->execute(array($idLivre));
    $reponse = array();
    while ($donnees = $retour->fetch())
    $reponse[] = $donnees;
    return $reponse;
  }

  function addCommentaire($idLivre,$nom, $commentaire)
  {
    include ('connexionbdd.php');
    $retour= $bdd->prepare('INSERT INTO commentaires(idlivre, nom, commentaire, date) VALUES(:idlivre, :nom, :commentaire, NOW())');
    $retour->execute(array(
        'idlivre' => $idLivre,
        'nom' => $nom,
        'commentaire' => $commentaire,
    ));
  }