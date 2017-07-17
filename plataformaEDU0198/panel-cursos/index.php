<?php
include ('../login-alumnos/acceso.php');
    //$grado=$_SESSION["grado"];
?>

<!DOCTYPE HTML>
<html>
	<head>
	<link rel="shortcut icon" href="../imagenes/panel_cursos/panel_cursos.png">
		<title>Panel | Cursos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
	</head>
	<body>

	<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a class="logo">
									<span class="symbol"><img src="images/cursos.svg" alt="" /></span><span class="title">PANEL DE CURSOS</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menú</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menú</h2>
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="generic.html"></a></li>
							<li><a href="generic.html"></a></li>
							<li><a href="generic.html"></a></li>
							<li><a href="../login-alumnos/php/logout.php">Cerrar Sesión</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1><!--[-->Bienvenido alumno <strong><?php echo $nombre; ?>   <?php echo $a_paterno; ?></strong><br> Aqui podras encontrar una serie de cursos y poder prepararte para una evaluación.<!--]--><br />
								<!--[-->Preparate!!!.<!--]--></h1>
								<p>Puedes elegir el curso del cual quieras reforzar tus conocimientos.</p>
								<hr>
								<h1>CURSOS PROPIOS DE LA PLATAFORMA</h1>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="imagenes/cursos/matematicas.jpg" alt="" />
									</span>
									<a href="cursos/curso-matematicas/menu-matematicas-por-grado/index.html">
										<h2>Matemáticas</h2>
										<div class="content">
											<p>Haz clic para entrar al curso.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="imagenes/cursos/quimica.jpg" alt="" />
									</span>
									<a href="cursos/curso-quimica/quimica-principal/index.html">
										<h2>Química</h2>
										<div class="content">
											<p>Haz clic para entrar al curso.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="imagenes/cursos/fisica.jpg" alt="" />
									</span>
									<a href="cursos/curso-fisica/fisica-principal/index.html">
										<h2>Física</h2>
										<div class="content">
											<p>Haz clic para entrar al curso.</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="imagenes/cursos/biologia.jpg" alt="" />
									</span>
									<a href="cursos/curso-biologia/biologia-principal/index.html">
										<h2>Biología</h2>
										<div class="content">
											<p>Haz clic para entrar al curso.</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="imagenes/cursos/computacion.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Computación</h2>
										<div class="content">
											<p>Haz clic para entrar al curso.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="imagenes/cursos/geografia.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Geografía</h2>
										<div class="content">
											<p>Haz clic para entrar al curso.</p>
										</div>
									</a>
								</article>
								
                               <br><br>
                                <h1>CURSOS AGREGADOS POR EL PROFESOR</h1>
                                
                               <!-- ?php 
                            $grado=$_SESSION["grado"];
                              $sql1 = "select * from cursos where grado = '".$grado."'";

                              $query = $con->query($sql1);
                              while ($r=$query->fetch_array()) {
                                $materia = $r["materia"];
                                $nom_curso = $r["nombre_curso"];
                                ?-->
						
								<article class="style2">
									<span class="image">
										<img src="images/pic07.jpg" alt="" />
									</span>
									<a href="#">
										<h2><!--?php echo $materia; ? -->Matemáticas Primer Grado<br> Prof. Maria Guadalupe</h2>
										<div class="content">
											<p><!--?php echo $nom_materia ?-->Haz clic sobre el recuadro para ir al curso</p>
										</div>
									</a>
							</article>
							        <!-- ?php
                                            }
                                            ?-->
							
								
								<article class="style3">
									<span class="image">
										<img src="images/pic08.jpg" alt="" />
									</span>
									<a href="#">
										<h2>Física Primer grado <br> Prof. Maria Guadalupe</h2>
										<div class="content">
											<p>Haz clic sobre el recuadro para ir al curso</p>
										</div>
									</a>
								</article>
								
								<!--
								<article class="style1">
									<span class="image">
										<img src="images/pic09.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Nullam</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic10.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Ultricies</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic11.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Dictum</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2>Pretium</h2>
										<div class="content">
											<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>
					-->



				<!-- Footer
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="field half first">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="field half">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="Message"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="special" /></li>
									</ul>
								</form>
							</section>


							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Página-Cursos</li><li>Diseño: Ing. Brandon Toledano Yáñez</li>
							</ul>
						</div>
					</footer>

			</div>
			 -->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	
	</body>
</html>