<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<head>
		<title> LocaGame : Site de location de jeux videos </title>
		<?php 
		session_start();	
		$login = $_SESSION["login"];
		?>
	</head>
	
	<body>
		<h1> Bienvenue <?php echo $login ?></h1>
		<?php echo $_SESSION["adresse"] ?>
	</body>
</html>