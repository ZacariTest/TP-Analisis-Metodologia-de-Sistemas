<?php
include 'layout/header.php';
$url_audio = $loggeado ? 'audio.php' : 'login.php';
$url_juegos = $loggeado ? 'juegos.php' : 'login.php';
$url_preguntas = $loggeado ? 'imagenes.php' : 'login.php';
?>

<!DOCTYPE html>
<html lang="es">

<body class="flex margin0">
<div class="row divindex">
    <div class="cardsindex">
        <h2 class="text-center centrar margTit">Actividades</h2>
        <div class="row actividades-cards letraCard">
            <div class="col-lg-4 mb-4">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="img/audio.jpg" class="card-img-top" alt="Cincuenta/Fifty">
                        <p class="card-title">Audio</p>
                        <p> Correctas/Incorrectas</p>
             

                        <a href="<?php echo $url_audio; ?>" class="btn btn-primary butindex">Empezar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="img/joystick.jpg" class="card-img-top" alt="Cincuenta/Fifty">
                        <p class="card-title">Juegos</p>
                        <p> Correctas/Incorrectas</p>

                        <a href="<?php echo $url_juegos; ?>" class="btn btn-primary butindex">Empezar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="img/pregunta.png" class="card-img-top" alt="Cincuenta/Fifty">
                        <p class="card-title">Imagenes</p>
                        <p> Correctas/Incorrectas</p>

                        <a href="<?php echo $url_preguntas; ?>" class="btn btn-primary butindex">Empezar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cardsindex"></div>

    <div class="cardsindex">
        <h2 class="text-center margTit">Ranking</h2>
        <div class="row letraCard">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-primary text-white text-center">
                        Ranking Global
                    </div>
                    <div class="card-body">
                        <ol class="list-group list-group-flush text-center">
                            <li class="list-group-item">Manolo</li>
                            <li class="list-group-item">Pepe</li>
                            <li class="list-group-item">Gabriela</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-success text-white text-center">
                        Ranking Listening
                    </div>
                    <div class="card-body">
                        <ol class="list-group list-group-flush text-center">
                            <li class="list-group-item">Juan</li>
                            <li class="list-group-item">Ana</li>
                            <li class="list-group-item">Pedro</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-header bg-warning text-white text-center">
                        Ranking Writing
                    </div>
                    <div class="card-body">
                        <ol class="list-group list-group-flush text-center">
                            <li class="list-group-item">Lucía</li>
                            <li class="list-group-item">Roberto</li>
                            <li class="list-group-item">María</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('layout/footer.php') ?>
<?php require('layout/js.php') ?>

</body>

</html>