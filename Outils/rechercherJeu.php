<?php
include "../Fonction/fonctionPHP.php";

$titreJeu = $_POST["titre"];
$support = $_POST["support"];

//recuperer les jeux par support
$co = connexion("locagames");

$resultat = rechercherNumJeu($co, $titreJeu);
$tab = mysqli_fetch_assoc($resultat);
$numJeu =  $tab["numJeu"];

if (mysqli_num_rows($resultat) == 1) {
	header("Location: ../detailJeu.php?codeJeu=$numJeu&support=$support");
} else {
	?>
	<script type="text/javascript">
		alert("Jeu non trouvé");
		history.back();
	</script>
	<?php 
}
?>