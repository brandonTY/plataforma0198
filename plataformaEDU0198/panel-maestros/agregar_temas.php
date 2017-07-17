<?php
include ('../login-maestros/acceso.php');
  
      $grado=$_SESSION["grado"];
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Temas</title>
</head>
<body>
   
   <form class="agregar_temas" name="agregar_temas" action="php/add_temas.php" method="post" accept-charset="utf-8">
       <fieldset>
           <legend>Formulario Para agregar temas</legend>
           
           <div>
               <label for="no_tema">Número de tema:</label>
               <input type="text" id="no_tema" class="no_tema" name="no_tema">
           </div>
           <hr>
           
           <div>
               <label for="nom_tema">Nombre del tema:</label>
               <input type="text" id="nom_tema" class="nom_tema" name="nom_tema">
           </div>
           <hr>
           
           <div>
               <label for="des_tema">Breve descripción del tema</label>
                <textarea id="des_tema" class="des_tema" name="des_tema" wrap="hard" maxlength="300"></textarea>
           </div>
           <hr>
           
           <div>
               <label for="cont_tema">Contenido del tema:</label>
               <textarea id="cont_tema" class="cont_tema" name="cont_tema" wrap="hard" maxlength="300"></textarea>
           </div>
           <hr>
           
           <div>
               <label for="url_tema">URL del tema:</label>
               <input type="url" id="url_tema" class="url_tema" name="url_tema">
           </div>
           
       </fieldset>
         <input type="submit" value="Agregar temas">
   </form>
    
</body>
</html>