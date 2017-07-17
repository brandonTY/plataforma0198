<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from administrador where (nombre=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id_administrador"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Usuario o Contraseña invalidos.\");window.location='../index.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;

				print "<script>window.location='../../panel-admin/cargando.php';</script>";				
			}
		}
	}
}



?>