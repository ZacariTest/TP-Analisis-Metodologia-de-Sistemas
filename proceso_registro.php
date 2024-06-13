<?php
include_once('header.php');

$usuario = "";
$pass = "";

if (mysqli_connect('localhost', 'root', '', 'ingles', '3306')) {
    if (isset($_GET['usuario'])) {
        $usuario = $_GET['usuario'];
    }
    if (isset($_GET['pass'])) {
        $pass = $_GET['pass'];
    }

    echo "<h1> Te has registrado con éxito, $usuario!!</h1>";
    if($usuario=="admin" && $pass ="123"){
        echo "<a href='ABM/index.php'>Volver</a>";

    }else{
        echo "<a href='index.php'>Volver</a>";

    }

    $conexion = mysqli_connect('localhost', 'root', '', 'starwars', '3306');


    $consulta = "INSERT INTO usuarios (nombreUsuario, contraseña, administrador) VALUES ('$usuario', '$pass', '0')";
    $resultado = mysqli_query($conexion, $consulta);

    // Establecer la variable de sesión para indicar que el usuario ha iniciado sesión
    $_SESSION['nombre_usuario'] = $usuario;
    
} else {
    echo "<h1>No hay conexión, fíjate qué pasa</h1>";
}
?>