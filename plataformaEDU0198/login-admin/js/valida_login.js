with(document.login_alumnos){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Debe escribir su nombre de usuario ó su email");
			username.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir su contraseña");
			password.focus();
		}
		if(ok){ submit(); }
	}
}
