<!-- Aqui se hara un error 404, disponible muy pronto -->
<?php
session_start();

if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>perfil</title>
</head>
<body>
    <!-- Estilo de la pagina-->

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-black">Error 404</h1>
              <!-- Esta pagina esta en construccion -->
                <h2 class="text-black">Pagina en construccion</h2>
                <h3 class="text-danger">Disponible muy pronto :)</h3>
                <a href="inicio.php" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
     <!--contenido de la base de datos para un perfil-->






    
</body>
</html>