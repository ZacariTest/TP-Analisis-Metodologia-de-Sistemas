<?php require('layout/header.php') ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ingles";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlGlobal = "SELECT u.nombreUsuario, SUM(r.cantCorrecta) as cantCorrecta, SUM(r.cantIncorrecta) as cantIncorrecta, SUM(r.cantCorrecta - r.cantIncorrecta) as delta 
              FROM resultados r 
              JOIN usuario u ON r.idUsuario = u.idUsuario 
              GROUP BY r.idUsuario 
              ORDER BY delta DESC 
              LIMIT 3";
$resultGlobal = $conn->query($sqlGlobal);

$sqlListening = "SELECT u.nombreUsuario, SUM(r.cantCorrecta) as cantCorrecta, SUM(r.cantIncorrecta) as cantIncorrecta, SUM(r.cantCorrecta - r.cantIncorrecta) as delta 
                 FROM resultados r 
                 JOIN usuario u ON r.idUsuario = u.idUsuario 
                 WHERE r.tipoExamen = '1' 
                 GROUP BY r.idUsuario 
                 ORDER BY delta DESC 
                 LIMIT 3";
$resultListening = $conn->query($sqlListening);

$sqlWriting = "SELECT u.nombreUsuario, SUM(r.cantCorrecta) as cantCorrecta, SUM(r.cantIncorrecta) as cantIncorrecta, SUM(r.cantCorrecta - r.cantIncorrecta) as delta 
               FROM resultados r 
               JOIN usuario u ON r.idUsuario = u.idUsuario 
               WHERE r.tipoExamen = '2' 
               GROUP BY r.idUsuario 
               ORDER BY delta DESC 
               LIMIT 3";
$resultWriting = $conn->query($sqlWriting);

$sqlJuegos = "SELECT u.nombreUsuario, SUM(r.cantCorrecta) as cantCorrecta, SUM(r.cantIncorrecta) as cantIncorrecta, SUM(r.cantCorrecta - r.cantIncorrecta) as delta 
              FROM resultados r 
              JOIN usuario u ON r.idUsuario = u.idUsuario 
              WHERE r.tipoExamen = '3' 
              GROUP BY r.idUsuario 
              ORDER BY delta DESC 
              LIMIT 3";
$resultJuegos = $conn->query($sqlJuegos);

?>

<div class="grisb">
    <div class="container mt-5">
        <div class="row divindex">
            <div class="rank">
                <div class="card letraCard">
                    <div class="card-header bg-primary text-white">
                        Ranking Global
                    </div>
                    <div class="card-body">
                        <ol class="listaCentrada">
                            <?php while($row = $resultGlobal->fetch_assoc()): ?>
                                <li>
                                    <?php echo htmlspecialchars($row['nombreUsuario']); ?> 
                                    (Delta: <?php echo htmlspecialchars($row['delta']); ?>,
                                    Correctas: <?php echo htmlspecialchars($row['cantCorrecta']); ?>,
                                    Incorrectas: <?php echo htmlspecialchars($row['cantIncorrecta']); ?>)
                                </li>
                            <?php endwhile; ?>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="rank">
                <div class="card letraCard">
                    <div class="card-header bg-success text-white">
                        Ranking Listening
                    </div>
                    <div class="card-body">
                        <ol class="listaCentrada">
                            <?php while($row = $resultListening->fetch_assoc()): ?>
                                <li>
                                    <?php echo htmlspecialchars($row['nombreUsuario']); ?> 
                                    (Delta: <?php echo htmlspecialchars($row['delta']); ?>,
                                    Correctas: <?php echo htmlspecialchars($row['cantCorrecta']); ?>,
                                    Incorrectas: <?php echo htmlspecialchars($row['cantIncorrecta']); ?>)
                                </li>
                            <?php endwhile; ?>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="rank">
                <div class="card letraCard">
                    <div class="card-header bg-warning text-white">
                        Ranking Writing
                    </div>
                    <div class="card-body">
                        <ol class="listaCentrada">
                            <?php while($row = $resultWriting->fetch_assoc()): ?>
                                <li>
                                    <?php echo htmlspecialchars($row['nombreUsuario']); ?> 
                                    (Delta: <?php echo htmlspecialchars($row['delta']); ?>,
                                    Correctas: <?php echo htmlspecialchars($row['cantCorrecta']); ?>,
                                    Incorrectas: <?php echo htmlspecialchars($row['cantIncorrecta']); ?>)
                                </li>
                            <?php endwhile; ?>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="rank">
                <div class="card letraCard">
                    <div class="card-header bg-danger text-white">
                        Ranking Juegos
                    </div>
                    <div class="card-body">
                        <ol class="listaCentrada">
                            <?php while($row = $resultJuegos->fetch_assoc()): ?>
                                <li>
                                    <?php echo htmlspecialchars($row['nombreUsuario']); ?> 
                                    (Delta: <?php echo htmlspecialchars($row['delta']); ?>,
                                    Correctas: <?php echo htmlspecialchars($row['cantCorrecta']); ?>,
                                    Incorrectas: <?php echo htmlspecialchars($row['cantIncorrecta']); ?>)
                                </li>
                            <?php endwhile; ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$conn->close();
?>
<?php require('layout/footer.php') ?>
<?php require('layout/js.php') ?>