<?php
include_once('header.php');

$usuario = "";
$pass = "";
$nacionalidad = "";
if (mysqli_connect('localhost', 'root', '', 'ingles', '3306')) {
    if (isset($_GET['usuario'])) {
        $usuario = $_GET['usuario'];
    }
    if (isset($_GET['pass'])) {
        $pass = $_GET['pass'];
    }
    if (isset($_GET['nacionalidad'])) {
        $nacionalidad = $_GET['nacionalidad'];
    }

    echo "<h1> Te has registrado con éxito, $usuario!!</h1>";
    echo "<a href='index.php'>Volver</a>";


    $conexion = mysqli_connect('localhost', 'root', '', 'ingles', '3306');


    $consulta = "INSERT INTO usuarios (nombreUsuario, pass,idNacionalidad) VALUES ('$usuario', '$pass','$nacionalidad')";
    $resultado = mysqli_query($conexion, $consulta);

    $_SESSION['nombre_usuario'] = $usuario;
    $_SESSION['nivel_usuario'] = 1;

} else {
    echo "<h1>No hay conexión, fíjate qué pasa</h1>";
}
?>