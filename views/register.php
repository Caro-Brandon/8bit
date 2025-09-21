<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendeYa - Registro</title>
    <link rel="shortcut icon" href="../img/IconoSinBorde.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/Loginn.css">
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
                <input type="password" name="contraseña" required class="login__input" id="login-pass2" placeholder=" ">
                <label type="password" name="contraseña2" class="login__label">Confirma tu contraseña</label>
                <i class="ri-eye-off-line login__eye"></i>
            </div>
        </div>

    </div>

    <button type="submit" name="boton" class="login__button">Continuar</button>

    <p class="login__register">
        ¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a>
    </p>
</form>
          
  
</body>
</html>
