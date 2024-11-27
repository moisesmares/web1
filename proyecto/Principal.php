<?php require "./header.php"; ?>
 <!-- Incluye el archivo de cabecera -->

<?php
session_start();  // Inicia una sesión PHP
$nombre_usuario = $_SESSION['nombre_del_conductor'];  // Asigna el valor del usuario (nombre de usuario) a la variable $nombre_usuario

if (!isset($nombre_usuario)) {  // Si no está definido el nombre (usuario no logueado)
    
} else {  
    // Mensaje de bienvenida con estilos
    echo "<div class='container center-align' style='margin-top: 20px;'>
            <h4 class='blue-text text-darken-2'>¡Bienvenido!</h4>
            <h5>Tu nombre de usuario es <span class='teal-text'>$nombre_usuario</span></h5>
          </div>";

    // Botón de salir que redirige al controlador para cerrar sesión
    echo "<div class='container center-align' style='margin-top: 20px;'>
            <a href='Controlador/salir.php' class='btn waves-effect waves-light teal lighten-1'>Salir</a>
          </div>";

    // Conexión a la base de datos
    require "./Controlador/conexion.php";  
    mysqli_set_charset($conexion, 'utf8');  // Establece la codificación de caracteres a UTF-8

    // Consulta SQL para obtener todos los registros de la tabla 'residente'
    $consulta_sql = "SELECT * FROM conductores";  
    $resultado = $conexion->query($consulta_sql);  // Ejecuta la consulta SQL

    $count = mysqli_num_rows($resultado);  // Cuenta la cantidad de filas obtenidas en el resultado

    // Muestra una tabla con los registros de los residentes
    echo "<div class='container' style='overflow-x:auto; margin-top: 20px;'>";
    echo "<table class='highlight bordered responsive-table centered'>
            <thead>
                <tr>
                    <th>Nombre de Usuario</th>
                    <th>Edad</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Marca de la camioneta</th>
                    
                </tr>
            </thead>
     <tbody>";

     if ($count > 0) {  // Si hay registros en la base de datos
        // Muestra cada registro en una fila de la tabla
        while ($row = mysqli_fetch_assoc($resultado)) {  
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['nombre_usuario']) . "</td>";  // Muestra el nombre de usuario
            echo "<td>" . htmlspecialchars($row['edad']) . "</td>";  // Muestra la edad
            echo "<td>" . htmlspecialchars($row['correo']) . "</td>";  // Muestra el correo
            echo "<td>" . htmlspecialchars($row['telefono']) . "</td>";  // Muestra el número de telefono
            echo "<td>" . htmlspecialchars($row['maraca de la camioneta']) . "</td>";  // Muestra la marca de la camioneta       
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        // Si no hay registros, muestra un mensaje de "Sin ningún registro"
        echo "<h5 class='center-align red-text'>Sin ningún registro</h5>";
    }

    echo "</div>"; 

    // Botones para eliminar usuario o registrar uno nuevo
    echo "<div class='container center-align' style='margin-top: 20px;'>
            <a href='eliminarUsuario.php' class='btn waves-effect waves-light red lighten-1' style='margin-right: 10px;'>Eliminar Usuario</a>
            <a href='registro.php' class='btn waves-effect waves-light blue lighten-1'>Registro</a>
          </div>";
}
?>
<?php require "./footer.php"; ?>  <!-- Incluye el archivo de pie de página -->
   

   









    
