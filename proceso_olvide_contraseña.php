<?php
session_start();
$mensaje = "";

if (isset($_POST['submit'])) {
    if (isset($_POST['usuario']) && isset($_POST['nueva_contraseña'])) {
        $usuario = $_POST['usuario'];
        $nueva_contraseña = $_POST['nueva_contraseña'];
        $nueva_contraseña_hash = password_hash($nueva_contraseña, PASSWORD_DEFAULT);
        
        $conexion = mysqli_connect('localhost', 'root', '', 'ingles', '3306');

        if ($conexion) {
            $consulta = "SELECT * FROM usuario WHERE nombreUsuario = '$usuario'";
            $resultado = mysqli_query($conexion, $consulta);

            if ($resultado && mysqli_num_rows($resultado) > 0) {
                $consulta_actualizacion = "UPDATE usuario SET pass = '$nueva_contraseña_hash' WHERE nombreUsuario = '$usuario'";
                $resultado_actualizacion = mysqli_query($conexion, $consulta_actualizacion);

                if ($resultado_actualizacion) {
                    $mensaje = "Contraseña actualizada correctamente.";
                } else {
                    $mensaje = "Error al actualizar la contraseña, fíjate qué pasa.";
                }
            } else {
                $mensaje = "El usuario no existe.";
            }

            mysqli_close($conexion);
        } else {
            $mensaje = "No hay conexión, fíjate qué pasa.";
        }
    } else {
        $mensaje = "Completa todos los campos.";
    }

    header("Location: olvide_contraseña.php?mensaje=" . urlencode($mensaje));
    exit();
} else {
    header("Location: olvide_contraseña.php");
    exit();
}
?>

