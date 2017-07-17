<?php session_start(); ?>
<!DOCTYPE html>
<htm lang="es">
	<head>
	<meta charset="UTF-8">
		<link rel="shortcut icon" href="../imagenes/login/registro16.png">
		<title>Formulario de Registro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/registro.css">
	</head>

	<body>
	
	<header>
	<nav>
		<ul>
			<li><a href="../index.html">Inicio</a></li>
			<li><a href="../login-alumnos/index.php">Iniciar Alumnos</a></li>
			<li><a href="registro.php">Registrarse</a></li>
			<li><a href="../login-maestros/index.php">Iniciar Maestros</a></li>
			<li><a href="../login-admin/index.php">Iniciar Administrador</a></li>
			<li><a href="#">Contacto</a></li>
		</ul>
	</nav>
</header>

<section class="contenedoregistro">
<div class="container">
<div class="row">
<div class="col-md-6">

		
		<h2>Registro de Alumnos</h2>

		<form role="form" name="registro" action="php/registro.php" method="post">
		  
		  <br>
		  
		  <div class="form-group">
		    <label for="grado"> Grado: </label>
		  <select class="form-control" name="grado" id="grado">
		  	<option value="" disabled selected> --SELECCIONE UN GRADO-- </option>
		  	<option value="PRIMERO"> PRIMERO </option>
		  	<option value="SEGUNDO"> SEGUNDO </option>
		  	<option value="TERCERO"> TERCERO </option>
		  </select>
		  </div>

		  <div class="form-group">
		  <label for="grupo"> Grupo:</label>
		  <select class="form-control" name="grupo" id="grupo">
		  	<option value="" disabled selected> --SELECCIONE UN GRUPO-- </option>
		  	<option value="A"> A </option>
		  	<option value="B"> B </option>
		  	<option value="C"> C </option>
		  	<option value="D"> D </option>
		  </select>
		  </div>
		  
		  <div class="form-group">
		    <label for="username"> Matricula: </label>
		    <input type="text" class="form-control" id="username" name="username" maxlength="8" pattern="[0-9]{8}" title="Formato de la matricula: 150198 seguido de dos digitos." placeholder="Matricula de alumno">
		  </div>
		 
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
		    <label for="email"> Correo Electrónico: </label>
		    <input type="email" class="form-control" id="email" name="email" maxlength="40" title="Correo Electrónico. Máx 40 caracteres." placeholder="Correo Electrónico">
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
		</div>
		</div>
		</div>


		<script src="js/valida_registro.js"></script>
		</section>
	</body>
</html>