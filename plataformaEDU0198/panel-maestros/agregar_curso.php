<?php
include ('../login-maestros/acceso.php');
  
      $grado=$_SESSION["grado"];
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Curso</title>
</head>
<body>
  
  <h1>Para agregar un curso a continuación se muestran los pasos a seguir. </h1>
  <p>1.- En la seccion grado, es el grado y grupo a quien va dirigido el curso(Esta opción se autocompleta)
  <br>
  2.- En la parte de clave del curso, debe asignar una clave(contraseña). 
  Para que solo los alumnos que tengan dicha clave puedan ingresar al curso.
  <br>
    3.- En la parte de materia, de escribir el nombre de la materia refente al curso(Matemáticas, Física, Química, etc).
    <br>
    4.- En la parte de nombre de curso, debe ingresar el nombre del curso por ejemplo("Matematicas Primero", "Física General" etc).
    <br>
    5.- En el cuadro de texto de objetivos generales, debe ingresar el objetivo general del curso.
    </p>
   
   <form class="form_agregarcurso" name="form_agregarcurso" action="php/add_curso.php" method="post" accept-charset="utf-8">
   <fieldset>
   <legend>Formulario Agregar Curso</legend>
   
   <div>
       <label> Grado: 
		  <select class="form-control" name="grado" id="grado">
		  	<option value="<?php echo $grado; ?>"> <?php echo $grado; ?> </option>
		  	</select>
		  	</label> 
   </div>
   <hr>
    <div>
        <label for="clave_curso">Clave del curso:</label>
        <input type="password" id="clave_curso" class="clave_curso" name="clave_curso" minlength="4" maxlength="10"  title="min: 4 caracteres max: 10 Puede utilizar numeros, letras y simbolos." placeholder="Clave para el curso">
    </div>
    <hr>
    <div>
        <label for="materia">Materia:</label>
        <input type="text" id="materia" class="materia" name="materia" placeholder="Materia referente al curso">
    </div>
    <hr>
    <div>
        <label for="nombre_curso">Nombre del curso:</label>
        <input type="text" id="nombre_curso" class="nombre_curso" name="nombre_curso" placeholder="Nombre del curso">
    </div>
    <hr>
    <div>
        <label for="objetivo_curso">Objetivos generales del curso:</label>
        <textarea id="objetivo_curso" class="objetivo_curso" name="objetivo_curso" wrap="hard" maxlength="300"></textarea>
    </div>
    <hr>
   
    </fieldset>
    
 <div>
        <input type="submit" value="Crear Curso">
    </div>
    </form>
    
    <script src="js/validar_agregarcurso.js"></script>
</body>
</html>