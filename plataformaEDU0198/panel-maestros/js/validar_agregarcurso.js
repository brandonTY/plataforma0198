with(document.form_agregarcurso){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && clave_curso.value==""){
			ok=false;
			alert("Debe escribir una clave para el curso");
			username.focus();
		}
		if(ok && materia.value==""){
			ok=false;
			alert("Debe escribir materia refente al curso");
			password.focus();
		}
        if(ok && nombre_curso.value==""){
			ok=false;
			alert("Debe escribir el nombre del curso");
			password.focus();
		}
        if(ok && objetivo_curso.value==""){
			ok=false;
			alert("Debe escribir el objetivo general del curso");
			password.focus();
		}
		if(ok){ submit(); }
	}
}