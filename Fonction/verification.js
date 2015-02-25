function verifNewPassword(){
	var pw = document.getElementById("password").value;
	var secPw = document.getElementById("confirm_password").value;
	if (pw != secPw){
		alert("Mot de Passe different");
		return false;
	}
	else return true;
}

function verifForm(){
	if ((sign.login.value == "") || (sign.password.value == "") || (sign.nom.value == "") || (sign.prenom.value == "") || (sign.adresse.value == "")){
		alert("Veuillez saisir tous les champs!");
		return false;
	}
	else return (verifNewPassword());	
}