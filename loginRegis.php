<?php
session_start();
require_once "includes/config.php";

if(isset($_POST['boton'])) {

    $usuario = trim($_POST['usuario']); 
    $contraseña = trim($_POST['contraseña']); 

    $usuario_url = urlencode($usuario);
    $contraseña_url = urlencode($contraseña);

    if(empty($usuario) || empty($contraseña)) {
        header("Location: views/login.php?error=Por+favor+completa+todos+los+campos&usuario=$usuario_url&contraseña=$contraseña_url");
        exit();
    }

    $sql = "SELECT * FROM usuario WHERE nombreDeUsuario='$usuario' OR email='$usuario'";
    $resultado = mysqli_query($conex, $sql);

    if($resultado && mysqli_num_rows($resultado) === 1) {
        $row = mysqli_fetch_assoc($resultado);

        if($contraseña === $row['contraseña']) {
            $_SESSION['nombreDeUsuario'] = $row['nombreDeUsuario'];
            $_SESSION['IDusuario'] = $row['IDusuario'];
            $_SESSION['email'] = $row['email'];

            header("Location: index.php");
            exit();
        } else {
            header("Location: views/login.php?error=Contraseña+incorrecta&usuario=$usuario_url&contraseña=$contraseña_url");
            exit();
        }

    } else {
        header("Location: views/login.php?error=Usuario+no+encontrado&usuario=$usuario_url&contraseña=$contraseña_url");
        exit();
    }

} else {
    header("Location: login.php");
    exit();
}
?>
