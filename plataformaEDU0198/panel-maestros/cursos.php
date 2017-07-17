<?php
include ('../login-maestros/acceso.php');
  
      $grado=$_SESSION["grado"];
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cursos</title>
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/contenido.css">
	<link rel="stylesheet" href="css/tablas.css">
	
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
	<h1>CURSOS GRADO: <?php echo $grado; ?></h1>
	
	  <table>

 <thead>
    <tr>
     <th>Id</th>
     <th>Materia</th>
      <th>Nombre</th>
      <th>Clave</th>
    </tr>
  </thead>
  
    <tr>
     <?php
      $grado=$_SESSION["grado"];
      $sql1 = "select * from cursos where grado = '".$grado."'";

      $query = $con->query($sql1);
      while ($r=$query->fetch_array()) {
        $id_curso = $r["id_curso"];
        $materia = $r["materia"];
        $nom_curso = $r["nombre_curso"];
        $clave_curso = $r["clave_curso"];
       
?>
      <td><?php echo $id_curso; ?> </td>
      <td><?php echo $materia; ?> </td>
      <td><strong><?php echo $nom_curso; ?></strong></td>
      <td><?php echo $clave_curso; ?> </td>
    </tr>
         <?php
}
?>
    </table>
<a href="agregar_curso.php"><button>Agregar curso</button></a>

</section>


</body>
</html>