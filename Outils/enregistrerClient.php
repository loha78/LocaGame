<?php
	session_start();
	include ("../Fonction/fonctionPHP.php");
	
	$_SESSION["login"] = $_POST["login"];
	$login = $_SESSION["login"];
	if (isset($_SESSION["open"])){
		$session = $_SESSION["open"];
	}
	else{
		$session = "no";
	}
	
	$nom=  $_POST["nom"];
	$prenom=  $_POST["prenom"];
	$mdp=  $_POST["password"];
	$_SESSION["adresse"] =  $_POST["numRue"]." ".$_POST["rue"]." ".$_POST["cp"]." ".$_POST["ville"];
	$adresse = $_SESSION["adresse"];
	
	$requeteInsert = "insert into LocaGames.client values('$login', '$nom', '$prenom', '$mdp', '$adresse', 0)";

	$co = connexion("locaGames");
	mysqli_query($co, $requeteInsert);
	mysqli_close($co);

	if ( $session == "yes"){	
		header("Location: ../interfaceClient.php?login=$login&codeJeu=$jeu&support=$support");
	}
	else{
		header('Location: ../interfaceClient.php');
	}
?>