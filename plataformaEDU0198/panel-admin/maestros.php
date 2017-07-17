<?php
session_start();
include ('../login-admin/php/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Maestros</title>
	<link rel="stylesheet" href="css/contenido.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/tablas.css">
</head>
<body>

  <header>
  <nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="maestros.php">Maestros</a></li>
      <li><a href="../login-admin/php/logout.php">Cerrar Sesión</a></li>
    </ul>
  </nav>
</header>

<section class="contenidotablas">

<h1> MAESTROS  </h1>

  <table>
  <thead>
    <tr>
      <th>Matricula</th>
      <th>Grupo</th>
      <th>Nombre</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Correo Electrónico</th>
      <th>Último Acceso</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      $sql1 = "select * from maestros";

      $query = $con->query($sql1);
      while ($r=$query->fetch_array()) {
        $matriculaa = $r["matricula"];
        $grupo = $r["grupo"];
        $nom = $r["nombre"];
        $a_pat = $r["apellido_paterno"];
        $a_mat = $r["apellido_materno"];
        $email = $r["email"];
?>
      <td><strong><?php echo $matriculaa; ?></strong></td>
      <td><?php echo $grupo; ?></td>
      <td><?php echo $nom; ?></td>
      <td><?php echo $a_pat; ?></td>
      <td><?php echo $a_mat; ?></td>
      <td><?php echo $email; ?></td>
      <td></td>
    </tr>
 </tbody>
     <?php
}
?>

</table>
</section>

</body>
</html>