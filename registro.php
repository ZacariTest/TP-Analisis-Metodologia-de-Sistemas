<?php
include_once('header.php');
?>
<main>
<h1>Registro de Usuario</h1>

<form method="get" action="proceso_registro.php">
    <div>
    <label for="usuario">Nombre:</label>
    <input class ="marl2em"type="text" id="usuario" name="usuario" >
</div>

    <label for="pass">Contraseña:</label>
    <input type="password" id="pass" name="pass" >
    <div>
    <input type="submit" value="Registrarse">
</div>


</form>
</main>
<?php
include_once('footer.php');
?>