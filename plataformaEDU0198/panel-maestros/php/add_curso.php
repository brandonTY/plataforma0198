<?php
//Se incluye los datos para conectar a la DB
include("con_db.php");

//Se validan que hayan llegado las variables y que no esten vacias
if(
    isset($_POST["grado"], $_POST["clave_curso"], $_POST["materia"], $_POST["nombre_curso"], $_POST["objetivo_curso"]) 
    and $_POST["grado"]!="" and $_POST["clave_curso"]!="" and $_POST["materia"]!="" and $_POST["nombre_curso"]!="" and $_POST["objetivo_curso"]!="")
{
    //Traspasamos las variables locales para evitar complicaciones con las comillas
    $grado = $_POST["grado"];
    $clave_curso = $_POST["clave_curso"];
    $materia = $_POST["materia"];
    $nombre_curso = $_POST["nombre_curso"];
    $objetivo_curso = $_POST["objetivo_curso"];
    
    //Preparamos la orden SQL
    $consulta = "insert into cursos(grado,clave_curso,materia,nombre_curso,objetivos_generales) values ('$grado','$clave_curso','$materia','$nombre_curso','$objetivo_curso')";
    
    //Aqui se ejecutara esa orden
} else{
    print "<script>alert(\"Por favor llene el formulario\");window.location='../agregar_curso.php';</script>";
}
    //Aqui se verifica si se agrego el registro o no
if (mysqli_query($con,$consulta)){
    print "<script>alert(\"Curso creado exitosamente. Ahora agregue las unidades.\");window.location='../cursos.php';</script>";
} else{
    print "<script>alert(\"Hubo un error interno no pudo crearse el curso\");window.location='../agregar_curso.php';</script>";
}

?>