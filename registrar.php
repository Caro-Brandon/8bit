<!-- pongo un poco de explicaion x las dudas :v 
 aclaro que usar header()  o window.location es lo mismo pero se dirige a una pagina en especifico
 en cambio window.history.back() vuelve a la pagina anterior.
  creo que es mejor usar 
 window.history.back()-->
<?php
require_once "con_db.php";
if(isset($_POST['boton'])){ 
    if(strlen($_POST['nombreDeUsuario']) >= 1 && 
       strlen($_POST['email']) >= 1 &&
       strlen($_POST['contraseña']) >= 1)  {

        $name = trim($_POST['nombreDeUsuario']);
        $email = trim($_POST['email']);
        $contraseña = trim($_POST['contraseña']);

        // Verificar si el email o usuario ya existen

       // Verificar si el email ya existe
       $checkEmail = "SELECT * FROM usuario WHERE email='$email'";
       $resEmail = mysqli_query($conex, $checkEmail);

       // Verificar si el nombre de usuario ya existe
       $checkUser = "SELECT * FROM usuario WHERE nombreDeUsuario='$name'";
       $resUser = mysqli_query($conex, $checkUser);

       if(mysqli_num_rows($resEmail) > 0){
           echo "<script>
                   alert('El correo $email ya está en uso. Por favor usa otro.');
                   window.history.back();
                 </script>";
           exit();
       } elseif(mysqli_num_rows($resUser) > 0){
           echo "<script>
                   alert('El nombre de usuario $name ya está en uso. Por favor usa otro.');
                   window.history.back();
                 </script>";
           exit();
       }  else {
            // Insertar nuevo usuario
            $consulta = "INSERT INTO usuario(nombreDeUsuario, email, contraseña, fechaRegistro, saldo, rol) 
                         VALUES ('$name', '$email', '$contraseña', NOW(), 0, 'user' )";
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                echo "<script>alert('Usuario registrado correctamente');</script>";
                header("Location:views/login.php");
            } else {
                echo "<script>alert('Error al registrar el usuario');</script>";
                header("Location:views/register.php");
            }
        }

    } else {
        echo "<script>alert('Por favor completa todos los campos');</script>";
    }
}
?>
