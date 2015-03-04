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

function rechercherNumJeu($co, $titreJeu){
	$resultat = mysqli_query($co,"SELECT t.numJeu FROM titre t WHERE t.titreJeu ='$titreJeu'") or die("erreur requete rechercherUnJeu");
	return $resultat;
}

function rechercherDispo($co, $numJeu, $support){
	$total = mysqli_query($co,"SELECT COUNT(*) FROM exemplaire e WHERE e.numJeu='$numJeu' AND e.support='$support'") or die("erreur requete rechercherDispo_Step1");
	$enLocation = mysqli_query($co,"SELECT COUNT(*) FROM exemplaire e, location l WHERE e.numExemplaire = l.numExemplaire AND e.numJeu='$numJeu' AND e.support='$support' AND l.dateRetour IS NULL") or die("erreur requete rechercherDispo_Step2");
	$total = mysqli_fetch_row($total);
	$enLocation = mysqli_fetch_row($enLocation);
	$resultat = $total[0] - $enLocation[0];
	return $resultat;
}


function rechercherHistorique($co, $login){
	$resultat = mysqli_query($co,"SELECT t.titreJeu, l.dateEnvoi, l.dateRetour FROM location l, exemplaire e, titre t WHERE l.numExemplaire = e.numExemplaire AND e.numJeu = t.numJeu AND login='$login'") or die("erreur requete rechercherJeux");
	return $resultat;
}

function rechercherTitreJeu($co, $numJeu){
	$resultat = mysqli_query($co, "Select titreJeu from titre where numJeu = '$numJeu'") or die ("erreur requete rechercherTitreJeu");
	return $resultat;
}

function rechercherConsole($co, $support){
	$resultat = mysqli_query($co, "Select nomSupport from support where numSupport = '$support'") or die ("erreur requete rechercherTitreJeu");
	return $resultat;
}
?>
