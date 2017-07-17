<?php

if(!empty($_POST)){
	if(isset($_POST["grado"]) &&isset($_POST["grupo"]) &&isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["apellidopaterno"]) &&isset($_POST["apellidomaterno"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["grado"]!=""&& $_POST["grupo"]!=""&& $_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from alumnos where matricula=\"$_POST[username]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Matricula o email ya se encuentran registrados.\");window.location='../registro.php';</script>";
			}
			$sql = "insert into alumnos(grado,grupo,matricula,nombre,apellido_paterno,apellido_materno,email,password,fecha_registro) value (\"$_POST[grado]\",\"$_POST[grupo]\",\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[apellidopaterno]\",\"$_POST[apellidomaterno]\",\"$_POST[email]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Ahora Ingresa a la plataforma\");window.location='../../login-alumnos/index.php';</script>";
			}
		}
	}
}



?>