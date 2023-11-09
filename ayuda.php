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
    <!--link bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style4.css">
    <title>Reporte</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
   <!-- Icono de la pestaña -->
    <link rel="shortcut icon" href="inicio.png" type="image/x-icon">
</head>
<body>
  <div class="main-container d-flex">
    <div class="sidebar" id="side_nav">
      <div class="header-box px-2 pt-3 pb-4">
        <h1 class="fs-4"><span class="text-white">Menu</span><span class="text-white">De</span><span class="text-white">Asistencias</span></h1>
     <button class="bnt d-md-none d-block close-btn px-1 py-0 text-white"><i class="fal fa-stream"></i></button>
      </div>

      <ul class="list-unstyled px-2">
        <li class="">
        <a href="inicio-admin.php" class="text-white text-decoration-none"><i class="fas fa-home"></i>Inicio</a>
        </li>
        <li class="">
          <a href="asistencia.php" class="text-white text-decoration-none"><i class="fas fa-user-check"></i>Asistencia</a>
        </li>
        <li class="">
          <a href="reporte.php" class="text-white text-decoration-none"><i class="fas fa-file-alt"></i>Reporte</a>
        </li>
        <!--grupo de alumnos -->
        <li class="">
          <a href="alumnos.php" class="text-white text-decoration-none"><i class="fas fa-user-friends"></i>Grupo</a>  
        </li>

        <!-- <li class="">
          <a href="cerrar.php" class="text-white text-decoration-none"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
        </li> -->

        <!--perfil al final-->
        <!-- <li class="perfil">
          <a href="perfil.php" class="text-white text-decoration-none"><i class="fas fa-user"></i>Perfil</a>
        </li> -->
        <hr class="h-color mx-2">
        <ul class="list-unstyled ">
        <!--horario-->
        <li class="perfil">
          <a href="https://omnidatos.com/calendario2020/index.php?NumFicha=" class="text-white text-decoration-none"><i class="fas fa-user"></i>Horario</a>
        </li>
        <!--profesores-->
        <li class="profesor">
          <a href="profesores.php" class="text-white text-decoration-none"><i class="fas fa-user"></i>Profesores</a>
        </li>
        <!--competencias-->
        <li class="competencia">
          <a href="competencias.php" class="text-white text-decoration-none"><i class="fas fa-user"></i>Competencias</a>
        </li>
        </ul>
        <hr class="h-color mx-2">
        <ul class="list-unstyled">
           <!--ayuda-->
        <li class="ayuda">
          <a href="ayuda.php" class="text-white text-decoration-none"><i class="fas fa-user"></i>Ayuda</a>
        </li>
        <!--Quienes somos?-->
        <li class="quienes">
          <a href="quienes.php" class="text-white text-decoration-none"><i class="fas fa-user"></i>Quienes somos?</a>
        </li>
        <!--contactanos-->
        <li class="contactos">
          <a href="contactos.php" class="text-white text-decoration-none"><i class="fas fa-user"></i>Contactanos</a>
        </li>
        <!--sofia plus-->
        <li class="sofia">
          <a href="https://oferta.senasofiaplus.edu.co/sofia-oferta/" class="text-white text-decoration-none"><i class="fas fa-user"></i>Sofia Plus</a>
        </li>
        <!--territorium-->
        <li class="territorium">
          <a href="https://sena.territorio.la/index.php?login=true" class="text-white text-decoration-none"><i class="fas fa-user"></i>Territorium</a>
        </li>
        </ul>
        <hr class="h-color mx-2">
        <ul class="list-unstyled">
        <!--perfil al final-->
        <li class="perfil">
          <a href="perfil.php" class="text-white text-decoration-none"><i class="fas fa-user"></i>Perfil</a>
        </li>
        <!--cerrar sesion-->
        <li class="cerrar">
          <a href="index.php" class="text-white text-decoration-none"><i class="fas fa-user"></i>Cerrar Sesion</a>
        </li>
        </ul>
        </ul>
      </ul>
      </div>
    <div class="content">

    <!-- Error 404 -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="error-template text-center">
            <h1>
              <img src="404.png" alt="404">
            </h1>
            <h2>
              Error 404
            </h2>
            <div class="error-details">
              Lo sentimos, ha ocurrido un error, página no encontrada!
            </div>
            <div class="error-actions mt-4">
              <a href="inicio-admin.php" class="btn btn-primary btn-lg">
                <span class="glyphicon glyphicon-home"></span>
                Volver a la página de inicio
              </a>
            </div>
          </div>
        </div>
      </div>
      <br>
      
<div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="text-muted">&copy; Sena 2023</span>
    </div>
    <!--link para las redes sociales-->
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/SENA/"><i class="fab fa-facebook-f"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="https://twitter.com/SENAComunica"><i class="fab fa-twitter"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/senacomunica/"><i class="fab fa-instagram"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="https://www.youtube.com/user/SENATV"><i class="fab fa-youtube"></i></a></li>
    </ul>
  </footer> 
        </div>
    </div>
  </div>

  
    
</body>
</html>


