function valEmail() {
	var Email = document.getElementById("email");
	var Email_v = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if(!Email.value.match(Email_v)) {
		alert("Incorrect Email!");
		Email.focus();
		document.getElementById("EmailIV").style.display = "block";
		document.getElementById("EmailV").style.display = "None";
		document.getElementById("Emailusr").style.display = "block";
	}
	else {
		document.getElementById("EmailV").style.display = "block";	
		document.getElementById("EmailIV").style.display = "None";
		document.getElementById("Emailusr").style.display = "block";
	}							
}

function valPhone() {
	var Phone = document.getElementById("pno");
	var Phone_no=/^[0-9+]{4}-[0-9]{7}$/;

	if(!Phone.value.match(Phone_no)) {
		alert("Incorrect Phone Number!");
		Phone.focus();
		document.getElementById("PhoIV").style.display = "block";
		document.getElementById("PhoV").style.display = "None";
	}
	else {
		document.getElementById("PhoV").style.display = "block";	
		document.getElementById("PhoIV").style.display = "None";
	}							
}

function verPass() {
	var Pass = document.getElementById("uP").value;
	var Pass1 = document.getElementById("uP1").value;

	if(Pass != Pass1) {
		document.getElementById("verS").style.display = "none";
		document.getElementById("verSS").style.display = "none";		
		document.getElementById("verF").style.display = "block";
		document.getElementById("verFF").style.display = "block";
	}
	else{
		document.getElementById("verF").style.display = "none";
		document.getElementById("verFF").style.display = "none";
		document.getElementById("verS").style.display = "block";
		document.getElementById("verSS").style.display = "block";
	}							
}


function valUsr() {
	var User = document.getElementById("usrq");
	var User_no=/^[a-zA-Z0-9]+([_ -]?[a-zA-Z0-9])*$/

	if(!User.value.match(User_no)) {
		alert("Incorrect Username!");
		User.focus();
		document.getElementById("usrV").style.display = "none";	
		document.getElementById("usrIV").style.display = "block";		
	}
	else {
		document.getElementById("usrV").style.display = "block";	
		document.getElementById("usrIV").style.display = "None";
	}							
}