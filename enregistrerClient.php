<?php
	session_start();
	include ("Fonction/fonctionPHP.php");
	
	$_SESSION["login"] = $_POST["login"];
	$login = $_SESSION["login"];
	$nom=  $_POST["nom"];
	$prenom=  $_POST["prenom"];
	$mdp=  $_POST["password"];
	$_SESSION["adresse"] =  $_POST["numRue"]." ".$_POST["rue"]." ".$_POST["cp"]." ".$_POST["ville"];
	$adresse = $_SESSION["adresse"];
	
	$requeteInsert = "insert into LocaGames.client values('$login', '$nom', '$prenom', '$mdp', '$adresse', 0)";

	$co = connexion("locaGames");
	mysqli_query($co, $requeteInsert);
	mysqli_close($co);

	header('Location: interfaceClient.php');

?>