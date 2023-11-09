<?php
session_start();

require 'conexion.php';

// Verificar si se enviaron datos por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recuperar datos del formulario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $tipousuario = $_POST['tipousuario'];

    // Consulta segura para buscar el usuario por nombre y contraseña
    $consulta = "SELECT * FROM usuario WHERE usuario = ? AND password = ? AND tipousuario = ?";
    
    // Preparar la consulta
    $stmt = mysqli_prepare($conectar, $consulta);
    
    // Vincular los parámetros
    mysqli_stmt_bind_param($stmt, "sss", $usuario, $password, $tipousuario);
    
    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);
    
    // Obtener el resultado de la consulta
    $resultado = mysqli_stmt_get_result($stmt);

    if (!$resultado) {
        die("Error en la consulta: " . mysqli_error($conectar));
    }

    $filas = mysqli_num_rows($resultado);

    if ($filas > 0) {
        // Usuario y contraseña correctos, establecer sesiones y redirigir
        $usuarioData = mysqli_fetch_assoc($resultado);
        $_SESSION['usuario'] = $usuarioData['usuario'];
        $_SESSION['tipousuario'] = $usuarioData['tipousuario'];

        switch ($usuarioData['tipousuario']) {
            case 'Administrador':
                header("location:inicio-admin.php");
                exit();
            case 'Instructor':
                header("location:instructor.php");
                exit();
            case 'Aprendiz':
                header("location:inicio.php");
                exit();
            default:
                header("location:index.php");
                exit();
        }

    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        echo '<script>
            alert("Usuario o contraseña incorrectos");
            location.href="index.php";
        </script>';
        exit();
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conectar);
}
?>
