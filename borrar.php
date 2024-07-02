<?php


$conn = mysqli_connect('localhost', 'root', '', 'ingles', '3306');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id_usuario = $_GET['idUsuario'];

$sql = "DELETE FROM usuario WHERE idUsuario = $id_usuario";

if ($conn->query($sql) === TRUE) {
    echo "Usuario borrado correctamente.";
} else {
    echo "Error al borrar usuario: " . $conn->error;
}
$conn->close();
?>
