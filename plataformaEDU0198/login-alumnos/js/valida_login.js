with(document.login_alumnos){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Debe escribir una matricula ó su email");
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
