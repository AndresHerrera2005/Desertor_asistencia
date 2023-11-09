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
          <a href="inicio.php" class="text-white text-decoration-none"><i class="fas fa-home"></i>Inicio</a>
        </li>
        <!--asistencia-->
        <li class="">
          <a href="asistencia.php" class="text-white text-decoration-none"><i class="fas fa-user-check"></i>Asistencia</a>
        </li>
        <li class="">
          <a href="reporte.php" class="text-white text-decoration-none"><i class="fas fa-file-alt"></i>Reporte</a>
        </li>
        <!--grupo de alumnos -->
        <li class="">
          <a href="grupo.php" class="text-white text-decoration-none"><i class="fas fa-user-friends"></i>Grupo</a>
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
          <a href="cerrarsesion.php" class="text-white text-decoration-none"><i class="fas fa-user"></i>Cerrar Sesion</a>
        </li>
        </ul>
        </ul>
      </ul>
      </div>
    <div class="content">
      <!--navbar sencillo con imagen-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
            Asistencias
          </a>
          <button class="bnt d-md-none d-block close-btn px-1 py-0 text-white"><i class="fal fa-stream"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>
        <div class="d-flex">
         
      </div>
      </nav>
      
     <!--contenido de la pagina-->
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
    <h1 class="text-center">Bienvenido <?php echo $_SESSION['usuario']; ?></h1>
    </div>
  </div>
  <!-- Introducción para las secciones -->
  <div class="row mt-5">
    <div class="col-md-6" >
      <h2>Inicio</h2>
      <p>Bienvenido a nuestra plataforma de asistencias. Comienza tu experiencia aquí.</p>
    </div>
    <div class="col-md-6">
      <h2>Asistencias</h2>
      <p>Lleva un registro detallado de la asistencia a tus clases y eventos.</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-6">
      <h2>Reporte</h2>
      <p>Esta sección se encuentra en mantenimiento. Pronto podrás acceder a herramientas de reporte.</p>
    </div>
    <div class="col-md-6">
      <h2>Grupo</h2>
      <p>Explora información relevante sobre tu grupo de estudio y tus compañeros.</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-6">
      <h2>Horario</h2>
      <p>Accede al horario de tu grupo ingresando la ficha correspondiente.</p>
    </div>
    <div class="col-md-6">
      <h2>Instructores de Competencias</h2>
      <p>Conoce a los instructores dedicados que te guiarán en tus competencias.</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-6">
      <h2>Ayuda</h2>
      <p>Encuentra respuestas a tus preguntas y obtén asistencia para usar nuestra plataforma.</p>
    </div>
    <div class="col-md-6">
      <h2>Quiénes Somos</h2>
      <p>Descubre más sobre nuestro equipo y nuestra misión para ayudarte en tu educación.</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-6">
      <h2>Contactanos</h2>
      <p>Estamos aquí para resolver tus dudas y atender tus sugerencias. Contáctanos cuando lo necesites.</p>
    </div>
    <div class="col-md-6">
      <h2>Sofia Plus</h2>
      <p>Explora recursos adicionales relacionados con tu educación en Sofia Plus.</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-6">
      <h2>Territorium</h2>
      <p>Accede a Territorium para más información sobre tu ubicación o campus.</p>
    </div>
    <div class="col-md-6">
      <h2>Perfil</h2>
      <p>Esta sección se encuentra en mantenimiento. Pronto podrás gestionar tu perfil personalizado.</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-6">
      <h2>Cerrar Sesión</h2>
      <p>Cierra tu sesión cuando hayas terminado de usar nuestra plataforma.</p>
    </div>
  </div>
</div>
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


