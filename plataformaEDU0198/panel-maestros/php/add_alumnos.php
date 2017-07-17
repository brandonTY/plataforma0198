<?php

if(!empty($_POST)){
	if(isset($_POST["grado"]) &&isset($_POST["grupo"]) &&isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["apellidopaterno"]) &&isset($_POST["apellidomaterno"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["grado"]!=""&& $_POST["grupo"]!=""&& $_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from alumnos where matricula=\"$_POST[username]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Matricula ya se encuentra registrada.\");window.location='../agregar_alumnos.php';</script>";
			}
			$sql = "insert into alumnos(grado,grupo,matricula,nombre,apellido_paterno,apellido_materno,password,fecha_registro) value (\"$_POST[grado]\",\"$_POST[grupo]\",\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[apellidopaterno]\",\"$_POST[apellidomaterno]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro de Alummno Exitoso\");window.location='../alumnos.php';</script>";
			}
		}
	}
}



?>