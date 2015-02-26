<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<head>
		<title> LocaGame : Site de location de jeux videos </title>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<script type="text/javascript" src="Fonction/verification.js"></script>
		<?php 
			session_start() ;
			include "Fonction/fonctionPHP.php";			
			if (isset($_GET["login"])){
				$login = $_GET["login"];
			}
			else{
				$login = "";
			}
			
			if (! isset($_SESSION["current"])){
				$_SESSION["current"] = "init";
			}
			
		?>
	</head>
	
	<body>
		<!-- Bloc principal de contenu  -->
		<div class="bloc_central">
			
			<!--  Bandeau superieur du haut -->
			<div class="header">
				<img src="img/banniere_jeux.png" alt="Image d'entête">
				<?php if ($_SESSION["current"] == "init"){ 
				
					?>	
					<div class="formConnexion">
						<form name="identify" action="verifierLogin.php" method="post" onSubmit=" return verifFormLogin();" >
						<p>
							<label>Login</label>
								<input type="text" name="login" />
							<label>Mot de passe</label>
								<input type="text" name="password" />
							<input type="submit" value="Connexion" />
						</p>
						</form>
					</div>
					<div class="creerCompte">
						<a href="nouveauClient.php">Creer un nouveau compte</a>
					</div>
				<?php 
				}
				else{
					?>
					<div class="loginClient">
						Bienvenue <?php echo $login ?> <br/>
						<form action="logout.php" name="deconnecter">
							<input type="submit" name="deconnecter" value="Deconnecter" />
					</div>
				<?php 
				}
				?>
			</div>
		
			<!--  Barre laterale a gauche -->
			<div class="lateral">
				Selectionner une plateforme ou chercher un jeu:<br/>
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
				<div class="logoSupport"><a href="listeJeu.php?support=1"><img src="img/PS4/logo_ps4.jpg" alt="Logo de la PS4"></img></a></div>
				<div class="logoSupport"><a href="listeJeu.php?support=2"><img src="img/XB1/logo_xb1.jpg" alt="Logo de la XB1"></img></a></div>
			</div>
			
			<!--  Bloc central de la page -->
			<div class="central">
				<h1> Ici va se trouver le corps de la page</h1>
				<h3> Des schemas et du blabla</h3>
			</div>
			
			<div class="vide">
				
			</div>
		</div>	
	</body>
</html>