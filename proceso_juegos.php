<?php

$conexion = mysqli_connect('localhost', 'root', '', 'ingles', '3306');

session_start();
$id_usuario = $_SESSION['id_usuario']; 

$cant_correcta = 0;
$calificacion_final = 0;
$numeros_utilizados = $_SESSION['numero1_utilizado'];

for ($i = 1; $i <= 5; $i++) {
    $respuesta_usuario = $_POST['respuesta' . $i];

    if($numeros_utilizados[$i-1]==1){
        $numero_correcto = 2; 
    }else if($numeros_utilizados[$i-1]==2)
    {
        $numero_correcto = 1; 
    }else if($numeros_utilizados[$i-1]==3)
    {
        $numero_correcto = 2; 
    }else if($numeros_utilizados[$i-1]==4)
    {
        $numero_correcto = 1; 
    }else
    {
        $numero_correcto = 1; 
    }

    if ($respuesta_usuario === 'opcion' . $numero_correcto) {
        $cant_correcta++;
    }
}

$calificacion_final = ($cant_correcta / 5) * 100;

$sql = "INSERT INTO resultados (idUsuario,tipoExamen, cantCorrecta,cantIncorrecta, experiencia) VALUES ( '$id_usuario',2, '$cant_correcta',5-$cant_correcta, '$calificacion_final')";

if ($conexion->query($sql) === TRUE) {
    echo "Respuestas procesadas y guardadas exitosamente.";

} else {
    echo "Error al procesar las respuestas: " . $conn->error;
}

$conexion->close();

?>
