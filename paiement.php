<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<head>
		<title> LocaGame : Formulaire de paiement </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="Fonction/verification.js"></script>
		<?php 
			$login = $_GET["login"];
			$numJeu = $_GET["numJeu"];
			$support = $_GET["support"];
		?>
	</head>
	
	<body>
		<div><img src="img/cb.jpg" alt="logo des cartes bleues" /></div><br/>
		<form action="Outils/validerPaiement.php" onSubmit= >
			<p><label>Titulaire</label>
				<input type="text" value="" /></p>
			<p><label>Numero de carte</label>
				<input type="text" value="" /></p>
			<p><label>Date d'expiration</label>
				<input type="text" maxlength="7" value="mm/aaaa" /></p>
			<p><label>Cryptogramme</label>
				<input type="text" maxlength="3" value="" /></p>
			<input type="submit" value="Valider Paiement" />
		</form>
	
	</body>
</html>
