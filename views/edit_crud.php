<?php
if(!isset($_GET['id'])) {
    die("ID del juego no especificado.");
}
$idJuego = intval($_GET['id']);

$query = mysqli_query($conex, "SELECT * FROM videojuego WHERE idVideoJuego = $idJuego");
if(mysqli_num_rows($query) == 0) {
    die("Juego no encontrado.");
}
$juego = mysqli_fetch_assoc($query);

$videoQuery = mysqli_query($conex, "SELECT * FROM video_juego WHERE idVideoJuego = $idJuego");
$video = mysqli_fetch_assoc($videoQuery);

$imgQuery = mysqli_query($conex, "SELECT * FROM imagenes_juego WHERE idVideoJuego = $idJuego");
$imagenes = mysqli_fetch_all($imgQuery, MYSQLI_ASSOC);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim(mysqli_real_escape_string($conex, $_POST['nombre']));
    $genero = trim(mysqli_real_escape_string($conex, $_POST['genero']));
    $descripcion = trim(mysqli_real_escape_string($conex, $_POST['descripcion']));
    $rutaJuego = trim(mysqli_real_escape_string($conex, $_POST['rutaJuego']));
    $precio = floatval($_POST['precio']);
    $videoURL = trim(mysqli_real_escape_string($conex, $_POST['video']));

    $imgIdsPost = isset($_POST['img_id']) ? $_POST['img_id'] : [];
    $imgIdsPost = array_map('intval', $imgIdsPost);

    $imgQueryActual = mysqli_query($conex, "SELECT idImagen FROM imagenes_juego WHERE idVideoJuego = $idJuego");
    $imgIdsActuales = [];
    while ($fila = mysqli_fetch_assoc($imgQueryActual)) {
        $imgIdsActuales[] = intval($fila['idImagen']);
    }

    $imgEliminadas = array_diff($imgIdsActuales, $imgIdsPost);
    if (!empty($imgEliminadas)) {
        $ids = implode(',', $imgEliminadas);
        mysqli_query($conex, "DELETE FROM imagenes_juego WHERE idImagen IN ($ids)");
    }

    if(empty($nombre) || empty($genero) || empty($descripcion) || empty($rutaJuego) || $precio <= 0) {
        echo "<script>alert('Por favor completa todos los campos obligatorios.');</script>";
    } else {
        mysqli_query($conex, "UPDATE videojuego SET 
            nombreDelJuego='$nombre',
            genero='$genero',
            descripcion='$descripcion',
            rutaJuego='$rutaJuego', 
            precio='$precio'
            WHERE idVideoJuego=$idJuego");

        if(!empty($videoURL)) {
            if($video) {
                mysqli_query($conex, "UPDATE video_juego SET url='$videoURL' WHERE idVideoJuego=$idJuego");
            } else {
                mysqli_query($conex, "INSERT INTO video_juego (idVideoJuego, url) VALUES ($idJuego,'$videoURL')");
            }
        }

        if(isset($_POST['img_id']) && isset($_POST['imagenes'])) {
            foreach($_POST['imagenes'] as $index => $imgURL) {
                $imgURL = trim(mysqli_real_escape_string($conex, $imgURL));
                $imgId = intval($_POST['img_id'][$index]);
                $tipo = mysqli_real_escape_string($conex, $_POST['tipo'][$index]);
                $orden = intval($_POST['orden'][$index]);
                mysqli_query($conex, "UPDATE imagenes_juego SET url='$imgURL', tipo='$tipo', orden=$orden WHERE idImagen=$imgId");
            }
        }

        if(isset($_POST['nuevas_imagenes'])) {
            foreach($_POST['nuevas_imagenes'] as $index => $newImg) {
                $newImg = trim(mysqli_real_escape_string($conex, $newImg));
                $newTipo = mysqli_real_escape_string($conex, $_POST['nuevo_tipo'][$index] ?? '');
                $newOrden = intval($_POST['nuevo_orden'][$index] ?? 0);

                if(!empty($newImg)) {
                    mysqli_query($conex, "INSERT INTO imagenes_juego (idVideoJuego, url, tipo, orden) 
                                          VALUES ($idJuego,'$newImg','$newTipo',$newOrden)");
                }
            }
        }

        echo "<script>alert('Juego actualizado correctamente'); window.location='index_crud.php';</script>";
    }
}
?>

<link rel="stylesheet" href="css/edit_crud.css">

<section class="editar-panel">
    <div class="caja-editar">
        <span class="titulo">Editar Juego</span>

        <form method="POST" action="">
            <label>Nombre del juego:</label>
            <input type="text" name="nombre" value="<?= htmlspecialchars($juego['nombreDelJuego']) ?>" required>

            <label>Género:</label>
            <input type="text" name="genero" value="<?= htmlspecialchars($juego['genero']) ?>" required>

            <label>Descripción:</label>
            <textarea name="descripcion" rows="4" required><?= htmlspecialchars($juego['descripcion']) ?></textarea>

            <!-- 🔹 NUEVO CAMPO -->
            <label>Ruta del juego (ROM o ISO):</label>
            <input type="text" name="rutaJuego" value="<?= htmlspecialchars($juego['rutaJuego'] ?? '') ?>" 
                   placeholder="ej: emulator/games/Nombre del juego" required>
            <small>Ejemplo: emulator/games/Nombre del juego</small>

            <label>Precio:</label>
            <input type="number" name="precio" step="0.01" value="<?= $juego['precio'] ?>" required>

            <hr>
            <label>Video (URL de YouTube, usar formato embed):</label>
            <input type="text" name="video" value="<?= htmlspecialchars($video['url'] ?? '') ?>">
            <small>*Cambia "watch?v=" por "embed/" en la URL de YouTube.*</small>

            <hr>
            <label>Imágenes:</label>
            <div id="imagenes-container">
                <?php foreach($imagenes as $img): ?>
                    <div class="img-item">
                        <input type="hidden" name="img_id[]" value="<?= $img['idImagen'] ?>">
                        <input type="text" name="imagenes[]" value="<?= htmlspecialchars($img['url']) ?>" placeholder="URL de la imagen" required>
                        
                        <select name="tipo[]">
                            <option value="portada" <?= $img['tipo'] == 'portada' ? 'selected' : '' ?>>Portada</option>
                            <option value="galeria" <?= $img['tipo'] == 'galeria' ? 'selected' : '' ?>>Galería</option>
                        </select>

                        <input type="number" name="orden[]" value="<?= $img['orden'] ?>" placeholder="Orden" style="width:60px;" required>

                        <button type="button" class="btn-eliminar" onclick="this.parentElement.remove()">Eliminar</button>
                    </div>
                <?php endforeach; ?>
            </div>

            <button type="button" id="agregar-img">Agregar imagen</button>
            <div id="nuevas-imagenes"></div>

            <br><br>
            <button type="submit">Guardar Cambios</button>
        </form>
        <a class="volver" href="index_crud.php">regresar</a>
    </div>
</section>

<script>
 document.getElementById('agregar-img').addEventListener('click', function() {
    let cont = document.createElement('div');
    cont.className = 'img-item';
    cont.innerHTML = `
        <input type="text" name="nuevas_imagenes[]" placeholder="URL de la imagen" required>
        <select name="nuevo_tipo[]">
            <option value="portada">Portada</option>
            <option value="galeria">Galería</option>
        </select>
        <input type="number" name="nuevo_orden[]" placeholder="Orden" style="width:60px;" required>
        <button type="button" class="btn-eliminar" onclick="this.parentElement.remove()">Eliminar</button>
    `;
    document.getElementById('nuevas-imagenes').appendChild(cont);
});
</script>
