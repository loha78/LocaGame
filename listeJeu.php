

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

	<head>
		<title> LocaGame : Tous nos Jeux par console</title>
		<?php
			include "Fonction/fonctionPHP.php";

 			$support = $_GET["support"];

// 			 $support = '2';
 
 			//recuperer les jeux par support
 			$co = connexion("locagames");
 
 			$resultat = rechercherJeux($co, $support);
			?>
	</head>
	<body>
		<div>
			<table>
 			<?php 
 				while ($tab = mysqli_fetch_assoc($resultat)){
 					$img = $tab["imageJeu"];
 					$numJeu = $tab["numJeu"];
					echo "<tr>";
 					echo "<td><a href=detailJeu.php?codeJeu=$numJeu&support=$support><img src='$img' width=200px/></a></td><td><a href=detailJeu.php?codeJeu=$numJeu&support=$support>".$tab["titreJeu"]."</a></td>";
				 }
			 ?>
			</table>
		</div>

	</body>
</html>
<?php 
mysqli_close($co);
?>