

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<head>
		<title> LocaGame : Tous nos Jeux par console</title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<?php
			include "Fonction/fonctionPHP.php";

 			$support = $_GET["support"];
 
 			//recuperer les jeux par support
 			$co = connexion("locagames");
 
 			$resultat = rechercherJeux($co, $support);
			?>
	</head>
	<body>
		
		<!-- Bloc principal de contenu  -->
		<div class="bloc_central">
			
			<!--  Bandeau superieur du haut -->
			<div class="header">
				<img src="img/banniere_jeux.png" alt="Image d'entête">
				<div class="formConnexion">
					<form name="identify" action="#" method="post" >
					<p>
						<label>Login</label>
							<input type="text" name="loginClient" />
						<label>Mot de passe</label>
							<input type="text" name="password" />
						<input type="submit" value="Connexion" />
					</p>
					</form>
				</div>
				<div class="creerCompte">
					<a href="nouveauClient.php">Creer un nouveau compte</a>
				</div>
			</div>
		
			<!--  Barre laterale a gauche -->
			<div class="lateral">
				<h2>Selectionner une plateforme ou chercher un jeu:</h2><br/>
				<form id="rechercherJeu" action="rechercherJeu.php" method="post" onSubmit="return verifFormRecherche();">
					<label id="formLib"> Titre :</label>
						<input type="text" name="titre" value="" maxlength="30"/>
					<label id="formLib"> Plateforme :</label>
						<select name="support">
							<option value=null> </option>
							<option value="1">PlayStation 4</option>
							<option value="2">XBox One</option>
						</select>
					<input type="submit" value="Rechercher"/>
				</form>
				<a href="listeJeu.php?support=1"><img id="logoSupport" src="img/PS4/logo_ps4.jpg" alt="Logo de la PS4"></img></a><br/>
				<a href="listeJeu.php?support=2"><img id="logoSupport" src="img/XB1/logo_xb1.jpg" alt="Logo de la XB1"></img></a>
			</div>	
			
			<!--  Code de Jordane -->
			<div class="central">
				<table>
	 			<?php 
	 				while ($tab = mysqli_fetch_assoc($resultat)){
	 					$img = $tab["imageJeu"];
	 					$numJeu = $tab["numJeu"];
						echo "<tr>";
	 					echo "<td><a href=detailJeu.php?codeJeu=$numJeu&support=$support><img src='$img' width=200px/></a></td><td><a href=detailJeu.php?codeJeu=$numJeu&support=$support>".$tab["titreJeu"]."</a></td>";
					 }
				 ?>
				</table>
			</div>
		</div>
	</body>
</html>
<?php 
mysqli_close($co);
?>