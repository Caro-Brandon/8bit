<!-- pongo un poco de explicaion x las dudas :v -->
<?php
session_start();

header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0"); 
require_once "includes/config.php";

if(isset($_POST['boton'])) {

    
    $usuario = trim($_POST['usuario']); 
    $contraseña = trim($_POST['contraseña']); 

    
    if(empty($usuario) || empty($contraseña)) {
        header("Location: login.php?error=Por+favor+completa+todos+los+campos");
        exit();
    }

    // Buscar usuario en la BD (por nombreDeUsuario o email)
    $sql = "SELECT * FROM usuario WHERE nombreDeUsuario='$usuario' OR email='$usuario'";
    $resultado = mysqli_query($conex, $sql);

    if($resultado && mysqli_num_rows($resultado) === 1) {
        $row = mysqli_fetch_assoc($resultado);

         if($contraseña === $row['contraseña']) {
            // Guardar datos en sesión
            $_SESSION['nombreDeUsuario'] = $row['nombreDeUsuario'];
            $_SESSION['IDusuario'] = $row['IDusuario'];
            $_SESSION['email'] = $row['email'];

            // Redirigir al home
            header("Location: views/layout.php");
            exit();
        } 
        else {
            // Contraseña incorrecta
            header("Location: views/login.php?error=Contraseña incorrecta");
            exit();
        }

    } 
    else {
        // Usuario no encontrado
        header("Location: views/login.php?error=Usuario no encontrado");
         
        exit();
    }

} else {
    // Si alguien entra directamente a este archivo
    header("Location: login.php");
    exit();
}
?>
