<?php
	session_start();
	include "../Fonction/fonctionPHP.php";
	$login = $_POST["login"];
	$_SESSION["login"] = $login;
	$jeu=$_SESSION["jeu"];
	$support=$_SESSION["support"];
	$mdp = $_POST["password"];
	$requete = "select * from client where login = '$login' and motDePasse = '$mdp'";
	
	$co = connexion("locaGames");
	$result = mysqli_query($co, $requete) or die("Requete impossible");
	if (mysqli_num_rows($result) == 1){
		$_SESSION["current"] = "logged";
		header("Location: ../interfaceClient.php?login=$login&codeJeu=$jeu&support=$support&loc=1");
	}
	else{
		?>
		<script type="text/javascript">
			alert("Login et Mot de passe inconnu");
			history.back(); 
		</script>
	<?php 
	}

?>