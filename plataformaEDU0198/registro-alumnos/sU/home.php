<?php
include ('php/conexion.php');
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

$matricula=$_SESSION["user_id"];
$sql1= "select * from alumnos where id_alumno = '".$matricula."'";

$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$nombre = $r["nombre"];
				$a_paterno = $r["apellido_paterno"];
 
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title> Panel | Plataforma </title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">


		<h2> Bienvenido <STRONG><?php echo $nombre; ?>   <?php echo $a_paterno; ?> </STRONG></h2>

</div>
</div>
</div>
	
<?php
}
?>

</body>	 
</html>
