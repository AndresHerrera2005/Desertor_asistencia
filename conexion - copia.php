<!--codigo conexion.php-->
<?php
$name="desertor";
$user="root";
$host="localhost";
$clave = ""; // password
$conectar=mysqli_connect($host,$user,$clave,$name);
if (!$conectar) {
    die("No se establece la conexión: " . mysqli_connect_error());

    //Si el tipo de usuario es admin dar permisos de administrador
    if ($tipousuario == 'administrador') {
        echo '<div class="row">
        <div class="col-md-12">
            <a href="agregar-aprendiz.php" class="btn btn-primary">Agregar aprendiz</a>
        </div>
        </div>';
        
       
    } elseif ($tipousuario == 'Instructor') {
       
    }

    //Si el tipo de usuario es instructor dar permisos de instructor


    
}
?>  

