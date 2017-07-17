<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from alumnos where (matricula=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id_alumno"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Matricula o Contraseña invalidos.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				$fecha_login = date("Y-m-d H:i:s");
				$sql = "update alumnos set fecha_login = '$fecha_login' where matricula = '$_POST[username]'";

				print "<script>window.location='../../panel-cursos/index.php';</script>";				
			}
		}
	}
}



?>