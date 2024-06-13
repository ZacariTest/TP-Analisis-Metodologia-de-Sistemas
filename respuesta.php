<?php
include_once('header.php');
?>
<body>
    <section>
        <?php
            $nombre;
            $apellido;
            $fecha;
            $bando;
            $comentario;

            //archivo
            if(isset($_POST['nombre'])){
                $nombre=$_POST['nombre'];
            }
            if(isset($_POST['apellido'])){
                $apellido=$_POST['apellido'];
            }
            if(isset($_POST['fecha'])){
                $fecha=$_POST['fecha'];
            }
            if(isset($_POST['bando'])){
                $bando=$_POST['bando'];
            }
            if(isset($_POST['comentario'])){
                $comentario=$_POST['comentario'];
            }
            if ($bando =='Clon'){
                echo "<img src='imagenes/clon1.webp' alt=Clon class='paddingl15'> ";
            }
            if ($bando =='Separatista'){
                echo "<img src='imagenes/Descarga.jpg' alt=Droide class='paddingl35' height='900px'> ";
            }
            if ($bando =='Rebelion'){
                echo "<img src='imagenes/paul.webp' alt=Rebelion height='900px' class='paddingl37'> ";
            }
            if ($bando =='Imperial'){
                echo "<img src='imagenes/soldado.webp' alt=Imperial height='900px'  class='paddingl37'> ";
            }
            echo "
                    <h1 class= 'centrar'>Muchas gracias $nombre $apellido</h1>
                    <ul class='centrar'>
                        <li>Fecha de nacimiento: $fecha</li>
                        <li>bando: $bando</li>
                        <li>Comentario: $comentario</li>
            ";
       ?>
    </section>
    <?php
    include_once('footer.php');       ?>
