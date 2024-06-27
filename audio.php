<?php require('layout/header.php') ?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Preguntas de Audio</h1>
    <form action="proceso_audio.php" method="post">
        <div class="row">
        <?php
        $opciones1 = [
            ["es demasiado tarde para ir a la audicion, no puedo comprar", "fue terrible me pelee con mis compañeros todo el tiempo ", "Saben que deberiamos hacer ver un musico", "Chandler, Senti que eras tu", "Vayan hacia atras, tengo una motosierra "],
            ["Es demasiado tarde, tengo una audicion, no puedo ir a comprar", "fue terrible me perdi junto a mis compañeros todo el tiempo", "Saben que deberiamos hacer ver un musical", "Chandler, ah lo siento eras tu", "Mantengan sus espaldas firmes, al usar una motosierra"],
        ];

        for ($i = 1; $i <= 5; $i++) {
            echo "<div class='col-12 mb-4'>";
            echo "<div class='card h-100'>";
            echo "<div class='card-body'>";
            echo "<h2 class='card-title'>Pregunta $i</h2>";
            $numero = mt_rand(1, 3);
            $numero1 = mt_rand(1, 5);
            $numUtil[$i-1] = $numero1;

            if ($numero == 1) {
                if ($numero1 == 1) {
                    ?>
                    <h3>Pregunta de Audio 1.1</h3>
                    <audio controls class="w-100">
                        <source src="mp3/audicion.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                } elseif ($numero1 == 2) {
                    ?>
                    <h3>Pregunta de Audio 1.2</h3>
                    <audio controls class="w-100">
                        <source src="mp3/colegas.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                } elseif ($numero1 == 3) {
                    ?>
                    <h3>Pregunta de Audio 1.3</h3>
                    <audio controls class="w-100">
                        <source src="mp3/musical.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                } elseif ($numero1 == 4) {
                    ?>
                    <h3>Pregunta de Audio 1.4</h3>
                    <audio controls class="w-100">
                        <source src="mp3/SENSE.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                } elseif ($numero1 == 5) {
                    ?>
                    <h3>Pregunta de Audio 1.5</h3>
                    <audio controls class="w-100">
                        <source src="mp3/sierra.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                }
            } elseif ($numero == 2) {
                if ($numero1 == 1) {
                    ?>
                    <h3>Pregunta de Audio 2.1</h3>
                    <audio controls class="w-100">
                        <source src="mp3/audicion.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                } elseif ($numero1 == 2) {
                    ?>
                    <h3>Pregunta de Audio 2.2</h3>
                    <audio controls class="w-100">
                        <source src="mp3/colegas.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                } elseif ($numero1 == 3) {
                    ?>
                    <h3>Pregunta de Audio 2.3</h3>
                    <audio controls class="w-100">
                        <source src="mp3/musical.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                } elseif ($numero1 == 4) {
                    ?>
                    <h3>Pregunta de Audio 2.4</h3>
                    <audio controls class="w-100">
                        <source src="mp3/SENSE.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                } elseif ($numero1 == 5) {
                    ?>
                    <h3>Pregunta de Audio 2.5</h3>
                    <audio controls class="w-100">
                        <source src="mp3/sierra.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                }
            } elseif ($numero == 3) {
                if ($numero1 == 1) {
                    ?>
                    <h3>Pregunta de Audio 3.1</h3>
                    <audio controls class="w-100">
                        <source src="mp3/audicion.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                } elseif ($numero1 == 2) {
                    ?>
                    <h3>Pregunta de Audio 3.2</h3>
                    <audio controls class="w-100">
                        <source src="mp3/colegas.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                } elseif ($numero1 == 3) {
                    ?>
                    <h3>Pregunta de Audio 3.3</h3>
                    <audio controls class="w-100">
                        <source src="mp3/musical.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                } elseif ($numero1 == 4) {
                    ?>
                    <h3>Pregunta de Audio 3.4</h3>
                    <audio controls class="w-100">
                        <source src="mp3/SENSE.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php
                } elseif ($numero1 == 5) {
                    ?>
                    <h3>Pregunta de Audio 3.5</h3>
                    <audio controls class="w-100">
                        <source src="mp3/sierra.mp3" type="audio/mpeg">
                        Tu navegador no soporta la reproducción de audio.
                    </audio>
                    <?php

                }
            }

            ?>
            <div class="form-group">
                <p>¿Cuál es la respuesta correcta?</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="respuesta<?php echo $i; ?>" id="opcion1_<?php echo $i; ?>" value="opcion1" required>
                    <label class="form-check-label ml-4" for="opcion1_<?php echo $i; ?>">
                        <?php
                        if ($numero1 == 1) {
                            echo($opciones1[0][0]);
                        } elseif ($numero1 == 2) {
                            echo($opciones1[0][1]);
                        } elseif ($numero1 == 3) {
                            echo($opciones1[0][2]);
                        } elseif ($numero1 == 4) {
                            echo($opciones1[0][3]);
                        } else {
                            echo($opciones1[0][4]);
                        }
                        ?>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="respuesta<?php echo $i; ?>" id="opcion2_<?php echo $i; ?>" value="opcion2" required>
                    <label class="form-check-label ml-4" for="opcion2_<?php echo $i; ?>">
                        <?php
                        if ($numero1 == 1) {
                            echo($opciones1[1][0]);
                        } elseif ($numero1 == 2) {
                            echo($opciones1[1][1]);
                        } elseif ($numero1 == 3) {
                            echo($opciones1[1][2]);
                        } elseif ($numero1 == 4) {
                            echo($opciones1[1][3]);
                        } else {
                            echo($opciones1[1][4]);
                        }
                        ?>
                    </label>
                </div>
            </div>
            <?php
            $_SESSION['numeros_utilizados'] = $numUtil;
            echo "</div>";
            echo "</div>";
            echo "</div>"; 
        }
        ?>
        </div> <!-- Close row -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>

<?php
require('layout/footer.php') ?>