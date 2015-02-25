<?php
function connexion($nomBDD){
	$co = mysqli_connect("localhost","root","",$nomBDD) or die ("erreur connexion BD");
	return $co;
}


?>