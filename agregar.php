<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Agregar Aprendices</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        form {
            max-width: 400px;
            margin: 10px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="text"] {
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        /* Estilo para el enlace volver */
        a {
    display: block;
    background-color: black;
    width: 3em;
    padding: 0.5em;
    border-radius: 0.5em;
    margin: 10px 0;
    color: #007BFF;
    text-decoration: none; /* Elimina la subrayado predeterminado de los enlaces */
    transition: color 0.3s; /* Agrega una transición suave en el cambio de color */
}
a:hover {
    color: #0056b3; /* Cambia el color cuando se pasa el cursor sobre el enlace */
}

    </style>
</head>
<body>
    <a href="inicio-admin.php">Volver</a>
    <form action="agregar_a.php" method="POST">
        <h2>Formulario de Agregar Aprendices</h2>
        <input type="text" name="nombres" placeholder="Nombres" required>
        <input type="text" name="apellidos" placeholder="Apellido" required>
        <input type="text" name="documento" placeholder="Documento" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="text" name="tipodoc" placeholder="Tipo de documento" required>
        <input type="text" name="celular" placeholder="Celular" required>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>
