<?php 
   session_start();
 
  if(isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])) { $secret = 'ES_ef0f457962724209947a462b2a3acce8' 
        ; 
        $verifyResponse = file_get_contents(' https://hcaptcha.com/siteverify?secret='.$secret.'&response='.$_POST['h-captcha-response' ].'&remoteip='.$_SERVER['REMOTE_ADDR ']); 
        $responseData = json_decode($verifyResponse); 
        if($responseData->success) 
        { 
            $succMsg = 'Su solicitud se ha enviado correctamente.'; 
        } 
        else 
        { 
            $errMsg = 'Error en la verificación del robot, inténtalo de nuevo. '; 
        } 
   } 


?>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("form").submit(function (event) {
            var hcaptchaVal = $('[name=h-captcha-response]').val();
            if (hcaptchaVal === "") {
                event.preventDefault();
                alert("Por favor complete el hCaptcha");
            }
        });
    });
</script>

   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://127.0.0.1/asistencias/css/style3.css">

    <!-- Icono -->
    <link rel="icon" type="image/png" href="login.jpg" />
    <!-- Captcha -->
    <script src="https://js.hcaptcha.com/1/api.js" async defer></script>
</head>
<body>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <!-- Formulario -->
                <form class="form-signin" action="validar.php" method="POST">
                <img class="mb-4" src="logo.png" alt="" width="120px" height="120px">
                    <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>
                    <div class="form-floating">
                        <!-- Combo box de tipousuario-->
                        <select class="form-select" name="tipousuario" id="floatingSelect" aria-label="Floating label select example" required>
                            <option value="Administrador">Administrador</option>
                            <option value="Instructor">Instructor</option>
                            <option value="Aprendiz">Aprendiz</option>
                        </select>
                        <label for="floatingSelect">Rol</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" name="usuario" class="form-control" id="floatingInput" placeholder="Ingrese su usuario" required>
                        <label for="floatingInput">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Ingrese su contraseña" required>
                        <label for="floatingPassword">Contraseña</label>
                        <div class="h-captcha" id="captcha" data-sitekey="3411b19c-af18-4129-b697-54039d799cb9"></div>
                    </div>
                        <br>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesión</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
                    </div>
                   
                </form>
            </div>
        </div>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
        <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
