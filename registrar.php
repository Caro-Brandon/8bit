<!-- pongo un poco de explicaion x las dudas :v 
 aclaro que usar header()  o window.location es lo mismo pero se dirige a una pagina en especifico
 en cambio window.history.back() vuelve a la pagina anterior.
  creo que es mejor usar 
 window.history.back()-->
<?php
require_once "includes/config.php";
if(isset($_POST['boton'])){ 
    if(strlen($_POST['nombreDeUsuario']) >= 1 && 
       strlen($_POST['email']) >= 1 &&
       strlen($_POST['contraseña']) >= 1)
         {

        $name = trim($_POST['nombreDeUsuario']);
        $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);
        $confirmarContraseña = trim($_POST['confirmarContraseña']);
        
        // confirma contraseña
        if($contraseña !== $confirmarContraseña){
            header("Location: views/register.php?error=Las+contraseñas+no+coinciden");

            exit();
        }

        // Verificar si el email o usuario ya existen

       // Verificar si el email ya existe
       $checkEmail = "SELECT * FROM usuario WHERE email='$email'";
       $resEmail = mysqli_query($conex, $checkEmail);

       // Verificar si el nombre de usuario ya existe
       $checkUser = "SELECT * FROM usuario WHERE nombreDeUsuario='$name'";
       $resUser = mysqli_query($conex, $checkUser);

       if(mysqli_num_rows($resEmail) > 0){
        header("Location: views/register.php?error=El+correo+$email+ya+está+en+uso");

           exit();
       } elseif(mysqli_num_rows($resUser) > 0){
        header("Location: views/register.php?error=El+usuario+$name+ya+está+en+uso");
           exit();
       }  else {
            // Insertar nuevo usuario
            $consulta = "INSERT INTO usuario(nombreDeUsuario, email, contraseña, fechaRegistro, saldo, rol) 
                         VALUES ('$name', '$email', '$contraseña', NOW(), 0, 'user' )";
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                header("Location: views/login.php?success=Usuario+registrado+correctamente");
                exit();
            } 
            else {
                header("Location: views/register.php?error=Error+al+registrar+usuario");
                exit();
            }
        }

    } else {
        header("Location: views/register.php");
        exit();
    }
}
?>
