<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<head>
		<title> LocaGame : Details du Jeu</title>
		
		<?php
			include "Fonction/fonctionPHP.php";

			$numJeu = $_GET["codeJeu"];
			$support = $_GET["support"];

			//recuperer le jeu par son numero de jeu
			$co = connexion("locagames");

			$resultat = rechercherUnJeu($co, $numJeu, $support);
			$tab = mysqli_fetch_assoc($resultat);
			$img = $tab["imageJeu"];
			$title = $tab["titreJeu"];
			$description = $tab["descriptionJeu"];
		?>	
	</head>
	<body>
		<div id="blocJeu">
			<div id="cover"><img src='<?php echo $img ?>' width=200px/></div>
			<div id="title"><?php echo $title?></div>
			<div id="description"><?php echo $description?></div>
		</div>
	</body>
</html>