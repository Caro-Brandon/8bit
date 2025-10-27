<?php
session_start();
require_once "includes/config.php"; 

if(!isset($_SESSION['IDusuario']) || empty($_SESSION['IDusuario'])){
    exit('Usuario no logueado');
}

$idUsuario = $_SESSION['IDusuario'];

if(!empty($_SESSION['cart']) && is_array($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $idJuego){
        $idJuego = (int)$idJuego; 

        $stmt = $conex->prepare("
            INSERT INTO biblioteca (IDusuario, idVideoJuego)
            SELECT ?, ? FROM DUAL
            WHERE NOT EXISTS (
                SELECT 1 FROM biblioteca WHERE IDusuario = ? AND idVideoJuego = ?
            )
        ");
        $stmt->bind_param("iiii", $idUsuario, $idJuego, $idUsuario, $idJuego);
        $stmt->execute();
        $stmt->close();
    }
}

$_SESSION['cart'] = [];

echo "ok";
