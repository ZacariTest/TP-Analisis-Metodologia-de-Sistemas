<?php include 'layout/header.php';

if (!isset($_SESSION['id_usuario'])) {
    
    header("Location: login.php");
    exit();
}

$id_usuario = $_SESSION['id_usuario'];


$conexion = mysqli_connect('localhost', 'root', '', 'ingles', '3306');

if ($conexion) {

    $consulta = "
        SELECT usuario.nombreUsuario, usuario.mail, usuario.nivel, nacionalidad.nombreNacionalidad AS nombreNacionalidad
        FROM usuario
        JOIN nacionalidad ON usuario.idNacionalidad = nacionalidad.idNacionalidad
        WHERE usuario.idUsuario = '$id_usuario'
    ";

    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
    } else {
        echo  " $id_usuario No se encontraron datos del usuario.";
        exit();
    }

    mysqli_close($conexion);
} else {
    echo "Error de conexión a la base de datos.";
    exit();
}
?>

<div class="grisb">
    <div class="container mt-5">
        <div class="row divindex">
        <div class="rank">
        <div class="card letraCard">
        <div class="card-header bg-primary text-white">Perfil </div> 
    <p class="textAdictP">Nombre de usuario: <?php echo htmlspecialchars($usuario['nombreUsuario']); ?></p>
    <p class="textAdictP">Correo electrónico: <?php echo htmlspecialchars($usuario['mail']); ?></p>
    <p class="textAdictP">Nacionalidad: <?php echo htmlspecialchars($usuario['nombreNacionalidad']); ?></p>
    <p class="textAdictP">Nivel: <?php echo htmlspecialchars($usuario['nivel']); ?></p>
    </div>  
    </div> 
</div>
</div>
</div>

<?php require('layout/footer.php') ?>
<?php require('layout/js.php') ?>