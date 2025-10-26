<?php
 
 $usuarioActual = $_SESSION['nombreDeUsuario'];

 $result = mysqli_query($conex, "SELECT * FROM videojuego");
?>

<link rel="stylesheet" href="css/index_crud.css">

<span class="titulo">Panel de Administración - Juegos</span>

<section class="crud-panel">
    <a href="add_crud.php" class="btn">Agregar Nuevo Juego</a>

    <div class="caja-crud">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Género</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Video</th>
                <th>Imágenes</th>
                <th>Creador</th>
                <th>Acciones</th>
            </tr>

            <?php while($j = mysqli_fetch_assoc($result)): 

                $videoCheck = mysqli_query($conex, "SELECT COUNT(*) as total FROM video_juego WHERE idVideoJuego = ".$j['idVideoJuego']);
                $videoRow = mysqli_fetch_assoc($videoCheck);

                $imgCheck = mysqli_query($conex, "SELECT COUNT(*) as total FROM imagenes_juego WHERE idVideoJuego = ".$j['idVideoJuego']);
                $imgRow = mysqli_fetch_assoc($imgCheck);
            ?>
            <tr>
                <td><?= htmlspecialchars($j['nombreDelJuego']) ?></td>
                <td><?= htmlspecialchars($j['genero']) ?></td>
                <td><?= htmlspecialchars($j['descripcion']) ?></td>
                <td>$<?= $j['precio'] ?></td>
                <td><?= $videoRow['total'] > 0 ? 'Sí tiene' : 'No tiene' ?></td>
                <td><?= $imgRow['total'] > 0 ? 'Sí tiene' : 'No tiene' ?></td>
                <td><?= htmlspecialchars($j['creador']) ?></td>
                <td>
                    <?php if($j['creador'] === $usuarioActual): ?>
                        <a href="edit_crud.php?id=<?= $j['idVideoJuego'] ?>">Editar</a> |
                        <a href="delete_crud.php?id=<?= $j['idVideoJuego'] ?>" onclick="return confirm('¿Eliminar este juego?')">Eliminar</a>
                    <?php else: ?>
                        <span style="color: gray;">No disponible</span>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <a href="admin_delete.php" class="btn">Quitar Admin</a>
</section>
