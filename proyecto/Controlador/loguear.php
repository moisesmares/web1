<?php
 
 // Incluir archivo de conexión a la base de datos
 require 'conexion.php';
 // Iniciar sesión para poder almacenar valores en las variables de sesión
 session_start();
 
 // Obtener los valores del formulario enviados por POST (nombre y contraseña)
 $nombre_conductor = $_POST['nombre_conductor'];
 $contraseña = $_POST['clave'];
 
 // La función COUNT devuelve el número de filas que cumplen con una condición en la base de datos
 // Se verifica si existe un registro con el nombre y la contraseña proporcionados
 $q = "SELECT COUNT(*) as contar from conductores where nombre_conductor= '$nombre_conductor' and contraseña = '$contraseña'";
 
 // Ejecutar la consulta SQL
 $consulta = mysqli_query($conexion, $q);
 
 // Obtener el resultado de la consulta como un arreglo
 $array = mysqli_fetch_array($consulta);
 
 // Si el número de registros encontrados es mayor que 0 (es decir, el usuario existe con el nombre y la clave proporcionados)
 if ($array['contar'] > 0) {
     // Si existe, se guarda el nombre en la variable de sesión 'username'
     $_SESSION['username'] = $nombre_conductor;
 
     // Redirigir al usuario a la página principal
     header("location: ../principal.php");
     
 } else {
     // Si no existe el usuario con esas credenciales, redirigir al usuario a la página de error
     header("location: ../errorLoguin.php");
 }
 
?>