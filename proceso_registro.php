<?php
include_once('layout/header.php');

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
 

 ?>

<div class="posTildeRegis mart2em"><i class="fa-regular fa-circle-check tildeRegistro"></i></div>

  
<?php


    echo "<h1 class=registroExito>¡Te has registrado con éxito, $usuario!</h1>";
    echo "<a class=btnRegis href='index.php'>Volver</a>";


    $conexion = mysqli_connect('localhost', 'root', '', 'ingles', '3306');


    $consulta = "INSERT INTO usuario (nombreUsuario, pass, idNacionalidad) VALUES ('$usuario', '$pass', '$nacionalidad')";
    $resultado = mysqli_query($conexion, $consulta);

    $consulta = "SELECT * FROM usuario WHERE nombreUsuario = '$usuario'";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_assoc($resultado);

    $_SESSION['id_usuario'] = $fila['idUsuario'];
    $_SESSION['nombre_usuario'] = $usuario;
    $_SESSION['nivel_usuario'] = 1;

} else {
    echo "<h1>No hay conexión, fíjate qué pasa</h1>";
}
?>
<footer class="footer fixed-bottom  text-light ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="dpfooter link">
                    <a href="sobre_nosotros.php" class="text-light">Sobre nosotros</a>
                    <a href="ayuda.php" class="text-light ml-3">Ayuda</a>
                    <a href="terminos.php" class="text-light ml-3">Términos y condiciones</a>
                    <p class="fredes marl1em">Redes 
                        <a href="https://www.facebook.com/" target="_blank" class="text-light ml-2"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://twitter.com/" target="_blank" class="text-light ml-2"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/" target="_blank" class="text-light ml-2"><i class="fa-brands fa-instagram"></i></a>
                    </p>
                </div>
                <p class="text-muted small mt-3 mb-0">Copyright &copy; 2024 - Lorovel</p>
            </div>
        </div>
    </div>
</footer>

    
<?php
include_once('layout/js.php');
?>

