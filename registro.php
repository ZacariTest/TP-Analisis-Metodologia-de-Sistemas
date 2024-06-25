<?php
include_once('header.php');
?>
<main>
    <div class="contenido centrar">
        <h2 class="textologin">Registro de usuario</h2>

        <form method="get" action="proceso_registro.php">
            <div>
                <label for="usuario"><i class="fa-solid fa-user"></i> Nombre:</label>
                <input class="marl2em formainput" placeholder="Usuario" type="text" id="usuario" name="usuario">
            </div>
            <div>
                <label for="pass"><i class="fa-solid fa-key"></i> Contraseña:</label>
                <input class="mart2em formainput" placeholder="Contraseña" type="password" id="pass" name="pass">
            </div>
            <div class="nacionalidad-section">
                <label for="nacionalidad"><i class="fa-solid fa-flag"></i> Nacionalidad:</label>
                <select class="formainput " id="nacionalidad" name="nacionalidad">
                    <option value="1">Argentina</option>
                    <option value="2">Uruguay</option>
                    <option value="3">Chile</option>
                </select>
            </div>
            <div>
                <button type="submit" class="mart2em btn btn-primary"><i class="fa-regular fa-registered"></i> Registrarse</button>
            </div>
        </form>
    </div>
</main>
<?php
include_once('footer.php');
?>