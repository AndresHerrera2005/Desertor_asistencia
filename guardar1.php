<?php
require 'conexion.php';

$documento = $_POST['documento'];

if (mysqli_num_rows(mysqli_query($conectar, "SELECT * FROM asistencia WHERE documento = '$documento'")) == 0) {
    //Insertar en la tabla asistencia
    $insertar = "INSERT INTO asistencia(documento,nficha,horaentrada) VALUES 
    ('$documento',getFicha('$documento'),NOW())";
    $resultado = mysqli_query($conectar, $insertar);
    if (!$resultado) {
   //Si no se inserta correctamente alerta pero no alert
        echo '<script>
        alert("Error al registrar la entrada");
        location.href="asistencia.php";
        </script>';
        
    } else {
        echo '<script>
        alert("Entrada registrada correctamente");
        location.href="asistencia.php";
        </script>';
    }
} else {
    //Si el aprendiz ya tiene una entrada entonces actualizar la hora de salida
    $actualizar = "UPDATE asistencia SET horasalida = NOW() WHERE documento = '$documento'";
    $resultado = mysqli_query($conectar, $actualizar);
    //alerta si  se actualiza correctamente
    if (!$resultado) {
        echo '<script>
        alert("Error al registrar la salida");
        location.href="asistencia.php";
        </script>';
    } else {
        echo '<script>
        alert("Salida registrada correctamente");
        location.href="asistencia.php";
        </script>';
    }
}
?>
