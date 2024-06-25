<?php
include 'header.php';
?>

<main>
    <div class="contenido centrar">
        <h2 class="textologin">Iniciar sesión</h2>
        <?php
        if (isset($_GET['mensaje'])) {
            echo "<p>" . htmlspecialchars($_GET['mensaje']) . "</p>";
        }
        ?>
        <form method="post" action="proceso_login.php">
            <label for="usuario"><i class="fa-solid fa-user"></i></label>
            <input class="formainput" placeholder="Usuario" type="text" name="usuario" required><br>
            <label for="contraseña"><i class="fa-solid fa-key"></i></label>
            <input class="mart2em formainput" placeholder="Contraseña" type="password" name="contraseña" required><br>
            <button type="submit" class="mart2em btn btn-primary" name="submit"><i class="fa-solid fa-right-to-bracket"></i> Iniciar sesión</button>
            <a href="#" class="olvide">Olvidé mi contraseña</a>
        </form>
    </div>
</main>

<?php
include_once('footer.php');
?>