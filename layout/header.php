 <?php
// $conexion = mysqli_connect('localhost', 'root', '', 'ingles', '3306');
//session_start();
//$loggeado = isset($_SESSION['nombre_usuario']);
//$id_usuario = $_SESSION['id_usuario'];
//$sql = "SELECT SUM(experiencia) AS suma_experiencia FROM resultados WHERE idUsuario = '$id_usuario'";
//$resultado = $conexion->query($sql);
//if ($resultado->num_rows > 0) {
//    $row = $resultado->fetch_assoc();
//    $suma_experiencia = $row['suma_experiencia'];
//    $nivel = floor(sqrt($suma_experiencia));
//}else{
//    $nivel = 1;
//}
?>

<?php
$conexion = mysqli_connect('localhost', 'root', '', 'ingles', '3306');
session_start();
$loggeado = isset($_SESSION['nombre_usuario']);

if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];
    $sql = "SELECT SUM(experiencia) AS suma_experiencia FROM resultados WHERE idUsuario = '$id_usuario'";
    $resultado = $conexion->query($sql);
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $suma_experiencia = $row['suma_experiencia'];
        $nivel = floor(sqrt($suma_experiencia));
    } else {
        $nivel = 1;
    }
} else {
    $id_usuario = null;
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('css.php') ?>
    <title>Página Principal</title>
</head>

    <header class="blanco flex flexwrap">
        <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt="Logo de la Empresa" width="75" height="50"></a>
        </div>
        <nav>
            <ul class="flex margin0">
                <li><a class="blanco deconone pad0" href="index.php"><i class="fa-solid fa-house"></i> Inicio</a></li>
                <li><a class="blanco deconone pad0" href="ranking.php"><i class="fa-solid fa-ranking-star"></i>
                        Ranking</a></li>
                <li><a class="blanco deconone pad0" href="tienda.php"><i class="fa-solid fa-shop"></i> Tienda</a></li>
            </ul>
        </nav>
        <div class="login flex flexwrap">
            <?php if (!$loggeado): ?>
            <a href="registro.php">
                    <p class="linea blanco derecho"><i class="fa-solid fa-user-pen"></i> Registrarse</p>
                </a>
            <a href="login.php">
                    <p class="blanco linea derechom marl2em"><i class="fa-solid fa-right-to-bracket"></i> Login</p>
                </a>
            <?php else: ?>
            <p class="blanco linea derecho"><i class="fa-solid fa-gamepad"></i> Nivel: <?php echo $nivel; ?></p>
            <p class="blanco linea derecho marl2em"><i class="fa-solid fa-user"></i> <?php echo $_SESSION['nombre_usuario']; ?></p>
            <p class="marl2em"><a href="logout.php " class="blanco linea derecho"><i class="fa-solid fa-right-to-bracket"></i> Logout</a></p>

            <?php endif ?>
        </div>
    </header>
