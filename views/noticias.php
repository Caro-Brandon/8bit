<?php
 $sql = "
    SELECT  v.idVideoJuego, v.nombreDelJuego, v.descripcion, v.fechaDeLanzamiento,i.url AS imagen
    FROM videojuego v
    LEFT JOIN imagenes_juego i ON v.idVideoJuego = i.idVideoJuego
    ORDER BY RAND()
    LIMIT 14
";
$resultado = $conex->query($sql);

$juegos = [];
if($resultado && $resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $juegos[] = $row;
    }
}
?>


  <link rel="stylesheet" href="css/PaginaNoticias.css">
 



    <section class="hero">
      <div class="hero-content">
        <h2>Noticias recientes</h2>
        <p>¡Descubre las noticias más recientes de este mes!</p>
      </div>
    </section>

    <section class="blog-grid">
       <div class="container">
        <div class="grid">

          <?php 
          $clases = [
            'large','fondo1',
            '','fondo2',
            '','fondo3',
            'tall','fondo4',
            'wide','fondo5',
            'large','fondo6',
            '','fondo7',
            'large','fondo8',
            '','fondo9',
            '','fondo10',
            'tall','fondo11',
            'wide','fondo12',
            'wide','fondo13'
          ];
          
          for($i=0; $i<13; $i++):
            $j = $juegos[$i] ?? null;
            $clase = $clases[$i*2]; 
          ?>
            <div class="grid-item <?= $clase ?>" style="background-image: url('<?= htmlspecialchars($j['imagen'] ?? 'img/juegos/default.jpg') ?>')">
              <a href="store_page.php?id=<?= $j['idVideoJuego'] ?? '#' ?>">
                <div class="overlay">
                  <p><span class="icon_calendar"></span> <?= $j ? date('d M Y', strtotime($j['fechaDeLanzamiento'])) : '' ?></p>
                  <h4><?= $j['nombreDelJuego'] ?? 'Título' ?></h4>
                </div>
              </a>
            </div>
          <?php endfor; ?>

        </div>
      </div>
    </section>
  </section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 
