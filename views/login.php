<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendeYa</title>
    <link rel="shortcut icon" href="../img/IconoSinBorde.png" type="image/x-icon" >
    <link rel="stylesheet" href="../css/Loginn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
 
<body>
  
 
<form action="../loginRegis.php" method="POST" class="login__form">
    <h1 class="login__title">Inicio de sesión</h1>
    
    <?php
    if(isset($_GET['error'])){
        $error = htmlspecialchars($_GET['error']);
        echo "<script>alert('$error');</script>";
    }
    ?>

    <div class="login__content">
        <div class="login__box">
            <i class="bx bx-lock-alt"></i>
            <div class="login__box-input">
                <input type="email" name="usuario" required class="login__input" placeholder=" ">
                <label for="" class="login__label">Gmail</label>
            </div>
        </div>

        <div class="login__box">
            <i class="ri-lock-2-line login__icon"></i>
            <div class="login__box-input">
                <input type="password" name="contraseña" required class="login__input" placeholder=" ">
                <label for="" class="login__label">Contraseña</label>
                <i class="ri-eye-off-line login__eye"></i>
            </div>
        </div>
    </div>

    <button type="submit" name="boton" class="login__button">Iniciar sesión</button>

    <p class="login__register">
        No tienes una cuenta? <a href="register.php">Registrate</a>
    </p>
</form>

           
   
 
  

  
</body>
</html> 