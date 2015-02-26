<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>
		<title>Nouveau Client : Formulaire d'enregistrement</title>
		<script type="text/javascript" src="Fonction/verification.js"></script>
	</head>

	<body>
		<div id="formulaire">
			<h1>Cr�ez un compte LocaGame</h1>
			<form action="enregistrerClient.php" method="post" name="sign" id="formSign" onSubmit="return verifForm();" >
				
				<label>Login (pseudo) : </label>
					<input name="login" id="login" type="text" maxlength="30" value="" />
				<br />
	
				<label>Mot de passe :</label>
					<input name="password" class="input" id="password" type="password" maxlength="25" value="" />
				<br />
	
				<label>Ressaisir mot de passe :</label>
					<input name="confirm_password" class="input" id="confirm_password"
					type="password" maxlength="25" value="" onChange="verifNewPassword();"/>
				<br />
	
				<label>Nom : </label>
					<input name="nom" class='input' id="nom" maxlength="25" type="text" value="" />
				<br />
				
				<label>Pr�nom : </label>
					<input name="prenom" class="input" id="prenom" maxlength="25" type="text" value="" />
				<br />
				
				<label>Adresse :  </label>
					<label>Numero : </label>
						<input name="numRue" class='input' id="numRue" maxlength="10" type="text" value="" />
					<br />
				
					<label>Rue : </label>
						<textarea rows="1" cols="50" name="rue" class="input" id="rue" maxlength="50" value=""></textarea>
					<br />
					
					<label>Code Postal : </label>
						<input name="cp" class='input' id="cp" maxlength="5" type="text" value="" />
				<br />
				
					<label>Ville : </label>
						<input name="ville" class="input" id="ville" maxlength="50" type="text" value="" />
				<br />
				<br />
				
				<input type="submit" value="Inscription" />
			</form>
		</div>
	</body>
</html>