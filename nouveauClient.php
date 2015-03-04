<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>
		<title>Nouveau Client : Formulaire d'enregistrement</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/position.css">
		<script type="text/javascript" src="Fonction/verification.js"></script>
		<?php 
			session_start() ;
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
			
			if (isset ($_GET["open"])){
				$_SESSION["open"] = $_GET["open"];
			}
			
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
					
					<div class="formulaireEnre">
						<h3>Pas encore inscrit ?</h3><br/>
						<form action="Outils/enregistrerClient.php" method="post" name="sign" id="formSign" onSubmit="return verifForm();" >
							
							<div class="colGauche">
								<p><label>Nom : </label><br/>
									<input name="nom" class='inEnre' id="nom" maxlength="25" type="text" value="" />
								</p>
								
								<p><label>Prénom : </label><br/>
									<input name="prenom" class="inEnre" id="prenom" maxlength="25" type="text" value="" />
								</p>
								
								<p id="fTitre"><label>Adresse </label><br/>
									<p><label>Numero : </label>
										<input name="numRue" id="numRue" maxlength="10" type="text" value="" />
									</p>
								
									<p><label>Rue : </label><br/>
										<textarea rows="1" cols="40" name="rue" id="rue" maxlength="50" value=""></textarea>
									</p>
									
									<p><label>Code Postal : </label>
										<input name="cp" id="cp" maxlength="5" type="text" value="" />
									</p>
										
									<p><label>Ville : </label>
										<input name="ville" id="ville" maxlength="50" type="text" value="" />
									</p>
							</div>
							
							<div class="colDroite" >
								<p><label>Login (pseudo) : </label><br/>
									<input class="inEnre" name="login" id="login" type="text" maxlength="30" value="" />
								</p>
					
								<p><label>Mot de passe :</label><br/>
									<input class="inEnre" name="password" id="password" type="password" maxlength="25" value="" />
								</p>
					
								<p><label>Confirmer mot de passe :</label><br/>
									<input class="inEnre" name="confirm_password" id="confirm_password" type="password" maxlength="25" value="" onChange="verifNewPassword();"/>
								</p>
								<p class="buttonInscription"><input type="submit" value="Inscription" /></p>
							</div>	
						</form>
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
	</body>
</html>