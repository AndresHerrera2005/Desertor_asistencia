<?php
session_start();

if (!isset($_SESSION['usuario'])) {
  header('Location: index.php');
  exit();
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio Proveedor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<style>
  body {
    background-color: #f1f1f1;
    font-family: Arial, Helvetica, sans-serif;
  }
  #side_nav{
    background-color: black;
    min-width: 250px;
    max-width: 250px;
  }
  .content {
    min-height: 100vh;
    width: 100%;
    padding: 20px; /* Añadido para el espacio entre el contenido y el borde */
  }
  /* ... Estilos CSS existentes ... */
</style>
<body>
  <div class="main-container d-flex">
    <div class="sidebar" id="side_nav">
      <div class="header-box px-2 pt-3 pb-4">
        <h1 class="fs-4"><span class="text-white">Menu</span><span class="text-white">De</span><span class="text-white">Productos</span></h1>
        <button class="bnt d-md-none d-block close-btn px-1 py-0 text-white"><i class="fal fa-stream"></i></button>
      </div>

      <ul class="list-unstyled px-2">
        <li class="">
            <a href="inicio.php" class="text-white"><i class="fas fa-home"></i>Inicio</a>
        </li>
        <li class="">
            <a href="aprendiz.php" class="text-white"><i class="fas fa-box"></i>Aprendices</a>
        </li>
        <li class="">
            <a href="instructor.php" class="text-white"><i class="fas fa-box"></i>Instructores</a>
        </li>
        <li class="">
            <a href="Asistencias.php" class="text-white"><i class="fas fa-box"></i>Asistencia</a>
        </li>
        <!-- Calendario -->
        <li class="">
            <a href="calendario.php" class="text-white"><i class="fas fa-box"></i>Calendario</a>
        </li>
        
      </ul>
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Bienvenido <?php echo $_SESSION['usuario']; ?></h1>
          </div>
        </div>
      </div>
    </div>
    <?php if ($_SESSION['tipo_usuario'] == 'cliente') { ?>
      <script>
        window.location.replace("inicio.php");
      </script>
    <?php } ?>

</body>
</html>
