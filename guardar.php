<?php
require 'conexion.php';
$documento = $_POST['documento'];
$tipodoc = $_POST['tipodoc'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$sql = "UPDATE aprendiz SET tipodoc='$tipodoc', nombres='$nombres', apellidos='$apellidos', email='$email', celular='$celular' WHERE documento='$documento'";
if (mysqli_query($conectar, $sql)) {
    //alerta de que se actualizo correctamente
    echo '<script language="javascript">';
    echo 'alert("Aprendiz actualizado correctamente");';
    header("location:alumnos.php");
} else {
    echo "Hubo un error al actualizar el aprendiz: " . mysqli_error($conectar);
}