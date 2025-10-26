<?php
require_once "includes/config.php";

if (!isset($_GET['id'])) { die("Juego no especificado."); }
$idJuego = intval($_GET['id']);


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['IDusuario'])) {

    if (isset($_POST['delete_id'])) {
        $delete_id = intval($_POST['delete_id']);
        $idUsuario = $_SESSION['IDusuario'];
        $query = "DELETE FROM opinion WHERE idOpinion = $delete_id AND IDusuario = $idUsuario";
        mysqli_query($conex, $query);
        header("Location: store_page.php?id=$idJuego");
        exit();
    }

  
    if (isset($_POST['comentario'])) {
        $usuarioID = $_SESSION['IDusuario'];
        $comentario = trim(mysqli_real_escape_string($conex, $_POST['comentario']));
        $rating = isset($_POST['rating']) ? intval($_POST['rating']) : NULL;

        if ($comentario !== '' || $rating !== NULL) {
            $sql = "INSERT INTO opinion (IDusuario, idVideoJuego, comentario, rating) 
                    VALUES ($usuarioID, $idJuego, " . 
                    ($comentario !== '' ? "'$comentario'" : "NULL") . ", " . 
                    ($rating !== NULL ? $rating : "NULL") . ")";
            mysqli_query($conex, $sql);
            header("Location: store_page.php?id=$idJuego");
            exit();
        }
    }
}


$opinionesQuery = mysqli_query($conex, "
    SELECT o.*, u.nombreDeUsuario
    FROM opinion o
    JOIN usuario u ON o.IDusuario = u.IDusuario
    WHERE o.idVideoJuego = $idJuego
    ORDER BY o.fecha DESC
");
?>
