<?php
//Se incluye los datos para conectar a la DB
include("con_db.php");

//Se validan que hayan llegado las variables y que no esten vacias
if(
    isset($_POST["no_tema"], $_POST["nom_tema"], $_POST["des_tema"], $_POST["cont_tema"], $_POST["url_tema"]) 
    and $_POST["no_tema"]!="" and $_POST["nom_tema"]!="" and $_POST["des_tema"]!="" and $_POST["cont_tema"]!="" and $_POST["url_tema"]!="")
{
    //Traspasamos las variables locales para evitar complicaciones con las comillas
    $no_tema = $_POST["no_tema"];
    $nom_tema = $_POST["nom_tema"];
    $des_tema = $_POST["des_tema"];
    $cont_tema = $_POST["cont_tema"];
    $url_tema = $_POST["url_tema"];
    
    //Preparamos la orden SQL
    $consulta = "insert into temas(no_tema,nombre_tema,descripcion_tema,contenido_tema,url_tema) values ('$no_tema','$nom_tema','$des_tema','$cont_tema','$url_tema')";
    
    //Aqui se ejecutara esa orden
} else{
    print "<script>alert(\"Por favor llene el formulario\");window.location='../agregar_temas.php';</script>";
}
    //Aqui se verifica si se agrego el registro o no
if (mysqli_query($con,$consulta)){
    print "<script>alert(\"Tema Agregado Exitosamente\");window.location='../cursos.php';</script>";
} else{
    print "<script>alert(\"Hubo un error interno no pudo agregar el tema\");window.location='../agregar_curso.php';</script>";
}

?>