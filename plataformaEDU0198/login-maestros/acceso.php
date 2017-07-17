<?php
include ('php/conexion.php');
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='../index.html';</script>";
}

$matricula=$_SESSION["user_id"];
$sql1= "select * from maestros where id_maestro = '".$matricula."'";

$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$nombre = $r["nombre"];
				$a_paterno = $r["apellido_paterno"];
			}
 
?>