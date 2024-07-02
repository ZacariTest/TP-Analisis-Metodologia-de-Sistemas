<?php require('layout/header.php') ?>
<div class="container mt-5">

<div class="row">
<div class="col-lg-4 mb-4">
</div>
<div class="col-lg-4 mb-4">

    <img src="img/admin.png" class="img-fluid" alt="Administrador">
</div>
</div>

    <h2 class="mt-4">Lista de Usuarios</h2>
    <table class="table table-striped mt-3">
        <thead class="thead-dark">
            <tr>
                <th>ID Usuario</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Nacionalidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            <?php


$conn = mysqli_connect('localhost', 'root', '', 'ingles', '3306');

            if (!$conn) {
                die("Conexión fallida: " . mysqli_connect_error());
            }

            $sql = "SELECT idUsuario, nombreUsuario, mail, idnacionalidad FROM usuario";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['idUsuario'] . "</td>";
                    echo "<td>" . $row['nombreUsuario'] . "</td>";
                    echo "<td>" . $row['mail'] . "</td>";
                    echo "<td>" . $row['idnacionalidad'] . "</td>";
                    echo '<td class="center">';
                    echo '<a href="borrar.php?idUsuario=' . $row['idUsuario'] . '" class="btn btn-danger btn-sm mr-2">Borrar</a>';
                    echo '<a href="actualizar.php?idUsuario=' . $row['idUsuario'] . '" class="btn btn-primary btn-sm">Actualizar</a>';
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No se encontraron usuarios</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </tbody>
    </table>
    </div>

<?php require('layout/footer.php') ?>