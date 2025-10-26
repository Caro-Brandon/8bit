<?php
require_once "includes/config.php";  

 if (!isset($_SESSION['nombreDeUsuario'])) {
    header('Location: login.php');
    exit;
}

$usuario = $_SESSION['nombreDeUsuario'];

 if (isset($_GET['respuesta'])) {
    if ($_GET['respuesta'] === 'si') {
        mysqli_query($conex, "UPDATE usuario SET rol='admin' WHERE nombreDeUsuario='$usuario'");
        $_SESSION['rol'] = 'admin';
    } elseif ($_GET['respuesta'] === 'no') {
        mysqli_query($conex, "UPDATE usuario SET rol='user' WHERE nombreDeUsuario='$usuario'");
        $_SESSION['rol'] = 'user';
    }

     header('Location: index.php');
    exit;
}

 
$section = "views/admin";
require_once "views/layout.php";
?>
