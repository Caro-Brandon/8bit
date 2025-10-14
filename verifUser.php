<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if(!isset($_SESSION['nombreDeUsuario'])){
  echo "<script>
          alert('Debes iniciar sesión primero');
          window.location.href='views/login.php'; // ruta correcta desde layout
        </script>";
  exit();
}


// Evitar caché del navegador
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>