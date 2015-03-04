<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<head>
		<title> LocaGame : Formulaire de paiement </title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="Fonction/verification.js"></script>
		<script type="text/javascript">
		function verifPaiement(){
			if ((/[0-9]{2}\/{1}[0-9]{4}/.test(formPaiement.validite.value)) && (/[0-9]{16}/.test(formPaiement.numCarte.value)) && (/[0-9]{3}/.test(formPaiement.crypto.value))) {
				if (formPaiement.titulaire.value != ""){
				return true;
				}
				else{
					alert("Veuillez saisir le titulaire de la carte.");
					return false;
				}
			}
			else{
				alert("Carte invalide");
				return false;
			}
		}
		</script>
		<?php 
			$login = $_GET["login"];
			$numJeu = $_GET["numJeu"];
			$support = $_GET["support"];
		?>
	</head>
	
	<body>
		<div><img src="img/cb.jpg" alt="logo des cartes bleues" /></div><br/><br/>
		<p>Montant de la transaction : <?php echo $_POST["choix"]; ?> </p>
		<form name="formPaiement" action="Outils/validerPaiement.php" method="post" onSubmit="return verifPaiement();" >
			<p><label>Titulaire</label>
				<input name="titulaire" type="text" value="" /></p>
			<p><label>Numero de carte</label>
				<input name="numCarte" type="text" value="" /></p>
			<p><label>Date d'expiration</label>
				<input name="validite" type="text" maxlength="7" value="mm/aaaa" /></p>
			<p><label>Cryptogramme</label>
				<input name="crypto" type="text" maxlength="3" value="" /></p>
			<input type="submit" value="Valider Paiement" />
		</form>
	
	</body>
</html>
