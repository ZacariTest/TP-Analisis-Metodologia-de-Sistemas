<?php
include 'layout/header.php';
?>

<main>
    <div class="contenido centrar letraLogReg">
    <h2 class="textologin">Olvidé mi contraseña</h2>
    <?php
    if (isset($_GET['mensaje'])) {
        echo "<p>" . htmlspecialchars($_GET['mensaje']) . "</p>";
    }
    ?>
    <form action="proceso_olvide_contraseña.php" method="POST">
        <div class="formadivLogReg">
        <label for="usuario"><i class="fa-solid fa-user"></i> Nombre de usuario:</label>
        <input class="formainput" type="text" id="usuario" name="usuario" required>
        </div>

        <div class="formadivLogReg">
        <label for="nueva_contraseña"><i class="fa-solid fa-key"></i> Nueva contraseña:</label>
        <input class="formainput" type="password" id="nueva_contraseña" name="nueva_contraseña" required>
        </div>

        <div class="formadivLogReg">
        <button type="submit" class="btn btn-primary butLogReg" name="submit">Cambiar contraseña</button>
        </div>
    </form>
   </div>
</main>

<?php
include 'layout/footer.php';
include 'layout/js.php';
?>
