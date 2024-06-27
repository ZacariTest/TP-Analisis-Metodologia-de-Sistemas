<?php require('layout/header.php') ?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Preguntas de Juegos</h1>
    <form action="proceso_juegos.php" method="post">
        <div class="row">
        <?php
        $opciones1 = [
            ["over", "slate", "Earth", "Cried", "stop", "earn"],
            ["perv", "least", "Heart", "cider", "tops", "near"],
            ["rope", "Steal", "Hater", "dicer", "pots", "range"],
            ["rove", "Sleat", "Rathe", "riced", "spot", "anger"]
        ];

        for ($i = 1; $i <= 5; $i++) {
            echo "<div class='col-12 mb-4'>";
            echo "<div class='card h-100'>";
            echo "<div class='card-body'>";
            echo "<h2 class='card-title'>Pregunta $i</h2>";
            
            $numero = mt_rand(1, 1);
            $numero1 = mt_rand(1, 5);
            $array[$i-1] = $numero1;
            if ($numero == 1) {
                echo "<h3>Pregunta de Juegos 1.$numero1</h3>";
                switch ($numero1) {
                    case 1:
                        echo "<p> Resuelve este Anagrama: EPOR - Object used to climb mountains</p>";
                        break;
                    case 2:
                        echo "<p> Resuelve este Anagrama: rhtae - This planet</p>";
                        break;
                    case 3:
                        echo "<p> Resuelve este Anagrama: Ceird - Action in the past related to a painful emotion</p>";
                        break;
                    case 4:
                        echo "<p> Resuelve este Anagrama: rhtae - This planet</p>";
                        break;
                    case 5:
                        echo "<p> Resuelve este Anagrama: Rane - Elon Musk ___ A lot of money</p>";
                        break;
                }
            } elseif ($numero == 2) {
                echo "<h3>Pregunta de Imágenes 2.$numero1</h3>";
                switch ($numero1) {
                    case 1:
                        echo "<img src='img/fubol.jpg' alt='Fútbol' class='img-fluid'>";
                        break;
                    case 2:
                        echo "<img src='img/homero.webp' alt='Homero' class='img-fluid'>";
                        break;
                    case 3:
                        echo "<img src='img/perro.jfif' alt='Perro' class='img-fluid'>";
                        break;
                    case 4:
                        echo "<img src='img/popcorn.jfif' alt='Palomitas' class='img-fluid'>";
                        break;
                    case 5:
                        echo "<img src='img/tenis.jpg' alt='Tenis' class='img-fluid'>";
                        break;
                }
            } elseif ($numero == 3) {
                echo "<h3>Pregunta de Audio 3.$numero1</h3>";
                echo "<audio controls class='w-100'>
                        <source src='mp3/audicion.mp3' type='audio/mpeg'>
                        Tu navegador no soporta la reproducción de audio.
                      </audio>";
            }

            echo "<div class='form-group'>";
            echo "<p>¿Cuál es la respuesta correcta?</p>";

            $opciones = $numero == 1 ? $opciones1 : ($numero == 2 ? $opciones2 : $opciones3);
            for ($j = 0; $j < 4; $j++) {
                echo "<div class='form-check'>";
                echo "<input class='form-check-input' type='radio' name='respuesta$i' id='opcion$j$i' value='opcion$j' required>";
                echo "<label class='form-check-label ml-4' for='opcion$j$i'>" . $opciones[$j][$numero1 - 1] . "</label>";
                echo "</div>";
            }

            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>

<?php
$_SESSION['numero1_utilizado'] = $array;
require('layout/footer.php');
require('layout/js.php');
?>