<?php
require_once "includes/config.php";

if (!isset($_GET['id'])) {
    die("ID del juego no especificado.");
}

$idJuego = intval($_GET['id']);

$check = mysqli_query($conex, "SELECT * FROM videojuego WHERE idVideoJuego = $idJuego");
if (mysqli_num_rows($check) == 0) {
    die("Juego no encontrado.");
}

mysqli_query($conex, "DELETE FROM imagenes_juego WHERE idVideoJuego = $idJuego");

mysqli_query($conex, "DELETE FROM video_juego WHERE idVideoJuego = $idJuego");

$checkUso = mysqli_query($conex, "SELECT * FROM biblioteca WHERE idVideoJuego = $idJuego");
if (mysqli_num_rows($checkUso) > 0) {
    echo "<script>alert('No se puede eliminar el juego porque está en bibliotecas de usuarios.'); window.location='index_crud.php';</script>";
    exit;
}

if (mysqli_query($conex, "DELETE FROM videojuego WHERE idVideoJuego = $idJuego")) {
    echo "<script>alert('Juego eliminado correctamente'); window.location='index_crud.php';</script>";
} else {
    echo "Error al eliminar el juego: " . mysqli_error($conex);
}
?>
