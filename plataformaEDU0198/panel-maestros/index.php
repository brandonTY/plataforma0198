<?php
include ('../login-maestros/acceso.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Panel | Maestros</title>
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/contenido.css">
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
	<h2> Bienvenido <STRONG>Prof. <?php echo $nombre; ?>   <?php echo $a_paterno; ?> </STRONG></h2>
	
<table>
			<?php
			$grado=$_SESSION["grado"];
			$sql1 = "select * from alumnos where grado = '".$grado."'";

			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$matriculaa = $r["matricula"];
				$nom = $r["nombre"];
				$a_pat = $r["apellido_paterno"];
				$email = $r["email"];
				$grado = $r["grado"];
				$fecha_login = ["fecha_login"];
				//$fin = strtotime($fecha_login);
				//$mostrar = date("Y-m-d H:i:s", $fin);  
				//$fecha_logout = ["fecha_logout"];
			?>
			
<?php
}
?>
        </table>
</section>
</body>
</html>