<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendeYa - Registro</title>
    <link rel="shortcut icon" href="../img/IconoSinBorde.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/Loginn.css">

    <style>
        .mensaje-error {
            margin: 15px;
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
        .mensaje-exito {
            margin: 15px;
            background-color: #d1e7dd;
            color: #0f5132;
            padding: 15px 25px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
  
<form id="registerForm" class="login__form">
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
                <input type="password" name="contraseña" required class="login__input" placeholder=" ">
                <label for="" class="login__label">Contraseña</label>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="login__box">
            <i class="ri-lock-2-line login__icon"></i>
            <div class="login__box-input">
                <input type="password" name="confirmarContraseña" required class="login__input" placeholder=" ">
                <label for="" class="login__label">Confirma tu contraseña</label>
            </div>
        </div>
    </div>

    <div id="mensaje"></div>

    <button type="submit" class="login__button">Continuar</button>

    <p class="login__register">
        ¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a>
    </p>
</form>

<script>
document.getElementById("registerForm").addEventListener("submit", async function(e) {
    e.preventDefault();  

    const form = e.target;
    const formData = new FormData(form);

    const response = await fetch("../registrar.php", {
        method: "POST",
        body: formData
    });

    const data = await response.json();
    const mensajeDiv = document.getElementById("mensaje");
    mensajeDiv.innerHTML = "";

    if (data.success) {
        mensajeDiv.innerHTML = `<div class="mensaje-exito">${data.message}</div>`;
        form.reset();
        setTimeout(() => window.location.href = "login.php", 1500);
    } else {
        mensajeDiv.innerHTML = `<div class="mensaje-error">${data.message}</div>`;
    }

      setTimeout(() => {
        mensajeDiv.innerHTML = "";
    }, 3000);
});
</script>

</body>
</html>
