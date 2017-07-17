<?php
session_start();
session_destroy();
print "<script>window.location='../../panel-cursos/cerrando.php';</script>";
?>