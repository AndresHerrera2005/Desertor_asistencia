<?php
session_start(); // Iniciar sesión
session_destroy(); // Destruir sesión
header("Location: index.php"); // Redirigir a la página de inicio
exit();
?>
