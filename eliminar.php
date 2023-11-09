<?php
// Conexión a la base de datos
require 'conexion.php';

if (isset($_GET['documento']) && isset($_GET['tipodoc']) && isset($_GET['nombres']) && isset($_GET['apellidos']) && isset($_GET['email']) && isset($_GET['celular'])) {
    $documento = $_GET['documento']; // Suponiendo que el documento es único
    $tipodoc = $_GET['tipodoc'];
    $nombres = $_GET['nombres'];
    $apellidos = $_GET['apellidos'];
    $email = $_GET['email'];
    $celular = $_GET['celular'];

    // Escapa los valores de los campos para evitar SQL injection
    $documento = mysqli_real_escape_string($conectar, $documento);
    $tipodoc = mysqli_real_escape_string($conectar, $tipodoc);
    $nombres = mysqli_real_escape_string($conectar, $nombres);
    $apellidos = mysqli_real_escape_string($conectar, $apellidos);
    $email = mysqli_real_escape_string($conectar, $email);
    $celular = mysqli_real_escape_string($conectar, $celular);
    
    // Consulta para eliminar la fila
    $sql = "DELETE FROM aprendiz WHERE documento='$documento' AND tipodoc='$tipodoc' AND nombres='$nombres' AND apellidos='$apellidos' AND email='$email' AND celular='$celular'";
    
    if (mysqli_query($conectar, $sql)) {
        // Alerta de que se eliminó el aprendiz correctamente
        echo '<script language="javascript">';
        echo 'alert("Aprendiz eliminado correctamente");';
        echo 'window.location.href = "alumnos.php";';
        echo '</script>';
    } else {
        echo "Hubo un error al eliminar el aprendiz: " . mysqli_error($conectar);
    }
} else {
    echo "No se proporcionaron datos válidos para eliminar.";
}

mysqli_close($conectar);
?>