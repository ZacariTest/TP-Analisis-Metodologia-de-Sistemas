<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect('localhost', 'root', '', 'ingles', '3306');

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $idUsuario = $_POST['idUsuario'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $email = $_POST['mail'];
    $idNacionalidad = $_POST['idnacionalidad'];

    $sql = "UPDATE usuario SET nombreUsuario = '$nombreUsuario', mail = '$email', idnacionalidad = '$idNacionalidad' WHERE idUsuario = $idUsuario";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['nombre_usuario'] = $nombreUsuario;
        $_SESSION['id_usuario'] = $idUsuario;

        $conn->close();
        header("Location: index.php"); 
        exit();
    } else {
        echo "Error al actualizar usuario: " . $conn->error;
    }

    $conn->close();

} else {
    header("Location: index.php");
    exit();
}
?>