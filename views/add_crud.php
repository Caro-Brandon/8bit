<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = trim(mysqli_real_escape_string($conex, $_POST['nombre']));
    $genero = trim(mysqli_real_escape_string($conex, $_POST['genero']));
    $descripcion = trim(mysqli_real_escape_string($conex, $_POST['descripcion']));
    $precio = floatval($_POST['precio']);
    $videoURL = trim(mysqli_real_escape_string($conex, $_POST['video']));
    $rutaJuego = trim(mysqli_real_escape_string($conex, $_POST['rutaJuego'])); 
    $fecha = date('Y-m-d'); 

    if(empty($nombre) || empty($genero) || empty($descripcion) || $precio <= 0 || empty($rutaJuego)) {
        echo "<script>alert('Por favor completa todos los campos obligatorios, incluida la ruta del juego.');</script>";
    } else {
        mysqli_query($conex, "INSERT INTO videojuego (nombreDelJuego, genero, descripcion, precio, fechaDeLanzamiento, rutaJuego) 
                              VALUES ('$nombre','$genero','$descripcion','$precio','$fecha','$rutaJuego')");
        $idJuego = mysqli_insert_id($conex);

        if(!empty($videoURL)) {
            mysqli_query($conex, "INSERT INTO video_juego (idVideoJuego, url) VALUES ($idJuego,'$videoURL')");
        }

        if(isset($_POST['nuevas_imagenes'])) {
            foreach($_POST['nuevas_imagenes'] as $index => $newImg) {
                $newImg = trim(mysqli_real_escape_string($conex, $newImg));
                $newTipo = mysqli_real_escape_string($conex, $_POST['nuevo_tipo'][$index] ?? 'galeria');
                $newOrden = intval($_POST['nuevo_orden'][$index] ?? 0);

                if(!empty($newImg)) {
                    mysqli_query($conex, "INSERT INTO imagenes_juego (idVideoJuego, url, tipo, orden) 
                                          VALUES ($idJuego,'$newImg','$newTipo',$newOrden)");
                }
            }
        }

        echo "<script>alert('Juego agregado correctamente'); window.location='index_crud.php';</script>";
    }
}
?>

<link rel="stylesheet" href="css/add_crud.css">

<section class="editar-panel">
    <div class="caja-editar">
        <span class="titulo">Agregar Nuevo Juego</span>

        <form method="POST" action="">
            <label>Nombre del juego:</label>
            <input type="text" name="nombre" required>

            <label>Género:</label>
            <input type="text" name="genero" required>

            <label>Descripción:</label>
            <textarea name="descripcion" rows="4" required></textarea>

            <label>Precio:</label>
            <input type="number" name="precio" step="0.01" required>

            <hr>
            <label>Video (URL de YouTube, usar formato embed):</label>
            <input type="text" name="video">
            <small>*Cambia "watch?v=" por "embed/" en la URL de YouTube.*</small>

            <hr>
            <label>Ruta del juego (ROM/ISO):</label>
            <input type="text" name="rutaJuego" placeholder="ej: emulator/games/Nombre del juego" required>
            <small>*importarte haber cargado el juego en el visual studio code antes de subirlo*</small>

            <hr>
            <label>Imágenes:</label>
            <div id="nuevas-imagenes"></div>
            <button type="button" id="agregar-img">Agregar imagen</button>

            <br><br>
            <button type="submit">Guardar Juego</button>           
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
            <option value="galeria" selected>Galería</option>
        </select>
        <input type="number" name="nuevo_orden[]" placeholder="Orden" style="width:60px;">
        <button type="button" class="btn-eliminar" onclick="this.parentElement.remove()">Eliminar</button>
    `;
    document.getElementById('nuevas-imagenes').appendChild(cont);
});
</script>
