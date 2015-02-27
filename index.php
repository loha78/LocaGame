<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<head>
		<title> LocaGame : Site de location de jeux videos </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
		<div id="bloc_principal">
					
			<!--  Bandeau superieur du haut -->
			<div class="header">
				<p><a id="headerClickable" href="index.php"></a></p>
				<?php 	if ($_SESSION["current"] == "init"){ 
				
				?>	
					<div id="formConnexion">
						<form name="identify" action="verifierLogin.php" method="post" onSubmit=" return verifFormLogin();" >
						<p>
							<label class="titreConnexion">Login</label>
								<input type="text" name="login" /><br/>
							<label class="titreConnexion">Mot de passe</label>
								<input type="text" name="password" /><br/>
							<input id="buttonConnexion" type="submit" value="Connexion" />
						</p>
						</form>
					</div>
					<div class="client">
							<a href="nouveauClient.php">Creer un nouveau compte</a>
					</div>
				<?php 
					}
					else{
					?>
					<div class="client">
						Bienvenue <?php echo $login ?> 
						<form action="logout.php" name="deconnecter">
								<input type="submit" name="deconnecter" value="Deconnexion" />
						</div>
					<?php 
						}
					?>
			</div>	
				
			<!--  Barre laterale a gauche -->
			<div class="lateral">
				<p id="lTitre">Selectionner une plateforme ou chercher un jeu: </p>
				<form name="rechercheJeu" id="rechercheJeu" action="rechercherJeu.php" method="post" onSubmit="return verifFormRecherche();">
					<label class="formLib"> Titre </label>
						<input class="inRecherche" type="text" name="titre" value="" maxlength="30" width=20px/>
					<label class="formLib"> Plateforme </label>
						<select name="support">
							<option value=""> </option>
							<option value="1">PlayStation 4</option>
							<option value="2">XBox One</option>
						</select>
					<input type="submit" value="Rechercher"/>
				</form>
				<div class="logoSupport"><a href="listeJeu.php?support=1"><img class="logo" src="img/PS4/logo_ps4.jpg" alt="Logo de la PS4"></img></a></div>
				<div class="logoSupport"><a href="listeJeu.php?support=2"><img class="logo" src="img/XB1/logo_xb1.jpg" alt="Logo de la XB1"></img></a></div>
			</div>
				
			<!--  Bloc central de la page -->
			<div class="central">
					<h1> Ici va se trouver le corps de la page</h1>
					<h3> Des schemas et du blabla et des caract�res sp�ciaux $�%��#�</h3>
			</div>
				
			<div class="vide">
						
			</div>
		</div>	
	</body>
</html>