<?php
require_once "includes/config.php"; 

 if (!isset($_SESSION['nombreDeUsuario'])) {
    header('Location: login.php');
    exit;
}

$usuario = $_SESSION['nombreDeUsuario'];

 if (isset($_GET['respuesta'])) {
    if ($_GET['respuesta'] === 'si') {
         $update = "UPDATE usuario SET rol='user' WHERE nombreDeUsuario='$usuario'";
        mysqli_query($conex, $update);
        $_SESSION['rol'] = 'user';
    } elseif ($_GET['respuesta'] === 'no') {
         $update = "UPDATE usuario SET rol='admin' WHERE nombreDeUsuario='$usuario'";
        mysqli_query($conex, $update);
        $_SESSION['rol'] = 'admin';
    }

     header('Location: index.php');
    exit;
}

 
$section = "views/admin_delete";
require_once "views/layout.php";
?>