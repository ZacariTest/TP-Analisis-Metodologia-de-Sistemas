<?php
include 'layout/header.php';?>

<div class="container mt-5">
    <h1 class="text-center mb-4">Preguntas de Imagenes</h1>
    <form action="proceso_imagenes.php" method="post">
        <?php
        $opciones1 = [
            ["Strawberry","Orange","Apple","Kiwii","Lemon "],
            ["Lemon","Strawberry","Orange","Apple","Kiwii "],
            ["Kiwii","Lemon","Strawberry","Orange","Apple "],
            ["Apple","Kiwii","Lemon","Strawberry","Orange "],
        ];
        $opciones2 = [
            ["sunny day, blond hair,park,soccer",
            "Sleeping, Yellow Skin,Red alarms, Radioactive Signs",
            "Picnic, Sunglasses",
             "Popcorn,Watching tv Movie,Party ",
            "Clay Tennis court,Cap,Match"],

            ["sunny day,red haired,Mountains,soccer",
            "working, Yellow Skin, Red alarms,radioactive Signs",
            "Picnic,Sunglasses,Dog",
            "Candys,Watching tv Movie, INside House ",
            "Clay Tennis court,Cap,training"],

            ["Rainy day,blond hair,park,American football ",
            "Sleeping, Yellow Skins, Brown Alarms, Traffic Signs",
            "Picnic,Sunglasses,Rain,dog",
            "Popcorn,Inside House,Jeans,watching TV/Movie",
            "grass tennis court,Cap"],

            ["sunny day,blond hair, park,American football",
            "Sleeping, Yellow Skins, Brown Alarms, Radioactive Signs",
            "Picnic,Sunglasses,Rain,dog,cat",
            "PopCorn",
            "Clay tennis court,Hat,Match" ],
        ];

        $opciones3 = [
            ["Frutilla","naranja","Manzana","Kiwii","Limon "],
            ["Limon","Frutilla","naranja","Manzana","Kiwii "],
            ["Kiwii","Limon","Frutilla","naranja","Manzana "],
            ["Manzana","Kiwii","Limon","Frutilla","naranja "],
        ];
        for ($i = 1; $i <= 5; $i++) {
            echo "<div class='centrar'>";
            echo "<h2 class='card-title centrar'>Pregunta $i</h2>";
            $numero = mt_rand(1, 2);
            $numero1 = mt_rand(1, 5);
            $numUtil[$i-1] = $numero1;
            $numUtil[$i-1] = $numero;

            if ($numero == 1) {
                if ($numero1 == 1) {
                    ?>
        <h3>Pregunta de Imagenes 1.1</h3>
        <img src="img/frutilla.avif" height="50%" width="50%"></img>
        <?php
                } elseif ($numero1 == 2) {
                    ?>
        <h3>Pregunta de Imageness 1.2</h3>
        <img src="img/kiwii.jfif" height="50%" width="50%"></img>
        <?php
                } elseif ($numero1 == 3) {
                    ?>
        <h3>Pregunta de imagenes 1.3</h3>
        <img src="img/limon.jfif" height="50%" width="50%"></img>
        <?php
                } elseif ($numero1 == 4) {
                    ?>
        <h3>Pregunta de Audio 1.4</h3>
        <img src="img/manzana.jpg" height="50%" width="50%"></img>
        <?php
                } elseif ($numero1 == 5) {
                    ?>
        <img src="img/naranja.jpg" height="50%" width="50%"></img>
        <?php
                }
            } elseif ($numero == 2) {
                if ($numero1 == 1) {
                    ?>
        <h3>Pregunta de Imagenes 2.1</h3>
        <img src="img/fubol.jpg" height="50%" width="50%"></img>
        <?php
                } elseif ($numero1 == 2) {
                    ?>
        <h3>Pregunta de Imagenes 2.2</h3>
        <img src="img/homero.webp" height="50%" width="50%"></img>
        <?php
                } elseif ($numero1 == 3) {
                    ?>
        <h3>Pregunta de Imagenes 2.3</h3>
        <img src="img/perro.jfif" height="50%" width="50%"></img>
        <?php
                } elseif ($numero1 == 4) {
                    ?>
        <h3>Pregunta de Imagenes 2.4</h3>
        <img src="img/popcorn.jfif" height="50%" width="50%"></img>
        <?php
                } elseif ($numero1 == 5) {
                    ?>
        <h3>Pregunta de Imagenes 2.5</h3>
        <img src="img/tenis.jpg" height="50%" width="50%"></img>
        <?php
                }
            } elseif ($numero == 3) {
                if ($numero1 == 1) {
                    ?>
        <h3>Pregunta de Audio 3.1</h3>
        <source src="mp3/audicion.mp3" type="audio/mpeg">
        <?php
                } elseif ($numero1 == 2) {
                    ?>
        <h3>Pregunta de Audio 3.2</h3>
        <source src="mp3/colegas.mp3" type="audio/mpeg">
        <?php
                } elseif ($numero1 == 3) {
                    ?>
        <h3>Pregunta de Audio 3.3</h3>
        <source src="mp3/musical.mp3" type="audio/mpeg">
        <?php
                } elseif ($numero1 == 4) {
                    ?>
        <h3>Pregunta de Audio 3.4</h3>
        <source src="mp3/SENSE.mp3" type="audio/mpeg">
        <?php
                } elseif ($numero1 == 5) {
                    ?>
        <h3>Pregunta de Audio 3.5</h3>
        <source src="mp3/sierra.mp3" type="audio/mpeg">
        <?php
                }
            }

            ?>
        <div class="form-group">
            <p>¿Cuál es la respuesta correcta?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta<?php echo $i; ?>"
                    id="opcion1_<?php echo $i; ?>" value="opcion1" required>
                <label class="form-check-label ml-4" for="opcion1_<?php echo $i; ?>">
                    <?php
                    if($numero == 1){
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
                    
                    }elseif($numero ==2){
                        if ($numero1 == 1) {
                            echo($opciones2[0][0]);
                        } elseif ($numero1 == 2) {
                            echo($opciones2[0][1]);
                        } elseif ($numero1 == 3) {
                            echo($opciones2[0][2]);
                        } elseif ($numero1 == 4) {
                            echo($opciones2[0][3]);
                        } else {
                            echo($opciones2[0][4]);
                    }
                }
                        ?>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta<?php echo $i; ?>"
                    id="opcion2_<?php echo $i; ?>" value="opcion2" required>
                <label class="form-check-label ml-4" for="opcion2_<?php echo $i; ?>">
                    <?php
                        if($numero == 1){
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
                    }elseif($numero ==2){
                        if ($numero1 == 1) {
                            echo($opciones2[1][0]);
                        } elseif ($numero1 == 2) {
                            echo($opciones2[1][1]);
                        } elseif ($numero1 == 3) {
                            echo($opciones2[1][2]);
                        } elseif ($numero1 == 4) {
                            echo($opciones2[1][3]);
                        } else {
                            echo($opciones2[1][4]);
                    }
                }
                        ?>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta<?php echo $i; ?>"
                    id="opcion2_<?php echo $i; ?>" value="opcion2" required>
                <label class="form-check-label ml-4" for="opcion2_<?php echo $i; ?>">
                    <?php
                            if($numero == 1){
                        if ($numero1 == 1) {
                            echo($opciones1[2][0]);
                        } elseif ($numero1 == 2) {
                            echo($opciones1[2][1]);
                        } elseif ($numero1 == 3) {
                            echo($opciones1[2][2]);
                        } elseif ($numero1 == 4) {
                            echo($opciones1[2][3]);
                        } else {
                            echo($opciones1[2][4]);
                        }
                    }elseif($numero ==2){
                        if ($numero1 == 1) {
                            echo($opciones2[2][0]);
                        } elseif ($numero1 == 2) {
                            echo($opciones2[2][1]);
                        } elseif ($numero1 == 3) {
                            echo($opciones2[2][2]);
                        } elseif ($numero1 == 4) {
                            echo($opciones2[2][3]);
                        } else {
                            echo($opciones2[2][4]);
                    }
                }
                        ?>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta<?php echo $i; ?>"
                    id="opcion2_<?php echo $i; ?>" value="opcion2" required>
                <label class="form-check-label ml-4" for="opcion2_<?php echo $i; ?>">
                    <?php
                                   if($numero == 1){
                        if ($numero1 == 1) {
                            echo($opciones1[3][0]);
                        } elseif ($numero1 == 2) {
                            echo($opciones1[3][1]);
                        } elseif ($numero1 == 3) {
                            echo($opciones1[3][2]);
                        } elseif ($numero1 == 4) {
                            echo($opciones1[3][3]);
                        } else {
                            echo($opciones1[3][4]);
                        }
                    }elseif($numero ==2){
                        if ($numero1 == 1) {
                            echo($opciones2[3][0]);
                        } elseif ($numero1 == 2) {
                            echo($opciones2[3][1]);
                        } elseif ($numero1 == 3) {
                            echo($opciones2[3][2]);
                        } elseif ($numero1 == 4) {
                            echo($opciones2[3][3]);
                        } else {
                            echo($opciones2[3][4]);
                    }
                }
                        ?>
                </label>
            </div>

        </div>
        <?php
                    echo "</div>";

            echo "</div>";
            echo "</div>";
        }
    
        ?>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
<?php
$_SESSION['numero1_utilizado'] = $numUtil;
$_SESSION['numero_utilizado'] = $numUtil;
include 'layout/footer.php';
?>