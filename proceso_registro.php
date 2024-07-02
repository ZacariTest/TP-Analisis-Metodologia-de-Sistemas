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
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    }
    if (isset($_GET['nacionalidad'])) {
        $nacionalidad = $_GET['nacionalidad'];
    }
  ?>

<div class="posTildeRegis"><i class="fa-regular fa-circle-check tildeRegistro"></i></div>
    
  
<?php
    echo "<h1 class=registroExito>¡Te has registrado con éxito, $usuario!</h1>";
    echo "<a class=btnRegis href='index.php'>Volver</a>";


    $conexion = mysqli_connect('localhost', 'root', '', 'ingles', '3306');


    $consulta = "INSERT INTO usuario (nombreUsuario, pass, idNacionalidad) VALUES ('$usuario', '$pass_hash', '$nacionalidad')";
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

include_once('layout/footer.php');
include_once('layout/js.php');
?>

