<?php
include ('../login-maestros/acceso.php');
  
      $grado=$_SESSION["grado"];
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Agregar Alumnos</title>
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/contenido.css">
	<link rel="stylesheet" href="css/formulario_addalumno.css">
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="alumnos.php">Alumnos</a></li>
			<li><a href="agregar_alumnos.php">Agregar Alumnos</a></li>
			<li><a href="cursos.php">Cursos</a></li>
			<li><a href="../login-maestros/php/logout.php">Cerrar Sesión</a></li>
		</ul>
	</nav>
</header>


<section class="contenido">
<fieldset>

<legend>Formulario alta alumno</legend>

<form class="form_addalumnos" name="formulario_addalumno" action="php/add_alumnos.php" method="post" accept-charset="utf-8">


        <p>
		    <label> Grado: 
		  <select class="form-control" name="grado" id="grado">
		  	<option value="<?php echo $grado; ?>"> <?php echo $grado; ?> </option>
		  	</select>
		  	</label>
		  	</p>
        
		 <p>
		  <label> Grupo:
		  <select class="form-control" name="grupo" id="grupo">
		  	<option value="" disabled selected> --SELECCIONE UN GRUPO-- </option>
		  	<option value="A"> A </option>
		  	<option value="B"> B </option>
		  	<option value="C"> C </option>
		  	<option value="D"> D </option>
		  </select>
		  </label>
		  </p>
		  
		  
		 <p>
		    <label> Matricula: 
		    <input type="text" class="form-control" id="username" name="username" maxlength="8" pattern="[0-9]{8}" title="Formato de la matricula: 150198 seguido de dos digitos." placeholder="Matricula del alumno">
		    </label>
		    </p>
		 
		 
		  <div class="form-group">
		    <label for="fullname"> Nombre: </label>
		    <input type="text" class="form-control" id="fullname" name="fullname" minlength="4" maxlength="20" pattern="[A-Za-z]{4,20}"
		    title="Nombre: Mínimo 4 caracteres, Máximo 20. SOLO LETRAS" placeholder="Nombre">
		  </div>

		  <div class="form-group">
		    <label for="apellidopaterno"> Apellido Paterno: </label>
		    <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno" minlength="4" maxlength="20" pattern="[A-Za-z]{4,20}" title="Apellido Paterno: Mínimo 4 caracteres, Máximo 20. SOLO LETRAS" placeholder="Apellido Paterno">
		  </div>

		  <div class="form-group">
		    <label for="apellidomaterno"> Apellido Materno: </label>
		    <input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno" minlength="4" maxlength="20" pattern="[A-Za-z]{4,20}" title="Apellido Materno: Mínimo 4 caracteres, Máximo 20. SOLO LETRAS" placeholder="Apellido Materno">
		  </div>
		  
		  <div class="form-group">
		    <label for="password"> Contrase&ntilde;a: </label>
		    <input type="password" class="form-control" id="password" name="password" minlength="8" maxlength="15" title="Contraseña: Min. 8 caracteres, Max. 15. Puedes usar Letras, Números y simbolos $#%&" placeholder="Contrase&ntilde;a">
		  </div>
		  
		  <div class="form-group">
		    <label for="confirm_password"> Confirmar Contrase&ntilde;a: </label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" minlength="8" maxlength="15" title="Contraseña: Min. 8 caracteres, Max. 15 Puedes usar Letras, Números y simbolos $#%&" placeholder="Confirmar Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-default"> Registrar </button>
	
</form>
</fieldset>
<script src="js/valida_registro.js"></script>
</section>
	
</body>
</html>