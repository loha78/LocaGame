<?php
function connexion($nomBDD){
	$co = mysqli_connect("localhost","root","",$nomBDD) or die ("erreur connexion BD");
	return $co;
}

function rechercherJeux($co, $support){
	$resultat = mysqli_query($co,"SELECT j.imageJeu, t.titreJeu, t.numJeu FROM jeu j, titre t WHERE j.numJeu = t.numJeu AND j.support ='$support'") or die("erreur requete rechercherJeux");
	return $resultat;
}

function rechercherUnJeu($co, $numJeu, $support){
	$resultat = mysqli_query($co,"SELECT j.imageJeu, t.titreJeu, t.descriptionJeu FROM jeu j, titre t WHERE j.numJeu = t.numJeu AND j.numJeu ='$numJeu' AND j.support = '$support'") or die("erreur requete rechercherUnJeu");
	return $resultat;
}
?>