<!DOCTYPE html>
<html>
<head>
    <title>Editar Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Editar Registro</h2>
        <?php
        if (isset($_GET['documento']) && isset($_GET['tipodoc']) && isset($_GET['nombres']) && isset($_GET['apellidos']) && isset($_GET['email']) && isset($_GET['celular'])) {
            $documento = $_GET['documento'];
            $tipodoc = $_GET['tipodoc'];
            $nombres = $_GET['nombres'];
            $apellidos = $_GET['apellidos'];
            $email = $_GET['email'];
            $celular = $_GET['celular'];

            echo "<form action='guardar.php' method='POST'>";
            echo "<label for='documento'>Documento:</label>";
            echo "<input type='text' name='documento' value='$documento'><br>";
            echo "<label for='tipodoc'>Tipo de Documento:</label>";
            echo "<input type='text' name='tipodoc' value='$tipodoc'><br>";
            echo "<label for='nombres'>Nombres:</label>";
            echo "<input type='text' name='nombres' value='$nombres'><br>";
            echo "<label for='apellidos'>Apellidos:</label>";
            echo "<input type='text' name='apellidos' value='$apellidos'><br>";
            echo "<label for='email'>Email:</label>";
            echo "<input type='text' name='email' value='$email'><br>";
            echo "<label for='celular'>Celular:</label>";
            echo "<input type='text' name='celular' value='$celular'><br>";
            echo "<input type='submit' value='Guardar Cambios'>";
            echo "</form>";
        } else {
            echo "No se proporcionaron datos válidos para editar.";
        }
        ?>
    </div>
</body>
</html>
