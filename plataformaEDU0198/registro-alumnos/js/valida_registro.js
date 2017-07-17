with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		
		if(ok && grado.value==""){
			ok=false;
			alert("Debe seleccionar un Grado");
			grado.focus();
		}

		if(ok && grupo.value==""){
			ok=false;
			alert("Debe seleccionar un Grupo");
			grado.focus();
		}
		
		if(ok && username.value==""){
			ok=false;
			alert("Debe escribir una Matricula");
			username.focus();
		}
		
		if(ok &&fullname.value==""){
			ok=false;
			alert("Debe escribir su Nombre");
			fullname.focus();
		}

		if(ok &&apellidopaterno.value==""){
			ok=false;
			alert("Debe escribir su Apellido Paterno");
			apellidopaterno.focus();
		}

		if(ok &&apellidomaterno.value==""){
			ok=false;
			alert("Debe escribir su Apellido Materno");
			apellidomaterno.focus();
		}
		
		if(ok && email.value==""){
			ok=false;
			alert("Debe escribir su Correo Electrónico");
			email.focus();
		}
		
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir una Contraseña");
			password.focus();
		}
		
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de contraseña");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Las contraseñas no coinciden");
			confirm_password.focus();
		}


		if(ok){ submit(); }
	}
}
