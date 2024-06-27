<?php require('layout/header.php') ?>

<main>
    <div class="contenido centrar letraLogReg">
        <h2 class="textologin">Iniciar sesión</h2>
        <?php
        if (isset($_GET['mensaje'])) {
            echo "<p>" . htmlspecialchars($_GET['mensaje']) . "</p>";
        }
        ?>
        <form method="post" action="proceso_login.php">
            <div class="formadivLogReg">
            <label for="usuario"><i class="fa-solid fa-user"></i></label>
            <input class="formainput" placeholder="Usuario" type="text" name="usuario" required><br>
            </div>
            
            <div class="formadivLogReg">
            <label for="contraseña"><i class="fa-solid fa-key"></i></label>
            <input class="formainput" placeholder="Contraseña" type="password" name="contraseña" required><br>
            </div>
            
            <div class="formadivLogReg">
            <button type="submit" class="btn btn-primary butLogReg" name="submit"><i class="fa-solid fa-right-to-bracket"></i> Iniciar sesión</button>
            </div>
            
            <a href="#" class="olvide">Olvidé mi contraseña</a>
        </form>
    </div>
</main>

<?php require('layout/footer.php') ?>
<?php require('layout/js.php') ?>