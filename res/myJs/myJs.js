function displayAdd(obj){
	var idContent = 'add';
	var intContent   = document.getElementById(idContent);
	if(intContent.style.display == "none"){
		intContent.style.display = "block";
	}
	else{intContent.style.display = "none";}
}
function displayAvatar(obj){
	if(avatarUpProfile.style.display == "none"){
		avatarUpProfile.style.display = "block";
	}
	if(formUpPass.style.display != "none"){
		formUpPass.style.display = "none";
	}
	if(formInfoUp.style.display != "none"){
		formInfoUp.style.display = "none";
	}
}

function displayInfo(obj){
	if(formInfoUp.style.display == "none"){
		formInfoUp.style.display = "block";
	}
	if(formUpPass.style.display != "none"){
		formUpPass.style.display = "none";
	}
	if(avatarUpProfile.style.display != "none"){
		avatarUpProfile.style.display = "none";
	}
}

function displayPass(obj){
	if(formUpPass.style.display == "none"){
		formUpPass.style.display = "block";
	}
	if(formInfoUp.style.display != "none"){
		formInfoUp.style.display = "none";
	}
	if(avatarUpProfile.style.display != "none"){
		avatarUpProfile.style.display = "none";
	}
}