<?php
 require('layout/header.php');

$conn = mysqli_connect('localhost', 'root', '', 'ingles', '3306');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id_usuario = $_GET['idUsuario'];

$sql = "SELECT idUsuario, nombreUsuario, mail, idnacionalidad FROM usuario WHERE idUsuario = $id_usuario";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
    <h2>Actualizar Usuario</h2>
    <form action="proact.php" method="post">
        <input type="hidden" name="idUsuario" value="<?php echo $row['idUsuario']; ?>">
        <label for="nombreUsuario">Nombre:</label>
        <input type="nombreUsuario" id="nombreUsuario" name="nombreUsuario" value="<?php echo $row['nombreUsuario']; ?>"><br><br>
        <label for="mail">Email:</label>
        <input type="text" id="mail" name="mail" value="<?php echo $row['mail']; ?>"><br><br>
        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" id="idnacionalidad" name="idnacionalidad" value="<?php echo $row['idnacionalidad']; ?>"><br><br>
        <input type="submit" value="idnacionalidad">
    </form>
    <?php require('layout/footer.php') ?>

<?php
} else {
    echo "Usuario no encontrado.";
}

$conn->close();
?>