<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<head>
		<title> LocaGame : Paiement en cours</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	
	<body>
		<?php 
		echo "<div><img src='../img/cb.jpg' alt='logo des cartes bleues' /></div><br/>";
		echo " Paiement accepté, veuillez patienter. Redirection en cours.";
		header ("Refresh: 5;url=../interfaceClient.php");
		?>
	</body>
</html>