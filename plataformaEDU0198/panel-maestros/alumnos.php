<?php
include ('../login-maestros/acceso.php');
  
      $grado=$_SESSION["grado"];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alumnos | Primero</title>
	<link rel="stylesheet" href="css/contenido.css">
  <link rel="stylesheet" href="css/menu.css">
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

<section class="contenidotablas">

<h1> ALUMNOS GRADO: <?php echo $grado; ?>  </h1>

	

  <table>

 <thead>
    <tr>
      <th>Matricula</th>
      <th>Nombre</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Correo Electrónico</th>
      <th>Promedio General</th>
      <th>Último Acceso</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <?php
      $grado=$_SESSION["grado"];
      $sql1 = "select * from alumnos where grado = '".$grado."'";

      $query = $con->query($sql1);
      while ($r=$query->fetch_array()) {
        $matriculaa = $r["matricula"];
        $nom = $r["nombre"];
        $a_pat = $r["apellido_paterno"];
        $a_mat = $r["apellido_materno"];
        $email = $r["email"];
?>
      <td><strong><?php echo $matriculaa; ?></strong></td>
      <td><?php echo $nom; ?></td>
      <td><?php echo $a_pat; ?></td>
      <td><?php echo $a_mat; ?></td>
      <td><?php echo $email; ?></td>
      <td></td>
      <td></td>
    </tr>
         <?php
}
?>
 </tbody>


</table>
</section>

</body>
</html>