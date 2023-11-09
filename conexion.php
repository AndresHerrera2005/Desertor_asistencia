<!--codigo conexion.php-->
<?php
$name="id20757319_desertor";
$user="id21526024_root";
$host="localhost";
$clave = "Cc1063278581@"; // password
$conectar=mysqli_connect($host,$user,$clave,$name);
if (!$conectar) {
    die("No se establece la conexión: " . mysqli_connect_error());



    
}
?>  

