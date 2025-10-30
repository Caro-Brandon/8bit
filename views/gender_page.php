<?php
 if (isset($_GET['id'])) {
  $categoria = $_GET['id'];
  $categoria = $conex->real_escape_string($categoria);

   $query = "
    SELECT v.idVideoJuego, v.nombreDelJuego, v.precio, i.url AS imagen
    FROM videojuego v
    LEFT JOIN imagenes_juego i ON i.idVideoJuego = v.idVideoJuego AND i.tipo = 'portada'
    WHERE v.genero = '$categoria'
    ORDER BY v.fechaDeLanzamiento DESC
  ";

  $result = $conex->query($query);
} else {
  $result = false;
  $categoria = null;
}
?>


  <link rel="stylesheet" href="css/gender_page.css">
 
  
  <div class="container mt-5">
    <h2 class="text-center mb-4">Juegos de la categoría: <?= ucfirst(htmlspecialchars($categoria)) ?></h2>

    <div class="contenedorTarjetasPrincipales1 d-flex flex-wrap justify-content-center gap-4">
      <?php
      if ($result && $result->num_rows > 0):
        while ($row = $result->fetch_assoc()):
          $img = !empty($row['imagen']) ? htmlspecialchars($row['imagen']) : 'img/fondo/negro.jpg';
      ?>
          <div class="card estiloDeTarjeta1">
            <a href="store_page.php?id=<?= $row['idVideoJuego'] ?>" style="text-decoration: none; color: white;"> 
              <img src="<?= $img ?>" class="card-img-top" alt="<?= htmlspecialchars($row['nombreDelJuego']) ?>">
              <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($row['nombreDelJuego']) ?></h5>
                <span class="precio-gamer">$<?= htmlspecialchars(number_format($row['precio'], 0)) ?> pesos arg</span>
              </div>
            </a>
          </div>
      <?php
        endwhile;
      else:
        echo "<p class='text-center'>No se encontraron juegos en esta categoría.</p>";
      endif;
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
