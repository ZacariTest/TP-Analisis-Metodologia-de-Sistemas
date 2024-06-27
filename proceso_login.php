<?php
session_start();
$mensaje = "";

if (isset($_POST['submit'])) {
    if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $conexion = mysqli_connect('localhost', 'root', '', 'ingles', '3306');

        if ($conexion) {
            $consulta = "SELECT * FROM usuario WHERE nombreUsuario = '$usuario'";
            $resultado = mysqli_query($conexion, $consulta);

            if ($resultado && mysqli_num_rows($resultado) > 0) {
                $fila = mysqli_fetch_assoc($resultado);
                if ($contraseña === $fila['pass']) { 
                    $_SESSION['nombre_usuario'] = $usuario;
                    $_SESSION['nivel_usuario'] = $fila['nivel'];
                    $_SESSION['id_usuario'] = $fila['idUsuario'];

                    header("Location: index.php");
                    exit();
                } else {
                    $mensaje = "Credenciales incorrectas. Inténtalo de nuevo.";
                }
            } else {
                $mensaje = "Credenciales incorrectas. Inténtalo de nuevo.";
            }

            mysqli_close($conexion);
        } else {
            $mensaje = "Error de conexión a la base de datos.";
        }
    } else {
        $mensaje = "Por favor, completa todos los campos.";
    }
}

header("Location: login.php?mensaje=" . urlencode($mensaje));
exit();
?>