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
          <a href="instructor.php" class="text-white text-decoration-none"><i class="fas fa-user"></i>Profesores</a>
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
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Alumnos</h1>
            </div>
            </div>
            <br>
            <!--barra de busqueda-->
            <div class="row">
            <div class="col-md-6">
                <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="buscar" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
                </div>
                </form>
            </div>
            </div>
            <!--tabla de aprendiz-->

            <?php
            include("conexion.php");
            // Verificar si se pasó el parámetro "admin" en la URL
  
            // Resto de tu código para mostrar la tabla de alumnos
          
            
            // Inicializa la variable de búsqueda
            $buscar = "";

            // Verifica si se envió una consulta de búsqueda
            if (isset($_POST['buscar'])) {
                $buscar = $_POST['buscar'];

                // Prepara la consulta SQL para buscar por nombre
                $query = "SELECT * FROM aprendiz WHERE nombres LIKE ?";

                // Prepara la declaración de la consulta
                if ($stmt = $conectar->prepare($query)) {
                    // Enlaza el parámetro
                    $param = "%$buscar%";
                    $stmt->bind_param('s', $param);

                    // Ejecuta la consulta
                    $stmt->execute();

                    // Obtiene resultados
                    $resultado = $stmt->get_result();

                    // Si se encontraron resultados, muestra los datos en la tabla
                    if ($resultado->num_rows > 0) {
                        echo "<h2>Resultados de la búsqueda:</h2>";
                        echo '<table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Documento</th>
                                    <th scope="col">Tipo documento</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Celular</th>
                                </tr>
                            </thead>
                            <tbody>';

                        while ($row = $resultado->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['documento'] . "</td>";
                            echo "<td>" . $row['tipodoc'] . "</td>";
                            echo "<td>" . $row['nombres'] . "</td>";
                            echo "<td>" . $row['apellidos'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['celular'] . "</td>";
                            //BOTONES DE AGREGRAR, EDITAR Y ELIMINAR si es admin
                            echo "</tr>";
                        }

                        echo "</tbody></table>";
                    } else {
                        echo "<h2>No se encontraron resultados</h2>";
                    }

                    // Cierra la declaración
                    $stmt->close();
                } else {
                    echo "Error en la preparación de la consulta: " . $conectar->error;
                }
            } else {
                // Si no se realiza una búsqueda, muestra la tabla completa
                $query = "SELECT * FROM aprendiz";
                $resultado = $conectar->query($query);
                //BOTON DE AGREGAR si es admin
                if ($_SESSION['tipousuario'] == 'Administrador') {
                    echo "<a href='agregar.php' class='btn btn-primary'>Agregar</a>";
                    //salto de linea
                    echo "<br><br>";
                }
                

                echo '<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Documento</th>
                            <th scope="col">Tipo documento</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Email</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>';

                while ($row = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['documento'] . "</td>";
                    echo "<td>" . $row['tipodoc'] . "</td>";
                    echo "<td>" . $row['nombres'] . "</td>";
                    echo "<td>" . $row['apellidos'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['celular'] . "</td>";
                    echo "</td>";
                    //BOTONES DE AGREGRAR, EDITAR Y ELIMINAR si es admin
                    if ($_SESSION['tipousuario'] == 'Administrador') {
                        echo "<td>";
                        echo "<a href='editar_a.php?documento=" . $row['documento'] . "&tipodoc=" . $row['tipodoc'] . "&nombres=" . $row['nombres'] . "&apellidos=" . $row['apellidos'] . "&email=" . $row['email'] . "&celular=" . $row['celular'] . "' class='btn btn-warning'>Editar</a>";
                        
                        echo"</td>";
                        echo "<td>";
                        echo "<a href='eliminar.php?documento=" . $row['documento'] . "&tipodoc=" . $row['tipodoc'] . "&nombres=" . $row['nombres'] . "&apellidos=" . $row['apellidos'] . "&email=" . $row['email'] . "&celular=" . $row['celular'] . "' class='btn btn-danger'>Eliminar</a>";
                        echo "</td>";
                    }
                    echo "</tr>";         
                   


                }

                echo "</tbody></table>";

                

              

            }
          
            ?>

            <!--footer de redes de sociales-->
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