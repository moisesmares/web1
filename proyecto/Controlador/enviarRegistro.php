<?php
$servidor = "localhost";
$usuario = "root";
$cla = "";
$bd = "compañia_conductores";
$enlace = mysqli_connect($servidor, $usuario, $cla, $bd,'utf8');

    if(!$enlace){
            echo"Error en la conexion con el servidor";
    }
 
if(isset($_POST['registrarse'])){
    $nombre_del_conductor =$_POST["nombre_conductor"];
    $Edad =$_POST["Edad"];
    $Correo =$_POST["email"];
    $Telefono =$_POST["telefono"];
    $Marca_de_la_camioneta =$_POST["marca_camioneta"];
    $contraseña =$_POST["contraseña"];

    $insertarDatos ="INSERT INTO conductores VALUES('$nombre_del_conductor $Edad, $Correo, $Telefono, $Marca_de_la_camioneta, $contraseña')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if(!$ejecutarInsertar){
        echo"Error en la linea de sql";
    }

}
?>