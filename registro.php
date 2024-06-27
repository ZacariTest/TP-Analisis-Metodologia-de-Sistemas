<?php require('layout/header.php') ?>
<main>
    <div class="contenido centrar letraLogReg">
        <h2 class="textologin">Registro de usuario</h2>

        <form method="get" action="proceso_registro.php">
            <div class="formadivLogReg">
                <label class="lblUserReg" for="usuario"><i class="fa-solid fa-user"></i> Nombre:</label>
                <input class="formainput" placeholder="Usuario" type="text" id="usuario" name="usuario">
            </div>
            <div class="formadivLogReg">
                <label for="pass"><i class="fa-solid fa-key"></i> Contraseña:</label>
                <input class="formainput" placeholder="Contraseña" type="password" id="pass" name="pass">
            </div>
            <div class="nacionalidad-section formadivLogReg">
                <label for="nacionalidad"><i class="fa-solid fa-flag"></i> Nacionalidad:</label>
                <select class="formainput " id="nacionalidad" name="nacionalidad">
                    <option value="1">Argentina</option>
                    <option value="2">Uruguay</option>
                    <option value="3">Chile</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary butLogReg"><i class="fa-solid fa-user-pen"></i> Registrarse</button>
            </div>
        </form>
    </div>
</main>
<?php require('layout/footer.php') ?>
<?php require('layout/js.php') ?>