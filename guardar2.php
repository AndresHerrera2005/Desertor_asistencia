<?php
require 'conexion.php';
session_start();
if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
  exit();
}
$usuario = $_SESSION['usuario'];
$detalles = $_POST['detalles'];
$fecha = $_POST['fecha'];

$query = "INSERT INTO reportes (usuario, detalles, fecha) VALUES ('$usuario', '$detalles', '$fecha')";
$result = mysqli_query($conectar, $query);
// SI es correcto mandar alerta
if ($result) {
  echo "<script>alert('Reporte enviado correctamente')
  window.location.href='reporte.php'
  </script>";
} else {
  echo "<script>alert('Error al enviar el reporte')
  window.location.href='reporte.php'
  </script>";
}
mysqli_close($conectar);
?>
