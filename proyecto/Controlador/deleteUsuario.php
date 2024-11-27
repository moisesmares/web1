<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado =$_POST['nombre_conductor'];
$consulta="DELETE FROM conductores WHERE nombre_conductor = ";

mysqli_query($conexion, $consulta . $registroEliminado);
mysqli_close($conexion);
header('Location: ../EliminarUsuario.php');
?>