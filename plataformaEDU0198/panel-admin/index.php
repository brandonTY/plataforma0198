<?php
include ('../login-admin/acceso.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Panel | Admin</title>
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/contenido.css">
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="maestros.php">Maestros</a></li>
			<li><a href="../login-admin/php/logout.php">Cerrar Sesión</a></li>
		</ul>
	</nav>
</header>

	<section class="contenido">
	<h2> Bienvenido <STRONG>Admin. <?php echo $nombre; ?>   <?php echo $a_paterno; ?> </STRONG></h2>
	
</section>
</body>
</html>