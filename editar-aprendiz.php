<?php
// Verificamos  si se recibió el ID a editar
if (isset($_GET['id'])) {
    // Conectamos  a la base de datos
    $conexion = mysqli_connect('localhost', 'root', '', 'servicios');

    // Obtenemos el ID a editar
    $id = $_GET['id'];

    // Consultamosel  SQL para obtener los datos del producto
    $sql = "SELECT * FROM productos WHERE id_factura = $id";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        $mostrar = mysqli_fetch_assoc($resultado);
    } else {
        echo "<script>alert('Error al obtener los datos del producto');</script>";
    }

    // Cerramos la conexión a la base de datos
    mysqli_close($conexion);
} else {
    echo "<script>alert('ID de producto no proporcionado');</script>";
}

// Procesamos el formulario de edición
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productos = $_POST['productos'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    // Conectamos a la base de datos
    $conexion = mysqli_connect('localhost', 'root', '', 'servicios');

    // Consultamos SQL para actualizar los datos del producto
    $updateQuery = "UPDATE productos SET productos='$productos', precio='$precio', cantidad='$cantidad' WHERE id_factura='$id'";
    $query = mysqli_query($conexion, $updateQuery);

    if ($query) {
        echo "<script>alert('Producto editado correctamente');</script>";
        // Redirigir a la página principal después de editar
        echo "<script>window.location.href = 'formulario.php';</script>";
    } else {
        echo "<script>alert('Error al editar el producto');</script>";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilos para el formulario de edición */
        .product-form {
            width: 50%;
            margin: 0 auto;
        }

        .product-form label, .product-form input {
            display: block;
            margin-bottom: 10px;
        }

        .product-form input[type="text"] {
            width: 100%;
            padding: 5px;
        }

        .product-form input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="product-form">
        <h2>Editar Producto</h2>
        <form action="" method="POST">
            <label for="productos">Nombre del Producto:</label>
            <input type="text" id="productos" name="productos" value="<?php echo $mostrar['productos']; ?>">

            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" value="<?php echo $mostrar['precio']; ?>">

            <label for="cantidad">Cantidad:</label>
            <input type="text" id="cantidad" name="cantidad" value="<?php echo $mostrar['cantidad']; ?>">

            <input type="submit" value="Guardar Cambios">
        </form>
    </div>
</body>
</html>