<?php
session_start();
session_destroy();
print "<script>window.location='../../panel-maestros/cerrando.php';</script>";
?>