<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<head>
		<title> LocaGame : Site de location de jeux videos </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/position.css">
		<script type="text/javascript" src="Fonction/verification.js"></script>
		<?php 
			session_start();
			include "Fonction/fonctionPHP.php";

			if (isset($_GET["login"])){
				$login = $_GET["login"];
			}
			else{
				if (isset($_SESSION["login"])){
					$login=$_SESSION["login"];
				}
				else{
					$login = "";
				}
			}
			
			if (! isset($_SESSION["current"])){
				$_SESSION["current"] = "init";
			}
			
			$numJeu="";
			$support="";
			
			if (isset($_SESSION["jeu"])){
				$numJeu=$_SESSION["jeu"];
			}
			
			if (isset($_SESSION["support"])){
				$support=$_SESSION["support"];
			}
			
			$co = connexion("locagames");
			$resultatTitre = rechercherTitreJeu($co, $numJeu);
			if (mysqli_num_rows($resultatTitre) == 1){
				$tab = mysqli_fetch_assoc($resultatTitre);
				$titreJeu = $tab["titreJeu"];
			}
			else{
				$titreJeu = "jeu inconnu";
			}
			
			$resultatConsole = rechercherConsole($co, $support);
			if (mysqli_num_rows($resultatConsole) == 1){
				$tab = mysqli_fetch_assoc($resultatConsole);
				$console = $tab["nomSupport"];
			}
			else{
				$console = "console inconnue";
			}
			
			// Recuperer l'historique de location du client
			$co = connexion("locagames");
			$resultat = rechercherHistorique($co, $login);
		?>
	</head>
	
	<body>
		<!-- Bloc principal de contenu  -->
		<div id="bloc_principal">
					
			<!--  Bandeau superieur du haut -->
			<header class="header">
				<?php	
					if ($_SESSION["current"] == "init"){ 
				
				?>	
					<div id="formConnexion">
						<form name="identify" action="Outils/verifierLogin.php" method="post" onSubmit=" return verifFormLogin();" >
						<p>
							<label class="titreConnexion">Login</label>
								<input type="text" name="login" /><br/>
							<label class="titreConnexion">Mot de passe</label>
								<input type="password" name="password" /><br/>
							<input id="buttonConnexion" type="submit" value="Connexion" />
						</p>
						</form>
					</div>
					<div class="client">
						<a id="nouveauClient" href="nouveauClient.php">Creer un nouveau compte</a>
					</div>
				<?php 
					}
					else{
				?>
					<div class="clientHeader">
						<p id="nouveauClient" >Bienvenue <?php echo $login ?></p> 
						<form action="Outils/logout.php" name="deconnecter" onSubmit="return confDisconnect()">
								<input type="submit" name="deconnecter" value="Deconnexion" />
						</form>
					</div>
				<?php 
					}
				?>
			</header>	
			
			<section class="section">	
				
				<!--  Barre laterale a gauche -->
				<div class="lateral">
					<p id="lTitre">Selectionner une plateforme ou chercher un jeu: </p>
					<form name="rechercheJeu" id="rechercheJeu" action="Outils/rechercherJeu.php" method="post" onSubmit="return verifFormRecherche();">
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
					<!--  Menu -->
					<div class="menu"> 
						<ul> 
							<li><a href="index.php"><img class="topMenu" src="img/home.png" width="30px"></img></a></li>
					<?php 
						if ($_SESSION["current"] == "logged"){
							echo "<li class='topMenuTxt'><a href='interfaceClient.php'> Mon Compte </a></li>";
						}
					?>
						</ul> 
					</div>	
					<h1> Bienvenue <?php echo $login ?></h1>
					<?php 
						if (isset($_GET["loc"])){
							echo "<p> (test memo à supprimer plus tard) Vous avez choisi le jeu n° $numJeu et le support n° $support </p>";
							echo "<form name='confirmLoc' action='paiement.php?numJeu=$numJeu&support=$support&login=$login' method='POST'>";
							echo "	<p><label> Louer $titreJeu sur $console </label><br/>";
							echo "  <select name='duree'>";
							echo " 		<option value='sem'> 1 semaine </option>";
							echo "		<option value='mois'> 1 mois </option>";
							echo " 	</select></p>";
							echo "<p> Tarif = <input type='text' name='choix' value=''/></p>";
							echo "<button type='button' onclick='window.history.go(-2);'/>Annuler</button>";
							echo "<input type='submit' value='Confirmer' />";
						}
					?>
					<p>Vos jeux en cours de location:</p>
					<div>
					<?php 
					
					$nbLigne = count($resultat);
					
					if ($nbLigne == 0){
						echo "<p>Aucune location existante<p>";
					} else {
						while ($tab = mysqli_fetch_assoc($resultat)){
							$titre = $tab["titreJeu"];
							$dateEnvoi = $tab["dateEnvoi"];
							$dateRetour = $tab["dateRetour"];
							
							echo "<p>'$titre' loué le '$dateEnvoi' à rendre le '$dateRetour'";
							}
					}
					?>
					</div>
				</div>
				
				<div class="vide"></div>
			</section>
			
			<footer class="footer">
				<div id="copyright">
					<p >Copyright Jordan et Loha 2015</p>
				</div>
			</footer>
		</div>
		<?php 
		mysqli_close($co);
		?>
	</body>
</html>
