<?php
include 'header.php';
$mensaje = ""; 

if (isset($_POST['submit'])) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $conexion = mysqli_connect('localhost', 'root', '', 'starwars', '3306');

    if ($conexion) {
        $consulta = "SELECT * FROM usuarios WHERE nombreUsuario = '$usuario'";
        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $fila = mysqli_fetch_assoc($resultado);
            
            $_SESSION['nombre_usuario'] = $usuario;
            
            if ($usuario == 'admin') {
                $mensaje = "<a href='ABM/index.php'>Ir a la zona de modificacion</a>";
            }
            
            $mensaje .= '<br><a href="index.php"> volver</a>'; 
        } else {
            $mensaje = "Credenciales incorrectas. Inténtalo de nuevo.";
        }
        
        mysqli_close($conexion);
    } else {
        $mensaje = "Error de conexión a la base de datos.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="estilos.css"/>
</head>
<body> 


    <div class="contenido centrar">
        <h2>Iniciar Sesión</h2>
        <?php echo "<p>$mensaje</p>"; ?>
        <form method="post" action="login.php">
            <label for="usuario">Usuario:</label>
            <input class="marl1em" type="text" name="usuario" required><br>
            <label for="contraseña">Contraseña:</label>
            <input class="mart2em"type="password" name="contraseña" required><br>
            <input class="mart4em"type="submit" name="submit" value="Iniciar Sesión">
        </form>
    </div>

    <?php
include_once('footer.php');
?>