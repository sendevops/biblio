<?php
	class Livre
	{
		protected $id;
		protected $titre;
		protected $auteur;
		protected $description;
		protected $date;

		public function __construct($idLivre)
		{
			include ('connexionbdd.php');
			$retour = $bdd->prepare('SELECT * from livres WHERE id = ?');
			$retour->execute(array($idLivre));
			$livre = $retour->fetch();

			$this->id = $livre['id'];
			$this->titre = $livre['titre'];
			$this->auteur = $livre['auteur'];
			$this->description = $livre['description'];
			$this->date = $livre['date'];
		}

		public function getId()
		{
			return $this->id;
		}

		public function getTitre()
		{
			return $this->titre;
		}

		public function getAuteur()
		{
			return $this->auteur;
		}

		public function getDescription()
		{
			return $this->description;
		}

		public function getDate()
		{
			return $this->date;
		}

		public function modifier($titre, $auteur, $description, $date)
		{
			$this->titre = $titre;
			$this->auteur = $auteur;
			$this->description = $description;
			$this->date = $date;
			include ('connexionbdd.php');
			$retour = $bdd->prepare('UPDATE livres SET titre = :titre, auteur = :auteur, description = :description, date = :date WHERE id = :idlivre') OR die(print_r($bdd->errorinfo()));
			$retour->execute(array(
				'titre' => $this->titre,
				'auteur' => $this->auteur,
				'description' => $this->description,
				'date' => $this->date,
				'idlivre' => $this->id
			));

		}
	}

	function getIdLivres()
	{
		include ('connexionbdd.php');
		$retour = $bdd->query('SELECT id from livres');
		$donnees = array();
		while ($idLivre = $retour->fetch())
			{
				$donnees[] = $idLivre;
			}
		return $donnees;
	}

	function addLivre($titre, $auteur, $description, $date)
	{	
		include ('connexionbdd.php');
		$retour= $bdd->prepare('INSERT INTO livres(titre, auteur, description, date) VALUES(:titre, :auteur, :description, :datefr)');
		$retour->execute(array(
		'titre' => $titre,
		'auteur' => $auteur,
		'description' => $description,
		'datefr' => $date,
		));
	}

	function deleteLivre($idLivre)
	{
		include ('connexionbdd.php');
		$retour = $bdd->prepare('DELETE from livres WHERE id = ?');
		$retour->execute(array($idLivre));
		$retour = $bdd->prepare('DELETE from commentaires WHERE idlivre = ?');
		$retour->execute(array($idLivre));
	}



		/*SETTERS PAR ATTRIBUT

		public function setId($newId)
		{
			if (!empty($newId))
				{
					$this->id = $newId;
					include ('connexionbdd.php');
				}
		}

		public function setTitre($newTitre)
		{
			$this->titre = $newTitre;
			include ('connexionbdd.php');
			$retour = $bdd->prepare('UPDATE livres SET titre = :titre WHERE id = :idlivre') OR die(print_r($bdd->errorinfo()));
			$retour->execute(array(
				'titre' => $this->titre,
				'idlivre' => $this->id
			));
		}

		public function setAuteur($newAuteur)
		{
			$this->auteur = $newAuteur;
			include ('connexionbdd.php');
			$retour = $bdd->prepare('UPDATE livres SET auteur = :auteur WHERE id = :idlivre') OR die(print_r($bdd->errorinfo()));
			$retour->execute(array(
				'auteur' => $this->auteur,
				'idlivre' => $this->id
			));
		}

		public function setDescription($newDescription)
		{
			$this->description = $newDescription;
			include ('connexionbdd.php');
			$retour = $bdd->prepare('UPDATE livres SET description = :description WHERE id = :idlivre') OR die(print_r($bdd->errorinfo()));
			$retour->execute(array(
				'description' => $this->description,
				'idlivre' => $this->id
			));
		}

		public function setDate($newDate)
		{
			$this->date = $newDate;
			include ('connexionbdd.php');
			$retour = $bdd->prepare('UPDATE livres SET date = :date WHERE id = :idlivre') OR die(print_r($bdd->errorinfo()));
			$retour->execute(array(
				'date' => $this->date,
				'idlivre' => $this->id
			));
		}
		*/