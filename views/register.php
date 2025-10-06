<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendeYa - Registro</title>
    <link rel="shortcut icon" href="../img/IconoSinBorde.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/Loginn.css">

    <style>
         .mensaje-error {
            margin:15px;
            background-color: #f8d7da; 
            color: #842029;          
            padding: 15px 25px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
            z-index: 9999;    
            opacity: 1;
            transition: opacity 1s ease-out;
            font-family: Arial, sans-serif;
        }

   </style>
    </style>
</head>
 
<body>
  
<form action="../registrar.php" method="post" class="login__form">
    <h1 class="login__title">Crear tu cuenta</h1>

    <div class="login__content">

         <!-- Email -->
        <div class="login__box">
              <i class="bx bx-envelope"></i>
              <div class="login__box-input">
                  <input type="email" name="email" required class="login__input" placeholder=" ">
                  <label for="" class="login__label">Email</label>
              </div>
          </div>


        <!-- Username -->
        <div class="login__box">
            <i class="bx bx-user"></i>
            <div class="login__box-input">
                <input type="text" name="nombreDeUsuario" required class="login__input" placeholder=" ">
                <label for="" class="login__label">Usuario</label>
            </div>
        </div>

       <!-- Password -->
        <div class="login__box">
            <i class="ri-lock-2-line login__icon"></i>
            <div class="login__box-input">
                <input type="password" name="contraseña" required class="login__input" id="login-pass" placeholder=" ">
                <label for="" class="login__label">Contraseña</label>
                <i class="ri-eye-off-line login__eye"></i>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="login__box">
            <i class="ri-lock-2-line login__icon"></i>
            <div class="login__box-input">
                <input type="password" name="confirmarContraseña" required class="login__input" id="login-pass2" placeholder=" ">
                <label for="" class="login__label">Confirma tu contraseña</label>
                <i class="ri-eye-off-line login__eye"></i>
            </div>
        </div>

    </div>
    
    <?php
        if(isset($_GET['error'])){
            $error = htmlspecialchars($_GET['error']);
            echo "<div class='mensaje-error'  '>$error</div>";
        }

        // Mensaje de éxito
        if(isset($_GET['success'])){
            $success = htmlspecialchars($_GET['success']);
            echo "<div class='mensaje-error' style='background-color:#d1e7dd;color:#0f5132;'>$success</div>";
        }
        ?>
        
    <button type="submit" name="boton" class="login__button">Continuar</button>

    <p class="login__register">
        ¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a>
    </p>
</form>


<script>
        document.addEventListener("DOMContentLoaded", function() {
            var mensajes = document.querySelectorAll(".mensaje-error");
            mensajes.forEach(function(mensaje){
                setTimeout(function(){
                    mensaje.style.opacity = "0";
                    setTimeout(function(){ mensaje.remove(); }, 1000);
                }, 3000);
            });
        });
        </script>
  
</body>
</html>
