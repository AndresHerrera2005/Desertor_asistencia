<?php
//Se incluye la conexion a la base de datos
require 'conexion.php';
//agrergar aprendiz
$documento = $_POST['documento'];
$tipodoc = $_POST['tipodoc'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$celular = $_POST['celular'];
//consulta para insertar
$sql = "INSERT INTO aprendiz (documento, tipodoc, nombres, apellidos, email, celular) VALUES ('$documento', '$tipodoc', '$nombres', '$apellidos', '$email', '$celular')";

if (mysqli_query($conectar, $sql)) {
    //alerta de que se agrego correctamente
    echo '<script language="javascript">';
    echo 'alert("Aprendiz agregado correctamente");';
    echo 'window.location.href = "alumnos.php";';
    echo '</script>';
} else {
    echo "Hubo un error al agregar el aprendiz: " . mysqli_error($conectar);
}
?>