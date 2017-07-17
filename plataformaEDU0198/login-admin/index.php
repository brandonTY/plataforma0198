<?php session_start(); ?>
<!DOCTYPE html>
<html >
<head>
<link rel="shortcut icon" href="imagenes/login.png">
  <meta charset="UTF-8">
  <title>Login | Alumnos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  
  
  
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/menu.css">

  
</head>

<body>

  <header>
  <nav>
    <ul>
      <li><a href="../index.html">Inicio</a></li>
      <li><a href="../login-alumnos/index.php">Iniciar Alumnos</a></li>
      <li><a href="../registro-alumnos/registro.php">Registrarse</a></li>
      <li><a href="../login-maestros/index.php">Iniciar Maestros</a></li>
      <li><a href="index.php">Iniciar Administrador</a></li>
      <li><a href="#">Contacto</a></li>
    </ul>
  </nav>
</header>
  
  <div class="login-page">
  <div class="form">
  
   
    <form class="login-form" name="login_alumnos" action="php/login.php" method="post">
    <h1>Login Administrador</h1>
      <input type="text" id="username" name="username" placeholder="Nombre de Usuario ó Email"/>
      <input type="password" id="password" name="password" minlength="8" maxlength="15" title="Contraseña: Min. 8 caracteres, Max. 15" placeholder="Contraseña"/>
      <button type="submit">Acceder</button>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
    <script type="js/menu.js"></script>
    <script src="js/valida_login.js"></script>

</body>
</html>
