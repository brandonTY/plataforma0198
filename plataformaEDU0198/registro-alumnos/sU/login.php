<?php session_start(); ?>
<html>
	<head>
		<link rel="shortcut icon" href="http://localhost/plataformaEDU0198/imagenes/login/login.png">
		<title> INICIAR SESIÓN </title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		
		<h2> Inicio de Sesión</h2>

		<form role="form" name="login" action="php/login.php" method="post">
		  
		  <div class="form-group">
		    <label for="username"> Matricula </label>
		    <input type="text" class="form-control" id="username" name="username" maxlength="8" pattern="[0-9]{8}" title="Formato de la matricula: 150198 seguido de dos digitos." placeholder="Escribe aqui tu matricula de alumno">
		  </div>
		  
		  <div class="form-group">
		    <label for="password"> Contrase&ntilde;a </label>
		    <input type="password" class="form-control" id="password" name="password" minlength="8" maxlength="15" title="Contraseña: Min. 8 caracteres, Max. 15" placeholder="Escribe aqui tu Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-default"> Acceder </button>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>
</html>