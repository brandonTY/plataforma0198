<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from maestros where (matricula=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$grado=$r["grupo"];
				$user_id=$r["id_maestro"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Usuario o Contraseña invalidos.\");window.location='../index.php';</script>";
			}else{
				session_start();
				$_SESSION["grado"]=$grado;
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../../panel-maestros/cargando.php';</script>";				
			}
		}
	}
}



?>